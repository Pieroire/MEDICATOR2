<html>
    <head>
        <title>MEDICATOR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src = "<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
        
        
        <script>
             $(
                function()
                {
                    
                    $('#lstTypes').change
                    (                           
                            function()
                           {
                                // alert("de");
                                $('#txt1').val($('#lstTypes option:selected').text());
                           }
                    );    
                    $('#sub1').click
                    (
                        function()
                        {
                          ModifierTypeIndividu();
                        }
                    );
                    $('#sub2').click
                    (
                        function()
                        {  
                            //alert($('#lstTypes option:selected').val());
                          InsererTypeIndividu();
                            //InsererLeTypeIndividu(('#txt1').val());
                        }
                    );
                }
            );
  
        </script>
        
        
    </head>
    <body>
<!--        <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index"> <img src = "<?php echo base_url();?>Image/logo.png"></a><br>-->
        <div id="divTypesIndividus">
        <h1>Les Types Individus</h1>
        <div>
            <p>Veuillez saisir un type d'individus :</p>
            <input id="txt1" type="text">
            <input id="sub1" type="button" value ="Modifier"  >
            <input id="sub2" type="button" value ="Inserer">
        </div>
        
        
            <select id="lstTypes" multiple=''>
                <?php 
                    foreach($lesTypesIndividus as $types)
                        {
                        $code=0;
                        ?>
                <option name='optIndividu' value="<?php echo $types->TIN_CODE; ?>"> <?php echo $types->TIN_LIBELLE; ?> </option> 
                <?php
                      $code =$types->TIN_CODE + 1; 
                        }                       
                ?>
            </select>
        <p id="p1" hidden><?php echo $code; ?></p>       
        <div id="div1"></div> 
        <div id="div2"></div>  
        <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/GetMedicaments"> Medicaments </a><br>
        <a href="<?php echo base_url(); ?>index.php/Ctrl_Medicator/index"> Accueil </a>
        </div>
    </body>
</html>
