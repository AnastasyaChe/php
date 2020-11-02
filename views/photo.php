<img src= "<?=$product['description']?>" alt='alt'>
<h1><?=$product['name'] ?></h1>
<h2>Описание товара</h2>
<p><?=$product['about'] ?></p>
<h3>Цена</h3>
<p><?=$product['price'] ?></p>

<p>Количество просмотров: <?=$product['views'] ?></p>

<h4>Отзывы</h4>
<p><?=$product['opinion'] ?></p>

<form action="" method="post">
    <b>Введите ваш отзыв:</b>
    <textarea rows="10" cols="30" name="comment"></textarea>
    <input type="submit">
</form>
<form method='post'>
<p>Введите количество товара:</p>
<input type='number' name='quantity'>
<input type='submit' value='Добавить в корзину'>
</form>

<a href="/gallery.php"> Back</a>
<a href="/basket.php"> Корзина</a>
