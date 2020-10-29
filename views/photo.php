<img src= "<?=$photo['description']?>" alt='alt'>
<h1><?=$photo['name'] ?></h1>
<h2>Описание товара</h2>
<p><?=$photo['about'] ?></p>
<h3>Цена</h3>
<p><?=$photo['price'] ?></p>

<p>Количество просмотров: <?=$photo['views'] ?></p>

<h4>Отзывы</h4>
<p><?=$photo['opinion'] ?></p>

<form action="" method="post">
    <b>Введите ваш отзыв:</b>
    <textarea rows="10" cols="45" name="comment"></textarea>
    <input type="submit">
</form>

<a href="/gallery.php"> Back</a>
