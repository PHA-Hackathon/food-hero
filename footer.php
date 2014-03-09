
      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    
    </div> <!-- /container -->        


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script type="text/javascript" src="js/jquery.roughdraft.js"></script>


        <script src="js/chart.js"></script>

        <script type="text/javascript">

            var data = {
                labels : ["January","February","March","April","May","June","July"],
                datasets : [
                    {
                        fillColor : "rgba(220,220,220,0.5)",
                        strokeColor : "rgba(220,220,220,1)",
                        pointColor : "rgba(220,220,220,1)",
                        pointStrokeColor : "#fff",
                        data : [65,59,90,81,56,55,40]
                    },
                    {
                        fillColor : "rgba(151,187,205,0.5)",
                        strokeColor : "rgba(151,187,205,1)",
                        pointColor : "rgba(151,187,205,1)",
                        pointStrokeColor : "#fff",
                        data : [28,48,40,19,96,27,100]
                    }
                ]
            }


            //Get the context of the canvas element we want to select
    
            var myLine = new Chart(document.getElementById("myChart").getContext("2d")).Line(data);
            

        </script>

        <script type="text/javascript">
 
            $(function(){
              $(window).roughDraft({
                  'author' : 'bacon',
                  'illustrator' : 'placekitten'                
              });
            });

        </script>


        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
