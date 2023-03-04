<?php
	require_once("services/DetailService.php");
	
	class DetailController{
	    public function index(){

			//tương tác với service
			$detailService = new DetailService();   
			$detail = $detailService->__construct();
			//tương tác với view 
	        include("views/detail/detail.php");
	    }
	}
?>