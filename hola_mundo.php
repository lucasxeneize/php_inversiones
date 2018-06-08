<?php
//Primer cometnario
echo "hola mundo";

//$id = $_GET['id'];

$admistradoras=array('SANTANDER ASSET MANAGEMENT S.A.','SCOTIA ADMINISTRADORA GENERAL DE FONDOS CHILE S.A.','CUPRUM','  BANCHILE ADMINISTRADORA GENERAL DE FONDOS S.A');
sort($admistradoras)
?>

    <?php
class agf{
    public $ID=1;
    public $Nombre="";
    public $NombreCorto="";
}

echo "prueba auto save";
?>


        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title>Document</title>
        </head>

        <body>

            <table>
                <tr>
                    <th>AGF</th>
                    <th>Tipos de Fondo</th>
                </tr>

                <?php
            
            try{
                $conexion=new PDO('mysql:host=localhost;dbname=inversiones','root','');
                echo "Conexión OK";
                /*
                $resultados = $conexion->query("SELECT * FROM administradoras");
                
                foreach($resultados as $reg){
                    echo '<tr> <td>'.$reg['Nombre'] . '</td>';
                }*/
            
                
                //Prepared Statements
                $statement = $conexion->prepare('SELECT * FROM administradoras WHERE ID=:id');
                $statement->execute(
                    array(':id' =>2)
                );
                $resultados = $statement->fetch();
                print_r($resultados);
                
            }catch(PDOExeption $e){
                echo "Error: " . $e->getMessage();
            }
                
            
            


            /*foreach($admistradoras as $administradora)
            {
                echo '<tr> <td>'. $administradora .'</td>';
                echo '<td><ul><li>FM1</li> </ul></td></tr>';
            }*/
        ?>
            </table>
        </body>

        </html>
