<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class MigrateSeed extends BaseCommand
{
    protected $group       = 'Database';
    protected $name        = 'migrate:seed';
    protected $description = 'Runs all new migrations and seeds the database.';

    public function run(array $params)
    {
        // Run migrations
        CLI::write('Running migrations...', 'green');
        \Config\Services::migrations()->latest();

        // Run seeders
        CLI::write('Seeding database...', 'green');
        $seeder = \Config\Database::seeder();
        $seeder->call('InitialSeeder'); // you can chain more seeders here
        // $seeder->call('');
    }
}
