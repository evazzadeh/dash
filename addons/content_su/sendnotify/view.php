<?php
namespace addons\content_su\sendnotify;

class view extends \addons\content_su\main\view
{
	public function config()
	{
		parent::config();
		$mobile_or_id = \lib\utility::get('user');
		if($mobile_or_id)
		{
			$this->data->user_info = $this->model()->connection_way($mobile_or_id);
		}

		$send_notify_text = \lib\session::get('send_notify_text');

		if($send_notify_text)
		{
			$this->data->send_notify_text = $send_notify_text;
			// \lib\session::set('send_notify_text', null);
		}

	}
}
?>