<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap core CSS -->
<link href="../style.css" rel="stylesheet">

  </head>
  <body>
      <div class="body">
          <h1>
            All files in the Document directory
          </h1>
          <p id="body">
              <?php

              $aDirectory = new FilesystemIterator('../all-files/images');
              $jpegs = new RegexIterator($aDirectory, '/\.jpg/i');
              $second = new LimitIterator($jpegs, 2, 2);
              foreach($second as $file) {
                  echo $file;
              }


              ?>
          </p>

            <p class="footer">
            <img 
            src="../all-files/images/<?php echo $files[1]->getFilename(); ?>" 
            alt="nature">
            </p>
            
          
        
      </div>
    
      
  </body>
</html>

