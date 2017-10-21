<?php
/**
 * Created by PhpStorm.
 * User: Shawn
 * Date: 7/30/2017
 * Time: 8:14 PM
 */

namespace ShawnSandy\DashAuth\Controllers;


use Auth;
use Illuminate\Routing\Controller;
use Silber\Bouncer\BouncerFacade as Bouncer;
use Silber\Bouncer\Database\Role;

class SetupController extends Controller
{

    public function __invoke()
    {
        $roles = Role::all()->toArray();

        if (count($roles) || config("dashauth.setup") === false)
            return back()->with("error", "Sorry setup has been disabled or roles already exist please contact a system administrator to resolve issue");

        $setup = app(Role::class);
        $roles =  collect(config("dashauth.roles"))->keys()->map(function( $key) {
            return ['name' => $key, "title" => ucwords($key)];
        })->toArray();
        $setup->insert($roles);

        Bouncer::allow("superadmin")->to(array_values(["manage_systems", "manage_admin"]));
        Bouncer::assign(["superadmin", "admin"])->to(Auth::id());

        return back()->with("success", "Roles and Privileges have been successfully created");

    }

}
