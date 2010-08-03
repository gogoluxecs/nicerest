<?php
/**
 * @RequestMethod = get
 * @Response = xml
 *
 */
class nicerest_action_basic
{
	public function execute()
	{
		echo '<root>';
		echo '<response>ok</response>';
		echo '</root>';
	}
}

