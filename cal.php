
<?php	

$sex=$_POST['sex'];
$da=$_POST['da'];
$weight=$_POST['weight'];
$head=$_POST['head'];
$height=$_POST['height'];				
				
if ($sex==1){
	if ($da==2){
	if ($weight==0){
	$wei = "";
 }else if ($weight >= 8.1){
	$wei = "Percentile 999 ";		
 } else if ($weight >= 7.4){
	$wei = "Percentile 99";
 }else if ($weight >= 7.0){
	$wei = "Percentile 97";
 }else if ($weight >= 6.8){
	$wei = "Percentile 95";
							}else if ($weight >= 6.5){
	$wei = "Percentile 90 ";
							}else if ($weight >= 6.3){
	$wei = "Percentile 85 ";
							}else if ($weight >= 6){
	$wei = "Percentile 75 ";
							}else if ($weight >= 5.6){
	$wei = "Percentile 50 ";
							}else if ($weight >= 5.1){
	$wei = "Percentile 25 ";
							}else if ($weight >= 4.9){
	$wei = "Percentile 15 ";
							}else if ($weight >= 4.7){
	$wei = "Percentile 10 ";
							}else if ($weight >= 4.5){
	$wei = "Percentile 5 ";
							}else if ($weight >= 4.4){
	$wei = "Percentile 3 ";
							}else if ($weight >= 4.1){
	$wei = "Percentile 1 ";
 }else {
	$wei = "Percentile 0";}

	// ส่วนสูงเทียบอายุ
	if ($height == 0){
		$hi = "" ;
		}else if ($height >= 64.6){
			$hi = "Percentile 999";
											}else if ($height >= 63.1){
			$hi = "Percentile 99";
											}else if ($height >= 62.2){
			$hi = "Percentile 97";
											}else if ($height >= 61.7){
			$hi = "Percentile 95";
											}else if ($height >= 61){
			$hi = "Percentile 90";
											}else if ($height >= 60.5){
			$hi = "Percentile 85";
											}else if ($height >= 59.8){
			$hi = "Percentile 75";
											}else if ($height >= 58.4){
			$hi = "Percentile 50";
											}else if ($height >= 57.1){
			$hi = "Percentile 25";
											}else if ($height >= 56.4){
			$hi = "Percentile 15";
											}else if ($height >= 55.9){
			$hi = "Percentile 10";
		} else if ($height >= 55.1){
			$hi = "Percentile 5";
		}else if ($height >= 54.7){
			$hi = "Percentile 3";
		}else if ($height >= 53.8){
			$hi = "Percentile 1";
		}else {
			$hi = "Percentile 0";}

	// เส้นรอบศรีษะ
	if ($head == 0){
		$had = "" ;
		}else if ($head >= 42.8){
			$had = "Percentile 999";
											}else if ($head >= 41.9){
			$had = "Percentile 99";
											}else if ($head >= 41.3){
			$had = "Percentile 97";
											}else if ($head >= 41.1){
			$had = "Percentile 95";
											}else if ($head >= 40.6){
			$had = "Percentile 90";
											}else if ($head >= 40.3){
			$had = "Percentile 85";
											}else if ($head >= 39.9){
			$had = "Percentile 75";
											}else if ($head >= 39.1){
			$had = "Percentile 50";
											}else if ($head >= 38.3){
			$had = "Percentile 25";
											}else if ($head >= 37.9){
			$had = "Percentile 15";
											}else if ($head >= 37.6){
			$had = "Percentile 10";
		} else if ($head >= 37.2){
			$had = "Percentile 5";
		}else if ($head>= 36.9){
			$had = "Percentile 3";
		}else if ($head >= 36.4){
			$had = "Percentile 1";
		}else {
			$had = "Percentile 0";}	}}								
if ($sex==1){
	if ($da==4){	
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 9.8){
			$wei = "Percentile 999 ";		
		} else if ($weight >= 9.1){
			$wei = "Percentile 99";
		}else if ($weight >= 8.6){
			$wei = "Percentile 97";
		}else if ($weight >= 8.4){
			$wei = "Percentile 95";
									}else if ($weight >= 8.1){
			$wei = "Percentile 90 ";
									}else if ($weight >= 7.9){
			$wei = "Percentile 85 ";
									}else if ($weight >= 7.6){
			$wei = "Percentile 75 ";
									}else if ($weight >= 7){
			$wei = "Percentile 50 ";
									}else if ($weight >= 6.5){
			$wei = "Percentile 25 ";
									}else if ($weight >= 6.2){
			$wei = "Percentile 15 ";
									}else if ($weight >= 6){
			$wei = "Percentile 10 ";
									}else if ($weight >= 5.8){
			$wei = "Percentile 5 ";
									}else if ($weight >= 5.6){
			$wei = "Percentile 3 ";
									}else if ($weight >= 5.4){
			$wei = "Percentile 1 ";
		}else {
			$wei = "Percentile 0";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 70.3){
					$hi = "Percentile 999";
													}else if ($height >= 68.7){
					$hi = "Percentile 99";
													}else if ($height >= 67.8){
					$hi = "Percentile 97";
													}else if ($height >= 67.3){
					$hi = "Percentile 95";
													}else if ($height >= 66.6){
					$hi = "Percentile 90";
													}else if ($height >= 66){
					$hi = "Percentile 85";
													}else if ($height >= 65.3){
					$hi = "Percentile 75";
													}else if ($height >= 63.9){
					$hi = "Percentile 50";
													}else if ($height >= 62.5){
					$hi = "Percentile 25";
													}else if ($height >= 61.7){
					$hi = "Percentile 15";
													}else if ($height >= 61.2){
					$hi = "Percentile 10";
				} else if ($height >= 60.5){
					$hi = "Percentile 5";
				}else if ($height >= 60){
					$hi = "Percentile 3";
				}else if ($height >= 59){
					$hi = "Percentile 1";
				}else {
					$hi = "Percentile 0";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 45.3){
					$had = "Percentile 999";
													}else if ($head >= 44.4){
					$had = "Percentile 99";
													}else if ($head >= 43.9){
					$had = "Percentile 97";
													}else if ($head >= 43.6){
					$had = "Percentile 95";
													}else if ($head >= 43.2){
					$had = "Percentile 90";
													}else if ($head >= 42.9){
					$had = "Percentile 85";
													}else if ($head >= 42.4){
					$had = "Percentile 75";
													}else if ($head >= 41.6){
					$had = "Percentile 50";
													}else if ($head >= 40.8){
					$had = "Percentile 25";
													}else if ($head >= 40.4){
					$had = "Percentile 15";
													}else if ($head >= 40.1){
					$had = "Percentile 10";
				} else if ($head >= 39.7){
					$had = "Percentile 5";
				}else if ($head>= 39.4){
					$had = "Percentile 3";
				}else if ($head >= 35.5){
					$had = "Percentile 1";
				}else {
					$had = "Percentile 0";}	}}		
