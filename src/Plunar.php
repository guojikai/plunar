<?php

namespace Plunar;

class Plunar {

    private static $minYear = 1891;
    private static $maxYear = 2100;

    private static $cnNumbers = ['零','一','二','三','四','五','六','七','八','九','十','十一','十二'];

    private static $lunarInfo = [
            [0,2,9,21936], [6,1,30,9656], [0,2,17,9584], [0,2,6,21168], [5,1,26,43344], [0,2,13,59728],
            [0,2,2,27296], [3,1,22,44368], [0,2,10,43856], [8,1,30,19304], [0,2,19,19168], [0,2,8,42352],
            [5,1,29,21096], [0,2,16,53856], [0,2,4,55632], [4,1,25,27304], [0,2,13,22176], [0,2,2,39632],
            [2,1,22,19176], [0,2,10,19168], [6,1,30,42200], [0,2,18,42192], [0,2,6,53840], [5,1,26,54568],
            [0,2,14,46400], [0,2,3,54944], [2,1,23,38608], [0,2,11,38320], [7,2,1,18872], [0,2,20,18800],
            [0,2,8,42160], [5,1,28,45656], [0,2,16,27216], [0,2,5,27968], [4,1,24,44456], [0,2,13,11104],
            [0,2,2,38256], [2,1,23,18808], [0,2,10,18800], [6,1,30,25776], [0,2,17,54432], [0,2,6,59984],
            [5,1,26,27976], [0,2,14,23248], [0,2,4,11104], [3,1,24,37744], [0,2,11,37600], [7,1,31,51560],
            [0,2,19,51536], [0,2,8,54432], [6,1,27,55888], [0,2,15,46416], [0,2,5,22176], [4,1,25,43736],
            [0,2,13,9680], [0,2,2,37584], [2,1,22,51544], [0,2,10,43344], [7,1,29,46248], [0,2,17,27808],
            [0,2,6,46416], [5,1,27,21928], [0,2,14,19872], [0,2,3,42416], [3,1,24,21176], [0,2,12,21168],
            [8,1,31,43344], [0,2,18,59728], [0,2,8,27296], [6,1,28,44368], [0,2,15,43856], [0,2,5,19296],
            [4,1,25,42352], [0,2,13,42352], [0,2,2,21088], [3,1,21,59696], [0,2,9,55632], [7,1,30,23208],
            [0,2,17,22176], [0,2,6,38608], [5,1,27,19176], [0,2,15,19152], [0,2,3,42192], [4,1,23,53864],
            [0,2,11,53840], [8,1,31,54568], [0,2,18,46400], [0,2,7,46752], [6,1,28,38608], [0,2,16,38320],
            [0,2,5,18864], [4,1,25,42168], [0,2,13,42160], [10,2,2,45656], [0,2,20,27216], [0,2,9,27968],
            [6,1,29,44448], [0,2,17,43872], [0,2,6,38256], [5,1,27,18808], [0,2,15,18800], [0,2,4,25776],
            [3,1,23,27216], [0,2,10,59984], [8,1,31,27432], [0,2,19,23232], [0,2,7,43872], [5,1,28,37736],
            [0,2,16,37600], [0,2,5,51552], [4,1,24,54440], [0,2,12,54432], [0,2,1,55888], [2,1,22,23208],
            [0,2,9,22176], [7,1,29,43736], [0,2,18,9680], [0,2,7,37584], [5,1,26,51544], [0,2,14,43344],
            [0,2,3,46240], [4,1,23,46416], [0,2,10,44368], [9,1,31,21928], [0,2,19,19360], [0,2,8,42416],
            [6,1,28,21176], [0,2,16,21168], [0,2,5,43312], [4,1,25,29864], [0,2,12,27296], [0,2,1,44368],
            [2,1,22,19880], [0,2,10,19296], [6,1,29,42352], [0,2,17,42208], [0,2,6,53856], [5,1,26,59696],
            [0,2,13,54576], [0,2,3,23200], [3,1,23,27472], [0,2,11,38608], [11,1,31,19176], [0,2,19,19152],
            [0,2,8,42192], [6,1,28,53848], [0,2,15,53840], [0,2,4,54560], [5,1,24,55968], [0,2,12,46496],
            [0,2,1,22224], [2,1,22,19160], [0,2,10,18864], [7,1,30,42168], [0,2,17,42160], [0,2,6,43600],
            [5,1,26,46376], [0,2,14,27936], [0,2,2,44448], [3,1,23,21936], [0,2,11,37744], [8,2,1,18808],
            [0,2,19,18800], [0,2,8,25776], [6,1,28,27216], [0,2,15,59984], [0,2,4,27424], [4,1,24,43872],
            [0,2,12,43744], [0,2,2,37600], [3,1,21,51568], [0,2,9,51552], [7,1,29,54440], [0,2,17,54432],
            [0,2,5,55888], [5,1,26,23208], [0,2,14,22176], [0,2,3,42704], [4,1,23,21224], [0,2,11,21200],
            [8,1,31,43352], [0,2,19,43344], [0,2,7,46240], [6,1,27,46416], [0,2,15,44368], [0,2,5,21920],
            [4,1,24,42448], [0,2,12,42416], [0,2,2,21168], [3,1,22,43320], [0,2,9,26928], [7,1,29,29336],
            [0,2,17,27296], [0,2,6,44368], [5,1,26,19880], [0,2,14,19296], [0,2,3,42352], [4,1,24,21104],
            [0,2,10,53856], [8,1,30,59696], [0,2,18,54560], [0,2,7,55968], [6,1,27,27472], [0,2,15,22224],
            [0,2,5,19168], [4,1,25,42216], [0,2,12,42192], [0,2,1,53584], [2,1,21,55592], [0,2,9,54560]
        ];

