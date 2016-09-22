<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('district')->delete();
        
        \DB::table('district')->insert(array (
            0 => 
            array (
                'DistrictID' => 1,
                'DistrictName' => '东城区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            1 => 
            array (
                'DistrictID' => 2,
                'DistrictName' => '西城区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            2 => 
            array (
                'DistrictID' => 3,
                'DistrictName' => '崇文区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            3 => 
            array (
                'DistrictID' => 4,
                'DistrictName' => '宣武区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            4 => 
            array (
                'DistrictID' => 5,
                'DistrictName' => '朝阳区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            5 => 
            array (
                'DistrictID' => 6,
                'DistrictName' => '丰台区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            6 => 
            array (
                'DistrictID' => 7,
                'DistrictName' => '石景山区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            7 => 
            array (
                'DistrictID' => 8,
                'DistrictName' => '海淀区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            8 => 
            array (
                'DistrictID' => 9,
                'DistrictName' => '门头沟区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            9 => 
            array (
                'DistrictID' => 10,
                'DistrictName' => '房山区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            10 => 
            array (
                'DistrictID' => 11,
                'DistrictName' => '通州区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            11 => 
            array (
                'DistrictID' => 12,
                'DistrictName' => '顺义区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            12 => 
            array (
                'DistrictID' => 13,
                'DistrictName' => '昌平区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            13 => 
            array (
                'DistrictID' => 14,
                'DistrictName' => '大兴区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            14 => 
            array (
                'DistrictID' => 15,
                'DistrictName' => '怀柔区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            15 => 
            array (
                'DistrictID' => 16,
                'DistrictName' => '平谷区',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            16 => 
            array (
                'DistrictID' => 17,
                'DistrictName' => '密云县',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            17 => 
            array (
                'DistrictID' => 18,
                'DistrictName' => '延庆县',
                'CityID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            18 => 
            array (
                'DistrictID' => 19,
                'DistrictName' => '和平区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            19 => 
            array (
                'DistrictID' => 20,
                'DistrictName' => '河东区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            20 => 
            array (
                'DistrictID' => 21,
                'DistrictName' => '河西区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            21 => 
            array (
                'DistrictID' => 22,
                'DistrictName' => '南开区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            22 => 
            array (
                'DistrictID' => 23,
                'DistrictName' => '河北区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            23 => 
            array (
                'DistrictID' => 24,
                'DistrictName' => '红桥区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            24 => 
            array (
                'DistrictID' => 25,
                'DistrictName' => '塘沽区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            25 => 
            array (
                'DistrictID' => 26,
                'DistrictName' => '汉沽区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            26 => 
            array (
                'DistrictID' => 27,
                'DistrictName' => '大港区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            27 => 
            array (
                'DistrictID' => 28,
                'DistrictName' => '东丽区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            28 => 
            array (
                'DistrictID' => 29,
                'DistrictName' => '西青区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            29 => 
            array (
                'DistrictID' => 30,
                'DistrictName' => '津南区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            30 => 
            array (
                'DistrictID' => 31,
                'DistrictName' => '北辰区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            31 => 
            array (
                'DistrictID' => 32,
                'DistrictName' => '武清区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            32 => 
            array (
                'DistrictID' => 33,
                'DistrictName' => '宝坻区',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            33 => 
            array (
                'DistrictID' => 34,
                'DistrictName' => '宁河县',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            34 => 
            array (
                'DistrictID' => 35,
                'DistrictName' => '静海县',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            35 => 
            array (
                'DistrictID' => 36,
                'DistrictName' => '蓟县',
                'CityID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            36 => 
            array (
                'DistrictID' => 37,
                'DistrictName' => '长安区',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            37 => 
            array (
                'DistrictID' => 38,
                'DistrictName' => '桥东区',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            38 => 
            array (
                'DistrictID' => 39,
                'DistrictName' => '桥西区',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            39 => 
            array (
                'DistrictID' => 40,
                'DistrictName' => '新华区',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            40 => 
            array (
                'DistrictID' => 41,
                'DistrictName' => '井陉矿区',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            41 => 
            array (
                'DistrictID' => 42,
                'DistrictName' => '裕华区',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            42 => 
            array (
                'DistrictID' => 43,
                'DistrictName' => '井陉县',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            43 => 
            array (
                'DistrictID' => 44,
                'DistrictName' => '正定县',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            44 => 
            array (
                'DistrictID' => 45,
                'DistrictName' => '栾城县',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            45 => 
            array (
                'DistrictID' => 46,
                'DistrictName' => '行唐县',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            46 => 
            array (
                'DistrictID' => 47,
                'DistrictName' => '灵寿县',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            47 => 
            array (
                'DistrictID' => 48,
                'DistrictName' => '高邑县',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            48 => 
            array (
                'DistrictID' => 49,
                'DistrictName' => '深泽县',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            49 => 
            array (
                'DistrictID' => 50,
                'DistrictName' => '赞皇县',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            50 => 
            array (
                'DistrictID' => 51,
                'DistrictName' => '无极县',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            51 => 
            array (
                'DistrictID' => 52,
                'DistrictName' => '平山县',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            52 => 
            array (
                'DistrictID' => 53,
                'DistrictName' => '元氏县',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            53 => 
            array (
                'DistrictID' => 54,
                'DistrictName' => '赵县',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            54 => 
            array (
                'DistrictID' => 55,
                'DistrictName' => '辛集市',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            55 => 
            array (
                'DistrictID' => 56,
                'DistrictName' => '藁城市',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            56 => 
            array (
                'DistrictID' => 57,
                'DistrictName' => '晋州市',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            57 => 
            array (
                'DistrictID' => 58,
                'DistrictName' => '新乐市',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            58 => 
            array (
                'DistrictID' => 59,
                'DistrictName' => '鹿泉市',
                'CityID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            59 => 
            array (
                'DistrictID' => 60,
                'DistrictName' => '路南区',
                'CityID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            60 => 
            array (
                'DistrictID' => 61,
                'DistrictName' => '路北区',
                'CityID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            61 => 
            array (
                'DistrictID' => 62,
                'DistrictName' => '古冶区',
                'CityID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            62 => 
            array (
                'DistrictID' => 63,
                'DistrictName' => '开平区',
                'CityID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            63 => 
            array (
                'DistrictID' => 64,
                'DistrictName' => '丰南区',
                'CityID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            64 => 
            array (
                'DistrictID' => 65,
                'DistrictName' => '丰润区',
                'CityID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            65 => 
            array (
                'DistrictID' => 66,
                'DistrictName' => '滦县',
                'CityID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            66 => 
            array (
                'DistrictID' => 67,
                'DistrictName' => '滦南县',
                'CityID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            67 => 
            array (
                'DistrictID' => 68,
                'DistrictName' => '乐亭县',
                'CityID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            68 => 
            array (
                'DistrictID' => 69,
                'DistrictName' => '迁西县',
                'CityID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            69 => 
            array (
                'DistrictID' => 70,
                'DistrictName' => '玉田县',
                'CityID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            70 => 
            array (
                'DistrictID' => 71,
                'DistrictName' => '唐海县',
                'CityID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            71 => 
            array (
                'DistrictID' => 72,
                'DistrictName' => '遵化市',
                'CityID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            72 => 
            array (
                'DistrictID' => 73,
                'DistrictName' => '迁安市',
                'CityID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            73 => 
            array (
                'DistrictID' => 74,
                'DistrictName' => '海港区',
                'CityID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            74 => 
            array (
                'DistrictID' => 75,
                'DistrictName' => '山海关区',
                'CityID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            75 => 
            array (
                'DistrictID' => 76,
                'DistrictName' => '北戴河区',
                'CityID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            76 => 
            array (
                'DistrictID' => 77,
                'DistrictName' => '青龙满族自治县',
                'CityID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            77 => 
            array (
                'DistrictID' => 78,
                'DistrictName' => '昌黎县',
                'CityID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            78 => 
            array (
                'DistrictID' => 79,
                'DistrictName' => '抚宁县',
                'CityID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            79 => 
            array (
                'DistrictID' => 80,
                'DistrictName' => '卢龙县',
                'CityID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            80 => 
            array (
                'DistrictID' => 81,
                'DistrictName' => '邯山区',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            81 => 
            array (
                'DistrictID' => 82,
                'DistrictName' => '丛台区',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            82 => 
            array (
                'DistrictID' => 83,
                'DistrictName' => '复兴区',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            83 => 
            array (
                'DistrictID' => 84,
                'DistrictName' => '峰峰矿区',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            84 => 
            array (
                'DistrictID' => 85,
                'DistrictName' => '邯郸县',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            85 => 
            array (
                'DistrictID' => 86,
                'DistrictName' => '临漳县',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            86 => 
            array (
                'DistrictID' => 87,
                'DistrictName' => '成安县',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            87 => 
            array (
                'DistrictID' => 88,
                'DistrictName' => '大名县',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            88 => 
            array (
                'DistrictID' => 89,
                'DistrictName' => '涉县',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            89 => 
            array (
                'DistrictID' => 90,
                'DistrictName' => '磁县',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            90 => 
            array (
                'DistrictID' => 91,
                'DistrictName' => '肥乡县',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            91 => 
            array (
                'DistrictID' => 92,
                'DistrictName' => '永年县',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            92 => 
            array (
                'DistrictID' => 93,
                'DistrictName' => '邱县',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            93 => 
            array (
                'DistrictID' => 94,
                'DistrictName' => '鸡泽县',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            94 => 
            array (
                'DistrictID' => 95,
                'DistrictName' => '广平县',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            95 => 
            array (
                'DistrictID' => 96,
                'DistrictName' => '馆陶县',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            96 => 
            array (
                'DistrictID' => 97,
                'DistrictName' => '魏县',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            97 => 
            array (
                'DistrictID' => 98,
                'DistrictName' => '曲周县',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            98 => 
            array (
                'DistrictID' => 99,
                'DistrictName' => '武安市',
                'CityID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            99 => 
            array (
                'DistrictID' => 100,
                'DistrictName' => '桥东区',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            100 => 
            array (
                'DistrictID' => 101,
                'DistrictName' => '桥西区',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            101 => 
            array (
                'DistrictID' => 102,
                'DistrictName' => '邢台县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            102 => 
            array (
                'DistrictID' => 103,
                'DistrictName' => '临城县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            103 => 
            array (
                'DistrictID' => 104,
                'DistrictName' => '内丘县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            104 => 
            array (
                'DistrictID' => 105,
                'DistrictName' => '柏乡县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            105 => 
            array (
                'DistrictID' => 106,
                'DistrictName' => '隆尧县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            106 => 
            array (
                'DistrictID' => 107,
                'DistrictName' => '任县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            107 => 
            array (
                'DistrictID' => 108,
                'DistrictName' => '南和县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            108 => 
            array (
                'DistrictID' => 109,
                'DistrictName' => '宁晋县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            109 => 
            array (
                'DistrictID' => 110,
                'DistrictName' => '巨鹿县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            110 => 
            array (
                'DistrictID' => 111,
                'DistrictName' => '新河县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            111 => 
            array (
                'DistrictID' => 112,
                'DistrictName' => '广宗县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            112 => 
            array (
                'DistrictID' => 113,
                'DistrictName' => '平乡县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            113 => 
            array (
                'DistrictID' => 114,
                'DistrictName' => '威县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            114 => 
            array (
                'DistrictID' => 115,
                'DistrictName' => '清河县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            115 => 
            array (
                'DistrictID' => 116,
                'DistrictName' => '临西县',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            116 => 
            array (
                'DistrictID' => 117,
                'DistrictName' => '南宫市',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            117 => 
            array (
                'DistrictID' => 118,
                'DistrictName' => '沙河市',
                'CityID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            118 => 
            array (
                'DistrictID' => 119,
                'DistrictName' => '新市区',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            119 => 
            array (
                'DistrictID' => 120,
                'DistrictName' => '北市区',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            120 => 
            array (
                'DistrictID' => 121,
                'DistrictName' => '南市区',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            121 => 
            array (
                'DistrictID' => 122,
                'DistrictName' => '满城县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            122 => 
            array (
                'DistrictID' => 123,
                'DistrictName' => '清苑县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            123 => 
            array (
                'DistrictID' => 124,
                'DistrictName' => '涞水县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            124 => 
            array (
                'DistrictID' => 125,
                'DistrictName' => '阜平县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            125 => 
            array (
                'DistrictID' => 126,
                'DistrictName' => '徐水县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            126 => 
            array (
                'DistrictID' => 127,
                'DistrictName' => '定兴县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            127 => 
            array (
                'DistrictID' => 128,
                'DistrictName' => '唐县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            128 => 
            array (
                'DistrictID' => 129,
                'DistrictName' => '高阳县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            129 => 
            array (
                'DistrictID' => 130,
                'DistrictName' => '容城县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            130 => 
            array (
                'DistrictID' => 131,
                'DistrictName' => '涞源县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            131 => 
            array (
                'DistrictID' => 132,
                'DistrictName' => '望都县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            132 => 
            array (
                'DistrictID' => 133,
                'DistrictName' => '安新县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            133 => 
            array (
                'DistrictID' => 134,
                'DistrictName' => '易县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            134 => 
            array (
                'DistrictID' => 135,
                'DistrictName' => '曲阳县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            135 => 
            array (
                'DistrictID' => 136,
                'DistrictName' => '蠡县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            136 => 
            array (
                'DistrictID' => 137,
                'DistrictName' => '顺平县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            137 => 
            array (
                'DistrictID' => 138,
                'DistrictName' => '博野县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            138 => 
            array (
                'DistrictID' => 139,
                'DistrictName' => '雄县',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            139 => 
            array (
                'DistrictID' => 140,
                'DistrictName' => '涿州市',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            140 => 
            array (
                'DistrictID' => 141,
                'DistrictName' => '定州市',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            141 => 
            array (
                'DistrictID' => 142,
                'DistrictName' => '安国市',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            142 => 
            array (
                'DistrictID' => 143,
                'DistrictName' => '高碑店市',
                'CityID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            143 => 
            array (
                'DistrictID' => 144,
                'DistrictName' => '桥东区',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            144 => 
            array (
                'DistrictID' => 145,
                'DistrictName' => '桥西区',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            145 => 
            array (
                'DistrictID' => 146,
                'DistrictName' => '宣化区',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            146 => 
            array (
                'DistrictID' => 147,
                'DistrictName' => '下花园区',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            147 => 
            array (
                'DistrictID' => 148,
                'DistrictName' => '宣化县',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            148 => 
            array (
                'DistrictID' => 149,
                'DistrictName' => '张北县',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            149 => 
            array (
                'DistrictID' => 150,
                'DistrictName' => '康保县',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            150 => 
            array (
                'DistrictID' => 151,
                'DistrictName' => '沽源县',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            151 => 
            array (
                'DistrictID' => 152,
                'DistrictName' => '尚义县',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            152 => 
            array (
                'DistrictID' => 153,
                'DistrictName' => '蔚县',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            153 => 
            array (
                'DistrictID' => 154,
                'DistrictName' => '阳原县',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            154 => 
            array (
                'DistrictID' => 155,
                'DistrictName' => '怀安县',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            155 => 
            array (
                'DistrictID' => 156,
                'DistrictName' => '万全县',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            156 => 
            array (
                'DistrictID' => 157,
                'DistrictName' => '怀来县',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            157 => 
            array (
                'DistrictID' => 158,
                'DistrictName' => '涿鹿县',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            158 => 
            array (
                'DistrictID' => 159,
                'DistrictName' => '赤城县',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            159 => 
            array (
                'DistrictID' => 160,
                'DistrictName' => '崇礼县',
                'CityID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            160 => 
            array (
                'DistrictID' => 161,
                'DistrictName' => '双桥区',
                'CityID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            161 => 
            array (
                'DistrictID' => 162,
                'DistrictName' => '双滦区',
                'CityID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            162 => 
            array (
                'DistrictID' => 163,
                'DistrictName' => '鹰手营子矿区',
                'CityID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            163 => 
            array (
                'DistrictID' => 164,
                'DistrictName' => '承德县',
                'CityID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            164 => 
            array (
                'DistrictID' => 165,
                'DistrictName' => '兴隆县',
                'CityID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            165 => 
            array (
                'DistrictID' => 166,
                'DistrictName' => '平泉县',
                'CityID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            166 => 
            array (
                'DistrictID' => 167,
                'DistrictName' => '滦平县',
                'CityID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            167 => 
            array (
                'DistrictID' => 168,
                'DistrictName' => '隆化县',
                'CityID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            168 => 
            array (
                'DistrictID' => 169,
                'DistrictName' => '丰宁满族自治县',
                'CityID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            169 => 
            array (
                'DistrictID' => 170,
                'DistrictName' => '宽城满族自治县',
                'CityID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            170 => 
            array (
                'DistrictID' => 171,
                'DistrictName' => '围场满族蒙古族自治县',
                'CityID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            171 => 
            array (
                'DistrictID' => 172,
                'DistrictName' => '新华区',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            172 => 
            array (
                'DistrictID' => 173,
                'DistrictName' => '运河区',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            173 => 
            array (
                'DistrictID' => 174,
                'DistrictName' => '沧县',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            174 => 
            array (
                'DistrictID' => 175,
                'DistrictName' => '青县',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            175 => 
            array (
                'DistrictID' => 176,
                'DistrictName' => '东光县',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            176 => 
            array (
                'DistrictID' => 177,
                'DistrictName' => '海兴县',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            177 => 
            array (
                'DistrictID' => 178,
                'DistrictName' => '盐山县',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            178 => 
            array (
                'DistrictID' => 179,
                'DistrictName' => '肃宁县',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            179 => 
            array (
                'DistrictID' => 180,
                'DistrictName' => '南皮县',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            180 => 
            array (
                'DistrictID' => 181,
                'DistrictName' => '吴桥县',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            181 => 
            array (
                'DistrictID' => 182,
                'DistrictName' => '献县',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            182 => 
            array (
                'DistrictID' => 183,
                'DistrictName' => '孟村回族自治县',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            183 => 
            array (
                'DistrictID' => 184,
                'DistrictName' => '泊头市',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            184 => 
            array (
                'DistrictID' => 185,
                'DistrictName' => '任丘市',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            185 => 
            array (
                'DistrictID' => 186,
                'DistrictName' => '黄骅市',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            186 => 
            array (
                'DistrictID' => 187,
                'DistrictName' => '河间市',
                'CityID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            187 => 
            array (
                'DistrictID' => 188,
                'DistrictName' => '安次区',
                'CityID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            188 => 
            array (
                'DistrictID' => 189,
                'DistrictName' => '广阳区',
                'CityID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            189 => 
            array (
                'DistrictID' => 190,
                'DistrictName' => '固安县',
                'CityID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            190 => 
            array (
                'DistrictID' => 191,
                'DistrictName' => '永清县',
                'CityID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            191 => 
            array (
                'DistrictID' => 192,
                'DistrictName' => '香河县',
                'CityID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            192 => 
            array (
                'DistrictID' => 193,
                'DistrictName' => '大城县',
                'CityID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            193 => 
            array (
                'DistrictID' => 194,
                'DistrictName' => '文安县',
                'CityID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            194 => 
            array (
                'DistrictID' => 195,
                'DistrictName' => '大厂回族自治县',
                'CityID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            195 => 
            array (
                'DistrictID' => 196,
                'DistrictName' => '霸州市',
                'CityID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            196 => 
            array (
                'DistrictID' => 197,
                'DistrictName' => '三河市',
                'CityID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            197 => 
            array (
                'DistrictID' => 198,
                'DistrictName' => '桃城区',
                'CityID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            198 => 
            array (
                'DistrictID' => 199,
                'DistrictName' => '枣强县',
                'CityID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            199 => 
            array (
                'DistrictID' => 200,
                'DistrictName' => '武邑县',
                'CityID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            200 => 
            array (
                'DistrictID' => 201,
                'DistrictName' => '武强县',
                'CityID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            201 => 
            array (
                'DistrictID' => 202,
                'DistrictName' => '饶阳县',
                'CityID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            202 => 
            array (
                'DistrictID' => 203,
                'DistrictName' => '安平县',
                'CityID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            203 => 
            array (
                'DistrictID' => 204,
                'DistrictName' => '故城县',
                'CityID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            204 => 
            array (
                'DistrictID' => 205,
                'DistrictName' => '景县',
                'CityID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            205 => 
            array (
                'DistrictID' => 206,
                'DistrictName' => '阜城县',
                'CityID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            206 => 
            array (
                'DistrictID' => 207,
                'DistrictName' => '冀州市',
                'CityID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            207 => 
            array (
                'DistrictID' => 208,
                'DistrictName' => '深州市',
                'CityID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            208 => 
            array (
                'DistrictID' => 209,
                'DistrictName' => '小店区',
                'CityID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            209 => 
            array (
                'DistrictID' => 210,
                'DistrictName' => '迎泽区',
                'CityID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            210 => 
            array (
                'DistrictID' => 211,
                'DistrictName' => '杏花岭区',
                'CityID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            211 => 
            array (
                'DistrictID' => 212,
                'DistrictName' => '尖草坪区',
                'CityID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            212 => 
            array (
                'DistrictID' => 213,
                'DistrictName' => '万柏林区',
                'CityID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            213 => 
            array (
                'DistrictID' => 214,
                'DistrictName' => '晋源区',
                'CityID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            214 => 
            array (
                'DistrictID' => 215,
                'DistrictName' => '清徐县',
                'CityID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            215 => 
            array (
                'DistrictID' => 216,
                'DistrictName' => '阳曲县',
                'CityID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            216 => 
            array (
                'DistrictID' => 217,
                'DistrictName' => '娄烦县',
                'CityID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            217 => 
            array (
                'DistrictID' => 218,
                'DistrictName' => '古交市',
                'CityID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            218 => 
            array (
                'DistrictID' => 219,
                'DistrictName' => '城区',
                'CityID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            219 => 
            array (
                'DistrictID' => 220,
                'DistrictName' => '矿区',
                'CityID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            220 => 
            array (
                'DistrictID' => 221,
                'DistrictName' => '南郊区',
                'CityID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            221 => 
            array (
                'DistrictID' => 222,
                'DistrictName' => '新荣区',
                'CityID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            222 => 
            array (
                'DistrictID' => 223,
                'DistrictName' => '阳高县',
                'CityID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            223 => 
            array (
                'DistrictID' => 224,
                'DistrictName' => '天镇县',
                'CityID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            224 => 
            array (
                'DistrictID' => 225,
                'DistrictName' => '广灵县',
                'CityID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            225 => 
            array (
                'DistrictID' => 226,
                'DistrictName' => '灵丘县',
                'CityID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            226 => 
            array (
                'DistrictID' => 227,
                'DistrictName' => '浑源县',
                'CityID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            227 => 
            array (
                'DistrictID' => 228,
                'DistrictName' => '左云县',
                'CityID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            228 => 
            array (
                'DistrictID' => 229,
                'DistrictName' => '大同县',
                'CityID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            229 => 
            array (
                'DistrictID' => 230,
                'DistrictName' => '城区',
                'CityID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            230 => 
            array (
                'DistrictID' => 231,
                'DistrictName' => '矿区',
                'CityID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            231 => 
            array (
                'DistrictID' => 232,
                'DistrictName' => '郊区',
                'CityID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            232 => 
            array (
                'DistrictID' => 233,
                'DistrictName' => '平定县',
                'CityID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            233 => 
            array (
                'DistrictID' => 234,
                'DistrictName' => '盂县',
                'CityID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            234 => 
            array (
                'DistrictID' => 235,
                'DistrictName' => '城区',
                'CityID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            235 => 
            array (
                'DistrictID' => 236,
                'DistrictName' => '郊区',
                'CityID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            236 => 
            array (
                'DistrictID' => 237,
                'DistrictName' => '长治县',
                'CityID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            237 => 
            array (
                'DistrictID' => 238,
                'DistrictName' => '襄垣县',
                'CityID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            238 => 
            array (
                'DistrictID' => 239,
                'DistrictName' => '屯留县',
                'CityID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            239 => 
            array (
                'DistrictID' => 240,
                'DistrictName' => '平顺县',
                'CityID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            240 => 
            array (
                'DistrictID' => 241,
                'DistrictName' => '黎城县',
                'CityID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            241 => 
            array (
                'DistrictID' => 242,
                'DistrictName' => '壶关县',
                'CityID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            242 => 
            array (
                'DistrictID' => 243,
                'DistrictName' => '长子县',
                'CityID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            243 => 
            array (
                'DistrictID' => 244,
                'DistrictName' => '武乡县',
                'CityID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            244 => 
            array (
                'DistrictID' => 245,
                'DistrictName' => '沁县',
                'CityID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            245 => 
            array (
                'DistrictID' => 246,
                'DistrictName' => '沁源县',
                'CityID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            246 => 
            array (
                'DistrictID' => 247,
                'DistrictName' => '潞城市',
                'CityID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            247 => 
            array (
                'DistrictID' => 248,
                'DistrictName' => '城区',
                'CityID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            248 => 
            array (
                'DistrictID' => 249,
                'DistrictName' => '沁水县',
                'CityID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            249 => 
            array (
                'DistrictID' => 250,
                'DistrictName' => '阳城县',
                'CityID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            250 => 
            array (
                'DistrictID' => 251,
                'DistrictName' => '陵川县',
                'CityID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            251 => 
            array (
                'DistrictID' => 252,
                'DistrictName' => '泽州县',
                'CityID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            252 => 
            array (
                'DistrictID' => 253,
                'DistrictName' => '高平市',
                'CityID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            253 => 
            array (
                'DistrictID' => 254,
                'DistrictName' => '朔城区',
                'CityID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            254 => 
            array (
                'DistrictID' => 255,
                'DistrictName' => '平鲁区',
                'CityID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            255 => 
            array (
                'DistrictID' => 256,
                'DistrictName' => '山阴县',
                'CityID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            256 => 
            array (
                'DistrictID' => 257,
                'DistrictName' => '应县',
                'CityID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            257 => 
            array (
                'DistrictID' => 258,
                'DistrictName' => '右玉县',
                'CityID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            258 => 
            array (
                'DistrictID' => 259,
                'DistrictName' => '怀仁县',
                'CityID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            259 => 
            array (
                'DistrictID' => 260,
                'DistrictName' => '榆次区',
                'CityID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            260 => 
            array (
                'DistrictID' => 261,
                'DistrictName' => '榆社县',
                'CityID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            261 => 
            array (
                'DistrictID' => 262,
                'DistrictName' => '左权县',
                'CityID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            262 => 
            array (
                'DistrictID' => 263,
                'DistrictName' => '和顺县',
                'CityID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            263 => 
            array (
                'DistrictID' => 264,
                'DistrictName' => '昔阳县',
                'CityID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            264 => 
            array (
                'DistrictID' => 265,
                'DistrictName' => '寿阳县',
                'CityID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            265 => 
            array (
                'DistrictID' => 266,
                'DistrictName' => '太谷县',
                'CityID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            266 => 
            array (
                'DistrictID' => 267,
                'DistrictName' => '祁县',
                'CityID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            267 => 
            array (
                'DistrictID' => 268,
                'DistrictName' => '平遥县',
                'CityID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            268 => 
            array (
                'DistrictID' => 269,
                'DistrictName' => '灵石县',
                'CityID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            269 => 
            array (
                'DistrictID' => 270,
                'DistrictName' => '介休市',
                'CityID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            270 => 
            array (
                'DistrictID' => 271,
                'DistrictName' => '盐湖区',
                'CityID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            271 => 
            array (
                'DistrictID' => 272,
                'DistrictName' => '临猗县',
                'CityID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            272 => 
            array (
                'DistrictID' => 273,
                'DistrictName' => '万荣县',
                'CityID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            273 => 
            array (
                'DistrictID' => 274,
                'DistrictName' => '闻喜县',
                'CityID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            274 => 
            array (
                'DistrictID' => 275,
                'DistrictName' => '稷山县',
                'CityID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            275 => 
            array (
                'DistrictID' => 276,
                'DistrictName' => '新绛县',
                'CityID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            276 => 
            array (
                'DistrictID' => 277,
                'DistrictName' => '绛县',
                'CityID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            277 => 
            array (
                'DistrictID' => 278,
                'DistrictName' => '垣曲县',
                'CityID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            278 => 
            array (
                'DistrictID' => 279,
                'DistrictName' => '夏县',
                'CityID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            279 => 
            array (
                'DistrictID' => 280,
                'DistrictName' => '平陆县',
                'CityID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            280 => 
            array (
                'DistrictID' => 281,
                'DistrictName' => '芮城县',
                'CityID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            281 => 
            array (
                'DistrictID' => 282,
                'DistrictName' => '永济市',
                'CityID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            282 => 
            array (
                'DistrictID' => 283,
                'DistrictName' => '河津市',
                'CityID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            283 => 
            array (
                'DistrictID' => 284,
                'DistrictName' => '忻府区',
                'CityID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            284 => 
            array (
                'DistrictID' => 285,
                'DistrictName' => '定襄县',
                'CityID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            285 => 
            array (
                'DistrictID' => 286,
                'DistrictName' => '五台县',
                'CityID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            286 => 
            array (
                'DistrictID' => 287,
                'DistrictName' => '代县',
                'CityID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            287 => 
            array (
                'DistrictID' => 288,
                'DistrictName' => '繁峙县',
                'CityID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            288 => 
            array (
                'DistrictID' => 289,
                'DistrictName' => '宁武县',
                'CityID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            289 => 
            array (
                'DistrictID' => 290,
                'DistrictName' => '静乐县',
                'CityID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            290 => 
            array (
                'DistrictID' => 291,
                'DistrictName' => '神池县',
                'CityID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            291 => 
            array (
                'DistrictID' => 292,
                'DistrictName' => '五寨县',
                'CityID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            292 => 
            array (
                'DistrictID' => 293,
                'DistrictName' => '岢岚县',
                'CityID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            293 => 
            array (
                'DistrictID' => 294,
                'DistrictName' => '河曲县',
                'CityID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            294 => 
            array (
                'DistrictID' => 295,
                'DistrictName' => '保德县',
                'CityID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            295 => 
            array (
                'DistrictID' => 296,
                'DistrictName' => '偏关县',
                'CityID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            296 => 
            array (
                'DistrictID' => 297,
                'DistrictName' => '原平市',
                'CityID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            297 => 
            array (
                'DistrictID' => 298,
                'DistrictName' => '尧都区',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            298 => 
            array (
                'DistrictID' => 299,
                'DistrictName' => '曲沃县',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            299 => 
            array (
                'DistrictID' => 300,
                'DistrictName' => '翼城县',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            300 => 
            array (
                'DistrictID' => 301,
                'DistrictName' => '襄汾县',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            301 => 
            array (
                'DistrictID' => 302,
                'DistrictName' => '洪洞县',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            302 => 
            array (
                'DistrictID' => 303,
                'DistrictName' => '古县',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            303 => 
            array (
                'DistrictID' => 304,
                'DistrictName' => '安泽县',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            304 => 
            array (
                'DistrictID' => 305,
                'DistrictName' => '浮山县',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            305 => 
            array (
                'DistrictID' => 306,
                'DistrictName' => '吉县',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            306 => 
            array (
                'DistrictID' => 307,
                'DistrictName' => '乡宁县',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            307 => 
            array (
                'DistrictID' => 308,
                'DistrictName' => '大宁县',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            308 => 
            array (
                'DistrictID' => 309,
                'DistrictName' => '隰县',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            309 => 
            array (
                'DistrictID' => 310,
                'DistrictName' => '永和县',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            310 => 
            array (
                'DistrictID' => 311,
                'DistrictName' => '蒲县',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            311 => 
            array (
                'DistrictID' => 312,
                'DistrictName' => '汾西县',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            312 => 
            array (
                'DistrictID' => 313,
                'DistrictName' => '侯马市',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            313 => 
            array (
                'DistrictID' => 314,
                'DistrictName' => '霍州市',
                'CityID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            314 => 
            array (
                'DistrictID' => 315,
                'DistrictName' => '离石区',
                'CityID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            315 => 
            array (
                'DistrictID' => 316,
                'DistrictName' => '文水县',
                'CityID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            316 => 
            array (
                'DistrictID' => 317,
                'DistrictName' => '交城县',
                'CityID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            317 => 
            array (
                'DistrictID' => 318,
                'DistrictName' => '兴县',
                'CityID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            318 => 
            array (
                'DistrictID' => 319,
                'DistrictName' => '临县',
                'CityID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            319 => 
            array (
                'DistrictID' => 320,
                'DistrictName' => '柳林县',
                'CityID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            320 => 
            array (
                'DistrictID' => 321,
                'DistrictName' => '石楼县',
                'CityID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            321 => 
            array (
                'DistrictID' => 322,
                'DistrictName' => '岚县',
                'CityID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            322 => 
            array (
                'DistrictID' => 323,
                'DistrictName' => '方山县',
                'CityID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            323 => 
            array (
                'DistrictID' => 324,
                'DistrictName' => '中阳县',
                'CityID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            324 => 
            array (
                'DistrictID' => 325,
                'DistrictName' => '交口县',
                'CityID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            325 => 
            array (
                'DistrictID' => 326,
                'DistrictName' => '孝义市',
                'CityID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            326 => 
            array (
                'DistrictID' => 327,
                'DistrictName' => '汾阳市',
                'CityID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            327 => 
            array (
                'DistrictID' => 328,
                'DistrictName' => '新城区',
                'CityID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            328 => 
            array (
                'DistrictID' => 329,
                'DistrictName' => '回民区',
                'CityID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            329 => 
            array (
                'DistrictID' => 330,
                'DistrictName' => '玉泉区',
                'CityID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            330 => 
            array (
                'DistrictID' => 331,
                'DistrictName' => '赛罕区',
                'CityID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            331 => 
            array (
                'DistrictID' => 332,
                'DistrictName' => '土默特左旗',
                'CityID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            332 => 
            array (
                'DistrictID' => 333,
                'DistrictName' => '托克托县',
                'CityID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            333 => 
            array (
                'DistrictID' => 334,
                'DistrictName' => '和林格尔县',
                'CityID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            334 => 
            array (
                'DistrictID' => 335,
                'DistrictName' => '清水河县',
                'CityID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            335 => 
            array (
                'DistrictID' => 336,
                'DistrictName' => '武川县',
                'CityID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            336 => 
            array (
                'DistrictID' => 337,
                'DistrictName' => '东河区',
                'CityID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            337 => 
            array (
                'DistrictID' => 338,
                'DistrictName' => '昆都仑区',
                'CityID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            338 => 
            array (
                'DistrictID' => 339,
                'DistrictName' => '青山区',
                'CityID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            339 => 
            array (
                'DistrictID' => 340,
                'DistrictName' => '石拐区',
                'CityID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            340 => 
            array (
                'DistrictID' => 341,
                'DistrictName' => '白云矿区',
                'CityID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            341 => 
            array (
                'DistrictID' => 342,
                'DistrictName' => '九原区',
                'CityID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            342 => 
            array (
                'DistrictID' => 343,
                'DistrictName' => '土默特右旗',
                'CityID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            343 => 
            array (
                'DistrictID' => 344,
                'DistrictName' => '固阳县',
                'CityID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            344 => 
            array (
                'DistrictID' => 345,
                'DistrictName' => '达尔罕茂明安联合旗',
                'CityID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            345 => 
            array (
                'DistrictID' => 346,
                'DistrictName' => '海勃湾区',
                'CityID' => 27,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            346 => 
            array (
                'DistrictID' => 347,
                'DistrictName' => '海南区',
                'CityID' => 27,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            347 => 
            array (
                'DistrictID' => 348,
                'DistrictName' => '乌达区',
                'CityID' => 27,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            348 => 
            array (
                'DistrictID' => 349,
                'DistrictName' => '红山区',
                'CityID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            349 => 
            array (
                'DistrictID' => 350,
                'DistrictName' => '元宝山区',
                'CityID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            350 => 
            array (
                'DistrictID' => 351,
                'DistrictName' => '松山区',
                'CityID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            351 => 
            array (
                'DistrictID' => 352,
                'DistrictName' => '阿鲁科尔沁旗',
                'CityID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            352 => 
            array (
                'DistrictID' => 353,
                'DistrictName' => '巴林左旗',
                'CityID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            353 => 
            array (
                'DistrictID' => 354,
                'DistrictName' => '巴林右旗',
                'CityID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            354 => 
            array (
                'DistrictID' => 355,
                'DistrictName' => '林西县',
                'CityID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            355 => 
            array (
                'DistrictID' => 356,
                'DistrictName' => '克什克腾旗',
                'CityID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            356 => 
            array (
                'DistrictID' => 357,
                'DistrictName' => '翁牛特旗',
                'CityID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            357 => 
            array (
                'DistrictID' => 358,
                'DistrictName' => '喀喇沁旗',
                'CityID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            358 => 
            array (
                'DistrictID' => 359,
                'DistrictName' => '宁城县',
                'CityID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            359 => 
            array (
                'DistrictID' => 360,
                'DistrictName' => '敖汉旗',
                'CityID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            360 => 
            array (
                'DistrictID' => 361,
                'DistrictName' => '科尔沁区',
                'CityID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            361 => 
            array (
                'DistrictID' => 362,
                'DistrictName' => '科尔沁左翼中旗',
                'CityID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            362 => 
            array (
                'DistrictID' => 363,
                'DistrictName' => '科尔沁左翼后旗',
                'CityID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            363 => 
            array (
                'DistrictID' => 364,
                'DistrictName' => '开鲁县',
                'CityID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            364 => 
            array (
                'DistrictID' => 365,
                'DistrictName' => '库伦旗',
                'CityID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            365 => 
            array (
                'DistrictID' => 366,
                'DistrictName' => '奈曼旗',
                'CityID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            366 => 
            array (
                'DistrictID' => 367,
                'DistrictName' => '扎鲁特旗',
                'CityID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            367 => 
            array (
                'DistrictID' => 368,
                'DistrictName' => '霍林郭勒市',
                'CityID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            368 => 
            array (
                'DistrictID' => 369,
                'DistrictName' => '东胜区',
                'CityID' => 30,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            369 => 
            array (
                'DistrictID' => 370,
                'DistrictName' => '达拉特旗',
                'CityID' => 30,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            370 => 
            array (
                'DistrictID' => 371,
                'DistrictName' => '准格尔旗',
                'CityID' => 30,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            371 => 
            array (
                'DistrictID' => 372,
                'DistrictName' => '鄂托克前旗',
                'CityID' => 30,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            372 => 
            array (
                'DistrictID' => 373,
                'DistrictName' => '鄂托克旗',
                'CityID' => 30,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            373 => 
            array (
                'DistrictID' => 374,
                'DistrictName' => '杭锦旗',
                'CityID' => 30,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            374 => 
            array (
                'DistrictID' => 375,
                'DistrictName' => '乌审旗',
                'CityID' => 30,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            375 => 
            array (
                'DistrictID' => 376,
                'DistrictName' => '伊金霍洛旗',
                'CityID' => 30,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            376 => 
            array (
                'DistrictID' => 377,
                'DistrictName' => '海拉尔区',
                'CityID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            377 => 
            array (
                'DistrictID' => 378,
                'DistrictName' => '阿荣旗',
                'CityID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            378 => 
            array (
                'DistrictID' => 379,
                'DistrictName' => '莫力达瓦达斡尔族自治旗',
                'CityID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            379 => 
            array (
                'DistrictID' => 380,
                'DistrictName' => '鄂伦春自治旗',
                'CityID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            380 => 
            array (
                'DistrictID' => 381,
                'DistrictName' => '鄂温克族自治旗',
                'CityID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            381 => 
            array (
                'DistrictID' => 382,
                'DistrictName' => '陈巴尔虎旗',
                'CityID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            382 => 
            array (
                'DistrictID' => 383,
                'DistrictName' => '新巴尔虎左旗',
                'CityID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            383 => 
            array (
                'DistrictID' => 384,
                'DistrictName' => '新巴尔虎右旗',
                'CityID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            384 => 
            array (
                'DistrictID' => 385,
                'DistrictName' => '满洲里市',
                'CityID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            385 => 
            array (
                'DistrictID' => 386,
                'DistrictName' => '牙克石市',
                'CityID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            386 => 
            array (
                'DistrictID' => 387,
                'DistrictName' => '扎兰屯市',
                'CityID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            387 => 
            array (
                'DistrictID' => 388,
                'DistrictName' => '额尔古纳市',
                'CityID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            388 => 
            array (
                'DistrictID' => 389,
                'DistrictName' => '根河市',
                'CityID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            389 => 
            array (
                'DistrictID' => 390,
                'DistrictName' => '临河区',
                'CityID' => 32,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            390 => 
            array (
                'DistrictID' => 391,
                'DistrictName' => '五原县',
                'CityID' => 32,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            391 => 
            array (
                'DistrictID' => 392,
                'DistrictName' => '磴口县',
                'CityID' => 32,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            392 => 
            array (
                'DistrictID' => 393,
                'DistrictName' => '乌拉特前旗',
                'CityID' => 32,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            393 => 
            array (
                'DistrictID' => 394,
                'DistrictName' => '乌拉特中旗',
                'CityID' => 32,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            394 => 
            array (
                'DistrictID' => 395,
                'DistrictName' => '乌拉特后旗',
                'CityID' => 32,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            395 => 
            array (
                'DistrictID' => 396,
                'DistrictName' => '杭锦后旗',
                'CityID' => 32,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            396 => 
            array (
                'DistrictID' => 397,
                'DistrictName' => '集宁区',
                'CityID' => 33,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            397 => 
            array (
                'DistrictID' => 398,
                'DistrictName' => '卓资县',
                'CityID' => 33,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            398 => 
            array (
                'DistrictID' => 399,
                'DistrictName' => '化德县',
                'CityID' => 33,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            399 => 
            array (
                'DistrictID' => 400,
                'DistrictName' => '商都县',
                'CityID' => 33,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            400 => 
            array (
                'DistrictID' => 401,
                'DistrictName' => '兴和县',
                'CityID' => 33,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            401 => 
            array (
                'DistrictID' => 402,
                'DistrictName' => '凉城县',
                'CityID' => 33,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            402 => 
            array (
                'DistrictID' => 403,
                'DistrictName' => '察哈尔右翼前旗',
                'CityID' => 33,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            403 => 
            array (
                'DistrictID' => 404,
                'DistrictName' => '察哈尔右翼中旗',
                'CityID' => 33,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            404 => 
            array (
                'DistrictID' => 405,
                'DistrictName' => '察哈尔右翼后旗',
                'CityID' => 33,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            405 => 
            array (
                'DistrictID' => 406,
                'DistrictName' => '四子王旗',
                'CityID' => 33,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            406 => 
            array (
                'DistrictID' => 407,
                'DistrictName' => '丰镇市',
                'CityID' => 33,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            407 => 
            array (
                'DistrictID' => 408,
                'DistrictName' => '乌兰浩特市',
                'CityID' => 34,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            408 => 
            array (
                'DistrictID' => 409,
                'DistrictName' => '阿尔山市',
                'CityID' => 34,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            409 => 
            array (
                'DistrictID' => 410,
                'DistrictName' => '科尔沁右翼前旗',
                'CityID' => 34,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            410 => 
            array (
                'DistrictID' => 411,
                'DistrictName' => '科尔沁右翼中旗',
                'CityID' => 34,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            411 => 
            array (
                'DistrictID' => 412,
                'DistrictName' => '扎赉特旗',
                'CityID' => 34,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            412 => 
            array (
                'DistrictID' => 413,
                'DistrictName' => '突泉县',
                'CityID' => 34,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            413 => 
            array (
                'DistrictID' => 414,
                'DistrictName' => '二连浩特市',
                'CityID' => 35,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            414 => 
            array (
                'DistrictID' => 415,
                'DistrictName' => '锡林浩特市',
                'CityID' => 35,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            415 => 
            array (
                'DistrictID' => 416,
                'DistrictName' => '阿巴嘎旗',
                'CityID' => 35,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            416 => 
            array (
                'DistrictID' => 417,
                'DistrictName' => '苏尼特左旗',
                'CityID' => 35,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            417 => 
            array (
                'DistrictID' => 418,
                'DistrictName' => '苏尼特右旗',
                'CityID' => 35,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            418 => 
            array (
                'DistrictID' => 419,
                'DistrictName' => '东乌珠穆沁旗',
                'CityID' => 35,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            419 => 
            array (
                'DistrictID' => 420,
                'DistrictName' => '西乌珠穆沁旗',
                'CityID' => 35,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            420 => 
            array (
                'DistrictID' => 421,
                'DistrictName' => '太仆寺旗',
                'CityID' => 35,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            421 => 
            array (
                'DistrictID' => 422,
                'DistrictName' => '镶黄旗',
                'CityID' => 35,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            422 => 
            array (
                'DistrictID' => 423,
                'DistrictName' => '正镶白旗',
                'CityID' => 35,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            423 => 
            array (
                'DistrictID' => 424,
                'DistrictName' => '正蓝旗',
                'CityID' => 35,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            424 => 
            array (
                'DistrictID' => 425,
                'DistrictName' => '多伦县',
                'CityID' => 35,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            425 => 
            array (
                'DistrictID' => 426,
                'DistrictName' => '阿拉善左旗',
                'CityID' => 36,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            426 => 
            array (
                'DistrictID' => 427,
                'DistrictName' => '阿拉善右旗',
                'CityID' => 36,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            427 => 
            array (
                'DistrictID' => 428,
                'DistrictName' => '额济纳旗',
                'CityID' => 36,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            428 => 
            array (
                'DistrictID' => 429,
                'DistrictName' => '和平区',
                'CityID' => 37,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            429 => 
            array (
                'DistrictID' => 430,
                'DistrictName' => '沈河区',
                'CityID' => 37,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            430 => 
            array (
                'DistrictID' => 431,
                'DistrictName' => '大东区',
                'CityID' => 37,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            431 => 
            array (
                'DistrictID' => 432,
                'DistrictName' => '皇姑区',
                'CityID' => 37,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            432 => 
            array (
                'DistrictID' => 433,
                'DistrictName' => '铁西区',
                'CityID' => 37,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            433 => 
            array (
                'DistrictID' => 434,
                'DistrictName' => '苏家屯区',
                'CityID' => 37,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            434 => 
            array (
                'DistrictID' => 435,
                'DistrictName' => '东陵区',
                'CityID' => 37,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            435 => 
            array (
                'DistrictID' => 436,
                'DistrictName' => '新城子区',
                'CityID' => 37,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            436 => 
            array (
                'DistrictID' => 437,
                'DistrictName' => '于洪区',
                'CityID' => 37,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            437 => 
            array (
                'DistrictID' => 438,
                'DistrictName' => '辽中县',
                'CityID' => 37,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            438 => 
            array (
                'DistrictID' => 439,
                'DistrictName' => '康平县',
                'CityID' => 37,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            439 => 
            array (
                'DistrictID' => 440,
                'DistrictName' => '法库县',
                'CityID' => 37,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            440 => 
            array (
                'DistrictID' => 441,
                'DistrictName' => '新民市',
                'CityID' => 37,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            441 => 
            array (
                'DistrictID' => 442,
                'DistrictName' => '中山区',
                'CityID' => 38,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            442 => 
            array (
                'DistrictID' => 443,
                'DistrictName' => '西岗区',
                'CityID' => 38,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            443 => 
            array (
                'DistrictID' => 444,
                'DistrictName' => '沙河口区',
                'CityID' => 38,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            444 => 
            array (
                'DistrictID' => 445,
                'DistrictName' => '甘井子区',
                'CityID' => 38,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            445 => 
            array (
                'DistrictID' => 446,
                'DistrictName' => '旅顺口区',
                'CityID' => 38,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            446 => 
            array (
                'DistrictID' => 447,
                'DistrictName' => '金州区',
                'CityID' => 38,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            447 => 
            array (
                'DistrictID' => 448,
                'DistrictName' => '长海县',
                'CityID' => 38,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            448 => 
            array (
                'DistrictID' => 449,
                'DistrictName' => '瓦房店市',
                'CityID' => 38,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            449 => 
            array (
                'DistrictID' => 450,
                'DistrictName' => '普兰店市',
                'CityID' => 38,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            450 => 
            array (
                'DistrictID' => 451,
                'DistrictName' => '庄河市',
                'CityID' => 38,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            451 => 
            array (
                'DistrictID' => 452,
                'DistrictName' => '铁东区',
                'CityID' => 39,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            452 => 
            array (
                'DistrictID' => 453,
                'DistrictName' => '铁西区',
                'CityID' => 39,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            453 => 
            array (
                'DistrictID' => 454,
                'DistrictName' => '立山区',
                'CityID' => 39,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            454 => 
            array (
                'DistrictID' => 455,
                'DistrictName' => '千山区',
                'CityID' => 39,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            455 => 
            array (
                'DistrictID' => 456,
                'DistrictName' => '台安县',
                'CityID' => 39,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            456 => 
            array (
                'DistrictID' => 457,
                'DistrictName' => '岫岩满族自治县',
                'CityID' => 39,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            457 => 
            array (
                'DistrictID' => 458,
                'DistrictName' => '海城市',
                'CityID' => 39,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            458 => 
            array (
                'DistrictID' => 459,
                'DistrictName' => '新抚区',
                'CityID' => 40,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            459 => 
            array (
                'DistrictID' => 460,
                'DistrictName' => '东洲区',
                'CityID' => 40,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            460 => 
            array (
                'DistrictID' => 461,
                'DistrictName' => '望花区',
                'CityID' => 40,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            461 => 
            array (
                'DistrictID' => 462,
                'DistrictName' => '顺城区',
                'CityID' => 40,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            462 => 
            array (
                'DistrictID' => 463,
                'DistrictName' => '抚顺县',
                'CityID' => 40,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            463 => 
            array (
                'DistrictID' => 464,
                'DistrictName' => '新宾满族自治县',
                'CityID' => 40,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            464 => 
            array (
                'DistrictID' => 465,
                'DistrictName' => '清原满族自治县',
                'CityID' => 40,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            465 => 
            array (
                'DistrictID' => 466,
                'DistrictName' => '平山区',
                'CityID' => 41,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            466 => 
            array (
                'DistrictID' => 467,
                'DistrictName' => '溪湖区',
                'CityID' => 41,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            467 => 
            array (
                'DistrictID' => 468,
                'DistrictName' => '明山区',
                'CityID' => 41,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            468 => 
            array (
                'DistrictID' => 469,
                'DistrictName' => '南芬区',
                'CityID' => 41,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            469 => 
            array (
                'DistrictID' => 470,
                'DistrictName' => '本溪满族自治县',
                'CityID' => 41,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            470 => 
            array (
                'DistrictID' => 471,
                'DistrictName' => '桓仁满族自治县',
                'CityID' => 41,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            471 => 
            array (
                'DistrictID' => 472,
                'DistrictName' => '元宝区',
                'CityID' => 42,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            472 => 
            array (
                'DistrictID' => 473,
                'DistrictName' => '振兴区',
                'CityID' => 42,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            473 => 
            array (
                'DistrictID' => 474,
                'DistrictName' => '振安区',
                'CityID' => 42,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            474 => 
            array (
                'DistrictID' => 475,
                'DistrictName' => '宽甸满族自治县',
                'CityID' => 42,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            475 => 
            array (
                'DistrictID' => 476,
                'DistrictName' => '东港市',
                'CityID' => 42,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            476 => 
            array (
                'DistrictID' => 477,
                'DistrictName' => '凤城市',
                'CityID' => 42,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            477 => 
            array (
                'DistrictID' => 478,
                'DistrictName' => '古塔区',
                'CityID' => 43,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            478 => 
            array (
                'DistrictID' => 479,
                'DistrictName' => '凌河区',
                'CityID' => 43,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            479 => 
            array (
                'DistrictID' => 480,
                'DistrictName' => '太和区',
                'CityID' => 43,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            480 => 
            array (
                'DistrictID' => 481,
                'DistrictName' => '黑山县',
                'CityID' => 43,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            481 => 
            array (
                'DistrictID' => 482,
                'DistrictName' => '义县',
                'CityID' => 43,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            482 => 
            array (
                'DistrictID' => 483,
                'DistrictName' => '凌海市',
                'CityID' => 43,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            483 => 
            array (
                'DistrictID' => 484,
                'DistrictName' => '北宁市',
                'CityID' => 43,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            484 => 
            array (
                'DistrictID' => 485,
                'DistrictName' => '站前区',
                'CityID' => 44,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            485 => 
            array (
                'DistrictID' => 486,
                'DistrictName' => '西市区',
                'CityID' => 44,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            486 => 
            array (
                'DistrictID' => 487,
                'DistrictName' => '鲅鱼圈区',
                'CityID' => 44,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            487 => 
            array (
                'DistrictID' => 488,
                'DistrictName' => '老边区',
                'CityID' => 44,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            488 => 
            array (
                'DistrictID' => 489,
                'DistrictName' => '盖州市',
                'CityID' => 44,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            489 => 
            array (
                'DistrictID' => 490,
                'DistrictName' => '大石桥市',
                'CityID' => 44,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            490 => 
            array (
                'DistrictID' => 491,
                'DistrictName' => '海州区',
                'CityID' => 45,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            491 => 
            array (
                'DistrictID' => 492,
                'DistrictName' => '新邱区',
                'CityID' => 45,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            492 => 
            array (
                'DistrictID' => 493,
                'DistrictName' => '太平区',
                'CityID' => 45,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            493 => 
            array (
                'DistrictID' => 494,
                'DistrictName' => '清河门区',
                'CityID' => 45,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            494 => 
            array (
                'DistrictID' => 495,
                'DistrictName' => '细河区',
                'CityID' => 45,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            495 => 
            array (
                'DistrictID' => 496,
                'DistrictName' => '阜新蒙古族自治县',
                'CityID' => 45,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            496 => 
            array (
                'DistrictID' => 497,
                'DistrictName' => '彰武县',
                'CityID' => 45,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            497 => 
            array (
                'DistrictID' => 498,
                'DistrictName' => '白塔区',
                'CityID' => 46,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            498 => 
            array (
                'DistrictID' => 499,
                'DistrictName' => '文圣区',
                'CityID' => 46,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            499 => 
            array (
                'DistrictID' => 500,
                'DistrictName' => '宏伟区',
                'CityID' => 46,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
        ));
        \DB::table('district')->insert(array (
            0 => 
            array (
                'DistrictID' => 501,
                'DistrictName' => '弓长岭区',
                'CityID' => 46,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            1 => 
            array (
                'DistrictID' => 502,
                'DistrictName' => '太子河区',
                'CityID' => 46,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            2 => 
            array (
                'DistrictID' => 503,
                'DistrictName' => '辽阳县',
                'CityID' => 46,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            3 => 
            array (
                'DistrictID' => 504,
                'DistrictName' => '灯塔市',
                'CityID' => 46,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            4 => 
            array (
                'DistrictID' => 505,
                'DistrictName' => '双台子区',
                'CityID' => 47,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            5 => 
            array (
                'DistrictID' => 506,
                'DistrictName' => '兴隆台区',
                'CityID' => 47,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            6 => 
            array (
                'DistrictID' => 507,
                'DistrictName' => '大洼县',
                'CityID' => 47,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            7 => 
            array (
                'DistrictID' => 508,
                'DistrictName' => '盘山县',
                'CityID' => 47,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            8 => 
            array (
                'DistrictID' => 509,
                'DistrictName' => '银州区',
                'CityID' => 48,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            9 => 
            array (
                'DistrictID' => 510,
                'DistrictName' => '清河区',
                'CityID' => 48,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            10 => 
            array (
                'DistrictID' => 511,
                'DistrictName' => '铁岭县',
                'CityID' => 48,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            11 => 
            array (
                'DistrictID' => 512,
                'DistrictName' => '西丰县',
                'CityID' => 48,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            12 => 
            array (
                'DistrictID' => 513,
                'DistrictName' => '昌图县',
                'CityID' => 48,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            13 => 
            array (
                'DistrictID' => 514,
                'DistrictName' => '调兵山市',
                'CityID' => 48,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            14 => 
            array (
                'DistrictID' => 515,
                'DistrictName' => '开原市',
                'CityID' => 48,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            15 => 
            array (
                'DistrictID' => 516,
                'DistrictName' => '双塔区',
                'CityID' => 49,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            16 => 
            array (
                'DistrictID' => 517,
                'DistrictName' => '龙城区',
                'CityID' => 49,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            17 => 
            array (
                'DistrictID' => 518,
                'DistrictName' => '朝阳县',
                'CityID' => 49,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            18 => 
            array (
                'DistrictID' => 519,
                'DistrictName' => '建平县',
                'CityID' => 49,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            19 => 
            array (
                'DistrictID' => 520,
                'DistrictName' => '喀喇沁左翼蒙古族自治县',
                'CityID' => 49,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            20 => 
            array (
                'DistrictID' => 521,
                'DistrictName' => '北票市',
                'CityID' => 49,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            21 => 
            array (
                'DistrictID' => 522,
                'DistrictName' => '凌源市',
                'CityID' => 49,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            22 => 
            array (
                'DistrictID' => 523,
                'DistrictName' => '连山区',
                'CityID' => 50,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            23 => 
            array (
                'DistrictID' => 524,
                'DistrictName' => '龙港区',
                'CityID' => 50,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            24 => 
            array (
                'DistrictID' => 525,
                'DistrictName' => '南票区',
                'CityID' => 50,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            25 => 
            array (
                'DistrictID' => 526,
                'DistrictName' => '绥中县',
                'CityID' => 50,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            26 => 
            array (
                'DistrictID' => 527,
                'DistrictName' => '建昌县',
                'CityID' => 50,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            27 => 
            array (
                'DistrictID' => 528,
                'DistrictName' => '兴城市',
                'CityID' => 50,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            28 => 
            array (
                'DistrictID' => 529,
                'DistrictName' => '南关区',
                'CityID' => 51,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            29 => 
            array (
                'DistrictID' => 530,
                'DistrictName' => '宽城区',
                'CityID' => 51,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            30 => 
            array (
                'DistrictID' => 531,
                'DistrictName' => '朝阳区',
                'CityID' => 51,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            31 => 
            array (
                'DistrictID' => 532,
                'DistrictName' => '二道区',
                'CityID' => 51,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            32 => 
            array (
                'DistrictID' => 533,
                'DistrictName' => '绿园区',
                'CityID' => 51,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            33 => 
            array (
                'DistrictID' => 534,
                'DistrictName' => '双阳区',
                'CityID' => 51,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            34 => 
            array (
                'DistrictID' => 535,
                'DistrictName' => '农安县',
                'CityID' => 51,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            35 => 
            array (
                'DistrictID' => 536,
                'DistrictName' => '九台市',
                'CityID' => 51,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            36 => 
            array (
                'DistrictID' => 537,
                'DistrictName' => '榆树市',
                'CityID' => 51,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            37 => 
            array (
                'DistrictID' => 538,
                'DistrictName' => '德惠市',
                'CityID' => 51,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            38 => 
            array (
                'DistrictID' => 539,
                'DistrictName' => '昌邑区',
                'CityID' => 52,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            39 => 
            array (
                'DistrictID' => 540,
                'DistrictName' => '龙潭区',
                'CityID' => 52,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            40 => 
            array (
                'DistrictID' => 541,
                'DistrictName' => '船营区',
                'CityID' => 52,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            41 => 
            array (
                'DistrictID' => 542,
                'DistrictName' => '丰满区',
                'CityID' => 52,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            42 => 
            array (
                'DistrictID' => 543,
                'DistrictName' => '永吉县',
                'CityID' => 52,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            43 => 
            array (
                'DistrictID' => 544,
                'DistrictName' => '蛟河市',
                'CityID' => 52,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            44 => 
            array (
                'DistrictID' => 545,
                'DistrictName' => '桦甸市',
                'CityID' => 52,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            45 => 
            array (
                'DistrictID' => 546,
                'DistrictName' => '舒兰市',
                'CityID' => 52,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            46 => 
            array (
                'DistrictID' => 547,
                'DistrictName' => '磐石市',
                'CityID' => 52,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            47 => 
            array (
                'DistrictID' => 548,
                'DistrictName' => '铁西区',
                'CityID' => 53,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            48 => 
            array (
                'DistrictID' => 549,
                'DistrictName' => '铁东区',
                'CityID' => 53,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            49 => 
            array (
                'DistrictID' => 550,
                'DistrictName' => '梨树县',
                'CityID' => 53,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            50 => 
            array (
                'DistrictID' => 551,
                'DistrictName' => '伊通满族自治县',
                'CityID' => 53,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            51 => 
            array (
                'DistrictID' => 552,
                'DistrictName' => '公主岭市',
                'CityID' => 53,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            52 => 
            array (
                'DistrictID' => 553,
                'DistrictName' => '双辽市',
                'CityID' => 53,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            53 => 
            array (
                'DistrictID' => 554,
                'DistrictName' => '龙山区',
                'CityID' => 54,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            54 => 
            array (
                'DistrictID' => 555,
                'DistrictName' => '西安区',
                'CityID' => 54,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            55 => 
            array (
                'DistrictID' => 556,
                'DistrictName' => '东丰县',
                'CityID' => 54,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            56 => 
            array (
                'DistrictID' => 557,
                'DistrictName' => '东辽县',
                'CityID' => 54,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            57 => 
            array (
                'DistrictID' => 558,
                'DistrictName' => '东昌区',
                'CityID' => 55,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            58 => 
            array (
                'DistrictID' => 559,
                'DistrictName' => '二道江区',
                'CityID' => 55,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            59 => 
            array (
                'DistrictID' => 560,
                'DistrictName' => '通化县',
                'CityID' => 55,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            60 => 
            array (
                'DistrictID' => 561,
                'DistrictName' => '辉南县',
                'CityID' => 55,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            61 => 
            array (
                'DistrictID' => 562,
                'DistrictName' => '柳河县',
                'CityID' => 55,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            62 => 
            array (
                'DistrictID' => 563,
                'DistrictName' => '梅河口市',
                'CityID' => 55,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            63 => 
            array (
                'DistrictID' => 564,
                'DistrictName' => '集安市',
                'CityID' => 55,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            64 => 
            array (
                'DistrictID' => 565,
                'DistrictName' => '八道江区',
                'CityID' => 56,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            65 => 
            array (
                'DistrictID' => 566,
                'DistrictName' => '抚松县',
                'CityID' => 56,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            66 => 
            array (
                'DistrictID' => 567,
                'DistrictName' => '靖宇县',
                'CityID' => 56,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            67 => 
            array (
                'DistrictID' => 568,
                'DistrictName' => '长白朝鲜族自治县',
                'CityID' => 56,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            68 => 
            array (
                'DistrictID' => 569,
                'DistrictName' => '江源县',
                'CityID' => 56,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            69 => 
            array (
                'DistrictID' => 570,
                'DistrictName' => '临江市',
                'CityID' => 56,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            70 => 
            array (
                'DistrictID' => 571,
                'DistrictName' => '宁江区',
                'CityID' => 57,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            71 => 
            array (
                'DistrictID' => 572,
                'DistrictName' => '前郭尔罗斯蒙古族自治县',
                'CityID' => 57,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            72 => 
            array (
                'DistrictID' => 573,
                'DistrictName' => '长岭县',
                'CityID' => 57,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            73 => 
            array (
                'DistrictID' => 574,
                'DistrictName' => '乾安县',
                'CityID' => 57,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            74 => 
            array (
                'DistrictID' => 575,
                'DistrictName' => '扶余县',
                'CityID' => 57,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            75 => 
            array (
                'DistrictID' => 576,
                'DistrictName' => '洮北区',
                'CityID' => 58,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            76 => 
            array (
                'DistrictID' => 577,
                'DistrictName' => '镇赉县',
                'CityID' => 58,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            77 => 
            array (
                'DistrictID' => 578,
                'DistrictName' => '通榆县',
                'CityID' => 58,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            78 => 
            array (
                'DistrictID' => 579,
                'DistrictName' => '洮南市',
                'CityID' => 58,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            79 => 
            array (
                'DistrictID' => 580,
                'DistrictName' => '大安市',
                'CityID' => 58,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            80 => 
            array (
                'DistrictID' => 581,
                'DistrictName' => '延吉市',
                'CityID' => 59,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            81 => 
            array (
                'DistrictID' => 582,
                'DistrictName' => '图们市',
                'CityID' => 59,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            82 => 
            array (
                'DistrictID' => 583,
                'DistrictName' => '敦化市',
                'CityID' => 59,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            83 => 
            array (
                'DistrictID' => 584,
                'DistrictName' => '珲春市',
                'CityID' => 59,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            84 => 
            array (
                'DistrictID' => 585,
                'DistrictName' => '龙井市',
                'CityID' => 59,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            85 => 
            array (
                'DistrictID' => 586,
                'DistrictName' => '和龙市',
                'CityID' => 59,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            86 => 
            array (
                'DistrictID' => 587,
                'DistrictName' => '汪清县',
                'CityID' => 59,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            87 => 
            array (
                'DistrictID' => 588,
                'DistrictName' => '安图县',
                'CityID' => 59,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            88 => 
            array (
                'DistrictID' => 589,
                'DistrictName' => '道里区',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            89 => 
            array (
                'DistrictID' => 590,
                'DistrictName' => '南岗区',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            90 => 
            array (
                'DistrictID' => 591,
                'DistrictName' => '道外区',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            91 => 
            array (
                'DistrictID' => 592,
                'DistrictName' => '香坊区',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            92 => 
            array (
                'DistrictID' => 593,
                'DistrictName' => '动力区',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            93 => 
            array (
                'DistrictID' => 594,
                'DistrictName' => '平房区',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            94 => 
            array (
                'DistrictID' => 595,
                'DistrictName' => '松北区',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            95 => 
            array (
                'DistrictID' => 596,
                'DistrictName' => '呼兰区',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            96 => 
            array (
                'DistrictID' => 597,
                'DistrictName' => '依兰县',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            97 => 
            array (
                'DistrictID' => 598,
                'DistrictName' => '方正县',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            98 => 
            array (
                'DistrictID' => 599,
                'DistrictName' => '宾县',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            99 => 
            array (
                'DistrictID' => 600,
                'DistrictName' => '巴彦县',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            100 => 
            array (
                'DistrictID' => 601,
                'DistrictName' => '木兰县',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            101 => 
            array (
                'DistrictID' => 602,
                'DistrictName' => '通河县',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            102 => 
            array (
                'DistrictID' => 603,
                'DistrictName' => '延寿县',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            103 => 
            array (
                'DistrictID' => 604,
                'DistrictName' => '阿城市',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            104 => 
            array (
                'DistrictID' => 605,
                'DistrictName' => '双城市',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            105 => 
            array (
                'DistrictID' => 606,
                'DistrictName' => '尚志市',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            106 => 
            array (
                'DistrictID' => 607,
                'DistrictName' => '五常市',
                'CityID' => 60,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            107 => 
            array (
                'DistrictID' => 608,
                'DistrictName' => '龙沙区',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            108 => 
            array (
                'DistrictID' => 609,
                'DistrictName' => '建华区',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            109 => 
            array (
                'DistrictID' => 610,
                'DistrictName' => '铁锋区',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            110 => 
            array (
                'DistrictID' => 611,
                'DistrictName' => '昂昂溪区',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            111 => 
            array (
                'DistrictID' => 612,
                'DistrictName' => '富拉尔基区',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            112 => 
            array (
                'DistrictID' => 613,
                'DistrictName' => '碾子山区',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            113 => 
            array (
                'DistrictID' => 614,
                'DistrictName' => '梅里斯达斡尔族区',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            114 => 
            array (
                'DistrictID' => 615,
                'DistrictName' => '龙江县',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            115 => 
            array (
                'DistrictID' => 616,
                'DistrictName' => '依安县',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            116 => 
            array (
                'DistrictID' => 617,
                'DistrictName' => '泰来县',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            117 => 
            array (
                'DistrictID' => 618,
                'DistrictName' => '甘南县',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            118 => 
            array (
                'DistrictID' => 619,
                'DistrictName' => '富裕县',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            119 => 
            array (
                'DistrictID' => 620,
                'DistrictName' => '克山县',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            120 => 
            array (
                'DistrictID' => 621,
                'DistrictName' => '克东县',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            121 => 
            array (
                'DistrictID' => 622,
                'DistrictName' => '拜泉县',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            122 => 
            array (
                'DistrictID' => 623,
                'DistrictName' => '讷河市',
                'CityID' => 61,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            123 => 
            array (
                'DistrictID' => 624,
                'DistrictName' => '鸡冠区',
                'CityID' => 62,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            124 => 
            array (
                'DistrictID' => 625,
                'DistrictName' => '恒山区',
                'CityID' => 62,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            125 => 
            array (
                'DistrictID' => 626,
                'DistrictName' => '滴道区',
                'CityID' => 62,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            126 => 
            array (
                'DistrictID' => 627,
                'DistrictName' => '梨树区',
                'CityID' => 62,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            127 => 
            array (
                'DistrictID' => 628,
                'DistrictName' => '城子河区',
                'CityID' => 62,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            128 => 
            array (
                'DistrictID' => 629,
                'DistrictName' => '麻山区',
                'CityID' => 62,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            129 => 
            array (
                'DistrictID' => 630,
                'DistrictName' => '鸡东县',
                'CityID' => 62,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            130 => 
            array (
                'DistrictID' => 631,
                'DistrictName' => '虎林市',
                'CityID' => 62,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            131 => 
            array (
                'DistrictID' => 632,
                'DistrictName' => '密山市',
                'CityID' => 62,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            132 => 
            array (
                'DistrictID' => 633,
                'DistrictName' => '向阳区',
                'CityID' => 63,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            133 => 
            array (
                'DistrictID' => 634,
                'DistrictName' => '工农区',
                'CityID' => 63,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            134 => 
            array (
                'DistrictID' => 635,
                'DistrictName' => '南山区',
                'CityID' => 63,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            135 => 
            array (
                'DistrictID' => 636,
                'DistrictName' => '兴安区',
                'CityID' => 63,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            136 => 
            array (
                'DistrictID' => 637,
                'DistrictName' => '东山区',
                'CityID' => 63,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            137 => 
            array (
                'DistrictID' => 638,
                'DistrictName' => '兴山区',
                'CityID' => 63,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            138 => 
            array (
                'DistrictID' => 639,
                'DistrictName' => '萝北县',
                'CityID' => 63,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            139 => 
            array (
                'DistrictID' => 640,
                'DistrictName' => '绥滨县',
                'CityID' => 63,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            140 => 
            array (
                'DistrictID' => 641,
                'DistrictName' => '尖山区',
                'CityID' => 64,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            141 => 
            array (
                'DistrictID' => 642,
                'DistrictName' => '岭东区',
                'CityID' => 64,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            142 => 
            array (
                'DistrictID' => 643,
                'DistrictName' => '四方台区',
                'CityID' => 64,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            143 => 
            array (
                'DistrictID' => 644,
                'DistrictName' => '宝山区',
                'CityID' => 64,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            144 => 
            array (
                'DistrictID' => 645,
                'DistrictName' => '集贤县',
                'CityID' => 64,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            145 => 
            array (
                'DistrictID' => 646,
                'DistrictName' => '友谊县',
                'CityID' => 64,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            146 => 
            array (
                'DistrictID' => 647,
                'DistrictName' => '宝清县',
                'CityID' => 64,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            147 => 
            array (
                'DistrictID' => 648,
                'DistrictName' => '饶河县',
                'CityID' => 64,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            148 => 
            array (
                'DistrictID' => 649,
                'DistrictName' => '萨尔图区',
                'CityID' => 65,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            149 => 
            array (
                'DistrictID' => 650,
                'DistrictName' => '龙凤区',
                'CityID' => 65,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            150 => 
            array (
                'DistrictID' => 651,
                'DistrictName' => '让胡路区',
                'CityID' => 65,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            151 => 
            array (
                'DistrictID' => 652,
                'DistrictName' => '红岗区',
                'CityID' => 65,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            152 => 
            array (
                'DistrictID' => 653,
                'DistrictName' => '大同区',
                'CityID' => 65,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            153 => 
            array (
                'DistrictID' => 654,
                'DistrictName' => '肇州县',
                'CityID' => 65,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            154 => 
            array (
                'DistrictID' => 655,
                'DistrictName' => '肇源县',
                'CityID' => 65,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            155 => 
            array (
                'DistrictID' => 656,
                'DistrictName' => '林甸县',
                'CityID' => 65,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            156 => 
            array (
                'DistrictID' => 657,
                'DistrictName' => '杜尔伯特蒙古族自治县',
                'CityID' => 65,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            157 => 
            array (
                'DistrictID' => 658,
                'DistrictName' => '伊春区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            158 => 
            array (
                'DistrictID' => 659,
                'DistrictName' => '南岔区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            159 => 
            array (
                'DistrictID' => 660,
                'DistrictName' => '友好区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            160 => 
            array (
                'DistrictID' => 661,
                'DistrictName' => '西林区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            161 => 
            array (
                'DistrictID' => 662,
                'DistrictName' => '翠峦区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            162 => 
            array (
                'DistrictID' => 663,
                'DistrictName' => '新青区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            163 => 
            array (
                'DistrictID' => 664,
                'DistrictName' => '美溪区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            164 => 
            array (
                'DistrictID' => 665,
                'DistrictName' => '金山屯区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            165 => 
            array (
                'DistrictID' => 666,
                'DistrictName' => '五营区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            166 => 
            array (
                'DistrictID' => 667,
                'DistrictName' => '乌马河区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            167 => 
            array (
                'DistrictID' => 668,
                'DistrictName' => '汤旺河区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            168 => 
            array (
                'DistrictID' => 669,
                'DistrictName' => '带岭区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            169 => 
            array (
                'DistrictID' => 670,
                'DistrictName' => '乌伊岭区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            170 => 
            array (
                'DistrictID' => 671,
                'DistrictName' => '红星区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            171 => 
            array (
                'DistrictID' => 672,
                'DistrictName' => '上甘岭区',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            172 => 
            array (
                'DistrictID' => 673,
                'DistrictName' => '嘉荫县',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            173 => 
            array (
                'DistrictID' => 674,
                'DistrictName' => '铁力市',
                'CityID' => 66,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            174 => 
            array (
                'DistrictID' => 675,
                'DistrictName' => '永红区',
                'CityID' => 67,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            175 => 
            array (
                'DistrictID' => 676,
                'DistrictName' => '向阳区',
                'CityID' => 67,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            176 => 
            array (
                'DistrictID' => 677,
                'DistrictName' => '前进区',
                'CityID' => 67,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            177 => 
            array (
                'DistrictID' => 678,
                'DistrictName' => '东风区',
                'CityID' => 67,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            178 => 
            array (
                'DistrictID' => 679,
                'DistrictName' => '郊区',
                'CityID' => 67,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            179 => 
            array (
                'DistrictID' => 680,
                'DistrictName' => '桦南县',
                'CityID' => 67,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            180 => 
            array (
                'DistrictID' => 681,
                'DistrictName' => '桦川县',
                'CityID' => 67,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            181 => 
            array (
                'DistrictID' => 682,
                'DistrictName' => '汤原县',
                'CityID' => 67,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            182 => 
            array (
                'DistrictID' => 683,
                'DistrictName' => '抚远县',
                'CityID' => 67,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            183 => 
            array (
                'DistrictID' => 684,
                'DistrictName' => '同江市',
                'CityID' => 67,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            184 => 
            array (
                'DistrictID' => 685,
                'DistrictName' => '富锦市',
                'CityID' => 67,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            185 => 
            array (
                'DistrictID' => 686,
                'DistrictName' => '新兴区',
                'CityID' => 68,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            186 => 
            array (
                'DistrictID' => 687,
                'DistrictName' => '桃山区',
                'CityID' => 68,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            187 => 
            array (
                'DistrictID' => 688,
                'DistrictName' => '茄子河区',
                'CityID' => 68,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            188 => 
            array (
                'DistrictID' => 689,
                'DistrictName' => '勃利县',
                'CityID' => 68,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            189 => 
            array (
                'DistrictID' => 690,
                'DistrictName' => '东安区',
                'CityID' => 69,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            190 => 
            array (
                'DistrictID' => 691,
                'DistrictName' => '阳明区',
                'CityID' => 69,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            191 => 
            array (
                'DistrictID' => 692,
                'DistrictName' => '爱民区',
                'CityID' => 69,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            192 => 
            array (
                'DistrictID' => 693,
                'DistrictName' => '西安区',
                'CityID' => 69,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            193 => 
            array (
                'DistrictID' => 694,
                'DistrictName' => '东宁县',
                'CityID' => 69,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            194 => 
            array (
                'DistrictID' => 695,
                'DistrictName' => '林口县',
                'CityID' => 69,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            195 => 
            array (
                'DistrictID' => 696,
                'DistrictName' => '绥芬河市',
                'CityID' => 69,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            196 => 
            array (
                'DistrictID' => 697,
                'DistrictName' => '海林市',
                'CityID' => 69,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            197 => 
            array (
                'DistrictID' => 698,
                'DistrictName' => '宁安市',
                'CityID' => 69,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            198 => 
            array (
                'DistrictID' => 699,
                'DistrictName' => '穆棱市',
                'CityID' => 69,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            199 => 
            array (
                'DistrictID' => 700,
                'DistrictName' => '爱辉区',
                'CityID' => 70,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            200 => 
            array (
                'DistrictID' => 701,
                'DistrictName' => '嫩江县',
                'CityID' => 70,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            201 => 
            array (
                'DistrictID' => 702,
                'DistrictName' => '逊克县',
                'CityID' => 70,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            202 => 
            array (
                'DistrictID' => 703,
                'DistrictName' => '孙吴县',
                'CityID' => 70,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            203 => 
            array (
                'DistrictID' => 704,
                'DistrictName' => '北安市',
                'CityID' => 70,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            204 => 
            array (
                'DistrictID' => 705,
                'DistrictName' => '五大连池市',
                'CityID' => 70,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            205 => 
            array (
                'DistrictID' => 706,
                'DistrictName' => '北林区',
                'CityID' => 71,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            206 => 
            array (
                'DistrictID' => 707,
                'DistrictName' => '望奎县',
                'CityID' => 71,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            207 => 
            array (
                'DistrictID' => 708,
                'DistrictName' => '兰西县',
                'CityID' => 71,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            208 => 
            array (
                'DistrictID' => 709,
                'DistrictName' => '青冈县',
                'CityID' => 71,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            209 => 
            array (
                'DistrictID' => 710,
                'DistrictName' => '庆安县',
                'CityID' => 71,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            210 => 
            array (
                'DistrictID' => 711,
                'DistrictName' => '明水县',
                'CityID' => 71,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            211 => 
            array (
                'DistrictID' => 712,
                'DistrictName' => '绥棱县',
                'CityID' => 71,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            212 => 
            array (
                'DistrictID' => 713,
                'DistrictName' => '安达市',
                'CityID' => 71,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            213 => 
            array (
                'DistrictID' => 714,
                'DistrictName' => '肇东市',
                'CityID' => 71,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            214 => 
            array (
                'DistrictID' => 715,
                'DistrictName' => '海伦市',
                'CityID' => 71,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            215 => 
            array (
                'DistrictID' => 716,
                'DistrictName' => '呼玛县',
                'CityID' => 72,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            216 => 
            array (
                'DistrictID' => 717,
                'DistrictName' => '塔河县',
                'CityID' => 72,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            217 => 
            array (
                'DistrictID' => 718,
                'DistrictName' => '漠河县',
                'CityID' => 72,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            218 => 
            array (
                'DistrictID' => 719,
                'DistrictName' => '黄浦区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            219 => 
            array (
                'DistrictID' => 720,
                'DistrictName' => '卢湾区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            220 => 
            array (
                'DistrictID' => 721,
                'DistrictName' => '徐汇区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            221 => 
            array (
                'DistrictID' => 722,
                'DistrictName' => '长宁区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            222 => 
            array (
                'DistrictID' => 723,
                'DistrictName' => '静安区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            223 => 
            array (
                'DistrictID' => 724,
                'DistrictName' => '普陀区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            224 => 
            array (
                'DistrictID' => 725,
                'DistrictName' => '闸北区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            225 => 
            array (
                'DistrictID' => 726,
                'DistrictName' => '虹口区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            226 => 
            array (
                'DistrictID' => 727,
                'DistrictName' => '杨浦区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            227 => 
            array (
                'DistrictID' => 728,
                'DistrictName' => '闵行区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            228 => 
            array (
                'DistrictID' => 729,
                'DistrictName' => '宝山区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            229 => 
            array (
                'DistrictID' => 730,
                'DistrictName' => '嘉定区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            230 => 
            array (
                'DistrictID' => 731,
                'DistrictName' => '浦东新区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            231 => 
            array (
                'DistrictID' => 732,
                'DistrictName' => '金山区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            232 => 
            array (
                'DistrictID' => 733,
                'DistrictName' => '松江区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            233 => 
            array (
                'DistrictID' => 734,
                'DistrictName' => '青浦区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            234 => 
            array (
                'DistrictID' => 735,
                'DistrictName' => '南汇区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            235 => 
            array (
                'DistrictID' => 736,
                'DistrictName' => '奉贤区',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            236 => 
            array (
                'DistrictID' => 737,
                'DistrictName' => '崇明县',
                'CityID' => 73,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            237 => 
            array (
                'DistrictID' => 738,
                'DistrictName' => '玄武区',
                'CityID' => 74,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            238 => 
            array (
                'DistrictID' => 739,
                'DistrictName' => '白下区',
                'CityID' => 74,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            239 => 
            array (
                'DistrictID' => 740,
                'DistrictName' => '秦淮区',
                'CityID' => 74,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            240 => 
            array (
                'DistrictID' => 741,
                'DistrictName' => '建邺区',
                'CityID' => 74,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            241 => 
            array (
                'DistrictID' => 742,
                'DistrictName' => '鼓楼区',
                'CityID' => 74,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            242 => 
            array (
                'DistrictID' => 743,
                'DistrictName' => '下关区',
                'CityID' => 74,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            243 => 
            array (
                'DistrictID' => 744,
                'DistrictName' => '浦口区',
                'CityID' => 74,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            244 => 
            array (
                'DistrictID' => 745,
                'DistrictName' => '栖霞区',
                'CityID' => 74,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            245 => 
            array (
                'DistrictID' => 746,
                'DistrictName' => '雨花台区',
                'CityID' => 74,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            246 => 
            array (
                'DistrictID' => 747,
                'DistrictName' => '江宁区',
                'CityID' => 74,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            247 => 
            array (
                'DistrictID' => 748,
                'DistrictName' => '六合区',
                'CityID' => 74,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            248 => 
            array (
                'DistrictID' => 749,
                'DistrictName' => '溧水县',
                'CityID' => 74,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            249 => 
            array (
                'DistrictID' => 750,
                'DistrictName' => '高淳县',
                'CityID' => 74,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            250 => 
            array (
                'DistrictID' => 751,
                'DistrictName' => '崇安区',
                'CityID' => 75,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            251 => 
            array (
                'DistrictID' => 752,
                'DistrictName' => '南长区',
                'CityID' => 75,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            252 => 
            array (
                'DistrictID' => 753,
                'DistrictName' => '北塘区',
                'CityID' => 75,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            253 => 
            array (
                'DistrictID' => 754,
                'DistrictName' => '锡山区',
                'CityID' => 75,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            254 => 
            array (
                'DistrictID' => 755,
                'DistrictName' => '惠山区',
                'CityID' => 75,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            255 => 
            array (
                'DistrictID' => 756,
                'DistrictName' => '滨湖区',
                'CityID' => 75,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            256 => 
            array (
                'DistrictID' => 757,
                'DistrictName' => '江阴市',
                'CityID' => 75,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            257 => 
            array (
                'DistrictID' => 758,
                'DistrictName' => '宜兴市',
                'CityID' => 75,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            258 => 
            array (
                'DistrictID' => 759,
                'DistrictName' => '鼓楼区',
                'CityID' => 76,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            259 => 
            array (
                'DistrictID' => 760,
                'DistrictName' => '云龙区',
                'CityID' => 76,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            260 => 
            array (
                'DistrictID' => 761,
                'DistrictName' => '九里区',
                'CityID' => 76,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            261 => 
            array (
                'DistrictID' => 762,
                'DistrictName' => '贾汪区',
                'CityID' => 76,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            262 => 
            array (
                'DistrictID' => 763,
                'DistrictName' => '泉山区',
                'CityID' => 76,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            263 => 
            array (
                'DistrictID' => 764,
                'DistrictName' => '丰县',
                'CityID' => 76,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            264 => 
            array (
                'DistrictID' => 765,
                'DistrictName' => '沛县',
                'CityID' => 76,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            265 => 
            array (
                'DistrictID' => 766,
                'DistrictName' => '铜山县',
                'CityID' => 76,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            266 => 
            array (
                'DistrictID' => 767,
                'DistrictName' => '睢宁县',
                'CityID' => 76,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            267 => 
            array (
                'DistrictID' => 768,
                'DistrictName' => '新沂市',
                'CityID' => 76,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            268 => 
            array (
                'DistrictID' => 769,
                'DistrictName' => '邳州市',
                'CityID' => 76,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            269 => 
            array (
                'DistrictID' => 770,
                'DistrictName' => '天宁区',
                'CityID' => 77,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            270 => 
            array (
                'DistrictID' => 771,
                'DistrictName' => '钟楼区',
                'CityID' => 77,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            271 => 
            array (
                'DistrictID' => 772,
                'DistrictName' => '戚墅堰区',
                'CityID' => 77,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            272 => 
            array (
                'DistrictID' => 773,
                'DistrictName' => '新北区',
                'CityID' => 77,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            273 => 
            array (
                'DistrictID' => 774,
                'DistrictName' => '武进区',
                'CityID' => 77,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            274 => 
            array (
                'DistrictID' => 775,
                'DistrictName' => '溧阳市',
                'CityID' => 77,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            275 => 
            array (
                'DistrictID' => 776,
                'DistrictName' => '金坛市',
                'CityID' => 77,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            276 => 
            array (
                'DistrictID' => 777,
                'DistrictName' => '沧浪区',
                'CityID' => 78,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            277 => 
            array (
                'DistrictID' => 778,
                'DistrictName' => '平江区',
                'CityID' => 78,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            278 => 
            array (
                'DistrictID' => 779,
                'DistrictName' => '金阊区',
                'CityID' => 78,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            279 => 
            array (
                'DistrictID' => 780,
                'DistrictName' => '虎丘区',
                'CityID' => 78,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            280 => 
            array (
                'DistrictID' => 781,
                'DistrictName' => '吴中区',
                'CityID' => 78,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            281 => 
            array (
                'DistrictID' => 782,
                'DistrictName' => '相城区',
                'CityID' => 78,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            282 => 
            array (
                'DistrictID' => 783,
                'DistrictName' => '常熟市',
                'CityID' => 78,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            283 => 
            array (
                'DistrictID' => 784,
                'DistrictName' => '张家港市',
                'CityID' => 78,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            284 => 
            array (
                'DistrictID' => 785,
                'DistrictName' => '昆山市',
                'CityID' => 78,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            285 => 
            array (
                'DistrictID' => 786,
                'DistrictName' => '吴江市',
                'CityID' => 78,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            286 => 
            array (
                'DistrictID' => 787,
                'DistrictName' => '太仓市',
                'CityID' => 78,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            287 => 
            array (
                'DistrictID' => 788,
                'DistrictName' => '崇川区',
                'CityID' => 79,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            288 => 
            array (
                'DistrictID' => 789,
                'DistrictName' => '港闸区',
                'CityID' => 79,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            289 => 
            array (
                'DistrictID' => 790,
                'DistrictName' => '海安县',
                'CityID' => 79,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            290 => 
            array (
                'DistrictID' => 791,
                'DistrictName' => '如东县',
                'CityID' => 79,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            291 => 
            array (
                'DistrictID' => 792,
                'DistrictName' => '启东市',
                'CityID' => 79,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            292 => 
            array (
                'DistrictID' => 793,
                'DistrictName' => '如皋市',
                'CityID' => 79,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            293 => 
            array (
                'DistrictID' => 794,
                'DistrictName' => '通州市',
                'CityID' => 79,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            294 => 
            array (
                'DistrictID' => 795,
                'DistrictName' => '海门市',
                'CityID' => 79,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            295 => 
            array (
                'DistrictID' => 796,
                'DistrictName' => '连云区',
                'CityID' => 80,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            296 => 
            array (
                'DistrictID' => 797,
                'DistrictName' => '新浦区',
                'CityID' => 80,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            297 => 
            array (
                'DistrictID' => 798,
                'DistrictName' => '海州区',
                'CityID' => 80,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            298 => 
            array (
                'DistrictID' => 799,
                'DistrictName' => '赣榆县',
                'CityID' => 80,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            299 => 
            array (
                'DistrictID' => 800,
                'DistrictName' => '东海县',
                'CityID' => 80,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            300 => 
            array (
                'DistrictID' => 801,
                'DistrictName' => '灌云县',
                'CityID' => 80,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            301 => 
            array (
                'DistrictID' => 802,
                'DistrictName' => '灌南县',
                'CityID' => 80,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            302 => 
            array (
                'DistrictID' => 803,
                'DistrictName' => '清河区',
                'CityID' => 81,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            303 => 
            array (
                'DistrictID' => 804,
                'DistrictName' => '楚州区',
                'CityID' => 81,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            304 => 
            array (
                'DistrictID' => 805,
                'DistrictName' => '淮阴区',
                'CityID' => 81,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            305 => 
            array (
                'DistrictID' => 806,
                'DistrictName' => '清浦区',
                'CityID' => 81,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            306 => 
            array (
                'DistrictID' => 807,
                'DistrictName' => '涟水县',
                'CityID' => 81,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            307 => 
            array (
                'DistrictID' => 808,
                'DistrictName' => '洪泽县',
                'CityID' => 81,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            308 => 
            array (
                'DistrictID' => 809,
                'DistrictName' => '盱眙县',
                'CityID' => 81,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            309 => 
            array (
                'DistrictID' => 810,
                'DistrictName' => '金湖县',
                'CityID' => 81,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            310 => 
            array (
                'DistrictID' => 811,
                'DistrictName' => '亭湖区',
                'CityID' => 82,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            311 => 
            array (
                'DistrictID' => 812,
                'DistrictName' => '盐都区',
                'CityID' => 82,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            312 => 
            array (
                'DistrictID' => 813,
                'DistrictName' => '响水县',
                'CityID' => 82,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            313 => 
            array (
                'DistrictID' => 814,
                'DistrictName' => '滨海县',
                'CityID' => 82,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            314 => 
            array (
                'DistrictID' => 815,
                'DistrictName' => '阜宁县',
                'CityID' => 82,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            315 => 
            array (
                'DistrictID' => 816,
                'DistrictName' => '射阳县',
                'CityID' => 82,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            316 => 
            array (
                'DistrictID' => 817,
                'DistrictName' => '建湖县',
                'CityID' => 82,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            317 => 
            array (
                'DistrictID' => 818,
                'DistrictName' => '东台市',
                'CityID' => 82,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            318 => 
            array (
                'DistrictID' => 819,
                'DistrictName' => '大丰市',
                'CityID' => 82,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            319 => 
            array (
                'DistrictID' => 820,
                'DistrictName' => '广陵区',
                'CityID' => 83,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            320 => 
            array (
                'DistrictID' => 821,
                'DistrictName' => '邗江区',
                'CityID' => 83,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            321 => 
            array (
                'DistrictID' => 822,
                'DistrictName' => '维扬区',
                'CityID' => 83,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            322 => 
            array (
                'DistrictID' => 823,
                'DistrictName' => '宝应县',
                'CityID' => 83,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            323 => 
            array (
                'DistrictID' => 824,
                'DistrictName' => '仪征市',
                'CityID' => 83,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            324 => 
            array (
                'DistrictID' => 825,
                'DistrictName' => '高邮市',
                'CityID' => 83,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            325 => 
            array (
                'DistrictID' => 826,
                'DistrictName' => '江都市',
                'CityID' => 83,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            326 => 
            array (
                'DistrictID' => 827,
                'DistrictName' => '京口区',
                'CityID' => 84,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            327 => 
            array (
                'DistrictID' => 828,
                'DistrictName' => '润州区',
                'CityID' => 84,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            328 => 
            array (
                'DistrictID' => 829,
                'DistrictName' => '丹徒区',
                'CityID' => 84,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            329 => 
            array (
                'DistrictID' => 830,
                'DistrictName' => '丹阳市',
                'CityID' => 84,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            330 => 
            array (
                'DistrictID' => 831,
                'DistrictName' => '扬中市',
                'CityID' => 84,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            331 => 
            array (
                'DistrictID' => 832,
                'DistrictName' => '句容市',
                'CityID' => 84,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            332 => 
            array (
                'DistrictID' => 833,
                'DistrictName' => '海陵区',
                'CityID' => 85,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            333 => 
            array (
                'DistrictID' => 834,
                'DistrictName' => '高港区',
                'CityID' => 85,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            334 => 
            array (
                'DistrictID' => 835,
                'DistrictName' => '兴化市',
                'CityID' => 85,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            335 => 
            array (
                'DistrictID' => 836,
                'DistrictName' => '靖江市',
                'CityID' => 85,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            336 => 
            array (
                'DistrictID' => 837,
                'DistrictName' => '泰兴市',
                'CityID' => 85,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            337 => 
            array (
                'DistrictID' => 838,
                'DistrictName' => '姜堰市',
                'CityID' => 85,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            338 => 
            array (
                'DistrictID' => 839,
                'DistrictName' => '宿城区',
                'CityID' => 86,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            339 => 
            array (
                'DistrictID' => 840,
                'DistrictName' => '宿豫区',
                'CityID' => 86,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            340 => 
            array (
                'DistrictID' => 841,
                'DistrictName' => '沭阳县',
                'CityID' => 86,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            341 => 
            array (
                'DistrictID' => 842,
                'DistrictName' => '泗阳县',
                'CityID' => 86,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            342 => 
            array (
                'DistrictID' => 843,
                'DistrictName' => '泗洪县',
                'CityID' => 86,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            343 => 
            array (
                'DistrictID' => 844,
                'DistrictName' => '上城区',
                'CityID' => 87,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            344 => 
            array (
                'DistrictID' => 845,
                'DistrictName' => '下城区',
                'CityID' => 87,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            345 => 
            array (
                'DistrictID' => 846,
                'DistrictName' => '江干区',
                'CityID' => 87,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            346 => 
            array (
                'DistrictID' => 847,
                'DistrictName' => '拱墅区',
                'CityID' => 87,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            347 => 
            array (
                'DistrictID' => 848,
                'DistrictName' => '西湖区',
                'CityID' => 87,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            348 => 
            array (
                'DistrictID' => 849,
                'DistrictName' => '滨江区',
                'CityID' => 87,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            349 => 
            array (
                'DistrictID' => 850,
                'DistrictName' => '萧山区',
                'CityID' => 87,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            350 => 
            array (
                'DistrictID' => 851,
                'DistrictName' => '余杭区',
                'CityID' => 87,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            351 => 
            array (
                'DistrictID' => 852,
                'DistrictName' => '桐庐县',
                'CityID' => 87,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            352 => 
            array (
                'DistrictID' => 853,
                'DistrictName' => '淳安县',
                'CityID' => 87,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            353 => 
            array (
                'DistrictID' => 854,
                'DistrictName' => '建德市',
                'CityID' => 87,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            354 => 
            array (
                'DistrictID' => 855,
                'DistrictName' => '富阳市',
                'CityID' => 87,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            355 => 
            array (
                'DistrictID' => 856,
                'DistrictName' => '临安市',
                'CityID' => 87,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            356 => 
            array (
                'DistrictID' => 857,
                'DistrictName' => '海曙区',
                'CityID' => 88,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            357 => 
            array (
                'DistrictID' => 858,
                'DistrictName' => '江东区',
                'CityID' => 88,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            358 => 
            array (
                'DistrictID' => 859,
                'DistrictName' => '江北区',
                'CityID' => 88,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            359 => 
            array (
                'DistrictID' => 860,
                'DistrictName' => '北仑区',
                'CityID' => 88,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            360 => 
            array (
                'DistrictID' => 861,
                'DistrictName' => '镇海区',
                'CityID' => 88,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            361 => 
            array (
                'DistrictID' => 862,
                'DistrictName' => '鄞州区',
                'CityID' => 88,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            362 => 
            array (
                'DistrictID' => 863,
                'DistrictName' => '象山县',
                'CityID' => 88,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            363 => 
            array (
                'DistrictID' => 864,
                'DistrictName' => '宁海县',
                'CityID' => 88,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            364 => 
            array (
                'DistrictID' => 865,
                'DistrictName' => '余姚市',
                'CityID' => 88,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            365 => 
            array (
                'DistrictID' => 866,
                'DistrictName' => '慈溪市',
                'CityID' => 88,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            366 => 
            array (
                'DistrictID' => 867,
                'DistrictName' => '奉化市',
                'CityID' => 88,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            367 => 
            array (
                'DistrictID' => 868,
                'DistrictName' => '鹿城区',
                'CityID' => 89,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            368 => 
            array (
                'DistrictID' => 869,
                'DistrictName' => '龙湾区',
                'CityID' => 89,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            369 => 
            array (
                'DistrictID' => 870,
                'DistrictName' => '瓯海区',
                'CityID' => 89,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            370 => 
            array (
                'DistrictID' => 871,
                'DistrictName' => '洞头县',
                'CityID' => 89,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            371 => 
            array (
                'DistrictID' => 872,
                'DistrictName' => '永嘉县',
                'CityID' => 89,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            372 => 
            array (
                'DistrictID' => 873,
                'DistrictName' => '平阳县',
                'CityID' => 89,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            373 => 
            array (
                'DistrictID' => 874,
                'DistrictName' => '苍南县',
                'CityID' => 89,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            374 => 
            array (
                'DistrictID' => 875,
                'DistrictName' => '文成县',
                'CityID' => 89,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            375 => 
            array (
                'DistrictID' => 876,
                'DistrictName' => '泰顺县',
                'CityID' => 89,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            376 => 
            array (
                'DistrictID' => 877,
                'DistrictName' => '瑞安市',
                'CityID' => 89,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            377 => 
            array (
                'DistrictID' => 878,
                'DistrictName' => '乐清市',
                'CityID' => 89,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            378 => 
            array (
                'DistrictID' => 879,
                'DistrictName' => '秀城区',
                'CityID' => 90,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            379 => 
            array (
                'DistrictID' => 880,
                'DistrictName' => '秀洲区',
                'CityID' => 90,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            380 => 
            array (
                'DistrictID' => 881,
                'DistrictName' => '嘉善县',
                'CityID' => 90,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            381 => 
            array (
                'DistrictID' => 882,
                'DistrictName' => '海盐县',
                'CityID' => 90,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            382 => 
            array (
                'DistrictID' => 883,
                'DistrictName' => '海宁市',
                'CityID' => 90,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            383 => 
            array (
                'DistrictID' => 884,
                'DistrictName' => '平湖市',
                'CityID' => 90,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            384 => 
            array (
                'DistrictID' => 885,
                'DistrictName' => '桐乡市',
                'CityID' => 90,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            385 => 
            array (
                'DistrictID' => 886,
                'DistrictName' => '吴兴区',
                'CityID' => 91,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            386 => 
            array (
                'DistrictID' => 887,
                'DistrictName' => '南浔区',
                'CityID' => 91,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            387 => 
            array (
                'DistrictID' => 888,
                'DistrictName' => '德清县',
                'CityID' => 91,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            388 => 
            array (
                'DistrictID' => 889,
                'DistrictName' => '长兴县',
                'CityID' => 91,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            389 => 
            array (
                'DistrictID' => 890,
                'DistrictName' => '安吉县',
                'CityID' => 91,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            390 => 
            array (
                'DistrictID' => 891,
                'DistrictName' => '越城区',
                'CityID' => 92,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            391 => 
            array (
                'DistrictID' => 892,
                'DistrictName' => '绍兴县',
                'CityID' => 92,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            392 => 
            array (
                'DistrictID' => 893,
                'DistrictName' => '新昌县',
                'CityID' => 92,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            393 => 
            array (
                'DistrictID' => 894,
                'DistrictName' => '诸暨市',
                'CityID' => 92,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            394 => 
            array (
                'DistrictID' => 895,
                'DistrictName' => '上虞市',
                'CityID' => 92,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            395 => 
            array (
                'DistrictID' => 896,
                'DistrictName' => '嵊州市',
                'CityID' => 92,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            396 => 
            array (
                'DistrictID' => 897,
                'DistrictName' => '婺城区',
                'CityID' => 93,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            397 => 
            array (
                'DistrictID' => 898,
                'DistrictName' => '金东区',
                'CityID' => 93,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            398 => 
            array (
                'DistrictID' => 899,
                'DistrictName' => '武义县',
                'CityID' => 93,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            399 => 
            array (
                'DistrictID' => 900,
                'DistrictName' => '浦江县',
                'CityID' => 93,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            400 => 
            array (
                'DistrictID' => 901,
                'DistrictName' => '磐安县',
                'CityID' => 93,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            401 => 
            array (
                'DistrictID' => 902,
                'DistrictName' => '兰溪市',
                'CityID' => 93,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            402 => 
            array (
                'DistrictID' => 903,
                'DistrictName' => '义乌市',
                'CityID' => 93,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            403 => 
            array (
                'DistrictID' => 904,
                'DistrictName' => '东阳市',
                'CityID' => 93,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            404 => 
            array (
                'DistrictID' => 905,
                'DistrictName' => '永康市',
                'CityID' => 93,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            405 => 
            array (
                'DistrictID' => 906,
                'DistrictName' => '柯城区',
                'CityID' => 94,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            406 => 
            array (
                'DistrictID' => 907,
                'DistrictName' => '衢江区',
                'CityID' => 94,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            407 => 
            array (
                'DistrictID' => 908,
                'DistrictName' => '常山县',
                'CityID' => 94,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            408 => 
            array (
                'DistrictID' => 909,
                'DistrictName' => '开化县',
                'CityID' => 94,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            409 => 
            array (
                'DistrictID' => 910,
                'DistrictName' => '龙游县',
                'CityID' => 94,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            410 => 
            array (
                'DistrictID' => 911,
                'DistrictName' => '江山市',
                'CityID' => 94,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            411 => 
            array (
                'DistrictID' => 912,
                'DistrictName' => '定海区',
                'CityID' => 95,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            412 => 
            array (
                'DistrictID' => 913,
                'DistrictName' => '普陀区',
                'CityID' => 95,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            413 => 
            array (
                'DistrictID' => 914,
                'DistrictName' => '岱山县',
                'CityID' => 95,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            414 => 
            array (
                'DistrictID' => 915,
                'DistrictName' => '嵊泗县',
                'CityID' => 95,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            415 => 
            array (
                'DistrictID' => 916,
                'DistrictName' => '椒江区',
                'CityID' => 96,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            416 => 
            array (
                'DistrictID' => 917,
                'DistrictName' => '黄岩区',
                'CityID' => 96,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            417 => 
            array (
                'DistrictID' => 918,
                'DistrictName' => '路桥区',
                'CityID' => 96,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            418 => 
            array (
                'DistrictID' => 919,
                'DistrictName' => '玉环县',
                'CityID' => 96,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            419 => 
            array (
                'DistrictID' => 920,
                'DistrictName' => '三门县',
                'CityID' => 96,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            420 => 
            array (
                'DistrictID' => 921,
                'DistrictName' => '天台县',
                'CityID' => 96,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            421 => 
            array (
                'DistrictID' => 922,
                'DistrictName' => '仙居县',
                'CityID' => 96,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            422 => 
            array (
                'DistrictID' => 923,
                'DistrictName' => '温岭市',
                'CityID' => 96,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            423 => 
            array (
                'DistrictID' => 924,
                'DistrictName' => '临海市',
                'CityID' => 96,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            424 => 
            array (
                'DistrictID' => 925,
                'DistrictName' => '莲都区',
                'CityID' => 97,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            425 => 
            array (
                'DistrictID' => 926,
                'DistrictName' => '青田县',
                'CityID' => 97,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            426 => 
            array (
                'DistrictID' => 927,
                'DistrictName' => '缙云县',
                'CityID' => 97,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            427 => 
            array (
                'DistrictID' => 928,
                'DistrictName' => '遂昌县',
                'CityID' => 97,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            428 => 
            array (
                'DistrictID' => 929,
                'DistrictName' => '松阳县',
                'CityID' => 97,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            429 => 
            array (
                'DistrictID' => 930,
                'DistrictName' => '云和县',
                'CityID' => 97,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            430 => 
            array (
                'DistrictID' => 931,
                'DistrictName' => '庆元县',
                'CityID' => 97,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            431 => 
            array (
                'DistrictID' => 932,
                'DistrictName' => '景宁畲族自治县',
                'CityID' => 97,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            432 => 
            array (
                'DistrictID' => 933,
                'DistrictName' => '龙泉市',
                'CityID' => 97,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            433 => 
            array (
                'DistrictID' => 934,
                'DistrictName' => '瑶海区',
                'CityID' => 98,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            434 => 
            array (
                'DistrictID' => 935,
                'DistrictName' => '庐阳区',
                'CityID' => 98,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            435 => 
            array (
                'DistrictID' => 936,
                'DistrictName' => '蜀山区',
                'CityID' => 98,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            436 => 
            array (
                'DistrictID' => 937,
                'DistrictName' => '包河区',
                'CityID' => 98,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            437 => 
            array (
                'DistrictID' => 938,
                'DistrictName' => '长丰县',
                'CityID' => 98,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            438 => 
            array (
                'DistrictID' => 939,
                'DistrictName' => '肥东县',
                'CityID' => 98,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            439 => 
            array (
                'DistrictID' => 940,
                'DistrictName' => '肥西县',
                'CityID' => 98,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            440 => 
            array (
                'DistrictID' => 941,
                'DistrictName' => '镜湖区',
                'CityID' => 99,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            441 => 
            array (
                'DistrictID' => 942,
                'DistrictName' => '马塘区',
                'CityID' => 99,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            442 => 
            array (
                'DistrictID' => 943,
                'DistrictName' => '新芜区',
                'CityID' => 99,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            443 => 
            array (
                'DistrictID' => 944,
                'DistrictName' => '鸠江区',
                'CityID' => 99,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            444 => 
            array (
                'DistrictID' => 945,
                'DistrictName' => '芜湖县',
                'CityID' => 99,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            445 => 
            array (
                'DistrictID' => 946,
                'DistrictName' => '繁昌县',
                'CityID' => 99,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            446 => 
            array (
                'DistrictID' => 947,
                'DistrictName' => '南陵县',
                'CityID' => 99,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            447 => 
            array (
                'DistrictID' => 948,
                'DistrictName' => '龙子湖区',
                'CityID' => 100,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            448 => 
            array (
                'DistrictID' => 949,
                'DistrictName' => '蚌山区',
                'CityID' => 100,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            449 => 
            array (
                'DistrictID' => 950,
                'DistrictName' => '禹会区',
                'CityID' => 100,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            450 => 
            array (
                'DistrictID' => 951,
                'DistrictName' => '淮上区',
                'CityID' => 100,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            451 => 
            array (
                'DistrictID' => 952,
                'DistrictName' => '怀远县',
                'CityID' => 100,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            452 => 
            array (
                'DistrictID' => 953,
                'DistrictName' => '五河县',
                'CityID' => 100,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            453 => 
            array (
                'DistrictID' => 954,
                'DistrictName' => '固镇县',
                'CityID' => 100,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            454 => 
            array (
                'DistrictID' => 955,
                'DistrictName' => '大通区',
                'CityID' => 101,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            455 => 
            array (
                'DistrictID' => 956,
                'DistrictName' => '田家庵区',
                'CityID' => 101,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            456 => 
            array (
                'DistrictID' => 957,
                'DistrictName' => '谢家集区',
                'CityID' => 101,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            457 => 
            array (
                'DistrictID' => 958,
                'DistrictName' => '八公山区',
                'CityID' => 101,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            458 => 
            array (
                'DistrictID' => 959,
                'DistrictName' => '潘集区',
                'CityID' => 101,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            459 => 
            array (
                'DistrictID' => 960,
                'DistrictName' => '凤台县',
                'CityID' => 101,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            460 => 
            array (
                'DistrictID' => 961,
                'DistrictName' => '金家庄区',
                'CityID' => 102,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            461 => 
            array (
                'DistrictID' => 962,
                'DistrictName' => '花山区',
                'CityID' => 102,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            462 => 
            array (
                'DistrictID' => 963,
                'DistrictName' => '雨山区',
                'CityID' => 102,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            463 => 
            array (
                'DistrictID' => 964,
                'DistrictName' => '当涂县',
                'CityID' => 102,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            464 => 
            array (
                'DistrictID' => 965,
                'DistrictName' => '杜集区',
                'CityID' => 103,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            465 => 
            array (
                'DistrictID' => 966,
                'DistrictName' => '相山区',
                'CityID' => 103,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            466 => 
            array (
                'DistrictID' => 967,
                'DistrictName' => '烈山区',
                'CityID' => 103,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            467 => 
            array (
                'DistrictID' => 968,
                'DistrictName' => '濉溪县',
                'CityID' => 103,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            468 => 
            array (
                'DistrictID' => 969,
                'DistrictName' => '铜官山区',
                'CityID' => 104,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            469 => 
            array (
                'DistrictID' => 970,
                'DistrictName' => '狮子山区',
                'CityID' => 104,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            470 => 
            array (
                'DistrictID' => 971,
                'DistrictName' => '郊区',
                'CityID' => 104,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            471 => 
            array (
                'DistrictID' => 972,
                'DistrictName' => '铜陵县',
                'CityID' => 104,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            472 => 
            array (
                'DistrictID' => 973,
                'DistrictName' => '迎江区',
                'CityID' => 105,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            473 => 
            array (
                'DistrictID' => 974,
                'DistrictName' => '大观区',
                'CityID' => 105,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            474 => 
            array (
                'DistrictID' => 975,
                'DistrictName' => '郊区',
                'CityID' => 105,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            475 => 
            array (
                'DistrictID' => 976,
                'DistrictName' => '怀宁县',
                'CityID' => 105,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            476 => 
            array (
                'DistrictID' => 977,
                'DistrictName' => '枞阳县',
                'CityID' => 105,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            477 => 
            array (
                'DistrictID' => 978,
                'DistrictName' => '潜山县',
                'CityID' => 105,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            478 => 
            array (
                'DistrictID' => 979,
                'DistrictName' => '太湖县',
                'CityID' => 105,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            479 => 
            array (
                'DistrictID' => 980,
                'DistrictName' => '宿松县',
                'CityID' => 105,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            480 => 
            array (
                'DistrictID' => 981,
                'DistrictName' => '望江县',
                'CityID' => 105,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            481 => 
            array (
                'DistrictID' => 982,
                'DistrictName' => '岳西县',
                'CityID' => 105,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            482 => 
            array (
                'DistrictID' => 983,
                'DistrictName' => '桐城市',
                'CityID' => 105,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            483 => 
            array (
                'DistrictID' => 984,
                'DistrictName' => '屯溪区',
                'CityID' => 106,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            484 => 
            array (
                'DistrictID' => 985,
                'DistrictName' => '黄山区',
                'CityID' => 106,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            485 => 
            array (
                'DistrictID' => 986,
                'DistrictName' => '徽州区',
                'CityID' => 106,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            486 => 
            array (
                'DistrictID' => 987,
                'DistrictName' => '歙县',
                'CityID' => 106,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            487 => 
            array (
                'DistrictID' => 988,
                'DistrictName' => '休宁县',
                'CityID' => 106,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            488 => 
            array (
                'DistrictID' => 989,
                'DistrictName' => '黟县',
                'CityID' => 106,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            489 => 
            array (
                'DistrictID' => 990,
                'DistrictName' => '祁门县',
                'CityID' => 106,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            490 => 
            array (
                'DistrictID' => 991,
                'DistrictName' => '琅琊区',
                'CityID' => 107,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            491 => 
            array (
                'DistrictID' => 992,
                'DistrictName' => '南谯区',
                'CityID' => 107,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            492 => 
            array (
                'DistrictID' => 993,
                'DistrictName' => '来安县',
                'CityID' => 107,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            493 => 
            array (
                'DistrictID' => 994,
                'DistrictName' => '全椒县',
                'CityID' => 107,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            494 => 
            array (
                'DistrictID' => 995,
                'DistrictName' => '定远县',
                'CityID' => 107,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            495 => 
            array (
                'DistrictID' => 996,
                'DistrictName' => '凤阳县',
                'CityID' => 107,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            496 => 
            array (
                'DistrictID' => 997,
                'DistrictName' => '天长市',
                'CityID' => 107,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            497 => 
            array (
                'DistrictID' => 998,
                'DistrictName' => '明光市',
                'CityID' => 107,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            498 => 
            array (
                'DistrictID' => 999,
                'DistrictName' => '颍州区',
                'CityID' => 108,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            499 => 
            array (
                'DistrictID' => 1000,
                'DistrictName' => '颍东区',
                'CityID' => 108,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
        ));
        \DB::table('district')->insert(array (
            0 => 
            array (
                'DistrictID' => 1001,
                'DistrictName' => '颍泉区',
                'CityID' => 108,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            1 => 
            array (
                'DistrictID' => 1002,
                'DistrictName' => '临泉县',
                'CityID' => 108,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            2 => 
            array (
                'DistrictID' => 1003,
                'DistrictName' => '太和县',
                'CityID' => 108,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            3 => 
            array (
                'DistrictID' => 1004,
                'DistrictName' => '阜南县',
                'CityID' => 108,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            4 => 
            array (
                'DistrictID' => 1005,
                'DistrictName' => '颍上县',
                'CityID' => 108,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            5 => 
            array (
                'DistrictID' => 1006,
                'DistrictName' => '界首市',
                'CityID' => 108,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            6 => 
            array (
                'DistrictID' => 1007,
                'DistrictName' => '埇桥区',
                'CityID' => 109,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            7 => 
            array (
                'DistrictID' => 1008,
                'DistrictName' => '砀山县',
                'CityID' => 109,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            8 => 
            array (
                'DistrictID' => 1009,
                'DistrictName' => '萧县',
                'CityID' => 109,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            9 => 
            array (
                'DistrictID' => 1010,
                'DistrictName' => '灵璧县',
                'CityID' => 109,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            10 => 
            array (
                'DistrictID' => 1011,
                'DistrictName' => '泗县',
                'CityID' => 109,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            11 => 
            array (
                'DistrictID' => 1012,
                'DistrictName' => '居巢区',
                'CityID' => 110,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            12 => 
            array (
                'DistrictID' => 1013,
                'DistrictName' => '庐江县',
                'CityID' => 110,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            13 => 
            array (
                'DistrictID' => 1014,
                'DistrictName' => '无为县',
                'CityID' => 110,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            14 => 
            array (
                'DistrictID' => 1015,
                'DistrictName' => '含山县',
                'CityID' => 110,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            15 => 
            array (
                'DistrictID' => 1016,
                'DistrictName' => '和县',
                'CityID' => 110,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            16 => 
            array (
                'DistrictID' => 1017,
                'DistrictName' => '金安区',
                'CityID' => 111,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            17 => 
            array (
                'DistrictID' => 1018,
                'DistrictName' => '裕安区',
                'CityID' => 111,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            18 => 
            array (
                'DistrictID' => 1019,
                'DistrictName' => '寿县',
                'CityID' => 111,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            19 => 
            array (
                'DistrictID' => 1020,
                'DistrictName' => '霍邱县',
                'CityID' => 111,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            20 => 
            array (
                'DistrictID' => 1021,
                'DistrictName' => '舒城县',
                'CityID' => 111,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            21 => 
            array (
                'DistrictID' => 1022,
                'DistrictName' => '金寨县',
                'CityID' => 111,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            22 => 
            array (
                'DistrictID' => 1023,
                'DistrictName' => '霍山县',
                'CityID' => 111,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            23 => 
            array (
                'DistrictID' => 1024,
                'DistrictName' => '谯城区',
                'CityID' => 112,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            24 => 
            array (
                'DistrictID' => 1025,
                'DistrictName' => '涡阳县',
                'CityID' => 112,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            25 => 
            array (
                'DistrictID' => 1026,
                'DistrictName' => '蒙城县',
                'CityID' => 112,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            26 => 
            array (
                'DistrictID' => 1027,
                'DistrictName' => '利辛县',
                'CityID' => 112,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            27 => 
            array (
                'DistrictID' => 1028,
                'DistrictName' => '贵池区',
                'CityID' => 113,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            28 => 
            array (
                'DistrictID' => 1029,
                'DistrictName' => '东至县',
                'CityID' => 113,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            29 => 
            array (
                'DistrictID' => 1030,
                'DistrictName' => '石台县',
                'CityID' => 113,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            30 => 
            array (
                'DistrictID' => 1031,
                'DistrictName' => '青阳县',
                'CityID' => 113,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            31 => 
            array (
                'DistrictID' => 1032,
                'DistrictName' => '宣州区',
                'CityID' => 114,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            32 => 
            array (
                'DistrictID' => 1033,
                'DistrictName' => '郎溪县',
                'CityID' => 114,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            33 => 
            array (
                'DistrictID' => 1034,
                'DistrictName' => '广德县',
                'CityID' => 114,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            34 => 
            array (
                'DistrictID' => 1035,
                'DistrictName' => '泾县',
                'CityID' => 114,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            35 => 
            array (
                'DistrictID' => 1036,
                'DistrictName' => '绩溪县',
                'CityID' => 114,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            36 => 
            array (
                'DistrictID' => 1037,
                'DistrictName' => '旌德县',
                'CityID' => 114,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            37 => 
            array (
                'DistrictID' => 1038,
                'DistrictName' => '宁国市',
                'CityID' => 114,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            38 => 
            array (
                'DistrictID' => 1039,
                'DistrictName' => '鼓楼区',
                'CityID' => 115,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            39 => 
            array (
                'DistrictID' => 1040,
                'DistrictName' => '台江区',
                'CityID' => 115,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            40 => 
            array (
                'DistrictID' => 1041,
                'DistrictName' => '仓山区',
                'CityID' => 115,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            41 => 
            array (
                'DistrictID' => 1042,
                'DistrictName' => '马尾区',
                'CityID' => 115,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            42 => 
            array (
                'DistrictID' => 1043,
                'DistrictName' => '晋安区',
                'CityID' => 115,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            43 => 
            array (
                'DistrictID' => 1044,
                'DistrictName' => '闽侯县',
                'CityID' => 115,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            44 => 
            array (
                'DistrictID' => 1045,
                'DistrictName' => '连江县',
                'CityID' => 115,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            45 => 
            array (
                'DistrictID' => 1046,
                'DistrictName' => '罗源县',
                'CityID' => 115,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            46 => 
            array (
                'DistrictID' => 1047,
                'DistrictName' => '闽清县',
                'CityID' => 115,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            47 => 
            array (
                'DistrictID' => 1048,
                'DistrictName' => '永泰县',
                'CityID' => 115,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            48 => 
            array (
                'DistrictID' => 1049,
                'DistrictName' => '平潭县',
                'CityID' => 115,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            49 => 
            array (
                'DistrictID' => 1050,
                'DistrictName' => '福清市',
                'CityID' => 115,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            50 => 
            array (
                'DistrictID' => 1051,
                'DistrictName' => '长乐市',
                'CityID' => 115,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            51 => 
            array (
                'DistrictID' => 1052,
                'DistrictName' => '思明区',
                'CityID' => 116,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            52 => 
            array (
                'DistrictID' => 1053,
                'DistrictName' => '海沧区',
                'CityID' => 116,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            53 => 
            array (
                'DistrictID' => 1054,
                'DistrictName' => '湖里区',
                'CityID' => 116,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            54 => 
            array (
                'DistrictID' => 1055,
                'DistrictName' => '集美区',
                'CityID' => 116,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            55 => 
            array (
                'DistrictID' => 1056,
                'DistrictName' => '同安区',
                'CityID' => 116,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            56 => 
            array (
                'DistrictID' => 1057,
                'DistrictName' => '翔安区',
                'CityID' => 116,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            57 => 
            array (
                'DistrictID' => 1058,
                'DistrictName' => '城厢区',
                'CityID' => 117,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            58 => 
            array (
                'DistrictID' => 1059,
                'DistrictName' => '涵江区',
                'CityID' => 117,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            59 => 
            array (
                'DistrictID' => 1060,
                'DistrictName' => '荔城区',
                'CityID' => 117,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            60 => 
            array (
                'DistrictID' => 1061,
                'DistrictName' => '秀屿区',
                'CityID' => 117,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            61 => 
            array (
                'DistrictID' => 1062,
                'DistrictName' => '仙游县',
                'CityID' => 117,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            62 => 
            array (
                'DistrictID' => 1063,
                'DistrictName' => '梅列区',
                'CityID' => 118,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            63 => 
            array (
                'DistrictID' => 1064,
                'DistrictName' => '三元区',
                'CityID' => 118,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            64 => 
            array (
                'DistrictID' => 1065,
                'DistrictName' => '明溪县',
                'CityID' => 118,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            65 => 
            array (
                'DistrictID' => 1066,
                'DistrictName' => '清流县',
                'CityID' => 118,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            66 => 
            array (
                'DistrictID' => 1067,
                'DistrictName' => '宁化县',
                'CityID' => 118,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            67 => 
            array (
                'DistrictID' => 1068,
                'DistrictName' => '大田县',
                'CityID' => 118,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            68 => 
            array (
                'DistrictID' => 1069,
                'DistrictName' => '尤溪县',
                'CityID' => 118,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            69 => 
            array (
                'DistrictID' => 1070,
                'DistrictName' => '沙县',
                'CityID' => 118,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            70 => 
            array (
                'DistrictID' => 1071,
                'DistrictName' => '将乐县',
                'CityID' => 118,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            71 => 
            array (
                'DistrictID' => 1072,
                'DistrictName' => '泰宁县',
                'CityID' => 118,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            72 => 
            array (
                'DistrictID' => 1073,
                'DistrictName' => '建宁县',
                'CityID' => 118,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            73 => 
            array (
                'DistrictID' => 1074,
                'DistrictName' => '永安市',
                'CityID' => 118,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            74 => 
            array (
                'DistrictID' => 1075,
                'DistrictName' => '鲤城区',
                'CityID' => 119,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            75 => 
            array (
                'DistrictID' => 1076,
                'DistrictName' => '丰泽区',
                'CityID' => 119,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            76 => 
            array (
                'DistrictID' => 1077,
                'DistrictName' => '洛江区',
                'CityID' => 119,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            77 => 
            array (
                'DistrictID' => 1078,
                'DistrictName' => '泉港区',
                'CityID' => 119,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            78 => 
            array (
                'DistrictID' => 1079,
                'DistrictName' => '惠安县',
                'CityID' => 119,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            79 => 
            array (
                'DistrictID' => 1080,
                'DistrictName' => '安溪县',
                'CityID' => 119,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            80 => 
            array (
                'DistrictID' => 1081,
                'DistrictName' => '永春县',
                'CityID' => 119,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            81 => 
            array (
                'DistrictID' => 1082,
                'DistrictName' => '德化县',
                'CityID' => 119,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            82 => 
            array (
                'DistrictID' => 1083,
                'DistrictName' => '金门县',
                'CityID' => 119,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            83 => 
            array (
                'DistrictID' => 1084,
                'DistrictName' => '石狮市',
                'CityID' => 119,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            84 => 
            array (
                'DistrictID' => 1085,
                'DistrictName' => '晋江市',
                'CityID' => 119,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            85 => 
            array (
                'DistrictID' => 1086,
                'DistrictName' => '南安市',
                'CityID' => 119,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            86 => 
            array (
                'DistrictID' => 1087,
                'DistrictName' => '芗城区',
                'CityID' => 120,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            87 => 
            array (
                'DistrictID' => 1088,
                'DistrictName' => '龙文区',
                'CityID' => 120,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            88 => 
            array (
                'DistrictID' => 1089,
                'DistrictName' => '云霄县',
                'CityID' => 120,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            89 => 
            array (
                'DistrictID' => 1090,
                'DistrictName' => '漳浦县',
                'CityID' => 120,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            90 => 
            array (
                'DistrictID' => 1091,
                'DistrictName' => '诏安县',
                'CityID' => 120,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            91 => 
            array (
                'DistrictID' => 1092,
                'DistrictName' => '长泰县',
                'CityID' => 120,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            92 => 
            array (
                'DistrictID' => 1093,
                'DistrictName' => '东山县',
                'CityID' => 120,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            93 => 
            array (
                'DistrictID' => 1094,
                'DistrictName' => '南靖县',
                'CityID' => 120,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            94 => 
            array (
                'DistrictID' => 1095,
                'DistrictName' => '平和县',
                'CityID' => 120,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            95 => 
            array (
                'DistrictID' => 1096,
                'DistrictName' => '华安县',
                'CityID' => 120,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            96 => 
            array (
                'DistrictID' => 1097,
                'DistrictName' => '龙海市',
                'CityID' => 120,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            97 => 
            array (
                'DistrictID' => 1098,
                'DistrictName' => '延平区',
                'CityID' => 121,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            98 => 
            array (
                'DistrictID' => 1099,
                'DistrictName' => '顺昌县',
                'CityID' => 121,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            99 => 
            array (
                'DistrictID' => 1100,
                'DistrictName' => '浦城县',
                'CityID' => 121,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            100 => 
            array (
                'DistrictID' => 1101,
                'DistrictName' => '光泽县',
                'CityID' => 121,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            101 => 
            array (
                'DistrictID' => 1102,
                'DistrictName' => '松溪县',
                'CityID' => 121,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            102 => 
            array (
                'DistrictID' => 1103,
                'DistrictName' => '政和县',
                'CityID' => 121,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            103 => 
            array (
                'DistrictID' => 1104,
                'DistrictName' => '邵武市',
                'CityID' => 121,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            104 => 
            array (
                'DistrictID' => 1105,
                'DistrictName' => '武夷山市',
                'CityID' => 121,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            105 => 
            array (
                'DistrictID' => 1106,
                'DistrictName' => '建瓯市',
                'CityID' => 121,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            106 => 
            array (
                'DistrictID' => 1107,
                'DistrictName' => '建阳市',
                'CityID' => 121,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            107 => 
            array (
                'DistrictID' => 1108,
                'DistrictName' => '新罗区',
                'CityID' => 122,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            108 => 
            array (
                'DistrictID' => 1109,
                'DistrictName' => '长汀县',
                'CityID' => 122,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            109 => 
            array (
                'DistrictID' => 1110,
                'DistrictName' => '永定县',
                'CityID' => 122,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            110 => 
            array (
                'DistrictID' => 1111,
                'DistrictName' => '上杭县',
                'CityID' => 122,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            111 => 
            array (
                'DistrictID' => 1112,
                'DistrictName' => '武平县',
                'CityID' => 122,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            112 => 
            array (
                'DistrictID' => 1113,
                'DistrictName' => '连城县',
                'CityID' => 122,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            113 => 
            array (
                'DistrictID' => 1114,
                'DistrictName' => '漳平市',
                'CityID' => 122,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            114 => 
            array (
                'DistrictID' => 1115,
                'DistrictName' => '蕉城区',
                'CityID' => 123,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            115 => 
            array (
                'DistrictID' => 1116,
                'DistrictName' => '霞浦县',
                'CityID' => 123,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            116 => 
            array (
                'DistrictID' => 1117,
                'DistrictName' => '古田县',
                'CityID' => 123,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            117 => 
            array (
                'DistrictID' => 1118,
                'DistrictName' => '屏南县',
                'CityID' => 123,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            118 => 
            array (
                'DistrictID' => 1119,
                'DistrictName' => '寿宁县',
                'CityID' => 123,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            119 => 
            array (
                'DistrictID' => 1120,
                'DistrictName' => '周宁县',
                'CityID' => 123,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            120 => 
            array (
                'DistrictID' => 1121,
                'DistrictName' => '柘荣县',
                'CityID' => 123,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            121 => 
            array (
                'DistrictID' => 1122,
                'DistrictName' => '福安市',
                'CityID' => 123,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            122 => 
            array (
                'DistrictID' => 1123,
                'DistrictName' => '福鼎市',
                'CityID' => 123,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            123 => 
            array (
                'DistrictID' => 1124,
                'DistrictName' => '东湖区',
                'CityID' => 124,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            124 => 
            array (
                'DistrictID' => 1125,
                'DistrictName' => '西湖区',
                'CityID' => 124,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            125 => 
            array (
                'DistrictID' => 1126,
                'DistrictName' => '青云谱区',
                'CityID' => 124,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            126 => 
            array (
                'DistrictID' => 1127,
                'DistrictName' => '湾里区',
                'CityID' => 124,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            127 => 
            array (
                'DistrictID' => 1128,
                'DistrictName' => '青山湖区',
                'CityID' => 124,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            128 => 
            array (
                'DistrictID' => 1129,
                'DistrictName' => '南昌县',
                'CityID' => 124,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            129 => 
            array (
                'DistrictID' => 1130,
                'DistrictName' => '新建县',
                'CityID' => 124,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            130 => 
            array (
                'DistrictID' => 1131,
                'DistrictName' => '安义县',
                'CityID' => 124,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            131 => 
            array (
                'DistrictID' => 1132,
                'DistrictName' => '进贤县',
                'CityID' => 124,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            132 => 
            array (
                'DistrictID' => 1133,
                'DistrictName' => '昌江区',
                'CityID' => 125,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            133 => 
            array (
                'DistrictID' => 1134,
                'DistrictName' => '珠山区',
                'CityID' => 125,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            134 => 
            array (
                'DistrictID' => 1135,
                'DistrictName' => '浮梁县',
                'CityID' => 125,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            135 => 
            array (
                'DistrictID' => 1136,
                'DistrictName' => '乐平市',
                'CityID' => 125,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            136 => 
            array (
                'DistrictID' => 1137,
                'DistrictName' => '安源区',
                'CityID' => 126,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            137 => 
            array (
                'DistrictID' => 1138,
                'DistrictName' => '湘东区',
                'CityID' => 126,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            138 => 
            array (
                'DistrictID' => 1139,
                'DistrictName' => '莲花县',
                'CityID' => 126,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            139 => 
            array (
                'DistrictID' => 1140,
                'DistrictName' => '上栗县',
                'CityID' => 126,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            140 => 
            array (
                'DistrictID' => 1141,
                'DistrictName' => '芦溪县',
                'CityID' => 126,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            141 => 
            array (
                'DistrictID' => 1142,
                'DistrictName' => '庐山区',
                'CityID' => 127,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            142 => 
            array (
                'DistrictID' => 1143,
                'DistrictName' => '浔阳区',
                'CityID' => 127,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            143 => 
            array (
                'DistrictID' => 1144,
                'DistrictName' => '九江县',
                'CityID' => 127,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            144 => 
            array (
                'DistrictID' => 1145,
                'DistrictName' => '武宁县',
                'CityID' => 127,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            145 => 
            array (
                'DistrictID' => 1146,
                'DistrictName' => '修水县',
                'CityID' => 127,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            146 => 
            array (
                'DistrictID' => 1147,
                'DistrictName' => '永修县',
                'CityID' => 127,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            147 => 
            array (
                'DistrictID' => 1148,
                'DistrictName' => '德安县',
                'CityID' => 127,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            148 => 
            array (
                'DistrictID' => 1149,
                'DistrictName' => '星子县',
                'CityID' => 127,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            149 => 
            array (
                'DistrictID' => 1150,
                'DistrictName' => '都昌县',
                'CityID' => 127,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            150 => 
            array (
                'DistrictID' => 1151,
                'DistrictName' => '湖口县',
                'CityID' => 127,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            151 => 
            array (
                'DistrictID' => 1152,
                'DistrictName' => '彭泽县',
                'CityID' => 127,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            152 => 
            array (
                'DistrictID' => 1153,
                'DistrictName' => '瑞昌市',
                'CityID' => 127,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            153 => 
            array (
                'DistrictID' => 1154,
                'DistrictName' => '渝水区',
                'CityID' => 128,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            154 => 
            array (
                'DistrictID' => 1155,
                'DistrictName' => '分宜县',
                'CityID' => 128,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            155 => 
            array (
                'DistrictID' => 1156,
                'DistrictName' => '月湖区',
                'CityID' => 129,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            156 => 
            array (
                'DistrictID' => 1157,
                'DistrictName' => '余江县',
                'CityID' => 129,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            157 => 
            array (
                'DistrictID' => 1158,
                'DistrictName' => '贵溪市',
                'CityID' => 129,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            158 => 
            array (
                'DistrictID' => 1159,
                'DistrictName' => '章贡区',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            159 => 
            array (
                'DistrictID' => 1160,
                'DistrictName' => '赣县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            160 => 
            array (
                'DistrictID' => 1161,
                'DistrictName' => '信丰县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            161 => 
            array (
                'DistrictID' => 1162,
                'DistrictName' => '大余县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            162 => 
            array (
                'DistrictID' => 1163,
                'DistrictName' => '上犹县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            163 => 
            array (
                'DistrictID' => 1164,
                'DistrictName' => '崇义县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            164 => 
            array (
                'DistrictID' => 1165,
                'DistrictName' => '安远县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            165 => 
            array (
                'DistrictID' => 1166,
                'DistrictName' => '龙南县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            166 => 
            array (
                'DistrictID' => 1167,
                'DistrictName' => '定南县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            167 => 
            array (
                'DistrictID' => 1168,
                'DistrictName' => '全南县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            168 => 
            array (
                'DistrictID' => 1169,
                'DistrictName' => '宁都县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            169 => 
            array (
                'DistrictID' => 1170,
                'DistrictName' => '于都县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            170 => 
            array (
                'DistrictID' => 1171,
                'DistrictName' => '兴国县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            171 => 
            array (
                'DistrictID' => 1172,
                'DistrictName' => '会昌县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            172 => 
            array (
                'DistrictID' => 1173,
                'DistrictName' => '寻乌县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            173 => 
            array (
                'DistrictID' => 1174,
                'DistrictName' => '石城县',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            174 => 
            array (
                'DistrictID' => 1175,
                'DistrictName' => '瑞金市',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            175 => 
            array (
                'DistrictID' => 1176,
                'DistrictName' => '南康市',
                'CityID' => 130,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            176 => 
            array (
                'DistrictID' => 1177,
                'DistrictName' => '吉州区',
                'CityID' => 131,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            177 => 
            array (
                'DistrictID' => 1178,
                'DistrictName' => '青原区',
                'CityID' => 131,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            178 => 
            array (
                'DistrictID' => 1179,
                'DistrictName' => '吉安县',
                'CityID' => 131,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            179 => 
            array (
                'DistrictID' => 1180,
                'DistrictName' => '吉水县',
                'CityID' => 131,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            180 => 
            array (
                'DistrictID' => 1181,
                'DistrictName' => '峡江县',
                'CityID' => 131,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            181 => 
            array (
                'DistrictID' => 1182,
                'DistrictName' => '新干县',
                'CityID' => 131,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            182 => 
            array (
                'DistrictID' => 1183,
                'DistrictName' => '永丰县',
                'CityID' => 131,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            183 => 
            array (
                'DistrictID' => 1184,
                'DistrictName' => '泰和县',
                'CityID' => 131,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            184 => 
            array (
                'DistrictID' => 1185,
                'DistrictName' => '遂川县',
                'CityID' => 131,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            185 => 
            array (
                'DistrictID' => 1186,
                'DistrictName' => '万安县',
                'CityID' => 131,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            186 => 
            array (
                'DistrictID' => 1187,
                'DistrictName' => '安福县',
                'CityID' => 131,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            187 => 
            array (
                'DistrictID' => 1188,
                'DistrictName' => '永新县',
                'CityID' => 131,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            188 => 
            array (
                'DistrictID' => 1189,
                'DistrictName' => '井冈山市',
                'CityID' => 131,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            189 => 
            array (
                'DistrictID' => 1190,
                'DistrictName' => '袁州区',
                'CityID' => 132,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            190 => 
            array (
                'DistrictID' => 1191,
                'DistrictName' => '奉新县',
                'CityID' => 132,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            191 => 
            array (
                'DistrictID' => 1192,
                'DistrictName' => '万载县',
                'CityID' => 132,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            192 => 
            array (
                'DistrictID' => 1193,
                'DistrictName' => '上高县',
                'CityID' => 132,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            193 => 
            array (
                'DistrictID' => 1194,
                'DistrictName' => '宜丰县',
                'CityID' => 132,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            194 => 
            array (
                'DistrictID' => 1195,
                'DistrictName' => '靖安县',
                'CityID' => 132,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            195 => 
            array (
                'DistrictID' => 1196,
                'DistrictName' => '铜鼓县',
                'CityID' => 132,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            196 => 
            array (
                'DistrictID' => 1197,
                'DistrictName' => '丰城市',
                'CityID' => 132,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            197 => 
            array (
                'DistrictID' => 1198,
                'DistrictName' => '樟树市',
                'CityID' => 132,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            198 => 
            array (
                'DistrictID' => 1199,
                'DistrictName' => '高安市',
                'CityID' => 132,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            199 => 
            array (
                'DistrictID' => 1200,
                'DistrictName' => '临川区',
                'CityID' => 133,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            200 => 
            array (
                'DistrictID' => 1201,
                'DistrictName' => '南城县',
                'CityID' => 133,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            201 => 
            array (
                'DistrictID' => 1202,
                'DistrictName' => '黎川县',
                'CityID' => 133,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            202 => 
            array (
                'DistrictID' => 1203,
                'DistrictName' => '南丰县',
                'CityID' => 133,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            203 => 
            array (
                'DistrictID' => 1204,
                'DistrictName' => '崇仁县',
                'CityID' => 133,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            204 => 
            array (
                'DistrictID' => 1205,
                'DistrictName' => '乐安县',
                'CityID' => 133,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            205 => 
            array (
                'DistrictID' => 1206,
                'DistrictName' => '宜黄县',
                'CityID' => 133,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            206 => 
            array (
                'DistrictID' => 1207,
                'DistrictName' => '金溪县',
                'CityID' => 133,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            207 => 
            array (
                'DistrictID' => 1208,
                'DistrictName' => '资溪县',
                'CityID' => 133,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            208 => 
            array (
                'DistrictID' => 1209,
                'DistrictName' => '东乡县',
                'CityID' => 133,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            209 => 
            array (
                'DistrictID' => 1210,
                'DistrictName' => '广昌县',
                'CityID' => 133,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            210 => 
            array (
                'DistrictID' => 1211,
                'DistrictName' => '信州区',
                'CityID' => 134,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            211 => 
            array (
                'DistrictID' => 1212,
                'DistrictName' => '上饶县',
                'CityID' => 134,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            212 => 
            array (
                'DistrictID' => 1213,
                'DistrictName' => '广丰县',
                'CityID' => 134,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            213 => 
            array (
                'DistrictID' => 1214,
                'DistrictName' => '玉山县',
                'CityID' => 134,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            214 => 
            array (
                'DistrictID' => 1215,
                'DistrictName' => '铅山县',
                'CityID' => 134,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            215 => 
            array (
                'DistrictID' => 1216,
                'DistrictName' => '横峰县',
                'CityID' => 134,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            216 => 
            array (
                'DistrictID' => 1217,
                'DistrictName' => '弋阳县',
                'CityID' => 134,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            217 => 
            array (
                'DistrictID' => 1218,
                'DistrictName' => '余干县',
                'CityID' => 134,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            218 => 
            array (
                'DistrictID' => 1219,
                'DistrictName' => '鄱阳县',
                'CityID' => 134,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            219 => 
            array (
                'DistrictID' => 1220,
                'DistrictName' => '万年县',
                'CityID' => 134,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            220 => 
            array (
                'DistrictID' => 1221,
                'DistrictName' => '婺源县',
                'CityID' => 134,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            221 => 
            array (
                'DistrictID' => 1222,
                'DistrictName' => '德兴市',
                'CityID' => 134,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            222 => 
            array (
                'DistrictID' => 1223,
                'DistrictName' => '历下区',
                'CityID' => 135,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            223 => 
            array (
                'DistrictID' => 1224,
                'DistrictName' => '市中区',
                'CityID' => 135,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            224 => 
            array (
                'DistrictID' => 1225,
                'DistrictName' => '槐荫区',
                'CityID' => 135,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            225 => 
            array (
                'DistrictID' => 1226,
                'DistrictName' => '天桥区',
                'CityID' => 135,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            226 => 
            array (
                'DistrictID' => 1227,
                'DistrictName' => '历城区',
                'CityID' => 135,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            227 => 
            array (
                'DistrictID' => 1228,
                'DistrictName' => '长清区',
                'CityID' => 135,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            228 => 
            array (
                'DistrictID' => 1229,
                'DistrictName' => '平阴县',
                'CityID' => 135,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            229 => 
            array (
                'DistrictID' => 1230,
                'DistrictName' => '济阳县',
                'CityID' => 135,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            230 => 
            array (
                'DistrictID' => 1231,
                'DistrictName' => '商河县',
                'CityID' => 135,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            231 => 
            array (
                'DistrictID' => 1232,
                'DistrictName' => '章丘市',
                'CityID' => 135,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            232 => 
            array (
                'DistrictID' => 1233,
                'DistrictName' => '市南区',
                'CityID' => 136,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            233 => 
            array (
                'DistrictID' => 1234,
                'DistrictName' => '市北区',
                'CityID' => 136,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            234 => 
            array (
                'DistrictID' => 1235,
                'DistrictName' => '四方区',
                'CityID' => 136,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            235 => 
            array (
                'DistrictID' => 1236,
                'DistrictName' => '黄岛区',
                'CityID' => 136,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            236 => 
            array (
                'DistrictID' => 1237,
                'DistrictName' => '崂山区',
                'CityID' => 136,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            237 => 
            array (
                'DistrictID' => 1238,
                'DistrictName' => '李沧区',
                'CityID' => 136,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            238 => 
            array (
                'DistrictID' => 1239,
                'DistrictName' => '城阳区',
                'CityID' => 136,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            239 => 
            array (
                'DistrictID' => 1240,
                'DistrictName' => '胶州市',
                'CityID' => 136,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            240 => 
            array (
                'DistrictID' => 1241,
                'DistrictName' => '即墨市',
                'CityID' => 136,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            241 => 
            array (
                'DistrictID' => 1242,
                'DistrictName' => '平度市',
                'CityID' => 136,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            242 => 
            array (
                'DistrictID' => 1243,
                'DistrictName' => '胶南市',
                'CityID' => 136,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            243 => 
            array (
                'DistrictID' => 1244,
                'DistrictName' => '莱西市',
                'CityID' => 136,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            244 => 
            array (
                'DistrictID' => 1245,
                'DistrictName' => '淄川区',
                'CityID' => 137,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            245 => 
            array (
                'DistrictID' => 1246,
                'DistrictName' => '张店区',
                'CityID' => 137,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            246 => 
            array (
                'DistrictID' => 1247,
                'DistrictName' => '博山区',
                'CityID' => 137,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            247 => 
            array (
                'DistrictID' => 1248,
                'DistrictName' => '临淄区',
                'CityID' => 137,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            248 => 
            array (
                'DistrictID' => 1249,
                'DistrictName' => '周村区',
                'CityID' => 137,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            249 => 
            array (
                'DistrictID' => 1250,
                'DistrictName' => '桓台县',
                'CityID' => 137,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            250 => 
            array (
                'DistrictID' => 1251,
                'DistrictName' => '高青县',
                'CityID' => 137,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            251 => 
            array (
                'DistrictID' => 1252,
                'DistrictName' => '沂源县',
                'CityID' => 137,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            252 => 
            array (
                'DistrictID' => 1253,
                'DistrictName' => '市中区',
                'CityID' => 138,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            253 => 
            array (
                'DistrictID' => 1254,
                'DistrictName' => '薛城区',
                'CityID' => 138,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            254 => 
            array (
                'DistrictID' => 1255,
                'DistrictName' => '峄城区',
                'CityID' => 138,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            255 => 
            array (
                'DistrictID' => 1256,
                'DistrictName' => '台儿庄区',
                'CityID' => 138,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            256 => 
            array (
                'DistrictID' => 1257,
                'DistrictName' => '山亭区',
                'CityID' => 138,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            257 => 
            array (
                'DistrictID' => 1258,
                'DistrictName' => '滕州市',
                'CityID' => 138,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            258 => 
            array (
                'DistrictID' => 1259,
                'DistrictName' => '东营区',
                'CityID' => 139,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            259 => 
            array (
                'DistrictID' => 1260,
                'DistrictName' => '河口区',
                'CityID' => 139,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            260 => 
            array (
                'DistrictID' => 1261,
                'DistrictName' => '垦利县',
                'CityID' => 139,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            261 => 
            array (
                'DistrictID' => 1262,
                'DistrictName' => '利津县',
                'CityID' => 139,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            262 => 
            array (
                'DistrictID' => 1263,
                'DistrictName' => '广饶县',
                'CityID' => 139,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            263 => 
            array (
                'DistrictID' => 1264,
                'DistrictName' => '芝罘区',
                'CityID' => 140,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            264 => 
            array (
                'DistrictID' => 1265,
                'DistrictName' => '福山区',
                'CityID' => 140,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            265 => 
            array (
                'DistrictID' => 1266,
                'DistrictName' => '牟平区',
                'CityID' => 140,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            266 => 
            array (
                'DistrictID' => 1267,
                'DistrictName' => '莱山区',
                'CityID' => 140,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            267 => 
            array (
                'DistrictID' => 1268,
                'DistrictName' => '长岛县',
                'CityID' => 140,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            268 => 
            array (
                'DistrictID' => 1269,
                'DistrictName' => '龙口市',
                'CityID' => 140,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            269 => 
            array (
                'DistrictID' => 1270,
                'DistrictName' => '莱阳市',
                'CityID' => 140,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            270 => 
            array (
                'DistrictID' => 1271,
                'DistrictName' => '莱州市',
                'CityID' => 140,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            271 => 
            array (
                'DistrictID' => 1272,
                'DistrictName' => '蓬莱市',
                'CityID' => 140,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            272 => 
            array (
                'DistrictID' => 1273,
                'DistrictName' => '招远市',
                'CityID' => 140,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            273 => 
            array (
                'DistrictID' => 1274,
                'DistrictName' => '栖霞市',
                'CityID' => 140,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            274 => 
            array (
                'DistrictID' => 1275,
                'DistrictName' => '海阳市',
                'CityID' => 140,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            275 => 
            array (
                'DistrictID' => 1276,
                'DistrictName' => '潍城区',
                'CityID' => 141,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            276 => 
            array (
                'DistrictID' => 1277,
                'DistrictName' => '寒亭区',
                'CityID' => 141,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            277 => 
            array (
                'DistrictID' => 1278,
                'DistrictName' => '坊子区',
                'CityID' => 141,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            278 => 
            array (
                'DistrictID' => 1279,
                'DistrictName' => '奎文区',
                'CityID' => 141,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            279 => 
            array (
                'DistrictID' => 1280,
                'DistrictName' => '临朐县',
                'CityID' => 141,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            280 => 
            array (
                'DistrictID' => 1281,
                'DistrictName' => '昌乐县',
                'CityID' => 141,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            281 => 
            array (
                'DistrictID' => 1282,
                'DistrictName' => '青州市',
                'CityID' => 141,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            282 => 
            array (
                'DistrictID' => 1283,
                'DistrictName' => '诸城市',
                'CityID' => 141,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            283 => 
            array (
                'DistrictID' => 1284,
                'DistrictName' => '寿光市',
                'CityID' => 141,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            284 => 
            array (
                'DistrictID' => 1285,
                'DistrictName' => '安丘市',
                'CityID' => 141,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            285 => 
            array (
                'DistrictID' => 1286,
                'DistrictName' => '高密市',
                'CityID' => 141,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            286 => 
            array (
                'DistrictID' => 1287,
                'DistrictName' => '昌邑市',
                'CityID' => 141,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            287 => 
            array (
                'DistrictID' => 1288,
                'DistrictName' => '市中区',
                'CityID' => 142,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            288 => 
            array (
                'DistrictID' => 1289,
                'DistrictName' => '任城区',
                'CityID' => 142,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            289 => 
            array (
                'DistrictID' => 1290,
                'DistrictName' => '微山县',
                'CityID' => 142,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            290 => 
            array (
                'DistrictID' => 1291,
                'DistrictName' => '鱼台县',
                'CityID' => 142,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            291 => 
            array (
                'DistrictID' => 1292,
                'DistrictName' => '金乡县',
                'CityID' => 142,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            292 => 
            array (
                'DistrictID' => 1293,
                'DistrictName' => '嘉祥县',
                'CityID' => 142,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            293 => 
            array (
                'DistrictID' => 1294,
                'DistrictName' => '汶上县',
                'CityID' => 142,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            294 => 
            array (
                'DistrictID' => 1295,
                'DistrictName' => '泗水县',
                'CityID' => 142,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            295 => 
            array (
                'DistrictID' => 1296,
                'DistrictName' => '梁山县',
                'CityID' => 142,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            296 => 
            array (
                'DistrictID' => 1297,
                'DistrictName' => '曲阜市',
                'CityID' => 142,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            297 => 
            array (
                'DistrictID' => 1298,
                'DistrictName' => '兖州市',
                'CityID' => 142,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            298 => 
            array (
                'DistrictID' => 1299,
                'DistrictName' => '邹城市',
                'CityID' => 142,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            299 => 
            array (
                'DistrictID' => 1300,
                'DistrictName' => '泰山区',
                'CityID' => 143,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            300 => 
            array (
                'DistrictID' => 1301,
                'DistrictName' => '岱岳区',
                'CityID' => 143,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            301 => 
            array (
                'DistrictID' => 1302,
                'DistrictName' => '宁阳县',
                'CityID' => 143,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            302 => 
            array (
                'DistrictID' => 1303,
                'DistrictName' => '东平县',
                'CityID' => 143,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            303 => 
            array (
                'DistrictID' => 1304,
                'DistrictName' => '新泰市',
                'CityID' => 143,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            304 => 
            array (
                'DistrictID' => 1305,
                'DistrictName' => '肥城市',
                'CityID' => 143,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            305 => 
            array (
                'DistrictID' => 1306,
                'DistrictName' => '环翠区',
                'CityID' => 144,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            306 => 
            array (
                'DistrictID' => 1307,
                'DistrictName' => '文登市',
                'CityID' => 144,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            307 => 
            array (
                'DistrictID' => 1308,
                'DistrictName' => '荣成市',
                'CityID' => 144,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            308 => 
            array (
                'DistrictID' => 1309,
                'DistrictName' => '乳山市',
                'CityID' => 144,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            309 => 
            array (
                'DistrictID' => 1310,
                'DistrictName' => '东港区',
                'CityID' => 145,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            310 => 
            array (
                'DistrictID' => 1311,
                'DistrictName' => '岚山区',
                'CityID' => 145,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            311 => 
            array (
                'DistrictID' => 1312,
                'DistrictName' => '五莲县',
                'CityID' => 145,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            312 => 
            array (
                'DistrictID' => 1313,
                'DistrictName' => '莒县',
                'CityID' => 145,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            313 => 
            array (
                'DistrictID' => 1314,
                'DistrictName' => '莱城区',
                'CityID' => 146,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            314 => 
            array (
                'DistrictID' => 1315,
                'DistrictName' => '钢城区',
                'CityID' => 146,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            315 => 
            array (
                'DistrictID' => 1316,
                'DistrictName' => '兰山区',
                'CityID' => 147,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            316 => 
            array (
                'DistrictID' => 1317,
                'DistrictName' => '罗庄区',
                'CityID' => 147,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            317 => 
            array (
                'DistrictID' => 1318,
                'DistrictName' => '河东区',
                'CityID' => 147,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            318 => 
            array (
                'DistrictID' => 1319,
                'DistrictName' => '沂南县',
                'CityID' => 147,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            319 => 
            array (
                'DistrictID' => 1320,
                'DistrictName' => '郯城县',
                'CityID' => 147,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            320 => 
            array (
                'DistrictID' => 1321,
                'DistrictName' => '沂水县',
                'CityID' => 147,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            321 => 
            array (
                'DistrictID' => 1322,
                'DistrictName' => '苍山县',
                'CityID' => 147,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            322 => 
            array (
                'DistrictID' => 1323,
                'DistrictName' => '费县',
                'CityID' => 147,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            323 => 
            array (
                'DistrictID' => 1324,
                'DistrictName' => '平邑县',
                'CityID' => 147,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            324 => 
            array (
                'DistrictID' => 1325,
                'DistrictName' => '莒南县',
                'CityID' => 147,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            325 => 
            array (
                'DistrictID' => 1326,
                'DistrictName' => '蒙阴县',
                'CityID' => 147,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            326 => 
            array (
                'DistrictID' => 1327,
                'DistrictName' => '临沭县',
                'CityID' => 147,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            327 => 
            array (
                'DistrictID' => 1328,
                'DistrictName' => '德城区',
                'CityID' => 148,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            328 => 
            array (
                'DistrictID' => 1329,
                'DistrictName' => '陵县',
                'CityID' => 148,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            329 => 
            array (
                'DistrictID' => 1330,
                'DistrictName' => '宁津县',
                'CityID' => 148,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            330 => 
            array (
                'DistrictID' => 1331,
                'DistrictName' => '庆云县',
                'CityID' => 148,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            331 => 
            array (
                'DistrictID' => 1332,
                'DistrictName' => '临邑县',
                'CityID' => 148,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            332 => 
            array (
                'DistrictID' => 1333,
                'DistrictName' => '齐河县',
                'CityID' => 148,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            333 => 
            array (
                'DistrictID' => 1334,
                'DistrictName' => '平原县',
                'CityID' => 148,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            334 => 
            array (
                'DistrictID' => 1335,
                'DistrictName' => '夏津县',
                'CityID' => 148,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            335 => 
            array (
                'DistrictID' => 1336,
                'DistrictName' => '武城县',
                'CityID' => 148,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            336 => 
            array (
                'DistrictID' => 1337,
                'DistrictName' => '乐陵市',
                'CityID' => 148,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            337 => 
            array (
                'DistrictID' => 1338,
                'DistrictName' => '禹城市',
                'CityID' => 148,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            338 => 
            array (
                'DistrictID' => 1339,
                'DistrictName' => '东昌府区',
                'CityID' => 149,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            339 => 
            array (
                'DistrictID' => 1340,
                'DistrictName' => '阳谷县',
                'CityID' => 149,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            340 => 
            array (
                'DistrictID' => 1341,
                'DistrictName' => '莘县',
                'CityID' => 149,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            341 => 
            array (
                'DistrictID' => 1342,
                'DistrictName' => '茌平县',
                'CityID' => 149,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            342 => 
            array (
                'DistrictID' => 1343,
                'DistrictName' => '东阿县',
                'CityID' => 149,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            343 => 
            array (
                'DistrictID' => 1344,
                'DistrictName' => '冠县',
                'CityID' => 149,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            344 => 
            array (
                'DistrictID' => 1345,
                'DistrictName' => '高唐县',
                'CityID' => 149,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            345 => 
            array (
                'DistrictID' => 1346,
                'DistrictName' => '临清市',
                'CityID' => 149,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            346 => 
            array (
                'DistrictID' => 1347,
                'DistrictName' => '滨城区',
                'CityID' => 150,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            347 => 
            array (
                'DistrictID' => 1348,
                'DistrictName' => '惠民县',
                'CityID' => 150,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            348 => 
            array (
                'DistrictID' => 1349,
                'DistrictName' => '阳信县',
                'CityID' => 150,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            349 => 
            array (
                'DistrictID' => 1350,
                'DistrictName' => '无棣县',
                'CityID' => 150,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            350 => 
            array (
                'DistrictID' => 1351,
                'DistrictName' => '沾化县',
                'CityID' => 150,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            351 => 
            array (
                'DistrictID' => 1352,
                'DistrictName' => '博兴县',
                'CityID' => 150,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            352 => 
            array (
                'DistrictID' => 1353,
                'DistrictName' => '邹平县',
                'CityID' => 150,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            353 => 
            array (
                'DistrictID' => 1354,
                'DistrictName' => '牡丹区',
                'CityID' => 151,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            354 => 
            array (
                'DistrictID' => 1355,
                'DistrictName' => '曹县',
                'CityID' => 151,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            355 => 
            array (
                'DistrictID' => 1356,
                'DistrictName' => '单县',
                'CityID' => 151,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            356 => 
            array (
                'DistrictID' => 1357,
                'DistrictName' => '成武县',
                'CityID' => 151,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            357 => 
            array (
                'DistrictID' => 1358,
                'DistrictName' => '巨野县',
                'CityID' => 151,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            358 => 
            array (
                'DistrictID' => 1359,
                'DistrictName' => '郓城县',
                'CityID' => 151,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            359 => 
            array (
                'DistrictID' => 1360,
                'DistrictName' => '鄄城县',
                'CityID' => 151,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            360 => 
            array (
                'DistrictID' => 1361,
                'DistrictName' => '定陶县',
                'CityID' => 151,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            361 => 
            array (
                'DistrictID' => 1362,
                'DistrictName' => '东明县',
                'CityID' => 151,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            362 => 
            array (
                'DistrictID' => 1363,
                'DistrictName' => '中原区',
                'CityID' => 152,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            363 => 
            array (
                'DistrictID' => 1364,
                'DistrictName' => '二七区',
                'CityID' => 152,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            364 => 
            array (
                'DistrictID' => 1365,
                'DistrictName' => '管城回族区',
                'CityID' => 152,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            365 => 
            array (
                'DistrictID' => 1366,
                'DistrictName' => '金水区',
                'CityID' => 152,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            366 => 
            array (
                'DistrictID' => 1367,
                'DistrictName' => '上街区',
                'CityID' => 152,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            367 => 
            array (
                'DistrictID' => 1368,
                'DistrictName' => '惠济区',
                'CityID' => 152,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            368 => 
            array (
                'DistrictID' => 1369,
                'DistrictName' => '中牟县',
                'CityID' => 152,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            369 => 
            array (
                'DistrictID' => 1370,
                'DistrictName' => '巩义市',
                'CityID' => 152,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            370 => 
            array (
                'DistrictID' => 1371,
                'DistrictName' => '荥阳市',
                'CityID' => 152,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            371 => 
            array (
                'DistrictID' => 1372,
                'DistrictName' => '新密市',
                'CityID' => 152,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            372 => 
            array (
                'DistrictID' => 1373,
                'DistrictName' => '新郑市',
                'CityID' => 152,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            373 => 
            array (
                'DistrictID' => 1374,
                'DistrictName' => '登封市',
                'CityID' => 152,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            374 => 
            array (
                'DistrictID' => 1375,
                'DistrictName' => '龙亭区',
                'CityID' => 153,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            375 => 
            array (
                'DistrictID' => 1376,
                'DistrictName' => '顺河回族区',
                'CityID' => 153,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            376 => 
            array (
                'DistrictID' => 1377,
                'DistrictName' => '鼓楼区',
                'CityID' => 153,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            377 => 
            array (
                'DistrictID' => 1378,
                'DistrictName' => '南关区',
                'CityID' => 153,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            378 => 
            array (
                'DistrictID' => 1379,
                'DistrictName' => '郊区',
                'CityID' => 153,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            379 => 
            array (
                'DistrictID' => 1380,
                'DistrictName' => '杞县',
                'CityID' => 153,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            380 => 
            array (
                'DistrictID' => 1381,
                'DistrictName' => '通许县',
                'CityID' => 153,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            381 => 
            array (
                'DistrictID' => 1382,
                'DistrictName' => '尉氏县',
                'CityID' => 153,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            382 => 
            array (
                'DistrictID' => 1383,
                'DistrictName' => '开封县',
                'CityID' => 153,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            383 => 
            array (
                'DistrictID' => 1384,
                'DistrictName' => '兰考县',
                'CityID' => 153,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            384 => 
            array (
                'DistrictID' => 1385,
                'DistrictName' => '老城区',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            385 => 
            array (
                'DistrictID' => 1386,
                'DistrictName' => '西工区',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            386 => 
            array (
                'DistrictID' => 1387,
                'DistrictName' => '廛河回族区',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            387 => 
            array (
                'DistrictID' => 1388,
                'DistrictName' => '涧西区',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            388 => 
            array (
                'DistrictID' => 1389,
                'DistrictName' => '吉利区',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            389 => 
            array (
                'DistrictID' => 1390,
                'DistrictName' => '洛龙区',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            390 => 
            array (
                'DistrictID' => 1391,
                'DistrictName' => '孟津县',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            391 => 
            array (
                'DistrictID' => 1392,
                'DistrictName' => '新安县',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            392 => 
            array (
                'DistrictID' => 1393,
                'DistrictName' => '栾川县',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            393 => 
            array (
                'DistrictID' => 1394,
                'DistrictName' => '嵩县',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            394 => 
            array (
                'DistrictID' => 1395,
                'DistrictName' => '汝阳县',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            395 => 
            array (
                'DistrictID' => 1396,
                'DistrictName' => '宜阳县',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            396 => 
            array (
                'DistrictID' => 1397,
                'DistrictName' => '洛宁县',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            397 => 
            array (
                'DistrictID' => 1398,
                'DistrictName' => '伊川县',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            398 => 
            array (
                'DistrictID' => 1399,
                'DistrictName' => '偃师市',
                'CityID' => 154,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            399 => 
            array (
                'DistrictID' => 1400,
                'DistrictName' => '新华区',
                'CityID' => 155,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            400 => 
            array (
                'DistrictID' => 1401,
                'DistrictName' => '卫东区',
                'CityID' => 155,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            401 => 
            array (
                'DistrictID' => 1402,
                'DistrictName' => '石龙区',
                'CityID' => 155,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            402 => 
            array (
                'DistrictID' => 1403,
                'DistrictName' => '湛河区',
                'CityID' => 155,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            403 => 
            array (
                'DistrictID' => 1404,
                'DistrictName' => '宝丰县',
                'CityID' => 155,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            404 => 
            array (
                'DistrictID' => 1405,
                'DistrictName' => '叶县',
                'CityID' => 155,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            405 => 
            array (
                'DistrictID' => 1406,
                'DistrictName' => '鲁山县',
                'CityID' => 155,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            406 => 
            array (
                'DistrictID' => 1407,
                'DistrictName' => '郏县',
                'CityID' => 155,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            407 => 
            array (
                'DistrictID' => 1408,
                'DistrictName' => '舞钢市',
                'CityID' => 155,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            408 => 
            array (
                'DistrictID' => 1409,
                'DistrictName' => '汝州市',
                'CityID' => 155,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            409 => 
            array (
                'DistrictID' => 1410,
                'DistrictName' => '文峰区',
                'CityID' => 156,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            410 => 
            array (
                'DistrictID' => 1411,
                'DistrictName' => '北关区',
                'CityID' => 156,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            411 => 
            array (
                'DistrictID' => 1412,
                'DistrictName' => '殷都区',
                'CityID' => 156,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            412 => 
            array (
                'DistrictID' => 1413,
                'DistrictName' => '龙安区',
                'CityID' => 156,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            413 => 
            array (
                'DistrictID' => 1414,
                'DistrictName' => '安阳县',
                'CityID' => 156,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            414 => 
            array (
                'DistrictID' => 1415,
                'DistrictName' => '汤阴县',
                'CityID' => 156,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            415 => 
            array (
                'DistrictID' => 1416,
                'DistrictName' => '滑县',
                'CityID' => 156,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            416 => 
            array (
                'DistrictID' => 1417,
                'DistrictName' => '内黄县',
                'CityID' => 156,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            417 => 
            array (
                'DistrictID' => 1418,
                'DistrictName' => '林州市',
                'CityID' => 156,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            418 => 
            array (
                'DistrictID' => 1419,
                'DistrictName' => '鹤山区',
                'CityID' => 157,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            419 => 
            array (
                'DistrictID' => 1420,
                'DistrictName' => '山城区',
                'CityID' => 157,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            420 => 
            array (
                'DistrictID' => 1421,
                'DistrictName' => '淇滨区',
                'CityID' => 157,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            421 => 
            array (
                'DistrictID' => 1422,
                'DistrictName' => '浚县',
                'CityID' => 157,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            422 => 
            array (
                'DistrictID' => 1423,
                'DistrictName' => '淇县',
                'CityID' => 157,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            423 => 
            array (
                'DistrictID' => 1424,
                'DistrictName' => '红旗区',
                'CityID' => 158,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            424 => 
            array (
                'DistrictID' => 1425,
                'DistrictName' => '卫滨区',
                'CityID' => 158,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            425 => 
            array (
                'DistrictID' => 1426,
                'DistrictName' => '凤泉区',
                'CityID' => 158,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            426 => 
            array (
                'DistrictID' => 1427,
                'DistrictName' => '牧野区',
                'CityID' => 158,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            427 => 
            array (
                'DistrictID' => 1428,
                'DistrictName' => '新乡县',
                'CityID' => 158,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            428 => 
            array (
                'DistrictID' => 1429,
                'DistrictName' => '获嘉县',
                'CityID' => 158,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            429 => 
            array (
                'DistrictID' => 1430,
                'DistrictName' => '原阳县',
                'CityID' => 158,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            430 => 
            array (
                'DistrictID' => 1431,
                'DistrictName' => '延津县',
                'CityID' => 158,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            431 => 
            array (
                'DistrictID' => 1432,
                'DistrictName' => '封丘县',
                'CityID' => 158,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            432 => 
            array (
                'DistrictID' => 1433,
                'DistrictName' => '长垣县',
                'CityID' => 158,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            433 => 
            array (
                'DistrictID' => 1434,
                'DistrictName' => '卫辉市',
                'CityID' => 158,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            434 => 
            array (
                'DistrictID' => 1435,
                'DistrictName' => '辉县市',
                'CityID' => 158,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            435 => 
            array (
                'DistrictID' => 1436,
                'DistrictName' => '解放区',
                'CityID' => 159,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            436 => 
            array (
                'DistrictID' => 1437,
                'DistrictName' => '中站区',
                'CityID' => 159,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            437 => 
            array (
                'DistrictID' => 1438,
                'DistrictName' => '马村区',
                'CityID' => 159,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            438 => 
            array (
                'DistrictID' => 1439,
                'DistrictName' => '山阳区',
                'CityID' => 159,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            439 => 
            array (
                'DistrictID' => 1440,
                'DistrictName' => '修武县',
                'CityID' => 159,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            440 => 
            array (
                'DistrictID' => 1441,
                'DistrictName' => '博爱县',
                'CityID' => 159,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            441 => 
            array (
                'DistrictID' => 1442,
                'DistrictName' => '武陟县',
                'CityID' => 159,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            442 => 
            array (
                'DistrictID' => 1443,
                'DistrictName' => '温县',
                'CityID' => 159,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            443 => 
            array (
                'DistrictID' => 1444,
                'DistrictName' => '济源市',
                'CityID' => 159,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            444 => 
            array (
                'DistrictID' => 1445,
                'DistrictName' => '沁阳市',
                'CityID' => 159,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            445 => 
            array (
                'DistrictID' => 1446,
                'DistrictName' => '孟州市',
                'CityID' => 159,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            446 => 
            array (
                'DistrictID' => 1447,
                'DistrictName' => '华龙区',
                'CityID' => 160,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            447 => 
            array (
                'DistrictID' => 1448,
                'DistrictName' => '清丰县',
                'CityID' => 160,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            448 => 
            array (
                'DistrictID' => 1449,
                'DistrictName' => '南乐县',
                'CityID' => 160,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            449 => 
            array (
                'DistrictID' => 1450,
                'DistrictName' => '范县',
                'CityID' => 160,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            450 => 
            array (
                'DistrictID' => 1451,
                'DistrictName' => '台前县',
                'CityID' => 160,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            451 => 
            array (
                'DistrictID' => 1452,
                'DistrictName' => '濮阳县',
                'CityID' => 160,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            452 => 
            array (
                'DistrictID' => 1453,
                'DistrictName' => '魏都区',
                'CityID' => 161,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            453 => 
            array (
                'DistrictID' => 1454,
                'DistrictName' => '许昌县',
                'CityID' => 161,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            454 => 
            array (
                'DistrictID' => 1455,
                'DistrictName' => '鄢陵县',
                'CityID' => 161,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            455 => 
            array (
                'DistrictID' => 1456,
                'DistrictName' => '襄城县',
                'CityID' => 161,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            456 => 
            array (
                'DistrictID' => 1457,
                'DistrictName' => '禹州市',
                'CityID' => 161,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            457 => 
            array (
                'DistrictID' => 1458,
                'DistrictName' => '长葛市',
                'CityID' => 161,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            458 => 
            array (
                'DistrictID' => 1459,
                'DistrictName' => '源汇区',
                'CityID' => 162,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            459 => 
            array (
                'DistrictID' => 1460,
                'DistrictName' => '郾城区',
                'CityID' => 162,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            460 => 
            array (
                'DistrictID' => 1461,
                'DistrictName' => '召陵区',
                'CityID' => 162,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            461 => 
            array (
                'DistrictID' => 1462,
                'DistrictName' => '舞阳县',
                'CityID' => 162,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            462 => 
            array (
                'DistrictID' => 1463,
                'DistrictName' => '临颍县',
                'CityID' => 162,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            463 => 
            array (
                'DistrictID' => 1464,
                'DistrictName' => '市辖区',
                'CityID' => 163,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            464 => 
            array (
                'DistrictID' => 1465,
                'DistrictName' => '湖滨区',
                'CityID' => 163,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            465 => 
            array (
                'DistrictID' => 1466,
                'DistrictName' => '渑池县',
                'CityID' => 163,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            466 => 
            array (
                'DistrictID' => 1467,
                'DistrictName' => '陕县',
                'CityID' => 163,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            467 => 
            array (
                'DistrictID' => 1468,
                'DistrictName' => '卢氏县',
                'CityID' => 163,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            468 => 
            array (
                'DistrictID' => 1469,
                'DistrictName' => '义马市',
                'CityID' => 163,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            469 => 
            array (
                'DistrictID' => 1470,
                'DistrictName' => '灵宝市',
                'CityID' => 163,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            470 => 
            array (
                'DistrictID' => 1471,
                'DistrictName' => '宛城区',
                'CityID' => 164,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            471 => 
            array (
                'DistrictID' => 1472,
                'DistrictName' => '卧龙区',
                'CityID' => 164,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            472 => 
            array (
                'DistrictID' => 1473,
                'DistrictName' => '南召县',
                'CityID' => 164,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            473 => 
            array (
                'DistrictID' => 1474,
                'DistrictName' => '方城县',
                'CityID' => 164,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            474 => 
            array (
                'DistrictID' => 1475,
                'DistrictName' => '西峡县',
                'CityID' => 164,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            475 => 
            array (
                'DistrictID' => 1476,
                'DistrictName' => '镇平县',
                'CityID' => 164,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            476 => 
            array (
                'DistrictID' => 1477,
                'DistrictName' => '内乡县',
                'CityID' => 164,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            477 => 
            array (
                'DistrictID' => 1478,
                'DistrictName' => '淅川县',
                'CityID' => 164,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            478 => 
            array (
                'DistrictID' => 1479,
                'DistrictName' => '社旗县',
                'CityID' => 164,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            479 => 
            array (
                'DistrictID' => 1480,
                'DistrictName' => '唐河县',
                'CityID' => 164,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            480 => 
            array (
                'DistrictID' => 1481,
                'DistrictName' => '新野县',
                'CityID' => 164,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            481 => 
            array (
                'DistrictID' => 1482,
                'DistrictName' => '桐柏县',
                'CityID' => 164,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            482 => 
            array (
                'DistrictID' => 1483,
                'DistrictName' => '邓州市',
                'CityID' => 164,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            483 => 
            array (
                'DistrictID' => 1484,
                'DistrictName' => '梁园区',
                'CityID' => 165,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            484 => 
            array (
                'DistrictID' => 1485,
                'DistrictName' => '睢阳区',
                'CityID' => 165,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            485 => 
            array (
                'DistrictID' => 1486,
                'DistrictName' => '民权县',
                'CityID' => 165,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            486 => 
            array (
                'DistrictID' => 1487,
                'DistrictName' => '睢县',
                'CityID' => 165,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            487 => 
            array (
                'DistrictID' => 1488,
                'DistrictName' => '宁陵县',
                'CityID' => 165,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            488 => 
            array (
                'DistrictID' => 1489,
                'DistrictName' => '柘城县',
                'CityID' => 165,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            489 => 
            array (
                'DistrictID' => 1490,
                'DistrictName' => '虞城县',
                'CityID' => 165,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            490 => 
            array (
                'DistrictID' => 1491,
                'DistrictName' => '夏邑县',
                'CityID' => 165,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            491 => 
            array (
                'DistrictID' => 1492,
                'DistrictName' => '永城市',
                'CityID' => 165,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            492 => 
            array (
                'DistrictID' => 1493,
                'DistrictName' => '浉河区',
                'CityID' => 166,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            493 => 
            array (
                'DistrictID' => 1494,
                'DistrictName' => '平桥区',
                'CityID' => 166,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            494 => 
            array (
                'DistrictID' => 1495,
                'DistrictName' => '罗山县',
                'CityID' => 166,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            495 => 
            array (
                'DistrictID' => 1496,
                'DistrictName' => '光山县',
                'CityID' => 166,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            496 => 
            array (
                'DistrictID' => 1497,
                'DistrictName' => '新县',
                'CityID' => 166,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            497 => 
            array (
                'DistrictID' => 1498,
                'DistrictName' => '商城县',
                'CityID' => 166,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            498 => 
            array (
                'DistrictID' => 1499,
                'DistrictName' => '固始县',
                'CityID' => 166,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            499 => 
            array (
                'DistrictID' => 1500,
                'DistrictName' => '潢川县',
                'CityID' => 166,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
        ));
        \DB::table('district')->insert(array (
            0 => 
            array (
                'DistrictID' => 1501,
                'DistrictName' => '淮滨县',
                'CityID' => 166,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            1 => 
            array (
                'DistrictID' => 1502,
                'DistrictName' => '息县',
                'CityID' => 166,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            2 => 
            array (
                'DistrictID' => 1503,
                'DistrictName' => '川汇区',
                'CityID' => 167,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            3 => 
            array (
                'DistrictID' => 1504,
                'DistrictName' => '扶沟县',
                'CityID' => 167,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            4 => 
            array (
                'DistrictID' => 1505,
                'DistrictName' => '西华县',
                'CityID' => 167,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            5 => 
            array (
                'DistrictID' => 1506,
                'DistrictName' => '商水县',
                'CityID' => 167,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            6 => 
            array (
                'DistrictID' => 1507,
                'DistrictName' => '沈丘县',
                'CityID' => 167,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            7 => 
            array (
                'DistrictID' => 1508,
                'DistrictName' => '郸城县',
                'CityID' => 167,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            8 => 
            array (
                'DistrictID' => 1509,
                'DistrictName' => '淮阳县',
                'CityID' => 167,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            9 => 
            array (
                'DistrictID' => 1510,
                'DistrictName' => '太康县',
                'CityID' => 167,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            10 => 
            array (
                'DistrictID' => 1511,
                'DistrictName' => '鹿邑县',
                'CityID' => 167,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            11 => 
            array (
                'DistrictID' => 1512,
                'DistrictName' => '项城市',
                'CityID' => 167,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            12 => 
            array (
                'DistrictID' => 1513,
                'DistrictName' => '驿城区',
                'CityID' => 168,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            13 => 
            array (
                'DistrictID' => 1514,
                'DistrictName' => '西平县',
                'CityID' => 168,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            14 => 
            array (
                'DistrictID' => 1515,
                'DistrictName' => '上蔡县',
                'CityID' => 168,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            15 => 
            array (
                'DistrictID' => 1516,
                'DistrictName' => '平舆县',
                'CityID' => 168,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            16 => 
            array (
                'DistrictID' => 1517,
                'DistrictName' => '正阳县',
                'CityID' => 168,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            17 => 
            array (
                'DistrictID' => 1518,
                'DistrictName' => '确山县',
                'CityID' => 168,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            18 => 
            array (
                'DistrictID' => 1519,
                'DistrictName' => '泌阳县',
                'CityID' => 168,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            19 => 
            array (
                'DistrictID' => 1520,
                'DistrictName' => '汝南县',
                'CityID' => 168,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            20 => 
            array (
                'DistrictID' => 1521,
                'DistrictName' => '遂平县',
                'CityID' => 168,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            21 => 
            array (
                'DistrictID' => 1522,
                'DistrictName' => '新蔡县',
                'CityID' => 168,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            22 => 
            array (
                'DistrictID' => 1523,
                'DistrictName' => '江岸区',
                'CityID' => 169,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            23 => 
            array (
                'DistrictID' => 1524,
                'DistrictName' => '江汉区',
                'CityID' => 169,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            24 => 
            array (
                'DistrictID' => 1525,
                'DistrictName' => '硚口区',
                'CityID' => 169,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            25 => 
            array (
                'DistrictID' => 1526,
                'DistrictName' => '汉阳区',
                'CityID' => 169,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            26 => 
            array (
                'DistrictID' => 1527,
                'DistrictName' => '武昌区',
                'CityID' => 169,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            27 => 
            array (
                'DistrictID' => 1528,
                'DistrictName' => '青山区',
                'CityID' => 169,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            28 => 
            array (
                'DistrictID' => 1529,
                'DistrictName' => '洪山区',
                'CityID' => 169,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            29 => 
            array (
                'DistrictID' => 1530,
                'DistrictName' => '东西湖区',
                'CityID' => 169,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            30 => 
            array (
                'DistrictID' => 1531,
                'DistrictName' => '汉南区',
                'CityID' => 169,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            31 => 
            array (
                'DistrictID' => 1532,
                'DistrictName' => '蔡甸区',
                'CityID' => 169,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            32 => 
            array (
                'DistrictID' => 1533,
                'DistrictName' => '江夏区',
                'CityID' => 169,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            33 => 
            array (
                'DistrictID' => 1534,
                'DistrictName' => '黄陂区',
                'CityID' => 169,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            34 => 
            array (
                'DistrictID' => 1535,
                'DistrictName' => '新洲区',
                'CityID' => 169,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            35 => 
            array (
                'DistrictID' => 1536,
                'DistrictName' => '黄石港区',
                'CityID' => 170,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            36 => 
            array (
                'DistrictID' => 1537,
                'DistrictName' => '西塞山区',
                'CityID' => 170,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            37 => 
            array (
                'DistrictID' => 1538,
                'DistrictName' => '下陆区',
                'CityID' => 170,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            38 => 
            array (
                'DistrictID' => 1539,
                'DistrictName' => '铁山区',
                'CityID' => 170,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            39 => 
            array (
                'DistrictID' => 1540,
                'DistrictName' => '阳新县',
                'CityID' => 170,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            40 => 
            array (
                'DistrictID' => 1541,
                'DistrictName' => '大冶市',
                'CityID' => 170,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            41 => 
            array (
                'DistrictID' => 1542,
                'DistrictName' => '茅箭区',
                'CityID' => 171,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            42 => 
            array (
                'DistrictID' => 1543,
                'DistrictName' => '张湾区',
                'CityID' => 171,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            43 => 
            array (
                'DistrictID' => 1544,
                'DistrictName' => '郧县',
                'CityID' => 171,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            44 => 
            array (
                'DistrictID' => 1545,
                'DistrictName' => '郧西县',
                'CityID' => 171,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            45 => 
            array (
                'DistrictID' => 1546,
                'DistrictName' => '竹山县',
                'CityID' => 171,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            46 => 
            array (
                'DistrictID' => 1547,
                'DistrictName' => '竹溪县',
                'CityID' => 171,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            47 => 
            array (
                'DistrictID' => 1548,
                'DistrictName' => '房县',
                'CityID' => 171,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            48 => 
            array (
                'DistrictID' => 1549,
                'DistrictName' => '丹江口市',
                'CityID' => 171,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            49 => 
            array (
                'DistrictID' => 1550,
                'DistrictName' => '西陵区',
                'CityID' => 172,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            50 => 
            array (
                'DistrictID' => 1551,
                'DistrictName' => '伍家岗区',
                'CityID' => 172,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            51 => 
            array (
                'DistrictID' => 1552,
                'DistrictName' => '点军区',
                'CityID' => 172,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            52 => 
            array (
                'DistrictID' => 1553,
                'DistrictName' => '猇亭区',
                'CityID' => 172,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            53 => 
            array (
                'DistrictID' => 1554,
                'DistrictName' => '夷陵区',
                'CityID' => 172,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            54 => 
            array (
                'DistrictID' => 1555,
                'DistrictName' => '远安县',
                'CityID' => 172,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            55 => 
            array (
                'DistrictID' => 1556,
                'DistrictName' => '兴山县',
                'CityID' => 172,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            56 => 
            array (
                'DistrictID' => 1557,
                'DistrictName' => '秭归县',
                'CityID' => 172,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            57 => 
            array (
                'DistrictID' => 1558,
                'DistrictName' => '长阳土家族自治县',
                'CityID' => 172,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            58 => 
            array (
                'DistrictID' => 1559,
                'DistrictName' => '五峰土家族自治县',
                'CityID' => 172,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            59 => 
            array (
                'DistrictID' => 1560,
                'DistrictName' => '宜都市',
                'CityID' => 172,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            60 => 
            array (
                'DistrictID' => 1561,
                'DistrictName' => '当阳市',
                'CityID' => 172,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            61 => 
            array (
                'DistrictID' => 1562,
                'DistrictName' => '枝江市',
                'CityID' => 172,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            62 => 
            array (
                'DistrictID' => 1563,
                'DistrictName' => '襄城区',
                'CityID' => 173,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            63 => 
            array (
                'DistrictID' => 1564,
                'DistrictName' => '樊城区',
                'CityID' => 173,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            64 => 
            array (
                'DistrictID' => 1565,
                'DistrictName' => '襄阳区',
                'CityID' => 173,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            65 => 
            array (
                'DistrictID' => 1566,
                'DistrictName' => '南漳县',
                'CityID' => 173,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            66 => 
            array (
                'DistrictID' => 1567,
                'DistrictName' => '谷城县',
                'CityID' => 173,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            67 => 
            array (
                'DistrictID' => 1568,
                'DistrictName' => '保康县',
                'CityID' => 173,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            68 => 
            array (
                'DistrictID' => 1569,
                'DistrictName' => '老河口市',
                'CityID' => 173,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            69 => 
            array (
                'DistrictID' => 1570,
                'DistrictName' => '枣阳市',
                'CityID' => 173,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            70 => 
            array (
                'DistrictID' => 1571,
                'DistrictName' => '宜城市',
                'CityID' => 173,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            71 => 
            array (
                'DistrictID' => 1572,
                'DistrictName' => '梁子湖区',
                'CityID' => 174,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            72 => 
            array (
                'DistrictID' => 1573,
                'DistrictName' => '华容区',
                'CityID' => 174,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            73 => 
            array (
                'DistrictID' => 1574,
                'DistrictName' => '鄂城区',
                'CityID' => 174,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            74 => 
            array (
                'DistrictID' => 1575,
                'DistrictName' => '东宝区',
                'CityID' => 175,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            75 => 
            array (
                'DistrictID' => 1576,
                'DistrictName' => '掇刀区',
                'CityID' => 175,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            76 => 
            array (
                'DistrictID' => 1577,
                'DistrictName' => '京山县',
                'CityID' => 175,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            77 => 
            array (
                'DistrictID' => 1578,
                'DistrictName' => '沙洋县',
                'CityID' => 175,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            78 => 
            array (
                'DistrictID' => 1579,
                'DistrictName' => '钟祥市',
                'CityID' => 175,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            79 => 
            array (
                'DistrictID' => 1580,
                'DistrictName' => '孝南区',
                'CityID' => 176,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            80 => 
            array (
                'DistrictID' => 1581,
                'DistrictName' => '孝昌县',
                'CityID' => 176,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            81 => 
            array (
                'DistrictID' => 1582,
                'DistrictName' => '大悟县',
                'CityID' => 176,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            82 => 
            array (
                'DistrictID' => 1583,
                'DistrictName' => '云梦县',
                'CityID' => 176,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            83 => 
            array (
                'DistrictID' => 1584,
                'DistrictName' => '应城市',
                'CityID' => 176,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            84 => 
            array (
                'DistrictID' => 1585,
                'DistrictName' => '安陆市',
                'CityID' => 176,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            85 => 
            array (
                'DistrictID' => 1586,
                'DistrictName' => '汉川市',
                'CityID' => 176,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            86 => 
            array (
                'DistrictID' => 1587,
                'DistrictName' => '沙市区',
                'CityID' => 177,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            87 => 
            array (
                'DistrictID' => 1588,
                'DistrictName' => '荆州区',
                'CityID' => 177,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            88 => 
            array (
                'DistrictID' => 1589,
                'DistrictName' => '公安县',
                'CityID' => 177,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            89 => 
            array (
                'DistrictID' => 1590,
                'DistrictName' => '监利县',
                'CityID' => 177,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            90 => 
            array (
                'DistrictID' => 1591,
                'DistrictName' => '江陵县',
                'CityID' => 177,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            91 => 
            array (
                'DistrictID' => 1592,
                'DistrictName' => '石首市',
                'CityID' => 177,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            92 => 
            array (
                'DistrictID' => 1593,
                'DistrictName' => '洪湖市',
                'CityID' => 177,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            93 => 
            array (
                'DistrictID' => 1594,
                'DistrictName' => '松滋市',
                'CityID' => 177,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            94 => 
            array (
                'DistrictID' => 1595,
                'DistrictName' => '黄州区',
                'CityID' => 178,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            95 => 
            array (
                'DistrictID' => 1596,
                'DistrictName' => '团风县',
                'CityID' => 178,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            96 => 
            array (
                'DistrictID' => 1597,
                'DistrictName' => '红安县',
                'CityID' => 178,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            97 => 
            array (
                'DistrictID' => 1598,
                'DistrictName' => '罗田县',
                'CityID' => 178,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            98 => 
            array (
                'DistrictID' => 1599,
                'DistrictName' => '英山县',
                'CityID' => 178,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            99 => 
            array (
                'DistrictID' => 1600,
                'DistrictName' => '浠水县',
                'CityID' => 178,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            100 => 
            array (
                'DistrictID' => 1601,
                'DistrictName' => '蕲春县',
                'CityID' => 178,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            101 => 
            array (
                'DistrictID' => 1602,
                'DistrictName' => '黄梅县',
                'CityID' => 178,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            102 => 
            array (
                'DistrictID' => 1603,
                'DistrictName' => '麻城市',
                'CityID' => 178,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            103 => 
            array (
                'DistrictID' => 1604,
                'DistrictName' => '武穴市',
                'CityID' => 178,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            104 => 
            array (
                'DistrictID' => 1605,
                'DistrictName' => '咸安区',
                'CityID' => 179,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            105 => 
            array (
                'DistrictID' => 1606,
                'DistrictName' => '嘉鱼县',
                'CityID' => 179,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            106 => 
            array (
                'DistrictID' => 1607,
                'DistrictName' => '通城县',
                'CityID' => 179,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            107 => 
            array (
                'DistrictID' => 1608,
                'DistrictName' => '崇阳县',
                'CityID' => 179,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            108 => 
            array (
                'DistrictID' => 1609,
                'DistrictName' => '通山县',
                'CityID' => 179,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            109 => 
            array (
                'DistrictID' => 1610,
                'DistrictName' => '赤壁市',
                'CityID' => 179,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            110 => 
            array (
                'DistrictID' => 1611,
                'DistrictName' => '曾都区',
                'CityID' => 180,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            111 => 
            array (
                'DistrictID' => 1612,
                'DistrictName' => '广水市',
                'CityID' => 180,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            112 => 
            array (
                'DistrictID' => 1613,
                'DistrictName' => '恩施市',
                'CityID' => 181,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            113 => 
            array (
                'DistrictID' => 1614,
                'DistrictName' => '利川市',
                'CityID' => 181,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            114 => 
            array (
                'DistrictID' => 1615,
                'DistrictName' => '建始县',
                'CityID' => 181,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            115 => 
            array (
                'DistrictID' => 1616,
                'DistrictName' => '巴东县',
                'CityID' => 181,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            116 => 
            array (
                'DistrictID' => 1617,
                'DistrictName' => '宣恩县',
                'CityID' => 181,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            117 => 
            array (
                'DistrictID' => 1618,
                'DistrictName' => '咸丰县',
                'CityID' => 181,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            118 => 
            array (
                'DistrictID' => 1619,
                'DistrictName' => '来凤县',
                'CityID' => 181,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            119 => 
            array (
                'DistrictID' => 1620,
                'DistrictName' => '鹤峰县',
                'CityID' => 181,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            120 => 
            array (
                'DistrictID' => 1621,
                'DistrictName' => '仙桃市',
                'CityID' => 182,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            121 => 
            array (
                'DistrictID' => 1622,
                'DistrictName' => '潜江市',
                'CityID' => 182,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            122 => 
            array (
                'DistrictID' => 1623,
                'DistrictName' => '天门市',
                'CityID' => 182,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            123 => 
            array (
                'DistrictID' => 1624,
                'DistrictName' => '神农架林区',
                'CityID' => 182,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            124 => 
            array (
                'DistrictID' => 1625,
                'DistrictName' => '芙蓉区',
                'CityID' => 183,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            125 => 
            array (
                'DistrictID' => 1626,
                'DistrictName' => '天心区',
                'CityID' => 183,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            126 => 
            array (
                'DistrictID' => 1627,
                'DistrictName' => '岳麓区',
                'CityID' => 183,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            127 => 
            array (
                'DistrictID' => 1628,
                'DistrictName' => '开福区',
                'CityID' => 183,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            128 => 
            array (
                'DistrictID' => 1629,
                'DistrictName' => '雨花区',
                'CityID' => 183,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            129 => 
            array (
                'DistrictID' => 1630,
                'DistrictName' => '长沙县',
                'CityID' => 183,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            130 => 
            array (
                'DistrictID' => 1631,
                'DistrictName' => '望城县',
                'CityID' => 183,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            131 => 
            array (
                'DistrictID' => 1632,
                'DistrictName' => '宁乡县',
                'CityID' => 183,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            132 => 
            array (
                'DistrictID' => 1633,
                'DistrictName' => '浏阳市',
                'CityID' => 183,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            133 => 
            array (
                'DistrictID' => 1634,
                'DistrictName' => '荷塘区',
                'CityID' => 184,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            134 => 
            array (
                'DistrictID' => 1635,
                'DistrictName' => '芦淞区',
                'CityID' => 184,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            135 => 
            array (
                'DistrictID' => 1636,
                'DistrictName' => '石峰区',
                'CityID' => 184,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            136 => 
            array (
                'DistrictID' => 1637,
                'DistrictName' => '天元区',
                'CityID' => 184,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            137 => 
            array (
                'DistrictID' => 1638,
                'DistrictName' => '株洲县',
                'CityID' => 184,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            138 => 
            array (
                'DistrictID' => 1639,
                'DistrictName' => '攸县',
                'CityID' => 184,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            139 => 
            array (
                'DistrictID' => 1640,
                'DistrictName' => '茶陵县',
                'CityID' => 184,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            140 => 
            array (
                'DistrictID' => 1641,
                'DistrictName' => '炎陵县',
                'CityID' => 184,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            141 => 
            array (
                'DistrictID' => 1642,
                'DistrictName' => '醴陵市',
                'CityID' => 184,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            142 => 
            array (
                'DistrictID' => 1643,
                'DistrictName' => '雨湖区',
                'CityID' => 185,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            143 => 
            array (
                'DistrictID' => 1644,
                'DistrictName' => '岳塘区',
                'CityID' => 185,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            144 => 
            array (
                'DistrictID' => 1645,
                'DistrictName' => '湘潭县',
                'CityID' => 185,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            145 => 
            array (
                'DistrictID' => 1646,
                'DistrictName' => '湘乡市',
                'CityID' => 185,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            146 => 
            array (
                'DistrictID' => 1647,
                'DistrictName' => '韶山市',
                'CityID' => 185,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            147 => 
            array (
                'DistrictID' => 1648,
                'DistrictName' => '珠晖区',
                'CityID' => 186,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            148 => 
            array (
                'DistrictID' => 1649,
                'DistrictName' => '雁峰区',
                'CityID' => 186,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            149 => 
            array (
                'DistrictID' => 1650,
                'DistrictName' => '石鼓区',
                'CityID' => 186,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            150 => 
            array (
                'DistrictID' => 1651,
                'DistrictName' => '蒸湘区',
                'CityID' => 186,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            151 => 
            array (
                'DistrictID' => 1652,
                'DistrictName' => '南岳区',
                'CityID' => 186,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            152 => 
            array (
                'DistrictID' => 1653,
                'DistrictName' => '衡阳县',
                'CityID' => 186,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            153 => 
            array (
                'DistrictID' => 1654,
                'DistrictName' => '衡南县',
                'CityID' => 186,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            154 => 
            array (
                'DistrictID' => 1655,
                'DistrictName' => '衡山县',
                'CityID' => 186,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            155 => 
            array (
                'DistrictID' => 1656,
                'DistrictName' => '衡东县',
                'CityID' => 186,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            156 => 
            array (
                'DistrictID' => 1657,
                'DistrictName' => '祁东县',
                'CityID' => 186,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            157 => 
            array (
                'DistrictID' => 1658,
                'DistrictName' => '耒阳市',
                'CityID' => 186,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            158 => 
            array (
                'DistrictID' => 1659,
                'DistrictName' => '常宁市',
                'CityID' => 186,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            159 => 
            array (
                'DistrictID' => 1660,
                'DistrictName' => '双清区',
                'CityID' => 187,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            160 => 
            array (
                'DistrictID' => 1661,
                'DistrictName' => '大祥区',
                'CityID' => 187,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            161 => 
            array (
                'DistrictID' => 1662,
                'DistrictName' => '北塔区',
                'CityID' => 187,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            162 => 
            array (
                'DistrictID' => 1663,
                'DistrictName' => '邵东县',
                'CityID' => 187,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            163 => 
            array (
                'DistrictID' => 1664,
                'DistrictName' => '新邵县',
                'CityID' => 187,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            164 => 
            array (
                'DistrictID' => 1665,
                'DistrictName' => '邵阳县',
                'CityID' => 187,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            165 => 
            array (
                'DistrictID' => 1666,
                'DistrictName' => '隆回县',
                'CityID' => 187,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            166 => 
            array (
                'DistrictID' => 1667,
                'DistrictName' => '洞口县',
                'CityID' => 187,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            167 => 
            array (
                'DistrictID' => 1668,
                'DistrictName' => '绥宁县',
                'CityID' => 187,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            168 => 
            array (
                'DistrictID' => 1669,
                'DistrictName' => '新宁县',
                'CityID' => 187,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            169 => 
            array (
                'DistrictID' => 1670,
                'DistrictName' => '城步苗族自治县',
                'CityID' => 187,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            170 => 
            array (
                'DistrictID' => 1671,
                'DistrictName' => '武冈市',
                'CityID' => 187,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            171 => 
            array (
                'DistrictID' => 1672,
                'DistrictName' => '岳阳楼区',
                'CityID' => 188,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            172 => 
            array (
                'DistrictID' => 1673,
                'DistrictName' => '云溪区',
                'CityID' => 188,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            173 => 
            array (
                'DistrictID' => 1674,
                'DistrictName' => '君山区',
                'CityID' => 188,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            174 => 
            array (
                'DistrictID' => 1675,
                'DistrictName' => '岳阳县',
                'CityID' => 188,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            175 => 
            array (
                'DistrictID' => 1676,
                'DistrictName' => '华容县',
                'CityID' => 188,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            176 => 
            array (
                'DistrictID' => 1677,
                'DistrictName' => '湘阴县',
                'CityID' => 188,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            177 => 
            array (
                'DistrictID' => 1678,
                'DistrictName' => '平江县',
                'CityID' => 188,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            178 => 
            array (
                'DistrictID' => 1679,
                'DistrictName' => '汨罗市',
                'CityID' => 188,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            179 => 
            array (
                'DistrictID' => 1680,
                'DistrictName' => '临湘市',
                'CityID' => 188,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            180 => 
            array (
                'DistrictID' => 1681,
                'DistrictName' => '武陵区',
                'CityID' => 189,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            181 => 
            array (
                'DistrictID' => 1682,
                'DistrictName' => '鼎城区',
                'CityID' => 189,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            182 => 
            array (
                'DistrictID' => 1683,
                'DistrictName' => '安乡县',
                'CityID' => 189,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            183 => 
            array (
                'DistrictID' => 1684,
                'DistrictName' => '汉寿县',
                'CityID' => 189,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            184 => 
            array (
                'DistrictID' => 1685,
                'DistrictName' => '澧县',
                'CityID' => 189,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            185 => 
            array (
                'DistrictID' => 1686,
                'DistrictName' => '临澧县',
                'CityID' => 189,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            186 => 
            array (
                'DistrictID' => 1687,
                'DistrictName' => '桃源县',
                'CityID' => 189,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            187 => 
            array (
                'DistrictID' => 1688,
                'DistrictName' => '石门县',
                'CityID' => 189,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            188 => 
            array (
                'DistrictID' => 1689,
                'DistrictName' => '津市市',
                'CityID' => 189,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            189 => 
            array (
                'DistrictID' => 1690,
                'DistrictName' => '永定区',
                'CityID' => 190,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            190 => 
            array (
                'DistrictID' => 1691,
                'DistrictName' => '武陵源区',
                'CityID' => 190,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            191 => 
            array (
                'DistrictID' => 1692,
                'DistrictName' => '慈利县',
                'CityID' => 190,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            192 => 
            array (
                'DistrictID' => 1693,
                'DistrictName' => '桑植县',
                'CityID' => 190,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            193 => 
            array (
                'DistrictID' => 1694,
                'DistrictName' => '资阳区',
                'CityID' => 191,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            194 => 
            array (
                'DistrictID' => 1695,
                'DistrictName' => '赫山区',
                'CityID' => 191,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            195 => 
            array (
                'DistrictID' => 1696,
                'DistrictName' => '南县',
                'CityID' => 191,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            196 => 
            array (
                'DistrictID' => 1697,
                'DistrictName' => '桃江县',
                'CityID' => 191,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            197 => 
            array (
                'DistrictID' => 1698,
                'DistrictName' => '安化县',
                'CityID' => 191,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            198 => 
            array (
                'DistrictID' => 1699,
                'DistrictName' => '沅江市',
                'CityID' => 191,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            199 => 
            array (
                'DistrictID' => 1700,
                'DistrictName' => '北湖区',
                'CityID' => 192,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            200 => 
            array (
                'DistrictID' => 1701,
                'DistrictName' => '苏仙区',
                'CityID' => 192,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            201 => 
            array (
                'DistrictID' => 1702,
                'DistrictName' => '桂阳县',
                'CityID' => 192,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            202 => 
            array (
                'DistrictID' => 1703,
                'DistrictName' => '宜章县',
                'CityID' => 192,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            203 => 
            array (
                'DistrictID' => 1704,
                'DistrictName' => '永兴县',
                'CityID' => 192,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            204 => 
            array (
                'DistrictID' => 1705,
                'DistrictName' => '嘉禾县',
                'CityID' => 192,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            205 => 
            array (
                'DistrictID' => 1706,
                'DistrictName' => '临武县',
                'CityID' => 192,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            206 => 
            array (
                'DistrictID' => 1707,
                'DistrictName' => '汝城县',
                'CityID' => 192,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            207 => 
            array (
                'DistrictID' => 1708,
                'DistrictName' => '桂东县',
                'CityID' => 192,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            208 => 
            array (
                'DistrictID' => 1709,
                'DistrictName' => '安仁县',
                'CityID' => 192,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            209 => 
            array (
                'DistrictID' => 1710,
                'DistrictName' => '资兴市',
                'CityID' => 192,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            210 => 
            array (
                'DistrictID' => 1711,
                'DistrictName' => '芝山区',
                'CityID' => 193,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            211 => 
            array (
                'DistrictID' => 1712,
                'DistrictName' => '冷水滩区',
                'CityID' => 193,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            212 => 
            array (
                'DistrictID' => 1713,
                'DistrictName' => '祁阳县',
                'CityID' => 193,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            213 => 
            array (
                'DistrictID' => 1714,
                'DistrictName' => '东安县',
                'CityID' => 193,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            214 => 
            array (
                'DistrictID' => 1715,
                'DistrictName' => '双牌县',
                'CityID' => 193,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            215 => 
            array (
                'DistrictID' => 1716,
                'DistrictName' => '道县',
                'CityID' => 193,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            216 => 
            array (
                'DistrictID' => 1717,
                'DistrictName' => '江永县',
                'CityID' => 193,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            217 => 
            array (
                'DistrictID' => 1718,
                'DistrictName' => '宁远县',
                'CityID' => 193,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            218 => 
            array (
                'DistrictID' => 1719,
                'DistrictName' => '蓝山县',
                'CityID' => 193,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            219 => 
            array (
                'DistrictID' => 1720,
                'DistrictName' => '新田县',
                'CityID' => 193,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            220 => 
            array (
                'DistrictID' => 1721,
                'DistrictName' => '江华瑶族自治县',
                'CityID' => 193,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            221 => 
            array (
                'DistrictID' => 1722,
                'DistrictName' => '鹤城区',
                'CityID' => 194,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            222 => 
            array (
                'DistrictID' => 1723,
                'DistrictName' => '中方县',
                'CityID' => 194,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            223 => 
            array (
                'DistrictID' => 1724,
                'DistrictName' => '沅陵县',
                'CityID' => 194,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            224 => 
            array (
                'DistrictID' => 1725,
                'DistrictName' => '辰溪县',
                'CityID' => 194,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            225 => 
            array (
                'DistrictID' => 1726,
                'DistrictName' => '溆浦县',
                'CityID' => 194,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            226 => 
            array (
                'DistrictID' => 1727,
                'DistrictName' => '会同县',
                'CityID' => 194,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            227 => 
            array (
                'DistrictID' => 1728,
                'DistrictName' => '麻阳苗族自治县',
                'CityID' => 194,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            228 => 
            array (
                'DistrictID' => 1729,
                'DistrictName' => '新晃侗族自治县',
                'CityID' => 194,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            229 => 
            array (
                'DistrictID' => 1730,
                'DistrictName' => '芷江侗族自治县',
                'CityID' => 194,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            230 => 
            array (
                'DistrictID' => 1731,
                'DistrictName' => '靖州苗族侗族自治县',
                'CityID' => 194,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            231 => 
            array (
                'DistrictID' => 1732,
                'DistrictName' => '通道侗族自治县',
                'CityID' => 194,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            232 => 
            array (
                'DistrictID' => 1733,
                'DistrictName' => '洪江市',
                'CityID' => 194,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            233 => 
            array (
                'DistrictID' => 1734,
                'DistrictName' => '娄星区',
                'CityID' => 195,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            234 => 
            array (
                'DistrictID' => 1735,
                'DistrictName' => '双峰县',
                'CityID' => 195,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            235 => 
            array (
                'DistrictID' => 1736,
                'DistrictName' => '新化县',
                'CityID' => 195,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            236 => 
            array (
                'DistrictID' => 1737,
                'DistrictName' => '冷水江市',
                'CityID' => 195,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            237 => 
            array (
                'DistrictID' => 1738,
                'DistrictName' => '涟源市',
                'CityID' => 195,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            238 => 
            array (
                'DistrictID' => 1739,
                'DistrictName' => '吉首市',
                'CityID' => 196,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            239 => 
            array (
                'DistrictID' => 1740,
                'DistrictName' => '泸溪县',
                'CityID' => 196,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            240 => 
            array (
                'DistrictID' => 1741,
                'DistrictName' => '凤凰县',
                'CityID' => 196,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            241 => 
            array (
                'DistrictID' => 1742,
                'DistrictName' => '花垣县',
                'CityID' => 196,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            242 => 
            array (
                'DistrictID' => 1743,
                'DistrictName' => '保靖县',
                'CityID' => 196,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            243 => 
            array (
                'DistrictID' => 1744,
                'DistrictName' => '古丈县',
                'CityID' => 196,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            244 => 
            array (
                'DistrictID' => 1745,
                'DistrictName' => '永顺县',
                'CityID' => 196,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            245 => 
            array (
                'DistrictID' => 1746,
                'DistrictName' => '龙山县',
                'CityID' => 196,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            246 => 
            array (
                'DistrictID' => 1747,
                'DistrictName' => '东山区',
                'CityID' => 197,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            247 => 
            array (
                'DistrictID' => 1748,
                'DistrictName' => '荔湾区',
                'CityID' => 197,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            248 => 
            array (
                'DistrictID' => 1749,
                'DistrictName' => '越秀区',
                'CityID' => 197,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            249 => 
            array (
                'DistrictID' => 1750,
                'DistrictName' => '海珠区',
                'CityID' => 197,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            250 => 
            array (
                'DistrictID' => 1751,
                'DistrictName' => '天河区',
                'CityID' => 197,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            251 => 
            array (
                'DistrictID' => 1752,
                'DistrictName' => '芳村区',
                'CityID' => 197,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            252 => 
            array (
                'DistrictID' => 1753,
                'DistrictName' => '白云区',
                'CityID' => 197,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            253 => 
            array (
                'DistrictID' => 1754,
                'DistrictName' => '黄埔区',
                'CityID' => 197,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            254 => 
            array (
                'DistrictID' => 1755,
                'DistrictName' => '番禺区',
                'CityID' => 197,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            255 => 
            array (
                'DistrictID' => 1756,
                'DistrictName' => '花都区',
                'CityID' => 197,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            256 => 
            array (
                'DistrictID' => 1757,
                'DistrictName' => '增城市',
                'CityID' => 197,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            257 => 
            array (
                'DistrictID' => 1758,
                'DistrictName' => '从化市',
                'CityID' => 197,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            258 => 
            array (
                'DistrictID' => 1759,
                'DistrictName' => '武江区',
                'CityID' => 198,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            259 => 
            array (
                'DistrictID' => 1760,
                'DistrictName' => '浈江区',
                'CityID' => 198,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            260 => 
            array (
                'DistrictID' => 1761,
                'DistrictName' => '曲江区',
                'CityID' => 198,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            261 => 
            array (
                'DistrictID' => 1762,
                'DistrictName' => '始兴县',
                'CityID' => 198,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            262 => 
            array (
                'DistrictID' => 1763,
                'DistrictName' => '仁化县',
                'CityID' => 198,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            263 => 
            array (
                'DistrictID' => 1764,
                'DistrictName' => '翁源县',
                'CityID' => 198,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            264 => 
            array (
                'DistrictID' => 1765,
                'DistrictName' => '乳源瑶族自治县',
                'CityID' => 198,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            265 => 
            array (
                'DistrictID' => 1766,
                'DistrictName' => '新丰县',
                'CityID' => 198,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            266 => 
            array (
                'DistrictID' => 1767,
                'DistrictName' => '乐昌市',
                'CityID' => 198,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            267 => 
            array (
                'DistrictID' => 1768,
                'DistrictName' => '南雄市',
                'CityID' => 198,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            268 => 
            array (
                'DistrictID' => 1769,
                'DistrictName' => '罗湖区',
                'CityID' => 199,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            269 => 
            array (
                'DistrictID' => 1770,
                'DistrictName' => '福田区',
                'CityID' => 199,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            270 => 
            array (
                'DistrictID' => 1771,
                'DistrictName' => '南山区',
                'CityID' => 199,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            271 => 
            array (
                'DistrictID' => 1772,
                'DistrictName' => '宝安区',
                'CityID' => 199,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            272 => 
            array (
                'DistrictID' => 1773,
                'DistrictName' => '龙岗区',
                'CityID' => 199,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            273 => 
            array (
                'DistrictID' => 1774,
                'DistrictName' => '盐田区',
                'CityID' => 199,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            274 => 
            array (
                'DistrictID' => 1775,
                'DistrictName' => '香洲区',
                'CityID' => 200,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            275 => 
            array (
                'DistrictID' => 1776,
                'DistrictName' => '斗门区',
                'CityID' => 200,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            276 => 
            array (
                'DistrictID' => 1777,
                'DistrictName' => '金湾区',
                'CityID' => 200,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            277 => 
            array (
                'DistrictID' => 1778,
                'DistrictName' => '龙湖区',
                'CityID' => 201,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            278 => 
            array (
                'DistrictID' => 1779,
                'DistrictName' => '金平区',
                'CityID' => 201,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            279 => 
            array (
                'DistrictID' => 1780,
                'DistrictName' => '濠江区',
                'CityID' => 201,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            280 => 
            array (
                'DistrictID' => 1781,
                'DistrictName' => '潮阳区',
                'CityID' => 201,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            281 => 
            array (
                'DistrictID' => 1782,
                'DistrictName' => '潮南区',
                'CityID' => 201,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            282 => 
            array (
                'DistrictID' => 1783,
                'DistrictName' => '澄海区',
                'CityID' => 201,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            283 => 
            array (
                'DistrictID' => 1784,
                'DistrictName' => '南澳县',
                'CityID' => 201,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            284 => 
            array (
                'DistrictID' => 1785,
                'DistrictName' => '禅城区',
                'CityID' => 202,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            285 => 
            array (
                'DistrictID' => 1786,
                'DistrictName' => '南海区',
                'CityID' => 202,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            286 => 
            array (
                'DistrictID' => 1787,
                'DistrictName' => '顺德区',
                'CityID' => 202,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            287 => 
            array (
                'DistrictID' => 1788,
                'DistrictName' => '三水区',
                'CityID' => 202,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            288 => 
            array (
                'DistrictID' => 1789,
                'DistrictName' => '高明区',
                'CityID' => 202,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            289 => 
            array (
                'DistrictID' => 1790,
                'DistrictName' => '蓬江区',
                'CityID' => 203,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            290 => 
            array (
                'DistrictID' => 1791,
                'DistrictName' => '江海区',
                'CityID' => 203,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            291 => 
            array (
                'DistrictID' => 1792,
                'DistrictName' => '新会区',
                'CityID' => 203,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            292 => 
            array (
                'DistrictID' => 1793,
                'DistrictName' => '台山市',
                'CityID' => 203,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            293 => 
            array (
                'DistrictID' => 1794,
                'DistrictName' => '开平市',
                'CityID' => 203,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            294 => 
            array (
                'DistrictID' => 1795,
                'DistrictName' => '鹤山市',
                'CityID' => 203,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            295 => 
            array (
                'DistrictID' => 1796,
                'DistrictName' => '恩平市',
                'CityID' => 203,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            296 => 
            array (
                'DistrictID' => 1797,
                'DistrictName' => '赤坎区',
                'CityID' => 204,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            297 => 
            array (
                'DistrictID' => 1798,
                'DistrictName' => '霞山区',
                'CityID' => 204,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            298 => 
            array (
                'DistrictID' => 1799,
                'DistrictName' => '坡头区',
                'CityID' => 204,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            299 => 
            array (
                'DistrictID' => 1800,
                'DistrictName' => '麻章区',
                'CityID' => 204,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            300 => 
            array (
                'DistrictID' => 1801,
                'DistrictName' => '遂溪县',
                'CityID' => 204,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            301 => 
            array (
                'DistrictID' => 1802,
                'DistrictName' => '徐闻县',
                'CityID' => 204,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            302 => 
            array (
                'DistrictID' => 1803,
                'DistrictName' => '廉江市',
                'CityID' => 204,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            303 => 
            array (
                'DistrictID' => 1804,
                'DistrictName' => '雷州市',
                'CityID' => 204,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            304 => 
            array (
                'DistrictID' => 1805,
                'DistrictName' => '吴川市',
                'CityID' => 204,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            305 => 
            array (
                'DistrictID' => 1806,
                'DistrictName' => '茂南区',
                'CityID' => 205,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            306 => 
            array (
                'DistrictID' => 1807,
                'DistrictName' => '茂港区',
                'CityID' => 205,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            307 => 
            array (
                'DistrictID' => 1808,
                'DistrictName' => '电白县',
                'CityID' => 205,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            308 => 
            array (
                'DistrictID' => 1809,
                'DistrictName' => '高州市',
                'CityID' => 205,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            309 => 
            array (
                'DistrictID' => 1810,
                'DistrictName' => '化州市',
                'CityID' => 205,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            310 => 
            array (
                'DistrictID' => 1811,
                'DistrictName' => '信宜市',
                'CityID' => 205,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            311 => 
            array (
                'DistrictID' => 1812,
                'DistrictName' => '端州区',
                'CityID' => 206,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            312 => 
            array (
                'DistrictID' => 1813,
                'DistrictName' => '鼎湖区',
                'CityID' => 206,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            313 => 
            array (
                'DistrictID' => 1814,
                'DistrictName' => '广宁县',
                'CityID' => 206,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            314 => 
            array (
                'DistrictID' => 1815,
                'DistrictName' => '怀集县',
                'CityID' => 206,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            315 => 
            array (
                'DistrictID' => 1816,
                'DistrictName' => '封开县',
                'CityID' => 206,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            316 => 
            array (
                'DistrictID' => 1817,
                'DistrictName' => '德庆县',
                'CityID' => 206,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            317 => 
            array (
                'DistrictID' => 1818,
                'DistrictName' => '高要市',
                'CityID' => 206,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            318 => 
            array (
                'DistrictID' => 1819,
                'DistrictName' => '四会市',
                'CityID' => 206,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            319 => 
            array (
                'DistrictID' => 1820,
                'DistrictName' => '惠城区',
                'CityID' => 207,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            320 => 
            array (
                'DistrictID' => 1821,
                'DistrictName' => '惠阳区',
                'CityID' => 207,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            321 => 
            array (
                'DistrictID' => 1822,
                'DistrictName' => '博罗县',
                'CityID' => 207,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            322 => 
            array (
                'DistrictID' => 1823,
                'DistrictName' => '惠东县',
                'CityID' => 207,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            323 => 
            array (
                'DistrictID' => 1824,
                'DistrictName' => '龙门县',
                'CityID' => 207,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            324 => 
            array (
                'DistrictID' => 1825,
                'DistrictName' => '梅江区',
                'CityID' => 208,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            325 => 
            array (
                'DistrictID' => 1826,
                'DistrictName' => '梅县',
                'CityID' => 208,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            326 => 
            array (
                'DistrictID' => 1827,
                'DistrictName' => '大埔县',
                'CityID' => 208,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            327 => 
            array (
                'DistrictID' => 1828,
                'DistrictName' => '丰顺县',
                'CityID' => 208,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            328 => 
            array (
                'DistrictID' => 1829,
                'DistrictName' => '五华县',
                'CityID' => 208,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            329 => 
            array (
                'DistrictID' => 1830,
                'DistrictName' => '平远县',
                'CityID' => 208,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            330 => 
            array (
                'DistrictID' => 1831,
                'DistrictName' => '蕉岭县',
                'CityID' => 208,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            331 => 
            array (
                'DistrictID' => 1832,
                'DistrictName' => '兴宁市',
                'CityID' => 208,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            332 => 
            array (
                'DistrictID' => 1833,
                'DistrictName' => '城区',
                'CityID' => 209,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            333 => 
            array (
                'DistrictID' => 1834,
                'DistrictName' => '海丰县',
                'CityID' => 209,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            334 => 
            array (
                'DistrictID' => 1835,
                'DistrictName' => '陆河县',
                'CityID' => 209,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            335 => 
            array (
                'DistrictID' => 1836,
                'DistrictName' => '陆丰市',
                'CityID' => 209,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            336 => 
            array (
                'DistrictID' => 1837,
                'DistrictName' => '源城区',
                'CityID' => 210,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            337 => 
            array (
                'DistrictID' => 1838,
                'DistrictName' => '紫金县',
                'CityID' => 210,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            338 => 
            array (
                'DistrictID' => 1839,
                'DistrictName' => '龙川县',
                'CityID' => 210,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            339 => 
            array (
                'DistrictID' => 1840,
                'DistrictName' => '连平县',
                'CityID' => 210,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            340 => 
            array (
                'DistrictID' => 1841,
                'DistrictName' => '和平县',
                'CityID' => 210,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            341 => 
            array (
                'DistrictID' => 1842,
                'DistrictName' => '东源县',
                'CityID' => 210,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            342 => 
            array (
                'DistrictID' => 1843,
                'DistrictName' => '江城区',
                'CityID' => 211,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            343 => 
            array (
                'DistrictID' => 1844,
                'DistrictName' => '阳西县',
                'CityID' => 211,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            344 => 
            array (
                'DistrictID' => 1845,
                'DistrictName' => '阳东县',
                'CityID' => 211,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            345 => 
            array (
                'DistrictID' => 1846,
                'DistrictName' => '阳春市',
                'CityID' => 211,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            346 => 
            array (
                'DistrictID' => 1847,
                'DistrictName' => '清城区',
                'CityID' => 212,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            347 => 
            array (
                'DistrictID' => 1848,
                'DistrictName' => '佛冈县',
                'CityID' => 212,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            348 => 
            array (
                'DistrictID' => 1849,
                'DistrictName' => '阳山县',
                'CityID' => 212,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            349 => 
            array (
                'DistrictID' => 1850,
                'DistrictName' => '连山壮族瑶族自治县',
                'CityID' => 212,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            350 => 
            array (
                'DistrictID' => 1851,
                'DistrictName' => '连南瑶族自治县',
                'CityID' => 212,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            351 => 
            array (
                'DistrictID' => 1852,
                'DistrictName' => '清新县',
                'CityID' => 212,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            352 => 
            array (
                'DistrictID' => 1853,
                'DistrictName' => '英德市',
                'CityID' => 212,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            353 => 
            array (
                'DistrictID' => 1854,
                'DistrictName' => '连州市',
                'CityID' => 212,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            354 => 
            array (
                'DistrictID' => 1855,
                'DistrictName' => '湘桥区',
                'CityID' => 215,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            355 => 
            array (
                'DistrictID' => 1856,
                'DistrictName' => '潮安县',
                'CityID' => 215,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            356 => 
            array (
                'DistrictID' => 1857,
                'DistrictName' => '饶平县',
                'CityID' => 215,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            357 => 
            array (
                'DistrictID' => 1858,
                'DistrictName' => '榕城区',
                'CityID' => 216,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            358 => 
            array (
                'DistrictID' => 1859,
                'DistrictName' => '揭东县',
                'CityID' => 216,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            359 => 
            array (
                'DistrictID' => 1860,
                'DistrictName' => '揭西县',
                'CityID' => 216,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            360 => 
            array (
                'DistrictID' => 1861,
                'DistrictName' => '惠来县',
                'CityID' => 216,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            361 => 
            array (
                'DistrictID' => 1862,
                'DistrictName' => '普宁市',
                'CityID' => 216,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            362 => 
            array (
                'DistrictID' => 1863,
                'DistrictName' => '云城区',
                'CityID' => 217,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            363 => 
            array (
                'DistrictID' => 1864,
                'DistrictName' => '新兴县',
                'CityID' => 217,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            364 => 
            array (
                'DistrictID' => 1865,
                'DistrictName' => '郁南县',
                'CityID' => 217,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            365 => 
            array (
                'DistrictID' => 1866,
                'DistrictName' => '云安县',
                'CityID' => 217,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            366 => 
            array (
                'DistrictID' => 1867,
                'DistrictName' => '罗定市',
                'CityID' => 217,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            367 => 
            array (
                'DistrictID' => 1868,
                'DistrictName' => '兴宁区',
                'CityID' => 218,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            368 => 
            array (
                'DistrictID' => 1869,
                'DistrictName' => '青秀区',
                'CityID' => 218,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            369 => 
            array (
                'DistrictID' => 1870,
                'DistrictName' => '江南区',
                'CityID' => 218,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            370 => 
            array (
                'DistrictID' => 1871,
                'DistrictName' => '西乡塘区',
                'CityID' => 218,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            371 => 
            array (
                'DistrictID' => 1872,
                'DistrictName' => '良庆区',
                'CityID' => 218,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            372 => 
            array (
                'DistrictID' => 1873,
                'DistrictName' => '邕宁区',
                'CityID' => 218,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            373 => 
            array (
                'DistrictID' => 1874,
                'DistrictName' => '武鸣县',
                'CityID' => 218,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            374 => 
            array (
                'DistrictID' => 1875,
                'DistrictName' => '隆安县',
                'CityID' => 218,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            375 => 
            array (
                'DistrictID' => 1876,
                'DistrictName' => '马山县',
                'CityID' => 218,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            376 => 
            array (
                'DistrictID' => 1877,
                'DistrictName' => '上林县',
                'CityID' => 218,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            377 => 
            array (
                'DistrictID' => 1878,
                'DistrictName' => '宾阳县',
                'CityID' => 218,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            378 => 
            array (
                'DistrictID' => 1879,
                'DistrictName' => '横县',
                'CityID' => 218,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            379 => 
            array (
                'DistrictID' => 1880,
                'DistrictName' => '城中区',
                'CityID' => 219,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            380 => 
            array (
                'DistrictID' => 1881,
                'DistrictName' => '鱼峰区',
                'CityID' => 219,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            381 => 
            array (
                'DistrictID' => 1882,
                'DistrictName' => '柳南区',
                'CityID' => 219,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            382 => 
            array (
                'DistrictID' => 1883,
                'DistrictName' => '柳北区',
                'CityID' => 219,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            383 => 
            array (
                'DistrictID' => 1884,
                'DistrictName' => '柳江县',
                'CityID' => 219,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            384 => 
            array (
                'DistrictID' => 1885,
                'DistrictName' => '柳城县',
                'CityID' => 219,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            385 => 
            array (
                'DistrictID' => 1886,
                'DistrictName' => '鹿寨县',
                'CityID' => 219,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            386 => 
            array (
                'DistrictID' => 1887,
                'DistrictName' => '融安县',
                'CityID' => 219,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            387 => 
            array (
                'DistrictID' => 1888,
                'DistrictName' => '融水苗族自治县',
                'CityID' => 219,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            388 => 
            array (
                'DistrictID' => 1889,
                'DistrictName' => '三江侗族自治县',
                'CityID' => 219,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            389 => 
            array (
                'DistrictID' => 1890,
                'DistrictName' => '秀峰区',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            390 => 
            array (
                'DistrictID' => 1891,
                'DistrictName' => '叠彩区',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            391 => 
            array (
                'DistrictID' => 1892,
                'DistrictName' => '象山区',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            392 => 
            array (
                'DistrictID' => 1893,
                'DistrictName' => '七星区',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            393 => 
            array (
                'DistrictID' => 1894,
                'DistrictName' => '雁山区',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            394 => 
            array (
                'DistrictID' => 1895,
                'DistrictName' => '阳朔县',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            395 => 
            array (
                'DistrictID' => 1896,
                'DistrictName' => '临桂县',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            396 => 
            array (
                'DistrictID' => 1897,
                'DistrictName' => '灵川县',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            397 => 
            array (
                'DistrictID' => 1898,
                'DistrictName' => '全州县',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            398 => 
            array (
                'DistrictID' => 1899,
                'DistrictName' => '兴安县',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            399 => 
            array (
                'DistrictID' => 1900,
                'DistrictName' => '永福县',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            400 => 
            array (
                'DistrictID' => 1901,
                'DistrictName' => '灌阳县',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            401 => 
            array (
                'DistrictID' => 1902,
                'DistrictName' => '龙胜各族自治县',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            402 => 
            array (
                'DistrictID' => 1903,
                'DistrictName' => '资源县',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            403 => 
            array (
                'DistrictID' => 1904,
                'DistrictName' => '平乐县',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            404 => 
            array (
                'DistrictID' => 1905,
                'DistrictName' => '荔蒲县',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            405 => 
            array (
                'DistrictID' => 1906,
                'DistrictName' => '恭城瑶族自治县',
                'CityID' => 220,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            406 => 
            array (
                'DistrictID' => 1907,
                'DistrictName' => '万秀区',
                'CityID' => 221,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            407 => 
            array (
                'DistrictID' => 1908,
                'DistrictName' => '蝶山区',
                'CityID' => 221,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            408 => 
            array (
                'DistrictID' => 1909,
                'DistrictName' => '长洲区',
                'CityID' => 221,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            409 => 
            array (
                'DistrictID' => 1910,
                'DistrictName' => '苍梧县',
                'CityID' => 221,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            410 => 
            array (
                'DistrictID' => 1911,
                'DistrictName' => '藤县',
                'CityID' => 221,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            411 => 
            array (
                'DistrictID' => 1912,
                'DistrictName' => '蒙山县',
                'CityID' => 221,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            412 => 
            array (
                'DistrictID' => 1913,
                'DistrictName' => '岑溪市',
                'CityID' => 221,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            413 => 
            array (
                'DistrictID' => 1914,
                'DistrictName' => '海城区',
                'CityID' => 222,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            414 => 
            array (
                'DistrictID' => 1915,
                'DistrictName' => '银海区',
                'CityID' => 222,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            415 => 
            array (
                'DistrictID' => 1916,
                'DistrictName' => '铁山港区',
                'CityID' => 222,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            416 => 
            array (
                'DistrictID' => 1917,
                'DistrictName' => '合浦县',
                'CityID' => 222,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            417 => 
            array (
                'DistrictID' => 1918,
                'DistrictName' => '港口区',
                'CityID' => 223,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            418 => 
            array (
                'DistrictID' => 1919,
                'DistrictName' => '防城区',
                'CityID' => 223,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            419 => 
            array (
                'DistrictID' => 1920,
                'DistrictName' => '上思县',
                'CityID' => 223,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            420 => 
            array (
                'DistrictID' => 1921,
                'DistrictName' => '东兴市',
                'CityID' => 223,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            421 => 
            array (
                'DistrictID' => 1922,
                'DistrictName' => '钦南区',
                'CityID' => 224,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            422 => 
            array (
                'DistrictID' => 1923,
                'DistrictName' => '钦北区',
                'CityID' => 224,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            423 => 
            array (
                'DistrictID' => 1924,
                'DistrictName' => '灵山县',
                'CityID' => 224,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            424 => 
            array (
                'DistrictID' => 1925,
                'DistrictName' => '浦北县',
                'CityID' => 224,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            425 => 
            array (
                'DistrictID' => 1926,
                'DistrictName' => '港北区',
                'CityID' => 225,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            426 => 
            array (
                'DistrictID' => 1927,
                'DistrictName' => '港南区',
                'CityID' => 225,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            427 => 
            array (
                'DistrictID' => 1928,
                'DistrictName' => '覃塘区',
                'CityID' => 225,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            428 => 
            array (
                'DistrictID' => 1929,
                'DistrictName' => '平南县',
                'CityID' => 225,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            429 => 
            array (
                'DistrictID' => 1930,
                'DistrictName' => '桂平市',
                'CityID' => 225,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            430 => 
            array (
                'DistrictID' => 1931,
                'DistrictName' => '玉州区',
                'CityID' => 226,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            431 => 
            array (
                'DistrictID' => 1932,
                'DistrictName' => '容县',
                'CityID' => 226,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            432 => 
            array (
                'DistrictID' => 1933,
                'DistrictName' => '陆川县',
                'CityID' => 226,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            433 => 
            array (
                'DistrictID' => 1934,
                'DistrictName' => '博白县',
                'CityID' => 226,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            434 => 
            array (
                'DistrictID' => 1935,
                'DistrictName' => '兴业县',
                'CityID' => 226,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            435 => 
            array (
                'DistrictID' => 1936,
                'DistrictName' => '北流市',
                'CityID' => 226,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            436 => 
            array (
                'DistrictID' => 1937,
                'DistrictName' => '右江区',
                'CityID' => 227,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            437 => 
            array (
                'DistrictID' => 1938,
                'DistrictName' => '田阳县',
                'CityID' => 227,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            438 => 
            array (
                'DistrictID' => 1939,
                'DistrictName' => '田东县',
                'CityID' => 227,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            439 => 
            array (
                'DistrictID' => 1940,
                'DistrictName' => '平果县',
                'CityID' => 227,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            440 => 
            array (
                'DistrictID' => 1941,
                'DistrictName' => '德保县',
                'CityID' => 227,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            441 => 
            array (
                'DistrictID' => 1942,
                'DistrictName' => '靖西县',
                'CityID' => 227,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            442 => 
            array (
                'DistrictID' => 1943,
                'DistrictName' => '那坡县',
                'CityID' => 227,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            443 => 
            array (
                'DistrictID' => 1944,
                'DistrictName' => '凌云县',
                'CityID' => 227,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            444 => 
            array (
                'DistrictID' => 1945,
                'DistrictName' => '乐业县',
                'CityID' => 227,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            445 => 
            array (
                'DistrictID' => 1946,
                'DistrictName' => '田林县',
                'CityID' => 227,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            446 => 
            array (
                'DistrictID' => 1947,
                'DistrictName' => '西林县',
                'CityID' => 227,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            447 => 
            array (
                'DistrictID' => 1948,
                'DistrictName' => '隆林各族自治县',
                'CityID' => 227,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            448 => 
            array (
                'DistrictID' => 1949,
                'DistrictName' => '八步区',
                'CityID' => 228,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            449 => 
            array (
                'DistrictID' => 1950,
                'DistrictName' => '昭平县',
                'CityID' => 228,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            450 => 
            array (
                'DistrictID' => 1951,
                'DistrictName' => '钟山县',
                'CityID' => 228,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            451 => 
            array (
                'DistrictID' => 1952,
                'DistrictName' => '富川瑶族自治县',
                'CityID' => 228,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            452 => 
            array (
                'DistrictID' => 1953,
                'DistrictName' => '金城江区',
                'CityID' => 229,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            453 => 
            array (
                'DistrictID' => 1954,
                'DistrictName' => '南丹县',
                'CityID' => 229,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            454 => 
            array (
                'DistrictID' => 1955,
                'DistrictName' => '天峨县',
                'CityID' => 229,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            455 => 
            array (
                'DistrictID' => 1956,
                'DistrictName' => '凤山县',
                'CityID' => 229,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            456 => 
            array (
                'DistrictID' => 1957,
                'DistrictName' => '东兰县',
                'CityID' => 229,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            457 => 
            array (
                'DistrictID' => 1958,
                'DistrictName' => '罗城仫佬族自治县',
                'CityID' => 229,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            458 => 
            array (
                'DistrictID' => 1959,
                'DistrictName' => '环江毛南族自治县',
                'CityID' => 229,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            459 => 
            array (
                'DistrictID' => 1960,
                'DistrictName' => '巴马瑶族自治县',
                'CityID' => 229,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            460 => 
            array (
                'DistrictID' => 1961,
                'DistrictName' => '都安瑶族自治县',
                'CityID' => 229,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            461 => 
            array (
                'DistrictID' => 1962,
                'DistrictName' => '大化瑶族自治县',
                'CityID' => 229,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            462 => 
            array (
                'DistrictID' => 1963,
                'DistrictName' => '宜州市',
                'CityID' => 229,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            463 => 
            array (
                'DistrictID' => 1964,
                'DistrictName' => '兴宾区',
                'CityID' => 230,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            464 => 
            array (
                'DistrictID' => 1965,
                'DistrictName' => '忻城县',
                'CityID' => 230,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            465 => 
            array (
                'DistrictID' => 1966,
                'DistrictName' => '象州县',
                'CityID' => 230,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            466 => 
            array (
                'DistrictID' => 1967,
                'DistrictName' => '武宣县',
                'CityID' => 230,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            467 => 
            array (
                'DistrictID' => 1968,
                'DistrictName' => '金秀瑶族自治县',
                'CityID' => 230,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            468 => 
            array (
                'DistrictID' => 1969,
                'DistrictName' => '合山市',
                'CityID' => 230,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            469 => 
            array (
                'DistrictID' => 1970,
                'DistrictName' => '江洲区',
                'CityID' => 231,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            470 => 
            array (
                'DistrictID' => 1971,
                'DistrictName' => '扶绥县',
                'CityID' => 231,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            471 => 
            array (
                'DistrictID' => 1972,
                'DistrictName' => '宁明县',
                'CityID' => 231,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            472 => 
            array (
                'DistrictID' => 1973,
                'DistrictName' => '龙州县',
                'CityID' => 231,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            473 => 
            array (
                'DistrictID' => 1974,
                'DistrictName' => '大新县',
                'CityID' => 231,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            474 => 
            array (
                'DistrictID' => 1975,
                'DistrictName' => '天等县',
                'CityID' => 231,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            475 => 
            array (
                'DistrictID' => 1976,
                'DistrictName' => '凭祥市',
                'CityID' => 231,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            476 => 
            array (
                'DistrictID' => 1977,
                'DistrictName' => '秀英区',
                'CityID' => 232,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            477 => 
            array (
                'DistrictID' => 1978,
                'DistrictName' => '龙华区',
                'CityID' => 232,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            478 => 
            array (
                'DistrictID' => 1979,
                'DistrictName' => '琼山区',
                'CityID' => 232,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            479 => 
            array (
                'DistrictID' => 1980,
                'DistrictName' => '美兰区',
                'CityID' => 232,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            480 => 
            array (
                'DistrictID' => 1981,
                'DistrictName' => '五指山市',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            481 => 
            array (
                'DistrictID' => 1982,
                'DistrictName' => '琼海市',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            482 => 
            array (
                'DistrictID' => 1983,
                'DistrictName' => '儋州市',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            483 => 
            array (
                'DistrictID' => 1984,
                'DistrictName' => '文昌市',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            484 => 
            array (
                'DistrictID' => 1985,
                'DistrictName' => '万宁市',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            485 => 
            array (
                'DistrictID' => 1986,
                'DistrictName' => '东方市',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            486 => 
            array (
                'DistrictID' => 1987,
                'DistrictName' => '定安县',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            487 => 
            array (
                'DistrictID' => 1988,
                'DistrictName' => '屯昌县',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            488 => 
            array (
                'DistrictID' => 1989,
                'DistrictName' => '澄迈县',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            489 => 
            array (
                'DistrictID' => 1990,
                'DistrictName' => '临高县',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            490 => 
            array (
                'DistrictID' => 1991,
                'DistrictName' => '白沙黎族自治县',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            491 => 
            array (
                'DistrictID' => 1992,
                'DistrictName' => '昌江黎族自治县',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            492 => 
            array (
                'DistrictID' => 1993,
                'DistrictName' => '乐东黎族自治县',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            493 => 
            array (
                'DistrictID' => 1994,
                'DistrictName' => '陵水黎族自治县',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            494 => 
            array (
                'DistrictID' => 1995,
                'DistrictName' => '保亭黎族苗族自治县',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            495 => 
            array (
                'DistrictID' => 1996,
                'DistrictName' => '琼中黎族苗族自治县',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            496 => 
            array (
                'DistrictID' => 1997,
                'DistrictName' => '西沙群岛',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            497 => 
            array (
                'DistrictID' => 1998,
                'DistrictName' => '南沙群岛',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            498 => 
            array (
                'DistrictID' => 1999,
                'DistrictName' => '中沙群岛的岛礁及其海域',
                'CityID' => 233,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            499 => 
            array (
                'DistrictID' => 2000,
                'DistrictName' => '万州区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
        ));
        \DB::table('district')->insert(array (
            0 => 
            array (
                'DistrictID' => 2001,
                'DistrictName' => '涪陵区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            1 => 
            array (
                'DistrictID' => 2002,
                'DistrictName' => '渝中区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            2 => 
            array (
                'DistrictID' => 2003,
                'DistrictName' => '大渡口区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            3 => 
            array (
                'DistrictID' => 2004,
                'DistrictName' => '江北区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            4 => 
            array (
                'DistrictID' => 2005,
                'DistrictName' => '沙坪坝区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            5 => 
            array (
                'DistrictID' => 2006,
                'DistrictName' => '九龙坡区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            6 => 
            array (
                'DistrictID' => 2007,
                'DistrictName' => '南岸区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            7 => 
            array (
                'DistrictID' => 2008,
                'DistrictName' => '北碚区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            8 => 
            array (
                'DistrictID' => 2009,
                'DistrictName' => '万盛区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            9 => 
            array (
                'DistrictID' => 2010,
                'DistrictName' => '双桥区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            10 => 
            array (
                'DistrictID' => 2011,
                'DistrictName' => '渝北区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            11 => 
            array (
                'DistrictID' => 2012,
                'DistrictName' => '巴南区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            12 => 
            array (
                'DistrictID' => 2013,
                'DistrictName' => '黔江区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            13 => 
            array (
                'DistrictID' => 2014,
                'DistrictName' => '长寿区',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            14 => 
            array (
                'DistrictID' => 2015,
                'DistrictName' => '綦江县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            15 => 
            array (
                'DistrictID' => 2016,
                'DistrictName' => '潼南县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            16 => 
            array (
                'DistrictID' => 2017,
                'DistrictName' => '铜梁县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            17 => 
            array (
                'DistrictID' => 2018,
                'DistrictName' => '大足县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            18 => 
            array (
                'DistrictID' => 2019,
                'DistrictName' => '荣昌县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            19 => 
            array (
                'DistrictID' => 2020,
                'DistrictName' => '璧山县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            20 => 
            array (
                'DistrictID' => 2021,
                'DistrictName' => '梁平县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            21 => 
            array (
                'DistrictID' => 2022,
                'DistrictName' => '城口县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            22 => 
            array (
                'DistrictID' => 2023,
                'DistrictName' => '丰都县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            23 => 
            array (
                'DistrictID' => 2024,
                'DistrictName' => '垫江县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            24 => 
            array (
                'DistrictID' => 2025,
                'DistrictName' => '武隆县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            25 => 
            array (
                'DistrictID' => 2026,
                'DistrictName' => '忠县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            26 => 
            array (
                'DistrictID' => 2027,
                'DistrictName' => '开县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            27 => 
            array (
                'DistrictID' => 2028,
                'DistrictName' => '云阳县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            28 => 
            array (
                'DistrictID' => 2029,
                'DistrictName' => '奉节县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            29 => 
            array (
                'DistrictID' => 2030,
                'DistrictName' => '巫山县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            30 => 
            array (
                'DistrictID' => 2031,
                'DistrictName' => '巫溪县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            31 => 
            array (
                'DistrictID' => 2032,
                'DistrictName' => '石柱土家族自治县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            32 => 
            array (
                'DistrictID' => 2033,
                'DistrictName' => '秀山土家族苗族自治县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            33 => 
            array (
                'DistrictID' => 2034,
                'DistrictName' => '酉阳土家族苗族自治县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            34 => 
            array (
                'DistrictID' => 2035,
                'DistrictName' => '彭水苗族土家族自治县',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            35 => 
            array (
                'DistrictID' => 2036,
                'DistrictName' => '江津市',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            36 => 
            array (
                'DistrictID' => 2037,
                'DistrictName' => '合川市',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            37 => 
            array (
                'DistrictID' => 2038,
                'DistrictName' => '永川市',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            38 => 
            array (
                'DistrictID' => 2039,
                'DistrictName' => '南川市',
                'CityID' => 234,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            39 => 
            array (
                'DistrictID' => 2040,
                'DistrictName' => '锦江区',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            40 => 
            array (
                'DistrictID' => 2041,
                'DistrictName' => '青羊区',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            41 => 
            array (
                'DistrictID' => 2042,
                'DistrictName' => '金牛区',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            42 => 
            array (
                'DistrictID' => 2043,
                'DistrictName' => '武侯区',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            43 => 
            array (
                'DistrictID' => 2044,
                'DistrictName' => '成华区',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            44 => 
            array (
                'DistrictID' => 2045,
                'DistrictName' => '龙泉驿区',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            45 => 
            array (
                'DistrictID' => 2046,
                'DistrictName' => '青白江区',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            46 => 
            array (
                'DistrictID' => 2047,
                'DistrictName' => '新都区',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            47 => 
            array (
                'DistrictID' => 2048,
                'DistrictName' => '温江区',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            48 => 
            array (
                'DistrictID' => 2049,
                'DistrictName' => '金堂县',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            49 => 
            array (
                'DistrictID' => 2050,
                'DistrictName' => '双流县',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            50 => 
            array (
                'DistrictID' => 2051,
                'DistrictName' => '郫县',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            51 => 
            array (
                'DistrictID' => 2052,
                'DistrictName' => '大邑县',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            52 => 
            array (
                'DistrictID' => 2053,
                'DistrictName' => '蒲江县',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            53 => 
            array (
                'DistrictID' => 2054,
                'DistrictName' => '新津县',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            54 => 
            array (
                'DistrictID' => 2055,
                'DistrictName' => '都江堰市',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            55 => 
            array (
                'DistrictID' => 2056,
                'DistrictName' => '彭州市',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            56 => 
            array (
                'DistrictID' => 2057,
                'DistrictName' => '邛崃市',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            57 => 
            array (
                'DistrictID' => 2058,
                'DistrictName' => '崇州市',
                'CityID' => 235,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            58 => 
            array (
                'DistrictID' => 2059,
                'DistrictName' => '自流井区',
                'CityID' => 236,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            59 => 
            array (
                'DistrictID' => 2060,
                'DistrictName' => '贡井区',
                'CityID' => 236,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            60 => 
            array (
                'DistrictID' => 2061,
                'DistrictName' => '大安区',
                'CityID' => 236,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            61 => 
            array (
                'DistrictID' => 2062,
                'DistrictName' => '沿滩区',
                'CityID' => 236,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            62 => 
            array (
                'DistrictID' => 2063,
                'DistrictName' => '荣县',
                'CityID' => 236,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            63 => 
            array (
                'DistrictID' => 2064,
                'DistrictName' => '富顺县',
                'CityID' => 236,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            64 => 
            array (
                'DistrictID' => 2065,
                'DistrictName' => '东区',
                'CityID' => 237,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            65 => 
            array (
                'DistrictID' => 2066,
                'DistrictName' => '西区',
                'CityID' => 237,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            66 => 
            array (
                'DistrictID' => 2067,
                'DistrictName' => '仁和区',
                'CityID' => 237,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            67 => 
            array (
                'DistrictID' => 2068,
                'DistrictName' => '米易县',
                'CityID' => 237,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            68 => 
            array (
                'DistrictID' => 2069,
                'DistrictName' => '盐边县',
                'CityID' => 237,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            69 => 
            array (
                'DistrictID' => 2070,
                'DistrictName' => '江阳区',
                'CityID' => 238,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            70 => 
            array (
                'DistrictID' => 2071,
                'DistrictName' => '纳溪区',
                'CityID' => 238,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            71 => 
            array (
                'DistrictID' => 2072,
                'DistrictName' => '龙马潭区',
                'CityID' => 238,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            72 => 
            array (
                'DistrictID' => 2073,
                'DistrictName' => '泸县',
                'CityID' => 238,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            73 => 
            array (
                'DistrictID' => 2074,
                'DistrictName' => '合江县',
                'CityID' => 238,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            74 => 
            array (
                'DistrictID' => 2075,
                'DistrictName' => '叙永县',
                'CityID' => 238,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            75 => 
            array (
                'DistrictID' => 2076,
                'DistrictName' => '古蔺县',
                'CityID' => 238,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            76 => 
            array (
                'DistrictID' => 2077,
                'DistrictName' => '旌阳区',
                'CityID' => 239,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            77 => 
            array (
                'DistrictID' => 2078,
                'DistrictName' => '中江县',
                'CityID' => 239,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            78 => 
            array (
                'DistrictID' => 2079,
                'DistrictName' => '罗江县',
                'CityID' => 239,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            79 => 
            array (
                'DistrictID' => 2080,
                'DistrictName' => '广汉市',
                'CityID' => 239,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            80 => 
            array (
                'DistrictID' => 2081,
                'DistrictName' => '什邡市',
                'CityID' => 239,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            81 => 
            array (
                'DistrictID' => 2082,
                'DistrictName' => '绵竹市',
                'CityID' => 239,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            82 => 
            array (
                'DistrictID' => 2083,
                'DistrictName' => '涪城区',
                'CityID' => 240,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            83 => 
            array (
                'DistrictID' => 2084,
                'DistrictName' => '游仙区',
                'CityID' => 240,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            84 => 
            array (
                'DistrictID' => 2085,
                'DistrictName' => '三台县',
                'CityID' => 240,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            85 => 
            array (
                'DistrictID' => 2086,
                'DistrictName' => '盐亭县',
                'CityID' => 240,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            86 => 
            array (
                'DistrictID' => 2087,
                'DistrictName' => '安县',
                'CityID' => 240,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            87 => 
            array (
                'DistrictID' => 2088,
                'DistrictName' => '梓潼县',
                'CityID' => 240,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            88 => 
            array (
                'DistrictID' => 2089,
                'DistrictName' => '北川羌族自治县',
                'CityID' => 240,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            89 => 
            array (
                'DistrictID' => 2090,
                'DistrictName' => '平武县',
                'CityID' => 240,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            90 => 
            array (
                'DistrictID' => 2091,
                'DistrictName' => '江油市',
                'CityID' => 240,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            91 => 
            array (
                'DistrictID' => 2092,
                'DistrictName' => '市中区',
                'CityID' => 241,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            92 => 
            array (
                'DistrictID' => 2093,
                'DistrictName' => '元坝区',
                'CityID' => 241,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            93 => 
            array (
                'DistrictID' => 2094,
                'DistrictName' => '朝天区',
                'CityID' => 241,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            94 => 
            array (
                'DistrictID' => 2095,
                'DistrictName' => '旺苍县',
                'CityID' => 241,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            95 => 
            array (
                'DistrictID' => 2096,
                'DistrictName' => '青川县',
                'CityID' => 241,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            96 => 
            array (
                'DistrictID' => 2097,
                'DistrictName' => '剑阁县',
                'CityID' => 241,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            97 => 
            array (
                'DistrictID' => 2098,
                'DistrictName' => '苍溪县',
                'CityID' => 241,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            98 => 
            array (
                'DistrictID' => 2099,
                'DistrictName' => '船山区',
                'CityID' => 242,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            99 => 
            array (
                'DistrictID' => 2100,
                'DistrictName' => '安居区',
                'CityID' => 242,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            100 => 
            array (
                'DistrictID' => 2101,
                'DistrictName' => '蓬溪县',
                'CityID' => 242,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            101 => 
            array (
                'DistrictID' => 2102,
                'DistrictName' => '射洪县',
                'CityID' => 242,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            102 => 
            array (
                'DistrictID' => 2103,
                'DistrictName' => '大英县',
                'CityID' => 242,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            103 => 
            array (
                'DistrictID' => 2104,
                'DistrictName' => '市中区',
                'CityID' => 243,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            104 => 
            array (
                'DistrictID' => 2105,
                'DistrictName' => '东兴区',
                'CityID' => 243,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            105 => 
            array (
                'DistrictID' => 2106,
                'DistrictName' => '威远县',
                'CityID' => 243,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            106 => 
            array (
                'DistrictID' => 2107,
                'DistrictName' => '资中县',
                'CityID' => 243,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            107 => 
            array (
                'DistrictID' => 2108,
                'DistrictName' => '隆昌县',
                'CityID' => 243,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            108 => 
            array (
                'DistrictID' => 2109,
                'DistrictName' => '市中区',
                'CityID' => 244,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            109 => 
            array (
                'DistrictID' => 2110,
                'DistrictName' => '沙湾区',
                'CityID' => 244,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            110 => 
            array (
                'DistrictID' => 2111,
                'DistrictName' => '五通桥区',
                'CityID' => 244,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            111 => 
            array (
                'DistrictID' => 2112,
                'DistrictName' => '金口河区',
                'CityID' => 244,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            112 => 
            array (
                'DistrictID' => 2113,
                'DistrictName' => '犍为县',
                'CityID' => 244,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            113 => 
            array (
                'DistrictID' => 2114,
                'DistrictName' => '井研县',
                'CityID' => 244,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            114 => 
            array (
                'DistrictID' => 2115,
                'DistrictName' => '夹江县',
                'CityID' => 244,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            115 => 
            array (
                'DistrictID' => 2116,
                'DistrictName' => '沐川县',
                'CityID' => 244,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            116 => 
            array (
                'DistrictID' => 2117,
                'DistrictName' => '峨边彝族自治县',
                'CityID' => 244,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            117 => 
            array (
                'DistrictID' => 2118,
                'DistrictName' => '马边彝族自治县',
                'CityID' => 244,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            118 => 
            array (
                'DistrictID' => 2119,
                'DistrictName' => '峨眉山市',
                'CityID' => 244,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            119 => 
            array (
                'DistrictID' => 2120,
                'DistrictName' => '顺庆区',
                'CityID' => 245,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            120 => 
            array (
                'DistrictID' => 2121,
                'DistrictName' => '高坪区',
                'CityID' => 245,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            121 => 
            array (
                'DistrictID' => 2122,
                'DistrictName' => '嘉陵区',
                'CityID' => 245,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            122 => 
            array (
                'DistrictID' => 2123,
                'DistrictName' => '南部县',
                'CityID' => 245,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            123 => 
            array (
                'DistrictID' => 2124,
                'DistrictName' => '营山县',
                'CityID' => 245,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            124 => 
            array (
                'DistrictID' => 2125,
                'DistrictName' => '蓬安县',
                'CityID' => 245,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            125 => 
            array (
                'DistrictID' => 2126,
                'DistrictName' => '仪陇县',
                'CityID' => 245,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            126 => 
            array (
                'DistrictID' => 2127,
                'DistrictName' => '西充县',
                'CityID' => 245,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            127 => 
            array (
                'DistrictID' => 2128,
                'DistrictName' => '阆中市',
                'CityID' => 245,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            128 => 
            array (
                'DistrictID' => 2129,
                'DistrictName' => '东坡区',
                'CityID' => 246,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            129 => 
            array (
                'DistrictID' => 2130,
                'DistrictName' => '仁寿县',
                'CityID' => 246,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            130 => 
            array (
                'DistrictID' => 2131,
                'DistrictName' => '彭山县',
                'CityID' => 246,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            131 => 
            array (
                'DistrictID' => 2132,
                'DistrictName' => '洪雅县',
                'CityID' => 246,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            132 => 
            array (
                'DistrictID' => 2133,
                'DistrictName' => '丹棱县',
                'CityID' => 246,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            133 => 
            array (
                'DistrictID' => 2134,
                'DistrictName' => '青神县',
                'CityID' => 246,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            134 => 
            array (
                'DistrictID' => 2135,
                'DistrictName' => '翠屏区',
                'CityID' => 247,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            135 => 
            array (
                'DistrictID' => 2136,
                'DistrictName' => '宜宾县',
                'CityID' => 247,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            136 => 
            array (
                'DistrictID' => 2137,
                'DistrictName' => '南溪县',
                'CityID' => 247,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            137 => 
            array (
                'DistrictID' => 2138,
                'DistrictName' => '江安县',
                'CityID' => 247,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            138 => 
            array (
                'DistrictID' => 2139,
                'DistrictName' => '长宁县',
                'CityID' => 247,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            139 => 
            array (
                'DistrictID' => 2140,
                'DistrictName' => '高县',
                'CityID' => 247,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            140 => 
            array (
                'DistrictID' => 2141,
                'DistrictName' => '珙县',
                'CityID' => 247,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            141 => 
            array (
                'DistrictID' => 2142,
                'DistrictName' => '筠连县',
                'CityID' => 247,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            142 => 
            array (
                'DistrictID' => 2143,
                'DistrictName' => '兴文县',
                'CityID' => 247,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            143 => 
            array (
                'DistrictID' => 2144,
                'DistrictName' => '屏山县',
                'CityID' => 247,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            144 => 
            array (
                'DistrictID' => 2145,
                'DistrictName' => '广安区',
                'CityID' => 248,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            145 => 
            array (
                'DistrictID' => 2146,
                'DistrictName' => '岳池县',
                'CityID' => 248,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            146 => 
            array (
                'DistrictID' => 2147,
                'DistrictName' => '武胜县',
                'CityID' => 248,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            147 => 
            array (
                'DistrictID' => 2148,
                'DistrictName' => '邻水县',
                'CityID' => 248,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            148 => 
            array (
                'DistrictID' => 2149,
                'DistrictName' => '华蓥市',
                'CityID' => 248,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            149 => 
            array (
                'DistrictID' => 2150,
                'DistrictName' => '通川区',
                'CityID' => 249,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            150 => 
            array (
                'DistrictID' => 2151,
                'DistrictName' => '达县',
                'CityID' => 249,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            151 => 
            array (
                'DistrictID' => 2152,
                'DistrictName' => '宣汉县',
                'CityID' => 249,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            152 => 
            array (
                'DistrictID' => 2153,
                'DistrictName' => '开江县',
                'CityID' => 249,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            153 => 
            array (
                'DistrictID' => 2154,
                'DistrictName' => '大竹县',
                'CityID' => 249,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            154 => 
            array (
                'DistrictID' => 2155,
                'DistrictName' => '渠县',
                'CityID' => 249,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            155 => 
            array (
                'DistrictID' => 2156,
                'DistrictName' => '万源市',
                'CityID' => 249,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            156 => 
            array (
                'DistrictID' => 2157,
                'DistrictName' => '雨城区',
                'CityID' => 250,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            157 => 
            array (
                'DistrictID' => 2158,
                'DistrictName' => '名山县',
                'CityID' => 250,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            158 => 
            array (
                'DistrictID' => 2159,
                'DistrictName' => '荥经县',
                'CityID' => 250,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            159 => 
            array (
                'DistrictID' => 2160,
                'DistrictName' => '汉源县',
                'CityID' => 250,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            160 => 
            array (
                'DistrictID' => 2161,
                'DistrictName' => '石棉县',
                'CityID' => 250,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            161 => 
            array (
                'DistrictID' => 2162,
                'DistrictName' => '天全县',
                'CityID' => 250,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            162 => 
            array (
                'DistrictID' => 2163,
                'DistrictName' => '芦山县',
                'CityID' => 250,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            163 => 
            array (
                'DistrictID' => 2164,
                'DistrictName' => '宝兴县',
                'CityID' => 250,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            164 => 
            array (
                'DistrictID' => 2165,
                'DistrictName' => '巴州区',
                'CityID' => 251,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            165 => 
            array (
                'DistrictID' => 2166,
                'DistrictName' => '通江县',
                'CityID' => 251,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            166 => 
            array (
                'DistrictID' => 2167,
                'DistrictName' => '南江县',
                'CityID' => 251,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            167 => 
            array (
                'DistrictID' => 2168,
                'DistrictName' => '平昌县',
                'CityID' => 251,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            168 => 
            array (
                'DistrictID' => 2169,
                'DistrictName' => '雁江区',
                'CityID' => 252,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            169 => 
            array (
                'DistrictID' => 2170,
                'DistrictName' => '安岳县',
                'CityID' => 252,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            170 => 
            array (
                'DistrictID' => 2171,
                'DistrictName' => '乐至县',
                'CityID' => 252,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            171 => 
            array (
                'DistrictID' => 2172,
                'DistrictName' => '简阳市',
                'CityID' => 252,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            172 => 
            array (
                'DistrictID' => 2173,
                'DistrictName' => '汶川县',
                'CityID' => 253,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            173 => 
            array (
                'DistrictID' => 2174,
                'DistrictName' => '理县',
                'CityID' => 253,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            174 => 
            array (
                'DistrictID' => 2175,
                'DistrictName' => '茂县',
                'CityID' => 253,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            175 => 
            array (
                'DistrictID' => 2176,
                'DistrictName' => '松潘县',
                'CityID' => 253,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            176 => 
            array (
                'DistrictID' => 2177,
                'DistrictName' => '九寨沟县',
                'CityID' => 253,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            177 => 
            array (
                'DistrictID' => 2178,
                'DistrictName' => '金川县',
                'CityID' => 253,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            178 => 
            array (
                'DistrictID' => 2179,
                'DistrictName' => '小金县',
                'CityID' => 253,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            179 => 
            array (
                'DistrictID' => 2180,
                'DistrictName' => '黑水县',
                'CityID' => 253,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            180 => 
            array (
                'DistrictID' => 2181,
                'DistrictName' => '马尔康县',
                'CityID' => 253,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            181 => 
            array (
                'DistrictID' => 2182,
                'DistrictName' => '壤塘县',
                'CityID' => 253,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            182 => 
            array (
                'DistrictID' => 2183,
                'DistrictName' => '阿坝县',
                'CityID' => 253,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            183 => 
            array (
                'DistrictID' => 2184,
                'DistrictName' => '若尔盖县',
                'CityID' => 253,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            184 => 
            array (
                'DistrictID' => 2185,
                'DistrictName' => '红原县',
                'CityID' => 253,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            185 => 
            array (
                'DistrictID' => 2186,
                'DistrictName' => '康定县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            186 => 
            array (
                'DistrictID' => 2187,
                'DistrictName' => '泸定县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            187 => 
            array (
                'DistrictID' => 2188,
                'DistrictName' => '丹巴县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            188 => 
            array (
                'DistrictID' => 2189,
                'DistrictName' => '九龙县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            189 => 
            array (
                'DistrictID' => 2190,
                'DistrictName' => '雅江县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            190 => 
            array (
                'DistrictID' => 2191,
                'DistrictName' => '道孚县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            191 => 
            array (
                'DistrictID' => 2192,
                'DistrictName' => '炉霍县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            192 => 
            array (
                'DistrictID' => 2193,
                'DistrictName' => '甘孜县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            193 => 
            array (
                'DistrictID' => 2194,
                'DistrictName' => '新龙县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            194 => 
            array (
                'DistrictID' => 2195,
                'DistrictName' => '德格县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            195 => 
            array (
                'DistrictID' => 2196,
                'DistrictName' => '白玉县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            196 => 
            array (
                'DistrictID' => 2197,
                'DistrictName' => '石渠县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            197 => 
            array (
                'DistrictID' => 2198,
                'DistrictName' => '色达县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            198 => 
            array (
                'DistrictID' => 2199,
                'DistrictName' => '理塘县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            199 => 
            array (
                'DistrictID' => 2200,
                'DistrictName' => '巴塘县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            200 => 
            array (
                'DistrictID' => 2201,
                'DistrictName' => '乡城县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            201 => 
            array (
                'DistrictID' => 2202,
                'DistrictName' => '稻城县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            202 => 
            array (
                'DistrictID' => 2203,
                'DistrictName' => '得荣县',
                'CityID' => 254,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            203 => 
            array (
                'DistrictID' => 2204,
                'DistrictName' => '西昌市',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            204 => 
            array (
                'DistrictID' => 2205,
                'DistrictName' => '木里藏族自治县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            205 => 
            array (
                'DistrictID' => 2206,
                'DistrictName' => '盐源县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            206 => 
            array (
                'DistrictID' => 2207,
                'DistrictName' => '德昌县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            207 => 
            array (
                'DistrictID' => 2208,
                'DistrictName' => '会理县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            208 => 
            array (
                'DistrictID' => 2209,
                'DistrictName' => '会东县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            209 => 
            array (
                'DistrictID' => 2210,
                'DistrictName' => '宁南县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            210 => 
            array (
                'DistrictID' => 2211,
                'DistrictName' => '普格县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            211 => 
            array (
                'DistrictID' => 2212,
                'DistrictName' => '布拖县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            212 => 
            array (
                'DistrictID' => 2213,
                'DistrictName' => '金阳县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            213 => 
            array (
                'DistrictID' => 2214,
                'DistrictName' => '昭觉县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            214 => 
            array (
                'DistrictID' => 2215,
                'DistrictName' => '喜德县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            215 => 
            array (
                'DistrictID' => 2216,
                'DistrictName' => '冕宁县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            216 => 
            array (
                'DistrictID' => 2217,
                'DistrictName' => '越西县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            217 => 
            array (
                'DistrictID' => 2218,
                'DistrictName' => '甘洛县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            218 => 
            array (
                'DistrictID' => 2219,
                'DistrictName' => '美姑县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            219 => 
            array (
                'DistrictID' => 2220,
                'DistrictName' => '雷波县',
                'CityID' => 255,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            220 => 
            array (
                'DistrictID' => 2221,
                'DistrictName' => '南明区',
                'CityID' => 256,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            221 => 
            array (
                'DistrictID' => 2222,
                'DistrictName' => '云岩区',
                'CityID' => 256,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            222 => 
            array (
                'DistrictID' => 2223,
                'DistrictName' => '花溪区',
                'CityID' => 256,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            223 => 
            array (
                'DistrictID' => 2224,
                'DistrictName' => '乌当区',
                'CityID' => 256,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            224 => 
            array (
                'DistrictID' => 2225,
                'DistrictName' => '白云区',
                'CityID' => 256,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            225 => 
            array (
                'DistrictID' => 2226,
                'DistrictName' => '小河区',
                'CityID' => 256,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            226 => 
            array (
                'DistrictID' => 2227,
                'DistrictName' => '开阳县',
                'CityID' => 256,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            227 => 
            array (
                'DistrictID' => 2228,
                'DistrictName' => '息烽县',
                'CityID' => 256,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            228 => 
            array (
                'DistrictID' => 2229,
                'DistrictName' => '修文县',
                'CityID' => 256,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            229 => 
            array (
                'DistrictID' => 2230,
                'DistrictName' => '清镇市',
                'CityID' => 256,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            230 => 
            array (
                'DistrictID' => 2231,
                'DistrictName' => '钟山区',
                'CityID' => 257,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            231 => 
            array (
                'DistrictID' => 2232,
                'DistrictName' => '六枝特区',
                'CityID' => 257,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            232 => 
            array (
                'DistrictID' => 2233,
                'DistrictName' => '水城县',
                'CityID' => 257,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            233 => 
            array (
                'DistrictID' => 2234,
                'DistrictName' => '盘县',
                'CityID' => 257,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            234 => 
            array (
                'DistrictID' => 2235,
                'DistrictName' => '红花岗区',
                'CityID' => 258,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            235 => 
            array (
                'DistrictID' => 2236,
                'DistrictName' => '汇川区',
                'CityID' => 258,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            236 => 
            array (
                'DistrictID' => 2237,
                'DistrictName' => '遵义县',
                'CityID' => 258,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            237 => 
            array (
                'DistrictID' => 2238,
                'DistrictName' => '桐梓县',
                'CityID' => 258,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            238 => 
            array (
                'DistrictID' => 2239,
                'DistrictName' => '绥阳县',
                'CityID' => 258,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            239 => 
            array (
                'DistrictID' => 2240,
                'DistrictName' => '正安县',
                'CityID' => 258,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            240 => 
            array (
                'DistrictID' => 2241,
                'DistrictName' => '道真仡佬族苗族自治县',
                'CityID' => 258,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            241 => 
            array (
                'DistrictID' => 2242,
                'DistrictName' => '务川仡佬族苗族自治县',
                'CityID' => 258,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            242 => 
            array (
                'DistrictID' => 2243,
                'DistrictName' => '凤冈县',
                'CityID' => 258,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            243 => 
            array (
                'DistrictID' => 2244,
                'DistrictName' => '湄潭县',
                'CityID' => 258,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            244 => 
            array (
                'DistrictID' => 2245,
                'DistrictName' => '余庆县',
                'CityID' => 258,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            245 => 
            array (
                'DistrictID' => 2246,
                'DistrictName' => '习水县',
                'CityID' => 258,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            246 => 
            array (
                'DistrictID' => 2247,
                'DistrictName' => '赤水市',
                'CityID' => 258,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            247 => 
            array (
                'DistrictID' => 2248,
                'DistrictName' => '仁怀市',
                'CityID' => 258,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            248 => 
            array (
                'DistrictID' => 2249,
                'DistrictName' => '西秀区',
                'CityID' => 259,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            249 => 
            array (
                'DistrictID' => 2250,
                'DistrictName' => '平坝县',
                'CityID' => 259,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            250 => 
            array (
                'DistrictID' => 2251,
                'DistrictName' => '普定县',
                'CityID' => 259,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            251 => 
            array (
                'DistrictID' => 2252,
                'DistrictName' => '镇宁布依族苗族自治县',
                'CityID' => 259,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            252 => 
            array (
                'DistrictID' => 2253,
                'DistrictName' => '关岭布依族苗族自治县',
                'CityID' => 259,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            253 => 
            array (
                'DistrictID' => 2254,
                'DistrictName' => '紫云苗族布依族自治县',
                'CityID' => 259,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            254 => 
            array (
                'DistrictID' => 2255,
                'DistrictName' => '铜仁市',
                'CityID' => 260,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            255 => 
            array (
                'DistrictID' => 2256,
                'DistrictName' => '江口县',
                'CityID' => 260,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            256 => 
            array (
                'DistrictID' => 2257,
                'DistrictName' => '玉屏侗族自治县',
                'CityID' => 260,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            257 => 
            array (
                'DistrictID' => 2258,
                'DistrictName' => '石阡县',
                'CityID' => 260,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            258 => 
            array (
                'DistrictID' => 2259,
                'DistrictName' => '思南县',
                'CityID' => 260,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            259 => 
            array (
                'DistrictID' => 2260,
                'DistrictName' => '印江土家族苗族自治县',
                'CityID' => 260,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            260 => 
            array (
                'DistrictID' => 2261,
                'DistrictName' => '德江县',
                'CityID' => 260,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            261 => 
            array (
                'DistrictID' => 2262,
                'DistrictName' => '沿河土家族自治县',
                'CityID' => 260,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            262 => 
            array (
                'DistrictID' => 2263,
                'DistrictName' => '松桃苗族自治县',
                'CityID' => 260,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            263 => 
            array (
                'DistrictID' => 2264,
                'DistrictName' => '万山特区',
                'CityID' => 260,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            264 => 
            array (
                'DistrictID' => 2265,
                'DistrictName' => '兴义市',
                'CityID' => 261,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            265 => 
            array (
                'DistrictID' => 2266,
                'DistrictName' => '兴仁县',
                'CityID' => 261,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            266 => 
            array (
                'DistrictID' => 2267,
                'DistrictName' => '普安县',
                'CityID' => 261,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            267 => 
            array (
                'DistrictID' => 2268,
                'DistrictName' => '晴隆县',
                'CityID' => 261,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            268 => 
            array (
                'DistrictID' => 2269,
                'DistrictName' => '贞丰县',
                'CityID' => 261,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            269 => 
            array (
                'DistrictID' => 2270,
                'DistrictName' => '望谟县',
                'CityID' => 261,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            270 => 
            array (
                'DistrictID' => 2271,
                'DistrictName' => '册亨县',
                'CityID' => 261,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            271 => 
            array (
                'DistrictID' => 2272,
                'DistrictName' => '安龙县',
                'CityID' => 261,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            272 => 
            array (
                'DistrictID' => 2273,
                'DistrictName' => '毕节市',
                'CityID' => 262,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            273 => 
            array (
                'DistrictID' => 2274,
                'DistrictName' => '大方县',
                'CityID' => 262,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            274 => 
            array (
                'DistrictID' => 2275,
                'DistrictName' => '黔西县',
                'CityID' => 262,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            275 => 
            array (
                'DistrictID' => 2276,
                'DistrictName' => '金沙县',
                'CityID' => 262,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            276 => 
            array (
                'DistrictID' => 2277,
                'DistrictName' => '织金县',
                'CityID' => 262,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            277 => 
            array (
                'DistrictID' => 2278,
                'DistrictName' => '纳雍县',
                'CityID' => 262,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            278 => 
            array (
                'DistrictID' => 2279,
                'DistrictName' => '威宁彝族回族苗族自治县',
                'CityID' => 262,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            279 => 
            array (
                'DistrictID' => 2280,
                'DistrictName' => '赫章县',
                'CityID' => 262,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            280 => 
            array (
                'DistrictID' => 2281,
                'DistrictName' => '凯里市',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            281 => 
            array (
                'DistrictID' => 2282,
                'DistrictName' => '黄平县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            282 => 
            array (
                'DistrictID' => 2283,
                'DistrictName' => '施秉县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            283 => 
            array (
                'DistrictID' => 2284,
                'DistrictName' => '三穗县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            284 => 
            array (
                'DistrictID' => 2285,
                'DistrictName' => '镇远县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            285 => 
            array (
                'DistrictID' => 2286,
                'DistrictName' => '岑巩县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            286 => 
            array (
                'DistrictID' => 2287,
                'DistrictName' => '天柱县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            287 => 
            array (
                'DistrictID' => 2288,
                'DistrictName' => '锦屏县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            288 => 
            array (
                'DistrictID' => 2289,
                'DistrictName' => '剑河县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            289 => 
            array (
                'DistrictID' => 2290,
                'DistrictName' => '台江县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            290 => 
            array (
                'DistrictID' => 2291,
                'DistrictName' => '黎平县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            291 => 
            array (
                'DistrictID' => 2292,
                'DistrictName' => '榕江县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            292 => 
            array (
                'DistrictID' => 2293,
                'DistrictName' => '从江县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            293 => 
            array (
                'DistrictID' => 2294,
                'DistrictName' => '雷山县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            294 => 
            array (
                'DistrictID' => 2295,
                'DistrictName' => '麻江县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            295 => 
            array (
                'DistrictID' => 2296,
                'DistrictName' => '丹寨县',
                'CityID' => 263,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            296 => 
            array (
                'DistrictID' => 2297,
                'DistrictName' => '都匀市',
                'CityID' => 264,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            297 => 
            array (
                'DistrictID' => 2298,
                'DistrictName' => '福泉市',
                'CityID' => 264,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            298 => 
            array (
                'DistrictID' => 2299,
                'DistrictName' => '荔波县',
                'CityID' => 264,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            299 => 
            array (
                'DistrictID' => 2300,
                'DistrictName' => '贵定县',
                'CityID' => 264,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            300 => 
            array (
                'DistrictID' => 2301,
                'DistrictName' => '瓮安县',
                'CityID' => 264,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            301 => 
            array (
                'DistrictID' => 2302,
                'DistrictName' => '独山县',
                'CityID' => 264,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            302 => 
            array (
                'DistrictID' => 2303,
                'DistrictName' => '平塘县',
                'CityID' => 264,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            303 => 
            array (
                'DistrictID' => 2304,
                'DistrictName' => '罗甸县',
                'CityID' => 264,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            304 => 
            array (
                'DistrictID' => 2305,
                'DistrictName' => '长顺县',
                'CityID' => 264,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            305 => 
            array (
                'DistrictID' => 2306,
                'DistrictName' => '龙里县',
                'CityID' => 264,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            306 => 
            array (
                'DistrictID' => 2307,
                'DistrictName' => '惠水县',
                'CityID' => 264,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            307 => 
            array (
                'DistrictID' => 2308,
                'DistrictName' => '三都水族自治县',
                'CityID' => 264,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            308 => 
            array (
                'DistrictID' => 2309,
                'DistrictName' => '五华区',
                'CityID' => 265,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            309 => 
            array (
                'DistrictID' => 2310,
                'DistrictName' => '盘龙区',
                'CityID' => 265,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            310 => 
            array (
                'DistrictID' => 2311,
                'DistrictName' => '官渡区',
                'CityID' => 265,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            311 => 
            array (
                'DistrictID' => 2312,
                'DistrictName' => '西山区',
                'CityID' => 265,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            312 => 
            array (
                'DistrictID' => 2313,
                'DistrictName' => '东川区',
                'CityID' => 265,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            313 => 
            array (
                'DistrictID' => 2314,
                'DistrictName' => '呈贡县',
                'CityID' => 265,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            314 => 
            array (
                'DistrictID' => 2315,
                'DistrictName' => '晋宁县',
                'CityID' => 265,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            315 => 
            array (
                'DistrictID' => 2316,
                'DistrictName' => '富民县',
                'CityID' => 265,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            316 => 
            array (
                'DistrictID' => 2317,
                'DistrictName' => '宜良县',
                'CityID' => 265,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            317 => 
            array (
                'DistrictID' => 2318,
                'DistrictName' => '石林彝族自治县',
                'CityID' => 265,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            318 => 
            array (
                'DistrictID' => 2319,
                'DistrictName' => '嵩明县',
                'CityID' => 265,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            319 => 
            array (
                'DistrictID' => 2320,
                'DistrictName' => '禄劝彝族苗族自治县',
                'CityID' => 265,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            320 => 
            array (
                'DistrictID' => 2321,
                'DistrictName' => '寻甸回族彝族自治县',
                'CityID' => 265,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            321 => 
            array (
                'DistrictID' => 2322,
                'DistrictName' => '安宁市',
                'CityID' => 265,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            322 => 
            array (
                'DistrictID' => 2323,
                'DistrictName' => '麒麟区',
                'CityID' => 266,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            323 => 
            array (
                'DistrictID' => 2324,
                'DistrictName' => '马龙县',
                'CityID' => 266,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            324 => 
            array (
                'DistrictID' => 2325,
                'DistrictName' => '陆良县',
                'CityID' => 266,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            325 => 
            array (
                'DistrictID' => 2326,
                'DistrictName' => '师宗县',
                'CityID' => 266,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            326 => 
            array (
                'DistrictID' => 2327,
                'DistrictName' => '罗平县',
                'CityID' => 266,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            327 => 
            array (
                'DistrictID' => 2328,
                'DistrictName' => '富源县',
                'CityID' => 266,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            328 => 
            array (
                'DistrictID' => 2329,
                'DistrictName' => '会泽县',
                'CityID' => 266,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            329 => 
            array (
                'DistrictID' => 2330,
                'DistrictName' => '沾益县',
                'CityID' => 266,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            330 => 
            array (
                'DistrictID' => 2331,
                'DistrictName' => '宣威市',
                'CityID' => 266,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            331 => 
            array (
                'DistrictID' => 2332,
                'DistrictName' => '红塔区',
                'CityID' => 267,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            332 => 
            array (
                'DistrictID' => 2333,
                'DistrictName' => '江川县',
                'CityID' => 267,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            333 => 
            array (
                'DistrictID' => 2334,
                'DistrictName' => '澄江县',
                'CityID' => 267,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            334 => 
            array (
                'DistrictID' => 2335,
                'DistrictName' => '通海县',
                'CityID' => 267,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            335 => 
            array (
                'DistrictID' => 2336,
                'DistrictName' => '华宁县',
                'CityID' => 267,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            336 => 
            array (
                'DistrictID' => 2337,
                'DistrictName' => '易门县',
                'CityID' => 267,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            337 => 
            array (
                'DistrictID' => 2338,
                'DistrictName' => '峨山彝族自治县',
                'CityID' => 267,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            338 => 
            array (
                'DistrictID' => 2339,
                'DistrictName' => '新平彝族傣族自治县',
                'CityID' => 267,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            339 => 
            array (
                'DistrictID' => 2340,
                'DistrictName' => '元江哈尼族彝族傣族自治县',
                'CityID' => 267,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            340 => 
            array (
                'DistrictID' => 2341,
                'DistrictName' => '隆阳区',
                'CityID' => 268,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            341 => 
            array (
                'DistrictID' => 2342,
                'DistrictName' => '施甸县',
                'CityID' => 268,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            342 => 
            array (
                'DistrictID' => 2343,
                'DistrictName' => '腾冲县',
                'CityID' => 268,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            343 => 
            array (
                'DistrictID' => 2344,
                'DistrictName' => '龙陵县',
                'CityID' => 268,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            344 => 
            array (
                'DistrictID' => 2345,
                'DistrictName' => '昌宁县',
                'CityID' => 268,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            345 => 
            array (
                'DistrictID' => 2346,
                'DistrictName' => '昭阳区',
                'CityID' => 269,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            346 => 
            array (
                'DistrictID' => 2347,
                'DistrictName' => '鲁甸县',
                'CityID' => 269,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            347 => 
            array (
                'DistrictID' => 2348,
                'DistrictName' => '巧家县',
                'CityID' => 269,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            348 => 
            array (
                'DistrictID' => 2349,
                'DistrictName' => '盐津县',
                'CityID' => 269,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            349 => 
            array (
                'DistrictID' => 2350,
                'DistrictName' => '大关县',
                'CityID' => 269,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            350 => 
            array (
                'DistrictID' => 2351,
                'DistrictName' => '永善县',
                'CityID' => 269,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            351 => 
            array (
                'DistrictID' => 2352,
                'DistrictName' => '绥江县',
                'CityID' => 269,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            352 => 
            array (
                'DistrictID' => 2353,
                'DistrictName' => '镇雄县',
                'CityID' => 269,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            353 => 
            array (
                'DistrictID' => 2354,
                'DistrictName' => '彝良县',
                'CityID' => 269,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            354 => 
            array (
                'DistrictID' => 2355,
                'DistrictName' => '威信县',
                'CityID' => 269,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            355 => 
            array (
                'DistrictID' => 2356,
                'DistrictName' => '水富县',
                'CityID' => 269,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            356 => 
            array (
                'DistrictID' => 2357,
                'DistrictName' => '古城区',
                'CityID' => 270,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            357 => 
            array (
                'DistrictID' => 2358,
                'DistrictName' => '玉龙纳西族自治县',
                'CityID' => 270,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            358 => 
            array (
                'DistrictID' => 2359,
                'DistrictName' => '永胜县',
                'CityID' => 270,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            359 => 
            array (
                'DistrictID' => 2360,
                'DistrictName' => '华坪县',
                'CityID' => 270,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            360 => 
            array (
                'DistrictID' => 2361,
                'DistrictName' => '宁蒗彝族自治县',
                'CityID' => 270,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            361 => 
            array (
                'DistrictID' => 2362,
                'DistrictName' => '翠云区',
                'CityID' => 271,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            362 => 
            array (
                'DistrictID' => 2363,
                'DistrictName' => '普洱哈尼族彝族自治县',
                'CityID' => 271,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            363 => 
            array (
                'DistrictID' => 2364,
                'DistrictName' => '墨江哈尼族自治县',
                'CityID' => 271,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            364 => 
            array (
                'DistrictID' => 2365,
                'DistrictName' => '景东彝族自治县',
                'CityID' => 271,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            365 => 
            array (
                'DistrictID' => 2366,
                'DistrictName' => '景谷傣族彝族自治县',
                'CityID' => 271,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            366 => 
            array (
                'DistrictID' => 2367,
                'DistrictName' => '镇沅彝族哈尼族拉祜族自治县',
                'CityID' => 271,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            367 => 
            array (
                'DistrictID' => 2368,
                'DistrictName' => '江城哈尼族彝族自治县',
                'CityID' => 271,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            368 => 
            array (
                'DistrictID' => 2369,
                'DistrictName' => '孟连傣族拉祜族佤族自治县',
                'CityID' => 271,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            369 => 
            array (
                'DistrictID' => 2370,
                'DistrictName' => '澜沧拉祜族自治县',
                'CityID' => 271,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            370 => 
            array (
                'DistrictID' => 2371,
                'DistrictName' => '西盟佤族自治县',
                'CityID' => 271,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            371 => 
            array (
                'DistrictID' => 2372,
                'DistrictName' => '临翔区',
                'CityID' => 272,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            372 => 
            array (
                'DistrictID' => 2373,
                'DistrictName' => '凤庆县',
                'CityID' => 272,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            373 => 
            array (
                'DistrictID' => 2374,
                'DistrictName' => '云县',
                'CityID' => 272,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            374 => 
            array (
                'DistrictID' => 2375,
                'DistrictName' => '永德县',
                'CityID' => 272,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            375 => 
            array (
                'DistrictID' => 2376,
                'DistrictName' => '镇康县',
                'CityID' => 272,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            376 => 
            array (
                'DistrictID' => 2377,
                'DistrictName' => '双江拉祜族佤族布朗族傣族自治县',
                'CityID' => 272,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            377 => 
            array (
                'DistrictID' => 2378,
                'DistrictName' => '耿马傣族佤族自治县',
                'CityID' => 272,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            378 => 
            array (
                'DistrictID' => 2379,
                'DistrictName' => '沧源佤族自治县',
                'CityID' => 272,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            379 => 
            array (
                'DistrictID' => 2380,
                'DistrictName' => '楚雄市',
                'CityID' => 273,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            380 => 
            array (
                'DistrictID' => 2381,
                'DistrictName' => '双柏县',
                'CityID' => 273,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            381 => 
            array (
                'DistrictID' => 2382,
                'DistrictName' => '牟定县',
                'CityID' => 273,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            382 => 
            array (
                'DistrictID' => 2383,
                'DistrictName' => '南华县',
                'CityID' => 273,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            383 => 
            array (
                'DistrictID' => 2384,
                'DistrictName' => '姚安县',
                'CityID' => 273,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            384 => 
            array (
                'DistrictID' => 2385,
                'DistrictName' => '大姚县',
                'CityID' => 273,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            385 => 
            array (
                'DistrictID' => 2386,
                'DistrictName' => '永仁县',
                'CityID' => 273,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            386 => 
            array (
                'DistrictID' => 2387,
                'DistrictName' => '元谋县',
                'CityID' => 273,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            387 => 
            array (
                'DistrictID' => 2388,
                'DistrictName' => '武定县',
                'CityID' => 273,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            388 => 
            array (
                'DistrictID' => 2389,
                'DistrictName' => '禄丰县',
                'CityID' => 273,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            389 => 
            array (
                'DistrictID' => 2390,
                'DistrictName' => '个旧市',
                'CityID' => 274,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            390 => 
            array (
                'DistrictID' => 2391,
                'DistrictName' => '开远市',
                'CityID' => 274,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            391 => 
            array (
                'DistrictID' => 2392,
                'DistrictName' => '蒙自县',
                'CityID' => 274,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            392 => 
            array (
                'DistrictID' => 2393,
                'DistrictName' => '屏边苗族自治县',
                'CityID' => 274,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            393 => 
            array (
                'DistrictID' => 2394,
                'DistrictName' => '建水县',
                'CityID' => 274,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            394 => 
            array (
                'DistrictID' => 2395,
                'DistrictName' => '石屏县',
                'CityID' => 274,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            395 => 
            array (
                'DistrictID' => 2396,
                'DistrictName' => '弥勒县',
                'CityID' => 274,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            396 => 
            array (
                'DistrictID' => 2397,
                'DistrictName' => '泸西县',
                'CityID' => 274,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            397 => 
            array (
                'DistrictID' => 2398,
                'DistrictName' => '元阳县',
                'CityID' => 274,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            398 => 
            array (
                'DistrictID' => 2399,
                'DistrictName' => '红河县',
                'CityID' => 274,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            399 => 
            array (
                'DistrictID' => 2400,
                'DistrictName' => '金平苗族瑶族傣族自治县',
                'CityID' => 274,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            400 => 
            array (
                'DistrictID' => 2401,
                'DistrictName' => '绿春县',
                'CityID' => 274,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            401 => 
            array (
                'DistrictID' => 2402,
                'DistrictName' => '河口瑶族自治县',
                'CityID' => 274,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            402 => 
            array (
                'DistrictID' => 2403,
                'DistrictName' => '文山县',
                'CityID' => 275,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            403 => 
            array (
                'DistrictID' => 2404,
                'DistrictName' => '砚山县',
                'CityID' => 275,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            404 => 
            array (
                'DistrictID' => 2405,
                'DistrictName' => '西畴县',
                'CityID' => 275,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            405 => 
            array (
                'DistrictID' => 2406,
                'DistrictName' => '麻栗坡县',
                'CityID' => 275,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            406 => 
            array (
                'DistrictID' => 2407,
                'DistrictName' => '马关县',
                'CityID' => 275,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            407 => 
            array (
                'DistrictID' => 2408,
                'DistrictName' => '丘北县',
                'CityID' => 275,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            408 => 
            array (
                'DistrictID' => 2409,
                'DistrictName' => '广南县',
                'CityID' => 275,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            409 => 
            array (
                'DistrictID' => 2410,
                'DistrictName' => '富宁县',
                'CityID' => 275,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            410 => 
            array (
                'DistrictID' => 2411,
                'DistrictName' => '景洪市',
                'CityID' => 276,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            411 => 
            array (
                'DistrictID' => 2412,
                'DistrictName' => '勐海县',
                'CityID' => 276,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            412 => 
            array (
                'DistrictID' => 2413,
                'DistrictName' => '勐腊县',
                'CityID' => 276,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            413 => 
            array (
                'DistrictID' => 2414,
                'DistrictName' => '大理市',
                'CityID' => 277,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            414 => 
            array (
                'DistrictID' => 2415,
                'DistrictName' => '漾濞彝族自治县',
                'CityID' => 277,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            415 => 
            array (
                'DistrictID' => 2416,
                'DistrictName' => '祥云县',
                'CityID' => 277,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            416 => 
            array (
                'DistrictID' => 2417,
                'DistrictName' => '宾川县',
                'CityID' => 277,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            417 => 
            array (
                'DistrictID' => 2418,
                'DistrictName' => '弥渡县',
                'CityID' => 277,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            418 => 
            array (
                'DistrictID' => 2419,
                'DistrictName' => '南涧彝族自治县',
                'CityID' => 277,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            419 => 
            array (
                'DistrictID' => 2420,
                'DistrictName' => '巍山彝族回族自治县',
                'CityID' => 277,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            420 => 
            array (
                'DistrictID' => 2421,
                'DistrictName' => '永平县',
                'CityID' => 277,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            421 => 
            array (
                'DistrictID' => 2422,
                'DistrictName' => '云龙县',
                'CityID' => 277,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            422 => 
            array (
                'DistrictID' => 2423,
                'DistrictName' => '洱源县',
                'CityID' => 277,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            423 => 
            array (
                'DistrictID' => 2424,
                'DistrictName' => '剑川县',
                'CityID' => 277,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            424 => 
            array (
                'DistrictID' => 2425,
                'DistrictName' => '鹤庆县',
                'CityID' => 277,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            425 => 
            array (
                'DistrictID' => 2426,
                'DistrictName' => '瑞丽市',
                'CityID' => 278,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            426 => 
            array (
                'DistrictID' => 2427,
                'DistrictName' => '潞西市',
                'CityID' => 278,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            427 => 
            array (
                'DistrictID' => 2428,
                'DistrictName' => '梁河县',
                'CityID' => 278,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            428 => 
            array (
                'DistrictID' => 2429,
                'DistrictName' => '盈江县',
                'CityID' => 278,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            429 => 
            array (
                'DistrictID' => 2430,
                'DistrictName' => '陇川县',
                'CityID' => 278,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            430 => 
            array (
                'DistrictID' => 2431,
                'DistrictName' => '泸水县',
                'CityID' => 279,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            431 => 
            array (
                'DistrictID' => 2432,
                'DistrictName' => '福贡县',
                'CityID' => 279,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            432 => 
            array (
                'DistrictID' => 2433,
                'DistrictName' => '贡山独龙族怒族自治县',
                'CityID' => 279,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            433 => 
            array (
                'DistrictID' => 2434,
                'DistrictName' => '兰坪白族普米族自治县',
                'CityID' => 279,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            434 => 
            array (
                'DistrictID' => 2435,
                'DistrictName' => '香格里拉县',
                'CityID' => 280,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            435 => 
            array (
                'DistrictID' => 2436,
                'DistrictName' => '德钦县',
                'CityID' => 280,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            436 => 
            array (
                'DistrictID' => 2437,
                'DistrictName' => '维西傈僳族自治县',
                'CityID' => 280,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            437 => 
            array (
                'DistrictID' => 2438,
                'DistrictName' => '城关区',
                'CityID' => 281,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            438 => 
            array (
                'DistrictID' => 2439,
                'DistrictName' => '林周县',
                'CityID' => 281,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            439 => 
            array (
                'DistrictID' => 2440,
                'DistrictName' => '当雄县',
                'CityID' => 281,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            440 => 
            array (
                'DistrictID' => 2441,
                'DistrictName' => '尼木县',
                'CityID' => 281,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            441 => 
            array (
                'DistrictID' => 2442,
                'DistrictName' => '曲水县',
                'CityID' => 281,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            442 => 
            array (
                'DistrictID' => 2443,
                'DistrictName' => '堆龙德庆县',
                'CityID' => 281,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            443 => 
            array (
                'DistrictID' => 2444,
                'DistrictName' => '达孜县',
                'CityID' => 281,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            444 => 
            array (
                'DistrictID' => 2445,
                'DistrictName' => '墨竹工卡县',
                'CityID' => 281,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            445 => 
            array (
                'DistrictID' => 2446,
                'DistrictName' => '昌都县',
                'CityID' => 282,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            446 => 
            array (
                'DistrictID' => 2447,
                'DistrictName' => '江达县',
                'CityID' => 282,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            447 => 
            array (
                'DistrictID' => 2448,
                'DistrictName' => '贡觉县',
                'CityID' => 282,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            448 => 
            array (
                'DistrictID' => 2449,
                'DistrictName' => '类乌齐县',
                'CityID' => 282,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            449 => 
            array (
                'DistrictID' => 2450,
                'DistrictName' => '丁青县',
                'CityID' => 282,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            450 => 
            array (
                'DistrictID' => 2451,
                'DistrictName' => '察雅县',
                'CityID' => 282,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            451 => 
            array (
                'DistrictID' => 2452,
                'DistrictName' => '八宿县',
                'CityID' => 282,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            452 => 
            array (
                'DistrictID' => 2453,
                'DistrictName' => '左贡县',
                'CityID' => 282,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            453 => 
            array (
                'DistrictID' => 2454,
                'DistrictName' => '芒康县',
                'CityID' => 282,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            454 => 
            array (
                'DistrictID' => 2455,
                'DistrictName' => '洛隆县',
                'CityID' => 282,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            455 => 
            array (
                'DistrictID' => 2456,
                'DistrictName' => '边坝县',
                'CityID' => 282,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            456 => 
            array (
                'DistrictID' => 2457,
                'DistrictName' => '乃东县',
                'CityID' => 283,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            457 => 
            array (
                'DistrictID' => 2458,
                'DistrictName' => '扎囊县',
                'CityID' => 283,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            458 => 
            array (
                'DistrictID' => 2459,
                'DistrictName' => '贡嘎县',
                'CityID' => 283,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            459 => 
            array (
                'DistrictID' => 2460,
                'DistrictName' => '桑日县',
                'CityID' => 283,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            460 => 
            array (
                'DistrictID' => 2461,
                'DistrictName' => '琼结县',
                'CityID' => 283,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            461 => 
            array (
                'DistrictID' => 2462,
                'DistrictName' => '曲松县',
                'CityID' => 283,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            462 => 
            array (
                'DistrictID' => 2463,
                'DistrictName' => '措美县',
                'CityID' => 283,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            463 => 
            array (
                'DistrictID' => 2464,
                'DistrictName' => '洛扎县',
                'CityID' => 283,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            464 => 
            array (
                'DistrictID' => 2465,
                'DistrictName' => '加查县',
                'CityID' => 283,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            465 => 
            array (
                'DistrictID' => 2466,
                'DistrictName' => '隆子县',
                'CityID' => 283,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            466 => 
            array (
                'DistrictID' => 2467,
                'DistrictName' => '错那县',
                'CityID' => 283,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            467 => 
            array (
                'DistrictID' => 2468,
                'DistrictName' => '浪卡子县',
                'CityID' => 283,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            468 => 
            array (
                'DistrictID' => 2469,
                'DistrictName' => '日喀则市',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            469 => 
            array (
                'DistrictID' => 2470,
                'DistrictName' => '南木林县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            470 => 
            array (
                'DistrictID' => 2471,
                'DistrictName' => '江孜县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            471 => 
            array (
                'DistrictID' => 2472,
                'DistrictName' => '定日县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            472 => 
            array (
                'DistrictID' => 2473,
                'DistrictName' => '萨迦县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            473 => 
            array (
                'DistrictID' => 2474,
                'DistrictName' => '拉孜县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            474 => 
            array (
                'DistrictID' => 2475,
                'DistrictName' => '昂仁县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            475 => 
            array (
                'DistrictID' => 2476,
                'DistrictName' => '谢通门县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            476 => 
            array (
                'DistrictID' => 2477,
                'DistrictName' => '白朗县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            477 => 
            array (
                'DistrictID' => 2478,
                'DistrictName' => '仁布县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            478 => 
            array (
                'DistrictID' => 2479,
                'DistrictName' => '康马县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            479 => 
            array (
                'DistrictID' => 2480,
                'DistrictName' => '定结县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            480 => 
            array (
                'DistrictID' => 2481,
                'DistrictName' => '仲巴县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            481 => 
            array (
                'DistrictID' => 2482,
                'DistrictName' => '亚东县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            482 => 
            array (
                'DistrictID' => 2483,
                'DistrictName' => '吉隆县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            483 => 
            array (
                'DistrictID' => 2484,
                'DistrictName' => '聂拉木县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            484 => 
            array (
                'DistrictID' => 2485,
                'DistrictName' => '萨嘎县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            485 => 
            array (
                'DistrictID' => 2486,
                'DistrictName' => '岗巴县',
                'CityID' => 284,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            486 => 
            array (
                'DistrictID' => 2487,
                'DistrictName' => '那曲县',
                'CityID' => 285,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            487 => 
            array (
                'DistrictID' => 2488,
                'DistrictName' => '嘉黎县',
                'CityID' => 285,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            488 => 
            array (
                'DistrictID' => 2489,
                'DistrictName' => '比如县',
                'CityID' => 285,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            489 => 
            array (
                'DistrictID' => 2490,
                'DistrictName' => '聂荣县',
                'CityID' => 285,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            490 => 
            array (
                'DistrictID' => 2491,
                'DistrictName' => '安多县',
                'CityID' => 285,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            491 => 
            array (
                'DistrictID' => 2492,
                'DistrictName' => '申扎县',
                'CityID' => 285,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            492 => 
            array (
                'DistrictID' => 2493,
                'DistrictName' => '索县',
                'CityID' => 285,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            493 => 
            array (
                'DistrictID' => 2494,
                'DistrictName' => '班戈县',
                'CityID' => 285,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            494 => 
            array (
                'DistrictID' => 2495,
                'DistrictName' => '巴青县',
                'CityID' => 285,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            495 => 
            array (
                'DistrictID' => 2496,
                'DistrictName' => '尼玛县',
                'CityID' => 285,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            496 => 
            array (
                'DistrictID' => 2497,
                'DistrictName' => '普兰县',
                'CityID' => 286,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            497 => 
            array (
                'DistrictID' => 2498,
                'DistrictName' => '札达县',
                'CityID' => 286,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            498 => 
            array (
                'DistrictID' => 2499,
                'DistrictName' => '噶尔县',
                'CityID' => 286,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            499 => 
            array (
                'DistrictID' => 2500,
                'DistrictName' => '日土县',
                'CityID' => 286,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
        ));
        \DB::table('district')->insert(array (
            0 => 
            array (
                'DistrictID' => 2501,
                'DistrictName' => '革吉县',
                'CityID' => 286,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            1 => 
            array (
                'DistrictID' => 2502,
                'DistrictName' => '改则县',
                'CityID' => 286,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            2 => 
            array (
                'DistrictID' => 2503,
                'DistrictName' => '措勤县',
                'CityID' => 286,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            3 => 
            array (
                'DistrictID' => 2504,
                'DistrictName' => '林芝县',
                'CityID' => 287,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            4 => 
            array (
                'DistrictID' => 2505,
                'DistrictName' => '工布江达县',
                'CityID' => 287,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            5 => 
            array (
                'DistrictID' => 2506,
                'DistrictName' => '米林县',
                'CityID' => 287,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            6 => 
            array (
                'DistrictID' => 2507,
                'DistrictName' => '墨脱县',
                'CityID' => 287,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            7 => 
            array (
                'DistrictID' => 2508,
                'DistrictName' => '波密县',
                'CityID' => 287,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            8 => 
            array (
                'DistrictID' => 2509,
                'DistrictName' => '察隅县',
                'CityID' => 287,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            9 => 
            array (
                'DistrictID' => 2510,
                'DistrictName' => '朗县',
                'CityID' => 287,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            10 => 
            array (
                'DistrictID' => 2511,
                'DistrictName' => '新城区',
                'CityID' => 288,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            11 => 
            array (
                'DistrictID' => 2512,
                'DistrictName' => '碑林区',
                'CityID' => 288,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            12 => 
            array (
                'DistrictID' => 2513,
                'DistrictName' => '莲湖区',
                'CityID' => 288,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            13 => 
            array (
                'DistrictID' => 2514,
                'DistrictName' => '灞桥区',
                'CityID' => 288,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            14 => 
            array (
                'DistrictID' => 2515,
                'DistrictName' => '未央区',
                'CityID' => 288,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            15 => 
            array (
                'DistrictID' => 2516,
                'DistrictName' => '雁塔区',
                'CityID' => 288,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            16 => 
            array (
                'DistrictID' => 2517,
                'DistrictName' => '阎良区',
                'CityID' => 288,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            17 => 
            array (
                'DistrictID' => 2518,
                'DistrictName' => '临潼区',
                'CityID' => 288,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            18 => 
            array (
                'DistrictID' => 2519,
                'DistrictName' => '长安区',
                'CityID' => 288,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            19 => 
            array (
                'DistrictID' => 2520,
                'DistrictName' => '蓝田县',
                'CityID' => 288,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            20 => 
            array (
                'DistrictID' => 2521,
                'DistrictName' => '周至县',
                'CityID' => 288,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            21 => 
            array (
                'DistrictID' => 2522,
                'DistrictName' => '户县',
                'CityID' => 288,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            22 => 
            array (
                'DistrictID' => 2523,
                'DistrictName' => '高陵县',
                'CityID' => 288,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            23 => 
            array (
                'DistrictID' => 2524,
                'DistrictName' => '王益区',
                'CityID' => 289,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            24 => 
            array (
                'DistrictID' => 2525,
                'DistrictName' => '印台区',
                'CityID' => 289,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            25 => 
            array (
                'DistrictID' => 2526,
                'DistrictName' => '耀州区',
                'CityID' => 289,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            26 => 
            array (
                'DistrictID' => 2527,
                'DistrictName' => '宜君县',
                'CityID' => 289,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            27 => 
            array (
                'DistrictID' => 2528,
                'DistrictName' => '渭滨区',
                'CityID' => 290,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            28 => 
            array (
                'DistrictID' => 2529,
                'DistrictName' => '金台区',
                'CityID' => 290,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            29 => 
            array (
                'DistrictID' => 2530,
                'DistrictName' => '陈仓区',
                'CityID' => 290,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            30 => 
            array (
                'DistrictID' => 2531,
                'DistrictName' => '凤翔县',
                'CityID' => 290,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            31 => 
            array (
                'DistrictID' => 2532,
                'DistrictName' => '岐山县',
                'CityID' => 290,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            32 => 
            array (
                'DistrictID' => 2533,
                'DistrictName' => '扶风县',
                'CityID' => 290,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            33 => 
            array (
                'DistrictID' => 2534,
                'DistrictName' => '眉县',
                'CityID' => 290,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            34 => 
            array (
                'DistrictID' => 2535,
                'DistrictName' => '陇县',
                'CityID' => 290,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            35 => 
            array (
                'DistrictID' => 2536,
                'DistrictName' => '千阳县',
                'CityID' => 290,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            36 => 
            array (
                'DistrictID' => 2537,
                'DistrictName' => '麟游县',
                'CityID' => 290,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            37 => 
            array (
                'DistrictID' => 2538,
                'DistrictName' => '凤县',
                'CityID' => 290,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            38 => 
            array (
                'DistrictID' => 2539,
                'DistrictName' => '太白县',
                'CityID' => 290,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            39 => 
            array (
                'DistrictID' => 2540,
                'DistrictName' => '秦都区',
                'CityID' => 291,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            40 => 
            array (
                'DistrictID' => 2541,
                'DistrictName' => '杨凌区',
                'CityID' => 291,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            41 => 
            array (
                'DistrictID' => 2542,
                'DistrictName' => '渭城区',
                'CityID' => 291,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            42 => 
            array (
                'DistrictID' => 2543,
                'DistrictName' => '三原县',
                'CityID' => 291,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            43 => 
            array (
                'DistrictID' => 2544,
                'DistrictName' => '泾阳县',
                'CityID' => 291,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            44 => 
            array (
                'DistrictID' => 2545,
                'DistrictName' => '乾县',
                'CityID' => 291,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            45 => 
            array (
                'DistrictID' => 2546,
                'DistrictName' => '礼泉县',
                'CityID' => 291,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            46 => 
            array (
                'DistrictID' => 2547,
                'DistrictName' => '永寿县',
                'CityID' => 291,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            47 => 
            array (
                'DistrictID' => 2548,
                'DistrictName' => '彬县',
                'CityID' => 291,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            48 => 
            array (
                'DistrictID' => 2549,
                'DistrictName' => '长武县',
                'CityID' => 291,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            49 => 
            array (
                'DistrictID' => 2550,
                'DistrictName' => '旬邑县',
                'CityID' => 291,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            50 => 
            array (
                'DistrictID' => 2551,
                'DistrictName' => '淳化县',
                'CityID' => 291,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            51 => 
            array (
                'DistrictID' => 2552,
                'DistrictName' => '武功县',
                'CityID' => 291,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            52 => 
            array (
                'DistrictID' => 2553,
                'DistrictName' => '兴平市',
                'CityID' => 291,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            53 => 
            array (
                'DistrictID' => 2554,
                'DistrictName' => '临渭区',
                'CityID' => 292,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            54 => 
            array (
                'DistrictID' => 2555,
                'DistrictName' => '华县',
                'CityID' => 292,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            55 => 
            array (
                'DistrictID' => 2556,
                'DistrictName' => '潼关县',
                'CityID' => 292,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            56 => 
            array (
                'DistrictID' => 2557,
                'DistrictName' => '大荔县',
                'CityID' => 292,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            57 => 
            array (
                'DistrictID' => 2558,
                'DistrictName' => '合阳县',
                'CityID' => 292,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            58 => 
            array (
                'DistrictID' => 2559,
                'DistrictName' => '澄城县',
                'CityID' => 292,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            59 => 
            array (
                'DistrictID' => 2560,
                'DistrictName' => '蒲城县',
                'CityID' => 292,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            60 => 
            array (
                'DistrictID' => 2561,
                'DistrictName' => '白水县',
                'CityID' => 292,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            61 => 
            array (
                'DistrictID' => 2562,
                'DistrictName' => '富平县',
                'CityID' => 292,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            62 => 
            array (
                'DistrictID' => 2563,
                'DistrictName' => '韩城市',
                'CityID' => 292,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            63 => 
            array (
                'DistrictID' => 2564,
                'DistrictName' => '华阴市',
                'CityID' => 292,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            64 => 
            array (
                'DistrictID' => 2565,
                'DistrictName' => '宝塔区',
                'CityID' => 293,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            65 => 
            array (
                'DistrictID' => 2566,
                'DistrictName' => '延长县',
                'CityID' => 293,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            66 => 
            array (
                'DistrictID' => 2567,
                'DistrictName' => '延川县',
                'CityID' => 293,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            67 => 
            array (
                'DistrictID' => 2568,
                'DistrictName' => '子长县',
                'CityID' => 293,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            68 => 
            array (
                'DistrictID' => 2569,
                'DistrictName' => '安塞县',
                'CityID' => 293,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            69 => 
            array (
                'DistrictID' => 2570,
                'DistrictName' => '志丹县',
                'CityID' => 293,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            70 => 
            array (
                'DistrictID' => 2571,
                'DistrictName' => '吴旗县',
                'CityID' => 293,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            71 => 
            array (
                'DistrictID' => 2572,
                'DistrictName' => '甘泉县',
                'CityID' => 293,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            72 => 
            array (
                'DistrictID' => 2573,
                'DistrictName' => '富县',
                'CityID' => 293,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            73 => 
            array (
                'DistrictID' => 2574,
                'DistrictName' => '洛川县',
                'CityID' => 293,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            74 => 
            array (
                'DistrictID' => 2575,
                'DistrictName' => '宜川县',
                'CityID' => 293,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            75 => 
            array (
                'DistrictID' => 2576,
                'DistrictName' => '黄龙县',
                'CityID' => 293,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            76 => 
            array (
                'DistrictID' => 2577,
                'DistrictName' => '黄陵县',
                'CityID' => 293,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            77 => 
            array (
                'DistrictID' => 2578,
                'DistrictName' => '汉台区',
                'CityID' => 294,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            78 => 
            array (
                'DistrictID' => 2579,
                'DistrictName' => '南郑县',
                'CityID' => 294,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            79 => 
            array (
                'DistrictID' => 2580,
                'DistrictName' => '城固县',
                'CityID' => 294,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            80 => 
            array (
                'DistrictID' => 2581,
                'DistrictName' => '洋县',
                'CityID' => 294,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            81 => 
            array (
                'DistrictID' => 2582,
                'DistrictName' => '西乡县',
                'CityID' => 294,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            82 => 
            array (
                'DistrictID' => 2583,
                'DistrictName' => '勉县',
                'CityID' => 294,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            83 => 
            array (
                'DistrictID' => 2584,
                'DistrictName' => '宁强县',
                'CityID' => 294,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            84 => 
            array (
                'DistrictID' => 2585,
                'DistrictName' => '略阳县',
                'CityID' => 294,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            85 => 
            array (
                'DistrictID' => 2586,
                'DistrictName' => '镇巴县',
                'CityID' => 294,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            86 => 
            array (
                'DistrictID' => 2587,
                'DistrictName' => '留坝县',
                'CityID' => 294,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            87 => 
            array (
                'DistrictID' => 2588,
                'DistrictName' => '佛坪县',
                'CityID' => 294,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            88 => 
            array (
                'DistrictID' => 2589,
                'DistrictName' => '榆阳区',
                'CityID' => 295,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            89 => 
            array (
                'DistrictID' => 2590,
                'DistrictName' => '神木县',
                'CityID' => 295,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            90 => 
            array (
                'DistrictID' => 2591,
                'DistrictName' => '府谷县',
                'CityID' => 295,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            91 => 
            array (
                'DistrictID' => 2592,
                'DistrictName' => '横山县',
                'CityID' => 295,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            92 => 
            array (
                'DistrictID' => 2593,
                'DistrictName' => '靖边县',
                'CityID' => 295,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            93 => 
            array (
                'DistrictID' => 2594,
                'DistrictName' => '定边县',
                'CityID' => 295,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            94 => 
            array (
                'DistrictID' => 2595,
                'DistrictName' => '绥德县',
                'CityID' => 295,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            95 => 
            array (
                'DistrictID' => 2596,
                'DistrictName' => '米脂县',
                'CityID' => 295,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            96 => 
            array (
                'DistrictID' => 2597,
                'DistrictName' => '佳县',
                'CityID' => 295,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            97 => 
            array (
                'DistrictID' => 2598,
                'DistrictName' => '吴堡县',
                'CityID' => 295,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            98 => 
            array (
                'DistrictID' => 2599,
                'DistrictName' => '清涧县',
                'CityID' => 295,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            99 => 
            array (
                'DistrictID' => 2600,
                'DistrictName' => '子洲县',
                'CityID' => 295,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            100 => 
            array (
                'DistrictID' => 2601,
                'DistrictName' => '汉滨区',
                'CityID' => 296,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            101 => 
            array (
                'DistrictID' => 2602,
                'DistrictName' => '汉阴县',
                'CityID' => 296,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            102 => 
            array (
                'DistrictID' => 2603,
                'DistrictName' => '石泉县',
                'CityID' => 296,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            103 => 
            array (
                'DistrictID' => 2604,
                'DistrictName' => '宁陕县',
                'CityID' => 296,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            104 => 
            array (
                'DistrictID' => 2605,
                'DistrictName' => '紫阳县',
                'CityID' => 296,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            105 => 
            array (
                'DistrictID' => 2606,
                'DistrictName' => '岚皋县',
                'CityID' => 296,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            106 => 
            array (
                'DistrictID' => 2607,
                'DistrictName' => '平利县',
                'CityID' => 296,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            107 => 
            array (
                'DistrictID' => 2608,
                'DistrictName' => '镇坪县',
                'CityID' => 296,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            108 => 
            array (
                'DistrictID' => 2609,
                'DistrictName' => '旬阳县',
                'CityID' => 296,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            109 => 
            array (
                'DistrictID' => 2610,
                'DistrictName' => '白河县',
                'CityID' => 296,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            110 => 
            array (
                'DistrictID' => 2611,
                'DistrictName' => '商州区',
                'CityID' => 297,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            111 => 
            array (
                'DistrictID' => 2612,
                'DistrictName' => '洛南县',
                'CityID' => 297,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            112 => 
            array (
                'DistrictID' => 2613,
                'DistrictName' => '丹凤县',
                'CityID' => 297,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            113 => 
            array (
                'DistrictID' => 2614,
                'DistrictName' => '商南县',
                'CityID' => 297,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            114 => 
            array (
                'DistrictID' => 2615,
                'DistrictName' => '山阳县',
                'CityID' => 297,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            115 => 
            array (
                'DistrictID' => 2616,
                'DistrictName' => '镇安县',
                'CityID' => 297,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            116 => 
            array (
                'DistrictID' => 2617,
                'DistrictName' => '柞水县',
                'CityID' => 297,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            117 => 
            array (
                'DistrictID' => 2618,
                'DistrictName' => '城关区',
                'CityID' => 298,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            118 => 
            array (
                'DistrictID' => 2619,
                'DistrictName' => '七里河区',
                'CityID' => 298,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            119 => 
            array (
                'DistrictID' => 2620,
                'DistrictName' => '西固区',
                'CityID' => 298,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            120 => 
            array (
                'DistrictID' => 2621,
                'DistrictName' => '安宁区',
                'CityID' => 298,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            121 => 
            array (
                'DistrictID' => 2622,
                'DistrictName' => '红古区',
                'CityID' => 298,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            122 => 
            array (
                'DistrictID' => 2623,
                'DistrictName' => '永登县',
                'CityID' => 298,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            123 => 
            array (
                'DistrictID' => 2624,
                'DistrictName' => '皋兰县',
                'CityID' => 298,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            124 => 
            array (
                'DistrictID' => 2625,
                'DistrictName' => '榆中县',
                'CityID' => 298,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            125 => 
            array (
                'DistrictID' => 2626,
                'DistrictName' => '金川区',
                'CityID' => 300,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            126 => 
            array (
                'DistrictID' => 2627,
                'DistrictName' => '永昌县',
                'CityID' => 300,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            127 => 
            array (
                'DistrictID' => 2628,
                'DistrictName' => '白银区',
                'CityID' => 301,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            128 => 
            array (
                'DistrictID' => 2629,
                'DistrictName' => '平川区',
                'CityID' => 301,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            129 => 
            array (
                'DistrictID' => 2630,
                'DistrictName' => '靖远县',
                'CityID' => 301,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            130 => 
            array (
                'DistrictID' => 2631,
                'DistrictName' => '会宁县',
                'CityID' => 301,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            131 => 
            array (
                'DistrictID' => 2632,
                'DistrictName' => '景泰县',
                'CityID' => 301,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            132 => 
            array (
                'DistrictID' => 2633,
                'DistrictName' => '秦城区',
                'CityID' => 302,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            133 => 
            array (
                'DistrictID' => 2634,
                'DistrictName' => '北道区',
                'CityID' => 302,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            134 => 
            array (
                'DistrictID' => 2635,
                'DistrictName' => '清水县',
                'CityID' => 302,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            135 => 
            array (
                'DistrictID' => 2636,
                'DistrictName' => '秦安县',
                'CityID' => 302,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            136 => 
            array (
                'DistrictID' => 2637,
                'DistrictName' => '甘谷县',
                'CityID' => 302,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            137 => 
            array (
                'DistrictID' => 2638,
                'DistrictName' => '武山县',
                'CityID' => 302,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            138 => 
            array (
                'DistrictID' => 2639,
                'DistrictName' => '张家川回族自治县',
                'CityID' => 302,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            139 => 
            array (
                'DistrictID' => 2640,
                'DistrictName' => '凉州区',
                'CityID' => 303,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            140 => 
            array (
                'DistrictID' => 2641,
                'DistrictName' => '民勤县',
                'CityID' => 303,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            141 => 
            array (
                'DistrictID' => 2642,
                'DistrictName' => '古浪县',
                'CityID' => 303,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            142 => 
            array (
                'DistrictID' => 2643,
                'DistrictName' => '天祝藏族自治县',
                'CityID' => 303,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            143 => 
            array (
                'DistrictID' => 2644,
                'DistrictName' => '甘州区',
                'CityID' => 304,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            144 => 
            array (
                'DistrictID' => 2645,
                'DistrictName' => '肃南裕固族自治县',
                'CityID' => 304,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            145 => 
            array (
                'DistrictID' => 2646,
                'DistrictName' => '民乐县',
                'CityID' => 304,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            146 => 
            array (
                'DistrictID' => 2647,
                'DistrictName' => '临泽县',
                'CityID' => 304,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            147 => 
            array (
                'DistrictID' => 2648,
                'DistrictName' => '高台县',
                'CityID' => 304,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            148 => 
            array (
                'DistrictID' => 2649,
                'DistrictName' => '山丹县',
                'CityID' => 304,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            149 => 
            array (
                'DistrictID' => 2650,
                'DistrictName' => '崆峒区',
                'CityID' => 305,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            150 => 
            array (
                'DistrictID' => 2651,
                'DistrictName' => '泾川县',
                'CityID' => 305,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            151 => 
            array (
                'DistrictID' => 2652,
                'DistrictName' => '灵台县',
                'CityID' => 305,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            152 => 
            array (
                'DistrictID' => 2653,
                'DistrictName' => '崇信县',
                'CityID' => 305,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            153 => 
            array (
                'DistrictID' => 2654,
                'DistrictName' => '华亭县',
                'CityID' => 305,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            154 => 
            array (
                'DistrictID' => 2655,
                'DistrictName' => '庄浪县',
                'CityID' => 305,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            155 => 
            array (
                'DistrictID' => 2656,
                'DistrictName' => '静宁县',
                'CityID' => 305,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            156 => 
            array (
                'DistrictID' => 2657,
                'DistrictName' => '肃州区',
                'CityID' => 306,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            157 => 
            array (
                'DistrictID' => 2658,
                'DistrictName' => '金塔县',
                'CityID' => 306,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            158 => 
            array (
                'DistrictID' => 2659,
                'DistrictName' => '安西县',
                'CityID' => 306,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            159 => 
            array (
                'DistrictID' => 2660,
                'DistrictName' => '肃北蒙古族自治县',
                'CityID' => 306,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            160 => 
            array (
                'DistrictID' => 2661,
                'DistrictName' => '阿克塞哈萨克族自治县',
                'CityID' => 306,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            161 => 
            array (
                'DistrictID' => 2662,
                'DistrictName' => '玉门市',
                'CityID' => 306,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            162 => 
            array (
                'DistrictID' => 2663,
                'DistrictName' => '敦煌市',
                'CityID' => 306,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            163 => 
            array (
                'DistrictID' => 2664,
                'DistrictName' => '西峰区',
                'CityID' => 307,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            164 => 
            array (
                'DistrictID' => 2665,
                'DistrictName' => '庆城县',
                'CityID' => 307,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            165 => 
            array (
                'DistrictID' => 2666,
                'DistrictName' => '环县',
                'CityID' => 307,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            166 => 
            array (
                'DistrictID' => 2667,
                'DistrictName' => '华池县',
                'CityID' => 307,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            167 => 
            array (
                'DistrictID' => 2668,
                'DistrictName' => '合水县',
                'CityID' => 307,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            168 => 
            array (
                'DistrictID' => 2669,
                'DistrictName' => '正宁县',
                'CityID' => 307,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            169 => 
            array (
                'DistrictID' => 2670,
                'DistrictName' => '宁县',
                'CityID' => 307,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            170 => 
            array (
                'DistrictID' => 2671,
                'DistrictName' => '镇原县',
                'CityID' => 307,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            171 => 
            array (
                'DistrictID' => 2672,
                'DistrictName' => '安定区',
                'CityID' => 308,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            172 => 
            array (
                'DistrictID' => 2673,
                'DistrictName' => '通渭县',
                'CityID' => 308,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            173 => 
            array (
                'DistrictID' => 2674,
                'DistrictName' => '陇西县',
                'CityID' => 308,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            174 => 
            array (
                'DistrictID' => 2675,
                'DistrictName' => '渭源县',
                'CityID' => 308,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            175 => 
            array (
                'DistrictID' => 2676,
                'DistrictName' => '临洮县',
                'CityID' => 308,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            176 => 
            array (
                'DistrictID' => 2677,
                'DistrictName' => '漳县',
                'CityID' => 308,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            177 => 
            array (
                'DistrictID' => 2678,
                'DistrictName' => '岷县',
                'CityID' => 308,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            178 => 
            array (
                'DistrictID' => 2679,
                'DistrictName' => '武都区',
                'CityID' => 309,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            179 => 
            array (
                'DistrictID' => 2680,
                'DistrictName' => '成县',
                'CityID' => 309,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            180 => 
            array (
                'DistrictID' => 2681,
                'DistrictName' => '文县',
                'CityID' => 309,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            181 => 
            array (
                'DistrictID' => 2682,
                'DistrictName' => '宕昌县',
                'CityID' => 309,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            182 => 
            array (
                'DistrictID' => 2683,
                'DistrictName' => '康县',
                'CityID' => 309,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            183 => 
            array (
                'DistrictID' => 2684,
                'DistrictName' => '西和县',
                'CityID' => 309,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            184 => 
            array (
                'DistrictID' => 2685,
                'DistrictName' => '礼县',
                'CityID' => 309,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            185 => 
            array (
                'DistrictID' => 2686,
                'DistrictName' => '徽县',
                'CityID' => 309,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            186 => 
            array (
                'DistrictID' => 2687,
                'DistrictName' => '两当县',
                'CityID' => 309,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            187 => 
            array (
                'DistrictID' => 2688,
                'DistrictName' => '临夏市',
                'CityID' => 310,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            188 => 
            array (
                'DistrictID' => 2689,
                'DistrictName' => '临夏县',
                'CityID' => 310,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            189 => 
            array (
                'DistrictID' => 2690,
                'DistrictName' => '康乐县',
                'CityID' => 310,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            190 => 
            array (
                'DistrictID' => 2691,
                'DistrictName' => '永靖县',
                'CityID' => 310,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            191 => 
            array (
                'DistrictID' => 2692,
                'DistrictName' => '广河县',
                'CityID' => 310,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            192 => 
            array (
                'DistrictID' => 2693,
                'DistrictName' => '和政县',
                'CityID' => 310,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            193 => 
            array (
                'DistrictID' => 2694,
                'DistrictName' => '东乡族自治县',
                'CityID' => 310,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            194 => 
            array (
                'DistrictID' => 2695,
                'DistrictName' => '积石山保安族东乡族撒拉族自治县',
                'CityID' => 310,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            195 => 
            array (
                'DistrictID' => 2696,
                'DistrictName' => '合作市',
                'CityID' => 311,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            196 => 
            array (
                'DistrictID' => 2697,
                'DistrictName' => '临潭县',
                'CityID' => 311,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            197 => 
            array (
                'DistrictID' => 2698,
                'DistrictName' => '卓尼县',
                'CityID' => 311,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            198 => 
            array (
                'DistrictID' => 2699,
                'DistrictName' => '舟曲县',
                'CityID' => 311,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            199 => 
            array (
                'DistrictID' => 2700,
                'DistrictName' => '迭部县',
                'CityID' => 311,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            200 => 
            array (
                'DistrictID' => 2701,
                'DistrictName' => '玛曲县',
                'CityID' => 311,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            201 => 
            array (
                'DistrictID' => 2702,
                'DistrictName' => '碌曲县',
                'CityID' => 311,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            202 => 
            array (
                'DistrictID' => 2703,
                'DistrictName' => '夏河县',
                'CityID' => 311,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            203 => 
            array (
                'DistrictID' => 2704,
                'DistrictName' => '城东区',
                'CityID' => 312,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            204 => 
            array (
                'DistrictID' => 2705,
                'DistrictName' => '城中区',
                'CityID' => 312,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            205 => 
            array (
                'DistrictID' => 2706,
                'DistrictName' => '城西区',
                'CityID' => 312,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            206 => 
            array (
                'DistrictID' => 2707,
                'DistrictName' => '城北区',
                'CityID' => 312,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            207 => 
            array (
                'DistrictID' => 2708,
                'DistrictName' => '大通回族土族自治县',
                'CityID' => 312,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            208 => 
            array (
                'DistrictID' => 2709,
                'DistrictName' => '湟中县',
                'CityID' => 312,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            209 => 
            array (
                'DistrictID' => 2710,
                'DistrictName' => '湟源县',
                'CityID' => 312,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            210 => 
            array (
                'DistrictID' => 2711,
                'DistrictName' => '平安县',
                'CityID' => 313,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            211 => 
            array (
                'DistrictID' => 2712,
                'DistrictName' => '民和回族土族自治县',
                'CityID' => 313,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            212 => 
            array (
                'DistrictID' => 2713,
                'DistrictName' => '乐都县',
                'CityID' => 313,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            213 => 
            array (
                'DistrictID' => 2714,
                'DistrictName' => '互助土族自治县',
                'CityID' => 313,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            214 => 
            array (
                'DistrictID' => 2715,
                'DistrictName' => '化隆回族自治县',
                'CityID' => 313,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            215 => 
            array (
                'DistrictID' => 2716,
                'DistrictName' => '循化撒拉族自治县',
                'CityID' => 313,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            216 => 
            array (
                'DistrictID' => 2717,
                'DistrictName' => '门源回族自治县',
                'CityID' => 314,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            217 => 
            array (
                'DistrictID' => 2718,
                'DistrictName' => '祁连县',
                'CityID' => 314,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            218 => 
            array (
                'DistrictID' => 2719,
                'DistrictName' => '海晏县',
                'CityID' => 314,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            219 => 
            array (
                'DistrictID' => 2720,
                'DistrictName' => '刚察县',
                'CityID' => 314,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            220 => 
            array (
                'DistrictID' => 2721,
                'DistrictName' => '同仁县',
                'CityID' => 315,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            221 => 
            array (
                'DistrictID' => 2722,
                'DistrictName' => '尖扎县',
                'CityID' => 315,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            222 => 
            array (
                'DistrictID' => 2723,
                'DistrictName' => '泽库县',
                'CityID' => 315,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            223 => 
            array (
                'DistrictID' => 2724,
                'DistrictName' => '河南蒙古族自治县',
                'CityID' => 315,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            224 => 
            array (
                'DistrictID' => 2725,
                'DistrictName' => '共和县',
                'CityID' => 316,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            225 => 
            array (
                'DistrictID' => 2726,
                'DistrictName' => '同德县',
                'CityID' => 316,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            226 => 
            array (
                'DistrictID' => 2727,
                'DistrictName' => '贵德县',
                'CityID' => 316,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            227 => 
            array (
                'DistrictID' => 2728,
                'DistrictName' => '兴海县',
                'CityID' => 316,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            228 => 
            array (
                'DistrictID' => 2729,
                'DistrictName' => '贵南县',
                'CityID' => 316,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            229 => 
            array (
                'DistrictID' => 2730,
                'DistrictName' => '玛沁县',
                'CityID' => 317,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            230 => 
            array (
                'DistrictID' => 2731,
                'DistrictName' => '班玛县',
                'CityID' => 317,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            231 => 
            array (
                'DistrictID' => 2732,
                'DistrictName' => '甘德县',
                'CityID' => 317,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            232 => 
            array (
                'DistrictID' => 2733,
                'DistrictName' => '达日县',
                'CityID' => 317,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            233 => 
            array (
                'DistrictID' => 2734,
                'DistrictName' => '久治县',
                'CityID' => 317,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            234 => 
            array (
                'DistrictID' => 2735,
                'DistrictName' => '玛多县',
                'CityID' => 317,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            235 => 
            array (
                'DistrictID' => 2736,
                'DistrictName' => '玉树县',
                'CityID' => 318,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            236 => 
            array (
                'DistrictID' => 2737,
                'DistrictName' => '杂多县',
                'CityID' => 318,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            237 => 
            array (
                'DistrictID' => 2738,
                'DistrictName' => '称多县',
                'CityID' => 318,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            238 => 
            array (
                'DistrictID' => 2739,
                'DistrictName' => '治多县',
                'CityID' => 318,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            239 => 
            array (
                'DistrictID' => 2740,
                'DistrictName' => '囊谦县',
                'CityID' => 318,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            240 => 
            array (
                'DistrictID' => 2741,
                'DistrictName' => '曲麻莱县',
                'CityID' => 318,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            241 => 
            array (
                'DistrictID' => 2742,
                'DistrictName' => '格尔木市',
                'CityID' => 319,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            242 => 
            array (
                'DistrictID' => 2743,
                'DistrictName' => '德令哈市',
                'CityID' => 319,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            243 => 
            array (
                'DistrictID' => 2744,
                'DistrictName' => '乌兰县',
                'CityID' => 319,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            244 => 
            array (
                'DistrictID' => 2745,
                'DistrictName' => '都兰县',
                'CityID' => 319,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            245 => 
            array (
                'DistrictID' => 2746,
                'DistrictName' => '天峻县',
                'CityID' => 319,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            246 => 
            array (
                'DistrictID' => 2747,
                'DistrictName' => '兴庆区',
                'CityID' => 320,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            247 => 
            array (
                'DistrictID' => 2748,
                'DistrictName' => '西夏区',
                'CityID' => 320,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            248 => 
            array (
                'DistrictID' => 2749,
                'DistrictName' => '金凤区',
                'CityID' => 320,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            249 => 
            array (
                'DistrictID' => 2750,
                'DistrictName' => '永宁县',
                'CityID' => 320,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            250 => 
            array (
                'DistrictID' => 2751,
                'DistrictName' => '贺兰县',
                'CityID' => 320,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            251 => 
            array (
                'DistrictID' => 2752,
                'DistrictName' => '灵武市',
                'CityID' => 320,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            252 => 
            array (
                'DistrictID' => 2753,
                'DistrictName' => '大武口区',
                'CityID' => 321,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            253 => 
            array (
                'DistrictID' => 2754,
                'DistrictName' => '惠农区',
                'CityID' => 321,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            254 => 
            array (
                'DistrictID' => 2755,
                'DistrictName' => '平罗县',
                'CityID' => 321,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            255 => 
            array (
                'DistrictID' => 2756,
                'DistrictName' => '利通区',
                'CityID' => 322,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            256 => 
            array (
                'DistrictID' => 2757,
                'DistrictName' => '盐池县',
                'CityID' => 322,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            257 => 
            array (
                'DistrictID' => 2758,
                'DistrictName' => '同心县',
                'CityID' => 322,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            258 => 
            array (
                'DistrictID' => 2759,
                'DistrictName' => '青铜峡市',
                'CityID' => 322,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            259 => 
            array (
                'DistrictID' => 2760,
                'DistrictName' => '原州区',
                'CityID' => 323,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            260 => 
            array (
                'DistrictID' => 2761,
                'DistrictName' => '西吉县',
                'CityID' => 323,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            261 => 
            array (
                'DistrictID' => 2762,
                'DistrictName' => '隆德县',
                'CityID' => 323,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            262 => 
            array (
                'DistrictID' => 2763,
                'DistrictName' => '泾源县',
                'CityID' => 323,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            263 => 
            array (
                'DistrictID' => 2764,
                'DistrictName' => '彭阳县',
                'CityID' => 323,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            264 => 
            array (
                'DistrictID' => 2765,
                'DistrictName' => '沙坡头区',
                'CityID' => 324,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            265 => 
            array (
                'DistrictID' => 2766,
                'DistrictName' => '中宁县',
                'CityID' => 324,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            266 => 
            array (
                'DistrictID' => 2767,
                'DistrictName' => '海原县',
                'CityID' => 324,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            267 => 
            array (
                'DistrictID' => 2768,
                'DistrictName' => '天山区',
                'CityID' => 325,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            268 => 
            array (
                'DistrictID' => 2769,
                'DistrictName' => '沙依巴克区',
                'CityID' => 325,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            269 => 
            array (
                'DistrictID' => 2770,
                'DistrictName' => '新市区',
                'CityID' => 325,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            270 => 
            array (
                'DistrictID' => 2771,
                'DistrictName' => '水磨沟区',
                'CityID' => 325,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            271 => 
            array (
                'DistrictID' => 2772,
                'DistrictName' => '头屯河区',
                'CityID' => 325,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            272 => 
            array (
                'DistrictID' => 2773,
                'DistrictName' => '达坂城区',
                'CityID' => 325,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            273 => 
            array (
                'DistrictID' => 2774,
                'DistrictName' => '东山区',
                'CityID' => 325,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            274 => 
            array (
                'DistrictID' => 2775,
                'DistrictName' => '乌鲁木齐县',
                'CityID' => 325,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            275 => 
            array (
                'DistrictID' => 2776,
                'DistrictName' => '独山子区',
                'CityID' => 326,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            276 => 
            array (
                'DistrictID' => 2777,
                'DistrictName' => '克拉玛依区',
                'CityID' => 326,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            277 => 
            array (
                'DistrictID' => 2778,
                'DistrictName' => '白碱滩区',
                'CityID' => 326,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            278 => 
            array (
                'DistrictID' => 2779,
                'DistrictName' => '乌尔禾区',
                'CityID' => 326,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            279 => 
            array (
                'DistrictID' => 2780,
                'DistrictName' => '吐鲁番市',
                'CityID' => 327,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            280 => 
            array (
                'DistrictID' => 2781,
                'DistrictName' => '鄯善县',
                'CityID' => 327,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            281 => 
            array (
                'DistrictID' => 2782,
                'DistrictName' => '托克逊县',
                'CityID' => 327,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            282 => 
            array (
                'DistrictID' => 2783,
                'DistrictName' => '哈密市',
                'CityID' => 328,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            283 => 
            array (
                'DistrictID' => 2784,
                'DistrictName' => '巴里坤哈萨克自治县',
                'CityID' => 328,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            284 => 
            array (
                'DistrictID' => 2785,
                'DistrictName' => '伊吾县',
                'CityID' => 328,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            285 => 
            array (
                'DistrictID' => 2786,
                'DistrictName' => '昌吉市',
                'CityID' => 329,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            286 => 
            array (
                'DistrictID' => 2787,
                'DistrictName' => '阜康市',
                'CityID' => 329,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            287 => 
            array (
                'DistrictID' => 2788,
                'DistrictName' => '米泉市',
                'CityID' => 329,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            288 => 
            array (
                'DistrictID' => 2789,
                'DistrictName' => '呼图壁县',
                'CityID' => 329,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            289 => 
            array (
                'DistrictID' => 2790,
                'DistrictName' => '玛纳斯县',
                'CityID' => 329,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            290 => 
            array (
                'DistrictID' => 2791,
                'DistrictName' => '奇台县',
                'CityID' => 329,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            291 => 
            array (
                'DistrictID' => 2792,
                'DistrictName' => '吉木萨尔县',
                'CityID' => 329,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            292 => 
            array (
                'DistrictID' => 2793,
                'DistrictName' => '木垒哈萨克自治县',
                'CityID' => 329,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            293 => 
            array (
                'DistrictID' => 2794,
                'DistrictName' => '博乐市',
                'CityID' => 330,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            294 => 
            array (
                'DistrictID' => 2795,
                'DistrictName' => '精河县',
                'CityID' => 330,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            295 => 
            array (
                'DistrictID' => 2796,
                'DistrictName' => '温泉县',
                'CityID' => 330,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            296 => 
            array (
                'DistrictID' => 2797,
                'DistrictName' => '库尔勒市',
                'CityID' => 331,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            297 => 
            array (
                'DistrictID' => 2798,
                'DistrictName' => '轮台县',
                'CityID' => 331,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            298 => 
            array (
                'DistrictID' => 2799,
                'DistrictName' => '尉犁县',
                'CityID' => 331,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            299 => 
            array (
                'DistrictID' => 2800,
                'DistrictName' => '若羌县',
                'CityID' => 331,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            300 => 
            array (
                'DistrictID' => 2801,
                'DistrictName' => '且末县',
                'CityID' => 331,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            301 => 
            array (
                'DistrictID' => 2802,
                'DistrictName' => '焉耆回族自治县',
                'CityID' => 331,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            302 => 
            array (
                'DistrictID' => 2803,
                'DistrictName' => '和静县',
                'CityID' => 331,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            303 => 
            array (
                'DistrictID' => 2804,
                'DistrictName' => '和硕县',
                'CityID' => 331,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            304 => 
            array (
                'DistrictID' => 2805,
                'DistrictName' => '博湖县',
                'CityID' => 331,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            305 => 
            array (
                'DistrictID' => 2806,
                'DistrictName' => '阿克苏市',
                'CityID' => 332,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            306 => 
            array (
                'DistrictID' => 2807,
                'DistrictName' => '温宿县',
                'CityID' => 332,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            307 => 
            array (
                'DistrictID' => 2808,
                'DistrictName' => '库车县',
                'CityID' => 332,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            308 => 
            array (
                'DistrictID' => 2809,
                'DistrictName' => '沙雅县',
                'CityID' => 332,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            309 => 
            array (
                'DistrictID' => 2810,
                'DistrictName' => '新和县',
                'CityID' => 332,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            310 => 
            array (
                'DistrictID' => 2811,
                'DistrictName' => '拜城县',
                'CityID' => 332,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            311 => 
            array (
                'DistrictID' => 2812,
                'DistrictName' => '乌什县',
                'CityID' => 332,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            312 => 
            array (
                'DistrictID' => 2813,
                'DistrictName' => '阿瓦提县',
                'CityID' => 332,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            313 => 
            array (
                'DistrictID' => 2814,
                'DistrictName' => '柯坪县',
                'CityID' => 332,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            314 => 
            array (
                'DistrictID' => 2815,
                'DistrictName' => '阿图什市',
                'CityID' => 333,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            315 => 
            array (
                'DistrictID' => 2816,
                'DistrictName' => '阿克陶县',
                'CityID' => 333,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            316 => 
            array (
                'DistrictID' => 2817,
                'DistrictName' => '阿合奇县',
                'CityID' => 333,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            317 => 
            array (
                'DistrictID' => 2818,
                'DistrictName' => '乌恰县',
                'CityID' => 333,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            318 => 
            array (
                'DistrictID' => 2819,
                'DistrictName' => '喀什市',
                'CityID' => 334,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            319 => 
            array (
                'DistrictID' => 2820,
                'DistrictName' => '疏附县',
                'CityID' => 334,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            320 => 
            array (
                'DistrictID' => 2821,
                'DistrictName' => '疏勒县',
                'CityID' => 334,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            321 => 
            array (
                'DistrictID' => 2822,
                'DistrictName' => '英吉沙县',
                'CityID' => 334,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            322 => 
            array (
                'DistrictID' => 2823,
                'DistrictName' => '泽普县',
                'CityID' => 334,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            323 => 
            array (
                'DistrictID' => 2824,
                'DistrictName' => '莎车县',
                'CityID' => 334,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            324 => 
            array (
                'DistrictID' => 2825,
                'DistrictName' => '叶城县',
                'CityID' => 334,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            325 => 
            array (
                'DistrictID' => 2826,
                'DistrictName' => '麦盖提县',
                'CityID' => 334,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            326 => 
            array (
                'DistrictID' => 2827,
                'DistrictName' => '岳普湖县',
                'CityID' => 334,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            327 => 
            array (
                'DistrictID' => 2828,
                'DistrictName' => '伽师县',
                'CityID' => 334,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            328 => 
            array (
                'DistrictID' => 2829,
                'DistrictName' => '巴楚县',
                'CityID' => 334,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            329 => 
            array (
                'DistrictID' => 2830,
                'DistrictName' => '塔什库尔干塔吉克自治县',
                'CityID' => 334,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            330 => 
            array (
                'DistrictID' => 2831,
                'DistrictName' => '和田市',
                'CityID' => 335,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            331 => 
            array (
                'DistrictID' => 2832,
                'DistrictName' => '和田县',
                'CityID' => 335,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            332 => 
            array (
                'DistrictID' => 2833,
                'DistrictName' => '墨玉县',
                'CityID' => 335,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            333 => 
            array (
                'DistrictID' => 2834,
                'DistrictName' => '皮山县',
                'CityID' => 335,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            334 => 
            array (
                'DistrictID' => 2835,
                'DistrictName' => '洛浦县',
                'CityID' => 335,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            335 => 
            array (
                'DistrictID' => 2836,
                'DistrictName' => '策勒县',
                'CityID' => 335,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            336 => 
            array (
                'DistrictID' => 2837,
                'DistrictName' => '于田县',
                'CityID' => 335,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            337 => 
            array (
                'DistrictID' => 2838,
                'DistrictName' => '民丰县',
                'CityID' => 335,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            338 => 
            array (
                'DistrictID' => 2839,
                'DistrictName' => '伊宁市',
                'CityID' => 336,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            339 => 
            array (
                'DistrictID' => 2840,
                'DistrictName' => '奎屯市',
                'CityID' => 336,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            340 => 
            array (
                'DistrictID' => 2841,
                'DistrictName' => '伊宁县',
                'CityID' => 336,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            341 => 
            array (
                'DistrictID' => 2842,
                'DistrictName' => '察布查尔锡伯自治县',
                'CityID' => 336,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            342 => 
            array (
                'DistrictID' => 2843,
                'DistrictName' => '霍城县',
                'CityID' => 336,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            343 => 
            array (
                'DistrictID' => 2844,
                'DistrictName' => '巩留县',
                'CityID' => 336,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            344 => 
            array (
                'DistrictID' => 2845,
                'DistrictName' => '新源县',
                'CityID' => 336,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            345 => 
            array (
                'DistrictID' => 2846,
                'DistrictName' => '昭苏县',
                'CityID' => 336,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            346 => 
            array (
                'DistrictID' => 2847,
                'DistrictName' => '特克斯县',
                'CityID' => 336,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            347 => 
            array (
                'DistrictID' => 2848,
                'DistrictName' => '尼勒克县',
                'CityID' => 336,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            348 => 
            array (
                'DistrictID' => 2849,
                'DistrictName' => '塔城市',
                'CityID' => 337,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            349 => 
            array (
                'DistrictID' => 2850,
                'DistrictName' => '乌苏市',
                'CityID' => 337,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            350 => 
            array (
                'DistrictID' => 2851,
                'DistrictName' => '额敏县',
                'CityID' => 337,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            351 => 
            array (
                'DistrictID' => 2852,
                'DistrictName' => '沙湾县',
                'CityID' => 337,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            352 => 
            array (
                'DistrictID' => 2853,
                'DistrictName' => '托里县',
                'CityID' => 337,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            353 => 
            array (
                'DistrictID' => 2854,
                'DistrictName' => '裕民县',
                'CityID' => 337,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            354 => 
            array (
                'DistrictID' => 2855,
                'DistrictName' => '和布克赛尔蒙古自治县',
                'CityID' => 337,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            355 => 
            array (
                'DistrictID' => 2856,
                'DistrictName' => '阿勒泰市',
                'CityID' => 338,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            356 => 
            array (
                'DistrictID' => 2857,
                'DistrictName' => '布尔津县',
                'CityID' => 338,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            357 => 
            array (
                'DistrictID' => 2858,
                'DistrictName' => '富蕴县',
                'CityID' => 338,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            358 => 
            array (
                'DistrictID' => 2859,
                'DistrictName' => '福海县',
                'CityID' => 338,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            359 => 
            array (
                'DistrictID' => 2860,
                'DistrictName' => '哈巴河县',
                'CityID' => 338,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            360 => 
            array (
                'DistrictID' => 2861,
                'DistrictName' => '青河县',
                'CityID' => 338,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            361 => 
            array (
                'DistrictID' => 2862,
                'DistrictName' => '吉木乃县',
                'CityID' => 338,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
        ));
        
        
    }
}
