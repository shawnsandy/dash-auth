<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 */

Route::group(["prefix" => "auth", "middleware" => ["auth"]], function() {

    Route::resource("roles", '\ShawnSandy\DashAuth\Controllers\RolesController', ["only" => ["store", "update"]]);

    Route::resource("privileges", '\ShawnSandy\DashAuth\Controllers\PrivilegesController', ["only" => ["store", "update"]]);

});


