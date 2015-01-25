<?php

class FrontController extends BaseController {
	public function getHomepage(){

		$regional=Regional::all();

		$data 	= array(
			'content'	=> "Hello World",
			'regional'	=> $regional
		);
		return View::make("front/homepage",$data);
	}

 	public function getTerkini(){
 		return View::make("front/terkini");
 	}

 	public function getTerasa(){
 		return View::make("front/terasa");
 	}
 	
 	public function getStatistikgempa(){
 		return View::make("front/statistikgempa");
 	}
 	
 	public function getJaringansensor(){
 		return View::make("front/jaringansensor");
 	}

}
