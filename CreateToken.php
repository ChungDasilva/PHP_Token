<?php
require("jwt.php");
$token = array();
$token["id"] = 10;
$token["hoten"] = "chung";
$token["email"] = "chung12dt@gmail.com";

$jsonWebToken = JWT::encode($token, "MA_BI_MAT");
echo JsonHelper::getJson("token", $jsonWebToken);
