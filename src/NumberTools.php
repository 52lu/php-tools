<?php
/**
 * @Description:
 * @Author: Mr.LiuQHui
 * @Date: 2020/7/17 3:01 下午
 */


namespace phpTools;


/**
 * @Description: 数字相关的操作
 * @Class NumberTools
 * @Package phpTools
 */
class NumberTools
{
    /**
     * @description: 把一个数字转成指定位数的浮点数
     * @param $value
     * @param int $precision
     * @return float|int
     * @autor Mr.LiuQHui
     */
    public static function getFloor($value, $precision = 0)
    {
        $precisionFactor = $precision == 0 ? 1 : pow(10, $precision);
        $tmp = $value * $precisionFactor;
        $tmp2 = (string)$tmp;
        if (strpos($tmp2, '.') === false) {
            return ($value);
        }
        if ($tmp2[strlen($tmp2) - 1] == 0) {
            return $value;
        }
        return floor($tmp) / $precisionFactor;
    }

    /**
     * @description: 删除数字中非数字字符
     * @param $str
     * @return string|string[]|null
     * @autor Mr.LiuQHui
     *  如：123abc456 ==> 123456
     */
    public static function trimNoNumString($str)
    {
        return preg_replace("/[^0-9,.-]/", "", $str);
    }
}