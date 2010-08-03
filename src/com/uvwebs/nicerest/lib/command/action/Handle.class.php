<?php
class nicerest_lib_command_action_Handle
{
	private $docCommentProperties = array();
	private $restAction = null;

	public function __construct($restAction)
	{
		$this->restAction = $restAction;
	}

	public function execute()
	{
		// create doc comment parser
		$d = nicerest_lib_factory_action_reflection_Parser::
			create($this->restAction, 1);

		foreach($d->parse() as $option)
		{
			$options = explode('=', $option);

			$optionValue = isset($options[1]) ? $options[1] : '';

			switch($options[0])
			{
				case 'RequestMethod':
					$invoke = new nicerest_lib_command_action_request_Invoke($optionValue);
					$invoke->call();
					break;

				case 'Response':
					$invoke = new nicerest_lib_command_action_response_Invoke($optionValue);
					$invoke->call();
					break;
			}
		}
	}
}

