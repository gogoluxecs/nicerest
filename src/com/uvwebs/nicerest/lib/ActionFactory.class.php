<?php
class nicerest_lib_ActionFactory
{
	static public function createAction($actionName)
	{
		$restAction = new $actionName();

	    $a = new nicerest_lib_adapter_action_Execute($restAction);
	    $a->execute();
	}
}

