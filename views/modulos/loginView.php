<?php 

use App\Controllers\loginController;

    if (isset($_SESSION["usuarioRUC"])){
        header('location:index.php?action=inicio');  
    }
    
    $login = new loginController();
    $cedula = isset($_POST["cedula"]) ? $_POST["cedula"] : '';
    $telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : '';

?>

    <div class="main-container">
      <section class="space-sm">
        <div class="container align-self-start">
          <div class="row mb-5">
            <div class="col text-center">
              <a href="#">
                <img alt="Image" src="assets/img/logo-gray.svg" />
              </a>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7">
              <div class="card card-lg text-center">
                <div class="card-body">
                  <div class="mb-5">
                    <h1 class="h2 mb-2">Hello again</h1>
                    <span>Sign in to your account to continue</span>
                  </div>
                  <div class="row no-gutters justify-content-center">
                    <form class="text-left col-lg-8">
                      <div class="form-group">
                        <label for="login-email">Email Address</label>
                        <input class="form-control form-control-lg" type="email" name="email" id="login-email" placeholder="Email Address" />
                      </div>
                      <div class="form-group">
                        <label for="login-password">Password</label>
                        <input class="form-control form-control-lg" type="password" name="password" id="login-password" placeholder="Enter a password" />
                        <small>Forgot password? <a href="#">Reset here</a>
                        </small>
                      </div>
                      <div>
                        <div class="custom-control custom-checkbox align-items-center">
                          <input type="checkbox" class="custom-control-input" value="box-1" name="box-1" checked id="check-remember">
                          <label class="custom-control-label text-small" for="check-remember">Remember me next time</label>
                        </div>
                      </div>
                      <div class="text-center mt-3">
                        <button type="submit" class="btn btn-lg btn-primary">Log in</button>
                      </div>
                    </form>
                  </div>
                  <!--end of row-->
                </div>
              </div>
              <div class="text-center">
                <span class="text-small">Don't have an account yet? <a href="#">Create one</a>
                </span>
              </div>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
    </div>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

   

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="assets/js/aos.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="assets/js/jarallax.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="assets/js/prism.js"></script>
    <script type="text/javascript" src="assets/js/zoom.min.js"></script>

    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>

      
