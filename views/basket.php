<style>
    table{
        border-collapse: collapse;
    }
    td   {
        padding: 2px 4px;
        border: 1px solid black;
    }
</style>

<table>
    <?php foreach ($_SESSION['products'] as $product): ?>
    <tr>
        <td>
            <?= $product['id'] ?>
        </td>
        <td>
            <?= $product['name'] ?>
        </td>
        <td>
            <input type='number' value="<?= $product['quantity'] ?>" name='product[quanty]'>
        </td>
    </tr>
    <?php endforeach; ?>
</table>