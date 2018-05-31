<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<ul>
    <?php foreach ($datas as $menu){ ?>
    <li><a href="<?php echo $menu['url']; ?>"><?php echo $menu['title']; ?></a></li>
    <?php } ?>
</ul>


