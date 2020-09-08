
<!DOCTYPE html>
<html lang="en">


<head>
    <title>{{ config('app.name') }}</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />
    <!-- Favicon icon -->
    <link rel="icon" href="admin/files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="admin/files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="admin/files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="admin/files/assets/icon/feather/css/feather.css">

    <link rel="stylesheet" type="text/css" href="admin/files/bower_components/sweetalert/css/sweetalert.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="admin/files/assets/css/font-awesome-n.min.css">
    <link rel="stylesheet" type="text/css" href="admin/files/assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="admin/files/assets/icon/themify-icons/themify-icons.css">
      <!-- simple line icon -->
    <!-- <link rel="stylesheet" type="text/css" href="admin/files/assets/icon/simple-line-icons/css/simple-line-icons.css"> -->
       <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="admin/files/assets/icon/icofont/css/icofont.css">
    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="admin/files/bower_components/chartist/css/chartist.css" type="text/css" media="all">

     <!-- toolbar css -->
     <link rel="stylesheet" type="text/css" href="admin/files/assets/pages/toolbar/jquery.toolbar.css">
    <link rel="stylesheet" type="text/css" href="admin/files/assets/pages/toolbar/custom-toolbar.css">

         <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="admin/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="admin/files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="admin/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="admin/files/assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="admin/files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="admin/files/assets/css/widget.css">
    <link rel="stylesheet" type="text/css" href="admin/files/assets/css/pages.css">


    

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <!-- [ Pre-loader ] end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
           
        @include('includes.navbar')
        @include('includes.sidebar')
        

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
            
                   
                    <div class="pcoded-content">
                      
                        <div class="pcoded-inner-content">
                            <div class="main-body">

                                   
                                                    @yield('content')



                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ style Customizer ] start -->
                    <div id="styleSelector">
                    </div>
                    <!-- [ style Customizer ] end -->
                </div>
            </div>
        </div>
    </div>

    @include('includes.scripts')

    @yield('script')

</body>

</html>
