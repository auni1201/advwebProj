<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Project Details</title>
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
                            <li class=""><a href="/addProject"  class="">Add Project</a></li>
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
                    <div class="">
                        <div class="section-heading">
                            <h6>FYP Management System</h6>
                            <h2>Project Details </h2>
                        </div>
                        <p></p>
                        
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-4 text-center"">
                    
                        <div class="section-heading">
                            <h2>Project Details</h2>
                        </div>
                        <div style="display: flex; justify-content: center;">
                        <table>
                            <tr>
                                <th>Student ID:</th>
                                <td>{{$list['studID']}}</td>
                            </tr>
                            <tr>
                                <th>Student Name:</th>
                                <td>{{$list['studName']}}</td>
                            </tr>
                            <tr>
                                <th>Program:</th>
                                <td>{{$list['program']}}</td>
                            </tr>
                            <tr>
                                <th>Level:</th>
                                <td>{{$list['level']}}</td>
                            </tr>
                        </table>
                        </div>
                        <div style="display: flex; justify-content: center;">
                      
                            <table style="border-style: solid; border-color:#3c3c3c;">
                                <tr>
                                    <th>Title:</th>
                                    <td>{{$list['title']}}</td>
                                </tr>
                                <tr>
                                    <th>Details:</th>
                                    <td>{{$list['details']}}</td>
                                </tr>
                                <tr>
                                    <th>Start Date:</th>
                                    <td>{{$list['start']}}</td>
                                </tr>
                                <tr>
                                    <th>End Date:</th>
                                    <td>{{$list['end']}}</td>
                                </tr>
                                <tr>
                                    <th>Duration:</th>
                                    <td>{{$list['duration']}}</td>
                                </tr>
                                <tr>
                                    <th>Supervisor:</th>
                                    <td>{{$list['svName']}}</td>
                                </tr>
                                <tr>
                                    <th>First Examiner:</th>
                                    <td>{{$list['examiner1']}}</td>
                                </tr>
                                <tr>
                                    <th>Second Examiner:</th>
                                    <td>{{$list['examiner2']}}</td>
                                </tr>
                                <tr>
                                    <th>Progress:</th>
                                    <td>{{$list['progress']}}</td>
                                </tr>
                                <tr>
                                    <th>Status:</th>
                                    <td>{{$list['status']}}</td>
                                </tr>
                              
                            </table>
                            
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