<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
		
       <img src="_Assets/_images/logo.png" alt="logo" class="img-circle pull-left">
       <a class="navbar-brand" href="?action=">Leading Light Star</a>
        
        <div class="nav-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="?action=">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form form-inline pull-right" action="?action=checklogin" method="post">
            <input type="text" name="un" placeholder="User Name" class="form-control">
            <input type="password" name="pass" placeholder="Password" class="form-control">
            <button type="Submit" value="Login" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </div>