Guitar Chord Finder

This app displays all the instances of the notes of a chord on the fretboard.

A working version can be found at: http://matt.narwhale.org/web/chordfinder/

It has been tested to display correctly on Firefox, Chrome, and mobile devices.

Update history:

3-15-14: added sounds for individual notes

Future features to add are:

Sounds for voicings/inversions

Display different voicings - by top or bottom note Generate tab

Organization The app is split into several different files. They are as follows.

chordfinder.css - CSS for the app

chordfinder.php - used to connect the different parts

chordfinderdisplay.php - main display of the app; calls sounds.php to link sounds and note names

chordfinderform.php - Input form for app (eg. chord root, quality, tuning)

chordfinderfunctions.php - Functions for finding chord and putting notes on a fretboard

chordfinderkey.php - color coded key for showing parts of the chord (eg. root, 3rd, 5th, 7th, 9th)

chordfinderprocess.php - glue for functions, walks through the process of the app

index.php - includes chordfinder.php; allows the app to work from index

sounds.php - currently working as note name display and as a link to sound files for the notes

fretboard.jpg - fretboard for display

guitarbackground.jpg - background for the entire page