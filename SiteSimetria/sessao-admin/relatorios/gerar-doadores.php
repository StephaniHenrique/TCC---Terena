<?php

include_once '../bd_connect/conexao.php';
$html = '<table class="content-table">'; 
$html .= '<thead>';
$html .= '<tr>';
$html .= '<th>ID</th>';
$html .= '<th>Nome</th>';
$html .= '<th>CPF</th>';
$html .= '<th>Data de Nascimento</th>';
$html .= '<th>Cidade</th>';
$html .= '<th>Estado</th>';
$html .= '</tr>';
$html .= '</thead>';
$html .= '<tbody>';
$html .= '<style> * {font-family: sans-serif; } </style>';
$html .= '<style>.content-table {border-collapse: collapse; margin: 25px 0;font-size: 0.9em;min-width: 400px;border-radius: 5px 5px 0 0;overflow: hidden;box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);}</style>';
$html .= '<style> .content-table thead tr {background-color: #8257E5; color: #ffffff;text-align: left;font-weight: bold;} </style>';
$html .= '<style>.content-table th, .content-table td {padding: 12px 15px;} </style>';
$html .= '<style> .content-table tbody tr { border-bottom: 1px solid #dddddd;} </style>';
$html .= '<style> .content-table tbody tr:nth-of-type(even) { background-color:  #fdfcfc;} .content-table tbody tr { background-color:#f3f3f3 ;}</style>';
$html .= '<style>.content-table tbody tr:last-of-type {border-bottom: 2px solid #8257E5;} </style>';
$html .= '<style> .content-table tbody tr.active-row {font-weight: bold;color: #8257E5;} </style>';
$data  = date("d-m-Y | h:i:s"); 




	$result_doadores = "SELECT * FROM tbusers WHERE codNivel LIKE 3";
    $resultado_doadores = mysqli_query($conn, $result_doadores);
    while ($row_doadores = mysqli_fetch_assoc($resultado_doadores)){
        $html .= '<tr><td>'.$row_doadores['codUsers'] . "</td>";
        $html .= '<td>'.$row_doadores['nomeUsers'] . "</td>";
        $html .= '<td>'.$row_doadores['cpfUsers'] . "</td>";
        $html .= '<td>'.$row_doadores['nascUsers'] . "</td>";
        $html .= '<td>'.$row_doadores['cidadeUsers'] . "</td>";
        $html .= '<td>'.$row_doadores['ufUsers'] . "</td></tr>";
        
    }
   
    $html .= '</tbody>';
    $html .= '</table';

    use Dompdf\Dompdf;

    require_once("dompdf/autoload.inc.php");

    $dompdf = new DOMPDF();

    $dompdf->loadHtml('
    <h1 style="text-align: center; color:#8257E5;">Simetria</h1>
    <h2 style="text-align: center; color:#58565c;">Registros de Doadores</h2>
    <p style="text-align: center;">'. $data .$html .'
    ');
    
        
    $dompdf->setPaper('A4');    
    $dompdf->render();

    $dompdf->stream(
        "Simetria-Doadores.pdf", 
        array(
            "Attachment" => true
        )
    );
?>

