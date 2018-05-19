<?php
  
     require 'db.php' ;

    $id = $_GET['id'];
      $sql ='SELECT * FROM student WHERE id=:id';
       $stmt = $connection->prepare($sql);

       $stmt->execute([':id'=> $id]);
       $studs = $stmt->fetch(PDO::FETCH_OBJ) ;

      
  ?>



<!DOCTYPE html>
<html>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Roboto');

* {
  margin: 0;
  box-sizing: border-box;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  font-family: 'Roboto', sans-serif;
  font-size: 16px;
  background: var(--primary);
  background: linear-gradient(to left, #3f51b5, #2196f3);
}

h1 {
  position: absolute;
  top: 1em;
  left: 1em;
  color: #fff;
  font-weight: 400;
  letter-spacing: 0.5px
}

.container {
  position: relative;;
  padding: 10em 2em 1em;
  width: 360px;
  border-radius: 3px;
  background: #fff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  overflow: hidden;
}

.container::before {
  content: ' ';
  position: absolute;
  left: -50px;
  top: -110px;
  width: 625px;
  height: 250px;
  border-radius: 50%;
  background: #3f51b5;
}

input {
  width: 100%;
  padding: 1em;
  margin: 1em 0;
  border: 2px solid #bdbdbd;
  border-radius: 25px;
  background: #fff;
  font-size: 16px;
  font-family: 'Roboto', sans-serif;
  outline: 0;
}

input[type="button"] {
  background: #3f51b5;
  color: #fff;
  cursor: pointer;
  border-color: #3f51b5;
}

</style>
<body>

<div class="container">
  <h1>UPDATE DATA</h1>
  
  <form autocomplete="off" method="post" action="index.php">
    <input type="text" placeholder="Name" name="newname" value="<?=$studs->Name;?>" required>    
    <input type="text" placeholder="College" name="college" value="<?=$studs->College;?>" required>
    <input type="text" placeholder="Skills" name="skill" value="<?=$studs->Skills;?>" required>
    <input type="text" placeholder="Projects" name="project" value="<?=$studs->Projects;?>" required>
    <input type="email" placeholder="Email" name="email" value="<?=$studs->Email;?>" required>
    <input type="hidden" value="<?=$studs->id;?>" name="id">
      
    <input type="submit" value="SUBMIT">
  </form>
</div>

</body>
</html>
