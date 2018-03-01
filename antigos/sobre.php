<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>
</head>
<style>
/* =Reset default browser CSS. Based on work by Eric Meyer: http://meyerweb.com/eric/tools/css/reset/index.html
-------------------------------------------------------------- */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
  background: transparent;
  border: 0;
  margin: 0;
  padding: 0;
  vertical-align: baseline; }

body {
  line-height: 1; }

h1, h2, h3, h4, h5, h6 {
  clear: both;
  font-weight: normal; }

ol, ul {
  list-style: none; }
 

blockquote {
  quotes: none; }

blockquote:before, blockquote:after {
  content: '';
  content: none; }

del {
  text-decoration: line-through; }

/* tables still need 'cellspacing="0"' in the markup */
table {
  border-collapse: collapse;
  border-spacing: 0; }

a img {
  border: none; }

/* =Scss Variables
-------------------------------------------------------------- */
/* =Global
-------------------------------------------------------------- */
*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

body {
  background-color: #3cb5f9;
  color: #505050;
  font-family: "Ubuntu", sans-serif;
  font-weight: 300;
  font-size: 16px;
  line-height: 1.8; }

/* Headings */
h1, h2, h3, h4, h5, h6 {
  line-height: 1;
  font-weight: 300; }

a {
  text-decoration: none;
  color: #3cb5f9; }

a:hover {
  color: #0793e2; }

/* =Template
-------------------------------------------------------------- */
#wrapper {
  width: 100%;
  margin: 0 auto; }

#main {
  background-color: #fff;
  padding-top: 150px; }

.container {
  width: 80%;
  margin: 0 auto;
  padding: 0 30px; }

section {
  padding: 60px 0; }
  section h1 {
    font-weight: 700;
    margin-bottom: 10px; }
  section p {
    margin-bottom: 30px; }
    section p:last-child {
      margin-bottom: 0; }
  section.color {
    background-color: #3cb5f9;
    color: white; }

/* =Info Bar
-------------------------------------------------------------- */
#info-bar {
  background-color: #3cb5f9; }
  #info-bar a {
    color: white;
    font-size: 14px;
    text-transform: uppercase;
    display: inline-block;
    margin: 0;
    padding: 10px; }
    #info-bar a:hover {
      background-color: #0793e2; }
  #info-bar span.all-tutorials,
  #info-bar span.back-to-tutorial {
    display: block;
    width: 50%; }
  #info-bar span.all-tutorials {
    float: left;
    text-align: left; }
  #info-bar span.back-to-tutorial {
    float: right;
    text-align: right; }

/* =Header
-------------------------------------------------------------- */
header {
  width: 100%;
  height: 150px;
  overflow: hidden;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
  background-color: #0683c9;
  -webkit-transition: height 0.3s;
  -moz-transition: height 0.3s;
  -ms-transition: height 0.3s;
  -o-transition: height 0.3s;
  transition: height 0.3s; }
  header h1#logo {
    display: inline-block;
    height: 150px;
    line-height: 150px;
    float: left;
    font-family: "Oswald", sans-serif;
    font-size: 60px;
    color: white;
    font-weight: 400;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s; }
  header nav {
    display: inline-block;
    float: right; }
    header nav a {
      line-height: 150px;
      margin-left: 20px;
      color: #9fdbfc;
      font-weight: 700;
      font-size: 18px;
      -webkit-transition: all 0.3s;
      -moz-transition: all 0.3s;
      -ms-transition: all 0.3s;
      -o-transition: all 0.3s;
      transition: all 0.3s; }
      header nav a:hover {
        color: white; }
  header.smaller {
    height: 75px; }
    header.smaller h1#logo {
      width: 150px;
      height: 75px;
      line-height: 75px;
      font-size: 30px; }
    header.smaller nav a {
      line-height: 75px; }

/* =Footer
-------------------------------------------------------------- */
/* =Extras
-------------------------------------------------------------- */
.clearfix:after {
  visibility: hidden;
  display: block;
  content: "";
  clear: both;
  height: 0; }

