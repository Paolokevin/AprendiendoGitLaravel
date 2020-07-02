<?php

$about = [
    ['item' => 'Proyecto #1'],
    ['item' => 'Proyecto #2'],
    ['item' => 'Proyecto #3'],
    ['item' => 'Proyecto #4'],
];

/*
$contact = [
    ['item' => 'Contact #1'],
    ['item' => 'Contact #2'],
    ['item' => 'Contact #3'],
];
*/



Route::view('/', 'layout')->name('layout');
Route::view('/home', 'home')->name('home');
Route::view('/about', 'about', compact('about'))->name('about');
//Route::view('/contact', 'contact')->name('contact');
//Route::post('contact', 'MessagesController@store');
Route::get('/contact', 'MessagesController@ShowForm')-> name('contact');
Route::post('contact', 'MessagesController@store') -> name('contact.store');

//Route::get('/portfolio', 'MessagesController@ShowFromPortfolio')->name('portfolio');
//Route::post('/portfolio', 'MessagesController@procesarPortfolio')->name('portfolio.procesarPortfolio');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/formListPortfolio', 'PortfolioController@formListPortfolio')->name('portfolio');

/*
Route::get('/', function () {
    $nombre = "Paolo";
    return view("home", compact('nombre'));
})->name('direccion');
*/

/*
Route::get('/contacto', function(){
    return "Hello word";
});
*/


//traer datos de la base de daos MYSQL
/*
Route::get('Persona', function(){
    $persona = App\Persona::first();
    echo $persona->nombre;
});
*/
Route::get('formPersona', 'PersonaController@formPersonaShow')->name('formPersona');
Route::post('formPersona', 'PersonaController@registrarPersonas')->name('formPersona.registrarPersonas');
/*
Route::get('Estudiantes', function(){
    $estudiante = App\Estudiantes::all();
    echo $estudiante;
});

*/