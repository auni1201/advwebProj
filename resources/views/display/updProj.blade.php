<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Add Project</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/unitenlogo.png" align="klassy cafe html template" style="width:160px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class=""><a href="/redirect">Home</a></li>
                            <li class=""><a href="/addProject"  class="active">Add Project</a></li>
                            <li class=""><a href="/project">Project List</a></li>
                            
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                           
                            <li>
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                        <li>
                                            <x-app-layout>

                                            </x-app-layout>
                                        </li>
                                        @else
                                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                            @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </li>
                        </ul>        
                      
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
            <div class="col-lg-6" style="justify-content: center;">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>FYP Management System</h6>
                            <h2>Add Project Details Here</h2>
                        </div>
                        <p></p>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="/add" method="post">
                          @csrf
                          <div class="row">
                            <div class="col-lg-12">
                                <h6>Project Details</h6>
                            </div>
                            <div class="col-lg-12" style="padding-top: 10px;">
                              <fieldset>
                              <input name="title" type="text" id="title" placeholder="Title*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                              <textarea name="details" rows="1" id="details" placeholder="Details" ></textarea>
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <div id="filterDate2">    
                                  <div >
                                  <label for="start">Start Date:</label>
                                  <input type="date" id="start" name="start">
                                    
                                  </div>
                                </div>  
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              
                              <div id="filterDate2">    
                                <div >
                                <label for="end">End Date:</label>
                              <input type="date" id="end" name="end">
                                  
                                </div>
                              </div>  
                              <div class="col-lg-12" style="padding-top: 10px;">
                              <input name="duration" type="text" id="duration" placeholder="Duration(months)*" required="">
                              </div>
                              <div class="col-lg-12">
                              <input type="hidden" id="progress" name="progress" value="n/a">
                              </div>
                              <div class="col-lg-12">
                              <input type="hidden" id="status" name="status" value="n/a">
                              </div>
                              
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="padding-top: 20px;">
                                <h5>Student Details</h5>
                            </div>
                            <div class="col-lg-12" style="padding-top: 10px;">
                                <fieldset>
                                <input name="studID" type="text" id="studID" placeholder="Student ID no.*" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                              <input name="studName" type="text" id="studName" placeholder="Student Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                              <input name="program" type="text" id="program" placeholder="Program*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                              <input name="level" type="text" id="level" placeholder="Level*" required="">
                              </fieldset>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12" style="padding-top: 20px;">
                                <h5>Supervisor Details</h5>
                            </div>
                            <div class="col-lg-12" style="padding-top: 10px;">
                                <fieldset>
                                <input name="svID" type="text" id="svID" placeholder="Supervisor ID no.*" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                              <input name="svName" type="text" id="svName" placeholder="Supervisor Name*" required="">
                              </fieldset>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12" style="padding-top: 20px;">
                                <h5>Examiner Details</h5>
                            </div>
                            <div class="col-lg-12" style="padding-top: 10px;">
                                <fieldset>
                                <input name="examiner1" type="text" id="examiner1" placeholder="First Examiner" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                              <input name="examiner2" type="text" id="examiner2" placeholder="Second Examiner" required="">
                              </fieldset>
                            </div>
                            
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Submit Details</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->
   
  

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>