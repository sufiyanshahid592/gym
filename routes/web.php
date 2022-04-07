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

Route::get('/','HomeController@index');
Route::post('send-emial','EmailController@email');
Route::get('software/gyms','HomeController@software_gym');
Route::get('software/martial-arts','HomeController@software_martial_arts');
Route::get('software/gymnastics','HomeController@software_gymnastics');
Route::get('software/yoga','HomeController@software_yoga');
Route::get('software/dance','HomeController@software_dance');
Route::get('features/members','HomeController@features_members');
Route::get('features/billing','HomeController@features_billing');
Route::get('features/attendance','HomeController@features_attendance');
Route::get('features/booking','HomeController@features_booking');
Route::get('features/website','HomeController@features_website');
Route::get('features/reporting','HomeController@features_reporting');
Route::get('features/marketing','HomeController@features_marketing');
Route::get('features/pos','HomeController@features_pos');
Route::get('pricing','HomeController@pricing');
Route::get('blog','HomeController@blog');
Route::get('podcast','HomeController@podcast');
Route::get('contact','HomeController@contact');
Route::get('content/about','HomeController@content_about');
Route::get('alternative/mindbody','HomeController@alternative_mindbody');
Route::get('alternative/zenplanner','HomeController@alternative_zenplanner');
Route::get('alternative/kicksite','HomeController@alternative_kicksite');
Route::get('alternative/spark','HomeController@alternative_spark');
Route::get('alternative/pushpress','HomeController@alternative_pushpress');
Route::get('alternative/gymmaster','HomeController@alternative_gymmaster');
Route::get('software/membership-clubs','HomeController@software_membership_clubs');
Route::get('lp/contract-template','HomeController@lp_contract_template');
Route::get('lp/bbwidget','HomeController@lp_bbwidget');
Route::get('best-gym-management-software','HomeController@best_gym_management_software');
Route::get('page/trust','HomeController@page_trust');
Route::get('page/terms','HomeController@page_terms');
Route::get('page/privacy','HomeController@page_privacy');

Route::get("register", "Login_Register_Controller@register");
Route::post("register-process", "Login_Register_Controller@register_process");
Route::get("login", "Login_Register_Controller@login");
Route::post("login-process", "Login_Register_Controller@login_process");

// Dashboard
Route::get("manager/dashboard", "Dashboard_Controller@dashboard");

// Members 
Route::get("manager/members/list", "Members_Controller@manager_members_list");
Route::get("manager/attendance/checkin", "Members_Controller@manager_attendance_checkin");
Route::get("manager/attendance/overview", "Members_Controller@manager_attendance_overview");
	
	Route::get("manager/attendance/list", "Members_Controller@manager_attendance_list");
	Route::get("manager/attendance/promotions", "Members_Controller@manager_attendance_promotions");
	Route::get("manager/attendance/members", "Members_Controller@manager_attendance_members");
	Route::get("manager/attendance/sessions", "Members_Controller@manager_attendance_sessions");
	Route::get("manager/attendance/multi", "Members_Controller@manager_attendance_multi");
	Route::get("manager/attendance/settings", "Members_Controller@manager_attendance_settings");

Route::get("manager/memberships/manage", "Members_Controller@manager_memberships_manage");
Route::get("manager/docs/manage", "Members_Controller@manager_docs_manage");
Route::get("manager/content/members", "Members_Controller@manager_content_members");
Route::get("manager/members/summary", "Members_Controller@manager_members_summary");
Route::get("manager/members/settings", "Members_Controller@manager_members_settings");

// Billing
Route::get("manager/billing/overview", "Billing_Controller@manager_billing_overview");
	Route::get("manager/billing/payments", "Billing_Controller@manager_billing_payments");
	Route::get("manager/billing/recurring", "Billing_Controller@manager_billing_recurring");
	Route::get("manager/billing/discounts", "Billing_Controller@manager_billing_discounts");
	Route::get("manager/billing/forms", "Billing_Controller@manager_billing_forms");
	Route::get("manager/billing/accounting", "Billing_Controller@manager_billing_accounting");
	Route::get("manager/billing/balances", "Billing_Controller@manager_billing_balances");

