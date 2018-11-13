<?php
namespace content;

class view
{
	public static function config()
	{
		\dash\data::site_title('شرکت حسابداری ترازسازان نفیس');
		\dash\data::site_desc('دیگر نیازی نیست زمان و هزینه‌ زیادی را صرف محاسبات و مشکلات حسابداری کنید. کارشناسان خبره ما این مشکل را برای شما حل کرده‌اند.');
		\dash\data::site_slogan('سرو کله زدن با مالیات رو به ما بسپارید');

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