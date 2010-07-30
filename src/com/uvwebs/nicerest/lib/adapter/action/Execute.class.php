<?php
class lib_adapter_action_Execute
implements lib_adapter_action_Iexecute
{
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
		if(!method_exists($this->restAction, 'execute'))
			return null;

		$this->restAction->execute();
		//TODO read the comments using reflection and set apopriate header
	}
}

