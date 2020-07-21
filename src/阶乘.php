<?php
/**
 *
 */
class dealNumber
{

    public function dealNum($number)
    {
        if ($number > 1) {
            return $number * $this->dealNum($number - 1);
        } else {
            return true;
        }
        return $number > 1 ? $this->dealNum($number - 1) * $number : 1; //三元运算递归 阶乘
        return array_product(range(1, $n)); //数组乘积
    }
}
$result = new dealNumber();
$res    = $result->dealNum(9);
print_r($res);die;
