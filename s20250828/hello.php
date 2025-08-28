<?php
header("Access-Control-Allow-Origin: *");
$data = [
    'id' => 0,
    'name' => 'kai',
    'msg' => '全力以赴'
];

echo json_encode($data);
