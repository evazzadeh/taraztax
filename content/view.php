<?php
namespace content;

class view
{
	public static function config()
	{
		\dash\data::site_title(T_("Khadije Charity"));
		\dash\data::site_desc(T_("Executor of first pilgrimage to the Ahl al-Bayt"));
		\dash\data::site_slogan(T_('Karbala'). ' - '. T_('Mashhad'). ' - '. T_('Qom'));

		\dash\data::page_desc(\dash\data::site_desc(). ' | '. \dash\data::site_slogan());

		\dash\data::page_copyright(
			T_('© :year :site. All right reserved.',
			[
				'year' => \dash\date::tdate(false, "year", true),
				'site' => "<a href='". \dash\url::base(). "' title='". \dash\data::site_desc() ."'>". \dash\data::site_title(). "</a>"
			]
		));

		\dash\data::hadithList(\lib\app\need::active_list('hadith'));


		// for pushstate of main page
		// \dash\data::template_xhr('content/main/layout-xhr.html');
	}
}
?>