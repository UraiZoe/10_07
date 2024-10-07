<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/' , 'welcome', ['name' => 'John']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bejelentkezes', function () {
    return view('bejelentkezes');
});

Route::get('/regisztracio', function () {
    return view('regisztracio');
});

Route::get('/request-test', function () {
    return view('request-inputs', [
    'title' => request('title'),
    ]);
});

Route::get('/pass-array', function () {
    $tasks = [
    'Go to the store',
    'Go to the market',
    'Go to the work'
];

return view('tasklist', [
    'tasks' => $tasks
]);
});

return view('tasklist')->with([
    'foo' => $foobar,
    'tasks' => $tasks
]);
$foobar = 'foobar';
return view('tasklist')->withTasks($tasks)->withFoo($foobar);
   
return view('tasklist')->with([
    'foo' => $foobar,
    'tasks' => $tasks
]);