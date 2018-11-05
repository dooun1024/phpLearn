<?php
// 接口
interface Actor {
	public function act($type);
}


// 实现接口
class ActiveActor implements Actor{

	public function act($type){
		echo "我会演{$type}类型的";
	}
}
