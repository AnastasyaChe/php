<img src= "<?=$product['description']?>" alt='alt'>
<h1><?=$product['name'] ?></h1>
<h2>Описание товара</h2>
<p><?=$product['about'] ?></p>
<h3>Цена</h3>
<p><?=$product['price'] ?></p>

<form action="/basket/add" method='post'>
<input type="hidden" value="<?=$product['id']?>" name="id">
<p>Введите количество товара:</p>
<input type='number' value="0" name='quantity'>
<input type='submit' value='Добавить в корзину'>
</form>

