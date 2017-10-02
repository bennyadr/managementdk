<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <img src="{{asset('img/koko1.png')}}" width="221">
            </li>
            <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                <a href="{{ url ('') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li {{ (Request::is('proyek') ? 'class="active"' : '') }}>
                <a href="{{ url ('proyek') }}"><i class="fa fa-file-o fa-fw"></i> Proyek</a>
            </li>
            <li>
                <li {{ (Request::is('hosting') ? 'class="active"' : '') }}>
                    <a href="{{ url ('hosting') }}"><i class="fa fa-cogs fa-fw"></i> Pelanggan Hosting</a>
                </li>
                <li {{ (Request::is('server') ? 'class="active"' : '') }}>
                    <a href="{{ url ('server') }}"><i class="fa fa-server fa-fw"></i> Dokumentasi Server</a>
                </li>
                 @if(Auth::user()->role =='pm')
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('report-proyek') ? 'class="active"' : '') }}>
                            <a href="{{ url ('report-proyek') }}"><i class="fa fa-area-chart fa-fw"></i> Laporan Data Proyek</a>
                        </li>
                        <li {{ (Request::is('report-hosting') ? 'class="active"' : '') }}>
                            <a href="{{ url ('report-hosting') }}"><i class="fa fa-area-chart fa-fw"></i> Laporan Data Hosting</a>
                        </li>
                        <li {{ (Request::is('report-pelanggan') ? 'class="active"' : '') }}>
                            <a href="{{ url ('report-pelanggan') }}"><i class="fa fa-area-chart fa-fw"></i> Laporan Jumlah Data Pelanggan</a>
                        </li>
                    </ul>
                </li>
                @endif
                
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Master<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('pelanggan') ? 'class="active"' : '') }}>
                            <a href="{{url('pelanggan')}}"><span class="fa fa-child fa-fw"></span> Pelanggan</a>
                        </li>
                        @if(Auth::user()->role == 'pm')
                        <li {{ (Request::is('pengguna') ? 'class="active"' : '') }}>
                            <a href="{{url('pengguna')}}"><span class="fa fa-user fa-fw"></span> Pengguna</a>
                        </li>
                        @endif
                        <li {{ (Request::is('group') ? 'class="active"' : '') }}>
                            <a href="{{url('group')}}"><span class="fa fa-group fa-fw"></span> Grup</a>
                        </li>
                        <li {{ (Request::is('vendor') ? 'class="active"' : '') }}>
                            <a href="{{url('vendor')}}"><span class="fa fa-group fa-fw"></span> Vendor</a>
                        </li>
                        <li {{ (Request::is('paket') ? 'class="active"' : '') }}>
                            <a href="{{url('paket')}}"><span class="fa fa-server fa-fw"></span> Paket Hosting</a>
                        </li>
                    </ul>
                </li>
                
                
                
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>