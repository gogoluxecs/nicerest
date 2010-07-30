<?php
class nicerest_action_basic
{
	public function execute()
	{
		echo 'Action basic test';
		echo '<br />';
		var_dump($_REQUEST);
	}
}

