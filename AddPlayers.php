<?php

include "../../DB.php";
$db=new DB();
if(isset($_POST["addplayersubmit"])){
  $upl='uploads/';
    $upload = $upl . basename($_FILES['img']['name']);
    if (move_uploaded_file($_FILES['img']['tmp_name'], $upload)) {
    
      $params=array($_POST ['playername'],$_POST ['playersurname'],$_POST ['birthdate'],$_POST ['tel'],$_POST ['position'],$_POST ['foot'],$upload,
      $_POST ['playername'].$_POST ['playersurname']);
  if($db->insert('addplayer', 'name,surname,birthdate,phonenumber,position,foot,playerphoto,playerid', $params, 8))
  {
    ?><script>alert("Oyuncu Başarıyla Eklendi")</script><?php  

  }
  

}
else{
    

}
    

  
}













?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&family=Roboto:wght@300&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&family=Roboto:wght@300;500&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;400&family=Roboto:wght@300;500&display=swap"
    rel="stylesheet">
  <link rel="preload" href="/fonts/materialdesignicons-webfont.woff2?v=1.4.57" as="font" type="font/woff2"
    crossorigin="anonymous">
  <link href="assest/css/Playeraddcss.css" rel="stylesheet" type="text/css">


  <title>MatchMaker</title>
</head>

