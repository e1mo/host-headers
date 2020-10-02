<?php

$_SERVER_TEMPLATE = [
	'HTTP_HOST' => '',
	'HTTP_USER_AGENT' => '',
	'HTTP_REFERER' => '',
	'SERVER_PROTOCOL' => 'http',
	'SERVER_NAME' => ''
];
$srv = array_merge($_SERVER_TEMPLATE, $_SERVER);

return [
	'X-Http-Host' => $srv['HTTP_HOST'],
	'X-Http-UserAgent' => $srv['HTTP_USER_AGENT'],
	'X-Http-Referer' => $srv['HTTP_REFERER'],
	'X-Http-ServerName' => $srv['SERVER_NAME'],
	'X-Http-Protocol' => $srv['SERVER_PROTOCOL']
];

exit();

