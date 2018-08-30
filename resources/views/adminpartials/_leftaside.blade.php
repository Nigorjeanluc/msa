<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/admin/dist/img/userAvatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name }}</p>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i> <span>Admins</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('admin.register') }}"><i class="fa fa-circle-o"></i> Register new administrators</a></li>
                <li><a href="{{ route('admin.admins') }}"><i class="fa fa-circle-o"></i> All admins</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Hiring</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('books.create') }}"><i class="fa fa-circle-o"></i> Add a job offer</a></li>
                <li><a href="{{ route('books.index') }}"><i class="fa fa-circle-o"></i> All job offers</a></li>
              </ul>
            </li>
            <li class="treeview">
                <a href="{{ route('admin.messages') }}">
                  <i class="fa fa-envelope"></i> <span>Applications</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-orange">{{ count($userNum) }}</small>
                  </span>
                </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pencil-square"></i>
                <span>News</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('shorts.create') }}"><i class="fa fa-circle-o"></i> Add news article</a></li>
                <li><a href="{{ route('shorts.index') }}"><i class="fa fa-circle-o"></i> All news article</a></li>
              </ul>
            </li>
            <li class="treeview">
                <a href="{{ route('admin.messages') }}">
                  <i class="fa fa-envelope"></i> <span>Messages</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-green">{{ count($userNum) }}</small>
                  </span>
                </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
    