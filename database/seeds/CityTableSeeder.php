<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('city')->delete();
        
        \DB::table('city')->insert(array (
            0 => 
            array (
                'CityID' => 1,
                'CityName' => '北京市',
                'ZipCode' => '100000',
                'ProvinceID' => 1,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            1 => 
            array (
                'CityID' => 2,
                'CityName' => '天津市',
                'ZipCode' => '100000',
                'ProvinceID' => 2,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            2 => 
            array (
                'CityID' => 3,
                'CityName' => '石家庄市',
                'ZipCode' => '050000',
                'ProvinceID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            3 => 
            array (
                'CityID' => 4,
                'CityName' => '唐山市',
                'ZipCode' => '063000',
                'ProvinceID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            4 => 
            array (
                'CityID' => 5,
                'CityName' => '秦皇岛市',
                'ZipCode' => '066000',
                'ProvinceID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            5 => 
            array (
                'CityID' => 6,
                'CityName' => '邯郸市',
                'ZipCode' => '056000',
                'ProvinceID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            6 => 
            array (
                'CityID' => 7,
                'CityName' => '邢台市',
                'ZipCode' => '054000',
                'ProvinceID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            7 => 
            array (
                'CityID' => 8,
                'CityName' => '保定市',
                'ZipCode' => '071000',
                'ProvinceID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            8 => 
            array (
                'CityID' => 9,
                'CityName' => '张家口市',
                'ZipCode' => '075000',
                'ProvinceID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            9 => 
            array (
                'CityID' => 10,
                'CityName' => '承德市',
                'ZipCode' => '067000',
                'ProvinceID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            10 => 
            array (
                'CityID' => 11,
                'CityName' => '沧州市',
                'ZipCode' => '061000',
                'ProvinceID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            11 => 
            array (
                'CityID' => 12,
                'CityName' => '廊坊市',
                'ZipCode' => '065000',
                'ProvinceID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            12 => 
            array (
                'CityID' => 13,
                'CityName' => '衡水市',
                'ZipCode' => '053000',
                'ProvinceID' => 3,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            13 => 
            array (
                'CityID' => 14,
                'CityName' => '太原市',
                'ZipCode' => '030000',
                'ProvinceID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            14 => 
            array (
                'CityID' => 15,
                'CityName' => '大同市',
                'ZipCode' => '037000',
                'ProvinceID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            15 => 
            array (
                'CityID' => 16,
                'CityName' => '阳泉市',
                'ZipCode' => '045000',
                'ProvinceID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            16 => 
            array (
                'CityID' => 17,
                'CityName' => '长治市',
                'ZipCode' => '046000',
                'ProvinceID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            17 => 
            array (
                'CityID' => 18,
                'CityName' => '晋城市',
                'ZipCode' => '048000',
                'ProvinceID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            18 => 
            array (
                'CityID' => 19,
                'CityName' => '朔州市',
                'ZipCode' => '036000',
                'ProvinceID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            19 => 
            array (
                'CityID' => 20,
                'CityName' => '晋中市',
                'ZipCode' => '030600',
                'ProvinceID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            20 => 
            array (
                'CityID' => 21,
                'CityName' => '运城市',
                'ZipCode' => '044000',
                'ProvinceID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            21 => 
            array (
                'CityID' => 22,
                'CityName' => '忻州市',
                'ZipCode' => '034000',
                'ProvinceID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            22 => 
            array (
                'CityID' => 23,
                'CityName' => '临汾市',
                'ZipCode' => '041000',
                'ProvinceID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            23 => 
            array (
                'CityID' => 24,
                'CityName' => '吕梁市',
                'ZipCode' => '030500',
                'ProvinceID' => 4,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            24 => 
            array (
                'CityID' => 25,
                'CityName' => '呼和浩特市',
                'ZipCode' => '010000',
                'ProvinceID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            25 => 
            array (
                'CityID' => 26,
                'CityName' => '包头市',
                'ZipCode' => '014000',
                'ProvinceID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            26 => 
            array (
                'CityID' => 27,
                'CityName' => '乌海市',
                'ZipCode' => '016000',
                'ProvinceID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            27 => 
            array (
                'CityID' => 28,
                'CityName' => '赤峰市',
                'ZipCode' => '024000',
                'ProvinceID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            28 => 
            array (
                'CityID' => 29,
                'CityName' => '通辽市',
                'ZipCode' => '028000',
                'ProvinceID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            29 => 
            array (
                'CityID' => 30,
                'CityName' => '鄂尔多斯市',
                'ZipCode' => '010300',
                'ProvinceID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            30 => 
            array (
                'CityID' => 31,
                'CityName' => '呼伦贝尔市',
                'ZipCode' => '021000',
                'ProvinceID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            31 => 
            array (
                'CityID' => 32,
                'CityName' => '巴彦淖尔市',
                'ZipCode' => '014400',
                'ProvinceID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            32 => 
            array (
                'CityID' => 33,
                'CityName' => '乌兰察布市',
                'ZipCode' => '011800',
                'ProvinceID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            33 => 
            array (
                'CityID' => 34,
                'CityName' => '兴安盟',
                'ZipCode' => '137500',
                'ProvinceID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            34 => 
            array (
                'CityID' => 35,
                'CityName' => '锡林郭勒盟',
                'ZipCode' => '011100',
                'ProvinceID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            35 => 
            array (
                'CityID' => 36,
                'CityName' => '阿拉善盟',
                'ZipCode' => '016000',
                'ProvinceID' => 5,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            36 => 
            array (
                'CityID' => 37,
                'CityName' => '沈阳市',
                'ZipCode' => '110000',
                'ProvinceID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            37 => 
            array (
                'CityID' => 38,
                'CityName' => '大连市',
                'ZipCode' => '116000',
                'ProvinceID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            38 => 
            array (
                'CityID' => 39,
                'CityName' => '鞍山市',
                'ZipCode' => '114000',
                'ProvinceID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            39 => 
            array (
                'CityID' => 40,
                'CityName' => '抚顺市',
                'ZipCode' => '113000',
                'ProvinceID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            40 => 
            array (
                'CityID' => 41,
                'CityName' => '本溪市',
                'ZipCode' => '117000',
                'ProvinceID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            41 => 
            array (
                'CityID' => 42,
                'CityName' => '丹东市',
                'ZipCode' => '118000',
                'ProvinceID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            42 => 
            array (
                'CityID' => 43,
                'CityName' => '锦州市',
                'ZipCode' => '121000',
                'ProvinceID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            43 => 
            array (
                'CityID' => 44,
                'CityName' => '营口市',
                'ZipCode' => '115000',
                'ProvinceID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            44 => 
            array (
                'CityID' => 45,
                'CityName' => '阜新市',
                'ZipCode' => '123000',
                'ProvinceID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            45 => 
            array (
                'CityID' => 46,
                'CityName' => '辽阳市',
                'ZipCode' => '111000',
                'ProvinceID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            46 => 
            array (
                'CityID' => 47,
                'CityName' => '盘锦市',
                'ZipCode' => '124000',
                'ProvinceID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            47 => 
            array (
                'CityID' => 48,
                'CityName' => '铁岭市',
                'ZipCode' => '112000',
                'ProvinceID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            48 => 
            array (
                'CityID' => 49,
                'CityName' => '朝阳市',
                'ZipCode' => '122000',
                'ProvinceID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            49 => 
            array (
                'CityID' => 50,
                'CityName' => '葫芦岛市',
                'ZipCode' => '125000',
                'ProvinceID' => 6,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            50 => 
            array (
                'CityID' => 51,
                'CityName' => '长春市',
                'ZipCode' => '130000',
                'ProvinceID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            51 => 
            array (
                'CityID' => 52,
                'CityName' => '吉林市',
                'ZipCode' => '132000',
                'ProvinceID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            52 => 
            array (
                'CityID' => 53,
                'CityName' => '四平市',
                'ZipCode' => '136000',
                'ProvinceID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            53 => 
            array (
                'CityID' => 54,
                'CityName' => '辽源市',
                'ZipCode' => '136200',
                'ProvinceID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            54 => 
            array (
                'CityID' => 55,
                'CityName' => '通化市',
                'ZipCode' => '134000',
                'ProvinceID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            55 => 
            array (
                'CityID' => 56,
                'CityName' => '白山市',
                'ZipCode' => '134300',
                'ProvinceID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            56 => 
            array (
                'CityID' => 57,
                'CityName' => '松原市',
                'ZipCode' => '131100',
                'ProvinceID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            57 => 
            array (
                'CityID' => 58,
                'CityName' => '白城市',
                'ZipCode' => '137000',
                'ProvinceID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            58 => 
            array (
                'CityID' => 59,
                'CityName' => '延边朝鲜族自治州',
                'ZipCode' => '133000',
                'ProvinceID' => 7,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            59 => 
            array (
                'CityID' => 60,
                'CityName' => '哈尔滨市',
                'ZipCode' => '150000',
                'ProvinceID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            60 => 
            array (
                'CityID' => 61,
                'CityName' => '齐齐哈尔市',
                'ZipCode' => '161000',
                'ProvinceID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            61 => 
            array (
                'CityID' => 62,
                'CityName' => '鸡西市',
                'ZipCode' => '158100',
                'ProvinceID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            62 => 
            array (
                'CityID' => 63,
                'CityName' => '鹤岗市',
                'ZipCode' => '154100',
                'ProvinceID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            63 => 
            array (
                'CityID' => 64,
                'CityName' => '双鸭山市',
                'ZipCode' => '155100',
                'ProvinceID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            64 => 
            array (
                'CityID' => 65,
                'CityName' => '大庆市',
                'ZipCode' => '163000',
                'ProvinceID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            65 => 
            array (
                'CityID' => 66,
                'CityName' => '伊春市',
                'ZipCode' => '152300',
                'ProvinceID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            66 => 
            array (
                'CityID' => 67,
                'CityName' => '佳木斯市',
                'ZipCode' => '154000',
                'ProvinceID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            67 => 
            array (
                'CityID' => 68,
                'CityName' => '七台河市',
                'ZipCode' => '154600',
                'ProvinceID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            68 => 
            array (
                'CityID' => 69,
                'CityName' => '牡丹江市',
                'ZipCode' => '157000',
                'ProvinceID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            69 => 
            array (
                'CityID' => 70,
                'CityName' => '黑河市',
                'ZipCode' => '164300',
                'ProvinceID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            70 => 
            array (
                'CityID' => 71,
                'CityName' => '绥化市',
                'ZipCode' => '152000',
                'ProvinceID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            71 => 
            array (
                'CityID' => 72,
                'CityName' => '大兴安岭地区',
                'ZipCode' => '165000',
                'ProvinceID' => 8,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            72 => 
            array (
                'CityID' => 73,
                'CityName' => '上海市',
                'ZipCode' => '200000',
                'ProvinceID' => 9,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            73 => 
            array (
                'CityID' => 74,
                'CityName' => '南京市',
                'ZipCode' => '210000',
                'ProvinceID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            74 => 
            array (
                'CityID' => 75,
                'CityName' => '无锡市',
                'ZipCode' => '214000',
                'ProvinceID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            75 => 
            array (
                'CityID' => 76,
                'CityName' => '徐州市',
                'ZipCode' => '221000',
                'ProvinceID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            76 => 
            array (
                'CityID' => 77,
                'CityName' => '常州市',
                'ZipCode' => '213000',
                'ProvinceID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            77 => 
            array (
                'CityID' => 78,
                'CityName' => '苏州市',
                'ZipCode' => '215000',
                'ProvinceID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            78 => 
            array (
                'CityID' => 79,
                'CityName' => '南通市',
                'ZipCode' => '226000',
                'ProvinceID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            79 => 
            array (
                'CityID' => 80,
                'CityName' => '连云港市',
                'ZipCode' => '222000',
                'ProvinceID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            80 => 
            array (
                'CityID' => 81,
                'CityName' => '淮安市',
                'ZipCode' => '223200',
                'ProvinceID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            81 => 
            array (
                'CityID' => 82,
                'CityName' => '盐城市',
                'ZipCode' => '224000',
                'ProvinceID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            82 => 
            array (
                'CityID' => 83,
                'CityName' => '扬州市',
                'ZipCode' => '225000',
                'ProvinceID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            83 => 
            array (
                'CityID' => 84,
                'CityName' => '镇江市',
                'ZipCode' => '212000',
                'ProvinceID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            84 => 
            array (
                'CityID' => 85,
                'CityName' => '泰州市',
                'ZipCode' => '225300',
                'ProvinceID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            85 => 
            array (
                'CityID' => 86,
                'CityName' => '宿迁市',
                'ZipCode' => '223800',
                'ProvinceID' => 10,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            86 => 
            array (
                'CityID' => 87,
                'CityName' => '杭州市',
                'ZipCode' => '310000',
                'ProvinceID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            87 => 
            array (
                'CityID' => 88,
                'CityName' => '宁波市',
                'ZipCode' => '315000',
                'ProvinceID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            88 => 
            array (
                'CityID' => 89,
                'CityName' => '温州市',
                'ZipCode' => '325000',
                'ProvinceID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            89 => 
            array (
                'CityID' => 90,
                'CityName' => '嘉兴市',
                'ZipCode' => '314000',
                'ProvinceID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            90 => 
            array (
                'CityID' => 91,
                'CityName' => '湖州市',
                'ZipCode' => '313000',
                'ProvinceID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            91 => 
            array (
                'CityID' => 92,
                'CityName' => '绍兴市',
                'ZipCode' => '312000',
                'ProvinceID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            92 => 
            array (
                'CityID' => 93,
                'CityName' => '金华市',
                'ZipCode' => '321000',
                'ProvinceID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            93 => 
            array (
                'CityID' => 94,
                'CityName' => '衢州市',
                'ZipCode' => '324000',
                'ProvinceID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            94 => 
            array (
                'CityID' => 95,
                'CityName' => '舟山市',
                'ZipCode' => '316000',
                'ProvinceID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            95 => 
            array (
                'CityID' => 96,
                'CityName' => '台州市',
                'ZipCode' => '318000',
                'ProvinceID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            96 => 
            array (
                'CityID' => 97,
                'CityName' => '丽水市',
                'ZipCode' => '323000',
                'ProvinceID' => 11,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            97 => 
            array (
                'CityID' => 98,
                'CityName' => '合肥市',
                'ZipCode' => '230000',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            98 => 
            array (
                'CityID' => 99,
                'CityName' => '芜湖市',
                'ZipCode' => '241000',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            99 => 
            array (
                'CityID' => 100,
                'CityName' => '蚌埠市',
                'ZipCode' => '233000',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            100 => 
            array (
                'CityID' => 101,
                'CityName' => '淮南市',
                'ZipCode' => '232000',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            101 => 
            array (
                'CityID' => 102,
                'CityName' => '马鞍山市',
                'ZipCode' => '243000',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            102 => 
            array (
                'CityID' => 103,
                'CityName' => '淮北市',
                'ZipCode' => '235000',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            103 => 
            array (
                'CityID' => 104,
                'CityName' => '铜陵市',
                'ZipCode' => '244000',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            104 => 
            array (
                'CityID' => 105,
                'CityName' => '安庆市',
                'ZipCode' => '246000',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            105 => 
            array (
                'CityID' => 106,
                'CityName' => '黄山市',
                'ZipCode' => '242700',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            106 => 
            array (
                'CityID' => 107,
                'CityName' => '滁州市',
                'ZipCode' => '239000',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            107 => 
            array (
                'CityID' => 108,
                'CityName' => '阜阳市',
                'ZipCode' => '236100',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            108 => 
            array (
                'CityID' => 109,
                'CityName' => '宿州市',
                'ZipCode' => '234100',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            109 => 
            array (
                'CityID' => 110,
                'CityName' => '巢湖市',
                'ZipCode' => '238000',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            110 => 
            array (
                'CityID' => 111,
                'CityName' => '六安市',
                'ZipCode' => '237000',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            111 => 
            array (
                'CityID' => 112,
                'CityName' => '亳州市',
                'ZipCode' => '236800',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            112 => 
            array (
                'CityID' => 113,
                'CityName' => '池州市',
                'ZipCode' => '247100',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            113 => 
            array (
                'CityID' => 114,
                'CityName' => '宣城市',
                'ZipCode' => '366000',
                'ProvinceID' => 12,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            114 => 
            array (
                'CityID' => 115,
                'CityName' => '福州市',
                'ZipCode' => '350000',
                'ProvinceID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            115 => 
            array (
                'CityID' => 116,
                'CityName' => '厦门市',
                'ZipCode' => '361000',
                'ProvinceID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            116 => 
            array (
                'CityID' => 117,
                'CityName' => '莆田市',
                'ZipCode' => '351100',
                'ProvinceID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            117 => 
            array (
                'CityID' => 118,
                'CityName' => '三明市',
                'ZipCode' => '365000',
                'ProvinceID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            118 => 
            array (
                'CityID' => 119,
                'CityName' => '泉州市',
                'ZipCode' => '362000',
                'ProvinceID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            119 => 
            array (
                'CityID' => 120,
                'CityName' => '漳州市',
                'ZipCode' => '363000',
                'ProvinceID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            120 => 
            array (
                'CityID' => 121,
                'CityName' => '南平市',
                'ZipCode' => '353000',
                'ProvinceID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            121 => 
            array (
                'CityID' => 122,
                'CityName' => '龙岩市',
                'ZipCode' => '364000',
                'ProvinceID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            122 => 
            array (
                'CityID' => 123,
                'CityName' => '宁德市',
                'ZipCode' => '352100',
                'ProvinceID' => 13,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            123 => 
            array (
                'CityID' => 124,
                'CityName' => '南昌市',
                'ZipCode' => '330000',
                'ProvinceID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            124 => 
            array (
                'CityID' => 125,
                'CityName' => '景德镇市',
                'ZipCode' => '333000',
                'ProvinceID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            125 => 
            array (
                'CityID' => 126,
                'CityName' => '萍乡市',
                'ZipCode' => '337000',
                'ProvinceID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            126 => 
            array (
                'CityID' => 127,
                'CityName' => '九江市',
                'ZipCode' => '332000',
                'ProvinceID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            127 => 
            array (
                'CityID' => 128,
                'CityName' => '新余市',
                'ZipCode' => '338000',
                'ProvinceID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            128 => 
            array (
                'CityID' => 129,
                'CityName' => '鹰潭市',
                'ZipCode' => '335000',
                'ProvinceID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            129 => 
            array (
                'CityID' => 130,
                'CityName' => '赣州市',
                'ZipCode' => '341000',
                'ProvinceID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            130 => 
            array (
                'CityID' => 131,
                'CityName' => '吉安市',
                'ZipCode' => '343000',
                'ProvinceID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            131 => 
            array (
                'CityID' => 132,
                'CityName' => '宜春市',
                'ZipCode' => '336000',
                'ProvinceID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            132 => 
            array (
                'CityID' => 133,
                'CityName' => '抚州市',
                'ZipCode' => '332900',
                'ProvinceID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            133 => 
            array (
                'CityID' => 134,
                'CityName' => '上饶市',
                'ZipCode' => '334000',
                'ProvinceID' => 14,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            134 => 
            array (
                'CityID' => 135,
                'CityName' => '济南市',
                'ZipCode' => '250000',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            135 => 
            array (
                'CityID' => 136,
                'CityName' => '青岛市',
                'ZipCode' => '266000',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            136 => 
            array (
                'CityID' => 137,
                'CityName' => '淄博市',
                'ZipCode' => '255000',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            137 => 
            array (
                'CityID' => 138,
                'CityName' => '枣庄市',
                'ZipCode' => '277100',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            138 => 
            array (
                'CityID' => 139,
                'CityName' => '东营市',
                'ZipCode' => '257000',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            139 => 
            array (
                'CityID' => 140,
                'CityName' => '烟台市',
                'ZipCode' => '264000',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            140 => 
            array (
                'CityID' => 141,
                'CityName' => '潍坊市',
                'ZipCode' => '261000',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            141 => 
            array (
                'CityID' => 142,
                'CityName' => '济宁市',
                'ZipCode' => '272100',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            142 => 
            array (
                'CityID' => 143,
                'CityName' => '泰安市',
                'ZipCode' => '271000',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            143 => 
            array (
                'CityID' => 144,
                'CityName' => '威海市',
                'ZipCode' => '265700',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            144 => 
            array (
                'CityID' => 145,
                'CityName' => '日照市',
                'ZipCode' => '276800',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            145 => 
            array (
                'CityID' => 146,
                'CityName' => '莱芜市',
                'ZipCode' => '271100',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            146 => 
            array (
                'CityID' => 147,
                'CityName' => '临沂市',
                'ZipCode' => '276000',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            147 => 
            array (
                'CityID' => 148,
                'CityName' => '德州市',
                'ZipCode' => '253000',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            148 => 
            array (
                'CityID' => 149,
                'CityName' => '聊城市',
                'ZipCode' => '252000',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            149 => 
            array (
                'CityID' => 150,
                'CityName' => '滨州市',
                'ZipCode' => '256600',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            150 => 
            array (
                'CityID' => 151,
                'CityName' => '荷泽市',
                'ZipCode' => '255000',
                'ProvinceID' => 15,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            151 => 
            array (
                'CityID' => 152,
                'CityName' => '郑州市',
                'ZipCode' => '450000',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            152 => 
            array (
                'CityID' => 153,
                'CityName' => '开封市',
                'ZipCode' => '475000',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            153 => 
            array (
                'CityID' => 154,
                'CityName' => '洛阳市',
                'ZipCode' => '471000',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            154 => 
            array (
                'CityID' => 155,
                'CityName' => '平顶山市',
                'ZipCode' => '467000',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            155 => 
            array (
                'CityID' => 156,
                'CityName' => '安阳市',
                'ZipCode' => '454900',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            156 => 
            array (
                'CityID' => 157,
                'CityName' => '鹤壁市',
                'ZipCode' => '456600',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            157 => 
            array (
                'CityID' => 158,
                'CityName' => '新乡市',
                'ZipCode' => '453000',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            158 => 
            array (
                'CityID' => 159,
                'CityName' => '焦作市',
                'ZipCode' => '454100',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            159 => 
            array (
                'CityID' => 160,
                'CityName' => '濮阳市',
                'ZipCode' => '457000',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            160 => 
            array (
                'CityID' => 161,
                'CityName' => '许昌市',
                'ZipCode' => '461000',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            161 => 
            array (
                'CityID' => 162,
                'CityName' => '漯河市',
                'ZipCode' => '462000',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            162 => 
            array (
                'CityID' => 163,
                'CityName' => '三门峡市',
                'ZipCode' => '472000',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            163 => 
            array (
                'CityID' => 164,
                'CityName' => '南阳市',
                'ZipCode' => '473000',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            164 => 
            array (
                'CityID' => 165,
                'CityName' => '商丘市',
                'ZipCode' => '476000',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            165 => 
            array (
                'CityID' => 166,
                'CityName' => '信阳市',
                'ZipCode' => '464000',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            166 => 
            array (
                'CityID' => 167,
                'CityName' => '周口市',
                'ZipCode' => '466000',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            167 => 
            array (
                'CityID' => 168,
                'CityName' => '驻马店市',
                'ZipCode' => '463000',
                'ProvinceID' => 16,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            168 => 
            array (
                'CityID' => 169,
                'CityName' => '武汉市',
                'ZipCode' => '430000',
                'ProvinceID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            169 => 
            array (
                'CityID' => 170,
                'CityName' => '黄石市',
                'ZipCode' => '435000',
                'ProvinceID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            170 => 
            array (
                'CityID' => 171,
                'CityName' => '十堰市',
                'ZipCode' => '442000',
                'ProvinceID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            171 => 
            array (
                'CityID' => 172,
                'CityName' => '宜昌市',
                'ZipCode' => '443000',
                'ProvinceID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            172 => 
            array (
                'CityID' => 173,
                'CityName' => '襄樊市',
                'ZipCode' => '441000',
                'ProvinceID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            173 => 
            array (
                'CityID' => 174,
                'CityName' => '鄂州市',
                'ZipCode' => '436000',
                'ProvinceID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            174 => 
            array (
                'CityID' => 175,
                'CityName' => '荆门市',
                'ZipCode' => '448000',
                'ProvinceID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            175 => 
            array (
                'CityID' => 176,
                'CityName' => '孝感市',
                'ZipCode' => '432100',
                'ProvinceID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            176 => 
            array (
                'CityID' => 177,
                'CityName' => '荆州市',
                'ZipCode' => '434000',
                'ProvinceID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            177 => 
            array (
                'CityID' => 178,
                'CityName' => '黄冈市',
                'ZipCode' => '438000',
                'ProvinceID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            178 => 
            array (
                'CityID' => 179,
                'CityName' => '咸宁市',
                'ZipCode' => '437000',
                'ProvinceID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            179 => 
            array (
                'CityID' => 180,
                'CityName' => '随州市',
                'ZipCode' => '441300',
                'ProvinceID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            180 => 
            array (
                'CityID' => 181,
                'CityName' => '恩施土家族苗族自治州',
                'ZipCode' => '445000',
                'ProvinceID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            181 => 
            array (
                'CityID' => 182,
                'CityName' => '神农架',
                'ZipCode' => '442400',
                'ProvinceID' => 17,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            182 => 
            array (
                'CityID' => 183,
                'CityName' => '长沙市',
                'ZipCode' => '410000',
                'ProvinceID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            183 => 
            array (
                'CityID' => 184,
                'CityName' => '株洲市',
                'ZipCode' => '412000',
                'ProvinceID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            184 => 
            array (
                'CityID' => 185,
                'CityName' => '湘潭市',
                'ZipCode' => '411100',
                'ProvinceID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            185 => 
            array (
                'CityID' => 186,
                'CityName' => '衡阳市',
                'ZipCode' => '421000',
                'ProvinceID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            186 => 
            array (
                'CityID' => 187,
                'CityName' => '邵阳市',
                'ZipCode' => '422000',
                'ProvinceID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            187 => 
            array (
                'CityID' => 188,
                'CityName' => '岳阳市',
                'ZipCode' => '414000',
                'ProvinceID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            188 => 
            array (
                'CityID' => 189,
                'CityName' => '常德市',
                'ZipCode' => '415000',
                'ProvinceID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            189 => 
            array (
                'CityID' => 190,
                'CityName' => '张家界市',
                'ZipCode' => '427000',
                'ProvinceID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            190 => 
            array (
                'CityID' => 191,
                'CityName' => '益阳市',
                'ZipCode' => '413000',
                'ProvinceID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            191 => 
            array (
                'CityID' => 192,
                'CityName' => '郴州市',
                'ZipCode' => '423000',
                'ProvinceID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            192 => 
            array (
                'CityID' => 193,
                'CityName' => '永州市',
                'ZipCode' => '425000',
                'ProvinceID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            193 => 
            array (
                'CityID' => 194,
                'CityName' => '怀化市',
                'ZipCode' => '418000',
                'ProvinceID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            194 => 
            array (
                'CityID' => 195,
                'CityName' => '娄底市',
                'ZipCode' => '417000',
                'ProvinceID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            195 => 
            array (
                'CityID' => 196,
                'CityName' => '湘西土家族苗族自治州',
                'ZipCode' => '416000',
                'ProvinceID' => 18,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            196 => 
            array (
                'CityID' => 197,
                'CityName' => '广州市',
                'ZipCode' => '510000',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            197 => 
            array (
                'CityID' => 198,
                'CityName' => '韶关市',
                'ZipCode' => '521000',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            198 => 
            array (
                'CityID' => 199,
                'CityName' => '深圳市',
                'ZipCode' => '518000',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            199 => 
            array (
                'CityID' => 200,
                'CityName' => '珠海市',
                'ZipCode' => '519000',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            200 => 
            array (
                'CityID' => 201,
                'CityName' => '汕头市',
                'ZipCode' => '515000',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            201 => 
            array (
                'CityID' => 202,
                'CityName' => '佛山市',
                'ZipCode' => '528000',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            202 => 
            array (
                'CityID' => 203,
                'CityName' => '江门市',
                'ZipCode' => '529000',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            203 => 
            array (
                'CityID' => 204,
                'CityName' => '湛江市',
                'ZipCode' => '524000',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            204 => 
            array (
                'CityID' => 205,
                'CityName' => '茂名市',
                'ZipCode' => '525000',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            205 => 
            array (
                'CityID' => 206,
                'CityName' => '肇庆市',
                'ZipCode' => '526000',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            206 => 
            array (
                'CityID' => 207,
                'CityName' => '惠州市',
                'ZipCode' => '516000',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            207 => 
            array (
                'CityID' => 208,
                'CityName' => '梅州市',
                'ZipCode' => '514000',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            208 => 
            array (
                'CityID' => 209,
                'CityName' => '汕尾市',
                'ZipCode' => '516600',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            209 => 
            array (
                'CityID' => 210,
                'CityName' => '河源市',
                'ZipCode' => '517000',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            210 => 
            array (
                'CityID' => 211,
                'CityName' => '阳江市',
                'ZipCode' => '529500',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            211 => 
            array (
                'CityID' => 212,
                'CityName' => '清远市',
                'ZipCode' => '511500',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            212 => 
            array (
                'CityID' => 213,
                'CityName' => '东莞市',
                'ZipCode' => '511700',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            213 => 
            array (
                'CityID' => 214,
                'CityName' => '中山市',
                'ZipCode' => '528400',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            214 => 
            array (
                'CityID' => 215,
                'CityName' => '潮州市',
                'ZipCode' => '515600',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            215 => 
            array (
                'CityID' => 216,
                'CityName' => '揭阳市',
                'ZipCode' => '522000',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            216 => 
            array (
                'CityID' => 217,
                'CityName' => '云浮市',
                'ZipCode' => '527300',
                'ProvinceID' => 19,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            217 => 
            array (
                'CityID' => 218,
                'CityName' => '南宁市',
                'ZipCode' => '530000',
                'ProvinceID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            218 => 
            array (
                'CityID' => 219,
                'CityName' => '柳州市',
                'ZipCode' => '545000',
                'ProvinceID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            219 => 
            array (
                'CityID' => 220,
                'CityName' => '桂林市',
                'ZipCode' => '541000',
                'ProvinceID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            220 => 
            array (
                'CityID' => 221,
                'CityName' => '梧州市',
                'ZipCode' => '543000',
                'ProvinceID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            221 => 
            array (
                'CityID' => 222,
                'CityName' => '北海市',
                'ZipCode' => '536000',
                'ProvinceID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            222 => 
            array (
                'CityID' => 223,
                'CityName' => '防城港市',
                'ZipCode' => '538000',
                'ProvinceID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            223 => 
            array (
                'CityID' => 224,
                'CityName' => '钦州市',
                'ZipCode' => '535000',
                'ProvinceID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            224 => 
            array (
                'CityID' => 225,
                'CityName' => '贵港市',
                'ZipCode' => '537100',
                'ProvinceID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            225 => 
            array (
                'CityID' => 226,
                'CityName' => '玉林市',
                'ZipCode' => '537000',
                'ProvinceID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            226 => 
            array (
                'CityID' => 227,
                'CityName' => '百色市',
                'ZipCode' => '533000',
                'ProvinceID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            227 => 
            array (
                'CityID' => 228,
                'CityName' => '贺州市',
                'ZipCode' => '542800',
                'ProvinceID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            228 => 
            array (
                'CityID' => 229,
                'CityName' => '河池市',
                'ZipCode' => '547000',
                'ProvinceID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            229 => 
            array (
                'CityID' => 230,
                'CityName' => '来宾市',
                'ZipCode' => '546100',
                'ProvinceID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            230 => 
            array (
                'CityID' => 231,
                'CityName' => '崇左市',
                'ZipCode' => '532200',
                'ProvinceID' => 20,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            231 => 
            array (
                'CityID' => 232,
                'CityName' => '海口市',
                'ZipCode' => '570000',
                'ProvinceID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            232 => 
            array (
                'CityID' => 233,
                'CityName' => '三亚市',
                'ZipCode' => '572000',
                'ProvinceID' => 21,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            233 => 
            array (
                'CityID' => 234,
                'CityName' => '重庆市',
                'ZipCode' => '400000',
                'ProvinceID' => 22,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            234 => 
            array (
                'CityID' => 235,
                'CityName' => '成都市',
                'ZipCode' => '610000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            235 => 
            array (
                'CityID' => 236,
                'CityName' => '自贡市',
                'ZipCode' => '643000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            236 => 
            array (
                'CityID' => 237,
                'CityName' => '攀枝花市',
                'ZipCode' => '617000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            237 => 
            array (
                'CityID' => 238,
                'CityName' => '泸州市',
                'ZipCode' => '646100',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            238 => 
            array (
                'CityID' => 239,
                'CityName' => '德阳市',
                'ZipCode' => '618000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            239 => 
            array (
                'CityID' => 240,
                'CityName' => '绵阳市',
                'ZipCode' => '621000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            240 => 
            array (
                'CityID' => 241,
                'CityName' => '广元市',
                'ZipCode' => '628000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            241 => 
            array (
                'CityID' => 242,
                'CityName' => '遂宁市',
                'ZipCode' => '629000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            242 => 
            array (
                'CityID' => 243,
                'CityName' => '内江市',
                'ZipCode' => '641000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            243 => 
            array (
                'CityID' => 244,
                'CityName' => '乐山市',
                'ZipCode' => '614000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            244 => 
            array (
                'CityID' => 245,
                'CityName' => '南充市',
                'ZipCode' => '637000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            245 => 
            array (
                'CityID' => 246,
                'CityName' => '眉山市',
                'ZipCode' => '612100',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            246 => 
            array (
                'CityID' => 247,
                'CityName' => '宜宾市',
                'ZipCode' => '644000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            247 => 
            array (
                'CityID' => 248,
                'CityName' => '广安市',
                'ZipCode' => '638000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            248 => 
            array (
                'CityID' => 249,
                'CityName' => '达州市',
                'ZipCode' => '635000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            249 => 
            array (
                'CityID' => 250,
                'CityName' => '雅安市',
                'ZipCode' => '625000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            250 => 
            array (
                'CityID' => 251,
                'CityName' => '巴中市',
                'ZipCode' => '635500',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            251 => 
            array (
                'CityID' => 252,
                'CityName' => '资阳市',
                'ZipCode' => '641300',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            252 => 
            array (
                'CityID' => 253,
                'CityName' => '阿坝藏族羌族自治州',
                'ZipCode' => '624600',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            253 => 
            array (
                'CityID' => 254,
                'CityName' => '甘孜藏族自治州',
                'ZipCode' => '626000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            254 => 
            array (
                'CityID' => 255,
                'CityName' => '凉山彝族自治州',
                'ZipCode' => '615000',
                'ProvinceID' => 23,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            255 => 
            array (
                'CityID' => 256,
                'CityName' => '贵阳市',
                'ZipCode' => '55000',
                'ProvinceID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            256 => 
            array (
                'CityID' => 257,
                'CityName' => '六盘水市',
                'ZipCode' => '553000',
                'ProvinceID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            257 => 
            array (
                'CityID' => 258,
                'CityName' => '遵义市',
                'ZipCode' => '563000',
                'ProvinceID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            258 => 
            array (
                'CityID' => 259,
                'CityName' => '安顺市',
                'ZipCode' => '561000',
                'ProvinceID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            259 => 
            array (
                'CityID' => 260,
                'CityName' => '铜仁地区',
                'ZipCode' => '554300',
                'ProvinceID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            260 => 
            array (
                'CityID' => 261,
                'CityName' => '黔西南布依族苗族自治州',
                'ZipCode' => '551500',
                'ProvinceID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            261 => 
            array (
                'CityID' => 262,
                'CityName' => '毕节地区',
                'ZipCode' => '551700',
                'ProvinceID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            262 => 
            array (
                'CityID' => 263,
                'CityName' => '黔东南苗族侗族自治州',
                'ZipCode' => '551500',
                'ProvinceID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            263 => 
            array (
                'CityID' => 264,
                'CityName' => '黔南布依族苗族自治州',
                'ZipCode' => '550100',
                'ProvinceID' => 24,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            264 => 
            array (
                'CityID' => 265,
                'CityName' => '昆明市',
                'ZipCode' => '650000',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            265 => 
            array (
                'CityID' => 266,
                'CityName' => '曲靖市',
                'ZipCode' => '655000',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            266 => 
            array (
                'CityID' => 267,
                'CityName' => '玉溪市',
                'ZipCode' => '653100',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            267 => 
            array (
                'CityID' => 268,
                'CityName' => '保山市',
                'ZipCode' => '678000',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            268 => 
            array (
                'CityID' => 269,
                'CityName' => '昭通市',
                'ZipCode' => '657000',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            269 => 
            array (
                'CityID' => 270,
                'CityName' => '丽江市',
                'ZipCode' => '674100',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            270 => 
            array (
                'CityID' => 271,
                'CityName' => '思茅市',
                'ZipCode' => '665000',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            271 => 
            array (
                'CityID' => 272,
                'CityName' => '临沧市',
                'ZipCode' => '677000',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            272 => 
            array (
                'CityID' => 273,
                'CityName' => '楚雄彝族自治州',
                'ZipCode' => '675000',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            273 => 
            array (
                'CityID' => 274,
                'CityName' => '红河哈尼族彝族自治州',
                'ZipCode' => '654400',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            274 => 
            array (
                'CityID' => 275,
                'CityName' => '文山壮族苗族自治州',
                'ZipCode' => '663000',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            275 => 
            array (
                'CityID' => 276,
                'CityName' => '西双版纳傣族自治州',
                'ZipCode' => '666200',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            276 => 
            array (
                'CityID' => 277,
                'CityName' => '大理白族自治州',
                'ZipCode' => '671000',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            277 => 
            array (
                'CityID' => 278,
                'CityName' => '德宏傣族景颇族自治州',
                'ZipCode' => '678400',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            278 => 
            array (
                'CityID' => 279,
                'CityName' => '怒江傈僳族自治州',
                'ZipCode' => '671400',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            279 => 
            array (
                'CityID' => 280,
                'CityName' => '迪庆藏族自治州',
                'ZipCode' => '674400',
                'ProvinceID' => 25,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            280 => 
            array (
                'CityID' => 281,
                'CityName' => '拉萨市',
                'ZipCode' => '850000',
                'ProvinceID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            281 => 
            array (
                'CityID' => 282,
                'CityName' => '昌都地区',
                'ZipCode' => '854000',
                'ProvinceID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            282 => 
            array (
                'CityID' => 283,
                'CityName' => '山南地区',
                'ZipCode' => '856000',
                'ProvinceID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            283 => 
            array (
                'CityID' => 284,
                'CityName' => '日喀则地区',
                'ZipCode' => '857000',
                'ProvinceID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            284 => 
            array (
                'CityID' => 285,
                'CityName' => '那曲地区',
                'ZipCode' => '852000',
                'ProvinceID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            285 => 
            array (
                'CityID' => 286,
                'CityName' => '阿里地区',
                'ZipCode' => '859100',
                'ProvinceID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            286 => 
            array (
                'CityID' => 287,
                'CityName' => '林芝地区',
                'ZipCode' => '860100',
                'ProvinceID' => 26,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            287 => 
            array (
                'CityID' => 288,
                'CityName' => '西安市',
                'ZipCode' => '710000',
                'ProvinceID' => 27,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            288 => 
            array (
                'CityID' => 289,
                'CityName' => '铜川市',
                'ZipCode' => '727000',
                'ProvinceID' => 27,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            289 => 
            array (
                'CityID' => 290,
                'CityName' => '宝鸡市',
                'ZipCode' => '721000',
                'ProvinceID' => 27,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            290 => 
            array (
                'CityID' => 291,
                'CityName' => '咸阳市',
                'ZipCode' => '712000',
                'ProvinceID' => 27,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            291 => 
            array (
                'CityID' => 292,
                'CityName' => '渭南市',
                'ZipCode' => '714000',
                'ProvinceID' => 27,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            292 => 
            array (
                'CityID' => 293,
                'CityName' => '延安市',
                'ZipCode' => '716000',
                'ProvinceID' => 27,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            293 => 
            array (
                'CityID' => 294,
                'CityName' => '汉中市',
                'ZipCode' => '723000',
                'ProvinceID' => 27,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            294 => 
            array (
                'CityID' => 295,
                'CityName' => '榆林市',
                'ZipCode' => '719000',
                'ProvinceID' => 27,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            295 => 
            array (
                'CityID' => 296,
                'CityName' => '安康市',
                'ZipCode' => '725000',
                'ProvinceID' => 27,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            296 => 
            array (
                'CityID' => 297,
                'CityName' => '商洛市',
                'ZipCode' => '711500',
                'ProvinceID' => 27,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            297 => 
            array (
                'CityID' => 298,
                'CityName' => '兰州市',
                'ZipCode' => '730000',
                'ProvinceID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            298 => 
            array (
                'CityID' => 299,
                'CityName' => '嘉峪关市',
                'ZipCode' => '735100',
                'ProvinceID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            299 => 
            array (
                'CityID' => 300,
                'CityName' => '金昌市',
                'ZipCode' => '737100',
                'ProvinceID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            300 => 
            array (
                'CityID' => 301,
                'CityName' => '白银市',
                'ZipCode' => '730900',
                'ProvinceID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            301 => 
            array (
                'CityID' => 302,
                'CityName' => '天水市',
                'ZipCode' => '741000',
                'ProvinceID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            302 => 
            array (
                'CityID' => 303,
                'CityName' => '武威市',
                'ZipCode' => '733000',
                'ProvinceID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            303 => 
            array (
                'CityID' => 304,
                'CityName' => '张掖市',
                'ZipCode' => '734000',
                'ProvinceID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            304 => 
            array (
                'CityID' => 305,
                'CityName' => '平凉市',
                'ZipCode' => '744000',
                'ProvinceID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            305 => 
            array (
                'CityID' => 306,
                'CityName' => '酒泉市',
                'ZipCode' => '735000',
                'ProvinceID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            306 => 
            array (
                'CityID' => 307,
                'CityName' => '庆阳市',
                'ZipCode' => '744500',
                'ProvinceID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            307 => 
            array (
                'CityID' => 308,
                'CityName' => '定西市',
                'ZipCode' => '743000',
                'ProvinceID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            308 => 
            array (
                'CityID' => 309,
                'CityName' => '陇南市',
                'ZipCode' => '742100',
                'ProvinceID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            309 => 
            array (
                'CityID' => 310,
                'CityName' => '临夏回族自治州',
                'ZipCode' => '731100',
                'ProvinceID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            310 => 
            array (
                'CityID' => 311,
                'CityName' => '甘南藏族自治州',
                'ZipCode' => '747000',
                'ProvinceID' => 28,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            311 => 
            array (
                'CityID' => 312,
                'CityName' => '西宁市',
                'ZipCode' => '810000',
                'ProvinceID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            312 => 
            array (
                'CityID' => 313,
                'CityName' => '海东地区',
                'ZipCode' => '810600',
                'ProvinceID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            313 => 
            array (
                'CityID' => 314,
                'CityName' => '海北藏族自治州',
                'ZipCode' => '810300',
                'ProvinceID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            314 => 
            array (
                'CityID' => 315,
                'CityName' => '黄南藏族自治州',
                'ZipCode' => '811300',
                'ProvinceID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            315 => 
            array (
                'CityID' => 316,
                'CityName' => '海南藏族自治州',
                'ZipCode' => '813000',
                'ProvinceID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            316 => 
            array (
                'CityID' => 317,
                'CityName' => '果洛藏族自治州',
                'ZipCode' => '814000',
                'ProvinceID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            317 => 
            array (
                'CityID' => 318,
                'CityName' => '玉树藏族自治州',
                'ZipCode' => '815000',
                'ProvinceID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            318 => 
            array (
                'CityID' => 319,
                'CityName' => '海西蒙古族藏族自治州',
                'ZipCode' => '817000',
                'ProvinceID' => 29,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            319 => 
            array (
                'CityID' => 320,
                'CityName' => '银川市',
                'ZipCode' => '750000',
                'ProvinceID' => 30,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            320 => 
            array (
                'CityID' => 321,
                'CityName' => '石嘴山市',
                'ZipCode' => '753000',
                'ProvinceID' => 30,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            321 => 
            array (
                'CityID' => 322,
                'CityName' => '吴忠市',
                'ZipCode' => '751100',
                'ProvinceID' => 30,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            322 => 
            array (
                'CityID' => 323,
                'CityName' => '固原市',
                'ZipCode' => '756000',
                'ProvinceID' => 30,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            323 => 
            array (
                'CityID' => 324,
                'CityName' => '中卫市',
                'ZipCode' => '751700',
                'ProvinceID' => 30,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            324 => 
            array (
                'CityID' => 325,
                'CityName' => '乌鲁木齐市',
                'ZipCode' => '830000',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            325 => 
            array (
                'CityID' => 326,
                'CityName' => '克拉玛依市',
                'ZipCode' => '834000',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            326 => 
            array (
                'CityID' => 327,
                'CityName' => '吐鲁番地区',
                'ZipCode' => '838000',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            327 => 
            array (
                'CityID' => 328,
                'CityName' => '哈密地区',
                'ZipCode' => '839000',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            328 => 
            array (
                'CityID' => 329,
                'CityName' => '昌吉回族自治州',
                'ZipCode' => '831100',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            329 => 
            array (
                'CityID' => 330,
                'CityName' => '博尔塔拉蒙古自治州',
                'ZipCode' => '833400',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            330 => 
            array (
                'CityID' => 331,
                'CityName' => '巴音郭楞蒙古自治州',
                'ZipCode' => '841000',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            331 => 
            array (
                'CityID' => 332,
                'CityName' => '阿克苏地区',
                'ZipCode' => '843000',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            332 => 
            array (
                'CityID' => 333,
                'CityName' => '克孜勒苏柯尔克孜自治州',
                'ZipCode' => '835600',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            333 => 
            array (
                'CityID' => 334,
                'CityName' => '喀什地区',
                'ZipCode' => '844000',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            334 => 
            array (
                'CityID' => 335,
                'CityName' => '和田地区',
                'ZipCode' => '848000',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            335 => 
            array (
                'CityID' => 336,
                'CityName' => '伊犁哈萨克自治州',
                'ZipCode' => '833200',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            336 => 
            array (
                'CityID' => 337,
                'CityName' => '塔城地区',
                'ZipCode' => '834700',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            337 => 
            array (
                'CityID' => 338,
                'CityName' => '阿勒泰地区',
                'ZipCode' => '836500',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            338 => 
            array (
                'CityID' => 339,
                'CityName' => '石河子市',
                'ZipCode' => '832000',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            339 => 
            array (
                'CityID' => 340,
                'CityName' => '阿拉尔市',
                'ZipCode' => '843300',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            340 => 
            array (
                'CityID' => 341,
                'CityName' => '图木舒克市',
                'ZipCode' => '843900',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            341 => 
            array (
                'CityID' => 342,
                'CityName' => '五家渠市',
                'ZipCode' => '831300',
                'ProvinceID' => 31,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            342 => 
            array (
                'CityID' => 343,
                'CityName' => '香港特别行政区',
                'ZipCode' => '000000',
                'ProvinceID' => 32,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            343 => 
            array (
                'CityID' => 344,
                'CityName' => '澳门特别行政区',
                'ZipCode' => '000000',
                'ProvinceID' => 33,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
            344 => 
            array (
                'CityID' => 345,
                'CityName' => '台湾省',
                'ZipCode' => '000000',
                'ProvinceID' => 34,
                'DateCreated' => NULL,
                'DateUpdated' => NULL,
            ),
        ));
        
        
    }
}
