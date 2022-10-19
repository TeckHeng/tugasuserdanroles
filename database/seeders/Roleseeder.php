<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $roles = [
            [
                'name' => 'Admin'
            ],
            [
                'name' => 'Pelanggan'
            ]
            ];
            Roles::insert($roles);  
        }
    } 

    
    








    
    