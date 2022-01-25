<?php

$link = mysqli_connect("localhost", "root", "","jaka");

$user = $_REQUEST['user'];    
$sql = mysqli_query($link, "SELECT userid, phone FROM users WHERE name = '".$user."' ");
$row = mysqli_fetch_array($sql);

json_encode($row);
die;