if ($sex==1){
	if ($da==6){
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 11.1){
			$wei = "Percentile 999 ";		
		} else if ($weight >= 10.2){
			$wei = "Percentile 99";
		}else if ($weight >= 9.7){
			$wei = "Percentile 97";
		}else if ($weight >= 9.5){
			$wei = "Percentile 95";
									}else if ($weight >= 9.1){
			$wei = "Percentile 90 ";
									}else if ($weight >= 8.9){
			$wei = "Percentile 85 ";
									}else if ($weight >= 8.5){
			$wei = "Percentile 75 ";
									}else if ($weight >= 7.9){
			$wei = "Percentile 50 ";
									}else if ($weight >= 7.4){
			$wei = "Percentile 25 ";
									}else if ($weight >= 7.1){
			$wei = "Percentile 15 ";
									}else if ($weight >= 6.9){
			$wei = "Percentile 10 ";
									}else if ($weight >= 6.6){
			$wei = "Percentile 5 ";
									}else if ($weight >= 6.4){
			$wei = "Percentile 3 ";
									}else if ($weight >= 6.1){
			$wei = "Percentile 1 ";
		}else {
			$wei = "Percentile 0";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 74.2){
					$hi = "Percentile 999";
													}else if ($height >= 72.6){
					$hi = "Percentile 99";
													}else if ($height >= 71.6){
					$hi = "Percentile 97";
													}else if ($height >= 71.1){
					$hi = "Percentile 95";
													}else if ($height >= 70.4){
					$hi = "Percentile 90";
													}else if ($height >= 69.8){
					$hi = "Percentile 85";
													}else if ($height >= 69.1){
					$hi = "Percentile 75";
													}else if ($height >= 67.6){
					$hi = "Percentile 50";
													}else if ($height >= 66.2){
					$hi = "Percentile 25";
													}else if ($height >= 65.4){
					$hi = "Percentile 15";
													}else if ($height >= 64.9){
					$hi = "Percentile 10";
				} else if ($height >= 64.1){
					$hi = "Percentile 5";
				}else if ($height >= 63.6){
					$hi = "Percentile 3";
				}else if ($height >= 62.6){
					$hi = "Percentile 1";
				}else {
					$hi = "Percentile 0";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 47.1){
					$had = "Percentile 999";
													}else if ($head >= 46.2){
					$had = "Percentile 99";
													}else if ($head >= 45.6){
					$had = "Percentile 97";
													}else if ($head >= 45.3){
					$had = "Percentile 95";
													}else if ($head >= 44.9){
					$had = "Percentile 90";
													}else if ($head >= 44.6){
					$had = "Percentile 85";
													}else if ($head >= 44.2){
					$had = "Percentile 75";
													}else if ($head >= 43.3){
					$had = "Percentile 50";
													}else if ($head >= 42.5){
					$had = "Percentile 25";
													}else if ($head >= 42.1){
					$had = "Percentile 15";
													}else if ($head >= 41.8){
					$had = "Percentile 10";
				} else if ($head >= 41.3){
					$had = "Percentile 5";
				}else if ($head>= 41){
					$had = "Percentile 3";
				}else if ($head >= 40.5){
					$had = "Percentile 1";
				}else {
					$had = "Percentile 0";}	}}				
if ($sex==1){
	if ($da==9){
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 12.4){
			$wei = "Percentile 999 ";		
		} else if ($weight >= 11.4){
			$wei = "Percentile 99";
		}else if ($weight >= 10.9){
			$wei = "Percentile 97";
		}else if ($weight >= 10.6){
			$wei = "Percentile 95";
									}else if ($weight >= 10.2){
			$wei = "Percentile 90 ";
									}else if ($weight >= 10){
			$wei = "Percentile 85 ";
									}else if ($weight >= 9.6){
			$wei = "Percentile 75 ";
									}else if ($weight >= 8.9){
			$wei = "Percentile 50 ";
									}else if ($weight >= 8.3){
			$wei = "Percentile 25 ";
									}else if ($weight >= 7.9){
			$wei = "Percentile 15 ";
									}else if ($weight >= 7.7){
			$wei = "Percentile 10 ";
									}else if ($weight >= 7.4){
			$wei = "Percentile 5 ";
									}else if ($weight >= 7.2){
			$wei = "Percentile 3 ";
									}else if ($weight >= 6.9){
			$wei = "Percentile 1 ";
		}else {
			$wei = "Percentile 0";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 78.9){
					$hi = "Percentile 999";
													}else if ($height >= 77.2){
					$hi = "Percentile 99";
													}else if ($height >= 76.2){
					$hi = "Percentile 97";
													}else if ($height >= 75.7){
					$hi = "Percentile 95";
													}else if ($height >= 74.8){
					$hi = "Percentile 90";
													}else if ($height >= 74.3){
					$hi = "Percentile 85";
													}else if ($height >= 73.5){
					$hi = "Percentile 75";
													}else if ($height >= 72){
					$hi = "Percentile 50";
													}else if ($height >= 70.5){
					$hi = "Percentile 25";
													}else if ($height >= 69.6){
					$hi = "Percentile 15";
													}else if ($height >= 69.1){
					$hi = "Percentile 10";
				} else if ($height >= 68.3){
					$hi = "Percentile 5";
				}else if ($height >= 67.7){
					$hi = "Percentile 3";
				}else if ($height >= 66.8){
					$hi = "Percentile 1";
				}else {
					$hi = "Percentile 0";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 42.8){
					$had = "Percentile 999";
													}else if ($head >= 41.9){
					$had = "Percentile 99";
													}else if ($head >= 41.3){
					$had = "Percentile 97";
													}else if ($head >= 41.1){
					$had = "Percentile 95";
													}else if ($head >= 40.6){
					$had = "Percentile 90";
													}else if ($head >= 40.3){
					$had = "Percentile 85";
													}else if ($head >= 39.9){
					$had = "Percentile 75";
													}else if ($head >= 39.1){
					$had = "Percentile 50";
													}else if ($head >= 38.3){
					$had = "Percentile 25";
													}else if ($head >= 37.9){
					$had = "Percentile 15";
													}else if ($head >= 37.6){
					$had = "Percentile 10";
				} else if ($head >= 37.2){
					$had = "Percentile 5";
				}else if ($head>= 36.9){
					$had = "Percentile 3";
				}else if ($head >= 36.4){
					$had = "Percentile 1";
				}else {
					$had = "Percentile 0";}	}}
