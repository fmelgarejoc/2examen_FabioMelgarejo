<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $empleados = [
            [
                'nombre' => 'Juan',
                'apellido' => 'Pérez',
                'correo' => 'juan.perez@empresa.com',
                'salario' => 3500.50
            ],
            [
                'nombre' => 'María',
                'apellido' => 'González',
                'correo' => 'maria.gonzalez@empresa.com',
                'salario' => 4200.75
            ],
            [
                'nombre' => 'Carlos',
                'apellido' => 'Rodríguez',
                'correo' => 'carlos.rodriguez@empresa.com',
                'salario' => 3800.00
            ],
            [
                'nombre' => 'Ana',
                'apellido' => 'López',
                'correo' => 'ana.lopez@empresa.com',
                'salario' => 5100.25
            ],
            [
                'nombre' => 'Pedro',
                'apellido' => 'Martínez',
                'correo' => 'pedro.martinez@empresa.com',
                'salario' => 2950.80
            ],
            [
                'nombre' => 'Laura',
                'apellido' => 'Hernández',
                'correo' => 'laura.hernandez@empresa.com',
                'salario' => 4700.60
            ],
            [
                'nombre' => 'Miguel',
                'apellido' => 'Díaz',
                'correo' => 'miguel.diaz@empresa.com',
                'salario' => 3300.90
            ],
            [
                'nombre' => 'Elena',
                'apellido' => 'Sánchez',
                'correo' => 'elena.sanchez@empresa.com',
                'salario' => 5600.40
            ],
            [
                'nombre' => 'Jorge',
                'apellido' => 'Ramírez',
                'correo' => 'jorge.ramirez@empresa.com',
                'salario' => 4100.30
            ],
            [
                'nombre' => 'Sofía',
                'apellido' => 'Fernández',
                'correo' => 'sofia.fernandez@empresa.com',
                'salario' => 3900.15
            ],
            [
                'nombre' => 'Diego',
                'apellido' => 'Castro',
                'correo' => 'diego.castro@empresa.com',
                'salario' => 4800.70
            ],
            [
                'nombre' => 'Isabel',
                'apellido' => 'Romero',
                'correo' => 'isabel.romero@empresa.com',
                'salario' => 5200.85
            ]
        ];

        foreach ($empleados as $empleado) {
            Empleado::create($empleado);
        }
    }
}