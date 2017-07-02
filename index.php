<?php
/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 6/29/17
 * Time: 1:59 PM
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("php/tagBuilder.php")

?>

<!DOCTYPE html>

<html>

<head>
    <title>Main Page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

</head>


<body>


    <?php
        $classes = new htmlClassBuilder(array("jumbotron"));

        $tag = new tagBuilder('h2', 'jumbotron', 'background-color: aqua', "this is a php string", true);
        echo $tag;
    ?>


<!--    <nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color: aqua">-->
<!--        <a class="navbar-brand" href="#">Navbar Template</a>-->
<!--        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">-->
<!--            <ul class="navbar-nav ">-->
<!--                <li class="nav-item active underline-active">-->
<!--                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>-->
<!--                </li>-->
<!--                <li class="nav-item underline-active">-->
<!--                    <a class="nav-link" href="#">Store</a>-->
<!--                </li>-->
<!--                <li class="nav-item underline-active">-->
<!--                    <a class="nav-link" href="#">Store</a>-->
<!--                </li>-->
<!--                <li class="nav-item underline-active">-->
<!--                    <a class="nav-link" href="#">Store</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </nav>-->

<!--    <div class="jumbotron">-->
<!--        <h1>first</h1>-->
<!--        <h2>sdklfskdjf lskdjfjjee  jfwjkejflwk</h2>-->
<!---->
<!--    </div>-->
<!--    <div class="jumbotron" style="background-color: antiquewhite">-->
<!--        <h1>second</h1>-->
<!--        <h2>sdklfskdjf lskdjfjjee  jfwjkejflwk</h2>-->
<!--    </div>-->
<!--    <div class="jumbotron" style="background-color: burlywood">-->
<!--        <h1>third</h1>-->
<!--        <h2>sdklfskdjf lskdjfjjee  jfwjkejflwk</h2>-->
<!--    </div>-->

</body>
</html>