if ($sex==1){
	if ($da==12){
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 13.5){
			$wei = "Percentile 999 ";		
		} else if ($weight >= 12.4){
			$wei = "Percentile 99";
		}else if ($weight >= 11.8){
			$wei = "Percentile 97";
		}else if ($weight >= 11.5){
			$wei = "Percentile 95";
									}else if ($weight >= 11.1){
			$wei = "Percentile 90 ";
									}else if ($weight >= 10.8){
			$wei = "Percentile 85 ";
									}else if ($weight >= 10.4){
			$wei = "Percentile 75 ";
									}else if ($weight >= 9.6){
			$wei = "Percentile 50 ";
									}else if ($weight >= 9){
			$wei = "Percentile 25 ";
									}else if ($weight >= 8.6){
			$wei = "Percentile 15 ";
									}else if ($weight >= 8.4){
			$wei = "Percentile 10 ";
									}else if ($weight >= 8.1){
			$wei = "Percentile 5 ";
									}else if ($weight >= 7.8){
			$wei = "Percentile 3 ";
									}else if ($weight >= 7.5){
			$wei = "Percentile 1 ";
		}else {
			$wei = "Percentile 0";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 83.1){
					$hi = "Percentile 999";
													}else if ($height >= 81.3){
					$hi = "Percentile 99";
													}else if ($height >= 80.2){
					$hi = "Percentile 97";
													}else if ($height >= 79.7){
					$hi = "Percentile 95";
													}else if ($height >= 78.8){
					$hi = "Percentile 90";
													}else if ($height >= 78.2){
					$hi = "Percentile 85";
													}else if ($height >= 77.4){
					$hi = "Percentile 75";
													}else if ($height >= 75.7){
					$hi = "Percentile 50";
													}else if ($height >= 74.1){
					$hi = "Percentile 25";
													}else if ($height >= 73.3){
					$hi = "Percentile 15";
													}else if ($height >= 72.7){
					$hi = "Percentile 10";
				} else if ($height >= 71.8){
					$hi = "Percentile 5";
				}else if ($height >= 71.3){
					$hi = "Percentile 3";
				}else if ($height >= 70.2){
					$hi = "Percentile 1";
				}else {
					$hi = "Percentile 0";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 50){
					$had = "Percentile 999";
													}else if ($head >= 49.1){
					$had = "Percentile 99";
													}else if ($head >= 48.5){
					$had = "Percentile 97";
													}else if ($head >= 48.2){
					$had = "Percentile 95";
													}else if ($head >= 47.7){
					$had = "Percentile 90";
													}else if ($head >= 47.4){
					$had = "Percentile 85";
													}else if ($head >= 46.9){
					$had = "Percentile 75";
													}else if ($head >= 46.1){
					$had = "Percentile 50";
													}else if ($head >= 45.2){
					$had = "Percentile 25";
													}else if ($head >= 44.7){
					$had = "Percentile 15";
													}else if ($head >= 44.4){
					$had = "Percentile 10";
				} else if ($head >= 44){
					$had = "Percentile 5";
				}else if ($head>= 43.6){
					$had = "Percentile 3";
				}else if ($head >= 43.1){
					$had = "Percentile 1";
				}else {
					$had = "Percentile 0";}	}}
if ($sex==1){
	if ($da==18){
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 15.4){
			$wei = "Percentile 999 ";		
		} else if ($weight >= 14.2){
			$wei = "Percentile 99";
		}else if ($weight >= 13.5){
			$wei = "Percentile 97";
		}else if ($weight >= 13.1){
			$wei = "Percentile 95";
									}else if ($weight >= 12.6){
			$wei = "Percentile 90 ";
									}else if ($weight >= 12.3){
			$wei = "Percentile 85 ";
									}else if ($weight >= 11.8){
			$wei = "Percentile 75 ";
									}else if ($weight >= 10.9){
			$wei = "Percentile 50 ";
									}else if ($weight >= 10.1){
			$wei = "Percentile 25 ";
									}else if ($weight >= 9.7){
			$wei = "Percentile 15 ";
									}else if ($weight >= 9.5){
			$wei = "Percentile 10 ";
									}else if ($weight >= 9.1){
			$wei = "Percentile 5 ";
									}else if ($weight >= 8.9){
			$wei = "Percentile 3 ";
									}else if ($weight >= 8.4){
			$wei = "Percentile 1 ";
		}else {
			$wei = "Percentile 0";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 90.6){
					$hi = "Percentile 999";
													}else if ($height >= 88.5){
					$hi = "Percentile 99";
													}else if ($height >= 87.3){
					$hi = "Percentile 97";
													}else if ($height >= 86.7){
					$hi = "Percentile 95";
													}else if ($height >= 85.7){
					$hi = "Percentile 90";
													}else if ($height >= 85.1){
					$hi = "Percentile 85";
													}else if ($height >= 84.1){
					$hi = "Percentile 75";
													}else if ($height >= 82.3){
					$hi = "Percentile 50";
													}else if ($height >= 80.4){
					$hi = "Percentile 25";
													}else if ($height >= 79.5){
					$hi = "Percentile 15";
													}else if ($height >= 78.8){
					$hi = "Percentile 10";
				} else if ($height >= 77.8){
					$hi = "Percentile 5";
				}else if ($height >= 77.2){
					$hi = "Percentile 3";
				}else if ($height >= 76){
					$hi = "Percentile 1";
				}else {
					$hi = "Percentile 0";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 51.5){
					$had = "Percentile 999";
													}else if ($head >= 50.5){
					$had = "Percentile 99";
													}else if ($head >= 49.9){
					$had = "Percentile 97";
													}else if ($head >= 49.6){
					$had = "Percentile 95";
													}else if ($head >= 49.1){
					$had = "Percentile 90";
													}else if ($head >= 48.7){
					$had = "Percentile 85";
													}else if ($head >= 48.3){
					$had = "Percentile 75";
													}else if ($head >= 47.4){
					$had = "Percentile 50";
													}else if ($head >= 46.5){
					$had = "Percentile 25";
													}else if ($head >= 46){
					$had = "Percentile 15";
													}else if ($head >= 45.7){
					$had = "Percentile 10";
				} else if ($head >= 45.2){
					$had = "Percentile 5";
				}else if ($head>= 44.9){
					$had = "Percentile 3";
				}else if ($head >= 44.3){
					$had = "Percentile 1";
				}else {
					$had = "Percentile 0";}		}}
