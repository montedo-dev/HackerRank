<?php

namespace HackerRank\Solutions\Practice;

class SuperReducedString
{
    // Problem: https://www.hackerrank.com/challenges/reduced-string/problem

    public function firstSolution(string $string)
    {
        $arrayOfChars = str_split($string);
        $i = 0;

        // The size of Array minus one,
        // for us not verify the last position with something that doesn't exists

        while ($i < (count($arrayOfChars) - 1)) {
            //For better reading
            $currentChar = $arrayOfChars[$i];
            $nextChar = $arrayOfChars[$i + 1];

            if ($currentChar == $nextChar && $currentChar != "") {
                //Removing
                unset($arrayOfChars[$i], $arrayOfChars[$i + 1]);
                //Reindexing
                $arrayOfChars = array_values($arrayOfChars);
                // Ajusting loop variable when enters in while to be 0;
                $i = -1;
            }
            $i++;
        }
        return count($arrayOfChars) > 0 ? implode($arrayOfChars) : "Empty String";
    }

    public function secondSolution(string $str)
    {
        $continue = true;
        while ($continue) {
            $continue = false;
            $i = 0;
            $strLen = strlen($str);
            $newStr = '';
            while ($i < $strLen) {
                if ($i + 1 < $strLen && $str[$i] == $str[$i + 1]) {
                    $continue = true;
                    $i += 2;
                } else {
                    $newStr .= $str[$i];
                    $i++;
                }
            }
            $str = $newStr;
        }
        return empty($str) ? 'Empty String' : $str;
    }
}
