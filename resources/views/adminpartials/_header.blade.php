<header class="main-header">
        <!-- Logo -->
        <a href="{{ route('admin.dashboard') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>MSA</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Control Board | </b>MSA</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
    
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">{{ count($messages) }}</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have {{ count($messages) }} messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <!-- start message -->
                      @forelse ($messages as $message)
                      <li>
                        <a href="{{ route('admin.messages.show', $message->id) }}">
                          <div class="pull-left">
                            <img src="/admin/dist/img/userAvatar.png" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                              {{ ucfirst($message->name) }}
                            <small><i class="fa fa-clock-o"></i> {{ date('M j, Y h:i A', strtotime($message->created_at)) }}</small>
                          </h4>
                          <p>{{ substr(strip_tags($message->message), 0, 30) }}{{ strlen(strip_tags($message->message)) > 30 ? '...' : "" }}</p>
                        </a>
                      </li>
                      @empty
                      <li>
                        <a href="{{ route('admin.messages') }}">
                          <h4>
                              No new messsages received
                          </h4>
                        </a>
                      </li>

                      @endforelse
                      <!-- end message -->
                    </ul>
                  </li>
                  <li class="footer"><a href="{{ route('admin.messages') }}">See All Messages</a></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/admin/dist/img/userAvatar.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/admin/dist/img/userAvatar.png" class="img-circle" alt="User Image">
    
                    <p>
                        {{ Auth::User()->name }} - {{ Auth::User()->job_title }}
                      <small>Member since {{ date('M j, Y', strtotime(Auth::User()->created_at)) }}</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <!--<a href="#" class="btn btn-default btn-flat">Sign out</a>-->
                      
                        <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>