var files = <?php $out = array();
foreach (glob('entrenamiento/*.jpg') as $filename) {
    $p = pathinfo($filename);
    $out[] = $p['filename'];
}
echo json_encode($out); ?>;