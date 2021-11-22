<?php
include_once "../common.php"; // 공통 정의 부분
/** 
* 작업 추가, 수정, 삭제 처리 
*
*/
$kanban = Kanban::getInstance();
try {
	switch(Request::get("mode")) {
		/** 작업 추가 */
		case "add" : 
			$idx = $kanban->addWork($in);
			break;
		/** 작업 수정 */
		case "edit" : 
			$result = $kanban->editWork($in);
			break;
		/** 작업 삭제 */
		case "delete" : 
			
			$result = $kanban->deleteWork(Request::get("idx"));
			break;
		/** 작업 목록 */
		case "getList" : 
			
			$memNo = Request::get("memNo", 0);
			$status = Request::get("status", "ready");
			$result = $kanban->getList($memNo, $status);
			
			break;
		/** 작업 내용 */
		case "get" : 
			$idx = Request::get("idx");
			
			$result = $kanban->get($idx);
			break;
		default :
			if (Request::get("origin") != 'front') {
				
				exit;
			}
	}
} catch (Exception $e) {
	$message = $e->getMessage();
}

include_once "../output.php";