if ($sex==1){
	if ($da==24){
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 17.3){
			$wei = "Percentile 999 ";		
		} else if ($weight >= 15.9){
			$wei = "Percentile 99";
		}else if ($weight >= 15.1){
			$wei = "Percentile 97";
		}else if ($weight >= 14.7){
			$wei = "Percentile 95";
									}else if ($weight >= 14.1){
			$wei = "Percentile 90 ";
									}else if ($weight >= 13.7){
			$wei = "Percentile 85 ";
									}else if ($weight >= 13.1){
			$wei = "Percentile 75 ";
									}else if ($weight >= 12.2){
			$wei = "Percentile 50 ";
									}else if ($weight >= 11.3){
			$wei = "Percentile 25 ";
									}else if ($weight >= 10.8){
			$wei = "Percentile 15 ";
									}else if ($weight >= 10.5){
			$wei = "Percentile 10 ";
									}else if ($weight >= 10.1){
			$wei = "Percentile 5 ";
									}else if ($weight >= 9.8){
			$wei = "Percentile 3 ";
									}else if ($weight >=9.3){
			$wei = "Percentile 1 ";
		}else {
			$wei = "Percentile 0";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 97.3){
					$hi = "Percentile 999";
													}else if ($height >= 94.9){
					$hi = "Percentile 99";
													}else if ($height >= 93.6){
					$hi = "Percentile 97";
													}else if ($height >= 92.8){
					$hi = "Percentile 95";
													}else if ($height >= 91.7){
					$hi = "Percentile 90";
													}else if ($height >= 91){
					$hi = "Percentile 85";
													}else if ($height >= 89.9){
					$hi = "Percentile 75";
													}else if ($height >= 87.8){
					$hi = "Percentile 50";
													}else if ($height >= 85.8){
					$hi = "Percentile 25";
													}else if ($height >= 84.6){
					$hi = "Percentile 15";
													}else if ($height >= 83.9){
					$hi = "Percentile 10";
				} else if ($height >= 82.8){
					$hi = "Percentile 5";
				}else if ($height >= 82.1){
					$hi = "Percentile 3";
				}else if ($height >= 80.7){
					$hi = "Percentile 1";
				}else {
					$hi = "Percentile 0";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 52.5){
					$had = "Percentile 999";
													}else if ($head >= 51.4){
					$had = "Percentile 99";
													}else if ($head >= 50.8){
					$had = "Percentile 97";
													}else if ($head >= 50.5){
					$had = "Percentile 95";
													}else if ($head >= 50){
					$had = "Percentile 90";
													}else if ($head >= 49.7){
					$had = "Percentile 85";
													}else if ($head >= 49.2){
					$had = "Percentile 75";
													}else if ($head >= 48.3){
					$had = "Percentile 50";
													}else if ($head >= 47.3){
					$had = "Percentile 25";
													}else if ($head >= 46.8){
					$had = "Percentile 15";
													}else if ($head >= 46.5){
					$had = "Percentile 10";
				} else if ($head >= 46){
					$had = "Percentile 5";
				}else if ($head>= 45.7){
					$had = "Percentile 3";
				}else if ($head >= 45.1){
					$had = "Percentile 1";
				}else {
					$had = "Percentile 0";}		}}
if ($sex==1){
	if ($da==30){	
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 19.2){
			$wei = "Percentile 999 ";		
		} else if ($weight >= 17.5){
			$wei = "Percentile 99";
		}else if ($weight >= 16.6){
			$wei = "Percentile 97";
		}else if ($weight >= 16.2){
			$wei = "Percentile 95";
									}else if ($weight >= 15.5){
			$wei = "Percentile 90 ";
									}else if ($weight >= 15){
			$wei = "Percentile 85 ";
									}else if ($weight >= 14.4){
			$wei = "Percentile 75 ";
									}else if ($weight >= 13.3){
			$wei = "Percentile 50 ";
									}else if ($weight >= 12.3){
			$wei = "Percentile 25 ";
									}else if ($weight >= 11.8){
			$wei = "Percentile 15 ";
									}else if ($weight >= 11.4){
			$wei = "Percentile 10 ";
									}else if ($weight >= 11){
			$wei = "Percentile 5 ";
									}else if ($weight >= 10.7){
			$wei = "Percentile 3 ";
									}else if ($weight >= 10.1){
			$wei = "Percentile 1 ";
		}else {
			$wei = "Percentile 0";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 102.5){
					$hi = "Percentile 999";
													}else if ($height >= 99.9){
					$hi = "Percentile 99";
													}else if ($height >= 98.3){
					$hi = "Percentile 97";
													}else if ($height >= 97.5){
					$hi = "Percentile 95";
													}else if ($height >= 96.3){
					$hi = "Percentile 90";
													}else if ($height >= 95.5){
					$hi = "Percentile 85";
													}else if ($height >= 94.2){
					$hi = "Percentile 75";
													}else if ($height >= 91.9){
					$hi = "Percentile 50";
													}else if ($height >= 89.6){
					$hi = "Percentile 25";
													}else if ($height >= 88.4){
					$hi = "Percentile 15";
													}else if ($height >= 87.6){
					$hi = "Percentile 10";
				} else if ($height >= 86.3){
					$hi = "Percentile 5";
				}else if ($height >= 85.5){
					$hi = "Percentile 3";
				}else if ($height >= 84){
					$hi = "Percentile 1";
				}else {
					$hi = "Percentile 0";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 53.2){
					$had = "Percentile 999";
													}else if ($head >= 52.2){
					$had = "Percentile 99";
													}else if ($head >= 51.6){
					$had = "Percentile 97";
													}else if ($head >= 51.2){
					$had = "Percentile 95";
													}else if ($head >= 50.7){
					$had = "Percentile 90";
													}else if ($head >= 50.4){
					$had = "Percentile 85";
													}else if ($head >= 49.9){
					$had = "Percentile 75";
													}else if ($head >= 48.9){
					$had = "Percentile 50";
													}else if ($head >= 48){
					$had = "Percentile 25";
													}else if ($head >= 47.5){
					$had = "Percentile 15";
													}else if ($head >= 47.1){
					$had = "Percentile 10";
				} else if ($head >= 46.6){
					$had = "Percentile 5";
				}else if ($head>= 46.3){
					$had = "Percentile 3";
				}else if ($head >= 45.7){
					$had = "Percentile 1";
				}else {
					$had = "Percentile 0";}		}}
