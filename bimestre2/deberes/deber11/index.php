<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      
          <nav class="row navbar navbar-default">
            
              <!-- Brand and toggle get grouped for better mobile display -->
              
              <div class="col-md-offset-1 col-md-3 navbar-header">
                
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <a class="col-md-12 navbar-brand" href="#">
                    <img src="imagenes/navigasyon/logo.png" alt="logo">
                </a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbar-collapse-1">

                <ul class="nav navbar-nav">
                  
                  <li class="active">
                    <a href="#">
                      Inicio <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      Portafolio 
                      <span class="caret">
                      </span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Fotografias</a></li>
                      <li><a href="#">Videos</a></li>

                      <li role="separator" class="divider"></li>

                      <li><a href="#">Wordpress</a></li>
                      <li><a href="#">JavaScript</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#" class="about">
                      About
                    </a>
                  </li>
                  <li>
                    <a href="#" class="contact">
                      Contact
                    </a>
                  </li>
                  <li>
                    <button class="btn-blog btn-default btn-sm">blog</button>
                  </li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
                  
                  <button type="submit" class="btn-search btn-default">
                    Search <img src="imagenes/navigasyon/search.png" alt="search">
                  </button>
                </form>

                
              </div><!-- /.navbar-collapse -->
          </nav>

      <div class="row" id="header">
        <div class="col-md-12">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="carousel-example-generic" data-slide-to="0" class="active" id="shape"></li>
              <li data-target="carousel-example-generic" data-slide-to="1" id="shape"></li>
              <li data-target="carousel-example-generic" data-slide-to="2" id="shape"></li>
              
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img class="img-responsive" src="imagenes/slider/imagen1.png" >
                <div class="carousel-caption">
                  <label class="titleimg">GOOD DESIGN IS GOOD BUSINESS</label>
                  <label class="leyend1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultricies sagittis magnaa commodo.</label>
                  <label class="leyend2">Ut eget eros mauris, ut cursus urna. Vestibulum ane ipsum primis in faucibus orci luctus et ultrices.</label>
                  <button class="btn-learn btn-default btn-sm">LEARN MORE</button>
                </div>
              </div>
              <div class="item">
                <img height="300" class="img-responsive" src="imagenes/slider/imagen2.png" alt="imagen2">
                <div class="carousel-caption" id="items">
                  Imagen 2
                </div>
              </div>
              <div class="item">
                <img height="300" class="img-responsive" src="imagenes/slider/imagen3.png" alt="imagen3">
                <div class="carousel-caption" id="items">
                  Imagen 3
                </div>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

      <div class="row" id="btn">
        <div class="col-md-12">
        <button class="btn-our-service btn-default btn-sm">OUR SERVICES</button></div></div>


      <div class="row" id="service">
        <div class="col-md-offset-1 col-md-2" id="servicios1">
          <img class="img-responsive" id="our-laptop" src="imagenes/our service/laptop.png">
          <p class="web-design">Web Design</p>
          <p class="text-web">Lorem ipsum dolor sit amet,<br>
          consectetur adipiscing elit.<br>
          Mauris nec ipsum at lacus<br>
          commodo suscipit.<a href="#">Details...</a></p>
        </div>
        <div class="col-md-offset-1 col-md-2" id="servicios2">
          <img class="img-responsive" id="our-search" src="imagenes/our service/search.png">
          <p class="search-optimization">Search Optimization</p>
          <p class="text-search">Lorem ipsum dolor sit amet,<br>
          consectetur adipiscing elit.<br>
          Mauris nec ipsum at lacus<br>
          commodo suscipit.<a href="#">Details...</a></p>
        </div>
        <div class="col-md-offset-1 col-md-2" id="servicios3">
          <img class="img-responsive" id="our-shop" src="imagenes/our service/shop.png">
          <p class="online-shop">Online Shop</p>
          <p class="text-shop">Lorem ipsum dolor sit amet,<br>
          consectetur adipiscing elit.<br>
          Mauris nec ipsum at lacus<br>
          commodo suscipit.<a href="#">Details...</a></p>
        </div>
        <div class="col-md-offset-1 col-md-2" id="servicios4">
          <img class="img-responsive" id="our-like" src="imagenes/our service/like.png">
          <p class="social-media">Social Media</p>
          <p class="text-social">Lorem ipsum dolor sit amet,<br>
          consectetur adipiscing elit.<br>
          Mauris nec ipsum at lacus<br>
          commodo suscipit.<a href="#">Details...</a></p>
        </div>
        
      </div>

      <div class="row" id="portfolio">
        <div class="col-md-4">
          <p class="title-portfolio">Our Portfolio Awesome</p>
          <div class="cuadro1">
            <div class="cuadro2">
              <img class="camera" src="imagenes/Our Portfolio Awesome/camera.png">  
            </div>
          </div>
          <p class="port1">Lorem Ipsum Dolar Sir Amet</p>
          <p class="leyend-port1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
          Mauris nec ipsum at lacus commodo suscipit.</p>
        </div>

        <div class="col-md-4">
          <div class="cuadro-centro1">
            <div class="cuadro-centro2">
              <img class="camera" src="imagenes/Our Portfolio Awesome/camera.png">  
            </div>
          </div>
          <p class="port2">Lorem Ipsum</p>
          <p class="leyend-port2">Lorem ipsum dolor sit amet, consectetur adipiscinglit.</p>
        </div>
        
        <div class="col-md-4">
          <button class="btn-more btn-default btn-sm">More Works</button>
          <div class="cuadro-der1">
            <div class="cuadro-der2">
              <button class="btn-details btn-default btn-sm">
                <img src="imagenes/Our Portfolio Awesome/eye.png"> Details
              </button>
            </div>
          </div>
          <p class="port3">Ipsum Amet Dolar Sit</p>
          <p class="leyend-port3">Lorem ipsum dolor sit amet, consectetur adipiscing<br>
          elitmauis nec ipsum at lacus commodo suscipit.</p>
        </div>
      </div>

      <div class="row" id="offer">
        <div class="col-md-12">
          <p class="title-offer">WHAT WE OFFER</p>
          <p class="leyend-offer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Ut ultricies sagittis magnaa commodo. Ut eget eros mauris, ut cursus urna.<br>
          Vestibulum ante ipsum primis in faucibus orci luctus et ultrices</p>
        </div>
      </div>
      <div class="row" id="offer-option">

        <div class="col-md-offset-1 col-md-2" id="service-offer-web">
          <p class="offer-web">Web Design</p>
          <p class="offer-leyend-web">
            Lorem ipsum dolor sit amet, consect<br>
            etur adipiscing elit. Ut ultricies sagit<br>
            tism agnaa commodo. Ut eget eros<br>
            mauris, ut cursus urna vestibuluman<br>
            ipsum primir in faucibus orci luctuset.
            <button class="btn-web-details btn-default btn-sm">Details</button>
          </p>
        </div>
        <div class="col-md-offset-1 col-md-2" id="service-offer-search">
          
          <p class="offer-search">Search Optimization</p>
          <p class="offer-leyend-search">
            Lorem ipsum dolor sit amet, consect<br>
            etur adipiscing elit. Ut ultricies sagit<br>
            tism agnaa commodo. Ut eget eros<br>
            mauris, ut cursus urna vestibuluman<br>
            ipsum primir in faucibus orci luctuset. <a href="#">Details...</a>
          </p>
        </div>
        <div class="col-md-offset-1 col-md-2" id="service-offer-shop">
          
          <p class="offer-shop">Online Shop</p>
          <p class="offer-leyend-shop">
            Lorem ipsum dolor sit amet, consect<br>
            etur adipiscing elit. Ut ultricies sagit<br>
            tism agnaa commodo. Ut eget eros<br>
            mauris, ut cursus urna vestibuluman<br>
            ipsum primir in faucibus orci luctuset.
            <button class="btn-shop-details btn-default btn-sm">Details</button>
          </p>
        </div>
        <div class="col-md-offset-1 col-md-2" id="service-offer-social">
          
          <p class="offer-social">Social Media</p>
          <p class="offer-leyend-social">
            Lorem ipsum dolor sit amet, consect<br>
            etur adipiscing elit. Ut ultricies sagit<br>
            tism agnaa commodo. Ut eget eros<br>
            mauris, ut cursus urna vestibuluman<br>
            ipsum primir in faucibus orci luctuset. <a href="#">>>></a>
          </p>
        </div>
      </div>
      <div class="col-md-12">
        <hr class="linea">
      </div>

      <div class="row" id="testimonials">
        <div class="col-md-offset-5 col-md-7">
          <p class="title-testimonials">
            TESTIMONIALS
          </p>
          <p class="leyend-testimonials">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit mauris necip<br>
            at lacus commodo suscipit praesent sollicitudin enim vel mirhon"
          </p>
        </div>
        <div class="row" id="iconTesti">
          <div class="col-md-offset-3 col-md-1" id="iconTest1">
            <img height="50" align="center" class="img-responsive" src="imagenes/Testimonials/persona1.png" alt="...">
          </div>
        
          <div class="col-md-offset-1 col-md-3 "id="iconTest2">
            <img height="300" align="center" class="img-responsive" src="imagenes/Testimonials/persona2.png" alt="...">
          </div>
        
          <div class="col-md-4 "id="iconTest3">
            <img height="300" align="center" class="img-responsive" src="imagenes/Testimonials/persona1.png" alt="...">
          </div>

        </div>
      </div>


      <div class="row" id="footer">
        <div class="col-md-offset-1 col-md-2">
          
          <p class="twitter">TWITTER FEEDS</p>
          
          <p class="leyend-twitter1">Check out this great theme item<br>
            <a href="www.twitter.com">http://tadjalskfj.com</a><br>
            2 weeks ago
          </p>
          <hr width="175px">

          <p class="leyend-twitter2">Check out this great theme item for<br>
            <a href="www.twitter.com">http://tadjalskfj.com</a><br>
            2 weeks ago
          </p>
          <hr width="175px">

          <p class="leyend-twitter3">Check out this great theme item for you<br>
            <a href="www.twitter.com">http://tadjalskfj.com</a><br>
            2 weeks ago
          </p>

        </div>


        <div class="col-md-offset-1 col-md-2">
          <p class="newsletter">NEWSLETTER</p>
          <p class="leyend-newsletter1">Lorem ipsum dolor sit amet, consectetur adip<br>
            iscing elit. Ut ultricies sagittis magna a comm.<br>
            Ut eget eros mauris, ut cursus urna.
          </p>
          <hr width="202px">
          
          <p class="leyend-newsletter2">Your Email Address<br>
            <input type="text" name="address" class="address">
            <button type="submit" class="btn-address btn-default btn-sm">Sign Up</button>
          </p>
        </div>
        <div class="col-md-offset-1 col-md-2">
          <p class="recent">RECENT PROJECTS</p>
          <div class="col-md-4">
            <div class="footer-cuadro1"></div><hr class="hr1">
            <div class="footer-cuadro2"></div><hr class="hr2">
            <div class="footer-cuadro3"></div>
          </div>
          
          <div class="col-md-8">
            <p class="leyend-recent1">Sketchy Business Card
              <a href="#">http://tadjalskfj.com</a><br>
              2 weeks ago
            </p>
            <p class="leyend-recent2">Message Boards in Nature
              <a href="#">http://tadjalskfj.com</a><br>
              2 weeks ago
            </p>

            <p class="leyend-recent3">Wesite Design Kit
              <a href="#">http://tadjalskfj.com</a><br>
              2 weeks ago
            </p>
          </div>
          
        </div>
        <div class="col-md-3">
          <p class="contact">CONTACT</p>
          <div class="col-md-4">
            <div class="footer-phone">
              <img src="imagenes/footer/contact/phone.png" class="phone">
            </div>
            <div class="footer-cel">
              <img src="imagenes/footer/contact/cel.png" class="cel">
            </div>
            <div class="footer-mail">
              <img src="imagenes/footer/contact/mail.png" class="mail">
            </div>
          </div>
          <div class="col-md-8">
            <p class="leyend-contact1">
              1-00-000-0000<br>
              1-00-000-0000
            </p>
            <p class="leyend-contact2">

              1-00-000-0000<br>
              1-00-000-0000
            </p>

            <p class="leyend-contact3">
              abcdeg@hijs.dfh<br>
              fjashfaf@jkfs.ckd
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/main.js"></script>

  </body>
</html>