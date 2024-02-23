<?php

// String repeat

//function repeatStr(int $n, string $str): string
//{
//    return str_repeat($str, $n);
//}

// A Needle in the Haystack

//function findNeedle(array $haystack): string|false {
//    for ($i = 0; $i <= count($haystack); $i++) {
//        $str = strpos($haystack[$i], 'needle');
//
//        if ($str !== false) {
//            return "found the needle at position {$i}";
//        }
//    }
//
//    return false;
//}

// How good are you really?

//function betterThanAverage(array $classPoints, int $yourPoints): bool {
//    $sum = array_sum($classPoints) + $yourPoints;
//    $tmp = $sum / (count($classPoints) + 1);
//
//    if ($tmp >= $yourPoints) {
//        return false;
//    }
//
//    return true;
//}

// Grasshopper - Grade book

//function getGrade(int $a, int $b, int $c): string {
//    $result = ($a + $b + $c) / 3;
//
//    if (90 <= $result && $result<= 100) {
//        return 'A';
//    }
//
//    if (80 <= $result && $result<= 90) {
//        return 'B';
//    }
//
//    if (70 <= $result && $result<= 80) {
//        return 'C';
//    }
//
//    if (60 <= $result && $result<= 70) {
//        return 'D';
//    }
//
//    if (0 <= $result && $result<= 60) {
//        return 'F';
//    }
//
//    return 'null';
//}

// Opposite number

//function opposite(int $n): int
//{
//    return $n * -1;
//}

// Convert a String to a Number!

//function stringToNumber(string $str): int
//{
//    return (int) $str;
//}

// Multiply

//function multiply(int $a, int $b): int {
//    return $a * $b;
//}

// Remove exclamation marks

//function remove_exclamation_marks(string $string): string {
//    return str_replace('!', '', $string);
//}

// Sum Arrays

//function sum(array $a): float
//{
//    $sum = 0;
//
//    if (!empty($a)) {
//        for ($i = 0; $i < count($a); $i++) {
//            $sum += $a[$i];
//        }
//    }
//
//    return $sum;
//}

//function square_sum($numbers) : int
//{
//    $square = 0;
//
//    foreach ($numbers as $number) {
//        $square += $number ** 2;
//    }
//
//    return $square;
//}
//
//echo square_sum([]);

// Function 1 - hello world

//function greet(): string
//{
//    $arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
//
//    return $arr[7] . $arr[4] . $arr[11] . $arr[11] . $arr[14] . ' ' . $arr[22] . $arr[14] . $arr[17] . $arr[11] . $arr[3] . '!';
//}