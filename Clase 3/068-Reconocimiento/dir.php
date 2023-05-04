var archivos = <?php $out = array();
foreach (glob('../fotos/ventanas/*.jpg') as $filename) {
    $p = pathinfo($filename);
    $out[] = $p['filename'];
}
echo json_encode($out); ?>;