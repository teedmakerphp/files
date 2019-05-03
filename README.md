## TMPHP Files

This is a simple library to manipulate some files.
For now we can do things like...

````php
$file = new TMPHPFile('path/to/file.txt');
$file->increments("\n Hello new line!");
````

...to increments a line in one file.

Or you can do too, a simple function to verify if a file was be modified:

````php
$file = new TMPHPFile('path/to/file.txt');
$modifiedAt = $file->getMTime();
if($modifiedAt > $timeForDatabase) {
    // then do it
}
````

Or yet, you can compare two files modified.

````php
$original = new TMPHPFile('path/to/original.txt');
$cached   = new TMPHPFile('path/to/cached.txt');
if($original->modified()->isGreaterThan($cached)) {
    // cache the original again, cause he is old!
}
````

Well, it's all for now.

All methods will be describe after.

You can send us a `pull request`, or send a `issue` too.
