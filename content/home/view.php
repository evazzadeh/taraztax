<?php
namespace content\home;

class view
{
	public static function config()
	{
		$url    = root. 'public_html/files/data/staticvar.txt';
		$result = @\dash\file::read($url);

		$temp            = [];
		$temp['qom']     = 16000;
		$temp['mashhad'] = 2000;
		$temp['karbala'] = 110;

		if(is_string($result))
		{
			$result          = explode("\n", $result);
			$temp['qom']     = isset($result[0]) ? $result[0] : null;
			$temp['mashhad'] = isset($result[1]) ? $result[1] : null;
			$temp['karbala'] = isset($result[2]) ? $result[2] : null;
		}
		\dash\data::staticvar($temp);

		\dash\data::salavatShomar(\lib\db\salavats::shomar());
	}
}
?>