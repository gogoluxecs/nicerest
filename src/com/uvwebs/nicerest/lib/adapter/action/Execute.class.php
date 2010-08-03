<?php
class nicerest_lib_adapter_action_Execute
implements nicerest_lib_adapter_action_Iexecute
{
	const ACTION_METHOD = 'execute';

	private $restAction = null;

	public function __construct($restAction)
	{
		$this->restAction = $restAction;
	}

	/**
	 * Global wrapping of execute method
	 *
	 * @return Void
	 */
	public function execute()
	{
		if(!method_exists($this->restAction, self::ACTION_METHOD))
			return null;

		//handle based on Doc comments
		$handle = new nicerest_lib_command_action_Handle($this->restAction);
		$handle->execute();

		// executes method
		$this->restAction->{self::ACTION_METHOD}();
	}
}

