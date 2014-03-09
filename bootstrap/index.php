<?php include('header.php') ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">

        <section>
            <img data-draft-image="100/100" style="float:left; margin-right: 2em;" />
            <div>
              <h4>John Doe</h4>
              <p data-draft-text="1/s"></p>


<span data-draft-user="full"><!-- generates full name --></span>
<span data-draft-user="first"><!-- generates first name --></span>
<span data-draft-user="last"><!-- generates last name --></span>
<span data-draft-user="email"><!-- generates email --></span>
<span data-draft-user="username"><!-- generates username --></span>
<span data-draft-user="twitter"><!-- generates '@' + username --></span>
<span data-draft-user="phone"><!-- generates phone number --></span>
<span data-draft-user="address"><!-- generates street address --></span>
<span data-draft-user="city"><!-- generates city name --></span>
<span data-draft-user="state"><!-- generates a US state --></span>
<span data-draft-user="zip"><!-- generates a zip code --></span>
<span data-draft-user="country"><!-- generates a country --></span>



            </div>
          
        </section>


      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">



        <section>

          <div data-draft-repeat="3" style="margin-bottom : 2em; border-bottom : 1px solid #ccc">
            <img data-draft-image="30/30" data-toggle="modal" data-target="#myModal" class="pull-left" />
            <div>
              <p data-draft-text="1/s"></p>
              <div data-draft-user="full"></div> 
              <i data-draft-date="F-r/j-r"></i>
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
      <!-- End container -->


      <?php include('footer.php') ?>
