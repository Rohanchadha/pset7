<?php

    // configuration ""(){}?!$<>
    require("../includes/config.php"); 
    
   $rows = query("SELECT symbols, shares FROM stockdata WHERE id = ?", $_SESSION["id"]);
   
   $infoo = query("SELECT username, CASH FROM users WHERE id = ?", $_SESSION["id"]);
    
   $positions = [];
   
   $info = [];
   
    foreach ($infoo as $inf)
    {
            $info[] = [
            "username" => $inf["username"],
            "cash" => $inf["CASH"]
                      ];
       }
   
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
    render("portfolio.php", ["title" => "Portfolio","positions" => $positions,"info" => $info]);

?>
