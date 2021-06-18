<?php
namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);



/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/login', 'Login::loginPage', ['filter' => 'alreadylogged']);
$routes->post('/login', 'Login::loginUser' , ['filter' => 'alreadylogged']);

$routes->get('/logout', 'Logout::logout', ['filter' => 'notloggedin']);


$routes->get('/sluzbenik/register', 'Register::registerKorisnikPage');
$routes->post('/sluzbenik/register', 'Register::registerKorisnik');
$routes->get('/admin/register_lekar', 'Register::registerLekarPage');
$routes->post('/admin/register_lekar', 'Register::registerLekar');
$routes->get('/admin/register_sluzbenik', 'Register::registerSluzbenikPage');
$routes->post('/admin/register_sluzbenik', 'Register::registerSluzbenik');

$routes->get('/controlpanel', 'Controlpanel::index');
$routes->get('/sluzbenik/controlpanel', 'Controlpanel::panel_sluzbenik');

$routes->get('/admin/controlpanel', 'Controlpanel::panel_admin');
$routes->get('/lekar/controlpanel', 'Controlpanel::panel_lekar');

$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/pitanja/(:num)', 'Question::questionPage/$1');

$routes->get('/pitanja/klijent/pitaj', 'Question::clientQuestionPage', ['filter' => 'klijent']);
$routes->post('/pitanja/klijent/pitaj', 'Question::clientSubmitQuestion', ['filter' => 'klijent']);

$routes->get('/pitanja/gost/pitaj', 'Question::guestQuestionPage');
$routes->post('/pitanja/gost/pitaj', 'Question::guestSubmitQuestion');

$routes->get('/pitanja/lekar/odgovaranje', 'Question::answerPage', ['filter' => 'lekar']);
$routes->post('/pitanja/lekar/odgovaranje', 'Question::submitAnswer', ['filter' => 'lekar']);
$routes->addRedirect('/pitanja', '/pitanja/1');


$routes->get('/korisnici/(:num)', 'Admin::usersPage/$1');
$routes->addRedirect('/korisnici', '/korisnici/1');

$routes->get('/korisnici/brisi', 'Admin::deleteUser',['filter' => 'adminsluzbenik'] );
$routes->get('/korisnici/izmeni', 'Admin::profileChangePage', ['filter' => 'adminsluzbenik']);
$routes->post('/korisnici/izmeni', 'Admin::submitChangeUser', ['filter' => 'adminsluzbenik']);

$routes->get('/korisnici/filtriraj/(:num)', 'Admin::filterUsers/$1');

$routes->get('/lekar/kartoni/(:num)', 'Kartoni::list/$1');
$routes->get('/lekar/karton/(:num)/(:num)', 'Kartoni::karton/$1/$2');

$routes->get('/lekar/karton/dodaj/(:num)', 'Kartoni::dodajPage/$1');
$routes->post('/lekar/karton/dodaj', 'Kartoni::dodaj');


$routes->get('/profile', 'Profile::profile_page');
$routes->get('/profile/change', 'Profile::profile_change_page');
$routes->post('/profile/change', 'Profile::change_profile');
$routes->get('/profile/changepassword', 'Profile::profile_change_password_page');
$routes->post('/profile/changepassword', 'Profile::profile_change_password');

$routes->get('/resetpassword', 'Resetpassword::resetPassPage');
$routes->post('/resetpassword', 'Resetpassword::resetPassword');



$routes->get('/newpassword/(:hash)', 'Resetpassword::makeNewPasswordPage/$1');
$routes->post('/newpassword/(:hash)', 'Resetpassword::makeNewPassword/$1');







/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
