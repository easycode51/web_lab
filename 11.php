<html>
    <body>
        <form method="post">
            <label>Name:</label>
            <input type="text" name="name"> <br><br>

            <label>Password:</label>
            <input type="password" name="password"> <br><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>

<?php
 if(isset($_POST["submit"]))
 {
  $name= $_POST["name"];
  $password= $_POST["password"];
  echo "Name:".$name."       Password:".$password."\n";

  $f=fopen("collectdata.txt","a");
  fwrite($f,"Name:".$name."   Password:".$password."\n");
  fclose($f);
 }
?>