<?php

use App\Models\{User};

if (!function_exists('user')) {
    function user($id = null): App\Models\User
    {
        return $id ? User::find($id) : auth()->user();
    }
}
