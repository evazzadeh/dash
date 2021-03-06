<?php
namespace addons\content_su\tools\info;

class controller extends \addons\content_su\main\controller
{
	public function _route()
	{
		parent::_route();
		$this->showInfo();
		$this->get()->ALL();
	}


	function showInfo()
	{
		$name = \lib\router::get_url(2);

		if(!$name)
		{
			return;
		}

		switch ($name)
		{
			case 'php':
				phpinfo();
				break;


			case 'server':
				$exist = true;
				if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' && !class_exists("COM"))
				{
					ob_start();
					echo "<!DOCTYPE html><meta charset='UTF-8'/><title>Extract text form twig files</title><body style='padding:0 1%;margin:0 1%;direction:ltr;overflow:hidden'>";

					echo "<h1>". T_("First you need to enable COM on windows")."</h1>";
					echo "<a target='_blank' href='http://www.php.net/manual/en/class.com.php'>" . T_("Read More") . "</a>";
					break;
				}
				\lib\utility\tools::linfo();

				$this->display_name	= 'content_su/tools/raw-all.html';
				break;


			default:
				echo "Nothing!";
				break;
		}

		\lib\code::exit();
	}
}
?>