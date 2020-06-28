<?php 
return array(
	'uz/courses/([0-9]+)' => 'site/course_view_uz/$1' , //actionAbout SiteController 
	'uz/blog/([0-9]+)' => 'site/blog_view_uz/$1' , //actionAbout SiteController 
	'uz/courses' => 'site/courses_uz' , //actionAbout SiteController 
	'uz/blog' => 'site/blogs_uz' , //actionAbout SiteController 
	'uz/contacts' => 'site/contacts_uz' , //actionAbout SiteController 
	'uz/carera' => 'site/carera_uz' , //actionAbout SiteController 
	'uz/about-us' => 'site/about_uz' , //actionAbout SiteController 

	// 'admin/blogs' => 'adminBlog/index',
	// 'blog/create_uz' => 'adminBlog/create_uz',
	// 'blog/delete/([0-9]+)' => 'adminBlog/delete/$1',
	// 'blog/update/([0-9]+)' => 'adminBlog/update/$1',
	// 'admin/courses' => 'adminCourse/index',
	// 'course/create' => 'adminCourse/create',
	// 'course/updateTheme/([0-9]+)' => 'adminCourse/updateTheme/$1',
	// 'course/createTheme/([0-9]+)' => 'adminCourse/createTheme/$1',
	// 'course/deleteTheme/([0-9]+)' => 'adminCourse/deleteTheme/$1',
	// 'course/delete/([0-9]+)' => 'adminCourse/delete/$1',
	// 'course/update/([0-9]+)' => 'adminCourse/update/$1',
	// 'admin/clients' => 'adminClient/index',
	// 'clients/delete/([0-9]+)' => 'adminClient/delete/$1',
	// 'clients/view/([0-9]+)' => 'adminClient/view/$1',
	// 'admin' => 'admin/admin',
	// 'login' => 'admin/login',

	'admin/blogs' => 'adminBlog/index',
	'blog/create' => 'adminBlog/create',
	'blog/delete/([0-9]+)' => 'adminBlog/delete/$1',
	'blog/update/([0-9]+)' => 'adminBlog/update/$1',
	'admin/courses' => 'adminCourse/index',
	'course/create' => 'adminCourse/create',
	'course/updateTheme/([0-9]+)' => 'adminCourse/updateTheme/$1',
	'course/createTheme/([0-9]+)' => 'adminCourse/createTheme/$1',
	'course/deleteTheme/([0-9]+)' => 'adminCourse/deleteTheme/$1',
	'course/delete/([0-9]+)' => 'adminCourse/delete/$1',
	'course/update/([0-9]+)' => 'adminCourse/update/$1',
	'admin/clients' => 'adminClient/index',
	'clients/delete/([0-9]+)' => 'adminClient/delete/$1',
	'clients/view/([0-9]+)' => 'adminClient/view/$1',
	'admin' => 'admin/admin',
	'login' => 'admin/login',

	'courses/([0-9]+)' => 'site/course_view/$1' , //actionAbout SiteController 
	'blog/([0-9]+)' => 'site/blog_view/$1' , //actionAbout SiteController 
	'courses' => 'site/courses' , //actionAbout SiteController 
	'blog' => 'site/blogs' , //actionAbout SiteController 
	'contacts' => 'site/contacts' , //actionAbout SiteController 
	'carera' => 'site/carera' , //actionAbout SiteController 
	'about-us' => 'site/about' , //actionAbout SiteController 

	'uz' => 'site/index_uz', 
	'' => 'site/index'  //actionIndex SiteController 
)
?>