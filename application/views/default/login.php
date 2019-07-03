<?php include 'inc/head.php'; ?>
<!-- Pre-loader start -->
<div class="theme-loader">
  <div class="ball-scale">
    <div class='contain'>
      <div class="ring"><div class="frame"></div></div>
      <div class="ring"><div class="frame"></div></div>
      <div class="ring"><div class="frame"></div></div>
      <div class="ring"><div class="frame"></div></div>
      <div class="ring"><div class="frame"></div></div>
      <div class="ring"><div class="frame"></div></div>
      <div class="ring"><div class="frame"></div></div>
      <div class="ring"><div class="frame"></div></div>
      <div class="ring"><div class="frame"></div></div>
      <div class="ring"><div class="frame"></div></div>
    </div>
  </div>
</div>
<!-- Pre-loader end -->

<section class="login-block">
  <!-- Container-fluid starts -->
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <!-- Authentication card start -->

        <form class="md-float-material form-material" action="<?php echo base_url('login/logon'); ?>" method="post">
          <div class="text-center">
            <img src="<?php echo base_url(); ?>files/assets/images/logo.png" alt="logo.png">
          </div>
          <div class="auth-box card">
            <div class="card-block">
              <div class="row m-b-20">
                <div class="col-md-12">
                  <h3 class="text-center">Sign In</h3>
                </div>
              </div>
              <?php if (isset($_GET['auth']) && $_GET['auth'] == 'failure') { ?>
                <div class="row">
                  <div class="col-12">
                    <div class="alert alert-danger background-danger">
                      Nome de usuário ou senha inválido!
                    </div>
                  </div>
                </div>
              <?php } ?>
              <div class="form-group form-primary">
                <input type="text" name="email" class="form-control" required="" placeholder="Your Email Address">
                <span class="form-bar"></span>
              </div>
              <div class="form-group form-primary">
                <input type="password" name="password" class="form-control" required="" placeholder="Password">
                <span class="form-bar"></span>
              </div>
              <div class="row m-t-25 text-left">
                <div class="col-12">
                  <div class="checkbox-fade fade-in-primary d-">
                    <label>
                      <input type="checkbox" value="">
                      <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                      <span class="text-inverse">Remember me</span>
                    </label>
                  </div>
                  <div class="forgot-phone text-right f-right">
                    <a href="auth-reset-password.htm" class="text-right f-w-600"> Forgot Password?</a>
                  </div>
                </div>
              </div>
              <div class="row m-t-30">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-10">
                  <p class="text-inverse text-left m-b-0">Thank you.</p>
                  <p class="text-inverse text-left"><a href="index-1.htm"><b class="f-w-600">Back to website</b></a></p>
                </div>
                <div class="col-md-2">
                  <img src="<?php echo base_url(); ?>files/assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- end of form -->
      </div>
      <!-- end of col-sm-12 -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container-fluid -->
</section>
<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 10]>
<div class="ie-warning">
<h1>Warning!!</h1>
<p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
<div class="iew-container">
<ul class="iew-download">
<li>
<a href="http://www.google.com/chrome/">
<img src="../files/assets/images/browser/chrome.png" alt="Chrome">
<div>Chrome</div>
</a>
</li>
<li>
<a href="https://www.mozilla.org/en-US/firefox/new/">
<img src="../files/assets/images/browser/firefox.png" alt="Firefox">
<div>Firefox</div>
</a>
</li>
<li>
<a href="http://www.opera.com">
<img src="../files/assets/images/browser/opera.png" alt="Opera">
<div>Opera</div>
</a>
</li>
<li>
<a href="https://www.apple.com/safari/">
<img src="../files/assets/images/browser/safari.png" alt="Safari">
<div>Safari</div>
</a>
</li>
<li>
<a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
<img src="../files/assets/images/browser/ie.png" alt="">
<div>IE (9 & above)</div>
</a>
</li>
</ul>
</div>
<p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<?php include 'inc/scripts.php'; ?>

</body>

</html>
