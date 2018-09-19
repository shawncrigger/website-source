<?php

return [
	'sparkpost' => [
	    'secret' => 'eccf6a83a462ec7ddc6fef58a833c5450c10f68b',
	],
	'mailgun' => [
	    'domain' => env('MAILGUN_DOMAIN'),
	    'secret' => env('MAILGUN_API_KEY'),
	],
];
