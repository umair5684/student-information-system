<?php

namespace App\ThirdPartyApi;

use Illuminate\Support\Facades\Http;

class ReqRes
{
    public function fetchUsers()
    {
        $response = Http::get('https://reqres.in/api/users');

        if ($response->ok()) {
            $array = $response->json();

            $response = [];

            foreach ($array['data'] as $item) {
                $response[] = [
                    'fullname' => $item['first_name'] . " " . $item['last_name'],
                    'rollno' => 0,
                    'program' => 3,
                    'semester' => 0,
                    'phone_no' => 0,
                    'address' => 0,
                    'email' => $item['email'],
                ];
            }

            return $response;
        }

        return [];
    }
}
