<?php
/*
	Contents
	1. put tuning string into array
	2. make array for each string
	3. get chord root and quality
	4. turn root and quality into numbered notes
	5. turn numbered notes into numbers between 0-11
	6. turn numbered notes into note names
	7. turn numbered string notes into numberd between 0-11
	8. convert guitar string numbered notes into note names
	9. put guitar strings into associative array
	10. check chord against guitar string array
	11. convert root number into root name for display
	12. find parts of the chord
	13. make a display out of each string
*/

  
//putting submitted string tuning into an array
  $stringarray = array
   ($_GET['string1'], 
    $_GET['string2'], 
    $_GET['string3'], 
    $_GET['string4'], 
    $_GET['string5'], 
    $_GET['string6']);

//making an array for each string- notes as numbers C=0, C#=1, etc.
  $string_1_array = tuningfunction($stringarray[0]);
  $string_2_array = tuningfunction($stringarray[1]);
  $string_3_array = tuningfunction($stringarray[2]);
  $string_4_array = tuningfunction($stringarray[3]);
  $string_5_array = tuningfunction($stringarray[4]);
  $string_6_array = tuningfunction($stringarray[5]);


//taking root and quality from submission
  $root = $_GET['root'];
  $quality = $_GET['quality'];

//putting chord quality and root into array of notes
  $chordarray = chordmaker($root, $quality);
  
//reducing note numbers greater than 11
  $reducedarray = reducer($chordarray);

//convert numbered array into note names
  $chordnotes = noteconverter($reducedarray);
 
//reducing the numbers on guitar strings greater than 11
  $reduced_string_1_array = reducer($string_1_array);
  $reduced_string_2_array = reducer($string_2_array);
  $reduced_string_3_array = reducer($string_3_array);
  $reduced_string_4_array = reducer($string_4_array);
  $reduced_string_5_array = reducer($string_5_array);
  $reduced_string_6_array = reducer($string_6_array);
  
//convert guitar strings into note names
  $named_string_1_array = noteconverter($reduced_string_1_array);
  $named_string_2_array = noteconverter($reduced_string_2_array);
  $named_string_3_array = noteconverter($reduced_string_3_array);
  $named_string_4_array = noteconverter($reduced_string_4_array);
  $named_string_5_array = noteconverter($reduced_string_5_array);
  $named_string_6_array = noteconverter($reduced_string_6_array);

//convert guitar strings into associative array
  $associative_string_1_array = associator($reduced_string_1_array);
  $associative_string_2_array = associator($reduced_string_2_array);
  $associative_string_3_array = associator($reduced_string_3_array);
  $associative_string_4_array = associator($reduced_string_4_array);
  $associative_string_5_array = associator($reduced_string_5_array);
  $associative_string_6_array = associator($reduced_string_6_array);

//check chord against guitar strings array
  $string_notes_1 = array_intersect($named_string_1_array, $chordnotes);
  $string_notes_2 = array_intersect($named_string_2_array, $chordnotes);
  $string_notes_3 = array_intersect($named_string_3_array, $chordnotes);
  $string_notes_4 = array_intersect($named_string_4_array, $chordnotes);
  $string_notes_5 = array_intersect($named_string_5_array, $chordnotes);
  $string_notes_6 = array_intersect($named_string_6_array, $chordnotes);

//make string locator array, not yet used
  $string_locator_1 = array_keys($string_notes_1);
  $string_locator_2 = array_keys($string_notes_2);
  $string_locator_3 = array_keys($string_notes_3);
  $string_locator_4 = array_keys($string_notes_4);
  $string_locator_5 = array_keys($string_notes_5);
  $string_locator_6 = array_keys($string_notes_6);

//convert root number into root name for display
  $rootname = noteconverter($root);
 
//Find chord parts
  if (isset($chordnotes[0])) {
    $rt = $chordnotes[0];
  }
 if (isset($chordnotes[1])) {
    $thrd = $chordnotes[1];
  }
  if (isset($chordnotes[2])) {
    $fth = $chordnotes[2];
  }
  if (isset($chordnotes[3])) {
    $svnth = $chordnotes[3];
  }
  if (isset($chordnotes[4])) {
    $nnth = $chordnotes[4];
  }
  


//array of string note arrays for display
  $array_of_arrays = array 
   ($string_notes_1, 
    $string_notes_2, 
    $string_notes_3, 
    $string_notes_4, 
    $string_notes_5, 
    $string_notes_6); 


?>