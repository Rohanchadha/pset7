<?php
   
   require("../includes/config.php");
  
  if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     if (empty($_POST["symbol"]))
        {
            apologize("You must provide a symbol");
        }
        
    else 
        {
          $shares = query("SELECT * FROM stockdata WHERE id = ? AND symbols = ?", $_SESSION["id"], $_POST["symbol"]);
        
                     
          foreach ($shares as $share)
           {
             $stock = lookup($_POST["symbol"]);
             $cashadd = $stock["price"]*$share["shares"];
             

             
             query("UPDATE users SET CASH = CASH + ? WHERE id = ?", $cashadd, $_SESSION["id"]);

            }
            

          
          query("INSERT INTO history (action, symbol, shares, price, id) VALUES ('SOLD', ?, ?, ?, ?)", $_POST["symbol"], $shares["shares"], $stock["price"], $_SESSION["id"]);                                      
          query("DELETE FROM stockdata WHERE id = ? AND symbols = ?", $_SESSION["id"],$_POST["symbol"]);

          }
        
       }
        

     redirect("index.php");
?>         
