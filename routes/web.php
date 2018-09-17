<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('auth/login');
});*/

Route::get('/','WebsiteController@index');
Route::get('/aboutus','WebsiteController@about');
Route::get('/service','WebsiteController@service');
Route::get('/contact','WebsiteController@contact');
Route::get('/portfolio','WebsiteController@portfolio');
Route::get('/blog','WebsiteController@blogs');
Route::get('/blog/{cat}/{id}','WebsiteController@blogshow');
Route::post('sendmail', 'WebsiteController@sendmail');
Route::post('showlatestwork', 'WebsiteController@showlatestwork');
Route::post('showportfoliowork', 'WebsiteController@showportfoliowork');
Route::get('/service/{page}','WebsiteController@showpage');
Route::post('sendinquiry', 'WebsiteController@sendinquiry');
Route::get('/career','WebsiteController@career');
Route::post('jobapply', 'WebsiteController@jobapply');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*  Slieder Route */
Route::get('Slider', array('as' => 'Slider.index', 'uses' => 'SliderController@index'));
Route::get('Slider/add', array('as' => 'Slider.create', 'uses' => 'SliderController@create'));
Route::post('Slider/store', array('as' => 'Slider.store', 'uses' => 'SliderController@store'));
Route::get('Slider/edit/{id}', array('as' => 'Slider.edit', 'uses' => 'SliderController@edit'));
Route::patch('Slider/update/{id}', array('as' => 'Slider.update', 'uses' => 'SliderController@update'));
Route::get('Slider/show/{id}', array('as' => 'Slider.show', 'uses' => 'SliderController@show'));
Route::get('Slider/delete/{id}', array('as' => 'Slider.delete', 'uses' => 'SliderController@destroy'));
Route::get('Slider/getSlider', array('as'=>'Slider.getSlider','uses'=>'DatatabledataController@getSlider'));
/* -------- */

/*  Cateagory Route */
Route::get('category' , array('as' => 'category.index', 'uses' => 'CategoryController@index'));
Route::get('category/add', array('as' => 'category.create', 'uses' => 'CategoryController@create'));
Route::post('category/store', array('as' => 'category.store', 'uses' => 'CategoryController@store'));
Route::get('category/edit/{id}', array('as' => 'category.edit', 'uses' => 'CategoryController@edit'));
Route::patch('category/update/{id}', array('as' => 'category.update', 'uses' => 'CategoryController@update'));
Route::get('category/show/{id}', array('as' => 'category.show', 'uses' => 'CategoryController@show'));
Route::get('category/delete/{id}', array('as' => 'category.delete', 'uses' => 'CategoryController@destroy'));
Route::get('category/getcategory', array('as'=>'category.getcategory','uses'=>'DatatabledataController@getcategory'));
/* -------- */

/*  Latest Work Route */
Route::get('latest_work' , array('as' => 'latest_work.index', 'uses' => 'LatestworkController@index'));
Route::get('latest_work/add', array('as' => 'latest_work.create', 'uses' => 'LatestworkController@create'));
Route::post('latest_work/store', array('as' => 'latest_work.store', 'uses' => 'LatestworkController@store'));
Route::get('latest_work/edit/{id}', array('as' => 'latest_work.edit', 'uses' => 'LatestworkController@edit'));
Route::patch('latest_work/update/{id}', array('as' => 'latest_work.update', 'uses' => 'LatestworkController@update'));
Route::get('latest_work/show/{id}', array('as' => 'latest_work.show', 'uses' => 'LatestworkController@show'));
Route::get('latest_work/delete/{id}', array('as' => 'latest_work.delete', 'uses' => 'LatestworkController@destroy'));
Route::get('latest_work/getlatestwork', array('as'=>'latest_work.getlatestwork','uses'=>'DatatabledataController@getlatestwork'));
/* -------- */

/*  Testimonial Route */
Route::get('testimonial' , array('as' => 'testimonial.index', 'uses' => 'TestimonialController@index'));
Route::get('testimonial/add', array('as' => 'testimonial.create', 'uses' => 'TestimonialController@create'));
Route::post('testimonial/store', array('as' => 'testimonial.store', 'uses' => 'TestimonialController@store'));
Route::get('testimonial/edit/{id}', array('as' => 'testimonial.edit', 'uses' => 'TestimonialController@edit'));
Route::patch('testimonial/update/{id}', array('as' => 'testimonial.update', 'uses' => 'TestimonialController@update'));
Route::get('testimonial/show/{id}', array('as' => 'testimonial.show', 'uses' => 'TestimonialController@show'));
Route::get('testimonial/delete/{id}', array('as' => 'testimonial.delete', 'uses' => 'TestimonialController@destroy'));
Route::get('testimonial/gettestimonial', array('as'=>'testimonial.gettestimonial','uses'=>'DatatabledataController@gettestimonial'));
/* -------- */

