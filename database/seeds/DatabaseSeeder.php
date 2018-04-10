<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Auto;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Model::unguard();
		$this->call('AutosSeeder');
    }
}
    class AutosSeeder extends Seeder {
	public function run()
	{
	DB::table('autos')->delete();
    Auto::create(['placa' => 'XJU987', 'color' => 'rojo' ]);
    Auto::create(['placa' => 'JNM987', 'color' => 'verde' ]);
	}
}
