<!DOCTYPE html>
<html>
    <body>
        <form method="post">
            <label>Enter a number:</label>
            <input type="number" name="number"> <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>


<?php
  if(isset($_POST["submit"]))
  {
   $num=$_POST["number"];
   $prime=0;
   for($i=2; $i<=($num/2); $i++)
      if($num%$i == 0)
      {
        $prime++;
        break;
      }
      if($prime == 0)
         echo($num. " is a prime number");
      else
         echo($num. " is not a prime number");
   }
?>