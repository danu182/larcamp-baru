<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $camps=[
            [
                'title'=>'Gila Belajar',
                'slug'=>Str::slug('Gila Belajar'),
                'price'=>280,
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),
            ],
            [
                'title'=>'Baru Mulai',
                'slug'=>'baru-mulai',
                'price'=>140,
                'created_at'=>date('Y-m-d H:i:s',time()),
                'updated_at'=>date('Y-m-d H:i:s',time()),
            ],
            
            ];

//  1. cara pertama
            // dengan foreach perulangan kita tidak harus mennuliskan  created_at dan updateed_at
            //  [
            //     'title'=>'Gila Belajar',
            //     'slug'=>Str::slug('Gila Belajar'),
            //     'price'=>280,
            //   ]
            // otomatis kolom created_at dan updateed_at terisi otomatis di tabel            foreach ($camps as $key =>$camp){
            // hanya denga menulis seperti ini dan janagn lupa use model di bagian atas sesuai dengan tabel yang akan di isi
            // --------------------------------
            // foreach($camps as $key=>$camp)
            // {
            //     Camp::create($camp);
            // }


// 2. cara kedua dengan query builder
            // untuk array nya harus di tulis juga created_at dan updated_at nya, jika tidak di tulisakn dalam array makan kolm created_at dan updater_at di tabel akan kososng atau tidak terisi
            // [
            //     'title'=>'Gila Belajar',
            //     'slug'=>Str::slug('Gila Belajar'),
            //     'price'=>280,
            //     'created_at'=>date('Y-m-d H:i:s',time()),
            //     'updated_at'=>date('Y-m-d H:i:s',time()),
            // ],
            // ......
            Camp::insert($camps);

    }
}
