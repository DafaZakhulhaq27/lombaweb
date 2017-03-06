
  <div id="cerita">
    <div id="tuts-slider">
      <ul class="bjqs">

        <?php

        $judul = array("lala","lili") ;
        $isi = array("lala","lili") ;
        $oleh = array("lala","lili") ;

        for ($i=0;$i<count($judul);$i++)
        {?>
          <li class="bjqs-slide clone">
          <a href="#" target="_blank">

        <div class="cerita2">

           <br>
           <h1>
            <?php echo $judul[$i] ; ?>
          </h1>
          <br>

             <p>

                <?php echo $isi[$i] ; ?>

            </p>
          <br>

             <p>

                <?php echo $oleh[$i] ; ?>

            </p>
        </div>
      </a>
    </li>
        <?php } ?>
      </ul>
      </div>

  </div>
