<?php


/**
Created by PhpStorm.
 * User: shawnsandy
 * Date: 7/28/17
 * Time: 9:26 AM
 */

namespace ShawnSandy\DashAuth\Controllers;


use Illuminate\Routing\Controller;
use ShawnSandy\DashAuth\AuthFormRequest;

class RolesController extends Controller
{

	public function index()
	    {
		return "Hello world";
	}

	public function store(AuthFormRequest $request)
		    {
		if($request->assignRoleToUser())
				            return back()->with("success", "We assigned role {$request->role} to user");

		return back()->with("error", "We were unable to assign {$request->role} to user");

	}

	public function update(AuthFormRequest $request) {
		if($request->retractRoleFromUser())
				            return back()->with("success", "We removed the role {$request->role} from the user");

		return back()->with("error", "Sorry we were unable to remove the role {$request->role} from the user");
	}

}
