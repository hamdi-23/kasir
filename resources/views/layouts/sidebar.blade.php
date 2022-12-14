 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">{{ config('app.name') }} </div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item @yield('dasboard')">
         @section('nav-item')
         <a class="nav-link" href="{{ url('/') }}">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
         @show
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         ADMIN
     </div>
     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item ">

         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-table"></i>
             <span>MASTER</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item @yield('category')" href="{{ route('category.data') }}">Category</a>

                 <a class="collapse-item" href="cards.html">Product</a>
                 <a class="collapse-item" href="cards.html">Member</a>
                 <a class="collapse-item" href="cards.html">Supplier</a>
             </div>
         </div>
     </li>

     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>TRANSAKSI</span>
         </a>
         <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <a class="collapse-item" href="utilities-color.html">Pengeluaran</a>
                 <a class="collapse-item" href="utilities-border.html">Pembelian</a>
                 <a class="collapse-item" href="utilities-animation.html">Penjualan</a>
                 <a class="collapse-item" href="utilities-other.html">Transaksi Lama</a>
                 <a class="collapse-item" href="cards.html">Transaksi Baru</a>

             </div>
         </div>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         REPORT
     </div>
     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link" href="charts.html">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Laporan</span></a>
     </li>
     <div class="sidebar-heading">
         SYSTEM
     </div>
     <li class="nav-item">
         <a class="nav-link" href="charts.html">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Users</span></a>
         <a class="nav-link" href="charts.html">
             <i class="fas fa-fw fa-cog"></i>
             <span>Settings</span></a>
     </li>


     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

     <!-- Sidebar Message -->
     <div class="sidebar-card d-none d-lg-flex">
         <img class="sidebar-card-illustration mb-2" src="{{ asset('template/img/undraw_rocket.svg') }}" alt="...">

         <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
         <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
     </div>

 </ul>
