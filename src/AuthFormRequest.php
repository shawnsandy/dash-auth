<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 7/28/17
 * Time: 11:02 AM
 */

namespace ShawnSandy\DashAuth;


use Auth;
use Illuminate\Http\Request;
use Silber\Bouncer\BouncerFacade as Bouncer;

class AuthFormRequest extends Request
{

    public function authorize() {
        return Auth::check();
    }

    public function assignRoleToUser()
    {

        if ($this->has(["role", "user"])):

            $user = $this->input("role");
            $role = $this->input("user");

            return Bouncer::assign($role)->to($user);
        endif;

        return false;
    }

    public function retractRoleFromUser()
    {

        if ($this->has(['user', 'role'])):

            $user = $this->input("user");
            $role = $this->input("role");
            return Bouncer::retract($role)->from($user);

        endif;

        return false;
    }


    public function assignPrivilegeToRole()
    {
        if ($this->has(["role", "privilege"])):
            $role = $this->input("role");
            $privilege = $this->input("privilege");

            return Bouncer::allow($role)->to($privilege);

        endif;
        return false;
    }

    public function removePrivilegeFromRole()
    {
        if ($this->has(['role', 'privilege'])):

            $role = $this->input('role');
            $privilege = $this->input("privilege");

            return Bouncer::disallow($role)->to($privilege);

        endif;
        return false;

    }

}
