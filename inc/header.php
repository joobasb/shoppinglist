<?php

header('Access-Control-Allow-Origin: * ');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Accept,Content-Type', 'Access-Control-Allow-Header');
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS'){
    return 0;
};

