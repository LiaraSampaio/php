<?php
include_once('conexao.php');

$html = '<table border=1 >';
$html .= '<thead>';
$html .= '<tr>';
$html .= '<th>USUÁRIO</th>';
$html .= '<th>EMAIL</th>';
$html .= '<th>SENHA</th>';
$html .= '<th>NÍVEL</th>';
$html .= '</tr>';
$html .= '</thead>';

$lista = mysqli_query($ligar, "SELECT * FROM tb_usuarios");
$total = mysqli_num_rows($lista);

while ($dados = mysqli_fetch_array($lista)) {

    $html .= '<tbody>';
    $html .= '<tr>';
    $html .= '<td>' . $dados['1'] . '</td>';
    $html .= '<td>' . $dados['2'] . '</td>';
    $html .= '<td>' . $dados['3'] . '</td>';
    $html .= '<td>' . $dados['4'] . '</td>';
    $html .= '</tr>';
    $html .= '</tbody>';
}

$html .= '</table>';

use Dompdf\Dompdf;

require_once('dompdf/autoload.inc.php');

$dompdf = new DOMPDF();

$dompdf->load_html('
    <img src="img/lightning56.png" alt="">

    <link rel="stylesheet" href="css/bulma.min.css">

    <h1 style="text-align: center; color: Blue;" >RELATÓRIO DE USUÁRIOS DO CENTRO</h1>' . $html . '
');

$dompdf->render();

$dompdf->stream(
    "Lista_de_Usuários.pdf",
    array("attachment" => true) // para baixar so mudar pra true
);
