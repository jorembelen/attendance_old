
                    <!-- [ navigation menu ] start -->
                    <nav class="pcoded-navbar">

                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigation-label">Navigation</div>
                                <ul class="pcoded-item pcoded-left-item">

                              
                                    <!-- [ menu ] start -->
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                                            <span class="pcoded-mtext">Employees Management</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                            <a href="/employees#!" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Employees List</span>
                                                <span class="pcoded-badge label label-warning">{{$data[0]}}</span>
                                            </a>
                                            </li>
                                        </ul>
                                    </li>
                                  <!-- [menu ] end -->

                                       <!-- [ menu ] start -->
                                       <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-desktop"></i></span>
                                        <span class="pcoded-mtext">System Management</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="/departments#!" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Departments</span>
                                                <span class="pcoded-badge label label-warning">{{$data[6]}}</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="/positions#!" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Positions</span>
                                                <span class="pcoded-badge label label-danger">{{$data[5]}}</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="/checkIns#!" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Late CheckIn Rules</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="/checkOuts#!" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Early CheckOut Rules</span>
                                            </a>
                                        </li>
                                        </ul>
                                    </li>
                                  <!-- [menu ] end -->


                                 <!-- [ menu ] start -->
                                  <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-calendar-check-o"></i></span>
                                        <span class="pcoded-mtext">Daily Monitoring</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                        <li class=" ">
                                        <a href="/attendance_today#!">
                                            <span class="pcoded-mtext">Attendance Today</span>
                                            <span class="pcoded-badge label label-warning">{{$data[4]}}</span>
                                        </a>
                                        </li>
                                        
                                        <li class=" ">
                                        <a href="/onTime#!">
                                            <span class="pcoded-mtext">On Time Today</span>
                                            <span class="pcoded-badge label label-danger">{{$data[1]}}</span>
                                        </a>
                                        </li>
                                        
                                        <li class=" ">
                                            <a href="/late#!">
                                                <span class="pcoded-mtext">Late Today</span>
                                        <span class="pcoded-badge label label-success">{{$data[2]}}</span>
                                            </a>
                                            </li>
                                        </ul>
                                    </li>
                                  <!-- [menu ] end -->

                                    <!-- [ menu ] start -->
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="fa fa-clock-o"></i></span>
                                        <span class="pcoded-mtext">Attendance Report</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                      
                                        <li class="">
                                            <a href="/timeIn#!" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Time In</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="/timeOut#!" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Time Out</span>
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="/attendance#!" class="waves-effect waves-dark">
                                                <span class="pcoded-mtext">Attendance</span>
                                            </a>
                                        </li>

                                        </ul>
                                    </li>
                                  <!-- [menu ] end -->

                                    <!-- [ menu ] start -->
                                   
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="fa fa-user"></i></span>
                                            <span class="pcoded-mtext">User Management</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                        @if(auth()->user()->role != 0) 
                                            <li class="">
                                                <a href="/user#!" class="waves-effect waves-dark">
                                                      <span class="pcoded-mtext">Admin Users</span>
                                                      <!-- <span class="pcoded-badge label label-warning">{{$data[7]}}</span> -->
                                                  </a>
                                            </li>
                                            @endif
                                            <li class="">
                                                <a href="/appUser#!" class="waves-effect waves-dark">
                                                      <span class="pcoded-mtext">App Users</span>
                                                      <!-- <span class="pcoded-badge label label-danger">{{$data[8]}}</span> -->
                                                  </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- [menu ] end -->
                                    @if(auth()->user()->role != 0) 
                                    <!-- [ menu ] start -->
                                    <li class="pcoded-hasmenu">
                                        <a href="/settings#!" class="nav-link">
                                            <span class="pcoded-micon"><i class="fa fa-cogs"></i></span>
                                            <span class="pcoded-mtext">Settings</span>
                                        </a>
                                    </li>
                                  <!-- [menu ] end -->
                                  @endif
                                </ul>
                                
                            </div>
                        </div>
                    </nav>
                    <!-- [ navigation menu ] end -->