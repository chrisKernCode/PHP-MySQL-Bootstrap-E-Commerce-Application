<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<body>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <?php include(TEMPLATE_FRONT . DS . "side_nav.php"); ?>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                    <?php include(TEMPLATE_FRONT . DS . "slider.php"); ?>
                    </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">

                <?php get_products(); ?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like what you see, then check out <a target="_blank" href="https://startbootstrap.com/templates/ecommerce">this free bootstrap template</a> for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="https://startbootstrap.com/templates/ecommerce">View Template</a>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like what you see, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Do you want to build an online shop?</a>
                        </h4>
                        <p>... then check out <a target="_blank" href="https://www.udemy.com/course/php-for-beginners-how-to-build-an-ecommerce-store/">this tutorial</a> on how to build this one!</p>
                        <a class="btn btn-primary" target="_blank" href="https://www.udemy.com/course/php-for-beginners-how-to-build-an-ecommerce-store/">View Course</a>
                    </div>

                </div><!--Row ends here-->

            </div>

        </div>

    </div>
    <!-- /.container -->


<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>

</body>

</html>
