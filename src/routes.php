<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */

Route::group(["prefix" => "dashauth", "middleware" => ["auth"]], function() {

    Route::get("/", function(){
        return view("dashauth::setup");
    });

    Route::view('privileges', "dashauth::privileges");

    Route::resource("roles", '\ShawnSandy\DashAuth\Controllers\RolesController', ["only" => ["store", "update"]]);

    Route::any("privileges/assign", '\ShawnSandy\DashAuth\Controllers\PrivilegesController@store');

    Route::any("privileges/remove", '\ShawnSandy\DashAuth\Controllers\PrivilegesController@update');

    Route::get("setup/", '\ShawnSandy\DashAuth\Controllers\SetupController');

});
