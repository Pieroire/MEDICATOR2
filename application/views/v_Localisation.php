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
                $('#lstVis').change(function(){
                        //alert('salut');
                        $('#visSelect').val($('#lstVis option:selected').text());
                        $('#visDate').val($('#lstVis option:selected').attr('name'));
                        //alert($('#lstVis option:selected').val())
                        //alert($('#lstVis option:selected').attr('name'));
                        
                    });
            
        {
            $('#lstReg').change(function(){
                        $('#regSelect').val($('#lstReg option:selected').text());
                        //alert($('#lstReg option:selected').val());
            });
            
            
        }
            
        {
            $(btnT).click(function(){
                //alert($('#textareaT').val());
                InsererUnTravailleur();
                alert("Vous avez selectionné "+$('#lstVis option:selected').text()+" travaillant depuis "+$('#lstVis option:selected').attr('name')+" dans la région "+$('#lstReg option:selected').text());
                
            });
        }
            
            });
        
        
        
        

            
        
        </script>
        
        
        
        
        
        
        
    </head>
    <body>
        <a href="<?php echo base_url(); ?>"><img src = "<?php echo base_url();?>Image/medicament.png" style="width: 50px; height: 50px;"></a>
        
        <br>
        
        <label>Selectionnez un visiteur et la région dans laquelle il travaille :</label><br><br>
        
        <select id="lstVis">
            
            <?php


                    foreach($lesVisiteurs as $visiteur)
                    {
                    ?>
                

                <option name="<?php echo $visiteur->VIS_DATEEMBAUCHE; ?>" value="<?php echo $visiteur->VIS_MATRICULE; ?>"><?php echo $visiteur->VIS_NOM; ?></option>
                    
                    <?php
                    }
                    ?>
            
                
            
            
            
        </select>
        
        <input type="text" id="visSelect" placeholder="Visiteur sélectionné" disabled>
        
        <br><br>
        
        <label>Date d'embauche : </label> <input type="text" id="visDate" disabled>
        
        <br><br>
        
        <select id="lstReg">
                
                    <?php


                    foreach ($lesRegions as $region)
                    {
                    ?>
                

                <option value="<?php echo $region->REG_CODE; ?>"><?php echo $region->REG_NOM; ?></option>
                    
                    <?php
                    }
                    ?>
        </select>
        
        <input type="text" id="regSelect" placeholder="Région sélectionnée" disabled>
        
        <br><br>
        
        <textarea id="textareaT" placeholder="Ajouter un commentaire sur le travail du visiteur..." style="height: 100px; width: 350px;"></textarea>
        
        <br><br>
        
        
        <input type="button" id="btnT" value="Insérer">
        
        <div id="divT" hidden></div>
            
       
        
        
        
        
        
        
    </body>
</html>
