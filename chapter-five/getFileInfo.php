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
              File Info
          </h2>       
      </div>
      <div class="container">
        <code>
            <?php
            
            $files = new FilesystemIterator('../all-files/images', 
            FilesystemIterator::UNIX_PATHS);
            foreach ($files as $value) {
                # code...
                // if ($value->geExtension() == 'jpg') {
                    # code...
                    echo $value->getFilename() . ' is of ' 
                . $value->getSize() . ' bytes. The real path is: '
                . $value->getRealPath() . '</br>';
                // }
                
            }
            
            ?>
          
        </code>
      </div>
      <!-- 
      
      -->
      <h2>
             If image file extension is png
      </h2> 
      <div class="container">
        <code>
        <?php
            
            $file = new FilesystemIterator('../all-files/images');
            foreach ($file as $value) {
                # code...
                if ($value->isFile()) {
                    if($value->getExtension() == 'png')
                    echo $value->getFilename() . ' is of ' 
                . $value->getSize() . ' bytes. The real path is: '
                . $value->getRealPath() . '</br>';
                }              
                
            }
            
            ?>  
        </code>
      </div>
      <h2>
      If image file extension is jpg
      </h2> 
      <div class="container">
        <code>
        <?php
            
            $file = new FilesystemIterator('../all-files/images');
            foreach ($file as $value) {
                # code...
                if ($value->isFile()) {
                    if($value->getExtension() == 'jpg')
                    echo $value->getFilename() . ' is of ' 
                . $value->getSize() . ' bytes. The real path is: '
                . $value->getRealPath() . '</br>';
                }              
                
            }
            
        ?>
        </code>

      </div>
      <h2>
              
      </h2> 
      <div class="container">
        <code>
          
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