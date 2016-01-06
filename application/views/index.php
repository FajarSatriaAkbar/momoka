<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin</title>

    <!-- Bootstrap -->
    
    <link href="<?php echo base_url();?>assest/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assest/css/default.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container-fluid display-table">
      <div class="row display-table-row">
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
          <h1 class="hidden-xs hidden-sm"><img src="<?php echo base_url();?>assest/img/logoa.PNG"></h1>
          <ul>
          <li class="link active">
            <a href="<?php echo base_url();?>index.php">
              <span class="glyphicon glyphicon-th" aria-control="true"></span>
              <span class="hidden-xs hidden-sm">Dashboard</span>
            </a>
          </li>


           <li class="link">
            <a href="#collapse-post" data-toggle="collapse" aria-controls="collapse-post">
              <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
              <span class="hidden-xs hidden-sm">Article</span>
              <span class="label label-success pull-right hidden-xs hidden-sm">20</span>
            </a>
            <ul class="collapse collapseable" id="collapse-post">
              <li><a href="<?php echo base_url();?>new-article.php">Create New</a></li>
              <li><a href="<?php echo base_url();?>articles.php">View Article</a></li>
            </ul>
          </li>

          <li class="link">
            <a href="#collapse-comments" data-toggle="collapse" aria-controls="collapse-comments">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            <span class="hidden-xs hidden-sm">Comments</span>
            </a>
            <ul class="collapse collapseable" id="collapse-comments">
              <li>
              <a href="<?php echo base_url();?>approved.php">Approved
                <span class="label label-success pull-right hidden-xs hidden-sm">10</span>
              </a>
              </li>
              <li>
              <a href="<?php echo base_url();?>unapproved.php">Unapproved
                <span class="label label-warning pull-right hidden-xs hidden-sm">20</span>
              </a>
              </li>
            </ul>
          </li>

           <!--<li class="link">
            <a href="commenters.html">
              <span class="glyphicon glyphicon-user" aria-control="true"></span>
              <span class="hidden-xs hidden-sm">Commenters</span>
            </a>
          </li>-->

           <li class="link">
            <a href="<?php echo base_url();?>tags.php">
              <span class="glyphicon glyphicon-tags" aria-control="true"></span>
              <span class="hidden-xs hidden-sm">Tags</span>
            </a>
          </li>
          
          <li class="link setting-btn">
            <a href="<?php echo base_url();?>tags.php">
              <span class="glyphicon glyphicon-cog" aria-control="true"></span>
              <span class="hidden-xs hidden-sm">Settings</span>
            </a>
          </li>
          </ul>

        </div>
        <div class="col-md-10 col-sm-11 display-table-cell valign-top box">
        <div class="row">
          <header id ="nav-header" class="clearfix">
            <div class="col-md-5">
              <nav class="navbar-default pull-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </nav>
              <input type="text" class="hidden-sm hidden-xs" id="header-search-field"placeholder="search" width="100%">
            </div>
            <div class="col-md-7">
              <ul class="pull-right">
                <li id="welcome" class="hidden-xs">Welcome to your administrator area</li>
                <li class="fixed-width">
                  <a href="#">
                    <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                    <span class="label label-warning">3</span>
                  </a>
                </li>

                <li class="fixed-width">
                  <a href="#">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    <span class="label label-message">3</span>
                  </a>
                </li>

                 <li>
                  <a href="#" class="logout">
                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                    log out
                  </a>
                </li>
              </ul>
            </div>
          </header>
        </div>

        <div class="row">
          <footer id="admin-footer" class="clearfix">
            <div class="pull-left"><b>Copyright </b>&copy; 2015</div>
            <div class="pull-right">Admin system</div>
          </footer>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assest/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assest/bootstrap/js/bootstrap.min.js"></script>
   
    <script type="text/javascript" src="<?php echo base_url();?>assest/js/javascript.js"></script>
  </body>
</html>