<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Welcome';
$route['404_override'] = 'Common/page_not_found';
$route['page-not-found'] = 'Common/page_not_found';
$route['translate_uri_dashes'] = FALSE;


// admin
$route['admin/login'] = 'Admin_login/Admin_login/login';
$route['admin/logout'] = 'Admin_login/Admin_login/logout';
$route['admin/login-submit'] = 'Admin_login/Admin_login/login_submit';
$route['admin/dashboard'] = 'Admin_welcome/Admin_welcome/index';
$route['admin/changepassword'] = 'Admin_users/Admin_users/change_password';
$route['admin/passwordsubmit'] = 'Admin_users/Admin_users/passwordsubmit';

$route['admin/home/sliders'] = 'Admin_home/Admin_home/sliders';
$route['admin/home/sliders/update'] = 'Admin_home/Admin_home/sliders_update';

$route['admin/about-us'] = 'Admin_about/Admin_about/about_us';
$route['admin/about-us/update'] = 'Admin_about/Admin_about/update_about_us_data';

$route['admin/why-us'] = 'Admin_about/Admin_about/why_us';
$route['admin/why-us/update'] = 'Admin_about/Admin_about/update_why_us_data';

$route['admin/logo-philosophy'] = 'Admin_about/Admin_about/logo_philosophy';
$route['admin/logo-philosophy/update'] = 'Admin_about/Admin_about/update_logo_philosophy';

$route['admin/careers'] = 'Admin_career/Admin_career/career';
$route['admin/careers/update'] = 'Admin_career/Admin_career/update_career_data';

$route['contact'] = 'Pages/load_page/contact';
$route['contact-submit'] = 'Pages/Pages/contact_submit';
$route['thank-you'] = 'Pages/load_page/thankyou';
$route['about'] = 'Pages/load_page/about';
$route['products'] = 'Products/Products/products';
$route['products/(:any)'] = 'Products/Products/fetch_products/$1';
$route['change-language'] = 'Welcome/Welcome/changeLanguage';


// Team module
$route['admin/add-team'] = 'Admin_team/Admin_team/add_team';
$route['admin/submit-team'] = 'Admin_team/Admin_team/submit_team';
$route['admin/team-list'] = 'Admin_team/Admin_team/team_list';
$route['admin/delete-team/(:any)'] = 'Admin_team/Admin_team/delete_team/$1';
$route['admin/edit-team/(:any)'] = 'Admin_team/Admin_team/edit_team/$1';
$route['admin/submit-edit-team'] = 'Admin_team/Admin_team/edit_team_submit';
$route['admin/fetch-team-data'] = 'Admin_team/Admin_team/fetch_team_data';

// testimonial module
$route['admin/add-testimonial'] = 'Admin_testimonial/Admin_testimonial/add_testimonial';
$route['admin/submit-testimonial'] = 'Admin_testimonial/Admin_testimonial/submit_testimonial';
$route['admin/testimonial-list'] = 'Admin_testimonial/Admin_testimonial/testimonial_list';
$route['admin/delete-testimonial/(:any)'] = 'Admin_testimonial/Admin_testimonial/delete_testimonial/$1';
$route['admin/edit-testimonial/(:any)'] = 'Admin_testimonial/Admin_testimonial/edit_testimonial/$1';
$route['admin/submit-edit-testimonial'] = 'Admin_testimonial/Admin_testimonial/edit_testimonial_submit';
$route['admin/fetch-testimonial-data'] = 'Admin_testimonial/Admin_testimonial/fetch_testimonial_data';

$route['admin/add-product'] = 'Admin_products/Admin_products/add_new_product';
$route['admin/submit-new-products'] = 'Admin_products/Admin_products/submit_new_products';
$route['admin/product-list'] = 'Admin_products/Admin_products/products_list';
$route['admin/delete-product/(:any)'] = 'Admin_products/Admin_products/delete_product/$1';
$route['admin/edit-product/(:any)'] = 'Admin_products/Admin_products/edit_product/$1';
$route['admin/submit-edit-product'] = 'Admin_products/Admin_products/edit_product_submit';
$route['admin/products/delete/all'] = 'Admin_products/Admin_products/delete_all_products';
$route['admin/fetch-data-product'] = 'Admin_products/Admin_products/fetch_data_product';

$route['admin/add-category'] = 'Admin_products/Admin_categories/add_new_category';
$route['admin/submit-new-categories'] = 'Admin_products/Admin_categories/submit_new_categories';
$route['admin/categories-list'] = 'Admin_products/Admin_categories/categories_list';
$route['admin/delete-category/(:any)'] = 'Admin_products/Admin_categories/delete_category/$1';
$route['admin/edit-category/(:any)'] = 'Admin_products/Admin_categories/edit_category/$1';
$route['admin/submit-edit-category'] = 'Admin_products/Admin_categories/edit_category_submit';
$route['admin/categories/delete/all'] = 'Admin_products/Admin_categories/delete_all_categories';
$route['admin/fetch-data-category'] = 'Admin_products/Admin_categories/fetch_data_category';

$route['admin/contacts/settings'] = 'Admin_contacts/Admin_contacts/settings';
$route['admin/contacts/settings/update'] = 'Admin_contacts/Admin_contacts/settings_update';