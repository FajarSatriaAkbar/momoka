<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Article</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assest/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assest/css/default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assest/css/article.css">
  
  </head>
  <body>

     <div class="container-fluid display-table">
      <div class="row display-table-row">
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
          <h1 class="hidden-xs hidden-sm"><img src="<?php echo base_url();?>assest/img/logoa.PNG"></h1>
          <ul>
          <li class="link">
            <a href="<?php echo base_url();?>index.php">
              <span class="glyphicon glyphicon-th" aria-control="true"></span>
              <span class="hidden-xs hidden-sm">Dashboard</span>
            </a>
          </li>


           <li class="link active">
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

        <div id="content">
          <header class="clearfix">
            <h2 class="page_title pull-left">All Article</h2>
            <button type="button" class="btn btn-xs btn-primary pull-right">Crate new article</button>

          </header>

          <div class="content-inner">
            <div class="row search-row">
              <div class="col-md-12">
                <div class="input-group">
                  <input type="text" class="form-control search-field" id="search" placeholder="Search">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-primary" id="go">Go!</button>
                  </span>
                </div>
              </div>
            </div>

            <div class="row article-row">
              <div class="col-xs-2 col-sm-1 col-md-1 status-padding">
                <span class="label label-success label-sm">Active</span>
              </div>
              <div class="col-xs-10 col-sm-6 col-md-8 article-title">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <small>Minggu, 35 desember 2015</small>
              </div>
              <div class="col-xs-10 col-sm-5 col-md-3 col-xs-offset-2 col-sm-offset-0 col-md-offset-0 col-lg-offset-0">
                <div class="article-actions">
                  <a href="" class="btn btn-xs btn-default" role="button">
                    <span class="glyphicon glyphicon-folder-open">&nbsp;View</span>
                  </a>
                  <a href="" class="btn btn-xs btn-default" role="button">
                    <span class="glyphicon glyphicon-pencil">&nbsp;Edit</span>
                  </a>
                  <a href="" class="btn btn-xs btn-default" role="button">
                    <span class="glyphicon glyphicon-remove">&nbsp;Hapus</span>
                  </a>

                </div>
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-md-12">
                <nav>
                  <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </nav>
              </div>
            </div>

          </div>
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
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assest/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assest/js/javascript.js"></script>

  </body>
</html>