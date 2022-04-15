<html>
   <head>
      <meta charset="UTF-8">
    <title>Сайт web-студії "Web-DECO"</title>
    <script scr="js/clock.js"></script>
    <script type="text/javascript">
      <style>
        .big{ transform: scale(2);}
      </style>
      function send()
     {
        var valid = true;
        var elems = document.forms[0].elements;
        for(var i=0; i<document.forms[0].length; i++){
           if(elems[i].getAttribute('type') == 'text' ||
              elems[i].getAttribute('type') == 'password' ||
              elems[i].getAttribute('type') == 'email'){
              if(elems[i].value == '') {
                 elems[i].style.border = '2px solid red';
                 valid = false;
              }

           }
           
           
        }

        if(!valid) {
           alert(' Потрібно заповнити всі поля !')
           return false;
        }
     }
   </script>
      <style>
         .shadowtext {
            text-shadow: 1px 3px 2px white, 0 0 1em red;
            color: #210042;
            font-size: 3em;
         }
         </style>
         <script>
            wind.onload = function() {
            setInterval(clockPainting, 1000); }
         </script>
    </head>
    <body backround = "images/bg.jpg">
       
    <?php  
$log_path='log.txt';
    $user_ip=getenv('REMOTE_ADDR');
    $user_brouser=getenv('HTTP_USER_AGENT');
    $curent_time=date("d/m/Y H:i:s");
    $log_string = "$user_ip|$user_brouser|$curent_time|\n";
    $file=fopen($log_path,"a");
    fwrite($file, $log_string, strlen($log_string));
    fclose($file);
?>
         <table border="1" align="center" cellpadding="10">
            <tr>
                  <td background="images/bg-3.jpg" colspan="2" height="150" align="right">
                     <font size="5">
                        <h1>Сайт web-студії "Web-DECO"</h1>
                      </font>
                  </td>
            </tr>
            <tr>
               <center><canvas id="canvas" height="120" width="120"></canvas></center>
                  <td colspan="2">
                     <font size="4"><b>
                        <a href="#">Головна</a>&nbsp;&nbsp;
                        <a href="#">Фотогалерея</a>&nbsp;&nbsp;
                        <a href="#">Телефони </a>&nbsp; &nbsp;
                        <a href="#">Статистика</a>&nbsp; &nbsp;
                        <a href="#">Зареєстровані</a></b>
                     </font>
                  </td>
            </tr>
            <tr>
                  <td width="30%" valign="top" >
                     <font size="5" color="navy"><h2>Новини</h2></font>
                        <font size="5" >
                  <ul>
                     <li><a href="#">Сайт будівельної компанії </a></li>
                     <li><a href="#">Сайт ТМ "Новашкола" </a></li>
                     <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                     <li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
                     <li><a href="#">Сайт-візитка дизайнера інтерфейсів </a></li><br>
                     <p align="right"><a href="#">інші...</a></p>
                  </ul>
                  </font>
               <hr>
         <H1 align="center"><font color="green">Реєстрація</font></H1>
         <form action="forma.php" method="post" onsubmit="send();">
         <TABLE align="center" bgcolor="#ccc">
         <TR>
            <TD><font color="green">Прізвище</font>: </TD>
            <TD><input type="text" size="10" maxlength="20" name="name2"> </TD>
         </TR>
         <TR>
            <TD><font color="green">Ім'я</font>: </TD>
            <TD><input type="text" size="10" maxlength="20" name="name1"> </TD>
         </TR>
         <TR>
            <TD><font color="green">E-Mail</font>: </TD>
            <TD><input type="email" size="10" maxlength="20" name="email"> </TD>
         </TR>
         <TR>
            <TD><font color="green">Пароль</font>: </TD>
            <TD><input type="password" size="10" maxlength="20" name="password"> </TD>
         </TR>
         </TABLE>
         
         <p align="center">
            <input type="submit" value="Зареєструватись">
            <input type="reset" value="Очистити">
         </p>
            </form>
         <hr>
               <hr>
                  </td>
                  <td width="70%">
                    <H1 align="center">Фотогалерея</H1>
                    <?php
                      function excess($files) {
                          $result = array();
                          for ($i = 0; $i < count($files); $i++) {
                            if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
                          }
                          return $result;
                      }
                      $dir = "pic";
                      $files = scandir($dir);
                      $files = excess($files);
                    ?>
                    <?php for ($i 0; $i<count($files); $i++) { ?>
                     <img scr="<?=$dir."/".$files[$i]?>" alt="" width="350"
                      height="250" hspace="5" vspace="7" border="5" onclick="this.classList.toggle('big')" />
                    <?php if (($i+1) % 4 ==0) { ?><br /><?php } ?>
                    <?php } ?>

                  </td>
              </tr>
              <tr>
                  <td background="images/bg-3.jpg "colspan="2" valign="middle" height="90">
                     <font size="4">Сайт розробив "Зубар Назарій"</font>
                 </td>
               </tr>
            </table>
    </body>
</html>