/* =Media Queries
-------------------------------------------------------------- */
@media all and (max-width: 660px) {
  /* =Header
  -------------------------------------------------------------- */
  header h1#logo {
    display: block;
    float: none;
    margin: 0 auto;
    height: 100px;
    line-height: 100px;
    text-align: center; }
  header nav {
    display: block;
    float: none;
    height: 50px;
    text-align: center;
    margin: 0 auto; }
    header nav a {
      line-height: 50px;
      margin: 0 10px; }
  header.smaller {
    height: 75px; }
    header.smaller h1#logo {
      height: 40px;
      line-height: 40px;
      font-size: 30px; }
    header.smaller nav {
      height: 35px; }
      header.smaller nav a {
        line-height: 35px; } }
@media all and (max-width: 600px) {
  .container {
    width: 100%; }

  #info-bar a {
    display: block; }
  #info-bar span.all-tutorials,
  #info-bar span.back-to-tutorial {
    width: 100%; }
  #info-bar span.all-tutorials,
  #info-bar span.back-to-tutorial {
    float: none;
    text-align: center; }
  #info-bar span.all-tutorials {
    border-bottom: solid 1px #0793e2; } }

</style>



<body class="w3-theme-l5">

<!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Mudar navegação</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Work Now</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="sobre.php">Sobre Nós</a>
                    </li>
                    <li>
                        <a href="../tela_principal.php">Prestadores de serviço</a>
                    </li>
                    <li>
                        <a href="../Work_now_Cadastro.php">Cadastro</a>
                    </li>
					  <li>
                        <a href="tela_login.php">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div id="main">
    <div id="content">
        <section>
            <div class="container">
                <h1>Sobre a Work Now</h1>
                <p>Work now é um grupo que visa melhorar o relacionamento entre contratante e contratado, ou seja, o projeto tem o objetivo de encontrar prestadores de serviços proximos às pessoas que precisam de seus serviços</p>
                <p>
                    <a href="https://www.facebook.com/henrique.nascimento.1000469"> Facebook Construtor do Site</a><br>
                    <a href="http://bootsnipp.com/cppratikcp">« Go back to all tutorials?</a>
                </p>
            </div>
        </section>
        <section class="color">
            <div class="container">
                <h1>Cupcakes for the people!</h1>
                <p>Cupcake ipsum dolor sit amet lollipop. Macaroon candy cotton candy bear claw macaroon carrot cake pastry icing dessert. Cupcake pastry tart sesame snaps lollipop donut pie. Cookie apple pie toffee lemon drops jelly beans cheesecake sweet roll. Jelly-o soufflé donut candy canes wafer dragée sweet cheesecake. Macaroon caramels pie cookie gummi bears. Ice cream jelly-o toffee cookie gingerbread cookie. Soufflé fruitcake jelly-o jelly chupa chups jelly beans. Dragée marzipan pastry macaroon oat cake muffin soufflé topping liquorice. Jelly-o chocolate cake lollipop.</p>
                <p>Sugar plum muffin cookie pastry oat cake icing candy canes chocolate. Gummi bears chupa chups fruitcake dessert jelly. Muffin cookie ice cream soufflé pastry lollipop gingerbread sweet. Unerdwear.com bonbon candy marzipan bonbon gummies chocolate cake gummi bears powder. Unerdwear.com tart halvah chocolate cake dragée liquorice. Sugar plum chocolate bar pastry liquorice dragée jelly powder. Jelly tootsie roll applicake caramels. Marzipan candy tootsie roll donut. Gummies ice cream macaroon applicake.</p>
            </div>
        </section>
        <section>
            <div class="container">
                <h1>Chocolate, vanilla, and red velvet</h1>
                <p>Cupcake ipsum dolor sit amet lollipop. Macaroon candy cotton candy bear claw macaroon carrot cake pastry icing dessert. Cupcake pastry tart sesame snaps lollipop donut pie. Cookie apple pie toffee lemon drops jelly beans cheesecake sweet roll. Jelly-o soufflé donut candy canes wafer dragée sweet cheesecake. Macaroon caramels pie cookie gummi bears. Ice cream jelly-o toffee cookie gingerbread cookie. Soufflé fruitcake jelly-o jelly chupa chups jelly beans. Dragée marzipan pastry macaroon oat cake muffin soufflé topping liquorice. Jelly-o chocolate cake lollipop.</p>
                <p>Sugar plum muffin cookie pastry oat cake icing candy canes chocolate. Gummi bears chupa chups fruitcake dessert jelly. Muffin cookie ice cream soufflé pastry lollipop gingerbread sweet. Unerdwear.com bonbon candy marzipan bonbon gummies chocolate cake gummi bears powder. Unerdwear.com tart halvah chocolate cake dragée liquorice. Sugar plum chocolate bar pastry liquorice dragée jelly powder. Jelly tootsie roll applicake caramels. Marzipan candy tootsie roll donut. Gummies ice cream macaroon applicake.</p>
            </div>
        </section>
        <section class="color">
            <div class="container">
                <h1>Come to me!</h1>
                <p>Cupcake ipsum dolor sit amet lollipop. Macaroon candy cotton candy bear claw macaroon carrot cake pastry icing dessert. Cupcake pastry tart sesame snaps lollipop donut pie. Cookie apple pie toffee lemon drops jelly beans cheesecake sweet roll. Jelly-o soufflé donut candy canes wafer dragée sweet cheesecake. Macaroon caramels pie cookie gummi bears. Ice cream jelly-o toffee cookie gingerbread cookie. Soufflé fruitcake jelly-o jelly chupa chups jelly beans. Dragée marzipan pastry macaroon oat cake muffin soufflé topping liquorice. Jelly-o chocolate cake lollipop.</p>
                <p>Sugar plum muffin cookie pastry oat cake icing candy canes chocolate. Gummi bears chupa chups fruitcake dessert jelly. Muffin cookie ice cream soufflé pastry lollipop gingerbread sweet. Unerdwear.com bonbon candy marzipan bonbon gummies chocolate cake gummi bears powder. Unerdwear.com tart halvah chocolate cake dragée liquorice. Sugar plum chocolate bar pastry liquorice dragée jelly powder. Jelly tootsie roll applicake caramels. Marzipan candy tootsie roll donut. Gummies ice cream macaroon applicake.</p>
            </div>
        </section>
        <section>
            <div class="container">
                <h1>Sugar rush, oh my...</h1>
                <p>Cupcake ipsum dolor sit amet lollipop. Macaroon candy cotton candy bear claw macaroon carrot cake pastry icing dessert. Cupcake pastry tart sesame snaps lollipop donut pie. Cookie apple pie toffee lemon drops jelly beans cheesecake sweet roll. Jelly-o soufflé donut candy canes wafer dragée sweet cheesecake. Macaroon caramels pie cookie gummi bears. Ice cream jelly-o toffee cookie gingerbread cookie. Soufflé fruitcake jelly-o jelly chupa chups jelly beans. Dragée marzipan pastry macaroon oat cake muffin soufflé topping liquorice. Jelly-o chocolate cake lollipop.</p>
                <p>Sugar plum muffin cookie pastry oat cake icing candy canes chocolate. Gummi bears chupa chups fruitcake dessert jelly. Muffin cookie ice cream soufflé pastry lollipop gingerbread sweet. Unerdwear.com bonbon candy marzipan bonbon gummies chocolate cake gummi bears powder. Unerdwear.com tart halvah chocolate cake dragée liquorice. Sugar plum chocolate bar pastry liquorice dragée jelly powder. Jelly tootsie roll applicake caramels. Marzipan candy tootsie roll donut. Gummies ice cream macaroon applicake.</p>
            </div>
        </section>
    </div>
</div><!-- #main -->


<footer>
<div id="info-bar">
    <div class="container clearfix">
        <span class="all-tutorials"><a href="https://www.facebook.com/henrique.nascimento.1000469">← all orials</a></span>
        <span class="back-to-tutorial"><a href="https://www.facebook.com/henrique.nascimento.1000469">CHUAHAN PRATIK</a></span>
    </div>
</div><!-- /#top-bar -->
</footer><!-- /footer -->



</div><!-- /#wrapper -->
</html>