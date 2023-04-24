<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function getUSers(Request $request)
    {
        return response()->json(
            [
                "data" => User::getUsers($request->all())
            ],
            Response::HTTP_OK
        );
    }
}
