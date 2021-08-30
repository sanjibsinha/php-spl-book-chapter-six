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
              Array Iterator
          </h2>       
      </div>
      <div class="container">
        <code>
        <?php
            
            $webAndMobileLanguages = array('PHP', 'WordPress', 'Flutter', 'Dart', 'Python', 'Java');
            $webAndMobileLanguages = new ArrayIterator($webAndMobileLanguages);
            $webAndMobileLanguages->asort();
            
            foreach ($webAndMobileLanguages as $webAndMobile) {
                echo $webAndMobile . '<br><br>';
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

        <?php
          $books = array(
              "PHP" => "PHP 8 Standard PHP Library",
              "WordPress" => "WordPress Coding Made Easy",
              "Flutter" => "Flutter: A Complete Guide",
              "Dart" => "Beginning Flutter with Dart"
          );
          $obj = new ArrayObject( $books );
          $iterator = $obj->getIterator();

          // We can count how many items are we iterating over?

          echo "Iterating over: " . $obj->count() . " values</br></br>";

          echo "<h1>Getting output from While Loop with Key=Value</h1>";

          // Iterate over the values in the ArrayObject:
          while( $iterator->valid() )
          {
              echo $iterator->key() . " = " . $iterator->current() . "</br></br>";
              $iterator->next();
          }

          echo "</br></br>";
          echo "<h1>Getting output from forach Loop, only value </h1>";

          // The good thing here is that it can be iterated with foreach loop

          foreach ($iterator as $key=>$val)
          echo $key.":".$val."</br></br>";

        ?>
          
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