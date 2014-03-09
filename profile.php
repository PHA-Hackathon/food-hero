<?php include('header.php') ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">

        <section>
            <img data-draft-image="100/100" style="float:left; margin-right: 2em;" />
            <div>
              <h4><span data-draft-user="full"><!-- generates full name --></span></h4>
              <p data-draft-text="1/s"></p>
            </div>
          
        </section>


      </div>
    </div>

    <div class="container">

      <h2>Total Score: <span data-draft-number="2"></span></h2>

      <canvas id="myChart" width="900" height="200"></canvas>

      <!-- Example row of columns -->
      <div class="row" data-draft-repeat="3" style="margin-top : 3em;">
        <div class="col-lg-4">
        
        <h4 data-draft-date="D-r/M/j-r/Y"></h4>


        <section>

          <div data-draft-repeat="3" style="margin-bottom : 2em; border-bottom : 1px solid #ccc">
            <h3><span data-draft-number="1"></span> Points</h3>
            <img data-draft-image="30/30" data-toggle="modal" data-target="#myModal" class="pull-left" style="margin-right : 1em" />
            <div>
              <p data-draft-text="1/s"></p>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Rate this Food</h4>
                  </div>
                  <div class="modal-body">

                    <div>
                      <img data-draft-image="70/70" data-toggle="modal" data-target="#myModal" />
                    </div>

                    <div>
                      <p data-draft-text="1/s"></p>
                    </div>

                    <div style="color : orange">
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Modal -->

          </div>
        </section>


      </div>
    </div>



      <?php include('footer.php') ?>
