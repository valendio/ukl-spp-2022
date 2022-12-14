<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Petugas</title>
</head>
<body>

      <script>
          $(function(){
        $('#keywords').tablesorter(); 
      });
      </script>
 <?php include "../root/navbar.php"; ?>

 <body>
 <div id="wrapper">
  <h1>Data Petugas</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
  <thead>
      <tr>
        <th><span>No.</span></th>
        <th><span>ID Petugas</span></th>
        <th><span>Nama</span></th>
        <th><span>Nama Lengkap</span></th>
        <th><span>Password</span></th>
        <th><span>Role</span></th>
        <th><span>Ubah</span></th>
        <th><span>Hapus</span></th>
      </tr>
    </thead>

    <tbody>
      <?php 
      
      include "../connect.php";
      $qry_petugas = mysqli_query($connect, "SELECT * FROM `petugas`");
      $no = 0;
      while ($data_petugas = mysqli_fetch_array($qry_petugas)){
        $no++; ?>
        <tr>
        <td class="lalign"><?= $no ?></td>
        <td class="lalign"><?= $data_petugas['id_petugas'] ?></td>
        <td class="lalign"><?= $data_petugas['nama'] ?></td>
        <td class="lalign"><?= $data_petugas['nama_petugas'] ?></td>
        <td class="lalign"><?= $data_petugas['password'] ?></td>
        <td class="lalign"><?= $data_petugas['role'] ?></td>
        <td class="lalign"><a href="form-petugas-update.php?id_petugas=<?= $data_petugas['id_petugas'] ?>" onclick="return confirm('Apakah anda yakin Mengubah  data ini?')" class="btn btn-danger">Ubah</a></td>
        <td class="lalign"><a href="petugas-delete.php?id_petugas=<?= $data_petugas['id_petugas'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
          
      </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
 </div> 
</body>

<style>
    @import url('https://fonts.googleapis.com/css?family=Amarante');

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  outline: none;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html { overflow-y: scroll; }
body {  https://subtlepatterns.com/weave/ */
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 62.5%;
  line-height: 1;
  color: #585858;
  padding: 22px 10px;
  padding-bottom: 55px;
}

::selection { background: #5f74a0; color: #fff; }
::-moz-selection { background: #5f74a0; color: #fff; }
::-webkit-selection { background: #5f74a0; color: #fff; }

br { display: block; line-height: 1.6em; } 

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; }
ol, ul { list-style: none; }

input, textarea { 
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  outline: none; 
}

blockquote, q { quotes: none; }
blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
strong, b { font-weight: bold; } 

table { border-collapse: collapse; border-spacing: 0; }
img { border: 0; max-width: 100%; }

h1 { 
  font-family: 'Amarante', Tahoma, sans-serif;
  font-weight: bold;
  font-size: 3.6em;
  line-height: 1.7em;
  margin-bottom: 10px;
  text-align: center;
}

/** page structure **/
#wrapper {
  display: block;
  width: 1050px;
  background: #fff;
  margin: 0 auto;
  padding: 10px 17px;
  -webkit-box-shadow: 2px 2px 3px -1px rgba(0,0,0,0.35);
}

#keywords {
  margin: 0 auto;
  font-size: 1.2em;
  margin-bottom: 15px;
}

#keywords thead {
  cursor: pointer;
  background: #c9dff0;
}
#keywords thead tr th { 
  font-weight: bold;
  padding: 12px 30px;
  padding-left: 42px;
}
#keywords thead tr th span { 
  padding-right: 20px;
  background-repeat: no-repeat;
  background-position: 100% 100%;
}

#keywords thead tr th.headerSortUp, #keywords thead tr th.headerSortDown {
  background: #acc8dd;
}

#keywords thead tr th.headerSortUp span {
  background-image: url('https://i.imgur.com/SP99ZPJ.png');
}
#keywords thead tr th.headerSortDown span {
  background-image: url('https://i.imgur.com/RkA9MBo.png');
}

#keywords tbody tr { 
  color: #555;
}
#keywords tbody tr td {
  text-align: center;
  padding: 15px 10px;
}
#keywords tbody tr td.lalign {
  text-align: left;
}
</style>

    
</body>
</html>