<?php include('header.php') ?>


    <div class="container" style="padding-top : 30px">

      

      <!-- Example row of columns -->
      <div class="row" >

        <?php for($count = 1; $count < 21; $count++) { ?>
        
          <div style="width : 100px; height : 200px; float: left; border : 1px solid #ccc; margin : 1em;">
                  
            <img data-draft-image="100/100" data-toggle="modal" data-target="#myModal" />
            <span data-draft-user="first"><!-- generates full name --></span>
            <h2>#<?php echo $count ?></h2>

          </div>

        <?php } ?>

    </div>


      </div>
      <!-- End container -->


      <?php include('footer.php') ?>
