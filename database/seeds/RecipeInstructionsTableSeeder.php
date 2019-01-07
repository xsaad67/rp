<?php

use Illuminate\Database\Seeder;

class RecipeInstructionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipe_instructions')->delete();
        
        \DB::table('recipe_instructions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'recipe_id' => 1,
                'description' => 'In a 5 qt pot, heat water to a boil and cook pasta until al dente.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:08',
                'updated_at' => '2019-01-07 02:04:08',
            ),
            1 => 
            array (
                'id' => 2,
                'recipe_id' => 1,
                'description' => 'While the pasta is cooking, melt butter and olive oil in pan.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:08',
                'updated_at' => '2019-01-07 02:04:08',
            ),
            2 => 
            array (
                'id' => 3,
                'recipe_id' => 1,
                'description' => 'Sautee onion and garlic, and add crushed red pepper flakes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:08',
                'updated_at' => '2019-01-07 02:04:08',
            ),
            3 => 
            array (
                'id' => 4,
                'recipe_id' => 1,
                'description' => 'Add lemon juice, oregano, basil, and Old Bay seasoning, stir for one minute Add clams with juice.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:08',
                'updated_at' => '2019-01-07 02:04:08',
            ),
            4 => 
            array (
                'id' => 5,
                'recipe_id' => 1,
                'description' => 'Simmer for 5 minutes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:08',
                'updated_at' => '2019-01-07 02:04:08',
            ),
            5 => 
            array (
                'id' => 6,
                'recipe_id' => 1,
                'description' => 'Drain pasta and place in large bowl.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:08',
                'updated_at' => '2019-01-07 02:04:08',
            ),
            6 => 
            array (
                'id' => 7,
                'recipe_id' => 1,
                'description' => 'Cover pasta with clam sauce, stir well and top with parsley and parmesan cheese.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:09',
                'updated_at' => '2019-01-07 02:04:09',
            ),
            7 => 
            array (
                'id' => 8,
                'recipe_id' => 1,
                'description' => 'Serve with warm crusty bread and chilled white wine.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:09',
                'updated_at' => '2019-01-07 02:04:09',
            ),
            8 => 
            array (
                'id' => 9,
                'recipe_id' => 2,
                'description' => 'Combine all ingredients in a bottle.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:12',
                'updated_at' => '2019-01-07 02:04:12',
            ),
            9 => 
            array (
                'id' => 10,
                'recipe_id' => 2,
                'description' => 'Shake to blend.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:12',
                'updated_at' => '2019-01-07 02:04:12',
            ),
            10 => 
            array (
                'id' => 11,
                'recipe_id' => 2,
                'description' => 'Allow flavors to blend about an hour or so,  Will even be more flavorful the following day. Be sure to refrigerate any leftovers.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:12',
                'updated_at' => '2019-01-07 02:04:12',
            ),
            11 => 
            array (
                'id' => 12,
                'recipe_id' => 2,
                'description' => 'Makes about 1 cup.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:12',
                'updated_at' => '2019-01-07 02:04:12',
            ),
            12 => 
            array (
                'id' => 13,
                'recipe_id' => 3,
                'description' => 'Preheat oven to 375 degrees.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:15',
                'updated_at' => '2019-01-07 02:04:15',
            ),
            13 => 
            array (
                'id' => 14,
                'recipe_id' => 3,
                'description' => 'Place chicken skin side down in a large baking dish.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:15',
                'updated_at' => '2019-01-07 02:04:15',
            ),
            14 => 
            array (
                'id' => 15,
                'recipe_id' => 3,
                'description' => 'Combine the remaining ingredients in a bowl and then pour on top of the chicken.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:16',
                'updated_at' => '2019-01-07 02:04:16',
            ),
            15 => 
            array (
                'id' => 16,
                'recipe_id' => 3,
                'description' => 'Bake uncovered for 45 minutes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:16',
                'updated_at' => '2019-01-07 02:04:16',
            ),
            16 => 
            array (
                'id' => 17,
                'recipe_id' => 3,
                'description' => 'Turn the chicken over in the dish and bake for another 15 minutes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:16',
                'updated_at' => '2019-01-07 02:04:16',
            ),
            17 => 
            array (
                'id' => 18,
                'recipe_id' => 4,
                'description' => 'Mix all ingredients gently in a large bowl until well combined.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:18',
                'updated_at' => '2019-01-07 02:04:18',
            ),
            18 => 
            array (
                'id' => 19,
                'recipe_id' => 4,
                'description' => 'Roll meatballs 1 1/2- 1 3/4&quot; in diameter.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:18',
                'updated_at' => '2019-01-07 02:04:18',
            ),
            19 => 
            array (
                'id' => 20,
                'recipe_id' => 4,
                'description' => 'Heat about 1/4&quot; of oil over medium heat in a large frying pan.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:18',
                'updated_at' => '2019-01-07 02:04:18',
            ),
            20 => 
            array (
                'id' => 21,
                'recipe_id' => 4,
                'description' => 'Fry meatballs in oil, rolling frequently, until evenly browned and juices run clear.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:18',
                'updated_at' => '2019-01-07 02:04:18',
            ),
            21 => 
            array (
                'id' => 22,
                'recipe_id' => 4,
            'description' => 'Drop meatballs in your favorite sauce (I highly recommend My Mama Iuliucci\'s&quot;Don\'t Skip a Step&quot; Spaghetti Sauce recipe#26947) and let simmer for awhile to flavor sauce or just serve with your favorite pasta and sauce.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:18',
                'updated_at' => '2019-01-07 02:04:18',
            ),
            22 => 
            array (
                'id' => 23,
                'recipe_id' => 4,
                'description' => 'Tip: You can also bake or broil these if the frying part is too much of a hassle-- I use my broiler pan if I bake them, so the fat drips down and away from the meatballs.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:18',
                'updated_at' => '2019-01-07 02:04:18',
            ),
            23 => 
            array (
                'id' => 24,
                'recipe_id' => 5,
                'description' => 'Preheat oven to 350.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:21',
                'updated_at' => '2019-01-07 02:04:21',
            ),
            24 => 
            array (
                'id' => 25,
                'recipe_id' => 5,
            'description' => 'Prepare chicken for stuffing.(You can either, slice 2 thick chicken breasts in half and make 4, or beat 4 chicken breast until thin and wide.).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:21',
                'updated_at' => '2019-01-07 02:04:21',
            ),
            25 => 
            array (
                'id' => 26,
                'recipe_id' => 5,
                'description' => 'Cook spinach in garlic and oil on top of stove until done. ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:21',
                'updated_at' => '2019-01-07 02:04:21',
            ),
            26 => 
            array (
                'id' => 27,
                'recipe_id' => 5,
            'description' => 'Add in feta cheese and mix well. (You can add as much as you like.  I LOVE feta cheese!).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:21',
                'updated_at' => '2019-01-07 02:04:21',
            ),
            27 => 
            array (
                'id' => 28,
                'recipe_id' => 5,
            'description' => 'Distribute spinach mixture onto each chicken breast. (You may have some leftover).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:21',
                'updated_at' => '2019-01-07 02:04:21',
            ),
            28 => 
            array (
                'id' => 29,
                'recipe_id' => 5,
            'description' => 'Wrap chicken around mixture (kinda like a taco) and secure with a toothpick.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:21',
                'updated_at' => '2019-01-07 02:04:21',
            ),
            29 => 
            array (
                'id' => 30,
                'recipe_id' => 5,
                'description' => 'Roll each breast in bread crumbs until well coated.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:21',
                'updated_at' => '2019-01-07 02:04:21',
            ),
            30 => 
            array (
                'id' => 31,
                'recipe_id' => 5,
                'description' => 'Place in glass baking dish and pour butter over them.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:21',
                'updated_at' => '2019-01-07 02:04:21',
            ),
            31 => 
            array (
                'id' => 32,
                'recipe_id' => 5,
                'description' => 'Cook for 30 minutes and serve.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:21',
                'updated_at' => '2019-01-07 02:04:21',
            ),
            32 => 
            array (
                'id' => 33,
                'recipe_id' => 5,
                'description' => 'NOTE:.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:21',
                'updated_at' => '2019-01-07 02:04:21',
            ),
            33 => 
            array (
                'id' => 34,
                'recipe_id' => 5,
                'description' => 'I usually have spinach mixture left over and just serve it as a side dish.  It\'s so good that people always want more!',
                'image' => NULL,
                'created_at' => '2019-01-07 02:04:21',
                'updated_at' => '2019-01-07 02:04:21',
            ),
            34 => 
            array (
                'id' => 35,
                'recipe_id' => 6,
                'description' => 'Preheat oven to 375&deg;F.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:48',
                'updated_at' => '2019-01-07 02:05:48',
            ),
            35 => 
            array (
                'id' => 36,
                'recipe_id' => 6,
                'description' => 'Place chicken in a 9x13-inch baking dish.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:48',
                'updated_at' => '2019-01-07 02:05:48',
            ),
            36 => 
            array (
                'id' => 37,
                'recipe_id' => 6,
                'description' => 'Mix the oil, soy sauce, ketchup, honey, garlic, salt and pepper and pour over the chicken.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:48',
                'updated_at' => '2019-01-07 02:05:48',
            ),
            37 => 
            array (
                'id' => 38,
                'recipe_id' => 6,
            'description' => 'Bake at 375&deg;F (190&deg;C) for one hour or until sauce is caramelized.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:49',
                'updated_at' => '2019-01-07 02:05:49',
            ),
            38 => 
            array (
                'id' => 39,
                'recipe_id' => 7,
            'description' => 'Heat oven to 425&deg;F (220 Celsius).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:52',
                'updated_at' => '2019-01-07 02:05:52',
            ),
            39 => 
            array (
                'id' => 40,
                'recipe_id' => 7,
                'description' => 'Put flour, baking powder and salt into a large bowl; stir mix well Add butter and cut in with a pastry blender or rub in with your fingers, until the mixture looks like fine crumbs.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:52',
                'updated_at' => '2019-01-07 02:05:52',
            ),
            40 => 
            array (
                'id' => 41,
                'recipe_id' => 7,
                'description' => 'Add sugar; toss to mix.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:52',
                'updated_at' => '2019-01-07 02:05:52',
            ),
            41 => 
            array (
                'id' => 42,
                'recipe_id' => 7,
            'description' => 'Add milk and stir with a wooden spoon until dough forms,(the dough may be a bit crumbly).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:52',
                'updated_at' => '2019-01-07 02:05:52',
            ),
            42 => 
            array (
                'id' => 43,
                'recipe_id' => 7,
                'description' => 'Place dough on floured counter and knead gently until the dough comes together in a ball.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:52',
                'updated_at' => '2019-01-07 02:05:52',
            ),
            43 => 
            array (
                'id' => 44,
                'recipe_id' => 7,
                'description' => 'Pat or roll into a circle about 1 1/2 inches thick.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:52',
                'updated_at' => '2019-01-07 02:05:52',
            ),
            44 => 
            array (
                'id' => 45,
                'recipe_id' => 7,
                'description' => 'cut each circle into 6 or 8 wedges.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:52',
                'updated_at' => '2019-01-07 02:05:52',
            ),
            45 => 
            array (
                'id' => 46,
                'recipe_id' => 7,
                'description' => 'place wedges on a greased cookie sheet- slightly apart for crisp sides, touching for soft.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:52',
                'updated_at' => '2019-01-07 02:05:52',
            ),
            46 => 
            array (
                'id' => 47,
                'recipe_id' => 7,
                'description' => 'Bake about 12 minutes, or until medium brown on top.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:52',
                'updated_at' => '2019-01-07 02:05:52',
            ),
            47 => 
            array (
                'id' => 48,
                'recipe_id' => 8,
            'description' => 'Microwave (or bake in oven at 400 for 1hr) the potatoes until done.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:55',
                'updated_at' => '2019-01-07 02:05:55',
            ),
            48 => 
            array (
                'id' => 49,
                'recipe_id' => 8,
                'description' => 'Allow to cool a bit.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:55',
                'updated_at' => '2019-01-07 02:05:55',
            ),
            49 => 
            array (
                'id' => 50,
                'recipe_id' => 8,
                'description' => 'Slice about a 1&quot; strip of the skin off the top of each potato.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:55',
                'updated_at' => '2019-01-07 02:05:55',
            ),
            50 => 
            array (
                'id' => 51,
                'recipe_id' => 8,
                'description' => 'Carefully scoop out the pulp, placing in a large bowl, and leaving potato shells intact.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:55',
                'updated_at' => '2019-01-07 02:05:55',
            ),
            51 => 
            array (
                'id' => 52,
                'recipe_id' => 8,
                'description' => 'Mash the potato pulp along with the margarine.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:55',
                'updated_at' => '2019-01-07 02:05:55',
            ),
            52 => 
            array (
                'id' => 53,
                'recipe_id' => 8,
                'description' => 'Add milk, sour cream, cheese, salt and pepper; combining well.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:55',
                'updated_at' => '2019-01-07 02:05:55',
            ),
            53 => 
            array (
                'id' => 54,
                'recipe_id' => 8,
                'description' => 'Spoon the mixture back into the potato shells, piling high.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:55',
                'updated_at' => '2019-01-07 02:05:55',
            ),
            54 => 
            array (
                'id' => 55,
                'recipe_id' => 8,
                'description' => 'Top with the crumbled bacon or bacon bits.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:55',
                'updated_at' => '2019-01-07 02:05:55',
            ),
            55 => 
            array (
                'id' => 56,
                'recipe_id' => 8,
                'description' => 'Bake at 400 for 15 minutes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:55',
                'updated_at' => '2019-01-07 02:05:55',
            ),
            56 => 
            array (
                'id' => 57,
                'recipe_id' => 9,
                'description' => 'In large bowl, beat eggs and oil until smooth.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:58',
                'updated_at' => '2019-01-07 02:05:58',
            ),
            57 => 
            array (
                'id' => 58,
                'recipe_id' => 9,
                'description' => 'Add next 6 ingredients and mix well.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:58',
                'updated_at' => '2019-01-07 02:05:58',
            ),
            58 => 
            array (
                'id' => 59,
                'recipe_id' => 9,
                'description' => 'Fold in apples.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:58',
                'updated_at' => '2019-01-07 02:05:58',
            ),
            59 => 
            array (
                'id' => 60,
                'recipe_id' => 9,
                'description' => 'Pour into greased 9 by 13 pan.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:58',
                'updated_at' => '2019-01-07 02:05:58',
            ),
            60 => 
            array (
                'id' => 61,
                'recipe_id' => 9,
                'description' => 'Bake at 350F degrees for 50-55 minutes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:05:58',
                'updated_at' => '2019-01-07 02:05:58',
            ),
            61 => 
            array (
                'id' => 62,
                'recipe_id' => 10,
                'description' => 'Blend all ingredients in blender.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:00',
                'updated_at' => '2019-01-07 02:06:00',
            ),
            62 => 
            array (
                'id' => 63,
                'recipe_id' => 10,
                'description' => 'Spray skillet with cooking spray and cook just like&quot;silver dollar&quot; pancakes, a few small ones at a time.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:01',
                'updated_at' => '2019-01-07 02:06:01',
            ),
            63 => 
            array (
                'id' => 64,
                'recipe_id' => 10,
                'description' => 'Top with your favorite pancake topping!',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:01',
                'updated_at' => '2019-01-07 02:06:01',
            ),
            64 => 
            array (
                'id' => 65,
                'recipe_id' => 11,
                'description' => 'Heat oven to 350&deg;F.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:04',
                'updated_at' => '2019-01-07 02:06:04',
            ),
            65 => 
            array (
                'id' => 66,
                'recipe_id' => 11,
                'description' => 'Grease and flour two 9 inch round baking pans or one 13x9 inch pan.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:04',
                'updated_at' => '2019-01-07 02:06:04',
            ),
            66 => 
            array (
                'id' => 67,
                'recipe_id' => 11,
                'description' => 'In large mixer bowl, stir together dry ingredients.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:04',
                'updated_at' => '2019-01-07 02:06:04',
            ),
            67 => 
            array (
                'id' => 68,
                'recipe_id' => 11,
                'description' => 'Add eggs, milk, oil, and vanilla; beat on medium speed for 2 minutes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:04',
                'updated_at' => '2019-01-07 02:06:04',
            ),
            68 => 
            array (
                'id' => 69,
                'recipe_id' => 11,
            'description' => 'Stir in boiling water by hand (batter will be thin). NOTE: I have tried it with 1/2 cup, 2/3 cup and 3/4 cup boiling water and we prefer it with less than 1 cup water. I usually use between 2/3 &amp; 3/4 cups. The cake is still very moist but it doesn\'t seem to &quot;fall&quot; as much as it cools. This might have to do with our high humidity or brand of flour or other factors so I don\'t know if it will work for everyone.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:04',
                'updated_at' => '2019-01-07 02:06:04',
            ),
            69 => 
            array (
                'id' => 70,
                'recipe_id' => 11,
                'description' => 'Pour into prepared pan.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:04',
                'updated_at' => '2019-01-07 02:06:04',
            ),
            70 => 
            array (
                'id' => 71,
                'recipe_id' => 11,
            'description' => 'Bake 30 to 35 minutes for round 9-inch pans, 35 to 40 minutes for rectangular pan or until wooden pick inserted in center comes out clean. (Do not use 8-inch pans or the batter will overflow.).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:04',
                'updated_at' => '2019-01-07 02:06:04',
            ),
            71 => 
            array (
                'id' => 72,
                'recipe_id' => 11,
                'description' => 'Because they have a tendency to overflow if you fill them more than 2/3 full, I usually get about 27-28 cupcakes per batch. Bake for approximately 18-20 minutes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:04',
                'updated_at' => '2019-01-07 02:06:04',
            ),
            72 => 
            array (
                'id' => 73,
                'recipe_id' => 11,
                'description' => 'Cool 10 minutes; remove from pan to wire racks.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:04',
                'updated_at' => '2019-01-07 02:06:04',
            ),
            73 => 
            array (
                'id' => 74,
                'recipe_id' => 11,
                'description' => 'Please note: baking cocoa isn\'t hot chocolate drink mix! Baking cocoa contains no sugar and it is found on the baking aisle. Chocolate drink mixes that you add to milk or water to drink WILL NOT work in this recipe.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:04',
                'updated_at' => '2019-01-07 02:06:04',
            ),
            74 => 
            array (
                'id' => 75,
                'recipe_id' => 12,
                'description' => 'Heat oven to 350&deg;.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:07',
                'updated_at' => '2019-01-07 02:06:07',
            ),
            75 => 
            array (
                'id' => 76,
                'recipe_id' => 12,
                'description' => 'In large mixer bowl; cream butter and sugar until light and fluffy.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:07',
                'updated_at' => '2019-01-07 02:06:07',
            ),
            76 => 
            array (
                'id' => 77,
                'recipe_id' => 12,
                'description' => 'Add eggs and vanilla; beat well.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:07',
                'updated_at' => '2019-01-07 02:06:07',
            ),
            77 => 
            array (
                'id' => 78,
                'recipe_id' => 12,
                'description' => 'Combine flour, cocoa, baking soda and salt; gradually blend into creamed mixture. Stir in peanut butter or chocolate chips.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:07',
                'updated_at' => '2019-01-07 02:06:07',
            ),
            78 => 
            array (
                'id' => 79,
                'recipe_id' => 12,
            'description' => 'Drop by teaspoonfuls onto ungreased cookie sheet. Bake 8-9 minutes. (Do not overbake; cookies will be soft. They will puff while baking and flatten while cooling.).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:07',
                'updated_at' => '2019-01-07 02:06:07',
            ),
            79 => 
            array (
                'id' => 80,
                'recipe_id' => 12,
                'description' => 'Cool slightly; remove from cookie sheet onto wire rack. Cool completely.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:07',
                'updated_at' => '2019-01-07 02:06:07',
            ),
            80 => 
            array (
                'id' => 81,
                'recipe_id' => 13,
                'description' => 'Cream the butter in a small bowl.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:10',
                'updated_at' => '2019-01-07 02:06:10',
            ),
            81 => 
            array (
                'id' => 82,
                'recipe_id' => 13,
            'description' => 'Blend in the cocoa powder (the amount desired for a light, medium or dark flavor), vanilla, confectioners sugar, alternately with the cream.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:10',
                'updated_at' => '2019-01-07 02:06:10',
            ),
            82 => 
            array (
                'id' => 83,
                'recipe_id' => 13,
                'description' => 'Beat with an electric mixer, until the desired texture is achieved.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:10',
                'updated_at' => '2019-01-07 02:06:10',
            ),
            83 => 
            array (
                'id' => 84,
                'recipe_id' => 13,
                'description' => '**NOTE** because of the additional cocoa powder more cream may have to be added in to reach desired consistency.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:10',
                'updated_at' => '2019-01-07 02:06:10',
            ),
            84 => 
            array (
                'id' => 85,
                'recipe_id' => 14,
                'description' => 'In a mixer bowl, cream together sugar and butter; beat in egg and vanilla.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:12',
                'updated_at' => '2019-01-07 02:06:12',
            ),
            85 => 
            array (
                'id' => 86,
                'recipe_id' => 14,
                'description' => 'Combine flour, cinnamon, baking powder and salt.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:12',
                'updated_at' => '2019-01-07 02:06:12',
            ),
            86 => 
            array (
                'id' => 87,
                'recipe_id' => 14,
                'description' => 'Add to butter mixture.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:12',
                'updated_at' => '2019-01-07 02:06:12',
            ),
            87 => 
            array (
                'id' => 88,
                'recipe_id' => 14,
                'description' => 'Blend well.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:12',
                'updated_at' => '2019-01-07 02:06:12',
            ),
            88 => 
            array (
                'id' => 89,
                'recipe_id' => 14,
                'description' => 'Cover and refrigerate 2 hours or till firm enough to roll into balls.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:12',
                'updated_at' => '2019-01-07 02:06:12',
            ),
            89 => 
            array (
                'id' => 90,
                'recipe_id' => 14,
                'description' => 'Shape dough into small balls about 3/4-inch in diameter.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:12',
                'updated_at' => '2019-01-07 02:06:12',
            ),
            90 => 
            array (
                'id' => 91,
                'recipe_id' => 14,
                'description' => 'Roll in cinnamon sugar to coat.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:12',
                'updated_at' => '2019-01-07 02:06:12',
            ),
            91 => 
            array (
                'id' => 92,
                'recipe_id' => 14,
                'description' => 'Set cookies 1-inch apart on lightly greased cookie sheets.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:12',
                'updated_at' => '2019-01-07 02:06:12',
            ),
            92 => 
            array (
                'id' => 93,
                'recipe_id' => 14,
                'description' => 'Bake at 350&deg; for 10 minutes or till the edges are lightly browned.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:12',
                'updated_at' => '2019-01-07 02:06:12',
            ),
            93 => 
            array (
                'id' => 94,
                'recipe_id' => 14,
                'description' => 'Cool slightly on pans, then remove to racks to cool completely.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:12',
                'updated_at' => '2019-01-07 02:06:12',
            ),
            94 => 
            array (
                'id' => 95,
                'recipe_id' => 15,
                'description' => 'In a medium glass bowl, prepare marinade by mixing garlic, light olive oil, basil, salt, pepper, lemon juice and parsley.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:15',
                'updated_at' => '2019-01-07 02:06:15',
            ),
            95 => 
            array (
                'id' => 96,
                'recipe_id' => 15,
                'description' => 'Place salmon fillets in a medium glass baking dish, and cover with the marinade.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:15',
                'updated_at' => '2019-01-07 02:06:15',
            ),
            96 => 
            array (
                'id' => 97,
                'recipe_id' => 15,
                'description' => 'Marinate in the refrigerator about 1 hour, turning occasionally.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:15',
                'updated_at' => '2019-01-07 02:06:15',
            ),
            97 => 
            array (
                'id' => 98,
                'recipe_id' => 15,
            'description' => 'Preheat oven to 375 degrees F (190 degrees C).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:15',
                'updated_at' => '2019-01-07 02:06:15',
            ),
            98 => 
            array (
                'id' => 99,
                'recipe_id' => 15,
                'description' => 'Place fillets in aluminum foil, cover with marinade, and seal.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:15',
                'updated_at' => '2019-01-07 02:06:15',
            ),
            99 => 
            array (
                'id' => 100,
                'recipe_id' => 15,
                'description' => 'Place sealed salmon in the glass dish, and bake 35 to 45 minutes, until easily flaked with a fork.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:15',
                'updated_at' => '2019-01-07 02:06:15',
            ),
            100 => 
            array (
                'id' => 101,
                'recipe_id' => 16,
                'description' => 'Using a blender or hand held mixer, mix Oreos and cream cheese together.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:19',
                'updated_at' => '2019-01-07 02:06:19',
            ),
            101 => 
            array (
                'id' => 102,
                'recipe_id' => 16,
                'description' => 'Roll into walnut size balls.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:19',
                'updated_at' => '2019-01-07 02:06:19',
            ),
            102 => 
            array (
                'id' => 103,
                'recipe_id' => 16,
                'description' => 'Chill for an hour.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:19',
                'updated_at' => '2019-01-07 02:06:19',
            ),
            103 => 
            array (
                'id' => 104,
                'recipe_id' => 16,
                'description' => 'Melt approximately 3/4 package of white almond bark.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:19',
                'updated_at' => '2019-01-07 02:06:19',
            ),
            104 => 
            array (
                'id' => 105,
                'recipe_id' => 16,
                'description' => 'Stick a toothpick in an Oreo ball and dip it in the melted white almond bark.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:19',
                'updated_at' => '2019-01-07 02:06:19',
            ),
            105 => 
            array (
                'id' => 106,
                'recipe_id' => 16,
                'description' => 'Allow to harden on wax paper.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:19',
                'updated_at' => '2019-01-07 02:06:19',
            ),
            106 => 
            array (
                'id' => 107,
                'recipe_id' => 16,
                'description' => 'Takes about 15 minute.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:19',
                'updated_at' => '2019-01-07 02:06:19',
            ),
            107 => 
            array (
                'id' => 108,
                'recipe_id' => 16,
                'description' => 'While waiting, melt about 1/4 package of chocolate almond bark.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:19',
                'updated_at' => '2019-01-07 02:06:19',
            ),
            108 => 
            array (
                'id' => 109,
                'recipe_id' => 16,
                'description' => 'When Oreo balls are no longer sticky to the touch, decorate with drizzles of chocolate and white almond bark.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:19',
                'updated_at' => '2019-01-07 02:06:19',
            ),
            109 => 
            array (
                'id' => 110,
                'recipe_id' => 16,
                'description' => 'I just use a sandwich bag with a tiny hole cut in one corner to drizzle the almond bark.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:19',
                'updated_at' => '2019-01-07 02:06:19',
            ),
            110 => 
            array (
                'id' => 111,
                'recipe_id' => 17,
                'description' => 'Combine potatoes, celery, carrots, onion, ham, and water/broth in stockpot and bring to boil.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:21',
                'updated_at' => '2019-01-07 02:06:21',
            ),
            111 => 
            array (
                'id' => 112,
                'recipe_id' => 17,
                'description' => 'Then cook over medium heat until potatoes are tender.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:21',
                'updated_at' => '2019-01-07 02:06:21',
            ),
            112 => 
            array (
                'id' => 113,
                'recipe_id' => 17,
            'description' => 'Stir in the chicken bouillon, salt (if using), and pepper.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:21',
                'updated_at' => '2019-01-07 02:06:21',
            ),
            113 => 
            array (
                'id' => 114,
                'recipe_id' => 17,
                'description' => 'In separate saucepan, melt butter over medium-low heat.  Whisk in flour and cook stirring constantly until thick.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:22',
                'updated_at' => '2019-01-07 02:06:22',
            ),
            114 => 
            array (
                'id' => 115,
                'recipe_id' => 17,
            'description' => 'Slowly stir in milk as not to allow lumps to form and all milk is added.  Turn up to medium heat. Continue to stir until thick (4-5 minutes).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:22',
                'updated_at' => '2019-01-07 02:06:22',
            ),
            115 => 
            array (
                'id' => 116,
                'recipe_id' => 17,
                'description' => 'Add in cheese and stir until melted.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:22',
                'updated_at' => '2019-01-07 02:06:22',
            ),
            116 => 
            array (
                'id' => 117,
                'recipe_id' => 17,
            'description' => 'Stir the cheese mixture into the stockpot and cook until heated through.  (I also will break up some of the potatoes for thickness.  It gets thicker as it cools and next day).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:22',
                'updated_at' => '2019-01-07 02:06:22',
            ),
            117 => 
            array (
                'id' => 118,
                'recipe_id' => 18,
                'description' => 'Brown the ground beef, onion and garlic in olive oil with bay leaves, oregano, basil, Italian Seasoning, salt and pepper.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:26',
                'updated_at' => '2019-01-07 02:06:26',
            ),
            118 => 
            array (
                'id' => 119,
                'recipe_id' => 18,
                'description' => 'Add tomato paste, tomato sauce and diced tomatoes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:26',
                'updated_at' => '2019-01-07 02:06:26',
            ),
            119 => 
            array (
                'id' => 120,
                'recipe_id' => 18,
                'description' => 'Stir well and bring to a simmer over medium heat.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:26',
                'updated_at' => '2019-01-07 02:06:26',
            ),
            120 => 
            array (
                'id' => 121,
                'recipe_id' => 18,
                'description' => 'Cover and simmer for 1 1/2 hours.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:26',
                'updated_at' => '2019-01-07 02:06:26',
            ),
            121 => 
            array (
                'id' => 122,
                'recipe_id' => 18,
                'description' => 'Use sauce to top your cooked spaghetti.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:26',
                'updated_at' => '2019-01-07 02:06:26',
            ),
            122 => 
            array (
                'id' => 123,
                'recipe_id' => 18,
                'description' => 'Top with sauteed mushroom.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:26',
                'updated_at' => '2019-01-07 02:06:26',
            ),
            123 => 
            array (
                'id' => 124,
                'recipe_id' => 18,
                'description' => 'Pass the Parmesan.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:26',
                'updated_at' => '2019-01-07 02:06:26',
            ),
            124 => 
            array (
                'id' => 125,
                'recipe_id' => 19,
                'description' => 'Preheat oven to 325&deg;F.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:29',
                'updated_at' => '2019-01-07 02:06:29',
            ),
            125 => 
            array (
                'id' => 126,
                'recipe_id' => 19,
                'description' => 'In a large mixing bowl, sift together dry ingredients. Add oil, coffee and milk and mix at medium speed for 2 minutes. Add eggs and vanilla and beat 2 more minutes. Expect batter to be thin.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:29',
                'updated_at' => '2019-01-07 02:06:29',
            ),
            126 => 
            array (
                'id' => 127,
                'recipe_id' => 19,
                'description' => 'Pour into a 9&quot; x 13&quot; greased and floured pan or 2- 9&quot; round pans. Bake 9 x 13 pan for about 45 minutes or 9&quot; pans for about 30 minutes. Cool in pans for about 15 minutes and then cool completely on racks.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:30',
                'updated_at' => '2019-01-07 02:06:30',
            ),
            127 => 
            array (
                'id' => 128,
                'recipe_id' => 19,
                'description' => 'While cake is cooling make the icing: Combine the milk and flour in a saucepan and cook over low heat until thick, whisking constantly. Cover and refrigerate until chilled.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:30',
                'updated_at' => '2019-01-07 02:06:30',
            ),
            128 => 
            array (
                'id' => 129,
                'recipe_id' => 19,
                'description' => 'In a medium bowl, beat butter, shortening, sugar and vanilla until creamy. Add chilled milk and flour mixture and beat for 10 minutes. Frost cooled cake and enjoy! The frosting sounds intimidating, but it is worth it! By the way, for some reason, we prefer this cake chilled, right out of the refrigerator. The rich chocolate and cool frosting just seem to taste best this way.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:30',
                'updated_at' => '2019-01-07 02:06:30',
            ),
            129 => 
            array (
                'id' => 130,
                'recipe_id' => 20,
                'description' => 'Cut off the tops of green peppers; discard seeds and membranes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:34',
                'updated_at' => '2019-01-07 02:06:34',
            ),
            130 => 
            array (
                'id' => 131,
                'recipe_id' => 20,
                'description' => 'Chop enough of the tops to make 1/4 cup, set aside.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:34',
                'updated_at' => '2019-01-07 02:06:34',
            ),
            131 => 
            array (
                'id' => 132,
                'recipe_id' => 20,
                'description' => 'Cook the whole green peppers, uncovered in boiling water for about 5 minutes; invert to drain well.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:34',
                'updated_at' => '2019-01-07 02:06:34',
            ),
            132 => 
            array (
                'id' => 133,
                'recipe_id' => 20,
                'description' => 'Sprinkle insides of the peppers lightly with salt.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:34',
                'updated_at' => '2019-01-07 02:06:34',
            ),
            133 => 
            array (
                'id' => 134,
                'recipe_id' => 20,
                'description' => 'In a skillet cook ground beef, onion and 1/4 cup chopped pepper till meat is browned and vegetables are tender.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:34',
                'updated_at' => '2019-01-07 02:06:34',
            ),
            134 => 
            array (
                'id' => 135,
                'recipe_id' => 20,
                'description' => 'Drain off excess fat. Add drained tomatoes, salt, Worcestershire, and a dash of pepper.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:34',
                'updated_at' => '2019-01-07 02:06:34',
            ),
            135 => 
            array (
                'id' => 136,
                'recipe_id' => 20,
                'description' => 'in a separate pot put water bring to boil add rice cook until rice is soft. if needed add more water.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:35',
                'updated_at' => '2019-01-07 02:06:35',
            ),
            136 => 
            array (
                'id' => 137,
                'recipe_id' => 20,
                'description' => 'add rice to beef mixture.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:35',
                'updated_at' => '2019-01-07 02:06:35',
            ),
            137 => 
            array (
                'id' => 138,
                'recipe_id' => 20,
                'description' => 'Stir in cheese. Stuff peppers with meat mixture. Place in a 10x6x2 baking dish.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:35',
                'updated_at' => '2019-01-07 02:06:35',
            ),
            138 => 
            array (
                'id' => 139,
                'recipe_id' => 20,
                'description' => 'Bake, covered in a 350 degree oven for      30    minutes. in the last 5 minutes add any remaining cheese to the top of the peppers.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:35',
                'updated_at' => '2019-01-07 02:06:35',
            ),
            139 => 
            array (
                'id' => 140,
                'recipe_id' => 21,
                'description' => 'Put flour, salt and pepper in a large ziploc bag.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:40',
                'updated_at' => '2019-01-07 02:06:40',
            ),
            140 => 
            array (
                'id' => 141,
                'recipe_id' => 21,
                'description' => 'Heat oil over medium heat in a large dutch oven.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:40',
                'updated_at' => '2019-01-07 02:06:40',
            ),
            141 => 
            array (
                'id' => 142,
                'recipe_id' => 21,
                'description' => 'Place meat in bag with the flour and shake until well coated.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:40',
                'updated_at' => '2019-01-07 02:06:40',
            ),
            142 => 
            array (
                'id' => 143,
                'recipe_id' => 21,
                'description' => 'Shake off meat pieces and add them to the oil and stir until slightly browned, Add remaining flour from the bag and the finely chopped onion.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:40',
                'updated_at' => '2019-01-07 02:06:40',
            ),
            143 => 
            array (
                'id' => 144,
                'recipe_id' => 21,
                'description' => 'Stir until well browned.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:40',
                'updated_at' => '2019-01-07 02:06:40',
            ),
            144 => 
            array (
                'id' => 145,
                'recipe_id' => 21,
                'description' => 'Add finely chopped carrot and next 4 ingredients.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:40',
                'updated_at' => '2019-01-07 02:06:40',
            ),
            145 => 
            array (
                'id' => 146,
                'recipe_id' => 21,
            'description' => 'Cover and cook over low heat for 1 1/2 hours (stirring every 15 minutes).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:40',
                'updated_at' => '2019-01-07 02:06:40',
            ),
            146 => 
            array (
                'id' => 147,
                'recipe_id' => 21,
                'description' => 'Add diced potatoes, carrots, and onions, cook for another 45 minutes or until potatoes are tender.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:40',
                'updated_at' => '2019-01-07 02:06:40',
            ),
            147 => 
            array (
                'id' => 148,
                'recipe_id' => 22,
                'description' => 'Combine dressing ingredients.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:43',
                'updated_at' => '2019-01-07 02:06:43',
            ),
            148 => 
            array (
                'id' => 149,
                'recipe_id' => 22,
                'description' => 'Stir into remaining ingredients.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:44',
                'updated_at' => '2019-01-07 02:06:44',
            ),
            149 => 
            array (
                'id' => 150,
                'recipe_id' => 22,
                'description' => 'Cover and chill.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:44',
                'updated_at' => '2019-01-07 02:06:44',
            ),
            150 => 
            array (
                'id' => 151,
                'recipe_id' => 23,
                'description' => 'In food processor place jalapenos and onions.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:46',
                'updated_at' => '2019-01-07 02:06:46',
            ),
            151 => 
            array (
                'id' => 152,
                'recipe_id' => 23,
                'description' => 'Process for just a few seconds.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:46',
                'updated_at' => '2019-01-07 02:06:46',
            ),
            152 => 
            array (
                'id' => 153,
                'recipe_id' => 23,
                'description' => 'Add both cans of tomatoes, salt, sugar, and cumin.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:46',
                'updated_at' => '2019-01-07 02:06:46',
            ),
            153 => 
            array (
                'id' => 154,
                'recipe_id' => 23,
                'description' => 'Process all ingredients until well blended but do not puree.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:46',
                'updated_at' => '2019-01-07 02:06:46',
            ),
            154 => 
            array (
                'id' => 155,
                'recipe_id' => 23,
                'description' => 'Place in covered container and chill.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:46',
                'updated_at' => '2019-01-07 02:06:46',
            ),
            155 => 
            array (
                'id' => 156,
                'recipe_id' => 23,
                'description' => 'A couple of hours of chilling will help blend and enrich the flavor.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:46',
                'updated_at' => '2019-01-07 02:06:46',
            ),
            156 => 
            array (
                'id' => 157,
                'recipe_id' => 23,
                'description' => 'Serve with your favorite thin corn tortilla chips.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:46',
                'updated_at' => '2019-01-07 02:06:46',
            ),
            157 => 
            array (
                'id' => 158,
                'recipe_id' => 24,
                'description' => 'In a large glass measuring cup, place the tea bags and add the baking soda.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:50',
                'updated_at' => '2019-01-07 02:06:50',
            ),
            158 => 
            array (
                'id' => 159,
                'recipe_id' => 24,
                'description' => 'Pour the boiling water over the tea bags.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:50',
                'updated_at' => '2019-01-07 02:06:50',
            ),
            159 => 
            array (
                'id' => 160,
                'recipe_id' => 24,
                'description' => 'Cover and steep for 15 minutes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:50',
                'updated_at' => '2019-01-07 02:06:50',
            ),
            160 => 
            array (
                'id' => 161,
                'recipe_id' => 24,
                'description' => 'Take out the tea bags and do not squeeze them.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:50',
                'updated_at' => '2019-01-07 02:06:50',
            ),
            161 => 
            array (
                'id' => 162,
                'recipe_id' => 24,
                'description' => 'Pour the tea mixture into a 2-quart pitcher; add the sugar.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:50',
                'updated_at' => '2019-01-07 02:06:50',
            ),
            162 => 
            array (
                'id' => 163,
                'recipe_id' => 24,
                'description' => 'Stir until the sugar is dissolved.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:50',
                'updated_at' => '2019-01-07 02:06:50',
            ),
            163 => 
            array (
                'id' => 164,
                'recipe_id' => 24,
                'description' => 'Add in the cold water.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:50',
                'updated_at' => '2019-01-07 02:06:50',
            ),
            164 => 
            array (
                'id' => 165,
                'recipe_id' => 24,
                'description' => 'Let cool; chill in the refrigerator and serve over ice.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:50',
                'updated_at' => '2019-01-07 02:06:50',
            ),
            165 => 
            array (
                'id' => 166,
                'recipe_id' => 25,
                'description' => 'Preheat oven to 350 degrees F.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            166 => 
            array (
                'id' => 167,
                'recipe_id' => 25,
                'description' => 'Make the crust by combining the graham cracker crumbs with the melted butter and 1 T sugar in a medium bowl.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            167 => 
            array (
                'id' => 168,
                'recipe_id' => 25,
                'description' => 'Stir well enough to coat all of the crumbs with the butter, but not so much as to turn the mixture into paste.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            168 => 
            array (
                'id' => 169,
                'recipe_id' => 25,
                'description' => 'Keep it crumbly.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            169 => 
            array (
                'id' => 170,
                'recipe_id' => 25,
                'description' => 'Put foil partway up the outside part of an 8-inch springform pan.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            170 => 
            array (
                'id' => 171,
                'recipe_id' => 25,
                'description' => 'Press the crumbs onto the bottom and about two-thirds of the way up the sides of the springform pan.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            171 => 
            array (
                'id' => 172,
                'recipe_id' => 25,
                'description' => 'You don\'t want the crust to form all of the way up the back of each slice of cheesecake.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            172 => 
            array (
                'id' => 173,
                'recipe_id' => 25,
                'description' => 'Bake the crust for 5 minutes, then set aside until you are ready to fill it.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            173 => 
            array (
                'id' => 174,
                'recipe_id' => 25,
                'description' => 'In a large mixing bowl combine the cream cheese, 1 C sugar, and vanilla.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            174 => 
            array (
                'id' => 175,
                'recipe_id' => 25,
                'description' => 'Mix with an electric mixer until smooth.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            175 => 
            array (
                'id' => 176,
                'recipe_id' => 25,
                'description' => 'Add the pumpkin, eggs, cinnamon, nutmeg and allspice and continue beating until smooth and creamy.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            176 => 
            array (
                'id' => 177,
                'recipe_id' => 25,
                'description' => 'Pour the filling into the pan.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            177 => 
            array (
                'id' => 178,
                'recipe_id' => 25,
                'description' => 'Bake for 60-70 minutes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            178 => 
            array (
                'id' => 179,
                'recipe_id' => 25,
                'description' => 'The top will turn a bit darker at this point.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            179 => 
            array (
                'id' => 180,
                'recipe_id' => 25,
                'description' => 'Remove from the oven and allow the cheesecake to cool.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            180 => 
            array (
                'id' => 181,
                'recipe_id' => 25,
                'description' => 'When the cheesecake has come to room temperature, put it into the refrigerator.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:54',
                'updated_at' => '2019-01-07 02:06:54',
            ),
            181 => 
            array (
                'id' => 182,
                'recipe_id' => 25,
                'description' => 'When the cheesecake has chilled, remove the pan sides and cut the cake into 8 equal pieces.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:55',
                'updated_at' => '2019-01-07 02:06:55',
            ),
            182 => 
            array (
                'id' => 183,
                'recipe_id' => 25,
                'description' => 'Serve with a generous portion of whipped cream on top.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:55',
                'updated_at' => '2019-01-07 02:06:55',
            ),
            183 => 
            array (
                'id' => 184,
                'recipe_id' => 26,
                'description' => 'Put flour, salt and pepper in a bag.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:59',
                'updated_at' => '2019-01-07 02:06:59',
            ),
            184 => 
            array (
                'id' => 185,
                'recipe_id' => 26,
                'description' => 'Add ribs and shake to coat.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:59',
                'updated_at' => '2019-01-07 02:06:59',
            ),
            185 => 
            array (
                'id' => 186,
                'recipe_id' => 26,
                'description' => 'Brown ribs in butter in a lg skillet.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:59',
                'updated_at' => '2019-01-07 02:06:59',
            ),
            186 => 
            array (
                'id' => 187,
                'recipe_id' => 26,
                'description' => 'Put in slow cooker.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:59',
                'updated_at' => '2019-01-07 02:06:59',
            ),
            187 => 
            array (
                'id' => 188,
                'recipe_id' => 26,
                'description' => 'In same skillet, combine remaining ingredients.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:59',
                'updated_at' => '2019-01-07 02:06:59',
            ),
            188 => 
            array (
                'id' => 189,
                'recipe_id' => 26,
                'description' => 'Bring to a boil, stirring.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:59',
                'updated_at' => '2019-01-07 02:06:59',
            ),
            189 => 
            array (
                'id' => 190,
                'recipe_id' => 26,
                'description' => 'Pour over ribs.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:59',
                'updated_at' => '2019-01-07 02:06:59',
            ),
            190 => 
            array (
                'id' => 191,
                'recipe_id' => 26,
                'description' => 'Cover and cook on low for 9 hours.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:06:59',
                'updated_at' => '2019-01-07 02:06:59',
            ),
            191 => 
            array (
                'id' => 192,
                'recipe_id' => 27,
                'description' => 'Measure cereal in large bowl.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:01',
                'updated_at' => '2019-01-07 02:07:01',
            ),
            192 => 
            array (
                'id' => 193,
                'recipe_id' => 27,
                'description' => 'Set aside.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:01',
                'updated_at' => '2019-01-07 02:07:01',
            ),
            193 => 
            array (
                'id' => 194,
                'recipe_id' => 27,
                'description' => 'Microwave chocolate chips, peanut butter and butter for 1 minute on high.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:01',
                'updated_at' => '2019-01-07 02:07:01',
            ),
            194 => 
            array (
                'id' => 195,
                'recipe_id' => 27,
                'description' => 'Stir.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:01',
                'updated_at' => '2019-01-07 02:07:01',
            ),
            195 => 
            array (
                'id' => 196,
                'recipe_id' => 27,
                'description' => 'Cook for 30 seconds longer or until smooth.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:02',
                'updated_at' => '2019-01-07 02:07:02',
            ),
            196 => 
            array (
                'id' => 197,
                'recipe_id' => 27,
                'description' => 'Add vanilla.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:02',
                'updated_at' => '2019-01-07 02:07:02',
            ),
            197 => 
            array (
                'id' => 198,
                'recipe_id' => 27,
                'description' => 'Pour mixture over cereal, stirring until coated.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:02',
                'updated_at' => '2019-01-07 02:07:02',
            ),
            198 => 
            array (
                'id' => 199,
                'recipe_id' => 27,
                'description' => 'Pour mixture into large Ziploc bag and add powdered sugar.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:02',
                'updated_at' => '2019-01-07 02:07:02',
            ),
            199 => 
            array (
                'id' => 200,
                'recipe_id' => 27,
                'description' => 'Shake until well coated.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:02',
                'updated_at' => '2019-01-07 02:07:02',
            ),
            200 => 
            array (
                'id' => 201,
                'recipe_id' => 27,
                'description' => 'Spread on waxed paper to cool.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:02',
                'updated_at' => '2019-01-07 02:07:02',
            ),
            201 => 
            array (
                'id' => 202,
                'recipe_id' => 27,
                'description' => 'Store in Ziploc bags or large sealed bowl.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:02',
                'updated_at' => '2019-01-07 02:07:02',
            ),
            202 => 
            array (
                'id' => 203,
                'recipe_id' => 27,
                'description' => 'Recipe Note: It helps to add cereal mixture a little at a time if you only have small bags.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:02',
                'updated_at' => '2019-01-07 02:07:02',
            ),
            203 => 
            array (
                'id' => 204,
                'recipe_id' => 28,
                'description' => 'Mash bananas in a large mixing bowl. ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:05',
                'updated_at' => '2019-01-07 02:07:05',
            ),
            204 => 
            array (
                'id' => 205,
                'recipe_id' => 28,
                'description' => 'Add sugar and egg. ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:05',
                'updated_at' => '2019-01-07 02:07:05',
            ),
            205 => 
            array (
                'id' => 206,
                'recipe_id' => 28,
                'description' => 'Add butter and blueberries. ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:05',
                'updated_at' => '2019-01-07 02:07:05',
            ),
            206 => 
            array (
                'id' => 207,
                'recipe_id' => 28,
                'description' => 'Combine dry ingredients and gently stir into banana mixture. ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:05',
                'updated_at' => '2019-01-07 02:07:05',
            ),
            207 => 
            array (
                'id' => 208,
                'recipe_id' => 28,
                'description' => 'Pour into 12 well-greased muffin cups. ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:05',
                'updated_at' => '2019-01-07 02:07:05',
            ),
            208 => 
            array (
                'id' => 209,
                'recipe_id' => 28,
                'description' => 'Bake at 375 degrees for 20 minutes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:05',
                'updated_at' => '2019-01-07 02:07:05',
            ),
            209 => 
            array (
                'id' => 210,
                'recipe_id' => 29,
                'description' => 'Mix peanut butter, sugar, and egg together until smooth.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:07',
                'updated_at' => '2019-01-07 02:07:07',
            ),
            210 => 
            array (
                'id' => 211,
                'recipe_id' => 29,
                'description' => 'Drop by teaspoon onto cookie sheet two inches apart. If desired, roll in extra sugar before placing on cookie sheet.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:07',
                'updated_at' => '2019-01-07 02:07:07',
            ),
            211 => 
            array (
                'id' => 212,
                'recipe_id' => 29,
                'description' => 'Press with fork; press again in opposite direction.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:07',
                'updated_at' => '2019-01-07 02:07:07',
            ),
            212 => 
            array (
                'id' => 213,
                'recipe_id' => 29,
                'description' => 'Bake 10 to 12 minutes at 350 degrees Fahrenheit.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:07',
                'updated_at' => '2019-01-07 02:07:07',
            ),
            213 => 
            array (
                'id' => 214,
                'recipe_id' => 29,
                'description' => 'Do not brown; do not over bake.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:07',
                'updated_at' => '2019-01-07 02:07:07',
            ),
            214 => 
            array (
                'id' => 215,
                'recipe_id' => 30,
                'description' => 'In a large bowl, mix together 1/3 cup condensed French onion soup with ground beef, bread crumbs, egg, salt and black pepper.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:10',
                'updated_at' => '2019-01-07 02:07:10',
            ),
            215 => 
            array (
                'id' => 216,
                'recipe_id' => 30,
                'description' => 'Shape into 6 oval patties.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:10',
                'updated_at' => '2019-01-07 02:07:10',
            ),
            216 => 
            array (
                'id' => 217,
                'recipe_id' => 30,
                'description' => 'In a large skillet over medium-high heat, brown both sides of patties.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:10',
                'updated_at' => '2019-01-07 02:07:10',
            ),
            217 => 
            array (
                'id' => 218,
                'recipe_id' => 30,
                'description' => 'Pour off excess fat.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:10',
                'updated_at' => '2019-01-07 02:07:10',
            ),
            218 => 
            array (
                'id' => 219,
                'recipe_id' => 30,
                'description' => 'In a small bowl, blend flour and remaining soup until smooth.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:10',
                'updated_at' => '2019-01-07 02:07:10',
            ),
            219 => 
            array (
                'id' => 220,
                'recipe_id' => 30,
                'description' => 'Mix in ketchup, water, Worcestershire sauce and mustard powder.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:10',
                'updated_at' => '2019-01-07 02:07:10',
            ),
            220 => 
            array (
                'id' => 221,
                'recipe_id' => 30,
                'description' => 'Pour over meat in skillet.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:10',
                'updated_at' => '2019-01-07 02:07:10',
            ),
            221 => 
            array (
                'id' => 222,
                'recipe_id' => 30,
                'description' => 'Cover, and cook for 20 minutes, stirring occasionally.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:10',
                'updated_at' => '2019-01-07 02:07:10',
            ),
            222 => 
            array (
                'id' => 223,
                'recipe_id' => 31,
                'description' => 'Peel and cube potatoes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:13',
                'updated_at' => '2019-01-07 02:07:13',
            ),
            223 => 
            array (
                'id' => 224,
                'recipe_id' => 31,
                'description' => 'Put in a saucepan along with the onions and celery.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:13',
                'updated_at' => '2019-01-07 02:07:13',
            ),
            224 => 
            array (
                'id' => 225,
                'recipe_id' => 31,
                'description' => 'Add water, but don\'t quite cover the vegetables.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:13',
                'updated_at' => '2019-01-07 02:07:13',
            ),
            225 => 
            array (
                'id' => 226,
                'recipe_id' => 31,
                'description' => 'Bring to a boil, lower heat, cover and simmer for 25 minutes, or until all of the vegetables are very tender.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:13',
                'updated_at' => '2019-01-07 02:07:13',
            ),
            226 => 
            array (
                'id' => 227,
                'recipe_id' => 31,
                'description' => 'Using a potato masher, coarsely crush the potatoes, but don\'t mash them--you want chunks left.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:13',
                'updated_at' => '2019-01-07 02:07:13',
            ),
            227 => 
            array (
                'id' => 228,
                'recipe_id' => 31,
                'description' => 'Add enough milk or cream to thin to desired thickness and add salt&amp; pepper to taste.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:13',
                'updated_at' => '2019-01-07 02:07:13',
            ),
            228 => 
            array (
                'id' => 229,
                'recipe_id' => 31,
            'description' => '(It will take a lot of salt!).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:13',
                'updated_at' => '2019-01-07 02:07:13',
            ),
            229 => 
            array (
                'id' => 230,
                'recipe_id' => 32,
                'description' => 'Combine soup, milk and pepper in a 1 1/2 qt baking dish; stir until blended.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:21',
                'updated_at' => '2019-01-07 02:07:21',
            ),
            230 => 
            array (
                'id' => 231,
                'recipe_id' => 32,
                'description' => 'Stir in beans and 2/3 cup fried onions.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:21',
                'updated_at' => '2019-01-07 02:07:21',
            ),
            231 => 
            array (
                'id' => 232,
                'recipe_id' => 32,
                'description' => 'Bake at 350&deg;F for 30 minutes or until hot.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:21',
                'updated_at' => '2019-01-07 02:07:21',
            ),
            232 => 
            array (
                'id' => 233,
                'recipe_id' => 32,
                'description' => 'Stir.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:21',
                'updated_at' => '2019-01-07 02:07:21',
            ),
            233 => 
            array (
                'id' => 234,
                'recipe_id' => 32,
                'description' => 'Sprinkle with remaining 2/3 cup fried onions.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:21',
                'updated_at' => '2019-01-07 02:07:21',
            ),
            234 => 
            array (
                'id' => 235,
                'recipe_id' => 32,
                'description' => 'Bake 5 more minutes or until onions are golden.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:21',
                'updated_at' => '2019-01-07 02:07:21',
            ),
            235 => 
            array (
                'id' => 236,
                'recipe_id' => 33,
                'description' => 'Preheat oven to 350.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:26',
                'updated_at' => '2019-01-07 02:07:26',
            ),
            236 => 
            array (
                'id' => 237,
                'recipe_id' => 33,
                'description' => 'Melt butter in saute pan.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:26',
                'updated_at' => '2019-01-07 02:07:26',
            ),
            237 => 
            array (
                'id' => 238,
                'recipe_id' => 33,
            'description' => 'Add onion, celery, pepper, salt, carrots, and mushrooms (optional).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:26',
                'updated_at' => '2019-01-07 02:07:26',
            ),
            238 => 
            array (
                'id' => 239,
                'recipe_id' => 33,
                'description' => 'Saute until vegetables are tender.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:26',
                'updated_at' => '2019-01-07 02:07:26',
            ),
            239 => 
            array (
                'id' => 240,
                'recipe_id' => 33,
                'description' => 'Add flour and stir until vegetables are coated.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:26',
                'updated_at' => '2019-01-07 02:07:26',
            ),
            240 => 
            array (
                'id' => 241,
                'recipe_id' => 33,
                'description' => 'Add wine, and stir quickly until flour is absorbed.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:26',
                'updated_at' => '2019-01-07 02:07:26',
            ),
            241 => 
            array (
                'id' => 242,
                'recipe_id' => 33,
                'description' => 'Gradually add broth, stirring constantly.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:26',
                'updated_at' => '2019-01-07 02:07:26',
            ),
            242 => 
            array (
                'id' => 243,
                'recipe_id' => 33,
                'description' => 'Bring to a boil, reduce heat and simmer 5 minutes, stirring frequently.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:27',
                'updated_at' => '2019-01-07 02:07:27',
            ),
            243 => 
            array (
                'id' => 244,
                'recipe_id' => 33,
                'description' => 'Remove from heat.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:27',
                'updated_at' => '2019-01-07 02:07:27',
            ),
            244 => 
            array (
                'id' => 245,
                'recipe_id' => 33,
                'description' => 'Add 1/2 cup Parmesan cheese and the Neufchatel cheese, stirring until cheese melts.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:27',
                'updated_at' => '2019-01-07 02:07:27',
            ),
            245 => 
            array (
                'id' => 246,
                'recipe_id' => 33,
                'description' => 'Add the peas, turkey and pasta.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:27',
                'updated_at' => '2019-01-07 02:07:27',
            ),
            246 => 
            array (
                'id' => 247,
                'recipe_id' => 33,
                'description' => 'Stir until blended.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:27',
                'updated_at' => '2019-01-07 02:07:27',
            ),
            247 => 
            array (
                'id' => 248,
                'recipe_id' => 33,
                'description' => 'Coat a casserole with non-stick spray and transfer mixture to the casserole.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:27',
                'updated_at' => '2019-01-07 02:07:27',
            ),
            248 => 
            array (
                'id' => 249,
                'recipe_id' => 33,
            'description' => 'Combine breadcrumbs (or panko) with 1/2 cup Parmesan cheese.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:27',
                'updated_at' => '2019-01-07 02:07:27',
            ),
            249 => 
            array (
                'id' => 250,
                'recipe_id' => 33,
                'description' => 'Sprinkle mixture evenly over the top of the casserole.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:27',
                'updated_at' => '2019-01-07 02:07:27',
            ),
            250 => 
            array (
                'id' => 251,
                'recipe_id' => 33,
                'description' => 'Bake at 350 for 30 minutes until lightly browned.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:27',
                'updated_at' => '2019-01-07 02:07:27',
            ),
            251 => 
            array (
                'id' => 252,
                'recipe_id' => 33,
                'description' => 'Let rest for 15 minutes before serving.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:27',
                'updated_at' => '2019-01-07 02:07:27',
            ),
            252 => 
            array (
                'id' => 253,
                'recipe_id' => 34,
            'description' => 'Cut meat into small, bite-size (1/2&quot;) pieces.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:32',
                'updated_at' => '2019-01-07 02:07:32',
            ),
            253 => 
            array (
                'id' => 254,
                'recipe_id' => 34,
                'description' => 'In a large pot or dutch oven, saute meat in 1 T oil on medium-high heat until all sides are brown.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:32',
                'updated_at' => '2019-01-07 02:07:32',
            ),
            254 => 
            array (
                'id' => 255,
                'recipe_id' => 34,
                'description' => 'Set aside on a plate.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:32',
                'updated_at' => '2019-01-07 02:07:32',
            ),
            255 => 
            array (
                'id' => 256,
                'recipe_id' => 34,
                'description' => 'Chop celery, onion, potatoes, and carrots into bite-size pieces.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:32',
                'updated_at' => '2019-01-07 02:07:32',
            ),
            256 => 
            array (
                'id' => 257,
                'recipe_id' => 34,
            'description' => 'Saute celery and onion in remaining 1 T oil until onion is golden (about 10 minutes).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:32',
                'updated_at' => '2019-01-07 02:07:32',
            ),
            257 => 
            array (
                'id' => 258,
                'recipe_id' => 34,
                'description' => 'Add browned beef, water, broth, tomatoes with juices, carrots, potatoes, corn, bay leaves and garlic.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:32',
                'updated_at' => '2019-01-07 02:07:32',
            ),
            258 => 
            array (
                'id' => 259,
                'recipe_id' => 34,
                'description' => 'Bring to a boil.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:32',
                'updated_at' => '2019-01-07 02:07:32',
            ),
            259 => 
            array (
                'id' => 260,
                'recipe_id' => 34,
                'description' => 'Reduce heat and simmer uncovered until beef is almost tender, about an hour.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:32',
                'updated_at' => '2019-01-07 02:07:32',
            ),
            260 => 
            array (
                'id' => 261,
                'recipe_id' => 34,
                'description' => 'Add peas and hot sauce to soup.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:32',
                'updated_at' => '2019-01-07 02:07:32',
            ),
            261 => 
            array (
                'id' => 262,
                'recipe_id' => 34,
                'description' => 'Cover and simmer until beef is tender, about 30 minutes longer.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:32',
                'updated_at' => '2019-01-07 02:07:32',
            ),
            262 => 
            array (
                'id' => 263,
                'recipe_id' => 34,
                'description' => 'Serve and season with freshly ground black pepper, hot sauce, or crumbled saltines, if desired.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:32',
                'updated_at' => '2019-01-07 02:07:32',
            ),
            263 => 
            array (
                'id' => 264,
                'recipe_id' => 35,
                'description' => 'Preheat oven to 425&deg;F ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:37',
                'updated_at' => '2019-01-07 02:07:37',
            ),
            264 => 
            array (
                'id' => 265,
                'recipe_id' => 35,
                'description' => 'Spray 8-inch-square baking dish with nonstick cooking spray.  ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:37',
                'updated_at' => '2019-01-07 02:07:37',
            ),
            265 => 
            array (
                'id' => 266,
                'recipe_id' => 35,
                'description' => 'Bring the water to a boil in a small saucepan. ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:37',
                'updated_at' => '2019-01-07 02:07:37',
            ),
            266 => 
            array (
                'id' => 267,
                'recipe_id' => 35,
                'description' => 'Add the ground flax seed, reduce the heat to medium-low, and simmer the ground flax seed in the water for 3 minutes or until thickened, stirring occasionally. ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:37',
                'updated_at' => '2019-01-07 02:07:37',
            ),
            267 => 
            array (
                'id' => 268,
                'recipe_id' => 35,
                'description' => 'Set aside. ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:37',
                'updated_at' => '2019-01-07 02:07:37',
            ),
            268 => 
            array (
                'id' => 269,
                'recipe_id' => 35,
                'description' => 'In a medium bowl, whisk together the flour, cornmeal, sugar, baking powder, and salt until well-combined. ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:37',
                'updated_at' => '2019-01-07 02:07:37',
            ),
            269 => 
            array (
                'id' => 270,
                'recipe_id' => 35,
                'description' => 'Add the ground flax seed mixture, soy milk, and canola oil to the flour mixture. ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:37',
                'updated_at' => '2019-01-07 02:07:37',
            ),
            270 => 
            array (
                'id' => 271,
                'recipe_id' => 35,
            'description' => 'Beat just until smooth (do not overbeat.) ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:37',
                'updated_at' => '2019-01-07 02:07:37',
            ),
            271 => 
            array (
                'id' => 272,
                'recipe_id' => 35,
                'description' => 'Turn into prepared baking pan. Bake for 20 to 25 minutes, or until a toothpick inserted in the middle comes out clean. ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:37',
                'updated_at' => '2019-01-07 02:07:37',
            ),
            272 => 
            array (
                'id' => 273,
                'recipe_id' => 35,
                'description' => 'Cool on wire rack 10 minutes; invert cornbread onto wire rack, then turn right side up and continue to cool until warm, about 10 minutes longer.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:37',
                'updated_at' => '2019-01-07 02:07:37',
            ),
            273 => 
            array (
                'id' => 274,
                'recipe_id' => 36,
                'description' => 'Mix all marinade ingredients together.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:44',
                'updated_at' => '2019-01-07 02:07:44',
            ),
            274 => 
            array (
                'id' => 275,
                'recipe_id' => 36,
                'description' => 'Lightly score meat in a diamond pattern on each side.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:44',
                'updated_at' => '2019-01-07 02:07:44',
            ),
            275 => 
            array (
                'id' => 276,
                'recipe_id' => 36,
                'description' => 'Place meat in a resealable bag. Pour in marinade.  Squish meat and marinade around to get all the nooks and crannies.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:44',
                'updated_at' => '2019-01-07 02:07:44',
            ),
            276 => 
            array (
                'id' => 277,
                'recipe_id' => 36,
            'description' => 'Marinate in refrigerator 2-3 hours or up to 24 hours, rotating occasionally.  Can be frozen in the marinade too (see &quot;For Camping&quot; for how I do this).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:44',
                'updated_at' => '2019-01-07 02:07:44',
            ),
            277 => 
            array (
                'id' => 278,
                'recipe_id' => 36,
                'description' => '20-30 minutes before cooking take meat out of the refrigerator to come up in temperature.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:44',
                'updated_at' => '2019-01-07 02:07:44',
            ),
            278 => 
            array (
                'id' => 279,
                'recipe_id' => 36,
                'description' => 'Cook in the broiler or on the grill on high heat for 5-7 minutes per side depending on thickness and desired doneness.   I have been asked about roasting temperatures, I have never done this, always grill or broil.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:44',
                'updated_at' => '2019-01-07 02:07:44',
            ),
            279 => 
            array (
                'id' => 280,
                'recipe_id' => 36,
            'description' => '**For camping - Place the fresh London broil and marinade in a zipperbag, squeeze out as much air as possible, seal, place inside a vacuum pack bag.  Vacuum pack and freeze (I like to vacuum pack the zipper back to guard against leaks in the cooler).  Put frozen in the camping cooler, after a day or two it is defrosted and can be cooked on the grill with minimal preparation and mess.**.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:44',
                'updated_at' => '2019-01-07 02:07:44',
            ),
            280 => 
            array (
                'id' => 281,
                'recipe_id' => 37,
                'description' => 'Mix all ingredients together and shake well to mix.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:50',
                'updated_at' => '2019-01-07 02:07:50',
            ),
            281 => 
            array (
                'id' => 282,
                'recipe_id' => 37,
                'description' => 'Update 6/23/10:  For a creamier dressing, add all ingredients except oil to a blender.  Pulse several times to mix ingredients.  With blender running on high, slowly pour oil into blender until mixture is creamy.  Refrigerate.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:50',
                'updated_at' => '2019-01-07 02:07:50',
            ),
            282 => 
            array (
                'id' => 283,
                'recipe_id' => 38,
                'description' => 'In large mixing bowl beat eggs, sugar, pumpkin, vanilla and oil until smooth.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:55',
                'updated_at' => '2019-01-07 02:07:55',
            ),
            283 => 
            array (
                'id' => 284,
                'recipe_id' => 38,
                'description' => 'Mix dry ingredients together and mix into pumpkin mixture. Fold in chocolate chips.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:55',
                'updated_at' => '2019-01-07 02:07:55',
            ),
            284 => 
            array (
                'id' => 285,
                'recipe_id' => 38,
                'description' => 'Fill greased or paper-lined muffin cups 3/4 full.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:55',
                'updated_at' => '2019-01-07 02:07:55',
            ),
            285 => 
            array (
                'id' => 286,
                'recipe_id' => 38,
                'description' => 'Bake at 400 F for 16-20 minutes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:55',
                'updated_at' => '2019-01-07 02:07:55',
            ),
            286 => 
            array (
                'id' => 287,
                'recipe_id' => 38,
                'description' => 'Let cool before taking out of pan.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:55',
                'updated_at' => '2019-01-07 02:07:55',
            ),
            287 => 
            array (
                'id' => 288,
                'recipe_id' => 39,
                'description' => 'Preheat oven to 375.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:58',
                'updated_at' => '2019-01-07 02:07:58',
            ),
            288 => 
            array (
                'id' => 289,
                'recipe_id' => 39,
                'description' => 'In bowl, combine beaten eggs, ricotta cheese and TWO cups of the mozzarella cheese and parmesan.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:58',
                'updated_at' => '2019-01-07 02:07:58',
            ),
            289 => 
            array (
                'id' => 290,
                'recipe_id' => 39,
                'description' => 'If you choose not to use the parmesan, just add more mozzarella.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:58',
                'updated_at' => '2019-01-07 02:07:58',
            ),
            290 => 
            array (
                'id' => 291,
                'recipe_id' => 39,
                'description' => 'Set aside.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:58',
                'updated_at' => '2019-01-07 02:07:58',
            ),
            291 => 
            array (
                'id' => 292,
                'recipe_id' => 39,
                'description' => 'In a 13X9X3 pan, spread 1 cup of sauce on bottom of pan.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:58',
                'updated_at' => '2019-01-07 02:07:58',
            ),
            292 => 
            array (
                'id' => 293,
                'recipe_id' => 39,
            'description' => 'Layer in the order, 4 uncooked lasagna noodles (they will overlap), then 1/3 part of the ricotta cheese mixture, half the browned meat, 1 cup mozzarella cheese, and 1 cup of spaghetti sauce.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:58',
                'updated_at' => '2019-01-07 02:07:58',
            ),
            293 => 
            array (
                'id' => 294,
                'recipe_id' => 39,
                'description' => 'Next layer, 4 uncooked lasagna noodles, 1/3 part of the ricotta cheese mixture, and 1 1/2 Cups sauce.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:58',
                'updated_at' => '2019-01-07 02:07:58',
            ),
            294 => 
            array (
                'id' => 295,
                'recipe_id' => 39,
                'description' => 'Next layer, 4 uncooked lasagna noodles, remaining ricotta mixture and remained meat, 1 cup of sauce.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:58',
                'updated_at' => '2019-01-07 02:07:58',
            ),
            295 => 
            array (
                'id' => 296,
                'recipe_id' => 39,
                'description' => 'For top layer, 4 uncooked lasagna noodles, remaining sauce, and remaining 1 cup mozzarella.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:58',
                'updated_at' => '2019-01-07 02:07:58',
            ),
            296 => 
            array (
                'id' => 297,
                'recipe_id' => 39,
                'description' => 'Bake covered with foil for 50-60 minutes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:58',
                'updated_at' => '2019-01-07 02:07:58',
            ),
            297 => 
            array (
                'id' => 298,
                'recipe_id' => 39,
            'description' => 'Uncover and continue cooking until all the cheese is melted on the top (about 5 minutes).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:58',
                'updated_at' => '2019-01-07 02:07:58',
            ),
            298 => 
            array (
                'id' => 299,
                'recipe_id' => 39,
                'description' => 'Let stand 15 minutes before serving.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:58',
                'updated_at' => '2019-01-07 02:07:58',
            ),
            299 => 
            array (
                'id' => 300,
                'recipe_id' => 39,
                'description' => 'If you are using a 13X9X2 pan---just make 3 layers to avoid boiling over.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:07:58',
                'updated_at' => '2019-01-07 02:07:58',
            ),
            300 => 
            array (
                'id' => 301,
                'recipe_id' => 40,
                'description' => 'Mix together in a bowl the flour, salt and baking powder.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:01',
                'updated_at' => '2019-01-07 02:08:01',
            ),
            301 => 
            array (
                'id' => 302,
                'recipe_id' => 40,
                'description' => 'Bring to just a simmer in a small saucepan the butter and milk.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:01',
                'updated_at' => '2019-01-07 02:08:01',
            ),
            302 => 
            array (
                'id' => 303,
                'recipe_id' => 40,
                'description' => 'Add the milk mixture to the dry ingredients.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:01',
                'updated_at' => '2019-01-07 02:08:01',
            ),
            303 => 
            array (
                'id' => 304,
                'recipe_id' => 40,
                'description' => 'Stir with a fork or kneed by hand 2 to 3 times until the mixture just comes together.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:01',
                'updated_at' => '2019-01-07 02:08:01',
            ),
            304 => 
            array (
                'id' => 305,
                'recipe_id' => 40,
                'description' => 'Divide the dough into about 16 small puffy dumplings.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:01',
                'updated_at' => '2019-01-07 02:08:01',
            ),
            305 => 
            array (
                'id' => 306,
                'recipe_id' => 40,
                'description' => 'Roll each piece of dough into a small rough ball.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:01',
                'updated_at' => '2019-01-07 02:08:01',
            ),
            306 => 
            array (
                'id' => 307,
                'recipe_id' => 40,
                'description' => 'Gently lay the formed dumplings on the surface of your stew or soup.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:02',
                'updated_at' => '2019-01-07 02:08:02',
            ),
            307 => 
            array (
                'id' => 308,
                'recipe_id' => 40,
                'description' => 'Cover and simmer for 10 minutes.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:02',
                'updated_at' => '2019-01-07 02:08:02',
            ),
            308 => 
            array (
                'id' => 309,
                'recipe_id' => 40,
                'description' => 'Serve immediately.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:02',
                'updated_at' => '2019-01-07 02:08:02',
            ),
            309 => 
            array (
                'id' => 310,
                'recipe_id' => 41,
            'description' => 'In lg saucepan, mix sugar, margarine, and milk; bring to a full, rolling boil over med heat.  (full, rolling boil = large bubbles rising to surface that can\'t be stirred down).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:07',
                'updated_at' => '2019-01-07 02:08:07',
            ),
            310 => 
            array (
                'id' => 311,
                'recipe_id' => 41,
                'description' => 'Boil for one minute, stirring constantly.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:07',
                'updated_at' => '2019-01-07 02:08:07',
            ),
            311 => 
            array (
                'id' => 312,
                'recipe_id' => 41,
                'description' => 'Remove from heat and stir in peanut butter and vanilla, stirring until peanut butter is melted; stir in oats.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:07',
                'updated_at' => '2019-01-07 02:08:07',
            ),
            312 => 
            array (
                'id' => 313,
                'recipe_id' => 41,
                'description' => 'Working quickly, drop by spoonfuls onto waxed paper . Let cool completely.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:08',
                'updated_at' => '2019-01-07 02:08:08',
            ),
            313 => 
            array (
                'id' => 314,
                'recipe_id' => 42,
                'description' => 'Heat fat up in a chip pan or automatic deep fat fryer - mine has a chip setting which is 190&deg;C.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:12',
                'updated_at' => '2019-01-07 02:08:12',
            ),
            314 => 
            array (
                'id' => 315,
                'recipe_id' => 42,
                'description' => 'Peel the potatoes and cut into chunky sized chips. Rinse and dry thoroughly.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:12',
                'updated_at' => '2019-01-07 02:08:12',
            ),
            315 => 
            array (
                'id' => 316,
                'recipe_id' => 42,
                'description' => 'Fry chips for about 3 minutes until soft but NOT coloured. Drain and shake well and set to one side.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:12',
                'updated_at' => '2019-01-07 02:08:12',
            ),
            316 => 
            array (
                'id' => 317,
                'recipe_id' => 42,
                'description' => 'Put some flour onto a plate. Dredge the fish fillets in the flour thoroughly - this is VERY important, it stops the batter sliding off when fried! Leave the fish fillets in the flour whilst you make the batter.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:12',
                'updated_at' => '2019-01-07 02:08:12',
            ),
            317 => 
            array (
                'id' => 318,
                'recipe_id' => 42,
                'description' => 'Some people say you should make the batter at least one hour before - I have found little difference - so make it before if it is convenient or now!',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:12',
                'updated_at' => '2019-01-07 02:08:12',
            ),
            318 => 
            array (
                'id' => 319,
                'recipe_id' => 42,
                'description' => 'Put flour, bicarbonate of soda, salt and pepper into a large roomy bowl. Add the beer gradually, stop when you have a thick coating type of batter. Drink any beer that is left! Whisk thoroughly until it is smooth and there are no lumps.Add the lemon juice OR a splash of malt vinegar if desired. Mix thoroughly again.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:12',
                'updated_at' => '2019-01-07 02:08:12',
            ),
            319 => 
            array (
                'id' => 320,
                'recipe_id' => 42,
                'description' => 'Have your plates, newspaper or whatever ready for eating!',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:12',
                'updated_at' => '2019-01-07 02:08:12',
            ),
            320 => 
            array (
                'id' => 321,
                'recipe_id' => 42,
                'description' => 'Adjust deep fat fryer to fish frying temperature of 160&deg;C.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:12',
                'updated_at' => '2019-01-07 02:08:12',
            ),
            321 => 
            array (
                'id' => 322,
                'recipe_id' => 42,
            'description' => 'Take one fillet of fish at a time and holding it by the tail or thin end (!) swirl it around the batter until well coated - plunge into hot fat immediately. As soon as it has crisped up and set, add your other fillets one at a time, taking out the first ones as they cook - about 6 to 10 minutes depending on the thickness. Place onto a tray and keep warm in the oven.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:12',
                'updated_at' => '2019-01-07 02:08:12',
            ),
            322 => 
            array (
                'id' => 323,
                'recipe_id' => 42,
                'description' => 'Turn up the heat setting to 190&deg;C again and cook your chips until golden and crisp.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:12',
                'updated_at' => '2019-01-07 02:08:12',
            ),
            323 => 
            array (
                'id' => 324,
                'recipe_id' => 42,
                'description' => 'Serve on plates or newspaper with salt &amp; vinegar!',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:12',
                'updated_at' => '2019-01-07 02:08:12',
            ),
            324 => 
            array (
                'id' => 325,
                'recipe_id' => 42,
                'description' => 'All you need now is a pint of warm beer and Coronation Street on the TV to set the scene!',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:12',
                'updated_at' => '2019-01-07 02:08:12',
            ),
            325 => 
            array (
                'id' => 326,
                'recipe_id' => 42,
                'description' => 'This batter is great for small fish goujons, chicken goujons and also tempura vegetables too.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:12',
                'updated_at' => '2019-01-07 02:08:12',
            ),
            326 => 
            array (
                'id' => 327,
                'recipe_id' => 43,
                'description' => 'Melt butter in sauce pan.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:25',
                'updated_at' => '2019-01-07 02:08:25',
            ),
            327 => 
            array (
                'id' => 328,
                'recipe_id' => 43,
                'description' => 'Add cream cheese and whisk as you add half-and-half.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:25',
                'updated_at' => '2019-01-07 02:08:25',
            ),
            328 => 
            array (
                'id' => 329,
                'recipe_id' => 43,
                'description' => 'Whisk until smooth adding cheese, garlic powder and pepper.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:26',
                'updated_at' => '2019-01-07 02:08:26',
            ),
            329 => 
            array (
                'id' => 330,
                'recipe_id' => 43,
                'description' => 'Simmer until heated through.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:26',
                'updated_at' => '2019-01-07 02:08:26',
            ),
            330 => 
            array (
                'id' => 331,
                'recipe_id' => 43,
                'description' => 'Pour over any pasta you choose, we even liked it on cheese tortellini.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:26',
                'updated_at' => '2019-01-07 02:08:26',
            ),
            331 => 
            array (
                'id' => 332,
                'recipe_id' => 43,
                'description' => 'Serve with a nice green salad, garlic bread, and a nice glass of wine.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:26',
                'updated_at' => '2019-01-07 02:08:26',
            ),
            332 => 
            array (
                'id' => 333,
                'recipe_id' => 43,
                'description' => 'Very filling!',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:26',
                'updated_at' => '2019-01-07 02:08:26',
            ),
            333 => 
            array (
                'id' => 334,
                'recipe_id' => 43,
                'description' => 'Thanks so much for all the reviews! This is a recipe that is basic, as you can see from all the suggestions! I hope that everyone continues to enjoy it, review it, and add your suggestions! Thanks again! GRITS.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:26',
                'updated_at' => '2019-01-07 02:08:26',
            ),
            334 => 
            array (
                'id' => 335,
                'recipe_id' => 44,
                'description' => 'Preheat oven to 375&ordm;F.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:30',
                'updated_at' => '2019-01-07 02:08:30',
            ),
            335 => 
            array (
                'id' => 336,
                'recipe_id' => 44,
                'description' => 'Boil the water and add the butter and salt.  Stir to dissolve salt and melt butter.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:30',
                'updated_at' => '2019-01-07 02:08:30',
            ),
            336 => 
            array (
                'id' => 337,
                'recipe_id' => 44,
                'description' => 'Place the rice in an 8&quot; casserole dish.  Pour the boiling water mixture over the rice and stir.  ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:30',
                'updated_at' => '2019-01-07 02:08:30',
            ),
            337 => 
            array (
                'id' => 338,
                'recipe_id' => 44,
                'description' => 'Cover with foil and bake on the middle rack for 1 hour. ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:30',
                'updated_at' => '2019-01-07 02:08:30',
            ),
            338 => 
            array (
                'id' => 339,
                'recipe_id' => 44,
                'description' => 'Fluff with fork and serve.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:30',
                'updated_at' => '2019-01-07 02:08:30',
            ),
            339 => 
            array (
                'id' => 340,
                'recipe_id' => 44,
                'description' => 'This rice also refrigerates and reheats fairly well, but it\'s best freshly made.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:30',
                'updated_at' => '2019-01-07 02:08:30',
            ),
            340 => 
            array (
                'id' => 341,
                'recipe_id' => 45,
                'description' => 'In dutch oven, brown potatoes, kielbasa, onion and peppers in oil.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:34',
                'updated_at' => '2019-01-07 02:08:34',
            ),
            341 => 
            array (
                'id' => 342,
                'recipe_id' => 45,
                'description' => 'Add seasonings and water.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:34',
                'updated_at' => '2019-01-07 02:08:34',
            ),
            342 => 
            array (
                'id' => 343,
                'recipe_id' => 45,
                'description' => 'Bring to a boil.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:34',
                'updated_at' => '2019-01-07 02:08:34',
            ),
            343 => 
            array (
                'id' => 344,
                'recipe_id' => 45,
                'description' => 'Cover tightly and cook for 20 minutes on low, stirring occasionally.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:34',
                'updated_at' => '2019-01-07 02:08:34',
            ),
            344 => 
            array (
                'id' => 345,
                'recipe_id' => 45,
                'description' => 'Uncover and put cheese on top.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:34',
                'updated_at' => '2019-01-07 02:08:34',
            ),
            345 => 
            array (
                'id' => 346,
                'recipe_id' => 45,
                'description' => 'Simmer until cheese is melted.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:34',
                'updated_at' => '2019-01-07 02:08:34',
            ),
            346 => 
            array (
                'id' => 347,
                'recipe_id' => 46,
                'description' => 'Mix together vanilla pudding mix and milk.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:40',
                'updated_at' => '2019-01-07 02:08:40',
            ),
            347 => 
            array (
                'id' => 348,
                'recipe_id' => 46,
                'description' => 'Fold in whipped topping.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:40',
                'updated_at' => '2019-01-07 02:08:40',
            ),
            348 => 
            array (
                'id' => 349,
                'recipe_id' => 46,
                'description' => 'Line 9 x 13 pan with one layer of graham crackers.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:40',
                'updated_at' => '2019-01-07 02:08:40',
            ),
            349 => 
            array (
                'id' => 350,
                'recipe_id' => 46,
                'description' => 'Put half of the pudding mixture over the graham crackers.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:40',
                'updated_at' => '2019-01-07 02:08:40',
            ),
            350 => 
            array (
                'id' => 351,
                'recipe_id' => 46,
                'description' => 'Place a second layer of graham crackers over the pudding mixture.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:40',
                'updated_at' => '2019-01-07 02:08:40',
            ),
            351 => 
            array (
                'id' => 352,
                'recipe_id' => 46,
                'description' => 'Put the remaining pudding mixture over the graham crackers.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:40',
                'updated_at' => '2019-01-07 02:08:40',
            ),
            352 => 
            array (
                'id' => 353,
                'recipe_id' => 46,
                'description' => 'Place a third layer of graham crackers over the pudding mixture.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:40',
                'updated_at' => '2019-01-07 02:08:40',
            ),
            353 => 
            array (
                'id' => 354,
                'recipe_id' => 46,
            'description' => 'Heat the tub of frosting in the microwave for 30 seconds to soften. (Don\'t forget to remove the foil seal or you\'ll get fireworks).',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:40',
                'updated_at' => '2019-01-07 02:08:40',
            ),
            354 => 
            array (
                'id' => 355,
                'recipe_id' => 46,
                'description' => 'Spread frosting on the top of the last layer of graham crackers.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:40',
                'updated_at' => '2019-01-07 02:08:40',
            ),
            355 => 
            array (
                'id' => 356,
                'recipe_id' => 46,
                'description' => 'Cover with plastic wrap and let set a couple hours or overnight in the refrigerator.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:40',
                'updated_at' => '2019-01-07 02:08:40',
            ),
            356 => 
            array (
                'id' => 357,
                'recipe_id' => 46,
                'description' => 'Cut in squares.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:40',
                'updated_at' => '2019-01-07 02:08:40',
            ),
            357 => 
            array (
                'id' => 358,
                'recipe_id' => 47,
                'description' => 'Mix together flour, baking powder and salt.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:47',
                'updated_at' => '2019-01-07 02:08:47',
            ),
            358 => 
            array (
                'id' => 359,
                'recipe_id' => 47,
                'description' => 'Stir in the yogurt till the dough is too stiff for a spoon, then knead it in the bowl till it holds together well, adding more flour if necessary.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:47',
                'updated_at' => '2019-01-07 02:08:47',
            ),
            359 => 
            array (
                'id' => 360,
                'recipe_id' => 47,
                'description' => 'Turn it out on a floured surface and continue kneading for about 5 minutes till the dough feels smooth and elastic.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:47',
                'updated_at' => '2019-01-07 02:08:47',
            ),
            360 => 
            array (
                'id' => 361,
                'recipe_id' => 47,
                'description' => 'Form the dough into a ball and put it in an oiled bowl, covered with a towel, to rest for an hour or longer.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:47',
                'updated_at' => '2019-01-07 02:08:47',
            ),
            361 => 
            array (
                'id' => 362,
                'recipe_id' => 47,
                'description' => 'Take the dough out and cut it into 10 equal pieces. Form each into a ball and press the balls flat into round discs.',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:47',
                'updated_at' => '2019-01-07 02:08:47',
            ),
            362 => 
            array (
                'id' => 363,
                'recipe_id' => 47,
                'description' => 'Heat a large frying pan or griddle, either seasoned cast iron or a good non-stick finish.  ',
                'image' => NULL,
                'created_at' => '2019-01-07 02:08:47',
                'updated_at' => '2019-01-07 02:08:47',
            ),
            363 => 
            array (
                'id' => 364,
                'recipe_id' => 47,
                'description' => 'Heat your oven to about 500 and have the broiler on (this is how the original recipe states it - I know with my oven it\'s either 500 degree oven OR the broiler, but you get the idea.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:47',
                    'updated_at' => '2019-01-07 02:08:47',
                ),
                364 => 
                array (
                    'id' => 365,
                    'recipe_id' => 47,
                    'description' => 'Take 1 piece of dough at a time and roll it out on a floured surface till it is about 8-10 inches across and less than 1/4 inch thick.  ',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:47',
                    'updated_at' => '2019-01-07 02:08:47',
                ),
                365 => 
                array (
                    'id' => 366,
                    'recipe_id' => 47,
                'description' => 'Lay it on the hot griddle and cook it over a medium heat for 4-5 minutes (I don\'t think mine took that long). ',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:48',
                    'updated_at' => '2019-01-07 02:08:48',
                ),
                366 => 
                array (
                    'id' => 367,
                    'recipe_id' => 47,
                    'description' => 'It will puff up in places or all over, and there will be some blackish-brown spots on the bottom.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:48',
                    'updated_at' => '2019-01-07 02:08:48',
                ),
                367 => 
                array (
                    'id' => 368,
                    'recipe_id' => 47,
                    'description' => 'Slide a spatula under the naan and transfer it to the oven, directly onto the rack, for a minute or two, just till it finishes puffing up into a balloon and begins to color lightly on top.  ',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:48',
                    'updated_at' => '2019-01-07 02:08:48',
                ),
                368 => 
                array (
                    'id' => 369,
                    'recipe_id' => 47,
                    'description' => 'Remove naan from the oven and brush it lightly with melted butter if you like.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:48',
                    'updated_at' => '2019-01-07 02:08:48',
                ),
                369 => 
                array (
                    'id' => 370,
                    'recipe_id' => 47,
                    'description' => 'Continue this way with all the dough, stacking the breads into a napkin-lined basket.  ',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:48',
                    'updated_at' => '2019-01-07 02:08:48',
                ),
                370 => 
                array (
                    'id' => 371,
                    'recipe_id' => 47,
                    'description' => 'Serve the breads hot, fresh from the oven, or let them cool and wrap them up.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:48',
                    'updated_at' => '2019-01-07 02:08:48',
                ),
                371 => 
                array (
                    'id' => 372,
                    'recipe_id' => 47,
                    'description' => 'To reheat, wrap them in aluminum foil, in packets of 4 or 5 breads and put them in a 400 degree oven for 10-15 minutes.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:48',
                    'updated_at' => '2019-01-07 02:08:48',
                ),
                372 => 
                array (
                    'id' => 373,
                    'recipe_id' => 48,
                    'description' => 'Cream shortening, sugar and eggs.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:54',
                    'updated_at' => '2019-01-07 02:08:54',
                ),
                373 => 
                array (
                    'id' => 374,
                    'recipe_id' => 48,
                    'description' => 'Make a paste of food coloring and cocoa.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:54',
                    'updated_at' => '2019-01-07 02:08:54',
                ),
                374 => 
                array (
                    'id' => 375,
                    'recipe_id' => 48,
                    'description' => 'Add to creamed mixture.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:54',
                    'updated_at' => '2019-01-07 02:08:54',
                ),
                375 => 
                array (
                    'id' => 376,
                    'recipe_id' => 48,
                    'description' => 'Add buttermilk alternating with flour and salt.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:54',
                    'updated_at' => '2019-01-07 02:08:54',
                ),
                376 => 
                array (
                    'id' => 377,
                    'recipe_id' => 48,
                    'description' => 'Add vanilla.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:54',
                    'updated_at' => '2019-01-07 02:08:54',
                ),
                377 => 
                array (
                    'id' => 378,
                    'recipe_id' => 48,
                    'description' => 'Add soda to vinegar, and blend into the batter.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:54',
                    'updated_at' => '2019-01-07 02:08:54',
                ),
                378 => 
                array (
                    'id' => 379,
                    'recipe_id' => 48,
                    'description' => 'Pour into 3 or 4 greased and floured 8&quot; cake pans.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:54',
                    'updated_at' => '2019-01-07 02:08:54',
                ),
                379 => 
                array (
                    'id' => 380,
                    'recipe_id' => 48,
                    'description' => 'Bake at 350&deg;F for 24-30 minutes.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:54',
                    'updated_at' => '2019-01-07 02:08:54',
                ),
                380 => 
                array (
                    'id' => 381,
                    'recipe_id' => 48,
                    'description' => 'Split layers fill and frost with the following frosting.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:54',
                    'updated_at' => '2019-01-07 02:08:54',
                ),
                381 => 
                array (
                    'id' => 382,
                    'recipe_id' => 48,
                    'description' => 'Frosting: Add milk to flour slowly, avoiding lumps.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:54',
                    'updated_at' => '2019-01-07 02:08:54',
                ),
                382 => 
                array (
                    'id' => 383,
                    'recipe_id' => 48,
                    'description' => 'Cook flour and milk until very thick, stirring constantly.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:54',
                    'updated_at' => '2019-01-07 02:08:54',
                ),
                383 => 
                array (
                    'id' => 384,
                    'recipe_id' => 48,
                    'description' => 'Cool completely.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:54',
                    'updated_at' => '2019-01-07 02:08:54',
                ),
                384 => 
                array (
                    'id' => 385,
                    'recipe_id' => 48,
                    'description' => 'Cream sugar, butter and vanilla until fluffy.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:54',
                    'updated_at' => '2019-01-07 02:08:54',
                ),
                385 => 
                array (
                    'id' => 386,
                    'recipe_id' => 48,
                    'description' => 'Add to cooked mixture.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:54',
                    'updated_at' => '2019-01-07 02:08:54',
                ),
                386 => 
                array (
                    'id' => 387,
                    'recipe_id' => 48,
                    'description' => 'Beat, high speed, until very fluffy.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:55',
                    'updated_at' => '2019-01-07 02:08:55',
                ),
                387 => 
                array (
                    'id' => 388,
                    'recipe_id' => 48,
                    'description' => 'Looks and tastes like whipped cream.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:55',
                    'updated_at' => '2019-01-07 02:08:55',
                ),
                388 => 
                array (
                    'id' => 389,
                    'recipe_id' => 49,
                    'description' => 'Remove stems and seeds from dried chili peppers.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:57',
                    'updated_at' => '2019-01-07 02:08:57',
                ),
                389 => 
                array (
                    'id' => 390,
                    'recipe_id' => 49,
                    'description' => 'Place peppers in a single layer on a baking sheet.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:57',
                    'updated_at' => '2019-01-07 02:08:57',
                ),
                390 => 
                array (
                    'id' => 391,
                    'recipe_id' => 49,
                    'description' => 'Roast in 350&deg;F oven for 2 to 5 minutes or until you smell a sweet roasted aroma, checking often to avoid burning.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:57',
                    'updated_at' => '2019-01-07 02:08:57',
                ),
                391 => 
                array (
                    'id' => 392,
                    'recipe_id' => 49,
                    'description' => 'Remove from oven and soak in enough hot water to cover for about 30 minutes or until cool.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:57',
                    'updated_at' => '2019-01-07 02:08:57',
                ),
                392 => 
                array (
                    'id' => 393,
                    'recipe_id' => 49,
                'description' => 'Put peppers and 2 1/2 cups of the soaking water into a blender (save the remaining soaking water).',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:57',
                    'updated_at' => '2019-01-07 02:08:57',
                ),
                393 => 
                array (
                    'id' => 394,
                    'recipe_id' => 49,
                    'description' => 'Add garlic, cumin and salt.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:57',
                    'updated_at' => '2019-01-07 02:08:57',
                ),
                394 => 
                array (
                    'id' => 395,
                    'recipe_id' => 49,
                    'description' => 'Cover and blend until smooth.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:57',
                    'updated_at' => '2019-01-07 02:08:57',
                ),
                395 => 
                array (
                    'id' => 396,
                    'recipe_id' => 49,
                    'description' => 'In a 2-quart sauce pan, stir flour into oil or melted shortening over med heat until browned.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:57',
                    'updated_at' => '2019-01-07 02:08:57',
                ),
                396 => 
                array (
                    'id' => 397,
                    'recipe_id' => 49,
                    'description' => 'Carefully stir in blended chili mixture.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:57',
                    'updated_at' => '2019-01-07 02:08:57',
                ),
                397 => 
                array (
                    'id' => 398,
                    'recipe_id' => 49,
                'description' => 'Simmer uncovered for 5 to 10 minutes or until slightly thickened. (If sauce gets too thick, stir in up to 1 cup of the remaining soaking water until you reach the desired thickness) Use this sauce for traditional tamales, recipe #15286.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:57',
                    'updated_at' => '2019-01-07 02:08:57',
                ),
                398 => 
                array (
                    'id' => 399,
                    'recipe_id' => 49,
                    'description' => 'Note: When working with chilies, use rubber gloves to protect your skin, and avoid contact with your eyes. Wash hands throughly with soap and water to remove all of the chili oils.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:08:57',
                    'updated_at' => '2019-01-07 02:08:57',
                ),
                399 => 
                array (
                    'id' => 400,
                    'recipe_id' => 50,
                    'description' => 'Preheat oven to 425 degrees.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:00',
                    'updated_at' => '2019-01-07 02:09:00',
                ),
                400 => 
                array (
                    'id' => 401,
                    'recipe_id' => 50,
                    'description' => 'Trim the head of cauliflower, discarding the core and thick stems; cut florets into pieces about the size of ping-pong balls.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:00',
                    'updated_at' => '2019-01-07 02:09:00',
                ),
                401 => 
                array (
                    'id' => 402,
                    'recipe_id' => 50,
                    'description' => 'In a large bowl, combine the olive oil and salt, whisk, then add the cauliflower pieces and toss thoroughly.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:00',
                    'updated_at' => '2019-01-07 02:09:00',
                ),
                402 => 
                array (
                    'id' => 403,
                    'recipe_id' => 50,
                'description' => 'Line a baking sheet with parchment for easy cleanup (you can skip that, if you don\'t have any) then spread the cauliflower pieces on the sheet and roast for 1 hour, turning 3 or 4 times, until most of each piece has turned golden brown.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:00',
                    'updated_at' => '2019-01-07 02:09:00',
                ),
                403 => 
                array (
                    'id' => 404,
                    'recipe_id' => 50,
                'description' => '(The browner the cauliflower pieces turn, the more caramelization occurs and the sweeter they\'ll taste).',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:00',
                    'updated_at' => '2019-01-07 02:09:00',
                ),
                404 => 
                array (
                    'id' => 405,
                    'recipe_id' => 50,
                    'description' => 'Serve immediately and enjoy!',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:01',
                    'updated_at' => '2019-01-07 02:09:01',
                ),
                405 => 
                array (
                    'id' => 406,
                    'recipe_id' => 50,
                    'description' => 'Where I got it:  I originally heard about this recipe at Gail\'s Recipe Swap, where Josh posted it and many folks tried and loved it.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:01',
                    'updated_at' => '2019-01-07 02:09:01',
                ),
                406 => 
                array (
                    'id' => 407,
                    'recipe_id' => 51,
                    'description' => 'Brown ground beef and onion.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:03',
                    'updated_at' => '2019-01-07 02:09:03',
                ),
                407 => 
                array (
                    'id' => 408,
                    'recipe_id' => 51,
                    'description' => 'Drain.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:03',
                    'updated_at' => '2019-01-07 02:09:03',
                ),
                408 => 
                array (
                    'id' => 409,
                    'recipe_id' => 51,
                    'description' => 'Add beef stock to beef mixture and simmer 10 minutes.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:03',
                    'updated_at' => '2019-01-07 02:09:03',
                ),
                409 => 
                array (
                    'id' => 410,
                    'recipe_id' => 51,
                    'description' => 'Add remaining 13 ingredients, simmer uncovered 1 hour.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:03',
                    'updated_at' => '2019-01-07 02:09:03',
                ),
                410 => 
                array (
                    'id' => 411,
                    'recipe_id' => 51,
                    'description' => 'Remove bay leaf, skim off extra fat.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:03',
                    'updated_at' => '2019-01-07 02:09:03',
                ),
                411 => 
                array (
                    'id' => 412,
                    'recipe_id' => 51,
                    'description' => 'Serve over hot spaghetti, or hot dogs in buns for chili dogs.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:03',
                    'updated_at' => '2019-01-07 02:09:03',
                ),
                412 => 
                array (
                    'id' => 413,
                    'recipe_id' => 51,
                    'description' => 'Top with plenty of cheese and other optional toppings.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:03',
                    'updated_at' => '2019-01-07 02:09:03',
                ),
                413 => 
                array (
                    'id' => 414,
                    'recipe_id' => 52,
                    'description' => 'Set oven to 325 degrees F.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:05',
                    'updated_at' => '2019-01-07 02:09:05',
                ),
                414 => 
                array (
                    'id' => 415,
                    'recipe_id' => 52,
                    'description' => 'Grease a 13 x 9-inch baking pan.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:05',
                    'updated_at' => '2019-01-07 02:09:05',
                ),
                415 => 
                array (
                    'id' => 416,
                    'recipe_id' => 52,
                'description' => 'In a heavy saucepan, bring butter, sugar and water to a boil, stirring constantly until the butter is melted and sugar is dissolved (about 3 minutes).',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:05',
                    'updated_at' => '2019-01-07 02:09:05',
                ),
                416 => 
                array (
                    'id' => 417,
                    'recipe_id' => 52,
                    'description' => 'Remove from the heat, with a wooden spoon, stir in 2 cups chocolate chips until melted; cool slightly, beat in vanilla.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:05',
                    'updated_at' => '2019-01-07 02:09:05',
                ),
                417 => 
                array (
                    'id' => 418,
                    'recipe_id' => 52,
                    'description' => 'In a mixing bowl,whisk eggs, gradually add in the chocolate mixture, beating with a wooden spoon until completely mixed.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:05',
                    'updated_at' => '2019-01-07 02:09:05',
                ),
                418 => 
                array (
                    'id' => 419,
                    'recipe_id' => 52,
                    'description' => 'Mix together flour, baking soda and salt; add to the egg/chocolate mixture; mix well to combine.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:05',
                    'updated_at' => '2019-01-07 02:09:05',
                ),
                419 => 
                array (
                    'id' => 420,
                    'recipe_id' => 52,
                    'description' => 'Stir in the remaining chocolate chips.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:05',
                    'updated_at' => '2019-01-07 02:09:05',
                ),
                420 => 
                array (
                    'id' => 421,
                    'recipe_id' => 52,
                    'description' => 'Spread into prepared baking pan.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:05',
                    'updated_at' => '2019-01-07 02:09:05',
                ),
                421 => 
                array (
                    'id' => 422,
                    'recipe_id' => 52,
                'description' => 'Bake for 35-40 minutes (don\'t over bake).',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:05',
                    'updated_at' => '2019-01-07 02:09:05',
                ),
                422 => 
                array (
                    'id' => 423,
                    'recipe_id' => 52,
                    'description' => 'Cut into squares.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:05',
                    'updated_at' => '2019-01-07 02:09:05',
                ),
                423 => 
                array (
                    'id' => 424,
                    'recipe_id' => 52,
                    'description' => 'Note: If desired, chopped walnuts may be added.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:06',
                    'updated_at' => '2019-01-07 02:09:06',
                ),
                424 => 
                array (
                    'id' => 425,
                    'recipe_id' => 53,
                    'description' => 'Combine first 6 ingredients.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:08',
                    'updated_at' => '2019-01-07 02:09:08',
                ),
                425 => 
                array (
                    'id' => 426,
                    'recipe_id' => 53,
                    'description' => 'Place the two tortillas on work surface, spread half of cheese over each, top each with half of the roast beef slices, leaving a 1/2 inch border around edges.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:08',
                    'updated_at' => '2019-01-07 02:09:08',
                ),
                426 => 
                array (
                    'id' => 427,
                    'recipe_id' => 53,
                    'description' => 'Roll up, wrap tightly in plastic wrap.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:08',
                    'updated_at' => '2019-01-07 02:09:08',
                ),
                427 => 
                array (
                    'id' => 428,
                    'recipe_id' => 53,
                    'description' => 'Refrigerate until firm, 30 minutes or up to 1 day ahead.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:08',
                    'updated_at' => '2019-01-07 02:09:08',
                ),
                428 => 
                array (
                    'id' => 429,
                    'recipe_id' => 53,
                    'description' => 'cut diagonally into 1/2 inch slices and serve.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:08',
                    'updated_at' => '2019-01-07 02:09:08',
                ),
                429 => 
                array (
                    'id' => 430,
                    'recipe_id' => 54,
                    'description' => 'Melt margarine and place in the bottom of 9&quot; by 13&quot; baking pan.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:13',
                    'updated_at' => '2019-01-07 02:09:13',
                ),
                430 => 
                array (
                    'id' => 431,
                    'recipe_id' => 54,
                'description' => 'Spread potatoes (still frozen is okay) in bottom of the pan.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:13',
                    'updated_at' => '2019-01-07 02:09:13',
                ),
                431 => 
                array (
                    'id' => 432,
                    'recipe_id' => 54,
                    'description' => 'Sprinkle chopped vegetables over potatoes.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:13',
                    'updated_at' => '2019-01-07 02:09:13',
                ),
                432 => 
                array (
                    'id' => 433,
                    'recipe_id' => 54,
                    'description' => 'Add salt and pepper to taste.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:13',
                    'updated_at' => '2019-01-07 02:09:13',
                ),
                433 => 
                array (
                    'id' => 434,
                    'recipe_id' => 54,
                    'description' => 'Sprinkle meat over potatoes and vegetables.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:13',
                    'updated_at' => '2019-01-07 02:09:13',
                ),
                434 => 
                array (
                    'id' => 435,
                    'recipe_id' => 54,
                    'description' => 'Note: At this point you may continue or casserole may be refrigerated overnight.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:13',
                    'updated_at' => '2019-01-07 02:09:13',
                ),
                435 => 
                array (
                    'id' => 436,
                    'recipe_id' => 54,
                    'description' => 'Pour beaten eggs over potatoes.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:13',
                    'updated_at' => '2019-01-07 02:09:13',
                ),
                436 => 
                array (
                    'id' => 437,
                    'recipe_id' => 54,
                    'description' => 'Bake at 350 degrees for 45 minutes.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:13',
                    'updated_at' => '2019-01-07 02:09:13',
                ),
                437 => 
                array (
                    'id' => 438,
                    'recipe_id' => 54,
                    'description' => 'Remove from oven and sprinkle cheese evenly over top.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:14',
                    'updated_at' => '2019-01-07 02:09:14',
                ),
                438 => 
                array (
                    'id' => 439,
                    'recipe_id' => 54,
                    'description' => 'Bake another 5-10 minutes or until cheese is hot and bubbly.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:14',
                    'updated_at' => '2019-01-07 02:09:14',
                ),
                439 => 
                array (
                    'id' => 440,
                    'recipe_id' => 54,
                    'description' => 'Remove from oven and let set for approximately 5 minutes.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:14',
                    'updated_at' => '2019-01-07 02:09:14',
                ),
                440 => 
                array (
                    'id' => 441,
                    'recipe_id' => 54,
                    'description' => 'Cut into 2.5&quot;-3&quot; squares and serve with a spatula. Enjoy.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:14',
                    'updated_at' => '2019-01-07 02:09:14',
                ),
                441 => 
                array (
                    'id' => 442,
                    'recipe_id' => 55,
                    'description' => 'Brush roast with balsamic vinegar.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:18',
                    'updated_at' => '2019-01-07 02:09:18',
                ),
                442 => 
                array (
                    'id' => 443,
                    'recipe_id' => 55,
                    'description' => 'Make a paste with remaining ingredients and apply to meat.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:18',
                    'updated_at' => '2019-01-07 02:09:18',
                ),
                443 => 
                array (
                    'id' => 444,
                    'recipe_id' => 55,
                    'description' => 'Roast meat at 450 for 15 minutes Reduce heat to 350 and cook for 40 o 60 minutes, or until internal temperature reaches 125.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:18',
                    'updated_at' => '2019-01-07 02:09:18',
                ),
                444 => 
                array (
                    'id' => 445,
                    'recipe_id' => 55,
                    'description' => 'Remove from oven; cover loosely with foil and let stand 15 to 25 minutes.',
                    'image' => NULL,
                    'created_at' => '2019-01-07 02:09:18',
                    'updated_at' => '2019-01-07 02:09:18',
                ),
            ));
        
        
    }
}