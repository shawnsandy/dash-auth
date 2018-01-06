<?php

use ShawnSandy\DashAuth\DashAuth;

if(!function_exists("dashauth"))
{

    function dashauth()
    {
        return app(DashAuth::class);
    }
}
