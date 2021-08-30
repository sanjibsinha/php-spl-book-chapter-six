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
        An XML file reading
          </h2>       
      </div>
      <div class="container">
        <code>
        <?php
            // The file test.xml contains an XML document with a root element
            // and at least an element /[root]/title.

            if (file_exists('../all-files/data/books.xml')) {
                $xml = simplexml_load_file('../all-files/data/books.xml');
                echo "<pre>";
                print_r($xml);
                echo "<pre>";
            } else {
                exit('Failed to open books.xml.');
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
            // The file test.xml contains an XML document with a root element
            // and at least an element /[root]/title.

            if (file_exists('../all-files/data/books.xml')) {
                $books = simplexml_load_file('../all-files/data/books.xml');
                foreach ($books as $book) {
                    $matches = new RegexIterator($book->author, '/john doe/i');
                    foreach ($matches as $match) {
                        echo $book->title . ' by ' . $match . ' (Year: ' .
                            $book->year . ')<br>';
                    }
                }
            } else {
                exit('Failed to open books.xml.');
            }
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