<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Vegetarian',
                'slug' => 'vegetarian',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:53',
                'updated_at' => '2018-12-02 05:44:53',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Turkey',
                'slug' => 'turkey',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:53',
                'updated_at' => '2018-12-02 05:44:53',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Stir Fry',
                'slug' => 'stir-fry',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:53',
                'updated_at' => '2018-12-02 05:44:53',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Soups',
                'slug' => 'soups',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Snacks',
                'slug' => 'snacks',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'Sides',
                'slug' => 'sides',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'Seafood',
                'slug' => 'seafood',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'Sausages',
                'slug' => 'sausages',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'Sauces',
                'slug' => 'sauces',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'Salads',
                'slug' => 'salads',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            10 => 
            array (
                'id' => 13,
                'name' => 'Rice',
                'slug' => 'rice',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            11 => 
            array (
                'id' => 14,
                'name' => 'Poultry',
                'slug' => 'poultry',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            12 => 
            array (
                'id' => 15,
                'name' => 'Pork',
                'slug' => 'pork',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            13 => 
            array (
                'id' => 16,
                'name' => 'Pies',
                'slug' => 'pies',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            14 => 
            array (
                'id' => 17,
                'name' => 'Pasta',
                'slug' => 'pasta',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            15 => 
            array (
                'id' => 18,
                'name' => 'Noodles',
                'slug' => 'noodles',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            16 => 
            array (
                'id' => 19,
                'name' => 'Mince',
                'slug' => 'mince',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            17 => 
            array (
                'id' => 20,
                'name' => 'Meat',
                'slug' => 'meat',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            18 => 
            array (
                'id' => 21,
                'name' => 'Lunch',
                'slug' => 'lunch',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            19 => 
            array (
                'id' => 22,
                'name' => 'Lamb',
                'slug' => 'lamb',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:54',
                'updated_at' => '2018-12-02 05:44:54',
            ),
            20 => 
            array (
                'id' => 23,
                'name' => 'Duck',
                'slug' => 'duck',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:55',
                'updated_at' => '2018-12-02 05:44:55',
            ),
            21 => 
            array (
                'id' => 24,
                'name' => 'Drinks',
                'slug' => 'drinks',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:55',
                'updated_at' => '2018-12-02 05:44:55',
            ),
            22 => 
            array (
                'id' => 25,
                'name' => 'Dinner',
                'slug' => 'dinner',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:55',
                'updated_at' => '2018-12-02 05:44:55',
            ),
            23 => 
            array (
                'id' => 26,
                'name' => 'Desserts',
                'slug' => 'desserts',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:55',
                'updated_at' => '2018-12-02 05:44:55',
            ),
            24 => 
            array (
                'id' => 27,
                'name' => 'Chicken',
                'slug' => 'chicken',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:55',
                'updated_at' => '2018-12-02 05:44:55',
            ),
            25 => 
            array (
                'id' => 28,
                'name' => 'Burgers',
                'slug' => 'burgers',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:55',
                'updated_at' => '2018-12-02 05:44:55',
            ),
            26 => 
            array (
                'id' => 29,
                'name' => 'Brunch',
                'slug' => 'brunch',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:55',
                'updated_at' => '2018-12-02 05:44:55',
            ),
            27 => 
            array (
                'id' => 30,
                'name' => 'Breakfast',
                'slug' => 'breakfast',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:55',
                'updated_at' => '2018-12-02 05:44:55',
            ),
            28 => 
            array (
                'id' => 31,
                'name' => 'Beef',
                'slug' => 'beef',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:55',
                'updated_at' => '2018-12-02 05:44:55',
            ),
            29 => 
            array (
                'id' => 32,
                'name' => 'Baking',
                'slug' => 'baking',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:55',
                'updated_at' => '2018-12-02 05:44:55',
            ),
            30 => 
            array (
                'id' => 33,
                'name' => 'Appetisers',
                'slug' => 'appetisers',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:55',
                'updated_at' => '2018-12-02 05:44:55',
            ),
            31 => 
            array (
                'id' => 34,
                'name' => 'Miscellaneous',
                'slug' => 'miscellaneous',
                'icon' => NULL,
                'image' => NULL,
                'description' => NULL,
                'parent_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2018-12-02 05:44:55',
                'updated_at' => '2018-12-02 05:44:55',
            ),

        ));
        
        
    }
}