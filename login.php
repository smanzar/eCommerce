<?php include 'includes/head.php'?>
<body class="login">
    <?php include 'includes/header.php'?>
    <main>
        <div class="loginView">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="loginSlider sliderbtnNav">
                            <div><img src="./images/gI.png" alt="gi"></div>
                            <div><img src="./images/gI.png" alt="gi"></div>
                            <div><img src="./images/gI.png" alt="gi"></div>
                            <div><img src="./images/gI.png" alt="gi"></div>
                            <div><img src="./images/gI.png" alt="gi"></div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="loginTabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li><a href="#login" data-toggle="tab" role="tab" class="active">Login</a></li>
                                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#verificationCode">Signup</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="login" role="tabpanel">
                                    <div class="qrCodeScan">
                                        <img src="./images/qrCode.png" alt="qr code">
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#qrScan"></a>
                                    </div>
                                    <form>
                                        <div class="form-group slidingLabel">
                                            <input type="text" class="form-control btn-radius" id="emailLogin">
                                            <label for="emailLogin">Email or phone Number</label>
                                        </div>
                                        <div class="form-group slidingLabel m-0">
                                            <input type="password" class="form-control btn-radius" id="passwordLogin">
                                            <label for="passwordLogin">Password</label>
                                        </div>
                                        <a href="javascript:void(0);" class="forgetPassword">forgot Password ?</a>
                                        <a href="index.php" class="btn btn-theme btn-radius btn-block btn-lg">LOGIN</a>
                                    </form>
                                    <div class="or">
                                        <hr>
                                        <span>OR</span>
                                    </div>
                                    <div class="socailMediaBtns">
                                        <a href="javascript:void(0);"><img src="./images/gmail.png" alt="socail"></a>
                                        <a href="javascript:void(0);"><img src="./images/fb.png" alt="socail"></a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="signup" role="tabpanel">
                                    <form>
                                        <div class="form-group slidingLabel">
                                            <input type="email" class="form-control btn-radius" id="emailSignup">
                                            <label for="emailSignup">Email</label>
                                        </div>
                                        <div class="form-group slidingLabel">
                                            <input type="password" class="form-control btn-radius" id="passwordsignup">
                                            <label for="passwordsignup">Password</label>
                                        </div>
                                        <div class="form-group slidingLabel">
                                            <input type="password" class="form-control btn-radius" id="confirmPasswordsignup">
                                            <label for="confirmPasswordsignup">Confirm Password</label>
                                        </div>
                                        <div class="form-group slidingLabel">
                                            <input type="text" class="form-control btn-radius" id="nameSignup">
                                            <label for="nameSignup">Name</label>
                                        </div>
                                        <div class="form-group slidingLabel">
                                            <input type="text" class="form-control btn-radius" id="verifyCode">
                                            <label for="verifyCode">Verification Code</label>
                                        </div>
                                        <a href="index.php" class="btn btn-theme btn-radius btn-block btn-lg">REGISTER</a>
                                    </form>
                                    <div class="or">
                                        <hr>
                                        <span>OR</span>
                                    </div>
                                    <div class="socailMediaBtns">
                                        <a href="javascript:void(0);"><img src="./images/gmail.png" alt="socail"></a>
                                        <a href="javascript:void(0);"><img src="./images/fb.png" alt="socail"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="verificationCode" tabindex="-1" role="dialog" aria-labelledby="verifyCodeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header themeHeader">
                    <h5 class="modal-title" id="verifyCodeLabel">Verification Code</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="./images/closeIcon.png" alt="close">
                    </button>
                </div>
                <div class="modal-body verificationBlock">
                    <p>Enter your mobile number to send <strong>verification code</strong>.</p>
                    <form>
                        <div class="form-group slidingLabel mt-5">
                            <input type="text" class="form-control btn-radius" id="mobVerify">
                            <label for="mobVerify">Enter Mobile Number</label>
                        </div>
                        <a href="#signup" data-toggle="tab" role="tab" data-dismiss="modal" class="btn btn-block btn-theme btn-lg btn-radius mb-3">Send Verification Code</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="qrScan" tabindex="-1" role="dialog" aria-labelledby="qrScanLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header themeHeader">
                    <h5 class="modal-title" id="qrScanLabel">Scan our QR Code</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="./images/closeIcon.png" alt="close">
                    </button>
                </div>
                <div class="modal-body qrCode">
                    <div class="qrCodeBox">
                        <img src="./images/qrCode.png" alt="qrCode">
                    </div>                    
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="keepSignin">
                        <label class="form-check-label" for="keepSignin">Keep me signed in</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'?>
    <script>
        $(document).ready(function(){
            $('.loginSlider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: true,
                dots: true,
                prevArrow:"<button type='button' class='slick-prev'><i class='fa fa-chevron-left'></i></button>",
                nextArrow:"<button type='button' class='slick-next'><i class='fa fa-chevron-right'></i></button>"
            })
        })
    </script>
    <?php include 'includes/foot.php'?>