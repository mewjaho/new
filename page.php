<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Function</title>
	<link rel="stylesheet" href="/learnphp/theme/css/bootstrap-theme.css">
</head>
<input type="text" >
						<?php
					

							$weight = 75;
							$height = 173;
							$bmi = cal_bmi($weight, $height);
							$result = cal_fat($bmi);
							show_fat($weight, $height, $bmi, $result);


							$weight = 60;
							$height = 178;
							$bmi = cal_bmi($weight, $height);
							$result = cal_fat($bmi);
							show_fat($weight, $height, $bmi, $result);
						?>

		
</body>
</html>

<?php


	function cal_bmi($weight, $height) {
		$height = $height/100;
		$bmi = $weight/($height*$height);
		return $bmi;
	}

	function cal_fat($bmi) {
		if($bmi >= 30) {
			$result = "อ้วนมาก";
		} else if($bmi >= 25) {
			$result = "อ้วน";
		} else if($bmi >= 23) {
			$result = "น้ำหนักเกิน";
		} else if($bmi >= 18.5) {
			$result = "น้ำหนักปกติ เหมาะสม";
		} else {
			$result = "ผอมเกินไป";
		}
		return $result;
	}

	function show_fat($weight, $height, $bmi, $result) {
		echo "<h2 class='mb-2'>น้ำหนัก {$weight} กก. สูง {$height} ซม. ได้ค่า BMI เป็น {$bmi}</h2>";
		echo "<h1 class='mb-5'>คุณ{$result}</h1>";
	}
?>