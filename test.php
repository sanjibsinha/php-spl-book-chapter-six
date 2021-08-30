<?php
            
            $files = new FilesystemIterator(__DIR__ .'/all-files/images', 
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
</hr>
</hr>
<?php
            
            $file = new DirectoryIterator(__DIR__.'/all-files/images');
            foreach ($file as $value) {
                # code...
                if ($value->isFile()) {
                    echo $value->getExtension() . "</br>";
                }              
                
            }
            
            ?>            