<?php
$id=$_GET['id'];
$url = $id;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_NOBODY, 1); //不返回 BODY 页面内容
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //不直接输出
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); //返回最后的 Location
curl_exec($ch);
$info = curl_getinfo($ch,CURLINFO_EFFECTIVE_URL);
curl_close($ch);
header('Location:'.$info);
?>