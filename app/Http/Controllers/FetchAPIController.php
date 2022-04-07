<?php

namespace App\Http\Controllers;

use App\Actions\StoreStudents;
use App\ThirdPartyApi\ReqRes;

class FetchAPIController extends Controller
{
    public function fetchApi(ReqRes $api, StoreStudents $store)
    {
        $data = $api->fetchUsers();

        $created = $store->save($data);

        return ['Students created: ' . $created];
    }
}

