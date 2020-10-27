<img src= "<?=$photo['description']?>" alt='alt'>
<h2>Описание товара</h2>
<p><?=$photo['about'] ?></p>
<h3>Цена</h3>
<p><?=$photo['price'] ?></p>

<p>Количество просмотров: <?=$photo['views'] ?></p>

<form action="" method="post" enctype="multipart/form-data">
    <p><b>Введите ваш отзыв:</b></p>
    <p><textarea rows="10" cols="45" name="text"></textarea></p>
    <p><input type="submit"></p>
</form>

<a href="/gallery.php"> Back</a>
