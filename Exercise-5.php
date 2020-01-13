<?php
/**
 * Created by PhpStorm.
 * User: Asa
 * Date: 1/12/2020
 * Time: 4:53 PM
 */
//whether ip is shared from the internet
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
//whether ip is from proxy
elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
//whether ip is from remote address
else{
    echo 'Remote addr: ';
    $ip_address = $_SERVER['REMOTE_ADDR'];
}
echo $ip_address;
