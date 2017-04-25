<?php
namespace Yzzblog\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider{
	
	public function boot(){
		//加载路由文件
		$this->loadRoutesFrom(__DIR__.'/../routes.php');
		//发布前端资源
		 $this->publishes([__DIR__.'/../assets' => public_path('admin'),], 'admin');
	}
	
	
	public function register(){
		//注册视图
		$this->loadViewsFrom(__DIR__.'/Views', 'admin');
	}
}

