<?php
interface nicerest_lib_adapter_action_Iexecute
{
	/**
	 * Executes an action independant from server's request method
	 *
	 * @return Return
	 */
	public function execute();
}

