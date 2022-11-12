<?php

lotofacil(10);
exit();

function lotofacil(int $qnt){
	echo "|--------------------- Seus $qnt jogos estão aqui ---------------------|<br><br>";
	
	$all_bets = [];

	while($qnt > 0){
		$numbers = [];
		for ($i=0; $i < 15; $i++) { 
			$num = rand(1,25);
			if (! in_array($num, $numbers)) {
				array_push($numbers, $num);
			} else $i--;
		}
		sort($numbers);

		array_push($all_bets, $numbers);
		if (count($all_bets) > 1) {
			for ($i=0; $i < count($all_bets) - 1; $i++) {
				if (in_array($all_bets[$i], $all_bets[$i + 1])) {
					array_pop($all_bets);
					$qnt ++;
				}
			}
		}
		$qnt --;
	}

	foreach ($all_bets as $key => $value) {
		foreach ($value as $number) {
			echo "$number, ";
		}
		echo "<br><br>";
	}

	echo "|--------------------------------------------------------------------------------|";
}
