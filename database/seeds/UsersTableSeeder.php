<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'carl lane',
                'avatar' => 'avatar-838B9733-993D-69BF-21F0-D444B353B31D-1544945283.jpg',
                'slug' => 'carl-lane',
                'email' => 'carl.lane@example.com',
                'password' => '$2y$10$fv7osqRzngfUGzLNLEQGDus46wnw.N9iWl4IlXDfDSu98n5DLQ22G',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:04',
                'updated_at' => '2018-12-16 07:28:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'enola blanc',
                'avatar' => 'avatar-8D2EE86D-3109-73F5-CB5E-8321003AD24B-1544945284.jpg',
                'slug' => 'enola-blanc',
                'email' => 'enola.blanc@example.com',
                'password' => '$2y$10$ixKCOAo7SQJWDmyVzm1BIef7uYGqHFfO/sYItVwCvmZKsm8Fkg1OC',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:04',
                'updated_at' => '2018-12-16 07:28:04',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'kaïs garcia',
                'avatar' => 'avatar-743E3A50-6EE0-474D-7631-18D445FA64D1-1544945284.jpg',
                'slug' => 'kais-garcia',
                'email' => 'kaïs.garcia@example.com',
                'password' => '$2y$10$o12hLsUhna7cO/0g40AG5OJzr0pYvvzbIx1QgtcubO8hI6KO1x9IS',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:04',
                'updated_at' => '2018-12-16 07:28:04',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'yanis riviere',
                'avatar' => 'avatar-F74D030B-6353-DD9F-DB22-F3A139001B8B-1544945284.jpg',
                'slug' => 'yanis-riviere',
                'email' => 'yanis.riviere@example.com',
                'password' => '$2y$10$7qKcP6wVkRQ0mk9qsC8HluiIhOnSKvSSdbFu6x9d8FZ4bR8RZCd.q',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:05',
                'updated_at' => '2018-12-16 07:28:05',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'maja christensen',
                'avatar' => 'avatar-B8B0EDFD-F217-0A81-1883-11A1DB894A91-1544945285.jpg',
                'slug' => 'maja-christensen',
                'email' => 'maja.christensen@example.com',
                'password' => '$2y$10$XL539bX7DqeNVfpZbqwYgOMhE8iMWDsHpMEUgBOQb314hPbwLDeUi',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:05',
                'updated_at' => '2018-12-16 07:28:05',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'matthew young',
                'avatar' => 'avatar-37447B35-E57C-D864-F52D-DC3AE1C1DDE1-1544945285.jpg',
                'slug' => 'matthew-young',
                'email' => 'matthew.young@example.com',
                'password' => '$2y$10$msU.f.7hyZxJamq0pP0Obel3fxT9ahN1xMM0Lt3IxEighfQOmHYoC',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:06',
                'updated_at' => '2018-12-16 07:28:06',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'maria jensen',
                'avatar' => 'avatar-B3104D44-60DA-FE21-F5EF-0CAF935FC3DE-1544945286.jpg',
                'slug' => 'maria-jensen',
                'email' => 'maria.jensen@example.com',
                'password' => '$2y$10$FsnSEfVL4mj4/huG0CDdH.rU1YnotSauu7otQfO9uH4tFIm911yR.',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:06',
                'updated_at' => '2018-12-16 07:28:06',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'emilie kristensen',
                'avatar' => 'avatar-787582DF-BC87-8F06-1DB9-2A2A54B3927E-1544945286.jpg',
                'slug' => 'emilie-kristensen',
                'email' => 'emilie.kristensen@example.com',
                'password' => '$2y$10$MGvoPYo8Nm1SDCUg7X1ljuV/iLfu0n5jfmCNxLkz3ghnp1PA1DR9K',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:06',
                'updated_at' => '2018-12-16 07:28:06',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'pablo menard',
                'avatar' => 'avatar-D8B2F94C-C1B7-1775-2B27-445960C5F5E9-1544945286.jpg',
                'slug' => 'pablo-menard',
                'email' => 'pablo.menard@example.com',
                'password' => '$2y$10$uJcdOa0sCP77hitNCFUTAeqSah10VhBRa.VWnT436UISf.CrIEjXC',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:07',
                'updated_at' => '2018-12-16 07:28:07',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'christoffer petersen',
                'avatar' => 'avatar-3D969B26-1D81-B2A3-9FD3-EBDACDBDCEFC-1544945287.jpg',
                'slug' => 'christoffer-petersen',
                'email' => 'christoffer.petersen@example.com',
                'password' => '$2y$10$/oZ4cUSxUgXUJRIUvgy6FOgD0F.20HDm2UN1MZENriO1UYGs9zxP.',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:07',
                'updated_at' => '2018-12-16 07:28:07',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'hazel holt',
                'avatar' => 'avatar-2ED4DE0D-0376-9432-E3FD-163761618DFF-1544945287.jpg',
                'slug' => 'hazel-holt',
                'email' => 'hazel.holt@example.com',
                'password' => '$2y$10$mHA.24bCTdVJFi3/9AJeKOu5j0SUedbAdiqUJHaO6meZ6Sw4qDJ6K',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:08',
                'updated_at' => '2018-12-16 07:28:08',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'marcus petersen',
                'avatar' => 'avatar-1E18D038-4DA2-3097-2A9F-981A665A5FE6-1544945288.jpg',
                'slug' => 'marcus-petersen',
                'email' => 'marcus.petersen@example.com',
                'password' => '$2y$10$AyztsuZinDrCLfJ6pqm7Y.XEwE3GGTDgkKc9J/L9eDA61B.6QdrVO',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:08',
                'updated_at' => '2018-12-16 07:28:08',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'emmy roy',
                'avatar' => 'avatar-A23496C8-F38B-5194-1812-9BA57B34BBD7-1544945288.jpg',
                'slug' => 'emmy-roy',
                'email' => 'emmy.roy@example.com',
                'password' => '$2y$10$PqI/85FO9vE6ocXe04EDGeijQB/1Mu86oxaDDiH9GovM8ho7gmlTq',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:09',
                'updated_at' => '2018-12-16 07:28:09',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'alexander pedersen',
                'avatar' => 'avatar-13AE3AA9-A3F3-A620-D1FE-726CB5E7CC4C-1544945289.jpg',
                'slug' => 'alexander-pedersen',
                'email' => 'alexander.pedersen@example.com',
                'password' => '$2y$10$Lp4h/RNgGZTx8oqERTobmuQGtz6iI5sQ.2TPnoJfmvdur.qQmJ9Ia',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:09',
                'updated_at' => '2018-12-16 07:28:09',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'victoria pedersen',
                'avatar' => 'avatar-34063D29-AE52-175A-DD3F-01B67BA1A909-1544945289.jpg',
                'slug' => 'victoria-pedersen',
                'email' => 'victoria.pedersen@example.com',
                'password' => '$2y$10$B1toQXhCdCWKkVrI1amGBO/BAm5qHITpZhxla426v7wkhPiHmkbQy',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:10',
                'updated_at' => '2018-12-16 07:28:10',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'theodore macrae',
                'avatar' => 'avatar-F045F612-9AAF-EB53-3F34-A78CC570E8A4-1544945290.jpg',
                'slug' => 'theodore-macrae',
                'email' => 'theodore.macrae@example.com',
                'password' => '$2y$10$bbpIV2uAOr8VDZkM9qexuuWCDq6YAG2G7ov7bSLkwVPYIoUcMrS3m',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:10',
                'updated_at' => '2018-12-16 07:28:10',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'ida howell',
                'avatar' => 'avatar-0B0B183A-3F37-674D-0A69-B8AF3B67A19E-1544945290.jpg',
                'slug' => 'ida-howell',
                'email' => 'ida.howell@example.com',
                'password' => '$2y$10$TKONuuvb423YhbPy6TxG4eEAhuxd32l.jy0AaRkdooXvGQSPNDKZi',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:11',
                'updated_at' => '2018-12-16 07:28:11',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'elia roux',
                'avatar' => 'avatar-82559088-4CA4-36BA-2851-E6C2DCE6F286-1544945291.jpg',
                'slug' => 'elia-roux',
                'email' => 'elia.roux@example.com',
                'password' => '$2y$10$c1Wy.NFFYDN9f/wbzd2P/.uTO3HMK9geH/Jy0EwAbHCFwqVCtnFBW',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:11',
                'updated_at' => '2018-12-16 07:28:11',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'astrid johansen',
                'avatar' => 'avatar-540596BD-37DA-0140-040A-B0FEB0C3DCD8-1544945291.jpg',
                'slug' => 'astrid-johansen',
                'email' => 'astrid.johansen@example.com',
                'password' => '$2y$10$O.wSi.YPWs7yjmIJdkwOIeSoen5qoL4et3D7KVQsvBoS80TZSQgt6',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:12',
                'updated_at' => '2018-12-16 07:28:12',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'manuel jones',
                'avatar' => 'avatar-FCD3AEFF-1FE3-3A67-A741-7A8FF0272384-1544945292.jpg',
                'slug' => 'manuel-jones',
                'email' => 'manuel.jones@example.com',
                'password' => '$2y$10$mwY0H1OFt0KoNqU0.Y8mT.xqf14czn/GyeSUXCQWonvCCjYWr3vya',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:12',
                'updated_at' => '2018-12-16 07:28:12',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'katrine kristensen',
                'avatar' => 'avatar-4BCBC1BA-B3E9-9473-8834-FEA58925B23B-1544945297.jpg',
                'slug' => 'katrine-kristensen',
                'email' => 'katrine.kristensen@example.com',
                'password' => '$2y$10$wVpPNJDS9.OZVKWus0HYqeWU6HgVJ27LoGrX8fvhaPdTem/L45QaK',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:17',
                'updated_at' => '2018-12-16 07:28:17',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'lohan colin',
                'avatar' => 'avatar-BC681BA9-39C8-8459-0C47-2F85F27B4D1E-1544945298.jpg',
                'slug' => 'lohan-colin',
                'email' => 'lohan.colin@example.com',
                'password' => '$2y$10$aqTx1WgIf.kBJ3jT8KSlxebpjXCsfceE7A8amEqBXCpDPQRlqQutS',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:19',
                'updated_at' => '2018-12-16 07:28:19',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'tilde jensen',
                'avatar' => 'avatar-186F1F4A-DCBC-E99E-E74A-87188AB6ACF4-1544945299.jpg',
                'slug' => 'tilde-jensen',
                'email' => 'tilde.jensen@example.com',
                'password' => '$2y$10$WRvX/C0Tve4Ahll9bj0y7unm3j8tlaJVsbeXL5.xcpCDyAu4BEity',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:20',
                'updated_at' => '2018-12-16 07:28:20',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'aubin bonnet',
                'avatar' => 'avatar-8709C9C1-2592-2364-EA40-36576C49A393-1544945300.jpg',
                'slug' => 'aubin-bonnet',
                'email' => 'aubin.bonnet@example.com',
                'password' => '$2y$10$5lLJMt2ZUYM6Ykks.gA.fems4DFqC/bzjFYNLt4StQbLwYtw2S7Vq',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:20',
                'updated_at' => '2018-12-16 07:28:20',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'jeremy allen',
                'avatar' => 'avatar-BB0A1CE3-951B-F8E8-B624-6BDEEA5123DB-1544945300.jpg',
                'slug' => 'jeremy-allen',
                'email' => 'jeremy.allen@example.com',
                'password' => '$2y$10$gijqxH3P3X3opQ/rhXIH6.QZCJ/Vq5dU6s0Mwbu4tuO.apeSsrcJi',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:21',
                'updated_at' => '2018-12-16 07:28:21',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'vicki hayes',
                'avatar' => 'avatar-831E024E-69B1-117F-7896-292139ABFC0F-1544945301.jpg',
                'slug' => 'vicki-hayes',
                'email' => 'vicki.hayes@example.com',
                'password' => '$2y$10$wtWo2NrQ0owcz9jjtz6DuORR5H0xFrlczvVtYNvrYhd7U5Kb42UY.',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:21',
                'updated_at' => '2018-12-16 07:28:21',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'alberto sanders',
                'avatar' => 'avatar-F8D48A99-0555-AB3C-9EF6-1F44F4CF2AA7-1544945301.jpg',
                'slug' => 'alberto-sanders',
                'email' => 'alberto.sanders@example.com',
                'password' => '$2y$10$URLlN2yJQiYXSc9ahukfwuCYY15oQv1aHkef2Lh4gXdkzn0/UptMu',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:22',
                'updated_at' => '2018-12-16 07:28:22',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'rachel ruiz',
                'avatar' => 'avatar-96337048-98FB-6753-86CD-7EA1BD3728D2-1544945302.jpg',
                'slug' => 'rachel-ruiz',
                'email' => 'rachel.ruiz@example.com',
                'password' => '$2y$10$LtxXdLRkhDCtQjp/YCRh7uHwQ1CaC6zv4ofdLzXxex7T.nui5l5Py',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:23',
                'updated_at' => '2018-12-16 07:28:23',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'christoffer nielsen',
                'avatar' => 'avatar-99DE2563-014E-DCE2-9938-69A7D5147618-1544945303.jpg',
                'slug' => 'christoffer-nielsen',
                'email' => 'christoffer.nielsen@example.com',
                'password' => '$2y$10$D3FVyF7lNCHVxWyCQYTkCO8PL7LXAhSwykftq2d71Eet.VeAIzlxu',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:23',
                'updated_at' => '2018-12-16 07:28:23',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'rosalyn hale',
                'avatar' => 'avatar-15D717CA-1B19-E185-B9A9-8A7373BEF05F-1544945303.jpg',
                'slug' => 'rosalyn-hale',
                'email' => 'rosalyn.hale@example.com',
                'password' => '$2y$10$s7gH2zpuDpr0MewrDQtswus7LsvBfkMj9FVgSG1eGd12Nb2Gntd.K',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:24',
                'updated_at' => '2018-12-16 07:28:24',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'ruben rice',
                'avatar' => 'avatar-4C965551-F752-07C2-0D45-ECDA78B87B40-1544945304.jpg',
                'slug' => 'ruben-rice',
                'email' => 'ruben.rice@example.com',
                'password' => '$2y$10$tHQuudA4dewsvkvTpKuRqOPHOGGXr9tbl3JdnjAefHN23d5GxE38a',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:24',
                'updated_at' => '2018-12-16 07:28:24',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'shawn neal',
                'avatar' => 'avatar-7CBEDB7D-DA96-D552-1F3B-BDEC8ACD2D3A-1544945304.jpg',
                'slug' => 'shawn-neal',
                'email' => 'shawn.neal@example.com',
                'password' => '$2y$10$qK6Eqb/ld7ChZNSa6bUNVuio9TnyRCw27gv0imNEuZ6ulafBuUgre',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:25',
                'updated_at' => '2018-12-16 07:28:25',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'pablo perrin',
                'avatar' => 'avatar-EB60D344-D5DC-4647-0D55-DA3FDDAD7FEE-1544945305.jpg',
                'slug' => 'pablo-perrin',
                'email' => 'pablo.perrin@example.com',
                'password' => '$2y$10$CFVKnERNpvedRNU35wd0ueY.q1iRAokodEi7E65jcvdxp2H0gZCO.',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:25',
                'updated_at' => '2018-12-16 07:28:25',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'elio joly',
                'avatar' => 'avatar-104356B1-F5BD-213B-28DA-1FF21B2DEBDE-1544945305.jpg',
                'slug' => 'elio-joly',
                'email' => 'elio.joly@example.com',
                'password' => '$2y$10$OvIIjKzgzEGXokkeuyRg1.G02JgX8G8MuLDxnjuRkoyl.6tkWLxwa',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:25',
                'updated_at' => '2018-12-16 07:28:25',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'barbara torres',
                'avatar' => 'avatar-B0A65EA7-4C44-D889-F758-13E7378E88E2-1544945305.jpg',
                'slug' => 'barbara-torres',
                'email' => 'barbara.torres@example.com',
                'password' => '$2y$10$oZHCfCrf1JP4ffZAXocFk.gHo7Yq7LHK5joOQi.Ssx5.Eg06wg9Ye',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:26',
                'updated_at' => '2018-12-16 07:28:26',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'tracy sanders',
                'avatar' => 'avatar-244E29D1-F6B9-8E51-1EBD-CB0171F5C052-1544945306.jpg',
                'slug' => 'tracy-sanders',
                'email' => 'tracy.sanders@example.com',
                'password' => '$2y$10$tHm58o6ewej2yFEvg59m0ODThiz7.svBP9C1AetLq0GhdJZjEnEa.',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:26',
                'updated_at' => '2018-12-16 07:28:26',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'pablo faure',
                'avatar' => 'avatar-3CA0BF64-B791-DC7C-4E22-B3F4DA97FAA2-1544945306.jpg',
                'slug' => 'pablo-faure',
                'email' => 'pablo.faure@example.com',
                'password' => '$2y$10$eWkSBbeRc2ASAHTr1yCMSugTmlKdWmiFyUkI.QHPV32F3ifpU9Ram',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:26',
                'updated_at' => '2018-12-16 07:28:26',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'oscar christensen',
                'avatar' => 'avatar-273AC2D9-A383-FEAF-1E1F-76B9BC24A1FD-1544945306.jpg',
                'slug' => 'oscar-christensen',
                'email' => 'oscar.christensen@example.com',
                'password' => '$2y$10$L24ax8v6sPaEC/yfsSZPz.IgOJivP45EhIec9EmUGOojNH/jRjyEy',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:27',
                'updated_at' => '2018-12-16 07:28:27',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'ricky reed',
                'avatar' => 'avatar-552E0181-152A-44BF-EE16-C146777E0B8E-1544945307.jpg',
                'slug' => 'ricky-reed',
                'email' => 'ricky.reed@example.com',
                'password' => '$2y$10$g6lUHS/qJfR7c2SKSZT1w.65B5ZsXi4EsFt5ifVrA4LUcRr353vp2',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:27',
                'updated_at' => '2018-12-16 07:28:27',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'jeanne newman',
                'avatar' => 'avatar-A9636AA6-6565-6155-272C-967C839A405F-1544945307.jpg',
                'slug' => 'jeanne-newman',
                'email' => 'jeanne.newman@example.com',
                'password' => '$2y$10$a84TfcFE2foEpSuFINsxLeOPV.5ttCFn1NNcQGxRBMfG60Fh/ABJ2',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:28',
                'updated_at' => '2018-12-16 07:28:28',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'gustav poulsen',
                'avatar' => 'avatar-8824E46A-8E70-C8B2-8AF6-F2B1FD104EBD-1544945320.jpg',
                'slug' => 'gustav-poulsen',
                'email' => 'gustav.poulsen@example.com',
                'password' => '$2y$10$HcTvrSKrqJ.KvmVqpbjO1.NoYHxkLbFJ3wXJQG5bZtFd7EaZ9dTku',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:41',
                'updated_at' => '2018-12-16 07:28:41',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'bertram christensen',
                'avatar' => 'avatar-3E9680B3-51BD-FB7B-594D-AB902E3CEFF9-1544945321.jpg',
                'slug' => 'bertram-christensen',
                'email' => 'bertram.christensen@example.com',
                'password' => '$2y$10$VibZkxAyj8MRXwuW22Knr.sNYM79Lf2aUo0oy7vDcBrqT9WU7bEku',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:41',
                'updated_at' => '2018-12-16 07:28:41',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'luka moulin',
                'avatar' => 'avatar-2FCF6C96-A572-AF06-6A49-1BF02E695A2B-1544945321.jpg',
                'slug' => 'luka-moulin',
                'email' => 'luka.moulin@example.com',
                'password' => '$2y$10$SYkRwP82FSLpTgJAmzwFS..Zx4CrDEJZ3EcVvq2vUhazZcAOwxLDa',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:41',
                'updated_at' => '2018-12-16 07:28:41',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'caroline castro',
                'avatar' => 'avatar-C83E1EC0-8500-0683-8C13-C7EC8C29C4C8-1544945321.jpg',
                'slug' => 'caroline-castro',
                'email' => 'caroline.castro@example.com',
                'password' => '$2y$10$56G02Q.g.aBXNwOoizExo.Xzj5ZFPk1pM76bvD/9R1uXOkQ2.Xy/i',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:43',
                'updated_at' => '2018-12-16 07:28:43',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'diana pena',
                'avatar' => 'avatar-BF3B6CC6-F493-6D0D-6CEE-67C2F472A327-1544945323.jpg',
                'slug' => 'diana-pena',
                'email' => 'diana.pena@example.com',
                'password' => '$2y$10$NzqrhOmK1Zh.7nTihJ1bceFN7qRqQ/AgmMW7JXy4ngoWEXwKo.iA2',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:43',
                'updated_at' => '2018-12-16 07:28:43',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'lorenzo sanchez',
                'avatar' => 'avatar-25B7C3A9-F787-3241-63E8-F59A0DDAEDAA-1544945323.jpg',
                'slug' => 'lorenzo-sanchez',
                'email' => 'lorenzo.sanchez@example.com',
                'password' => '$2y$10$/2hRoHFlzE6prqr1TvfJEew6HGs4UuAZoQE0VciI8eGx/oFHsLVre',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:43',
                'updated_at' => '2018-12-16 07:28:43',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'bradley gordon',
                'avatar' => 'avatar-B5F0C472-D533-67E3-46F2-D722B5BB0E29-1544945323.jpg',
                'slug' => 'bradley-gordon',
                'email' => 'bradley.gordon@example.com',
                'password' => '$2y$10$7GuL93XJPx9K/29DXTPCFOfQJsTTU34tufTQUJXWm4DTpZXGogKQq',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:44',
                'updated_at' => '2018-12-16 07:28:44',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'amalie kristensen',
                'avatar' => 'avatar-061A195B-E846-3C2F-8BA7-106F53C197C9-1544945324.jpg',
                'slug' => 'amalie-kristensen',
                'email' => 'amalie.kristensen@example.com',
                'password' => '$2y$10$gpFbGtnB.5R4n.1RnAkdiurfbfCoiDKHOdsoURYX6yYuJZr8Dt/du',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:44',
                'updated_at' => '2018-12-16 07:28:44',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'johan jean',
                'avatar' => 'avatar-F009D0F7-8674-75B4-9B53-27CF59EE4BD8-1544945325.jpg',
                'slug' => 'johan-jean',
                'email' => 'johan.jean@example.com',
                'password' => '$2y$10$a1fomfuYILfpgeEqEmEv1uT0FmbCMfliJzzfxLrVB/nC9WdFW5bna',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:45',
                'updated_at' => '2018-12-16 07:28:45',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'mille jensen',
                'avatar' => 'avatar-0F20DF71-DCDD-37E5-7D3E-5691B4C15174-1544945325.jpg',
                'slug' => 'mille-jensen',
                'email' => 'mille.jensen@example.com',
                'password' => '$2y$10$ICqyaoQVwxxSiIQFblRYqe5EGlpqnYHAC5tkxa6DBOlQ06kgCj75S',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:45',
                'updated_at' => '2018-12-16 07:28:45',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'nikolaj olsen',
                'avatar' => 'avatar-AA2D05B6-C0D4-AACC-0B52-166D09BDF51A-1544945325.jpg',
                'slug' => 'nikolaj-olsen',
                'email' => 'nikolaj.olsen@example.com',
                'password' => '$2y$10$S/cQDBYtAuuj8HEYga/97usxNWa.WeHPyH2HbQ4bpv8c6F1o2qQoK',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:46',
                'updated_at' => '2018-12-16 07:28:46',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'lucas george',
                'avatar' => 'avatar-8A9A463D-5B6A-2998-BC42-E500FB6FCD9E-1544945326.jpg',
                'slug' => 'lucas-george',
                'email' => 'lucas.george@example.com',
                'password' => '$2y$10$avnbk2pLfeZtbOtRvu5HwOjYrs/zxQgaojA2cDVPBek9D7r6roUBK',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:46',
                'updated_at' => '2018-12-16 07:28:46',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'aurore fernandez',
                'avatar' => 'avatar-CE04ACD0-9EA9-6A43-1FCE-41EC353CB2C3-1544945326.jpg',
                'slug' => 'aurore-fernandez',
                'email' => 'aurore.fernandez@example.com',
                'password' => '$2y$10$RP/mj0rxd/c9bjd.KeWe8uR0teoDhMJdgEp3gDYCerLomP7E/e9Oe',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:47',
                'updated_at' => '2018-12-16 07:28:47',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'blake willis',
                'avatar' => 'avatar-BF976ACC-AF17-70BC-034C-DADB556B9650-1544945327.jpg',
                'slug' => 'blake-willis',
                'email' => 'blake.willis@example.com',
                'password' => '$2y$10$bj2e2IJG8WEtTSlRY5XHl.qk0TimECNXIhHdIExzFlCvrBblei33S',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:48',
                'updated_at' => '2018-12-16 07:28:48',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'sarah myers',
                'avatar' => 'avatar-81BAD042-7503-73A8-CE44-348524B9E80B-1544945328.jpg',
                'slug' => 'sarah-myers',
                'email' => 'sarah.myers@example.com',
                'password' => '$2y$10$SVtnT/uhUrf5mLttBWSPa.sInvbqcGrTfE5.RwlDu4SvpliBVNgi6',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:48',
                'updated_at' => '2018-12-16 07:28:48',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'yann lambert',
                'avatar' => 'avatar-7C09E2D3-DE6E-65E2-56A8-B834A04BE1C3-1544945328.jpg',
                'slug' => 'yann-lambert',
                'email' => 'yann.lambert@example.com',
                'password' => '$2y$10$aQ8J2pKonSnezcgsVoZygOiIz2fpsry4xLrpBGinXksiAah5hA/dm',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:49',
                'updated_at' => '2018-12-16 07:28:49',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'harper fox',
                'avatar' => 'avatar-16FEABDA-B06A-A506-5A5A-E7D6E637BC7F-1544945329.jpg',
                'slug' => 'harper-fox',
                'email' => 'harper.fox@example.com',
                'password' => '$2y$10$zHdevxy8poXXL0/R6k8Hl.4f4kOAIlr4.F067heVw2dfpJZEF6K4O',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:49',
                'updated_at' => '2018-12-16 07:28:49',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'floyd mendoza',
                'avatar' => 'avatar-68C2D7CE-A90E-B876-08D2-103064829F5D-1544945329.jpg',
                'slug' => 'floyd-mendoza',
                'email' => 'floyd.mendoza@example.com',
                'password' => '$2y$10$W/xc96hcW0E49RlzRyvG.uWhOky8ALpPG4YdDSCaFagXfXIPHLpVi',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:50',
                'updated_at' => '2018-12-16 07:28:50',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'sheryl campbell',
                'avatar' => 'avatar-5156D20D-0B3C-4CE3-80D2-2C012FE964D0-1544945330.jpg',
                'slug' => 'sheryl-campbell',
                'email' => 'sheryl.campbell@example.com',
                'password' => '$2y$10$QFGcfuIY1Sgl5iVpQ4QYhujA/ScR/y36xzeDDwdMYWxinuaoaoB1y',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:50',
                'updated_at' => '2018-12-16 07:28:50',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'axel guillot',
                'avatar' => 'avatar-E990C70E-1D71-A60D-EE61-2559FB10D624-1544945330.jpg',
                'slug' => 'axel-guillot',
                'email' => 'axel.guillot@example.com',
                'password' => '$2y$10$1PY6StCs.nnCXw9CTfoUUOqJkDTLpQfNckxO6SjyIxRcY2gy4AH3S',
                'isAdmin' => 0,
                'bio' => NULL,
                'social' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-12-16 07:28:51',
                'updated_at' => '2018-12-16 07:28:51',
            ),
        ));
        
        
    }
}