if ($sex==2){
		if ($da==2){	
			if ($weight==0){
				$wei = "";
			}else if ($weight >= 7.6){
				$wei = "Percentile 999 ";		
			} else if ($weight >= 6.9){
				$wei = "Percentile 99";
			}else if ($weight >= 6.5){
				$wei = "Percentile 97";
			}else if ($weight >= 6.3){
				$wei = "Percentile 95";
										}else if ($weight >= 6.0){
				$wei = "Percentile 90 ";
										}else if ($weight >= 5.9){
				$wei = "Percentile 85 ";
										}else if ($weight >= 5.6){
				$wei = "Percentile 75 ";
										}else if ($weight >= 5.1){
				$wei = "Percentile 50 ";
										}else if ($weight >= 4.7){
				$wei = "Percentile 25 ";
										}else if ($weight >= 4.5){
				$wei = "Percentile 15 ";
										}else if ($weight >= 4.3){
				$wei = "Percentile 10 ";
										}else if ($weight >= 4.1){
				$wei = "Percentile 5 ";
										}else if ($weight >= 4.0){
				$wei = "Percentile 3 ";
										}else if ($weight >= 3.8){
				$wei = "Percentile 1 ";
			}else {
				$wei = "Percentile 0";}

				// ส่วนสูงเทียบอายุ
				if ($height == 0){
					$hi = "" ;
					}else if ($height >= 63.4){
						$hi = "Percentile 999";
														}else if ($height >= 61.8){
						$hi = "Percentile 99";
														}else if ($height >= 60.9){
						$hi = "Percentile 97";
														}else if ($height >= 60.4){
						$hi = "Percentile 95";
														}else if ($height >= 59.7){
						$hi = "Percentile 90";
														}else if ($height >= 59.2){
						$hi = "Percentile 85";
														}else if ($height >= 58.4){
						$hi = "Percentile 75";
														}else if ($height >= 57.1){
						$hi = "Percentile 50";
														}else if ($height >= 55.7){
						$hi = "Percentile 25";
														}else if ($height >= 55){
						$hi = "Percentile 15";
														}else if ($height >= 54.5){
						$hi = "Percentile 10";
					} else if ($height >= 53.7){
						$hi = "Percentile 5";
					}else if ($height >= 53.2){
						$hi = "Percentile 3";
					}else if ($height >= 52.3){
						$hi = "Percentile 1";
					}else {
						$hi = "Percentile 0";}

				// เส้นรอบศรีษะ
				if ($head == 0){
					$had = "" ;
					}else if ($head >= 42){
						$had = "Percentile 999";
														}else if ($head >= 41.1){
						$had = "Percentile 99";
														}else if ($head >= 40.5){
						$had = "Percentile 97";
														}else if ($head >= 40.2){
						$had = "Percentile 95";
														}else if ($head >= 39.8){
						$had = "Percentile 90";
														}else if ($head >= 39.5){
						$had = "Percentile 85";
														}else if ($head >= 39.1){
						$had = "Percentile 75";
														}else if ($head >= 38.3){
						$had = "Percentile 50";
														}else if ($head >= 37.4){
						$had = "Percentile 25";
														}else if ($head >= 37){
						$had = "Percentile 15";
														}else if ($head >= 36.7){
						$had = "Percentile 10";
					} else if ($head >= 36.3){
						$had = "Percentile 5";
					}else if ($head>= 36){
						$had = "Percentile 3";
					}else if ($head >= 35.4){
						$had = "Percentile 1";
					}else {
						$had = "Percentile 0";}	}}
if ($sex==2){
	if ($da==4){	
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 9.4){
			$wei = "Percentile 999 ";		
		} else if ($weight >= 8.6){
			$wei = "Percentile 99";
		}else if ($weight >= 8.1){
			$wei = "Percentile 97";
		}else if ($weight >= 7.9){
			$wei = "Percentile 95";
									}else if ($weight >= 7.5){
			$wei = "Percentile 90 ";
									}else if ($weight >= 7.3){
			$wei = "Percentile 85 ";
									}else if ($weight >= 7.0){
			$wei = "Percentile 75 ";
									}else if ($weight >= 6.4){
			$wei = "Percentile 50 ";
									}else if ($weight >= 5.9){
			$wei = "Percentile 25 ";
									}else if ($weight >= 5.6){
			$wei = "Percentile 15 ";
									}else if ($weight >= 5.5){
			$wei = "Percentile 10 ";
									}else if ($weight >= 5.2){
			$wei = "Percentile 5 ";
									}else if ($weight >= 5.1){
			$wei = "Percentile 3 ";
									}else if ($weight >= 4.8){
			$wei = "Percentile 1 ";
		}else {
			$wei = "Percentile 0";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 68.8){
					$hi = "Percentile 999";
													}else if ($height >= 67.1){
					$hi = "Percentile 99";
													}else if ($height >= 66.2){
					$hi = "Percentile 97";
													}else if ($height >= 65.7){
					$hi = "Percentile 95";
													}else if ($height >= 64.9){
					$hi = "Percentile 90";
													}else if ($height >= 64.3){
					$hi = "Percentile 85";
													}else if ($height >= 63.5){
					$hi = "Percentile 75";
													}else if ($height >= 62.1){
					$hi = "Percentile 50";
													}else if ($height >= 60.6){
					$hi = "Percentile 25";
													}else if ($height >= 59.8){
					$hi = "Percentile 15";
													}else if ($height >= 59.3){
					$hi = "Percentile 10";
				} else if ($height >= 58.5){
					$hi = "Percentile 5";
				}else if ($height >= 58){
					$hi = "Percentile 3";
				}else if ($height >= 57.1){
					$hi = "Percentile 1";
				}else {
					$hi = "Percentile 0";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 44.5){
					$had = "Percentile 999";
													}else if ($head >= 43.5){
					$had = "Percentile 99";
													}else if ($head >= 43){
					$had = "Percentile 97";
													}else if ($head >= 42.7){
					$had = "Percentile 95";
													}else if ($head >= 42.2){
					$had = "Percentile 90";
													}else if ($head >= 41.9){
					$had = "Percentile 85";
													}else if ($head >= 41.4){
					$had = "Percentile 75";
													}else if ($head >= 40.6){
					$had = "Percentile 50";
													}else if ($head >= 39.7){
					$had = "Percentile 25";
													}else if ($head >= 39.3){
					$had = "Percentile 15";
													}else if ($head >= 39){
					$had = "Percentile 10";
				} else if ($head >= 38.5){
					$had = "Percentile 5";
				}else if ($head>= 38.2){
					$had = "Percentile 3";
				}else if ($head >= 37.6){
					$had = "Percentile 1";
				}else {
					$had = "Percentile 0";}		}}
