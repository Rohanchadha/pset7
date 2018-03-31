<table class="table table-striped table-hover">
    <tbody>
        <tr>
            <th>  Action  </th>
            <th>   Symbol </th>
            <th>   Shares </th>
            <th>  Price </th>
            <th>  Date  </th>
            
        </tr>
    
    
   
 <?php

     foreach ($historytbl as $historytb)
      {
      print("<tr>");
      print("<td>". $historytb["action"] ."</td>");
      print("<td>". $historytb["symbol"] ."</td>");
      print("<td>". $historytb["shares"] ."</td>");
      print("<td>". $historytb["price"] ."</td>");
      print("<td>". $historytb["date"] ."</td>");
      print("</tr>");
      }

    ?> 
         
    </tbody>

    
</table>

