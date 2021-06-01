<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use\Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
        [   "name"=>"Samsung s21",
            "price"=>"INR 21000",
            "category"=>"electronics",
            "gallery"=>"samsung_phone.jfif",
            "description"=>" A smart phone with 16GB Ram 18mgpx front camera and 12mgpx back camera 72hrs battery backup"
        ],

        [   "name"=>"Nokia Mobile G67",
            "price"=>"INR 18500",
            "category"=>"electronics",
            "gallery"=>"nokia_phone.jfif",
            "description"=>" A smart phone with 14GB Ram 8mgpx front camera and 12mgpx back camera 15hrs battery backup"
        ],
        
        [   "name"=>"Samsung Washing Machine",
            "price"=>"INR 32845",
            "category"=>"electronics",
            "gallery"=>"samsung_washingmachine.jfif",
            "description"=>"Complete House Hold Washing Machine With Clean and Clear Wash"
        ],
    
        [   "name"=>"Motorolla TV 51d",
            "price"=>"INR 47000",
            "category"=>"electronics",
            "gallery"=>"motorola_tv.jfif",
            "description"=>"48 INCH diplay font flat with dual audio speakers"
        ],
        [   "name"=>"LG Television Pro 112",
            "price"=>"INR 29000",
            "category"=>"electronics",
            "gallery"=>"lg_tv.jfif",
            "description"=>"32 INCH diplay font oval and  dual audio speakers"
        ],
    
        [   "name"=>"LG Fridge",
            "price"=>"INR 21000",
            "category"=>"electronics",
            "gallery"=>"lg_fridge.jfif",
            "description"=>"Dual window with cleaning facilities"
        ],
        [   "name"=>"Levis Mens jeans",
            "price"=>"INR 989",
            "category"=>"cloths",
            "gallery"=>"levis_mens_jeans.jfif",
            "description"=>"Cotton wear for all uses"
        ],
        [   "name"=>"Levis Womens jeans",
            "price"=>"INR 989",
            "category"=>"cloths",
            "gallery"=>"levis_women_jeans.jfif",
            "description"=>"Cotton wear for all uses"
        ]);  
        
    }
}
