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
$route['default_controller'] = 'Login_ctrl';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Login_ctrl';
$route['check'] = 'Login_ctrl/check';
$route['logout'] = 'Login_ctrl/logout';
 
//Category
$route['category'] = 'Category_ctrl' ;
$route['category/create'] = 'Category_ctrl/create';
$route['category/store'] = 'Category_ctrl/store';
$route['category/detail/:num'] = 'Category_ctrl/detail';
$route['category/edit/:num'] = 'Category_ctrl/edit';
$route['category/delete/:num'] = 'Category_ctrl/delete';
$route['category/update'] = 'Category_ctrl/update';

//Country
$route['country'] = 'Country_ctrl' ;
$route['country/create'] = 'Country_ctrl/create';
$route['country/store'] = 'Country_ctrl/store';
$route['country/detail/:num'] = 'Country_ctrl/detail';
$route['country/edit/:num'] = 'Country_ctrl/edit';
$route['country/delete/:num'] = 'Country_ctrl/delete';
$route['country/update'] = 'Country_ctrl/update';

//Ingredient
$route['ingredient'] = 'Ingredient_ctrl' ;
$route['ingredient/create'] = 'Ingredient_ctrl/create';
$route['ingredient/store'] = 'Ingredient_ctrl/store';
$route['ingredient/detail/:num'] = 'Ingredient_ctrl/detail';
$route['ingredient/edit/:num'] = 'Ingredient_ctrl/edit';
$route['ingredient/delete/:num'] = 'Ingredient_ctrl/delete';
$route['ingredient/update'] = 'Ingredient_ctrl/update';

$route['meal'] = 'Meal_ctrl';
$route['meal/create'] = 'Meal_ctrl/create';
$route['meal/store'] = 'Meal_ctrl/store';
$route['meal/detail/:num'] = 'Meal_ctrl/detail';
$route['meal/edit/:num'] = 'Meal_ctrl/edit';
$route['meal/delete/:num'] = 'Meal_ctrl/delete';
$route['meal/update'] = 'Meal_ctrl/update';