/* Happayclinet Route   */
Route::get('happyclient' , array('as' => 'happyclient.index', 'uses' => 'HappyclientController@index'));
Route::get('happyclient/add', array('as' => 'happyclient.create', 'uses' => 'HappyclientController@create'));
Route::post('happyclient/store', array('as' => 'happyclient.store', 'uses' => 'HappyclientController@store'));
Route::get('happyclient/edit/{id}', array('as' => 'happyclient.edit', 'uses' => 'HappyclientController@edit'));
Route::patch('happyclient/update/{id}', array('as' => 'happyclient.update', 'uses' => 'HappyclientController@update'));
Route::get('happyclient/show/{id}', array('as' => 'happyclient.show', 'uses' => 'HappyclientController@show'));
Route::get('happyclient/delete/{id}', array('as' => 'happyclient.delete', 'uses' => 'HappyclientController@destroy'));
Route::get('happyclient/gethappyclient', array('as'=>'happyclient.gethappyclient','uses'=>'DatatabledataController@gethappyclient'));
/* -------- */

/* About Route   */
Route::get('about' , array('as' => 'about.index', 'uses' => 'AboutController@index'));
Route::get('about/add', array('as' => 'about.create', 'uses' => 'AboutController@create'));
Route::post('about/store', array('as' => 'about.store', 'uses' => 'AboutController@store'));
Route::get('about/edit/{id}', array('as' => 'about.edit', 'uses' => 'AboutController@edit'));
Route::patch('about/update/{id}', array('as' => 'about.update', 'uses' => 'AboutController@update'));
Route::get('about/show/{id}', array('as' => 'about.show', 'uses' => 'AboutController@show'));
Route::get('about/delete/{id}', array('as' => 'about.delete', 'uses' => 'AboutController@destroy'));
Route::get('about/getabout', array('as'=>'about.getabout','uses'=>'DatatabledataController@getabout'));
/* -------- */

/* Service Route   */
Route::get('services' , array('as' => 'services.index', 'uses' => 'ServicesController@index'));
Route::get('services/add', array('as' => 'services.create', 'uses' => 'ServicesController@create'));
Route::post('services/store', array('as' => 'services.store', 'uses' => 'ServicesController@store'));
Route::get('services/edit/{id}', array('as' => 'services.edit', 'uses' => 'ServicesController@edit'));
Route::patch('services/update/{id}', array('as' => 'services.update', 'uses' => 'ServicesController@update'));
Route::get('services/show/{id}', array('as' => 'services.show', 'uses' => 'ServicesController@show'));
Route::get('services/delete/{id}', array('as' => 'services.delete', 'uses' => 'ServicesController@destroy'));
Route::get('services/getservices', array('as'=>'services.getservices','uses'=>'DatatabledataController@getservices'));
/* -------- */

/* Portfolios Route   */
Route::get('portfolios' , array('as' => 'portfolios.index', 'uses' => 'PortfoliosController@index'));
Route::get('portfolios/add', array('as' => 'portfolios.create', 'uses' => 'PortfoliosController@create'));
Route::post('portfolios/store', array('as' => 'portfolios.store', 'uses' => 'PortfoliosController@store'));
Route::get('portfolios/edit/{id}', array('as' => 'portfolios.edit', 'uses' => 'PortfoliosController@edit'));
Route::patch('portfolios/update/{id}', array('as' => 'portfolios.update', 'uses' => 'PortfoliosController@update'));
Route::get('portfolios/show/{id}', array('as' => 'portfolios.show', 'uses' => 'PortfoliosController@show'));
Route::get('portfolios/delete/{id}', array('as' => 'portfolios.delete', 'uses' => 'PortfoliosController@destroy'));
Route::get('portfolios/getservices', array('as'=>'portfolios.getportfolios','uses'=>'DatatabledataController@getportfolios'));
/* -------- */

