<?php

namespace Database\Seeders;
use App\Models\Livre;

use Database\Factories\LivreFactory;
use Illuminate\Database\Seeder;

class LivresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //dd('test');
      Livre::factory(100)->create();
    }
}
