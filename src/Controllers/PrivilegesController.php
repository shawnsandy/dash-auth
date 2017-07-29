<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 7/28/17
 * Time: 10:58 AM
 */

namespace ShawnSandy\DashAuth\Controllers;


use ShawnSandy\DashAuth\AuthFormRequest;

class PrivilegesController
{

    public function index()
    {
        return "Hello world";
    }

    /*
     * Assign specific privilege to user
     *
     */
    public function store(AuthFormRequest $request)
    {


    }

    public function update(AuthFormRequest $request)
    {

    }

    public function destroy()
    {

    }


}
