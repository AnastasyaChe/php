<form action="/basket/change" method="post">
<?php foreach ($basket as $item): ?>
<tr>
        <td>
            <?= $item['product']['name'] ?>
        </td>
        <td>
            <?= $item['product']['price']?>
        </td>
        <td>
        <input type="number" value="<?= $item['qty']?>" name="quantity[<?=$item['product']['id']?>]">
        </td>
</tr>
<hr/>

<?php endforeach; ?>
<input type="submit" value="Оформить заказ">
    
</form>
