<p class="text-danger">
<?php
   number_format($stock['price'],2);
   echo "A share of ". $stock['name'] ."(". $stock['symbol'] .") costs ". number_format($stock['price'],2) .".";
?>
</p>

<a href="javascript:history.go(-1);">Back</a>

