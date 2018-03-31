<?php
   //|| !preg_match("/^\d+$/", $_POST["shares"])
   require("../includes/config.php");
  
       if (empty($_POST["symbol"]))
        {
            apologize("You must provide a symbol");
        } 
       else if (empty($_POST["shares"]) || !preg_match("/^\d+$/", $_POST["shares"]))
        {
            apologize("You must provide valid no. of shares");
        }
    else 
        {
          $buysymbol = strtoupper($_POST["symbol"]);
          $stock = lookup($buysymbol);
          if($stock === false)
            {
              apologize("invalid symbol.");
            }
          
          
          $cash = query("SELECT CASH FROM users WHERE id = ?", $_SESSION["id"]);
          $sharevalue = $_POST["shares"]*$stock["price"];
          
          if($cash < $sharevalue)
          {
           apologize("You dont have enough cash."); 
          }
           
      else
     {
            query("UPDATE users SET CASH = CASH - ? WHERE id = ?", $sharevalue, $_SESSION["id"]);
            
            $query = query("SELECT * FROM stockdata WHERE id = ? AND symbols = ?", $_SESSION["id"], $_POST["symbol"]);
            
            if($query == false)
            {
             query("INSERT INTO stockdata (id, symbols, shares) VALUES (?, ?, ?)", $_SESSION["id"], $_POST["symbol"], $_POST["shares"]);
       
             }
             
            else
             {
              query("UPDATE stockdata SET shares = shares + ? WHERE id = ? AND symbols = ?", $_POST["shares"], $_SESSION["id"], $_POST["symbol"]);
             }
             
      query("INSERT INTO history (action, symbol, shares, price, id) VALUES ('BOUGHT', ?, ?, ?, ?)", $_POST["symbol"], $_POST["shares"], $stock["price"], $_SESSION["id"]);

            redirect("index.php");
      }
         
    } 
         
     
?>         
