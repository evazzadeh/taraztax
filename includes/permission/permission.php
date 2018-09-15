<?php

// self::$perm_list[201] =
// [
// 	'caller'      => 'add:team',
// 	'title'       => T_("Add new team"),
// 	'desc'        => T_("Add new team"),
// 	'group'       => 'plan_1',
// 	'need_check'  => true,
// 	'need_verify' => true,
// 	'enable'      => true,
// 	'parent'      => null, // 1,5
// ];

/*admin:view*/
self::$perm_list[201] =
[
	'caller' => 'admin:view',
	'title'  => T_("Can view the admin page"),
	'group'  => 'admin',
];

?>