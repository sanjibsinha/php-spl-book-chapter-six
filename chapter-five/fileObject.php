<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap core CSS -->
<link href="../style.css" rel="stylesheet">

  </head>
  <body>
      <!-- 
      
      -->
      <div class="body">
          <h1>
            <?php echo "Hello PHP SPL Class"; ?>
          </h1> 
          <h2>
              Open File
          </h2>       
      </div>
      <div class="container">
        <code>
        <?php

$openFile = new FilesystemIterator('../all-files/documents', 
FilesystemIterator::UNIX_PATHS);
foreach ($openFile as $file) {
    if ($file->getExtension() == 'txt') {
        echo $file . '<br>';
    }
}
        ?>
          
        </code>
      </div>
     
      <h2>
              
      </h2> 
      <div class="container">
        

        <?php
$documents = new FilesystemIterator('../all-files/documents', FilesystemIterator::UNIX_PATHS);
foreach ($documents as $singleDocumnet) {
    if ($singleDocumnet->getExtension() == 'txt') {
        $textfile = $singleDocumnet->openFile('r+');
        $textfile->setFlags(SplFileObject::SKIP_EMPTY | SplFileObject::READ_AHEAD
        | SplFileObject::DROP_NEW_LINE);
        echo '<h2>' . $textfile->getFilename() . '</h2>';
        foreach ($textfile as $line) {
            echo "$line<br>";
        }
        $textfile->seek(6);
        echo '<br>';
        echo '<h1>' . 'This is the seventh line: ' 
        . $textfile->current() . '</h1>';
        while(!$textfile->eof()) {
            $textfile->next();
        }
        // $textfile->fwrite("\r\n\r\nWe're going to add a new line...at the end.");
    }
}
?>
          
        

      </div>
      <h2>
              
      </h2> 
      <div class="container">
        <code>

        <?php

// create a SplFileObject for reading - note that there are no flags
$file = new SplFileObject('../all-files/documents', 'r');

// iterate over its contents
while (!$file->eof()) {
    // get the current line
    $line  =  $file->fgets();

    // trim it, and then check if its empty
    if (empty(trim($line))) {
        // skips the current iteration
        continue;
    }
}
?>
          
        </code>

        <h2>
              
      </h2> 
      <div class="container">
        <code>
          
        </code>


      </div>

<!-- 
    Conclusion:
    As long as directory iteration is concerned, FileSystemIterator is always a
    better option than DirectoryIterator
 -->


      <p class="footer">
          <a href="../index.php">HOME</a>
          </p>
    
      
  </body>
</html>