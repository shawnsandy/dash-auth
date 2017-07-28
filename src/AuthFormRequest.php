<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 7/28/17
 * Time: 11:02 AM
 */

namespace ShawnSandy\DashAuth;


use Illuminate\Http\Request;

class AuthFormRequest extends Request
{

    public function save() {
        $this->has("key");


    }


}
