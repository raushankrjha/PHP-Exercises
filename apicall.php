<?php
$url = 'http://localhost/API/allusers';
$arr = json_decode(file_get_contents($url), true);
//var_dump($arr);
//echo $arr[2]['ID'];
//echo $arr[2]['Name'];

foreach($arr as $user){

    echo $user['ID'].': '.$user['Name'].'<b>  Email:  '.$user['EmailID'].'</b><br/>';
 }
 ?>