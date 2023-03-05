<?php
	define('PATCH_ROOT_ADMINCONTROLLER', dirname(__FILE__, 2));
	require_once(PATCH_ROOT_ADMINCONTROLLER . "/services/UserService.php");
	class AdminController{
	    public function index(){
	    	$us = new UserService();
	        include(PATCH_ROOT_ADMINCONTROLLER .  "/views/admin/index.php");
	    }
	}
?>