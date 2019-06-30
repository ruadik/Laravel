<?php

namespace App\Helpers;

use App\User;
use Illuminate\Http\Request;
use App\Helpers\Contracts\SaveStr;

use Storage;

class SaveFile implements SaveStr {
	
	
	public static function save(Request $request,User $user) {
		
		$obj = new self;
		
		$data = $obj->checkData($request->only('name','text'));
		
		$str = $data['name'].' | '.$data['text'];
		
		Storage::prepend('str.txt',$str);    //Добавляеи инфу в конец файла
		
	}
	
	public function checkData($array) {
		return $array;
	}
	
}