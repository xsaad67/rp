<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Pasta',
                'normalized' => NULL,
                'slug' => 'pasta',
                'created_at' => '2019-01-07 02:04:09',
                'updated_at' => '2019-01-07 02:04:09',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => ' Rice And Grains',
                'normalized' => NULL,
                'slug' => 'rice-and-grains',
                'created_at' => '2019-01-07 02:04:09',
                'updated_at' => '2019-01-07 02:04:09',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'North American',
                'normalized' => NULL,
                'slug' => 'north-american',
                'created_at' => '2019-01-07 02:04:09',
                'updated_at' => '2019-01-07 02:04:09',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '< 30 Mins',
                'normalized' => NULL,
                'slug' => '30-mins',
                'created_at' => '2019-01-07 02:04:09',
                'updated_at' => '2019-01-07 02:04:09',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Stove Top',
                'normalized' => NULL,
                'slug' => 'stove-top',
                'created_at' => '2019-01-07 02:04:09',
                'updated_at' => '2019-01-07 02:04:09',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Time To Make',
                'normalized' => NULL,
                'slug' => 'time-to-make',
                'created_at' => '2019-01-07 02:04:09',
                'updated_at' => '2019-01-07 02:04:09',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Easy',
                'normalized' => NULL,
                'slug' => 'easy',
                'created_at' => '2019-01-07 02:04:09',
                'updated_at' => '2019-01-07 02:04:09',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Inexpensive',
                'normalized' => NULL,
                'slug' => 'inexpensive',
                'created_at' => '2019-01-07 02:04:10',
                'updated_at' => '2019-01-07 02:04:10',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Low Protein',
                'normalized' => NULL,
                'slug' => 'low-protein',
                'created_at' => '2019-01-07 02:04:12',
                'updated_at' => '2019-01-07 02:04:12',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '< 15 Mins',
                'normalized' => NULL,
                'slug' => '15-mins',
                'created_at' => '2019-01-07 02:04:12',
                'updated_at' => '2019-01-07 02:04:12',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'No Cook',
                'normalized' => NULL,
                'slug' => 'no-cook',
                'created_at' => '2019-01-07 02:04:12',
                'updated_at' => '2019-01-07 02:04:12',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Technique',
                'normalized' => NULL,
                'slug' => 'technique',
                'created_at' => '2019-01-07 02:04:12',
                'updated_at' => '2019-01-07 02:04:12',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Chicken',
                'normalized' => NULL,
                'slug' => 'chicken',
                'created_at' => '2019-01-07 02:04:16',
                'updated_at' => '2019-01-07 02:04:16',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Poultry',
                'normalized' => NULL,
                'slug' => 'poultry',
                'created_at' => '2019-01-07 02:04:16',
                'updated_at' => '2019-01-07 02:04:16',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Meat',
                'normalized' => NULL,
                'slug' => 'meat',
                'created_at' => '2019-01-07 02:04:16',
                'updated_at' => '2019-01-07 02:04:16',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Korean',
                'normalized' => NULL,
                'slug' => 'korean',
                'created_at' => '2019-01-07 02:04:16',
                'updated_at' => '2019-01-07 02:04:16',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Asian',
                'normalized' => NULL,
                'slug' => 'asian',
                'created_at' => '2019-01-07 02:04:16',
                'updated_at' => '2019-01-07 02:04:16',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Oven',
                'normalized' => NULL,
                'slug' => 'oven',
                'created_at' => '2019-01-07 02:04:16',
                'updated_at' => '2019-01-07 02:04:16',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => '< 4 Hours',
                'normalized' => NULL,
                'slug' => '4-hours',
                'created_at' => '2019-01-07 02:04:16',
                'updated_at' => '2019-01-07 02:04:16',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'European',
                'normalized' => NULL,
                'slug' => 'european',
                'created_at' => '2019-01-07 02:04:19',
                'updated_at' => '2019-01-07 02:04:19',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Kid Friendly',
                'normalized' => NULL,
                'slug' => 'kid-friendly',
                'created_at' => '2019-01-07 02:04:19',
                'updated_at' => '2019-01-07 02:04:19',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Potluck',
                'normalized' => NULL,
                'slug' => 'potluck',
                'created_at' => '2019-01-07 02:04:19',
                'updated_at' => '2019-01-07 02:04:19',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Wedding',
                'normalized' => NULL,
                'slug' => 'wedding',
                'created_at' => '2019-01-07 02:04:19',
                'updated_at' => '2019-01-07 02:04:19',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Heirloom/Historical',
                'normalized' => NULL,
                'slug' => 'heirloomhistorical',
                'created_at' => '2019-01-07 02:04:19',
                'updated_at' => '2019-01-07 02:04:19',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Cheese',
                'normalized' => NULL,
                'slug' => 'cheese',
                'created_at' => '2019-01-07 02:04:22',
                'updated_at' => '2019-01-07 02:04:22',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Eggs/Dairy',
                'normalized' => NULL,
                'slug' => 'eggsdairy',
                'created_at' => '2019-01-07 02:04:22',
                'updated_at' => '2019-01-07 02:04:22',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => '< 60 Mins',
                'normalized' => NULL,
                'slug' => '60-mins',
                'created_at' => '2019-01-07 02:04:22',
                'updated_at' => '2019-01-07 02:04:22',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Weeknight',
                'normalized' => NULL,
                'slug' => 'weeknight',
                'created_at' => '2019-01-07 02:05:49',
                'updated_at' => '2019-01-07 02:05:49',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Quick Breads',
                'normalized' => NULL,
                'slug' => 'quick-breads',
                'created_at' => '2019-01-07 02:05:52',
                'updated_at' => '2019-01-07 02:05:52',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Breads',
                'normalized' => NULL,
                'slug' => 'breads',
                'created_at' => '2019-01-07 02:05:53',
                'updated_at' => '2019-01-07 02:05:53',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Breakfast',
                'normalized' => NULL,
                'slug' => 'breakfast',
                'created_at' => '2019-01-07 02:05:53',
                'updated_at' => '2019-01-07 02:05:53',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Vegetable',
                'normalized' => NULL,
                'slug' => 'vegetable',
                'created_at' => '2019-01-07 02:05:55',
                'updated_at' => '2019-01-07 02:05:55',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Apple',
                'normalized' => NULL,
                'slug' => 'apple',
                'created_at' => '2019-01-07 02:05:58',
                'updated_at' => '2019-01-07 02:05:58',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Fruit',
                'normalized' => NULL,
                'slug' => 'fruit',
                'created_at' => '2019-01-07 02:05:58',
                'updated_at' => '2019-01-07 02:05:58',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'German',
                'normalized' => NULL,
                'slug' => 'german',
                'created_at' => '2019-01-07 02:05:58',
                'updated_at' => '2019-01-07 02:05:58',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Lunch/Snacks',
                'normalized' => NULL,
                'slug' => 'lunchsnacks',
                'created_at' => '2019-01-07 02:06:01',
                'updated_at' => '2019-01-07 02:06:01',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Grains',
                'normalized' => NULL,
                'slug' => 'grains',
                'created_at' => '2019-01-07 02:06:01',
                'updated_at' => '2019-01-07 02:06:01',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Low Cholesterol',
                'normalized' => NULL,
                'slug' => 'low-cholesterol',
                'created_at' => '2019-01-07 02:06:01',
                'updated_at' => '2019-01-07 02:06:01',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Healthy',
                'normalized' => NULL,
                'slug' => 'healthy',
                'created_at' => '2019-01-07 02:06:01',
                'updated_at' => '2019-01-07 02:06:01',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => '3 Steps Or Less',
                'normalized' => NULL,
                'slug' => '3-steps-or-less',
                'created_at' => '2019-01-07 02:06:01',
                'updated_at' => '2019-01-07 02:06:01',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'For Large Groups',
                'normalized' => NULL,
                'slug' => 'for-large-groups',
                'created_at' => '2019-01-07 02:06:04',
                'updated_at' => '2019-01-07 02:06:04',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Dessert',
                'normalized' => NULL,
                'slug' => 'dessert',
                'created_at' => '2019-01-07 02:06:07',
                'updated_at' => '2019-01-07 02:06:07',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Cookie & Brownie',
                'normalized' => NULL,
                'slug' => 'cookie-brownie',
                'created_at' => '2019-01-07 02:06:07',
                'updated_at' => '2019-01-07 02:06:07',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Toddler Friendly',
                'normalized' => NULL,
                'slug' => 'toddler-friendly',
                'created_at' => '2019-01-07 02:06:12',
                'updated_at' => '2019-01-07 02:06:12',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'High Protein',
                'normalized' => NULL,
                'slug' => 'high-protein',
                'created_at' => '2019-01-07 02:06:15',
                'updated_at' => '2019-01-07 02:06:15',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'High In...',
                'normalized' => NULL,
                'slug' => 'high-in',
                'created_at' => '2019-01-07 02:06:15',
                'updated_at' => '2019-01-07 02:06:15',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Pork',
                'normalized' => NULL,
                'slug' => 'pork',
                'created_at' => '2019-01-07 02:06:22',
                'updated_at' => '2019-01-07 02:06:22',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Potato',
                'normalized' => NULL,
                'slug' => 'potato',
                'created_at' => '2019-01-07 02:06:22',
                'updated_at' => '2019-01-07 02:06:22',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Winter',
                'normalized' => NULL,
                'slug' => 'winter',
                'created_at' => '2019-01-07 02:06:22',
                'updated_at' => '2019-01-07 02:06:22',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Condiments',
                'normalized' => NULL,
                'slug' => 'condiments',
                'created_at' => '2019-01-07 02:06:26',
                'updated_at' => '2019-01-07 02:06:26',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => ' Etc.',
                'normalized' => NULL,
                'slug' => 'etc',
                'created_at' => '2019-01-07 02:06:27',
                'updated_at' => '2019-01-07 02:06:27',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Rice',
                'normalized' => NULL,
                'slug' => 'rice-1',
                'created_at' => '2019-01-07 02:06:35',
                'updated_at' => '2019-01-07 02:06:35',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Lactose Free',
                'normalized' => NULL,
                'slug' => 'lactose-free',
                'created_at' => '2019-01-07 02:06:40',
                'updated_at' => '2019-01-07 02:06:40',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Free Of...',
                'normalized' => NULL,
                'slug' => 'free-of',
                'created_at' => '2019-01-07 02:06:41',
                'updated_at' => '2019-01-07 02:06:41',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Sauces',
                'normalized' => NULL,
                'slug' => 'sauces',
                'created_at' => '2019-01-07 02:06:47',
                'updated_at' => '2019-01-07 02:06:47',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Southwestern U.S.',
                'normalized' => NULL,
                'slug' => 'southwestern-us',
                'created_at' => '2019-01-07 02:06:47',
                'updated_at' => '2019-01-07 02:06:47',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Spring',
                'normalized' => NULL,
                'slug' => 'spring',
                'created_at' => '2019-01-07 02:06:47',
                'updated_at' => '2019-01-07 02:06:47',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Summer',
                'normalized' => NULL,
                'slug' => 'summer',
                'created_at' => '2019-01-07 02:06:47',
                'updated_at' => '2019-01-07 02:06:47',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Spicy',
                'normalized' => NULL,
                'slug' => 'spicy',
                'created_at' => '2019-01-07 02:06:47',
                'updated_at' => '2019-01-07 02:06:47',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Brown Bag',
                'normalized' => NULL,
                'slug' => 'brown-bag',
                'created_at' => '2019-01-07 02:06:48',
                'updated_at' => '2019-01-07 02:06:48',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Savory',
                'normalized' => NULL,
                'slug' => 'savory',
                'created_at' => '2019-01-07 02:06:48',
                'updated_at' => '2019-01-07 02:06:48',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Beginner Cook',
                'normalized' => NULL,
                'slug' => 'beginner-cook',
                'created_at' => '2019-01-07 02:06:48',
                'updated_at' => '2019-01-07 02:06:48',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Small Appliance',
                'normalized' => NULL,
                'slug' => 'small-appliance',
                'created_at' => '2019-01-07 02:06:48',
                'updated_at' => '2019-01-07 02:06:48',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Served Cold',
                'normalized' => NULL,
                'slug' => 'served-cold',
                'created_at' => '2019-01-07 02:06:48',
                'updated_at' => '2019-01-07 02:06:48',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Sweet',
                'normalized' => NULL,
                'slug' => 'sweet',
                'created_at' => '2019-01-07 02:06:51',
                'updated_at' => '2019-01-07 02:06:51',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Californian',
                'normalized' => NULL,
                'slug' => 'californian',
                'created_at' => '2019-01-07 02:06:59',
                'updated_at' => '2019-01-07 02:06:59',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Caribbean',
                'normalized' => NULL,
                'slug' => 'caribbean',
                'created_at' => '2019-01-07 02:06:59',
                'updated_at' => '2019-01-07 02:06:59',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Central American',
                'normalized' => NULL,
                'slug' => 'central-american',
                'created_at' => '2019-01-07 02:06:59',
                'updated_at' => '2019-01-07 02:06:59',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'South West Pacific',
                'normalized' => NULL,
                'slug' => 'south-west-pacific',
                'created_at' => '2019-01-07 02:06:59',
                'updated_at' => '2019-01-07 02:06:59',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Microwave',
                'normalized' => NULL,
                'slug' => 'microwave',
                'created_at' => '2019-01-07 02:07:02',
                'updated_at' => '2019-01-07 02:07:02',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Brunch',
                'normalized' => NULL,
                'slug' => 'brunch',
                'created_at' => '2019-01-07 02:07:05',
                'updated_at' => '2019-01-07 02:07:05',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Christmas',
                'normalized' => NULL,
                'slug' => 'christmas',
                'created_at' => '2019-01-07 02:07:07',
                'updated_at' => '2019-01-07 02:07:07',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Ontario',
                'normalized' => NULL,
                'slug' => 'ontario',
                'created_at' => '2019-01-07 02:07:21',
                'updated_at' => '2019-01-07 02:07:21',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Canadian',
                'normalized' => NULL,
                'slug' => 'canadian',
                'created_at' => '2019-01-07 02:07:21',
                'updated_at' => '2019-01-07 02:07:21',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Thanksgiving',
                'normalized' => NULL,
                'slug' => 'thanksgiving',
                'created_at' => '2019-01-07 02:07:21',
                'updated_at' => '2019-01-07 02:07:21',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Served Hot',
                'normalized' => NULL,
                'slug' => 'served-hot',
                'created_at' => '2019-01-07 02:07:33',
                'updated_at' => '2019-01-07 02:07:33',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Soy/Tofu',
                'normalized' => NULL,
                'slug' => 'soytofu',
                'created_at' => '2019-01-07 02:07:37',
                'updated_at' => '2019-01-07 02:07:37',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Corn',
                'normalized' => NULL,
                'slug' => 'corn',
                'created_at' => '2019-01-07 02:07:38',
                'updated_at' => '2019-01-07 02:07:38',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Beans',
                'normalized' => NULL,
                'slug' => 'beans',
                'created_at' => '2019-01-07 02:07:38',
                'updated_at' => '2019-01-07 02:07:38',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Vegan',
                'normalized' => NULL,
                'slug' => 'vegan',
                'created_at' => '2019-01-07 02:07:38',
                'updated_at' => '2019-01-07 02:07:38',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Egg Free',
                'normalized' => NULL,
                'slug' => 'egg-free',
                'created_at' => '2019-01-07 02:07:38',
                'updated_at' => '2019-01-07 02:07:38',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Very Low Carbs',
                'normalized' => NULL,
                'slug' => 'very-low-carbs',
                'created_at' => '2019-01-07 02:07:44',
                'updated_at' => '2019-01-07 02:07:44',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'High Calcium',
                'normalized' => NULL,
                'slug' => 'high-calcium',
                'created_at' => '2019-01-07 02:08:02',
                'updated_at' => '2019-01-07 02:08:02',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Deep Fried',
                'normalized' => NULL,
                'slug' => 'deep-fried',
                'created_at' => '2019-01-07 02:08:13',
                'updated_at' => '2019-01-07 02:08:13',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Polish',
                'normalized' => NULL,
                'slug' => 'polish',
                'created_at' => '2019-01-07 02:08:35',
                'updated_at' => '2019-01-07 02:08:35',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Refrigerator',
                'normalized' => NULL,
                'slug' => 'refrigerator',
                'created_at' => '2019-01-07 02:08:40',
                'updated_at' => '2019-01-07 02:08:40',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Indian',
                'normalized' => NULL,
                'slug' => 'indian',
                'created_at' => '2019-01-07 02:08:48',
                'updated_at' => '2019-01-07 02:08:48',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Mexican',
                'normalized' => NULL,
                'slug' => 'mexican',
                'created_at' => '2019-01-07 02:08:57',
                'updated_at' => '2019-01-07 02:08:57',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Cauliflower',
                'normalized' => NULL,
                'slug' => 'cauliflower',
                'created_at' => '2019-01-07 02:09:01',
                'updated_at' => '2019-01-07 02:09:01',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Baking',
                'normalized' => NULL,
                'slug' => 'baking',
                'created_at' => '2019-01-07 02:09:06',
                'updated_at' => '2019-01-07 02:09:06',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Pacific Northwest',
                'normalized' => NULL,
                'slug' => 'pacific-northwest',
                'created_at' => '2019-01-07 02:09:08',
                'updated_at' => '2019-01-07 02:09:08',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'All Seasons',
                'normalized' => NULL,
                'slug' => 'all-seasons',
                'created_at' => '2019-01-07 02:33:50',
                'updated_at' => '2019-01-07 02:33:50',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Appetizer',
                'normalized' => NULL,
                'slug' => 'appetizer',
                'created_at' => '2019-01-07 02:33:50',
                'updated_at' => '2019-01-07 02:33:50',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Breakstones',
                'normalized' => NULL,
                'slug' => 'breakstones',
                'created_at' => '2019-01-07 02:33:50',
                'updated_at' => '2019-01-07 02:33:50',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Cooking for a Crowd',
                'normalized' => NULL,
                'slug' => 'cooking-for-a-crowd',
                'created_at' => '2019-01-07 02:33:50',
                'updated_at' => '2019-01-07 02:33:50',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Cream Cheese',
                'normalized' => NULL,
                'slug' => 'cream-cheese',
                'created_at' => '2019-01-07 02:33:50',
                'updated_at' => '2019-01-07 02:33:50',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Creamy',
                'normalized' => NULL,
                'slug' => 'creamy',
                'created_at' => '2019-01-07 02:33:51',
                'updated_at' => '2019-01-07 02:33:51',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Dairy',
                'normalized' => NULL,
                'slug' => 'dairy',
                'created_at' => '2019-01-07 02:33:51',
                'updated_at' => '2019-01-07 02:33:51',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Dip',
                'normalized' => NULL,
                'slug' => 'dip',
                'created_at' => '2019-01-07 02:33:51',
                'updated_at' => '2019-01-07 02:33:51',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Fish',
                'normalized' => NULL,
                'slug' => 'fish',
                'created_at' => '2019-01-07 02:33:52',
                'updated_at' => '2019-01-07 02:33:52',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Knudsen',
                'normalized' => NULL,
                'slug' => 'knudsen',
                'created_at' => '2019-01-07 02:33:52',
                'updated_at' => '2019-01-07 02:33:52',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Onion',
                'normalized' => NULL,
                'slug' => 'onion',
                'created_at' => '2019-01-07 02:33:52',
                'updated_at' => '2019-01-07 02:33:52',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Philadelphia',
                'normalized' => NULL,
                'slug' => 'philadelphia',
                'created_at' => '2019-01-07 02:33:52',
                'updated_at' => '2019-01-07 02:33:52',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Quick and Easy',
                'normalized' => NULL,
                'slug' => 'quick-and-easy',
                'created_at' => '2019-01-07 02:33:53',
                'updated_at' => '2019-01-07 02:33:53',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Salmon',
                'normalized' => NULL,
                'slug' => 'salmon',
                'created_at' => '2019-01-07 02:33:53',
                'updated_at' => '2019-01-07 02:33:53',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Seafood',
                'normalized' => NULL,
                'slug' => 'seafood',
                'created_at' => '2019-01-07 02:33:53',
                'updated_at' => '2019-01-07 02:33:53',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Sour Cream',
                'normalized' => NULL,
                'slug' => 'sour-cream',
                'created_at' => '2019-01-07 02:33:53',
                'updated_at' => '2019-01-07 02:33:53',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Vegetables',
                'normalized' => NULL,
                'slug' => 'vegetables',
                'created_at' => '2019-01-07 02:33:53',
                'updated_at' => '2019-01-07 02:33:53',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Eggs',
                'normalized' => NULL,
                'slug' => 'eggs',
                'created_at' => '2019-01-07 02:34:00',
                'updated_at' => '2019-01-07 02:34:00',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Microwaved',
                'normalized' => NULL,
                'slug' => 'microwaved',
                'created_at' => '2019-01-07 02:34:00',
                'updated_at' => '2019-01-07 02:34:00',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Nutrition and Well-Being',
                'normalized' => NULL,
                'slug' => 'nutrition-and-well-being',
                'created_at' => '2019-01-07 02:34:00',
                'updated_at' => '2019-01-07 02:34:00',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Pudding',
                'normalized' => NULL,
                'slug' => 'pudding',
                'created_at' => '2019-01-07 02:34:00',
                'updated_at' => '2019-01-07 02:34:00',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Top of Stove',
                'normalized' => NULL,
                'slug' => 'top-of-stove',
                'created_at' => '2019-01-07 02:34:01',
                'updated_at' => '2019-01-07 02:34:01',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Avocado',
                'normalized' => NULL,
                'slug' => 'avocado',
                'created_at' => '2019-01-07 02:34:06',
                'updated_at' => '2019-01-07 02:34:06',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Cheddar',
                'normalized' => NULL,
                'slug' => 'cheddar',
                'created_at' => '2019-01-07 02:34:06',
                'updated_at' => '2019-01-07 02:34:06',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Cheesy',
                'normalized' => NULL,
                'slug' => 'cheesy',
                'created_at' => '2019-01-07 02:34:07',
                'updated_at' => '2019-01-07 02:34:07',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Kraft Cheese',
                'normalized' => NULL,
                'slug' => 'kraft-cheese',
                'created_at' => '2019-01-07 02:34:07',
                'updated_at' => '2019-01-07 02:34:07',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Kraft Shredded Cheese',
                'normalized' => NULL,
                'slug' => 'kraft-shredded-cheese',
                'created_at' => '2019-01-07 02:34:08',
                'updated_at' => '2019-01-07 02:34:08',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Phillyskin1',
                'normalized' => NULL,
                'slug' => 'phillyskin1',
                'created_at' => '2019-01-07 02:34:08',
                'updated_at' => '2019-01-07 02:34:08',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Taco Bell®',
                'normalized' => NULL,
                'slug' => 'taco-bell',
                'created_at' => '2019-01-07 02:34:08',
                'updated_at' => '2019-01-07 02:34:08',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Tomato',
                'normalized' => NULL,
                'slug' => 'tomato',
                'created_at' => '2019-01-07 02:34:08',
                'updated_at' => '2019-01-07 02:34:08',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Baked',
                'normalized' => NULL,
                'slug' => 'baked',
                'created_at' => '2019-01-07 02:34:18',
                'updated_at' => '2019-01-07 02:34:18',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Bakers',
                'normalized' => NULL,
                'slug' => 'bakers',
                'created_at' => '2019-01-07 02:34:18',
                'updated_at' => '2019-01-07 02:34:18',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Brownie',
                'normalized' => NULL,
                'slug' => 'brownie',
                'created_at' => '2019-01-07 02:34:18',
                'updated_at' => '2019-01-07 02:34:18',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Chocolate',
                'normalized' => NULL,
                'slug' => 'chocolate',
                'created_at' => '2019-01-07 02:34:19',
                'updated_at' => '2019-01-07 02:34:19',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Kwanzaa',
                'normalized' => NULL,
                'slug' => 'kwanzaa',
                'created_at' => '2019-01-07 02:34:19',
                'updated_at' => '2019-01-07 02:34:19',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Nuts',
                'normalized' => NULL,
                'slug' => 'nuts',
                'created_at' => '2019-01-07 02:34:19',
                'updated_at' => '2019-01-07 02:34:19',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Picnic',
                'normalized' => NULL,
                'slug' => 'picnic',
                'created_at' => '2019-01-07 02:34:19',
                'updated_at' => '2019-01-07 02:34:19',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Pies and Tarts',
                'normalized' => NULL,
                'slug' => 'pies-and-tarts',
                'created_at' => '2019-01-07 02:34:20',
                'updated_at' => '2019-01-07 02:34:20',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Planters',
                'normalized' => NULL,
                'slug' => 'planters',
                'created_at' => '2019-01-07 02:34:20',
                'updated_at' => '2019-01-07 02:34:20',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Banana',
                'normalized' => NULL,
                'slug' => 'banana',
                'created_at' => '2019-01-07 02:34:27',
                'updated_at' => '2019-01-07 02:34:27',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Cool Whip',
                'normalized' => NULL,
                'slug' => 'cool-whip',
                'created_at' => '2019-01-07 02:34:28',
                'updated_at' => '2019-01-07 02:34:28',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Easter',
                'normalized' => NULL,
                'slug' => 'easter',
                'created_at' => '2019-01-07 02:34:29',
                'updated_at' => '2019-01-07 02:34:29',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Intermediate',
                'normalized' => NULL,
                'slug' => 'intermediate',
                'created_at' => '2019-01-07 02:34:29',
                'updated_at' => '2019-01-07 02:34:29',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Jell-O',
                'normalized' => NULL,
                'slug' => 'jell-o',
                'created_at' => '2019-01-07 02:34:29',
                'updated_at' => '2019-01-07 02:34:29',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Southern',
                'normalized' => NULL,
                'slug' => 'southern',
                'created_at' => '2019-01-07 02:34:30',
                'updated_at' => '2019-01-07 02:34:30',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => '4th of July',
                'normalized' => NULL,
                'slug' => '4th-of-july',
                'created_at' => '2019-01-07 02:34:37',
                'updated_at' => '2019-01-07 02:34:37',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Berries',
                'normalized' => NULL,
                'slug' => 'berries',
                'created_at' => '2019-01-07 02:34:38',
                'updated_at' => '2019-01-07 02:34:38',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Kid-Friendly',
                'normalized' => NULL,
                'slug' => 'kid-friendly-1',
                'created_at' => '2019-01-07 02:34:40',
                'updated_at' => '2019-01-07 02:34:40',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Kids Can Cook',
                'normalized' => NULL,
                'slug' => 'kids-can-cook',
                'created_at' => '2019-01-07 02:34:40',
                'updated_at' => '2019-01-07 02:34:40',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Bacon',
                'normalized' => NULL,
                'slug' => 'bacon',
                'created_at' => '2019-01-07 02:34:48',
                'updated_at' => '2019-01-07 02:34:48',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Beans / Legumes',
                'normalized' => NULL,
                'slug' => 'beans-legumes',
                'created_at' => '2019-01-07 02:34:48',
                'updated_at' => '2019-01-07 02:34:48',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Carrot',
                'normalized' => NULL,
                'slug' => 'carrot',
                'created_at' => '2019-01-07 02:34:49',
                'updated_at' => '2019-01-07 02:34:49',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Dinner',
                'normalized' => NULL,
                'slug' => 'dinner',
                'created_at' => '2019-01-07 02:34:49',
                'updated_at' => '2019-01-07 02:34:49',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Garlic',
                'normalized' => NULL,
                'slug' => 'garlic',
                'created_at' => '2019-01-07 02:34:50',
                'updated_at' => '2019-01-07 02:34:50',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Hot Dog',
                'normalized' => NULL,
                'slug' => 'hot-dog',
                'created_at' => '2019-01-07 02:34:50',
                'updated_at' => '2019-01-07 02:34:50',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Hot Dogs/Franks',
                'normalized' => NULL,
                'slug' => 'hot-dogsfranks',
                'created_at' => '2019-01-07 02:34:50',
                'updated_at' => '2019-01-07 02:34:50',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Lunch',
                'normalized' => NULL,
                'slug' => 'lunch',
                'created_at' => '2019-01-07 02:34:50',
                'updated_at' => '2019-01-07 02:34:50',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Make Ahead',
                'normalized' => NULL,
                'slug' => 'make-ahead',
                'created_at' => '2019-01-07 02:34:50',
                'updated_at' => '2019-01-07 02:34:50',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Oscar Mayer',
                'normalized' => NULL,
                'slug' => 'oscar-mayer',
                'created_at' => '2019-01-07 02:34:50',
                'updated_at' => '2019-01-07 02:34:50',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'OscarMayer071514Promobox',
                'normalized' => NULL,
                'slug' => 'oscarmayer071514promobox',
                'created_at' => '2019-01-07 02:34:51',
                'updated_at' => '2019-01-07 02:34:51',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Soup',
                'normalized' => NULL,
                'slug' => 'soup',
                'created_at' => '2019-01-07 02:34:51',
                'updated_at' => '2019-01-07 02:34:51',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Beef',
                'normalized' => NULL,
                'slug' => 'beef',
                'created_at' => '2019-01-07 02:34:57',
                'updated_at' => '2019-01-07 02:34:57',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Entree',
                'normalized' => NULL,
                'slug' => 'entree',
                'created_at' => '2019-01-07 02:34:57',
                'updated_at' => '2019-01-07 02:34:57',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Kraft Barbecue Sauce',
                'normalized' => NULL,
                'slug' => 'kraft-barbecue-sauce',
                'created_at' => '2019-01-07 02:34:57',
                'updated_at' => '2019-01-07 02:34:57',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Stir-fry',
                'normalized' => NULL,
                'slug' => 'stir-fry',
                'created_at' => '2019-01-07 02:34:58',
                'updated_at' => '2019-01-07 02:34:58',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Aluminum Foil',
                'normalized' => NULL,
                'slug' => 'aluminum-foil',
                'created_at' => '2019-01-07 02:35:03',
                'updated_at' => '2019-01-07 02:35:03',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Fathers Day',
                'normalized' => NULL,
                'slug' => 'fathers-day',
                'created_at' => '2019-01-07 02:35:04',
                'updated_at' => '2019-01-07 02:35:04',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'New Years',
                'normalized' => NULL,
                'slug' => 'new-years',
                'created_at' => '2019-01-07 02:35:04',
                'updated_at' => '2019-01-07 02:35:04',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Pan Fried',
                'normalized' => NULL,
                'slug' => 'pan-fried',
                'created_at' => '2019-01-07 02:35:05',
                'updated_at' => '2019-01-07 02:35:05',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Peach',
                'normalized' => NULL,
                'slug' => 'peach',
                'created_at' => '2019-01-07 02:35:05',
                'updated_at' => '2019-01-07 02:35:05',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Peppers',
                'normalized' => NULL,
                'slug' => 'peppers',
                'created_at' => '2019-01-07 02:35:05',
                'updated_at' => '2019-01-07 02:35:05',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Real Women of Philly',
                'normalized' => NULL,
                'slug' => 'real-women-of-philly',
                'created_at' => '2019-01-07 02:35:05',
                'updated_at' => '2019-01-07 02:35:05',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Roasted',
                'normalized' => NULL,
                'slug' => 'roasted',
                'created_at' => '2019-01-07 02:35:05',
                'updated_at' => '2019-01-07 02:35:05',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Sausage',
                'normalized' => NULL,
                'slug' => 'sausage',
                'created_at' => '2019-01-07 02:35:05',
                'updated_at' => '2019-01-07 02:35:05',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'Kraft Grated Cheese',
                'normalized' => NULL,
                'slug' => 'kraft-grated-cheese',
                'created_at' => '2019-01-07 02:35:12',
                'updated_at' => '2019-01-07 02:35:12',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Mushroom',
                'normalized' => NULL,
                'slug' => 'mushroom',
                'created_at' => '2019-01-07 02:35:12',
                'updated_at' => '2019-01-07 02:35:12',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Parmesan',
                'normalized' => NULL,
                'slug' => 'parmesan',
                'created_at' => '2019-01-07 02:35:12',
                'updated_at' => '2019-01-07 02:35:12',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Kraft Salad Dressing',
                'normalized' => NULL,
                'slug' => 'kraft-salad-dressing',
                'created_at' => '2019-01-07 02:35:16',
                'updated_at' => '2019-01-07 02:35:16',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Lettuce',
                'normalized' => NULL,
                'slug' => 'lettuce',
                'created_at' => '2019-01-07 02:35:16',
                'updated_at' => '2019-01-07 02:35:16',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Mozzarella',
                'normalized' => NULL,
                'slug' => 'mozzarella',
                'created_at' => '2019-01-07 02:35:16',
                'updated_at' => '2019-01-07 02:35:16',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Oranges',
                'normalized' => NULL,
                'slug' => 'oranges',
                'created_at' => '2019-01-07 02:35:17',
                'updated_at' => '2019-01-07 02:35:17',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Raspberry',
                'normalized' => NULL,
                'slug' => 'raspberry',
                'created_at' => '2019-01-07 02:35:17',
                'updated_at' => '2019-01-07 02:35:17',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Salad',
                'normalized' => NULL,
                'slug' => 'salad',
                'created_at' => '2019-01-07 02:35:17',
                'updated_at' => '2019-01-07 02:35:17',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Cake',
                'normalized' => NULL,
                'slug' => 'cake',
                'created_at' => '2019-01-07 02:35:22',
                'updated_at' => '2019-01-07 02:35:22',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Cheesecake',
                'normalized' => NULL,
                'slug' => 'cheesecake',
                'created_at' => '2019-01-07 02:35:22',
                'updated_at' => '2019-01-07 02:35:22',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Pineapple',
                'normalized' => NULL,
                'slug' => 'pineapple',
                'created_at' => '2019-01-07 02:35:22',
                'updated_at' => '2019-01-07 02:35:22',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Refrigerated Dessert',
                'normalized' => NULL,
                'slug' => 'refrigerated-dessert',
                'created_at' => '2019-01-07 02:35:29',
                'updated_at' => '2019-01-07 02:35:29',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Cobbler and Crisp',
                'normalized' => NULL,
                'slug' => 'cobbler-and-crisp',
                'created_at' => '2019-01-07 02:35:35',
                'updated_at' => '2019-01-07 02:35:35',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Fall',
                'normalized' => NULL,
                'slug' => 'fall',
                'created_at' => '2019-01-07 02:35:36',
                'updated_at' => '2019-01-07 02:35:36',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Halloween',
                'normalized' => NULL,
                'slug' => 'halloween',
                'created_at' => '2019-01-07 02:35:41',
                'updated_at' => '2019-01-07 02:35:41',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Apricot',
                'normalized' => NULL,
                'slug' => 'apricot',
                'created_at' => '2019-01-07 02:35:46',
                'updated_at' => '2019-01-07 02:35:46',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Peanuts',
                'normalized' => NULL,
                'slug' => 'peanuts',
                'created_at' => '2019-01-07 02:35:51',
                'updated_at' => '2019-01-07 02:35:51',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Game Day',
                'normalized' => NULL,
                'slug' => 'game-day',
                'created_at' => '2019-01-07 02:35:57',
                'updated_at' => '2019-01-07 02:35:57',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Miracle Whip',
                'normalized' => NULL,
                'slug' => 'miracle-whip',
                'created_at' => '2019-01-07 02:35:57',
                'updated_at' => '2019-01-07 02:35:57',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Southwest',
                'normalized' => NULL,
                'slug' => 'southwest',
                'created_at' => '2019-01-07 02:35:58',
                'updated_at' => '2019-01-07 02:35:58',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Bar Cookies',
                'normalized' => NULL,
                'slug' => 'bar-cookies',
                'created_at' => '2019-01-07 02:36:06',
                'updated_at' => '2019-01-07 02:36:06',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Frozen Dessert',
                'normalized' => NULL,
                'slug' => 'frozen-dessert',
                'created_at' => '2019-01-07 02:36:07',
                'updated_at' => '2019-01-07 02:36:07',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Grilled',
                'normalized' => NULL,
                'slug' => 'grilled',
                'created_at' => '2019-01-07 02:36:11',
                'updated_at' => '2019-01-07 02:36:11',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Lemon',
                'normalized' => NULL,
                'slug' => 'lemon',
                'created_at' => '2019-01-07 02:36:11',
                'updated_at' => '2019-01-07 02:36:11',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Side Dish',
                'normalized' => NULL,
                'slug' => 'side-dish',
                'created_at' => '2019-01-07 02:36:11',
                'updated_at' => '2019-01-07 02:36:11',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'Squash',
                'normalized' => NULL,
                'slug' => 'squash',
                'created_at' => '2019-01-07 02:36:11',
                'updated_at' => '2019-01-07 02:36:11',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Zucchini',
                'normalized' => NULL,
                'slug' => 'zucchini',
                'created_at' => '2019-01-07 02:36:12',
                'updated_at' => '2019-01-07 02:36:12',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'Coffee',
                'normalized' => NULL,
                'slug' => 'coffee',
                'created_at' => '2019-01-07 02:36:17',
                'updated_at' => '2019-01-07 02:36:17',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Maxwell House',
                'normalized' => NULL,
                'slug' => 'maxwell-house',
                'created_at' => '2019-01-07 02:36:17',
                'updated_at' => '2019-01-07 02:36:17',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Baby shower',
                'normalized' => NULL,
                'slug' => 'baby-shower',
                'created_at' => '2019-01-07 02:36:24',
                'updated_at' => '2019-01-07 02:36:24',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Bridal shower',
                'normalized' => NULL,
                'slug' => 'bridal-shower',
                'created_at' => '2019-01-07 02:36:24',
                'updated_at' => '2019-01-07 02:36:24',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Cookie Balls',
                'normalized' => NULL,
                'slug' => 'cookie-balls',
                'created_at' => '2019-01-07 02:36:24',
                'updated_at' => '2019-01-07 02:36:24',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Cranberry',
                'normalized' => NULL,
                'slug' => 'cranberry',
                'created_at' => '2019-01-07 02:36:24',
                'updated_at' => '2019-01-07 02:36:24',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Gift Giving',
                'normalized' => NULL,
                'slug' => 'gift-giving',
                'created_at' => '2019-01-07 02:36:24',
                'updated_at' => '2019-01-07 02:36:24',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Valentines Day',
                'normalized' => NULL,
                'slug' => 'valentines-day',
                'created_at' => '2019-01-07 02:36:25',
                'updated_at' => '2019-01-07 02:36:25',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Pumpkin',
                'normalized' => NULL,
                'slug' => 'pumpkin',
                'created_at' => '2019-01-07 02:36:32',
                'updated_at' => '2019-01-07 02:36:32',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Barbecued',
                'normalized' => NULL,
                'slug' => 'barbecued',
                'created_at' => '2019-01-07 02:36:37',
                'updated_at' => '2019-01-07 02:36:37',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'BBQ',
                'normalized' => NULL,
                'slug' => 'bbq',
                'created_at' => '2019-01-07 02:36:37',
                'updated_at' => '2019-01-07 02:36:37',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Cajun and Creole',
                'normalized' => NULL,
                'slug' => 'cajun-and-creole',
                'created_at' => '2019-01-07 02:36:37',
                'updated_at' => '2019-01-07 02:36:37',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'Ham',
                'normalized' => NULL,
                'slug' => 'ham',
                'created_at' => '2019-01-07 02:36:37',
                'updated_at' => '2019-01-07 02:36:37',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Kabob',
                'normalized' => NULL,
                'slug' => 'kabob',
                'created_at' => '2019-01-07 02:36:37',
                'updated_at' => '2019-01-07 02:36:37',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Mardi Gras',
                'normalized' => NULL,
                'slug' => 'mardi-gras',
                'created_at' => '2019-01-07 02:36:38',
                'updated_at' => '2019-01-07 02:36:38',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Shrimp',
                'normalized' => NULL,
                'slug' => 'shrimp',
                'created_at' => '2019-01-07 02:36:38',
                'updated_at' => '2019-01-07 02:36:38',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Drinks',
                'normalized' => NULL,
                'slug' => 'drinks',
                'created_at' => '2019-01-07 02:36:42',
                'updated_at' => '2019-01-07 02:36:42',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Ice Cream',
                'normalized' => NULL,
                'slug' => 'ice-cream',
                'created_at' => '2019-01-07 02:36:42',
                'updated_at' => '2019-01-07 02:36:42',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'MaxwellHouseBranding c',
                'normalized' => NULL,
                'slug' => 'maxwellhousebranding-c',
                'created_at' => '2019-01-07 02:36:43',
                'updated_at' => '2019-01-07 02:36:43',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Smoothies and Shakes',
                'normalized' => NULL,
                'slug' => 'smoothies-and-shakes',
                'created_at' => '2019-01-07 02:36:43',
                'updated_at' => '2019-01-07 02:36:43',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Lime',
                'normalized' => NULL,
                'slug' => 'lime',
                'created_at' => '2019-01-07 02:36:55',
                'updated_at' => '2019-01-07 02:36:55',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Mocktail',
                'normalized' => NULL,
                'slug' => 'mocktail',
                'created_at' => '2019-01-07 02:36:55',
                'updated_at' => '2019-01-07 02:36:55',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Summer Entertaining',
                'normalized' => NULL,
                'slug' => 'summer-entertaining',
                'created_at' => '2019-01-07 02:36:56',
                'updated_at' => '2019-01-07 02:36:56',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Cabbage',
                'normalized' => NULL,
                'slug' => 'cabbage',
                'created_at' => '2019-01-07 02:37:00',
                'updated_at' => '2019-01-07 02:37:00',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'Hot Sandwich',
                'normalized' => NULL,
                'slug' => 'hot-sandwich',
                'created_at' => '2019-01-07 02:37:00',
                'updated_at' => '2019-01-07 02:37:00',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'Sandwich',
                'normalized' => NULL,
                'slug' => 'sandwich',
                'created_at' => '2019-01-07 02:37:01',
                'updated_at' => '2019-01-07 02:37:01',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Slaw',
                'normalized' => NULL,
                'slug' => 'slaw',
                'created_at' => '2019-01-07 02:37:01',
                'updated_at' => '2019-01-07 02:37:01',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'African American',
                'normalized' => NULL,
                'slug' => 'african-american',
                'created_at' => '2019-01-07 02:37:05',
                'updated_at' => '2019-01-07 02:37:05',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Foil-Pack',
                'normalized' => NULL,
                'slug' => 'foil-pack',
                'created_at' => '2019-01-07 02:37:05',
                'updated_at' => '2019-01-07 02:37:05',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Ribs',
                'normalized' => NULL,
                'slug' => 'ribs',
                'created_at' => '2019-01-07 02:37:06',
                'updated_at' => '2019-01-07 02:37:06',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'A.1.',
                'normalized' => NULL,
                'slug' => 'a1',
                'created_at' => '2019-01-07 02:37:11',
                'updated_at' => '2019-01-07 02:37:11',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Chili',
                'normalized' => NULL,
                'slug' => 'chili',
                'created_at' => '2019-01-07 02:37:11',
                'updated_at' => '2019-01-07 02:37:11',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Ground Beef',
                'normalized' => NULL,
                'slug' => 'ground-beef',
                'created_at' => '2019-01-07 02:37:12',
                'updated_at' => '2019-01-07 02:37:12',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Slow cooker',
                'normalized' => NULL,
                'slug' => 'slow-cooker',
                'created_at' => '2019-01-07 02:37:12',
                'updated_at' => '2019-01-07 02:37:12',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Steak',
                'normalized' => NULL,
                'slug' => 'steak',
                'created_at' => '2019-01-07 02:37:12',
                'updated_at' => '2019-01-07 02:37:12',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Birthday party',
                'normalized' => NULL,
                'slug' => 'birthday-party',
                'created_at' => '2019-01-07 02:37:22',
                'updated_at' => '2019-01-07 02:37:22',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Kraft Caramels',
                'normalized' => NULL,
                'slug' => 'kraft-caramels',
                'created_at' => '2019-01-07 02:37:36',
                'updated_at' => '2019-01-07 02:37:36',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Cooking for One or Two',
                'normalized' => NULL,
                'slug' => 'cooking-for-one-or-two',
                'created_at' => '2019-01-07 02:38:11',
                'updated_at' => '2019-01-07 02:38:11',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Jet-Puffed',
                'normalized' => NULL,
                'slug' => 'jet-puffed',
                'created_at' => '2019-01-07 02:38:11',
                'updated_at' => '2019-01-07 02:38:11',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'SMores',
                'normalized' => NULL,
                'slug' => 'smores',
                'created_at' => '2019-01-07 02:38:12',
                'updated_at' => '2019-01-07 02:38:12',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'Cookie',
                'normalized' => NULL,
                'slug' => 'cookie-1',
                'created_at' => '2019-01-07 02:38:15',
                'updated_at' => '2019-01-07 02:38:15',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Decorating/Garnishing',
                'normalized' => NULL,
                'slug' => 'decoratinggarnishing',
                'created_at' => '2019-01-07 02:38:15',
                'updated_at' => '2019-01-07 02:38:15',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'Entree Salad',
                'normalized' => NULL,
                'slug' => 'entree-salad',
                'created_at' => '2019-01-07 02:38:24',
                'updated_at' => '2019-01-07 02:38:24',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Kraft Mayo',
                'normalized' => NULL,
                'slug' => 'kraft-mayo',
                'created_at' => '2019-01-07 02:38:24',
                'updated_at' => '2019-01-07 02:38:24',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'Kraft Sauce',
                'normalized' => NULL,
                'slug' => 'kraft-sauce',
                'created_at' => '2019-01-07 02:38:24',
                'updated_at' => '2019-01-07 02:38:24',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'No Bake',
                'normalized' => NULL,
                'slug' => 'no-bake',
                'created_at' => '2019-01-07 02:38:31',
                'updated_at' => '2019-01-07 02:38:31',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Budget',
                'normalized' => NULL,
                'slug' => 'budget',
                'created_at' => '2019-01-07 02:38:37',
                'updated_at' => '2019-01-07 02:38:37',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Skillet Dish',
                'normalized' => NULL,
                'slug' => 'skillet-dish',
                'created_at' => '2019-01-07 02:38:37',
                'updated_at' => '2019-01-07 02:38:37',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Velveeta',
                'normalized' => NULL,
                'slug' => 'velveeta',
                'created_at' => '2019-01-07 02:38:37',
                'updated_at' => '2019-01-07 02:38:37',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => '',
                'normalized' => NULL,
                'slug' => '',
                'created_at' => '2019-01-07 02:38:43',
                'updated_at' => '2019-01-07 02:38:43',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'Back to school',
                'normalized' => NULL,
                'slug' => 'back-to-school',
                'created_at' => '2019-01-07 02:38:52',
                'updated_at' => '2019-01-07 02:38:52',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Jell-O 101',
                'normalized' => NULL,
                'slug' => 'jell-o-101',
                'created_at' => '2019-01-07 02:38:52',
                'updated_at' => '2019-01-07 02:38:52',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Brined',
                'normalized' => NULL,
                'slug' => 'brined',
                'created_at' => '2019-01-07 02:38:59',
                'updated_at' => '2019-01-07 02:38:59',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Heinz Vinegar',
                'normalized' => NULL,
                'slug' => 'heinz-vinegar',
                'created_at' => '2019-01-07 02:38:59',
                'updated_at' => '2019-01-07 02:38:59',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Turkey',
                'normalized' => NULL,
                'slug' => 'turkey',
                'created_at' => '2019-01-07 02:39:00',
                'updated_at' => '2019-01-07 02:39:00',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Vinegar',
                'normalized' => NULL,
                'slug' => 'vinegar',
                'created_at' => '2019-01-07 02:39:00',
                'updated_at' => '2019-01-07 02:39:00',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'Burger',
                'normalized' => NULL,
                'slug' => 'burger',
                'created_at' => '2019-01-07 02:39:04',
                'updated_at' => '2019-01-07 02:39:04',
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'Kraft Deli Fresh',
                'normalized' => NULL,
                'slug' => 'kraft-deli-fresh',
                'created_at' => '2019-01-07 02:39:04',
                'updated_at' => '2019-01-07 02:39:04',
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'Monterey Jack',
                'normalized' => NULL,
                'slug' => 'monterey-jack',
                'created_at' => '2019-01-07 02:39:04',
                'updated_at' => '2019-01-07 02:39:04',
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'MSA PromoBox',
                'normalized' => NULL,
                'slug' => 'msa-promobox',
                'created_at' => '2019-01-07 02:39:05',
                'updated_at' => '2019-01-07 02:39:05',
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'MSASkin1',
                'normalized' => NULL,
                'slug' => 'msaskin1',
                'created_at' => '2019-01-07 02:39:05',
                'updated_at' => '2019-01-07 02:39:05',
            ),
        ));
        
        
    }
}