if ($sex==2){
	if ($da==6){
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 10.7){
			$wei = "Percentile 999 ";		
		} else if ($weight >= 9.7){
			$wei = "Percentile 99";
		}else if ($weight >= 9.2){
			$wei = "Percentile 97";
		}else if ($weight >= 8.9){
			$wei = "Percentile 95";
									}else if ($weight >= 8.5){
			$wei = "Percentile 90 ";
									}else if ($weight >= 8.3){
			$wei = "Percentile 85 ";
									}else if ($weight >= 7.9){
			$wei = "Percentile 75 ";
									}else if ($weight >= 7.3){
			$wei = "Percentile 50 ";
									}else if ($weight >= 6.7){
			$wei = "Percentile 25 ";
									}else if ($weight >= 6.4){
			$wei = "Percentile 15 ";
									}else if ($weight >= 6.2){
			$wei = "Percentile 10 ";
									}else if ($weight >= 6){
			$wei = "Percentile 5 ";
									}else if ($weight >= 5.8){
			$wei = "Percentile 3 ";
									}else if ($weight >= 5.5){
			$wei = "Percentile 1 ";
		}else {
			$wei = "Percentile 0";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 72.7){
					$hi = "Percentile 999";
													}else if ($height >= 71){
					$hi = "Percentile 99";
													}else if ($height >= 70){
					$hi = "Percentile 97";
													}else if ($height >= 69.5){
					$hi = "Percentile 95";
													}else if ($height >= 68.6){
					$hi = "Percentile 90";
													}else if ($height >= 68.1){
					$hi = "Percentile 85";
													}else if ($height >= 67.3){
					$hi = "Percentile 75";
													}else if ($height >= 65.7){
					$hi = "Percentile 50";
													}else if ($height >= 64.2){
					$hi = "Percentile 25";
													}else if ($height >= 63.4){
					$hi = "Percentile 15";
													}else if ($height >= 62.8){
					$hi = "Percentile 10";
				} else if ($height >= 62){
					$hi = "Percentile 5";
				}else if ($height >= 61.5){
					$hi = "Percentile 3";
				}else if ($height >= 60.5){
					$hi = "Percentile 1";
				}else {
					$hi = "Percentile 0";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 46.2){
					$had = "Percentile 999";
													}else if ($head >= 45.2){
					$had = "Percentile 99";
													}else if ($head >= 44.6){
					$had = "Percentile 97";
													}else if ($head >= 44.3){
					$had = "Percentile 95";
													}else if ($head >= 43.9){
					$had = "Percentile 90";
													}else if ($head >= 43.5){
					$had = "Percentile 85";
													}else if ($head >= 43.1){
					$had = "Percentile 75";
													}else if ($head >= 42.2){
					$had = "Percentile 50";
													}else if ($head >= 41.3){
					$had = "Percentile 25";
													}else if ($head >= 40.8){
					$had = "Percentile 15";
													}else if ($head >= 40.5){
					$had = "Percentile 10";
				} else if ($head >= 40.1){
					$had = "Percentile 5";
				}else if ($head>= 39.7){
					$had = "Percentile 3";
				}else if ($head >= 39.2){
					$had = "Percentile 1";
				}else {
					$had = "Percentile 0";}		}}
if ($sex==2){
	if ($da==9){
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 12.1){
			$wei = "Percentile 999 ";		
		} else if ($weight >= 11){
			$wei = "Percentile 99";
		}else if ($weight >= 10.4){
			$wei = "Percentile 97";
		}else if ($weight >= 10.1){
			$wei = "Percentile 95";
									}else if ($weight >= 9.6){
			$wei = "Percentile 90 ";
									}else if ($weight >= 9.3){
			$wei = "Percentile 85 ";
									}else if ($weight >= 8.9){
			$wei = "Percentile 75 ";
									}else if ($weight >= 8.2){
			$wei = "Percentile 50 ";
									}else if ($weight >= 7.6){
			$wei = "Percentile 25 ";
									}else if ($weight >= 7.3){
			$wei = "Percentile 15 ";
									}else if ($weight >= 7.0){
			$wei = "Percentile 10 ";
									}else if ($weight >= 6.8){
			$wei = "Percentile 5 ";
									}else if ($weight >= 6.6){
			$wei = "Percentile 3 ";
									}else if ($weight >= 6.2){
			$wei = "Percentile 1 ";
		}else {
			$wei = "Percentile 0";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 77.6){
					$hi = "Percentile 999";
													}else if ($height >= 75.8){
					$hi = "Percentile 99";
													}else if ($height >= 74.7){
					$hi = "Percentile 97";
													}else if ($height >= 74.1){
					$hi = "Percentile 95";
													}else if ($height >= 73.2){
					$hi = "Percentile 90";
													}else if ($height >= 72.6){
					$hi = "Percentile 85";
													}else if ($height >= 71.8){
					$hi = "Percentile 75";
													}else if ($height >= 70.1){
					$hi = "Percentile 50";
													}else if ($height >= 68.5){
					$hi = "Percentile 25";
													}else if ($height >= 67.6){
					$hi = "Percentile 15";
													}else if ($height >= 67){
					$hi = "Percentile 10";
				} else if ($height >= 66.2){
					$hi = "Percentile 5";
				}else if ($height >= 65.6){
					$hi = "Percentile 3";
				}else if ($height >= 64.5){
					$hi = "Percentile 1";
				}else {
					$hi = "Percentile 0";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 48){
					$had = "Percentile 999";
													}else if ($head >= 46.9){
					$had = "Percentile 99";
													}else if ($head >= 46.3){
					$had = "Percentile 97";
													}else if ($head >= 46){
					$had = "Percentile 95";
													}else if ($head >= 45.5){
					$had = "Percentile 90";
													}else if ($head >= 45.2){
					$had = "Percentile 85";
													}else if ($head >= 44.7){
					$had = "Percentile 75";
													}else if ($head >= 43.8){
					$had = "Percentile 50";
													}else if ($head >= 42.9){
					$had = "Percentile 25";
													}else if ($head >= 42.4){
					$had = "Percentile 15";
													}else if ($head >= 42.1){
					$had = "Percentile 10";
				} else if ($head >= 41.6){
					$had = "Percentile 5";
				}else if ($head>= 41.3){
					$had = "Percentile 3";
				}else if ($head >= 40.7){
					$had = "Percentile 1";
				}else {
					$had = "Percentile 0";}	}}

