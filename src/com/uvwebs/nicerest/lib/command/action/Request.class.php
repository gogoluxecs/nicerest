<?php
class nicerest_lib_command_action_Request
{
	/**
	 * Restriction for Post request method
	 *
	 * @return Void
	 */
	public function post()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
		{
			header("HTTP/1.0 404 Not Found");
			throw new Exception('Request: post method required');
		}
	}

	/**
	 * Restriction for get request method
	 *
	 * @return Void
	 */
	public function get()
	{
		if($_SERVER['REQUEST_METHOD'] != 'GET')
		{
			header("HTTP/1.0 404 Not Found");
			throw new Exception('Request: get method required');
		}
	}
}

