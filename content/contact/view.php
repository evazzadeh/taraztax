<?php
namespace content\contact;


class view
{

	public static function config()
	{
		\dash\data::page_title(T_("Contact Us"));
		\dash\data::page_desc(T_("We do our best to improve khadije's service quality."));
		\dash\data::bodyclass('unselectable');
	}
}
?>