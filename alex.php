<?php
/**
 * PRO_NAME:iservertvs
 * FileName:alex.php
 * Author: Shell
 * User: iServer
 * Date: 2017/3/9
 * Time: 9:16
 */


$host = '127.0.0.1';
$port = 2345;


set_time_limit(0);

$socket = socket_create(AF_INET,SOCK_STREAM,0 ) or die ("Can't not create thesocket ");

$result = socket_bind($socket,$host,$port) or die("Can't bind it ");

//start listen
$result = socket_listen($socket,3) or die ("can't set up listen ");



//另外一个Socket来处理通信
$spawn = socket_accept($socket) or die("here is right ");


$input = socket_read($spawn,1024) or die("receive it ");

echo "<pre>";
print_r($input);



$output = strrev($input);

echo "<pre>";
print_r($output);

socket_write($socket,$output,strlen($output)) or die("debug");

socket_close($spawn);
socket_close($socket);

echo "<pre>";
print_r($result);

die;


$a_sign="api=true&share_friends[]=10453343&share_text=Pitbull & J Balvin - Hey Ma ft Camila Cabello (Spanish Version | The Fate of the Furious: The Album) - YouTube&share_title=Pitbull & J Balvin - Hey Ma ft Camila Cabello (Spanish Version | The Fate of the Furious: The Album) - YouTube&share_type=0&share_url=https://m.youtube.com/watch?v=UWLr2va3hu0&token=4102b2043996fef511b5e63eb6c597fd&username=qiu@outlook.com&app_key=!@iserverTV@!";
$sign = strtolower(md5($a_sign));
echo $sign;
die;
$max = 100000;
$timeparts = explode(' ',microtime());
$stime = $timeparts[1].substr($timeparts[0],1);
$i = 0;
while($i < $max) {
    rand(10000000,99999999);
    $i++;
}
$timeparts = explode(' ',microtime());
$etime = $timeparts[1].substr($timeparts[0],1);
$time = $etime-$stime;
echo "{$max} random numbers generated in {$time} seconds using rand();<br/>";

$timeparts = explode(' ',microtime());
$stime = $timeparts[1].substr($timeparts[0],1);
$i = 0;
while($i < $max) {
    mt_rand(10000000,99999999);
    $i++;
}
$timeparts = explode(' ',microtime());
$etime = $timeparts[1].substr($timeparts[0],1);
$time = $etime-$stime;
echo "{$max} random numbers generated in {$time} seconds using mt_rand(); <br/>";
