<?php 

$Integer = 4;
$Float = 3.2;
$String = "ciao"; 
$Boolean = true;

var_dump ($Integer);
var_dump ($Float);
var_dump ($String);
var_dump ($Boolean);




$text1 = "Marco"; 
$text2 = "hai"; 
$text3 = "sete"; 
$text4 = "?"; 
$text5 = "Perchè"; 
$text6 = '$text2'; 
$text7 = 'bevuto'; 
$text8 = "tutto";



echo $text1 . " " . $text2 . " " . $text3 . $text4 . "\n" . $text5 . " " . $text2 . " " . $text7 . " " . $text8 . "\n";





$words1 = [ 
    'una', 
    67, 
    'vita', 
    'colle',
    'mi', 
    'rosso', 
    [ 
      'oscura', 
      'era', 
      89, 
      [ 
        'mezzo',
        [ 
          'cammin', 
          'Nel', 
          [ 
            'selva', 
            'la', 
            [ 
              'via', 
              'una', 
              true, 
            ] 
          ], 
        ] 
      ], 
    'ritrovai', 
    'per' 
    ], 
    'diritta' 
  ]; 
  $words2 = [ 
    'elemento1' => 25.89, 
    'elemento2' => 'nostra', 
    'elemento3' => [ 
                      'Virgilio', 
                      'smarrita', 
                      'ché' 
                    ] 
  ];



  $results = $words1[6][3][1][1] . " " . $words1[6][3][0] . " " . $words1[7][0] . $words1[7][1] . " " . $words1[6][3][1][0] . " " . $words1[7][0] . $words1[7][1]
             . " " . $words2["elemento2"] . " " .$words1[2] . " " . $words1[4] . " " .$words1[6][4] . " " . $words1[6][5] . " " . $words1[6][3][1][2][2][1]
             . " " . $words1[6][3][1][2][0] . " " . $words1[6][0] . "," . " " . $words2["elemento3"][2] . " " . $words1[6][3][1][2][1] . " " . $words1[7]
             . " " . $words1[6][3][1][2][2][0] . " " . $words1[6][1] . " " . $words2["elemento3"][1];

 
  var_dump($results);
  


  $x = 10; 
  $y = 20; 
  $z = "20"; 
  $w = 10;

  $x < $y ;
  $x <= $w ;
  $y == $z ;
  $y === $z ;
  $y !== $z ;
  $y != $z ;

  var_dump($x<$y);
  var_dump($x <= $w);
  var_dump($y == $z); 
  var_dump($y === $z);
  var_dump( $y !== $z);
  var_dump($y != $z);
?>









