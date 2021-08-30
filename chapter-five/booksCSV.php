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
              Reading CSV file with the help of SPL
          </h2>       
      </div>
      <div class="container">
        <code>
        <?php
            $booksCSV = new SplFileObject('../all-files/ANewfolder/books.csv');
            $booksCSV->setFlags(SplFileObject::READ_CSV);
            // $csvfile->setCsvControl("\t");
            foreach ($booksCSV as $book) {
                $books[] = $book;
            }
            echo '<pre>';
            print_r($books);
            echo '</pre>';
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