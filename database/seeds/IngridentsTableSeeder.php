<?php

use Illuminate\Database\Seeder;

class IngridentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ingridents')->delete();
        
        \DB::table('ingridents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dairy',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Vegetables',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Fruits',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Baking and Grains',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Added Sweeteners',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Spices',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Meats',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Fish',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'SeaFoods',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Condiments',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Oil',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Seasonings',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Legumes',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Alcohol',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Soup',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Nuts',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Dairy Alternatives',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Desserts and Cakes',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Beverages',
                'parent_id' => NULL,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => ' butter ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => ' egg ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => ' milk ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => ' parmesan ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => ' cheddar ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => ' american cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => ' sour cream ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => ' cream cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => ' mozzarella ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => ' yogurt ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => ' cream ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => ' evaporated milk ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => ' whipped cream ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => ' half and half ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => ' feta ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => ' monterey jack cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => ' condensed milk ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:03',
                'updated_at' => '2018-10-28 17:00:03',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => ' cottage cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => ' ice cream ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => ' swiss cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => ' velveeta ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => ' frosting ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => ' buttermilk ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => ' ricotta ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => ' goat cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => ' provolone ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => ' blue cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => ' powdered milk ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => ' colby cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => ' pepper jack ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => ' italian cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => ' soft cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => ' gouda ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => ' pepperjack cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => ' romano ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => ' brie ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => ' pizza cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => ' ghee ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:04',
                'updated_at' => '2018-10-28 17:00:04',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => ' creme fraiche ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => ' cheese soup ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => ' gruyere ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => ' pecorino cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => ' custard ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => ' muenster ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => ' queso fresco cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => ' hard cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => ' havarti cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => ' asiago ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => ' mascarpone ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => ' neufchatel ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => ' halloumi ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => ' paneer ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => ' brick cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => ' camembert cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => ' goat milk ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => ' garlic herb cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => ' edam cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => ' manchego ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => ' fontina ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => ' stilton cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => ' emmenthaler cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => ' red leicester cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => ' jarlsberg cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => ' bocconcini cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => ' farmer cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => ' creme de cassis ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:05',
                'updated_at' => '2018-10-28 17:00:05',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => ' wensleydale cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:06',
                'updated_at' => '2018-10-28 17:00:06',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => ' longhorn cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:06',
                'updated_at' => '2018-10-28 17:00:06',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => ' double gloucester cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:06',
                'updated_at' => '2018-10-28 17:00:06',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => ' raclette cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:06',
                'updated_at' => '2018-10-28 17:00:06',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => ' lancashire cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:06',
                'updated_at' => '2018-10-28 17:00:06',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => ' cheshire cheese ',
                'parent_id' => 1,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:00:06',
                'updated_at' => '2018-10-28 17:00:06',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => ' onion ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:15',
                'updated_at' => '2018-10-28 17:01:15',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => ' garlic ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:15',
                'updated_at' => '2018-10-28 17:01:15',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => ' tomato ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:15',
                'updated_at' => '2018-10-28 17:01:15',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => ' potato ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:15',
                'updated_at' => '2018-10-28 17:01:15',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => ' carrot ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:15',
                'updated_at' => '2018-10-28 17:01:15',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => ' bell pepper ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:15',
                'updated_at' => '2018-10-28 17:01:15',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => ' basil ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:15',
                'updated_at' => '2018-10-28 17:01:15',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => ' parsley ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:15',
                'updated_at' => '2018-10-28 17:01:15',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => ' broccoli ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:15',
                'updated_at' => '2018-10-28 17:01:15',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => ' corn ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:15',
                'updated_at' => '2018-10-28 17:01:15',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => ' spinach ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:15',
                'updated_at' => '2018-10-28 17:01:15',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => ' mushroom ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:15',
                'updated_at' => '2018-10-28 17:01:15',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => ' green beans ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:15',
                'updated_at' => '2018-10-28 17:01:15',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => ' ginger ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:15',
                'updated_at' => '2018-10-28 17:01:15',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => ' chili pepper ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => ' celery ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => ' rosemary ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => ' salad greens ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => ' red onion ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => ' cucumber ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => ' sweet potato ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => ' pickle ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => ' avocado ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => ' zucchini ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => ' cilantro ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => ' frozen vegetables ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => ' olive ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => ' asparagus ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => ' cabbage ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => ' cauliflower ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => ' dill ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => ' kale ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => ' mixed vegetable ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => ' pumpkin ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => ' squash ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => ' mint ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => ' scallion ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => ' sun dried tomato ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => ' shallot ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:16',
                'updated_at' => '2018-10-28 17:01:16',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => ' eggplant ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => ' beet ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => ' butternut squash ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => ' horseradish ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => ' leek ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => ' caper ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => ' brussels sprout ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => ' artichoke heart ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => ' chia seeds ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => ' radish ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => ' sauerkraut ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => ' artichoke ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => ' portobello mushroom ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => ' sweet pepper ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => ' arugula ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => ' spaghetti squash ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => ' capsicum ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => ' bok choy ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => ' parsnip ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => ' okra ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => ' yam ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => ' fennel ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => ' turnip ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => ' snow peas ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => ' bean sprouts ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => ' seaweed ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => ' chard ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => ' collard ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => ' canned tomato ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:17',
                'updated_at' => '2018-10-28 17:01:17',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => ' pimiento ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => ' watercress ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => ' tomatillo ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => ' rocket ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => ' mustard greens ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => ' bamboo shoot ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => ' rutabaga ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => ' endive ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => ' broccoli rabe ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => ' jicama ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => ' kohlrabi ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => ' hearts of palm ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => ' butternut ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => ' celery root ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => ' daikon ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => ' radicchio ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => ' porcini ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => ' chinese broccoli ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => ' jerusalem artichoke ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => ' cress ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => ' water chestnut ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => ' dulse ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => ' micro greens ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => ' burdock ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => ' chayote ',
                'parent_id' => 2,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:01:18',
                'updated_at' => '2018-10-28 17:01:18',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => ' lemon ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:06',
                'updated_at' => '2018-10-28 17:02:06',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => ' apple ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:06',
                'updated_at' => '2018-10-28 17:02:06',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => ' banana ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:06',
                'updated_at' => '2018-10-28 17:02:06',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => ' lime ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:06',
                'updated_at' => '2018-10-28 17:02:06',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => ' strawberry ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:06',
                'updated_at' => '2018-10-28 17:02:06',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => ' orange ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:06',
                'updated_at' => '2018-10-28 17:02:06',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => ' pineapple ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:06',
                'updated_at' => '2018-10-28 17:02:06',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => ' blueberry ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:06',
                'updated_at' => '2018-10-28 17:02:06',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => ' raisin ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:06',
                'updated_at' => '2018-10-28 17:02:06',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => ' coconut ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:06',
                'updated_at' => '2018-10-28 17:02:06',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => ' grape ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:06',
                'updated_at' => '2018-10-28 17:02:06',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => ' peach ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:06',
                'updated_at' => '2018-10-28 17:02:06',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => ' raspberry ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:06',
                'updated_at' => '2018-10-28 17:02:06',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => ' cranberry ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:06',
                'updated_at' => '2018-10-28 17:02:06',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => ' mango ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => ' pear ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => ' blackberry ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => ' cherry ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => ' date ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => ' watermelon ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => ' berries ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => ' kiwi ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => ' grapefruit ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => ' mandarin ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => ' craisins ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => ' cantaloupe ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => ' plum ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => ' apricot ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => ' clementine ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => ' prunes ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => ' apple butter ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => ' pomegranate ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => ' nectarine ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => ' fig ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => ' tangerine ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => ' papaya ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => ' rhubarb ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => ' sultanas ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => ' plantain ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:07',
                'updated_at' => '2018-10-28 17:02:07',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => ' currant ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:08',
                'updated_at' => '2018-10-28 17:02:08',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => ' passion fruit ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:08',
                'updated_at' => '2018-10-28 17:02:08',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => ' guava ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:08',
                'updated_at' => '2018-10-28 17:02:08',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => ' persimmons ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:08',
                'updated_at' => '2018-10-28 17:02:08',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => ' lychee ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:08',
                'updated_at' => '2018-10-28 17:02:08',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => ' lingonberry ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:08',
                'updated_at' => '2018-10-28 17:02:08',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => ' tangelos ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:08',
                'updated_at' => '2018-10-28 17:02:08',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => ' kumquat ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:08',
                'updated_at' => '2018-10-28 17:02:08',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => ' boysenberry ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:08',
                'updated_at' => '2018-10-28 17:02:08',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => ' star fruit ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:08',
                'updated_at' => '2018-10-28 17:02:08',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => ' quince ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:08',
                'updated_at' => '2018-10-28 17:02:08',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => ' honeydew ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:08',
                'updated_at' => '2018-10-28 17:02:08',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => ' crabapples ',
                'parent_id' => 3,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:08',
                'updated_at' => '2018-10-28 17:02:08',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => ' rice ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => ' pasta ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => ' flour ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => ' bread ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => ' baking powder ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => ' baking soda ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => ' bread crumbs ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => ' cornstarch ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => ' rolled oats ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => ' noodle ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => ' flour tortillas ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => ' pancake mix ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => ' yeast ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => ' cracker ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            250 => 
            array (
                'id' => 251,
                'name' => ' quinoa ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            251 => 
            array (
                'id' => 252,
                'name' => ' brown rice ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:53',
                'updated_at' => '2018-10-28 17:02:53',
            ),
            252 => 
            array (
                'id' => 253,
                'name' => ' cornmeal ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            253 => 
            array (
                'id' => 254,
                'name' => ' self rising flour ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            254 => 
            array (
                'id' => 255,
                'name' => ' cake mix ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            255 => 
            array (
                'id' => 256,
                'name' => ' saltines ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            256 => 
            array (
                'id' => 257,
                'name' => ' popcorn ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            257 => 
            array (
                'id' => 258,
                'name' => ' macaroni cheese mix ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            258 => 
            array (
                'id' => 259,
                'name' => ' corn tortillas ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            259 => 
            array (
                'id' => 260,
                'name' => ' ramen ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            260 => 
            array (
                'id' => 261,
                'name' => ' cereal ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            261 => 
            array (
                'id' => 262,
                'name' => ' biscuits ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            262 => 
            array (
                'id' => 263,
                'name' => ' stuffing mix ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            263 => 
            array (
                'id' => 264,
                'name' => ' couscous ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            264 => 
            array (
                'id' => 265,
                'name' => ' pie crust ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            265 => 
            array (
                'id' => 266,
                'name' => ' bisquick ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            266 => 
            array (
                'id' => 267,
                'name' => ' chips ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            267 => 
            array (
                'id' => 268,
                'name' => ' angel hair ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            268 => 
            array (
                'id' => 269,
                'name' => ' coconut flake ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            269 => 
            array (
                'id' => 270,
                'name' => ' bread flour ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            270 => 
            array (
                'id' => 271,
                'name' => ' croutons ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            271 => 
            array (
                'id' => 272,
                'name' => ' lasagne ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            272 => 
            array (
                'id' => 273,
                'name' => ' pizza dough ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            273 => 
            array (
                'id' => 274,
                'name' => ' bagel ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            274 => 
            array (
                'id' => 275,
                'name' => ' puff pastry ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            275 => 
            array (
                'id' => 276,
                'name' => ' hot dog bun ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            276 => 
            array (
                'id' => 277,
                'name' => ' barley ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            277 => 
            array (
                'id' => 278,
                'name' => ' multigrain bread ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:54',
                'updated_at' => '2018-10-28 17:02:54',
            ),
            278 => 
            array (
                'id' => 279,
                'name' => ' potato flakes ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            279 => 
            array (
                'id' => 280,
                'name' => ' pretzel ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            280 => 
            array (
                'id' => 281,
                'name' => ' cornbread ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            281 => 
            array (
                'id' => 282,
                'name' => ' english muffin ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            282 => 
            array (
                'id' => 283,
                'name' => ' cornflour ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            283 => 
            array (
                'id' => 284,
                'name' => ' crescent roll dough ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            284 => 
            array (
                'id' => 285,
                'name' => ' cream of wheat ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            285 => 
            array (
                'id' => 286,
                'name' => ' coconut flour ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            286 => 
            array (
                'id' => 287,
                'name' => ' pita ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            287 => 
            array (
                'id' => 288,
                'name' => ' risotto ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            288 => 
            array (
                'id' => 289,
                'name' => ' muffin mix ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            289 => 
            array (
                'id' => 290,
                'name' => ' bicarbonate of soda ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            290 => 
            array (
                'id' => 291,
                'name' => ' ravioli ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            291 => 
            array (
                'id' => 292,
                'name' => ' wheat ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            292 => 
            array (
                'id' => 293,
                'name' => ' rice flour ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            293 => 
            array (
                'id' => 294,
                'name' => ' polenta ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            294 => 
            array (
                'id' => 295,
                'name' => ' baguette ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            295 => 
            array (
                'id' => 296,
                'name' => ' gnocchi ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            296 => 
            array (
                'id' => 297,
                'name' => ' vermicelli ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            297 => 
            array (
                'id' => 298,
                'name' => ' semolina ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            298 => 
            array (
                'id' => 299,
                'name' => ' wheat germ ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            299 => 
            array (
                'id' => 300,
                'name' => ' buckwheat ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            300 => 
            array (
                'id' => 301,
                'name' => ' croissants ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            301 => 
            array (
                'id' => 302,
                'name' => ' bread dough ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            302 => 
            array (
                'id' => 303,
                'name' => ' filo dough ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            303 => 
            array (
                'id' => 304,
                'name' => ' yeast flake ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            304 => 
            array (
                'id' => 305,
                'name' => ' pierogi ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            305 => 
            array (
                'id' => 306,
                'name' => ' matzo meal ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            306 => 
            array (
                'id' => 307,
                'name' => ' rye ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            307 => 
            array (
                'id' => 308,
                'name' => ' tapioca flour ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:55',
                'updated_at' => '2018-10-28 17:02:55',
            ),
            308 => 
            array (
                'id' => 309,
                'name' => ' shortcrust pastry ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            309 => 
            array (
                'id' => 310,
                'name' => ' potato starch ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            310 => 
            array (
                'id' => 311,
                'name' => ' breadsticks ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            311 => 
            array (
                'id' => 312,
                'name' => ' ciabatta ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            312 => 
            array (
                'id' => 313,
                'name' => ' spelt ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            313 => 
            array (
                'id' => 314,
                'name' => ' angel food ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            314 => 
            array (
                'id' => 315,
                'name' => ' tapioca starch ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            315 => 
            array (
                'id' => 316,
                'name' => ' starch ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            316 => 
            array (
                'id' => 317,
                'name' => ' whole wheat flour ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            317 => 
            array (
                'id' => 318,
                'name' => ' gram flour ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            318 => 
            array (
                'id' => 319,
                'name' => ' sourdough starter ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            319 => 
            array (
                'id' => 320,
                'name' => ' wafer ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            320 => 
            array (
                'id' => 321,
                'name' => ' bran ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            321 => 
            array (
                'id' => 322,
                'name' => ' challah ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            322 => 
            array (
                'id' => 323,
                'name' => ' sponge cake ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            323 => 
            array (
                'id' => 324,
                'name' => ' malt extract ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            324 => 
            array (
                'id' => 325,
                'name' => ' sorghum flour ',
                'parent_id' => 4,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:02:56',
                'updated_at' => '2018-10-28 17:02:56',
            ),
            325 => 
            array (
                'id' => 326,
                'name' => ' sugar ',
                'parent_id' => 5,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:17',
                'updated_at' => '2018-10-28 17:03:17',
            ),
            326 => 
            array (
                'id' => 327,
                'name' => ' brown sugar ',
                'parent_id' => 5,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:17',
                'updated_at' => '2018-10-28 17:03:17',
            ),
            327 => 
            array (
                'id' => 328,
                'name' => ' honey ',
                'parent_id' => 5,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:17',
                'updated_at' => '2018-10-28 17:03:17',
            ),
            328 => 
            array (
                'id' => 329,
                'name' => ' confectioners sugar ',
                'parent_id' => 5,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:17',
                'updated_at' => '2018-10-28 17:03:17',
            ),
            329 => 
            array (
                'id' => 330,
                'name' => ' maple syrup ',
                'parent_id' => 5,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:17',
                'updated_at' => '2018-10-28 17:03:17',
            ),
            330 => 
            array (
                'id' => 331,
                'name' => ' corn syrup ',
                'parent_id' => 5,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:17',
                'updated_at' => '2018-10-28 17:03:17',
            ),
            331 => 
            array (
                'id' => 332,
                'name' => ' molasses ',
                'parent_id' => 5,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:17',
                'updated_at' => '2018-10-28 17:03:17',
            ),
            332 => 
            array (
                'id' => 333,
                'name' => ' artificial sweetener ',
                'parent_id' => 5,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:17',
                'updated_at' => '2018-10-28 17:03:17',
            ),
            333 => 
            array (
                'id' => 334,
                'name' => ' agave nectar ',
                'parent_id' => 5,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:17',
                'updated_at' => '2018-10-28 17:03:17',
            ),
            334 => 
            array (
                'id' => 335,
                'name' => ' cinnamon ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            335 => 
            array (
                'id' => 336,
                'name' => ' vanilla ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            336 => 
            array (
                'id' => 337,
                'name' => ' garlic powder ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            337 => 
            array (
                'id' => 338,
                'name' => ' paprika ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            338 => 
            array (
                'id' => 339,
                'name' => ' oregano ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            339 => 
            array (
                'id' => 340,
                'name' => ' chili powder ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            340 => 
            array (
                'id' => 341,
                'name' => ' red pepper flake ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            341 => 
            array (
                'id' => 342,
                'name' => ' cumin ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            342 => 
            array (
                'id' => 343,
                'name' => ' cayenne ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            343 => 
            array (
                'id' => 344,
                'name' => ' italian seasoning ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            344 => 
            array (
                'id' => 345,
                'name' => ' thyme ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            345 => 
            array (
                'id' => 346,
                'name' => ' onion powder ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            346 => 
            array (
                'id' => 347,
                'name' => ' nutmeg ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            347 => 
            array (
                'id' => 348,
                'name' => ' ground nutmeg ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            348 => 
            array (
                'id' => 349,
                'name' => ' curry powder ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            349 => 
            array (
                'id' => 350,
                'name' => ' bay leaf ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            350 => 
            array (
                'id' => 351,
                'name' => ' taco seasoning ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            351 => 
            array (
                'id' => 352,
                'name' => ' sage ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            352 => 
            array (
                'id' => 353,
                'name' => ' clove ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            353 => 
            array (
                'id' => 354,
                'name' => ' allspice ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            354 => 
            array (
                'id' => 355,
                'name' => ' turmeric ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            355 => 
            array (
                'id' => 356,
                'name' => ' chive ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            356 => 
            array (
                'id' => 357,
                'name' => ' peppercorn ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            357 => 
            array (
                'id' => 358,
                'name' => ' ground coriander ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            358 => 
            array (
                'id' => 359,
                'name' => ' cajun seasoning ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:56',
                'updated_at' => '2018-10-28 17:03:56',
            ),
            359 => 
            array (
                'id' => 360,
                'name' => ' coriander ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            360 => 
            array (
                'id' => 361,
                'name' => ' celery salt ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            361 => 
            array (
                'id' => 362,
                'name' => ' vanilla essence ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            362 => 
            array (
                'id' => 363,
                'name' => ' herbs ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            363 => 
            array (
                'id' => 364,
                'name' => ' steak seasoning ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            364 => 
            array (
                'id' => 365,
                'name' => ' poultry seasoning ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            365 => 
            array (
                'id' => 366,
                'name' => ' chile powder ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            366 => 
            array (
                'id' => 367,
                'name' => ' cardamom ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            367 => 
            array (
                'id' => 368,
                'name' => ' italian herbs ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            368 => 
            array (
                'id' => 369,
                'name' => ' tarragon ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            369 => 
            array (
                'id' => 370,
                'name' => ' garam masala ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            370 => 
            array (
                'id' => 371,
                'name' => ' marjoram ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            371 => 
            array (
                'id' => 372,
                'name' => ' mustard seed ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            372 => 
            array (
                'id' => 373,
                'name' => ' celery seed ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            373 => 
            array (
                'id' => 374,
                'name' => ' chinese five spice ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            374 => 
            array (
                'id' => 375,
                'name' => ' italian spice ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            375 => 
            array (
                'id' => 376,
                'name' => ' saffron ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            376 => 
            array (
                'id' => 377,
                'name' => ' onion flake ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            377 => 
            array (
                'id' => 378,
                'name' => ' herbes de provence ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            378 => 
            array (
                'id' => 379,
                'name' => ' chipotle ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            379 => 
            array (
                'id' => 380,
                'name' => ' dill seed ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            380 => 
            array (
                'id' => 381,
                'name' => ' fennel seed ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            381 => 
            array (
                'id' => 382,
                'name' => ' caraway ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            382 => 
            array (
                'id' => 383,
                'name' => ' cacao ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            383 => 
            array (
                'id' => 384,
                'name' => ' star anise ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            384 => 
            array (
                'id' => 385,
                'name' => ' savory ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            385 => 
            array (
                'id' => 386,
                'name' => ' chili paste ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:57',
                'updated_at' => '2018-10-28 17:03:57',
            ),
            386 => 
            array (
                'id' => 387,
                'name' => ' tamarind ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:58',
                'updated_at' => '2018-10-28 17:03:58',
            ),
            387 => 
            array (
                'id' => 388,
                'name' => ' aniseed ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:58',
                'updated_at' => '2018-10-28 17:03:58',
            ),
            388 => 
            array (
                'id' => 389,
                'name' => ' fenugreek ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:58',
                'updated_at' => '2018-10-28 17:03:58',
            ),
            389 => 
            array (
                'id' => 390,
                'name' => ' lavender ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:58',
                'updated_at' => '2018-10-28 17:03:58',
            ),
            390 => 
            array (
                'id' => 391,
                'name' => ' old bay seasoning ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:58',
                'updated_at' => '2018-10-28 17:03:58',
            ),
            391 => 
            array (
                'id' => 392,
                'name' => ' lemon balm ',
                'parent_id' => 6,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:03:58',
                'updated_at' => '2018-10-28 17:03:58',
            ),
            392 => 
            array (
                'id' => 393,
                'name' => ' chicken breast ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            393 => 
            array (
                'id' => 394,
                'name' => ' ground beef ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            394 => 
            array (
                'id' => 395,
                'name' => ' bacon ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            395 => 
            array (
                'id' => 396,
                'name' => ' sausage ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            396 => 
            array (
                'id' => 397,
                'name' => ' beef steak ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            397 => 
            array (
                'id' => 398,
                'name' => ' ham ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            398 => 
            array (
                'id' => 399,
                'name' => ' hot dog ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            399 => 
            array (
                'id' => 400,
                'name' => ' pork chops ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            400 => 
            array (
                'id' => 401,
                'name' => ' chicken thighs ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            401 => 
            array (
                'id' => 402,
                'name' => ' ground turkey ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            402 => 
            array (
                'id' => 403,
                'name' => ' cooked chicken ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            403 => 
            array (
                'id' => 404,
                'name' => ' turkey ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            404 => 
            array (
                'id' => 405,
                'name' => ' pork ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            405 => 
            array (
                'id' => 406,
                'name' => ' pepperoni ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            406 => 
            array (
                'id' => 407,
                'name' => ' whole chicken ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            407 => 
            array (
                'id' => 408,
                'name' => ' chicken leg ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:25',
                'updated_at' => '2018-10-28 17:04:25',
            ),
            408 => 
            array (
                'id' => 409,
                'name' => ' ground pork ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            409 => 
            array (
                'id' => 410,
                'name' => ' chorizo ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            410 => 
            array (
                'id' => 411,
                'name' => ' chicken wings ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            411 => 
            array (
                'id' => 412,
                'name' => ' beef roast ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            412 => 
            array (
                'id' => 413,
                'name' => ' polish sausage ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            413 => 
            array (
                'id' => 414,
                'name' => ' salami ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            414 => 
            array (
                'id' => 415,
                'name' => ' pork roast ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            415 => 
            array (
                'id' => 416,
                'name' => ' ground chicken ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            416 => 
            array (
                'id' => 417,
                'name' => ' pork ribs ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            417 => 
            array (
                'id' => 418,
                'name' => ' spam ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            418 => 
            array (
                'id' => 419,
                'name' => ' venison ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            419 => 
            array (
                'id' => 420,
                'name' => ' pork shoulder ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            420 => 
            array (
                'id' => 421,
                'name' => ' bologna ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            421 => 
            array (
                'id' => 422,
                'name' => ' bratwurst ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            422 => 
            array (
                'id' => 423,
                'name' => ' prosciutto ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            423 => 
            array (
                'id' => 424,
                'name' => ' lamb ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            424 => 
            array (
                'id' => 425,
                'name' => ' corned beef ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            425 => 
            array (
                'id' => 426,
                'name' => ' chicken roast ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            426 => 
            array (
                'id' => 427,
                'name' => ' lamb chops ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            427 => 
            array (
                'id' => 428,
                'name' => ' pancetta ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:26',
                'updated_at' => '2018-10-28 17:04:26',
            ),
            428 => 
            array (
                'id' => 429,
                'name' => ' ground lamb ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            429 => 
            array (
                'id' => 430,
                'name' => ' beef ribs ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            430 => 
            array (
                'id' => 431,
                'name' => ' duck ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            431 => 
            array (
                'id' => 432,
                'name' => ' pork belly ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            432 => 
            array (
                'id' => 433,
                'name' => ' beef liver ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            433 => 
            array (
                'id' => 434,
                'name' => ' leg of lamb ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            434 => 
            array (
                'id' => 435,
                'name' => ' canadian bacon ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            435 => 
            array (
                'id' => 436,
                'name' => ' beef shank ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            436 => 
            array (
                'id' => 437,
                'name' => ' veal ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            437 => 
            array (
                'id' => 438,
                'name' => ' chicken giblets ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            438 => 
            array (
                'id' => 439,
                'name' => ' cornish hen ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            439 => 
            array (
                'id' => 440,
                'name' => ' lamb shoulder ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            440 => 
            array (
                'id' => 441,
                'name' => ' lamb shank ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            441 => 
            array (
                'id' => 442,
                'name' => ' deer ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            442 => 
            array (
                'id' => 443,
                'name' => ' ground veal ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            443 => 
            array (
                'id' => 444,
                'name' => ' pastrami ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            444 => 
            array (
                'id' => 445,
                'name' => ' rabbit ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            445 => 
            array (
                'id' => 446,
                'name' => ' sliced turkey ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            446 => 
            array (
                'id' => 447,
                'name' => ' pork loin ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            447 => 
            array (
                'id' => 448,
                'name' => ' elk ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            448 => 
            array (
                'id' => 449,
                'name' => ' beef suet ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            449 => 
            array (
                'id' => 450,
                'name' => ' veal cutlet ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            450 => 
            array (
                'id' => 451,
                'name' => ' lamb loin ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            451 => 
            array (
                'id' => 452,
                'name' => ' marrow bones ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            452 => 
            array (
                'id' => 453,
                'name' => ' goose ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            453 => 
            array (
                'id' => 454,
                'name' => ' chicken tenders ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:27',
                'updated_at' => '2018-10-28 17:04:27',
            ),
            454 => 
            array (
                'id' => 455,
                'name' => ' veal chops ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            455 => 
            array (
                'id' => 456,
                'name' => ' quail ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            456 => 
            array (
                'id' => 457,
                'name' => ' oxtail ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            457 => 
            array (
                'id' => 458,
                'name' => ' pheasant ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            458 => 
            array (
                'id' => 459,
                'name' => ' lamb liver ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            459 => 
            array (
                'id' => 460,
                'name' => ' moose ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            460 => 
            array (
                'id' => 461,
                'name' => ' turkey liver ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            461 => 
            array (
                'id' => 462,
                'name' => ' pork liver ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            462 => 
            array (
                'id' => 463,
                'name' => ' veal shank ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            463 => 
            array (
                'id' => 464,
                'name' => ' foie gras ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            464 => 
            array (
                'id' => 465,
                'name' => ' beef sirloin ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            465 => 
            array (
                'id' => 466,
                'name' => ' liver sausage ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            466 => 
            array (
                'id' => 467,
                'name' => ' sweetbread ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            467 => 
            array (
                'id' => 468,
                'name' => ' wild boar ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            468 => 
            array (
                'id' => 469,
                'name' => ' snail ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            469 => 
            array (
                'id' => 470,
                'name' => ' pigeon ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            470 => 
            array (
                'id' => 471,
                'name' => ' duck liver ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            471 => 
            array (
                'id' => 472,
                'name' => ' goose liver ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            472 => 
            array (
                'id' => 473,
                'name' => ' grouse ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            473 => 
            array (
                'id' => 474,
                'name' => ' ostrich ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:28',
                'updated_at' => '2018-10-28 17:04:28',
            ),
            474 => 
            array (
                'id' => 475,
                'name' => ' soppressata ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:29',
                'updated_at' => '2018-10-28 17:04:29',
            ),
            475 => 
            array (
                'id' => 476,
                'name' => ' alligator ',
                'parent_id' => 7,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:04:29',
                'updated_at' => '2018-10-28 17:04:29',
            ),
            476 => 
            array (
                'id' => 477,
                'name' => ' canned tuna ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            477 => 
            array (
                'id' => 478,
                'name' => ' salmon ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            478 => 
            array (
                'id' => 479,
                'name' => ' tilapia ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            479 => 
            array (
                'id' => 480,
                'name' => ' fish fillets ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            480 => 
            array (
                'id' => 481,
                'name' => ' cod ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            481 => 
            array (
                'id' => 482,
                'name' => ' canned salmon ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            482 => 
            array (
                'id' => 483,
                'name' => ' anchovy ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            483 => 
            array (
                'id' => 484,
                'name' => ' smoked salmon ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            484 => 
            array (
                'id' => 485,
                'name' => ' sardines ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            485 => 
            array (
                'id' => 486,
                'name' => ' tuna steak ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            486 => 
            array (
                'id' => 487,
                'name' => ' whitefish ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            487 => 
            array (
                'id' => 488,
                'name' => ' halibut ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            488 => 
            array (
                'id' => 489,
                'name' => ' trout ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            489 => 
            array (
                'id' => 490,
                'name' => ' haddock ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            490 => 
            array (
                'id' => 491,
                'name' => ' flounder ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            491 => 
            array (
                'id' => 492,
                'name' => ' catfish ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            492 => 
            array (
                'id' => 493,
                'name' => ' mahi mahi ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            493 => 
            array (
                'id' => 494,
                'name' => ' mackerel ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            494 => 
            array (
                'id' => 495,
                'name' => ' sole ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            495 => 
            array (
                'id' => 496,
                'name' => ' sea bass ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            496 => 
            array (
                'id' => 497,
                'name' => ' red snapper ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            497 => 
            array (
                'id' => 498,
                'name' => ' swordfish ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            498 => 
            array (
                'id' => 499,
                'name' => ' pollock ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            499 => 
            array (
                'id' => 500,
                'name' => ' herring ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
        ));
        \DB::table('ingridents')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => ' perch ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:26',
                'updated_at' => '2018-10-28 17:05:26',
            ),
            1 => 
            array (
                'id' => 502,
                'name' => ' grouper ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            2 => 
            array (
                'id' => 503,
                'name' => ' caviar ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            3 => 
            array (
                'id' => 504,
                'name' => ' monkfish ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            4 => 
            array (
                'id' => 505,
                'name' => ' rockfish ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            5 => 
            array (
                'id' => 506,
                'name' => ' lemon sole ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            6 => 
            array (
                'id' => 507,
                'name' => ' pike ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            7 => 
            array (
                'id' => 508,
                'name' => ' barramundi ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            8 => 
            array (
                'id' => 509,
                'name' => ' eel ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            9 => 
            array (
                'id' => 510,
                'name' => ' bluefish ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            10 => 
            array (
                'id' => 511,
                'name' => ' carp ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            11 => 
            array (
                'id' => 512,
                'name' => ' cuttlefish ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            12 => 
            array (
                'id' => 513,
                'name' => ' pompano ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            13 => 
            array (
                'id' => 514,
                'name' => ' arctic char ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            14 => 
            array (
                'id' => 515,
                'name' => ' john dory ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            15 => 
            array (
                'id' => 516,
                'name' => ' marlin ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            16 => 
            array (
                'id' => 517,
                'name' => ' amberjack ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            17 => 
            array (
                'id' => 518,
                'name' => ' sturgeon ',
                'parent_id' => 8,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:05:27',
                'updated_at' => '2018-10-28 17:05:27',
            ),
            18 => 
            array (
                'id' => 519,
                'name' => ' shrimp ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            19 => 
            array (
                'id' => 520,
                'name' => ' crab ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            20 => 
            array (
                'id' => 521,
                'name' => ' prawns ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            21 => 
            array (
                'id' => 522,
                'name' => ' scallop ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            22 => 
            array (
                'id' => 523,
                'name' => ' clam ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            23 => 
            array (
                'id' => 524,
                'name' => ' lobster ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            24 => 
            array (
                'id' => 525,
                'name' => ' mussel ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            25 => 
            array (
                'id' => 526,
                'name' => ' oyster ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            26 => 
            array (
                'id' => 527,
                'name' => ' squid ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            27 => 
            array (
                'id' => 528,
                'name' => ' calamari ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            28 => 
            array (
                'id' => 529,
                'name' => ' crawfish ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            29 => 
            array (
                'id' => 530,
                'name' => ' octopus ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            30 => 
            array (
                'id' => 531,
                'name' => ' cockle ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            31 => 
            array (
                'id' => 532,
                'name' => ' conch ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            32 => 
            array (
                'id' => 533,
                'name' => ' sea urchin ',
                'parent_id' => 9,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:06:18',
                'updated_at' => '2018-10-28 17:06:18',
            ),
            33 => 
            array (
                'id' => 534,
                'name' => ' mayonnaise ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:44',
                'updated_at' => '2018-10-28 17:07:44',
            ),
            34 => 
            array (
                'id' => 535,
                'name' => ' ketchup ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:44',
                'updated_at' => '2018-10-28 17:07:44',
            ),
            35 => 
            array (
                'id' => 536,
                'name' => ' mustard ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:44',
                'updated_at' => '2018-10-28 17:07:44',
            ),
            36 => 
            array (
                'id' => 537,
                'name' => ' vinegar ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:44',
                'updated_at' => '2018-10-28 17:07:44',
            ),
            37 => 
            array (
                'id' => 538,
                'name' => ' soy sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:44',
                'updated_at' => '2018-10-28 17:07:44',
            ),
            38 => 
            array (
                'id' => 539,
                'name' => ' balsamic vinegar ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            39 => 
            array (
                'id' => 540,
                'name' => ' worcestershire ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            40 => 
            array (
                'id' => 541,
                'name' => ' hot sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            41 => 
            array (
                'id' => 542,
                'name' => ' barbecue sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            42 => 
            array (
                'id' => 543,
                'name' => ' ranch dressing ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            43 => 
            array (
                'id' => 544,
                'name' => ' wine vinegar ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            44 => 
            array (
                'id' => 545,
                'name' => ' apple cider vinegar ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            45 => 
            array (
                'id' => 546,
                'name' => ' cider vinegar ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            46 => 
            array (
                'id' => 547,
                'name' => ' italian dressing ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            47 => 
            array (
                'id' => 548,
                'name' => ' rice vinegar ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            48 => 
            array (
                'id' => 549,
                'name' => ' salad dressing ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            49 => 
            array (
                'id' => 550,
                'name' => ' tabasco ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            50 => 
            array (
                'id' => 551,
                'name' => ' fish sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            51 => 
            array (
                'id' => 552,
                'name' => ' teriyaki ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            52 => 
            array (
                'id' => 553,
                'name' => ' steak sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            53 => 
            array (
                'id' => 554,
                'name' => ' tahini ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            54 => 
            array (
                'id' => 555,
                'name' => ' enchilada sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            55 => 
            array (
                'id' => 556,
                'name' => ' vinaigrette dressing ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            56 => 
            array (
                'id' => 557,
                'name' => ' oyster sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            57 => 
            array (
                'id' => 558,
                'name' => ' honey mustard ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            58 => 
            array (
                'id' => 559,
                'name' => ' sriracha ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            59 => 
            array (
                'id' => 560,
                'name' => ' caesar dressing ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            60 => 
            array (
                'id' => 561,
                'name' => ' taco sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            61 => 
            array (
                'id' => 562,
                'name' => ' mirin ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            62 => 
            array (
                'id' => 563,
                'name' => ' blue cheese dressing ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            63 => 
            array (
                'id' => 564,
                'name' => ' sweet and sour sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:45',
                'updated_at' => '2018-10-28 17:07:45',
            ),
            64 => 
            array (
                'id' => 565,
                'name' => ' thousand island ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            65 => 
            array (
                'id' => 566,
                'name' => ' picante sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            66 => 
            array (
                'id' => 567,
                'name' => ' buffalo sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            67 => 
            array (
                'id' => 568,
                'name' => ' french dressing ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            68 => 
            array (
                'id' => 569,
                'name' => ' tartar sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            69 => 
            array (
                'id' => 570,
                'name' => ' cocktail sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            70 => 
            array (
                'id' => 571,
                'name' => ' marsala ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            71 => 
            array (
                'id' => 572,
                'name' => ' adobo sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            72 => 
            array (
                'id' => 573,
                'name' => ' tzatziki sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            73 => 
            array (
                'id' => 574,
                'name' => ' sesame dressing ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            74 => 
            array (
                'id' => 575,
                'name' => ' ponzu ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            75 => 
            array (
                'id' => 576,
                'name' => ' duck sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            76 => 
            array (
                'id' => 577,
                'name' => ' pickapeppa sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            77 => 
            array (
                'id' => 578,
                'name' => ' yuzu juice ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            78 => 
            array (
                'id' => 579,
                'name' => ' cream sauce ',
                'parent_id' => 10,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:07:46',
                'updated_at' => '2018-10-28 17:07:46',
            ),
            79 => 
            array (
                'id' => 602,
                'name' => ' olive oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:23',
                'updated_at' => '2018-10-28 17:09:23',
            ),
            80 => 
            array (
                'id' => 603,
                'name' => ' vegetable oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            81 => 
            array (
                'id' => 604,
                'name' => ' cooking spray ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            82 => 
            array (
                'id' => 605,
                'name' => ' canola oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            83 => 
            array (
                'id' => 606,
                'name' => ' shortening ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            84 => 
            array (
                'id' => 607,
                'name' => ' sesame oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            85 => 
            array (
                'id' => 608,
                'name' => ' coconut oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            86 => 
            array (
                'id' => 609,
                'name' => ' peanut oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            87 => 
            array (
                'id' => 610,
                'name' => ' sunflower oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            88 => 
            array (
                'id' => 611,
                'name' => ' lard ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            89 => 
            array (
                'id' => 612,
                'name' => ' grape seed oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            90 => 
            array (
                'id' => 613,
                'name' => ' corn oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            91 => 
            array (
                'id' => 614,
                'name' => ' almond oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            92 => 
            array (
                'id' => 615,
                'name' => ' avocado oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            93 => 
            array (
                'id' => 616,
                'name' => ' safflower oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            94 => 
            array (
                'id' => 617,
                'name' => ' walnut oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            95 => 
            array (
                'id' => 618,
                'name' => ' hazelnut oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            96 => 
            array (
                'id' => 619,
                'name' => ' palm oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            97 => 
            array (
                'id' => 620,
                'name' => ' soybean oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            98 => 
            array (
                'id' => 621,
                'name' => ' mustard oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            99 => 
            array (
                'id' => 622,
                'name' => ' pistachio oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            100 => 
            array (
                'id' => 623,
                'name' => ' soya oil ',
                'parent_id' => 11,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:24',
                'updated_at' => '2018-10-28 17:09:24',
            ),
            101 => 
            array (
                'id' => 624,
                'name' => ' bouillon ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:55',
                'updated_at' => '2018-10-28 17:09:55',
            ),
            102 => 
            array (
                'id' => 625,
                'name' => ' ground ginger ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:55',
                'updated_at' => '2018-10-28 17:09:55',
            ),
            103 => 
            array (
                'id' => 626,
                'name' => ' sesame seed ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:55',
                'updated_at' => '2018-10-28 17:09:55',
            ),
            104 => 
            array (
                'id' => 627,
                'name' => ' cream of tartar ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:55',
                'updated_at' => '2018-10-28 17:09:55',
            ),
            105 => 
            array (
                'id' => 628,
                'name' => ' chili sauce ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:55',
                'updated_at' => '2018-10-28 17:09:55',
            ),
            106 => 
            array (
                'id' => 629,
                'name' => ' soya sauce ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:55',
                'updated_at' => '2018-10-28 17:09:55',
            ),
            107 => 
            array (
                'id' => 630,
                'name' => ' apple cider ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:55',
                'updated_at' => '2018-10-28 17:09:55',
            ),
            108 => 
            array (
                'id' => 631,
                'name' => ' hoisin sauce ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:55',
                'updated_at' => '2018-10-28 17:09:55',
            ),
            109 => 
            array (
                'id' => 632,
                'name' => ' liquid smoke ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:55',
                'updated_at' => '2018-10-28 17:09:55',
            ),
            110 => 
            array (
                'id' => 633,
                'name' => ' rice wine ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:55',
                'updated_at' => '2018-10-28 17:09:55',
            ),
            111 => 
            array (
                'id' => 634,
                'name' => ' vegetable bouillon ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:55',
                'updated_at' => '2018-10-28 17:09:55',
            ),
            112 => 
            array (
                'id' => 635,
                'name' => ' poppy seed ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            113 => 
            array (
                'id' => 636,
                'name' => ' balsamic glaze ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            114 => 
            array (
                'id' => 637,
                'name' => ' miso ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            115 => 
            array (
                'id' => 638,
                'name' => ' wasabi ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            116 => 
            array (
                'id' => 639,
                'name' => ' fish stock ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            117 => 
            array (
                'id' => 640,
                'name' => ' rose water ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            118 => 
            array (
                'id' => 641,
                'name' => ' pickling salt ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            119 => 
            array (
                'id' => 642,
                'name' => ' champagne vinegar ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            120 => 
            array (
                'id' => 643,
                'name' => ' bbq rub ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            121 => 
            array (
                'id' => 644,
                'name' => ' jamaican jerk spice ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            122 => 
            array (
                'id' => 645,
                'name' => ' accent seasoning ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            123 => 
            array (
                'id' => 646,
                'name' => ' pickling spice ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            124 => 
            array (
                'id' => 647,
                'name' => ' mustard powder ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            125 => 
            array (
                'id' => 648,
                'name' => ' mango powder ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            126 => 
            array (
                'id' => 649,
                'name' => ' adobo seasoning ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            127 => 
            array (
                'id' => 650,
                'name' => ' kasuri methi ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            128 => 
            array (
                'id' => 651,
                'name' => ' caribbean jerk seasoning ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            129 => 
            array (
                'id' => 652,
                'name' => ' brine ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            130 => 
            array (
                'id' => 653,
                'name' => ' matcha powder ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:56',
                'updated_at' => '2018-10-28 17:09:56',
            ),
            131 => 
            array (
                'id' => 654,
                'name' => ' cassia ',
                'parent_id' => 12,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:09:57',
                'updated_at' => '2018-10-28 17:09:57',
            ),
            132 => 
            array (
                'id' => 655,
                'name' => ' tomato sauce ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:17',
                'updated_at' => '2018-10-28 17:10:17',
            ),
            133 => 
            array (
                'id' => 656,
                'name' => ' tomato paste ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:17',
                'updated_at' => '2018-10-28 17:10:17',
            ),
            134 => 
            array (
                'id' => 657,
                'name' => ' salsa ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:17',
                'updated_at' => '2018-10-28 17:10:17',
            ),
            135 => 
            array (
                'id' => 658,
                'name' => ' pesto ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:17',
                'updated_at' => '2018-10-28 17:10:17',
            ),
            136 => 
            array (
                'id' => 659,
                'name' => ' alfredo sauce ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:17',
                'updated_at' => '2018-10-28 17:10:17',
            ),
            137 => 
            array (
                'id' => 660,
                'name' => ' beef gravy ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:17',
                'updated_at' => '2018-10-28 17:10:17',
            ),
            138 => 
            array (
                'id' => 661,
                'name' => ' curry paste ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:18',
                'updated_at' => '2018-10-28 17:10:18',
            ),
            139 => 
            array (
                'id' => 662,
                'name' => ' chicken gravy ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:18',
                'updated_at' => '2018-10-28 17:10:18',
            ),
            140 => 
            array (
                'id' => 663,
                'name' => ' cranberry sauce ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:18',
                'updated_at' => '2018-10-28 17:10:18',
            ),
            141 => 
            array (
                'id' => 664,
                'name' => ' turkey gravy ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:18',
                'updated_at' => '2018-10-28 17:10:18',
            ),
            142 => 
            array (
                'id' => 665,
                'name' => ' mushroom gravy ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:18',
                'updated_at' => '2018-10-28 17:10:18',
            ),
            143 => 
            array (
                'id' => 666,
                'name' => ' sausage gravy ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:18',
                'updated_at' => '2018-10-28 17:10:18',
            ),
            144 => 
            array (
                'id' => 667,
                'name' => ' onion gravy ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:18',
                'updated_at' => '2018-10-28 17:10:18',
            ),
            145 => 
            array (
                'id' => 668,
                'name' => ' cream gravy ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:18',
                'updated_at' => '2018-10-28 17:10:18',
            ),
            146 => 
            array (
                'id' => 669,
                'name' => ' pork gravy ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:18',
                'updated_at' => '2018-10-28 17:10:18',
            ),
            147 => 
            array (
                'id' => 670,
                'name' => ' tomato gravy ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:18',
                'updated_at' => '2018-10-28 17:10:18',
            ),
            148 => 
            array (
                'id' => 671,
                'name' => ' giblet gravy ',
                'parent_id' => 13,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:18',
                'updated_at' => '2018-10-28 17:10:18',
            ),
            149 => 
            array (
                'id' => 672,
                'name' => ' green beans ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            150 => 
            array (
                'id' => 673,
                'name' => ' peas ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            151 => 
            array (
                'id' => 674,
                'name' => ' black beans ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            152 => 
            array (
                'id' => 675,
                'name' => ' chickpea ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            153 => 
            array (
                'id' => 676,
                'name' => ' lentil ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            154 => 
            array (
                'id' => 677,
                'name' => ' refried beans ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            155 => 
            array (
                'id' => 678,
                'name' => ' hummus ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            156 => 
            array (
                'id' => 679,
                'name' => ' chili beans ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            157 => 
            array (
                'id' => 680,
                'name' => ' lima beans ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            158 => 
            array (
                'id' => 681,
                'name' => ' kidney beans ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            159 => 
            array (
                'id' => 682,
                'name' => ' pinto beans ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            160 => 
            array (
                'id' => 683,
                'name' => ' edamame ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            161 => 
            array (
                'id' => 684,
                'name' => ' split peas ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            162 => 
            array (
                'id' => 685,
                'name' => ' snap peas ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            163 => 
            array (
                'id' => 686,
                'name' => ' soybeans ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            164 => 
            array (
                'id' => 687,
                'name' => ' cannellini beans ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            165 => 
            array (
                'id' => 688,
                'name' => ' navy beans ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            166 => 
            array (
                'id' => 689,
                'name' => ' french beans ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            167 => 
            array (
                'id' => 690,
                'name' => ' red beans ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            168 => 
            array (
                'id' => 691,
                'name' => ' great northern beans ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            169 => 
            array (
                'id' => 692,
                'name' => ' fava beans ',
                'parent_id' => 14,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:33',
                'updated_at' => '2018-10-28 17:10:33',
            ),
            170 => 
            array (
                'id' => 693,
                'name' => ' white wine ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            171 => 
            array (
                'id' => 694,
                'name' => ' beer ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            172 => 
            array (
                'id' => 695,
                'name' => ' red wine ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            173 => 
            array (
                'id' => 696,
                'name' => ' vodka ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            174 => 
            array (
                'id' => 697,
                'name' => ' rum ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            175 => 
            array (
                'id' => 698,
                'name' => ' whiskey ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            176 => 
            array (
                'id' => 699,
                'name' => ' tequila ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            177 => 
            array (
                'id' => 700,
                'name' => ' sherry ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            178 => 
            array (
                'id' => 701,
                'name' => ' bourbon ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            179 => 
            array (
                'id' => 702,
                'name' => ' cooking wine ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            180 => 
            array (
                'id' => 703,
                'name' => ' whisky ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            181 => 
            array (
                'id' => 704,
                'name' => ' liqueur ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            182 => 
            array (
                'id' => 705,
                'name' => ' brandy ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            183 => 
            array (
                'id' => 706,
                'name' => ' gin ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            184 => 
            array (
                'id' => 707,
                'name' => ' kahlua ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            185 => 
            array (
                'id' => 708,
                'name' => ' irish cream ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            186 => 
            array (
                'id' => 709,
                'name' => ' triple sec ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            187 => 
            array (
                'id' => 710,
                'name' => ' champagne ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            188 => 
            array (
                'id' => 711,
                'name' => ' amaretto ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:51',
                'updated_at' => '2018-10-28 17:10:51',
            ),
            189 => 
            array (
                'id' => 712,
                'name' => ' cabernet sauvignon ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            190 => 
            array (
                'id' => 713,
                'name' => ' vermouth ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            191 => 
            array (
                'id' => 714,
                'name' => ' bitters ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            192 => 
            array (
                'id' => 715,
                'name' => ' maraschino ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            193 => 
            array (
                'id' => 716,
                'name' => ' sake ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            194 => 
            array (
                'id' => 717,
                'name' => ' grand marnier ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            195 => 
            array (
                'id' => 718,
                'name' => ' masala ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            196 => 
            array (
                'id' => 719,
                'name' => ' dessert wine ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            197 => 
            array (
                'id' => 720,
                'name' => ' schnapps ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            198 => 
            array (
                'id' => 721,
                'name' => ' port wine ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            199 => 
            array (
                'id' => 722,
                'name' => ' sparkling wine ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            200 => 
            array (
                'id' => 723,
                'name' => ' cognac ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            201 => 
            array (
                'id' => 724,
                'name' => ' chocolate liqueur ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            202 => 
            array (
                'id' => 725,
                'name' => ' burgundy wine ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            203 => 
            array (
                'id' => 726,
                'name' => ' limoncello ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            204 => 
            array (
                'id' => 727,
                'name' => ' creme de menthe ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            205 => 
            array (
                'id' => 728,
                'name' => ' bloody mary ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            206 => 
            array (
                'id' => 729,
                'name' => ' raspberry liquor ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            207 => 
            array (
                'id' => 730,
                'name' => ' curacao ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            208 => 
            array (
                'id' => 731,
                'name' => ' frangelico ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            209 => 
            array (
                'id' => 732,
                'name' => ' shaoxing wine ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            210 => 
            array (
                'id' => 733,
                'name' => ' absinthe ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            211 => 
            array (
                'id' => 734,
                'name' => ' madeira wine ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            212 => 
            array (
                'id' => 735,
                'name' => ' ouzo ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            213 => 
            array (
                'id' => 736,
                'name' => ' anisette ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            214 => 
            array (
                'id' => 737,
                'name' => ' grappa ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:52',
                'updated_at' => '2018-10-28 17:10:52',
            ),
            215 => 
            array (
                'id' => 738,
                'name' => ' ciclon ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:53',
                'updated_at' => '2018-10-28 17:10:53',
            ),
            216 => 
            array (
                'id' => 739,
                'name' => ' drambuie ',
                'parent_id' => 15,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:10:53',
                'updated_at' => '2018-10-28 17:10:53',
            ),
            217 => 
            array (
                'id' => 740,
                'name' => ' chicken broth ',
                'parent_id' => 16,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:13',
                'updated_at' => '2018-10-28 17:11:13',
            ),
            218 => 
            array (
                'id' => 741,
                'name' => ' mushroom soup ',
                'parent_id' => 16,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:13',
                'updated_at' => '2018-10-28 17:11:13',
            ),
            219 => 
            array (
                'id' => 742,
                'name' => ' beef broth ',
                'parent_id' => 16,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:13',
                'updated_at' => '2018-10-28 17:11:13',
            ),
            220 => 
            array (
                'id' => 743,
                'name' => ' tomato soup ',
                'parent_id' => 16,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:13',
                'updated_at' => '2018-10-28 17:11:13',
            ),
            221 => 
            array (
                'id' => 744,
                'name' => ' vegetable stock ',
                'parent_id' => 16,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:13',
                'updated_at' => '2018-10-28 17:11:13',
            ),
            222 => 
            array (
                'id' => 745,
                'name' => ' chicken soup ',
                'parent_id' => 16,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:13',
                'updated_at' => '2018-10-28 17:11:13',
            ),
            223 => 
            array (
                'id' => 746,
                'name' => ' onion soup ',
                'parent_id' => 16,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:13',
                'updated_at' => '2018-10-28 17:11:13',
            ),
            224 => 
            array (
                'id' => 747,
                'name' => ' vegetable soup ',
                'parent_id' => 16,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:13',
                'updated_at' => '2018-10-28 17:11:13',
            ),
            225 => 
            array (
                'id' => 748,
                'name' => ' celery soup ',
                'parent_id' => 16,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:13',
                'updated_at' => '2018-10-28 17:11:13',
            ),
            226 => 
            array (
                'id' => 749,
                'name' => ' dashi ',
                'parent_id' => 16,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:13',
                'updated_at' => '2018-10-28 17:11:13',
            ),
            227 => 
            array (
                'id' => 750,
                'name' => ' lamb stock ',
                'parent_id' => 16,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:13',
                'updated_at' => '2018-10-28 17:11:13',
            ),
            228 => 
            array (
                'id' => 751,
                'name' => ' pork stock ',
                'parent_id' => 16,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:13',
                'updated_at' => '2018-10-28 17:11:13',
            ),
            229 => 
            array (
                'id' => 752,
                'name' => ' veal stock ',
                'parent_id' => 16,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:13',
                'updated_at' => '2018-10-28 17:11:13',
            ),
            230 => 
            array (
                'id' => 753,
                'name' => ' peanut butter ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:34',
                'updated_at' => '2018-10-28 17:11:34',
            ),
            231 => 
            array (
                'id' => 754,
                'name' => ' almond ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            232 => 
            array (
                'id' => 755,
                'name' => ' walnut ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            233 => 
            array (
                'id' => 756,
                'name' => ' pecan ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            234 => 
            array (
                'id' => 757,
                'name' => ' peanut ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            235 => 
            array (
                'id' => 758,
                'name' => ' cashew ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            236 => 
            array (
                'id' => 759,
                'name' => ' flax ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            237 => 
            array (
                'id' => 760,
                'name' => ' pine nut ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            238 => 
            array (
                'id' => 761,
                'name' => ' pistachio ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            239 => 
            array (
                'id' => 762,
                'name' => ' almond meal ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            240 => 
            array (
                'id' => 763,
                'name' => ' hazelnut ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            241 => 
            array (
                'id' => 764,
                'name' => ' macadamia ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            242 => 
            array (
                'id' => 765,
                'name' => ' almond paste ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            243 => 
            array (
                'id' => 766,
                'name' => ' chestnut ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            244 => 
            array (
                'id' => 767,
                'name' => ' praline ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            245 => 
            array (
                'id' => 768,
                'name' => ' macaroon ',
                'parent_id' => 17,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:35',
                'updated_at' => '2018-10-28 17:11:35',
            ),
            246 => 
            array (
                'id' => 769,
                'name' => ' margarine ',
                'parent_id' => 18,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:57',
                'updated_at' => '2018-10-28 17:11:57',
            ),
            247 => 
            array (
                'id' => 770,
                'name' => ' coconut milk ',
                'parent_id' => 18,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:57',
                'updated_at' => '2018-10-28 17:11:57',
            ),
            248 => 
            array (
                'id' => 771,
                'name' => ' almond milk ',
                'parent_id' => 18,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:57',
                'updated_at' => '2018-10-28 17:11:57',
            ),
            249 => 
            array (
                'id' => 772,
                'name' => ' soy milk ',
                'parent_id' => 18,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:57',
                'updated_at' => '2018-10-28 17:11:57',
            ),
            250 => 
            array (
                'id' => 773,
                'name' => ' rice milk ',
                'parent_id' => 18,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:57',
                'updated_at' => '2018-10-28 17:11:57',
            ),
            251 => 
            array (
                'id' => 774,
                'name' => ' hemp milk ',
                'parent_id' => 18,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:57',
                'updated_at' => '2018-10-28 17:11:57',
            ),
            252 => 
            array (
                'id' => 775,
                'name' => ' non dairy creamer ',
                'parent_id' => 18,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:11:57',
                'updated_at' => '2018-10-28 17:11:57',
            ),
            253 => 
            array (
                'id' => 776,
                'name' => ' chocolate ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:41',
                'updated_at' => '2018-10-28 17:14:41',
            ),
            254 => 
            array (
                'id' => 777,
                'name' => ' apple sauce ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            255 => 
            array (
                'id' => 778,
                'name' => ' strawberry jam ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            256 => 
            array (
                'id' => 779,
                'name' => ' graham cracker ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            257 => 
            array (
                'id' => 780,
                'name' => ' marshmallow ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            258 => 
            array (
                'id' => 781,
                'name' => ' chocolate syrup ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            259 => 
            array (
                'id' => 782,
                'name' => ' potato chips ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            260 => 
            array (
                'id' => 783,
                'name' => ' nutella ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            261 => 
            array (
                'id' => 784,
                'name' => ' chocolate morsels ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            262 => 
            array (
                'id' => 785,
                'name' => ' bittersweet chocolate ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            263 => 
            array (
                'id' => 786,
                'name' => ' pudding mix ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            264 => 
            array (
                'id' => 787,
                'name' => ' raspberry jam ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            265 => 
            array (
                'id' => 788,
                'name' => ' dark chocolate ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            266 => 
            array (
                'id' => 789,
                'name' => ' chocolate chips ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            267 => 
            array (
                'id' => 790,
                'name' => ' jam ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            268 => 
            array (
                'id' => 791,
                'name' => ' white chocolate ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            269 => 
            array (
                'id' => 792,
                'name' => ' brownie mix ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            270 => 
            array (
                'id' => 793,
                'name' => ' chocolate pudding ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            271 => 
            array (
                'id' => 794,
                'name' => ' jello ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            272 => 
            array (
                'id' => 795,
                'name' => ' caramel ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            273 => 
            array (
                'id' => 796,
                'name' => ' chocolate powder ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            274 => 
            array (
                'id' => 797,
                'name' => ' candy ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            275 => 
            array (
                'id' => 798,
                'name' => ' corn chips ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            276 => 
            array (
                'id' => 799,
                'name' => ' cookies ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            277 => 
            array (
                'id' => 800,
                'name' => ' apricot jam ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            278 => 
            array (
                'id' => 801,
                'name' => ' chocolate bar ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:42',
                'updated_at' => '2018-10-28 17:14:42',
            ),
            279 => 
            array (
                'id' => 802,
                'name' => ' cookie dough ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            280 => 
            array (
                'id' => 803,
                'name' => ' oreo ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            281 => 
            array (
                'id' => 804,
                'name' => ' doritos ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            282 => 
            array (
                'id' => 805,
                'name' => ' chocolate cookies ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            283 => 
            array (
                'id' => 806,
                'name' => ' butterscotch ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            284 => 
            array (
                'id' => 807,
                'name' => ' blackberry preserves ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            285 => 
            array (
                'id' => 808,
                'name' => ' blueberry jam ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            286 => 
            array (
                'id' => 809,
                'name' => ' peach preserves ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            287 => 
            array (
                'id' => 810,
                'name' => ' cherry jam ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            288 => 
            array (
                'id' => 811,
                'name' => ' fig jam ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            289 => 
            array (
                'id' => 812,
                'name' => ' plum jam ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            290 => 
            array (
                'id' => 813,
                'name' => ' cinnamon roll ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            291 => 
            array (
                'id' => 814,
                'name' => ' fudge ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            292 => 
            array (
                'id' => 815,
                'name' => ' cookie crumb ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            293 => 
            array (
                'id' => 816,
                'name' => ' grape jelly ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            294 => 
            array (
                'id' => 817,
                'name' => ' chilli jam ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            295 => 
            array (
                'id' => 818,
                'name' => ' lady fingers ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            296 => 
            array (
                'id' => 819,
                'name' => ' black pudding ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            297 => 
            array (
                'id' => 820,
                'name' => ' chocolate wafer ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            298 => 
            array (
                'id' => 821,
                'name' => ' gummy worms ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            299 => 
            array (
                'id' => 822,
                'name' => ' biscotti biscuit ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            300 => 
            array (
                'id' => 823,
                'name' => ' doughnut ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            301 => 
            array (
                'id' => 824,
                'name' => ' amaretti cookies ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            302 => 
            array (
                'id' => 825,
                'name' => ' apple jelly ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            303 => 
            array (
                'id' => 826,
                'name' => ' red pepper jelly ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            304 => 
            array (
                'id' => 827,
                'name' => ' orange jelly ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            305 => 
            array (
                'id' => 828,
                'name' => ' jalapeno jelly ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            306 => 
            array (
                'id' => 829,
                'name' => ' mint jelly ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:43',
                'updated_at' => '2018-10-28 17:14:43',
            ),
            307 => 
            array (
                'id' => 830,
                'name' => ' currant jelly ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:44',
                'updated_at' => '2018-10-28 17:14:44',
            ),
            308 => 
            array (
                'id' => 831,
                'name' => ' lemon jelly ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:44',
                'updated_at' => '2018-10-28 17:14:44',
            ),
            309 => 
            array (
                'id' => 832,
                'name' => ' quince jelly ',
                'parent_id' => 19,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:14:44',
                'updated_at' => '2018-10-28 17:14:44',
            ),
            310 => 
            array (
                'id' => 833,
                'name' => ' coffee ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:03',
                'updated_at' => '2018-10-28 17:15:03',
            ),
            311 => 
            array (
                'id' => 834,
                'name' => ' orange juice ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:03',
                'updated_at' => '2018-10-28 17:15:03',
            ),
            312 => 
            array (
                'id' => 835,
                'name' => ' tea ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:03',
                'updated_at' => '2018-10-28 17:15:03',
            ),
            313 => 
            array (
                'id' => 836,
                'name' => ' green tea ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:03',
                'updated_at' => '2018-10-28 17:15:03',
            ),
            314 => 
            array (
                'id' => 837,
                'name' => ' apple juice ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:03',
                'updated_at' => '2018-10-28 17:15:03',
            ),
            315 => 
            array (
                'id' => 838,
                'name' => ' tomato juice ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:03',
                'updated_at' => '2018-10-28 17:15:03',
            ),
            316 => 
            array (
                'id' => 839,
                'name' => ' coke ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:03',
                'updated_at' => '2018-10-28 17:15:03',
            ),
            317 => 
            array (
                'id' => 840,
                'name' => ' chocolate milk ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:03',
                'updated_at' => '2018-10-28 17:15:03',
            ),
            318 => 
            array (
                'id' => 841,
                'name' => ' pineapple juice ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:03',
                'updated_at' => '2018-10-28 17:15:03',
            ),
            319 => 
            array (
                'id' => 842,
                'name' => ' lemonade ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:03',
                'updated_at' => '2018-10-28 17:15:03',
            ),
            320 => 
            array (
                'id' => 843,
                'name' => ' cranberry juice ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:03',
                'updated_at' => '2018-10-28 17:15:03',
            ),
            321 => 
            array (
                'id' => 844,
                'name' => ' espresso ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:03',
                'updated_at' => '2018-10-28 17:15:03',
            ),
            322 => 
            array (
                'id' => 845,
                'name' => ' fruit juice ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:04',
                'updated_at' => '2018-10-28 17:15:04',
            ),
            323 => 
            array (
                'id' => 846,
                'name' => ' ginger ale ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:04',
                'updated_at' => '2018-10-28 17:15:04',
            ),
            324 => 
            array (
                'id' => 847,
                'name' => ' club soda ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:04',
                'updated_at' => '2018-10-28 17:15:04',
            ),
            325 => 
            array (
                'id' => 848,
                'name' => ' sprite ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:04',
                'updated_at' => '2018-10-28 17:15:04',
            ),
            326 => 
            array (
                'id' => 849,
                'name' => ' kool aid ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:04',
                'updated_at' => '2018-10-28 17:15:04',
            ),
            327 => 
            array (
                'id' => 850,
                'name' => ' grenadine ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:04',
                'updated_at' => '2018-10-28 17:15:04',
            ),
            328 => 
            array (
                'id' => 851,
                'name' => ' margarita mix ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:04',
                'updated_at' => '2018-10-28 17:15:04',
            ),
            329 => 
            array (
                'id' => 852,
                'name' => ' cherry juice ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:04',
                'updated_at' => '2018-10-28 17:15:04',
            ),
            330 => 
            array (
                'id' => 853,
                'name' => ' pepsi ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:04',
                'updated_at' => '2018-10-28 17:15:04',
            ),
            331 => 
            array (
                'id' => 854,
                'name' => ' mountain dew ',
                'parent_id' => 20,
                'icon' => NULL,
                'image' => NULL,
                'created_at' => '2018-10-28 17:15:04',
                'updated_at' => '2018-10-28 17:15:04',
            ),
        ));
        
        
    }
}