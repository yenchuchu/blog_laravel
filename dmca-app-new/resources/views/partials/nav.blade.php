<nav class="navbar navbar-default  navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">DMCA Sender</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="/notices">Notices</a></li>
            <li class="active"><a href="/notices/create">New Notices</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if(Auth::guest())
              <li><a href="/auth/login">Login</a></li>
              <li><a href="/auth/register">Register</a></li>
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/auth/logout">Logout</a></li>
                </ul>
              </li>
            @endif
        </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>