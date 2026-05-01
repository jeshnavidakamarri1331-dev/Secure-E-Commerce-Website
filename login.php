<?php

$domain = "dev-tzlmbbgvrnyrc4gh.us.autho.com";

 $client_id = "OYYkLmuaomwm3HR8NZ1FDvvVzatn7J1ES";

$redirect_uri= "https://digitalartandprintstore.ct.ws/callback.php";


$url = "https://$domain/authorize?


response_type=code&client_id=$client_id&redirect_uri=$redirect_uri&scope=openid profile email";

header("Location: $url");

 exit();
