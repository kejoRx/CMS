<?php
//login page
$router->get('', 'PagesController@home');
$router->post('', 'LoginController@log_in');

//dashboard page view
$router->get('dashboard', 'PagesController@dashboard');

//logout from session
$router->get('logout', 'PagesController@logout');

//users page
$router->get('users', 'UsersController@indexUser');
$router->get('users/create', 'PagesController@addUsers');
$router->post('users/create', 'UsersController@store');

//company page
$router->get('companies', 'CompaniesController@indexCompany');
$router->get('companies/create', 'PagesController@addCompany');
$router->post('companies/create', 'CompaniesController@store');

//images page
$router->get('images', 'ImagesController@indexImage');
$router->get('images/create', 'PagesController@addImages');
$router->post('images/create', 'ImagesController@Astore');

//question page
$router->get('add_question', 'PagesController@add_question');

//contact page
$router->get('contacts', 'ContactsController@indexContact');
$router->get('contacts/create', 'PagesController@addContact');
$router->post('contacts/create', 'ContactController@store');