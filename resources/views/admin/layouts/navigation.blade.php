 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href=""><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href=""><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">

          @include('admin/layouts/header')
          
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="/admin">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('user.list') }}">
              <span class="menu-icon">
                <i class="mdi-account-circle"></i>
              </span>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.products') }}">Product List</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.category') }}">Category</a></li>
              </ul>
            </div>
          </li>
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="/admin/customers">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Customer</span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin.orders')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Oders</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.transactions')}}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Transactions</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.daily_reports')}}"> Daily Reports </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.weekly_reports')}}"> Weekly Reports </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.monthly_reports')}}"> Monthly Reports </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.annual_reports')}}"> Anual Reports </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.settings')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Setting</span>
            </a>
          </li> 
        </ul>
      </nav>