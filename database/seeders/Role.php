<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Role as Model;

class Role extends Seeder
{
    
    public function run()
    {
        DB::table('roles')
            ->insert([
                [
                    'id' => Model::ADMIN,
                    'name' => 'admin'
                ],
                [
                    'id' => Model::USER,
                    'name' => 'user'
                ]
            ]);
    }
}
