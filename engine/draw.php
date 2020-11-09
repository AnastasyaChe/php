<?php
function drawMenu() {
    $menu = [
        [
            'label' => 'Каталог',
            'link' => '/'
        ],
        [
            'label' => 'Корзина',
            'link' => '/basket'
        ],
        [
            'label' => 'Личный кабинет',
            'link' => '/login'
        ]
    ];

    foreach ($menu as $item) {
        echo "<li><a href=\"{$item['link']}\">{$item['label']}</a></li>";
    }


}