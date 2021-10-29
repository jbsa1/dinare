<!-- 
THEME: Aviato | E-commerce template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/aviato-e-commerce-template/
DEMO: https://demo.themefisher.com/aviato/
GITHUB: https://github.com/themefisher/Aviato-E-Commerce-Template/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->


<!DOCTYPE html>
<html lang="en">

<?php include './stylesheet.php'; ?>

<body id="body">

    <?php include './header.php'; ?>

    <section class="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Body Lotion</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <ol class="product-pagination text-right">
                        <li><a href="./mask.php"><i class="tf-ion-ios-arrow-left"></i> Next </a></li>
                    </ol>
                </div>
            </div>
            <div class="row mt-20">
                <div class="col-md-5">
                    <div class="single-product-slider">
                        <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                            <div class='carousel-outer'>
                                <!-- me art lab slider -->
                                <div class='carousel-inner '>
                                    <div class='item active'>
                                        <img src='images/dinare/testi/product-lotion.jpeg' alt='' data-zoom-image="images/shop/single-products/product-1.jpg" />
                                    </div>

                                    <div class='item'>
                                        <img src='images/dinare/testi/testilotion-5.PNG' alt='' data-zoom-image="images/shop/single-products/product-3.jpg" />
                                    </div>
                                    <div class='item'>
                                        <img src='images/dinare/testi/testilotion-1.PNG' alt='' data-zoom-image="images/shop/single-products/product-4.jpg" />
                                    </div>


                                </div>

                                <!-- sag sol -->
                                <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                                    <i class="tf-ion-ios-arrow-left"></i>
                                </a>
                                <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                                    <i class="tf-ion-ios-arrow-right"></i>
                                </a>
                            </div>

                            <!-- thumb -->
                            <ol class='carousel-indicators mCustomScrollbar meartlab'>
                                <li data-target='#carousel-custom' data-slide-to='0' class='active'>
                                    <img src='images/dinare/testi/product-lotion.jpeg' alt='' />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='2'>
                                    <img src='images/dinare/testi/testilotion-5.PNG' alt='' />
                                </li>
                                <li data-target='#carousel-custom' data-slide-to='3'>
                                    <img src='images/dinare/testi/testilotion-1.PNG' alt='' />
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-details">
                        <h2>Body Lotion</h2>
                        <p class="product-price">Rp. 78.000</p>

                        <p class="product-description mt-20">
                            Dinare Body Lotion dengan kandungan 4 hi-grade active agents untuk memutihkan,
                            mencerahkan, merawat, menutrisi, dan melindungi kulit apapun jenis dan skin-tone
                            kamu kapanpun kamu butuhkan. Show your Glow!
                        </p>

                        <a href="cart.html" class="btn btn-main mt-20">Shop Now!</a>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <!-- Modal -->
    <div class="modal product-modal fade" id="product-modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="tf-ion-close"></i>
        </button>
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="modal-image">
                                <img class="img-responsive" src="images/shop/products/modal-product.jpg" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="product-short-details">
                                <h2 class="product-title">GM Pendant, Basalt Grey</h2>
                                <p class="product-price">$200</p>
                                <p class="product-short-description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
                                </p>
                                <a href="#!" class="btn btn-main">Add To Cart</a>
                                <a href="#!" class="btn btn-transparent">View Product Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './footer.php'; ?>

</body>

</html>