    private $datetime = null;

    /**
     * Plunar constructor.
     * @param int $year
     * @param int $month
     * @param int $date
     */
    public function __construct($year, $month = 0, $date = 0) {
        $this->datetime = self::getDateTime($year, $month = 0, $date = 0);
    }

    /**
     * 将输入内容转换成时间戳
     *
     * @param int $year
     * @param int $month
     * @param int $date
     * @throws PlunarException
     */
    private static function getDateTime($year, $month = 0, $date = 0)
    {
        $timezone = new \DateTimeZone('Asia/Shanghai');
        $datetime = new \DateTime();
        $datetime->setTimezone($timezone);

        if(is_string($year) && $month == 0 && $date == 0) {
            $datetime->setTimestamp(strtotime($year));
        }
        if($year > 9999 && $month == 0 && $date == 0) {
            $datetime->setTimestamp($year);
        }
        if($year && $month && $date) {
            $datetime->setDate($year, $month, $date);
        }
        self::isValidDate($datetime);
        return $datetime;
    }

    /**
     * check date
     *
     * @param int $year
     * @param int $month
     * @param int $date
     * @return bool
     * @throws PlunarException
     */
    private static function isValidDate($datetime) {
        $minTime = mktime(0, 0, 0, 2, 9, self::$minYear);
        $maxTime = mktime(0, 0, 0, 2, 9, self::$maxYear);
        if($datetime->getTimestamp() < $minTime || $datetime->getTimestamp() > $maxTime) {
            $date_string = $datetime->format('Y.n.j');
            throw new PlunarException("Plunar Error: expected date $date_string, expecting 1891.2.9 - 2100.2.9");
        }
        return true;
    }

    /**
     * set
     *
     * @param int $year
     * @param int $month
     * @param int $date
     * @throws PlunarException
     */
    public function setDate($year = 0, $month = 0, $date = 0) {
        self::isValidDate($year, $month, $date);
        $this->year = $year;
        $this->month = $month;
        $this->date = $date;
    }



    /**
     * convert solar date to lunar date
     * @param number $year 阳历-年
     * @param number $month 阳历-月
     * @param number $date 阳历-日
     * @return array
     * @throws PlunarException
     */
    public static function solarToLunar($year, $month = 0, $date = 0)
    {
        $datetime = self::getDateTime($year, $month, $date);
        return self::getLunarByBetween($datetime->format('Y'), self::getDaysBetweenSolar($datetime->format('Y'), $datetime->format('n'), $datetime->format('j')) );
    }

    /**
     * @param number $year 阳历-年
     * @param number $month 阳历-月
     * @return array
     * @throws PlunarException
     */
    public static function convertSolarMonthToLunar($year, $month) {
        self::isValidDate($year, $month, 1);
        $month_days_ary = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        $dd = $month_days_ary[$month];
        if(self::isLeapYear($year) && $month == 2) $dd++;
        $lunar_ary = [];
        for ($i = 1; $i < $dd; $i++) {
            $array = self::getLunarByBetween($year, self::getDaysBetweenSolar($year, $month, $i));
            $array[] = $year . '-' . $month . '-' . $i;
            $lunar_ary[$i] = $array;
        }
        return $lunar_ary;
    }

