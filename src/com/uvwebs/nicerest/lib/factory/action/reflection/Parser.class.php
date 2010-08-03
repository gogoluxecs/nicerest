<?php
class nicerest_lib_factory_action_reflection_Parser
{
	const TYPE_COMMENT = 1;

	static public function create($restAction, $type)
	{
		switch($type)
		{
			case self::TYPE_COMMENT:
				return new nicerest_lib_factory_action_reflection_DocCommentProperties($restAction);
				break;
		}
	}
}

