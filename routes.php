<?php

$router = new Router();

$router->get('', 'PagesController@home');

/** Model: Conducteur */


/** Model: Vehicule */
$router->get('add-vehicule','VehiculeController@index');    
$router->get('add-vehicule','VehiculeController@save');      
$router->post('list-vehicule','VehiculeController@list');
   




/** Model: Association */



$router->run();
