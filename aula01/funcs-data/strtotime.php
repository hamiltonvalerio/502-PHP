<?php 

echo strtotime('now');
echo '<br>';
echo strtotime('25 July 1993');
echo '<br>';
echo strtotime('+1 day');
echo '<br>';
echo strtotime('+1 day 4 hours');
echo '<br>';
echo strtotime('+1 week');
echo '<br>';
echo strtotime('next Monday');
echo '<br>';
echo strtotime('last Saturday');
echo '<br>';
echo strtotime('+1 day', strtotime('25 July 1993'));