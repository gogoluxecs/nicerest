<?php
class lib_ActionFactory
{
	static public function createAction($actionName)
	{
		$restAction = new $actionName();

	    $a = new lib_adapter_action_Execute($restAction);
	    $a->execute();
	}
}

