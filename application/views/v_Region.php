<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script type="text/javascript" src="<?php echo base_url(); ?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
        
        <script type="text/javascript">
        
         $(
            function()
            {
                $('#lstRegion').change(function(){
                        //alert('salut');
                        $('#idRegion').val($('#lstRegion').val());
                        $('#codeRegion').val($('#lstRegion').val());
                        $('#nomRegion').val($('#lstRegion option:selected').text());
                        $('#secteur').val($('#lstRegion option:selected').attr('name'));
                    });
            
            
            {
                $('#sub1').click(function(){
                    //alert($('#nomRegion').val());
                    //alert($('#lstRegion option:selected').text());
                    //alert($('#lstRegion option:selected').attr('name'));
                    //alert($('#lstRegion').val());
                    //alert($('#idRegion').val());
                    ModifierLaRegion();
                });
            };
        
        });
       
        </script>
        
        
    </head>
    <body>
        
        
        
       
        <label>Cliquez sur la région à modifier :</label> <br><br>
    
            <select id="lstRegion">
                
                    <?php


                    foreach ($lesRegions as $region)
                    {
                    ?>
                

                <option name="<?php echo $region->SEC_CODE; ?>" value="<?php echo $region->REG_CODE; ?>"><?php echo $region->REG_NOM; ?></option>
                    
                    <?php
                    }
                    ?>
            </select>
       
        
        <div>
            <input id="idRegion" hidden="" value="">
            <label>Code Région :</label> <input id="codeRegion" disabled><br><br>
            <label>Secteur :</label> <input id="secteur" disabled><br><br>
            <label>Nom de la Région :</label> <input id="nomRegion" type="text"> <input id="sub1" type="button" value ="Modifier"  >
            
            
        </div>
        
        <div id="divR"></div>
        <br><br>
        <a href="<?php echo base_url(); ?>">Accueil</a>
        
        
    </body>
</html>

