<nav class="navbar navbar-default navbar-fixed-top">
    
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>

        <div class="brand">
            <a href="index.html">SISWAKU</a>
        </div>
        
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('admin/assets/img/user.png') }}" class="img-circle" alt="Avatar"> 
                    <ul class="dropdown-menu">
                        <li><a href="/profile{id}"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                        
                        <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>