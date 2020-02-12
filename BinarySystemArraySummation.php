<?php
class BinarySystemArraySummation
{
    /**
     * @return array
     */
    public function run() {
        $arrayA = [1];
        $arrayB = [1];
        $this->fill($arrayA);
        $this->fill($arrayB);
        $arrayC = [];
        $countA = count($arrayA) - 1;
        $countB = count($arrayB) - 1;
        // 计算最大的数组
        $key = $countA > $countB ? 'countA' : 'countB';
        $this->output($arrayA);
        $this->output($arrayB);
        $this->binarySystemPut($arrayA);
        $this->binarySystemPut($arrayB);
        // 计算进一之后的余数
        $deposit = 0;
        while ($$key >= 0) {
            $sum = ($arrayB[$countB] ?? 0) + ($arrayA[$countA] ?? 0) + $deposit;
            // 判断是否需要进一
            if ($sum >= 2) {
                array_unshift($arrayC, $sum - 2);
                $deposit = 1;
            } else {
                array_unshift($arrayC, intval($sum));
                $deposit = 0;
            }
            $countA--;
            $countB--;
        }
        if ($deposit) {
            array_unshift($arrayC, 1);
        } 
        return $arrayC;
    }

    /**
     * 填充二进制数字
     * @param array
     * @return void
     */
    public function fill(array &$array) {
        $max = random_int(5, 5);
        for ($i = 0; $i < $max; $i ++) { 
            $random = random_int(0, 1);
            array_push($array, $random);
        }
    }

    /**
     * 打印数组
     * @param array $array
     * @return void
     */
    public function output(array $array) {
        echo implode('', $array) . '</br>';
    }

    /**
     * 输出二进制
     * @param array $array
     * @return void
     */
    public function binarySystemPut(array $array) {
        echo base_convert(implode('', $array), 2, 10) . '</br>';
    }

}
$run = new BinarySystemArraySummation;
$result = $run->binarySystemPut($run->run());
echo $result;