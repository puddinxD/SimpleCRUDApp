<?php
  
     require 'db.php' ;

    $id = $_GET['id'];
      $sql ='DELETE FROM student WHERE id=:id';
       $stmt = $connection->prepare($sql);

       if($stmt->execute([':id'=> $id])){
       		echo '<script>window.location.href = "index.php";</script>';
       
       	}
      
  ?>