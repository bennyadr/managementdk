<ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
              
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw" style="color:white;"></i>  <i class="fa fa-caret-down" style="color:white;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                   
                   {{--      <li class="divider"></li> --}}
                        <li><a href="{{ url('/logout') }}" class="btn btn-default"
                         onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                           Logout
                   </a>

                                        <form  id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