    /**
     * 判断那年是否是闰年
     * @param number $year
     * @return boolean
     */
    public static function isLeapYear($year) {
        return ($year%4 == 0 && $year%100 != 0) || ($year%400 == 0);
    }

    /**
     * 将阳历年份转为干支纪年
     * @param number $year eg. 1984
     * @return string eg. 甲子
     */
    public static function getLunarYearName($year) {
        $sky = ['庚', '辛', '壬', '癸', '甲', '乙', '丙', '丁', '戊', '己'];
        $earth = ['申', '酉', '戌', '亥', '子', '丑', '寅', '卯', '辰', '巳', '午', '未'];
        $year = (string)$year;
        return $sky[$year{3}] . $earth[$year%12];
    }

    /**
     * 根据阴历年获取生肖
     * @param number $year 阴历年
     * @return string
     */
    public static function getYearZodiac($year) {
        $zodiac = ['猴', '鸡', '狗', '猪', '鼠', '牛', '虎', '兔', '龙', '蛇', '马', '羊'];
        return $zodiac[$year%12];
    }

    /**
    * 将阴历转换为阳历
    * @param number $year 阴历-年
    * @param number $month 阴历-月，闰月处理：例如如果当年闰五月，那么第二个五月就传六月，相当于阴历有13个月，只是有的时候第13个月的天数为0
    * @param number $date 阴历-日
    * @return array
    */
    public static function convertLunarToSolar($year, $month, $date) {
        $yearData = self::$lunarInfo[$year-self::$minYear];
        $between = self::getDaysBetweenLunar($year, $month, $date);
        $res = mktime(0, 0, 0, $yearData[1], $yearData[2], $year);
        $res = date('Y-m-d', $res +$between*24*60*60);
        $day = explode('-', $res);
        $year = $day[0];
        $month = $day[1];
        $day = $day[2];
        return [$year, $month, $day];
    }

    /**
     * 获取阳历指定月份的天数
     * @param number $year 年 eg. 1984
     * @param number $month 月 eg. 9
     * @return number 天数 eg. 30
     */
    public static function getSolarMonthDays($year, $month) {
        $monthHash = [
                '0' => 0,
                '1' => 31,
                '2' => self::isLeapYear($year) ? 29 : 28,
                '3' => 31,
                '4' => 30,
                '5' => 31,
                '6' => 30,
                '7' => 31,
                '8' => 31,
                '9' => 30,
                '10' => 31,
                '11' => 30,
                '12' => 31
            ];
        return $monthHash[$month];
    }

    /**
     * 获取阴历指定月份的天数
     * @param number $year 年 eg. 1984
     * @param number $month 月 eg. 9
     * @return number 天数 eg. 30
     */
    public static function getLunarMonthDays($year, $month) {
        $monthData = self::getLunarMonths($year);
        return $monthData[$month-1];
    }

    /**
     * 获取阴历每月的天数的数组
     * @param number $year
     * @return array
     */
    public static function getLunarMonths($year) {
        $yearData = self::$lunarInfo[$year - self::$minYear];
        $leapMonth = $yearData[0];
        $bit = decbin($yearData[3]);
        $bitArray = array();
        for ($i = 0; $i < strlen($bit); $i++) {
            $bitArray[$i] = substr($bit, $i, 1);
        }
        for($k = 0, $klen = 16-count($bitArray); $k < $klen; $k++) {
            array_unshift($bitArray, '0');
        }
        $bitArray = array_slice($bitArray, 0, ($leapMonth == 0 ? 12:13));
        for($i = 0; $i < count($bitArray); $i++) {
            $bitArray[$i] = $bitArray[$i] + 29;
        }
        return $bitArray;
    }

    /**
     * 获取阳历每年的天数
     * @param number $year 阳历年份
     * @return mixed
     */
    public static function getLunarYearDays($year) {
            $monthArray = self::getLunarYearMonths($year);
            $len = count($monthArray);
            return $monthArray[$len-1] == 0 ? $monthArray[$len-2] : $monthArray[$len-1];
    }

    /**
     * @param number $year
     * @return array
     */
    public static function getLunarYearMonths($year) {
        $monthData = self::getLunarMonths($year);
        $res = [];
        $yearData = self::$lunarInfo[$year-self::$minYear];
        $len = ($yearData[0] == 0 ? 12:13);
        for($i = 0; $i < $len; $i++) {
            $temp = 0;
            for($j = 0; $j <= $i; $j++) {
                $temp += $monthData[$j];
            }
            array_push($res, $temp);
        }
        return $res;
    }

