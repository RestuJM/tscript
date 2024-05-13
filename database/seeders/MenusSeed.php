<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (env('DB_CONNECTION') == 'pgsql') {
            DB::table('public.users')
                ->insert([
                    [
                        'name'              => 'Development',
                        'username'          => 'dev',
                        'email'             => 'dev@exam.co',
                        'email_verified_at' => Carbon::now(),
                        'password'          => bcrypt('qwertz123'),
                        'role_id'           => 1,
                        'created_at'        => Carbon::now(),
                        'updated_at'        => Carbon::now()
                    ]
                ]);
        } else if (env('DB_CONNECTION') == 'mysql') {
            DB::table('menus')
                ->insert([
                    [
                        'name'          => 'Dashboard',
                        'route_name'    => 'dashboard',
                        'icon'          => 'fa fa-home',
                        'level'         => 1,
                    ],
                    [
                        'name'          => 'Setting',
                        'route_name'    => '',
                        'icon'          => 'fa fa-cogs',
                        'level'         => 1,
                    ],
                    [
                        'ParentID'      => 2,
                        'name'          => 'User',
                        'route_name'    => '',
                        'icon'          => 'fa fa-cogs',
                        'level'         => 1,
                    ]
                ]);
        } else {
            $this->command->info('PLEASE CHOICE "pgsql" OR "mysql" FOR DB_CONNECTION');
        }
    }
}
