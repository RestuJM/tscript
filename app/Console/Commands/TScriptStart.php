<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use PDOException;

class TScriptStart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:tscript-start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Starter Project';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $database = env('DB_DATABASE', false);
        if (!$database) {
            $this->info('Skipping creation of database as env(DB_DATABASE) is empty');
            return 1;
        }

        if (env('DB_CONNECTION') == 'pgsql') {
            DB::connection('pgsql_conn')->statement('DROP DATABASE IF EXISTS ' . $database);
            DB::connection('pgsql_conn')->statement('CREATE DATABASE ' . $database);

            Artisan::call('migrate --path=/database/migrations/pgsql/');
            Artisan::call('db:seed --class=UsersSeed');
            $this->info('Success create "DATABASE", run "MIGRATION", and run "SEEDER"');
            return 0;
        } else if (env('DB_CONNECTION') == 'mysql') {
            $this->info('DB CONNECTION FOR --- MYSQL --- IN PROGRESS');
            return 2;
        } else {
            $this->info('PLEASE CHOICE "pgsql" OR "mysql" FOR DB_CONNECTION');
            return 2;
        }
    }
}
