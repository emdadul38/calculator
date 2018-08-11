<?php
	Route::get('calculator', function(){
		echo 'Hello from the calculator package! ';
	});
	Route::get('add/{a}/{b}', 'Emdadul38\Calculator\CalculatorController@add');
	Route::get('subtract/{a}/{b}', 'Emdadul38\Calculator\CalculatorController@subtract');
