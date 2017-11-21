<html>
  <head>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            
     
            
            
          ['Task', 'Hours per Day'],                     
          [<?php
                foreach($visNord as $vN){
                    echo "'Nord', $vN->nbNord";
                }
          ?>],
          [<?php
                foreach($visEst as $vE){
                    echo "'Est', $vE->nbEst";
                }
          ?>],
          [<?php
                foreach($visSud as $vS){
                    echo "'Sud', $vS->nbSud";
                }
          ?>],
          [<?php
                foreach($visOuest as $vO){
                    echo "'Ouest', $vO->nbOuest";
                }
          ?>],
          [<?php
                foreach($visParis as $vP){
                    echo "'Paris', $vP->nbParis";
                }
          ?>]
        ]);

        var options = {
          title: 'Statistique des visiteurs par région'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
      
      
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    

    
    <br><br>
    
    <a href="<?php echo base_url(); ?>">Accueil</a>
    
  </body>
</html>