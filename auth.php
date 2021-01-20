<?php

//生成授权
$uid =123;
$user_name = 'lisi';

$token1 =sha1($uid.$user_name.mt_rand(1,999999).time());
$token2 = strrev($token1);

$response =[
    'errno'=>0,
    'msg'=> 'ok',
    'data' =>[
        'token' =>$token2
    ]
];

echo json_encode($response);