<?php

// echo "sup, nerd?";

for ($i=1; $i <= 50; $i++ ){
?><p><?php echo persistence($i), " is the persistence for ", $i; ?></p><?php
}
function persistence (int $num): int {
  // My goal with the persistence function is convert the int to a string,
  // then use string length value, and array extraction functions
  // to both calculate the reside and keep track of the Integer's persistence
  
  $int_string = str_split((string)$num);
  $persist_val = 1;
  if ( count( $int_string ) == 1 ) {
      return $persist_val;
  }
  else {
    $arr = digmult($int_string);
    $new_int = str_split((string)$arr[0]);
    $digi_length = $arr[1];
    do {
      $arr = digmult($new_int);
      // echo implode(",", $arr);
      $new_int = str_split((string)$arr[0]);
      $digi_length = $arr[1];
      // echo $digi_length;
      $persist_val++;
    } while ( $digi_length > 1 );
    return $persist_val;
  }
}

// Want this function to take an integer string and
// output the residue and number of digits.
function digmult(array $int_string) {
  $digi_mult = 1;
  foreach ( $int_string as $digit ) {
      $digi_mult = (int)$digit * $digi_mult;
  }
  return array( $digi_mult, count( str_split( (string)$digi_mult ) ) );
}

?>