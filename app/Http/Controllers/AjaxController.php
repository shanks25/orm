<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
	public function jquery(Request $request)
	{
		$input = $request->all(); 
		return response()->json(['success'=>'Got Simple Ajax Request.']);
	}
}
