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
   $name = $_POST["name"];
   $password = $_POST["password"];

   $file = fopen("users.txt","r");
   $validUser = false;

   while(!feof($file))
   {
    $line = trim(fgets($file));

    if(!empty($line))
     {
        list($storedUsername, $storedPassword) = explode(",", $line);

        if($storedUsername==$name && $storedPassword==$password)
        {
            $validUser = true;
            break;
        }
    }
   }
   fclose($file);

 if($validUser)
  echo "You have successfully log in";
 else
  echo "Incorrect Username or Password";
 }

?>