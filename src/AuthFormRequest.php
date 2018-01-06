<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 7/28/17
 * Time: 11:02 AM
 */

namespace ShawnSandy\DashAuth;


use Auth;
use App\User;
use Silber\Bouncer\Database\Role;
use Illuminate\Foundation\Http\FormRequest;
use Silber\Bouncer\BouncerFacade as Bouncer;

class AuthFormRequest extends FormRequest
{



    public function authorize() {
        return Auth::check();
    }

    public function rules()
    {
        return [
            "user" => "sometimes|required|integer",
            "role" => "sometimes|required|string",
            "privilege" => "sometimes|required|string",
        ];
    }

    public function assignRoleToUser()
    {

        if ($this->has(["role", "user"])):

            $user = $this->input("user");
            $role = $this->input("role");

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
            $role = $this->get("role");

            $privilege = $this->get("privilege");

           Bouncer::allow($role)->to($privilege);

           $check = dashauth()->abilitiesCheck($role, $privilege);

           if($check)
           return true;

           return false;

        endif;

        return false;
    }

    public function removePrivilegeFromRole()
    {
        if ($this->has(['role', 'privilege'])):

            $role = $this->get("role");
            $privilege = $this->get("privilege");

            Bouncer::disallow($role)->to($privilege);

            $check = dashauth()->abilitiesCheck($role, $privilege);

            if(!$check)
            return true;

            return false;

        endif;
        return false;

    }

    protected function theUser($id) {
        return User::find($id);
    }

}
