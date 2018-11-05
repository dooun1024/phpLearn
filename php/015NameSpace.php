<?php
namespace {

	$human1 = new \xingyun186\xZone\human;

	$human2 = new \xingyun186\yZone\human();

	echo "<pre>";
	print_r($human1);
	print_r($human2);
	echo "</pre>";

}


namespace xingyun186\xZone {

	const OK = "可以的<br>";
	echo OK;

	class human{
		var $name="xZone";
	}

}


namespace xingyun186\yZone {

	const OK = "you are good<br>";
	echo OK;

	class human{
		var $name="yZone";
	}

}

namespace xingyun186{
	$human1 = new xZone\human;
	$human1->name = "父文件夹里的human";


	echo "<pre>";
	print_r($human1);
	echo "</pre>";
}



