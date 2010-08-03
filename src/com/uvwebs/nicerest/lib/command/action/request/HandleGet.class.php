<?php
class nicerest_lib_command_action_request_handleGet
implements nicerest_lib_command_action_Ihandle
{
	private $request = null;

	public function __construct(nicerest_lib_command_action_Request $request)
	{
		$this->request = $request;
	}

	public function execute()
	{
		$this->request->get();
	}
}

