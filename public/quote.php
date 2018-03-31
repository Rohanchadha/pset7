<?php

   // configuration
    require("../includes/config.php");
    
     if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("quote_form.php", ["title" => "quote"]);
    }

   
   else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     if (empty($_POST["symbol"]))
        {
            apologize("You must provide a symbol");
        }
       
     $stock = lookup($_POST["symbol"]);
       
     if ($stock === false)
        {
            apologize("invalid symbol, try again.");
        }
     else  
       {
            render("quoteresult.php", ["title" => "quote", "stock" => $stock]);
       }  
     
    }
?>
