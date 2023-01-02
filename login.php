<link rel="stylesheet" href="libs\style.css" />
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
<script src="https://kit.fontawesome.com/64d58efce2.js"></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

<?php require_once('./config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header copy.php') ?>

<body class="hold-transition login-page">
  <script>
    start_loader()
  </script>

  </style>
  <?php if ($_settings->chk_flashdata('success')): ?>
  <script>
    alert_toast("<?php echo $_settings->flashdata('success') ?>", 'success')
  </script>
  <?php endif; ?>

  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" id="cclogin-frm" class="sign-in-form" method="post">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" name="email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" class="" placeholder="Password" name="password" />
          </div>
          <button type="submit" class="btn btn-primary">Sign In</button>
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
          </div>
        </form>
        <form action="" id="cregister-frm" class="sign-up-form" method="post">
          <section class="w-auto h-full">
            <div class="flex flex-col items-center justify-center px-6 mx-auto md:h-screen">
              <div class="w-auto bg-white rounded-lg shadow -mt-4 md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-2 md:space-y-2 sm:p-8">
                  <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Create an account
                  </h1>
                    <input type="hidden" name="id">
                    <div class="grid grid-cols-2 w-96 gap-x-4">
                      <div class="relative z-0 mb-2 max-w-md group">
                        <label for="firstname" class=" control-label block mb-2 text-sm font-medium text-gray-900">First
                          Name</label>
                        <input type="text" autofocus name="firstname" id="firstname"
                          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                          required>
                      </div>
                      <div class="relative z-0 mb-2 w-full group">
                        <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                          Name</label>
                        <input type="text" id="lastname" name="lastname" placeholder=""
                          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                          required>
                      </div>
                    </div>
                    <div class="grid grid-cols-3 w-96 gap-x-4">
                      <div class="relative z-0 mb-1 max-w-md group">
                        <label for="middlename"
                          class="control-label block mb-2 text-sm font-medium text-gray-900">Middle Initial</label>
                        <input type="text" autofocus name="middlename" id="middlename"
                          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                          required>
                      </div>
                      <div class="relative z-0 mb-2 w-full group">
                        <label for="gender"
                          class="control-label block mb-1 text-sm font-medium text-gray-900">Gender</label>
                        <select type="text" id="gender" name="gender"
                          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 select2"
                          required>
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                      <div class="relative z-0 mb-1 w-full group">
                        <label for="contact" class="control-label block mb-2 text-sm font-medium text-gray-900">Contact
                          #</label>
                        <input type="number" id="contact" name="contact" required
                          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                          required>
                      </div>
                    </div>
                    <div>
                      <label for="address"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                      <input type="text" name="address" id="address" placeholder=""
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        required="">
                    </div>
                    <div class="relative z-0 mb-2 w-full group">
                      <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                      <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                        required>
                    </div>
                    <div class="grid grid-cols-2 w-96 gap-x-4">
                      <div>
                        <label for="password"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                          required="">
                      </div>
                      <div>
                        <label for="cpassword"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                        <input type="confirm-password" name="cpassword" id="cpassword"
                          placeholder="••••••••"
                          class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                          required="">
                      </div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="w-20 h-15 pl-9 mt-2">
                        <label for="logo" class="control-label text-sm">Image</label>
                        <input type="file" id="logo" name="img" class="form-control form-control-sm form-control-border"
                          onchange="displayImg(this,$(this))" accept="image/png, image/jpeg" required>
                      </div>
                      <div class="row">
                        <div class="form-group w-20 pl-15 ml-20 h-15 text-sm text-center">
                          <img src="<?= validate_image('') ?>" alt="Shop Logo" id="cimg"
                            class="border border-gray img-thumbnail">
                        </div>
                      </div>
                      <div class="h-7 px-28 pt-3 mb-4 ">
                        <button type="submit" class="btn h-10 btn-primary btn-block btn-flat">Sign Up</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
        </form>
      </div>
  </div>


  <div class="panels-container">
    <div class="panel left-panel">
      <div class="content">
        <h3>New here ?</h3>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
          ex ratione. Aliquid!
        </p>
        <button class="w-48 rounded-xl mx-1 border-2 py-2 hover:bg-gray-100 
            hover:font-bold hover:text-gray-700" id="sign-up-btn">
          Sign up
        </button>
        <button class="w-48 rounded-xl mx-1 border-2 py-2 hover:bg-gray-100 
            hover:font-bold hover:text-gray-700" id="sign-up-btn">
          <a href="index.php">Back to Site</a>
        </button>
      </div>
      <img src="image/Shop Background Final.png" class="image" alt="" />
    </div>
    <div class="panel right-panel">
      <div class="content">
        <h3>One of us ?</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
          laboriosam ad deleniti.
        </p>
        <button class="btn transparent hover:bg-gray-100 
            hover:font-bold hover:text-gray-700" id="sign-in-btn">
          Sign in
        </button>
      </div>
      <img src="image\Shop Background Final.png" class="image" alt="" />
    </div>
  </div>
  </div>

  <script src="libs\navbarclock.js"></script>

  <!-- jQuery -->