/* Blog Route   */
Route::get('blogs' , array('as' => 'blogs.index', 'uses' => 'BlogController@index'));
Route::get('blogs/add', array('as' => 'blogs.create', 'uses' => 'BlogController@create'));
Route::post('blogs/store', array('as' => 'blogs.store', 'uses' => 'BlogController@store'));
Route::get('blogs/edit/{id}', array('as' => 'blogs.edit', 'uses' => 'BlogController@edit'));
Route::get('blogs/show/{id}', array('as' => 'blogs.show', 'uses' => 'BlogController@show'));
Route::patch('blogs/update/{id}', array('as' => 'blogs.update', 'uses' => 'BlogController@update'));
Route::get('blogs/delete/{id}', array('as' => 'blogs.delete', 'uses' => 'BlogController@destroy'));
Route::get('blogs/getblog', array('as'=>'blogs.getblog','uses'=>'DatatabledataController@getblog'));
/* -------- */

/* Page Route   */
Route::get('page' , array('as' => 'page.index', 'uses' => 'PagesController@index'));
Route::get('page/add', array('as' => 'page.create', 'uses' => 'PagesController@create'));
Route::post('page/store', array('as' => 'page.store', 'uses' => 'PagesController@store'));
Route::get('page/edit/{id}', array('as' => 'page.edit', 'uses' => 'PagesController@edit'));
Route::get('page/show/{id}', array('as' => 'page.show', 'uses' => 'PagesController@show'));
Route::patch('page/update/{id}', array('as' => 'page.update', 'uses' => 'PagesController@update'));
Route::get('page/delete/{id}', array('as' => 'page.delete', 'uses' => 'PagesController@destroy'));
Route::get('page/getpage', array('as'=>'page.getpage','uses'=>'DatatabledataController@getpage'));
/* -------- */


/* Inquiry Route   */
Route::get('inquirys' , array('as' => 'inquirys.index', 'uses' => 'InquiryController@index'));
Route::get('inquirys/delete/{id}', array('as' => 'inquirys.delete', 'uses' => 'InquiryController@destroy'));
Route::get('inquirys/getinquirys', array('as'=>'inquirys.getinquirys','uses'=>'DatatabledataController@getinquirys'));
/* -------- */

/* Job Route   */
Route::get('jobopening' , array('as' => 'jobopening.index', 'uses' => 'JobopeningController@index'));
Route::get('jobopening/add', array('as' => 'jobopening.create', 'uses' => 'JobopeningController@create'));
Route::post('jobopening/store', array('as' => 'jobopening.store', 'uses' => 'JobopeningController@store'));
Route::get('jobopening/edit/{id}', array('as' => 'jobopening.edit', 'uses' => 'JobopeningController@edit'));
Route::get('jobopening/show/{id}', array('as' => 'jobopening.show', 'uses' => 'JobopeningController@show'));
Route::patch('jobopening/update/{id}', array('as' => 'jobopening.update', 'uses' => 'JobopeningController@update'));
Route::get('jobopening/delete/{id}', array('as' => 'jobopening.delete', 'uses' => 'JobopeningController@destroy'));
Route::get('jobopening/getjobopening', array('as'=>'jobopening.getjobopening','uses'=>'DatatabledataController@getjobopening'));
/* -------- */

/* Blog Cateagory Route */
Route::get('blogcategory' , array('as' => 'blogcategory.index', 'uses' => 'BlogcategoryController@index'));
Route::get('blogcategory/add', array('as' => 'blogcategory.create', 'uses' => 'BlogcategoryController@create'));
Route::post('blogcategory/store', array('as' => 'blogcategory.store', 'uses' => 'BlogcategoryController@store'));
Route::get('blogcategory/edit/{id}', array('as' => 'blogcategory.edit', 'uses' => 'BlogcategoryController@edit'));
Route::patch('blogcategory/update/{id}', array('as' => 'blogcategory.update', 'uses' => 'BlogcategoryController@update'));
Route::get('blogcategory/show/{id}', array('as' => 'blogcategory.show', 'uses' => 'BlogcategoryController@show'));
Route::get('blogcategory/delete/{id}', array('as' => 'blogcategory.delete', 'uses' => 'BlogcategoryController@destroy'));
Route::get('blogcategory/getblogcategory', array('as'=>'blogcategory.getblogcategory','uses'=>'DatatabledataController@getblogcategory'));
/* -------- */
