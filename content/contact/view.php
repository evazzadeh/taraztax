<?php
namespace content\contact;


class view extends \content_support\ticket\contact_ticket\view
{

	public static function config()
	{
		\dash\data::page_title(T_("Contact Us"));
		\dash\data::page_desc(T_("We do our best to improve our service quality."));
		\dash\data::bodyclass('unselectable');
		self::codeurl();
	}
}
?>