if ($sex==2){
	if ($da==12){
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 13.3){
			$wei = "Percentile 999 ";		
		} else if ($weight >= 12){
			$wei = "Percentile 99";
		}else if ($weight >= 11.3){
			$wei = "Percentile 97";
		}else if ($weight >= 11){
			$wei = "Percentile 95";
									}else if ($weight >= 10.5){
			$wei = "Percentile 90 ";
									}else if ($weight >= 10.2){
			$wei = "Percentile 85 ";
									}else if ($weight >= 9.7){
			$wei = "Percentile 75 ";
									}else if ($weight >= 8.9){
			$wei = "Percentile 50 ";
									}else if ($weight >= 8.2){
			$wei = "Percentile 25 ";
									}else if ($weight >= 7.9){
			$wei = "Percentile 15 ";
									}else if ($weight >= 7.7){
			$wei = "Percentile 10 ";
									}else if ($weight >= 7.3){
			$wei = "Percentile 5 ";
									}else if ($weight >= 7.1){
			$wei = "Percentile 3 ";
									}else if ($weight >= 6.8){
			$wei = "Percentile 1 ";
		}else {
			$wei = "Percentile 0";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 82){
					$hi = "Percentile 999";
													}else if ($height >= 80){
					$hi = "Percentile 99";
													}else if ($height >= 78.9){
					$hi = "Percentile 97";
													}else if ($height >= 78.3){
					$hi = "Percentile 95";
													}else if ($height >= 77.3){
					$hi = "Percentile 90";
													}else if ($height >= 76.7){
					$hi = "Percentile 85";
													}else if ($height >= 75.8){
					$hi = "Percentile 75";
													}else if ($height >= 74){
					$hi = "Percentile 50";
													}else if ($height >= 72.3){
					$hi = "Percentile 25";
													}else if ($height >= 71.3){
					$hi = "Percentile 15";
													}else if ($height >= 70.7){
					$hi = "Percentile 10";
				} else if ($height >= 69.8){
					$hi = "Percentile 5";
				}else if ($height >= 69.2){
					$hi = "Percentile 3";
				}else if ($height >= 68){
					$hi = "Percentile 1";
				}else {
					$hi = "Percentile 0";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 49.1){
					$had = "Percentile 999";
													}else if ($head >= 48.1){
					$had = "Percentile 99";
													}else if ($head >= 47.5){
					$had = "Percentile 97";
													}else if ($head >= 47.1){
					$had = "Percentile 95";
													}else if ($head >= 46.6){
					$had = "Percentile 90";
													}else if ($head >= 46.3){
					$had = "Percentile 85";
													}else if ($head >= 45.8){
					$had = "Percentile 75";
													}else if ($head >= 44.9){
					$had = "Percentile 50";
													}else if ($head >= 44){
					$had = "Percentile 25";
													}else if ($head >= 43.5){
					$had = "Percentile 15";
													}else if ($head >= 43.2){
					$had = "Percentile 10";
				} else if ($head >= 42.7){
					$had = "Percentile 5";
				}else if ($head>= 42.3){
					$had = "Percentile 3";
				}else if ($head >= 41.7){
					$had = "Percentile 1";
				}else {
					$had = "Percentile 0";}	}}

if ($sex==2){
	if ($da==18){
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 15.3){
			$wei = "Percentile 999 ";		
		} else if ($weight >= 13.8){
			$wei = "Percentile 99";
		}else if ($weight >= 13){
			$wei = "Percentile 97";
		}else if ($weight >= 12.6){
			$wei = "Percentile 95";
									}else if ($weight >= 12){
			$wei = "Percentile 90 ";
									}else if ($weight >= 11.6){
			$wei = "Percentile 85 ";
									}else if ($weight >= 11.1){
			$wei = "Percentile 75 ";
									}else if ($weight >= 10.2){
			$wei = "Percentile 50 ";
									}else if ($weight >= 9.4){
			$wei = "Percentile 25 ";
									}else if ($weight >= 9){
			$wei = "Percentile 15 ";
									}else if ($weight >= 8.8){
			$wei = "Percentile 10 ";
									}else if ($weight >=8.4){
			$wei = "Percentile 5 ";
									}else if ($weight >= 8.2){
			$wei = "Percentile 3 ";
									}else if ($weight >= 7.8){
			$wei = "Percentile 1 ";
		}else {
			$wei = "Percentile 0";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 89.7){
					$hi = "Percentile 999";
													}else if ($height >= 87.5){
					$hi = "Percentile 99";
													}else if ($height >= 86.2){
					$hi = "Percentile 97";
													}else if ($height >= 85.5){
					$hi = "Percentile 95";
													}else if ($height >= 84.4){
					$hi = "Percentile 90";
													}else if ($height >= 83.7){
					$hi = "Percentile 85";
													}else if ($height >= 82.7){
					$hi = "Percentile 75";
													}else if ($height >= 80.7){
					$hi = "Percentile 50";
													}else if ($height >= 78.7){
					$hi = "Percentile 25";
													}else if ($height >= 77.7){
					$hi = "Percentile 15";
													}else if ($height >= 77){
					$hi = "Percentile 10";
				} else if ($height >= 75.9){
					$hi = "Percentile 5";
				}else if ($height >= 75.2){
					$hi = "Percentile 3";
				}else if ($height >= 74){
					$hi = "Percentile 1";
				}else {
					$hi = "Percentile 0";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 50.5){
					$had = "Percentile 999";
													}else if ($head >= 49.5){
					$had = "Percentile 99";
													}else if ($head >= 48.8){
					$had = "Percentile 97";
													}else if ($head >= 48.5){
					$had = "Percentile 95";
													}else if ($head >= 48){
					$had = "Percentile 90";
													}else if ($head >= 47.7){
					$had = "Percentile 85";
													}else if ($head >= 47.2){
					$had = "Percentile 75";
													}else if ($head >= 46.2){
					$had = "Percentile 50";
													}else if ($head >= 45.3){
					$had = "Percentile 25";
													}else if ($head >= 44.8){
					$had = "Percentile 15";
													}else if ($head >= 44.5){
					$had = "Percentile 10";
				} else if ($head >= 44){
					$had = "Percentile 5";
				}else if ($head>= 43.6){
					$had = "Percentile 3";
				}else if ($head >= 43){
					$had = "Percentile 1";
				}else {
					$had = "Percentile 0";}		}}

