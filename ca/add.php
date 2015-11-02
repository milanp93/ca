<?php $page_title = "Food &amp; Recipes Web Template - Home";
$page_description = "Food &amp; Recipes Web Template"; ?>
<?php include('header.php'); ?>
          <div class="col-md-8">
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="recipes.php">A to Z Recipes</a></li>
                    <li><a href="featured.php">Featured Recipes</a></li> 
                    <li><a href="videos.php">Videos</a></li> 
                    <li class="active"><a href="about.php">About</a></li> 
                    <li><a href="blog.php">Blog</a></li>
                  </ul>
                </div><!--collapse-->
              </div><!--container-fluid-->
            </nav>

  <div class="row">
    <div class="col-md-12">
      <div class="content">
        
		  <h4><center>creat a recipe</center></h4>
	      <p>
            Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What&#39;s more, they&#39;re absolutely free! You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you agree with the <a class="pages" href="http://www.freewebsitetemplates.com/about/terms">Terms of Use</a>. You can even remove all our
		  </p>
      </div>
      <div class="col-md-12 content">
<div class="col-md-12" style="border-TOP-style: double;"></div>
        <div class="col-md-12"><h4>Recipe Name</h4><br><input type="text" class="form-control input-md" placeholder="Text input"><br></div>
        
        

  <div class="col-md-4"><div class="col-md-12"><h4>serving(s)</h4></div>    <div class="input-group">
      
      <input type="number" class="form-control" id="exampleInputAmount replyNumber" min="0" step="1"  data-bind="value:replyNumber" placeholder="Amount">
      <div class="input-group-addon">serving(s)</div>
    </div></div>
  <div class="col-md-4"><div class="col-md-12"><h4>cook time</h4></div>    <div class="input-group">
      <div class="input-group-addon"><i class="icon-time"></i></div>
      <input type="number" class="form-control" id="exampleInputAmount replyNumber" min="0" step="1"  data-bind="value:replyNumber" placeholder="Amount">
      <div class="input-group-addon">mins</div>
    </div></div>
  <div class="col-md-4"><div class="col-md-12"><h4>prep time</h4></div>    <div class="input-group">
      <div class="input-group-addon"><i class="icon-time"></i></div>
      <input type="number" class="form-control" id="exampleInputAmount replyNumber" min="0" step="1"  data-bind="value:replyNumber" placeholder="Amount">
      <div class="input-group-addon">mins</div>
    </div></div>

<div class="col-md-12">
<h4>METHOD:</h4></div>
<div class="col-md-12">
<textarea class="form-control" rows="5"></textarea>
</div>
<div class="col-md-6">
<h4>Recipe Ingredients</h4><br>
 </div>
<div class="col-md-6">
<h4>Recipe Ingredients</h4><br>
 </div>

<div class="col-md-12">
<textarea class="form-control" rows="5"></textarea>
 </div>
<div class="col-md-12" style="border-TOP-style: double;"></div>

<div class="col-md-4"></div>
<div class="col-md-4">
<label class="control-label">Select File</label>
<input id="input-1" type="file" class="file">
</div>
<div class="col-md-4"></div>

<div class="col-md-12" style="border-TOP-style: double;"></div>
<div class="col-md-4"></div>
<div class="col-md-4"><label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox2" value="option2"> yes this can be  public Recipe
</label>
<label class="checkbox-inline">
  <input type="checkbox" id="inlineCheckbox3" value="option3"> no this is a private Recipe
  </label>

</div>

<div class="col-md-4"></div>
<div class="col-md-12"></div>


<div class="col-md-4"></div>
<div class="col-md-4"><input class="btn btn-default" type="submit" value="Submit the Recipe"></div>
<div class="col-md-4"></div>




      </div>
      
      
      
      
      
    </div>
    
  </div>
          </div><!--col-md-8 (content)-->

<?php include('sidebar.php'); ?>
<?php include('footer.php'); ?>