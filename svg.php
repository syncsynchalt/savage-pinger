<?php

$height = intval($_REQUEST['height']);
$width = intval($_REQUEST['width']);
$type = $_REQUEST['type'];
$svg = $_REQUEST['svg'];

$svgfile = tempnam('/tmp', '_SVG');
$handle = fopen($svgfile, "w");
fwrite($handle, $svg);
fclose($handle);

$pngfile = tempnam('/tmp', '_PNG');
system("inkscape -z -e $pngfile -w $width -h $height $svgfile >> /tmp/inkscape.log 2>&1");

header("Content-Type: $type");
header("Content-Disposition: attachment; filename=chart.png");
$handle = fopen($pngfile, "r");
fpassthru($handle);
fclose($handle);

unlink($svgfile);
unlink($pngfile);