if ($sex==2){
	if ($da==24){
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 17.2){
			$wei = "Percentile 999 ";		
		} else if ($weight >= 15.5){
			$wei = "Percentile 99";
		}else if ($weight >= 14.6){
			$wei = "Percentile 97";
		}else if ($weight >= 14.2){
			$wei = "Percentile 95";
									}else if ($weight >= 13.5){
			$wei = "Percentile 90 ";
									}else if ($weight >= 13.1){
			$wei = "Percentile 85 ";
									}else if ($weight >= 12.5){
			$wei = "Percentile 75 ";
									}else if ($weight >= 11.5){
			$wei = "Percentile 50 ";
									}else if ($weight >= 10.6){
			$wei = "Percentile 25 ";
									}else if ($weight >= 10.1){
			$wei = "Percentile 15 ";
									}else if ($weight >= 9.8){
			$wei = "Percentile 10 ";
									}else if ($weight >= 9.4){
			$wei = "Percentile 5 ";
									}else if ($weight >= 9.2){
			$wei = "Percentile 3 ";
									}else if ($weight >= 8.7){
			$wei = "Percentile 1 ";
		}else {
			$wei = "Percentile 0";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 96.4){
					$hi = "Percentile 999";
													}else if ($height >= 93.9){
					$hi = "Percentile 99";
													}else if ($height >= 92.5){
					$hi = "Percentile 97";
													}else if ($height >= 91.7){
					$hi = "Percentile 95";
													}else if ($height >= 90.6){
					$hi = "Percentile 90";
													}else if ($height >= 89.8){
					$hi = "Percentile 85";
													}else if ($height >= 88.6){
					$hi = "Percentile 75";
													}else if ($height >= 86.4){
					$hi = "Percentile 50";
													}else if ($height >= 84.2){
					$hi = "Percentile 25";
													}else if ($height >= 83.1){
					$hi = "Percentile 15";
													}else if ($height >= 82.3){
					$hi = "Percentile 10";
				} else if ($height >= 81.1){
					$hi = "Percentile 5";
				}else if ($height >= 80.3){
					$hi = "Percentile 3";
				}else if ($height >= 78.9){
					$hi = "Percentile 1";
				}else {
					$hi = "Percentile 0";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 51.5){
					$had = "Percentile 999";
													}else if ($head >= 50.4){
					$had = "Percentile 99";
													}else if ($head >= 49.8){
					$had = "Percentile 97";
													}else if ($head >= 49.5){
					$had = "Percentile 95";
													}else if ($head >= 49){
					$had = "Percentile 90";
													}else if ($head >= 48.6){
					$had = "Percentile 85";
													}else if ($head >= 48.1){
					$had = "Percentile 75";
													}else if ($head >= 47.2){
					$had = "Percentile 50";
													}else if ($head >= 46.2){
					$had = "Percentile 25";
													}else if ($head >= 45.7){
					$had = "Percentile 15";
													}else if ($head >= 45.4){
					$had = "Percentile 10";
				} else if ($head >= 44.9){
					$had = "Percentile 5";
				}else if ($head>= 44.6){
					$had = "Percentile 3";
				}else if ($head >= 43.9){
					$had = "Percentile 1";
				}else {
					$had = "Percentile 0";}		}}

if ($sex==2){
	if ($da==30){
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 19.2){
			$wei = "Percentile 999 ";		
		} else if ($weight >= 17.3){
			$wei = "Percentile 99";
		}else if ($weight >= 16.2){
			$wei = "Percentile 97";
		}else if ($weight >= 15.7){
			$wei = "Percentile 95";
									}else if ($weight >= 15){
			$wei = "Percentile 90 ";
									}else if ($weight >= 14.5){
			$wei = "Percentile 85 ";
									}else if ($weight >= 13.8){
			$wei = "Percentile 75 ";
									}else if ($weight >= 12.7){
			$wei = "Percentile 50 ";
									}else if ($weight >= 11.7){
			$wei = "Percentile 25 ";
									}else if ($weight >= 11.2){
			$wei = "Percentile 15 ";
									}else if ($weight >= 10.9){
			$wei = "Percentile 10 ";
									}else if ($weight >= 10.4){
			$wei = "Percentile 5 ";
									}else if ($weight >= 10.1){
			$wei = "Percentile 3 ";
									}else if ($weight >= 9.6){
			$wei = "Percentile 1 ";
		}else {
			$wei = "Percentile 0";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 101.6){
					$hi = "Percentile 999";
													}else if ($height >= 98.9){
					$hi = "Percentile 99";
													}else if ($height >= 97.3){
					$hi = "Percentile 97";
													}else if ($height >= 96.5){
					$hi = "Percentile 95";
													}else if ($height >= 95.2){
					$hi = "Percentile 90";
													}else if ($height >= 94.3){
					$hi = "Percentile 85";
													}else if ($height >= 93.1){
					$hi = "Percentile 75";
													}else if ($height >= 90.7){
					$hi = "Percentile 50";
													}else if ($height >= 88.3){
					$hi = "Percentile 25";
													}else if ($height >= 87){
					$hi = "Percentile 15";
													}else if ($height >= 86.2){
					$hi = "Percentile 10";
				} else if ($height >= 84.9){
					$hi = "Percentile 5";
				}else if ($height >= 84){
					$hi = "Percentile 3";
				}else if ($height >= 82.5){
					$hi = "Percentile 1";
				}else {
					$hi = "Percentile 0";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 52.3){
					$had = "Percentile 999";
													}else if ($head >= 51.2){
					$had = "Percentile 99";
													}else if ($head >= 50.6){
					$had = "Percentile 97";
													}else if ($head >= 50.2){
					$had = "Percentile 95";
													}else if ($head >= 49.7){
					$had = "Percentile 90";
													}else if ($head >= 49.4){
					$had = "Percentile 85";
													}else if ($head >= 48.9){
					$had = "Percentile 75";
													}else if ($head >= 47.9){
					$had = "Percentile 50";
													}else if ($head >= 47){
					$had = "Percentile 25";
													}else if ($head >= 46.5){
					$had = "Percentile 15";
													}else if ($head >= 46.1){
					$had = "Percentile 10";
				} else if ($head >= 45.6){
					$had = "Percentile 5";
				}else if ($head>= 45.3){
					$had = "Percentile 3";
				}else if ($head >= 44.7){
					$had = "Percentile 1";
				}else {
					$had = "Percentile 0";}	}}


		
					
					
					
echo "<h2 class='mb-2'> น้ำหนัก {$weight} กก. สูง {$height} ซม.  เส้นรอบศีรษะ {$head} ซม.</h2>";
echo "<h1 class='mb-5'>น้ำหนักเทียบกับอายุอยู่ที่{$wei}  </h1>";
echo "<h1 class='mb-5'> ความสูงเทียบกับอายุอยู่ที่{$hi}  </h1>";
echo "<h1 class='mb-5'>เส้นรอบศีรษะอยู่ที่{$had}  </h1> ";


							
						?>
		

</body>
</html>
