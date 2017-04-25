<?php
//后台首页
Route::get('admin/index',['as'=>'admin.index', 'uses'=>'\\Yzzblog\\Admin\\Controllers\\AdminController@index']);