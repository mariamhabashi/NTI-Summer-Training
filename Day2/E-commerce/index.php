<?php
include "header.php";
echo "Home";
?>
<aside>
    <nav class="w-25">
        <a href="" class="btn-danger btn mb-3">Home Page</a>
        <a href="?page=Comment" class="btn-danger btn mb-3">Comment</a>
        <a href="?page=Library" class="btn-danger btn mb-3">Library</a>
        <a href="?page=shop" class="btn-danger btn mb-3">Shop</a>
        <a href="?page=Main" class="btn-danger btn mb-3">Main Page</a>
        <a href="?page=contact" class="btn-danger btn mb-3">Contact Us</a>
    </nav>
</aside>
<div id="page">
    Welcome From New Page
    <?php
    echo "pre";
    var_dump($_GET);
    echo "pre";
    if(@$_GET["page"]){
       $url=$_GET["page"].".php";
       if(is_file($url)){
        include $url;
       }
    }
    ?>  
</div>