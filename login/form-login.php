<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
    <script src="https://kit.fontawesome.com/00bdb8fafb.js" crossorigin="anonymous"></script>
</head>
<body>


    <div class="cotn_principal">
        <div class="cont_centrar">
        
          <div class="cont_login">
        <div class="cont_info_log_sign_up">
              <div class="col_md_login">
        <div class="cont_ba_opcitiy">
                
                <h2>LOGIN</h2>  
          <p>Silahkan Login Jika anda sudah memiliki akun</p> 
          <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
          </div>
          </div>
        <div class="col_md_sign_up">
        <div class="cont_ba_opcitiy">
          <h2>SIGN UP</h2>
        
          
          <p>Silahkan buat akun jika anda belum memiliki akun</p>
        
          <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
        </div>
          </div>
               </div>
        
            
            <div class="cont_back_info">
               <div class="cont_img_back_grey">
               <img src="https://images.unsplash.com/photo-1657299170950-87e5b0eaf77c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" />
               </div>
               
            </div>
        <div class="cont_forms" >
            <div class="cont_img_back_">
               <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
               </div>
               <form action="login.php" method="post">
         <div class="cont_form_login">
        <a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
           <h2>LOGIN</h2>
         <input type="text" name="nama" placeholder="username" />
        <input type="password" name="password" placeholder="Password" />
        <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
          </div>
          </form>
          
          <form action="login.php" method="post">
           <div class="cont_form_sign_up">
        <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
             <h2>SIGN UP</h2>
        <input type="text" placeholder="User" />
        <input type="password" placeholder="Password" />
        <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
        
          </div>
          </form>
          
            </div>
            
          </div>
         </div>
        </div>
<<<<<<< HEAD

=======
>>>>>>> 6784f50 (update error Head)
</body>
</html>