    /**
     * 获取闰月
     * @param number $year 阴历年份
     * @return mixed
     */
    public static function getLeapMonth($year) {
        $yearData = self::$lunarInfo[$year-self::$minYear];
        return $yearData[0];
    }

    /**
     * 计算阴历日期与正月初一相隔的天数
     * @param number $year
     * @param number $month
     * @param number $date
     * @return number
     */
    public static function getDaysBetweenLunar($year, $month, $date) {
        $yearMonth = self::getLunarMonths($year);
        $res = 0;
        for($i = 1; $i < $month; $i++) {
                $res += $yearMonth[$i-1];
        }
        $res += $date-1;
        return $res;
    }

    /**
     * 计算某个阳历日期距离当年的正月初一有多少天
     * @param number $year 阳历年份
     * @param number $month 阳历月份
     * @param number $date 阳历日期
     * @return number 天数
     */
    public static function getDaysBetweenSolar($year, $month, $date) {
        $yearInfo = self::$lunarInfo[$year-self::$minYear];
        $a = mktime(0, 0, 0, $month, $date, $year);
        $b = mktime(0, 0, 0, $yearInfo[1], $yearInfo[2], $year);
        return (int)ceil( ($a-$b) / 24 / 3600 );
    }

    /**
     * 根据距离正月初一的天数计算阴历日期
     * @param number $year 阳历年份 eg. 1984
     * @param number $between 天数 eg. 12
     * @return array
     */
    public static function getLunarByBetween($year, $between) {
        $lunarArray = [];
        $t = 0;
        $e = 0;
        $leapMonth = 0;
        if($between == 0) {
            array_push($lunarArray, self::toYear($year), '正月', '初一');
            $t = 1;
            $e = 1;
        } else{
            $year = $between > 0 ? $year : ($year-1);
            $yearMonth = self::getLunarYearMonths($year);
            $leapMonth = self::getLeapMonth($year);
            $between = $between > 0 ? $between : (self::getLunarYearDays($year) +$between);
            for($i = 0; $i < 13; $i++) {
                if($between == $yearMonth[$i]) {
                    $t = $i +2;
                    $e = 1;
                    break;
                } else if($between < $yearMonth[$i]) {
                    $t = $i +1;
                    $e = $between-(empty($yearMonth[$i-1]) ? 0 : $yearMonth[$i-1]) + 1;
                    break;
                }
            }
            $m = ($leapMonth!=0 && $t == $leapMonth+1) ? ('闰'.self::getCapitalNum($t-1, true)) : self::getCapitalNum(($leapMonth!=0 && $leapMonth+1 < $t ? ($t-1) : $t), true);
            array_push($lunarArray, self::toYear($year), $m, self::getCapitalNum($e, false)); //年月日
        }
        array_push($lunarArray, self::getLunarYearName($year));// 天干地支
        array_push($lunarArray, self::getYearZodiac($year));// 12生肖
        array_push($lunarArray, $leapMonth ? '闰'.self::$cnNumbers[$leapMonth].'月': 0);// 闰几月
        array_push($lunarArray, [$year, $t, $e]);
        return $lunarArray;
    }

    /**
     * 获取年份的阴历叫法 eg. 一九八四
     * @param number $year 阳历年份
     * @return string
     */
    public static function toYear($year) {
        $year_arr = str_split($year);
        return self::$cnNumbers[$year_arr[0]].self::$cnNumbers[$year_arr[1]].self::$cnNumbers[$year_arr[2]].self::$cnNumbers[$year_arr[3]];
    }

    /**
     * 获取月份或日期的阴历叫法 eg. 腊月 | 初八
     * @param number $num 数字
     * @param boolean $isMonth 是否是月份的数字
     * @return string
     */
    public static function getCapitalNum($num, $isMonth = false) {
        $monthHash = ['', '正', '二', '三', '四', '五', '六', '七', '八', '九', '十', '冬', '腊'];
        $dateHash = ['', '一', '二', '三', '四', '五', '六', '七', '八', '九', '十'];
        if($isMonth) {
            return $monthHash[$num].'月';
        }
        $str = '';
        if($num <= 10) {
            $str = '初'.$dateHash[$num];
        } else if($num > 10&&$num < 20) {
            $str = '十'.$dateHash[$num-10];
        } else if($num == 20) {
            $str = "二十";
        } else if($num > 20&&$num < 30) {
            $str = "廿".$dateHash[$num-20];
        } else if($num == 30) {
            $str = "三十";
        }
        return $str;
    }

}

