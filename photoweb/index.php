<?php 
    session_start();
    require('Inc/links.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4toWeb</title>
</head>

<body>
    <?php require('Inc/navbar.php') ?>

    <div class="container-fluid">
        <div class="row">
            <div class="bg-img col-12">

                <?php
                // Logged out alert
            if($_GET['success'] == 'logged out'){ ?>
                <div class="d-flex justify-content-end">
                    <div class="alert alert-warning alert-dismissible col-lg-3 col-6 col-md-4 col-lg-3-5" role="alert">
                        <strong>You have successfully logged out</strong>
                        <button type="button" class="close close-alert" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <?php } ?>

                <?php
                // Logged in alert
            if($_GET['success'] == 'logged in'){ ?>
                <div class="alert alert-success alert-dismissible col-lg-3 col-6 col-md-4 col-lg-3-5" role="alert">
                    <strong>You have successfully logged In</strong>
                    <button type="button" class="close close-alert" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php } ?>

                <?php
                // Login after registering alert
            if($_GET['success'] == 'record added'){ ?>
                <div class="alert alert-success alert-dismissible col-lg-3 col-6 col-md-4 col-lg-3-5" role="alert">
                    <strong>You have successfully logged In</strong>
                    <button type="button" class="close close-alert" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php } ?>

                <?php 
                // Incorrect user name or password alert
                if($_GET['error'] === 'Incorrect user name or password'){ ?>
                <div class="alert alert-danger alert-dismissible col-lg-4 col-sm-6 col-md-7" role="alert">
                    <strong><?php echo $_GET['error'] ?>! Please Check again</strong>
                    <button type="button" class="close close-alert" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php } ?>

                <?php 
                // Passwords didn't match alert
                if($_GET['error'] === "Passwords didn't match"){ ?>
                <div class="alert alert-danger alert-dismissible col-lg-4 col-sm-6 col-md-7" role="alert">
                    <strong><?php echo $_GET['error'] ?>! Please try again</strong>
                    <button type="button" class="close close-alert" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php } ?>

                <?php 
                // Passwords didn't match alert
                if($_GET['error'] === "Email already exists"){ ?>
                <div class="alert alert-danger alert-dismissible col-lg-4 col-sm-6 col-md-7" role="alert">
                    <strong><?php echo $_GET['error'] ?>! Please try again</strong>
                    <button type="button" class="close close-alert" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php } ?>

                <div class="d-flex justify-content-center align-items-center">
                    <div class="main-content">

                        <h1 class="text-center" id="main-title">Stunning free images & royalty free stock</h1>
                        <p class="main-description text-center">Over 2.6 million+ high quality stock images, videos and
                            music shared by our talented community.</p>

                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" id="search-image" aria-label="Large"
                                aria-describedby="inputGroup-sizing-sm" placeholder="Search an Image">
                            <a href="#" class="btn btn-light" id="search-icon"><i class='fa fa-search'></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid bg">
        <section class="gallery">

            <div class="row">
                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-1">
                    <img data-original="img/1.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-comment"></i></a>
                            <a href="#"><i class="fa fa-thumbs-up"></i></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-2">
                    <img data-original="img/2.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-3">
                    <img data-original="img/3.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-4">
                    <img data-original="img/4.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-5">
                    <img data-original="img/5.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="dcol-6-md-4">
                    <img data-original="img/6.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-7">
                    <img data-original="img/7.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-8">
                    <img data-original="img/8.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-9">
                    <img data-original="img/9.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-10">
                    <img data-original="img/10.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-11">
                    <img data-original="img/11.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-12">
                    <img data-original="img/12.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-13">
                    <img data-original="img/13.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-14">
                    <img data-original="img/14.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-15">
                    <img data-original="img/15.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>

                <div class="box col-12 col-sm-6 col-md-4 col-lg-3" id="d-image-16">
                    <img data-original="img/16.jpg" alt="" class="lazy">
                    <div class="info">
                        <a href="#"><i class="fa fa-download"></i></a>
                        <div class="links">
                            <a href="#" class="fa fa-heart"></a>
                            <a href="#" class="fa fa-comment"></a>
                            <a href="#" class="fa fa-thumbs-up"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <?php
    if(!empty($_SESSION['email']) && !empty($_SESSION['password'])){
        $log = "<script>$('#login-button-pop').addClass('d-none'); $('.join').addClass('d-none'); $('.logout').removeClass('d-none'); 
                $('.user-icon').removeClass('d-none'); </script>";
        echo $log; ?>
    <?php } ?>



    <script>
    // Create a match Function
    function myFunction(x) {
        if (x.matches) {

        } else {
            // Image reaction options display
            $('.info').hide();

            $('.box').mouseover(function() {
                var attrb = '#' + $(this).attr('id');
                //alert(attrb);
                $(attrb + '>.info').fadeIn();
                $(attrb + '>img').addClass('select-img');
            });

            $('.box').mouseleave(function() {
                $('.info').fadeOut();
                $('img').removeClass('select-img');
            });
        }
    }

    // Create a MediaQueryList object
    const mmObj = window.matchMedia("(max-width: 768px)")

    // Call the match function at run time:
    myFunction(mmObj);

    // Add the match function as a listener for state changes:
    mmObj.addListener(myFunction)
    </script>

</body>

</html>