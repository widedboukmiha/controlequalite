<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->

            <li class="active"><a href="{{ url('demande') }}"><i class='fa fa-link'></i> <span>demande</span></a></li>


            <li class="active"><a href="{{ url('bonrefoulement') }}"><i class='fa fa-link'></i> <span>bonrefoulement</span></a></li>
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Autres</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ url('analyse') }}"><i class='fa fa-link'></i> <span>analyse</span></a></li>

                    <li class="active"><a href="{{ url('article') }}"><i class='fa fa-link'></i> <span>article</span></a></li>

                    <li class="active"><a href="{{ url('certificat') }}"><i class='fa fa-link'></i> <span>certificat</span></a></li>

                    <li class="active"><a href="{{ url('controlleur') }}"><i class='fa fa-link'></i> <span>controlleur</span></a></li>

                    <li class="active"><a href="{{ url('laboratoire') }}"><i class='fa fa-link'></i> <span>laboratoire</span></a></li>

                    <li class="active"><a href="{{ url('exportateur') }}"><i class='fa fa-link'></i> <span>exportateur</span></a></li>

                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
