<?php
namespace content\home;


class model
{
	public static function post()
	{
		if(\dash\request::post('salavat'))
		{
			\dash\temp::set('force_stop_visitor', true);
			$count =\lib\db\salavats::befrest();
			// \dash\notif::info(T_("Allahouma sali ala mohamed wa ali muhammad"),
			// 	[
			// 		'position'=> 'bottomCenter',
			// 		'timeout' => '3000',
			// 		'icon' => 'sf-heart',
			// 		'theme' => 'dark',
			// 		'iconColor'=> '#020456'
			// 	]
			// );
			\dash\notif::result($count);
			return;
		}

		$meta =
		[
			'turn_back'   => \dash\url::base(). '/doners',
			'other_field' =>
			[
				// 'hazinekard' => $way,
				// 'niyat'      => $niyat,
				'fullname'   => \dash\user::login('displayname'),
				'donate'     => 'cash',
				'doners'     => 0,
			]
		];

		\dash\utility\payment\pay::start(\dash\user::id(), 'asanpardakht', \dash\request::post('quickpay'), $meta);
	}

}
?>