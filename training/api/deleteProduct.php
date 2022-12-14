<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
require_once 'query.php';

$db = new Query();

$datas = json_decode(file_get_contents("php://input"));

$nId = $datas->nId;

// delete
$result = $db->delete('products', array('nId' => array($nId, '=')));
echo $result;
