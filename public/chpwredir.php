<?php
   
   require("../includes/config.php");
   
  $userinfo = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
  
  if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
     if (empty($_POST["password"]) || empty($_POST["npassword"]) || empty($_POST["npasswordc"]))
        {
            apologize("You must fill the box.");
        } 
        
    else 
        {
         if ($_POST["npassword"] = $_POST["npasswordc"])
            {
             foreach ($userinfo as $userinf)
             {
              if((password_verify($_POST["password"],$userinf["hash"])) === true)
              {
                query("UPDATE users SET hash = ? WHERE id = ?", crypt($_POST["npassword"]), $_SESSION["id"]);
              }
              else
              {
                apologize("enter correct password please.");              
              }
             }
             
            }  
           else
           {
             apologize("both passwords dont match");                         
           }
        
        }
      } 

     redirect("index.php");
?>         
