<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sales records App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- boostrap -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/libs/css/style.css">
        <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
        <link rel="stylesheet" href="assets/vendor/vector-map/jqvmap.css">
        <link href="assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
        <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
        <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
        <link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css" />
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    
        <div class="container">
        <!--nav bar -->
                <div class="" id="nav">
                <nav class="navbar navbar-dark bg-dark justify-content-between">
            <a class="navbar-brand" style="color:#fff">Navbar</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        </nav>
</div>

        <div id="registerForm" >
                            <form action="store" class="text-center border border-light p-5" method="post">
                                    <p class="h4 mb-4">New User</p>
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <input type="text" class="form-control mt-2 name" id="name" name="name" placeholder="Name" required>
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <input type="text" class="form-control mt-2 surname" id="surname" name="surname" placeholder="Surname" required>
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <input type="email" class="form-control mt-2 mail" id="mail" name="mail" placeholder="Email" required>
                                        </div>
                                      </div>
                                      <div class="col-lg-6">
                                    <!-- -->
                                    <label class="radio-inline">
                                    <p>Select job title:</p>
      <input type="radio" name="title" value="Barber" checked>Barber
    </label>
    <label class="radio-inline">
      <input type="radio" name="title" value="Hair-dresser" >Hair-dresser
    </label>
    <label class="radio-inline">
      <input type="radio" name="title" value="Nail-technician" >Nail-Techinician
    </label>

                                      </div>
                                      <div class="col-lg-6">
                                            <div class="form-group">
                                              <input type="password" class="form-control mt-2 pass" name="pass" id="pass" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                                <div class="form-group">
                                                  <input type="password" class="form-control mt-2 passConfirm" name="passConfirm" id="passConfirm" placeholder="Confirm Password" required>
                                                </div>
                                            </div>
                                      <div class="col-12">
                                      <div class="form-group">
                                        <!--<div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                          <label class="form-check-label" for="invalidCheck2">
                                            Gender
                                          </label>
                                        </div>-->
                                      </div>
                                      </div>
                                      <!--Register button -->
                                      <button class="btn btn-outline-danger btn-block my-4 sumitBtn" id="sumitBtn" type="submit">Submit</button>
                                    </div>
                                  </form>
                    </div>   

        </div>
    </body>
</html>
