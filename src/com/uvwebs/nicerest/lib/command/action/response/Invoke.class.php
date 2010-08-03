<?php
class nicerest_lib_command_action_response_Invoke
{
	private $option = '';

	public function __construct($option = '')
	{
		$this->option = strtolower($option);
	}

	public function call()
	{
		$receiver = new nicerest_lib_command_action_Response();

		switch($this->option)
		{
			case 'json':
				$receiver->json();
				break;

			case 'xml':
				$receiver->xml();
				break;

			case 'html':
				$receiver->html();
				break;
		}
	}
}

