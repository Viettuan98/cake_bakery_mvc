<?php 
	//gan cac gia tri mac dinh
	$area = "Frontend";
	$controller = "Home";
	$action = "index";
	//lay bien $area truyen tu url
	$area = isset($_GET["area"]) ? $_GET["area"] : $area;
	//lay bien $controller truyen tu url
	$controller = isset($_GET["controller"]) ? $_GET["controller"]:$controller;
	//lay bien $action truyen tu url
	$action = isset($_GET["action"]) ? $_GET["action"]:$action;
	//gan duong dan de include file controller (de load MVC)
	$fileController = "Mvc/$area/Controllers/$controller"."Controller.php";
	if(file_exists($fileController)){
		include $fileController;
		//khoi tao object cua class
		//gan them chu Controller vao cuoi bien $controller
		$controller = $controller."Controller";
		if(class_exists($controller)){
			$obj = new $controller();
			//goi den action
			if(method_exists($obj, $action))
				$obj->$action();
			else
				die("Method $action not exists");
		}else
			die("Controller $controller not exists");		
	}
	//echo $fileController;
 ?>