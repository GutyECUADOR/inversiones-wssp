<?php
if (isset($_SESSION["usuario_cedula".APP_UNIQUE_KEY])){
    header("Location:index.php?&action=dashboard");  
 } 
 
?> 
     
    <div class="main-container" id="app">
      <section class="fullwidth-split">
        <div class="container-fluid">
          <div class="row no-gutters height-100 justify-content-center">
            <div class="col-12 col-lg-6 fullwidth-split-image bg-dark d-flex justify-content-center align-items-center">
              <img alt="Image" src="assets/img/photo-man-diary.jpg" class="bg-image position-absolute opacity-30" />
              <div class="col-12 col-sm-8 col-lg-9 text-center pt-5 pb-5">
                <img alt="Image" src="assets/img/logo-white.svg" class="mb-4 logo-lg" />
                <span class="h3 mb-5">Build great products and join a community of happy designers</span>

                <div class="card text-left">
                  <div class="card-body">
                    <div class="media">
                      <img alt="Image" src="assets/img/avatar-female-2.jpg" class="avatar" />
                      <div class="media-body">
                        <p class="mb-1">
                          “Using other templates just doesn’t feel the same anymore - none have the polish and intuitive design of Wingman”
                        </p>
                        <small>Lucille Freebody, Product Designer</small>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!--end of col-->
            </div>
            <!--end of col-->
            <div class="col-12 col-sm-8 col-lg-6 fullwidth-split-text">
              <div class="col-12 col-lg-8 align-self-center">
                <div class="text-center mb-1">
                  <h1 class="h2 mb-2">Get started</h1>
                  <span>Start creating beautiful products immediately</span>
                </div>
                <form class="mb-4">
                  <div class="form-group">
                    <label for="signup-email">Nombre de Usuario</label>
                    <input class="form-control form-control-lg" type="email" name="email" id="signup-email" />
                  </div>
                  <div class="form-group">
                    <label for="signup-email">Email</label>
                    <input class="form-control form-control-lg" type="email" name="email" id="signup-email" />
                  </div>
                  <div class="form-group">
                    <label for="signup-password">Password</label>
                    <input class="form-control form-control-lg" type="password" name="password" id="signup-password" />
                    <!-- <small>At least seven characters with one numeral</small> -->
                  </div>
                  <div class="form-group">
                    <label for="signup-email">Teléfono</label>
                    <input class="form-control form-control-lg" type="email" name="email" id="signup-email" />
                  </div>
                  <div class="form-group">
                    <label for="signup-email">País</label>
                    <input class="form-control form-control-lg" type="email" name="email" id="signup-email" />
                  </div>
                  
                  <div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" value="agree" name="agree-terms" id="check-agree">
                      <label class="custom-control-label text-small" for="check-agree">I agree to the <a href="#">Terms &amp; Conditions</a>
                      </label>
                    </div>
                  </div>
                  <div class="text-center mt-4">
                    <button type="submit" class="btn btn-lg btn-success">Create Account</button>
                  </div>
                </form>
                <div class="text-center">
                  <span class="text-small">Already have an account? <a href="#">Log in here</a>
                  </span>
                </div>
              </div>
              <!--end of col-->
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
    <script type="text/javascript" src="assets/js/moment.js"></script>

    <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>

    <script type="text/javascript" src="assets/js/jquery-modal-video.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>

    <!-- VUE y Scripts de la pagina-->
    <script src="assets\js\vue.js"></script>
    <script src="assets\js\clases\cliente.js?<?php echo date('Ymdhiiss')?>"></script>
    <script src="assets\js\pages\registro.js?<?php echo date('Ymdhiiss')?>"></script>