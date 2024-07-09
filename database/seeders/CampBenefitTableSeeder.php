<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campBenefit=[
            [
                'camp_id' => 1,
                'name' =>'Pro Tochstack Kit',
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),
            ],
            [
                'camp_id' => 1,
                'name' =>'iMac Pro 2021 & Display',
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),
            ],
            [
                'camp_id' => 1,
                'name' =>'Mentoring Program',
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),
            ],
            [
                'camp_id' => 1,
                'name' =>'Final Project Certificate',
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),
            ],
            [
                'camp_id' => 1,
                'name' =>'Future Job Opportunity',
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),
            ],
            [
                'camp_id' => 1,
                'name' =>'Premium Design Kit',
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),
            ],
            [
                'camp_id' => 1,
                'name' =>'Website Builder',
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),
            ],
            [
                'camp_id' => 2,
                'name' =>'1-1 Mentoring Program',
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),
            ],
            [
                'camp_id' => 2,
                'name' =>'Final Project Certificate',
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),
            ],
            [
                'camp_id' => 2,
                'name' =>'Offline Course Values',
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),
            ],
        ];

        // foreach ($campBenefit as $key => $value) {
        //     CampBenefit::create($value);
        // }

        CampBenefit::insert($campBenefit);

    }
}
