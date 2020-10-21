<?php
    foreach($images as $image) :
        $imgURL = "/images/$image"?>
        <a target = '_blank'  href= "<?=$imgURL?>">
            <img src= "<?=$imgURL?>" alt='alt' width='200'>
            </a>
    <? endforeach?>
    
    
    
