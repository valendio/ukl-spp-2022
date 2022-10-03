<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Update siswa</title>
    </head>
    <body>

    <?php
    include "../connect.php";
    $qry_get_siswa = mysqli_query($connect, "select * from siswa where 
    nis = '" . $_GET['nis'] . "'");
    $dt_siswa = mysqli_fetch_array($qry_get_siswa);
    ?>
    
      <form action="siswa-update.php" method="post">
      
        <h1>Update Siswa</h1>
        
        <fieldset>
          <legend><span class="number"></span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="nama" name="nama" value="<?= $dt_siswa['nama'] ?>">
          
          <label for="nisn">Nisn:</label>
          <input type="number" id="nisn" name="nisn" value="<?= $dt_siswa['nisn'] ?>">
          
          <label for="nis">Nis:</label>
          <input type="number" id="nis" name="nis" value="<?= $dt_siswa['nis'] ?>">

          <label for="password">Password:</label>
          <input type="text" id="password" name="password" value="<?= $dt_siswa['password'] ?>">
          
          <select name="id_kelas" id="id_kelas" value="<?= $dt_siswa['id_kelas'] ?>">
          <option value="1">XI RPL 1</option>
          <option value="2">XI RPL 2</option>
          <option value="3">XI RPL 3</option>
          <option value="4">XI RPL 4</option>
          <option value="5">XI RPL 5</option>
          <option value="6">XI RPL 6</option>
          <option value="7">XI RPL 7</option>
          <option value="8">XI RPL 8</option>
          </select>
        </fieldset>
        
        <fieldset>
          <label for="bio">Alamat:</label>  
          <textarea id="alamat" name="alamat" value="<?= $dt_siswa['alamat'] ?>"></textarea>
        </fieldset>

        
        <label for="no_tlp">HP:</label>
          <input type="number" id="no_tlp" name="no_tlp" value="<?= $dt_siswa['no_tlp'] ?>">
          
        <button type="submit">Update siswa</button>
      </form>

      <style>
        *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
      </style>
      
    </body>
    </html>