<script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="<?php echo base_url ?>dist/js/adminlte.min.js"></script> -->
<!-- Select2 -->
<script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>


  <script>
    function displayImg(input, _this) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      } else {
        $('#cimg').attr('src', '<?= validate_image('') ?>');
      }
    }
    $(function () {
      end_loader();
      $('body').height($(window).height())
      $('.select2').select2({
        placeholder: "Please Select Here",
        width: '100%'
      })
      $('.select2-selection').addClass("form-border")
      $('.pass_view').click(function () {
        var _el = $(this).closest('.input-group')
        var type = _el.find('input').attr('type')
        if (type == 'password') {
          _el.find('input').attr('type', 'text').focus()
          $(this).find('i.fa').removeClass('fa-eye-slash').addClass('fa-eye')
        } else {
          _el.find('input').attr('type', 'password').focus()
          $(this).find('i.fa').addClass('fa-eye-slash').removeClass('fa-eye')

        }
      })

      $('#cregister-frm').submit(function (e) {
        e.preventDefault();
        var _this = $(this)
        $('.err-msg').remove();
        var el = $('<div>')
        el.addClass("alert err-msg")
        el.hide()
        if (_this[0].checkValidity() == false) {
          _this[0].reportValidity();
          return false;
        }
        if ($('#password').val() != $('#cpassword').val()) {
          el.addClass('alert-danger').text('Password does not match.')
          _this.append(el)
          el.show('slow')
          $('html,body').scrollTop(0)
          return false;
        }
        start_loader();
        $.ajax({
          url: _base_url_ + "classes/Users.php?f=save_client",
          data: new FormData($(this)[0]),
          cache: false,
          contentType: false,
          processData: false,
          method: 'POST',
          type: 'POST',
          dataType: 'json',
          error: err => {
            console.error(err)
            el.addClass('alert-danger').text("An error occured");
            _this.prepend(el)
            el.show('.modal')
            end_loader();
          },
          success: function (resp) {
            if (typeof resp == 'object' && resp.status == 'success') {
              location.href = './login.php';
            } else if (resp.status == 'failed' && !!resp.msg) {
              el.addClass('alert-danger').text(resp.msg);
              _this.prepend(el)
              el.show('.modal')
            } else {
              el.text("An error occured");
              console.error(resp)
            }
            $("html, body").scrollTop(0);
            end_loader()

          }
        })
      })
    })

    $(function(){
    end_loader();
    $('#cclogin-frm').submit(function(e){
        e.preventDefault();
        var _this = $(this)
            $('.err-msg').remove();
        var el = $('<div>')
            el.addClass("alert err-msg")
            el.hide()
        if(_this[0].checkValidity() == false){
            _this[0].reportValidity();
            return false;
            }
        start_loader();
        $.ajax({
            url:_base_url_+"classes/Login.php?f=login_client",
            data: new FormData($(this)[0]),
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST',
            dataType: 'json',
            error:err=>{
                console.error(err)
                el.addClass('alert-danger').text("An error occured");
                _this.prepend(el)
                el.show('.modal')
                end_loader();
            },
            success:function(resp){
                if(typeof resp =='object' && resp.status == 'success'){
                    location.href= './';
                }else if(resp.status == 'failed' && !!resp.msg){
                    el.addClass('alert-danger').text(resp.msg);
                    _this.prepend(el)
                    el.show('.modal')
                }else{
                    el.text("An error occured");
                    console.error(resp)
                }
                $("html, body").scrollTop(0);
                end_loader()

            }
        })
    })
  })
  </script>
</body>

</html>