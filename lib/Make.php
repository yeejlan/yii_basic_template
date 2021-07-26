<?php

use Illuminate\Container\Container;

trait Make
{
	public static function make() {
		return Container::getInstance()->make(self::class);
	}
}