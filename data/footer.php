<div class="footer" id="footer">
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
            <?php foreach($soneklenenoyuncular as $sonoyuncu){ ?>
            <div class="col-1">
            <tr>
              <td style="margin-left:100px;" class="photo"> <a href="PlayerSpecial.php?id=<?= $sonoyuncu->ID ?>"><img src="<?= $sonoyuncu->resim ?>"></a> </td>
              <td style="width: 250px;">
                <a class="playernamea" href="PlayerSpecial.php?id=<?= $sonoyuncu->ID ?>"> <?= $sonoyuncu->isim ?></a>
                <p class="positioninfo"><?= $sonoyuncu->mevki ?></p>
                
              </td>
           
            </tr>
            </div>
            <?php ;} ?>

          </table>
          <hr style="color: #ffea00; height: 4px;">
        </div>

      </div>
    </div>
  </div>