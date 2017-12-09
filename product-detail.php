<?php

if(!isset($_GET["product"])) {
    header("Location: clients.php");
    die;
}

$products = [];
$products["sachet_1_5_ml"] = ["name" => "Sachet 1.5 ML Sanitizer", "image"=>"product-1.jpg", "colors" => "Available in three colors (White, Pink and Blue)"];
$products["band_sanitizer_30_ml"] = ["name" => "Sanitizer 30 ML (Band)", "image"=>"product-2.jpg", "colors" => "Available in three colors (White, Pink and Blue)"];
$products["sanitizer_50_ml_bottle"] = ["name" => "Sanitizer 50 ML (Bottle)", "image"=>"product-3.jpg", "colors" => "Available in three colors (White and Pink)"];
$products["sanitizer_100_ml_family_pack"] = ["name" => "Sanitizer 100 ML (Family Pack)", "image"=>"product-4.jpg", "colors" => "Available in three colors (White, Pink and Blue)"];
$products["sanitizer_250_ml_family_pack"] = ["name" => "Sanitizer 250 ML (Family Pack)", "image"=>"product-5.jpg", "colors" => "Available in three colors (White, Pink and Blue)"];
$products["sanitizer_500_ml_jumbo"] = ["name" => "Sanitizer 500 ML (Jumbo Large)", "image"=>"product-6.jpg", "colors" => "Available in three colors (White, Pink and Blue)"];
$products["sanitizer_1_ltr"] = ["name" => "Sanitizer 1 Liter (Large Bottle)", "image"=>"product-7.jpg", "colors" => "Available in three colors (White, Pink and Blue)"];
$products["sanitizer_5_ltr"] = ["name" => "Sanitizer 5 Liter (Large Pack)", "image"=>"product-8.jpg", "colors" => "Available in three colors (White, Pink and Blue)"];


if(!isset($products[$_GET["product"]])) {
    header("Location: products.php");
    die;
}

$product = $products[$_GET['product']];
$pageTitle = $product["name"];
include_once("header.php");
?>

<!--  Page Content  -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2><?php echo $pageTitle;?></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active"><?php echo $pageTitle;?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                    <div class="blog-post-image" style="background-image: none">
                        <center>
                            <img src="/images/items/<?php echo $product['image'];?>" class="image-responsive"
                            alt="<?php echo $product['name'];?>"/>
                        </center>
                    </div>
                    <div class="blog-content">
                        <h2 class="blogpost-title">
                            <?php echo $pageTitle;?>
                        </h2>
                        <p><?php echo $product['colors'];?></p>
                        <a class="btn btn-info" href="contact.php?product=<?php echo $_GET['product']; ?>">Get quote for <?php echo $product['name'];?></a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<?php
include_once("footer.php");
?>