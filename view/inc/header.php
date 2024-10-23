<!DOCTYPE html >
<html lang="es">
    <head>
        <meta name="author" content="Javier Tomás Tormo">
        <title>HomeDrop </title>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="copyright" content="HomeDrop.com" />
        
        
        <!-- BOOTSTRAP CORE STYLE CSS -->
        <link href="view/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLE CSS 
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />-->
        <!-- CUSTOM STYLE CSS -->
       <link rel="stylesheet" href="view/css/styleHomeDrop.css">


        <link rel="icon" href="HomeDrop\view\img\favicon.ico"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
        <script src="model/validateForm.js"></script>
        <script src="model/promises.js"></script>


        <style>
            @import url('https://fonts.cdnfonts.com/css/neck-l-sans');
        </style>
        
        <script type="text/javascript">
            $(function(){
                $('#fecha_pub').datepicker({
                    dateformat: 'dd/mm/yyyy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '2000:2100',
                    onSelect: function(selectedDate) {

                    }
                
                });

            });
        </script>    

    </head>
    <body>

    <div id="header">

        

        <div>
            <!--   <h1 align="center"> <p class="texto-dorado">H&#920;M&#926;DR&#920;P</p></h1>-->
            <h3 class="texto-dorado" align="center">Panel de Administrador</h3>
            <hr width="80%">
            
        </div>
    </div>
    <div>