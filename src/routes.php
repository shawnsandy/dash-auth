<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */

Route::group(["prefix" => "dashauth", "middleware" => ["auth"]], function() {

    Route::get("/index", function(){
        return view("dashauth::setup");
    });

    Route::resource("roles", '\ShawnSandy\DashAuth\Controllers\RolesController', ["only" => ["store", "update"]]);

    Route::resource("privileges", '\ShawnSandy\DashAuth\Controllers\PrivilegesController', ["only" => ["store", "update"]]);

    Route::get("setup/", '\ShawnSandy\DashAuth\Controllers\SetupController');

});
