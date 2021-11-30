<?php
session_start();
include_once "Core/func.php";
include_once "Core/DB.php";
include_once "Core/Request.php";
include_once "Core/SocialLogin.php";
include_once "Core/KakaoLogin.php";
include_once "Models/Member.php";
$member = Member::init();