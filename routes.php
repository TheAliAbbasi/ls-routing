<?php

Route::get('/home', function()
{
	return '<h1>This is our homepage</h1>';
});

Route::get('/', function()
{
	return 'I am a route';
});