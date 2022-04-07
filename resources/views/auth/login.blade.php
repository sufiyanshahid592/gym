<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Cardboard Boxes|</title>

        <!-- Bootstrap -->
        <link href=" {{ asset('adminassets/vendors/bootstrap/dist/css/bootstrap.min.css') }}"  rel="stylesheet" />
        <!-- Font Awesome -->
        <link href=" {{ asset('adminassets/vendors/font-awesome/css/font-awesome.min.css') }}"  rel="stylesheet" />
        <!-- NProgress -->
        <link href=" {{ asset('adminassets/vendors/nprogress/nprogress.css') }}"  rel="stylesheet" />
        <!-- Animate.css -->
        <link href=" {{ asset('adminassets/vendors/animate.css/animate.min.css') }}"  rel="stylesheet" />

        <!-- Custom Theme Style -->
        <link href=" {{ asset('adminassets/build/css/custom.min.css') }}"  rel="stylesheet" />
    </head>

    <body class="login">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>



            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form id="frm" method="POST" action="{{ url('/create-user') }}"  >

                            @csrf

                            <h1>Login Form</h1>

                            @if (Session::has('logout_msg'))

                                <div class="alert alert-success session-destroy mt-sm-4 ">
                                        <?php echo Session::get('logout_msg') ;?>
                                </div>

                            @endif



                            @if (Session::has('message'))

                                <div class="alert  alert-danger session-destroy mt-sm-4 ">
                                        <?php echo Session::get('message') ;?>
                                </div>

                            @endif

                            <div>
                                <input type="email" class="form-control" name="useremail" placeholder="Useremail" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" required="" name="password" />
                            </div>

                            <div>
                                <button class="btn btn-default submit" type="submit">Log in</button>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">

                                <div class="clearfix"></div>

                                <br />

                                <div>
                                        <h1><img src="{{ url('adminassets/images/card-board-boxes-new.jpg') }}" class="img-fluid" alt="" /> </h1>
                                        <p>@ 2021 copyright by Cardboard boxes. All rights reserved.</p>
                                </div>

                            </div>
                        </form>
                    </section>
                </div>

                <div id="register" class="animate form registration_form">
                    <section class="login_content">
                        <form>
                            <h1>Create Account</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                                <a class="btn btn-default submit" href="index.html">Submit</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">
                                    Already a member ?
                                    <a href="#signin" class="to_register"> Log in </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><i class="fa fa-paw"></i> Cardboard Boxes </h1>
                                    <p>@ 2021 copyright by Cardboard boxes. All rights reserved.</p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>
      <!-- jQuery -->
      <script src="{{ asset('adminassets/vendors/jquery/dist/jquery.min.js') }}"></script>
      <script src="{{ asset('adminassets/vendors/jquery/jquery.validate.min.js') }}" ></script>
      <script>

          $(document).ready(function() {
              $('#frm').validate({
                          rules:{
                            //   name:"required",
                              useremail:{
                                  required:true,
                                  email:true
                              },
                              password:{
                                  required:true,
                                  minlength:5
                              },
                          },messages:{
                            //   name:"Please enter your name",
                              useremail:{
                                  required:"Please enter email",
                                  email:"Please enter valid email",
                              },
                              password:{
                                  required:"Please enter your password",
                                  minlength:"Password must be 5 char long"
                              },
                          },
                          submitHandler:function(form){
                              form.submit();
                          }
                      });



                      $('div.alert.session-destroy').delay(3000).slideUp(300);
          });

      </script>
</html>
