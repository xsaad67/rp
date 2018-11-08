<?php

use Illuminate\Database\Seeder;

class RecipeIngridentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipe_ingridents')->delete();
        
        \DB::table('recipe_ingridents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'recipe_id' => '1',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 pound dried navy beans picked over and rinsed',
                'created_at' => '2018-11-08 08:19:26',
                'updated_at' => '2018-11-08 08:19:26',
            ),
            1 => 
            array (
                'id' => 2,
                'recipe_id' => '1',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup unsulfured light molasses',
                'created_at' => '2018-11-08 08:19:26',
                'updated_at' => '2018-11-08 08:19:26',
            ),
            2 => 
            array (
                'id' => 3,
                'recipe_id' => '1',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon sugar',
                'created_at' => '2018-11-08 08:19:26',
                'updated_at' => '2018-11-08 08:19:26',
            ),
            3 => 
            array (
                'id' => 4,
                'recipe_id' => '1',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon salt',
                'created_at' => '2018-11-08 08:19:26',
                'updated_at' => '2018-11-08 08:19:26',
            ),
            4 => 
            array (
                'id' => 5,
                'recipe_id' => '1',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon dry mustard',
                'created_at' => '2018-11-08 08:19:26',
                'updated_at' => '2018-11-08 08:19:26',
            ),
            5 => 
            array (
                'id' => 6,
                'recipe_id' => '1',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup finely chopped onion if desired',
                'created_at' => '2018-11-08 08:19:27',
                'updated_at' => '2018-11-08 08:19:27',
            ),
            6 => 
            array (
                'id' => 7,
                'recipe_id' => '1',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 pound salt pork, cut into 1/4-inch-thick slices',
                'created_at' => '2018-11-08 08:19:27',
                'updated_at' => '2018-11-08 08:19:27',
            ),
            7 => 
            array (
                'id' => 8,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 bacon slices, chopped',
                'created_at' => '2018-11-08 08:19:28',
                'updated_at' => '2018-11-08 08:19:28',
            ),
            8 => 
            array (
                'id' => 9,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1/2 sticks (3/4 cup) unsalted butter, cut into tablespoon pieces',
                'created_at' => '2018-11-08 08:19:29',
                'updated_at' => '2018-11-08 08:19:29',
            ),
            9 => 
            array (
                'id' => 10,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 pounds yellow onions (8 medium), halved lengthwise and thinly sliced crosswise',
                'created_at' => '2018-11-08 08:19:29',
                'updated_at' => '2018-11-08 08:19:29',
            ),
            10 => 
            array (
                'id' => 11,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 teaspoons table salt',
                'created_at' => '2018-11-08 08:19:29',
                'updated_at' => '2018-11-08 08:19:29',
            ),
            11 => 
            array (
                'id' => 12,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 (10-ounce) box frozen black-eyed peas, thawed, or 1 (15-ounce) can, rinsed and drained',
                'created_at' => '2018-11-08 08:19:29',
                'updated_at' => '2018-11-08 08:19:29',
            ),
            12 => 
            array (
                'id' => 13,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 medium red onion, finely chopped',
                'created_at' => '2018-11-08 08:19:29',
                'updated_at' => '2018-11-08 08:19:29',
            ),
            13 => 
            array (
                'id' => 14,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup finely chopped celery',
                'created_at' => '2018-11-08 08:19:29',
                'updated_at' => '2018-11-08 08:19:29',
            ),
            14 => 
            array (
                'id' => 15,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon finely chopped garlic',
                'created_at' => '2018-11-08 08:19:30',
                'updated_at' => '2018-11-08 08:19:30',
            ),
            15 => 
            array (
                'id' => 16,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 1/2 cups Arborio rice (17 1/2 ounces)',
                'created_at' => '2018-11-08 08:19:30',
                'updated_at' => '2018-11-08 08:19:30',
            ),
            16 => 
            array (
                'id' => 17,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup dry white wine',
                'created_at' => '2018-11-08 08:19:30',
                'updated_at' => '2018-11-08 08:19:30',
            ),
            17 => 
            array (
                'id' => 18,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 ounces sliced pancetta (Italian unsmoked cured bacon), cut into 1/4-inch dice (1/2 cup)',
                'created_at' => '2018-11-08 08:19:30',
                'updated_at' => '2018-11-08 08:19:30',
            ),
            18 => 
            array (
                'id' => 19,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon chopped fresh lemon thyme or regular thyme',
                'created_at' => '2018-11-08 08:19:30',
                'updated_at' => '2018-11-08 08:19:30',
            ),
            19 => 
            array (
                'id' => 20,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon dried hot red pepper flakes',
                'created_at' => '2018-11-08 08:19:30',
                'updated_at' => '2018-11-08 08:19:30',
            ),
            20 => 
            array (
                'id' => 21,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '8 cups chicken stock or chicken broth',
                'created_at' => '2018-11-08 08:19:30',
                'updated_at' => '2018-11-08 08:19:30',
            ),
            21 => 
            array (
                'id' => 22,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup fresh lemon juice',
                'created_at' => '2018-11-08 08:19:31',
                'updated_at' => '2018-11-08 08:19:31',
            ),
            22 => 
            array (
                'id' => 23,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon coarsely ground black pepper',
                'created_at' => '2018-11-08 08:19:31',
                'updated_at' => '2018-11-08 08:19:31',
            ),
            23 => 
            array (
                'id' => 24,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Coarse sea salt to taste',
                'created_at' => '2018-11-08 08:19:31',
                'updated_at' => '2018-11-08 08:19:31',
            ),
            24 => 
            array (
                'id' => 25,
                'recipe_id' => '2',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons finely chopped fresh parsley',
                'created_at' => '2018-11-08 08:19:31',
                'updated_at' => '2018-11-08 08:19:31',
            ),
            25 => 
            array (
                'id' => 26,
                'recipe_id' => '3',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 sticks (1 cup) unsalted butter, cut into pieces',
                'created_at' => '2018-11-08 08:19:33',
                'updated_at' => '2018-11-08 08:19:33',
            ),
            26 => 
            array (
                'id' => 27,
                'recipe_id' => '3',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 garlic cloves, minced',
                'created_at' => '2018-11-08 08:19:33',
                'updated_at' => '2018-11-08 08:19:33',
            ),
            27 => 
            array (
                'id' => 28,
                'recipe_id' => '3',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon kosher salt',
                'created_at' => '2018-11-08 08:19:33',
                'updated_at' => '2018-11-08 08:19:33',
            ),
            28 => 
            array (
                'id' => 29,
                'recipe_id' => '3',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup finely chopped fresh flat-leaf parsley',
                'created_at' => '2018-11-08 08:19:33',
                'updated_at' => '2018-11-08 08:19:33',
            ),
            29 => 
            array (
                'id' => 30,
                'recipe_id' => '3',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 large round loaves of crusty bread, halved horizontally',
                'created_at' => '2018-11-08 08:19:33',
                'updated_at' => '2018-11-08 08:19:33',
            ),
            30 => 
            array (
                'id' => 31,
                'recipe_id' => '4',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup vegetable oil',
                'created_at' => '2018-11-08 08:19:35',
                'updated_at' => '2018-11-08 08:19:35',
            ),
            31 => 
            array (
                'id' => 32,
                'recipe_id' => '4',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon chili powder',
                'created_at' => '2018-11-08 08:19:35',
                'updated_at' => '2018-11-08 08:19:35',
            ),
            32 => 
            array (
                'id' => 33,
                'recipe_id' => '4',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons onion powder',
                'created_at' => '2018-11-08 08:19:35',
                'updated_at' => '2018-11-08 08:19:35',
            ),
            33 => 
            array (
                'id' => 34,
                'recipe_id' => '4',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons garlic salt',
                'created_at' => '2018-11-08 08:19:35',
                'updated_at' => '2018-11-08 08:19:35',
            ),
            34 => 
            array (
                'id' => 35,
                'recipe_id' => '4',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon sugar',
                'created_at' => '2018-11-08 08:19:36',
                'updated_at' => '2018-11-08 08:19:36',
            ),
            35 => 
            array (
                'id' => 36,
                'recipe_id' => '4',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon sweet paprika',
                'created_at' => '2018-11-08 08:19:36',
                'updated_at' => '2018-11-08 08:19:36',
            ),
            36 => 
            array (
                'id' => 37,
                'recipe_id' => '4',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon salt',
                'created_at' => '2018-11-08 08:19:36',
                'updated_at' => '2018-11-08 08:19:36',
            ),
            37 => 
            array (
                'id' => 38,
                'recipe_id' => '4',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon cayenne pepper',
                'created_at' => '2018-11-08 08:19:36',
                'updated_at' => '2018-11-08 08:19:36',
            ),
            38 => 
            array (
                'id' => 39,
                'recipe_id' => '4',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '10 large red-skinned potatoes (about 5 pounds), quartered',
                'created_at' => '2018-11-08 08:19:36',
                'updated_at' => '2018-11-08 08:19:36',
            ),
            39 => 
            array (
                'id' => 40,
                'recipe_id' => '5',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large egg',
                'created_at' => '2018-11-08 08:19:38',
                'updated_at' => '2018-11-08 08:19:38',
            ),
            40 => 
            array (
                'id' => 41,
                'recipe_id' => '5',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large egg yolk',
                'created_at' => '2018-11-08 08:19:38',
                'updated_at' => '2018-11-08 08:19:38',
            ),
            41 => 
            array (
                'id' => 42,
                'recipe_id' => '5',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/3 cup (packed) golden brown sugar',
                'created_at' => '2018-11-08 08:19:38',
                'updated_at' => '2018-11-08 08:19:38',
            ),
            42 => 
            array (
                'id' => 43,
                'recipe_id' => '5',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup light corn syrup',
                'created_at' => '2018-11-08 08:19:38',
                'updated_at' => '2018-11-08 08:19:38',
            ),
            43 => 
            array (
                'id' => 44,
                'recipe_id' => '5',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup dark corn syrup',
                'created_at' => '2018-11-08 08:19:38',
                'updated_at' => '2018-11-08 08:19:38',
            ),
            44 => 
            array (
                'id' => 45,
                'recipe_id' => '5',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 tablespoons (1/4 stick) unsalted butter, melted',
                'created_at' => '2018-11-08 08:19:38',
                'updated_at' => '2018-11-08 08:19:38',
            ),
            45 => 
            array (
                'id' => 46,
                'recipe_id' => '5',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon vanilla extract',
                'created_at' => '2018-11-08 08:19:39',
                'updated_at' => '2018-11-08 08:19:39',
            ),
            46 => 
            array (
                'id' => 47,
                'recipe_id' => '5',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Pinch of salt',
                'created_at' => '2018-11-08 08:19:39',
                'updated_at' => '2018-11-08 08:19:39',
            ),
            47 => 
            array (
                'id' => 48,
                'recipe_id' => '5',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups pecan halves and pieces',
                'created_at' => '2018-11-08 08:19:39',
                'updated_at' => '2018-11-08 08:19:39',
            ),
            48 => 
            array (
                'id' => 49,
                'recipe_id' => '5',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 cup (about 5 ounces) finely chopped good-quality white chocolate (such as Lindt or Baker\'s)',
                'created_at' => '2018-11-08 08:19:39',
                'updated_at' => '2018-11-08 08:19:39',
            ),
            49 => 
            array (
                'id' => 50,
                'recipe_id' => '5',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 Flaky Pie Crust',
                'created_at' => '2018-11-08 08:19:39',
                'updated_at' => '2018-11-08 08:19:39',
            ),
            50 => 
            array (
                'id' => 51,
                'recipe_id' => '5',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Additional pecan halves, toasted',
                'created_at' => '2018-11-08 08:19:40',
                'updated_at' => '2018-11-08 08:19:40',
            ),
            51 => 
            array (
                'id' => 52,
                'recipe_id' => '6',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons apple cider vinegar',
                'created_at' => '2018-11-08 08:19:41',
                'updated_at' => '2018-11-08 08:19:41',
            ),
            52 => 
            array (
                'id' => 53,
                'recipe_id' => '6',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 teaspoons Dijon mustard',
                'created_at' => '2018-11-08 08:19:41',
                'updated_at' => '2018-11-08 08:19:41',
            ),
            53 => 
            array (
                'id' => 54,
                'recipe_id' => '6',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon honey',
                'created_at' => '2018-11-08 08:19:41',
                'updated_at' => '2018-11-08 08:19:41',
            ),
            54 => 
            array (
                'id' => 55,
                'recipe_id' => '6',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup corn oil',
                'created_at' => '2018-11-08 08:19:42',
                'updated_at' => '2018-11-08 08:19:42',
            ),
            55 => 
            array (
                'id' => 56,
                'recipe_id' => '6',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon poppy seeds',
                'created_at' => '2018-11-08 08:19:42',
                'updated_at' => '2018-11-08 08:19:42',
            ),
            56 => 
            array (
                'id' => 57,
                'recipe_id' => '6',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 large bunches watercress, trimmed',
                'created_at' => '2018-11-08 08:19:42',
                'updated_at' => '2018-11-08 08:19:42',
            ),
            57 => 
            array (
                'id' => 58,
                'recipe_id' => '6',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2/3 cup walnuts, toasted, chopped',
                'created_at' => '2018-11-08 08:19:42',
                'updated_at' => '2018-11-08 08:19:42',
            ),
            58 => 
            array (
                'id' => 59,
                'recipe_id' => '6',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 pears, peeled, cut into 3/4-inch pieces',
                'created_at' => '2018-11-08 08:19:43',
                'updated_at' => '2018-11-08 08:19:43',
            ),
            59 => 
            array (
                'id' => 60,
                'recipe_id' => '7',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 16-ounce French-bread baguette',
                'created_at' => '2018-11-08 08:19:44',
                'updated_at' => '2018-11-08 08:19:44',
            ),
            60 => 
            array (
                'id' => 61,
                'recipe_id' => '7',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2/3 cup olive oil',
                'created_at' => '2018-11-08 08:19:44',
                'updated_at' => '2018-11-08 08:19:44',
            ),
            61 => 
            array (
                'id' => 62,
                'recipe_id' => '7',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '8 large garlic cloves, finely chopped',
                'created_at' => '2018-11-08 08:19:45',
                'updated_at' => '2018-11-08 08:19:45',
            ),
            62 => 
            array (
                'id' => 63,
                'recipe_id' => '7',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup chopped fresh basil',
                'created_at' => '2018-11-08 08:19:45',
                'updated_at' => '2018-11-08 08:19:45',
            ),
            63 => 
            array (
                'id' => 64,
                'recipe_id' => '7',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 tablespoon chopped mixed fresh herbs (such as tarragon, thyme, and rosemary)',
                'created_at' => '2018-11-08 08:19:45',
                'updated_at' => '2018-11-08 08:19:45',
            ),
            64 => 
            array (
                'id' => 65,
                'recipe_id' => '7',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3/4 cup soft fresh goat cheese (plain, peppered, or herbed)',
                'created_at' => '2018-11-08 08:19:45',
                'updated_at' => '2018-11-08 08:19:45',
            ),
            65 => 
            array (
                'id' => 66,
                'recipe_id' => '7',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 large plum tomatoes, thinly sliced into rounds',
                'created_at' => '2018-11-08 08:19:45',
                'updated_at' => '2018-11-08 08:19:45',
            ),
            66 => 
            array (
                'id' => 67,
                'recipe_id' => '7',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups coarsely chopped pitted Mediterranean olives',
                'created_at' => '2018-11-08 08:19:45',
                'updated_at' => '2018-11-08 08:19:45',
            ),
            67 => 
            array (
                'id' => 68,
                'recipe_id' => '8',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '8 cups corn kernels (cut from 10 to 14 ears)',
                'created_at' => '2018-11-08 08:19:47',
                'updated_at' => '2018-11-08 08:19:47',
            ),
            68 => 
            array (
                'id' => 69,
                'recipe_id' => '8',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 cups water',
                'created_at' => '2018-11-08 08:19:47',
                'updated_at' => '2018-11-08 08:19:47',
            ),
            69 => 
            array (
                'id' => 70,
                'recipe_id' => '8',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon kosher or coarse sea salt',
                'created_at' => '2018-11-08 08:19:47',
                'updated_at' => '2018-11-08 08:19:47',
            ),
            70 => 
            array (
                'id' => 71,
                'recipe_id' => '8',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup chopped fresh chives',
                'created_at' => '2018-11-08 08:19:47',
                'updated_at' => '2018-11-08 08:19:47',
            ),
            71 => 
            array (
                'id' => 72,
                'recipe_id' => '9',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup olive oil',
                'created_at' => '2018-11-08 08:19:49',
                'updated_at' => '2018-11-08 08:19:49',
            ),
            72 => 
            array (
                'id' => 73,
                'recipe_id' => '9',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 red bell peppers, stemmed, seeded, and cut into 1/4-inch strips',
                'created_at' => '2018-11-08 08:19:49',
                'updated_at' => '2018-11-08 08:19:49',
            ),
            73 => 
            array (
                'id' => 74,
                'recipe_id' => '9',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 chicken, cut into 8 pieces (3 1/2 pounds)',
                'created_at' => '2018-11-08 08:19:49',
                'updated_at' => '2018-11-08 08:19:49',
            ),
            74 => 
            array (
                'id' => 75,
                'recipe_id' => '9',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup dry white wine',
                'created_at' => '2018-11-08 08:19:49',
                'updated_at' => '2018-11-08 08:19:49',
            ),
            75 => 
            array (
                'id' => 76,
                'recipe_id' => '9',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup chicken broth',
                'created_at' => '2018-11-08 08:19:49',
                'updated_at' => '2018-11-08 08:19:49',
            ),
            76 => 
            array (
                'id' => 77,
                'recipe_id' => '9',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 garlic cloves',
                'created_at' => '2018-11-08 08:19:50',
                'updated_at' => '2018-11-08 08:19:50',
            ),
            77 => 
            array (
                'id' => 78,
                'recipe_id' => '9',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon dried sage leaves, or 8 large fresh leaves, snipped',
                'created_at' => '2018-11-08 08:19:50',
                'updated_at' => '2018-11-08 08:19:50',
            ),
            78 => 
            array (
                'id' => 79,
                'recipe_id' => '9',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'salt and freshly ground black pepper',
                'created_at' => '2018-11-08 08:19:50',
                'updated_at' => '2018-11-08 08:19:50',
            ),
            79 => 
            array (
                'id' => 80,
                'recipe_id' => '9',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 can (15 ounces) white cannellini beans, rinsed and drained',
                'created_at' => '2018-11-08 08:19:50',
                'updated_at' => '2018-11-08 08:19:50',
            ),
            80 => 
            array (
                'id' => 81,
                'recipe_id' => '9',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 can (15 ounces) small red kidney beans, rinsed and drained',
                'created_at' => '2018-11-08 08:19:50',
                'updated_at' => '2018-11-08 08:19:50',
            ),
            81 => 
            array (
                'id' => 82,
                'recipe_id' => '9',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup (packed) flat-leaf parsley leaves',
                'created_at' => '2018-11-08 08:19:50',
                'updated_at' => '2018-11-08 08:19:50',
            ),
            82 => 
            array (
                'id' => 83,
                'recipe_id' => '10',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 3/4 cups warm water (105°F to 115°F), divided',
                'created_at' => '2018-11-08 08:19:52',
                'updated_at' => '2018-11-08 08:19:52',
            ),
            83 => 
            array (
                'id' => 84,
                'recipe_id' => '10',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 tablespoon active dry yeast (measured from 2 envelopes)',
                'created_at' => '2018-11-08 08:19:52',
                'updated_at' => '2018-11-08 08:19:52',
            ),
            84 => 
            array (
                'id' => 85,
                'recipe_id' => '10',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 1/4 cups (about) unbleached all purpose flour, divided',
                'created_at' => '2018-11-08 08:19:52',
                'updated_at' => '2018-11-08 08:19:52',
            ),
            85 => 
            array (
                'id' => 86,
                'recipe_id' => '10',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup extra-virgin olive oil',
                'created_at' => '2018-11-08 08:19:52',
                'updated_at' => '2018-11-08 08:19:52',
            ),
            86 => 
            array (
                'id' => 87,
                'recipe_id' => '10',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons minced fresh rosemary',
                'created_at' => '2018-11-08 08:19:53',
                'updated_at' => '2018-11-08 08:19:53',
            ),
            87 => 
            array (
                'id' => 88,
                'recipe_id' => '10',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 1/2 cups semolina flour (pasta flour)*',
                'created_at' => '2018-11-08 08:19:53',
                'updated_at' => '2018-11-08 08:19:53',
            ),
            88 => 
            array (
                'id' => 89,
                'recipe_id' => '10',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons fine-grained sea salt',
                'created_at' => '2018-11-08 08:19:53',
                'updated_at' => '2018-11-08 08:19:53',
            ),
            89 => 
            array (
                'id' => 90,
                'recipe_id' => '10',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Additional semolina flour',
                'created_at' => '2018-11-08 08:19:54',
                'updated_at' => '2018-11-08 08:19:54',
            ),
            90 => 
            array (
                'id' => 91,
                'recipe_id' => '10',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon sesame seeds, divided',
                'created_at' => '2018-11-08 08:19:54',
                'updated_at' => '2018-11-08 08:19:54',
            ),
            91 => 
            array (
                'id' => 92,
                'recipe_id' => '10',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon coarse-grained sea salt',
                'created_at' => '2018-11-08 08:19:54',
                'updated_at' => '2018-11-08 08:19:54',
            ),
            92 => 
            array (
                'id' => 93,
                'recipe_id' => '11',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '5 tablespoons olive oil',
                'created_at' => '2018-11-08 08:19:55',
                'updated_at' => '2018-11-08 08:19:55',
            ),
            93 => 
            array (
                'id' => 94,
                'recipe_id' => '11',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons white wine vinegar',
                'created_at' => '2018-11-08 08:19:56',
                'updated_at' => '2018-11-08 08:19:56',
            ),
            94 => 
            array (
                'id' => 95,
                'recipe_id' => '11',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons chopped fresh cilantro',
                'created_at' => '2018-11-08 08:19:56',
                'updated_at' => '2018-11-08 08:19:56',
            ),
            95 => 
            array (
                'id' => 96,
                'recipe_id' => '11',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons plus 1 tablespoon soy sauce',
                'created_at' => '2018-11-08 08:19:56',
                'updated_at' => '2018-11-08 08:19:56',
            ),
            96 => 
            array (
                'id' => 97,
                'recipe_id' => '11',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons minced peeled fresh ginger',
                'created_at' => '2018-11-08 08:19:56',
                'updated_at' => '2018-11-08 08:19:56',
            ),
            97 => 
            array (
                'id' => 98,
                'recipe_id' => '11',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons sugar',
                'created_at' => '2018-11-08 08:19:56',
                'updated_at' => '2018-11-08 08:19:56',
            ),
            98 => 
            array (
                'id' => 99,
                'recipe_id' => '11',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 oranges',
                'created_at' => '2018-11-08 08:19:57',
                'updated_at' => '2018-11-08 08:19:57',
            ),
            99 => 
            array (
                'id' => 100,
                'recipe_id' => '11',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 medium fennel bulb, trimmed, cut into matchstick-size strips',
                'created_at' => '2018-11-08 08:19:57',
                'updated_at' => '2018-11-08 08:19:57',
            ),
            100 => 
            array (
                'id' => 101,
                'recipe_id' => '11',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 medium-size red onion, thinly sliced',
                'created_at' => '2018-11-08 08:19:57',
                'updated_at' => '2018-11-08 08:19:57',
            ),
            101 => 
            array (
                'id' => 102,
                'recipe_id' => '11',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 garlic clove, thinly sliced',
                'created_at' => '2018-11-08 08:19:57',
                'updated_at' => '2018-11-08 08:19:57',
            ),
            102 => 
            array (
                'id' => 103,
                'recipe_id' => '11',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 6- to 8-ounce rockfish or sea bass fillets',
                'created_at' => '2018-11-08 08:19:57',
                'updated_at' => '2018-11-08 08:19:57',
            ),
            103 => 
            array (
                'id' => 104,
                'recipe_id' => '12',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'a 14 1/2-ounce can stewed tomatoes including liquid',
                'created_at' => '2018-11-08 08:19:59',
                'updated_at' => '2018-11-08 08:19:59',
            ),
            104 => 
            array (
                'id' => 105,
                'recipe_id' => '12',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 tablespoons packed dark brown sugar',
                'created_at' => '2018-11-08 08:19:59',
                'updated_at' => '2018-11-08 08:19:59',
            ),
            105 => 
            array (
                'id' => 106,
                'recipe_id' => '12',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon Worcestershire sauce',
                'created_at' => '2018-11-08 08:19:59',
                'updated_at' => '2018-11-08 08:19:59',
            ),
            106 => 
            array (
                'id' => 107,
                'recipe_id' => '12',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'a pinch cayenne',
                'created_at' => '2018-11-08 08:20:00',
                'updated_at' => '2018-11-08 08:20:00',
            ),
            107 => 
            array (
                'id' => 108,
                'recipe_id' => '12',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons unsalted butter, melted',
                'created_at' => '2018-11-08 08:20:00',
                'updated_at' => '2018-11-08 08:20:00',
            ),
            108 => 
            array (
                'id' => 109,
                'recipe_id' => '12',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '4 slices (each about 3/8 inch thick) homemade-style white bread, crusts discarded, cut into 3/4-inch squares',
                'created_at' => '2018-11-08 08:20:00',
                'updated_at' => '2018-11-08 08:20:00',
            ),
            109 => 
            array (
                'id' => 110,
                'recipe_id' => '13',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '4 ears corn (2 lb total), shucked',
                'created_at' => '2018-11-08 08:20:02',
                'updated_at' => '2018-11-08 08:20:02',
            ),
            110 => 
            array (
                'id' => 111,
                'recipe_id' => '13',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup 2% milk',
                'created_at' => '2018-11-08 08:20:02',
                'updated_at' => '2018-11-08 08:20:02',
            ),
            111 => 
            array (
                'id' => 112,
                'recipe_id' => '13',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons finely chopped fresh basil',
                'created_at' => '2018-11-08 08:20:02',
                'updated_at' => '2018-11-08 08:20:02',
            ),
            112 => 
            array (
                'id' => 113,
                'recipe_id' => '13',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 08:20:03',
                'updated_at' => '2018-11-08 08:20:03',
            ),
            113 => 
            array (
                'id' => 114,
                'recipe_id' => '13',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon black pepper',
                'created_at' => '2018-11-08 08:20:03',
                'updated_at' => '2018-11-08 08:20:03',
            ),
            114 => 
            array (
                'id' => 115,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup all purpose flour',
                'created_at' => '2018-11-08 08:20:04',
                'updated_at' => '2018-11-08 08:20:04',
            ),
            115 => 
            array (
                'id' => 116,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup yellow cornmeal',
                'created_at' => '2018-11-08 08:20:05',
                'updated_at' => '2018-11-08 08:20:05',
            ),
            116 => 
            array (
                'id' => 117,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon ancho chili powder*',
                'created_at' => '2018-11-08 08:20:05',
                'updated_at' => '2018-11-08 08:20:05',
            ),
            117 => 
            array (
                'id' => 118,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon salt',
                'created_at' => '2018-11-08 08:20:05',
                'updated_at' => '2018-11-08 08:20:05',
            ),
            118 => 
            array (
                'id' => 119,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 12- to 14-ounce whole trout, boned, scaled, heads and tails intact',
                'created_at' => '2018-11-08 08:20:05',
                'updated_at' => '2018-11-08 08:20:05',
            ),
            119 => 
            array (
                'id' => 120,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 tablespoons olive oil',
                'created_at' => '2018-11-08 08:20:05',
                'updated_at' => '2018-11-08 08:20:05',
            ),
            120 => 
            array (
                'id' => 121,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup chopped red onion',
                'created_at' => '2018-11-08 08:20:05',
                'updated_at' => '2018-11-08 08:20:05',
            ),
            121 => 
            array (
                'id' => 122,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 garlic cloves, minced',
                'created_at' => '2018-11-08 08:20:05',
                'updated_at' => '2018-11-08 08:20:05',
            ),
            122 => 
            array (
                'id' => 123,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons minced seeded serrano chili',
                'created_at' => '2018-11-08 08:20:06',
                'updated_at' => '2018-11-08 08:20:06',
            ),
            123 => 
            array (
                'id' => 124,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1/2 pounds yellow or red tomatoes (preferably vine-ripened), seeded, cut into 1/2-inch pieces',
                'created_at' => '2018-11-08 08:20:06',
                'updated_at' => '2018-11-08 08:20:06',
            ),
            124 => 
            array (
                'id' => 125,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons bottled clam juice',
                'created_at' => '2018-11-08 08:20:06',
                'updated_at' => '2018-11-08 08:20:06',
            ),
            125 => 
            array (
                'id' => 126,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons fresh lemon juice',
                'created_at' => '2018-11-08 08:20:06',
                'updated_at' => '2018-11-08 08:20:06',
            ),
            126 => 
            array (
                'id' => 127,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons honey',
                'created_at' => '2018-11-08 08:20:06',
                'updated_at' => '2018-11-08 08:20:06',
            ),
            127 => 
            array (
                'id' => 128,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon chopped fresh tarragon',
                'created_at' => '2018-11-08 08:20:06',
                'updated_at' => '2018-11-08 08:20:06',
            ),
            128 => 
            array (
                'id' => 129,
                'recipe_id' => '14',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup shelled pumpkin seeds (pepitas), lightly toasted',
                'created_at' => '2018-11-08 08:20:07',
                'updated_at' => '2018-11-08 08:20:07',
            ),
            129 => 
            array (
                'id' => 130,
                'recipe_id' => '15',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon red-wine vinegar',
                'created_at' => '2018-11-08 08:20:08',
                'updated_at' => '2018-11-08 08:20:08',
            ),
            130 => 
            array (
                'id' => 131,
                'recipe_id' => '15',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon fresh lemon juice',
                'created_at' => '2018-11-08 08:20:09',
                'updated_at' => '2018-11-08 08:20:09',
            ),
            131 => 
            array (
                'id' => 132,
                'recipe_id' => '15',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon Dijon mustard',
                'created_at' => '2018-11-08 08:20:09',
                'updated_at' => '2018-11-08 08:20:09',
            ),
            132 => 
            array (
                'id' => 133,
                'recipe_id' => '15',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons olive oil',
                'created_at' => '2018-11-08 08:20:09',
                'updated_at' => '2018-11-08 08:20:09',
            ),
            133 => 
            array (
                'id' => 134,
                'recipe_id' => '15',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 pound arugula, tough stems discarded',
                'created_at' => '2018-11-08 08:20:09',
                'updated_at' => '2018-11-08 08:20:09',
            ),
            134 => 
            array (
                'id' => 135,
                'recipe_id' => '15',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 head chicory (white and pale-green parts only), torn into pieces (2 cups)',
                'created_at' => '2018-11-08 08:20:09',
                'updated_at' => '2018-11-08 08:20:09',
            ),
            135 => 
            array (
                'id' => 136,
                'recipe_id' => '15',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup pine nuts, toasted',
                'created_at' => '2018-11-08 08:20:09',
                'updated_at' => '2018-11-08 08:20:09',
            ),
            136 => 
            array (
                'id' => 137,
                'recipe_id' => '15',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup cherry tomatoes, halved',
                'created_at' => '2018-11-08 08:20:10',
                'updated_at' => '2018-11-08 08:20:10',
            ),
            137 => 
            array (
                'id' => 138,
                'recipe_id' => '15',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 ounces soft mild goat cheese',
                'created_at' => '2018-11-08 08:20:10',
                'updated_at' => '2018-11-08 08:20:10',
            ),
            138 => 
            array (
                'id' => 139,
                'recipe_id' => '15',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '8 (1/3-inch-thick) diagonal baguette slices',
                'created_at' => '2018-11-08 08:20:10',
                'updated_at' => '2018-11-08 08:20:10',
            ),
            139 => 
            array (
                'id' => 140,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups all purpose flour',
                'created_at' => '2018-11-08 08:20:11',
                'updated_at' => '2018-11-08 08:20:11',
            ),
            140 => 
            array (
                'id' => 141,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup yellow cornmeal',
                'created_at' => '2018-11-08 08:20:11',
                'updated_at' => '2018-11-08 08:20:11',
            ),
            141 => 
            array (
                'id' => 142,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '5 tablespoons sugar',
                'created_at' => '2018-11-08 08:20:12',
                'updated_at' => '2018-11-08 08:20:12',
            ),
            142 => 
            array (
                'id' => 143,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 teaspoons pumpkin pie spice',
                'created_at' => '2018-11-08 08:20:12',
                'updated_at' => '2018-11-08 08:20:12',
            ),
            143 => 
            array (
                'id' => 144,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 08:20:12',
                'updated_at' => '2018-11-08 08:20:12',
            ),
            144 => 
            array (
                'id' => 145,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup plus 2 tablespoons solid vegetable shortening, room temperature',
                'created_at' => '2018-11-08 08:20:12',
                'updated_at' => '2018-11-08 08:20:12',
            ),
            145 => 
            array (
                'id' => 146,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 tablespoons (about) buttermilk',
                'created_at' => '2018-11-08 08:20:12',
                'updated_at' => '2018-11-08 08:20:12',
            ),
            146 => 
            array (
                'id' => 147,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup fresh cranberries',
                'created_at' => '2018-11-08 08:20:12',
                'updated_at' => '2018-11-08 08:20:12',
            ),
            147 => 
            array (
                'id' => 148,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup plus 2 tablespoons sugar',
                'created_at' => '2018-11-08 08:20:13',
                'updated_at' => '2018-11-08 08:20:13',
            ),
            148 => 
            array (
                'id' => 149,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons pumpkin pie spice',
                'created_at' => '2018-11-08 08:20:13',
                'updated_at' => '2018-11-08 08:20:13',
            ),
            149 => 
            array (
                'id' => 150,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 pounds Pippin apples, peeled, cored, cut into 1/2-inch thick slices',
                'created_at' => '2018-11-08 08:20:13',
                'updated_at' => '2018-11-08 08:20:13',
            ),
            150 => 
            array (
                'id' => 151,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup dried currants',
                'created_at' => '2018-11-08 08:20:14',
                'updated_at' => '2018-11-08 08:20:14',
            ),
            151 => 
            array (
                'id' => 152,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '5 tablespoons all purpose flour',
                'created_at' => '2018-11-08 08:20:14',
                'updated_at' => '2018-11-08 08:20:14',
            ),
            152 => 
            array (
                'id' => 153,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Buttermilk',
                'created_at' => '2018-11-08 08:20:14',
                'updated_at' => '2018-11-08 08:20:14',
            ),
            153 => 
            array (
                'id' => 154,
                'recipe_id' => '16',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Rum raisin ice cream',
                'created_at' => '2018-11-08 08:20:14',
                'updated_at' => '2018-11-08 08:20:14',
            ),
            154 => 
            array (
                'id' => 155,
                'recipe_id' => '17',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 cups all-purpose flour',
                'created_at' => '2018-11-08 08:20:16',
                'updated_at' => '2018-11-08 08:20:16',
            ),
            155 => 
            array (
                'id' => 156,
                'recipe_id' => '17',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon baking soda',
                'created_at' => '2018-11-08 08:20:16',
                'updated_at' => '2018-11-08 08:20:16',
            ),
            156 => 
            array (
                'id' => 157,
                'recipe_id' => '17',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 08:20:16',
                'updated_at' => '2018-11-08 08:20:16',
            ),
            157 => 
            array (
                'id' => 158,
                'recipe_id' => '17',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon ground ginger',
                'created_at' => '2018-11-08 08:20:16',
                'updated_at' => '2018-11-08 08:20:16',
            ),
            158 => 
            array (
                'id' => 159,
                'recipe_id' => '17',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon instant coffee',
                'created_at' => '2018-11-08 08:20:16',
                'updated_at' => '2018-11-08 08:20:16',
            ),
            159 => 
            array (
                'id' => 160,
                'recipe_id' => '17',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup butter, softened',
                'created_at' => '2018-11-08 08:20:16',
                'updated_at' => '2018-11-08 08:20:16',
            ),
            160 => 
            array (
                'id' => 161,
                'recipe_id' => '17',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 cups packed brown sugar',
                'created_at' => '2018-11-08 08:20:16',
                'updated_at' => '2018-11-08 08:20:16',
            ),
            161 => 
            array (
                'id' => 162,
                'recipe_id' => '17',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup dark Karo syrup',
                'created_at' => '2018-11-08 08:20:17',
                'updated_at' => '2018-11-08 08:20:17',
            ),
            162 => 
            array (
                'id' => 163,
                'recipe_id' => '17',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 egg',
                'created_at' => '2018-11-08 08:20:17',
                'updated_at' => '2018-11-08 08:20:17',
            ),
            163 => 
            array (
                'id' => 164,
                'recipe_id' => '17',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon heavy cream',
                'created_at' => '2018-11-08 08:20:17',
                'updated_at' => '2018-11-08 08:20:17',
            ),
            164 => 
            array (
                'id' => 165,
                'recipe_id' => '17',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups finely chopped pecans',
                'created_at' => '2018-11-08 08:20:17',
                'updated_at' => '2018-11-08 08:20:17',
            ),
            165 => 
            array (
                'id' => 166,
                'recipe_id' => '17',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup packed brown sugar',
                'created_at' => '2018-11-08 08:20:17',
                'updated_at' => '2018-11-08 08:20:17',
            ),
            166 => 
            array (
                'id' => 167,
                'recipe_id' => '17',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons maraschino-cherry juice',
                'created_at' => '2018-11-08 08:20:18',
                'updated_at' => '2018-11-08 08:20:18',
            ),
            167 => 
            array (
                'id' => 168,
                'recipe_id' => '17',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'About 72 maraschino cherries',
                'created_at' => '2018-11-08 08:20:18',
                'updated_at' => '2018-11-08 08:20:18',
            ),
            168 => 
            array (
                'id' => 169,
                'recipe_id' => '18',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons butter',
                'created_at' => '2018-11-08 08:20:19',
                'updated_at' => '2018-11-08 08:20:19',
            ),
            169 => 
            array (
                'id' => 170,
                'recipe_id' => '18',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 red onion, halved, thinly sliced',
                'created_at' => '2018-11-08 08:20:19',
                'updated_at' => '2018-11-08 08:20:19',
            ),
            170 => 
            array (
                'id' => 171,
                'recipe_id' => '18',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 3/4 teaspoons caraway seeds',
                'created_at' => '2018-11-08 08:20:20',
                'updated_at' => '2018-11-08 08:20:20',
            ),
            171 => 
            array (
                'id' => 172,
                'recipe_id' => '18',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 2-pound head red cabbage, cored, thinly sliced (about 12 cups)',
                'created_at' => '2018-11-08 08:20:20',
                'updated_at' => '2018-11-08 08:20:20',
            ),
            172 => 
            array (
                'id' => 173,
                'recipe_id' => '18',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup red wine vinegar',
                'created_at' => '2018-11-08 08:20:20',
                'updated_at' => '2018-11-08 08:20:20',
            ),
            173 => 
            array (
                'id' => 174,
                'recipe_id' => '18',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup sugar',
                'created_at' => '2018-11-08 08:20:20',
                'updated_at' => '2018-11-08 08:20:20',
            ),
            174 => 
            array (
                'id' => 175,
                'recipe_id' => '18',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup minced fresh dill',
                'created_at' => '2018-11-08 08:20:20',
                'updated_at' => '2018-11-08 08:20:20',
            ),
            175 => 
            array (
                'id' => 176,
                'recipe_id' => '19',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup water',
                'created_at' => '2018-11-08 08:20:22',
                'updated_at' => '2018-11-08 08:20:22',
            ),
            176 => 
            array (
                'id' => 177,
                'recipe_id' => '19',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup unsweetened cocoa powder',
                'created_at' => '2018-11-08 08:20:22',
                'updated_at' => '2018-11-08 08:20:22',
            ),
            177 => 
            array (
                'id' => 178,
                'recipe_id' => '19',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup buttermilk',
                'created_at' => '2018-11-08 08:20:22',
                'updated_at' => '2018-11-08 08:20:22',
            ),
            178 => 
            array (
                'id' => 179,
                'recipe_id' => '19',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 3/4 cups all-purpose flour',
                'created_at' => '2018-11-08 08:20:22',
                'updated_at' => '2018-11-08 08:20:22',
            ),
            179 => 
            array (
                'id' => 180,
                'recipe_id' => '19',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon baking powder',
                'created_at' => '2018-11-08 08:20:23',
                'updated_at' => '2018-11-08 08:20:23',
            ),
            180 => 
            array (
                'id' => 181,
                'recipe_id' => '19',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon baking soda',
                'created_at' => '2018-11-08 08:20:23',
                'updated_at' => '2018-11-08 08:20:23',
            ),
            181 => 
            array (
                'id' => 182,
                'recipe_id' => '19',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 08:20:23',
                'updated_at' => '2018-11-08 08:20:23',
            ),
            182 => 
            array (
                'id' => 183,
                'recipe_id' => '19',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1/2 cups (packed) golden brown sugar',
                'created_at' => '2018-11-08 08:20:23',
                'updated_at' => '2018-11-08 08:20:23',
            ),
            183 => 
            array (
                'id' => 184,
                'recipe_id' => '19',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup mayonnaise',
                'created_at' => '2018-11-08 08:20:23',
                'updated_at' => '2018-11-08 08:20:23',
            ),
            184 => 
            array (
                'id' => 185,
                'recipe_id' => '19',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large egg',
                'created_at' => '2018-11-08 08:20:24',
                'updated_at' => '2018-11-08 08:20:24',
            ),
            185 => 
            array (
                'id' => 186,
                'recipe_id' => '19',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large egg white',
                'created_at' => '2018-11-08 08:20:24',
                'updated_at' => '2018-11-08 08:20:24',
            ),
            186 => 
            array (
                'id' => 187,
                'recipe_id' => '19',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon vanilla extract',
                'created_at' => '2018-11-08 08:20:24',
                'updated_at' => '2018-11-08 08:20:24',
            ),
            187 => 
            array (
                'id' => 188,
                'recipe_id' => '19',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Creamy Chocolate Frosting',
                'created_at' => '2018-11-08 08:20:24',
                'updated_at' => '2018-11-08 08:20:24',
            ),
            188 => 
            array (
                'id' => 189,
                'recipe_id' => '20',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1/2 cups finely ground or crushed chocolate wafer cookie crumbs (about 7 ounces)',
                'created_at' => '2018-11-08 08:20:26',
                'updated_at' => '2018-11-08 08:20:26',
            ),
            189 => 
            array (
                'id' => 190,
                'recipe_id' => '20',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon ground cinnamon',
                'created_at' => '2018-11-08 08:20:26',
                'updated_at' => '2018-11-08 08:20:26',
            ),
            190 => 
            array (
                'id' => 191,
                'recipe_id' => '20',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup (1/2 stick) unsalted butter, melted',
                'created_at' => '2018-11-08 08:20:26',
                'updated_at' => '2018-11-08 08:20:26',
            ),
            191 => 
            array (
                'id' => 192,
                'recipe_id' => '20',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup coarsely chopped chocolate-covered English toffee bars (such as Skor or Heath; about 4 ounces)',
                'created_at' => '2018-11-08 08:20:26',
                'updated_at' => '2018-11-08 08:20:26',
            ),
            192 => 
            array (
                'id' => 193,
                'recipe_id' => '20',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 pints coffee ice cream, slightly softened',
                'created_at' => '2018-11-08 08:20:27',
                'updated_at' => '2018-11-08 08:20:27',
            ),
            193 => 
            array (
                'id' => 194,
                'recipe_id' => '20',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup whipping cream',
                'created_at' => '2018-11-08 08:20:27',
                'updated_at' => '2018-11-08 08:20:27',
            ),
            194 => 
            array (
                'id' => 195,
                'recipe_id' => '20',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon unsalted butter',
                'created_at' => '2018-11-08 08:20:27',
                'updated_at' => '2018-11-08 08:20:27',
            ),
            195 => 
            array (
                'id' => 196,
                'recipe_id' => '20',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 ounces good-quality white chocolate (such as Lindt or Baker’s), chopped',
                'created_at' => '2018-11-08 08:20:27',
                'updated_at' => '2018-11-08 08:20:27',
            ),
            196 => 
            array (
                'id' => 197,
                'recipe_id' => '20',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon vanilla extract',
                'created_at' => '2018-11-08 08:20:27',
                'updated_at' => '2018-11-08 08:20:27',
            ),
            197 => 
            array (
                'id' => 198,
                'recipe_id' => '22',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons minced shallots',
                'created_at' => '2018-11-08 08:20:30',
                'updated_at' => '2018-11-08 08:20:30',
            ),
            198 => 
            array (
                'id' => 199,
                'recipe_id' => '22',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons dry mustard',
                'created_at' => '2018-11-08 08:20:30',
                'updated_at' => '2018-11-08 08:20:30',
            ),
            199 => 
            array (
                'id' => 200,
                'recipe_id' => '22',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups dry white wine',
                'created_at' => '2018-11-08 08:20:31',
                'updated_at' => '2018-11-08 08:20:31',
            ),
            200 => 
            array (
                'id' => 201,
                'recipe_id' => '22',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup whipping cream',
                'created_at' => '2018-11-08 08:20:31',
                'updated_at' => '2018-11-08 08:20:31',
            ),
            201 => 
            array (
                'id' => 202,
                'recipe_id' => '22',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons white wine vinegar',
                'created_at' => '2018-11-08 08:20:31',
                'updated_at' => '2018-11-08 08:20:31',
            ),
            202 => 
            array (
                'id' => 203,
                'recipe_id' => '22',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '12 large eggs',
                'created_at' => '2018-11-08 08:20:31',
                'updated_at' => '2018-11-08 08:20:31',
            ),
            203 => 
            array (
                'id' => 204,
                'recipe_id' => '22',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 3/4-inch-thick slices brioche loaf or egg bread, lightly toasted, each slice cut in half on diagonal',
                'created_at' => '2018-11-08 08:20:31',
                'updated_at' => '2018-11-08 08:20:31',
            ),
            204 => 
            array (
                'id' => 205,
                'recipe_id' => '22',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '8 ounces thinly sliced smoked salmon (not lox)',
                'created_at' => '2018-11-08 08:20:31',
                'updated_at' => '2018-11-08 08:20:31',
            ),
            205 => 
            array (
                'id' => 206,
                'recipe_id' => '22',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 large egg yolks',
                'created_at' => '2018-11-08 08:20:32',
                'updated_at' => '2018-11-08 08:20:32',
            ),
            206 => 
            array (
                'id' => 207,
                'recipe_id' => '22',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons chopped fresh dill',
                'created_at' => '2018-11-08 08:20:32',
                'updated_at' => '2018-11-08 08:20:32',
            ),
            207 => 
            array (
                'id' => 208,
                'recipe_id' => '22',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => 'Fresh dill sprigs (optional)',
                'created_at' => '2018-11-08 08:20:32',
                'updated_at' => '2018-11-08 08:20:32',
            ),
            208 => 
            array (
                'id' => 209,
                'recipe_id' => '23',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 to 1 1/2 cups all purpose flour',
                'created_at' => '2018-11-08 08:20:34',
                'updated_at' => '2018-11-08 08:20:34',
            ),
            209 => 
            array (
                'id' => 210,
                'recipe_id' => '23',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup sugar',
                'created_at' => '2018-11-08 08:20:34',
                'updated_at' => '2018-11-08 08:20:34',
            ),
            210 => 
            array (
                'id' => 211,
                'recipe_id' => '23',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 teaspoons baking powder',
                'created_at' => '2018-11-08 08:20:34',
                'updated_at' => '2018-11-08 08:20:34',
            ),
            211 => 
            array (
                'id' => 212,
                'recipe_id' => '23',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 08:20:34',
                'updated_at' => '2018-11-08 08:20:34',
            ),
            212 => 
            array (
                'id' => 213,
                'recipe_id' => '23',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 to 7 tablespoons water',
                'created_at' => '2018-11-08 08:20:34',
                'updated_at' => '2018-11-08 08:20:34',
            ),
            213 => 
            array (
                'id' => 214,
                'recipe_id' => '23',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => 'Vegetable oil (for deep frying)',
                'created_at' => '2018-11-08 08:20:34',
                'updated_at' => '2018-11-08 08:20:34',
            ),
            214 => 
            array (
                'id' => 215,
                'recipe_id' => '23',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Powdered sugar',
                'created_at' => '2018-11-08 08:20:34',
                'updated_at' => '2018-11-08 08:20:34',
            ),
            215 => 
            array (
                'id' => 216,
                'recipe_id' => '23',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => 'Honey (optional)',
                'created_at' => '2018-11-08 08:20:35',
                'updated_at' => '2018-11-08 08:20:35',
            ),
            216 => 
            array (
                'id' => 217,
                'recipe_id' => '24',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '4 pounds sweet potatoes (about 5 medium)',
                'created_at' => '2018-11-08 08:20:36',
                'updated_at' => '2018-11-08 08:20:36',
            ),
            217 => 
            array (
                'id' => 218,
                'recipe_id' => '24',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large navel orange',
                'created_at' => '2018-11-08 08:20:36',
                'updated_at' => '2018-11-08 08:20:36',
            ),
            218 => 
            array (
                'id' => 219,
                'recipe_id' => '24',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3/4 stick (6 tablespoons) unsalted butter, softened',
                'created_at' => '2018-11-08 08:20:36',
                'updated_at' => '2018-11-08 08:20:36',
            ),
            219 => 
            array (
                'id' => 220,
                'recipe_id' => '24',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup sugar',
                'created_at' => '2018-11-08 08:20:36',
                'updated_at' => '2018-11-08 08:20:36',
            ),
            220 => 
            array (
                'id' => 221,
                'recipe_id' => '24',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 tablespoons bourbon',
                'created_at' => '2018-11-08 08:20:37',
                'updated_at' => '2018-11-08 08:20:37',
            ),
            221 => 
            array (
                'id' => 222,
                'recipe_id' => '24',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon freshly grated nutmeg',
                'created_at' => '2018-11-08 08:20:37',
                'updated_at' => '2018-11-08 08:20:37',
            ),
            222 => 
            array (
                'id' => 223,
                'recipe_id' => '24',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 08:20:37',
                'updated_at' => '2018-11-08 08:20:37',
            ),
            223 => 
            array (
                'id' => 224,
                'recipe_id' => '25',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup chopped onion',
                'created_at' => '2018-11-08 08:20:39',
                'updated_at' => '2018-11-08 08:20:39',
            ),
            224 => 
            array (
                'id' => 225,
                'recipe_id' => '25',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup chopped celery',
                'created_at' => '2018-11-08 08:20:39',
                'updated_at' => '2018-11-08 08:20:39',
            ),
            225 => 
            array (
                'id' => 226,
                'recipe_id' => '25',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup chopped carrot',
                'created_at' => '2018-11-08 08:20:39',
                'updated_at' => '2018-11-08 08:20:39',
            ),
            226 => 
            array (
                'id' => 227,
                'recipe_id' => '25',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup butter',
                'created_at' => '2018-11-08 08:20:39',
                'updated_at' => '2018-11-08 08:20:39',
            ),
            227 => 
            array (
                'id' => 228,
                'recipe_id' => '25',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups chicken stock',
                'created_at' => '2018-11-08 08:20:39',
                'updated_at' => '2018-11-08 08:20:39',
            ),
            228 => 
            array (
                'id' => 229,
                'recipe_id' => '25',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon chopped fresh sage',
                'created_at' => '2018-11-08 08:20:40',
                'updated_at' => '2018-11-08 08:20:40',
            ),
            229 => 
            array (
                'id' => 230,
                'recipe_id' => '25',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon chopped fresh chives',
                'created_at' => '2018-11-08 08:20:40',
                'updated_at' => '2018-11-08 08:20:40',
            ),
            230 => 
            array (
                'id' => 231,
                'recipe_id' => '25',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon chopped fresh thyme',
                'created_at' => '2018-11-08 08:20:40',
                'updated_at' => '2018-11-08 08:20:40',
            ),
            231 => 
            array (
                'id' => 232,
                'recipe_id' => '25',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon chopped fresh parsley',
                'created_at' => '2018-11-08 08:20:40',
                'updated_at' => '2018-11-08 08:20:40',
            ),
            232 => 
            array (
                'id' => 233,
                'recipe_id' => '25',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 (1-pound) loaf day-old sourdough bread, diced',
                'created_at' => '2018-11-08 08:20:40',
                'updated_at' => '2018-11-08 08:20:40',
            ),
            233 => 
            array (
                'id' => 234,
                'recipe_id' => '25',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup fresh cranberries',
                'created_at' => '2018-11-08 08:20:40',
                'updated_at' => '2018-11-08 08:20:40',
            ),
            234 => 
            array (
                'id' => 235,
                'recipe_id' => '25',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Salt and freshly ground black pepper',
                'created_at' => '2018-11-08 08:20:41',
                'updated_at' => '2018-11-08 08:20:41',
            ),
            235 => 
            array (
                'id' => 236,
                'recipe_id' => '26',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1-pound loaf sourdough bread, cut into 1/2- to 3/4-inch cubes (about 16 cups)',
                'created_at' => '2018-11-08 08:20:42',
                'updated_at' => '2018-11-08 08:20:42',
            ),
            236 => 
            array (
                'id' => 237,
                'recipe_id' => '26',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 3/4 pounds sweet Italian sausages, casings removed',
                'created_at' => '2018-11-08 08:20:43',
                'updated_at' => '2018-11-08 08:20:43',
            ),
            237 => 
            array (
                'id' => 238,
                'recipe_id' => '26',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '5 to 6 tablespoons butter',
                'created_at' => '2018-11-08 08:20:43',
                'updated_at' => '2018-11-08 08:20:43',
            ),
            238 => 
            array (
                'id' => 239,
                'recipe_id' => '26',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 1/2 fennel bulbs, chopped',
                'created_at' => '2018-11-08 08:20:43',
                'updated_at' => '2018-11-08 08:20:43',
            ),
            239 => 
            array (
                'id' => 240,
                'recipe_id' => '26',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 pounds onions, chopped',
                'created_at' => '2018-11-08 08:20:43',
                'updated_at' => '2018-11-08 08:20:43',
            ),
            240 => 
            array (
                'id' => 241,
                'recipe_id' => '26',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon fennel seeds',
                'created_at' => '2018-11-08 08:20:44',
                'updated_at' => '2018-11-08 08:20:44',
            ),
            241 => 
            array (
                'id' => 242,
                'recipe_id' => '26',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 pounds firm but ripe Bosc pears, peeled, cored, cut into 1/2-inch pieces',
                'created_at' => '2018-11-08 08:20:44',
                'updated_at' => '2018-11-08 08:20:44',
            ),
            242 => 
            array (
                'id' => 243,
                'recipe_id' => '26',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 large red bell peppers, chopped',
                'created_at' => '2018-11-08 08:20:44',
                'updated_at' => '2018-11-08 08:20:44',
            ),
            243 => 
            array (
                'id' => 244,
                'recipe_id' => '26',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons dried thyme',
                'created_at' => '2018-11-08 08:20:44',
                'updated_at' => '2018-11-08 08:20:44',
            ),
            244 => 
            array (
                'id' => 245,
                'recipe_id' => '26',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons dried marjoram',
                'created_at' => '2018-11-08 08:20:45',
                'updated_at' => '2018-11-08 08:20:45',
            ),
            245 => 
            array (
                'id' => 246,
                'recipe_id' => '26',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons dried rubbed sage',
                'created_at' => '2018-11-08 08:20:45',
                'updated_at' => '2018-11-08 08:20:45',
            ),
            246 => 
            array (
                'id' => 247,
                'recipe_id' => '26',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup dry white wine',
                'created_at' => '2018-11-08 08:20:45',
                'updated_at' => '2018-11-08 08:20:45',
            ),
            247 => 
            array (
                'id' => 248,
                'recipe_id' => '26',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3/4 cup (about) canned low-salt chicken broth',
                'created_at' => '2018-11-08 08:20:45',
                'updated_at' => '2018-11-08 08:20:45',
            ),
            248 => 
            array (
                'id' => 249,
                'recipe_id' => '26',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => 'Chopped fennel fronds (optional)',
                'created_at' => '2018-11-08 08:20:45',
                'updated_at' => '2018-11-08 08:20:45',
            ),
            249 => 
            array (
                'id' => 250,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 pound frozen blueberries, thawed, undrained',
                'created_at' => '2018-11-08 08:20:47',
                'updated_at' => '2018-11-08 08:20:47',
            ),
            250 => 
            array (
                'id' => 251,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup plus 2 tablespoons apple juice',
                'created_at' => '2018-11-08 08:20:47',
                'updated_at' => '2018-11-08 08:20:47',
            ),
            251 => 
            array (
                'id' => 252,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup sugar',
                'created_at' => '2018-11-08 08:20:48',
                'updated_at' => '2018-11-08 08:20:48',
            ),
            252 => 
            array (
                'id' => 253,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon cornstarch',
                'created_at' => '2018-11-08 08:20:48',
                'updated_at' => '2018-11-08 08:20:48',
            ),
            253 => 
            array (
                'id' => 254,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon fresh lemon juice',
                'created_at' => '2018-11-08 08:20:48',
                'updated_at' => '2018-11-08 08:20:48',
            ),
            254 => 
            array (
                'id' => 255,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups all purpose flour',
                'created_at' => '2018-11-08 08:20:48',
                'updated_at' => '2018-11-08 08:20:48',
            ),
            255 => 
            array (
                'id' => 256,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 tablespoons sugar',
                'created_at' => '2018-11-08 08:20:48',
                'updated_at' => '2018-11-08 08:20:48',
            ),
            256 => 
            array (
                'id' => 257,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons poppy seeds',
                'created_at' => '2018-11-08 08:20:48',
                'updated_at' => '2018-11-08 08:20:48',
            ),
            257 => 
            array (
                'id' => 258,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons baking powder',
                'created_at' => '2018-11-08 08:20:49',
                'updated_at' => '2018-11-08 08:20:49',
            ),
            258 => 
            array (
                'id' => 259,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon baking soda',
                'created_at' => '2018-11-08 08:20:49',
                'updated_at' => '2018-11-08 08:20:49',
            ),
            259 => 
            array (
                'id' => 260,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 08:20:49',
                'updated_at' => '2018-11-08 08:20:49',
            ),
            260 => 
            array (
                'id' => 261,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 large eggs',
                'created_at' => '2018-11-08 08:20:49',
                'updated_at' => '2018-11-08 08:20:49',
            ),
            261 => 
            array (
                'id' => 262,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 cups buttermilk',
                'created_at' => '2018-11-08 08:20:49',
                'updated_at' => '2018-11-08 08:20:49',
            ),
            262 => 
            array (
                'id' => 263,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup (1/2 stick) unsalted butter, melted',
                'created_at' => '2018-11-08 08:20:50',
                'updated_at' => '2018-11-08 08:20:50',
            ),
            263 => 
            array (
                'id' => 264,
                'recipe_id' => '27',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon grated lemon peel',
                'created_at' => '2018-11-08 08:20:50',
                'updated_at' => '2018-11-08 08:20:50',
            ),
            264 => 
            array (
                'id' => 265,
                'recipe_id' => '28',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '4 cups chopped red cabbage (from about 1/2 large head)',
                'created_at' => '2018-11-08 08:20:51',
                'updated_at' => '2018-11-08 08:20:51',
            ),
            265 => 
            array (
                'id' => 266,
                'recipe_id' => '28',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 medium fennel bulb, trimmed, chopped',
                'created_at' => '2018-11-08 08:20:52',
                'updated_at' => '2018-11-08 08:20:52',
            ),
            266 => 
            array (
                'id' => 267,
                'recipe_id' => '28',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup chopped fresh Italian parsley',
                'created_at' => '2018-11-08 08:20:52',
                'updated_at' => '2018-11-08 08:20:52',
            ),
            267 => 
            array (
                'id' => 268,
                'recipe_id' => '28',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons drained capers',
                'created_at' => '2018-11-08 08:20:52',
                'updated_at' => '2018-11-08 08:20:52',
            ),
            268 => 
            array (
                'id' => 269,
                'recipe_id' => '28',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons fresh lemon juice',
                'created_at' => '2018-11-08 08:20:52',
                'updated_at' => '2018-11-08 08:20:52',
            ),
            269 => 
            array (
                'id' => 270,
                'recipe_id' => '28',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons extra-virgin olive oil',
                'created_at' => '2018-11-08 08:20:52',
                'updated_at' => '2018-11-08 08:20:52',
            ),
            270 => 
            array (
                'id' => 271,
                'recipe_id' => '28',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 garlic cloves, minced',
                'created_at' => '2018-11-08 08:20:52',
                'updated_at' => '2018-11-08 08:20:52',
            ),
            271 => 
            array (
                'id' => 272,
                'recipe_id' => '29',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 2/3 cups all purpose flour',
                'created_at' => '2018-11-08 08:20:54',
                'updated_at' => '2018-11-08 08:20:54',
            ),
            272 => 
            array (
                'id' => 273,
                'recipe_id' => '29',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup yellow cornmeal',
                'created_at' => '2018-11-08 08:20:54',
                'updated_at' => '2018-11-08 08:20:54',
            ),
            273 => 
            array (
                'id' => 274,
                'recipe_id' => '29',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon dried crushed red pepper',
                'created_at' => '2018-11-08 08:20:54',
                'updated_at' => '2018-11-08 08:20:54',
            ),
            274 => 
            array (
                'id' => 275,
                'recipe_id' => '29',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon chopped fresh rosemary',
                'created_at' => '2018-11-08 08:20:54',
                'updated_at' => '2018-11-08 08:20:54',
            ),
            275 => 
            array (
                'id' => 276,
                'recipe_id' => '29',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon salt',
                'created_at' => '2018-11-08 08:20:54',
                'updated_at' => '2018-11-08 08:20:54',
            ),
            276 => 
            array (
                'id' => 277,
                'recipe_id' => '29',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon baking soda',
                'created_at' => '2018-11-08 08:20:55',
                'updated_at' => '2018-11-08 08:20:55',
            ),
            277 => 
            array (
                'id' => 278,
                'recipe_id' => '29',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon ground black pepper',
                'created_at' => '2018-11-08 08:20:55',
                'updated_at' => '2018-11-08 08:20:55',
            ),
            278 => 
            array (
                'id' => 279,
                'recipe_id' => '29',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup (1 stick) chilled unsalted butter, cut into 1/2-inch pieces',
                'created_at' => '2018-11-08 08:20:55',
                'updated_at' => '2018-11-08 08:20:55',
            ),
            279 => 
            array (
                'id' => 280,
                'recipe_id' => '29',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup grated sharp cheddar cheese',
                'created_at' => '2018-11-08 08:20:55',
                'updated_at' => '2018-11-08 08:20:55',
            ),
            280 => 
            array (
                'id' => 281,
                'recipe_id' => '29',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup grated Monterey Jack cheese with jalapeños',
                'created_at' => '2018-11-08 08:20:55',
                'updated_at' => '2018-11-08 08:20:55',
            ),
            281 => 
            array (
                'id' => 282,
                'recipe_id' => '29',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2/3 cup water',
                'created_at' => '2018-11-08 08:20:56',
                'updated_at' => '2018-11-08 08:20:56',
            ),
            282 => 
            array (
                'id' => 283,
                'recipe_id' => '29',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 tablespoons white wine vinegar',
                'created_at' => '2018-11-08 08:20:56',
                'updated_at' => '2018-11-08 08:20:56',
            ),
            283 => 
            array (
                'id' => 284,
                'recipe_id' => '29',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Nonstick vegetable oil spray',
                'created_at' => '2018-11-08 08:20:56',
                'updated_at' => '2018-11-08 08:20:56',
            ),
            284 => 
            array (
                'id' => 285,
                'recipe_id' => '29',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Arugula Salad with Lemon-Pepper Dressing',
                'created_at' => '2018-11-08 08:20:56',
                'updated_at' => '2018-11-08 08:20:56',
            ),
            285 => 
            array (
                'id' => 286,
                'recipe_id' => '30',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '12 bacon slices',
                'created_at' => '2018-11-08 08:20:57',
                'updated_at' => '2018-11-08 08:20:57',
            ),
            286 => 
            array (
                'id' => 287,
                'recipe_id' => '30',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '8 large hard-boiled eggs, peeled, coarsely chopped',
                'created_at' => '2018-11-08 08:20:58',
                'updated_at' => '2018-11-08 08:20:58',
            ),
            287 => 
            array (
                'id' => 288,
                'recipe_id' => '30',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup finely chopped celery',
                'created_at' => '2018-11-08 08:20:58',
                'updated_at' => '2018-11-08 08:20:58',
            ),
            288 => 
            array (
                'id' => 289,
                'recipe_id' => '30',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup chopped pimiento-stuffed green olives',
                'created_at' => '2018-11-08 08:20:58',
                'updated_at' => '2018-11-08 08:20:58',
            ),
            289 => 
            array (
                'id' => 290,
                'recipe_id' => '30',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup mayonnaise',
                'created_at' => '2018-11-08 08:20:58',
                'updated_at' => '2018-11-08 08:20:58',
            ),
            290 => 
            array (
                'id' => 291,
                'recipe_id' => '30',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon Dijon mustard',
                'created_at' => '2018-11-08 08:20:58',
                'updated_at' => '2018-11-08 08:20:58',
            ),
            291 => 
            array (
                'id' => 292,
                'recipe_id' => '30',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '12 slices white sandwich bread, toasted',
                'created_at' => '2018-11-08 08:20:59',
                'updated_at' => '2018-11-08 08:20:59',
            ),
            292 => 
            array (
                'id' => 293,
                'recipe_id' => '30',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '12 red leaf lettuce leaves',
                'created_at' => '2018-11-08 08:20:59',
                'updated_at' => '2018-11-08 08:20:59',
            ),
            293 => 
            array (
                'id' => 294,
                'recipe_id' => '31',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups all purpose flour',
                'created_at' => '2018-11-08 08:21:00',
                'updated_at' => '2018-11-08 08:21:00',
            ),
            294 => 
            array (
                'id' => 295,
                'recipe_id' => '31',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup cornstarch',
                'created_at' => '2018-11-08 08:21:00',
                'updated_at' => '2018-11-08 08:21:00',
            ),
            295 => 
            array (
                'id' => 296,
                'recipe_id' => '31',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon salt',
                'created_at' => '2018-11-08 08:21:01',
                'updated_at' => '2018-11-08 08:21:01',
            ),
            296 => 
            array (
                'id' => 297,
                'recipe_id' => '31',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3/4 cup (1 1/2 sticks) unsalted butter, room temperature',
                'created_at' => '2018-11-08 08:21:01',
                'updated_at' => '2018-11-08 08:21:01',
            ),
            297 => 
            array (
                'id' => 298,
                'recipe_id' => '31',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup sugar',
                'created_at' => '2018-11-08 08:21:01',
                'updated_at' => '2018-11-08 08:21:01',
            ),
            298 => 
            array (
                'id' => 299,
                'recipe_id' => '31',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon vanilla extract',
                'created_at' => '2018-11-08 08:21:01',
                'updated_at' => '2018-11-08 08:21:01',
            ),
            299 => 
            array (
                'id' => 300,
                'recipe_id' => '31',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon almond extract',
                'created_at' => '2018-11-08 08:21:01',
                'updated_at' => '2018-11-08 08:21:01',
            ),
            300 => 
            array (
                'id' => 301,
                'recipe_id' => '31',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3/4 cup coarsely chopped toasted slivered almonds (about 3 ounces)',
                'created_at' => '2018-11-08 08:21:01',
                'updated_at' => '2018-11-08 08:21:01',
            ),
            301 => 
            array (
                'id' => 302,
                'recipe_id' => '31',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 cups cherry preserves',
                'created_at' => '2018-11-08 08:21:02',
                'updated_at' => '2018-11-08 08:21:02',
            ),
            302 => 
            array (
                'id' => 303,
                'recipe_id' => '32',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 (1/4-inch-thick) lemon slices',
                'created_at' => '2018-11-08 08:21:03',
                'updated_at' => '2018-11-08 08:21:03',
            ),
            303 => 
            array (
                'id' => 304,
                'recipe_id' => '32',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 (1/4-inch-thick) lime slices',
                'created_at' => '2018-11-08 08:21:03',
                'updated_at' => '2018-11-08 08:21:03',
            ),
            304 => 
            array (
                'id' => 305,
                'recipe_id' => '32',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup plus 1 1/2 tablespoons extra-virgin olive oil',
                'created_at' => '2018-11-08 08:21:03',
                'updated_at' => '2018-11-08 08:21:03',
            ),
            305 => 
            array (
                'id' => 306,
                'recipe_id' => '32',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 (1-inch-thick) pieces salmon fillet with skin (6 oz each)',
                'created_at' => '2018-11-08 08:21:03',
                'updated_at' => '2018-11-08 08:21:03',
            ),
            306 => 
            array (
                'id' => 307,
                'recipe_id' => '32',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Fine sea salt to taste',
                'created_at' => '2018-11-08 08:21:03',
                'updated_at' => '2018-11-08 08:21:03',
            ),
            307 => 
            array (
                'id' => 308,
                'recipe_id' => '32',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup loosely packed fresh basil, thinly sliced',
                'created_at' => '2018-11-08 08:21:03',
                'updated_at' => '2018-11-08 08:21:03',
            ),
            308 => 
            array (
                'id' => 309,
                'recipe_id' => '32',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup loosely packed fresh mint, thinly sliced',
                'created_at' => '2018-11-08 08:21:04',
                'updated_at' => '2018-11-08 08:21:04',
            ),
            309 => 
            array (
                'id' => 310,
                'recipe_id' => '33',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup all purpose flour',
                'created_at' => '2018-11-08 08:21:05',
                'updated_at' => '2018-11-08 08:21:05',
            ),
            310 => 
            array (
                'id' => 311,
                'recipe_id' => '33',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup whole unblanched almonds',
                'created_at' => '2018-11-08 08:21:05',
                'updated_at' => '2018-11-08 08:21:05',
            ),
            311 => 
            array (
                'id' => 312,
                'recipe_id' => '33',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 tablespoons (packed) golden brown sugar',
                'created_at' => '2018-11-08 08:21:05',
                'updated_at' => '2018-11-08 08:21:05',
            ),
            312 => 
            array (
                'id' => 313,
                'recipe_id' => '33',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons Hungarian sweet paprika',
                'created_at' => '2018-11-08 08:21:05',
                'updated_at' => '2018-11-08 08:21:05',
            ),
            313 => 
            array (
                'id' => 314,
                'recipe_id' => '33',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup (1/2 stick) chilled butter, cut into pieces',
                'created_at' => '2018-11-08 08:21:06',
                'updated_at' => '2018-11-08 08:21:06',
            ),
            314 => 
            array (
                'id' => 315,
                'recipe_id' => '33',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '4 pounds red-skinned sweet potatoes (yams)',
                'created_at' => '2018-11-08 08:21:06',
                'updated_at' => '2018-11-08 08:21:06',
            ),
            315 => 
            array (
                'id' => 316,
                'recipe_id' => '33',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup fresh orange juice',
                'created_at' => '2018-11-08 08:21:06',
                'updated_at' => '2018-11-08 08:21:06',
            ),
            316 => 
            array (
                'id' => 317,
                'recipe_id' => '33',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 tablespoons (packed) golden brown sugar',
                'created_at' => '2018-11-08 08:21:06',
                'updated_at' => '2018-11-08 08:21:06',
            ),
            317 => 
            array (
                'id' => 318,
                'recipe_id' => '33',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 tablespoons (1/4 stick) butter, room temperature',
                'created_at' => '2018-11-08 08:21:06',
                'updated_at' => '2018-11-08 08:21:06',
            ),
            318 => 
            array (
                'id' => 319,
                'recipe_id' => '33',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons grated orange peel',
                'created_at' => '2018-11-08 08:21:06',
                'updated_at' => '2018-11-08 08:21:06',
            ),
            319 => 
            array (
                'id' => 320,
                'recipe_id' => '34',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons vegetable oil',
                'created_at' => '2018-11-08 08:21:08',
                'updated_at' => '2018-11-08 08:21:08',
            ),
            320 => 
            array (
                'id' => 321,
                'recipe_id' => '34',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 medium onion, finely chopped',
                'created_at' => '2018-11-08 08:21:08',
                'updated_at' => '2018-11-08 08:21:08',
            ),
            321 => 
            array (
                'id' => 322,
                'recipe_id' => '34',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 large garlic cloves, minced',
                'created_at' => '2018-11-08 08:21:08',
                'updated_at' => '2018-11-08 08:21:08',
            ),
            322 => 
            array (
                'id' => 323,
                'recipe_id' => '34',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 12-ounce bottle chili sauce',
                'created_at' => '2018-11-08 08:21:09',
                'updated_at' => '2018-11-08 08:21:09',
            ),
            323 => 
            array (
                'id' => 324,
                'recipe_id' => '34',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup beer',
                'created_at' => '2018-11-08 08:21:09',
                'updated_at' => '2018-11-08 08:21:09',
            ),
            324 => 
            array (
                'id' => 325,
                'recipe_id' => '34',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup unsulfured (light) molasses',
                'created_at' => '2018-11-08 08:21:09',
                'updated_at' => '2018-11-08 08:21:09',
            ),
            325 => 
            array (
                'id' => 326,
                'recipe_id' => '34',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons cider vinegar',
                'created_at' => '2018-11-08 08:21:09',
                'updated_at' => '2018-11-08 08:21:09',
            ),
            326 => 
            array (
                'id' => 327,
                'recipe_id' => '34',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons bourbon whiskey',
                'created_at' => '2018-11-08 08:21:09',
                'updated_at' => '2018-11-08 08:21:09',
            ),
            327 => 
            array (
                'id' => 328,
                'recipe_id' => '34',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons Worcestershire sauce',
                'created_at' => '2018-11-08 08:21:09',
                'updated_at' => '2018-11-08 08:21:09',
            ),
            328 => 
            array (
                'id' => 329,
                'recipe_id' => '34',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 teaspoon hot pepper sauce (such as Tabasco)',
                'created_at' => '2018-11-08 08:21:09',
                'updated_at' => '2018-11-08 08:21:09',
            ),
            329 => 
            array (
                'id' => 330,
                'recipe_id' => '35',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup (packed) golden brown sugar',
                'created_at' => '2018-11-08 08:21:10',
                'updated_at' => '2018-11-08 08:21:10',
            ),
            330 => 
            array (
                'id' => 331,
                'recipe_id' => '35',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons all purpose flour',
                'created_at' => '2018-11-08 08:21:11',
                'updated_at' => '2018-11-08 08:21:11',
            ),
            331 => 
            array (
                'id' => 332,
                'recipe_id' => '35',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon butter, melted',
                'created_at' => '2018-11-08 08:21:11',
                'updated_at' => '2018-11-08 08:21:11',
            ),
            332 => 
            array (
                'id' => 333,
                'recipe_id' => '35',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon fresh lemon juice',
                'created_at' => '2018-11-08 08:21:11',
                'updated_at' => '2018-11-08 08:21:11',
            ),
            333 => 
            array (
                'id' => 334,
                'recipe_id' => '35',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon ground cinnamon',
                'created_at' => '2018-11-08 08:21:11',
                'updated_at' => '2018-11-08 08:21:11',
            ),
            334 => 
            array (
                'id' => 335,
                'recipe_id' => '35',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon ground nutmeg',
                'created_at' => '2018-11-08 08:21:11',
                'updated_at' => '2018-11-08 08:21:11',
            ),
            335 => 
            array (
                'id' => 336,
                'recipe_id' => '35',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 pounds ripe Anjou pears, peeled, cored, cut into 3/4-inch pieces (about 5 cups)',
                'created_at' => '2018-11-08 08:21:11',
                'updated_at' => '2018-11-08 08:21:11',
            ),
            336 => 
            array (
                'id' => 337,
                'recipe_id' => '35',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup all purpose flour',
                'created_at' => '2018-11-08 08:21:12',
                'updated_at' => '2018-11-08 08:21:12',
            ),
            337 => 
            array (
                'id' => 338,
                'recipe_id' => '35',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup sugar',
                'created_at' => '2018-11-08 08:21:12',
                'updated_at' => '2018-11-08 08:21:12',
            ),
            338 => 
            array (
                'id' => 339,
                'recipe_id' => '35',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon ground cinnamon',
                'created_at' => '2018-11-08 08:21:12',
                'updated_at' => '2018-11-08 08:21:12',
            ),
            339 => 
            array (
                'id' => 340,
                'recipe_id' => '35',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup (1/2 stick) unsalted butter, cut into 1/2-inch pieces, room temperature',
                'created_at' => '2018-11-08 08:21:12',
                'updated_at' => '2018-11-08 08:21:12',
            ),
            340 => 
            array (
                'id' => 341,
                'recipe_id' => '35',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup hazelnuts, toasted, husked, coarsely chopped',
                'created_at' => '2018-11-08 08:21:12',
                'updated_at' => '2018-11-08 08:21:12',
            ),
            341 => 
            array (
                'id' => 342,
                'recipe_id' => '35',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Easy Pie Crust',
                'created_at' => '2018-11-08 08:21:12',
                'updated_at' => '2018-11-08 08:21:12',
            ),
            342 => 
            array (
                'id' => 343,
                'recipe_id' => '36',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 pounds carrots, peeled, cut diagonally into 1/4-inch-thick rounds',
                'created_at' => '2018-11-08 08:21:14',
                'updated_at' => '2018-11-08 08:21:14',
            ),
            343 => 
            array (
                'id' => 344,
                'recipe_id' => '36',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup freshly squeezed orange juice',
                'created_at' => '2018-11-08 08:21:14',
                'updated_at' => '2018-11-08 08:21:14',
            ),
            344 => 
            array (
                'id' => 345,
                'recipe_id' => '36',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup (1/2 stick) butter',
                'created_at' => '2018-11-08 08:21:14',
                'updated_at' => '2018-11-08 08:21:14',
            ),
            345 => 
            array (
                'id' => 346,
                'recipe_id' => '36',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons sugar',
                'created_at' => '2018-11-08 08:21:15',
                'updated_at' => '2018-11-08 08:21:15',
            ),
            346 => 
            array (
                'id' => 347,
                'recipe_id' => '36',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 tablespoons grated peeled fresh ginger',
                'created_at' => '2018-11-08 08:21:15',
                'updated_at' => '2018-11-08 08:21:15',
            ),
            347 => 
            array (
                'id' => 348,
                'recipe_id' => '36',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons chopped fresh parsley',
                'created_at' => '2018-11-08 08:21:15',
                'updated_at' => '2018-11-08 08:21:15',
            ),
            348 => 
            array (
                'id' => 349,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup Guinness extra stout or dark beer',
                'created_at' => '2018-11-08 08:21:16',
                'updated_at' => '2018-11-08 08:21:16',
            ),
            349 => 
            array (
                'id' => 350,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 cup mild-flavored (light) molasses',
                'created_at' => '2018-11-08 08:21:16',
                'updated_at' => '2018-11-08 08:21:16',
            ),
            350 => 
            array (
                'id' => 351,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons baking soda',
                'created_at' => '2018-11-08 08:21:17',
                'updated_at' => '2018-11-08 08:21:17',
            ),
            351 => 
            array (
                'id' => 352,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups all purpose flour',
                'created_at' => '2018-11-08 08:21:17',
                'updated_at' => '2018-11-08 08:21:17',
            ),
            352 => 
            array (
                'id' => 353,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons ground ginger',
                'created_at' => '2018-11-08 08:21:17',
                'updated_at' => '2018-11-08 08:21:17',
            ),
            353 => 
            array (
                'id' => 354,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons baking powder',
                'created_at' => '2018-11-08 08:21:17',
                'updated_at' => '2018-11-08 08:21:17',
            ),
            354 => 
            array (
                'id' => 355,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon ground cinnamon',
                'created_at' => '2018-11-08 08:21:17',
                'updated_at' => '2018-11-08 08:21:17',
            ),
            355 => 
            array (
                'id' => 356,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon ground cloves',
                'created_at' => '2018-11-08 08:21:17',
                'updated_at' => '2018-11-08 08:21:17',
            ),
            356 => 
            array (
                'id' => 357,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon ground nutmeg',
                'created_at' => '2018-11-08 08:21:18',
                'updated_at' => '2018-11-08 08:21:18',
            ),
            357 => 
            array (
                'id' => 358,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon ground cardamom',
                'created_at' => '2018-11-08 08:21:18',
                'updated_at' => '2018-11-08 08:21:18',
            ),
            358 => 
            array (
                'id' => 359,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 large eggs',
                'created_at' => '2018-11-08 08:21:18',
                'updated_at' => '2018-11-08 08:21:18',
            ),
            359 => 
            array (
                'id' => 360,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup sugar',
                'created_at' => '2018-11-08 08:21:18',
                'updated_at' => '2018-11-08 08:21:18',
            ),
            360 => 
            array (
                'id' => 361,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup (packed) dark brown sugar',
                'created_at' => '2018-11-08 08:21:18',
                'updated_at' => '2018-11-08 08:21:18',
            ),
            361 => 
            array (
                'id' => 362,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup vegetable oil',
                'created_at' => '2018-11-08 08:21:18',
                'updated_at' => '2018-11-08 08:21:18',
            ),
            362 => 
            array (
                'id' => 363,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon minced peeled fresh ginger',
                'created_at' => '2018-11-08 08:21:18',
                'updated_at' => '2018-11-08 08:21:18',
            ),
            363 => 
            array (
                'id' => 364,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup finely chopped pistachios',
                'created_at' => '2018-11-08 08:21:19',
                'updated_at' => '2018-11-08 08:21:19',
            ),
            364 => 
            array (
                'id' => 365,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon light corn syrup',
                'created_at' => '2018-11-08 08:21:19',
                'updated_at' => '2018-11-08 08:21:19',
            ),
            365 => 
            array (
                'id' => 366,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons sugar',
                'created_at' => '2018-11-08 08:21:19',
                'updated_at' => '2018-11-08 08:21:19',
            ),
            366 => 
            array (
                'id' => 367,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 8-ounce packages cream cheese, room temperature',
                'created_at' => '2018-11-08 08:21:19',
                'updated_at' => '2018-11-08 08:21:19',
            ),
            367 => 
            array (
                'id' => 368,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup (1 stick) unsalted butter, room temperature',
                'created_at' => '2018-11-08 08:21:19',
                'updated_at' => '2018-11-08 08:21:19',
            ),
            368 => 
            array (
                'id' => 369,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon finely grated orange peel',
                'created_at' => '2018-11-08 08:21:19',
                'updated_at' => '2018-11-08 08:21:19',
            ),
            369 => 
            array (
                'id' => 370,
                'recipe_id' => '37',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups powdered sugar',
                'created_at' => '2018-11-08 08:21:20',
                'updated_at' => '2018-11-08 08:21:20',
            ),
            370 => 
            array (
                'id' => 371,
                'recipe_id' => '38',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 cups (packed) watercress, thick stems trimmed',
                'created_at' => '2018-11-08 08:21:21',
                'updated_at' => '2018-11-08 08:21:21',
            ),
            371 => 
            array (
                'id' => 372,
                'recipe_id' => '38',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 tablespoons (1/4 stick) butter',
                'created_at' => '2018-11-08 08:21:21',
                'updated_at' => '2018-11-08 08:21:21',
            ),
            372 => 
            array (
                'id' => 373,
                'recipe_id' => '38',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 pounds russet potatoes, peeled, sliced into 1/4-inch-thick rounds',
                'created_at' => '2018-11-08 08:21:21',
                'updated_at' => '2018-11-08 08:21:21',
            ),
            373 => 
            array (
                'id' => 374,
                'recipe_id' => '38',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 large leeks (white and pale green parts only), sliced',
                'created_at' => '2018-11-08 08:21:21',
                'updated_at' => '2018-11-08 08:21:21',
            ),
            374 => 
            array (
                'id' => 375,
                'recipe_id' => '38',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 cups (or more) canned low-salt chicken broth',
                'created_at' => '2018-11-08 08:21:22',
                'updated_at' => '2018-11-08 08:21:22',
            ),
            375 => 
            array (
                'id' => 376,
                'recipe_id' => '38',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup whipping cream',
                'created_at' => '2018-11-08 08:21:22',
                'updated_at' => '2018-11-08 08:21:22',
            ),
            376 => 
            array (
                'id' => 377,
                'recipe_id' => '38',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons minced fresh chives',
                'created_at' => '2018-11-08 08:21:22',
                'updated_at' => '2018-11-08 08:21:22',
            ),
            377 => 
            array (
                'id' => 378,
                'recipe_id' => '39',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 pounds medium beets, trimmed',
                'created_at' => '2018-11-08 08:21:23',
                'updated_at' => '2018-11-08 08:21:23',
            ),
            378 => 
            array (
                'id' => 379,
                'recipe_id' => '39',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup walnut oil or olive oil',
                'created_at' => '2018-11-08 08:21:24',
                'updated_at' => '2018-11-08 08:21:24',
            ),
            379 => 
            array (
                'id' => 380,
                'recipe_id' => '39',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup Sherry wine vinegar',
                'created_at' => '2018-11-08 08:21:24',
                'updated_at' => '2018-11-08 08:21:24',
            ),
            380 => 
            array (
                'id' => 381,
                'recipe_id' => '39',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 large shallots, minced',
                'created_at' => '2018-11-08 08:21:24',
                'updated_at' => '2018-11-08 08:21:24',
            ),
            381 => 
            array (
                'id' => 382,
                'recipe_id' => '39',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 (6-ounce) packages baby spinach',
                'created_at' => '2018-11-08 08:21:24',
                'updated_at' => '2018-11-08 08:21:24',
            ),
            382 => 
            array (
                'id' => 383,
                'recipe_id' => '39',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 heads Belgian endive, thinly sliced crosswise',
                'created_at' => '2018-11-08 08:21:24',
                'updated_at' => '2018-11-08 08:21:24',
            ),
            383 => 
            array (
                'id' => 384,
                'recipe_id' => '39',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 cup walnuts, toasted, coarsely chopped (about 4 ounces)',
                'created_at' => '2018-11-08 08:21:24',
                'updated_at' => '2018-11-08 08:21:24',
            ),
            384 => 
            array (
                'id' => 385,
                'recipe_id' => '39',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 ounces soft fresh goat cheese (such as Montrachet), crumbled',
                'created_at' => '2018-11-08 08:21:25',
                'updated_at' => '2018-11-08 08:21:25',
            ),
            385 => 
            array (
                'id' => 386,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 scallions, white and pale green parts separated from dark green parts and both finely chopped',
                'created_at' => '2018-11-08 08:21:26',
                'updated_at' => '2018-11-08 08:21:26',
            ),
            386 => 
            array (
                'id' => 387,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons olive oil',
                'created_at' => '2018-11-08 08:21:27',
                'updated_at' => '2018-11-08 08:21:27',
            ),
            387 => 
            array (
                'id' => 388,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 lb cherry or grape tomatoes, halved (3 to 4 cups)',
                'created_at' => '2018-11-08 08:21:27',
                'updated_at' => '2018-11-08 08:21:27',
            ),
            388 => 
            array (
                'id' => 389,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 08:21:27',
                'updated_at' => '2018-11-08 08:21:27',
            ),
            389 => 
            array (
                'id' => 390,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon black pepper',
                'created_at' => '2018-11-08 08:21:27',
                'updated_at' => '2018-11-08 08:21:27',
            ),
            390 => 
            array (
                'id' => 391,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2/3 cup corn (cut from 2 ears)',
                'created_at' => '2018-11-08 08:21:27',
                'updated_at' => '2018-11-08 08:21:27',
            ),
            391 => 
            array (
                'id' => 392,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2/3 cup yellow cornmeal',
                'created_at' => '2018-11-08 08:21:27',
                'updated_at' => '2018-11-08 08:21:27',
            ),
            392 => 
            array (
                'id' => 393,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons all-purpose flour',
                'created_at' => '2018-11-08 08:21:28',
                'updated_at' => '2018-11-08 08:21:28',
            ),
            393 => 
            array (
                'id' => 394,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt, or to taste',
                'created_at' => '2018-11-08 08:21:28',
                'updated_at' => '2018-11-08 08:21:28',
            ),
            394 => 
            array (
                'id' => 395,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon baking soda',
                'created_at' => '2018-11-08 08:21:28',
                'updated_at' => '2018-11-08 08:21:28',
            ),
            395 => 
            array (
                'id' => 396,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Pinch of sugar',
                'created_at' => '2018-11-08 08:21:28',
                'updated_at' => '2018-11-08 08:21:28',
            ),
            396 => 
            array (
                'id' => 397,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup whole milk',
                'created_at' => '2018-11-08 08:21:28',
                'updated_at' => '2018-11-08 08:21:28',
            ),
            397 => 
            array (
                'id' => 398,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large egg',
                'created_at' => '2018-11-08 08:21:28',
                'updated_at' => '2018-11-08 08:21:28',
            ),
            398 => 
            array (
                'id' => 399,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup vegetable oil',
                'created_at' => '2018-11-08 08:21:28',
                'updated_at' => '2018-11-08 08:21:28',
            ),
            399 => 
            array (
                'id' => 400,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 1/2 teaspoons white-wine vinegar',
                'created_at' => '2018-11-08 08:21:29',
                'updated_at' => '2018-11-08 08:21:29',
            ),
            400 => 
            array (
                'id' => 401,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon whole-grain mustard',
                'created_at' => '2018-11-08 08:21:29',
                'updated_at' => '2018-11-08 08:21:29',
            ),
            401 => 
            array (
                'id' => 402,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt, or to taste',
                'created_at' => '2018-11-08 08:21:29',
                'updated_at' => '2018-11-08 08:21:29',
            ),
            402 => 
            array (
                'id' => 403,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon black pepper',
                'created_at' => '2018-11-08 08:21:29',
                'updated_at' => '2018-11-08 08:21:29',
            ),
            403 => 
            array (
                'id' => 404,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons olive oil',
                'created_at' => '2018-11-08 08:21:30',
                'updated_at' => '2018-11-08 08:21:30',
            ),
            404 => 
            array (
                'id' => 405,
                'recipe_id' => '40',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 lb arugula, coarse stems discarded (8 cups)',
                'created_at' => '2018-11-08 08:21:30',
                'updated_at' => '2018-11-08 08:21:30',
            ),
            405 => 
            array (
                'id' => 406,
                'recipe_id' => '41',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons unsalted butter',
                'created_at' => '2018-11-08 08:21:31',
                'updated_at' => '2018-11-08 08:21:31',
            ),
            406 => 
            array (
                'id' => 407,
                'recipe_id' => '41',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 banana, halved lengthwise, then crosswise',
                'created_at' => '2018-11-08 08:21:31',
                'updated_at' => '2018-11-08 08:21:31',
            ),
            407 => 
            array (
                'id' => 408,
                'recipe_id' => '41',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons packed brown sugar',
                'created_at' => '2018-11-08 08:21:32',
                'updated_at' => '2018-11-08 08:21:32',
            ),
            408 => 
            array (
                'id' => 409,
                'recipe_id' => '41',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 tablespoons rum (preferably dark)',
                'created_at' => '2018-11-08 08:21:32',
                'updated_at' => '2018-11-08 08:21:32',
            ),
            409 => 
            array (
                'id' => 410,
                'recipe_id' => '41',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons water',
                'created_at' => '2018-11-08 08:21:32',
                'updated_at' => '2018-11-08 08:21:32',
            ),
            410 => 
            array (
                'id' => 411,
                'recipe_id' => '41',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon freshly grated nutmeg',
                'created_at' => '2018-11-08 08:21:32',
                'updated_at' => '2018-11-08 08:21:32',
            ),
            411 => 
            array (
                'id' => 412,
                'recipe_id' => '41',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon cinnamon',
                'created_at' => '2018-11-08 08:21:32',
                'updated_at' => '2018-11-08 08:21:32',
            ),
            412 => 
            array (
                'id' => 413,
                'recipe_id' => '41',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons sliced or chopped nuts, toasted',
                'created_at' => '2018-11-08 08:21:32',
                'updated_at' => '2018-11-08 08:21:32',
            ),
            413 => 
            array (
                'id' => 414,
                'recipe_id' => '41',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Accompaniment: vanilla ice cream',
                'created_at' => '2018-11-08 08:21:32',
                'updated_at' => '2018-11-08 08:21:32',
            ),
            414 => 
            array (
                'id' => 415,
                'recipe_id' => '42',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons balsamic vinegar',
                'created_at' => '2018-11-08 08:21:33',
                'updated_at' => '2018-11-08 08:21:33',
            ),
            415 => 
            array (
                'id' => 416,
                'recipe_id' => '42',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon Dijon mustard',
                'created_at' => '2018-11-08 08:21:34',
                'updated_at' => '2018-11-08 08:21:34',
            ),
            416 => 
            array (
                'id' => 417,
                'recipe_id' => '42',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons olive oil',
                'created_at' => '2018-11-08 08:21:34',
                'updated_at' => '2018-11-08 08:21:34',
            ),
            417 => 
            array (
                'id' => 418,
                'recipe_id' => '42',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '14- to 15-ounce can sliced beets, drained',
                'created_at' => '2018-11-08 08:21:34',
                'updated_at' => '2018-11-08 08:21:34',
            ),
            418 => 
            array (
                'id' => 419,
                'recipe_id' => '42',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '8 (1/2-inch-thick) bread slices from a round country loaf',
                'created_at' => '2018-11-08 08:21:34',
                'updated_at' => '2018-11-08 08:21:34',
            ),
            419 => 
            array (
                'id' => 420,
                'recipe_id' => '42',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 ounces soft mild goat cheese, softened',
                'created_at' => '2018-11-08 08:21:34',
                'updated_at' => '2018-11-08 08:21:34',
            ),
            420 => 
            array (
                'id' => 421,
                'recipe_id' => '42',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 very thin slices red onion, rings separated',
                'created_at' => '2018-11-08 08:21:34',
                'updated_at' => '2018-11-08 08:21:34',
            ),
            421 => 
            array (
                'id' => 422,
                'recipe_id' => '42',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '16 large arugula leaves',
                'created_at' => '2018-11-08 08:21:34',
                'updated_at' => '2018-11-08 08:21:34',
            ),
            422 => 
            array (
                'id' => 423,
                'recipe_id' => '43',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 (28-oz) can whole tomatoes in purée',
                'created_at' => '2018-11-08 08:21:35',
                'updated_at' => '2018-11-08 08:21:35',
            ),
            423 => 
            array (
                'id' => 424,
                'recipe_id' => '43',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 medium onion, chopped',
                'created_at' => '2018-11-08 08:21:35',
                'updated_at' => '2018-11-08 08:21:35',
            ),
            424 => 
            array (
                'id' => 425,
                'recipe_id' => '43',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons olive oil',
                'created_at' => '2018-11-08 08:21:35',
                'updated_at' => '2018-11-08 08:21:35',
            ),
            425 => 
            array (
                'id' => 426,
                'recipe_id' => '43',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon tomato paste',
                'created_at' => '2018-11-08 08:21:35',
                'updated_at' => '2018-11-08 08:21:35',
            ),
            426 => 
            array (
                'id' => 427,
                'recipe_id' => '43',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2/3 cup packed dark brown sugar',
                'created_at' => '2018-11-08 08:21:35',
                'updated_at' => '2018-11-08 08:21:35',
            ),
            427 => 
            array (
                'id' => 428,
                'recipe_id' => '43',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup cider vinegar',
                'created_at' => '2018-11-08 08:21:36',
                'updated_at' => '2018-11-08 08:21:36',
            ),
            428 => 
            array (
                'id' => 429,
                'recipe_id' => '43',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 08:21:36',
                'updated_at' => '2018-11-08 08:21:36',
            ),
            429 => 
            array (
                'id' => 430,
                'recipe_id' => '44',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup extra-virgin olive oil',
                'created_at' => '2018-11-08 08:21:37',
                'updated_at' => '2018-11-08 08:21:37',
            ),
            430 => 
            array (
                'id' => 431,
                'recipe_id' => '44',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 green onions, chopped',
                'created_at' => '2018-11-08 08:21:37',
                'updated_at' => '2018-11-08 08:21:37',
            ),
            431 => 
            array (
                'id' => 432,
                'recipe_id' => '44',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 shallot, minced',
                'created_at' => '2018-11-08 08:21:37',
                'updated_at' => '2018-11-08 08:21:37',
            ),
            432 => 
            array (
                'id' => 433,
                'recipe_id' => '44',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon cumin seeds',
                'created_at' => '2018-11-08 08:21:37',
                'updated_at' => '2018-11-08 08:21:37',
            ),
            433 => 
            array (
                'id' => 434,
                'recipe_id' => '44',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '12 3x1x1/4-inch slices (about 10 ounces) Spanish Manchego cheese or sharp white cheddar cheese',
                'created_at' => '2018-11-08 08:21:37',
                'updated_at' => '2018-11-08 08:21:37',
            ),
            434 => 
            array (
                'id' => 435,
                'recipe_id' => '44',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '12 3x1-inch strips drained roasted red peppers from jar',
                'created_at' => '2018-11-08 08:21:37',
                'updated_at' => '2018-11-08 08:21:37',
            ),
            435 => 
            array (
                'id' => 436,
                'recipe_id' => '44',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '12 1/2-inch-thick sourdough baguette slices',
                'created_at' => '2018-11-08 08:21:37',
                'updated_at' => '2018-11-08 08:21:37',
            ),
            436 => 
            array (
                'id' => 437,
                'recipe_id' => '45',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 pound farfalle (bow-tie pasta)',
                'created_at' => '2018-11-08 08:21:38',
                'updated_at' => '2018-11-08 08:21:38',
            ),
            437 => 
            array (
                'id' => 438,
                'recipe_id' => '45',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '12 bacon slices, cut into 1-inch pieces',
                'created_at' => '2018-11-08 08:21:38',
                'updated_at' => '2018-11-08 08:21:38',
            ),
            438 => 
            array (
                'id' => 439,
                'recipe_id' => '45',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 28-ounce can diced tomatoes, drained',
                'created_at' => '2018-11-08 08:21:38',
                'updated_at' => '2018-11-08 08:21:38',
            ),
            439 => 
            array (
                'id' => 440,
                'recipe_id' => '45',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon dried crushed red pepper',
                'created_at' => '2018-11-08 08:21:39',
                'updated_at' => '2018-11-08 08:21:39',
            ),
            440 => 
            array (
                'id' => 441,
                'recipe_id' => '45',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 cups arugula',
                'created_at' => '2018-11-08 08:21:39',
                'updated_at' => '2018-11-08 08:21:39',
            ),
            441 => 
            array (
                'id' => 442,
                'recipe_id' => '45',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup sliced green onions',
                'created_at' => '2018-11-08 08:21:39',
                'updated_at' => '2018-11-08 08:21:39',
            ),
            442 => 
            array (
                'id' => 443,
                'recipe_id' => '45',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup thinly sliced fresh basil leaves',
                'created_at' => '2018-11-08 08:21:39',
                'updated_at' => '2018-11-08 08:21:39',
            ),
            443 => 
            array (
                'id' => 444,
                'recipe_id' => '45',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup dry white wine',
                'created_at' => '2018-11-08 08:21:39',
                'updated_at' => '2018-11-08 08:21:39',
            ),
            444 => 
            array (
                'id' => 445,
                'recipe_id' => '45',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 cup (packed) grated fresh Parmesan cheese',
                'created_at' => '2018-11-08 08:21:39',
                'updated_at' => '2018-11-08 08:21:39',
            ),
            445 => 
            array (
                'id' => 446,
                'recipe_id' => '46',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '10 slices meaty smoked bacon (1/2 pound), cut crosswise into 2-inch-long pieces',
                'created_at' => '2018-11-08 08:21:40',
                'updated_at' => '2018-11-08 08:21:40',
            ),
            446 => 
            array (
                'id' => 447,
                'recipe_id' => '46',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons white balsamic vinegar',
                'created_at' => '2018-11-08 08:21:41',
                'updated_at' => '2018-11-08 08:21:41',
            ),
            447 => 
            array (
                'id' => 448,
                'recipe_id' => '46',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon finely chopped shallot',
                'created_at' => '2018-11-08 08:21:41',
                'updated_at' => '2018-11-08 08:21:41',
            ),
            448 => 
            array (
                'id' => 449,
                'recipe_id' => '46',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon Dijon mustard',
                'created_at' => '2018-11-08 08:21:41',
                'updated_at' => '2018-11-08 08:21:41',
            ),
            449 => 
            array (
                'id' => 450,
                'recipe_id' => '46',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 08:21:41',
                'updated_at' => '2018-11-08 08:21:41',
            ),
            450 => 
            array (
                'id' => 451,
                'recipe_id' => '46',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon black pepper',
                'created_at' => '2018-11-08 08:21:41',
                'updated_at' => '2018-11-08 08:21:41',
            ),
            451 => 
            array (
                'id' => 452,
                'recipe_id' => '46',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons extra-virgin olive oil',
                'created_at' => '2018-11-08 08:21:41',
                'updated_at' => '2018-11-08 08:21:41',
            ),
            452 => 
            array (
                'id' => 453,
                'recipe_id' => '46',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1/2 pounds Boston lettuce (3 heads), torn into bite-size pieces (16 cups)',
                'created_at' => '2018-11-08 08:21:42',
                'updated_at' => '2018-11-08 08:21:42',
            ),
            453 => 
            array (
                'id' => 454,
                'recipe_id' => '47',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 to 1/3 cup hot pepper sauce',
                'created_at' => '2018-11-08 08:21:43',
                'updated_at' => '2018-11-08 08:21:43',
            ),
            454 => 
            array (
                'id' => 455,
                'recipe_id' => '47',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 tablespoons (3/4 stick) butter',
                'created_at' => '2018-11-08 08:21:43',
                'updated_at' => '2018-11-08 08:21:43',
            ),
            455 => 
            array (
                'id' => 456,
                'recipe_id' => '47',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 0.6-ounce envelope dry Italian salad dressing mix',
                'created_at' => '2018-11-08 08:21:43',
                'updated_at' => '2018-11-08 08:21:43',
            ),
            456 => 
            array (
                'id' => 457,
                'recipe_id' => '47',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 kaiser rolls, halved',
                'created_at' => '2018-11-08 08:21:43',
                'updated_at' => '2018-11-08 08:21:43',
            ),
            457 => 
            array (
                'id' => 458,
                'recipe_id' => '47',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 lettuce leaves',
                'created_at' => '2018-11-08 08:21:43',
                'updated_at' => '2018-11-08 08:21:43',
            ),
            458 => 
            array (
                'id' => 459,
                'recipe_id' => '47',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 boneless chicken breast halves with skin',
                'created_at' => '2018-11-08 08:21:43',
                'updated_at' => '2018-11-08 08:21:43',
            ),
            459 => 
            array (
                'id' => 460,
                'recipe_id' => '47',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'All purpose flour',
                'created_at' => '2018-11-08 08:21:43',
                'updated_at' => '2018-11-08 08:21:43',
            ),
            460 => 
            array (
                'id' => 461,
                'recipe_id' => '47',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Additional vegetable oil',
                'created_at' => '2018-11-08 08:21:44',
                'updated_at' => '2018-11-08 08:21:44',
            ),
            461 => 
            array (
                'id' => 462,
                'recipe_id' => '47',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons olive oil',
                'created_at' => '2018-11-08 08:21:44',
                'updated_at' => '2018-11-08 08:21:44',
            ),
            462 => 
            array (
                'id' => 463,
                'recipe_id' => '47',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Purchased blue cheese dressing',
                'created_at' => '2018-11-08 08:21:44',
                'updated_at' => '2018-11-08 08:21:44',
            ),
            463 => 
            array (
                'id' => 464,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon olive oil',
                'created_at' => '2018-11-08 08:21:45',
                'updated_at' => '2018-11-08 08:21:45',
            ),
            464 => 
            array (
                'id' => 465,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon unsalted butter',
                'created_at' => '2018-11-08 08:21:46',
                'updated_at' => '2018-11-08 08:21:46',
            ),
            465 => 
            array (
                'id' => 466,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2/3 cup orzo (rice-shaped pasta)',
                'created_at' => '2018-11-08 08:21:46',
                'updated_at' => '2018-11-08 08:21:46',
            ),
            466 => 
            array (
                'id' => 467,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 medium onion, finely chopped (1 cup)',
                'created_at' => '2018-11-08 08:21:47',
                'updated_at' => '2018-11-08 08:21:47',
            ),
            467 => 
            array (
                'id' => 468,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 carrots, cut into 1/4-inch dice (3/4 cup)',
                'created_at' => '2018-11-08 08:21:47',
                'updated_at' => '2018-11-08 08:21:47',
            ),
            468 => 
            array (
                'id' => 469,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 celery ribs, cut into 1/4-inch dice (2/3 cup)',
                'created_at' => '2018-11-08 08:21:47',
                'updated_at' => '2018-11-08 08:21:47',
            ),
            469 => 
            array (
                'id' => 470,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 garlic cloves, finely chopped',
                'created_at' => '2018-11-08 08:21:48',
                'updated_at' => '2018-11-08 08:21:48',
            ),
            470 => 
            array (
                'id' => 471,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 08:21:48',
                'updated_at' => '2018-11-08 08:21:48',
            ),
            471 => 
            array (
                'id' => 472,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon black pepper',
                'created_at' => '2018-11-08 08:21:48',
                'updated_at' => '2018-11-08 08:21:48',
            ),
            472 => 
            array (
                'id' => 473,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup long-grain white rice',
                'created_at' => '2018-11-08 08:21:48',
                'updated_at' => '2018-11-08 08:21:48',
            ),
            473 => 
            array (
                'id' => 474,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 3/4 cups chicken broth or vegetable broth (14 fl oz)',
                'created_at' => '2018-11-08 08:21:48',
                'updated_at' => '2018-11-08 08:21:48',
            ),
            474 => 
            array (
                'id' => 475,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup water',
                'created_at' => '2018-11-08 08:21:49',
                'updated_at' => '2018-11-08 08:21:49',
            ),
            475 => 
            array (
                'id' => 476,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 small zucchini or yellow squash, cut into 1/4-inch dice (1 1/4 cups)',
                'created_at' => '2018-11-08 08:21:49',
                'updated_at' => '2018-11-08 08:21:49',
            ),
            476 => 
            array (
                'id' => 477,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup chopped fresh parsley',
                'created_at' => '2018-11-08 08:21:49',
                'updated_at' => '2018-11-08 08:21:49',
            ),
            477 => 
            array (
                'id' => 478,
                'recipe_id' => '48',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup slivered almonds, toasted',
                'created_at' => '2018-11-08 08:21:50',
                'updated_at' => '2018-11-08 08:21:50',
            ),
            478 => 
            array (
                'id' => 479,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons chopped fresh thyme',
                'created_at' => '2018-11-08 08:21:51',
                'updated_at' => '2018-11-08 08:21:51',
            ),
            479 => 
            array (
                'id' => 480,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons chopped fresh rosemary',
                'created_at' => '2018-11-08 08:21:51',
                'updated_at' => '2018-11-08 08:21:51',
            ),
            480 => 
            array (
                'id' => 481,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon chopped fresh tarragon',
                'created_at' => '2018-11-08 08:21:52',
                'updated_at' => '2018-11-08 08:21:52',
            ),
            481 => 
            array (
                'id' => 482,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 garlic cloves, minced',
                'created_at' => '2018-11-08 08:21:52',
                'updated_at' => '2018-11-08 08:21:52',
            ),
            482 => 
            array (
                'id' => 483,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons salt',
                'created_at' => '2018-11-08 08:21:52',
                'updated_at' => '2018-11-08 08:21:52',
            ),
            483 => 
            array (
                'id' => 484,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons ground black pepper',
                'created_at' => '2018-11-08 08:21:53',
                'updated_at' => '2018-11-08 08:21:53',
            ),
            484 => 
            array (
                'id' => 485,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 1 1/2-pound flank steaks',
                'created_at' => '2018-11-08 08:21:53',
                'updated_at' => '2018-11-08 08:21:53',
            ),
            485 => 
            array (
                'id' => 486,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon olive oil',
                'created_at' => '2018-11-08 08:21:53',
                'updated_at' => '2018-11-08 08:21:53',
            ),
            486 => 
            array (
                'id' => 487,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups halved cherry tomatoes',
                'created_at' => '2018-11-08 08:21:53',
                'updated_at' => '2018-11-08 08:21:53',
            ),
            487 => 
            array (
                'id' => 488,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup chopped fresh Italian parsley',
                'created_at' => '2018-11-08 08:21:54',
                'updated_at' => '2018-11-08 08:21:54',
            ),
            488 => 
            array (
                'id' => 489,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup coarsely chopped pitted Kalamata olives or other brine-cured black olives',
                'created_at' => '2018-11-08 08:21:54',
                'updated_at' => '2018-11-08 08:21:54',
            ),
            489 => 
            array (
                'id' => 490,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup coarsely chopped pitted brine-cured green olives',
                'created_at' => '2018-11-08 08:21:54',
                'updated_at' => '2018-11-08 08:21:54',
            ),
            490 => 
            array (
                'id' => 491,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup chopped fresh basil',
                'created_at' => '2018-11-08 08:21:54',
                'updated_at' => '2018-11-08 08:21:54',
            ),
            491 => 
            array (
                'id' => 492,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup extra-virgin olive oil',
                'created_at' => '2018-11-08 08:21:54',
                'updated_at' => '2018-11-08 08:21:54',
            ),
            492 => 
            array (
                'id' => 493,
                'recipe_id' => '49',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons Sherry wine vinegar',
                'created_at' => '2018-11-08 08:21:55',
                'updated_at' => '2018-11-08 08:21:55',
            ),
            493 => 
            array (
                'id' => 494,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons olive oil',
                'created_at' => '2018-11-08 08:21:56',
                'updated_at' => '2018-11-08 08:21:56',
            ),
            494 => 
            array (
                'id' => 495,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 medium onion, finely chopped',
                'created_at' => '2018-11-08 08:21:56',
                'updated_at' => '2018-11-08 08:21:56',
            ),
            495 => 
            array (
                'id' => 496,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 cup finely chopped fennel bulb (sometimes called anise)',
                'created_at' => '2018-11-08 08:21:56',
                'updated_at' => '2018-11-08 08:21:56',
            ),
            496 => 
            array (
                'id' => 497,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 garlic clove, thinly sliced',
                'created_at' => '2018-11-08 08:21:57',
                'updated_at' => '2018-11-08 08:21:57',
            ),
            497 => 
            array (
                'id' => 498,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 (14 1/2-oz) can diced tomatoes including juice',
                'created_at' => '2018-11-08 08:21:57',
                'updated_at' => '2018-11-08 08:21:57',
            ),
            498 => 
            array (
                'id' => 499,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup dry white wine',
                'created_at' => '2018-11-08 08:21:57',
                'updated_at' => '2018-11-08 08:21:57',
            ),
            499 => 
            array (
                'id' => 500,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons capers, rinsed and drained',
                'created_at' => '2018-11-08 08:21:57',
                'updated_at' => '2018-11-08 08:21:57',
            ),
        ));
        \DB::table('recipe_ingridents')->insert(array (
            0 => 
            array (
                'id' => 501,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 08:21:57',
                'updated_at' => '2018-11-08 08:21:57',
            ),
            1 => 
            array (
                'id' => 502,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon black pepper',
                'created_at' => '2018-11-08 08:21:57',
                'updated_at' => '2018-11-08 08:21:57',
            ),
            2 => 
            array (
                'id' => 503,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup fine dry bread crumbs',
                'created_at' => '2018-11-08 08:21:58',
                'updated_at' => '2018-11-08 08:21:58',
            ),
            3 => 
            array (
                'id' => 504,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons unsalted butter, well softened',
                'created_at' => '2018-11-08 08:21:58',
                'updated_at' => '2018-11-08 08:21:58',
            ),
            4 => 
            array (
                'id' => 505,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 08:21:58',
                'updated_at' => '2018-11-08 08:21:58',
            ),
            5 => 
            array (
                'id' => 506,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon black pepper',
                'created_at' => '2018-11-08 08:21:58',
                'updated_at' => '2018-11-08 08:21:58',
            ),
            6 => 
            array (
                'id' => 507,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '4 (6-oz) pieces skinless flounder or sole fillet',
                'created_at' => '2018-11-08 08:21:58',
                'updated_at' => '2018-11-08 08:21:58',
            ),
            7 => 
            array (
                'id' => 508,
                'recipe_id' => '50',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons dry white wine',
                'created_at' => '2018-11-08 08:21:58',
                'updated_at' => '2018-11-08 08:21:58',
            ),
            8 => 
            array (
                'id' => 509,
                'recipe_id' => '51',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups chilled heavy cream',
                'created_at' => '2018-11-08 11:26:23',
                'updated_at' => '2018-11-08 11:26:23',
            ),
            9 => 
            array (
                'id' => 510,
                'recipe_id' => '51',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 large egg yolks',
                'created_at' => '2018-11-08 11:26:23',
                'updated_at' => '2018-11-08 11:26:23',
            ),
            10 => 
            array (
                'id' => 511,
                'recipe_id' => '51',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons sugar',
                'created_at' => '2018-11-08 11:26:23',
                'updated_at' => '2018-11-08 11:26:23',
            ),
            11 => 
            array (
                'id' => 512,
                'recipe_id' => '51',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon vanilla',
                'created_at' => '2018-11-08 11:26:23',
                'updated_at' => '2018-11-08 11:26:23',
            ),
            12 => 
            array (
                'id' => 513,
                'recipe_id' => '51',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '7 oz fine-quality bittersweet chocolate (not unsweetened), chopped',
                'created_at' => '2018-11-08 11:26:23',
                'updated_at' => '2018-11-08 11:26:23',
            ),
            13 => 
            array (
                'id' => 514,
                'recipe_id' => '51',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Garnish: lightly sweetened whipped cream',
                'created_at' => '2018-11-08 11:26:24',
                'updated_at' => '2018-11-08 11:26:24',
            ),
            14 => 
            array (
                'id' => 515,
                'recipe_id' => '51',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'an instant-read thermometer',
                'created_at' => '2018-11-08 11:26:24',
                'updated_at' => '2018-11-08 11:26:24',
            ),
            15 => 
            array (
                'id' => 516,
                'recipe_id' => '52',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '10 cups water',
                'created_at' => '2018-11-08 11:26:26',
                'updated_at' => '2018-11-08 11:26:26',
            ),
            16 => 
            array (
                'id' => 517,
                'recipe_id' => '52',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 ears of corn, shucked',
                'created_at' => '2018-11-08 11:26:26',
                'updated_at' => '2018-11-08 11:26:26',
            ),
            17 => 
            array (
                'id' => 518,
                'recipe_id' => '52',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 pound lean bacon, chopped fine',
                'created_at' => '2018-11-08 11:26:27',
                'updated_at' => '2018-11-08 11:26:27',
            ),
            18 => 
            array (
                'id' => 519,
                'recipe_id' => '52',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'the white and pale green parts of 2 leeks, washed well and chopped',
                'created_at' => '2018-11-08 11:26:27',
                'updated_at' => '2018-11-08 11:26:27',
            ),
            19 => 
            array (
                'id' => 520,
                'recipe_id' => '52',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 russet (baking) potato (about 1/2 pound)',
                'created_at' => '2018-11-08 11:26:27',
                'updated_at' => '2018-11-08 11:26:27',
            ),
            20 => 
            array (
                'id' => 521,
                'recipe_id' => '52',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 red bell pepper, chopped fine',
                'created_at' => '2018-11-08 11:26:27',
                'updated_at' => '2018-11-08 11:26:27',
            ),
            21 => 
            array (
                'id' => 522,
                'recipe_id' => '52',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 fresh jalapeño chilies, or to taste, seeded and chopped fine (wear rubber gloves)',
                'created_at' => '2018-11-08 11:26:28',
                'updated_at' => '2018-11-08 11:26:28',
            ),
            22 => 
            array (
                'id' => 523,
                'recipe_id' => '52',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups half-and-half',
                'created_at' => '2018-11-08 11:26:28',
                'updated_at' => '2018-11-08 11:26:28',
            ),
            23 => 
            array (
                'id' => 524,
                'recipe_id' => '52',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '8 cups packed fresh basil leaves, rinsed and spun dry',
                'created_at' => '2018-11-08 11:26:28',
                'updated_at' => '2018-11-08 11:26:28',
            ),
            24 => 
            array (
                'id' => 525,
                'recipe_id' => '52',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 garlic cloves, chopped fine',
                'created_at' => '2018-11-08 11:26:28',
                'updated_at' => '2018-11-08 11:26:28',
            ),
            25 => 
            array (
                'id' => 526,
                'recipe_id' => '52',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup olive oil',
                'created_at' => '2018-11-08 11:26:28',
                'updated_at' => '2018-11-08 11:26:28',
            ),
            26 => 
            array (
                'id' => 527,
                'recipe_id' => '52',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup freshly grated Parmesan',
                'created_at' => '2018-11-08 11:26:29',
                'updated_at' => '2018-11-08 11:26:29',
            ),
            27 => 
            array (
                'id' => 528,
                'recipe_id' => '53',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 pound portobello mushrooms, stemmed, dark gills removed, caps cut into 3/4-inch pieces',
                'created_at' => '2018-11-08 11:26:31',
                'updated_at' => '2018-11-08 11:26:31',
            ),
            28 => 
            array (
                'id' => 529,
                'recipe_id' => '53',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 pound shiitake mushrooms, stemmed, caps cut into 3/4-inch pieces',
                'created_at' => '2018-11-08 11:26:31',
                'updated_at' => '2018-11-08 11:26:31',
            ),
            29 => 
            array (
                'id' => 530,
                'recipe_id' => '53',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 tablespoons olive oil',
                'created_at' => '2018-11-08 11:26:31',
                'updated_at' => '2018-11-08 11:26:31',
            ),
            30 => 
            array (
                'id' => 531,
                'recipe_id' => '53',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 14-ounce cans (or more) vegetable broth',
                'created_at' => '2018-11-08 11:26:31',
                'updated_at' => '2018-11-08 11:26:31',
            ),
            31 => 
            array (
                'id' => 532,
                'recipe_id' => '53',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 tablespoons butter',
                'created_at' => '2018-11-08 11:26:31',
                'updated_at' => '2018-11-08 11:26:31',
            ),
            32 => 
            array (
                'id' => 533,
                'recipe_id' => '53',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 onion, chopped',
                'created_at' => '2018-11-08 11:26:31',
                'updated_at' => '2018-11-08 11:26:31',
            ),
            33 => 
            array (
                'id' => 534,
                'recipe_id' => '53',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 garlic cloves, minced',
                'created_at' => '2018-11-08 11:26:31',
                'updated_at' => '2018-11-08 11:26:31',
            ),
            34 => 
            array (
                'id' => 535,
                'recipe_id' => '53',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup plus 2 tablespoons Madeira',
                'created_at' => '2018-11-08 11:26:32',
                'updated_at' => '2018-11-08 11:26:32',
            ),
            35 => 
            array (
                'id' => 536,
                'recipe_id' => '53',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons all purpose flour',
                'created_at' => '2018-11-08 11:26:32',
                'updated_at' => '2018-11-08 11:26:32',
            ),
            36 => 
            array (
                'id' => 537,
                'recipe_id' => '53',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup whipping cream',
                'created_at' => '2018-11-08 11:26:32',
                'updated_at' => '2018-11-08 11:26:32',
            ),
            37 => 
            array (
                'id' => 538,
                'recipe_id' => '53',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon chopped fresh thyme',
                'created_at' => '2018-11-08 11:26:32',
                'updated_at' => '2018-11-08 11:26:32',
            ),
            38 => 
            array (
                'id' => 539,
                'recipe_id' => '54',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '4 small skinless boneless chicken thighs (about 12 ounces)',
                'created_at' => '2018-11-08 11:26:34',
                'updated_at' => '2018-11-08 11:26:34',
            ),
            39 => 
            array (
                'id' => 540,
                'recipe_id' => '54',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 tablespoons olive oil',
                'created_at' => '2018-11-08 11:26:34',
                'updated_at' => '2018-11-08 11:26:34',
            ),
            40 => 
            array (
                'id' => 541,
                'recipe_id' => '54',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup orange juice',
                'created_at' => '2018-11-08 11:26:35',
                'updated_at' => '2018-11-08 11:26:35',
            ),
            41 => 
            array (
                'id' => 542,
                'recipe_id' => '54',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup canned low-salt chicken broth',
                'created_at' => '2018-11-08 11:26:35',
                'updated_at' => '2018-11-08 11:26:35',
            ),
            42 => 
            array (
                'id' => 543,
                'recipe_id' => '54',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup Creole or whole-grain Dijon mustard',
                'created_at' => '2018-11-08 11:26:35',
                'updated_at' => '2018-11-08 11:26:35',
            ),
            43 => 
            array (
                'id' => 544,
                'recipe_id' => '54',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon honey',
                'created_at' => '2018-11-08 11:26:35',
                'updated_at' => '2018-11-08 11:26:35',
            ),
            44 => 
            array (
                'id' => 545,
                'recipe_id' => '54',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon hot pepper sauce',
                'created_at' => '2018-11-08 11:26:35',
                'updated_at' => '2018-11-08 11:26:35',
            ),
            45 => 
            array (
                'id' => 546,
                'recipe_id' => '55',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup all-purpose flour',
                'created_at' => '2018-11-08 11:26:37',
                'updated_at' => '2018-11-08 11:26:37',
            ),
            46 => 
            array (
                'id' => 547,
                'recipe_id' => '55',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon baking powder',
                'created_at' => '2018-11-08 11:26:37',
                'updated_at' => '2018-11-08 11:26:37',
            ),
            47 => 
            array (
                'id' => 548,
                'recipe_id' => '55',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 11:26:38',
                'updated_at' => '2018-11-08 11:26:38',
            ),
            48 => 
            array (
                'id' => 549,
                'recipe_id' => '55',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup whole milk',
                'created_at' => '2018-11-08 11:26:38',
                'updated_at' => '2018-11-08 11:26:38',
            ),
            49 => 
            array (
                'id' => 550,
                'recipe_id' => '55',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon vanilla',
                'created_at' => '2018-11-08 11:26:38',
                'updated_at' => '2018-11-08 11:26:38',
            ),
            50 => 
            array (
                'id' => 551,
                'recipe_id' => '55',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3/4 stick (6 tablespoons) unsalted butter, softened',
                'created_at' => '2018-11-08 11:26:38',
                'updated_at' => '2018-11-08 11:26:38',
            ),
            51 => 
            array (
                'id' => 552,
                'recipe_id' => '55',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup plus 1 tablespoon sugar',
                'created_at' => '2018-11-08 11:26:38',
                'updated_at' => '2018-11-08 11:26:38',
            ),
            52 => 
            array (
                'id' => 553,
                'recipe_id' => '55',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large egg',
                'created_at' => '2018-11-08 11:26:39',
                'updated_at' => '2018-11-08 11:26:39',
            ),
            53 => 
            array (
                'id' => 554,
                'recipe_id' => '55',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 3/4 cups vanilla buttercream',
                'created_at' => '2018-11-08 11:26:39',
                'updated_at' => '2018-11-08 11:26:39',
            ),
            54 => 
            array (
                'id' => 555,
                'recipe_id' => '55',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => 'Various food colorings* (optional)',
                'created_at' => '2018-11-08 11:26:39',
                'updated_at' => '2018-11-08 11:26:39',
            ),
            55 => 
            array (
                'id' => 556,
                'recipe_id' => '55',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => 'Special equipment: 2 mini-muffin pans, each with 24 (1 3/4-inch) muffin cups; 24 foil or paper mini-muffin liners',
                'created_at' => '2018-11-08 11:26:39',
                'updated_at' => '2018-11-08 11:26:39',
            ),
            56 => 
            array (
                'id' => 557,
                'recipe_id' => '56',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 large pork tenderloin (about 14 ounces)',
                'created_at' => '2018-11-08 11:26:40',
                'updated_at' => '2018-11-08 11:26:40',
            ),
            57 => 
            array (
                'id' => 558,
                'recipe_id' => '56',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons olive oil, divided',
                'created_at' => '2018-11-08 11:26:40',
                'updated_at' => '2018-11-08 11:26:40',
            ),
            58 => 
            array (
                'id' => 559,
                'recipe_id' => '56',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons whole grain Dijon mustard',
                'created_at' => '2018-11-08 11:26:40',
                'updated_at' => '2018-11-08 11:26:40',
            ),
            59 => 
            array (
                'id' => 560,
                'recipe_id' => '56',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons fennel seeds',
                'created_at' => '2018-11-08 11:26:41',
                'updated_at' => '2018-11-08 11:26:41',
            ),
            60 => 
            array (
                'id' => 561,
                'recipe_id' => '56',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large onion, sliced',
                'created_at' => '2018-11-08 11:26:41',
                'updated_at' => '2018-11-08 11:26:41',
            ),
            61 => 
            array (
                'id' => 562,
                'recipe_id' => '56',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 medium Granny Smith apples, peeled, cored, sliced 1/4 inch thick',
                'created_at' => '2018-11-08 11:26:41',
                'updated_at' => '2018-11-08 11:26:41',
            ),
            62 => 
            array (
                'id' => 563,
                'recipe_id' => '56',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup dry white wine or apple cider',
                'created_at' => '2018-11-08 11:26:41',
                'updated_at' => '2018-11-08 11:26:41',
            ),
            63 => 
            array (
                'id' => 564,
                'recipe_id' => '57',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 pounds Yukon Gold potatoes, peeled, cut into 1/8-inch-thick rounds',
                'created_at' => '2018-11-08 11:26:43',
                'updated_at' => '2018-11-08 11:26:43',
            ),
            64 => 
            array (
                'id' => 565,
                'recipe_id' => '57',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons salt',
                'created_at' => '2018-11-08 11:26:43',
                'updated_at' => '2018-11-08 11:26:43',
            ),
            65 => 
            array (
                'id' => 566,
                'recipe_id' => '57',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon ground black pepper',
                'created_at' => '2018-11-08 11:26:43',
                'updated_at' => '2018-11-08 11:26:43',
            ),
            66 => 
            array (
                'id' => 567,
                'recipe_id' => '57',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 1/2 teaspoons dried tarragon',
                'created_at' => '2018-11-08 11:26:43',
                'updated_at' => '2018-11-08 11:26:43',
            ),
            67 => 
            array (
                'id' => 568,
                'recipe_id' => '57',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1/2 cups (packed) grated sharp white cheddar cheese (about 6 ounces)',
                'created_at' => '2018-11-08 11:26:43',
                'updated_at' => '2018-11-08 11:26:43',
            ),
            68 => 
            array (
                'id' => 569,
                'recipe_id' => '57',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup whipping cream',
                'created_at' => '2018-11-08 11:26:44',
                'updated_at' => '2018-11-08 11:26:44',
            ),
            69 => 
            array (
                'id' => 570,
                'recipe_id' => '57',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup dry white wine',
                'created_at' => '2018-11-08 11:26:44',
                'updated_at' => '2018-11-08 11:26:44',
            ),
            70 => 
            array (
                'id' => 571,
                'recipe_id' => '58',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 pound macaroni, cooked',
                'created_at' => '2018-11-08 11:26:46',
                'updated_at' => '2018-11-08 11:26:46',
            ),
            71 => 
            array (
                'id' => 572,
                'recipe_id' => '58',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups Cheese Sauce',
                'created_at' => '2018-11-08 11:26:46',
                'updated_at' => '2018-11-08 11:26:46',
            ),
            72 => 
            array (
                'id' => 573,
                'recipe_id' => '58',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup grated sharp Cheddar cheese',
                'created_at' => '2018-11-08 11:26:46',
                'updated_at' => '2018-11-08 11:26:46',
            ),
            73 => 
            array (
                'id' => 574,
                'recipe_id' => '58',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup freshly made buttered bread crumbs',
                'created_at' => '2018-11-08 11:26:46',
                'updated_at' => '2018-11-08 11:26:46',
            ),
            74 => 
            array (
                'id' => 575,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons olive oil',
                'created_at' => '2018-11-08 11:26:48',
                'updated_at' => '2018-11-08 11:26:48',
            ),
            75 => 
            array (
                'id' => 576,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 1/2 pounds beef short ribs',
                'created_at' => '2018-11-08 11:26:48',
                'updated_at' => '2018-11-08 11:26:48',
            ),
            76 => 
            array (
                'id' => 577,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup chopped carrots',
                'created_at' => '2018-11-08 11:26:48',
                'updated_at' => '2018-11-08 11:26:48',
            ),
            77 => 
            array (
                'id' => 578,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup chopped onion',
                'created_at' => '2018-11-08 11:26:48',
                'updated_at' => '2018-11-08 11:26:48',
            ),
            78 => 
            array (
                'id' => 579,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup chopped celery',
                'created_at' => '2018-11-08 11:26:48',
                'updated_at' => '2018-11-08 11:26:48',
            ),
            79 => 
            array (
                'id' => 580,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '8 garlic cloves, chopped',
                'created_at' => '2018-11-08 11:26:48',
                'updated_at' => '2018-11-08 11:26:48',
            ),
            80 => 
            array (
                'id' => 581,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup honey',
                'created_at' => '2018-11-08 11:26:48',
                'updated_at' => '2018-11-08 11:26:48',
            ),
            81 => 
            array (
                'id' => 582,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup red wine vinegar',
                'created_at' => '2018-11-08 11:26:49',
                'updated_at' => '2018-11-08 11:26:49',
            ),
            82 => 
            array (
                'id' => 583,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 cups canned low-salt chicken broth',
                'created_at' => '2018-11-08 11:26:49',
                'updated_at' => '2018-11-08 11:26:49',
            ),
            83 => 
            array (
                'id' => 584,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 750-ml bottle dry red wine',
                'created_at' => '2018-11-08 11:26:49',
                'updated_at' => '2018-11-08 11:26:49',
            ),
            84 => 
            array (
                'id' => 585,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup ruby Port',
                'created_at' => '2018-11-08 11:26:49',
                'updated_at' => '2018-11-08 11:26:49',
            ),
            85 => 
            array (
                'id' => 586,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 tablespoons chopped fresh thyme',
                'created_at' => '2018-11-08 11:26:49',
                'updated_at' => '2018-11-08 11:26:49',
            ),
            86 => 
            array (
                'id' => 587,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 bay leaf',
                'created_at' => '2018-11-08 11:26:49',
                'updated_at' => '2018-11-08 11:26:49',
            ),
            87 => 
            array (
                'id' => 588,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons butter, room temperature',
                'created_at' => '2018-11-08 11:26:50',
                'updated_at' => '2018-11-08 11:26:50',
            ),
            88 => 
            array (
                'id' => 589,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon all purpose flour',
                'created_at' => '2018-11-08 11:26:50',
                'updated_at' => '2018-11-08 11:26:50',
            ),
            89 => 
            array (
                'id' => 590,
                'recipe_id' => '59',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 6-ounce packages baby spinach leaves',
                'created_at' => '2018-11-08 11:26:50',
                'updated_at' => '2018-11-08 11:26:50',
            ),
            90 => 
            array (
                'id' => 591,
                'recipe_id' => '60',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups heavy cream',
                'created_at' => '2018-11-08 11:26:52',
                'updated_at' => '2018-11-08 11:26:52',
            ),
            91 => 
            array (
                'id' => 592,
                'recipe_id' => '60',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup whole milk',
                'created_at' => '2018-11-08 11:26:52',
                'updated_at' => '2018-11-08 11:26:52',
            ),
            92 => 
            array (
                'id' => 593,
                'recipe_id' => '60',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup sugar',
                'created_at' => '2018-11-08 11:26:52',
                'updated_at' => '2018-11-08 11:26:52',
            ),
            93 => 
            array (
                'id' => 594,
                'recipe_id' => '60',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon salt',
                'created_at' => '2018-11-08 11:26:52',
                'updated_at' => '2018-11-08 11:26:52',
            ),
            94 => 
            array (
                'id' => 595,
                'recipe_id' => '60',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 vanilla beans, split lengthwise',
                'created_at' => '2018-11-08 11:26:52',
                'updated_at' => '2018-11-08 11:26:52',
            ),
            95 => 
            array (
                'id' => 596,
                'recipe_id' => '60',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 large eggs',
                'created_at' => '2018-11-08 11:26:53',
                'updated_at' => '2018-11-08 11:26:53',
            ),
            96 => 
            array (
                'id' => 597,
                'recipe_id' => '60',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'an instant-read thermometer',
                'created_at' => '2018-11-08 11:26:53',
                'updated_at' => '2018-11-08 11:26:53',
            ),
            97 => 
            array (
                'id' => 598,
                'recipe_id' => '61',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup yellow cornmeal',
                'created_at' => '2018-11-08 11:26:55',
                'updated_at' => '2018-11-08 11:26:55',
            ),
            98 => 
            array (
                'id' => 599,
                'recipe_id' => '61',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup all purpose flour',
                'created_at' => '2018-11-08 11:26:55',
                'updated_at' => '2018-11-08 11:26:55',
            ),
            99 => 
            array (
                'id' => 600,
                'recipe_id' => '61',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons sugar',
                'created_at' => '2018-11-08 11:26:56',
                'updated_at' => '2018-11-08 11:26:56',
            ),
            100 => 
            array (
                'id' => 601,
                'recipe_id' => '61',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons baking powder',
                'created_at' => '2018-11-08 11:26:56',
                'updated_at' => '2018-11-08 11:26:56',
            ),
            101 => 
            array (
                'id' => 602,
                'recipe_id' => '61',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon salt',
                'created_at' => '2018-11-08 11:26:56',
                'updated_at' => '2018-11-08 11:26:56',
            ),
            102 => 
            array (
                'id' => 603,
                'recipe_id' => '61',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup canned creamed corn',
                'created_at' => '2018-11-08 11:26:56',
                'updated_at' => '2018-11-08 11:26:56',
            ),
            103 => 
            array (
                'id' => 604,
                'recipe_id' => '61',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup (1/2 stick) unsalted butter, melted, cooled slightly',
                'created_at' => '2018-11-08 11:26:56',
                'updated_at' => '2018-11-08 11:26:56',
            ),
            104 => 
            array (
                'id' => 605,
                'recipe_id' => '61',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large egg, beaten to blend',
                'created_at' => '2018-11-08 11:26:57',
                'updated_at' => '2018-11-08 11:26:57',
            ),
            105 => 
            array (
                'id' => 606,
                'recipe_id' => '62',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 3/4 cups chicken broth',
                'created_at' => '2018-11-08 11:26:58',
                'updated_at' => '2018-11-08 11:26:58',
            ),
            106 => 
            array (
                'id' => 607,
                'recipe_id' => '62',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 lb skinless boneless chicken breast',
                'created_at' => '2018-11-08 11:26:58',
                'updated_at' => '2018-11-08 11:26:58',
            ),
            107 => 
            array (
                'id' => 608,
                'recipe_id' => '62',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup mayonnaise',
                'created_at' => '2018-11-08 11:26:59',
                'updated_at' => '2018-11-08 11:26:59',
            ),
            108 => 
            array (
                'id' => 609,
                'recipe_id' => '62',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup plain yogurt',
                'created_at' => '2018-11-08 11:26:59',
                'updated_at' => '2018-11-08 11:26:59',
            ),
            109 => 
            array (
                'id' => 610,
                'recipe_id' => '62',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '5 teaspoons curry powder',
                'created_at' => '2018-11-08 11:26:59',
                'updated_at' => '2018-11-08 11:26:59',
            ),
            110 => 
            array (
                'id' => 611,
                'recipe_id' => '62',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon fresh lime juice',
                'created_at' => '2018-11-08 11:26:59',
                'updated_at' => '2018-11-08 11:26:59',
            ),
            111 => 
            array (
                'id' => 612,
                'recipe_id' => '62',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon honey',
                'created_at' => '2018-11-08 11:26:59',
                'updated_at' => '2018-11-08 11:26:59',
            ),
            112 => 
            array (
                'id' => 613,
                'recipe_id' => '62',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon ground ginger',
                'created_at' => '2018-11-08 11:26:59',
                'updated_at' => '2018-11-08 11:26:59',
            ),
            113 => 
            array (
                'id' => 614,
                'recipe_id' => '62',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 11:27:00',
                'updated_at' => '2018-11-08 11:27:00',
            ),
            114 => 
            array (
                'id' => 615,
                'recipe_id' => '62',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon black pepper',
                'created_at' => '2018-11-08 11:27:00',
                'updated_at' => '2018-11-08 11:27:00',
            ),
            115 => 
            array (
                'id' => 616,
                'recipe_id' => '62',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 medium red onion, chopped (1 cup)',
                'created_at' => '2018-11-08 11:27:00',
                'updated_at' => '2018-11-08 11:27:00',
            ),
            116 => 
            array (
                'id' => 617,
                'recipe_id' => '62',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 firm-ripe mango (3/4 pound), peeled, pitted, and chopped',
                'created_at' => '2018-11-08 11:27:00',
                'updated_at' => '2018-11-08 11:27:00',
            ),
            117 => 
            array (
                'id' => 618,
                'recipe_id' => '62',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 cup red seedless grapes (5 ounces), halved',
                'created_at' => '2018-11-08 11:27:00',
                'updated_at' => '2018-11-08 11:27:00',
            ),
            118 => 
            array (
                'id' => 619,
                'recipe_id' => '62',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup salted roasted cashews, coarsely chopped',
                'created_at' => '2018-11-08 11:27:01',
                'updated_at' => '2018-11-08 11:27:01',
            ),
            119 => 
            array (
                'id' => 620,
                'recipe_id' => '63',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '12 garlic cloves',
                'created_at' => '2018-11-08 11:27:03',
                'updated_at' => '2018-11-08 11:27:03',
            ),
            120 => 
            array (
                'id' => 621,
                'recipe_id' => '63',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 (2-inch) piece fresh ginger, peeled and coarsely chopped',
                'created_at' => '2018-11-08 11:27:03',
                'updated_at' => '2018-11-08 11:27:03',
            ),
            121 => 
            array (
                'id' => 622,
                'recipe_id' => '63',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 cups red-wine vinegar',
                'created_at' => '2018-11-08 11:27:03',
                'updated_at' => '2018-11-08 11:27:03',
            ),
            122 => 
            array (
                'id' => 623,
                'recipe_id' => '63',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons extra-virgin olive oil',
                'created_at' => '2018-11-08 11:27:03',
                'updated_at' => '2018-11-08 11:27:03',
            ),
            123 => 
            array (
                'id' => 624,
                'recipe_id' => '63',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon brown mustard seeds',
                'created_at' => '2018-11-08 11:27:03',
                'updated_at' => '2018-11-08 11:27:03',
            ),
            124 => 
            array (
                'id' => 625,
                'recipe_id' => '63',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 fenugreek seeds*',
                'created_at' => '2018-11-08 11:27:04',
                'updated_at' => '2018-11-08 11:27:04',
            ),
            125 => 
            array (
                'id' => 626,
                'recipe_id' => '63',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon cumin seeds',
                'created_at' => '2018-11-08 11:27:04',
                'updated_at' => '2018-11-08 11:27:04',
            ),
            126 => 
            array (
                'id' => 627,
                'recipe_id' => '63',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon fennel seeds',
                'created_at' => '2018-11-08 11:27:04',
                'updated_at' => '2018-11-08 11:27:04',
            ),
            127 => 
            array (
                'id' => 628,
                'recipe_id' => '63',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/8 teaspoon nigella seeds* (sometimes called black onion seeds)',
                'created_at' => '2018-11-08 11:27:04',
                'updated_at' => '2018-11-08 11:27:04',
            ),
            128 => 
            array (
                'id' => 629,
                'recipe_id' => '63',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 pounds tomatoes, peeled (see cooks\' note, below), seeded, and chopped, or 1 (28 ounce) can whole tomatoes in juice, chopped, reserving juice',
                'created_at' => '2018-11-08 11:27:04',
                'updated_at' => '2018-11-08 11:27:04',
            ),
            129 => 
            array (
                'id' => 630,
                'recipe_id' => '63',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup sugar',
                'created_at' => '2018-11-08 11:27:04',
                'updated_at' => '2018-11-08 11:27:04',
            ),
            130 => 
            array (
                'id' => 631,
                'recipe_id' => '63',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons salt',
                'created_at' => '2018-11-08 11:27:05',
                'updated_at' => '2018-11-08 11:27:05',
            ),
            131 => 
            array (
                'id' => 632,
                'recipe_id' => '63',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon cayenne',
                'created_at' => '2018-11-08 11:27:05',
                'updated_at' => '2018-11-08 11:27:05',
            ),
            132 => 
            array (
                'id' => 633,
                'recipe_id' => '64',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 pounds boneless beef chuck, cut into 1 1/2-inch pieces',
                'created_at' => '2018-11-08 11:27:07',
                'updated_at' => '2018-11-08 11:27:07',
            ),
            133 => 
            array (
                'id' => 634,
                'recipe_id' => '64',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons all purpose flour',
                'created_at' => '2018-11-08 11:27:07',
                'updated_at' => '2018-11-08 11:27:07',
            ),
            134 => 
            array (
                'id' => 635,
                'recipe_id' => '64',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons dried thyme',
                'created_at' => '2018-11-08 11:27:07',
                'updated_at' => '2018-11-08 11:27:07',
            ),
            135 => 
            array (
                'id' => 636,
                'recipe_id' => '64',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon ground allspice',
                'created_at' => '2018-11-08 11:27:07',
                'updated_at' => '2018-11-08 11:27:07',
            ),
            136 => 
            array (
                'id' => 637,
                'recipe_id' => '64',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup olive oil',
                'created_at' => '2018-11-08 11:27:08',
                'updated_at' => '2018-11-08 11:27:08',
            ),
            137 => 
            array (
                'id' => 638,
                'recipe_id' => '64',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 pound medium-size mushrooms',
                'created_at' => '2018-11-08 11:27:08',
                'updated_at' => '2018-11-08 11:27:08',
            ),
            138 => 
            array (
                'id' => 639,
                'recipe_id' => '64',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 pound small (1- to 1 1/2-inch) red potatoes, scrubbed',
                'created_at' => '2018-11-08 11:27:08',
                'updated_at' => '2018-11-08 11:27:08',
            ),
            139 => 
            array (
                'id' => 640,
                'recipe_id' => '64',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 1/2 cups canned beef broth',
                'created_at' => '2018-11-08 11:27:08',
                'updated_at' => '2018-11-08 11:27:08',
            ),
            140 => 
            array (
                'id' => 641,
                'recipe_id' => '64',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '18 shallots',
                'created_at' => '2018-11-08 11:27:08',
                'updated_at' => '2018-11-08 11:27:08',
            ),
            141 => 
            array (
                'id' => 642,
                'recipe_id' => '65',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 (1 1/2-lb) Cornish game hens, halved lengthwise and backs removed',
                'created_at' => '2018-11-08 11:27:10',
                'updated_at' => '2018-11-08 11:27:10',
            ),
            142 => 
            array (
                'id' => 643,
                'recipe_id' => '65',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup fresh orange juice',
                'created_at' => '2018-11-08 11:27:10',
                'updated_at' => '2018-11-08 11:27:10',
            ),
            143 => 
            array (
                'id' => 644,
                'recipe_id' => '65',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons soy sauce',
                'created_at' => '2018-11-08 11:27:11',
                'updated_at' => '2018-11-08 11:27:11',
            ),
            144 => 
            array (
                'id' => 645,
                'recipe_id' => '65',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon white-wine vinegar',
                'created_at' => '2018-11-08 11:27:11',
                'updated_at' => '2018-11-08 11:27:11',
            ),
            145 => 
            array (
                'id' => 646,
                'recipe_id' => '65',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon honey',
                'created_at' => '2018-11-08 11:27:11',
                'updated_at' => '2018-11-08 11:27:11',
            ),
            146 => 
            array (
                'id' => 647,
                'recipe_id' => '65',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon minced peeled fresh ginger',
                'created_at' => '2018-11-08 11:27:11',
                'updated_at' => '2018-11-08 11:27:11',
            ),
            147 => 
            array (
                'id' => 648,
                'recipe_id' => '65',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 11:27:11',
                'updated_at' => '2018-11-08 11:27:11',
            ),
            148 => 
            array (
                'id' => 649,
                'recipe_id' => '66',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 3/4 cups all purpose flour',
                'created_at' => '2018-11-08 11:27:13',
                'updated_at' => '2018-11-08 11:27:13',
            ),
            149 => 
            array (
                'id' => 650,
                'recipe_id' => '66',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup powdered sugar',
                'created_at' => '2018-11-08 11:27:13',
                'updated_at' => '2018-11-08 11:27:13',
            ),
            150 => 
            array (
                'id' => 651,
                'recipe_id' => '66',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup cornstarch',
                'created_at' => '2018-11-08 11:27:14',
                'updated_at' => '2018-11-08 11:27:14',
            ),
            151 => 
            array (
                'id' => 652,
                'recipe_id' => '66',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 11:27:14',
                'updated_at' => '2018-11-08 11:27:14',
            ),
            152 => 
            array (
                'id' => 653,
                'recipe_id' => '66',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3/4 cup (1 1/2 sticks) chilled unsalted butter, cut into 1/2-inch pieces',
                'created_at' => '2018-11-08 11:27:14',
                'updated_at' => '2018-11-08 11:27:14',
            ),
            153 => 
            array (
                'id' => 654,
                'recipe_id' => '66',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1/4 cups (packed) golden brown sugar',
                'created_at' => '2018-11-08 11:27:14',
                'updated_at' => '2018-11-08 11:27:14',
            ),
            154 => 
            array (
                'id' => 655,
                'recipe_id' => '66',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup light corn syrup',
                'created_at' => '2018-11-08 11:27:14',
                'updated_at' => '2018-11-08 11:27:14',
            ),
            155 => 
            array (
                'id' => 656,
                'recipe_id' => '66',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup (1/2 stick) unsalted butter',
                'created_at' => '2018-11-08 11:27:14',
                'updated_at' => '2018-11-08 11:27:14',
            ),
            156 => 
            array (
                'id' => 657,
                'recipe_id' => '66',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '4 cups coarsely chopped pecans (about 14 1/2 ounces)',
                'created_at' => '2018-11-08 11:27:14',
                'updated_at' => '2018-11-08 11:27:14',
            ),
            157 => 
            array (
                'id' => 658,
                'recipe_id' => '66',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup whipping cream',
                'created_at' => '2018-11-08 11:27:15',
                'updated_at' => '2018-11-08 11:27:15',
            ),
            158 => 
            array (
                'id' => 659,
                'recipe_id' => '66',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons vanilla extract',
                'created_at' => '2018-11-08 11:27:15',
                'updated_at' => '2018-11-08 11:27:15',
            ),
            159 => 
            array (
                'id' => 660,
                'recipe_id' => '67',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup finely chopped shallot',
                'created_at' => '2018-11-08 11:27:17',
                'updated_at' => '2018-11-08 11:27:17',
            ),
            160 => 
            array (
                'id' => 661,
                'recipe_id' => '67',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon unsalted butter',
                'created_at' => '2018-11-08 11:27:17',
                'updated_at' => '2018-11-08 11:27:17',
            ),
            161 => 
            array (
                'id' => 662,
                'recipe_id' => '67',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 oz fresh or frozen cranberries (not thawed; 2 cups)',
                'created_at' => '2018-11-08 11:27:17',
                'updated_at' => '2018-11-08 11:27:17',
            ),
            162 => 
            array (
                'id' => 663,
                'recipe_id' => '67',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup sugar',
                'created_at' => '2018-11-08 11:27:17',
                'updated_at' => '2018-11-08 11:27:17',
            ),
            163 => 
            array (
                'id' => 664,
                'recipe_id' => '67',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup water',
                'created_at' => '2018-11-08 11:27:17',
                'updated_at' => '2018-11-08 11:27:17',
            ),
            164 => 
            array (
                'id' => 665,
                'recipe_id' => '67',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon cider vinegar',
                'created_at' => '2018-11-08 11:27:18',
                'updated_at' => '2018-11-08 11:27:18',
            ),
            165 => 
            array (
                'id' => 666,
                'recipe_id' => '67',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon cracked black pepper',
                'created_at' => '2018-11-08 11:27:18',
                'updated_at' => '2018-11-08 11:27:18',
            ),
            166 => 
            array (
                'id' => 667,
                'recipe_id' => '67',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 11:27:18',
                'updated_at' => '2018-11-08 11:27:18',
            ),
            167 => 
            array (
                'id' => 668,
                'recipe_id' => '68',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 baguettes (long French bread), stale, cut into 1-inch cubes',
                'created_at' => '2018-11-08 11:27:20',
                'updated_at' => '2018-11-08 11:27:20',
            ),
            168 => 
            array (
                'id' => 669,
                'recipe_id' => '68',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon vegetable oil',
                'created_at' => '2018-11-08 11:27:20',
                'updated_at' => '2018-11-08 11:27:20',
            ),
            169 => 
            array (
                'id' => 670,
                'recipe_id' => '68',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 pound Country Sausages, preferably homemade',
                'created_at' => '2018-11-08 11:27:20',
                'updated_at' => '2018-11-08 11:27:20',
            ),
            170 => 
            array (
                'id' => 671,
                'recipe_id' => '68',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 large onion, cut in large (3/4 to 1 inch) dice (2 cups)',
                'created_at' => '2018-11-08 11:27:20',
                'updated_at' => '2018-11-08 11:27:20',
            ),
            171 => 
            array (
                'id' => 672,
                'recipe_id' => '68',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '5 stalks celery, peeled, split lengthwise and cut in large (3/4 to 1 inch) dice',
                'created_at' => '2018-11-08 11:27:20',
                'updated_at' => '2018-11-08 11:27:20',
            ),
            172 => 
            array (
                'id' => 673,
                'recipe_id' => '68',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 medium apples, peeled, cored and cut in large (3/4 to 1 inch) dice',
                'created_at' => '2018-11-08 11:27:20',
                'updated_at' => '2018-11-08 11:27:20',
            ),
            173 => 
            array (
                'id' => 674,
                'recipe_id' => '68',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '15 sprigs Italian parsley, leaves picked and very coarsely chopped (1/4 cup)',
                'created_at' => '2018-11-08 11:27:21',
                'updated_at' => '2018-11-08 11:27:21',
            ),
            174 => 
            array (
                'id' => 675,
                'recipe_id' => '68',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 to 8 branches fresh sage, leaves picked and coarsely chopped (1/4 cup)',
                'created_at' => '2018-11-08 11:27:21',
                'updated_at' => '2018-11-08 11:27:21',
            ),
            175 => 
            array (
                'id' => 676,
                'recipe_id' => '68',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 eggs',
                'created_at' => '2018-11-08 11:27:21',
                'updated_at' => '2018-11-08 11:27:21',
            ),
            176 => 
            array (
                'id' => 677,
                'recipe_id' => '68',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups turkey or chicken stock',
                'created_at' => '2018-11-08 11:27:21',
                'updated_at' => '2018-11-08 11:27:21',
            ),
            177 => 
            array (
                'id' => 678,
                'recipe_id' => '68',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon salt',
                'created_at' => '2018-11-08 11:27:21',
                'updated_at' => '2018-11-08 11:27:21',
            ),
            178 => 
            array (
                'id' => 679,
                'recipe_id' => '68',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon freshly ground black pepper',
                'created_at' => '2018-11-08 11:27:21',
                'updated_at' => '2018-11-08 11:27:21',
            ),
            179 => 
            array (
                'id' => 680,
                'recipe_id' => '68',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 tablespoons unsalted butter',
                'created_at' => '2018-11-08 11:27:21',
                'updated_at' => '2018-11-08 11:27:21',
            ),
            180 => 
            array (
                'id' => 681,
                'recipe_id' => '69',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 pounds cipolline onions* or boiling onions',
                'created_at' => '2018-11-08 11:27:23',
                'updated_at' => '2018-11-08 11:27:23',
            ),
            181 => 
            array (
                'id' => 682,
                'recipe_id' => '69',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups beef stock or canned beef broth',
                'created_at' => '2018-11-08 11:27:23',
                'updated_at' => '2018-11-08 11:27:23',
            ),
            182 => 
            array (
                'id' => 683,
                'recipe_id' => '69',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 1/2 tablespoons balsamic vinegar',
                'created_at' => '2018-11-08 11:27:23',
                'updated_at' => '2018-11-08 11:27:23',
            ),
            183 => 
            array (
                'id' => 684,
                'recipe_id' => '69',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 tablespoons (1/4 stick) butter',
                'created_at' => '2018-11-08 11:27:24',
                'updated_at' => '2018-11-08 11:27:24',
            ),
            184 => 
            array (
                'id' => 685,
                'recipe_id' => '69',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon sugar',
                'created_at' => '2018-11-08 11:27:24',
                'updated_at' => '2018-11-08 11:27:24',
            ),
            185 => 
            array (
                'id' => 686,
                'recipe_id' => '69',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons minced fresh parsley',
                'created_at' => '2018-11-08 11:27:24',
                'updated_at' => '2018-11-08 11:27:24',
            ),
            186 => 
            array (
                'id' => 687,
                'recipe_id' => '69',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '*Available at specialty foods stores.',
                'created_at' => '2018-11-08 11:27:24',
                'updated_at' => '2018-11-08 11:27:24',
            ),
            187 => 
            array (
                'id' => 688,
                'recipe_id' => '70',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 crusty rectangular dinner rolls, each about 5 inches long',
                'created_at' => '2018-11-08 11:27:26',
                'updated_at' => '2018-11-08 11:27:26',
            ),
            188 => 
            array (
                'id' => 689,
                'recipe_id' => '70',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons unsalted butter',
                'created_at' => '2018-11-08 11:27:26',
                'updated_at' => '2018-11-08 11:27:26',
            ),
            189 => 
            array (
                'id' => 690,
                'recipe_id' => '70',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons minced onion',
                'created_at' => '2018-11-08 11:27:26',
                'updated_at' => '2018-11-08 11:27:26',
            ),
            190 => 
            array (
                'id' => 691,
                'recipe_id' => '70',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon all-purpose flour',
                'created_at' => '2018-11-08 11:27:27',
                'updated_at' => '2018-11-08 11:27:27',
            ),
            191 => 
            array (
                'id' => 692,
                'recipe_id' => '70',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup milk',
                'created_at' => '2018-11-08 11:27:27',
                'updated_at' => '2018-11-08 11:27:27',
            ),
            192 => 
            array (
                'id' => 693,
                'recipe_id' => '70',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'freshly grated nutmeg to taste',
                'created_at' => '2018-11-08 11:27:27',
                'updated_at' => '2018-11-08 11:27:27',
            ),
            193 => 
            array (
                'id' => 694,
                'recipe_id' => '70',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons freshly grated lemon zest',
                'created_at' => '2018-11-08 11:27:27',
                'updated_at' => '2018-11-08 11:27:27',
            ),
            194 => 
            array (
                'id' => 695,
                'recipe_id' => '70',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 pound asparagus, trimmed and peeled',
                'created_at' => '2018-11-08 11:27:27',
                'updated_at' => '2018-11-08 11:27:27',
            ),
            195 => 
            array (
                'id' => 696,
                'recipe_id' => '70',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons minced fresh parsley leaves',
                'created_at' => '2018-11-08 11:27:27',
                'updated_at' => '2018-11-08 11:27:27',
            ),
            196 => 
            array (
                'id' => 697,
                'recipe_id' => '71',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 ripe plum tomatoes, seeded and cut into 1/4-inch dice',
                'created_at' => '2018-11-08 11:27:29',
                'updated_at' => '2018-11-08 11:27:29',
            ),
            197 => 
            array (
                'id' => 698,
                'recipe_id' => '71',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup plus 1 tablespoon pitted and coarsely chopped Niçoise olives',
                'created_at' => '2018-11-08 11:27:29',
                'updated_at' => '2018-11-08 11:27:29',
            ),
            198 => 
            array (
                'id' => 699,
                'recipe_id' => '71',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Coarse salt and freshly ground black pepper, to taste',
                'created_at' => '2018-11-08 11:27:29',
                'updated_at' => '2018-11-08 11:27:29',
            ),
            199 => 
            array (
                'id' => 700,
                'recipe_id' => '71',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons balsamic vinegar',
                'created_at' => '2018-11-08 11:27:30',
                'updated_at' => '2018-11-08 11:27:30',
            ),
            200 => 
            array (
                'id' => 701,
                'recipe_id' => '71',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon extra-virgin olive oil',
                'created_at' => '2018-11-08 11:27:30',
                'updated_at' => '2018-11-08 11:27:30',
            ),
            201 => 
            array (
                'id' => 702,
                'recipe_id' => '71',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons coarsely chopped flat-leaf parsley',
                'created_at' => '2018-11-08 11:27:30',
                'updated_at' => '2018-11-08 11:27:30',
            ),
            202 => 
            array (
                'id' => 703,
                'recipe_id' => '71',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 prime-aged New York strip steak (about 1 pound), cut 1 1/2 inches thick',
                'created_at' => '2018-11-08 11:27:30',
                'updated_at' => '2018-11-08 11:27:30',
            ),
            203 => 
            array (
                'id' => 704,
                'recipe_id' => '72',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 cups (or more) bread flour',
                'created_at' => '2018-11-08 11:27:32',
                'updated_at' => '2018-11-08 11:27:32',
            ),
            204 => 
            array (
                'id' => 705,
                'recipe_id' => '72',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup sugar',
                'created_at' => '2018-11-08 11:27:32',
                'updated_at' => '2018-11-08 11:27:32',
            ),
            205 => 
            array (
                'id' => 706,
                'recipe_id' => '72',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 envelopes quick-rising dry yeast',
                'created_at' => '2018-11-08 11:27:32',
                'updated_at' => '2018-11-08 11:27:32',
            ),
            206 => 
            array (
                'id' => 707,
                'recipe_id' => '72',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 teaspoons salt',
                'created_at' => '2018-11-08 11:27:33',
                'updated_at' => '2018-11-08 11:27:33',
            ),
            207 => 
            array (
                'id' => 708,
                'recipe_id' => '72',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup buttermilk',
                'created_at' => '2018-11-08 11:27:33',
                'updated_at' => '2018-11-08 11:27:33',
            ),
            208 => 
            array (
                'id' => 709,
                'recipe_id' => '72',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 large eggs',
                'created_at' => '2018-11-08 11:27:33',
                'updated_at' => '2018-11-08 11:27:33',
            ),
            209 => 
            array (
                'id' => 710,
                'recipe_id' => '72',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 tablespoons (1/4 stick) unsalted butter, melted, hot',
                'created_at' => '2018-11-08 11:27:33',
                'updated_at' => '2018-11-08 11:27:33',
            ),
            210 => 
            array (
                'id' => 711,
                'recipe_id' => '72',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 tablespoons orange extract',
                'created_at' => '2018-11-08 11:27:33',
                'updated_at' => '2018-11-08 11:27:33',
            ),
            211 => 
            array (
                'id' => 712,
                'recipe_id' => '72',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/3 cup (about) hot water (120°F to 130°F)',
                'created_at' => '2018-11-08 11:27:34',
                'updated_at' => '2018-11-08 11:27:34',
            ),
            212 => 
            array (
                'id' => 713,
                'recipe_id' => '72',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup dried cranberries',
                'created_at' => '2018-11-08 11:27:34',
                'updated_at' => '2018-11-08 11:27:34',
            ),
            213 => 
            array (
                'id' => 714,
                'recipe_id' => '72',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup coarsely chopped walnuts',
                'created_at' => '2018-11-08 11:27:34',
                'updated_at' => '2018-11-08 11:27:34',
            ),
            214 => 
            array (
                'id' => 715,
                'recipe_id' => '72',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 large egg, beaten to blend (for glaze)',
                'created_at' => '2018-11-08 11:27:34',
                'updated_at' => '2018-11-08 11:27:34',
            ),
            215 => 
            array (
                'id' => 716,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1/2 14- to 15-ounce loaves crusty country-style white bread, cut into 1/3- to 1/2-inch cubes (about 10 cups)',
                'created_at' => '2018-11-08 11:27:36',
                'updated_at' => '2018-11-08 11:27:36',
            ),
            216 => 
            array (
                'id' => 717,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon butter',
                'created_at' => '2018-11-08 11:27:37',
                'updated_at' => '2018-11-08 11:27:37',
            ),
            217 => 
            array (
                'id' => 718,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon olive oil',
                'created_at' => '2018-11-08 11:27:37',
                'updated_at' => '2018-11-08 11:27:37',
            ),
            218 => 
            array (
                'id' => 719,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups chopped onions',
                'created_at' => '2018-11-08 11:27:37',
                'updated_at' => '2018-11-08 11:27:37',
            ),
            219 => 
            array (
                'id' => 720,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups finely chopped celery',
                'created_at' => '2018-11-08 11:27:37',
                'updated_at' => '2018-11-08 11:27:37',
            ),
            220 => 
            array (
                'id' => 721,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons chopped fresh sage',
                'created_at' => '2018-11-08 11:27:37',
                'updated_at' => '2018-11-08 11:27:37',
            ),
            221 => 
            array (
                'id' => 722,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup dry white wine',
                'created_at' => '2018-11-08 11:27:37',
                'updated_at' => '2018-11-08 11:27:37',
            ),
            222 => 
            array (
                'id' => 723,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 pound ground pork',
                'created_at' => '2018-11-08 11:27:38',
                'updated_at' => '2018-11-08 11:27:38',
            ),
            223 => 
            array (
                'id' => 724,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup (packed) chopped fresh parsley',
                'created_at' => '2018-11-08 11:27:38',
                'updated_at' => '2018-11-08 11:27:38',
            ),
            224 => 
            array (
                'id' => 725,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup (packed) chopped celery leaves',
                'created_at' => '2018-11-08 11:27:38',
                'updated_at' => '2018-11-08 11:27:38',
            ),
            225 => 
            array (
                'id' => 726,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 large eggs',
                'created_at' => '2018-11-08 11:27:38',
                'updated_at' => '2018-11-08 11:27:38',
            ),
            226 => 
            array (
                'id' => 727,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon salt',
                'created_at' => '2018-11-08 11:27:38',
                'updated_at' => '2018-11-08 11:27:38',
            ),
            227 => 
            array (
                'id' => 728,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon ground nutmeg',
                'created_at' => '2018-11-08 11:27:38',
                'updated_at' => '2018-11-08 11:27:38',
            ),
            228 => 
            array (
                'id' => 729,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon ground black pepper',
                'created_at' => '2018-11-08 11:27:38',
                'updated_at' => '2018-11-08 11:27:38',
            ),
            229 => 
            array (
                'id' => 730,
                'recipe_id' => '73',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 cup (about) canned low-salt chicken broth',
                'created_at' => '2018-11-08 11:27:39',
                'updated_at' => '2018-11-08 11:27:39',
            ),
            230 => 
            array (
                'id' => 731,
                'recipe_id' => '74',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup plus 2 tablespoons all-purpose flour',
                'created_at' => '2018-11-08 11:27:42',
                'updated_at' => '2018-11-08 11:27:42',
            ),
            231 => 
            array (
                'id' => 732,
                'recipe_id' => '74',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon baking soda',
                'created_at' => '2018-11-08 11:27:42',
                'updated_at' => '2018-11-08 11:27:42',
            ),
            232 => 
            array (
                'id' => 733,
                'recipe_id' => '74',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 stick unsalted butter',
                'created_at' => '2018-11-08 11:27:42',
                'updated_at' => '2018-11-08 11:27:42',
            ),
            233 => 
            array (
                'id' => 734,
                'recipe_id' => '74',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 tablespoons granulated sugar',
                'created_at' => '2018-11-08 11:27:43',
                'updated_at' => '2018-11-08 11:27:43',
            ),
            234 => 
            array (
                'id' => 735,
                'recipe_id' => '74',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 tablespoons brown sugar',
                'created_at' => '2018-11-08 11:27:43',
                'updated_at' => '2018-11-08 11:27:43',
            ),
            235 => 
            array (
                'id' => 736,
                'recipe_id' => '74',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon vanilla extract',
                'created_at' => '2018-11-08 11:27:43',
                'updated_at' => '2018-11-08 11:27:43',
            ),
            236 => 
            array (
                'id' => 737,
                'recipe_id' => '74',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 egg',
                'created_at' => '2018-11-08 11:27:43',
                'updated_at' => '2018-11-08 11:27:43',
            ),
            237 => 
            array (
                'id' => 738,
                'recipe_id' => '74',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup semi-sweet morsels',
                'created_at' => '2018-11-08 11:27:43',
                'updated_at' => '2018-11-08 11:27:43',
            ),
            238 => 
            array (
                'id' => 739,
                'recipe_id' => '75',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 tablespoons Grade B maple syrup (or Grade A maple syrup flavored with 3 drops maple extract, or to taste)',
                'created_at' => '2018-11-08 11:27:47',
                'updated_at' => '2018-11-08 11:27:47',
            ),
            239 => 
            array (
                'id' => 740,
                'recipe_id' => '75',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup water',
                'created_at' => '2018-11-08 11:27:47',
                'updated_at' => '2018-11-08 11:27:47',
            ),
            240 => 
            array (
                'id' => 741,
                'recipe_id' => '75',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons minced peeled fresh gingerroot',
                'created_at' => '2018-11-08 11:27:47',
                'updated_at' => '2018-11-08 11:27:47',
            ),
            241 => 
            array (
                'id' => 742,
                'recipe_id' => '75',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 garlic cloves, minced',
                'created_at' => '2018-11-08 11:27:47',
                'updated_at' => '2018-11-08 11:27:47',
            ),
            242 => 
            array (
                'id' => 743,
                'recipe_id' => '75',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon dried hot red pepper flakes, or to taste',
                'created_at' => '2018-11-08 11:27:47',
                'updated_at' => '2018-11-08 11:27:47',
            ),
            243 => 
            array (
                'id' => 744,
                'recipe_id' => '75',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 11:27:48',
                'updated_at' => '2018-11-08 11:27:48',
            ),
            244 => 
            array (
                'id' => 745,
                'recipe_id' => '75',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => 'four 1-inch-thick pieces salmon fillet (about 6 ounces each)',
                'created_at' => '2018-11-08 11:27:48',
                'updated_at' => '2018-11-08 11:27:48',
            ),
            245 => 
            array (
                'id' => 746,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup vegetable oil',
                'created_at' => '2018-11-08 11:27:52',
                'updated_at' => '2018-11-08 11:27:52',
            ),
            246 => 
            array (
                'id' => 747,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup all purpose flour',
                'created_at' => '2018-11-08 11:27:52',
                'updated_at' => '2018-11-08 11:27:52',
            ),
            247 => 
            array (
                'id' => 748,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 celery stalks, coarsely chopped',
                'created_at' => '2018-11-08 11:27:52',
                'updated_at' => '2018-11-08 11:27:52',
            ),
            248 => 
            array (
                'id' => 749,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 medium onions, coarsely chopped',
                'created_at' => '2018-11-08 11:27:52',
                'updated_at' => '2018-11-08 11:27:52',
            ),
            249 => 
            array (
                'id' => 750,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 green bell peppers, chopped',
                'created_at' => '2018-11-08 11:27:52',
                'updated_at' => '2018-11-08 11:27:52',
            ),
            250 => 
            array (
                'id' => 751,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 bay leaves',
                'created_at' => '2018-11-08 11:27:52',
                'updated_at' => '2018-11-08 11:27:52',
            ),
            251 => 
            array (
                'id' => 752,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons salt',
                'created_at' => '2018-11-08 11:27:53',
                'updated_at' => '2018-11-08 11:27:53',
            ),
            252 => 
            array (
                'id' => 753,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons dried oregano, crumbled',
                'created_at' => '2018-11-08 11:27:53',
                'updated_at' => '2018-11-08 11:27:53',
            ),
            253 => 
            array (
                'id' => 754,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon cayenne pepper',
                'created_at' => '2018-11-08 11:27:53',
                'updated_at' => '2018-11-08 11:27:53',
            ),
            254 => 
            array (
                'id' => 755,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '5 8-ounce bottles clam juice',
                'created_at' => '2018-11-08 11:27:53',
                'updated_at' => '2018-11-08 11:27:53',
            ),
            255 => 
            array (
                'id' => 756,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 28-ounce can plum tomatoes, drained, chopped',
                'created_at' => '2018-11-08 11:27:53',
                'updated_at' => '2018-11-08 11:27:53',
            ),
            256 => 
            array (
                'id' => 757,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 pound smoked andouille or kielbasa sausage, halved lengthwise, sliced 1/4 inch thick',
                'created_at' => '2018-11-08 11:27:53',
                'updated_at' => '2018-11-08 11:27:53',
            ),
            257 => 
            array (
                'id' => 758,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 pound okra, trimmed, cut crosswise into 1/4-inch-thick slices',
                'created_at' => '2018-11-08 11:27:54',
                'updated_at' => '2018-11-08 11:27:54',
            ),
            258 => 
            array (
                'id' => 759,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 pounds uncooked medium shrimp, peeled, deveined',
                'created_at' => '2018-11-08 11:27:54',
                'updated_at' => '2018-11-08 11:27:54',
            ),
            259 => 
            array (
                'id' => 760,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Freshly cooked long-grain rice',
                'created_at' => '2018-11-08 11:27:54',
                'updated_at' => '2018-11-08 11:27:54',
            ),
            260 => 
            array (
                'id' => 761,
                'recipe_id' => '76',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tomatoes, seeded, diced',
                'created_at' => '2018-11-08 11:27:54',
                'updated_at' => '2018-11-08 11:27:54',
            ),
            261 => 
            array (
                'id' => 762,
                'recipe_id' => '77',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 ounces unsweetened chocolate, chopped',
                'created_at' => '2018-11-08 11:28:00',
                'updated_at' => '2018-11-08 11:28:00',
            ),
            262 => 
            array (
                'id' => 763,
                'recipe_id' => '77',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup (1 stick) unsalted butter',
                'created_at' => '2018-11-08 11:28:00',
                'updated_at' => '2018-11-08 11:28:00',
            ),
            263 => 
            array (
                'id' => 764,
                'recipe_id' => '77',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 cups sugar',
                'created_at' => '2018-11-08 11:28:00',
                'updated_at' => '2018-11-08 11:28:00',
            ),
            264 => 
            array (
                'id' => 765,
                'recipe_id' => '77',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons grated orange peel',
                'created_at' => '2018-11-08 11:28:00',
                'updated_at' => '2018-11-08 11:28:00',
            ),
            265 => 
            array (
                'id' => 766,
                'recipe_id' => '77',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon vanilla extract',
                'created_at' => '2018-11-08 11:28:00',
                'updated_at' => '2018-11-08 11:28:00',
            ),
            266 => 
            array (
                'id' => 767,
                'recipe_id' => '77',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 11:28:01',
                'updated_at' => '2018-11-08 11:28:01',
            ),
            267 => 
            array (
                'id' => 768,
                'recipe_id' => '77',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 large eggs',
                'created_at' => '2018-11-08 11:28:01',
                'updated_at' => '2018-11-08 11:28:01',
            ),
            268 => 
            array (
                'id' => 769,
                'recipe_id' => '77',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup all purpose flour',
                'created_at' => '2018-11-08 11:28:01',
                'updated_at' => '2018-11-08 11:28:01',
            ),
            269 => 
            array (
                'id' => 770,
                'recipe_id' => '77',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup whipping cream',
                'created_at' => '2018-11-08 11:28:01',
                'updated_at' => '2018-11-08 11:28:01',
            ),
            270 => 
            array (
                'id' => 771,
                'recipe_id' => '77',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon grated orange peel',
                'created_at' => '2018-11-08 11:28:01',
                'updated_at' => '2018-11-08 11:28:01',
            ),
            271 => 
            array (
                'id' => 772,
                'recipe_id' => '77',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '5 1/2 ounces bittersweet (not unsweetened) or semisweet chocolate, chopped',
                'created_at' => '2018-11-08 11:28:01',
                'updated_at' => '2018-11-08 11:28:01',
            ),
            272 => 
            array (
                'id' => 773,
                'recipe_id' => '77',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons Grand Marnier or other orange liqueur',
                'created_at' => '2018-11-08 11:28:01',
                'updated_at' => '2018-11-08 11:28:01',
            ),
            273 => 
            array (
                'id' => 774,
                'recipe_id' => '78',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 large potatoes, peeled and thinly sliced',
                'created_at' => '2018-11-08 11:28:07',
                'updated_at' => '2018-11-08 11:28:07',
            ),
            274 => 
            array (
                'id' => 775,
                'recipe_id' => '78',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 cups heavy whipping cream',
                'created_at' => '2018-11-08 11:28:07',
                'updated_at' => '2018-11-08 11:28:07',
            ),
            275 => 
            array (
                'id' => 776,
                'recipe_id' => '78',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Salt and freshly ground black pepper',
                'created_at' => '2018-11-08 11:28:07',
                'updated_at' => '2018-11-08 11:28:07',
            ),
            276 => 
            array (
                'id' => 777,
                'recipe_id' => '78',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup freshly grated Parmesan cheese',
                'created_at' => '2018-11-08 11:28:08',
                'updated_at' => '2018-11-08 11:28:08',
            ),
            277 => 
            array (
                'id' => 778,
                'recipe_id' => '79',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 pounds dried Calimyrna figs, stemmed, coarsely chopped',
                'created_at' => '2018-11-08 11:28:11',
                'updated_at' => '2018-11-08 11:28:11',
            ),
            278 => 
            array (
                'id' => 779,
                'recipe_id' => '79',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 3/4 cups dry Marsala',
                'created_at' => '2018-11-08 11:28:12',
                'updated_at' => '2018-11-08 11:28:12',
            ),
            279 => 
            array (
                'id' => 780,
                'recipe_id' => '79',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 3/4 cups water',
                'created_at' => '2018-11-08 11:28:12',
                'updated_at' => '2018-11-08 11:28:12',
            ),
            280 => 
            array (
                'id' => 781,
                'recipe_id' => '79',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup (packed) golden brown sugar',
                'created_at' => '2018-11-08 11:28:12',
                'updated_at' => '2018-11-08 11:28:12',
            ),
            281 => 
            array (
                'id' => 782,
                'recipe_id' => '79',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cinnamon sticks',
                'created_at' => '2018-11-08 11:28:12',
                'updated_at' => '2018-11-08 11:28:12',
            ),
            282 => 
            array (
                'id' => 783,
                'recipe_id' => '79',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon ground cloves',
                'created_at' => '2018-11-08 11:28:12',
                'updated_at' => '2018-11-08 11:28:12',
            ),
            283 => 
            array (
                'id' => 784,
                'recipe_id' => '79',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 1/4 cups all purpose flour',
                'created_at' => '2018-11-08 11:28:12',
                'updated_at' => '2018-11-08 11:28:12',
            ),
            284 => 
            array (
                'id' => 785,
                'recipe_id' => '79',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup sugar',
                'created_at' => '2018-11-08 11:28:12',
                'updated_at' => '2018-11-08 11:28:12',
            ),
            285 => 
            array (
                'id' => 786,
                'recipe_id' => '79',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons fennel seeds',
                'created_at' => '2018-11-08 11:28:13',
                'updated_at' => '2018-11-08 11:28:13',
            ),
            286 => 
            array (
                'id' => 787,
                'recipe_id' => '79',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 11:28:13',
                'updated_at' => '2018-11-08 11:28:13',
            ),
            287 => 
            array (
                'id' => 788,
                'recipe_id' => '79',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup plus 6 tablespoons (1 3/4 sticks) unsalted butter, room temperature',
                'created_at' => '2018-11-08 11:28:13',
                'updated_at' => '2018-11-08 11:28:13',
            ),
            288 => 
            array (
                'id' => 789,
                'recipe_id' => '79',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 large eggs',
                'created_at' => '2018-11-08 11:28:13',
                'updated_at' => '2018-11-08 11:28:13',
            ),
            289 => 
            array (
                'id' => 790,
                'recipe_id' => '79',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Vanilla ice cream',
                'created_at' => '2018-11-08 11:28:14',
                'updated_at' => '2018-11-08 11:28:14',
            ),
            290 => 
            array (
                'id' => 791,
                'recipe_id' => '80',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '10 cups canola oil',
                'created_at' => '2018-11-08 11:28:16',
                'updated_at' => '2018-11-08 11:28:16',
            ),
            291 => 
            array (
                'id' => 792,
                'recipe_id' => '80',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 pounds clam strips (about 4 cups)',
                'created_at' => '2018-11-08 11:28:16',
                'updated_at' => '2018-11-08 11:28:16',
            ),
            292 => 
            array (
                'id' => 793,
                'recipe_id' => '80',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup buttermilk, well-shaken',
                'created_at' => '2018-11-08 11:28:16',
                'updated_at' => '2018-11-08 11:28:16',
            ),
            293 => 
            array (
                'id' => 794,
                'recipe_id' => '80',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup cornstarch',
                'created_at' => '2018-11-08 11:28:16',
                'updated_at' => '2018-11-08 11:28:16',
            ),
            294 => 
            array (
                'id' => 795,
                'recipe_id' => '80',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup cornmeal (preferably yellow, for color)',
                'created_at' => '2018-11-08 11:28:16',
                'updated_at' => '2018-11-08 11:28:16',
            ),
            295 => 
            array (
                'id' => 796,
                'recipe_id' => '80',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup unbleached all-purpose flour',
                'created_at' => '2018-11-08 11:28:17',
                'updated_at' => '2018-11-08 11:28:17',
            ),
            296 => 
            array (
                'id' => 797,
                'recipe_id' => '80',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon curry powder',
                'created_at' => '2018-11-08 11:28:17',
                'updated_at' => '2018-11-08 11:28:17',
            ),
            297 => 
            array (
                'id' => 798,
                'recipe_id' => '80',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon celery salt',
                'created_at' => '2018-11-08 11:28:17',
                'updated_at' => '2018-11-08 11:28:17',
            ),
            298 => 
            array (
                'id' => 799,
                'recipe_id' => '80',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon cayenne',
                'created_at' => '2018-11-08 11:28:17',
                'updated_at' => '2018-11-08 11:28:17',
            ),
            299 => 
            array (
                'id' => 800,
                'recipe_id' => '80',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon kosher salt',
                'created_at' => '2018-11-08 11:28:17',
                'updated_at' => '2018-11-08 11:28:17',
            ),
            300 => 
            array (
                'id' => 801,
                'recipe_id' => '80',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 lemons',
                'created_at' => '2018-11-08 11:28:17',
                'updated_at' => '2018-11-08 11:28:17',
            ),
            301 => 
            array (
                'id' => 802,
                'recipe_id' => '80',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups fresh flat-leaf parsley sprigs, well-dried and loosely packed',
                'created_at' => '2018-11-08 11:28:18',
                'updated_at' => '2018-11-08 11:28:18',
            ),
            302 => 
            array (
                'id' => 803,
                'recipe_id' => '80',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Kosher salt, to taste',
                'created_at' => '2018-11-08 11:28:18',
                'updated_at' => '2018-11-08 11:28:18',
            ),
            303 => 
            array (
                'id' => 804,
                'recipe_id' => '80',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Accompaniment: Lemon Coriander Aïoli',
                'created_at' => '2018-11-08 11:28:18',
                'updated_at' => '2018-11-08 11:28:18',
            ),
            304 => 
            array (
                'id' => 805,
                'recipe_id' => '81',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 1/2 cups confectioners sugar',
                'created_at' => '2018-11-08 11:28:20',
                'updated_at' => '2018-11-08 11:28:20',
            ),
            305 => 
            array (
                'id' => 806,
                'recipe_id' => '81',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 oz cream cheese, softened',
                'created_at' => '2018-11-08 11:28:20',
                'updated_at' => '2018-11-08 11:28:20',
            ),
            306 => 
            array (
                'id' => 807,
                'recipe_id' => '81',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon almond extract',
                'created_at' => '2018-11-08 11:28:20',
                'updated_at' => '2018-11-08 11:28:20',
            ),
            307 => 
            array (
                'id' => 808,
                'recipe_id' => '81',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon whole milk',
                'created_at' => '2018-11-08 11:28:21',
                'updated_at' => '2018-11-08 11:28:21',
            ),
            308 => 
            array (
                'id' => 809,
                'recipe_id' => '82',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '4 medium russet potatoes (about 1 3/4 pounds), unpeeled',
                'created_at' => '2018-11-08 11:28:23',
                'updated_at' => '2018-11-08 11:28:23',
            ),
            309 => 
            array (
                'id' => 810,
                'recipe_id' => '82',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons canola oil',
                'created_at' => '2018-11-08 11:28:23',
                'updated_at' => '2018-11-08 11:28:23',
            ),
            310 => 
            array (
                'id' => 811,
                'recipe_id' => '82',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup chopped fresh parsley',
                'created_at' => '2018-11-08 11:28:24',
                'updated_at' => '2018-11-08 11:28:24',
            ),
            311 => 
            array (
                'id' => 812,
                'recipe_id' => '82',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 garlic cloves, minced',
                'created_at' => '2018-11-08 11:28:24',
                'updated_at' => '2018-11-08 11:28:24',
            ),
            312 => 
            array (
                'id' => 813,
                'recipe_id' => '82',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Coarse salt',
                'created_at' => '2018-11-08 11:28:24',
                'updated_at' => '2018-11-08 11:28:24',
            ),
            313 => 
            array (
                'id' => 814,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup 1/8-inch cubes peeled and seeded cucumber',
                'created_at' => '2018-11-08 11:28:26',
                'updated_at' => '2018-11-08 11:28:26',
            ),
            314 => 
            array (
                'id' => 815,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 11:28:27',
                'updated_at' => '2018-11-08 11:28:27',
            ),
            315 => 
            array (
                'id' => 816,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup mayonnaise',
                'created_at' => '2018-11-08 11:28:27',
                'updated_at' => '2018-11-08 11:28:27',
            ),
            316 => 
            array (
                'id' => 817,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 scallion, white and green parts, finely chopped',
                'created_at' => '2018-11-08 11:28:27',
                'updated_at' => '2018-11-08 11:28:27',
            ),
            317 => 
            array (
                'id' => 818,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons nonpareil capers, rinsed',
                'created_at' => '2018-11-08 11:28:27',
                'updated_at' => '2018-11-08 11:28:27',
            ),
            318 => 
            array (
                'id' => 819,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon anchovy paste',
                'created_at' => '2018-11-08 11:28:27',
                'updated_at' => '2018-11-08 11:28:27',
            ),
            319 => 
            array (
                'id' => 820,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup plus 1/3 cup dried bread crumbs',
                'created_at' => '2018-11-08 11:28:27',
                'updated_at' => '2018-11-08 11:28:27',
            ),
            320 => 
            array (
                'id' => 821,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup mayonnaise',
                'created_at' => '2018-11-08 11:28:27',
                'updated_at' => '2018-11-08 11:28:27',
            ),
            321 => 
            array (
                'id' => 822,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large egg, beaten',
                'created_at' => '2018-11-08 11:28:28',
                'updated_at' => '2018-11-08 11:28:28',
            ),
            322 => 
            array (
                'id' => 823,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon Dijon mustard',
                'created_at' => '2018-11-08 11:28:28',
                'updated_at' => '2018-11-08 11:28:28',
            ),
            323 => 
            array (
                'id' => 824,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 scallion, white and green parts, finely chopped',
                'created_at' => '2018-11-08 11:28:28',
                'updated_at' => '2018-11-08 11:28:28',
            ),
            324 => 
            array (
                'id' => 825,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon Worcestershire sauce',
                'created_at' => '2018-11-08 11:28:28',
                'updated_at' => '2018-11-08 11:28:28',
            ),
            325 => 
            array (
                'id' => 826,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon Delmarva Seasoning, or store-bought Old Bay Seasoning',
                'created_at' => '2018-11-08 11:28:28',
                'updated_at' => '2018-11-08 11:28:28',
            ),
            326 => 
            array (
                'id' => 827,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 pound fresh lump crabmeat, picked over for cartilage',
                'created_at' => '2018-11-08 11:28:28',
                'updated_at' => '2018-11-08 11:28:28',
            ),
            327 => 
            array (
                'id' => 828,
                'recipe_id' => '83',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'vegetable oil for deep-frying',
                'created_at' => '2018-11-08 11:28:29',
                'updated_at' => '2018-11-08 11:28:29',
            ),
            328 => 
            array (
                'id' => 829,
                'recipe_id' => '84',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup all purpose flour',
                'created_at' => '2018-11-08 11:28:32',
                'updated_at' => '2018-11-08 11:28:32',
            ),
            329 => 
            array (
                'id' => 830,
                'recipe_id' => '84',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon baking soda',
                'created_at' => '2018-11-08 11:28:32',
                'updated_at' => '2018-11-08 11:28:32',
            ),
            330 => 
            array (
                'id' => 831,
                'recipe_id' => '84',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 11:28:32',
                'updated_at' => '2018-11-08 11:28:32',
            ),
            331 => 
            array (
                'id' => 832,
                'recipe_id' => '84',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup plus 2 tablespoons (1 1/4 sticks) unsalted butter, room temperature',
                'created_at' => '2018-11-08 11:28:33',
                'updated_at' => '2018-11-08 11:28:33',
            ),
            332 => 
            array (
                'id' => 833,
                'recipe_id' => '84',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup sugar',
                'created_at' => '2018-11-08 11:28:33',
                'updated_at' => '2018-11-08 11:28:33',
            ),
            333 => 
            array (
                'id' => 834,
                'recipe_id' => '84',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup (packed) dark brown sugar',
                'created_at' => '2018-11-08 11:28:33',
                'updated_at' => '2018-11-08 11:28:33',
            ),
            334 => 
            array (
                'id' => 835,
                'recipe_id' => '84',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large egg',
                'created_at' => '2018-11-08 11:28:33',
                'updated_at' => '2018-11-08 11:28:33',
            ),
            335 => 
            array (
                'id' => 836,
                'recipe_id' => '84',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon vanilla extract',
                'created_at' => '2018-11-08 11:28:33',
                'updated_at' => '2018-11-08 11:28:33',
            ),
            336 => 
            array (
                'id' => 837,
                'recipe_id' => '84',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon almond extract',
                'created_at' => '2018-11-08 11:28:33',
                'updated_at' => '2018-11-08 11:28:33',
            ),
            337 => 
            array (
                'id' => 838,
                'recipe_id' => '84',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup old-fashioned oats',
                'created_at' => '2018-11-08 11:28:33',
                'updated_at' => '2018-11-08 11:28:33',
            ),
            338 => 
            array (
                'id' => 839,
                'recipe_id' => '84',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups semisweet chocolate chips',
                'created_at' => '2018-11-08 11:28:34',
                'updated_at' => '2018-11-08 11:28:34',
            ),
            339 => 
            array (
                'id' => 840,
                'recipe_id' => '84',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup dried tart cherries',
                'created_at' => '2018-11-08 11:28:34',
                'updated_at' => '2018-11-08 11:28:34',
            ),
            340 => 
            array (
                'id' => 841,
                'recipe_id' => '84',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup slivered almonds, toasted',
                'created_at' => '2018-11-08 11:28:34',
                'updated_at' => '2018-11-08 11:28:34',
            ),
            341 => 
            array (
                'id' => 842,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 onion, quartered',
                'created_at' => '2018-11-08 11:28:38',
                'updated_at' => '2018-11-08 11:28:38',
            ),
            342 => 
            array (
                'id' => 843,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups distilled white vinegar',
                'created_at' => '2018-11-08 11:28:38',
                'updated_at' => '2018-11-08 11:28:38',
            ),
            343 => 
            array (
                'id' => 844,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup ketchup',
                'created_at' => '2018-11-08 11:28:38',
                'updated_at' => '2018-11-08 11:28:38',
            ),
            344 => 
            array (
                'id' => 845,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup apple juice',
                'created_at' => '2018-11-08 11:28:38',
                'updated_at' => '2018-11-08 11:28:38',
            ),
            345 => 
            array (
                'id' => 846,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup firmly packed dark brown sugar',
                'created_at' => '2018-11-08 11:28:39',
                'updated_at' => '2018-11-08 11:28:39',
            ),
            346 => 
            array (
                'id' => 847,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup vegetable oil',
                'created_at' => '2018-11-08 11:28:39',
                'updated_at' => '2018-11-08 11:28:39',
            ),
            347 => 
            array (
                'id' => 848,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 small garlic cloves, chopped',
                'created_at' => '2018-11-08 11:28:39',
                'updated_at' => '2018-11-08 11:28:39',
            ),
            348 => 
            array (
                'id' => 849,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 sweet pickled gherkin, chopped',
                'created_at' => '2018-11-08 11:28:39',
                'updated_at' => '2018-11-08 11:28:39',
            ),
            349 => 
            array (
                'id' => 850,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons bottled sweet pickled gherkin juice',
                'created_at' => '2018-11-08 11:28:39',
                'updated_at' => '2018-11-08 11:28:39',
            ),
            350 => 
            array (
                'id' => 851,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons Dijon-style mustard',
                'created_at' => '2018-11-08 11:28:39',
                'updated_at' => '2018-11-08 11:28:39',
            ),
            351 => 
            array (
                'id' => 852,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 tablespoons ground celery seeds',
                'created_at' => '2018-11-08 11:28:39',
                'updated_at' => '2018-11-08 11:28:39',
            ),
            352 => 
            array (
                'id' => 853,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 tablespoons Worcestershire sauce',
                'created_at' => '2018-11-08 11:28:40',
                'updated_at' => '2018-11-08 11:28:40',
            ),
            353 => 
            array (
                'id' => 854,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons Tabasco',
                'created_at' => '2018-11-08 11:28:40',
                'updated_at' => '2018-11-08 11:28:40',
            ),
            354 => 
            array (
                'id' => 855,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons cayenne, or to taste',
                'created_at' => '2018-11-08 11:28:40',
                'updated_at' => '2018-11-08 11:28:40',
            ),
            355 => 
            array (
                'id' => 856,
                'recipe_id' => '85',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon turmeric',
                'created_at' => '2018-11-08 11:28:40',
                'updated_at' => '2018-11-08 11:28:40',
            ),
            356 => 
            array (
                'id' => 857,
                'recipe_id' => '86',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 cup (2 sticks) unsalted butter',
                'created_at' => '2018-11-08 11:28:43',
                'updated_at' => '2018-11-08 11:28:43',
            ),
            357 => 
            array (
                'id' => 858,
                'recipe_id' => '86',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 cups semisweet chocolate chips',
                'created_at' => '2018-11-08 11:28:43',
                'updated_at' => '2018-11-08 11:28:43',
            ),
            358 => 
            array (
                'id' => 859,
                'recipe_id' => '86',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 ounces unsweetened chocolate, chopped',
                'created_at' => '2018-11-08 11:28:43',
                'updated_at' => '2018-11-08 11:28:43',
            ),
            359 => 
            array (
                'id' => 860,
                'recipe_id' => '86',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup plus 2 tablespoons sugar',
                'created_at' => '2018-11-08 11:28:44',
                'updated_at' => '2018-11-08 11:28:44',
            ),
            360 => 
            array (
                'id' => 861,
                'recipe_id' => '86',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 large eggs',
                'created_at' => '2018-11-08 11:28:44',
                'updated_at' => '2018-11-08 11:28:44',
            ),
            361 => 
            array (
                'id' => 862,
                'recipe_id' => '86',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 tablespoons instant coffee granules',
                'created_at' => '2018-11-08 11:28:44',
                'updated_at' => '2018-11-08 11:28:44',
            ),
            362 => 
            array (
                'id' => 863,
                'recipe_id' => '86',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon vanilla extract',
                'created_at' => '2018-11-08 11:28:44',
                'updated_at' => '2018-11-08 11:28:44',
            ),
            363 => 
            array (
                'id' => 864,
                'recipe_id' => '86',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2/3 cup all purpose flour',
                'created_at' => '2018-11-08 11:28:44',
                'updated_at' => '2018-11-08 11:28:44',
            ),
            364 => 
            array (
                'id' => 865,
                'recipe_id' => '86',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons baking powder',
                'created_at' => '2018-11-08 11:28:44',
                'updated_at' => '2018-11-08 11:28:44',
            ),
            365 => 
            array (
                'id' => 866,
                'recipe_id' => '86',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 11:28:44',
                'updated_at' => '2018-11-08 11:28:44',
            ),
            366 => 
            array (
                'id' => 867,
                'recipe_id' => '86',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 10-ounce package peanut butter chips',
                'created_at' => '2018-11-08 11:28:45',
                'updated_at' => '2018-11-08 11:28:45',
            ),
            367 => 
            array (
                'id' => 868,
                'recipe_id' => '86',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup chopped salted peanuts',
                'created_at' => '2018-11-08 11:28:45',
                'updated_at' => '2018-11-08 11:28:45',
            ),
            368 => 
            array (
                'id' => 869,
                'recipe_id' => '87',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup water',
                'created_at' => '2018-11-08 11:28:47',
                'updated_at' => '2018-11-08 11:28:47',
            ),
            369 => 
            array (
                'id' => 870,
                'recipe_id' => '87',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup sugar',
                'created_at' => '2018-11-08 11:28:47',
                'updated_at' => '2018-11-08 11:28:47',
            ),
            370 => 
            array (
                'id' => 871,
                'recipe_id' => '87',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup plus 2 tablespoons crème decassis (black-currant-flavored liqueur)',
                'created_at' => '2018-11-08 11:28:48',
                'updated_at' => '2018-11-08 11:28:48',
            ),
            371 => 
            array (
                'id' => 872,
                'recipe_id' => '87',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 12-ounce bag fresh cranberries',
                'created_at' => '2018-11-08 11:28:48',
                'updated_at' => '2018-11-08 11:28:48',
            ),
            372 => 
            array (
                'id' => 873,
                'recipe_id' => '87',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup dried cranberries',
                'created_at' => '2018-11-08 11:28:48',
                'updated_at' => '2018-11-08 11:28:48',
            ),
            373 => 
            array (
                'id' => 874,
                'recipe_id' => '87',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon ketchup',
                'created_at' => '2018-11-08 11:28:48',
                'updated_at' => '2018-11-08 11:28:48',
            ),
            374 => 
            array (
                'id' => 875,
                'recipe_id' => '88',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup (1 stick) butter, room temperature',
                'created_at' => '2018-11-08 11:28:51',
                'updated_at' => '2018-11-08 11:28:51',
            ),
            375 => 
            array (
                'id' => 876,
                'recipe_id' => '88',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons chopped fresh chives',
                'created_at' => '2018-11-08 11:28:51',
                'updated_at' => '2018-11-08 11:28:51',
            ),
            376 => 
            array (
                'id' => 877,
                'recipe_id' => '88',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon chopped fresh dill',
                'created_at' => '2018-11-08 11:28:51',
                'updated_at' => '2018-11-08 11:28:51',
            ),
            377 => 
            array (
                'id' => 878,
                'recipe_id' => '88',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon chopped fresh thyme',
                'created_at' => '2018-11-08 11:28:51',
                'updated_at' => '2018-11-08 11:28:51',
            ),
            378 => 
            array (
                'id' => 879,
                'recipe_id' => '88',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon fresh lemon juice',
                'created_at' => '2018-11-08 11:28:52',
                'updated_at' => '2018-11-08 11:28:52',
            ),
            379 => 
            array (
                'id' => 880,
                'recipe_id' => '88',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 4- to 5-ounce sole fillets',
                'created_at' => '2018-11-08 11:28:52',
                'updated_at' => '2018-11-08 11:28:52',
            ),
            380 => 
            array (
                'id' => 881,
                'recipe_id' => '88',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Olive oil',
                'created_at' => '2018-11-08 11:28:52',
                'updated_at' => '2018-11-08 11:28:52',
            ),
            381 => 
            array (
                'id' => 882,
                'recipe_id' => '88',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Fresh dill sprigs',
                'created_at' => '2018-11-08 11:28:52',
                'updated_at' => '2018-11-08 11:28:52',
            ),
            382 => 
            array (
                'id' => 883,
                'recipe_id' => '88',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Lemon wedges',
                'created_at' => '2018-11-08 11:28:52',
                'updated_at' => '2018-11-08 11:28:52',
            ),
            383 => 
            array (
                'id' => 884,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup (1 stick) butter, room temperature',
                'created_at' => '2018-11-08 11:28:54',
                'updated_at' => '2018-11-08 11:28:54',
            ),
            384 => 
            array (
                'id' => 885,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup chopped fresh thyme',
                'created_at' => '2018-11-08 11:28:54',
                'updated_at' => '2018-11-08 11:28:54',
            ),
            385 => 
            array (
                'id' => 886,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 11:28:54',
                'updated_at' => '2018-11-08 11:28:54',
            ),
            386 => 
            array (
                'id' => 887,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon ground black pepper',
                'created_at' => '2018-11-08 11:28:54',
                'updated_at' => '2018-11-08 11:28:54',
            ),
            387 => 
            array (
                'id' => 888,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon cayenne pepper',
                'created_at' => '2018-11-08 11:28:54',
                'updated_at' => '2018-11-08 11:28:54',
            ),
            388 => 
            array (
                'id' => 889,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 15- to 16-pound turkey; neck, gizzard, and heart reserved',
                'created_at' => '2018-11-08 11:28:55',
                'updated_at' => '2018-11-08 11:28:55',
            ),
            389 => 
            array (
                'id' => 890,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 fresh thyme sprigs (optional)',
                'created_at' => '2018-11-08 11:28:55',
                'updated_at' => '2018-11-08 11:28:55',
            ),
            390 => 
            array (
                'id' => 891,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 1/2 to 3 cups very coarsely chopped onions',
                'created_at' => '2018-11-08 11:28:55',
                'updated_at' => '2018-11-08 11:28:55',
            ),
            391 => 
            array (
                'id' => 892,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '5 cups (about) canned low-salt chicken broth',
                'created_at' => '2018-11-08 11:28:55',
                'updated_at' => '2018-11-08 11:28:55',
            ),
            392 => 
            array (
                'id' => 893,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons butter',
                'created_at' => '2018-11-08 11:28:55',
                'updated_at' => '2018-11-08 11:28:55',
            ),
            393 => 
            array (
                'id' => 894,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '5 large shallots, chopped',
                'created_at' => '2018-11-08 11:28:55',
                'updated_at' => '2018-11-08 11:28:55',
            ),
            394 => 
            array (
                'id' => 895,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons chopped fresh thyme',
                'created_at' => '2018-11-08 11:28:56',
                'updated_at' => '2018-11-08 11:28:56',
            ),
            395 => 
            array (
                'id' => 896,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon ground ginger',
                'created_at' => '2018-11-08 11:28:56',
                'updated_at' => '2018-11-08 11:28:56',
            ),
            396 => 
            array (
                'id' => 897,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon cayenne pepper',
                'created_at' => '2018-11-08 11:28:56',
                'updated_at' => '2018-11-08 11:28:56',
            ),
            397 => 
            array (
                'id' => 898,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 1/2 cups canned low-salt chicken broth',
                'created_at' => '2018-11-08 11:28:56',
                'updated_at' => '2018-11-08 11:28:56',
            ),
            398 => 
            array (
                'id' => 899,
                'recipe_id' => '89',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '9 gingersnap cookies, crumbled (3/4 cup; 2 ounces)',
                'created_at' => '2018-11-08 11:28:56',
                'updated_at' => '2018-11-08 11:28:56',
            ),
            399 => 
            array (
                'id' => 900,
                'recipe_id' => '90',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup minced shallot',
                'created_at' => '2018-11-08 11:28:59',
                'updated_at' => '2018-11-08 11:28:59',
            ),
            400 => 
            array (
                'id' => 901,
                'recipe_id' => '90',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon finely grated peeled fresh ginger',
                'created_at' => '2018-11-08 11:28:59',
                'updated_at' => '2018-11-08 11:28:59',
            ),
            401 => 
            array (
                'id' => 902,
                'recipe_id' => '90',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large garlic clove, minced',
                'created_at' => '2018-11-08 11:29:00',
                'updated_at' => '2018-11-08 11:29:00',
            ),
            402 => 
            array (
                'id' => 903,
                'recipe_id' => '90',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon salt',
                'created_at' => '2018-11-08 11:29:00',
                'updated_at' => '2018-11-08 11:29:00',
            ),
            403 => 
            array (
                'id' => 904,
                'recipe_id' => '90',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon black pepper',
                'created_at' => '2018-11-08 11:29:01',
                'updated_at' => '2018-11-08 11:29:01',
            ),
            404 => 
            array (
                'id' => 905,
                'recipe_id' => '90',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon dried hot red pepper flakes',
                'created_at' => '2018-11-08 11:29:01',
                'updated_at' => '2018-11-08 11:29:01',
            ),
            405 => 
            array (
                'id' => 906,
                'recipe_id' => '90',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons unsalted butter',
                'created_at' => '2018-11-08 11:29:01',
                'updated_at' => '2018-11-08 11:29:01',
            ),
            406 => 
            array (
                'id' => 907,
                'recipe_id' => '90',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon sugar',
                'created_at' => '2018-11-08 11:29:01',
                'updated_at' => '2018-11-08 11:29:01',
            ),
            407 => 
            array (
                'id' => 908,
                'recipe_id' => '90',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 pounds plum tomatoes, seeded and finely chopped',
                'created_at' => '2018-11-08 11:29:01',
                'updated_at' => '2018-11-08 11:29:01',
            ),
            408 => 
            array (
                'id' => 909,
                'recipe_id' => '90',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 tablespoons fresh lime juice',
                'created_at' => '2018-11-08 11:29:01',
                'updated_at' => '2018-11-08 11:29:01',
            ),
            409 => 
            array (
                'id' => 910,
                'recipe_id' => '90',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons finely chopped fresh cilantro',
                'created_at' => '2018-11-08 11:29:01',
                'updated_at' => '2018-11-08 11:29:01',
            ),
            410 => 
            array (
                'id' => 911,
                'recipe_id' => '91',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 cups ketchup',
                'created_at' => '2018-11-08 11:29:03',
                'updated_at' => '2018-11-08 11:29:03',
            ),
            411 => 
            array (
                'id' => 912,
                'recipe_id' => '91',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 cups orange juice',
                'created_at' => '2018-11-08 11:29:04',
                'updated_at' => '2018-11-08 11:29:04',
            ),
            412 => 
            array (
                'id' => 913,
                'recipe_id' => '91',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups chopped fresh cilantro',
                'created_at' => '2018-11-08 11:29:04',
                'updated_at' => '2018-11-08 11:29:04',
            ),
            413 => 
            array (
                'id' => 914,
                'recipe_id' => '91',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup chili-garlic sauce',
                'created_at' => '2018-11-08 11:29:04',
                'updated_at' => '2018-11-08 11:29:04',
            ),
            414 => 
            array (
                'id' => 915,
                'recipe_id' => '91',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup soy sauce',
                'created_at' => '2018-11-08 11:29:04',
                'updated_at' => '2018-11-08 11:29:04',
            ),
            415 => 
            array (
                'id' => 916,
                'recipe_id' => '91',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons ground cumin',
                'created_at' => '2018-11-08 11:29:04',
                'updated_at' => '2018-11-08 11:29:04',
            ),
            416 => 
            array (
                'id' => 917,
                'recipe_id' => '91',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '10 chicken thighs with bone and skin',
                'created_at' => '2018-11-08 11:29:04',
                'updated_at' => '2018-11-08 11:29:04',
            ),
            417 => 
            array (
                'id' => 918,
                'recipe_id' => '91',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '10 1- to 1 1/4-inch-thick center-cut pork chops (each 12 ounces)',
                'created_at' => '2018-11-08 11:29:04',
                'updated_at' => '2018-11-08 11:29:04',
            ),
            418 => 
            array (
                'id' => 919,
                'recipe_id' => '92',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Nonstick vegetable oil spray',
                'created_at' => '2018-11-08 11:29:07',
                'updated_at' => '2018-11-08 11:29:07',
            ),
            419 => 
            array (
                'id' => 920,
                'recipe_id' => '92',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup dry white wine',
                'created_at' => '2018-11-08 11:29:07',
                'updated_at' => '2018-11-08 11:29:07',
            ),
            420 => 
            array (
                'id' => 921,
                'recipe_id' => '92',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 teaspoons cornstarch',
                'created_at' => '2018-11-08 11:29:07',
                'updated_at' => '2018-11-08 11:29:07',
            ),
            421 => 
            array (
                'id' => 922,
                'recipe_id' => '92',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup all purpose flour',
                'created_at' => '2018-11-08 11:29:07',
                'updated_at' => '2018-11-08 11:29:07',
            ),
            422 => 
            array (
                'id' => 923,
                'recipe_id' => '92',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1/2 cups low-fat (1%) milk',
                'created_at' => '2018-11-08 11:29:08',
                'updated_at' => '2018-11-08 11:29:08',
            ),
            423 => 
            array (
                'id' => 924,
                'recipe_id' => '92',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup canned low-salt chicken broth',
                'created_at' => '2018-11-08 11:29:08',
                'updated_at' => '2018-11-08 11:29:08',
            ),
            424 => 
            array (
                'id' => 925,
                'recipe_id' => '92',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons minced fresh thyme or 1 teaspoon dried',
                'created_at' => '2018-11-08 11:29:08',
                'updated_at' => '2018-11-08 11:29:08',
            ),
            425 => 
            array (
                'id' => 926,
                'recipe_id' => '92',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 tablespoons Neufchâtel cheese (reduced-fat cream cheese)',
                'created_at' => '2018-11-08 11:29:08',
                'updated_at' => '2018-11-08 11:29:08',
            ),
            426 => 
            array (
                'id' => 927,
                'recipe_id' => '92',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 6-ounce can solid white tuna packed in water, undrained',
                'created_at' => '2018-11-08 11:29:08',
                'updated_at' => '2018-11-08 11:29:08',
            ),
            427 => 
            array (
                'id' => 928,
                'recipe_id' => '92',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 6-ounce can chunk light tuna packed in water, undrained',
                'created_at' => '2018-11-08 11:29:08',
                'updated_at' => '2018-11-08 11:29:08',
            ),
            428 => 
            array (
                'id' => 929,
                'recipe_id' => '92',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup frozen petite peas, unthawed',
                'created_at' => '2018-11-08 11:29:09',
                'updated_at' => '2018-11-08 11:29:09',
            ),
            429 => 
            array (
                'id' => 930,
                'recipe_id' => '92',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '8 ounces farfalle (bow-tie) pasta',
                'created_at' => '2018-11-08 11:29:09',
                'updated_at' => '2018-11-08 11:29:09',
            ),
            430 => 
            array (
                'id' => 931,
                'recipe_id' => '92',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup crushed baked potato chips (about 1 ounce)',
                'created_at' => '2018-11-08 11:29:09',
                'updated_at' => '2018-11-08 11:29:09',
            ),
            431 => 
            array (
                'id' => 932,
                'recipe_id' => '93',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 red bell pepper',
                'created_at' => '2018-11-08 11:29:11',
                'updated_at' => '2018-11-08 11:29:11',
            ),
            432 => 
            array (
                'id' => 933,
                'recipe_id' => '93',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 fresh poblano chili',
                'created_at' => '2018-11-08 11:29:11',
                'updated_at' => '2018-11-08 11:29:11',
            ),
            433 => 
            array (
                'id' => 934,
                'recipe_id' => '93',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup sugar',
                'created_at' => '2018-11-08 11:29:11',
                'updated_at' => '2018-11-08 11:29:11',
            ),
            434 => 
            array (
                'id' => 935,
                'recipe_id' => '93',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup orange juice',
                'created_at' => '2018-11-08 11:29:12',
                'updated_at' => '2018-11-08 11:29:12',
            ),
            435 => 
            array (
                'id' => 936,
                'recipe_id' => '93',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups cranberries, coarsely chopped',
                'created_at' => '2018-11-08 11:29:12',
                'updated_at' => '2018-11-08 11:29:12',
            ),
            436 => 
            array (
                'id' => 937,
                'recipe_id' => '93',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup chopped toasted hazelnuts',
                'created_at' => '2018-11-08 11:29:12',
                'updated_at' => '2018-11-08 11:29:12',
            ),
            437 => 
            array (
                'id' => 938,
                'recipe_id' => '93',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons grated orange peel',
                'created_at' => '2018-11-08 11:29:12',
                'updated_at' => '2018-11-08 11:29:12',
            ),
            438 => 
            array (
                'id' => 939,
                'recipe_id' => '93',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup chopped fresh cilantro',
                'created_at' => '2018-11-08 11:29:13',
                'updated_at' => '2018-11-08 11:29:13',
            ),
            439 => 
            array (
                'id' => 940,
                'recipe_id' => '94',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 stick (1/2 cup) unsalted butter, cut into pieces',
                'created_at' => '2018-11-08 11:29:15',
                'updated_at' => '2018-11-08 11:29:15',
            ),
            440 => 
            array (
                'id' => 941,
                'recipe_id' => '94',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 ounces unsweetened chocolate, chopped',
                'created_at' => '2018-11-08 11:29:15',
                'updated_at' => '2018-11-08 11:29:15',
            ),
            441 => 
            array (
                'id' => 942,
                'recipe_id' => '94',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 large eggs',
                'created_at' => '2018-11-08 11:29:15',
                'updated_at' => '2018-11-08 11:29:15',
            ),
            442 => 
            array (
                'id' => 943,
                'recipe_id' => '94',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 cups sugar',
                'created_at' => '2018-11-08 11:29:15',
                'updated_at' => '2018-11-08 11:29:15',
            ),
            443 => 
            array (
                'id' => 944,
                'recipe_id' => '94',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon vanilla',
                'created_at' => '2018-11-08 11:29:15',
                'updated_at' => '2018-11-08 11:29:15',
            ),
            444 => 
            array (
                'id' => 945,
                'recipe_id' => '94',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons instant espresso powder',
                'created_at' => '2018-11-08 11:29:16',
                'updated_at' => '2018-11-08 11:29:16',
            ),
            445 => 
            array (
                'id' => 946,
                'recipe_id' => '94',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons Kahlúa or other coffee-flavored liqueur',
                'created_at' => '2018-11-08 11:29:16',
                'updated_at' => '2018-11-08 11:29:16',
            ),
            446 => 
            array (
                'id' => 947,
                'recipe_id' => '94',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup all-purpose flour',
                'created_at' => '2018-11-08 11:29:16',
                'updated_at' => '2018-11-08 11:29:16',
            ),
            447 => 
            array (
                'id' => 948,
                'recipe_id' => '94',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon baking powder',
                'created_at' => '2018-11-08 11:29:16',
                'updated_at' => '2018-11-08 11:29:16',
            ),
            448 => 
            array (
                'id' => 949,
                'recipe_id' => '94',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 11:29:16',
                'updated_at' => '2018-11-08 11:29:16',
            ),
            449 => 
            array (
                'id' => 950,
                'recipe_id' => '94',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '25 espresso coffee beans',
                'created_at' => '2018-11-08 11:29:16',
                'updated_at' => '2018-11-08 11:29:16',
            ),
            450 => 
            array (
                'id' => 951,
                'recipe_id' => '95',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon coarse kosher salt',
                'created_at' => '2018-11-08 11:29:19',
                'updated_at' => '2018-11-08 11:29:19',
            ),
            451 => 
            array (
                'id' => 952,
                'recipe_id' => '95',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon Hungarian sweet paprika',
                'created_at' => '2018-11-08 11:29:19',
                'updated_at' => '2018-11-08 11:29:19',
            ),
            452 => 
            array (
                'id' => 953,
                'recipe_id' => '95',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon garlic powder',
                'created_at' => '2018-11-08 11:29:19',
                'updated_at' => '2018-11-08 11:29:19',
            ),
            453 => 
            array (
                'id' => 954,
                'recipe_id' => '95',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon coarsely ground black pepper',
                'created_at' => '2018-11-08 11:29:19',
                'updated_at' => '2018-11-08 11:29:19',
            ),
            454 => 
            array (
                'id' => 955,
                'recipe_id' => '95',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon dried ground thyme',
                'created_at' => '2018-11-08 11:29:19',
                'updated_at' => '2018-11-08 11:29:19',
            ),
            455 => 
            array (
                'id' => 956,
                'recipe_id' => '95',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon finely ground coffee beans',
                'created_at' => '2018-11-08 11:29:20',
                'updated_at' => '2018-11-08 11:29:20',
            ),
            456 => 
            array (
                'id' => 957,
                'recipe_id' => '95',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '4 1 1/4- to 1 1/2-inch-thick bone-in beef rib steaks (each weighing 12 to 16 ounces)',
                'created_at' => '2018-11-08 11:29:20',
                'updated_at' => '2018-11-08 11:29:20',
            ),
            457 => 
            array (
                'id' => 958,
                'recipe_id' => '95',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 2.2-pound bag instant-light mesquite chunks',
                'created_at' => '2018-11-08 11:29:20',
                'updated_at' => '2018-11-08 11:29:20',
            ),
            458 => 
            array (
                'id' => 959,
                'recipe_id' => '95',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup mesquite or hickory wood smoke chips, soaked in cold water at least 30 minutes',
                'created_at' => '2018-11-08 11:29:20',
                'updated_at' => '2018-11-08 11:29:20',
            ),
            459 => 
            array (
                'id' => 960,
                'recipe_id' => '96',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '5 pounds sweet potatoes',
                'created_at' => '2018-11-08 11:29:22',
                'updated_at' => '2018-11-08 11:29:22',
            ),
            460 => 
            array (
                'id' => 961,
                'recipe_id' => '96',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup fresh orange juice',
                'created_at' => '2018-11-08 11:29:22',
                'updated_at' => '2018-11-08 11:29:22',
            ),
            461 => 
            array (
                'id' => 962,
                'recipe_id' => '96',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons unsalted butter, cut into bits',
                'created_at' => '2018-11-08 11:29:23',
                'updated_at' => '2018-11-08 11:29:23',
            ),
            462 => 
            array (
                'id' => 963,
                'recipe_id' => '96',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 tablespoons sugar',
                'created_at' => '2018-11-08 11:29:23',
                'updated_at' => '2018-11-08 11:29:23',
            ),
            463 => 
            array (
                'id' => 964,
                'recipe_id' => '98',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon olive oil',
                'created_at' => '2018-11-08 11:29:31',
                'updated_at' => '2018-11-08 11:29:31',
            ),
            464 => 
            array (
                'id' => 965,
                'recipe_id' => '98',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup 1/2-inch cubes peeled small red-skinned new potatoes',
                'created_at' => '2018-11-08 11:29:31',
                'updated_at' => '2018-11-08 11:29:31',
            ),
            465 => 
            array (
                'id' => 966,
                'recipe_id' => '98',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup 1/8-inch cubes andouille sausage (about 2 ounces)',
                'created_at' => '2018-11-08 11:29:31',
                'updated_at' => '2018-11-08 11:29:31',
            ),
            466 => 
            array (
                'id' => 967,
                'recipe_id' => '98',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup chopped red bell pepper',
                'created_at' => '2018-11-08 11:29:31',
                'updated_at' => '2018-11-08 11:29:31',
            ),
            467 => 
            array (
                'id' => 968,
                'recipe_id' => '98',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup chopped onion',
                'created_at' => '2018-11-08 11:29:31',
                'updated_at' => '2018-11-08 11:29:31',
            ),
            468 => 
            array (
                'id' => 969,
                'recipe_id' => '98',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons minced green onion',
                'created_at' => '2018-11-08 11:29:32',
                'updated_at' => '2018-11-08 11:29:32',
            ),
            469 => 
            array (
                'id' => 970,
                'recipe_id' => '98',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon ground cumin',
                'created_at' => '2018-11-08 11:29:32',
                'updated_at' => '2018-11-08 11:29:32',
            ),
            470 => 
            array (
                'id' => 971,
                'recipe_id' => '98',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 eggs, lightly beaten',
                'created_at' => '2018-11-08 11:29:32',
                'updated_at' => '2018-11-08 11:29:32',
            ),
            471 => 
            array (
                'id' => 972,
                'recipe_id' => '98',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 11:29:32',
                'updated_at' => '2018-11-08 11:29:32',
            ),
            472 => 
            array (
                'id' => 973,
                'recipe_id' => '98',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon ground black pepper',
                'created_at' => '2018-11-08 11:29:32',
                'updated_at' => '2018-11-08 11:29:32',
            ),
            473 => 
            array (
                'id' => 974,
                'recipe_id' => '98',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon butter',
                'created_at' => '2018-11-08 11:29:33',
                'updated_at' => '2018-11-08 11:29:33',
            ),
            474 => 
            array (
                'id' => 975,
                'recipe_id' => '99',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 large Golden Delicious apples (about 3 1/2 pounds)',
                'created_at' => '2018-11-08 11:29:34',
                'updated_at' => '2018-11-08 11:29:34',
            ),
            475 => 
            array (
                'id' => 976,
                'recipe_id' => '99',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2/3 cup plus 6 tablespoons coarsely chopped pecans',
                'created_at' => '2018-11-08 11:29:35',
                'updated_at' => '2018-11-08 11:29:35',
            ),
            476 => 
            array (
                'id' => 977,
                'recipe_id' => '99',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup golden raisins',
                'created_at' => '2018-11-08 11:29:35',
                'updated_at' => '2018-11-08 11:29:35',
            ),
            477 => 
            array (
                'id' => 978,
                'recipe_id' => '99',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup sweetened flaked coconut',
                'created_at' => '2018-11-08 11:29:35',
                'updated_at' => '2018-11-08 11:29:35',
            ),
            478 => 
            array (
                'id' => 979,
                'recipe_id' => '99',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons pure maple syrup',
                'created_at' => '2018-11-08 11:29:35',
                'updated_at' => '2018-11-08 11:29:35',
            ),
            479 => 
            array (
                'id' => 980,
                'recipe_id' => '99',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon grated lemon peel',
                'created_at' => '2018-11-08 11:29:35',
                'updated_at' => '2018-11-08 11:29:35',
            ),
            480 => 
            array (
                'id' => 981,
                'recipe_id' => '99',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon ground cinnamon',
                'created_at' => '2018-11-08 11:29:35',
                'updated_at' => '2018-11-08 11:29:35',
            ),
            481 => 
            array (
                'id' => 982,
                'recipe_id' => '99',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon ground nutmeg',
                'created_at' => '2018-11-08 11:29:36',
                'updated_at' => '2018-11-08 11:29:36',
            ),
            482 => 
            array (
                'id' => 983,
                'recipe_id' => '99',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 tablespoons peach or apricot preserves',
                'created_at' => '2018-11-08 11:29:36',
                'updated_at' => '2018-11-08 11:29:36',
            ),
            483 => 
            array (
                'id' => 984,
                'recipe_id' => '99',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup unfiltered apple juice or cider',
                'created_at' => '2018-11-08 11:29:36',
                'updated_at' => '2018-11-08 11:29:36',
            ),
            484 => 
            array (
                'id' => 985,
                'recipe_id' => '99',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 tablespoons (1/4 stick) unsalted butter',
                'created_at' => '2018-11-08 11:29:36',
                'updated_at' => '2018-11-08 11:29:36',
            ),
            485 => 
            array (
                'id' => 986,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 1/4 cups whipping cream',
                'created_at' => '2018-11-08 11:29:38',
                'updated_at' => '2018-11-08 11:29:38',
            ),
            486 => 
            array (
                'id' => 987,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup whole milk',
                'created_at' => '2018-11-08 11:29:38',
                'updated_at' => '2018-11-08 11:29:38',
            ),
            487 => 
            array (
                'id' => 988,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup malted milk powder',
                'created_at' => '2018-11-08 11:29:38',
                'updated_at' => '2018-11-08 11:29:38',
            ),
            488 => 
            array (
                'id' => 989,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 vanilla bean, split lengthwise',
                'created_at' => '2018-11-08 11:29:38',
                'updated_at' => '2018-11-08 11:29:38',
            ),
            489 => 
            array (
                'id' => 990,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '5 large egg yolks',
                'created_at' => '2018-11-08 11:29:38',
                'updated_at' => '2018-11-08 11:29:38',
            ),
            490 => 
            array (
                'id' => 991,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup sugar',
                'created_at' => '2018-11-08 11:29:38',
                'updated_at' => '2018-11-08 11:29:38',
            ),
            491 => 
            array (
                'id' => 992,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons brandy',
                'created_at' => '2018-11-08 11:29:39',
                'updated_at' => '2018-11-08 11:29:39',
            ),
            492 => 
            array (
                'id' => 993,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup unsweetened cocoa powder',
                'created_at' => '2018-11-08 11:29:39',
                'updated_at' => '2018-11-08 11:29:39',
            ),
            493 => 
            array (
                'id' => 994,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup sugar',
                'created_at' => '2018-11-08 11:29:39',
                'updated_at' => '2018-11-08 11:29:39',
            ),
            494 => 
            array (
                'id' => 995,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup water',
                'created_at' => '2018-11-08 11:29:39',
                'updated_at' => '2018-11-08 11:29:39',
            ),
            495 => 
            array (
                'id' => 996,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon instant espresso powder or instant coffee powder',
                'created_at' => '2018-11-08 11:29:39',
                'updated_at' => '2018-11-08 11:29:39',
            ),
            496 => 
            array (
                'id' => 997,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '10 ounces bittersweet or semisweet chocolate, chopped',
                'created_at' => '2018-11-08 11:29:39',
                'updated_at' => '2018-11-08 11:29:39',
            ),
            497 => 
            array (
                'id' => 998,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup bourbon',
                'created_at' => '2018-11-08 11:29:40',
                'updated_at' => '2018-11-08 11:29:40',
            ),
            498 => 
            array (
                'id' => 999,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups Merlot',
                'created_at' => '2018-11-08 11:29:40',
                'updated_at' => '2018-11-08 11:29:40',
            ),
            499 => 
            array (
                'id' => 1000,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup sugar',
                'created_at' => '2018-11-08 11:29:40',
                'updated_at' => '2018-11-08 11:29:40',
            ),
        ));
        \DB::table('recipe_ingridents')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup dried tart cherries',
                'created_at' => '2018-11-08 11:29:40',
                'updated_at' => '2018-11-08 11:29:40',
            ),
            1 => 
            array (
                'id' => 1002,
                'recipe_id' => '100',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Sweetened whipped cream',
                'created_at' => '2018-11-08 11:29:40',
                'updated_at' => '2018-11-08 11:29:40',
            ),
            2 => 
            array (
                'id' => 1003,
                'recipe_id' => '101',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 cups all-purpose flour',
                'created_at' => '2018-11-08 11:41:10',
                'updated_at' => '2018-11-08 11:41:10',
            ),
            3 => 
            array (
                'id' => 1004,
                'recipe_id' => '101',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup plus 2 tablespoons sugar',
                'created_at' => '2018-11-08 11:41:10',
                'updated_at' => '2018-11-08 11:41:10',
            ),
            4 => 
            array (
                'id' => 1005,
                'recipe_id' => '101',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons baking powder',
                'created_at' => '2018-11-08 11:41:10',
                'updated_at' => '2018-11-08 11:41:10',
            ),
            5 => 
            array (
                'id' => 1006,
                'recipe_id' => '101',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon baking soda',
                'created_at' => '2018-11-08 11:41:10',
                'updated_at' => '2018-11-08 11:41:10',
            ),
            6 => 
            array (
                'id' => 1007,
                'recipe_id' => '101',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon salt',
                'created_at' => '2018-11-08 11:41:10',
                'updated_at' => '2018-11-08 11:41:10',
            ),
            7 => 
            array (
                'id' => 1008,
                'recipe_id' => '101',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon cinnamon',
                'created_at' => '2018-11-08 11:41:11',
                'updated_at' => '2018-11-08 11:41:11',
            ),
            8 => 
            array (
                'id' => 1009,
                'recipe_id' => '101',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Rounded 1/4 teaspoon freshly grated nutmeg',
                'created_at' => '2018-11-08 11:41:11',
                'updated_at' => '2018-11-08 11:41:11',
            ),
            9 => 
            array (
                'id' => 1010,
                'recipe_id' => '101',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1/2 sticks (3/4 cup) plus 2 tablespoons cold unsalted butter, cut into 1/2-inch cubes',
                'created_at' => '2018-11-08 11:41:11',
                'updated_at' => '2018-11-08 11:41:11',
            ),
            10 => 
            array (
                'id' => 1011,
                'recipe_id' => '101',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 large eggs, lightly beaten',
                'created_at' => '2018-11-08 11:41:11',
                'updated_at' => '2018-11-08 11:41:11',
            ),
            11 => 
            array (
                'id' => 1012,
                'recipe_id' => '101',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup sour cream',
                'created_at' => '2018-11-08 11:41:11',
                'updated_at' => '2018-11-08 11:41:11',
            ),
            12 => 
            array (
                'id' => 1013,
                'recipe_id' => '101',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons vanilla',
                'created_at' => '2018-11-08 11:41:11',
                'updated_at' => '2018-11-08 11:41:11',
            ),
            13 => 
            array (
                'id' => 1014,
                'recipe_id' => '101',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 cups fresh blueberries (15 ounces)',
                'created_at' => '2018-11-08 11:41:12',
                'updated_at' => '2018-11-08 11:41:12',
            ),
            14 => 
            array (
                'id' => 1015,
                'recipe_id' => '102',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 1/4 cups finely diced, peeled eggplant',
                'created_at' => '2018-11-08 11:41:13',
                'updated_at' => '2018-11-08 11:41:13',
            ),
            15 => 
            array (
                'id' => 1016,
                'recipe_id' => '102',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon coarse salt plus more to taste',
                'created_at' => '2018-11-08 11:41:14',
                'updated_at' => '2018-11-08 11:41:14',
            ),
            16 => 
            array (
                'id' => 1017,
                'recipe_id' => '102',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup plus 2 tablespoons safflower oil',
                'created_at' => '2018-11-08 11:41:14',
                'updated_at' => '2018-11-08 11:41:14',
            ),
            17 => 
            array (
                'id' => 1018,
                'recipe_id' => '102',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons minced shallots',
                'created_at' => '2018-11-08 11:41:14',
                'updated_at' => '2018-11-08 11:41:14',
            ),
            18 => 
            array (
                'id' => 1019,
                'recipe_id' => '102',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 large Idaho potatoes',
                'created_at' => '2018-11-08 11:41:14',
                'updated_at' => '2018-11-08 11:41:14',
            ),
            19 => 
            array (
                'id' => 1020,
                'recipe_id' => '102',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Pepper',
                'created_at' => '2018-11-08 11:41:15',
                'updated_at' => '2018-11-08 11:41:15',
            ),
            20 => 
            array (
                'id' => 1021,
                'recipe_id' => '102',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup (1/2 stick) unsalted butter',
                'created_at' => '2018-11-08 11:41:15',
                'updated_at' => '2018-11-08 11:41:15',
            ),
            21 => 
            array (
                'id' => 1022,
                'recipe_id' => '103',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1/2 pounds small red-skinned potatoes (about 12), quartered',
                'created_at' => '2018-11-08 11:41:16',
                'updated_at' => '2018-11-08 11:41:16',
            ),
            22 => 
            array (
                'id' => 1023,
                'recipe_id' => '103',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons olive oil',
                'created_at' => '2018-11-08 11:41:17',
                'updated_at' => '2018-11-08 11:41:17',
            ),
            23 => 
            array (
                'id' => 1024,
                'recipe_id' => '103',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon salt',
                'created_at' => '2018-11-08 11:41:17',
                'updated_at' => '2018-11-08 11:41:17',
            ),
            24 => 
            array (
                'id' => 1025,
                'recipe_id' => '103',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon ground black pepper',
                'created_at' => '2018-11-08 11:41:17',
                'updated_at' => '2018-11-08 11:41:17',
            ),
            25 => 
            array (
                'id' => 1026,
                'recipe_id' => '103',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons fresh lemon juice',
                'created_at' => '2018-11-08 11:41:17',
                'updated_at' => '2018-11-08 11:41:17',
            ),
            26 => 
            array (
                'id' => 1027,
                'recipe_id' => '103',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon grated lemon peel',
                'created_at' => '2018-11-08 11:41:17',
                'updated_at' => '2018-11-08 11:41:17',
            ),
            27 => 
            array (
                'id' => 1028,
                'recipe_id' => '104',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup extra-virgin olive oil',
                'created_at' => '2018-11-08 11:41:19',
                'updated_at' => '2018-11-08 11:41:19',
            ),
            28 => 
            array (
                'id' => 1029,
                'recipe_id' => '104',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup fresh lemon juice',
                'created_at' => '2018-11-08 11:41:19',
                'updated_at' => '2018-11-08 11:41:19',
            ),
            29 => 
            array (
                'id' => 1030,
                'recipe_id' => '104',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 cloves of garlic, finely minced with salt',
                'created_at' => '2018-11-08 11:41:19',
                'updated_at' => '2018-11-08 11:41:19',
            ),
            30 => 
            array (
                'id' => 1031,
                'recipe_id' => '104',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon finely minced fresh rosemary',
                'created_at' => '2018-11-08 11:41:19',
                'updated_at' => '2018-11-08 11:41:19',
            ),
            31 => 
            array (
                'id' => 1032,
                'recipe_id' => '104',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Freshly ground black pepper, to taste',
                'created_at' => '2018-11-08 11:41:20',
                'updated_at' => '2018-11-08 11:41:20',
            ),
            32 => 
            array (
                'id' => 1033,
                'recipe_id' => '104',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '64 large shrimp, peeled and deveined, tails left on',
                'created_at' => '2018-11-08 11:41:20',
                'updated_at' => '2018-11-08 11:41:20',
            ),
            33 => 
            array (
                'id' => 1034,
                'recipe_id' => '104',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 lemons, halved crosswise, for serving',
                'created_at' => '2018-11-08 11:41:20',
                'updated_at' => '2018-11-08 11:41:20',
            ),
            34 => 
            array (
                'id' => 1035,
                'recipe_id' => '104',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '8 large rosemary sprigs, for garnish',
                'created_at' => '2018-11-08 11:41:20',
                'updated_at' => '2018-11-08 11:41:20',
            ),
            35 => 
            array (
                'id' => 1036,
                'recipe_id' => '104',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Lemon Garlic Mayonnaise , for serving',
                'created_at' => '2018-11-08 11:41:20',
                'updated_at' => '2018-11-08 11:41:20',
            ),
            36 => 
            array (
                'id' => 1037,
                'recipe_id' => '105',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '8 ounces turkey cutlets or breast slices, cut crosswise into',
                'created_at' => '2018-11-08 11:41:23',
                'updated_at' => '2018-11-08 11:41:23',
            ),
            37 => 
            array (
                'id' => 1038,
                'recipe_id' => '105',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons dried tarragon',
                'created_at' => '2018-11-08 11:41:23',
                'updated_at' => '2018-11-08 11:41:23',
            ),
            38 => 
            array (
                'id' => 1039,
                'recipe_id' => '105',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons olive oil',
                'created_at' => '2018-11-08 11:41:24',
                'updated_at' => '2018-11-08 11:41:24',
            ),
            39 => 
            array (
                'id' => 1040,
                'recipe_id' => '105',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 cup thinly sliced leeks (white and pale green parts only)',
                'created_at' => '2018-11-08 11:41:24',
                'updated_at' => '2018-11-08 11:41:24',
            ),
            40 => 
            array (
                'id' => 1041,
                'recipe_id' => '105',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3/4 cup peeled baby carrots (about 3 ounces), halved lengthwise',
                'created_at' => '2018-11-08 11:41:24',
                'updated_at' => '2018-11-08 11:41:24',
            ),
            41 => 
            array (
                'id' => 1042,
                'recipe_id' => '105',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon all purpose flour',
                'created_at' => '2018-11-08 11:41:24',
                'updated_at' => '2018-11-08 11:41:24',
            ),
            42 => 
            array (
                'id' => 1043,
                'recipe_id' => '105',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 cups canned low-salt chicken broth',
                'created_at' => '2018-11-08 11:41:24',
                'updated_at' => '2018-11-08 11:41:24',
            ),
            43 => 
            array (
                'id' => 1044,
                'recipe_id' => '105',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup dry white wine',
                'created_at' => '2018-11-08 11:41:24',
                'updated_at' => '2018-11-08 11:41:24',
            ),
            44 => 
            array (
                'id' => 1045,
                'recipe_id' => '105',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup frozen petite peas',
                'created_at' => '2018-11-08 11:41:25',
                'updated_at' => '2018-11-08 11:41:25',
            ),
            45 => 
            array (
                'id' => 1046,
                'recipe_id' => '106',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 1/2-pint baskets fresh blueberries, rinsed, drained',
                'created_at' => '2018-11-08 11:41:26',
                'updated_at' => '2018-11-08 11:41:26',
            ),
            46 => 
            array (
                'id' => 1047,
                'recipe_id' => '106',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 8-ounce container blueberry yogurt',
                'created_at' => '2018-11-08 11:41:26',
                'updated_at' => '2018-11-08 11:41:26',
            ),
            47 => 
            array (
                'id' => 1048,
                'recipe_id' => '106',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup water',
                'created_at' => '2018-11-08 11:41:27',
                'updated_at' => '2018-11-08 11:41:27',
            ),
            48 => 
            array (
                'id' => 1049,
                'recipe_id' => '106',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup honey',
                'created_at' => '2018-11-08 11:41:27',
                'updated_at' => '2018-11-08 11:41:27',
            ),
            49 => 
            array (
                'id' => 1050,
                'recipe_id' => '106',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons sugar',
                'created_at' => '2018-11-08 11:41:27',
                'updated_at' => '2018-11-08 11:41:27',
            ),
            50 => 
            array (
                'id' => 1051,
                'recipe_id' => '107',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup plus 2 tablespoons olive oil (preferably extra-virgin)',
                'created_at' => '2018-11-08 11:41:30',
                'updated_at' => '2018-11-08 11:41:30',
            ),
            51 => 
            array (
                'id' => 1052,
                'recipe_id' => '107',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '9 garlic cloves, minced',
                'created_at' => '2018-11-08 11:41:30',
                'updated_at' => '2018-11-08 11:41:30',
            ),
            52 => 
            array (
                'id' => 1053,
                'recipe_id' => '107',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '8 ounces crusty white sourdough bread, cut into 1-inch pieces',
                'created_at' => '2018-11-08 11:41:30',
                'updated_at' => '2018-11-08 11:41:30',
            ),
            53 => 
            array (
                'id' => 1054,
                'recipe_id' => '107',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 large onions, finely chopped',
                'created_at' => '2018-11-08 11:41:30',
                'updated_at' => '2018-11-08 11:41:30',
            ),
            54 => 
            array (
                'id' => 1055,
                'recipe_id' => '107',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '8 cups chicken stock or canned low-salt chicken broth',
                'created_at' => '2018-11-08 11:41:30',
                'updated_at' => '2018-11-08 11:41:30',
            ),
            55 => 
            array (
                'id' => 1056,
                'recipe_id' => '107',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 28-ounce cans peeled plum tomatoes, drained, crushed',
                'created_at' => '2018-11-08 11:41:31',
                'updated_at' => '2018-11-08 11:41:31',
            ),
            56 => 
            array (
                'id' => 1057,
                'recipe_id' => '107',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup freshly grated Parmesan cheese',
                'created_at' => '2018-11-08 11:41:31',
                'updated_at' => '2018-11-08 11:41:31',
            ),
            57 => 
            array (
                'id' => 1058,
                'recipe_id' => '107',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup thinly sliced fresh basil (for garnish)',
                'created_at' => '2018-11-08 11:41:31',
                'updated_at' => '2018-11-08 11:41:31',
            ),
            58 => 
            array (
                'id' => 1059,
                'recipe_id' => '107',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup Parmesan cheese shavings',
                'created_at' => '2018-11-08 11:41:31',
                'updated_at' => '2018-11-08 11:41:31',
            ),
            59 => 
            array (
                'id' => 1060,
                'recipe_id' => '108',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup red wine vinegar or aged sherry vinegar',
                'created_at' => '2018-11-08 11:41:33',
                'updated_at' => '2018-11-08 11:41:33',
            ),
            60 => 
            array (
                'id' => 1061,
                'recipe_id' => '108',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons balsamic vinegar',
                'created_at' => '2018-11-08 11:41:33',
                'updated_at' => '2018-11-08 11:41:33',
            ),
            61 => 
            array (
                'id' => 1062,
                'recipe_id' => '108',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon coarsely chopped shallot',
                'created_at' => '2018-11-08 11:41:34',
                'updated_at' => '2018-11-08 11:41:34',
            ),
            62 => 
            array (
                'id' => 1063,
                'recipe_id' => '108',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons Dijon mustard',
                'created_at' => '2018-11-08 11:41:34',
                'updated_at' => '2018-11-08 11:41:34',
            ),
            63 => 
            array (
                'id' => 1064,
                'recipe_id' => '108',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 11:41:34',
                'updated_at' => '2018-11-08 11:41:34',
            ),
            64 => 
            array (
                'id' => 1065,
                'recipe_id' => '108',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Freshly ground black pepper to taste',
                'created_at' => '2018-11-08 11:41:34',
                'updated_at' => '2018-11-08 11:41:34',
            ),
            65 => 
            array (
                'id' => 1066,
                'recipe_id' => '108',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup mild extra-virgin olive oil',
                'created_at' => '2018-11-08 11:41:34',
                'updated_at' => '2018-11-08 11:41:34',
            ),
            66 => 
            array (
                'id' => 1067,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 medium-sized carrots, peeled',
                'created_at' => '2018-11-08 11:41:35',
                'updated_at' => '2018-11-08 11:41:35',
            ),
            67 => 
            array (
                'id' => 1068,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups all-purpose flour',
                'created_at' => '2018-11-08 11:41:36',
                'updated_at' => '2018-11-08 11:41:36',
            ),
            68 => 
            array (
                'id' => 1069,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups sugar',
                'created_at' => '2018-11-08 11:41:36',
                'updated_at' => '2018-11-08 11:41:36',
            ),
            69 => 
            array (
                'id' => 1070,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons baking soda',
                'created_at' => '2018-11-08 11:41:36',
                'updated_at' => '2018-11-08 11:41:36',
            ),
            70 => 
            array (
                'id' => 1071,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons cinnamon',
                'created_at' => '2018-11-08 11:41:36',
                'updated_at' => '2018-11-08 11:41:36',
            ),
            71 => 
            array (
                'id' => 1072,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup corn oil',
                'created_at' => '2018-11-08 11:41:36',
                'updated_at' => '2018-11-08 11:41:36',
            ),
            72 => 
            array (
                'id' => 1073,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 eggs, lightly beaten',
                'created_at' => '2018-11-08 11:41:37',
                'updated_at' => '2018-11-08 11:41:37',
            ),
            73 => 
            array (
                'id' => 1074,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons vanilla',
                'created_at' => '2018-11-08 11:41:37',
                'updated_at' => '2018-11-08 11:41:37',
            ),
            74 => 
            array (
                'id' => 1075,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup chopped walnuts',
                'created_at' => '2018-11-08 11:41:37',
                'updated_at' => '2018-11-08 11:41:37',
            ),
            75 => 
            array (
                'id' => 1076,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 cup shredded coconut (sweetened variety)',
                'created_at' => '2018-11-08 11:41:37',
                'updated_at' => '2018-11-08 11:41:37',
            ),
            76 => 
            array (
                'id' => 1077,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup canned crushed pineapple, drained',
                'created_at' => '2018-11-08 11:41:37',
                'updated_at' => '2018-11-08 11:41:37',
            ),
            77 => 
            array (
                'id' => 1078,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 ounces cream cheese, softened',
                'created_at' => '2018-11-08 11:41:38',
                'updated_at' => '2018-11-08 11:41:38',
            ),
            78 => 
            array (
                'id' => 1079,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons butter, softened',
                'created_at' => '2018-11-08 11:41:38',
                'updated_at' => '2018-11-08 11:41:38',
            ),
            79 => 
            array (
                'id' => 1080,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups confectioners\' sugar, sifted',
                'created_at' => '2018-11-08 11:41:38',
                'updated_at' => '2018-11-08 11:41:38',
            ),
            80 => 
            array (
                'id' => 1081,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon vanilla extract',
                'created_at' => '2018-11-08 11:41:38',
                'updated_at' => '2018-11-08 11:41:38',
            ),
            81 => 
            array (
                'id' => 1082,
                'recipe_id' => '109',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon lemon juice',
                'created_at' => '2018-11-08 11:41:38',
                'updated_at' => '2018-11-08 11:41:38',
            ),
            82 => 
            array (
                'id' => 1083,
                'recipe_id' => '110',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup sugar',
                'created_at' => '2018-11-08 11:41:40',
                'updated_at' => '2018-11-08 11:41:40',
            ),
            83 => 
            array (
                'id' => 1084,
                'recipe_id' => '110',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons grated orange peel',
                'created_at' => '2018-11-08 11:41:40',
                'updated_at' => '2018-11-08 11:41:40',
            ),
            84 => 
            array (
                'id' => 1085,
                'recipe_id' => '110',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups all-purpose flour',
                'created_at' => '2018-11-08 11:41:41',
                'updated_at' => '2018-11-08 11:41:41',
            ),
            85 => 
            array (
                'id' => 1086,
                'recipe_id' => '110',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup yellow cornmeal',
                'created_at' => '2018-11-08 11:41:41',
                'updated_at' => '2018-11-08 11:41:41',
            ),
            86 => 
            array (
                'id' => 1087,
                'recipe_id' => '110',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 tablespoons (packed) golden brown sugar',
                'created_at' => '2018-11-08 11:41:41',
                'updated_at' => '2018-11-08 11:41:41',
            ),
            87 => 
            array (
                'id' => 1088,
                'recipe_id' => '110',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon baking powder',
                'created_at' => '2018-11-08 11:41:41',
                'updated_at' => '2018-11-08 11:41:41',
            ),
            88 => 
            array (
                'id' => 1089,
                'recipe_id' => '110',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 11:41:41',
                'updated_at' => '2018-11-08 11:41:41',
            ),
            89 => 
            array (
                'id' => 1090,
                'recipe_id' => '110',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup (1 stick) chilled unsalted butter, cut into 1/4-inch pieces',
                'created_at' => '2018-11-08 11:41:42',
                'updated_at' => '2018-11-08 11:41:42',
            ),
            90 => 
            array (
                'id' => 1091,
                'recipe_id' => '110',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2/3 cup (or more) whole milk',
                'created_at' => '2018-11-08 11:41:42',
                'updated_at' => '2018-11-08 11:41:42',
            ),
            91 => 
            array (
                'id' => 1092,
                'recipe_id' => '110',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 pounds peaches, peeled, pitted, cut into 1/2-inch-thick slices',
                'created_at' => '2018-11-08 11:41:42',
                'updated_at' => '2018-11-08 11:41:42',
            ),
            92 => 
            array (
                'id' => 1093,
                'recipe_id' => '110',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup sugar',
                'created_at' => '2018-11-08 11:41:42',
                'updated_at' => '2018-11-08 11:41:42',
            ),
            93 => 
            array (
                'id' => 1094,
                'recipe_id' => '110',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon vanilla extract',
                'created_at' => '2018-11-08 11:41:42',
                'updated_at' => '2018-11-08 11:41:42',
            ),
            94 => 
            array (
                'id' => 1095,
                'recipe_id' => '110',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup chilled whipping cream',
                'created_at' => '2018-11-08 11:41:43',
                'updated_at' => '2018-11-08 11:41:43',
            ),
            95 => 
            array (
                'id' => 1096,
                'recipe_id' => '110',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons powdered sugar',
                'created_at' => '2018-11-08 11:41:43',
                'updated_at' => '2018-11-08 11:41:43',
            ),
            96 => 
            array (
                'id' => 1097,
                'recipe_id' => '111',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 pounds thin-skinned potatoes, such as Yellow Finns or Yukon Golds, peeled and cut into 2-inch chunks if large',
                'created_at' => '2018-11-08 11:41:44',
                'updated_at' => '2018-11-08 11:41:44',
            ),
            97 => 
            array (
                'id' => 1098,
                'recipe_id' => '111',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons kosher salt',
                'created_at' => '2018-11-08 11:41:44',
                'updated_at' => '2018-11-08 11:41:44',
            ),
            98 => 
            array (
                'id' => 1099,
                'recipe_id' => '111',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3/4 cup buttermilk, warmed (not hot)',
                'created_at' => '2018-11-08 11:41:45',
                'updated_at' => '2018-11-08 11:41:45',
            ),
            99 => 
            array (
                'id' => 1100,
                'recipe_id' => '111',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon unsalted butter',
                'created_at' => '2018-11-08 11:41:45',
                'updated_at' => '2018-11-08 11:41:45',
            ),
            100 => 
            array (
                'id' => 1101,
                'recipe_id' => '111',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Freshly ground black pepper',
                'created_at' => '2018-11-08 11:41:45',
                'updated_at' => '2018-11-08 11:41:45',
            ),
            101 => 
            array (
                'id' => 1102,
                'recipe_id' => '112',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 bacon slices, chopped',
                'created_at' => '2018-11-08 11:41:46',
                'updated_at' => '2018-11-08 11:41:46',
            ),
            102 => 
            array (
                'id' => 1103,
                'recipe_id' => '112',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon olive oil',
                'created_at' => '2018-11-08 11:41:46',
                'updated_at' => '2018-11-08 11:41:46',
            ),
            103 => 
            array (
                'id' => 1104,
                'recipe_id' => '112',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 medium leeks, thinly sliced (white and pale green parts only)',
                'created_at' => '2018-11-08 11:41:46',
                'updated_at' => '2018-11-08 11:41:46',
            ),
            104 => 
            array (
                'id' => 1105,
                'recipe_id' => '112',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 pound parsnips, peeled, cut into 1/3-inch dice',
                'created_at' => '2018-11-08 11:41:47',
                'updated_at' => '2018-11-08 11:41:47',
            ),
            105 => 
            array (
                'id' => 1106,
                'recipe_id' => '112',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 medium carrots, peeled, cut into 1/3-inch dice',
                'created_at' => '2018-11-08 11:41:47',
                'updated_at' => '2018-11-08 11:41:47',
            ),
            106 => 
            array (
                'id' => 1107,
                'recipe_id' => '112',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 garlic cloves, minced',
                'created_at' => '2018-11-08 11:41:47',
                'updated_at' => '2018-11-08 11:41:47',
            ),
            107 => 
            array (
                'id' => 1108,
                'recipe_id' => '112',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons dried thyme',
                'created_at' => '2018-11-08 11:41:47',
                'updated_at' => '2018-11-08 11:41:47',
            ),
            108 => 
            array (
                'id' => 1109,
                'recipe_id' => '112',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 pounds Yukon Gold potatoes, peeled, cut into 1/2-inch dice',
                'created_at' => '2018-11-08 11:41:47',
                'updated_at' => '2018-11-08 11:41:47',
            ),
            109 => 
            array (
                'id' => 1110,
                'recipe_id' => '112',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons all purpose flour',
                'created_at' => '2018-11-08 11:41:48',
                'updated_at' => '2018-11-08 11:41:48',
            ),
            110 => 
            array (
                'id' => 1111,
                'recipe_id' => '112',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 cups reduced-fat (2%) milk',
                'created_at' => '2018-11-08 11:41:48',
                'updated_at' => '2018-11-08 11:41:48',
            ),
            111 => 
            array (
                'id' => 1112,
                'recipe_id' => '112',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 cups (or more) vegetable broth',
                'created_at' => '2018-11-08 11:41:48',
                'updated_at' => '2018-11-08 11:41:48',
            ),
            112 => 
            array (
                'id' => 1113,
                'recipe_id' => '112',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons chopped fresh parsley',
                'created_at' => '2018-11-08 11:41:48',
                'updated_at' => '2018-11-08 11:41:48',
            ),
            113 => 
            array (
                'id' => 1114,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 ounces unsweetened chocolate, chopped',
                'created_at' => '2018-11-08 11:41:50',
                'updated_at' => '2018-11-08 11:41:50',
            ),
            114 => 
            array (
                'id' => 1115,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup (1 stick) unsalted butter, room temperature',
                'created_at' => '2018-11-08 11:41:50',
                'updated_at' => '2018-11-08 11:41:50',
            ),
            115 => 
            array (
                'id' => 1116,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup sugar',
                'created_at' => '2018-11-08 11:41:50',
                'updated_at' => '2018-11-08 11:41:50',
            ),
            116 => 
            array (
                'id' => 1117,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 large eggs',
                'created_at' => '2018-11-08 11:41:50',
                'updated_at' => '2018-11-08 11:41:50',
            ),
            117 => 
            array (
                'id' => 1118,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon vanilla extract',
                'created_at' => '2018-11-08 11:41:51',
                'updated_at' => '2018-11-08 11:41:51',
            ),
            118 => 
            array (
                'id' => 1119,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup all purpose flour',
                'created_at' => '2018-11-08 11:41:51',
                'updated_at' => '2018-11-08 11:41:51',
            ),
            119 => 
            array (
                'id' => 1120,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon ground cinnamon',
                'created_at' => '2018-11-08 11:41:51',
                'updated_at' => '2018-11-08 11:41:51',
            ),
            120 => 
            array (
                'id' => 1121,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 ounces good-quality white chocolate (such as Lindt or Baker\'s), chopped',
                'created_at' => '2018-11-08 11:41:51',
                'updated_at' => '2018-11-08 11:41:51',
            ),
            121 => 
            array (
                'id' => 1122,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons whipping cream',
                'created_at' => '2018-11-08 11:41:51',
                'updated_at' => '2018-11-08 11:41:51',
            ),
            122 => 
            array (
                'id' => 1123,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 teaspoon peppermint extract',
                'created_at' => '2018-11-08 11:41:51',
                'updated_at' => '2018-11-08 11:41:51',
            ),
            123 => 
            array (
                'id' => 1124,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 tablespoons whipping cream',
                'created_at' => '2018-11-08 11:41:52',
                'updated_at' => '2018-11-08 11:41:52',
            ),
            124 => 
            array (
                'id' => 1125,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 ounces bittersweet (not unsweetened) or semisweet chocolate, chopped',
                'created_at' => '2018-11-08 11:41:52',
                'updated_at' => '2018-11-08 11:41:52',
            ),
            125 => 
            array (
                'id' => 1126,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => 'White chocolate curls (optional)',
                'created_at' => '2018-11-08 11:41:52',
                'updated_at' => '2018-11-08 11:41:52',
            ),
            126 => 
            array (
                'id' => 1127,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Fresh mint sprigs',
                'created_at' => '2018-11-08 11:41:52',
                'updated_at' => '2018-11-08 11:41:52',
            ),
            127 => 
            array (
                'id' => 1128,
                'recipe_id' => '113',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Halved strawberries',
                'created_at' => '2018-11-08 11:41:52',
                'updated_at' => '2018-11-08 11:41:52',
            ),
            128 => 
            array (
                'id' => 1129,
                'recipe_id' => '114',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1/4 cups (about 6 ounces) frozen blackberries',
                'created_at' => '2018-11-08 11:41:54',
                'updated_at' => '2018-11-08 11:41:54',
            ),
            129 => 
            array (
                'id' => 1130,
                'recipe_id' => '114',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups sugar',
                'created_at' => '2018-11-08 11:41:54',
                'updated_at' => '2018-11-08 11:41:54',
            ),
            130 => 
            array (
                'id' => 1131,
                'recipe_id' => '114',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon plus 2/3 cup fresh lemon juice',
                'created_at' => '2018-11-08 11:41:54',
                'updated_at' => '2018-11-08 11:41:54',
            ),
            131 => 
            array (
                'id' => 1132,
                'recipe_id' => '114',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon light corn syrup',
                'created_at' => '2018-11-08 11:41:54',
                'updated_at' => '2018-11-08 11:41:54',
            ),
            132 => 
            array (
                'id' => 1133,
                'recipe_id' => '114',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 3/4 cups whipping cream',
                'created_at' => '2018-11-08 11:41:55',
                'updated_at' => '2018-11-08 11:41:55',
            ),
            133 => 
            array (
                'id' => 1134,
                'recipe_id' => '114',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 cups whole milk',
                'created_at' => '2018-11-08 11:41:55',
                'updated_at' => '2018-11-08 11:41:55',
            ),
            134 => 
            array (
                'id' => 1135,
                'recipe_id' => '114',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 vanilla bean, split lengthwise',
                'created_at' => '2018-11-08 11:41:55',
                'updated_at' => '2018-11-08 11:41:55',
            ),
            135 => 
            array (
                'id' => 1136,
                'recipe_id' => '114',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '8 large egg yolks',
                'created_at' => '2018-11-08 11:41:55',
                'updated_at' => '2018-11-08 11:41:55',
            ),
            136 => 
            array (
                'id' => 1137,
                'recipe_id' => '114',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 1/2 teaspoons grated lemon peel',
                'created_at' => '2018-11-08 11:41:55',
                'updated_at' => '2018-11-08 11:41:55',
            ),
            137 => 
            array (
                'id' => 1138,
                'recipe_id' => '114',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 cups (10 ounces) blackberries, fresh or frozen, thawed',
                'created_at' => '2018-11-08 11:41:55',
                'updated_at' => '2018-11-08 11:41:55',
            ),
            138 => 
            array (
                'id' => 1139,
                'recipe_id' => '114',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup sugar',
                'created_at' => '2018-11-08 11:41:55',
                'updated_at' => '2018-11-08 11:41:55',
            ),
            139 => 
            array (
                'id' => 1140,
                'recipe_id' => '114',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons fresh lemon juice',
                'created_at' => '2018-11-08 11:41:56',
                'updated_at' => '2018-11-08 11:41:56',
            ),
            140 => 
            array (
                'id' => 1141,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 large eggs',
                'created_at' => '2018-11-08 11:41:57',
                'updated_at' => '2018-11-08 11:41:57',
            ),
            141 => 
            array (
                'id' => 1142,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup sugar',
                'created_at' => '2018-11-08 11:41:57',
                'updated_at' => '2018-11-08 11:41:57',
            ),
            142 => 
            array (
                'id' => 1143,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup fresh lemon juice',
                'created_at' => '2018-11-08 11:41:57',
                'updated_at' => '2018-11-08 11:41:57',
            ),
            143 => 
            array (
                'id' => 1144,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 large egg yolks',
                'created_at' => '2018-11-08 11:41:57',
                'updated_at' => '2018-11-08 11:41:57',
            ),
            144 => 
            array (
                'id' => 1145,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons grated lemon peel',
                'created_at' => '2018-11-08 11:41:58',
                'updated_at' => '2018-11-08 11:41:58',
            ),
            145 => 
            array (
                'id' => 1146,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 cup (2 sticks) unsalted butter, cut into pieces',
                'created_at' => '2018-11-08 11:41:58',
                'updated_at' => '2018-11-08 11:41:58',
            ),
            146 => 
            array (
                'id' => 1147,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup half and half',
                'created_at' => '2018-11-08 11:41:58',
                'updated_at' => '2018-11-08 11:41:58',
            ),
            147 => 
            array (
                'id' => 1148,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon vanilla extract',
                'created_at' => '2018-11-08 11:41:58',
                'updated_at' => '2018-11-08 11:41:58',
            ),
            148 => 
            array (
                'id' => 1149,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups all purpose flour',
                'created_at' => '2018-11-08 11:41:58',
                'updated_at' => '2018-11-08 11:41:58',
            ),
            149 => 
            array (
                'id' => 1150,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons powdered sugar',
                'created_at' => '2018-11-08 11:41:59',
                'updated_at' => '2018-11-08 11:41:59',
            ),
            150 => 
            array (
                'id' => 1151,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 11:41:59',
                'updated_at' => '2018-11-08 11:41:59',
            ),
            151 => 
            array (
                'id' => 1152,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup (1 stick) chilled unsalted butter, cut into pieces',
                'created_at' => '2018-11-08 11:41:59',
                'updated_at' => '2018-11-08 11:41:59',
            ),
            152 => 
            array (
                'id' => 1153,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons chilled vegetable shortening, cut into pieces',
                'created_at' => '2018-11-08 11:41:59',
                'updated_at' => '2018-11-08 11:41:59',
            ),
            153 => 
            array (
                'id' => 1154,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 tablespoons (about) ice water',
                'created_at' => '2018-11-08 11:41:59',
                'updated_at' => '2018-11-08 11:41:59',
            ),
            154 => 
            array (
                'id' => 1155,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => 'Whipped cream (optional)',
                'created_at' => '2018-11-08 11:41:59',
                'updated_at' => '2018-11-08 11:41:59',
            ),
            155 => 
            array (
                'id' => 1156,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => 'Lemon slices (optional)',
                'created_at' => '2018-11-08 11:42:00',
                'updated_at' => '2018-11-08 11:42:00',
            ),
            156 => 
            array (
                'id' => 1157,
                'recipe_id' => '115',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => 'Fresh mint (optional)',
                'created_at' => '2018-11-08 11:42:00',
                'updated_at' => '2018-11-08 11:42:00',
            ),
            157 => 
            array (
                'id' => 1158,
                'recipe_id' => '116',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '8 ounces Roquefort cheese, crumbled',
                'created_at' => '2018-11-08 11:42:01',
                'updated_at' => '2018-11-08 11:42:01',
            ),
            158 => 
            array (
                'id' => 1159,
                'recipe_id' => '116',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2/3 cup mayonnaise',
                'created_at' => '2018-11-08 11:42:01',
                'updated_at' => '2018-11-08 11:42:01',
            ),
            159 => 
            array (
                'id' => 1160,
                'recipe_id' => '116',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons red wine vinegar',
                'created_at' => '2018-11-08 11:42:01',
                'updated_at' => '2018-11-08 11:42:01',
            ),
            160 => 
            array (
                'id' => 1161,
                'recipe_id' => '116',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon hot pepper sauce',
                'created_at' => '2018-11-08 11:42:02',
                'updated_at' => '2018-11-08 11:42:02',
            ),
            161 => 
            array (
                'id' => 1162,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 tablespoons (1/4 stick) butter, room temperature',
                'created_at' => '2018-11-08 11:42:03',
                'updated_at' => '2018-11-08 11:42:03',
            ),
            162 => 
            array (
                'id' => 1163,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon dried tarragon',
                'created_at' => '2018-11-08 11:42:03',
                'updated_at' => '2018-11-08 11:42:03',
            ),
            163 => 
            array (
                'id' => 1164,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon dried marjoram',
                'created_at' => '2018-11-08 11:42:03',
                'updated_at' => '2018-11-08 11:42:03',
            ),
            164 => 
            array (
                'id' => 1165,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon mustard seeds, coarsely crushed',
                'created_at' => '2018-11-08 11:42:03',
                'updated_at' => '2018-11-08 11:42:03',
            ),
            165 => 
            array (
                'id' => 1166,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons coarse salt',
                'created_at' => '2018-11-08 11:42:04',
                'updated_at' => '2018-11-08 11:42:04',
            ),
            166 => 
            array (
                'id' => 1167,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon ground black pepper',
                'created_at' => '2018-11-08 11:42:04',
                'updated_at' => '2018-11-08 11:42:04',
            ),
            167 => 
            array (
                'id' => 1168,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 12- to 14-pound turkey',
                'created_at' => '2018-11-08 11:42:04',
                'updated_at' => '2018-11-08 11:42:04',
            ),
            168 => 
            array (
                'id' => 1169,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large orange, quartered',
                'created_at' => '2018-11-08 11:42:04',
                'updated_at' => '2018-11-08 11:42:04',
            ),
            169 => 
            array (
                'id' => 1170,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 onion, peeled, quartered (optional)',
                'created_at' => '2018-11-08 11:42:04',
                'updated_at' => '2018-11-08 11:42:04',
            ),
            170 => 
            array (
                'id' => 1171,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 head of garlic, unpeeled, cut horizontally in half (optional)',
                'created_at' => '2018-11-08 11:42:04',
                'updated_at' => '2018-11-08 11:42:04',
            ),
            171 => 
            array (
                'id' => 1172,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 celery stalks, cut into 2-inch lengths (optional)',
                'created_at' => '2018-11-08 11:42:05',
                'updated_at' => '2018-11-08 11:42:05',
            ),
            172 => 
            array (
                'id' => 1173,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 fresh thyme sprigs (optional)',
                'created_at' => '2018-11-08 11:42:05',
                'updated_at' => '2018-11-08 11:42:05',
            ),
            173 => 
            array (
                'id' => 1174,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 fresh sage sprigs (optional)',
                'created_at' => '2018-11-08 11:42:05',
                'updated_at' => '2018-11-08 11:42:05',
            ),
            174 => 
            array (
                'id' => 1175,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup orange juice',
                'created_at' => '2018-11-08 11:42:05',
                'updated_at' => '2018-11-08 11:42:05',
            ),
            175 => 
            array (
                'id' => 1176,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon Dijon mustard',
                'created_at' => '2018-11-08 11:42:05',
                'updated_at' => '2018-11-08 11:42:05',
            ),
            176 => 
            array (
                'id' => 1177,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '5 cups (about) low-salt chicken broth',
                'created_at' => '2018-11-08 11:42:05',
                'updated_at' => '2018-11-08 11:42:05',
            ),
            177 => 
            array (
                'id' => 1178,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 1/2 tablespoons butter',
                'created_at' => '2018-11-08 11:42:05',
                'updated_at' => '2018-11-08 11:42:05',
            ),
            178 => 
            array (
                'id' => 1179,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup minced onion',
                'created_at' => '2018-11-08 11:42:06',
                'updated_at' => '2018-11-08 11:42:06',
            ),
            179 => 
            array (
                'id' => 1180,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons all purpose flour',
                'created_at' => '2018-11-08 11:42:06',
                'updated_at' => '2018-11-08 11:42:06',
            ),
            180 => 
            array (
                'id' => 1181,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large Gala apple, peeled, cored, cut into 1/4-inch cubes',
                'created_at' => '2018-11-08 11:42:06',
                'updated_at' => '2018-11-08 11:42:06',
            ),
            181 => 
            array (
                'id' => 1182,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups whole milk',
                'created_at' => '2018-11-08 11:42:06',
                'updated_at' => '2018-11-08 11:42:06',
            ),
            182 => 
            array (
                'id' => 1183,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup low-salt chicken broth',
                'created_at' => '2018-11-08 11:42:06',
                'updated_at' => '2018-11-08 11:42:06',
            ),
            183 => 
            array (
                'id' => 1184,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup apple cider',
                'created_at' => '2018-11-08 11:42:06',
                'updated_at' => '2018-11-08 11:42:06',
            ),
            184 => 
            array (
                'id' => 1185,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 small bay leaves, torn into pieces',
                'created_at' => '2018-11-08 11:42:07',
                'updated_at' => '2018-11-08 11:42:07',
            ),
            185 => 
            array (
                'id' => 1186,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon Dijon mustard',
                'created_at' => '2018-11-08 11:42:07',
                'updated_at' => '2018-11-08 11:42:07',
            ),
            186 => 
            array (
                'id' => 1187,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons mustard seeds, coarsely crushed',
                'created_at' => '2018-11-08 11:42:07',
                'updated_at' => '2018-11-08 11:42:07',
            ),
            187 => 
            array (
                'id' => 1188,
                'recipe_id' => '117',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons chopped fresh sage',
                'created_at' => '2018-11-08 11:42:07',
                'updated_at' => '2018-11-08 11:42:07',
            ),
            188 => 
            array (
                'id' => 1189,
                'recipe_id' => '118',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup water',
                'created_at' => '2018-11-08 11:42:09',
                'updated_at' => '2018-11-08 11:42:09',
            ),
            189 => 
            array (
                'id' => 1190,
                'recipe_id' => '118',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 stick (1/4 cup) unsalted butter, cut into small pieces',
                'created_at' => '2018-11-08 11:42:09',
                'updated_at' => '2018-11-08 11:42:09',
            ),
            190 => 
            array (
                'id' => 1191,
                'recipe_id' => '118',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Scant 1/4 teaspoon salt',
                'created_at' => '2018-11-08 11:42:09',
                'updated_at' => '2018-11-08 11:42:09',
            ),
            191 => 
            array (
                'id' => 1192,
                'recipe_id' => '118',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup all-purpose flour',
                'created_at' => '2018-11-08 11:42:09',
                'updated_at' => '2018-11-08 11:42:09',
            ),
            192 => 
            array (
                'id' => 1193,
                'recipe_id' => '118',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 large eggs (raw)',
                'created_at' => '2018-11-08 11:42:10',
                'updated_at' => '2018-11-08 11:42:10',
            ),
            193 => 
            array (
                'id' => 1194,
                'recipe_id' => '118',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 hard-boiled large egg',
                'created_at' => '2018-11-08 11:42:10',
                'updated_at' => '2018-11-08 11:42:10',
            ),
            194 => 
            array (
                'id' => 1195,
                'recipe_id' => '118',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon finely chopped fresh flat-leaf parsley',
                'created_at' => '2018-11-08 11:42:10',
                'updated_at' => '2018-11-08 11:42:10',
            ),
            195 => 
            array (
                'id' => 1196,
                'recipe_id' => '118',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 1/2 oz caviar (about 75 g; preferably sevruga or osetra)',
                'created_at' => '2018-11-08 11:42:10',
                'updated_at' => '2018-11-08 11:42:10',
            ),
            196 => 
            array (
                'id' => 1197,
                'recipe_id' => '118',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Special equipment: a large pastry bag fitted with a 1/2-inch plain tip',
                'created_at' => '2018-11-08 11:42:10',
                'updated_at' => '2018-11-08 11:42:10',
            ),
            197 => 
            array (
                'id' => 1198,
                'recipe_id' => '119',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups dry Marsala',
                'created_at' => '2018-11-08 11:42:12',
                'updated_at' => '2018-11-08 11:42:12',
            ),
            198 => 
            array (
                'id' => 1199,
                'recipe_id' => '119',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup dried tart cherries',
                'created_at' => '2018-11-08 11:42:12',
                'updated_at' => '2018-11-08 11:42:12',
            ),
            199 => 
            array (
                'id' => 1200,
                'recipe_id' => '119',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 12-ounce bag cranberries',
                'created_at' => '2018-11-08 11:42:12',
                'updated_at' => '2018-11-08 11:42:12',
            ),
            200 => 
            array (
                'id' => 1201,
                'recipe_id' => '119',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '12 ounces frozen dark sweet cherries (about 2 2/3 cups), halved',
                'created_at' => '2018-11-08 11:42:12',
                'updated_at' => '2018-11-08 11:42:12',
            ),
            201 => 
            array (
                'id' => 1202,
                'recipe_id' => '119',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 cup (packed) golden brown sugar',
                'created_at' => '2018-11-08 11:42:12',
                'updated_at' => '2018-11-08 11:42:12',
            ),
            202 => 
            array (
                'id' => 1203,
                'recipe_id' => '119',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon minced fresh rosemary',
                'created_at' => '2018-11-08 11:42:13',
                'updated_at' => '2018-11-08 11:42:13',
            ),
            203 => 
            array (
                'id' => 1204,
                'recipe_id' => '119',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon ground allspice',
                'created_at' => '2018-11-08 11:42:13',
                'updated_at' => '2018-11-08 11:42:13',
            ),
            204 => 
            array (
                'id' => 1205,
                'recipe_id' => '120',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/3 cups sugar',
                'created_at' => '2018-11-08 11:42:14',
                'updated_at' => '2018-11-08 11:42:14',
            ),
            205 => 
            array (
                'id' => 1206,
                'recipe_id' => '120',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2/3 cup water',
                'created_at' => '2018-11-08 11:42:14',
                'updated_at' => '2018-11-08 11:42:14',
            ),
            206 => 
            array (
                'id' => 1207,
                'recipe_id' => '120',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 small navel oranges',
                'created_at' => '2018-11-08 11:42:14',
                'updated_at' => '2018-11-08 11:42:14',
            ),
            207 => 
            array (
                'id' => 1208,
                'recipe_id' => '120',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 cups fresh or frozen cranberries (8 ounces; thawed if frozen)',
                'created_at' => '2018-11-08 11:42:14',
                'updated_at' => '2018-11-08 11:42:14',
            ),
            208 => 
            array (
                'id' => 1209,
                'recipe_id' => '120',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon ground cinnamon',
                'created_at' => '2018-11-08 11:42:15',
                'updated_at' => '2018-11-08 11:42:15',
            ),
            209 => 
            array (
                'id' => 1210,
                'recipe_id' => '120',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon ground cloves',
                'created_at' => '2018-11-08 11:42:15',
                'updated_at' => '2018-11-08 11:42:15',
            ),
            210 => 
            array (
                'id' => 1211,
                'recipe_id' => '120',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 tablespoons minced drained stem ginger in syrup (not pickled) or crystallized ginger',
                'created_at' => '2018-11-08 11:42:15',
                'updated_at' => '2018-11-08 11:42:15',
            ),
            211 => 
            array (
                'id' => 1212,
                'recipe_id' => '121',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons Dijon mustard',
                'created_at' => '2018-11-08 11:42:18',
                'updated_at' => '2018-11-08 11:42:18',
            ),
            212 => 
            array (
                'id' => 1213,
                'recipe_id' => '121',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon white-wine vinegar',
                'created_at' => '2018-11-08 11:42:18',
                'updated_at' => '2018-11-08 11:42:18',
            ),
            213 => 
            array (
                'id' => 1214,
                'recipe_id' => '121',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 11:42:19',
                'updated_at' => '2018-11-08 11:42:19',
            ),
            214 => 
            array (
                'id' => 1215,
                'recipe_id' => '121',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon black pepper',
                'created_at' => '2018-11-08 11:42:19',
                'updated_at' => '2018-11-08 11:42:19',
            ),
            215 => 
            array (
                'id' => 1216,
                'recipe_id' => '121',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 (5-oz) skinless boneless chicken breast halves',
                'created_at' => '2018-11-08 11:42:19',
                'updated_at' => '2018-11-08 11:42:19',
            ),
            216 => 
            array (
                'id' => 1217,
                'recipe_id' => '121',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1/2 English muffins (not sandwich-size)',
                'created_at' => '2018-11-08 11:42:19',
                'updated_at' => '2018-11-08 11:42:19',
            ),
            217 => 
            array (
                'id' => 1218,
                'recipe_id' => '121',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3/4 cup finely grated Parmigiano-Reggiano (1 1/2 oz)',
                'created_at' => '2018-11-08 11:42:19',
                'updated_at' => '2018-11-08 11:42:19',
            ),
            218 => 
            array (
                'id' => 1219,
                'recipe_id' => '121',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon unsalted butter, melted',
                'created_at' => '2018-11-08 11:42:20',
                'updated_at' => '2018-11-08 11:42:20',
            ),
            219 => 
            array (
                'id' => 1220,
                'recipe_id' => '121',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Special equipment: parchment paper',
                'created_at' => '2018-11-08 11:42:20',
                'updated_at' => '2018-11-08 11:42:20',
            ),
            220 => 
            array (
                'id' => 1221,
                'recipe_id' => '122',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup pure maple syrup',
                'created_at' => '2018-11-08 11:42:21',
                'updated_at' => '2018-11-08 11:42:21',
            ),
            221 => 
            array (
                'id' => 1222,
                'recipe_id' => '122',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/4 cup (1/2 stick) butter',
                'created_at' => '2018-11-08 11:42:21',
                'updated_at' => '2018-11-08 11:42:21',
            ),
            222 => 
            array (
                'id' => 1223,
                'recipe_id' => '122',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 garlic cloves, minced',
                'created_at' => '2018-11-08 11:42:22',
                'updated_at' => '2018-11-08 11:42:22',
            ),
            223 => 
            array (
                'id' => 1224,
                'recipe_id' => '122',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 teaspoons minced canned chipotle chilies*',
                'created_at' => '2018-11-08 11:42:22',
                'updated_at' => '2018-11-08 11:42:22',
            ),
            224 => 
            array (
                'id' => 1225,
                'recipe_id' => '122',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 11:42:22',
                'updated_at' => '2018-11-08 11:42:22',
            ),
            225 => 
            array (
                'id' => 1226,
                'recipe_id' => '122',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 ears fresh corn, husked',
                'created_at' => '2018-11-08 11:42:22',
                'updated_at' => '2018-11-08 11:42:22',
            ),
            226 => 
            array (
                'id' => 1227,
                'recipe_id' => '123',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 oz soft mild goat cheese (3/4 cup) at room temperature',
                'created_at' => '2018-11-08 11:42:23',
                'updated_at' => '2018-11-08 11:42:23',
            ),
            227 => 
            array (
                'id' => 1228,
                'recipe_id' => '123',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons black pepper',
                'created_at' => '2018-11-08 11:42:23',
                'updated_at' => '2018-11-08 11:42:23',
            ),
            228 => 
            array (
                'id' => 1229,
                'recipe_id' => '123',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons unsalted butter, softened',
                'created_at' => '2018-11-08 11:42:23',
                'updated_at' => '2018-11-08 11:42:23',
            ),
            229 => 
            array (
                'id' => 1230,
                'recipe_id' => '123',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 (4- to 5-inch) soft round seeded rolls, split',
                'created_at' => '2018-11-08 11:42:24',
                'updated_at' => '2018-11-08 11:42:24',
            ),
            230 => 
            array (
                'id' => 1231,
                'recipe_id' => '123',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '6 fresh figs, trimmed and sliced lengthwise 1/4inch thick',
                'created_at' => '2018-11-08 11:42:24',
                'updated_at' => '2018-11-08 11:42:24',
            ),
            231 => 
            array (
                'id' => 1232,
                'recipe_id' => '123',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 lb thinly sliced prosciutto',
                'created_at' => '2018-11-08 11:42:24',
                'updated_at' => '2018-11-08 11:42:24',
            ),
            232 => 
            array (
                'id' => 1233,
                'recipe_id' => '123',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '12 arugula leaves, tough stems discarded',
                'created_at' => '2018-11-08 11:42:24',
                'updated_at' => '2018-11-08 11:42:24',
            ),
            233 => 
            array (
                'id' => 1234,
                'recipe_id' => '124',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons vegetable oil',
                'created_at' => '2018-11-08 11:42:26',
                'updated_at' => '2018-11-08 11:42:26',
            ),
            234 => 
            array (
                'id' => 1235,
                'recipe_id' => '124',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 pounds turkey wings, patted dry, each cut into 3 sections Neck, heart and gizzard reserved from 18- to 20-pound turkey',
                'created_at' => '2018-11-08 11:42:26',
                'updated_at' => '2018-11-08 11:42:26',
            ),
            235 => 
            array (
                'id' => 1236,
                'recipe_id' => '124',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 medium onion, chopped',
                'created_at' => '2018-11-08 11:42:26',
                'updated_at' => '2018-11-08 11:42:26',
            ),
            236 => 
            array (
                'id' => 1237,
                'recipe_id' => '124',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large carrot, peeled, chopped',
                'created_at' => '2018-11-08 11:42:26',
                'updated_at' => '2018-11-08 11:42:26',
            ),
            237 => 
            array (
                'id' => 1238,
                'recipe_id' => '124',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 celery stalk, chopped',
                'created_at' => '2018-11-08 11:42:27',
                'updated_at' => '2018-11-08 11:42:27',
            ),
            238 => 
            array (
                'id' => 1239,
                'recipe_id' => '124',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '16 cups water',
                'created_at' => '2018-11-08 11:42:27',
                'updated_at' => '2018-11-08 11:42:27',
            ),
            239 => 
            array (
                'id' => 1240,
                'recipe_id' => '124',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 fresh parsley sprigs',
                'created_at' => '2018-11-08 11:42:27',
                'updated_at' => '2018-11-08 11:42:27',
            ),
            240 => 
            array (
                'id' => 1241,
                'recipe_id' => '124',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon dried thyme',
                'created_at' => '2018-11-08 11:42:27',
                'updated_at' => '2018-11-08 11:42:27',
            ),
            241 => 
            array (
                'id' => 1242,
                'recipe_id' => '124',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon whole black peppercorns',
                'created_at' => '2018-11-08 11:42:28',
                'updated_at' => '2018-11-08 11:42:28',
            ),
            242 => 
            array (
                'id' => 1243,
                'recipe_id' => '125',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 tablespoons (1/4 stick) butter',
                'created_at' => '2018-11-08 11:42:30',
                'updated_at' => '2018-11-08 11:42:30',
            ),
            243 => 
            array (
                'id' => 1244,
                'recipe_id' => '125',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '12 large sea scallops',
                'created_at' => '2018-11-08 11:42:30',
                'updated_at' => '2018-11-08 11:42:30',
            ),
            244 => 
            array (
                'id' => 1245,
                'recipe_id' => '125',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup finely chopped shallots',
                'created_at' => '2018-11-08 11:42:30',
                'updated_at' => '2018-11-08 11:42:30',
            ),
            245 => 
            array (
                'id' => 1246,
                'recipe_id' => '125',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup dry white wine',
                'created_at' => '2018-11-08 11:42:30',
                'updated_at' => '2018-11-08 11:42:30',
            ),
            246 => 
            array (
                'id' => 1247,
                'recipe_id' => '125',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon chopped fresh dill plus 2 dill sprigs for garnish',
                'created_at' => '2018-11-08 11:42:30',
                'updated_at' => '2018-11-08 11:42:30',
            ),
            247 => 
            array (
                'id' => 1248,
                'recipe_id' => '125',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon fresh lemon juice',
                'created_at' => '2018-11-08 11:42:31',
                'updated_at' => '2018-11-08 11:42:31',
            ),
            248 => 
            array (
                'id' => 1249,
                'recipe_id' => '125',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon grated lemon peel',
                'created_at' => '2018-11-08 11:42:31',
                'updated_at' => '2018-11-08 11:42:31',
            ),
            249 => 
            array (
                'id' => 1250,
                'recipe_id' => '125',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 tablespoons (1/4 stick) chilled butter, cut into 1/2-inch cubes',
                'created_at' => '2018-11-08 11:42:31',
                'updated_at' => '2018-11-08 11:42:31',
            ),
            250 => 
            array (
                'id' => 1251,
                'recipe_id' => '126',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups old-fashioned oats',
                'created_at' => '2018-11-08 11:42:33',
                'updated_at' => '2018-11-08 11:42:33',
            ),
            251 => 
            array (
                'id' => 1252,
                'recipe_id' => '126',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup all purpose flour',
                'created_at' => '2018-11-08 11:42:33',
                'updated_at' => '2018-11-08 11:42:33',
            ),
            252 => 
            array (
                'id' => 1253,
                'recipe_id' => '126',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon baking soda',
                'created_at' => '2018-11-08 11:42:34',
                'updated_at' => '2018-11-08 11:42:34',
            ),
            253 => 
            array (
                'id' => 1254,
                'recipe_id' => '126',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon ground cinnamon',
                'created_at' => '2018-11-08 11:42:34',
                'updated_at' => '2018-11-08 11:42:34',
            ),
            254 => 
            array (
                'id' => 1255,
                'recipe_id' => '126',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 11:42:34',
                'updated_at' => '2018-11-08 11:42:34',
            ),
            255 => 
            array (
                'id' => 1256,
                'recipe_id' => '126',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup (1 stick) unsalted butter, room temperature',
                'created_at' => '2018-11-08 11:42:35',
                'updated_at' => '2018-11-08 11:42:35',
            ),
            256 => 
            array (
                'id' => 1257,
                'recipe_id' => '126',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/3 cup (packed) dark brown sugar',
                'created_at' => '2018-11-08 11:42:35',
                'updated_at' => '2018-11-08 11:42:35',
            ),
            257 => 
            array (
                'id' => 1258,
                'recipe_id' => '126',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/3 cup sugar',
                'created_at' => '2018-11-08 11:42:35',
                'updated_at' => '2018-11-08 11:42:35',
            ),
            258 => 
            array (
                'id' => 1259,
                'recipe_id' => '126',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large egg',
                'created_at' => '2018-11-08 11:42:35',
                'updated_at' => '2018-11-08 11:42:35',
            ),
            259 => 
            array (
                'id' => 1260,
                'recipe_id' => '126',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon vanilla extract',
                'created_at' => '2018-11-08 11:42:35',
                'updated_at' => '2018-11-08 11:42:35',
            ),
            260 => 
            array (
                'id' => 1261,
                'recipe_id' => '126',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Nonstick vegetable oil spray',
                'created_at' => '2018-11-08 11:42:36',
                'updated_at' => '2018-11-08 11:42:36',
            ),
            261 => 
            array (
                'id' => 1262,
                'recipe_id' => '126',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 pounds nectarines, pitted, cut into 1/4-inch cubes',
                'created_at' => '2018-11-08 11:42:36',
                'updated_at' => '2018-11-08 11:42:36',
            ),
            262 => 
            array (
                'id' => 1263,
                'recipe_id' => '126',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup sugar',
                'created_at' => '2018-11-08 11:42:36',
                'updated_at' => '2018-11-08 11:42:36',
            ),
            263 => 
            array (
                'id' => 1264,
                'recipe_id' => '126',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 pint vanilla ice cream, softened slightly',
                'created_at' => '2018-11-08 11:42:36',
                'updated_at' => '2018-11-08 11:42:36',
            ),
            264 => 
            array (
                'id' => 1265,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 small head of Boston lettuce, washed well, trimmed, spun dry, and chopped fine (about 5 cups)',
                'created_at' => '2018-11-08 11:42:38',
                'updated_at' => '2018-11-08 11:42:38',
            ),
            265 => 
            array (
                'id' => 1266,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 pound fresh spinach, coarse stems discarded and the leaves washed well, spun dry, and chopped fine (about 3 1/2 cups)',
                'created_at' => '2018-11-08 11:42:39',
                'updated_at' => '2018-11-08 11:42:39',
            ),
            266 => 
            array (
                'id' => 1267,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup minced scallion',
                'created_at' => '2018-11-08 11:42:39',
                'updated_at' => '2018-11-08 11:42:39',
            ),
            267 => 
            array (
                'id' => 1268,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 3/4 cups fine dry bread crumbs',
                'created_at' => '2018-11-08 11:42:39',
                'updated_at' => '2018-11-08 11:42:39',
            ),
            268 => 
            array (
                'id' => 1269,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup minced fresh parsley leaves plus parsley sprigs for garnish',
                'created_at' => '2018-11-08 11:42:39',
                'updated_at' => '2018-11-08 11:42:39',
            ),
            269 => 
            array (
                'id' => 1270,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup minced celery',
                'created_at' => '2018-11-08 11:42:39',
                'updated_at' => '2018-11-08 11:42:39',
            ),
            270 => 
            array (
                'id' => 1271,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 garlic cloves, minced',
                'created_at' => '2018-11-08 11:42:39',
                'updated_at' => '2018-11-08 11:42:39',
            ),
            271 => 
            array (
                'id' => 1272,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 sticks (1cup) unsalted butter',
                'created_at' => '2018-11-08 11:42:39',
                'updated_at' => '2018-11-08 11:42:39',
            ),
            272 => 
            array (
                'id' => 1273,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons Pernod or other anise-flavored liqueur',
                'created_at' => '2018-11-08 11:42:40',
                'updated_at' => '2018-11-08 11:42:40',
            ),
            273 => 
            array (
                'id' => 1274,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon anchovy paste',
                'created_at' => '2018-11-08 11:42:40',
                'updated_at' => '2018-11-08 11:42:40',
            ),
            274 => 
            array (
                'id' => 1275,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon cayenne, or to taste',
                'created_at' => '2018-11-08 11:42:40',
                'updated_at' => '2018-11-08 11:42:40',
            ),
            275 => 
            array (
                'id' => 1276,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '12 slices of lean bacon (about 3/4 pound)',
                'created_at' => '2018-11-08 11:42:40',
                'updated_at' => '2018-11-08 11:42:40',
            ),
            276 => 
            array (
                'id' => 1277,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '36 large oysters, shucked reserving the bottom (deeper) shells, scrubbed and dried, and 1/3 cup of the oyster liquor',
                'created_at' => '2018-11-08 11:42:40',
                'updated_at' => '2018-11-08 11:42:40',
            ),
            277 => 
            array (
                'id' => 1278,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'coarse salt for filling the platters',
                'created_at' => '2018-11-08 11:42:41',
                'updated_at' => '2018-11-08 11:42:41',
            ),
            278 => 
            array (
                'id' => 1279,
                'recipe_id' => '127',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'lemon wedges for garnish',
                'created_at' => '2018-11-08 11:42:41',
                'updated_at' => '2018-11-08 11:42:41',
            ),
            279 => 
            array (
                'id' => 1280,
                'recipe_id' => '128',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup whipping cream',
                'created_at' => '2018-11-08 11:42:42',
                'updated_at' => '2018-11-08 11:42:42',
            ),
            280 => 
            array (
                'id' => 1281,
                'recipe_id' => '128',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup whole milk',
                'created_at' => '2018-11-08 11:42:43',
                'updated_at' => '2018-11-08 11:42:43',
            ),
            281 => 
            array (
                'id' => 1282,
                'recipe_id' => '128',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 cup chopped lemongrass (from about 6 large stalks)',
                'created_at' => '2018-11-08 11:42:43',
                'updated_at' => '2018-11-08 11:42:43',
            ),
            282 => 
            array (
                'id' => 1283,
                'recipe_id' => '128',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 large egg yolks',
                'created_at' => '2018-11-08 11:42:43',
                'updated_at' => '2018-11-08 11:42:43',
            ),
            283 => 
            array (
                'id' => 1284,
                'recipe_id' => '128',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup sugar',
                'created_at' => '2018-11-08 11:42:43',
                'updated_at' => '2018-11-08 11:42:43',
            ),
            284 => 
            array (
                'id' => 1285,
                'recipe_id' => '128',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 large very ripe mangoes, peeled, pitted',
                'created_at' => '2018-11-08 11:42:43',
                'updated_at' => '2018-11-08 11:42:43',
            ),
            285 => 
            array (
                'id' => 1286,
                'recipe_id' => '128',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Blood Orange Sorbet',
                'created_at' => '2018-11-08 11:42:43',
                'updated_at' => '2018-11-08 11:42:43',
            ),
            286 => 
            array (
                'id' => 1287,
                'recipe_id' => '128',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Purchased shortbread cookies',
                'created_at' => '2018-11-08 11:42:43',
                'updated_at' => '2018-11-08 11:42:43',
            ),
            287 => 
            array (
                'id' => 1288,
                'recipe_id' => '129',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 pounds littleneck clams or cockles',
                'created_at' => '2018-11-08 11:42:45',
                'updated_at' => '2018-11-08 11:42:45',
            ),
            288 => 
            array (
                'id' => 1289,
                'recipe_id' => '129',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 3/4 cups dry white wine',
                'created_at' => '2018-11-08 11:42:45',
                'updated_at' => '2018-11-08 11:42:45',
            ),
            289 => 
            array (
                'id' => 1290,
                'recipe_id' => '129',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 large shallots, peeled',
                'created_at' => '2018-11-08 11:42:45',
                'updated_at' => '2018-11-08 11:42:45',
            ),
            290 => 
            array (
                'id' => 1291,
                'recipe_id' => '129',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 large cloves of garlic, peeled and thinly sliced',
                'created_at' => '2018-11-08 11:42:45',
                'updated_at' => '2018-11-08 11:42:45',
            ),
            291 => 
            array (
                'id' => 1292,
                'recipe_id' => '129',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 bay leaves',
                'created_at' => '2018-11-08 11:42:46',
                'updated_at' => '2018-11-08 11:42:46',
            ),
            292 => 
            array (
                'id' => 1293,
                'recipe_id' => '129',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons fresh lemon juice',
                'created_at' => '2018-11-08 11:42:46',
                'updated_at' => '2018-11-08 11:42:46',
            ),
            293 => 
            array (
                'id' => 1294,
                'recipe_id' => '129',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon unsalted butter',
                'created_at' => '2018-11-08 11:42:46',
                'updated_at' => '2018-11-08 11:42:46',
            ),
            294 => 
            array (
                'id' => 1295,
                'recipe_id' => '129',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 ripe tomatoes, cut into 1/2-inch pieces',
                'created_at' => '2018-11-08 11:42:46',
                'updated_at' => '2018-11-08 11:42:46',
            ),
            295 => 
            array (
                'id' => 1296,
                'recipe_id' => '129',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 large sprigs of fresh tarragon (stems removed), chopped',
                'created_at' => '2018-11-08 11:42:46',
                'updated_at' => '2018-11-08 11:42:46',
            ),
            296 => 
            array (
                'id' => 1297,
                'recipe_id' => '129',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '12 ounces dried linguine',
                'created_at' => '2018-11-08 11:42:46',
                'updated_at' => '2018-11-08 11:42:46',
            ),
            297 => 
            array (
                'id' => 1298,
                'recipe_id' => '129',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons chopped flat-leaf parsley',
                'created_at' => '2018-11-08 11:42:47',
                'updated_at' => '2018-11-08 11:42:47',
            ),
            298 => 
            array (
                'id' => 1299,
                'recipe_id' => '130',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 pounds ground chuck beef',
                'created_at' => '2018-11-08 11:42:48',
                'updated_at' => '2018-11-08 11:42:48',
            ),
            299 => 
            array (
                'id' => 1300,
                'recipe_id' => '130',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup shredded Monterey Jack cheese',
                'created_at' => '2018-11-08 11:42:48',
                'updated_at' => '2018-11-08 11:42:48',
            ),
            300 => 
            array (
                'id' => 1301,
                'recipe_id' => '130',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup chopped fresh cilantro',
                'created_at' => '2018-11-08 11:42:49',
                'updated_at' => '2018-11-08 11:42:49',
            ),
            301 => 
            array (
                'id' => 1302,
                'recipe_id' => '130',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 4-ounce can chopped mild green chilies',
                'created_at' => '2018-11-08 11:42:49',
                'updated_at' => '2018-11-08 11:42:49',
            ),
            302 => 
            array (
                'id' => 1303,
                'recipe_id' => '130',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons minced green onions',
                'created_at' => '2018-11-08 11:42:49',
                'updated_at' => '2018-11-08 11:42:49',
            ),
            303 => 
            array (
                'id' => 1304,
                'recipe_id' => '130',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon tequila',
                'created_at' => '2018-11-08 11:42:49',
                'updated_at' => '2018-11-08 11:42:49',
            ),
            304 => 
            array (
                'id' => 1305,
                'recipe_id' => '130',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons chili powder',
                'created_at' => '2018-11-08 11:42:49',
                'updated_at' => '2018-11-08 11:42:49',
            ),
            305 => 
            array (
                'id' => 1306,
                'recipe_id' => '130',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon salt',
                'created_at' => '2018-11-08 11:42:49',
                'updated_at' => '2018-11-08 11:42:49',
            ),
            306 => 
            array (
                'id' => 1307,
                'recipe_id' => '130',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 avocado, pitted, peeled, sliced',
                'created_at' => '2018-11-08 11:42:50',
                'updated_at' => '2018-11-08 11:42:50',
            ),
            307 => 
            array (
                'id' => 1308,
                'recipe_id' => '130',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Lime-pickled Red Onions',
                'created_at' => '2018-11-08 11:42:50',
                'updated_at' => '2018-11-08 11:42:50',
            ),
            308 => 
            array (
                'id' => 1309,
                'recipe_id' => '130',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Purchased salsas',
                'created_at' => '2018-11-08 11:42:50',
                'updated_at' => '2018-11-08 11:42:50',
            ),
            309 => 
            array (
                'id' => 1310,
                'recipe_id' => '131',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 firm-ripe Fuyu persimmon (12 oz total), peeled with a knife, cored, seeded if necessary, and cut into 1/4-inch dice',
                'created_at' => '2018-11-08 11:42:51',
                'updated_at' => '2018-11-08 11:42:51',
            ),
            310 => 
            array (
                'id' => 1311,
                'recipe_id' => '131',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup finely chopped sweet onion',
                'created_at' => '2018-11-08 11:42:51',
                'updated_at' => '2018-11-08 11:42:51',
            ),
            311 => 
            array (
                'id' => 1312,
                'recipe_id' => '131',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon finely grated peeled fresh ginger',
                'created_at' => '2018-11-08 11:42:52',
                'updated_at' => '2018-11-08 11:42:52',
            ),
            312 => 
            array (
                'id' => 1313,
                'recipe_id' => '131',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 small fresh jalapeño chile, seeded and minced',
                'created_at' => '2018-11-08 11:42:52',
                'updated_at' => '2018-11-08 11:42:52',
            ),
            313 => 
            array (
                'id' => 1314,
                'recipe_id' => '131',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons fresh lime juice',
                'created_at' => '2018-11-08 11:42:52',
                'updated_at' => '2018-11-08 11:42:52',
            ),
            314 => 
            array (
                'id' => 1315,
                'recipe_id' => '131',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 teaspoon salt',
                'created_at' => '2018-11-08 11:42:52',
                'updated_at' => '2018-11-08 11:42:52',
            ),
            315 => 
            array (
                'id' => 1316,
                'recipe_id' => '131',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '4 (1-inch-thick) loin lamb chops',
                'created_at' => '2018-11-08 11:42:52',
                'updated_at' => '2018-11-08 11:42:52',
            ),
            316 => 
            array (
                'id' => 1317,
                'recipe_id' => '131',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons olive oil',
                'created_at' => '2018-11-08 11:42:53',
                'updated_at' => '2018-11-08 11:42:53',
            ),
            317 => 
            array (
                'id' => 1318,
                'recipe_id' => '132',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 tablespoon olive oil',
                'created_at' => '2018-11-08 11:42:54',
                'updated_at' => '2018-11-08 11:42:54',
            ),
            318 => 
            array (
                'id' => 1319,
                'recipe_id' => '132',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 tablespoon Asian sesame oil',
                'created_at' => '2018-11-08 11:42:54',
                'updated_at' => '2018-11-08 11:42:54',
            ),
            319 => 
            array (
                'id' => 1320,
                'recipe_id' => '132',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon ground cumin',
                'created_at' => '2018-11-08 11:42:54',
                'updated_at' => '2018-11-08 11:42:54',
            ),
            320 => 
            array (
                'id' => 1321,
                'recipe_id' => '132',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 (6-inch) pitas with pockets, halved horizontally',
                'created_at' => '2018-11-08 11:42:54',
                'updated_at' => '2018-11-08 11:42:54',
            ),
            321 => 
            array (
                'id' => 1322,
                'recipe_id' => '132',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 lb jumbo lump crabmeat',
                'created_at' => '2018-11-08 11:42:55',
                'updated_at' => '2018-11-08 11:42:55',
            ),
            322 => 
            array (
                'id' => 1323,
                'recipe_id' => '132',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 tablespoons low-fat sour cream',
                'created_at' => '2018-11-08 11:42:55',
                'updated_at' => '2018-11-08 11:42:55',
            ),
            323 => 
            array (
                'id' => 1324,
                'recipe_id' => '132',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon finely chopped scallion',
                'created_at' => '2018-11-08 11:42:55',
                'updated_at' => '2018-11-08 11:42:55',
            ),
            324 => 
            array (
                'id' => 1325,
                'recipe_id' => '132',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon finely chopped fresh cilantro',
                'created_at' => '2018-11-08 11:42:55',
                'updated_at' => '2018-11-08 11:42:55',
            ),
            325 => 
            array (
                'id' => 1326,
                'recipe_id' => '132',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 tablespoon fresh lime juice',
                'created_at' => '2018-11-08 11:42:55',
                'updated_at' => '2018-11-08 11:42:55',
            ),
            326 => 
            array (
                'id' => 1327,
                'recipe_id' => '132',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Dash of Tabasco',
                'created_at' => '2018-11-08 11:42:55',
                'updated_at' => '2018-11-08 11:42:55',
            ),
            327 => 
            array (
                'id' => 1328,
                'recipe_id' => '133',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 3/4 cups diced peeled peaches (about 3 large)',
                'created_at' => '2018-11-08 11:42:57',
                'updated_at' => '2018-11-08 11:42:57',
            ),
            328 => 
            array (
                'id' => 1329,
                'recipe_id' => '133',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup diced red bell pepper',
                'created_at' => '2018-11-08 11:42:57',
                'updated_at' => '2018-11-08 11:42:57',
            ),
            329 => 
            array (
                'id' => 1330,
                'recipe_id' => '133',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup chopped green onions',
                'created_at' => '2018-11-08 11:42:58',
                'updated_at' => '2018-11-08 11:42:58',
            ),
            330 => 
            array (
                'id' => 1331,
                'recipe_id' => '133',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons fresh lime juice, divided',
                'created_at' => '2018-11-08 11:42:58',
                'updated_at' => '2018-11-08 11:42:58',
            ),
            331 => 
            array (
                'id' => 1332,
                'recipe_id' => '133',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons chopped fresh cilantro',
                'created_at' => '2018-11-08 11:42:58',
                'updated_at' => '2018-11-08 11:42:58',
            ),
            332 => 
            array (
                'id' => 1333,
                'recipe_id' => '133',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 tablespoon minced seeded jalapeño chile',
                'created_at' => '2018-11-08 11:42:58',
                'updated_at' => '2018-11-08 11:42:58',
            ),
            333 => 
            array (
                'id' => 1334,
                'recipe_id' => '133',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons minced peeled fresh ginger, divided',
                'created_at' => '2018-11-08 11:42:58',
                'updated_at' => '2018-11-08 11:42:58',
            ),
            334 => 
            array (
                'id' => 1335,
                'recipe_id' => '133',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 garlic clove, minced',
                'created_at' => '2018-11-08 11:42:58',
                'updated_at' => '2018-11-08 11:42:58',
            ),
            335 => 
            array (
                'id' => 1336,
                'recipe_id' => '133',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons soy sauce',
                'created_at' => '2018-11-08 11:42:59',
                'updated_at' => '2018-11-08 11:42:59',
            ),
            336 => 
            array (
                'id' => 1337,
                'recipe_id' => '133',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons oriental sesame oil',
                'created_at' => '2018-11-08 11:42:59',
                'updated_at' => '2018-11-08 11:42:59',
            ),
            337 => 
            array (
                'id' => 1338,
                'recipe_id' => '133',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '16 large sea scallops',
                'created_at' => '2018-11-08 11:42:59',
                'updated_at' => '2018-11-08 11:42:59',
            ),
            338 => 
            array (
                'id' => 1339,
                'recipe_id' => '133',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons honey',
                'created_at' => '2018-11-08 11:42:59',
                'updated_at' => '2018-11-08 11:42:59',
            ),
            339 => 
            array (
                'id' => 1340,
                'recipe_id' => '133',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Fresh cilantro leaves',
                'created_at' => '2018-11-08 11:42:59',
                'updated_at' => '2018-11-08 11:42:59',
            ),
            340 => 
            array (
                'id' => 1341,
                'recipe_id' => '134',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'pastry dough',
                'created_at' => '2018-11-08 11:43:01',
                'updated_at' => '2018-11-08 11:43:01',
            ),
            341 => 
            array (
                'id' => 1342,
                'recipe_id' => '134',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'pie weights or raw rice for weighting shell',
                'created_at' => '2018-11-08 11:43:01',
                'updated_at' => '2018-11-08 11:43:01',
            ),
            342 => 
            array (
                'id' => 1343,
                'recipe_id' => '134',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 lemons',
                'created_at' => '2018-11-08 11:43:01',
                'updated_at' => '2018-11-08 11:43:01',
            ),
            343 => 
            array (
                'id' => 1344,
                'recipe_id' => '134',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1/2 stick (1/4 cup) unsalted butter',
                'created_at' => '2018-11-08 11:43:01',
                'updated_at' => '2018-11-08 11:43:01',
            ),
            344 => 
            array (
                'id' => 1345,
                'recipe_id' => '134',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 large eggs',
                'created_at' => '2018-11-08 11:43:02',
                'updated_at' => '2018-11-08 11:43:02',
            ),
            345 => 
            array (
                'id' => 1346,
                'recipe_id' => '134',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/4 cups sugar',
                'created_at' => '2018-11-08 11:43:02',
                'updated_at' => '2018-11-08 11:43:02',
            ),
            346 => 
            array (
                'id' => 1347,
                'recipe_id' => '134',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup unsulfured molasses',
                'created_at' => '2018-11-08 11:43:02',
                'updated_at' => '2018-11-08 11:43:02',
            ),
            347 => 
            array (
                'id' => 1348,
                'recipe_id' => '134',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup heavy cream',
                'created_at' => '2018-11-08 11:43:02',
                'updated_at' => '2018-11-08 11:43:02',
            ),
            348 => 
            array (
                'id' => 1349,
                'recipe_id' => '134',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons yellow cornmeal',
                'created_at' => '2018-11-08 11:43:02',
                'updated_at' => '2018-11-08 11:43:02',
            ),
            349 => 
            array (
                'id' => 1350,
                'recipe_id' => '134',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/8 teaspoon salt',
                'created_at' => '2018-11-08 11:43:03',
                'updated_at' => '2018-11-08 11:43:03',
            ),
            350 => 
            array (
                'id' => 1351,
                'recipe_id' => '134',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Accompaniment: lightly sweetened whipped cream',
                'created_at' => '2018-11-08 11:43:03',
                'updated_at' => '2018-11-08 11:43:03',
            ),
            351 => 
            array (
                'id' => 1352,
                'recipe_id' => '135',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 5-ounce tube of 3-inch-diameter refrigerator biscuits',
                'created_at' => '2018-11-08 11:43:05',
                'updated_at' => '2018-11-08 11:43:05',
            ),
            352 => 
            array (
                'id' => 1353,
                'recipe_id' => '135',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '2 tablespoons (1/4 stick) butter',
                'created_at' => '2018-11-08 11:43:05',
                'updated_at' => '2018-11-08 11:43:05',
            ),
            353 => 
            array (
                'id' => 1354,
                'recipe_id' => '135',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '12 ounces fresh shiitake mushrooms, stems trimmed, caps sliced',
                'created_at' => '2018-11-08 11:43:06',
                'updated_at' => '2018-11-08 11:43:06',
            ),
            354 => 
            array (
                'id' => 1355,
                'recipe_id' => '135',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons all purpose flour',
                'created_at' => '2018-11-08 11:43:06',
                'updated_at' => '2018-11-08 11:43:06',
            ),
            355 => 
            array (
                'id' => 1356,
                'recipe_id' => '135',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons chopped fresh thyme or 2 teaspoons dried',
                'created_at' => '2018-11-08 11:43:06',
                'updated_at' => '2018-11-08 11:43:06',
            ),
            356 => 
            array (
                'id' => 1357,
                'recipe_id' => '135',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 14 1/2-ounce can vegetable broth',
                'created_at' => '2018-11-08 11:43:07',
                'updated_at' => '2018-11-08 11:43:07',
            ),
            357 => 
            array (
                'id' => 1358,
                'recipe_id' => '135',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup Madeira',
                'created_at' => '2018-11-08 11:43:07',
                'updated_at' => '2018-11-08 11:43:07',
            ),
            358 => 
            array (
                'id' => 1359,
                'recipe_id' => '136',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons cumin seeds',
                'created_at' => '2018-11-08 11:43:10',
                'updated_at' => '2018-11-08 11:43:10',
            ),
            359 => 
            array (
                'id' => 1360,
                'recipe_id' => '136',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons coriander seeds',
                'created_at' => '2018-11-08 11:43:11',
                'updated_at' => '2018-11-08 11:43:11',
            ),
            360 => 
            array (
                'id' => 1361,
                'recipe_id' => '136',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons whole black peppercorns',
                'created_at' => '2018-11-08 11:43:11',
                'updated_at' => '2018-11-08 11:43:11',
            ),
            361 => 
            array (
                'id' => 1362,
                'recipe_id' => '136',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large shallot, minced',
                'created_at' => '2018-11-08 11:43:11',
                'updated_at' => '2018-11-08 11:43:11',
            ),
            362 => 
            array (
                'id' => 1363,
                'recipe_id' => '136',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons olive oil',
                'created_at' => '2018-11-08 11:43:12',
                'updated_at' => '2018-11-08 11:43:12',
            ),
            363 => 
            array (
                'id' => 1364,
                'recipe_id' => '136',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 teaspoon salt',
                'created_at' => '2018-11-08 11:43:12',
                'updated_at' => '2018-11-08 11:43:12',
            ),
            364 => 
            array (
                'id' => 1365,
                'recipe_id' => '136',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 garlic clove, minced',
                'created_at' => '2018-11-08 11:43:12',
                'updated_at' => '2018-11-08 11:43:12',
            ),
            365 => 
            array (
                'id' => 1366,
                'recipe_id' => '136',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 1/2 pounds pork tenderloins, trimmed, cut crosswise into 8 equal logs',
                'created_at' => '2018-11-08 11:43:12',
                'updated_at' => '2018-11-08 11:43:12',
            ),
            366 => 
            array (
                'id' => 1367,
                'recipe_id' => '136',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '12 dried corn husks, soaked in warm water 1 hour, drained, patted dry',
                'created_at' => '2018-11-08 11:43:13',
                'updated_at' => '2018-11-08 11:43:13',
            ),
            367 => 
            array (
                'id' => 1368,
                'recipe_id' => '136',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Cranberry-Avocado Salsa',
                'created_at' => '2018-11-08 11:43:13',
                'updated_at' => '2018-11-08 11:43:13',
            ),
            368 => 
            array (
                'id' => 1369,
                'recipe_id' => '137',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 medium beets (about 1 pound), tops trimmed',
                'created_at' => '2018-11-08 11:43:15',
                'updated_at' => '2018-11-08 11:43:15',
            ),
            369 => 
            array (
                'id' => 1370,
                'recipe_id' => '137',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 medium-size pink grapefruits (about 2 1/2 pounds)',
                'created_at' => '2018-11-08 11:43:15',
                'updated_at' => '2018-11-08 11:43:15',
            ),
            370 => 
            array (
                'id' => 1371,
                'recipe_id' => '137',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons Sherry wine vinegar',
                'created_at' => '2018-11-08 11:43:15',
                'updated_at' => '2018-11-08 11:43:15',
            ),
            371 => 
            array (
                'id' => 1372,
                'recipe_id' => '137',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 teaspoons Dijon mustard',
                'created_at' => '2018-11-08 11:43:16',
                'updated_at' => '2018-11-08 11:43:16',
            ),
            372 => 
            array (
                'id' => 1373,
                'recipe_id' => '137',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3/4 cup extra-virgin olive oil',
                'created_at' => '2018-11-08 11:43:16',
                'updated_at' => '2018-11-08 11:43:16',
            ),
            373 => 
            array (
                'id' => 1374,
                'recipe_id' => '137',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 5-ounce bags mixed baby greens',
                'created_at' => '2018-11-08 11:43:16',
                'updated_at' => '2018-11-08 11:43:16',
            ),
            374 => 
            array (
                'id' => 1375,
                'recipe_id' => '137',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 medium avocados, pitted, peeled, cut into 1/2-inch pieces',
                'created_at' => '2018-11-08 11:43:16',
                'updated_at' => '2018-11-08 11:43:16',
            ),
            375 => 
            array (
                'id' => 1376,
                'recipe_id' => '137',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 cup fresh pomegranate seeds (from 2 large pomegranates)',
                'created_at' => '2018-11-08 11:43:16',
                'updated_at' => '2018-11-08 11:43:16',
            ),
            376 => 
            array (
                'id' => 1377,
                'recipe_id' => '138',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '8 cups shredded green cabbage (about 1 small head)',
                'created_at' => '2018-11-08 11:43:18',
                'updated_at' => '2018-11-08 11:43:18',
            ),
            377 => 
            array (
                'id' => 1378,
                'recipe_id' => '138',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3 medium carrots, peeled, coarsely grated (about 2 1/2 cups)',
                'created_at' => '2018-11-08 11:43:18',
                'updated_at' => '2018-11-08 11:43:18',
            ),
            378 => 
            array (
                'id' => 1379,
                'recipe_id' => '138',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 medium Granny Smith apples, peeled, cored, coarsely grated',
                'created_at' => '2018-11-08 11:43:18',
                'updated_at' => '2018-11-08 11:43:18',
            ),
            379 => 
            array (
                'id' => 1380,
                'recipe_id' => '138',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 green onions, thinly sliced',
                'created_at' => '2018-11-08 11:43:18',
                'updated_at' => '2018-11-08 11:43:18',
            ),
            380 => 
            array (
                'id' => 1381,
                'recipe_id' => '138',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons apple cider vinegar',
                'created_at' => '2018-11-08 11:43:18',
                'updated_at' => '2018-11-08 11:43:18',
            ),
            381 => 
            array (
                'id' => 1382,
                'recipe_id' => '138',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2/3 cup sour cream',
                'created_at' => '2018-11-08 11:43:19',
                'updated_at' => '2018-11-08 11:43:19',
            ),
            382 => 
            array (
                'id' => 1383,
                'recipe_id' => '138',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup mayonnaise',
                'created_at' => '2018-11-08 11:43:19',
                'updated_at' => '2018-11-08 11:43:19',
            ),
            383 => 
            array (
                'id' => 1384,
                'recipe_id' => '138',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup frozen apple juice concentrate, thawed',
                'created_at' => '2018-11-08 11:43:19',
                'updated_at' => '2018-11-08 11:43:19',
            ),
            384 => 
            array (
                'id' => 1385,
                'recipe_id' => '138',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons poppy seeds',
                'created_at' => '2018-11-08 11:43:19',
                'updated_at' => '2018-11-08 11:43:19',
            ),
            385 => 
            array (
                'id' => 1386,
                'recipe_id' => '139',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Nonstick vegetable oil spray',
                'created_at' => '2018-11-08 11:43:21',
                'updated_at' => '2018-11-08 11:43:21',
            ),
            386 => 
            array (
                'id' => 1387,
                'recipe_id' => '139',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups graham cracker crumbs',
                'created_at' => '2018-11-08 11:43:22',
                'updated_at' => '2018-11-08 11:43:22',
            ),
            387 => 
            array (
                'id' => 1388,
                'recipe_id' => '139',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 tablespoons (3/4 stick) unsalted butter, melted',
                'created_at' => '2018-11-08 11:43:22',
                'updated_at' => '2018-11-08 11:43:22',
            ),
            388 => 
            array (
                'id' => 1389,
                'recipe_id' => '139',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 quart chocolate ice cream, slightly softened until spreadable',
                'created_at' => '2018-11-08 11:43:23',
                'updated_at' => '2018-11-08 11:43:23',
            ),
            389 => 
            array (
                'id' => 1390,
                'recipe_id' => '139',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups coarsely chopped chocolate-covered graham crackers',
                'created_at' => '2018-11-08 11:43:23',
                'updated_at' => '2018-11-08 11:43:23',
            ),
            390 => 
            array (
                'id' => 1391,
                'recipe_id' => '139',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups marshmallow creme',
                'created_at' => '2018-11-08 11:43:23',
                'updated_at' => '2018-11-08 11:43:23',
            ),
            391 => 
            array (
                'id' => 1392,
                'recipe_id' => '139',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups mini marshmallows',
                'created_at' => '2018-11-08 11:43:24',
                'updated_at' => '2018-11-08 11:43:24',
            ),
            392 => 
            array (
                'id' => 1393,
                'recipe_id' => '139',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 cup whipping cream',
                'created_at' => '2018-11-08 11:43:24',
                'updated_at' => '2018-11-08 11:43:24',
            ),
            393 => 
            array (
                'id' => 1394,
                'recipe_id' => '139',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '5 ounces imported milk chocolate, finely chopped',
                'created_at' => '2018-11-08 11:43:24',
                'updated_at' => '2018-11-08 11:43:24',
            ),
            394 => 
            array (
                'id' => 1395,
                'recipe_id' => '140',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 recipe Thin Butter Crust',
                'created_at' => '2018-11-08 11:43:25',
                'updated_at' => '2018-11-08 11:43:25',
            ),
            395 => 
            array (
                'id' => 1396,
                'recipe_id' => '140',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '6 to 8 freshly picked firm and slightly tart apples, such as Rhode Island Greenings, Gravensteins or Granny Smiths (about 3 pounds)',
                'created_at' => '2018-11-08 11:43:25',
                'updated_at' => '2018-11-08 11:43:25',
            ),
            396 => 
            array (
                'id' => 1397,
                'recipe_id' => '140',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => 'granulated sugar (see Note)',
                'created_at' => '2018-11-08 11:43:25',
                'updated_at' => '2018-11-08 11:43:25',
            ),
            397 => 
            array (
                'id' => 1398,
                'recipe_id' => '140',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'ground cinnamon',
                'created_at' => '2018-11-08 11:43:25',
                'updated_at' => '2018-11-08 11:43:25',
            ),
            398 => 
            array (
                'id' => 1399,
                'recipe_id' => '140',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'about 3 tablespoons sifted all-purpose flour',
                'created_at' => '2018-11-08 11:43:26',
                'updated_at' => '2018-11-08 11:43:26',
            ),
            399 => 
            array (
                'id' => 1400,
                'recipe_id' => '140',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '3 tablespoons butter, cut in small bits',
                'created_at' => '2018-11-08 11:43:26',
                'updated_at' => '2018-11-08 11:43:26',
            ),
            400 => 
            array (
                'id' => 1401,
                'recipe_id' => '141',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '16 teaspoons Stilton cheese (about 4 ounces)',
                'created_at' => '2018-11-08 11:43:27',
                'updated_at' => '2018-11-08 11:43:27',
            ),
            401 => 
            array (
                'id' => 1402,
                'recipe_id' => '141',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '32 dried black Mission figs',
                'created_at' => '2018-11-08 11:43:28',
                'updated_at' => '2018-11-08 11:43:28',
            ),
            402 => 
            array (
                'id' => 1403,
                'recipe_id' => '141',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 6x4-inch thin prosciutto slices, cut lengthwise in half',
                'created_at' => '2018-11-08 11:43:28',
                'updated_at' => '2018-11-08 11:43:28',
            ),
            403 => 
            array (
                'id' => 1404,
                'recipe_id' => '141',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '8 sheets fresh phyllo pastry or frozen, thawed',
                'created_at' => '2018-11-08 11:43:28',
                'updated_at' => '2018-11-08 11:43:28',
            ),
            404 => 
            array (
                'id' => 1405,
                'recipe_id' => '141',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '3/4 cup (1 1/2 sticks) unsalted butter, melted',
                'created_at' => '2018-11-08 11:43:28',
                'updated_at' => '2018-11-08 11:43:28',
            ),
            405 => 
            array (
                'id' => 1406,
                'recipe_id' => '141',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 cups ruby Port',
                'created_at' => '2018-11-08 11:43:29',
                'updated_at' => '2018-11-08 11:43:29',
            ),
            406 => 
            array (
                'id' => 1407,
                'recipe_id' => '141',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup balsamic vinegar',
                'created_at' => '2018-11-08 11:43:30',
                'updated_at' => '2018-11-08 11:43:30',
            ),
            407 => 
            array (
                'id' => 1408,
                'recipe_id' => '141',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '2 tablespoons sugar',
                'created_at' => '2018-11-08 11:43:30',
                'updated_at' => '2018-11-08 11:43:30',
            ),
            408 => 
            array (
                'id' => 1409,
                'recipe_id' => '141',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 cups whipping cream',
                'created_at' => '2018-11-08 11:43:31',
                'updated_at' => '2018-11-08 11:43:31',
            ),
            409 => 
            array (
                'id' => 1410,
                'recipe_id' => '141',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '4 1/2 tablespoons pine nuts, toasted',
                'created_at' => '2018-11-08 11:43:31',
                'updated_at' => '2018-11-08 11:43:31',
            ),
            410 => 
            array (
                'id' => 1411,
                'recipe_id' => '142',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 cup all purpose flour',
                'created_at' => '2018-11-08 11:43:34',
                'updated_at' => '2018-11-08 11:43:34',
            ),
            411 => 
            array (
                'id' => 1412,
                'recipe_id' => '142',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup flaxseed meal*',
                'created_at' => '2018-11-08 11:43:34',
                'updated_at' => '2018-11-08 11:43:34',
            ),
            412 => 
            array (
                'id' => 1413,
                'recipe_id' => '142',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup finely chopped walnuts',
                'created_at' => '2018-11-08 11:43:35',
                'updated_at' => '2018-11-08 11:43:35',
            ),
            413 => 
            array (
                'id' => 1414,
                'recipe_id' => '142',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 1/2 teaspoons baking powder',
                'created_at' => '2018-11-08 11:43:35',
                'updated_at' => '2018-11-08 11:43:35',
            ),
            414 => 
            array (
                'id' => 1415,
                'recipe_id' => '142',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon baking soda',
                'created_at' => '2018-11-08 11:43:36',
                'updated_at' => '2018-11-08 11:43:36',
            ),
            415 => 
            array (
                'id' => 1416,
                'recipe_id' => '142',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/2 teaspoon salt',
                'created_at' => '2018-11-08 11:43:37',
                'updated_at' => '2018-11-08 11:43:37',
            ),
            416 => 
            array (
                'id' => 1417,
                'recipe_id' => '142',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 1/4 cups reduced-fat (2%) buttermilk',
                'created_at' => '2018-11-08 11:43:37',
                'updated_at' => '2018-11-08 11:43:37',
            ),
            417 => 
            array (
                'id' => 1418,
                'recipe_id' => '142',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1/4 cup pure maple syrup',
                'created_at' => '2018-11-08 11:43:38',
                'updated_at' => '2018-11-08 11:43:38',
            ),
            418 => 
            array (
                'id' => 1419,
                'recipe_id' => '142',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => '1 large egg',
                'created_at' => '2018-11-08 11:43:38',
                'updated_at' => '2018-11-08 11:43:38',
            ),
            419 => 
            array (
                'id' => 1420,
                'recipe_id' => '142',
                'ingrident' => NULL,
                'amount' => NULL,
            'note' => '1 tablespoon (or more) vegetable oil',
                'created_at' => '2018-11-08 11:43:38',
                'updated_at' => '2018-11-08 11:43:38',
            ),
            420 => 
            array (
                'id' => 1421,
                'recipe_id' => '142',
                'ingrident' => NULL,
                'amount' => NULL,
                'note' => 'Additional pure maple syrup',
                'created_at' => '2018-11-08 11:43:38',
                'updated_at' => '2018-11-08 11:43:38',
            ),
        ));
        
        
    }
}