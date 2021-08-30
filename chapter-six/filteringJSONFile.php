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
              Filtering JSON file
          </h2>       
      </div>
      <div class="container">
        <code>
          <?php

              class FilteringAuthor extends FilterIterator
              {
                  protected $authorName;

                  public function __construct(Iterator $iterator, $authorName)
                  {
                      parent::__construct($iterator);
                      $this->authorName = $authorName;
                  }

                  public function accept()
                  {
                      return $this->current()->authorName == $this->authorName;
                  }
              }




              $books = file_get_contents('../all-files/data/books.json');
              $books = json_decode($books);
              echo "<pre>";
                print_r($books);
                echo "<pre>";
              /* $books = new ArrayIterator($books);
              $books = new FilteringAuthor($books, 'Sanjib Sinha');
              foreach ($books as $book) {
                  echo "$book->title with $book->author (pages: $course->page)<br>";
              } */

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