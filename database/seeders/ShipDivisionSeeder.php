<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShipDivision;
use Illuminate\Support\Str;
class ShipDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $brand_list = [
        //     'Ujjain',
        //     'Bhopal',
        //     'Indore'
        // ];

        // for ($i=0; $i <count($brand_list); $i++) {
        //     ShipDivision::create([
        //         'division_name' => $brand_list[$i],
        //         'brand_name_bn' => $brand_list[$i].' '.'bn',
        //         'brand_slug_en' => Str::slug($brand_list[$i]),
        //         'brand_slug_bn' => Str::slug($brand_list[$i].' '.'bn'),
        //     ]);
        // }
    }
}
