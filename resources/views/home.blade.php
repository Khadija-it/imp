<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   
  </title>
  <link rel = "icon" href ="/images/logo2.png"   type = "image/x-icon"> 
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

  <Style>
  .logo {
  background-color: #193870
}

.myDIV {
  data-color: #6495ED; /* Blue text color */
}
.sidebar{
  background-color: #fff

}
  </Style>

</head>

<body class="">


  <div class="wrapper">
  
    <div class="sidebar" >
    
      
    @if (Auth::user()->user_type == 's')
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          
        </a>
    
        <a href="" class="simple-text logo-normal">
        {{Auth::user()->student->firstName}} 

        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li>
        <a href="/CV/create">
              <i class="now-ui-icons users_single-02"></i>
              <p>Student CV</p>
            </a>
          </li>
          </li>
        <li>
          <a href="http://localhost:8000/Announcaments">
              <i class="now-ui-icons education_atom "></i>
              <p>Annoucaments </p>
            </a>
          </li>
          <li>
            <a href="http://localhost:8000/record">
              <i class="now-ui-icons location_map-big"></i>
              <p>My Requests</p>
            </a>
          </li>
          <li>
          <a href="http://localhost:8000/status">
              <i class="now-ui-icons education_atom "></i>
              <p>Registration response </p>
            </a>
          </li>

          <li>
            <a href="http://localhost:8000/garde">
              <i class="now-ui-icons location_map-big"></i>
              <p>grade</p>
            </a>
          </li>
         
          
          <li>
            <a href="/finalreports/create">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Final Report</p>
            </a>
          </li>

          <li>
            <a href="/TrainingRegistrations/create">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>registeration Form</p>
            </a>
          </li>
        
         
          </li>
        </ul>
      </div>
    </div>
       
                  @endif

                  @if (Auth::user()->user_type == 'c')
                  <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          
        </a>
        <a href="" class="simple-text logo-normal">
        {{Auth::user()->company->name}} 

        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li>
        <a href="http://localhost:8000/company/create">
              <i class="now-ui-icons users_single-02" ></i>
              <p>My Profile</p>
            </a>
          </li>
          </li>
        <li>
          <a href="http://localhost:8000/Announcaments/create">
              <i class="now-ui-icons education_atom "></i>
              <p>Create Announcament</p>
            </a>
          </li>
          <li>
            <a href="http://localhost:8000/request">
              <i class="now-ui-icons location_map-big"></i>
              <p>Requests</p>
            </a>
          </li>
         
          <li>
            <a href="http://localhost:8000/medEvalutions/create">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>MED Evaloution</p>
            </a>
          </li>
          <li>
            <a href="/finalEvalutions/create">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Final Evaloution</p>
            </a>
          </li>
         <!-- <li>
            <a href="./typography.html">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>-->
          </li>
        </ul>
      </div>
    </div>
                  @endif

                  @if (Auth::user()->user_type == 'u')
                  <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        {{Auth::user()->UniversitySupervisor->firstName}} 

        </a>
        </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="/medEvalutions">
              <i class="now-ui-icons location_map-big"></i>
              <p>Med Evalution Reports</p>
              </a>
          </li>
            <li>
            <a href="/finalEvalutions/index">
              <i class="now-ui-icons location_map-big"></i>
              <p>Final Evalution Reports</p>
              </a>
             </li>

          
          <li>
            <a href="http://localhost:8000/finalreports">
              <i class="now-ui-icons location_map-big"></i>
              <p> Final Reports</p>
              </a>
          </li>
           
       
          <li>
            <a href="http://localhost:8000/tregis">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p> Registration  </p>
            </a>
          </li>
          <li>
            <a href="http://localhost:8000/studentlist">
              <i class="fas fa-graduation-cap"></i>
              <p>Students grades</p>
            </a>
          </li>
          <li>
            <a href="http://localhost:8000/studentregister">
              <i class="fas fa-graduation-cap"></i>
              <p>Student registration</p>
            </a>
          </li>
         
          </li>
        </ul>
      </div>
    </div>
                  @endif
    

      <!-- Navbar -->
  
      <!-- End Navbar -->

       
      
          
            </div>
          </div>
        </div>
       
            
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
 
</body>

</html>
@endsection