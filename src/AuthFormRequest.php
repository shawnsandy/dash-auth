<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 7/28/17
 * Time: 11:02 AM
 */

namespace ShawnSandy\DashAuth;


use App\User;
use Auth;
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

            return Bouncer::allow($role)->to($privilege);

        endif;

        return false;
    }

    public function removePrivilegeFromRole()
    {
        if ($this->has(['role', 'privilege'])):

            $role = $this->get("role");
            $privilege = $this->get("privilege");

            return Bouncer::disallow($role)->to($privilege);

        endif;
        return false;

    }

    protected function theUser($id) {
        return User::find($id);
    }

}
