<form action="" method="post">
<?php foreach ($basket as $item): ?>
<tr>
        <td>
            <?= $item['product']['name'] ?>
        </td>
        <td>
            <?= $item['product']['price']?>
        </td>
        <td>
        <input type="number" value="<?= $item['qty'] ?>" name="product[<?=$product['id']?>]">
        </td>
    </tr>
<?php endforeach; ?>
<input type="submit" value="Оформить заказ">
</form>

