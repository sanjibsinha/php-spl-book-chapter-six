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
            All files in the Image directory
          </h1>
          <p id="body">
          <?php
            $dir = new DirectoryIterator('../all-files/images/');
            foreach ($dir as $key => $file) {
                //var_dump($file);
                if ($file->isFile()) {
                echo $key . ': ' . $file->getPathname() . '<br>';
                    $files[] = clone $file;
                    
               }
            } ?> </p>

            <p class="footer">
            <img 
            src="../all-files/images/<?php echo $files[1]->getFilename(); ?>" 
            alt="nature">
            </p>
            
          
        
      </div>
    
      
  </body>
</html>

