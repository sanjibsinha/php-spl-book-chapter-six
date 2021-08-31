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
              Converting JSON file into an Array and reading values
          </h2>       
      </div>
      <div class="container">
        <code>
          <?php
              $books = file_get_contents('../all-files/data/books.json');              
              $books = json_decode($books);
              echo "<pre>";
              print_r($books);
              echo "<pre>";
              $obj = new ArrayObject( $books );
              $iterator = $obj->getIterator();

              // We can count how many items are we iterating over?
              echo "<h3>Iterating over: " . $obj->count() . " values</h3>";
              echo "<h1>Getting output from forach Loop, key and value </h1>";

              /// The good thing here is we can iterate with [foreach] loop

              foreach ($iterator as $variable){
                foreach ($variable as $key => $value) {
                  # code...
                  echo "<h4>$key => $value</h4>";                  
                }
                echo "</br>";
              }
            
          ?>
          
        </code>
      </div>
      <!-- 
      
      -->
      <h2>
              
      </h2> 
      <div class="container">
        <code>
        
          
        </code>
      </div>
      <h2>
              
      </h2> 
      <div class="container">
        <code>
          
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