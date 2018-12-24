<?php

header('content-type:text/html;charset=utf-8');
ini_set('memory_limit', '128M');

require_once('CreateReward.php');
require_once('Reward.php');

$total = 50000;
$num = 300000;
$max = 50;
$min = 0.01;

$create_reward = new CreateReward();
//生成红包
$reward = $create_reward->random_red($total, $num, $max, $min);

echo "<pre>";
print_r($reward);
echo "</pre>";
?>
