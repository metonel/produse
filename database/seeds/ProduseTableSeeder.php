<?php

use Illuminate\Database\Seeder;

class ProduseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Produse::class, 30)->create();
    }
}
