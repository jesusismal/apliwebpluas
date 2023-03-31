<?php

require('../../static/fpdf181/fpdf.php');

require '../config/config.php';
require '../data/DataConection.php';
require '../modelo/Venta.php';
require '../modelo/Cliente.php';
require '../modelo/Venta_detalle.php';
require '../interfaz/IVenta.php';
require '../modelo/Categoria_articulo.php';
require '../modelo/Articulo.php';
require '../dao/VentaDao.php';

$pdf = new FPDF();
$f = (object) $_GET;
$daoVenta = new VentaDao();

$venta = $daoVenta->buscar($f->numero);
$cliente = $daoVenta->buscarCliente($venta->cliId);


//Cabecera
$pdf->AddPage();

//$pdf->Image('../../static/img/menu/logo_palestina_2.0.png',10,10,20,20);

$pdf->SetFont('Arial', '', 9);
$pdf->SetXY(30,0);
$pdf->Cell(10,40,'FERRETERIA PLUAS"');
$pdf->SetXY(30,5);
$pdf->Cell(10,40,'Email: pluas@gmail.com');
$pdf->SetXY(30,10);
$pdf->Cell(10,40,'Direccion: Daule, Ecuador');


$pdf->SetFont('Arial', '', 9);
$pdf->SetXY(130,0);
$pdf->Cell(10,40,'Factura No.'.$venta->venId);
$pdf->SetXY(130,5);
$pdf->Cell(10,40,'Fecha y Hora : '.$venta->fecha);
$pdf->SetXY(130,10);
$pdf->Cell(10,40,'Telefono : 0942376523');

$pdf->Line(10,35,200,35);

//Proveedor

// //Compra
$pdf->Ln(25);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(190,7, '|| Datos del Cliente', 0, 0, 'L');
// $pdf->Ln(2);
$pdf->SetFont('Arial', '', 9);
$pdf->SetXY(10,25);
$pdf->Cell(100,40,'Razon social/nombres y apellidos: '.$cliente->nombre." ".$cliente->apellido);
$pdf->Cell(40,40,'Telefono: '.$cliente->telefono);
$pdf->Cell(55,40,'Email: '.$cliente->email);
$pdf->SetXY(10,30);
$pdf->Cell(140,40, 'Direccion: '.$cliente->direccion);
$pdf->Cell(145,40, 'Pago :  '.($venta->contado==1?'Contado':' Credito'));


//Detalle de la Compra

$pdf->Line(10,55,200,55);
$pdf->Ln(25);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(190,7, '|| Detalle de la Venta', 0, 0, 'L');

$pdf->Ln(8);
$pdf->SetFillColor(300);
$pdf->SetFont('Arial', 'B', 10);

$pdf->Cell(20, 7, 'Num', 1, 0, 'C', 1);
$pdf->Cell(110, 7, 'Articulo', 1, 0, 'C', 1);
$pdf->Cell(20, 7, 'Cantidad', 1, 0, 'C', 1);
$pdf->Cell(20, 7, 'Precio', 1, 0, 'C', 1);
$pdf->Cell(20, 7, 'Total Art', 1, 0, 'C', 1);

$pdf->Ln(6);
$pdf->SetFont('Arial', '', 8);
$detalles = $daoVenta->buscarDetalles($venta->venId); 
 $i = 0;
foreach ($detalles as $fila) {
    if($i % 2 == 0){
        $pdf->SetFillColor(235);
    }else{
        $pdf->SetFillColor(300);
    }
    $pdf->Cell(20, 6, $i, 1, 0, 'C', 1);
    $pdf->Cell(110, 6, $fila->articulo, 1, 0, 'L', 1);
    $pdf->Cell(20, 6, $fila->cantidad, 1, 0, 'R', 1);
    $pdf->Cell(20, 6,'$'. $fila->precio, 1, 0, 'R', 1);
    $pdf->Cell(20, 6,'$'. $fila->totalitem, 1, 0, 'R', 1);
    $i++;
    $pdf->Ln(6);
}

//Compra Totales
$pdf->Cell(130,5);
$pdf->Cell(40,5,"SUBTOTAL",1,0,'C');
$pdf->Cell(20,5," $ ".$venta->subtotal,1,0,'R');

$pdf->Ln(5);
$pdf->Cell(130,5);
$pdf->Cell(40,5,"DESCUENTO",1,0,'C');
$pdf->Cell(20,5," $ ".$venta->descuento,1,0,'R');

$pdf->Ln(5);
$pdf->Cell(130,7);
$pdf->Cell(40,5,"IMPUESTO",1,0,'C');
$pdf->Cell(20,5," $ ".$venta->impuesto,1,0,'R');

$pdf->Ln(5);
$pdf->Cell(130,7);
$pdf->Cell(40,5,"TOTAL",1,0,'C');
$pdf->Cell(20,5," $ ".$venta->total,1,0,'R');
 
//$pdf->Multicell(400,4, "Nota: ".$rowrepar['notapresu']);

$pdf->Output();
