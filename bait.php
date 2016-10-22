<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>ONEZERO Designs</title>

<!-- Vendor Core CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- Extra CSS -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.9/magnific-popup.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>



<body>

<!-- NAVBAR - TOP
================================================== -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="modal" data-target="#mobileMenu" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php"><img src="img/ONEZERO-LOGO.png" width="40" height="40" alt="onezero logo"></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="hidden-xs"><a href="bait.php">BAIT</a></li>
        <li class="hidden-xs"><a href="project-page.php">WORKS</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> </nav>




<!-- Page Content
================================================== -->





    <main id="myCarousel" class="carousel slide">


        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="active">


                <header id="header" class="portfolio-header clearfix hidden ">
                    <script id="profile-template" type="text/x-handlebars-template">
                        <figure class="profile-avatar"><img src="{{user.images.[138]}}" alt=""></figure>
                                <h1 class="profile-name">{{user.display_name}}</h1>
                                <div class="profile-fields">
                                    <ul class="field-list">
                                        {{#each user.fields}}
                                            <li class="field-item">{{this}}</li>
                                        {{/each}}
                                    </ul>
                                </div>
                        <div class="profile-location fi-marker">{{user.city}}, {{user.country}}</div>
                    </script>
              </header>



                <!-- PORTFOLIO -->
                  <main id="portfolio" class="portfolio-area clearfix">      
                      <script id="portfolio-template" type="text/x-handlebars-template">
                               

                      <ul class="portfolio-list clearfix">
                        <!-- Intro Box -->
                        <div class="col-lg-4 col-md-12">
                        <li class="portfolio-item intro-box">  
                                <div class="portfolio-content">
                                    <ol class="list-bait">
                                      <li>B</li>
                                      <li>A</li>
                                      <li>I</li>
                                      <li>T</li>
                                    </ol>
                                    <hr class="lite">
                                    <h2> Project BAIT </h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc velit urna, tempor eu sagittis quis, volutpat vitae elit. Vestibulum vulputate cursus ex sed molestie. </p>
                                </div>
                         </li>
                         </div>
                          {{#each projects}}
                          <div class="col-lg-4 col-md-12">
                          <li class="portfolio-item">  
                                <div class="portfolio-content">
                                <a href="project-page.php?project={{this.id}}">
                                    <figure class="portfolio-cover" title="{{this.name}}" data-project-id="{{this.id}}">
                                        {{#if this.covers.[404]}}
                                        <img class="portfolio-image" src="{{this.covers.[404]}}" alt="">
                                        {{else}}
                                            {{#if this.covers.[230]}}
                                            <img class="portfolio-image" src="{{this.covers.[230]}}" alt="">
                                            {{else}}
                                            <img class="portfolio-image" src="{{this.covers.[202]}}" alt="">
                                            {{/if}}
                                        {{/if}}
                                    </figure>
                                    </a>
                                 </div>
                          </li>
                          </div>
                          {{/each}}
                      </ul>
                      </script>
                  </main>
            </div> 


        </div>

        <!-- Controls -->
        <div class="visible-xs">
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
        </div>
        
        <!-- Contact Details -->
        <div class="onezero-contact-details hidden-xs"> (+44) 7749326414 &nbsp; &#124; &nbsp; info@onezerodesign.co.uk </div>

    </main>


<!-- Menu Mobile - Modal -->
<div class="modal fade" id="mobileMenu" tabindex="-1" role="dialog" aria-labelledby="mobileMenuLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img src="img/ONEZERO-LOGO-OPAC.png" width="40" height="40" alt="onezero logo">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p class="text-lg text-caps text-fat font-change">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
        
        <form class="form-horizontal">
            <fieldset>
            <hr>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-xs-1 control-label" for="email">Email</label>  
              <div class="col-xs-12">
              <input id="textinput" name="email" type="text" class="form-control input-md">
                <hr>
              </div>
              
            </div>
            
            <!-- Textarea -->
            <div class="form-group">
              <label class="col-xs-1 control-label" for="message">Message</label>
              <div class="col-xs-12">                     
                <textarea class="form-control" id="message" rows="3"></textarea>
                <hr>
              </div>
              
            </div>
            
            </fieldset>
    </form>
       
        <a class="btn btn-block btn-transparent text-caps text-fat font-change">SEND</a>
      </div>
    </div>
  </div>
</div>

<!-- Contact Destkop - Modal -->
<div class="modal fade" id="contactMenu" tabindex="-1" role="dialog" aria-labelledby="contactMenuLabel">
    <button type="button" class="close onezero-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <div class="onezero-text pull-left">onezero</div>
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        
          <div class="modal-header">
            <img src="img/ONEZERO-LOGO-OPAC.png" width="30" height="30" alt="onezero logo"> <span class="logo-typeface">ONEZERO</span>
            <hr class="hr-lg-adjust">
          </div>  
          <div class="modal-body">
            <p class="text-xlg text-caps text-fat font-change">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
            
            <form class="form-horizontal">
                <fieldset>
                <hr class="hr-lg-adjust">
                <!-- Text input-->
                <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-xs-10 control-label" for="email">Email</label>  
                      <div class="col-xs-12">
                      <input id="textinput" name="email" type="text" class="form-control input-md">
                        
                      </div>
                    </div>
                </div>
                
                <!-- Textarea -->
                <div class="col-sm-6 border-left">
                    <div class="form-group">
                      <label class="col-xs-10 control-label" for="message">Write Something</label>
                      <div class="col-xs-12">                     
                        <textarea class="form-control" id="message" rows="3"></textarea>
                      </div>
                    </div>
                </div>
                
                </fieldset>
                
                <hr>
           
            <a class="btn btn-block btn-transparent text-caps text-fat font-change">SEND</a>
                
                
        </form>
            
          </div>
        </div>
      </div>
</div>


<!-- NAVBAR - Bottom
================================================== -->
<footer>
  <nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container"> 

        <div class="collapse navbar-collapse">
           <ul class="nav navbar-nav navbar-left">
            
            <li class="hidden-xs"><a href="#" class="square-link"  data-toggle="modal" data-target="#contactMenu" aria-expanded="false"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="hidden-xs"><a href="#" class="square-link"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></li>
          </ul>
        </div>

          <div class="row">
          <div class="col-lg-6 col-xs-6 ">
            <li class="visible-xs text-left"><a href="#" class="square-link">BAIT</a></li>
          </div>
          <div class="col-lg-6 col-xs-6">
            <li class="visible-xs text-right"><a href="#" class="square-link">WORK</a></li>
          </div>
        </div>
      </div>
  </nav>
</footer>





<!-- jQuery --> 
<script src="js/modernizr.js"></script> <!-- Modernizr -->
<script src="js/jquery.js"></script> 

<!-- Popup -->
<script src="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.9/jquery.magnific-popup.min.js"></script>

<!-- Handlebars JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.3.0/handlebars.min.js"></script>

<!-- Behance API Call -->
<script src="js/behance-api.js"></script>

<!-- Bootstrap Core JavaScript --> 
<script src="js/bootstrap.min.js"></script> 

<!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

<!-- Scrolling Nav JavaScript --> 
<script src="js/jquery.easing.min.js"></script> 

</body>
</html>
