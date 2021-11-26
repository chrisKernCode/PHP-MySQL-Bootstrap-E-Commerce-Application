<!DOCTYPE html>
<html lang="en">

<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>


<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header>
        <h1>Epoxy River Table Shop</h1>
    </header>

    <hr>

    <!-- Title -->
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">

    <?php get_products_in_shop_page(); ?>
    
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>

</body>

</html>