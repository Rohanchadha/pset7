<?php

   // configuration
  require("../includes/config.php");
  
   $rows = query("SELECT symbols, shares FROM stockdata WHERE id = ?", $_SESSION["id"]);
    
   $positions = [];
   
   if ($rows != NULL)
   {
   
   foreach ($rows as $row)
    {
       $stock = lookup($row["symbols"]);
       if ($stock !== false)
       {
            $positions[] = [
            "name" => $stock["name"],
            "price" => $stock["price"],
            "shares" => $row["shares"],
            "symbol" => $row["symbols"],
            "value" => $stock["price"]*$row["shares"]
                            ];
       }
     }
      
        render("sell_form.php", ["title" => "sell", "positions" => $positions]); 
   }
  
 
      
 
   
   
    else 
    {
     apologize("You have no stocks to sell"); 
  }    
   
?>
