<!-- <<<<<<< HEAD -->
<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPP Moklet</title>
</head>
<body>

<!-- ======= -->
<body>
<div class="wrapper">
  <header>
    <nav>
      <div class="menu-icon">
        <i class="fa fa-bars fa-2x"></i>
      </div>
      <div class="logo">
        <a href="../homepage/home.php">
          <img src="../asset/img/ts.png" alt="logo ts" width=" 30rem" >
        </a>
      </div>
      <div class="menu">
        <ul>
          <li><a href="../homepage/home.php">Home</a></li>
          <li><a href="../tagihan/tagihan-siswa.php">Tagihan</a></li>
          <li><a href="#">Transaksi</a></li>
          <li><a href="#">Log Out</a></li>
        </ul>
      </div>
    </nav>
  </header>
  </div>

<script>
    //Menu toggle-button for small screens
$(document).ready(function (){
  $(".menu-icon").on("click", function() {
    $("nav ul").toggleClass("showing");
  });
});

//Scrolling Effect for nav
$(window).on("scroll", function() {
  if($(window).scrollTop()) {
    $('nav').addClass('black');
  } else {
    $('nav').removeClass('black');
  }
});
</script>

<style>
    html, body {
  margin: 0;
  body: 0;
  width: 100%;
}

body {
  font-family: 'Quicksand', sans-serif;
}

header {
  width: 100%;
  height: 9vh;
  /* background: url("https://images.unsplash.com/photo-1542652184-04fe4ec9d4d4?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ") no-repeat 50% 50%;
  background-size: cover; */
}

.content {
  width: 90%;
  margin: 4em auto;
  font-size: 20px;
  line-height: 30px;
  text-align: justify;
}

.logo {
  position: fixed;
  float: left;
  margin: 16px 36px;
  color: black;
  font-weight: bold;
  font-size: 24px;
}

nav {
  position: fixed;
  width: 100%;
}

nav ul {
  list-style: none;
  background: rgba(0,0,0,0);
  overflow: hidden;
  color: #fff;
  padding: 0;
  text-align: center;
  margin: 0;
  transition: 1s;
}

nav.black ul {
  background: #000;
}

nav ul li {
  display: inline-block;
  padding: 20px;
}

nav ul li a {
  text-decoration: none;
  color: black;
  font-size: 20px;
}

/*Menu icon CSS*/
.menu-icon {
  width: 100%;
  background: #000;
  text-align: right;
  box-sizing: border-box;
  padding: 15px 24px;
  cursor: pointer;
  color: #fff;
  display: none;
}

/*Responsive design CSS*/
@media(max-width: 580px) {
  .logo {
    position: fixed;
    top: 0;
    margin-top: 16px;
  }
  
  nav ul {
    max-height: 0px;
    background: #000;
  }
  
  nav.black ul {
    background: #000;
  }
  
  .showing {
    max-height: 20em;
  }

  nav ul li {
    box-sizing: border-box;
    width: 100%;
    padding: 24px 0px;
    text-align: center;
  }
  
  .menu-icon {
    display: block;
  }
}
</style>
    
</body>
</html>