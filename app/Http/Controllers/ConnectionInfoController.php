<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConnectionInfoRequest;
use App\Repositories\ConnectionInfoRepository;
use Illuminate\Http\Request;

class ConnectionInfoController extends Controller
{
    //
    public function show(ConnectionInfoRequest $request, ConnectionInfoRepository $connInfo)
    {
        return $connInfo->all();
    }

    //
    public function add(ConnectionInfoRequest $request, ConnectionInfoRepository $connInfo)
    {
        $validated = $request->validated();
        $data = request(['url', 'type', 'host', 'port', 'database', 'username', 'password', 'charset']);
        $connInfo->add($data);
        return 'ok';
    }

    //
    public function modify(ConnectionInfoRequest $request, ConnectionInfoRepository $connInfo)
    {
        $validated = $request->validated();
        $data = request(['id', 'url', 'type', 'host', 'port', 'database', 'username', 'password', 'charset']);
        $connInfo->modify($data);
        return 'ok';
    }

}
