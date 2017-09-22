<?php

namespace Weblog\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class EditorController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
		$this->middleware('editor');
	}
    public function index()
    {
    	return view('admin.editor');
    }
}
