 
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Asset Mngt Kns</span>
  </a>

<div class="sidebar">
    

    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="/" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
               Dashboard
              {{-- <i class="right fas fa-angle-left"></i> --}}
            </p>
          </a>
          
        </li>
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-barcode fa-fw" aria-hidden="true"></i>
            <p>
              Assets
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">5</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/deployed" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> Deployed</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/ready-to-deploy" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ready to Deploy</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/pending" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pending</p>
              </a>
            </li>
            <!-- <li class="nav-item">
                <a href="/requestrables" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Requestables</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="/due-for-audit" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Due for Audit</p>
                </a>
              </li>
            
            
          </ul>
        </li>
        <li class="nav-item">
          <a href="/licences" class="nav-link">
            <i class="far fa-save fa-fw"></i>
            <p>
                Licences
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/components" class="nav-link">
            <i class="far fa-hdd fa-fw"></i>
            <p>
                Components
              
            </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-keyboard fa-fw"></i>
              
              <p>
                  Accesories
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/consumables" class="nav-link">
              <i class="fas fa-tint fa-fw"></i>
              <p>
                  Consumables
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-users fa-fw"></i>
              <p>
                     People
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/company" class="nav-link">
              <i class="fa fa-laptop fa-fw"></i>
              <p>
                  Company
                
              </p>
            </a>
          </li>
        
        
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside>