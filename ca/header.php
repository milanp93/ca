<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="description" content="<?php echo $page_description; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/3.2.1/assets/font-awesome/css/font-awesome.css">

    <title><?php echo $page_title; ?></title>
    <asp:ContentPlaceHolder id="head" runat="server">
    </asp:ContentPlaceHolder>
    <!-- Bootstrap -->
    <link href="StyleSheet.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <div class="container">
    <div class="row jumbotron">
      <div class="col-md-6 col-xs-12">
        <a href="index.php"><img src="images/thecookingorg.png" style="max-height: 200px; width: auto" alt="Logo" /></a>
      </div><!--col-md-6-->
      <div class="col-md-6 col-xs-12 input-group">
        <div id="custom-search-input">
          <div class="input-group col-md-12" style="align-content: center;">
            <input type="text" class="form-control input" placeholder="Search from our 10,000+ Recipes around the world" />
            <span class="input-group-btn">
              <button class="btn btn-info btn-lg" type="button">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </span>
          </div>
        </div>
      </div>
    </div><!--row-->
    <div class="row">