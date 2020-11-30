<?php 
  function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
  }
?>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="{{url('client')}}" class="brand-link">
    <span class="brand-text font-weight-light">Blog Website</span>
  </a>
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{url('public')}}/img/t-01.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          @if(Auth::check())
            {{request()->user()->nama}}
          @else
            <a href="{{url('login')}}">Silahkan Login</a>
          @endif
        </a>
      </div>
    </div>
    
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
          <a href="{{url('admin/beranda')}}" class="nav-link {{checkRouteActive('beranda')}}">
            <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/artikel')}}" class="nav-link {{checkRouteActive('artikel')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Artikel
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/komentar')}}" class="nav-link {{checkRouteActive('komentar')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Komentar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/user')}}" class="nav-link {{checkRouteActive('user')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                User
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
