<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 100vh; background-color: white;">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <i class="fa fa-cog"></i>
      <span class="brand-text font-weight-light">Gestion de congé</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <i class="fa fa-user"></i>
        </div>
        <div class="info">
          <a href="#" class="d-block">{{  Auth::user()->email}}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      @if(Auth::user()->grade == "agent administratif")
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item ">
            <a href="{{ url('users') }}" class="nav-link {{ Request::is('admin/users') ? 'active' : '' }} ">
              <i class="fa fa-bars"></i>
              <p>
                Les utilisateurs
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ url('employes') }}" class="nav-link {{ Request::is('employes') ? 'active' : '' }} ">
              <i class="fa fa-users"></i>
              <p>
                Employés
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('conges')}}" class="nav-link {{ Request::is('conges') ? 'active' : '' }}">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Congés
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ url('secretaires')}}" class="nav-link {{ Request::is('secretaires') ? 'active' : '' }}">
              <i class="fa fa-tasks"></i>
              <p>
                Secretaires
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ url('retraites')}}" class="nav-link {{ Request::is('retraites') ? 'active' : '' }}">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Gérer les retraites
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ url('contacts')}}" class="nav-link {{ Request::is('admin/contacts') ? 'active' : '' }}">
              <i class="fa fa-envelope-open"></i>
              <p>
                Contacts
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ url('droits')}}" class="nav-link {{ Request::is('admin/contacts') ? 'active' : '' }}">
              <i class="fa fa-lightbulb-o"></i>
              <p>
                Droit de congés
              </p>
            </a>
          </li>
        </ul>
      </nav>
      @endif
      @if(Auth::user()->grade == "directeur")
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item  ">
                <a href="{{ url('historiques') }}" class="nav-link {{ Request::is('employes') ? 'active' : '' }} ">
                  <i class="nav-icon fa fa-dashboard"></i>
                  <p>
                    Historiques
                  </p>
                </a>
              </li>
              <li class="nav-item  ">
            <a href="{{ url('soldes') }}" class="nav-link {{ Request::is('soldes') ? 'active' : '' }} ">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Solde des employés
              </p>
            </a>
          </li>
          <li class="nav-item  ">
            <a href="{{ url('employes') }}" class="nav-link {{ Request::is('employes') ? 'active' : '' }} ">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Employés
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('conges')}}" class="nav-link {{ Request::is('conges') ? 'active' : '' }}">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Congés
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ url('contacts')}}" class="nav-link {{ Request::is('admin/contacts') ? 'active' : '' }}">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Contacts
              </p>
            </a>
          </li>
        </ul>
      </nav>
      @endif
      @if(Auth::user()->grade == "employe")
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item  ">
            <a href="{{ url('historiques') }}" class="nav-link {{ Request::is('employes') ? 'active' : '' }} ">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Historiques
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('conges')}}" class="nav-link {{ Request::is('conges') ? 'active' : '' }}">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Congés
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/soldes/employe')}}" class="nav-link {{ Request::is('conges') ? 'active' : '' }}">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Consulter mon solde
              </p>
            </a>
          </li>
          <!--  -->
          <li class="nav-item ">
            <a href="{{ url('contacts')}}" class="nav-link {{ Request::is('contacts') ? 'active' : '' }}">
              <i class="fa fa-envelope-square"></i>
              <p>
                Contacts
              </p>
            </a>
          </li>
        </ul>
      </nav>
      @endif
      @if(Auth::user()->grade == "secretaire")
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item  ">
            <a href="{{ url('soldes') }}" class="nav-link {{ Request::is('soldes') ? 'active' : '' }} ">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Solde des employés
              </p>
            </a>
          </li>
          <li class="nav-item  ">
            <a href="{{ url('historiques') }}" class="nav-link {{ Request::is('employes') ? 'active' : '' }} ">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Historiques
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{ url('contacts')}}" class="nav-link {{ Request::is('contacts') ? 'active' : '' }}">
              <i class="fa fa-envelope-square"></i>
              <p>
                Contacts
              </p>
            </a>
          </li>
        </ul>
      </nav>
      @endif
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
