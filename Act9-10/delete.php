<?php
    include "configure.php";


    if(isset($_POST['delete'])){
        $id = $_POST['id'];
       
      
      // sql to delete a record
      $sql = "DELETE FROM contacts WHERE id='$id'";
      
      if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      $conn->close();
  
    }
   

?>