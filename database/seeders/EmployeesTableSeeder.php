<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeesTableSeeder extends Seeder
{

    public function run()
    {
      
        $ramesh = Employee::create(['name' => 'Ramesh', 'manager_id' => null]);
        $gaurav = Employee::create(['name' => 'Gaurav', 'manager_id' => $ramesh->id]);
        $shalu = Employee::create(['name' => 'Shalu', 'manager_id' => $ramesh->id]);
        $deepu = Employee::create(['name' => 'Deepu', 'manager_id' => $gaurav->id]);
        Employee::create(['name' => 'Amit', 'manager_id' => $gaurav->id]);
        Employee::create(['name' => 'Sham Lal', 'manager_id' => $shalu->id]);
        Employee::create(['name' => 'Kapil', 'manager_id' => $shalu->id]);
        Employee::create(['name' => 'Prem Chorpa', 'manager_id' => $deepu->id]);
    }
}
