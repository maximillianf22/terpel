<header class="main-header" style="background-image: linear-gradient(to right top, #de0101, #ce0101, #bf0001, #b00001, #a10000);">
  <a href="/" class="logo">
    <b class="logo-mini">
      <span class="light-logo"><img src="{{asset('assets/images/terpel_1.png')}}" width="35" alt="logo"></span>
    </b>
    <span class="logo-lg">
      <img src="{{asset('assets/images/terpel_2.png')}}" alt="logo" width="125" class="light-logo">
    </span>
  </a>

  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Menu</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('assets/images/default-profile.png')}}" style="background-color: white" class="user-image rounded-circle" alt="Imagen">
          </a>
          <ul class="dropdown-menu scale-up">
            <li class="user-header">
              <img src="{{asset('assets/images/default-profile.png')}}" style="background-color: #ed6f15" class="float-left rounded-circle" alt="Imagen">
              <p>
                Usuario
                <small class="mb-5">123456</small>
                <a href="#" class="btn btn_admin btn-sm btn-rounded btn-block">Ver perfil</a>
              </p>
            </li>
            <li class="user-body">
              <div class="row no-gutters">
                <div class="col-12 text-left">
                  <a href="#"><i class="fa fa-users"></i> Usuarios</a>
                </div>
                <div class="col-12 text-left">
                  <a href="#"><i class="fa fa-address-card"></i> Roles</a>
                </div>
                <div class="col-12 text-left">
                  <a href="#"><i class="fa fa-unlock"></i> Permisos</a>
                </div>
                <div role="separator" class="divider col-12"></div>
                <div class="col-12 text-center">
                  <a href="#" class="btn_logout_admin" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Cerrar sesión</a>
                </div>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
