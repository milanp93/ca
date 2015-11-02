<?php $page_title = "Food &amp; Recipes Web Template - Home";
$page_description = "Food &amp; Recipes Web Template"; ?>
<?php include('header.php'); ?>
          <div class="col-md-8">
<!--insert content here -->
            <nav class="navbar navbar-default" style="margin: 0;">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                  </button>
                </div><!--navbar-header-->
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav" style="width: 100%; display: table;">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="recipes.php">A to Z Recipes</a></li>
                    <li><a href="featured.php">Featured Recipes</a></li> 
                    <li><a href="videos.php">Videos</a></li> 
                    <li><a href="about.php">About</a></li> 
                    <li><a href="blog.php">Blog</a></li>
                  </ul>
                </div><!--collapse-->
              </div><!--container-fluid-->
            </nav>

        <div class="row">
          <div class="col-md-12">
            <a href="blog.php"><img src="images/turkey.jpg" alt="Image" /></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar navbar-bottom">
                  <ul class="nav navbar-nav">
                    <li class="active">
            		  <a href="blog.php"><img src="images/holi-turkey.jpg" alt="Image"></a>
						<h2 class="bottomNav"><a href="blog.php">Holy Turkey</a></h2>
						<p>
						  This is just a place holder
						</p>
                    </li>
                    <li>
                      <a href="blog.php"><img src="images/fruits-and-bread.jpg" alt="Image"></a>
						<h2><a href="blog.php">Fruits &amp; Bread</a></h2>
						<p>
						  This is just a place holder
						</p>
                    </li>
                    <li>
                      <a href="blog.php"><img src="images/dessert.jpg" alt="Image"></a>
					    <h2><a href="blog.php">Dessert</a></h2>
						<p>
						  This is just a place holder
						</p>
                    </li>
                  </ul>
            </nav>
          </div><!--col-md-12-->
        </div><!--row-->
        <div class="row">
          <div class="col-md-6">
            <div class="index-grid">
              <h2><a href="featured.php">Featured Recipes</a></h2>
              <a href="featured.php"><img src="images/featured.jpg" alt="Image"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="index-grid">
              <h2><a href="featured.php">A to Z Recipes</a></h2>
              <a href="recipes.php"><img src="images/a-z.jpg" alt="Image"></a>
            </div>
          </div>
        </div><!--row-->
        <div class="row">
          <div class="col-md-6">
            <div class="index-grid">
              <h2><a href="featured.php">Videos</a></h2>
              <a href="videos.php"><img src="images/videos.jpg" alt="Image"></a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="index-grid">
              <h2><a href="featured.php">Blog</a></h2>
              <a href="blog.php"><img src="images/blog.jpg" alt="Image"></a>
            </div>
          </div>
        </div><!--row-->
          </div><!--col-md-8 (content)-->

<?php include('sidebar.php'); ?>
<?php include('footer.php'); ?>