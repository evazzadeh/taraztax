<?php
namespace content;

class view
{
	public static function config()
	{
		\dash\data::site_title(T_("Taraz Tax"));
		\dash\data::site_desc(T_("Do your tax job in Iran"));
		\dash\data::site_slogan(T_('be relax with us in your tax problems!'));

		\dash\data::page_desc(\dash\data::site_desc(). ' | '. \dash\data::site_slogan());

		\dash\data::page_copyright(
			T_('© :year :site. All right reserved.',
			[
				'year' => \dash\date::tdate(false, "year", true),
				'site' => "<a href='". \dash\url::base(). "' title='". \dash\data::site_desc() ."'>". \dash\data::site_title(). "</a>"
			]
		));

	}
}
?>