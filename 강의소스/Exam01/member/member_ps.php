<?php
include "../_common.php";
include_once "../Models/Member.php";
$member = Member::getInstance();
$in = Request::all();
try {
	switch(Request::get("mode")) {
		/** 회원 가입 처리 */
		case "join" : 
			$member->join($in);
			break;
	}
} catch (Exception $e) {
	msg($e->getMessage());
}