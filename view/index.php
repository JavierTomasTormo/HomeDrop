<?php
    //var_dump($dato); #Saber que datos estamos importando de la BD
    require_once("inc/nav.php"); 
?>
<br/>
<?php    
    require_once("inc/header.php");
    
?>
<br/>
        <div class="diveand">
            <a href="index.php?m=nuevo" class="btnn">Crear Registro</a>               
            <a href="index.php?m=dummies_Homedrop" onclick="return confirm('\nSeguro que quieres cargar los dummies? \n\nSe eliminarán todos los registros actuales!'); false" 
                class="btnn">Dummies</a>

        </div>        
<div></div>
    <marquee class="Dorado_SubString" loop="infinite" scrollamount="8">Web en Desarrollo Administrada y 
        Programada por Javier Tomás Tormo 1rDAW (2023/2024)</marquee>


<br/>
        <div class="diveand">        </div>
        <table class="Dorado_SubString" >
            
            <tr>
                <td>  ID  </td>
                <td>  ID_Reference  </td>
                <td>  m²  </td>
                <td>  Fecha_Pub  </td>
                <td>  Habitaciones  </td>   
                <td>  Preu  </td>
                <td>  email  </td>
                <td>  Dirección  </td>
                <td>  Baños  </td>
                <td>  Extras  </td>
                <td>  ACCIONES  </td>
            </tr>
            
            <tbody>

                <?php 
                    if(!empty($dato)){
                        foreach($dato as $key => $value){
                            foreach ($value as $v):
                ?>
                <tr>
                    <td><?php echo $v['ID'] ?></td>
                    <td><?php echo $v['ID_Reference'] ?></td>
                    <td><?php echo $v['m²'] ?></td>
                    <td><?php echo $v['Fecha_Pub'] ?></td>
                    <td><?php echo $v['Habitaciones'] ?></td>
                    <td><?php echo $v['Preu'] ?></td>
                    <td><?php echo $v['email'] ?></td>
                    <td><?php echo $v['Direccion'] ?></td>
                    <td><?php echo $v['Baños'] ?></td>
                    <td><?php echo $v['extras'] ?></td>
                    <td>
                        <br/>
                        <?php print ("<div class='HomeDropModal' id='".$v['ID']."'><div class='btn'> Read </div></div>");  //READ?>
                                
                        <div style="margin-bottom: 11%;"><a class="btn" href="index.php?m=editar&id=<?php echo $v['ID']?>">Editar</a></div>
                        
                        <div style="text-align: center;"><a class="btn" href="index.php?m=eliminar&id=<?php echo $v['ID']?>" 
                            onclick="return confirm('Seguro que quieres eliminar este registro?'); false">Borrar</a></div>
                    </td>
                </tr>
                <?php 
                    endforeach;
                } 
                    }else{
                ?>
                    <tr>
                        <td colspan="10">No Hay Registros</td>
                    </tr>
                <?php } ?>

            </tbody> 
               
        </table>


<section id="HomeDropModalSection">
    <!--Aqui se añadiran los parametros despues del promise!?-->
</section>

<?php    
    require_once("inc/footer.php");
?>
