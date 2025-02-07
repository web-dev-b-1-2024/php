<?php 

// Form

function isVowelOrConsonant($character = null) {
    $vowel = ['a', 'e', 'i', 'o', 'u'];

    $character = strtolower($character);
    $isVowel = in_array($character, $vowel);

    if($isVowel) {
        echo "Character $character is a vowel!";
    }else {
        echo "Character $character is a consonant!";
    }
}

isVowelOrConsonant('A');






// $nums = [4, 65, 7];

// sort($nums);

// var_dump($nums[0]);



// Function
// Buit-in or Pre-defined Function
// User defined Function

// function functionName() {
    // Statement
// }

//Arrow Function
// $sum = fn($num1 = 0, $num2 = 0) =>  $num1 + $num2;

// echo $sum(3, 5);

// Anonymouse Function
// $sayHello = function ($name) {
//     echo "Hello " . $name;
// };

// $sayHello("Tania");




// $name = "Tania";

//Variadic
// function sum(...$value) : string {
 
//     $result = 0;

//     $len = count($value);

//     for($i = 0; $i < $len; $i++) {
//         $result += $value[$i];
//     }

//     return $result;
    
    
// }

// sum(2, 5, 6, 7, 10, 90);




// Identifier
// Keyword

//Declare / Initialize
//Parameter
function sum($num1 = 0, $num2 = 0) {
    $result = $num1 + $num2;
    return $result;
}

// Argument
// echo sum(4, 5);



// $person = [
//     "name" => "Mr. John", 
//     "age" => 50
// ];

// var_dump(array_key_exists("ages", $person));
