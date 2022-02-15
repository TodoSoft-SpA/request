<?php

include '../../src/Request.php';

use Todosoft\Request;

$request = Request::capture();

echo json_encode($request->all());