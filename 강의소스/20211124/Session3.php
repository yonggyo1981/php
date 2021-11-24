<?php
session_start();
unset($_SESSION['key2']);

$_SESSION['key1'] = '(수정)값1';