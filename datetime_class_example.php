<?php
	// https://startutorial.com/view/master-php-datetime
	// https://www.nikolaposa.in.rs/blog/2019/07/01/stop-using-datetime/

	// echo "<pre>";

	// - Comparison

	/*$dtObj1 = new DateTime('2021-12-07 12:22:00');
	$dtObj2 = new DateTime('2021-12-07 12:23:00');
	var_dump($dtObj1 > $dtObj2);

	echo "<br>";

	// Always put left side small dt and right side big dt
	$interval = $dtObj1->diff($dtObj2); // invert is 1 if the interval represents a negative time period and 0 otherwise.
	print_r($interval);

	echo "<br>";*/

	// - Manipulation

	/*$startedAt = new DateTime('today');
	$originalStartedAt = clone $startedAt;
	echo $startedAt->format('Y-m-d') . PHP_EOL;

	$finishedAt = $startedAt->add(new DateInterval('P2D'));
	echo $finishedAt->format('Y-m-d') . PHP_EOL;
	echo $startedAt->format('Y-m-d') . PHP_EOL;
	echo $originalStartedAt->format('Y-m-d') . PHP_EOL;
	exit;*/

	// Always use DateTimeImmutable
	/*$startedAt = new DateTimeImmutable('today');
	echo $startedAt->format('Y-m-d') . PHP_EOL;

	$finishedAt = $startedAt->add(new DateInterval('P2D'));
	echo $finishedAt->format('Y-m-d') . PHP_EOL;
	echo $startedAt->format('Y-m-d') . PHP_EOL;
	exit;*/
?>