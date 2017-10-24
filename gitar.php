<?php
require_once 'gitar1.php';
$gitar = new gitar ('nyaring','elixir','yamaha','500K');
echo"<h3>gitar</h3>";
echo"<h5>bernyanyilah sebelum dilarang</h5>";
echo "suara :".$gitar->get_suara().'<br>';
echo "senar :".$gitar->get_senar().'<br>';
echo "merek :".$gitar->get_merek().'<br>';
echo "harga_gitar :".$gitar->get_harga_gitar().'<br>';
?>