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

        if($request->assignPrivilegeToRole())
       return back()->with("success", "Ability assigned to roles");

       return  back()->with("error", "Failed assigned to roles");

    }

    public function update(AuthFormRequest $request)
    {
        if($request->removePrivilegeFromRole())
         return back()->with("success", "Ability removed from roles");

        return  back()->with("error", "Failed remove ability");

    }


}
