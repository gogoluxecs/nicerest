<?php
class nicerest_lib_command_action_Response
{
	public function json()
	{
		header('Content-type: application/json; charset=UTF-8');
	}

	public function xml()
	{
		header('Content-type: text/xml; charset=UTF-8');
	}

	public function html()
	{
		header('Content-type: text/html; charset=UTF-8');
	}
}

