<?php

/*
|//////////////////////////////////////////////////////////////////////////
| Web Routes
|//////////////////////////////////////////////////////////////////////////
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexControllar@index');
Route::get('/home', 'IndexControllar@index');
Route::get('/ourselves', 'IndexControllar@ourselves');

Route::get('/about_us', 'IndexControllar@aboutus')->name("aboutus");
Route::get('/vision_mission', 'IndexControllar@visionmission');
Route::get('/top_management', 'IndexControllar@topmanagement');
Route::get('/futureFashion', 'IndexControllar@futureFashion');
Route::get('/products_services', 'IndexControllar@productsservices');
Route::get('/woven_fabrics', 'IndexControllar@wovenfabrics');
Route::get('/technical_textile', 'IndexControllar@technicaltextile');
Route::get('/training_center', 'IndexControllar@trainingcenter');
Route::get('/consultancy', 'IndexControllar@consultancy');
Route::get('/sustainability', 'IndexControllar@sustainability');
Route::get('/sus_overview', 'IndexControllar@susoverview');
Route::get('/fibre_yarns', 'IndexControllar@fibreyarns');
Route::get('/dyes_chemicals', 'IndexControllar@dyeschemicals');
Route::get('/processes', 'IndexControllar@processes');
Route::get('/csr', 'IndexControllar@csr');
Route::get('/contact-us', 'IndexControllar@contactus');
Route::get('/hgoogle_maps', 'IndexControllar@hgooglemaps');
Route::get('/mgoogle_maps', 'IndexControllar@mgooglemaps');
Route::get('/fgoogle_maps', 'IndexControllar@fgooglemaps');


Auth::routes();
// Route::get('/login', 'HomeController@login');


//admin panel
Route::group(['middleware' => 'auth'], function () {
Route::get('/admin/login', 'HomeController@login');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/admin/dashboard', 'IndexController@dashboard');

//category
Route::get('/admin/category', 'CategoryController@index');
Route::post('/admin/category/add', 'CategoryController@create');
Route::post('/admin/category/update/{id}', 'CategoryController@update');
Route::get('/admin/category/edit/{id}', 'CategoryController@show');
Route::get('/admin/category/delete/{id}', 'CategoryController@destroy');

//subcategory
Route::get('/admin/subcategory', 'SubCategoryController@index');
Route::post('/admin/subcategory/add', 'SubCategoryController@create');
Route::post('/admin/subcategory/update/{id}', 'SubCategoryController@update');
Route::get('/admin/subcategory/edit/{id}', 'SubCategoryController@show');
Route::get('/admin/subcategory/delete/{id}', 'SubCategoryController@destroy');

//slider
Route::get('/admin/slider', 'SliderController@index');
Route::post('/admin/slider/add', 'SliderController@create');
Route::get('/admin/slider/edit/{id}', 'SliderController@show');
Route::post('/admin/slider/update/{id}', 'SliderController@update');
Route::get('/admin/slider/delete/{id}', 'SliderController@destroy');

// SiteSetting
Route::get('/admin/sitesetting', 'SiteSettingController@index');
Route::post('/admin/sitesetting/add', 'SiteSettingController@create');
Route::get('/admin/sitesetting/edit/{id}', 'SiteSettingController@show');
Route::post('/admin/sitesetting/update/{id}', 'SiteSettingController@update');
Route::get('/admin/sitesetting/delete/{id}', 'SiteSettingController@destroy');

//Introducing Ourselves
//ourselves
Route::get('/admin/ourselves', 'OurselvesController@index');
Route::post('/admin/ourselves/add', 'OurselvesController@create');
Route::get('/admin/ourselves/edit/{id}', 'OurselvesController@show');
Route::post('/admin/ourselves/update/{id}', 'OurselvesController@update');
Route::get('/admin/ourselves/delete/{id}', 'OurselvesController@destroy');
//about us
Route::get('/admin/about', 'AboutUsController@index');
Route::post('/admin/about/add', 'AboutUsController@create');
Route::get('/admin/about/edit/{id}', 'AboutUsController@show');
Route::post('/admin/about/update/{id}', 'AboutUsController@update');
Route::get('/admin/about/delete/{id}', 'AboutUsController@destroy');
//VisionMission
Route::get('/admin/VisionMission', 'VisionMissionController@index');
Route::post('/admin/VisionMission/add', 'VisionMissionController@create');
Route::get('/admin/VisionMission/edit/{id}', 'VisionMissionController@show');
Route::post('/admin/VisionMission/update/{id}', 'VisionMissionController@update');
Route::get('/admin/VisionMission/delete/{id}', 'VisionMissionController@destroy');
//management
Route::get('/admin/management', 'ManagementController@index');
Route::post('/admin/management/add', 'ManagementController@create');
Route::get('/admin/management/edit/{id}', 'ManagementController@show');
Route::post('/admin/management/update/{id}', 'ManagementController@update');
Route::get('/admin/management/delete/{id}', 'ManagementController@destroy');
//top management
Route::get('/admin/top/management', 'TopManagementController@index');
Route::post('/admin/top/management/add', 'TopManagementController@create');
Route::get('/admin/top/management/edit/{id}', 'TopManagementController@show');
Route::post('/admin/top/management/update/{id}', 'TopManagementController@update');
Route::get('/admin/top/management/delete/{id}', 'TopManagementController@destroy');

//Future Fashion
Route::get('/admin/future/fashion', 'FutureFashionController@index');
Route::post('/admin/future/fashion/add', 'FutureFashionController@create');
Route::get('/admin/future/fashion/edit/{id}', 'FutureFashionController@show');
Route::post('/admin/future/fashion/update/{id}', 'FutureFashionController@update');
Route::get('/admin/future/fashion/delete/{id}', 'FutureFashionController@destroy');

//Product Services
Route::get('/admin/Product/Services', 'ProductsServicesController@index');
Route::post('/admin/Product/Services/add', 'ProductsServicesController@create');
Route::get('/admin/Product/Services/edit/{id}', 'ProductsServicesController@show');
Route::post('/admin/Product/Services/update/{id}', 'ProductsServicesController@update');
Route::get('/admin/Product/Services/delete/{id}', 'ProductsServicesController@destroy');

//Woven Fabrics
Route::get('/admin/Woven/Fabrics', 'WovenFabricsController@index');
Route::post('/admin/Woven/Fabrics/add', 'WovenFabricsController@create');
Route::get('/admin/Woven/Fabrics/edit/{id}', 'WovenFabricsController@show');
Route::post('/admin/Woven/Fabrics/update/{id}', 'WovenFabricsController@update');
Route::get('/admin/Woven/Fabrics/delete/{id}', 'WovenFabricsController@destroy');

//technical_textile
Route::get('/admin/Technical/Textile', 'TechnicalTextileController@index');
Route::post('/admin/Technical/Textile/add', 'TechnicalTextileController@create');
Route::get('/admin/Technical/Textile/edit/{id}', 'TechnicalTextileController@show');
Route::post('/admin/Technical/Textile/update/{id}', 'TechnicalTextileController@update');
Route::get('/admin/Technical/Textile/delete/{id}', 'TechnicalTextileController@destroy');

//technical_textile
Route::get('/admin/Training/Center', 'TrainingCenterController@index');
Route::post('/admin/Training/Center/add', 'TrainingCenterController@create');
Route::get('/admin/Training/Center/edit/{id}', 'TrainingCenterController@show');
Route::post('/admin/Training/Center/update/{id}', 'TrainingCenterController@update');
Route::get('/admin/Training/Center/delete/{id}', 'TrainingCenterController@destroy');

//Consultancy
Route::get('/admin/Consultancy', 'ConsultancyController@index');
Route::post('/admin/Consultancy/add', 'ConsultancyController@create');
Route::get('/admin/Consultancy/edit/{id}', 'ConsultancyController@show');
Route::post('/admin/Consultancy/update/{id}', 'ConsultancyController@update');
Route::get('/admin/Consultancy/delete/{id}', 'ConsultancyController@destroy');

//Sustainability
Route::get('/admin/Sustainability', 'SustainabilityController@index');
Route::post('/admin/Sustainability/add', 'SustainabilityController@create');
Route::get('/admin/Sustainability/edit/{id}', 'SustainabilityController@show');
Route::post('/admin/Sustainability/update/{id}', 'SustainabilityController@update');
Route::get('/admin/Sustainability/delete/{id}', 'SustainabilityController@destroy');

//Sustainability overview
Route::get('/admin/Sustainability/Overview', 'SustainabilityOverviewController@index');
Route::post('/admin/Sustainability/Overview/add', 'SustainabilityOverviewController@create');
Route::get('/admin/Sustainability/Overview/edit/{id}', 'SustainabilityOverviewController@show');
Route::post('/admin/Sustainability/Overview/update/{id}', 'SustainabilityOverviewController@update');
Route::get('/admin/Sustainability/Overview/delete/{id}', 'SustainabilityOverviewController@destroy');

//Fibre & Yarns
Route::get('/admin/Fibre/Yarns', 'FibreYarnsController@index');
Route::post('/admin/Fibre/Yarns/add', 'FibreYarnsController@create');
Route::get('/admin/Fibre/Yarns/edit/{id}', 'FibreYarnsController@show');
Route::post('/admin/Fibre/Yarns/update/{id}', 'FibreYarnsController@update');
Route::get('/admin/Fibre/Yarns/delete/{id}', 'FibreYarnsController@destroy');

//Dyes Chemicals
Route::get('/admin/Dyes/Chemicals', 'DyesChemicalsController@index');
Route::post('/admin/Dyes/Chemicals/add', 'DyesChemicalsController@create');
Route::get('/admin/Dyes/Chemicals/edit/{id}', 'DyesChemicalsController@show');
Route::post('/admin/Dyes/Chemicals/update/{id}', 'DyesChemicalsController@update');
Route::get('/admin/Dyes/Chemicals/delete/{id}', 'DyesChemicalsController@destroy');

//processes
Route::get('/admin/Processes', 'ProcessesController@index');
Route::post('/admin/Processes/add', 'ProcessesController@create');
Route::get('/admin/Processes/edit/{id}', 'ProcessesController@show');
Route::post('/admin/Processes/update/{id}', 'ProcessesController@update');
Route::get('/admin/Processes/delete/{id}', 'ProcessesController@destroy');

//csr
Route::get('/admin/Csr', 'CsrController@index');
Route::post('/admin/Csr/add', 'CsrController@create');
Route::get('/admin/Csr/edit/{id}', 'CsrController@show');
Route::post('/admin/Csr/update/{id}', 'CsrController@update');
Route::get('/admin/Csr/delete/{id}', 'CsrController@destroy');

//csr
Route::get('/admin/Contact', 'ContactController@index');
Route::post('/admin/Contact/add', 'ContactController@create');
Route::get('/admin/Contact/edit/{id}', 'ContactController@show');
Route::post('/admin/Contact/update/{id}', 'ContactController@update');
Route::get('/admin/Contact/delete/{id}', 'ContactController@destroy');


Route::get('/admin/user', 'HomeController@user');
Route::post('/admin/user/update', 'HomeController@updateUserInfo');
Route::get('/admin/unlock', 'HomeController@unlock');


// Route::get('/home', 'HomeController@index');
});
