<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 7/28/17
 * Time: 9:26 AM
 */

namespace ShawnSandy\DashAuth\Controllers;


use Illuminate\Routing\Controller;
use ShawnSandy\DashAuth\AuthFormRequest;

class RolesController extends Controller
{

    public function index() {
        return "Hello world";
    }

    public function store(AuthFormRequest $request)
    {

    }

    public function update(AuthFormRequest $request) {

    }


}
