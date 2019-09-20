<style type="text/css">
  .navbar {
    -webkit-box-shadow: inset 10px 48px 58px black;
    -moz-box-shadow: inset 10px 48px 58px black;
    box-shadow: inset 10px 48px 58px black;
    font-size: 18px;
    margin: auto;
    transition: 0.4s;
    width: 100%;
    position: fixed;
    top: 0;
    z-index: 1;
   
  }
  .navbar a {
    color: white;
  }
  .navbar a:active {
    background: black;
  }

  #logo {
    font-family: 'Abril Fatface', cursive;
   /* font-family: 'Lobster', cursive;  */
    font-size: 80px;
    transition: 0.4s;
  }

  @media screen and (max-width: 768px) {
    #logo {
      font-size: 60px;
    }
  }

</style>


     <script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("logo").style.fontSize = "40px";
    document.getElementById("navbar").style.background = "black";
    document.getElementById("dropdown-menu").style.background = "rgba(0,0,0,.9)";
  } else {
    document.getElementById("logo").style.fontSize = "80px";
    document.getElementById("navbar").style.background = "rgba(0,0,0,.0)";
    document.getElementById("dropdown-menu").style.background = "rgba(0,0,0,.5)";
  }
}
</script>


  <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Lobster&display=swap" rel="stylesheet">


<nav id="navbar" class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand" href="#"><span id="logo">Logo</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item pl-3 pr-3 active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item pl-3 pr-3">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item pl-3 pr-3">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu"  id="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <!--
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      -->
      </div>
    </nav>