<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\ContactType as Model;

class ContactType extends Seeder
{
    
    public function run()
    {
        DB::table('contact_types')
            ->insert([
                [
                    'id' => Model::PHONE,
                    'name' => 'phone'
                ],
                [
                    'id' => Model::CELLPHONE,
                    'name' => 'cellphone'
                ],
                [
                    'id' => Model::FACEBOOK,
                    'name' => 'Facebook'
                ],
                [
                    'id' => Model::INSTAGRAM,
                    'name' => 'Instagram'
                ]
            ]);
    }
}
