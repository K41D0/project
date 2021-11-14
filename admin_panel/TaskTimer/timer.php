<?php

require_once('TaskTimer.php');

$TaskTimer = new TaskTimer();

$json = file_get_contents('php://input');
$data = json_decode($json);

function json($data)
{
    //make sure return type is json
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    exit();
}

//if not logged in, deny
//if (!isset($_SESSION['login_type'])) json(['success' => false, 'data' => 'Unautorized']);

// if the request is not a post method, deny the request
if ($_SERVER['REQUEST_METHOD'] !== 'POST')  json(['success' => false, 'data' => 'Method Mismatch']);


if (!isset($data->target))  json(['success' => false, 'data' => 'target is missing']);

switch ($data->target) {
    case 'set_time':
        json($TaskTimer->setTime($data->id));
        break;
    case 'stop_time':
        json($TaskTimer->stopTime($data->id));
        break;
    default:
        json(['success' => false, 'data' => 'target is unknown']);
        break;
}
