<?php
namespace lib;
/**
 * code if life or no
 */
class code
{
	public static function exit()
	{

		self::force_exit();
	}

	/**
	 * exit the code
	 */
	public static function force_exit()
	{
		exit();
	}


	/**
	 * var_dump data
	 *
	 * @param      <type>  $_data  The data
	 */
	public static function dump($_data, $_pre = false)
	{
		if($_pre)
		{
			echo '<pre>';
		}

		var_dump($_data);

		if($_pre)
		{
			echo '</pre>';
		}
	}


	/**
	 * print_r data
	 */
	public static function print($_data, $_pre = false)
	{
		if($_pre)
		{
			echo '<pre>';
		}

		print_r($_data);

		if($_pre)
		{
			echo '</pre>';
		}
	}


	/**
	 * eval code
	 */
	public static function eval($_string)
	{
		eval($_string);
	}



	/**
	 * sleep code
	 *
	 * @param      <type>  $_seconds  The seconds
	 */
	public static function sleep($_seconds)
	{
		sleep($_seconds);
	}
}
?>