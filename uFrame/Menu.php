<?php

namespace uFrame;


use uFrame\Log;
use uFrame\Database;

class Menu {

	public static function show(){
		$log = new log;
		$db=new Database($log);
		$menuList = $db->select("SELECT * FROM pages");
		// $menuList[]=["Title" => "Blog"];
		foreach ($menuList as $page) {
			
		echo'	<li><a class="no-decoration" href="/' . CONFIG['site_path'] .'/Blog" >' . $page['title'] . '</a><span class="main-nav__separator"><span></span><span></span><span></span></span></li>
';



		}


	}
}