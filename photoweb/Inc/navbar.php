<!------------- Navigation Bar --------------->
<nav class="navbar navbar-expand-md" style="background-color: #8CE786">
    <div class="container-fluid">
        <a class="navbar-brand me-5" href="index.php">4toWeb</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-4" aria-current="page" href="#" class="home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link me-4 item" href="#">Photos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link me-4" href="#">Videos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link me-4" href="#">Contact Us</a>
                </li>
            </ul>

            <?php $pieces = explode(" ",$_SESSION['username']); ?>
            <form class="d-flex" role="search">
                <div class="d-flex align-items-center">
                    <a class="btn d-none user-icon"><i class="fas fa-user-circle"></i></a>
                    <div id="username-show"><?php echo $pieces[0]; ?></div>
                </div>

                <input class="btn me-2 login" id="login-button-pop" type="button" value="Login" data-toggle="modal" data-target="#login">
                <a href="logout.php" class="btn me-2 logout d-none ms-4">Log out</a>
                <input class="btn me-2 join" type="button" value="Register" data-toggle="modal" data-target="#signup">
            </form>
        </div>
    </div>
</nav>


<!-------- Login Modal ---------->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Join with us to download images you want</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" id="close">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <input type="button" class="col-6 me-3 shift-button-login" value="Login" disabled>
                </div>

                <div id="login-content">
                    <form id="login-form" name="login-form" method="post" action="login.php">
                        <?php if($_GET['error'] === 'Incorrect user name or password' ){ ?>
                              <p class="error"><?php echo $_GET['error'] ?></p>
                        <?php } ?>

                        <div class="form-group mt-1">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" class="email" name="email"
                                aria-describedby="emailHelp" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" class="password"
                                placeholder="Password">
                        </div>

                        <div class="d-flex justify-content-center mt-3">
                            <input type="submit" id="login-button" class="col-10 btn btn-lg btn-block mt-3"
                                value="Login">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer"></div>
            
        </div>
    </div>
</div>


<!-------- Register Modal ---------->

<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Join with us to download images you want</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" id="close">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <input type="button" class="col-6 ms-3 shift-button-signup" value="Sign Up">
                </div>

                <div id="signup-content">
                    <form name="signup-form" id="signup-form" method="post" action="register.php">
                        <div class="form-group mt-1">
                            <label for="username">User name</label>
                            <input type="text" class="form-control" class="username" for="username" name="username"
                                aria-describedby="emailHelp" placeholder="eg: Kasun">
                        </div>

                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" class="email" name="email" placeholder="Email">
                        </div>

                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" class="password"
                                placeholder="Password">
                        </div>

                        <div class="form-group mt-3">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmPassword" class="confirm-password"
                                placeholder="Confirm Password">
                        </div>

                        <div class="d-flex justify-content-center mt-3">
                            <input type="submit" id="signup-button" class="col-10 btn btn-lg btn-block mt-3"
                                value="Sign Up">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

