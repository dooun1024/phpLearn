<?php

/**
 * Class Game
  */
class Game {

	const PLATFORM_1 = 'PSP';
	const PLATFORM_2 = 'PSV';
	static $PLATFORM_3 = 'Switch';

	public $title = "默认游戏";
	/** @var string 发售平台 */
	public $platform;
	public $type;
	public $releaseDate;
	public $price;

	static function play(){
		echo "game over";
	}
}
?>