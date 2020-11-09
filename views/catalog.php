<style>
    * {
        font-size: 14px;
    }

    .product {
        float: left;
        width: 300px;
        margin: 0 6px;
        
        border: 1px solid black;
    }
</style>


<div class="container">
    <?php foreach ($products as $product): ?>
        <a href="/product/card?id=<?= $product['id'] ?>">
            <div class="product">
            <img src= "<?=$product['description']?>" alt='alt' width='200'>
                <h1><?= $product['name'] ?></h1>
            </div>
        </a>
    <?php endforeach; ?>
</div>
       
    