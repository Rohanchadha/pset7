<form action="sellredir.php" method="post">
    <fieldset>
        <div class="form-group">
        <select class = "form-control" name = "symbol">

            <?php foreach($positions as $position): ?>
            <option value = "<?php echo $position['symbol']; ?>"><?php echo $position['symbol']; ?></option>
            <?php endforeach ?>
            </select>
            <input type="submit" value ="SELL"/>
        </div>
    </fieldset>
</form>
