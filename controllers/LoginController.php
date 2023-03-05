<?php
	define('PATCH_ROOT_LOGINCONTROLLER', dirname(__FILE__, 2));
	require_once(PATCH_ROOT_LOGINCONTROLLER . "/services/UserService.php");
	class LoginController{
	    public function index(){
	        include(PATCH_ROOT_LOGINCONTROLLER . "/views/login/login.php");
	    }

	    public function login(){
		    if(isset($_POST['username']) AND isset($_POST['password'])){
				$us = new UserService();
				$otherUser = new User($_POST['username'], $_POST['password']);
		        if($us->checkUser($otherUser)){
		        	header("Location: index.php?controller=admin");
		        }
		        else
		        	header("Location: index.php?controller=login");
			}
			else{
				header("Location: index.php?controller=login");
			}    
		        
	    }
	}
?>