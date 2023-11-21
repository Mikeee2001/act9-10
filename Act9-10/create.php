<?php
        include "configure.php";

        if(isset($_POST['submit'])){
             $id = $_POST['id'];
             $name = $_POST['name'];
             $email = $_POST['Title'];
             $phone = $_POST['phone'];
             $title = $_POST['title'];
            $create = $_POST['create']

        $sql = "INSERT INTO `contacts`(`id`, `name`, `email`, `phone`, `title`, `create`) VALUES ('$id','$name',' $email',' $phone','$title','$create)";
        $result = $conn->query($sql);

        if($result == TRUE){
        echo "New record created successfully!!!";
        }
        else{
        echo "ERROR!!!".$sql."<br>". $conn->error;
        }
        $conn->close();
}       
?>
<!DOCTYPE html>
<html>
<body>
<h2> User Create Form </h2>
<form action="" method="POST">
        <fieldset>
        <legend> Personal Information: </legend>

        id:<br>
        <input type="text" name="id">
        </br>
        name:<br>
        <input type="text" name="name" >
        </br>
        email:<br>
        <input type="text" name="email">
        </br>
        phone:<br>
        <input type="text" name="phone">
        </br> 
        title:<br>
        <input type="text" name="title">
        </br> 
        create:<br>
        <input type="text" name="create">
        </br> 
        <input type="submit" name="submit" value="submit">
        </fieldset>
</form>
</body>
</html>