<?php
   
   require("../includes/config.php");
  
  //if ($_SERVER["REQUEST_METHOD"] == "POST")
    
     if (empty($_POST["symbol"]))
        {
            apologize("You must provide a symbol");
        }
        
    else 
        {
          $shares = query("SELECT shares FROM stockdata WHERE id = ? AND symbols = ?", $_SESSION["id"], $_POST["symbol"]);
          foreach ($shares as $share)
           {
             $stock = lookup($_POST["symbol"]);
             $cashadd = $stock["price"]*$share["shares"];
             query("UPDATE users SET CASH = CASH + ? WHERE id = ?", $cashadd, $_SESSION["id"]);
            }
            
          query("DELETE FROM stockdata WHERE id = ? AND symbols = ?", $_SESSION["id"],$_POST["symbol"]);
          redirect("index.php");
         }
         
     
?>         
