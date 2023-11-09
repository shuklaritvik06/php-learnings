<?php
$res = curl_init("https://jsonplaceholder.typicode.com/users");
curl_setopt($res, CURLOPT_RETURNTRANSFER, true);
echo curl_exec($res);