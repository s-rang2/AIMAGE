<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            @if(Auth::user()->role->id == 1)
            <li><a class="navbar-brand" href="{{ route('admin.dashboard') }}">AIMAGE</a></li>
        @endif
        @if(Auth::user()->role->id == 2)
        <li><a class="navbar-brand" href="{{ route('author.dashboard') }}">AIMAGE</a></li>
        @endif

        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->
                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>

            </ul>
        </div>
    </div>
</nav>