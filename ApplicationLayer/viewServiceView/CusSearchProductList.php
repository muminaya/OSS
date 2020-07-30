<?php
require __DIR__ . '/../../src/bootstrap.php';
require_once __DIR__ . '/../../BusinessServiceLayer/viewServiceController/viewServiceController.php';
session_start();
if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $_SESSION["query"] = $query;
} else $query = $_SESSION["query"];
$ser = new viewServiceController();
$data = $ser->viewSearchList($query);

?>