<?php

//ARRAYS
//various methods to define array 
// $programming_languages = ['PHP', 'PYTHON', 'DOT NET']; //new
// $programming_languages1 = array('PHP', 'PYTHON', 'DOT NET'); //older

// // access array elements
// echo $programming_languages[1];  //prints python

// count($programming_languages); //counts number of array elements - 3

// array_push($programming_languages, 'C++', 'C'); //array push pass the values by reference it modifies original arrays
// print_r($programming_languages);

//associative array

// $programmingLanguages = [
//   'php' => '8.0',
//   'python' => 3.9
// ];

// echo "<pre>";
// print_r($programmingLanguages);

// echo $programmingLanguages['php'];

//multidimensional

$programmingLanguagesM = [
  'php' => [
    'creator' => 'Rasmus ledorf',
    'extension' => '.php',
    'website' => 'www.php.net',
    'isOpenSource' => true,
    'versions' => [
      ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
      ['version' => 7.4, 'releaseDate' => 'Nov 28, 2019']
    ]
    ],
  'python' => [
    'creator' => 'Guido Van Rossum',
    'extension' => '.py',
    'website' => 'www.python.org',
    'isOpenSource' => true,
    'version' => [
      ['version' => 3.9, 'releaseDate' => 'oct 5, 2020'],
      ['version' => 3.8, 'releaseDate' => 'oct 28, 2019']
    ]
    ]
];

echo "<pre>";
print_r($programmingLanguagesM);

//print_r($programmingLanguagesM['php']);
echo "</pre>";

//access element in multidimensional array

echo $programmingLanguagesM['php']['website'];
echo '<br>';
echo $programmingLanguagesM['php']['versions'][0]['version'];

//array_pop($programmingLanguagesM); //removes last elements from the array
array_shift($programmingLanguagesM); //removes first elements from the array

echo "<pre>";
print_r($programmingLanguagesM);
echo "</pre>";


