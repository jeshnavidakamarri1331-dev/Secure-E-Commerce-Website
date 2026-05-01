<?php

 session start();

$domain = "dev-tzlmbbgvrnyrc4gh.us.autho.com";

$client_id = "OYYkLmuaHR8NZIFDvvVzatn7JIES";

$client_secret = "vfYuNM3oTFt6p4IGfNrtjlr18txyPm8GkTaE6cHHspSzGQ9cRCon_4SL7mRTgolz";

 $code = $_GET['code'];

 $token_url = "https://$domain/oauth/token";

 $data = [

"grant_type" => "authorization_code",

"client_id" => $client_id,

 "client_secret" => $client_secret,

"code" => $code,

 "redirect_uri" => "https://digitalartandprintstore.ct.ws/callback.php"

];

$options = [

   "http" => [ 

  "header"> "Content-type: application/json", 

   "method" => "POST", 

    "content" => json_encode($data), 

    ]
];

$context stream_context_create($options);
