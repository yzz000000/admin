<?php
namespace Yzzblog\Admin\Controllers;

class AdminController{
	
	
	/*
	*后台首页
	*
	**/
	public function index(){
		return view('admin::index');
	}
}