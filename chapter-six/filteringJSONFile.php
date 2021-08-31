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
          
        <?php

          $books = file_get_contents('../all-files/data/books.json');              
          $books = json_decode($books);

          class TestIterator extends IteratorIterator
          {
              public function key()
              {
                  echo  __FUNCTION__, PHP_EOL;
                  return parent::key();
              }

              public function next()
              {
                  echo  __FUNCTION__, PHP_EOL;
                  return parent::next();
              }

              public function rewind()
              {
                  echo  __FUNCTION__, PHP_EOL;
                  return parent::rewind();
              }

              public function valid()
              {
                  echo  __FUNCTION__, PHP_EOL;
                  return parent::valid();
              }
          }

          class TestFilterIterator extends FilterIterator
          {
              public function accept()
              {
                  echo  __FUNCTION__, PHP_EOL;
                  return true;
              }
          }

          $iterator = new ArrayIterator($books);

          foreach (new TestFilterIterator(new TestIterator($iterator)) as $key => $value) {
              echo PHP_EOL . "</br>";
          }

          ?>
          
        </code>
      </div>
      <h2>
              
      </h2> 
      <div class="container">
        <code>

        <?php
        

        $books = file_get_contents('../all-files/data/books.json');              
        $books = json_decode($books);        
        foreach ($books as $book) {
            echo "$book->title with $book->author (Year: $book->pubdate)<br>";?>
            Subjects: 
            <?php
            foreach ($book->subjects as $value) {
              echo "$value, ";
            }
            foreach ($book->software as $value) {
              echo "Software: $value</br>";
            }
        }
        ?>
          
        </code>

      </div>
      <h2>
              
      </h2> 
      <div class="container">
        <code>
        <?php
        class UserFilter extends FilterIterator
        {
            public $userFilter;
          
            public function __construct(Iterator $iterator , $filter )
            {
                parent::__construct($iterator);
                $this->userFilter = $filter;
            }
          
            public function accept()
            {
              return $this->current()->userFilter == $this->userFilter;
            }
        }

        $books = file_get_contents('../all-files/data/books.json');              
        $books = json_decode($books);
        $books = new ArrayIterator($books);
        $books = new UserFilter($books, 'Json Web');
        echo $books->userFilter;
        
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