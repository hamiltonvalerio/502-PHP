<?php 

// last day of August, 2017

echo date('d/m/Y', strtotime('last day of August, 2017'));

echo '<br>';

echo date('d/m/Y H:i:s', strtotime('+1 day 4 hours'));

echo '<br>';

echo date('d/m/Y', strtotime('July 25 1993'));

echo '<br>';

echo date('d', strtotime('+1 day', strtotime('25 July 1993')));