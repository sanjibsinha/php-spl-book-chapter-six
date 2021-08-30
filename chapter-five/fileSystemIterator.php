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
      DirectoryIterator >> 
      1. It includes dot files
      2. It has numbered keys
      3. In output path not included in value
      4. We have no configuration options
      5. Any array requires cloned object
      -->
      <div class="body">
          <h1>
            <?php echo "Hello PHP SPL Class"; ?>
          </h1> 
          <h2>
              Using DirectoryIterator
          </h2>       
      </div>
      <div class="container">
        <code>
          <?php
          $file = new DirectoryIterator('../all-files/images');
          foreach($file as $filePath){
              echo $filePath . "</br>";
          }
          ?>
        </code>
      </div>
      <!-- 
      FileSystemIterator >> 
      1. The dot files are skipped
      2. The full pathname is reflected in keys, and values
      3. The path is also included in values
      4. We have configuration options, like KEY_AS_FILENAME
      5. No cloning needed
      -->
      <h2>
              Using FileSystemIterator
      </h2> 
      <div class="container">
        <code>
          <?php
          /// relative path can also be used as key and value
          $file = new FilesystemIterator('../all-files/images');
          foreach($file as $filePath){
              echo $filePath . "</br>";
          }
          ?>
        </code>
      </div>
      <h2>
              Using FileSystemIterator file path Key and Value
      </h2> 
      <div class="container">
        <code>
          <?php
          /// relative path can also be used as key and value
          $file = new FilesystemIterator('../all-files/images');
          foreach($file as $key=>$filePath){
              echo $key . " >> " . $filePath . "</br>";
          }
          ?>
        </code>

      </div>
      <h2>
              Using FileSystemIterator set flags KEY_AS_FILENAME
      </h2> 
      <div class="container">
        <code>
          <?php
          /// relative path can also be used as key and value
          $file = new FilesystemIterator('../all-files/images');
          $file->setFlags(FilesystemIterator::KEY_AS_FILENAME);
          foreach($file as $key=>$filePath){
              echo $key . " >> " . $filePath . "</br>";
          }
          ?>
        </code>

        <h2>
              Using FileSystemIterator and avoiding cloning
      </h2> 
      <div class="container">
        <code>
          <?php
          /// relative path can also be used as key and value
          $file = new FilesystemIterator('../all-files/images');
          $file->setFlags(FilesystemIterator::KEY_AS_FILENAME);
          foreach($file as $key=>$filePath){
              //echo $key . " >> " . $filePath . "</br>";
              $files[] = $filePath;
          }
            echo $files[0]->getFilename() . "</br>" . $files[0]->getFileInfo();

          ?>
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