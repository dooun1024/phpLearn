<?php

class Connector {
	public $servername = "localhost";
	public $username = "root";
	public $password = null;
	public $dbname = "game_data";

	/** @var mysqli  */
	public $conn = null;

	/** @var string 最近的一个错误消息 */
	public $lastError;

	// 创建连接
	public function getConnect(){
		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

		if ($conn->connect_error) {
			return false;
		} else {
			$this->conn = $conn;
			return $conn;
		}
	}

	// 关闭连接
	public function close(){
		$this->conn->close();
	}

	/**
	 * 查询结果集
	 * @param $sql string 要执行的sql语句
	 * @return mixed
	 */
	public function find($sql){
		$this->getConnect();

		$result = $this->conn->query($sql);
		$datas = $result->fetch_all(MYSQLI_ASSOC);

		$this->conn->close();
		return $datas;
	}


	/**
	 * 执行删除
	 * @param $sql string 要执行的sql语句
	 * @return mixed 如果成功返回影响行数，如果失败，返回false
	 */
	public function delete($sql){
		$this->getConnect();

		if ($this->conn->query($sql) === true) {
			$rows = $this->conn->affected_rows;
			$this->conn->close();
			return $rows;
		} else {
			// 存储失败信息
			$this->lastError = $this->conn->error;
			$this->conn->close();
			return false;
		}
	}

	/**
	 * 执行保存
	 * @param $sql
	 */
	public function save($sql){
		$this->getConnect();

		$result = $this->conn->query($sql);

		if ($result !== false){
			// 获取最近插入数据的id
			$lastId = mysqli_insert_id($this->conn);
			$this->conn->close();
			return $lastId;
		} else {
			$this->conn->close();
			return false;
		}

	}

	/**
	 * 得到最近的一个错误消息
	 */
	public function getLastError(){
		return $this->lastError;
	}


}
