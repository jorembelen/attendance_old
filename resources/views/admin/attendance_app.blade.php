
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>{{ config('app.name') }}</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
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
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="admin/files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="admin/files/assets/icon/icofont/css/icofont.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="admin/files/assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- Syntax highlighter Prism css -->
    <link rel="stylesheet" type="text/css" href="admin/files/assets/pages/prism/prism.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="admin/files/assets/css/style.css">
</head>
<!-- Menu horizontal icon fixed -->

<body class="horizontal-icon-fixed">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <!-- [ Pre-loader ] end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- [ Header ] start -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="/home">
                        <h5>{{ config('app.name') }}</h5>
                        </a>
                     
                                    
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                              

                         <!-- Default ordering table start -->
                         <div class="card">
                        @include('sweetalert::alert')
                                                    <div class="card-header">
                                                    <h2>Attendance Viewer</h2>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="cbtn-selectors" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>SN</th>
                                                                        <th>Date</th>
                                                                        <th>Employees Name</th>
                                                                        <th>Time In</th>
                                                                        <th>Time Out</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach ($timeIns as $timeIn) 
                                                                    <tr>
                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td>{{ $timeIn->in_date ? $timeIn->in_date->format('M-d-Y') : null }}</td>  
                                                                        <td>{{ $timeIn->employees->name }}</td>
                                                                        <td>{{ date('h:i A', strtotime($timeIn->time_in)) }}
                                                                            @if( $timeIn->in_status == 1 )
                                                                            @else
                                                                                <button class="label label-danger"> Late</button>
                                                                            @endif
                                                                        </td>
                                                                        <td>{!! $timeIn->time_out ? date('h:i A', strtotime($timeIn->time_out)) : null !!}
                                                                            @if( $timeIn->out_status == 1 )
                                                                            @else( $timeIn->out_status == '0' )
                                                                                <button class="label label-danger"> Early Out</button>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>SN</th>
                                                                        <th>Date</th>
                                                                        <th>Employees Name</th>
                                                                        <th>Time In</th>
                                                                        <th>Time Out</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Default ordering table end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <img src="admin/files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="admin/files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="admin/files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="admin/files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="admin/files/assets/images/browser/ie.png" alt="">
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
    <script type="text/javascript" src="admin/files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="admin/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="admin/files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="admin/files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- waves js -->
    <script src="admin/files/assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="admin/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="admin/files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="admin/files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <!-- Syntax highlighter prism js -->
    <script type="text/javascript" src="admin/files/assets/pages/prism/custom-prism.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="admin/files/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="admin/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="admin/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="admin/files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>

    <script src="admin/files/assets/js/pcoded.min.js"></script>
    <script src="admin/files/assets/js/vertical/menu/menu-hori-fixed.js"></script>
    <script src="admin/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="admin/files/assets/js/script.js"></script>

</body>
</html>
