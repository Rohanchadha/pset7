
    <a href="quote.php"> &nbsp;&nbsp;&nbsp; Quote  &nbsp;&nbsp;&nbsp;</a>   
    <a href="sell.php"> &nbsp;&nbsp;&nbsp; Sell &nbsp;&nbsp;&nbsp; </a>
    <a href="buy.php"> &nbsp;&nbsp;&nbsp; Buy  &nbsp;&nbsp;&nbsp; </a>
    <a href="history.php"> &nbsp;&nbsp;&nbsp; History &nbsp;&nbsp;&nbsp; </a>   
    <a href="logout.php"><strong> &nbsp;&nbsp;&nbsp; Log Out &nbsp;&nbsp;&nbsp; </strong></a>


<table class="table table-striped table-hover">
    <tbody>
        <tr>
            <th>  Symbol  </th>
            <th>   Name </th>
            <th>   Shares </th>
            <th>  Price Current  </th>
            <th>  Value  </th>
            
        </tr>
    
    
   
 <?php

     foreach ($positions as $position)
      {
      print("<tr>");
      print("<td>". $position["symbol"] ."</td>");
      print("<td>". $position["name"] ."</td>");
      print("<td>". $position["shares"] ."</td>");
      print("<td>". $position["price"] ."</td>");
      print("<td>". $position["value"] ."</td>");
      print("</tr>");
      }

    ?> 

     
    </tbody>

    
</table>
<p>
  <?php

     foreach ($info as $infy)
      {
      
      print("Hello " . $infy["username"] . ", you have $" . number_format($infy["cash"], 2) . " left.");
      }

    ?> 
</p>    
    <a href="chpw.php">Change password</a>

