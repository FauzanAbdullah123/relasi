<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

		$this->call('RelasiSeeder');

		$this->command->info('RelasiSeeder berhasil.');
    }
}
