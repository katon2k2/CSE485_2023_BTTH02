<?php
	include("services/ArticleHomeService.php");
	class HomeController{
	    public function index(){

			//tương tác với service
			$articleHomeService = new ArticleHomeService();
			$articlehome = $articleHomeService->getAllArticleHome();
			//tương tác với view 
	        include("views/home/index.php");
	    }
	}
?>