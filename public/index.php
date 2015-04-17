<?php
//Require the composer autoloader. 
require(dirname(dirname(__FILE__)).'/vendor/autoload.php');

//setup the application
\Disco\classes\App::instance()->setUp();


/**
 * YOUR APPLICATION LOGIC GOES BELOW
 * ---------------------------------
*/



// Swap the View Service With an Extended View Class.
App::make('View','StandardView');

//match the index route
Router::get('/',function(){
	Template::with('index');
	View::title('Quango: Changing Your Perogative');	
});

Router::get('/congress',function(){
		Template::with('congress');
		View::title('Congresspeople of America');
});

Router::get('/bills',function(){
		Template::with('bills');
		View::title('Bills of Our Congress: by Category');
});


/**
 * ---------------------------------
 * YOUR APPLICATION LOGIC STAYS ABOVE 
*/
App::tearDown();
