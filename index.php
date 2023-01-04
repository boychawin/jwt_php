<?php
require_once 'lib/jwt/jwt_utils.php';

function create_jwt($payload, $exp)
{
    $headers = array('alg' => 'HS256', 'typ' => 'JWT');
    // $payload =  array('username' => $username, 'password' => $password, 'exp' => (time() + 60 * 60 * 24 * $exp));
    $jwt = generate_jwt($headers, $payload);

    return $jwt;
}
$payload = array('email' => "boychawin.com@gmail.com",'username' => "boychawin", 'password' => "123456",'exp' => (time() + 60 * 60 * 24 * $exp));
$bearer_token = create_jwt($payload, 30);
// print_r("jwt ==> ".$bearer_token);
echo "\n";
// $bearer_token = get_bearer_token();
$is_jwt_valid = is_jwt_valid($bearer_token);
$res = json_decode($is_jwt_valid);
print_r($res);
// print_r($res->username);
echo "\n";
