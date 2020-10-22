<?php
    foreach($photos as $image) :
        ?>
        <a target = '_blank'  href= "/photo.php?id=<?=$image['id']?>">
            <img src= "<?=$image['description']?>" alt='alt' width='200'>
        </a>
    <? endforeach?>
    
    
    