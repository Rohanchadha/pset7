<?php

    // configuration ""(){}?!$<>
    require("../includes/config.php"); 
    
   $rows = query("SELECT * FROM history WHERE id = ?", $_SESSION["id"]);
    
   $historytbl = [];
   
   foreach ($rows as $row)
    {
            $historytbl[] = [
            "action" => $row["action"],
            "symbol" => $row["symbol"],
            "shares" => $row["shares"],
            "price" => $row["price"],
            "date" => $row["date"]
                            ];
  
     }

    // render portfolio
    render("historytbl.php", ["title" => "HISTORY", "historytbl" => $historytbl]);

?>
