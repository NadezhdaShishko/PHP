<?php
ob_start();
require './../engine/db-goods.php';
$title = 'Brand-Main';

require ROOT_DIR.'/templates/header.php';
require ROOT_DIR.'/templates/topNav.php';
require ROOT_DIR.'/templates/banners.php';
require ROOT_DIR.'templates/main-goods.php';
require ROOT_DIR.'/templates/offer.php';
require ROOT_DIR.'/templates/reviews.php';
require ROOT_DIR.'/templates/footer.php';
?>