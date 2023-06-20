<?php 
$d = date("j");
$m = date("M");
$a = date("Y");
$mes = array("Jan" => "jan.", "Feb" => "fev.", "Mar" => "mar.", "Apr" => "abr.", "May" => "maio", "Jun" => "jun.", "Jul" => "jul.", "Aug" => "ago.", "Sep" => "set.", "Oct" => "out.", "Nov" => "nov.", "Dec" => "dez.");

echo "$d $mes[$m] $a" ?>