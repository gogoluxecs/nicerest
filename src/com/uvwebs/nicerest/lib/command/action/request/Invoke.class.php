<?php
class nicerest_lib_command_action_request_Invoke
{
	private $option = '';

	public function __construct($option = '')
	{
		$this->option = strtolower($option);
	}

	/**
	 * Calls the commands
	 *
	 * @return Void
	 */
	public function call()
	{
		$receiver = new nicerest_lib_command_action_Request();
		switch($this->option)
		{
			case 'get':
				$command = new nicerest_lib_command_action_request_HandleGet($receiver);
				$command->execute();
				break;

			case 'post':
				$command = new nicerest_lib_command_action_request_HandlePost($receiver);
				$command->execute();
				break;
		}
	}
}

