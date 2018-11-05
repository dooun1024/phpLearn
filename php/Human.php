<?php
class Human {
	public $name;
	public $age;
	public  $likeEat = "肉";
	private $drive = "毛泽东思想";
	protected $konfu = "一阳指";


    /**构造函数 */
    public function __construct($name="",$age="",$likeEat="肉"){
        $this->name = $name;
        $this->age = $age;
        $this->likeEat = $likeEat;
    } 

    public function eat($food){
        echo "我喜欢吃{$this->likeEat}，但是我正在吃{$food}\n";
    }

    private function cook() {
    	echo "做红烧肉";
	}
}
?>