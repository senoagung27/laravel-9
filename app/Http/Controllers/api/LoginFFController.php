<?php

namespace App\Http\Controllers\api;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginFFController extends Controller
{
    public function login(Request $request)
    {
        $client = new Client();
        $response = $client->post('https://api.freshfactory.id/v1/admin/login', [
            'form_params' => [
                'email' => $request->email,
                'password' => $request->password,
            ]
        ]);
        $data = json_decode($response->getBody()->getContents());
        // dd($data);
        if ($data) {
            return response()->json(['code' => 200,'message' => 'Login Succees', 'data' => $data]);
        } else {
            return response()->json(['code' => 500,'message' => 'Login Failed']);
        }
    }
}
