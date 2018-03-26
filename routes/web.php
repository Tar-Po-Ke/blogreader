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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/connection', function() {
    $clearDB_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $dbhost = $clearDB_url["host"];
    $dbuser = $clearDB_url["user"];
    $dbpass = $clearDB_url["pass"];
    $dbname = substr($clearDB_url["path"], 1);

    dd('host:' . $dbhost . ' <br /> dbname:' . $dbname . '<br /> dbuser:' . $dbuser . '<br />pass:' .$dbpass);
});