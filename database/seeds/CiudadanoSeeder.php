<?php

use Illuminate\Database\Seeder;
use App\android_models\Ciudadano;
class CiudadanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        | Field       | Type        | Null | Key | Default | Extra |
+-------------+-------------+------+-----+---------+-------+
| idciudadano | int(11)     | NO   | PRI | NULL    |       |
| nombre      | varchar(45) | YES  |     | NULL    |       |
| paterno     | varchar(45) | YES  |     | NULL    |       |
| materno     | varchar(45) | YES  |     | NULL    |       |
| dni         | varchar(8)  | YES  |     | NULL    |       |
| usuario     | varchar(45) | YES  |     | NULL    |       |
| password    
        */
		$ciudadano = new Ciudadano();
		$ciudadano->nombre = "Fulano";
		$ciudadano->paterno = "Fulano";
		$ciudadano->materno = "Fulano";
		$ciudadano->dni = "12345678";
		$ciudadano->usuario = "abc";
		$ciudadano->password = bcrypt('123456');
		$ciudadano->save();


    }
}
