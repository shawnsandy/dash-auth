<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 2/22/2017
     * Time: 10:03 PM
     */

    namespace ShawnSandy\DashAuth;

    use Silber\Bouncer\Database\Role;

    class DashAuth
    {

        public function routes(){
            require  __DIR__.'/routes.php';
            //require  __DIR__.'/routes/setup.php';

        }

        public function roles() {
             return Role::with('abilities')->get();
        }

    }
