<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="author" content="George Ndirangu, ndirangu.mepawa@gmail.com, +254746649576">
    <meta name="keywords" content="arts circle, creative industry">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home :: The Arts Circle</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <meta name="descrition" content="The Arts Circle is lorem">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    
   
</head>
<body>
    
    <!-- top ribbon -->
    <div class="container-fluid top-ribbon text-center">
        <a href="#"><i class="fab fa-whatsapp"></i><cms:editable name='whatsapp_no' label='Whatsapp Number' type='text'> +254787226306</cms:editable></a>
    </div>

    <!-- main navbar collapsible -->
    <div class="container">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/home_logo.png" alt="The Arts Circle Logo"></a>
                </div>
                <div class="collapse navbar-collapse navbar-right" id="mainNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="whatwedo.php">What We Do</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                   
                </div>
            </div>
        </nav>
    </div>

    <!-- banner -->
    <div class="container-fluid img-responsive" id="banner">
        <div class="container">
            <h1>ALL CREATIVES UNDER ONE ROOF</h1>
            <br>
            <p><cms:editable name='home_desc' label='Home Banner Description' type='richtext' >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem molestiae enim maiores, sed et officia ipsa doloribus<br/> odit facere beatae voluptas eum quos culpa minus illo neque cum repudiandae consequuntur Lorem ipsum dolor sit amet consectetur<br/> adipisicing elit.</cms:editable> </p>
            <br>
            <a class="btn btn-primary" href="#">FIND A CREATIVE</a> <!-- TODO:execute this -->
            <a class="btn btn-primary" href="#">JOIN US</a> 
       </div>
    </div>

    <!-- snippets and news -->
    <div class="container-fluid" id="snippets">
        <div class="row">
            <div class="col-md-4 snippet">
                <span>| </span> <h5><cms:editable type='text' name='item1label' label='Item 1 Label' > MENTORSHIP </cms:editable> </h5> 
                <div class="item">
                    <img src="<cms:editable type='image' name='item1image' label='Item1 Image' />" alt="photography pic">
                     <div class="content">
                        <h4><cms:editable name='item1title' label='Item 1 title' type='text'>Get Industry Exposure</cms:editable></h4>
                        <p><cms:editable name='item1content' type='richtext' label='Item 1 Content'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat magnam molestiae eligendi et inventore nemo quo recusandae accusantium, iste nisi, amet officia porro tenetur quisquam, numquam voluptatibus dolorem necessitatibus harum.</cms:editable> </p>
                        <a href="#">READ MORE <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 snippet">
                <span>| </span> <h5><cms:editable type='text' label='Item2 Label' name='item2label'> COMMUNITY OF CREATIVES</cms:editable></h5> 
                 <div class="item">
                    <img src="<cms:editable type='image' label='Item2 Image' name='item2image'/>" alt="photography pic">
                    <div class="content">
                        <h4><cms:editable type='text' name='item2title' label='Item2 Title' >Get Industry Exposure</cms:editable></h4>
                        <p><cms:editable type='richtext' name='item2content' label='Item2 Content' >Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat magnam molestiae eligendi et inventore nemo quo recusandae accusantium, iste nisi, amet officia porro tenetur quisquam, numquam voluptatibus dolorem necessitatibus harum.</cms:editable></p>
                        <a href="#">READ MORE <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 news">
                <div class="news-item title">
                    <h4>NEWS</h4>
                </div>
                <div class="news-item">
                    <h6><i class="fa fa-circle"></i><cms:editable type='text' name='date1' label='News1 Date'> December 25th 2017</cms:editable></h6>
                    <h5><cms:editable type='text' name='news1' label='News1 Headline'>THIS IS  NEWS HEADLINE THIS IS A NEWS HEADLINE</cms:editable></h5>
                    <hr>
                </div>
                 <div class="news-item">
                    <h6><i class="fa fa-circle"></i><cms:editable type='text' name='date2' label='News2 Date'> December 25th 2017</cms:editable></h6>
                    <h5><cms:editable type='text'name='news2' label='News2 Headline'>THIS IS  NEWS HEADLINE THIS IS A NEWS HEADLINE</cms:editable></h5>
                    <hr>
                </div>
                 <div class="news-item">
                    <h6><i class="fa fa-circle"></i><cms:editable type='text' name='date3' label='News3 Date'> December 25th 2017</cms:editable></h6>
                    <h5><cms:editable type='text' name='news3' label='News3 Content'>THIS IS  NEWS HEADLINE THIS IS A NEWS HEADLINE</cms:editable></h5>
                    <hr>
                </div>
                 <div class="news-item">
                    <h6><i class="fa fa-circle"></i><cms:editable type='text' name='date4' label='News4 Date'> December 25th 2017</cms:editable></h6>
                    <h5><cms:editable type='text' name='news4' label='News4 Content'>THIS IS  NEWS HEADLINE THIS IS A NEWS HEADLINE</cms:editable></h5>
                    <hr>
                </div>
                <div class="news-item">
                    <a href="#">SEE ALL NEWS <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
