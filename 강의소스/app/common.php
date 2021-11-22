<?php
header("Access-Control-Allow-Origin: *"); // CORS
header("Access-Control-Allow-Headers: *"); // CORS
header("Content-Type: application/json; charset=utf-8");
include "lib/DB.php"; // DB 클래스
include "lib/Member.php"; // Member 클래스
include "lib/Kanban.php"; // Kanban 클래스

//$in = $_REQUEST?$_REQUEST:[];
$in = $_REQUEST ?? [];