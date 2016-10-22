<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>ONEZERO Design</title>

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

<!-- Header  WORKS-->
<header id="header" class="portfolio-header clearfix">
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
        {{#each projects}}
        <li class="portfolio-item">  
              <div class="portfolio-content">
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
                  <h2 class="portfolio-title">{{this.name}}</h2>
                  <div class="portfolio-fields">
                      <ul class="field-list">
                      {{#each this.fields}}
                          <li class="field-item">{{this}}</li>
                      {{/each}}
                      </ul>
                  </div>
               </div>
        </li>
        {{/each}}
    </ul>
    </script>
</main>


<!-- jQuery --> 
<script src="js/modernizr.js"></script> 
<script src="js/jquery.js"></script> 

<!-- Popup -->
<script src="//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.9/jquery.magnific-popup.min.js"></script>

<!-- Handlebars JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.3.0/handlebars.min.js"></script>

<!-- Behance API Call -->
<script src="js/behance-api.js"></script>

<!-- Bootstrap Core JavaScript --> 
<script src="js/bootstrap.min.js"></script> 

<!-- Scrolling Nav JavaScript --> 
<script src="js/jquery.easing.min.js"></script> 





</body>
</html>
