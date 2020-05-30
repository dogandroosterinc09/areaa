<?php

use Illuminate\Database\Seeder;

class RoleHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_has_permissions')->delete();
        
        \DB::table('role_has_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            2 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            3 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            4 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            7 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            10 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            11 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            12 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            13 => 
            array (
                'permission_id' => 13,
                'role_id' => 2,
            ),
            14 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            15 => 
            array (
                'permission_id' => 14,
                'role_id' => 2,
            ),
            16 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            17 => 
            array (
                'permission_id' => 15,
                'role_id' => 2,
            ),
            18 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            19 => 
            array (
                'permission_id' => 16,
                'role_id' => 2,
            ),
            20 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            21 => 
            array (
                'permission_id' => 17,
                'role_id' => 2,
            ),
            22 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            23 => 
            array (
                'permission_id' => 18,
                'role_id' => 2,
            ),
            24 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 19,
                'role_id' => 2,
            ),
            26 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            27 => 
            array (
                'permission_id' => 20,
                'role_id' => 2,
            ),
            28 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            29 => 
            array (
                'permission_id' => 21,
                'role_id' => 2,
            ),
            30 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 22,
                'role_id' => 2,
            ),
            32 => 
            array (
                'permission_id' => 22,
                'role_id' => 4,
            ),
            33 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            34 => 
            array (
                'permission_id' => 23,
                'role_id' => 2,
            ),
            35 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            36 => 
            array (
                'permission_id' => 24,
                'role_id' => 2,
            ),
            37 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            38 => 
            array (
                'permission_id' => 25,
                'role_id' => 2,
            ),
            39 => 
            array (
                'permission_id' => 26,
                'role_id' => 1,
            ),
            40 => 
            array (
                'permission_id' => 26,
                'role_id' => 2,
            ),
            41 => 
            array (
                'permission_id' => 27,
                'role_id' => 1,
            ),
            42 => 
            array (
                'permission_id' => 27,
                'role_id' => 2,
            ),
            43 => 
            array (
                'permission_id' => 28,
                'role_id' => 1,
            ),
            44 => 
            array (
                'permission_id' => 28,
                'role_id' => 2,
            ),
            45 => 
            array (
                'permission_id' => 29,
                'role_id' => 1,
            ),
            46 => 
            array (
                'permission_id' => 29,
                'role_id' => 2,
            ),
            47 => 
            array (
                'permission_id' => 30,
                'role_id' => 1,
            ),
            48 => 
            array (
                'permission_id' => 30,
                'role_id' => 2,
            ),
            49 => 
            array (
                'permission_id' => 31,
                'role_id' => 1,
            ),
            50 => 
            array (
                'permission_id' => 31,
                'role_id' => 2,
            ),
            51 => 
            array (
                'permission_id' => 32,
                'role_id' => 1,
            ),
            52 => 
            array (
                'permission_id' => 32,
                'role_id' => 2,
            ),
            53 => 
            array (
                'permission_id' => 33,
                'role_id' => 1,
            ),
            54 => 
            array (
                'permission_id' => 33,
                'role_id' => 2,
            ),
            55 => 
            array (
                'permission_id' => 34,
                'role_id' => 1,
            ),
            56 => 
            array (
                'permission_id' => 34,
                'role_id' => 2,
            ),
            57 => 
            array (
                'permission_id' => 35,
                'role_id' => 1,
            ),
            58 => 
            array (
                'permission_id' => 35,
                'role_id' => 2,
            ),
            59 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            60 => 
            array (
                'permission_id' => 36,
                'role_id' => 2,
            ),
            61 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            62 => 
            array (
                'permission_id' => 37,
                'role_id' => 2,
            ),
            63 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            64 => 
            array (
                'permission_id' => 38,
                'role_id' => 2,
            ),
            65 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            66 => 
            array (
                'permission_id' => 39,
                'role_id' => 2,
            ),
            67 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            68 => 
            array (
                'permission_id' => 40,
                'role_id' => 2,
            ),
            69 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            70 => 
            array (
                'permission_id' => 41,
                'role_id' => 2,
            ),
            71 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            72 => 
            array (
                'permission_id' => 42,
                'role_id' => 2,
            ),
            73 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            74 => 
            array (
                'permission_id' => 43,
                'role_id' => 2,
            ),
            75 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            76 => 
            array (
                'permission_id' => 44,
                'role_id' => 2,
            ),
            77 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            78 => 
            array (
                'permission_id' => 45,
                'role_id' => 2,
            ),
            79 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            80 => 
            array (
                'permission_id' => 46,
                'role_id' => 2,
            ),
            81 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            82 => 
            array (
                'permission_id' => 47,
                'role_id' => 2,
            ),
            83 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            84 => 
            array (
                'permission_id' => 48,
                'role_id' => 2,
            ),
            85 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            86 => 
            array (
                'permission_id' => 49,
                'role_id' => 2,
            ),
            87 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            88 => 
            array (
                'permission_id' => 50,
                'role_id' => 2,
            ),
            89 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            90 => 
            array (
                'permission_id' => 51,
                'role_id' => 2,
            ),
            91 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            92 => 
            array (
                'permission_id' => 52,
                'role_id' => 2,
            ),
            93 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            94 => 
            array (
                'permission_id' => 53,
                'role_id' => 2,
            ),
            95 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            96 => 
            array (
                'permission_id' => 54,
                'role_id' => 2,
            ),
            97 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            98 => 
            array (
                'permission_id' => 55,
                'role_id' => 2,
            ),
            99 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            100 => 
            array (
                'permission_id' => 56,
                'role_id' => 2,
            ),
            101 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            102 => 
            array (
                'permission_id' => 57,
                'role_id' => 2,
            ),
            103 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            104 => 
            array (
                'permission_id' => 58,
                'role_id' => 2,
            ),
            105 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            106 => 
            array (
                'permission_id' => 59,
                'role_id' => 2,
            ),
            107 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            108 => 
            array (
                'permission_id' => 60,
                'role_id' => 2,
            ),
            109 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            110 => 
            array (
                'permission_id' => 61,
                'role_id' => 2,
            ),
            111 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            112 => 
            array (
                'permission_id' => 62,
                'role_id' => 2,
            ),
            113 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            114 => 
            array (
                'permission_id' => 63,
                'role_id' => 2,
            ),
            115 => 
            array (
                'permission_id' => 63,
                'role_id' => 4,
            ),
            116 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            117 => 
            array (
                'permission_id' => 64,
                'role_id' => 2,
            ),
            118 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            119 => 
            array (
                'permission_id' => 65,
                'role_id' => 2,
            ),
            120 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            121 => 
            array (
                'permission_id' => 66,
                'role_id' => 2,
            ),
            122 => 
            array (
                'permission_id' => 66,
                'role_id' => 4,
            ),
            123 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            124 => 
            array (
                'permission_id' => 67,
                'role_id' => 2,
            ),
            125 => 
            array (
                'permission_id' => 67,
                'role_id' => 4,
            ),
            126 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            127 => 
            array (
                'permission_id' => 68,
                'role_id' => 2,
            ),
            128 => 
            array (
                'permission_id' => 68,
                'role_id' => 4,
            ),
            129 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            130 => 
            array (
                'permission_id' => 69,
                'role_id' => 2,
            ),
            131 => 
            array (
                'permission_id' => 69,
                'role_id' => 4,
            ),
            132 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            133 => 
            array (
                'permission_id' => 70,
                'role_id' => 2,
            ),
            134 => 
            array (
                'permission_id' => 71,
                'role_id' => 1,
            ),
            135 => 
            array (
                'permission_id' => 71,
                'role_id' => 2,
            ),
            136 => 
            array (
                'permission_id' => 72,
                'role_id' => 1,
            ),
            137 => 
            array (
                'permission_id' => 72,
                'role_id' => 2,
            ),
            138 => 
            array (
                'permission_id' => 73,
                'role_id' => 1,
            ),
            139 => 
            array (
                'permission_id' => 73,
                'role_id' => 2,
            ),
            140 => 
            array (
                'permission_id' => 74,
                'role_id' => 1,
            ),
            141 => 
            array (
                'permission_id' => 74,
                'role_id' => 2,
            ),
            142 => 
            array (
                'permission_id' => 74,
                'role_id' => 4,
            ),
            143 => 
            array (
                'permission_id' => 75,
                'role_id' => 1,
            ),
            144 => 
            array (
                'permission_id' => 75,
                'role_id' => 2,
            ),
            145 => 
            array (
                'permission_id' => 75,
                'role_id' => 4,
            ),
            146 => 
            array (
                'permission_id' => 76,
                'role_id' => 1,
            ),
            147 => 
            array (
                'permission_id' => 76,
                'role_id' => 2,
            ),
            148 => 
            array (
                'permission_id' => 76,
                'role_id' => 4,
            ),
            149 => 
            array (
                'permission_id' => 77,
                'role_id' => 1,
            ),
            150 => 
            array (
                'permission_id' => 77,
                'role_id' => 2,
            ),
            151 => 
            array (
                'permission_id' => 77,
                'role_id' => 4,
            ),
            152 => 
            array (
                'permission_id' => 78,
                'role_id' => 1,
            ),
            153 => 
            array (
                'permission_id' => 78,
                'role_id' => 2,
            ),
            154 => 
            array (
                'permission_id' => 79,
                'role_id' => 1,
            ),
            155 => 
            array (
                'permission_id' => 79,
                'role_id' => 2,
            ),
            156 => 
            array (
                'permission_id' => 80,
                'role_id' => 1,
            ),
            157 => 
            array (
                'permission_id' => 80,
                'role_id' => 2,
            ),
            158 => 
            array (
                'permission_id' => 81,
                'role_id' => 1,
            ),
            159 => 
            array (
                'permission_id' => 81,
                'role_id' => 2,
            ),
            160 => 
            array (
                'permission_id' => 82,
                'role_id' => 1,
            ),
            161 => 
            array (
                'permission_id' => 82,
                'role_id' => 2,
            ),
            162 => 
            array (
                'permission_id' => 83,
                'role_id' => 1,
            ),
            163 => 
            array (
                'permission_id' => 83,
                'role_id' => 2,
            ),
            164 => 
            array (
                'permission_id' => 84,
                'role_id' => 1,
            ),
            165 => 
            array (
                'permission_id' => 84,
                'role_id' => 2,
            ),
            166 => 
            array (
                'permission_id' => 85,
                'role_id' => 1,
            ),
            167 => 
            array (
                'permission_id' => 85,
                'role_id' => 2,
            ),
            168 => 
            array (
                'permission_id' => 86,
                'role_id' => 1,
            ),
            169 => 
            array (
                'permission_id' => 86,
                'role_id' => 2,
            ),
            170 => 
            array (
                'permission_id' => 86,
                'role_id' => 4,
            ),
            171 => 
            array (
                'permission_id' => 87,
                'role_id' => 1,
            ),
            172 => 
            array (
                'permission_id' => 87,
                'role_id' => 2,
            ),
            173 => 
            array (
                'permission_id' => 88,
                'role_id' => 1,
            ),
            174 => 
            array (
                'permission_id' => 88,
                'role_id' => 2,
            ),
            175 => 
            array (
                'permission_id' => 89,
                'role_id' => 1,
            ),
            176 => 
            array (
                'permission_id' => 89,
                'role_id' => 2,
            ),
            177 => 
            array (
                'permission_id' => 90,
                'role_id' => 1,
            ),
            178 => 
            array (
                'permission_id' => 90,
                'role_id' => 2,
            ),
            179 => 
            array (
                'permission_id' => 91,
                'role_id' => 1,
            ),
            180 => 
            array (
                'permission_id' => 91,
                'role_id' => 2,
            ),
            181 => 
            array (
                'permission_id' => 92,
                'role_id' => 1,
            ),
            182 => 
            array (
                'permission_id' => 92,
                'role_id' => 2,
            ),
            183 => 
            array (
                'permission_id' => 92,
                'role_id' => 4,
            ),
            184 => 
            array (
                'permission_id' => 93,
                'role_id' => 1,
            ),
            185 => 
            array (
                'permission_id' => 93,
                'role_id' => 2,
            ),
            186 => 
            array (
                'permission_id' => 94,
                'role_id' => 1,
            ),
            187 => 
            array (
                'permission_id' => 94,
                'role_id' => 2,
            ),
            188 => 
            array (
                'permission_id' => 95,
                'role_id' => 1,
            ),
            189 => 
            array (
                'permission_id' => 95,
                'role_id' => 2,
            ),
            190 => 
            array (
                'permission_id' => 96,
                'role_id' => 1,
            ),
            191 => 
            array (
                'permission_id' => 96,
                'role_id' => 2,
            ),
            192 => 
            array (
                'permission_id' => 96,
                'role_id' => 4,
            ),
            193 => 
            array (
                'permission_id' => 97,
                'role_id' => 1,
            ),
            194 => 
            array (
                'permission_id' => 97,
                'role_id' => 2,
            ),
            195 => 
            array (
                'permission_id' => 98,
                'role_id' => 1,
            ),
            196 => 
            array (
                'permission_id' => 98,
                'role_id' => 2,
            ),
            197 => 
            array (
                'permission_id' => 99,
                'role_id' => 1,
            ),
            198 => 
            array (
                'permission_id' => 99,
                'role_id' => 2,
            ),
            199 => 
            array (
                'permission_id' => 100,
                'role_id' => 1,
            ),
            200 => 
            array (
                'permission_id' => 100,
                'role_id' => 2,
            ),
            201 => 
            array (
                'permission_id' => 100,
                'role_id' => 4,
            ),
            202 => 
            array (
                'permission_id' => 101,
                'role_id' => 1,
            ),
            203 => 
            array (
                'permission_id' => 101,
                'role_id' => 2,
            ),
            204 => 
            array (
                'permission_id' => 102,
                'role_id' => 1,
            ),
            205 => 
            array (
                'permission_id' => 102,
                'role_id' => 2,
            ),
            206 => 
            array (
                'permission_id' => 103,
                'role_id' => 1,
            ),
            207 => 
            array (
                'permission_id' => 103,
                'role_id' => 2,
            ),
            208 => 
            array (
                'permission_id' => 104,
                'role_id' => 1,
            ),
            209 => 
            array (
                'permission_id' => 104,
                'role_id' => 2,
            ),
            210 => 
            array (
                'permission_id' => 104,
                'role_id' => 4,
            ),
            211 => 
            array (
                'permission_id' => 105,
                'role_id' => 1,
            ),
            212 => 
            array (
                'permission_id' => 105,
                'role_id' => 2,
            ),
            213 => 
            array (
                'permission_id' => 106,
                'role_id' => 1,
            ),
            214 => 
            array (
                'permission_id' => 106,
                'role_id' => 2,
            ),
            215 => 
            array (
                'permission_id' => 107,
                'role_id' => 1,
            ),
            216 => 
            array (
                'permission_id' => 107,
                'role_id' => 2,
            ),
            217 => 
            array (
                'permission_id' => 108,
                'role_id' => 1,
            ),
            218 => 
            array (
                'permission_id' => 108,
                'role_id' => 2,
            ),
            219 => 
            array (
                'permission_id' => 109,
                'role_id' => 1,
            ),
            220 => 
            array (
                'permission_id' => 109,
                'role_id' => 2,
            ),
            221 => 
            array (
                'permission_id' => 110,
                'role_id' => 1,
            ),
            222 => 
            array (
                'permission_id' => 110,
                'role_id' => 2,
            ),
            223 => 
            array (
                'permission_id' => 110,
                'role_id' => 4,
            ),
            224 => 
            array (
                'permission_id' => 111,
                'role_id' => 1,
            ),
            225 => 
            array (
                'permission_id' => 111,
                'role_id' => 2,
            ),
            226 => 
            array (
                'permission_id' => 111,
                'role_id' => 4,
            ),
            227 => 
            array (
                'permission_id' => 112,
                'role_id' => 1,
            ),
            228 => 
            array (
                'permission_id' => 112,
                'role_id' => 2,
            ),
            229 => 
            array (
                'permission_id' => 112,
                'role_id' => 4,
            ),
            230 => 
            array (
                'permission_id' => 113,
                'role_id' => 1,
            ),
            231 => 
            array (
                'permission_id' => 113,
                'role_id' => 2,
            ),
            232 => 
            array (
                'permission_id' => 113,
                'role_id' => 4,
            ),
            233 => 
            array (
                'permission_id' => 114,
                'role_id' => 1,
            ),
            234 => 
            array (
                'permission_id' => 114,
                'role_id' => 2,
            ),
            235 => 
            array (
                'permission_id' => 115,
                'role_id' => 1,
            ),
            236 => 
            array (
                'permission_id' => 115,
                'role_id' => 2,
            ),
            237 => 
            array (
                'permission_id' => 115,
                'role_id' => 4,
            ),
            238 => 
            array (
                'permission_id' => 116,
                'role_id' => 1,
            ),
            239 => 
            array (
                'permission_id' => 116,
                'role_id' => 2,
            ),
            240 => 
            array (
                'permission_id' => 117,
                'role_id' => 1,
            ),
            241 => 
            array (
                'permission_id' => 117,
                'role_id' => 2,
            ),
            242 => 
            array (
                'permission_id' => 118,
                'role_id' => 1,
            ),
            243 => 
            array (
                'permission_id' => 118,
                'role_id' => 2,
            ),
            244 => 
            array (
                'permission_id' => 119,
                'role_id' => 1,
            ),
            245 => 
            array (
                'permission_id' => 119,
                'role_id' => 2,
            ),
            246 => 
            array (
                'permission_id' => 120,
                'role_id' => 1,
            ),
            247 => 
            array (
                'permission_id' => 120,
                'role_id' => 2,
            ),
            248 => 
            array (
                'permission_id' => 121,
                'role_id' => 1,
            ),
            249 => 
            array (
                'permission_id' => 121,
                'role_id' => 2,
            ),
            250 => 
            array (
                'permission_id' => 122,
                'role_id' => 1,
            ),
            251 => 
            array (
                'permission_id' => 122,
                'role_id' => 2,
            ),
            252 => 
            array (
                'permission_id' => 123,
                'role_id' => 1,
            ),
            253 => 
            array (
                'permission_id' => 123,
                'role_id' => 2,
            ),
            254 => 
            array (
                'permission_id' => 124,
                'role_id' => 1,
            ),
            255 => 
            array (
                'permission_id' => 124,
                'role_id' => 2,
            ),
            256 => 
            array (
                'permission_id' => 125,
                'role_id' => 1,
            ),
            257 => 
            array (
                'permission_id' => 125,
                'role_id' => 2,
            ),
        ));
        
        
    }
}