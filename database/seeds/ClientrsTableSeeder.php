<?php

use Illuminate\Database\Seeder;
use App\Clientr;

class ClientrsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Clientr::class, 10)->create();
    }
}