<!-- quote -->
    <div class="container-fluid" id="quote">
        <blockquote>"Creativity is contagious, pass it on"</blockquote>
        <span>-Albert Einstein</span>
    </div>

    <div class="container-fluid featured">
        <div class="sub-content">
            <span>|</span> <h5>FEATURED CATEGORIES</h5>
        </div>
        <div class="row categories">
            <div class="col-md-4">
                <img src="<cms:editable type='image' label='Feature1 Image' name='feature1image'/>" alt="photography pic">
                     <div class="content">
                        <h4><cms:editable type='text' name='feature1title' label='Feature1 Title'>Visual Arts</cms:editable></h4>
                        <p><cms:editable type='richtext' name='feature1content' label='Feature1 Content'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat magnam molestiae eligendi et inventore nemo quo recusandae accusantiu</cms:editable></p>
                        <a class="btn btn-primary" href="#">LEARN MORE <i class="fa fa-chevron-right"></i></a>
                    </div>
            </div>
             <div class="col-md-4">
                <img src="<cms:editable type='image' label='Feature2 Image' name='feature2image'/>" alt="photography pic">
                     <div class="content">
                        <h4><cms:editable type='text' name='feature2title' label='Feature2 Title'>Perorming Arts</cms:editable></h4>
                        <p><cms:editable type='richtext' name='feature2content' label='Feature2 Content'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat magnam molestiae eligendi et inventore nemo quo recusandae accusanti.</cms:editable></p>
                        <a class="btn btn-primary" href="#">LEARN MORE <i class="fa fa-chevron-right"></i></a>
                    </div>
            </div>
             <div class="col-md-4">
                <img src="<cms:editable type='image' label='Feature3 Image' name='feature3image'/>" alt="photography pic">
                     <div class="content">
                        <h4><cms:editable type='text' name='feature3title' label='Feature3 Title'>Digital Arts</cms:editable></h4>
                        <p><cms:editable type='richtext' name='feature3content' label='Feature3 Content'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat magnam molestiae eligendi et inventore nemo quo recusandae accusanti.</cms:editable></p>
                        <a class="btn btn-primary" href="#">LEARN MORE <i class="fa fa-chevron-right"></i></a>
                    </div>
            </div>
        </div>
        <div class="row you-tube">
            <div class="col-md-7">
                <iframe src="<cms:editable type='text' name='youtubeembed' label='Youtube embed URL'>https://www.youtube.com/embed/gmZt9mnx_I8</cms:editable>" frameborder="0" allow="autoplay;encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="col-md-5">
                <div class="sub-content">
                    <span>|</span>
                    <h5><cms:editable name='youtubetitle' type='text' label='Youtube Video Title'>DUMMY DUMMY CONTENT</cms:editable> </h5>
                </div>
                <h3><cms:editable name='youtubesubtitle' type='text' label='Youtube Video Description'>Lorem ipsum dolor sit amet consectetur adipisicing elit.</cms:editable></h3>
                <p><cms:editable name='youtubesummary' type='richtext' label='Youtube Video Summary'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, veniam itaque excepturi iste adipisci omnis. Deserunt molestias voluptates sunt quasi, non laboriosam necessitatibus quo soluta ad incidunt adipisci dolore sit.</cms:editable></p>
                <span class="social">
                   <a href="<cms:editable name='facebook' type='text' label='FaceBook Url'>#</cms:editable>"> <i class="fab fa-facebook"></i></a>
                    <a href="<cms:editable name='twitter' type='text' label='Twitter Url'>#</cms:editable>"><i class="fab fa-twitter"></i></a>
                    <a href="<cms:editable name='instagram' type='text' label='Instagram Url'>#</cms:editable>"><i class="fab fa-instagram"></i></a>
                    <a href="<cms:editable name='pinterest' type='text' label='Pinterest Url'>#</cms:editable>"><i class="fab fa-pinterest"></i></a>
                    <a href="<cms:editable name='whatsapp' type='text' label='Whatsapp Url'>#</cms:editable>"><i class="fab fa-whatsapp"></i></a>
                </span>
            </div>
        </div>
        <div class="row bottom-content">
            <div class="col-md-4 box" id="box1">
                <div class="sub-content">
                    <span>|</span>
                    <cms:editable type='richtext' name='somecontent' label='Bottom Atrice' >
                    <h5>DUMMY DUMMY CONTENT </h5>
                </div>
                 <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta deleniti est unde quae adipisci. .</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus aut recusandae perspiciatis, natus perferendis obcaecati, qui veritatis aperiam quo consequatur, repellendus modi blanditiis. Autem enim similique dolores modi, recusandae sed?</p>
                </cms:editable>
                <a class="btn btn-primary" href="#">REQUEST INFORMATION <i class="fa fa-chevron-right"></i></a>
            </div>
            
            <div class="col-md-4 box" id="box2">
                <div class="sub-content">
                    <span>|</span>   
                    <h5>UPCOMING EVENTS </h5>
                </div>
                <div class="row">
                <cms:editable type='richtext' name='event1' label='Event1' >
                        <div class="col-md-3 date">
                            <h1>10</h1>
                            <h6>AUG_2018</h6>
                        </div>
                        <div class="col-md-9">
                            <h5><i class="fa fa-clock"></i> 8.00am to 1.30pm</h5>
                            <h5>Exhibition</h5>
                        </div>
                 </cms:editable>       
                 </div>
                  <div class="row">
                  <cms:editable type='richtext' name='event2' label='Event2' >
                        <div class="col-md-3 date">
                            <h1>10</h1>
                            <h6>AUG_2018</h6>
                        </div>
                        <div class="col-md-9">
                            <h5><i class="fa fa-clock"></i> 8.00am to 1.30pm</h5>
                            <h5>Exhibition</h5>
                        </div>
                    </cms:editable>
                 </div>

                 <a href="#">SEE ALL EVENTS <i class="fa fa-chevron-right"></i></a>
               
            </div>
            <div class="col-md-4 box" id="box3">
                <div class="sub-content">
                    <span>|</span>
                    <cms:editable type='richtext' name='story' label='Footer Story'>
                    <h5>TOP STORIES </h5>
                </div>
                <img src="images/abstact.jpg" alt="top stories">
                <h6>December 16th 2016</h6>
                <h5>This is just some dummy text, you dummy</h5>
                </cms:editable>
                <a href="#">READ MORE <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="footer">
        <img src="images/logo_transparent.png" alt="LOGO">
        <p class="text-center"><cms:editable type='richtext' name='footertext' label='Footer Text'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ex consequatur minus sunt qui! Obcaecati atque, iste tempora quasi perferendis ullam itaque aspernatur porro neque ipsam nemo? Pariatur, exercitationem iste!</cms:editable></p>
        <form action="#" method="POST" role="form" class="form-inline">
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="email" id="">
                <input class="btn btn-primary" type="submit" value="SUBSCRIBE">
            </div>
        </form>
        <div class="copyright text-center">
            <p>&copy; 2018 The Arts Circle. All rights reserved</p>
        </div>
    </div>

    <script src="bootstrap/js/jquery-3.3.1.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php COUCH::invoke(); ?>