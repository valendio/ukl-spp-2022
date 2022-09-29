<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagihan Siswa</title>
    <?php include "../root/navbar.php"; ?>

</head>
<body>


<p class="message">Data Tunggakan SPP bulanan</p>
<h1>Rp.500.000</h1>

<form action="proses-bayar.php" method="post">
    <button type="submit">Bayar</button>
</form>

<style>
    body {
  font-family: "Futura";
  text-align: center;
}

button {
  border: 3px solid #000;
  background: #fff;
  font-size: 1rem;
  text-transform: uppercase;
  padding: 1rem;
}

.message {
  background: #fff url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAnFBMVEUAAAD///////////////////////////////////////////////////////////////////////////////8tLS0uLi4vLy80NDQ2NjY3NzdHR0dISEhUVFRVVVVfX19gYGCEhISFhYWRkZGSkpKVlZWnp6epqamwsLC/v7/AwMDHx8fJycnKysrf39/q6urr6+v19fX+/v7///8fnxNaAAAAFXRSTlMAASI4RG2DkJmapa2/wsPZ5+7y8/y7h6PLAAABQUlEQVR4AZXV+1LqMBAG8G0TSmlLL7ThHAERUUTwgvi9/7s5IgPZTBKa39/fZLKTzS4ZIpFkRdVOqiJLREQ+Mq2hqVNJLmIME8aCbOIcVnlsuUEDh0aSYdDBqRsQM4TXkJ2LG7SzZYcbOklncYObmpj+5OghpxOBXgT9KsGst7AqT9WBeVR3B1hJIhoZ2f9vsEuJorpnFnXEy1srzWy5ORolJtBsp4pZfECTUAYj/YKzw+5BTfV0RgWcaXw/qYV2k4IqmOl/n9f0Sm1wUVELM/2Kq51a4qKlCXy+1AwXE6r6hysq4LPXr1FQBg9eYEaJL/us5kf9UQRcDvsVfxRhNBIUM3/njUSpKzy7542U8ub3k+xb+ZVBHzZkFAQNmZDxFTYYw0du+DD3r4ngBWQSpeXdBLnIEV+aI0l2bB231nX8A0IiFi5aF0LTAAAAAElFTkSuQmCC") no-repeat 9px 50%;
  background-size: 22px;
  color: #000;
  display: block;
  padding: 8px 8px 8px 40px;
  margin-bottom: 15px;
  line-height: 1.5;
  text-align: left;
  text-decoration: none;
  vertical-align: top;
  animation: slideAndFade 3s ease;
  border: 2px solid #ccc;
}
@keyframes slideAndFade {
  from {
    display: block;
    max-height: 0;
    opacity: 0;
  }
  50% {
    max-height: 200px;
    opacity: 0;
  }
  to {
    max-height: 200px;
    opacity: 1;
  }
}
</style>

<?php  include "../root/footer.php"; ?>

</body>
</html>
