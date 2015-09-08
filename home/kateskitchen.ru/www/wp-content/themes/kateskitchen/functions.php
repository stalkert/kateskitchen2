<?php

	register_nav_menus(
		array('header-menu'=>'header-menu1','sidebar-menu'=>'sidebar-menu1')
	);
if(function_exists('register_sidebar'))
	register_sidebar(array('name' => 'ruen')); // региструем сайдбар
?>