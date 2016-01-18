<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(
        array(
            array(                    
                'nombres' 		=> 'Harry', 
                'email'			=> 'prueba1@huellas.pe',
                'tipo_usuario'	=> 'Alumno',
                'password' 		=> bcrypt('prueba1')
            )
        ));                
    }
}
