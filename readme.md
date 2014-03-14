This app displays all the instances of the notes of a chord on the fretboard.

A working version can be found at:  http://matt.narwhale.org/web/chordfinder/

It has been tested to display correctly on Firefox, Chrome, and mobile devices.

Future features to add are:
  Sounds for individual notes and voicings/inversions
  Display different voicings - by top or bottom note
  Generate tab 
  
Organization
  The app is split into several different files.  There are as follows.
    1. chordfinder.css - CSS for the app
    2. chordfinder.php - used to connect the different parts
    3. chordfinderdisplay.php - main display of the app; calls sounds.php for planned feature
    4. chordfinderform.php - Input form for app (eg. chord root, quality, tuning)
    5. chordfinderfunctions.php - Functions for finding chord and putting notes on a fretboard
    6. chordfinderkey.php - color coded key for showing parts of the chord (eg. root, 3rd, 5th, 7th, 9th)
    7. chordfinderprocess.php - glue for functions, walks through the process of the app
    8. index.php - includes chordfinder.php; allows the app to work from index
    9. sounds.php - currently working as note name display; planned to act as a link to sound files for the notes
