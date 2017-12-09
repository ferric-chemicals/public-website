<?php
$pageTitle = "Our Clients";
include_once("header.php");
?>

<!--  Page Content  -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Our Clients</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Our Clients</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$clients = [];

$clients[] = ["name"=>"Hospitals", "page"=>"client.php?type=hospital", "image"=>"logo-4.jpg"];
$clients[] = ["name"=>"Catering Service", "page"=>"client.php?type=catering", "image"=>"logo-1.jpg"];
$clients[] = ["name"=>"Restaurants", "page"=>"client.php?type=resturants", "image"=>"logo-5.jpg"];
$clients[] = ["name"=>"Airways", "page"=>"client.php?type=airways", "image"=>"logo-2.jpg"];
?>

<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
        </div>
        <div class="row">
            <?php foreach ($clients as $client) { ?>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="images/clients/<?php echo $client['image'];?>" class="img-responsive" alt="Sachet (1.5 ML)" >
                        <div class="overlay">
                            <div class="buttons">
                                 <a rel="gallery" class="fancybox" href="images/clients/<?php echo $client['image'];?>">Preview</a>
                                <a href="<?php echo $client['page'];?>">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="<?php echo $client['page'];?>">
                        <?php echo $client['name'];?>
                    </a>
                    </h4>
                    </figcaption>
                </figure>
            </div>
            <?php } ?>
        </div>
    </div>
</section> <!-- #works -->

<?php
include_once("footer.php");
?>