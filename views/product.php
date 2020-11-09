<img src= "<?=$product['description']?>" alt='alt'>
<h1><?=$product['name'] ?></h1>
<h2>Описание товара</h2>
<p><?=$product['about'] ?></p>
<h3>Цена</h3>
<p><?=$product['price'] ?></p>

<p>Введите количество товара:</p>
    <input id="qty_input" type="number" value="0" name="qty">
    <input data-id="<?=$product['id']?>" id="add_to_card" type="submit" value="Добавить в корзину">
<script>

    $(function () {
        $("#add_to_card").on('click', function () {
            var id = $(this).data('id');
            var qty = $("#qty_input").val();
            console.log(id);
            console.log(qty);

            $.ajax({
                url : "/basket/add",
                type: "POST",
                dataType: 'json',
                data: {
                    id: id,
                    qty: qty
                },
                success : function (response) {
                    response = JSON.parse(response);
                    if(response.status == 'success'){
                        alert(response.message)
                    }
                }
            })
        })
    })
</script>