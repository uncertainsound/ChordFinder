<?php

//functions for the chord finder
/* contents
   1. tuningfunction
   2. chordmaker
   3. reducer
   4. noteconverter
   5. associator
   6. notecheck
*/



//tuningfunction builds each string based upon the selected tuning
function tuningfunction ($stringarray) {
    $stringpointer = $stringarray;
    //make empty array to put each guitar string into
    $string = array();
  //for loop to populate each guitar string array with note numbers
  for ($n = 0; $n < 12; $n++) {
    $string[] = $stringpointer;
    $stringpointer ++;
  }
  //returns array populated with note numbers
  return $string;
}


//chordmaker builds chord based on root and quality
function chordmaker ($root, $quality) {
  $chordarray = array();

  //adding root
  $chordarray[] = $root;

  //adding 3rd
    //major 3rd
      if ($quality == "maj" || $quality == "aug" || $quality == "maj7" || $quality == "dom7" || $quality == "dom7b9" || $quality == "dom9") {
         $third = $root + 4;
      }
   //minor 3rd
      if ($quality == "min" || $quality == "dim" || $quality == "min7" || $quality == "minmaj7" || $quality == "halfdim7" || $quality == "dim7") {
        $third = $root + 3;
      }

  //adding 5th
    //Diminished 5th
     if ($quality == "dim" || $quality == "halfdim7" || $quality == "dim7") {
       $fifth = $root + 6;
     }
    //Augmented 5th
     else if ($quality == "aug") {
       $fifth = $root + 8;
     }
    //Perfect 5th
     else {
       $fifth = $root + 7;
     }

  //adding 7th
    //Major 7th
    if ($quality == "maj7" || $quality == "minmaj7") {
       $seventh = $root + 11;
    }      
    //Minor 7th
    if ($quality == "dom7" || $quality == "dom7b9" || $quality == "dom9" || $quality == "min7" || $quality == "halfdim7") {
      $seventh = $root + 10;
    }
   //Diminished 7th
    if ($quality == "dim7") {
      $seventh = $root + 9;
    }

  //adding 9th
    //Major 9th
    if ($quality == "dom9") {
      $ninth = $root + 14;
    }
   //Flat 9
   if ($quality == "dom7b9") {
      $ninth = $root + 13;
   }

   //adding notes to chordarray
   $chordarray = array($root, $third, $fifth);
  
   if (isset ($seventh)) {
     $chordarray[] = $seventh;
    } 
  if (isset ($ninth)) {
     $chordarray[] = $ninth;
    }
  return $chordarray;
}


//reducer changes notenumbers >11 into numbers between 0-11
function reducer ($chordarray) {
  for ($n = 0; $n < count($chordarray); $n++) {
    if ($chordarray[$n] > 11) {
      $chordarray[$n] = $chordarray[$n] % 12;
  }
 }
  return $chordarray;
}


//noteconverter converts numbered notes into named notes
function noteconverter ($numberednotes) {
    $allnotes = array(
      "0" => "C",
      "1" => "C#/Db",
      "2" => "D",
      "3" => "D#/Eb",
      "4" => "E",
      "5" => "F",
      "6" => "F#/Gb",
      "7" => "G",
      "8" => "G#/Ab",
      "9" => "A",
      "10" => "A#/Bb",
      "11" => "B"
      );
  for ($n = 0; $n < count($numberednotes); $n++) {
    $notename = $allnotes[$numberednotes[$n]];
    $notesarray[$n] = $notename;
  }

  return $notesarray;
}


//associator connects notes with guitar strings
function associator ($notesarray) {
  $associative_array = array(
    "$notesarray[0]" => "0",
    "$notesarray[1]" => "1",
    "$notesarray[2]" => "2",
    "$notesarray[3]" => "3",
    "$notesarray[4]" => "4",
    "$notesarray[5]" => "5",
    "$notesarray[6]" => "6",
    "$notesarray[7]" => "7",
    "$notesarray[8]" => "8",
    "$notesarray[9]" => "9",
    "$notesarray[10]" => "10",
    "$notesarray[11]" => "11"
    );

  return $associative_array;
}


//notechecks compares notes in the chord with notes on the string
function notecheck ($notearray, $string_array) {
$matchednotes = 0;

return $matchednotes;
}

?>