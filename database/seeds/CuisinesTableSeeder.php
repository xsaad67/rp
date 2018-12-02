<?php

use Illuminate\Database\Seeder;

class CuisinesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cuisines')->delete();
        
        \DB::table('cuisines')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Mexican',
                'slug' => 'mexican',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:21',
                'updated_at' => '2018-12-02 07:03:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Swedish',
                'slug' => 'swedish',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:21',
                'updated_at' => '2018-12-02 07:03:21',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Latvian',
                'slug' => 'latvian',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:21',
                'updated_at' => '2018-12-02 07:03:21',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Italian',
                'slug' => 'italian',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Spanish',
                'slug' => 'spanish',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'American',
                'slug' => 'american',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Scottish',
                'slug' => 'scottish',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'British',
                'slug' => 'british',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Thai',
                'slug' => 'thai',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Japanese',
                'slug' => 'japanese',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Chinese',
                'slug' => 'chinese',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Indian',
                'slug' => 'indian',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Canadian',
                'slug' => 'canadian',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Russian',
                'slug' => 'russian',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Jewish',
                'slug' => 'jewish',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Polish',
                'slug' => 'polish',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'German',
                'slug' => 'german',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'French',
                'slug' => 'french',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Hawaiian',
                'slug' => 'hawaiian',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Brazilian',
                'slug' => 'brazilian',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Peruvian',
                'slug' => 'peruvian',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Salvadorian',
                'slug' => 'salvadorian',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Cuban',
                'slug' => 'cuban',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Tibetan',
                'slug' => 'tibetan',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Egyptian',
                'slug' => 'egyptian',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Greek',
                'slug' => 'greek',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Belgians',
                'slug' => 'belgians',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:22',
                'updated_at' => '2018-12-02 07:03:22',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Irish',
                'slug' => 'irish',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:23',
                'updated_at' => '2018-12-02 07:03:23',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Welsh',
                'slug' => 'welsh',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:23',
                'updated_at' => '2018-12-02 07:03:23',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Mormon',
                'slug' => 'mormon',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:23',
                'updated_at' => '2018-12-02 07:03:23',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Cajun',
                'slug' => 'cajun',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:23',
                'updated_at' => '2018-12-02 07:03:23',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Portuguese',
                'slug' => 'portuguese',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:23',
                'updated_at' => '2018-12-02 07:03:23',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Turkish',
                'slug' => 'turkish',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:23',
                'updated_at' => '2018-12-02 07:03:23',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Haitian',
                'slug' => 'haitian',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:23',
                'updated_at' => '2018-12-02 07:03:23',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Tahitian',
                'slug' => 'tahitian',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:23',
                'updated_at' => '2018-12-02 07:03:23',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Kenyan',
                'slug' => 'kenyan',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:23',
                'updated_at' => '2018-12-02 07:03:23',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Korean',
                'slug' => 'korean',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:23',
                'updated_at' => '2018-12-02 07:03:23',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Algerian',
                'slug' => 'algerian',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:23',
                'updated_at' => '2018-12-02 07:03:23',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Nigerian',
                'slug' => 'nigerian',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:23',
                'updated_at' => '2018-12-02 07:03:23',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Libyan',
                'slug' => 'libyan',
                'image' => NULL,
                'parent_id' => NULL,
                'description' => NULL,
                'icon' => NULL,
                'created_at' => '2018-12-02 07:03:23',
                'updated_at' => '2018-12-02 07:03:23',
            ),
        ));
        
        
    }
}