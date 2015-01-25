<?php

class BackController extends BaseController {
	public function getPengguna(){
		return View::make("back/pengguna");
	}

 	public function getArtikel(){
 		return View::make("back/artikel");
 	}

 	public function getInputgempa(){
 		
 		return View::make("back/inputgempa");
 	}
 	
 	public function getLaporan(){
 		return View::make("back/laporan");
 	}
 	
 	public function getUnduh(){
 		return View::make("back/unduhdata");
 	}

}
