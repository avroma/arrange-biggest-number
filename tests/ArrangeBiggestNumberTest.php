<?php
    use PHPUnit\Framework\TestCase;
    require_once './src/ArrangeBiggestNumber.php';

    class ArrangeBiggestNumberTest extends TestCase {
        public function testArrangeBiggestNumber() {
            $testDataArrangeBiggestNumber = array(
                array(
                    "result" => '21',
                    "input" => [1, 2]
                ),
                array(
                    "result" => '321',
                    "input" => [1, 2, 3]
                ),
                array(
                    "result" => '332111',
                    "input" => [111, 2, 33]
                ),
                array(
                    "result" => '1111',
                    "input" => [11, 1, 1]
                ),
            );
            for($i = 0; $i < count($testDataArrangeBiggestNumber); $i++) {
                $this->assertEquals($testDataArrangeBiggestNumber[$i]["result"], arrangeBiggestNumber($testDataArrangeBiggestNumber[$i]["input"]));
            }
        }

        public function testCompareAsStrings() {
            $testDataCompareAsStrings = array(
                array(
                    "result" => [2, 1],
                    "first input" => 1,
                    "second input" => 2
                ),
                array(
                    "result" => [2, 1],
                    "first input" => 2,
                    "second input" => 1
                ),
                array(
                    "result" => [3, 3],
                    "first input" => 3,
                    "second input" => 3
                ),
                array(
                    "result" => [45, 44],
                    "first input" => 44,
                    "second input" => 45
                ),
                array(
                    "result" => [6, 55],
                    "first input" => 55,
                    "second input" => 6
                )
            );

            for($i = 1; $i < count($testDataCompareAsStrings); $i++) {
                $this->assertEquals($testDataCompareAsStrings[$i]["result"], compareAsStrings($testDataCompareAsStrings[$i]["first input"], $testDataCompareAsStrings[$i]["second input"]));
            }
        }
    }
?>