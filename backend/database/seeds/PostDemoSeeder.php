<?php

use Illuminate\Database\Seeder;

class PostDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Photos::class,300)->create();
    }
}
