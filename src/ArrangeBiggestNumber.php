<?php
    function compareAsStrings($val1, $val2) {
        $strVal1 = (string)$val1;
        $strVal2 = (string)$val2;

        $lenght = min(strlen($strVal1), strlen($strVal2));

        for($i = 0; $i < $lenght; $i++) {
            if((int)substr($strVal1, $i, 1) > (int)substr($strVal2, $i, 1)) {
                return [$val1, $val2];
            } else {
                return [$val2, $val1];    
            }
        }
        
        if(strlen($strVal1) < strlen($strVal2)) {
            return [$val1, $val2];
        }

        return [$val2, $val1];
    }
        
    function arrangeBiggestNumber($intArr) {
        $tmp;
        $result = "";
        
        for($i = 0, $j = 1; $i+1 < count($intArr);) {
            if($j < count($intArr)) {
                $tmp = compareAsStrings($intArr[$i], $intArr[$j]);
                $intArr[$i] = $tmp[0];
                $intArr[$j] = $tmp[1];
                $j++;
            } else {
                $i++;
                $j = $i + 1;
            }
        }

        forEach($intArr as $substr) {
            $result .= (string)$substr;
        }
        
        return $result;
    }
?>

