<style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
}
-->
</style>
<page backcolor="#FEFEFE" backimg="./res/bas_page.png" backimgx="center" backimgy="bottom" backimgw="100%" backtop="0" backbottom="30mm" footer="date;heure;page" style="font-size: 12pt">
    <bookmark title="Lettre" level="0" ></bookmark>
    <table cellspacing="0" style="width: 100%; text-align: center; font-size: 14px">
        <tr>
            <td style="width: 75%;">
            </td>
            <td style="width: 25%; color: #444444;">
                <img style="width: 100%;" src="./res/logo.jpg" alt="Logo"><br>
                REPORTE DE CLIENTE
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Client :</td>
            <td style="width:36%">M. Albert Dupont</td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Dirección :</td>
            <td style="width:36%">
                Résidencia la Rivera<br>
                1, avenida de los Remedios<br>
                234- Sn. Miguel de las Piedras<br>
            </td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Email :</td>
            <td style="width:36%">nomail@domain.com</td>
        </tr>
        <tr>
            <td style="width:50%;"></td>
            <td style="width:14%; ">Tel :</td>
            <td style="width:36%">33 (0) 1 00 00 00 00</td>
        </tr>
    </table>
    <br>    
    <br>
    <i> 
        Tula Hidalgo a: <?php echo date('d/m/Y'); ?><br>
        <b><u>Folio </u>: &laquo; 1 &raquo;</b><br>
        No de cliente: 200<br>
    </i>
    <br>
    <br>
    Estimado cliente,<br>
    <br>
    <br>
   Le informamos que el reporte  <b>1 </b> Indica a continuacion  los articulos que se recibieron.<br>
    <br>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 12%">Producto</th>
            <th style="width: 52%">Servicio</th>
            <th style="width: 13%">Condiciones</th>
            <th style="width: 10%">Compañia</th>
            <th style="width: 13%">Cantidad</th>
        </tr>
    </table>
<?php
    $nb = rand(5, 11);
    $produits = array();
    $productos = array('LG4350', 'Auricular Sony', 'Cargador', 'Touch', 'Teclado' );
    $servicios = array('Actualizar Android', 'No se escucha', 'Soldar conecxion', 'Cambiar Pantalla', 'Reparar entrada usb' );
    $total = 0;
    for ($k=0; $k<4; $k++) {
        $num = rand(100000, 999999);
        $nom = $productos[$k];
        $servicio = $servicios[$k];
        $qua = rand(1, 20);
        $prix = rand(100, 9999)/100.;
        $total+= $prix*$qua;
        $produits[] = array($num, $nom, $qua, $prix, rand(0, $qua));
?>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #F7F7F7; text-align: center; font-size: 10pt;">
        <tr>
            <td style="width: 17%; text-align: left; border: solid 1px black;"><?php echo $nom; ?></td>
            <td style="width: 47%; text-align: left; border: solid 1px black;"><?php echo $servicio; ?></td>
            <td style="width: 13%; text-align: right; border: solid 1px black;">Buen estado </td>
            <td style="width: 10%; border: solid 1px black;">Telcel</td>
            <td style="width: 13%; text-align: right; border: solid 1px black;">$<?php echo number_format($prix*$qua, 2, ',', ' '); ?> </td>
        </tr>
    </table>
<?php
    }
?>
    <table cellspacing="0" style="width: 100%; border: solid 1px black; background: #E7E7E7; text-align: center; font-size: 10pt;">
        <tr>
            <th style="width: 87%; text-align: right;">Total : </th>
            <th style="width: 13%; text-align: right;">$<?php echo number_format($total, 2, ',', ' '); ?></th>
        </tr>
    </table>
    <br>
    Este reporte concierne a la cantidad de productos recibidos para su mantenimiento asi como a las condiciones con las que se recibe y el precio 
    de reparacion por cada producto.
    <br>
    Por lo que el cliente da fe de que lo indicado en el documento y del mismo modo nos comprometemos a entregar el producto en el estado actual, asi como
    aplicar la reparacion correspondiente. <br>
    <br>
   A la fecha de entrega el cliente debera de concluir con el pago que se registro por el servicio.
   <br>

    <nobreak>
        <br>
        Estimado cliente con esto aseguramos el funcionamiento de nuestro servicio y le proporcionaremos la mejor solucion.<br>
        <br>
        <table cellspacing="0" style="width: 100%; text-align: left;">
            <tr>
                <td style="width:50%;"></td>
                <td style="width:50%; ">
                   Servicio de telefonia MiEmpresa<br>
                    Servicio al cliente:<br>
                    Tel : 33 (0) 1 00 00 00 00<br>
                    Email : MiEmpresa@mail.com<br>
                </td>
            </tr>
        </table>
    </nobreak>
</page>