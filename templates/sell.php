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

    // render portfolio
    render("sellredir.php", ["title" => "Portfolio","positions" => $positions]);
   }
   
   
   else if
    {
     apologise("You have no stocks to sell.");
    } 
   
?>