// Marketing
Route::get("manager/marketing/dashboard", "Marketing_Controller@manager_marketing_dashboard");
	Route::get("manager/marketing/referrals", "Marketing_Controller@manager_marketing_referrals");
	Route::get("manager/marketing/leads", "Marketing_Controller@manager_marketing_leads");
	Route::get("manager/marketing/messaging", "Marketing_Controller@manager_marketing_messaging");
	Route::get("manager/automations/manage", "Marketing_Controller@manager_automations_manage");
	Route::get("manager/marketing/settings", "Marketing_Controller@manager_marketing_settings");

// Website
Route::get("manager/website/settings", "Website_Controller@manager_website_settings");
	Route::get("manager/website/homepage", "Website_Controller@manager_website_homepage");
	Route::get("manager/website/instructors", "Website_Controller@manager_website_instructors");
	Route::get("manager/website/location", "Website_Controller@manager_website_location");
	Route::get("manager/website/schedule", "Website_Controller@manager_website_schedule");
	Route::get("manager/website/forms", "Website_Controller@manager_website_forms");
	Route::get("manager/website/content", "Website_Controller@manager_website_content");
	Route::get("manager/website/gallery", "Website_Controller@manager_website_gallery");
	Route::get("manager/website/pricing", "Website_Controller@manager_website_pricing");
// Sales
Route::get("manager/sales/create", "Sales_Controller@manager_sales_create");
	Route::get("manager/products/report", "Sales_Controller@manager_products_report");

// Gym
Route::get("manager/gym/settings", "Gym_Controller@manager_gym_settings");

// Account Setting
Route::get("manager/account/settings", "Login_Register_Controller@manager_account_settings");

// Help
Route::get("help/docs", "Login_Register_Controller@help_docs");


Route::get("manager/login/logout", "Login_Register_Controller@manager_login_logout");



// Admin Routes
Route::get('admin/login','AdminController@index');
Route::get('/logout','AdminController@logout');

// Routes Redirect to admin Dashboard

Route::post('/create-user','AdminController@login_user');

Route::get('/dashboard','DashboardController@index');

// Routes Change Password admin

Route::get('/changepassword', 'DashboardController@changePassword');

Route::post('/change-password','DashboardController@updatePassword');

// Routes Admin Blog Crud

Route::get('/addblog','BlogController@index');

Route::post('/createblog','BlogController@create');

Route::get('/showblog', 'BlogController@showBlog');

Route::get('/editblog/{id}','BlogController@edit');

Route::post('/updateblog/{id}','BlogController@update');

Route::get('/only-view-blog/{id}','BlogController@viewBlog');

Route::get('/deleteblog/{id}','BlogController@destroy');

Route::get('blog','HomeController@our_blog_view');

Route::post('blog-search','HomeController@blog_searchbar');









// Routes Admin Home slider Crud

Route::get('home-slider','DashboardController@homeSlider');

Route::post('create-homeslider','DashboardController@createSlider');

Route::get('show-homeslider','DashboardController@showSlider');

Route::get('/edit-homeslider/{id}','DashboardController@editSlider');

Route::get('/only-view-homeslider/{id}','DashboardController@onlyViewSlider');

Route::post('/update-homeslider/{id}','DashboardController@updateSlider');

Route::get('/delete-homeslider/{id}','DashboardController@destroyHomeSlider');


// Routes Admin Testimonial slider Crud

Route::get('add-testimonial','DashboardController@testimonial');
Route::post('create-testimonial', 'DashboardController@createTestimonial');
Route::get('show-testimonial', 'DashboardController@show_testimonial');
Route::get('edit-testimonial/{id}', 'DashboardController@edit_testimonial');
Route::get('only-view-testimonial/{id}', 'DashboardController@view_testimonial');
Route::post('update-testimonial/{id}', 'DashboardController@update_testimonial');
Route::get('delete-testimonial/{id}', 'DashboardController@deleteTestmonial');







// Routes Admin Socials Crud

Route::get('add-socials','DashboardController@socials');
Route::post('create-socials', 'DashboardController@create_socials_Links');



