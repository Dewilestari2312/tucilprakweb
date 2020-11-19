<?php namespace App\Controllers;

class Home extends BaseController
{
	public function Home()
	{
		return view('Home');
	}
	public function Login()
	{
		return view('Login');
	}
	public function indexs()
	{
		return view('indexs');
	}
	public function detailproduk()
	{
		return view('detailproduk');
	}
	public function about()
	{
		return view('about');
	}
	public function admin()
	{
		return view('admin');
	}
	public function register()
	{
		return view('register');
	}


}
