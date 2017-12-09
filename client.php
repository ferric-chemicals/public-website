<?php

if(!isset($_GET["type"])) {
    header("Location: clients.php");
    die;
}

$clients[] = [];
$clients["hospital"] = ["name"=>"Hospitals", "image"=>"cover-1.jpg", "content" => "The answer is <b>Germ Slayer</b> Hand Sanitizer, which comes in a very easy to use 1 liter and 500 ML and also is very economical in price which is almost negligible in front of its outcome which can save most customers falling prey to germs. Recommanded by doctors."];
$clients["catering"] = ["name"=>"Catering services", "image"=>"cover-2.jpg", "content" => "The answer is <b>Germ Slayer</b> Hand Sanitizer, which comes in a very easy to use sachet of 1.5 ML and also is very economical in price which is almost negligible in front of its outcome which can keep customer hand’s Germs free."];
$clients["resturants"] = ["name"=>"Resturants", "image"=>"cover-3.jpg", "content" => "– As <b>Germ Slayer</b> is invented with a vision to lessen the wastage of water, it plays a huge role in saving water in restaurants as one does not have to use water before and after eating food as <b>Germ Slayer</b> will suppress the need of water to wash hands.<br/>

– No need of those traditional finger bowl anymore, thus saving the cost of lemon and boiling the water in turn also saving electricity and LPG.<br/>

– Hotels can also get their branding done on product which will further add to the brand value of the restaurant and also increase the sense of cleanliness among people and the credit will go to the desired restaurant.<br/>

– As many people look out for restaurants where they can expect some good hygiene practice, usage of <b>Germ Slayer</b> by the restaurant management can in turn fulfill the hygiene requirements of people and thus increasing the turn out ratio of the people visiting them which will also add to their increase in business.<br/>

– People can also put a stop to many illness and diseases that are caused through dirty hands especially in hotels"];
$clients["airways"] = ["name"=>"AirWays", "image"=>"cover-4.jpg", "content" =>"The answer is <b>Germ Slayer</b> Hand Sanitizer, which comes in a very easy to use sachet of 1.5 ML and also is very economical in price which is almost negligible in front of its outcome which can save most customers falling prey to germs."];

if(!isset($clients[$_GET['type']])){
    header("Location: clients.php");
    die;   
}

$client = $clients[$_GET['type']];

$mainContent = "Where there is crowd, the chances of getting your hands contaminated with germs increases. Have you ever thought what could the most simplest way for your guest to keep them away from such unhealthy environment?";

$typeContent = $client["content"];

$pageTitle = $client["name"];
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
                    <div class="blog-post-image" style="background-repeat: no-repeat;background-size: cover;background: url('/images/clients/<?php echo $client['image'];?>"></div>
                    <div class="blog-content">
                        <h2 class="blogpost-title">
                            <?php echo $pageTitle;?>
                        </h2>
                        <p><?php echo $mainContent;?></p>
                        <p><?php echo $typeContent;?></p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<?php
include_once("footer.php");
?>