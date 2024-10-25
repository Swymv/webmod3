<?php

include "Controllers/ProductController.php";

use COntroller\ProductController;

$productController = new ProductController;

echo $productController -> getAllProduct();