<!DOCTYPE html>
<?php
  ob_start();
  session_start();
?>
<html lang="en">
<!--begin::Head-->

<meta charset="utf-8" />
<title>Sign In | technagers</title>


<!--end::Fonts-->
<!--begin::Page Custom Styles(used by this page)-->

<!--head.php Themes (for all pages)-->
<?php
		include('../../../../../demo1/custom/css/head.php');
		?>
<!--end::Layout Themes-->


</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">



    <!-- form signin-->
		<form method="post" method="signin.php">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Content-->
            <div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
                <!--begin::Wrapper-->
                <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                    <!--begin::Logo-->
                    <a href="#" class="login-logo pb-xl-20 pb-15">
                        <img src="../../../../../theme/html/demo1/dist/assets/media/logos/bg_logo.png" class="max-h-80px" alt="" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Signin-->
                    <div class="login-form">
                        <!--begin::Form-->
                        <form class="form" id="kt_login_singin_form" action="login.php">
                            <!--begin::Title-->
                            <div class="pb-5 pb-lg-15">
							<?php
								
								include '../../../../scripts/function.php';
								if(isset($_POST['login']))
								{
									//Retrieve the field values from our login form.
									$user_email = !empty($_POST['user_email']) ? trim($_POST['user_email']) : null;
									$passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
									//Function calling here...
                                    login($user_email, $passwordAttempt);
								}
							?>

                                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h3>
                                <div class="text-muted font-weight-bold font-size-h4">New Here?
                                    <a href="signup.php" class="text-primary font-weight-bolder">Create Account</a></div>
                            </div>
                            <!--begin::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Your Email</label>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="email" name="user_email" autocomplete="off" required>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Your Name</label>
                                    <a href="forgot.html" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Forgot Password ?</a>
                                </div>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="password" name="password" autocomplete="off" required>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-5">
                                <button type="submit" id="kt_login_singin_form_submit_button" name="login" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
                               
									
										<!--end::Svg Icon-->
								
                            </div>
                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--begin::Content-->
            <!--begin::Aside-->
            <div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right">
                <div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom" style="background-image: url(https://preview.keenthemes.com/metronic/theme/html/demo1/dist/assets/media/svg/illustrations/login-visual-4.svg);">
                    <!--begin::Aside title-->
                    <h3 class="pt-lg-40 pl-lg-20 pb-lg-0 pl-10 py-20 m-0 d-flex justify-content-lg-start font-weight-boldest display5 display1-lg text-white">We Got
                        <br />A Surprise
                        <br />For You</h3>
                    <!--end::Aside title-->
                </div>
            </div>
            <!--end::Aside-->
        </div>
        <!--end::Login-->
    </div>
     
   
</body>

</html>