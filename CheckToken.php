<?php
$token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MTAsImhvdGVuIjoiY2h1bmciLCJlbWFpbCI6ImNodW5nMTJkdEBnbWFpbC5jb20ifQ.c9gkCYvn9YUACpjP4xdF0BUGAqmRj2ee7kv0lczJPyo";
require("jwt.php");
$secretKey = "MA_BI_MAT";
try {
	$json = JWT::decode($token, $secretKey, true);
	echo json_encode($json);
} catch (Exception $e) {
	echo $e->getMessage();
}


