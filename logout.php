<?php
require_once 'classes/Utils.php';

session_start();
$_SESSION = [];
session_destroy();

header('index.php');