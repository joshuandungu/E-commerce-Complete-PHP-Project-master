
  <?php
         $dbhost = 'localhost';
         $dbuser = 'onlin778_rohit';
         $dbpass = 'rohit1995';
         $dbdatabase ='onlin778_akasha123';
         $con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbdatabase);
   
         if(! $con ){
            die('Could not connect: ' . mysqli_error());
         }
         echo 'Connected successfully';
         mysqli_close($con);
      ?>