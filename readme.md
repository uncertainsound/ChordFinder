This app displays all the instances of the notes of a chord on the fretboard.  \n

A working version can be found at:  http://matt.narwhale.org/web/chordfinder/   \n

It has been tested to display correctly on Firefox, Chrome, and mobile devices.  \n

Future features to add are:  \n
  Sounds for individual notes and voicings/inversions   \n
  Display different voicings - by top or bottom note   \n
  Generate tab   \n
  
Organization  \n
  The app is split into several different files.  There are as follows. \n
    1. chordfinder.css - CSS for the app  \n
    2. chordfinder.php - used to connect the different parts  \n
    3. chordfinderdisplay.php - main display of the app; calls sounds.php for planned feature \n
    4. chordfinderform.php - Input form for app (eg. chord root, quality, tuning) \n
    5. chordfinderfunctions.php - Functions for finding chord and putting notes on a fretboard  \n
    6. chordfinderkey.php - color coded key for showing parts of the chord (eg. root, 3rd, 5th, 7th, 9th)  \n
    7. chordfinderprocess.php - glue for functions, walks through the process of the app  \n
    8. index.php - includes chordfinder.php; allows the app to work from index  \n
    9. sounds.php - currently working as note name display; planned to act as a link to sound files for the notes \n
    10. fretboard.jpg - fretboard for display \n
    11. guitarbackground.jpg - background for the entire page \n
