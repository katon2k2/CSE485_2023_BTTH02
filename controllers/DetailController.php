<?php
	define("PATCH_ROOT_DETAILCONTROLLER", dirname(__FILE__, 2));
	require_once(PATCH_ROOT_DETAILCONTROLLER . "/services/DetailService.php");
	
	class DetailController{
	    public function index(){

			//tương tác với service
			$detailService = new DetailService();   
			$detail = $detailService->__construct();
			//tương tác với view 
	        include(PATCH_ROOT_DETAILCONTROLLER . "/views/detail/detail.php");
	    }
	}
?>