<body>

  <!--Header Start-->
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <img class="headerlogo" src="assest/images/logo BEYAZ.png">

        </div>
        <div style="padding: 30px; " class="col">
          <ul class="menu">
            <li class="menuitem"><a href="Homepage.php"><b>ANA SAYFA</b></a></li>
            <li class="menuitem"><a href="Players.php"><b>OYUNCULAR</b></a></li>
            <li class="menuitem"><a href="AddMatches.php"><b>MAÇ EKLEME</b></a></li>
            <li class="menuitem"><a href="AddPlayers.php"><b>OYUNCU EKLEME</b></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--Header End-->
    
  <div class="container">
    
    <div class="row">
      <div class="col"> 

        <h3>Oyuncu Ekleme</h3>
        <hr>
      </div>
    </div>
        <div style="margin-top: 20px; margin-bottom: 40px;" class="row">
          <div class="col">
            <a class="btn-primary" href="#">OYUNCU ARAMA</a>
          </div>
    
        </div>

        <form method="post" action="#" enctype="multipart/form-data">
          <div class="formheader">
           

          </div>

          <div class="container">
            <div class="row">
              <div class="col"> 
        
          
          <ul>

            <li class="fullnamesection">

              <span>
                <label> Oyuncunun Adı </label>
                <br>
                <input name="playername" type="text">
              
            </span>
            <br>
            <span>
              <label> Oyuncunun Soyadı </label>
              <br>
              <input name="playersurname" type="text">
            
          </span>


            </li>

            <li class="birthdate">
              
              <span>
              <label> Doğum Tarihi </label>
              <br>
              <select name="birthdate">
                <option>  </option>
                <option value="2005"> 2005 </option>
                <option value="2004"> 2004 </option>
                <option value="2003"> 2003 </option>
                <option value="2002"> 2002 </option>
                <option value="2001"> 2001 </option>
                <option value="2000"> 2000 </option>
                <option value="1999"> 1999 </option>
                <option value="1998"> 1998 </option>
                <option value="1997"> 1997 </option>
                <option value="1996"> 1996 </option>
                <option value="1995"> 1995 </option>
                <option value="1994"> 1994 </option>
                <option value="1993"> 1993 </option>
                <option value="1992"> 1992 </option>
                <option value="1991"> 1991 </option>
                <option value="1990"> 1990 </option>
                <option value="1989"> 1989 </option>
                <option value="1988"> 1988 </option>
                <option value="1987"> 1987 </option>
                <option value="1986"> 1986 </option>
                <option value="1985"> 1985 </option>
                <option value="1984"> 1984 </option>
                <option value="1983"> 1983 </option>
                <option value="1982"> 1982 </option>
                <option value="1981"> 1981 </option>
                <option value="1980"> 1980 </option>
                <option value="1979"> 1979 </option>
                <option value="1978"> 1978 </option>
                <option value="1977"> 1977 </option>
                <option value="1976"> 1976 </option>
                <option value="1975"> 1975 </option>
                <option value="1974"> 1974 </option>
                <option value="1973"> 1973 </option>
                <option value="1972"> 1972 </option>
                <option value="1971"> 1971 </option>
                <option value="1970"> 1970 </option>
              </select>
            </span>
            </li>

            <li class="phonenumber">
              <span>
                <label>Telefon Numarası</label>
                <br>
                <input name="tel" type="tel">
              </span>
            </li>

            <li class="position">
              <span>
                <label>Mevki</label>
                <br>
                <select name="position">
                  <option></option>
                  <option>Kaleci</option>
                  <option>Defans</option>
                  <option>Orta Saha</option>
                  <option>Forvet</option>
                </select>
              </span>
            </li>
            <li class="foot">
              <span>
                <label>Kullandığı ayak</label>
                <br>
                <select name="foot">
                  <option></option>
                  <option>Sağ</option>
                  <option>Sol</option>
                </select>
              </span>
            </li>

          </ul>

          </div>
        <div style="padding: 50px;" class="col">

          <ul class="uploadphoto">
            <li><input type="file" id="real" name="img" accept="image/*" />
              <input style="background-image: url(assest/images/simpleplayerphoto.jpg);" type="button" value="" id="fake-button" />
              <input type="text" id="fake-label" />
            </li>
            
            
            <li style="padding-left: 70px;" >

              <label for="img">Oyuncunun Fotoğrafı</label>
              
             
            </li>
          </ul>

        </div>
        
        </div>
      </div>

         

          <div class="middlefooter">
           
            <img src="assest/images/logo BEYAZ.png">

          </div>




            <ul class="buttons">   

            <li>

              <input class="btn btn-success" type="submit" name="addplayersubmit" value="Gönder">
              <input class="btn btn-info" type="submit" value="Temizle">

            </li>
          </ul>

          

          
          <div class="formfooter">
           


          </div>

        </form>


        

      </div>
    </div>
  </div>





  <div class="footer">
    <div class="container">
      <div class="row">


        <div class="col-5">
          <img class="footerlogo" src="assest/images/logo BEYAZ.png">
          <p>Bireysel ve ekip halinde kullanabileceğiniz bir sistem
            olan MatchMaker sistemi. Oyuncuların iletişim bilgilerini
            ve katıldıkları maçlarda elde elde ettikleri istatistikleri bir araya getirerek, oyuncular arasında bir
            sıralama sistemi
            oluşturmaktadır. Bu sayede gelecekte organize edecek
            olduğunuzmaçların rekabet seviyesiniarttırıp daha keyifli
            ve verimli müsabakalar düzenlemenize, aynı zamanda
            hiçbir zaman eksik oyuncu sıkıntısı aşamamanıza olanak sunuyor.

            <h5>İLETİŞİM</h5>

            <p class="mail"> gokturk.dogan@hotmail.com</p>

        </div>
        <div class="col">
          <h6><b>YENİ EKLENEN OYUNCULAR</b></h6>
          <hr class="hrfooter">
          <table>
            <tr>
              <td class="photo"> <a href="#"><img src="assest/images/simpleplayerphoto.jpg"></a> </td>
              <td>
                <a class="playernamea" href="#">Oyuncu İsmi</a>
                <p class="positioninfo">Mevki</p>
                <p class="adddate">GG/AA/YYYY</p>
              </td>
              <td class="photo"> <a href="#"><img src="assest/images/simpleplayerphoto.jpg"></a> </td>
              <td>
                <a class="playernamea" href="#">Oyuncu İsmi</a>
                <p class="positioninfo">Mevki</p>
                <p class="adddate">GG/AA/YYYY</p>
              </td>
            </tr>
            <tr>
              <td class="photo"> <a href="#"><img src="assest/images/simpleplayerphoto.jpg"></a> </td>
              <td>
                <a class="playernamea" href="#">Oyuncu İsmi</a>
                <p class="positioninfo">Mevki</p>
                <p class="adddate">GG/AA/YYYY</p>
              </td>
              <td class="photo"> <a href="#"><img src="assest/images/simpleplayerphoto.jpg"></a> </td>
              <td>
                <a class="playernamea" href="#">Oyuncu İsmi</a>
                <p class="positioninfo">Mevki</p>
                <p class="adddate">GG/AA/YYYY</p>
              </td>
            </tr>
            <tr>
              <td class="photo"> <a href="#"><img src="assest/images/simpleplayerphoto.jpg"></a> </td>
              <td>
                <a class="playernamea" href="#">Oyuncu İsmi</a>
                <p class="positioninfo">Mevki</p>
                <p class="adddate">GG/AA/YYYY</p>
              </td>
              <td class="photo"> <a href="#"><img src="assest/images/simpleplayerphoto.jpg"></a> </td>
              <td>
                <a class="playernamea" href="#">Oyuncu İsmİ</a>
                <p class="positioninfo">Mevki</p>
                <p class="adddate">GG/AA/YYYY</p>
              </td>
            </tr>


          </table>
          <hr class="hrfooter">
        </div>

      </div>
    </div>
  </div>

  <script>
    // do stuff after page load
window.addEventListener("DOMContentLoaded", function()
{
// bind event listener to the fake button
document.getElementById("fake-button").addEventListener("click", function()
{
// bind event listener to the real button
document.getElementById("real").addEventListener("change", function()
{
// extract and place the name of the file into the fake label field
document.getElementById("fake-label").value = this.files[0].name;
});

// simulate a click event on the real button
document.getElementById("real").click();
});
});
  </script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>

