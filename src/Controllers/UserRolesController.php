<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 7/18/2017
     * Time: 1:41 AM
     */

    namespace ShawnSandy\DashAuth\Controllers;


    use App\User;
    use Illuminate\Routing\Controller;

    class UserRolesController extends Controller
    {

        public function assignRole($user_id, $role = "admin")
        {
            $user = User::find($user_id);

            if ($user->assign($role))
                return back()->with("success", "Role assigned to user :" . ucfirst($role));

            return back()->with("error", "Failed to assign " . ucfirst($role));

        }

        public function addAbility($ability = "add_posts")
        {

        }



    }
