<?php

namespace App\Repositories;

use App\model\ConnectionInfo;
use Illuminate\Support\Facades\Schema;

class ConnectionInfoRepository
{
    public function show($data)
    {
        return ConnectionInfo::all();
    }

    public function add($data)
    {
        ConnectionInfo::insert($data);
        try {
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }

    public function modify($data)
    {
        if (empty($data['id'])) {
            return false;
        }
        $exists = ConnectionInfo::find($data['id']);
        if (empty($exists)) {
            return false;
        }
        try {
            ConnectionInfo::where('id', $data['id'])->update($data);
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }

}

