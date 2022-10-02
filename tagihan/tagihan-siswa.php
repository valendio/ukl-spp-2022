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

<div class="msg">
  <p class="message">Data Tunggakan SPP bulanan</p>
  <h1>Rp.500.000</h1>
</div>

<div class="btn-bayar">
  <form action="proses-bayar.php" method="post">
      <button type="submit">Bayar</button>
  </form>
</div>

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

.msg h1 {
  text-align: center;
}

.btn-bayar button {
  display: flex;
  margin: 0px auto;
}

.message {
  color: #000;
  display: block;
  padding: 8px 8px 8px 40px;
  margin-bottom: 15px;
  line-height: 1.5;
  text-align: center;
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
