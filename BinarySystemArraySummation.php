<?php
class BinarySystemArraySummation
{
    public function run() {
        $arrayA = [1];
        $arrayB = [1];
        $this->fill($arrayA);
        $this->fill($arrayB);
        $arrayC = [];
        $countA = count($arrayA) - 1;
        $countB = count($arrayB) - 1;
        $this->output($arrayA);
        $this->output($arrayB);
        echo base_convert(implode('', $arrayA), 2, 10) . '</br>';
        echo base_convert(implode('', $arrayB), 2, 10) . '</br>';
        $deposit = 0;
        while ($countA >= 0 || $countB >= 0) {
            $sum = ($arrayB[$countB] ?? 0) + ($arrayA[$countA] ?? 0) + ($deposit ?? 0);
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

}
$BinarySystemArraySummation = new BinarySystemArraySummation;
$result = base_convert(implode($BinarySystemArraySummation->run()), 2, 10);
echo $result;