<?php
require('Dm.php');
$N=$_POST['N'];
$birthday = $_POST['birthday'];  
$weight=$_POST['weight'];
$height=$_POST['height']; 
$sex=$_POST['sex'];
$head=$_POST['head'];    //รูปแบบการเก็บค่าข้อมูลวันเกิด
	$today = date("Y-m-d");   //จุดต้องเปลี่ยน
	

	list($byear, $bmonth, $bday)= explode("-",$birthday);       //จุดต้องเปลี่ยน
	list($tyear, $tmonth, $tday)= explode("-",$today);                //จุดต้องเปลี่ยน
		
	$mbirthday = mktime(0, 0, 0, $bmonth, $bday, $byear); 
	$mnow = mktime(0, 0, 0, $tmonth, $tday, $tyear );
	$mage = ($mnow - $mbirthday);
	

$u_y=date("Y", $mage)-1970;
$u_m=date("m",$mage)-1;
$u_d=date("d",$mage)-1;
echo $sex;
if ($sex == 1){
	if ($u_y == 0){	
		if ($u_m == 2){	
			if ($height == 0){
	$whi = "" ;
	}else if ($height == 45){
										if ($weight >= 3.4){
												$whi = "อ้วน" ;
												}else if ($weight >= 3.1){
														$whi = "เริ่มอ้วน";
												} else if ($weight >= 2.9){
														$whi = "ท้วม";
												}else if ($weight >= 2.2){
														$whi = "สมส่วน";
												}else if ($weight >= 2.0){
														$whi = "ค่อนข้างผอม";
												}else {
														$whi = "ผอม";}

	}else if ($height == 46){
				if ($weight >= 3.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.1){
						$whi = "ท้วม";
					}else if ($weight >= 2.3){
						$wei = "สมส่วน";
					}else if ($weight >= 2.2){
						$wei = "ค่อนข้างผอม";
					}else {
						$wei = "ผอม";}

				}else if ($height == 47){
				if ($weight >= 3.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.3){
						$whi = "ท้วม";
					}else if ($weight >= 2.4){
						$whi = "สมส่วน";
					}else if ($weight >= 2.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	

	}else if ($height == 48){
				if ($weight >= 4.0){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.5){
						$whi = "ท้วม";
					}else if ($weight >= 2.6){
						$whi = "สมส่วน";
					}else if ($weight >= 2.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 49){
				if ($weight >= 4.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.7){
						$whi = "ท้วม";
					}else if ($weight >= 2.7){
						$whi = "สมส่วน";
					}else if ($weight >= 2.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}						

	}else if ($height == 50){
						if ($weight >= 4.5){
							$whi = "อ้วน" ;
							}else if ($weight >= 4.1){
								$whi = "เริ่มอ้วน";
							} else if ($weight >= 3.9){
								$whi = "ท้วม";
							}else if ($weight >= 2.9){
								$whi = "สมส่วน";
							}else if ($weight >= 2.8){
								$whi = "ค่อนข้างผอม";
							}else {
								$whi = "ผอม";}	

	}else if ($height == 51){
				if ($weight >= 4.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 4.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 4.2){
						$whi = "ท้วม";
					}else if ($weight >= 3.1){
						$whi = "สมส่วน";
					}else if ($weight >= 3.0){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 52){
				if ($weight >= 5.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 4.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 4.4){
						$whi = "ท้วม";
					}else if ($weight >= 3.3){
						$whi = "สมส่วน";
					}else if ($weight >= 3.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	

	}else if ($height == 53){
				if ($weight >= 5.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 4.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 4.7){
						$whi = "ท้วม";
					}else if ($weight >= 3.5){
						$whi = "สมส่วน";
					}else if ($weight >= 3.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 54){
				if ($weight >= 5.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 5.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 5.0){
						$whi = "ท้วม";
					}else if ($weight >= 3.8){
						$whi = "สมส่วน";
					}else if ($weight >= 3.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}		
						
	}else if ($height == 55){
				if ($weight >= 6.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 5.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 5.3){
						$whi = "ท้วม";
					}else if ($weight >= 4.0){
						$whi = "สมส่วน";
					}else if ($weight >= 3.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}		
						
	}else if ($height == 56){
				if ($weight >= 6.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 5.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 5.6){
						$whi = "ท้วม";
					}else if ($weight >= 4.3){
						$whi = "สมส่วน";
					}else if ($weight >= 4.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 57){
				if ($weight >= 6.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 6.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 5.9){
						$whi = "ท้วม";
					}else if ($weight >= 4.5){
						$whi = "สมส่วน";
					}else if ($weight >= 4.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 58){
				if ($weight >= 7.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 6.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6.3){
						$whi = "ท้วม";
					}else if ($weight >= 4.8){
						$whi = "สมส่วน";
					}else if ($weight >= 4.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 59){
				if ($weight >= 7.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 6.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6.6){
						$whi = "ท้วม";
					}else if ($weight >= 5.0){
						$whi = "สมส่วน";
					}else if ($weight >= 4.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 60){
				if ($weight >= 7.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 7.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6.9){
						$whi = "ท้วม";
					}else if ($weight >= 5.3){
						$whi = "สมส่วน";
					}else if ($weight >= 5.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 61){
				if ($weight >= 8.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 7.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 7.2){
						$whi = "ท้วม";
					}else if ($weight >= 5.5){
						$whi = "สมส่วน";
					}else if ($weight >= 5.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 62){
				if ($weight >= 8.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 7.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 7.5){
						$whi = "ท้วม";
					}else if ($weight >= 5.8){
						$whi = "สมส่วน";
					}else if ($weight >= 5.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 63){
				if ($weight >= 8.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 7.8){
						$whi = "ท้วม";
					}else if ($weight >= 6.0){
						$whi = "สมส่วน";
					}else if ($weight >= 5.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 64){
				if ($weight >= 9.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.1){
						$whi = "ท้วม";
					}else if ($weight >= 6.2){
						$whi = "สมส่วน";
					}else if ($weight >=6.0){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 65){
				if ($weight >= 9.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.3){
						$whi = "ท้วม";
					}else if ($weight >= 6.4){
						$whi = "สมส่วน";
					}else if ($weight >=6.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 66){
				if ($weight >= 9.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 9.0){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.6){
						$whi = "ท้วม";
					}else if ($weight >= 6.7){
						$whi = "สมส่วน";
					}else if ($weight >= 6.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 67){
				if ($weight >= 10.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 9.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.9){
						$whi = "ท้วม";
					}else if ($weight >= 6.9){
						$whi = "สมส่วน";
					}else if ($weight >= 6.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 68){
				if ($weight >= 10.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 9.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.1){
						$whi = "ท้วม";
					}else if ($weight >= 7.1){
						$whi = "สมส่วน";
					}else if ($weight >= 6.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 69){
				if ($weight >= 10.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 9.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.4){
						$whi = "ท้วม";
					}else if ($weight >= 7.3){
						$whi = "สมส่วน";
					}else if ($weight >= 7.0){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 70){
				if ($weight >= 11){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.7){
						$whi = "ท้วม";
					}else if ($weight >= 7.5){
						$whi = "สมส่วน";
					}else if ($weight >=7.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 71){
				if ($weight >= 11.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.9){
						$whi = "ท้วม";
					}else if ($weight >= 7.7){
						$whi = "สมส่วน";
					}else if ($weight >= 7.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					

								}else if ($height == 72){
				if ($weight >= 11.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.2){
						$whi = "ท้วม";
					}else if ($weight >= 7.9){
						$whi = "สมส่วน";
					}else if ($weight >= 7.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
	
	}else if ($height == 73){
				if ($weight >= 11.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.4){
						$whi = "ท้วม";
					}else if ($weight >= 8.0){
						$whi = "สมส่วน";
					}else if ($weight >= 7.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 74){
				if ($weight >= 12.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.7){
						$whi = "ท้วม";
					}else if ($weight >=8.2){
						$whi = "สมส่วน";
					}else if ($weight >= 7.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 75){
				if ($weight >= 12.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.9){
						$whi = "ท้วม";
					}else if ($weight >= 8.4){
						$whi = "สมส่วน";
					}else if ($weight >= 8.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 76){
				if ($weight >= 12.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.1){
						$whi = "ท้วม";
					}else if ($weight >= 8.6){
						$whi = "สมส่วน";
					}else if ($weight >= 8.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 77){
				if ($weight >= 12.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.3){
						$whi = "ท้วม";
					}else if ($weight >= 8.8){
						$whi = "สมส่วน";
					}else if ($weight >= 8.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 78){
				if ($weight >= 13.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 12.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.6){
						$whi = "ท้วม";
					}else if ($weight >= 8.9){
						$whi = "สมส่วน";
					}else if ($weight >= 8.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 79){
				if ($weight >= 13.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 12.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.8){
						$whi = "ท้วม";
					}else if ($weight >= 9.1){
						$whi = "สมส่วน";
					}else if ($weight >= 8.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 80){
				if ($weight >= 13.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 12.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 12){
						$whi = "ท้วม";
					}else if ($weight >= 9.2){
						$whi = "สมส่วน";
					}else if ($weight >= 8.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 81){
				if ($weight >= 13.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 12.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 12.2){
						$whi = "ท้วม";
					}else if ($weight >= 9.4){
						$whi = "สมส่วน";
					}else if ($weight >= 9.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					
						
								}else if ($height == 82){
				if ($weight >= 14.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 12.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 12.4){
						$whi = "ท้วม";
					}else if ($weight >= 9.6){
						$whi = "สมส่วน";
					}else if ($weight >= 9.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 83){
				if ($weight >= 14.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 12.6){
						$whi = "ท้วม";
					}else if ($weight >= 9.8){
						$whi = "สมส่วน";
					}else if ($weight >= 9.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 84){
				if ($weight >= 14.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 12.9){
						$whi = "ท้วม";
					}else if ($weight >= 10){
						$whi = "สมส่วน";
					}else if ($weight >= 9.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 85){
				if ($weight >= 15){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.1){
						$whi = "ท้วม";
					}else if ($weight >= 10.2){
						$whi = "สมส่วน";
					}else if ($weight >= 9.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 86){
				if ($weight >= 15.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 14){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.4){
						$whi = "ท้วม";
					}else if ($weight >= 10.4){
						$whi = "สมส่วน";
					}else if ($weight >=10){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	
						
	}else if ($height == 87){
				if ($weight >= 15.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 14.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.7){
						$whi = "ท้วม";
					}else if ($weight >= 10.6){
						$whi = "สมส่วน";
					}else if ($weight >= 10.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 88){
				if ($weight >= 15.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 14.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 14){
						$whi = "ท้วม";
					}else if ($weight >= 10.9){
						$whi = "สมส่วน";
					}else if ($weight >= 10.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 89){
				if ($weight >= 16.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 14.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 14.2){
						$whi = "ท้วม";
					}else if ($weight >= 11.1){
						$whi = "สมส่วน";
					}else if ($weight >= 10.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 90){
				if ($weight >= 16.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 15.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 14.5){
						$whi = "ท้วม";
					}else if ($weight >= 11.3){
						$whi = "สมส่วน";
					}else if ($weight >= 10.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 91){
				if ($weight >= 16.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 15.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 14.8){
						$whi = "ท้วม";
					}else if ($weight >= 11.5){
						$whi = "สมส่วน";
					}else if ($weight >= 11.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 92){
				if ($weight >= 17.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 15.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15){
						$whi = "ท้วม";
					}else if ($weight >= 11.7){
						$whi = "สมส่วน";
					}else if ($weight >= 11.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 93){
				if ($weight >= 17.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 15.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15.3){
						$whi = "ท้วม";
					}else if ($weight >= 11.9){
						$whi = "สมส่วน";
					}else if ($weight >= 11.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 94){
				if ($weight >= 17.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 16.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15.5){
						$whi = "ท้วม";
					}else if ($weight >= 12.1){
						$whi = "สมส่วน";
					}else if ($weight >= 11.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 95){
				if ($weight >= 18){
					$whi = "อ้วน" ;
					}else if ($weight >= 16.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15.8){
						$whi = "ท้วม";
					}else if ($weight >= 12.3){
						$whi = "สมส่วน";
					}else if ($weight >= 11.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 96){
				if ($weight >= 18.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 16.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 16.1){
						$whi = "ท้วม";
					}else if ($weight >= 12.6){
						$whi = "สมส่วน";
					}else if ($weight >= 12.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 97){
				if ($weight >= 18.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 17.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 16.4){
						$whi = "ท้วม";
					}else if ($weight >= 12.8){
						$whi = "สมส่วน";
					}else if ($weight >= 12.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 98){
				if ($weight >= 19){
					$whi = "อ้วน" ;
					}else if ($weight >= 17.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 16.7){
						$whi = "ท้วม";
					}else if ($weight >= 13){
						$whi = "สมส่วน";
					}else if ($weight >= 12.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					

								}else if ($height == 99){
				if ($weight >= 19.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 17.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 17){
						$whi = "ท้วม";
					}else if ($weight >= 13.2){
						$whi = "สมส่วน";
					}else if ($weight >= 12.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}


	}else if ($height == 100){
				if ($weight >= 19.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 18.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 17.3){
						$whi = "ท้วม";
					}else if ($weight >= 13.4){
						$whi = "สมส่วน";
					}else if ($weight >= 12.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 101){
				if ($weight >= 20.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 18.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 17.6){
						$whi = "ท้วม";
					}else if ($weight >= 13.7){
						$whi = "สมส่วน";
					}else if ($weight >= 13.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 102){
				if ($weight >= 20.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 18.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 18){
						$whi = "ท้วม";
					}else if ($weight >= 13.9){
						$whi = "สมส่วน";
					}else if ($weight >= 13.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 103){
				if ($weight >= 20.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 19.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 18.3){
						$whi = "ท้วม";
					}else if ($weight >= 14.2){
						$whi = "สมส่วน";
					}else if ($weight >= 13.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 104){
				if ($weight >= 21.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 19.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 18.7){
						$whi = "ท้วม";
					}else if ($weight >= 14.4){
						$whi = "สมส่วน";
					}else if ($weight >= 13.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 105){
				if ($weight >= 21.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 19.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 19){
						$whi = "ท้วม";
					}else if ($weight >= 14.7){
						$whi = "สมส่วน";
					}else if ($weight >= 14.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 106){
				if ($weight >= 22.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 20.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 19.4){
						$whi = "ท้วม";
					}else if ($weight >= 15){
						$whi = "สมส่วน";
					}else if ($weight >= 14.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}		
						
	}else if ($height == 107){
				if ($weight >= 22.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 20.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 19.8){
						$whi = "ท้วม";
					}else if ($weight >= 15.2){
						$whi = "สมส่วน";
					}else if ($weight >= 14.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 108){
				if ($weight >= 23.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 21.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 20.2){
						$whi = "ท้วม";
					}else if ($weight >= 15.5){
						$whi = "สมส่วน";
					}else if ($weight >= 14.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 109){
				if ($weight >= 23.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 21.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 20.6){
						$whi = "ท้วม";
					}else if ($weight >= 15.8){
						$whi = "สมส่วน";
					}else if ($weight >= 15.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					
						
	}else if ($height == 110){
				if ($weight >= 24.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 22){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 21){
						$whi = "ท้วม";
					}else if ($weight >= 16.1){
						$whi = "สมส่วน";
					}else if ($weight >= 15.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					

	}else {
		$whi = "";}
				
		
	// น้ำหนักเทียบอายุ			
	if ($weight==0){
		$wei = "";
	}else if ($weight >= 7.2){
		$wei = "น้ำหนักมาก";		
	} else if ($weight >= 6.8){
		$wei = "น้ำหนักค่อนข้างมาก";
	}else if ($weight >= 4.6){
		$wei = "น้ำหนักตามเกณฑ์";
	}else if ($weight >= 4.3){
		$wei = "น้ำหนักค่อนข้างน้อย";
	}else {
		$wei = "น้ำหนักน้อย";}

		// ส่วนสูงเทียบอายุ
		if ($height == 0){
			$hi = "" ;
			}else if ($height >= 62.5){
				$hi = "สูง";
			} else if ($height >= 61.5){
				$hi = "ค่อนข้างสูง";
			}else if ($height >= 55.4){
				$hi = "สูงตามเกณฑ์";
			}else if ($height >= 54.4){
				$hi = "ค่อนข้างเตี้ย";
			}else {
				$hi = "เตี้ย";}

		// เส้นรอบศรีษะ
		if ($head == 0){
			$had = "" ;
			}else if ($head >= 41.5){
				$had = "ใหญ่";
			} else if ($head >= 40.9){
				$had = "ค่อนข้างใหญ่";
			}else if ($head>= 37.3){
				$had = "ปกติ";
			}else if ($head >= 36.8){
				$had = "ค่อนข้างเล็ก";
			}else {
				$had = "เล็ก";}	}}}	
		
if ($sex == 1){
	if ($u_y == 0){	
		if ($u_m == 4){					
			if ($height == 0){
					$whi = "" ;
					}else if ($height == 45){
														if ($weight >= 3.4){
																$whi = "อ้วน" ;
																}else if ($weight >= 3.1){
																		$whi = "เริ่มอ้วน";
																} else if ($weight >= 2.9){
																		$whi = "ท้วม";
																}else if ($weight >= 2.2){
																		$whi = "สมส่วน";
																}else if ($weight >= 2.0){
																		$whi = "ค่อนข้างผอม";
																}else {
																		$whi = "ผอม";}

					}else if ($height == 46){
								if ($weight >= 3.6){
									$whi = "อ้วน" ;
									}else if ($weight >= 3.2){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 3.1){
										$whi = "ท้วม";
									}else if ($weight >= 2.3){
										$wei = "สมส่วน";
									}else if ($weight >= 2.2){
										$wei = "ค่อนข้างผอม";
									}else {
										$wei = "ผอม";}

								}else if ($height == 47){
								if ($weight >= 3.8){
									$whi = "อ้วน" ;
									}else if ($weight >= 3.4){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 3.3){
										$whi = "ท้วม";
									}else if ($weight >= 2.4){
										$whi = "สมส่วน";
									}else if ($weight >= 2.3){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	

					}else if ($height == 48){
								if ($weight >= 4.0){
									$whi = "อ้วน" ;
									}else if ($weight >= 3.7){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 3.5){
										$whi = "ท้วม";
									}else if ($weight >= 2.6){
										$whi = "สมส่วน";
									}else if ($weight >= 2.5){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 49){
								if ($weight >= 4.3){
									$whi = "อ้วน" ;
									}else if ($weight >= 3.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 3.7){
										$whi = "ท้วม";
									}else if ($weight >= 2.7){
										$whi = "สมส่วน";
									}else if ($weight >= 2.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}						

					}else if ($height == 50){
										if ($weight >= 4.5){
											$whi = "อ้วน" ;
											}else if ($weight >= 4.1){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 3.9){
												$whi = "ท้วม";
											}else if ($weight >= 2.9){
												$whi = "สมส่วน";
											}else if ($weight >= 2.8){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	

					}else if ($height == 51){
								if ($weight >= 4.8){
									$whi = "อ้วน" ;
									}else if ($weight >= 4.3){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 4.2){
										$whi = "ท้วม";
									}else if ($weight >= 3.1){
										$whi = "สมส่วน";
									}else if ($weight >= 3.0){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}

					}else if ($height == 52){
								if ($weight >= 5.1){
									$whi = "อ้วน" ;
									}else if ($weight >= 4.6){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 4.4){
										$whi = "ท้วม";
									}else if ($weight >= 3.3){
										$whi = "สมส่วน";
									}else if ($weight >= 3.2){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	

					}else if ($height == 53){
								if ($weight >= 5.4){
									$whi = "อ้วน" ;
									}else if ($weight >= 4.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 4.7){
										$whi = "ท้วม";
									}else if ($weight >= 3.5){
										$whi = "สมส่วน";
									}else if ($weight >= 3.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 54){
								if ($weight >= 5.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 5.2){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 5.0){
										$whi = "ท้วม";
									}else if ($weight >= 3.8){
										$whi = "สมส่วน";
									}else if ($weight >= 3.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}		
										
					}else if ($height == 55){
								if ($weight >= 6.1){
									$whi = "อ้วน" ;
									}else if ($weight >= 5.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 5.3){
										$whi = "ท้วม";
									}else if ($weight >= 4.0){
										$whi = "สมส่วน";
									}else if ($weight >= 3.8){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}		
										
					}else if ($height == 56){
								if ($weight >= 6.4){
									$whi = "อ้วน" ;
									}else if ($weight >= 5.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 5.6){
										$whi = "ท้วม";
									}else if ($weight >= 4.3){
										$whi = "สมส่วน";
									}else if ($weight >= 4.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 57){
								if ($weight >= 6.8){
									$whi = "อ้วน" ;
									}else if ($weight >= 6.2){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 5.9){
										$whi = "ท้วม";
									}else if ($weight >= 4.5){
										$whi = "สมส่วน";
									}else if ($weight >= 4.3){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 58){
								if ($weight >= 7.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 6.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 6.3){
										$whi = "ท้วม";
									}else if ($weight >= 4.8){
										$whi = "สมส่วน";
									}else if ($weight >= 4.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 59){
								if ($weight >= 7.5){
									$whi = "อ้วน" ;
									}else if ($weight >= 6.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 6.6){
										$whi = "ท้วม";
									}else if ($weight >= 5.0){
										$whi = "สมส่วน";
									}else if ($weight >= 4.8){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 60){
								if ($weight >= 7.9){
									$whi = "อ้วน" ;
									}else if ($weight >= 7.2){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 6.9){
										$whi = "ท้วม";
									}else if ($weight >= 5.3){
										$whi = "สมส่วน";
									}else if ($weight >= 5.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 61){
								if ($weight >= 8.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 7.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 7.2){
										$whi = "ท้วม";
									}else if ($weight >= 5.5){
										$whi = "สมส่วน";
									}else if ($weight >= 5.3){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 62){
								if ($weight >= 8.6){
									$whi = "อ้วน" ;
									}else if ($weight >= 7.8){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 7.5){
										$whi = "ท้วม";
									}else if ($weight >= 5.8){
										$whi = "สมส่วน";
									}else if ($weight >= 5.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 63){
								if ($weight >= 8.9){
									$whi = "อ้วน" ;
									}else if ($weight >= 8.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 7.8){
										$whi = "ท้วม";
									}else if ($weight >= 6.0){
										$whi = "สมส่วน";
									}else if ($weight >= 5.8){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 64){
								if ($weight >= 9.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 8.4){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 8.1){
										$whi = "ท้วม";
									}else if ($weight >= 6.2){
										$whi = "สมส่วน";
									}else if ($weight >=6.0){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 65){
								if ($weight >= 9.5){
									$whi = "อ้วน" ;
									}else if ($weight >= 8.7){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 8.3){
										$whi = "ท้วม";
									}else if ($weight >= 6.4){
										$whi = "สมส่วน";
									}else if ($weight >=6.2){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}

					}else if ($height == 66){
								if ($weight >= 9.8){
									$whi = "อ้วน" ;
									}else if ($weight >= 9.0){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 8.6){
										$whi = "ท้วม";
									}else if ($weight >= 6.7){
										$whi = "สมส่วน";
									}else if ($weight >= 6.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}

					}else if ($height == 67){
								if ($weight >= 10.1){
									$whi = "อ้วน" ;
									}else if ($weight >= 9.3){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 8.9){
										$whi = "ท้วม";
									}else if ($weight >= 6.9){
										$whi = "สมส่วน";
									}else if ($weight >= 6.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 68){
								if ($weight >= 10.4){
									$whi = "อ้วน" ;
									}else if ($weight >= 9.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 9.1){
										$whi = "ท้วม";
									}else if ($weight >= 7.1){
										$whi = "สมส่วน";
									}else if ($weight >= 6.8){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 69){
								if ($weight >= 10.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 9.8){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 9.4){
										$whi = "ท้วม";
									}else if ($weight >= 7.3){
										$whi = "สมส่วน";
									}else if ($weight >= 7.0){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 70){
								if ($weight >= 11){
									$whi = "อ้วน" ;
									}else if ($weight >= 10.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 9.7){
										$whi = "ท้วม";
									}else if ($weight >= 7.5){
										$whi = "สมส่วน";
									}else if ($weight >=7.2){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 71){
								if ($weight >= 11.3){
									$whi = "อ้วน" ;
									}else if ($weight >= 10.3){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 9.9){
										$whi = "ท้วม";
									}else if ($weight >= 7.7){
										$whi = "สมส่วน";
									}else if ($weight >= 7.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}					

												}else if ($height == 72){
								if ($weight >= 11.6){
									$whi = "อ้วน" ;
									}else if ($weight >= 10.6){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 10.2){
										$whi = "ท้วม";
									}else if ($weight >= 7.9){
										$whi = "สมส่วน";
									}else if ($weight >= 7.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
					
					}else if ($height == 73){
								if ($weight >= 11.9){
									$whi = "อ้วน" ;
									}else if ($weight >= 10.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 10.4){
										$whi = "ท้วม";
									}else if ($weight >= 8.0){
										$whi = "สมส่วน";
									}else if ($weight >= 7.7){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 74){
								if ($weight >= 12.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 11.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 10.7){
										$whi = "ท้วม";
									}else if ($weight >=8.2){
										$whi = "สมส่วน";
									}else if ($weight >= 7.9){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 75){
								if ($weight >= 12.4){
									$whi = "อ้วน" ;
									}else if ($weight >= 11.4){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 10.9){
										$whi = "ท้วม";
									}else if ($weight >= 8.4){
										$whi = "สมส่วน";
									}else if ($weight >= 8.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 76){
								if ($weight >= 12.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 11.6){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 11.1){
										$whi = "ท้วม";
									}else if ($weight >= 8.6){
										$whi = "สมส่วน";
									}else if ($weight >= 8.3){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 77){
								if ($weight >= 12.9){
									$whi = "อ้วน" ;
									}else if ($weight >= 11.8){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 11.3){
										$whi = "ท้วม";
									}else if ($weight >= 8.8){
										$whi = "สมส่วน";
									}else if ($weight >= 8.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 78){
								if ($weight >= 13.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 12.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 11.6){
										$whi = "ท้วม";
									}else if ($weight >= 8.9){
										$whi = "สมส่วน";
									}else if ($weight >= 8.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 79){
								if ($weight >= 13.4){
									$whi = "อ้วน" ;
									}else if ($weight >= 12.3){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 11.8){
										$whi = "ท้วม";
									}else if ($weight >= 9.1){
										$whi = "สมส่วน";
									}else if ($weight >= 8.7){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 80){
								if ($weight >= 13.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 12.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 12){
										$whi = "ท้วม";
									}else if ($weight >= 9.2){
										$whi = "สมส่วน";
									}else if ($weight >= 8.9){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 81){
								if ($weight >= 13.9){
									$whi = "อ้วน" ;
									}else if ($weight >= 12.7){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 12.2){
										$whi = "ท้วม";
									}else if ($weight >= 9.4){
										$whi = "สมส่วน";
									}else if ($weight >= 9.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}					
										
												}else if ($height == 82){
								if ($weight >= 14.1){
									$whi = "อ้วน" ;
									}else if ($weight >= 12.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 12.4){
										$whi = "ท้วม";
									}else if ($weight >= 9.6){
										$whi = "สมส่วน";
									}else if ($weight >= 9.2){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}

					}else if ($height == 83){
								if ($weight >= 14.4){
									$whi = "อ้วน" ;
									}else if ($weight >= 13.2){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 12.6){
										$whi = "ท้วม";
									}else if ($weight >= 9.8){
										$whi = "สมส่วน";
									}else if ($weight >= 9.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 84){
								if ($weight >= 14.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 13.4){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 12.9){
										$whi = "ท้วม";
									}else if ($weight >= 10){
										$whi = "สมส่วน";
									}else if ($weight >= 9.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 85){
								if ($weight >= 15){
									$whi = "อ้วน" ;
									}else if ($weight >= 13.7){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 13.1){
										$whi = "ท้วม";
									}else if ($weight >= 10.2){
										$whi = "สมส่วน";
									}else if ($weight >= 9.8){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 86){
								if ($weight >= 15.3){
									$whi = "อ้วน" ;
									}else if ($weight >= 14){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 13.4){
										$whi = "ท้วม";
									}else if ($weight >= 10.4){
										$whi = "สมส่วน";
									}else if ($weight >=10){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					
										
					}else if ($height == 87){
								if ($weight >= 15.6){
									$whi = "อ้วน" ;
									}else if ($weight >= 14.3){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 13.7){
										$whi = "ท้วม";
									}else if ($weight >= 10.6){
										$whi = "สมส่วน";
									}else if ($weight >= 10.2){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 88){
								if ($weight >= 15.9){
									$whi = "อ้วน" ;
									}else if ($weight >= 14.6){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 14){
										$whi = "ท้วม";
									}else if ($weight >= 10.9){
										$whi = "สมส่วน";
									}else if ($weight >= 10.5){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 89){
								if ($weight >= 16.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 14.8){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 14.2){
										$whi = "ท้วม";
									}else if ($weight >= 11.1){
										$whi = "สมส่วน";
									}else if ($weight >= 10.7){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 90){
								if ($weight >= 16.5){
									$whi = "อ้วน" ;
									}else if ($weight >= 15.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 14.5){
										$whi = "ท้วม";
									}else if ($weight >= 11.3){
										$whi = "สมส่วน";
									}else if ($weight >= 10.9){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 91){
								if ($weight >= 16.8){
									$whi = "อ้วน" ;
									}else if ($weight >= 15.4){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 14.8){
										$whi = "ท้วม";
									}else if ($weight >= 11.5){
										$whi = "สมส่วน";
									}else if ($weight >= 11.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 92){
								if ($weight >= 17.1){
									$whi = "อ้วน" ;
									}else if ($weight >= 15.7){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 15){
										$whi = "ท้วม";
									}else if ($weight >= 11.7){
										$whi = "สมส่วน";
									}else if ($weight >= 11.3){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 93){
								if ($weight >= 17.4){
									$whi = "อ้วน" ;
									}else if ($weight >= 15.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 15.3){
										$whi = "ท้วม";
									}else if ($weight >= 11.9){
										$whi = "สมส่วน";
									}else if ($weight >= 11.5){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 94){
								if ($weight >= 17.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 16.2){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 15.5){
										$whi = "ท้วม";
									}else if ($weight >= 12.1){
										$whi = "สมส่วน";
									}else if ($weight >= 11.7){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 95){
								if ($weight >= 18){
									$whi = "อ้วน" ;
									}else if ($weight >= 16.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 15.8){
										$whi = "ท้วม";
									}else if ($weight >= 12.3){
										$whi = "สมส่วน";
									}else if ($weight >= 11.9){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 96){
								if ($weight >= 18.3){
									$whi = "อ้วน" ;
									}else if ($weight >= 16.8){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 16.1){
										$whi = "ท้วม";
									}else if ($weight >= 12.6){
										$whi = "สมส่วน";
									}else if ($weight >= 12.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 97){
								if ($weight >= 18.6){
									$whi = "อ้วน" ;
									}else if ($weight >= 17.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 16.4){
										$whi = "ท้วม";
									}else if ($weight >= 12.8){
										$whi = "สมส่วน";
									}else if ($weight >= 12.3){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 98){
								if ($weight >= 19){
									$whi = "อ้วน" ;
									}else if ($weight >= 17.4){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 16.7){
										$whi = "ท้วม";
									}else if ($weight >= 13){
										$whi = "สมส่วน";
									}else if ($weight >= 12.5){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}					

												}else if ($height == 99){
								if ($weight >= 19.3){
									$whi = "อ้วน" ;
									}else if ($weight >= 17.7){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 17){
										$whi = "ท้วม";
									}else if ($weight >= 13.2){
										$whi = "สมส่วน";
									}else if ($weight >= 12.7){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}


					}else if ($height == 100){
								if ($weight >= 19.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 18.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 17.3){
										$whi = "ท้วม";
									}else if ($weight >= 13.4){
										$whi = "สมส่วน";
									}else if ($weight >= 12.9){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 101){
								if ($weight >= 20.1){
									$whi = "อ้วน" ;
									}else if ($weight >= 18.4){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 17.6){
										$whi = "ท้วม";
									}else if ($weight >= 13.7){
										$whi = "สมส่วน";
									}else if ($weight >= 13.2){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 102){
								if ($weight >= 20.5){
									$whi = "อ้วน" ;
									}else if ($weight >= 18.8){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 18){
										$whi = "ท้วม";
									}else if ($weight >= 13.9){
										$whi = "สมส่วน";
									}else if ($weight >= 13.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 103){
								if ($weight >= 20.9){
									$whi = "อ้วน" ;
									}else if ($weight >= 19.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 18.3){
										$whi = "ท้วม";
									}else if ($weight >= 14.2){
										$whi = "สมส่วน";
									}else if ($weight >= 13.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 104){
								if ($weight >= 21.3){
									$whi = "อ้วน" ;
									}else if ($weight >= 19.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 18.7){
										$whi = "ท้วม";
									}else if ($weight >= 14.4){
										$whi = "สมส่วน";
									}else if ($weight >= 13.9){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 105){
								if ($weight >= 21.8){
									$whi = "อ้วน" ;
									}else if ($weight >= 19.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 19){
										$whi = "ท้วม";
									}else if ($weight >= 14.7){
										$whi = "สมส่วน";
									}else if ($weight >= 14.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 106){
								if ($weight >= 22.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 20.3){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 19.4){
										$whi = "ท้วม";
									}else if ($weight >= 15){
										$whi = "สมส่วน";
									}else if ($weight >= 14.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}		
										
					}else if ($height == 107){
								if ($weight >= 22.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 20.7){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 19.8){
										$whi = "ท้วม";
									}else if ($weight >= 15.2){
										$whi = "สมส่วน";
									}else if ($weight >= 14.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 108){
								if ($weight >= 23.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 21.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 20.2){
										$whi = "ท้วม";
									}else if ($weight >= 15.5){
										$whi = "สมส่วน";
									}else if ($weight >= 14.9){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 109){
								if ($weight >= 23.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 21.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 20.6){
										$whi = "ท้วม";
									}else if ($weight >= 15.8){
										$whi = "สมส่วน";
									}else if ($weight >= 15.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}					
										
					}else if ($height == 110){
								if ($weight >= 24.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 22){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 21){
										$whi = "ท้วม";
									}else if ($weight >= 16.1){
										$whi = "สมส่วน";
									}else if ($weight >= 15.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}					

					}else {
						$whi = "";}
								
						
					// น้ำหนักเทียบอายุ			
					if ($weight==0){
						$wei = "";
					}else if ($weight >= 8.8){
						$wei = "น้ำหนักมาก";		
					} else if ($weight >= 8.4){
						$wei = "น้ำหนักค่อนข้างมาก";
					}else if ($weight >= 5.9){
						$wei = "น้ำหนักตามเกณฑ์";
					}else if ($weight >= 5.6){
						$wei = "น้ำหนักค่อนข้างน้อย";
					}else {
						$wei = "น้ำหนักน้อย";}

						// ส่วนสูงเทียบอายุ
						if ($height == 0){
							$hi = "" ;
							}else if ($height >= 68.1){
								$hi = "สูง";
							} else if ($height >= 67.1){
								$hi = "ค่อนข้างสูง";
							}else if ($height >= 60.8){
								$hi = "สูงตามเกณฑ์";
							}else if ($height >= 59.7){
								$hi = "ค่อนข้างเตี้ย";
							}else {
								$hi = "เตี้ย";}

						// เส้นรอบศรีษะ
						if ($head == 0){
							$had = "" ;
							}else if ($head >= 44){
								$had = "ใหญ่";
							} else if ($head >= 43.4){
								$had = "ค่อนข้างใหญ่";
							}else if ($head>= 39.8){
								$had = "ปกติ";
							}else if ($head >= 39.2){
								$had = "ค่อนข้างเล็ก";
							}else {
								$had = "เล็ก";}		
							}}}
if ($sex == 1){
	if ($u_y == 0){	
			if ($u_m == 6){
				if ($height == 0){
					$whi = "" ;
					}else if ($height == 45){
														if ($weight >= 3.4){
																$whi = "อ้วน" ;
																}else if ($weight >= 3.1){
																		$whi = "เริ่มอ้วน";
																} else if ($weight >= 2.9){
																		$whi = "ท้วม";
																}else if ($weight >= 2.2){
																		$whi = "สมส่วน";
																}else if ($weight >= 2.0){
																		$whi = "ค่อนข้างผอม";
																}else {
																		$whi = "ผอม";}

					}else if ($height == 46){
								if ($weight >= 3.6){
									$whi = "อ้วน" ;
									}else if ($weight >= 3.2){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 3.1){
										$whi = "ท้วม";
									}else if ($weight >= 2.3){
										$wei = "สมส่วน";
									}else if ($weight >= 2.2){
										$wei = "ค่อนข้างผอม";
									}else {
										$wei = "ผอม";}

								}else if ($height == 47){
								if ($weight >= 3.8){
									$whi = "อ้วน" ;
									}else if ($weight >= 3.4){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 3.3){
										$whi = "ท้วม";
									}else if ($weight >= 2.4){
										$whi = "สมส่วน";
									}else if ($weight >= 2.3){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	

					}else if ($height == 48){
								if ($weight >= 4.0){
									$whi = "อ้วน" ;
									}else if ($weight >= 3.7){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 3.5){
										$whi = "ท้วม";
									}else if ($weight >= 2.6){
										$whi = "สมส่วน";
									}else if ($weight >= 2.5){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 49){
								if ($weight >= 4.3){
									$whi = "อ้วน" ;
									}else if ($weight >= 3.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 3.7){
										$whi = "ท้วม";
									}else if ($weight >= 2.7){
										$whi = "สมส่วน";
									}else if ($weight >= 2.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}						

					}else if ($height == 50){
										if ($weight >= 4.5){
											$whi = "อ้วน" ;
											}else if ($weight >= 4.1){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 3.9){
												$whi = "ท้วม";
											}else if ($weight >= 2.9){
												$whi = "สมส่วน";
											}else if ($weight >= 2.8){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	

					}else if ($height == 51){
								if ($weight >= 4.8){
									$whi = "อ้วน" ;
									}else if ($weight >= 4.3){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 4.2){
										$whi = "ท้วม";
									}else if ($weight >= 3.1){
										$whi = "สมส่วน";
									}else if ($weight >= 3.0){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}

					}else if ($height == 52){
								if ($weight >= 5.1){
									$whi = "อ้วน" ;
									}else if ($weight >= 4.6){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 4.4){
										$whi = "ท้วม";
									}else if ($weight >= 3.3){
										$whi = "สมส่วน";
									}else if ($weight >= 3.2){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	

					}else if ($height == 53){
								if ($weight >= 5.4){
									$whi = "อ้วน" ;
									}else if ($weight >= 4.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 4.7){
										$whi = "ท้วม";
									}else if ($weight >= 3.5){
										$whi = "สมส่วน";
									}else if ($weight >= 3.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 54){
								if ($weight >= 5.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 5.2){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 5.0){
										$whi = "ท้วม";
									}else if ($weight >= 3.8){
										$whi = "สมส่วน";
									}else if ($weight >= 3.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}		
										
					}else if ($height == 55){
								if ($weight >= 6.1){
									$whi = "อ้วน" ;
									}else if ($weight >= 5.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 5.3){
										$whi = "ท้วม";
									}else if ($weight >= 4.0){
										$whi = "สมส่วน";
									}else if ($weight >= 3.8){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}		
										
					}else if ($height == 56){
								if ($weight >= 6.4){
									$whi = "อ้วน" ;
									}else if ($weight >= 5.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 5.6){
										$whi = "ท้วม";
									}else if ($weight >= 4.3){
										$whi = "สมส่วน";
									}else if ($weight >= 4.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 57){
								if ($weight >= 6.8){
									$whi = "อ้วน" ;
									}else if ($weight >= 6.2){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 5.9){
										$whi = "ท้วม";
									}else if ($weight >= 4.5){
										$whi = "สมส่วน";
									}else if ($weight >= 4.3){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 58){
								if ($weight >= 7.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 6.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 6.3){
										$whi = "ท้วม";
									}else if ($weight >= 4.8){
										$whi = "สมส่วน";
									}else if ($weight >= 4.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 59){
								if ($weight >= 7.5){
									$whi = "อ้วน" ;
									}else if ($weight >= 6.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 6.6){
										$whi = "ท้วม";
									}else if ($weight >= 5.0){
										$whi = "สมส่วน";
									}else if ($weight >= 4.8){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 60){
								if ($weight >= 7.9){
									$whi = "อ้วน" ;
									}else if ($weight >= 7.2){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 6.9){
										$whi = "ท้วม";
									}else if ($weight >= 5.3){
										$whi = "สมส่วน";
									}else if ($weight >= 5.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 61){
								if ($weight >= 8.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 7.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 7.2){
										$whi = "ท้วม";
									}else if ($weight >= 5.5){
										$whi = "สมส่วน";
									}else if ($weight >= 5.3){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 62){
								if ($weight >= 8.6){
									$whi = "อ้วน" ;
									}else if ($weight >= 7.8){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 7.5){
										$whi = "ท้วม";
									}else if ($weight >= 5.8){
										$whi = "สมส่วน";
									}else if ($weight >= 5.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 63){
								if ($weight >= 8.9){
									$whi = "อ้วน" ;
									}else if ($weight >= 8.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 7.8){
										$whi = "ท้วม";
									}else if ($weight >= 6.0){
										$whi = "สมส่วน";
									}else if ($weight >= 5.8){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 64){
								if ($weight >= 9.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 8.4){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 8.1){
										$whi = "ท้วม";
									}else if ($weight >= 6.2){
										$whi = "สมส่วน";
									}else if ($weight >=6.0){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 65){
								if ($weight >= 9.5){
									$whi = "อ้วน" ;
									}else if ($weight >= 8.7){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 8.3){
										$whi = "ท้วม";
									}else if ($weight >= 6.4){
										$whi = "สมส่วน";
									}else if ($weight >=6.2){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}

					}else if ($height == 66){
								if ($weight >= 9.8){
									$whi = "อ้วน" ;
									}else if ($weight >= 9.0){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 8.6){
										$whi = "ท้วม";
									}else if ($weight >= 6.7){
										$whi = "สมส่วน";
									}else if ($weight >= 6.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}

					}else if ($height == 67){
								if ($weight >= 10.1){
									$whi = "อ้วน" ;
									}else if ($weight >= 9.3){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 8.9){
										$whi = "ท้วม";
									}else if ($weight >= 6.9){
										$whi = "สมส่วน";
									}else if ($weight >= 6.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 68){
								if ($weight >= 10.4){
									$whi = "อ้วน" ;
									}else if ($weight >= 9.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 9.1){
										$whi = "ท้วม";
									}else if ($weight >= 7.1){
										$whi = "สมส่วน";
									}else if ($weight >= 6.8){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 69){
								if ($weight >= 10.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 9.8){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 9.4){
										$whi = "ท้วม";
									}else if ($weight >= 7.3){
										$whi = "สมส่วน";
									}else if ($weight >= 7.0){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 70){
								if ($weight >= 11){
									$whi = "อ้วน" ;
									}else if ($weight >= 10.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 9.7){
										$whi = "ท้วม";
									}else if ($weight >= 7.5){
										$whi = "สมส่วน";
									}else if ($weight >=7.2){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 71){
								if ($weight >= 11.3){
									$whi = "อ้วน" ;
									}else if ($weight >= 10.3){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 9.9){
										$whi = "ท้วม";
									}else if ($weight >= 7.7){
										$whi = "สมส่วน";
									}else if ($weight >= 7.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}					

												}else if ($height == 72){
								if ($weight >= 11.6){
									$whi = "อ้วน" ;
									}else if ($weight >= 10.6){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 10.2){
										$whi = "ท้วม";
									}else if ($weight >= 7.9){
										$whi = "สมส่วน";
									}else if ($weight >= 7.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
					
					}else if ($height == 73){
								if ($weight >= 11.9){
									$whi = "อ้วน" ;
									}else if ($weight >= 10.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 10.4){
										$whi = "ท้วม";
									}else if ($weight >= 8.0){
										$whi = "สมส่วน";
									}else if ($weight >= 7.7){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 74){
								if ($weight >= 12.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 11.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 10.7){
										$whi = "ท้วม";
									}else if ($weight >=8.2){
										$whi = "สมส่วน";
									}else if ($weight >= 7.9){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 75){
								if ($weight >= 12.4){
									$whi = "อ้วน" ;
									}else if ($weight >= 11.4){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 10.9){
										$whi = "ท้วม";
									}else if ($weight >= 8.4){
										$whi = "สมส่วน";
									}else if ($weight >= 8.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 76){
								if ($weight >= 12.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 11.6){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 11.1){
										$whi = "ท้วม";
									}else if ($weight >= 8.6){
										$whi = "สมส่วน";
									}else if ($weight >= 8.3){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 77){
								if ($weight >= 12.9){
									$whi = "อ้วน" ;
									}else if ($weight >= 11.8){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 11.3){
										$whi = "ท้วม";
									}else if ($weight >= 8.8){
										$whi = "สมส่วน";
									}else if ($weight >= 8.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 78){
								if ($weight >= 13.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 12.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 11.6){
										$whi = "ท้วม";
									}else if ($weight >= 8.9){
										$whi = "สมส่วน";
									}else if ($weight >= 8.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 79){
								if ($weight >= 13.4){
									$whi = "อ้วน" ;
									}else if ($weight >= 12.3){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 11.8){
										$whi = "ท้วม";
									}else if ($weight >= 9.1){
										$whi = "สมส่วน";
									}else if ($weight >= 8.7){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 80){
								if ($weight >= 13.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 12.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 12){
										$whi = "ท้วม";
									}else if ($weight >= 9.2){
										$whi = "สมส่วน";
									}else if ($weight >= 8.9){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 81){
								if ($weight >= 13.9){
									$whi = "อ้วน" ;
									}else if ($weight >= 12.7){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 12.2){
										$whi = "ท้วม";
									}else if ($weight >= 9.4){
										$whi = "สมส่วน";
									}else if ($weight >= 9.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}					
										
												}else if ($height == 82){
								if ($weight >= 14.1){
									$whi = "อ้วน" ;
									}else if ($weight >= 12.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 12.4){
										$whi = "ท้วม";
									}else if ($weight >= 9.6){
										$whi = "สมส่วน";
									}else if ($weight >= 9.2){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}

					}else if ($height == 83){
								if ($weight >= 14.4){
									$whi = "อ้วน" ;
									}else if ($weight >= 13.2){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 12.6){
										$whi = "ท้วม";
									}else if ($weight >= 9.8){
										$whi = "สมส่วน";
									}else if ($weight >= 9.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 84){
								if ($weight >= 14.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 13.4){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 12.9){
										$whi = "ท้วม";
									}else if ($weight >= 10){
										$whi = "สมส่วน";
									}else if ($weight >= 9.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 85){
								if ($weight >= 15){
									$whi = "อ้วน" ;
									}else if ($weight >= 13.7){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 13.1){
										$whi = "ท้วม";
									}else if ($weight >= 10.2){
										$whi = "สมส่วน";
									}else if ($weight >= 9.8){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 86){
								if ($weight >= 15.3){
									$whi = "อ้วน" ;
									}else if ($weight >= 14){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 13.4){
										$whi = "ท้วม";
									}else if ($weight >= 10.4){
										$whi = "สมส่วน";
									}else if ($weight >=10){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					
										
					}else if ($height == 87){
								if ($weight >= 15.6){
									$whi = "อ้วน" ;
									}else if ($weight >= 14.3){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 13.7){
										$whi = "ท้วม";
									}else if ($weight >= 10.6){
										$whi = "สมส่วน";
									}else if ($weight >= 10.2){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 88){
								if ($weight >= 15.9){
									$whi = "อ้วน" ;
									}else if ($weight >= 14.6){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 14){
										$whi = "ท้วม";
									}else if ($weight >= 10.9){
										$whi = "สมส่วน";
									}else if ($weight >= 10.5){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 89){
								if ($weight >= 16.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 14.8){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 14.2){
										$whi = "ท้วม";
									}else if ($weight >= 11.1){
										$whi = "สมส่วน";
									}else if ($weight >= 10.7){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 90){
								if ($weight >= 16.5){
									$whi = "อ้วน" ;
									}else if ($weight >= 15.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 14.5){
										$whi = "ท้วม";
									}else if ($weight >= 11.3){
										$whi = "สมส่วน";
									}else if ($weight >= 10.9){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 91){
								if ($weight >= 16.8){
									$whi = "อ้วน" ;
									}else if ($weight >= 15.4){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 14.8){
										$whi = "ท้วม";
									}else if ($weight >= 11.5){
										$whi = "สมส่วน";
									}else if ($weight >= 11.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 92){
								if ($weight >= 17.1){
									$whi = "อ้วน" ;
									}else if ($weight >= 15.7){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 15){
										$whi = "ท้วม";
									}else if ($weight >= 11.7){
										$whi = "สมส่วน";
									}else if ($weight >= 11.3){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 93){
								if ($weight >= 17.4){
									$whi = "อ้วน" ;
									}else if ($weight >= 15.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 15.3){
										$whi = "ท้วม";
									}else if ($weight >= 11.9){
										$whi = "สมส่วน";
									}else if ($weight >= 11.5){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 94){
								if ($weight >= 17.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 16.2){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 15.5){
										$whi = "ท้วม";
									}else if ($weight >= 12.1){
										$whi = "สมส่วน";
									}else if ($weight >= 11.7){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 95){
								if ($weight >= 18){
									$whi = "อ้วน" ;
									}else if ($weight >= 16.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 15.8){
										$whi = "ท้วม";
									}else if ($weight >= 12.3){
										$whi = "สมส่วน";
									}else if ($weight >= 11.9){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 96){
								if ($weight >= 18.3){
									$whi = "อ้วน" ;
									}else if ($weight >= 16.8){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 16.1){
										$whi = "ท้วม";
									}else if ($weight >= 12.6){
										$whi = "สมส่วน";
									}else if ($weight >= 12.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 97){
								if ($weight >= 18.6){
									$whi = "อ้วน" ;
									}else if ($weight >= 17.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 16.4){
										$whi = "ท้วม";
									}else if ($weight >= 12.8){
										$whi = "สมส่วน";
									}else if ($weight >= 12.3){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 98){
								if ($weight >= 19){
									$whi = "อ้วน" ;
									}else if ($weight >= 17.4){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 16.7){
										$whi = "ท้วม";
									}else if ($weight >= 13){
										$whi = "สมส่วน";
									}else if ($weight >= 12.5){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}					

												}else if ($height == 99){
								if ($weight >= 19.3){
									$whi = "อ้วน" ;
									}else if ($weight >= 17.7){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 17){
										$whi = "ท้วม";
									}else if ($weight >= 13.2){
										$whi = "สมส่วน";
									}else if ($weight >= 12.7){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}


					}else if ($height == 100){
								if ($weight >= 19.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 18.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 17.3){
										$whi = "ท้วม";
									}else if ($weight >= 13.4){
										$whi = "สมส่วน";
									}else if ($weight >= 12.9){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 101){
								if ($weight >= 20.1){
									$whi = "อ้วน" ;
									}else if ($weight >= 18.4){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 17.6){
										$whi = "ท้วม";
									}else if ($weight >= 13.7){
										$whi = "สมส่วน";
									}else if ($weight >= 13.2){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 102){
								if ($weight >= 20.5){
									$whi = "อ้วน" ;
									}else if ($weight >= 18.8){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 18){
										$whi = "ท้วม";
									}else if ($weight >= 13.9){
										$whi = "สมส่วน";
									}else if ($weight >= 13.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 103){
								if ($weight >= 20.9){
									$whi = "อ้วน" ;
									}else if ($weight >= 19.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 18.3){
										$whi = "ท้วม";
									}else if ($weight >= 14.2){
										$whi = "สมส่วน";
									}else if ($weight >= 13.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 104){
								if ($weight >= 21.3){
									$whi = "อ้วน" ;
									}else if ($weight >= 19.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 18.7){
										$whi = "ท้วม";
									}else if ($weight >= 14.4){
										$whi = "สมส่วน";
									}else if ($weight >= 13.9){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 105){
								if ($weight >= 21.8){
									$whi = "อ้วน" ;
									}else if ($weight >= 19.9){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 19){
										$whi = "ท้วม";
									}else if ($weight >= 14.7){
										$whi = "สมส่วน";
									}else if ($weight >= 14.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 106){
								if ($weight >= 22.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 20.3){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 19.4){
										$whi = "ท้วม";
									}else if ($weight >= 15){
										$whi = "สมส่วน";
									}else if ($weight >= 14.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}		
										
					}else if ($height == 107){
								if ($weight >= 22.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 20.7){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 19.8){
										$whi = "ท้วม";
									}else if ($weight >= 15.2){
										$whi = "สมส่วน";
									}else if ($weight >= 14.6){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}
										
					}else if ($height == 108){
								if ($weight >= 23.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 21.1){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 20.2){
										$whi = "ท้วม";
									}else if ($weight >= 15.5){
										$whi = "สมส่วน";
									}else if ($weight >= 14.9){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}	
										
					}else if ($height == 109){
								if ($weight >= 23.7){
									$whi = "อ้วน" ;
									}else if ($weight >= 21.5){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 20.6){
										$whi = "ท้วม";
									}else if ($weight >= 15.8){
										$whi = "สมส่วน";
									}else if ($weight >= 15.1){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}					
										
					}else if ($height == 110){
								if ($weight >= 24.2){
									$whi = "อ้วน" ;
									}else if ($weight >= 22){
										$whi = "เริ่มอ้วน";
									} else if ($weight >= 21){
										$whi = "ท้วม";
									}else if ($weight >= 16.1){
										$whi = "สมส่วน";
									}else if ($weight >= 15.4){
										$whi = "ค่อนข้างผอม";
									}else {
										$whi = "ผอม";}					

					}else {
						$whi = "";}
								
						
					// น้ำหนักเทียบอายุ			
					if ($weight==0){
						$wei = "";
					}else if ($weight >= 9.9){
						$wei = "น้ำหนักมาก";		
					} else if ($weight >= 9.4){
						$wei = "น้ำหนักค่อนข้างมาก";
					}else if ($weight >= 6.7){
						$wei = "น้ำหนักตามเกณฑ์";
					}else if ($weight >= 6.4){
						$wei = "น้ำหนักค่อนข้างน้อย";
					}else {
						$wei = "น้ำหนักน้อย";}

						// ส่วนสูงเทียบอายุ
						if ($height == 0){
							$hi = "" ;
							}else if ($height >= 72){
								$hi = "สูง";
							} else if ($height >= 70.9){
								$hi = "ค่อนข้างสูง";
							}else if ($height >= 64.4){
								$hi = "สูงตามเกณฑ์";
							}else if ($height >=63.3){
								$hi = "ค่อนข้างเตี้ย";
							}else {
								$hi = "เตี้ย";}

						// เส้นรอบศรีษะ
						if ($head == 0){
							$had = "" ;
							}else if ($head >= 45.8){
								$had = "ใหญ่";
							} else if ($head >= 45.1){
								$had = "ค่อนข้างใหญ่";
							}else if ($head>= 41.5){
								$had = "ปกติ";
							}else if ($head >= 40.9){
								$had = "ค่อนข้างเล็ก";
							}else {
								$had = "เล็ก";}	}}}	
if ($sex == 1){
	if ($u_y == 0){	
		if ($u_m == 9){
			if ($height == 0){
				$whi = "" ;
				}else if ($height == 45){
													if ($weight >= 3.4){
															$whi = "อ้วน" ;
															}else if ($weight >= 3.1){
																	$whi = "เริ่มอ้วน";
															} else if ($weight >= 2.9){
																	$whi = "ท้วม";
															}else if ($weight >= 2.2){
																	$whi = "สมส่วน";
															}else if ($weight >= 2.0){
																	$whi = "ค่อนข้างผอม";
															}else {
																	$whi = "ผอม";}

				}else if ($height == 46){
							if ($weight >= 3.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.1){
									$whi = "ท้วม";
								}else if ($weight >= 2.3){
									$wei = "สมส่วน";
								}else if ($weight >= 2.2){
									$wei = "ค่อนข้างผอม";
								}else {
									$wei = "ผอม";}

							}else if ($height == 47){
							if ($weight >= 3.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.3){
									$whi = "ท้วม";
								}else if ($weight >= 2.4){
									$whi = "สมส่วน";
								}else if ($weight >= 2.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	

				}else if ($height == 48){
							if ($weight >= 4.0){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.5){
									$whi = "ท้วม";
								}else if ($weight >= 2.6){
									$whi = "สมส่วน";
								}else if ($weight >= 2.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 49){
							if ($weight >= 4.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.7){
									$whi = "ท้วม";
								}else if ($weight >= 2.7){
									$whi = "สมส่วน";
								}else if ($weight >= 2.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}						

				}else if ($height == 50){
									if ($weight >= 4.5){
										$whi = "อ้วน" ;
										}else if ($weight >= 4.1){
											$whi = "เริ่มอ้วน";
										} else if ($weight >= 3.9){
											$whi = "ท้วม";
										}else if ($weight >= 2.9){
											$whi = "สมส่วน";
										}else if ($weight >= 2.8){
											$whi = "ค่อนข้างผอม";
										}else {
											$whi = "ผอม";}	

				}else if ($height == 51){
							if ($weight >= 4.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.2){
									$whi = "ท้วม";
								}else if ($weight >= 3.1){
									$whi = "สมส่วน";
								}else if ($weight >= 3.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 52){
							if ($weight >= 5.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.4){
									$whi = "ท้วม";
								}else if ($weight >= 3.3){
									$whi = "สมส่วน";
								}else if ($weight >= 3.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	

				}else if ($height == 53){
							if ($weight >= 5.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.7){
									$whi = "ท้วม";
								}else if ($weight >= 3.5){
									$whi = "สมส่วน";
								}else if ($weight >= 3.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 54){
							if ($weight >= 5.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.0){
									$whi = "ท้วม";
								}else if ($weight >= 3.8){
									$whi = "สมส่วน";
								}else if ($weight >= 3.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 55){
							if ($weight >= 6.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.3){
									$whi = "ท้วม";
								}else if ($weight >= 4.0){
									$whi = "สมส่วน";
								}else if ($weight >= 3.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 56){
							if ($weight >= 6.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.6){
									$whi = "ท้วม";
								}else if ($weight >= 4.3){
									$whi = "สมส่วน";
								}else if ($weight >= 4.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 57){
							if ($weight >= 6.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.9){
									$whi = "ท้วม";
								}else if ($weight >= 4.5){
									$whi = "สมส่วน";
								}else if ($weight >= 4.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 58){
							if ($weight >= 7.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.3){
									$whi = "ท้วม";
								}else if ($weight >= 4.8){
									$whi = "สมส่วน";
								}else if ($weight >= 4.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 59){
							if ($weight >= 7.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.6){
									$whi = "ท้วม";
								}else if ($weight >= 5.0){
									$whi = "สมส่วน";
								}else if ($weight >= 4.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 60){
							if ($weight >= 7.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.9){
									$whi = "ท้วม";
								}else if ($weight >= 5.3){
									$whi = "สมส่วน";
								}else if ($weight >= 5.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 61){
							if ($weight >= 8.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.2){
									$whi = "ท้วม";
								}else if ($weight >= 5.5){
									$whi = "สมส่วน";
								}else if ($weight >= 5.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 62){
							if ($weight >= 8.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.5){
									$whi = "ท้วม";
								}else if ($weight >= 5.8){
									$whi = "สมส่วน";
								}else if ($weight >= 5.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 63){
							if ($weight >= 8.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.8){
									$whi = "ท้วม";
								}else if ($weight >= 6.0){
									$whi = "สมส่วน";
								}else if ($weight >= 5.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 64){
							if ($weight >= 9.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.1){
									$whi = "ท้วม";
								}else if ($weight >= 6.2){
									$whi = "สมส่วน";
								}else if ($weight >=6.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 65){
							if ($weight >= 9.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.3){
									$whi = "ท้วม";
								}else if ($weight >= 6.4){
									$whi = "สมส่วน";
								}else if ($weight >=6.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 66){
							if ($weight >= 9.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.0){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.6){
									$whi = "ท้วม";
								}else if ($weight >= 6.7){
									$whi = "สมส่วน";
								}else if ($weight >= 6.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 67){
							if ($weight >= 10.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.9){
									$whi = "ท้วม";
								}else if ($weight >= 6.9){
									$whi = "สมส่วน";
								}else if ($weight >= 6.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 68){
							if ($weight >= 10.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.1){
									$whi = "ท้วม";
								}else if ($weight >= 7.1){
									$whi = "สมส่วน";
								}else if ($weight >= 6.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 69){
							if ($weight >= 10.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.4){
									$whi = "ท้วม";
								}else if ($weight >= 7.3){
									$whi = "สมส่วน";
								}else if ($weight >= 7.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 70){
							if ($weight >= 11){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.7){
									$whi = "ท้วม";
								}else if ($weight >= 7.5){
									$whi = "สมส่วน";
								}else if ($weight >=7.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 71){
							if ($weight >= 11.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.9){
									$whi = "ท้วม";
								}else if ($weight >= 7.7){
									$whi = "สมส่วน";
								}else if ($weight >= 7.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

											}else if ($height == 72){
							if ($weight >= 11.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.2){
									$whi = "ท้วม";
								}else if ($weight >= 7.9){
									$whi = "สมส่วน";
								}else if ($weight >= 7.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
				
				}else if ($height == 73){
							if ($weight >= 11.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.4){
									$whi = "ท้วม";
								}else if ($weight >= 8.0){
									$whi = "สมส่วน";
								}else if ($weight >= 7.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 74){
							if ($weight >= 12.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.7){
									$whi = "ท้วม";
								}else if ($weight >=8.2){
									$whi = "สมส่วน";
								}else if ($weight >= 7.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 75){
							if ($weight >= 12.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.9){
									$whi = "ท้วม";
								}else if ($weight >= 8.4){
									$whi = "สมส่วน";
								}else if ($weight >= 8.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 76){
							if ($weight >= 12.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.1){
									$whi = "ท้วม";
								}else if ($weight >= 8.6){
									$whi = "สมส่วน";
								}else if ($weight >= 8.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 77){
							if ($weight >= 12.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.3){
									$whi = "ท้วม";
								}else if ($weight >= 8.8){
									$whi = "สมส่วน";
								}else if ($weight >= 8.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 78){
							if ($weight >= 13.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.6){
									$whi = "ท้วม";
								}else if ($weight >= 8.9){
									$whi = "สมส่วน";
								}else if ($weight >= 8.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 79){
							if ($weight >= 13.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.8){
									$whi = "ท้วม";
								}else if ($weight >= 9.1){
									$whi = "สมส่วน";
								}else if ($weight >= 8.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 80){
							if ($weight >= 13.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12){
									$whi = "ท้วม";
								}else if ($weight >= 9.2){
									$whi = "สมส่วน";
								}else if ($weight >= 8.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 81){
							if ($weight >= 13.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.2){
									$whi = "ท้วม";
								}else if ($weight >= 9.4){
									$whi = "สมส่วน";
								}else if ($weight >= 9.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					
									
											}else if ($height == 82){
							if ($weight >= 14.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.4){
									$whi = "ท้วม";
								}else if ($weight >= 9.6){
									$whi = "สมส่วน";
								}else if ($weight >= 9.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 83){
							if ($weight >= 14.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.6){
									$whi = "ท้วม";
								}else if ($weight >= 9.8){
									$whi = "สมส่วน";
								}else if ($weight >= 9.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 84){
							if ($weight >= 14.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.9){
									$whi = "ท้วม";
								}else if ($weight >= 10){
									$whi = "สมส่วน";
								}else if ($weight >= 9.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 85){
							if ($weight >= 15){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.1){
									$whi = "ท้วม";
								}else if ($weight >= 10.2){
									$whi = "สมส่วน";
								}else if ($weight >= 9.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 86){
							if ($weight >= 15.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 14){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.4){
									$whi = "ท้วม";
								}else if ($weight >= 10.4){
									$whi = "สมส่วน";
								}else if ($weight >=10){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				
									
				}else if ($height == 87){
							if ($weight >= 15.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.7){
									$whi = "ท้วม";
								}else if ($weight >= 10.6){
									$whi = "สมส่วน";
								}else if ($weight >= 10.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 88){
							if ($weight >= 15.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14){
									$whi = "ท้วม";
								}else if ($weight >= 10.9){
									$whi = "สมส่วน";
								}else if ($weight >= 10.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 89){
							if ($weight >= 16.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.2){
									$whi = "ท้วม";
								}else if ($weight >= 11.1){
									$whi = "สมส่วน";
								}else if ($weight >= 10.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 90){
							if ($weight >= 16.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.5){
									$whi = "ท้วม";
								}else if ($weight >= 11.3){
									$whi = "สมส่วน";
								}else if ($weight >= 10.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 91){
							if ($weight >= 16.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.8){
									$whi = "ท้วม";
								}else if ($weight >= 11.5){
									$whi = "สมส่วน";
								}else if ($weight >= 11.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 92){
							if ($weight >= 17.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15){
									$whi = "ท้วม";
								}else if ($weight >= 11.7){
									$whi = "สมส่วน";
								}else if ($weight >= 11.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 93){
							if ($weight >= 17.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.3){
									$whi = "ท้วม";
								}else if ($weight >= 11.9){
									$whi = "สมส่วน";
								}else if ($weight >= 11.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 94){
							if ($weight >= 17.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.5){
									$whi = "ท้วม";
								}else if ($weight >= 12.1){
									$whi = "สมส่วน";
								}else if ($weight >= 11.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 95){
							if ($weight >= 18){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.8){
									$whi = "ท้วม";
								}else if ($weight >= 12.3){
									$whi = "สมส่วน";
								}else if ($weight >= 11.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 96){
							if ($weight >= 18.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.1){
									$whi = "ท้วม";
								}else if ($weight >= 12.6){
									$whi = "สมส่วน";
								}else if ($weight >= 12.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 97){
							if ($weight >= 18.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.4){
									$whi = "ท้วม";
								}else if ($weight >= 12.8){
									$whi = "สมส่วน";
								}else if ($weight >= 12.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 98){
							if ($weight >= 19){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.7){
									$whi = "ท้วม";
								}else if ($weight >= 13){
									$whi = "สมส่วน";
								}else if ($weight >= 12.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

											}else if ($height == 99){
							if ($weight >= 19.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17){
									$whi = "ท้วม";
								}else if ($weight >= 13.2){
									$whi = "สมส่วน";
								}else if ($weight >= 12.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}


				}else if ($height == 100){
							if ($weight >= 19.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17.3){
									$whi = "ท้วม";
								}else if ($weight >= 13.4){
									$whi = "สมส่วน";
								}else if ($weight >= 12.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 101){
							if ($weight >= 20.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17.6){
									$whi = "ท้วม";
								}else if ($weight >= 13.7){
									$whi = "สมส่วน";
								}else if ($weight >= 13.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 102){
							if ($weight >= 20.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18){
									$whi = "ท้วม";
								}else if ($weight >= 13.9){
									$whi = "สมส่วน";
								}else if ($weight >= 13.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 103){
							if ($weight >= 20.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18.3){
									$whi = "ท้วม";
								}else if ($weight >= 14.2){
									$whi = "สมส่วน";
								}else if ($weight >= 13.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 104){
							if ($weight >= 21.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18.7){
									$whi = "ท้วม";
								}else if ($weight >= 14.4){
									$whi = "สมส่วน";
								}else if ($weight >= 13.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 105){
							if ($weight >= 21.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19){
									$whi = "ท้วม";
								}else if ($weight >= 14.7){
									$whi = "สมส่วน";
								}else if ($weight >= 14.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 106){
							if ($weight >= 22.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 20.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19.4){
									$whi = "ท้วม";
								}else if ($weight >= 15){
									$whi = "สมส่วน";
								}else if ($weight >= 14.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 107){
							if ($weight >= 22.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 20.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19.8){
									$whi = "ท้วม";
								}else if ($weight >= 15.2){
									$whi = "สมส่วน";
								}else if ($weight >= 14.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 108){
							if ($weight >= 23.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 21.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 20.2){
									$whi = "ท้วม";
								}else if ($weight >= 15.5){
									$whi = "สมส่วน";
								}else if ($weight >= 14.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 109){
							if ($weight >= 23.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 21.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 20.6){
									$whi = "ท้วม";
								}else if ($weight >= 15.8){
									$whi = "สมส่วน";
								}else if ($weight >= 15.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					
									
				}else if ($height == 110){
							if ($weight >= 24.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 22){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 21){
									$whi = "ท้วม";
								}else if ($weight >= 16.1){
									$whi = "สมส่วน";
								}else if ($weight >= 15.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

				}else {
					$whi = "";}
							
					
				// น้ำหนักเทียบอายุ			
				if ($weight==0){
					$wei = "";
				}else if ($weight >= 11.1){
					$wei = "น้ำหนักมาก";		
				} else if ($weight >= 10.6){
					$wei = "น้ำหนักค่อนข้างมาก";
				}else if ($weight >= 7.6){
					$wei = "น้ำหนักตามเกณฑ์";
				}else if ($weight >= 7.1){
					$wei = "น้ำหนักค่อนข้างน้อย";
				}else {
					$wei = "น้ำหนักน้อย";}

					// ส่วนสูงเทียบอายุ
					if ($height == 0){
						$hi = "" ;
						}else if ($height >= 76.6){
							$hi = "สูง";
						} else if ($height >= 75.4){
							$hi = "ค่อนข้างสูง";
						}else if ($height >= 68.6){
							$hi = "สูงตามเกณฑ์";
						}else if ($height >= 67.5){
							$hi = "ค่อนข้างเตี้ย";
						}else {
							$hi = "เตี้ย";}

					// เส้นรอบศรีษะ
					if ($head == 0){
						$had = "" ;
						}else if ($head >= 47.5){
							$had = "ใหญ่";
						} else if ($head >= 46.9){
							$had = "ค่อนข้างใหญ่";
						}else if ($head>= 43.1){
							$had = "ปกติ";
						}else if ($head >= 42.5){
							$had = "ค่อนข้างเล็ก";
						}else {
							$had = "เล็ก";}}}}
if ($sex == 1){
	if ($u_y == 1){	
		if ($u_m == 0){		
			if ($height == 0){
				$whi = "" ;
				}else if ($height == 45){
													if ($weight >= 3.4){
															$whi = "อ้วน" ;
															}else if ($weight >= 3.1){
																	$whi = "เริ่มอ้วน";
															} else if ($weight >= 2.9){
																	$whi = "ท้วม";
															}else if ($weight >= 2.2){
																	$whi = "สมส่วน";
															}else if ($weight >= 2.0){
																	$whi = "ค่อนข้างผอม";
															}else {
																	$whi = "ผอม";}

				}else if ($height == 46){
							if ($weight >= 3.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.1){
									$whi = "ท้วม";
								}else if ($weight >= 2.3){
									$wei = "สมส่วน";
								}else if ($weight >= 2.2){
									$wei = "ค่อนข้างผอม";
								}else {
									$wei = "ผอม";}

							}else if ($height == 47){
							if ($weight >= 3.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.3){
									$whi = "ท้วม";
								}else if ($weight >= 2.4){
									$whi = "สมส่วน";
								}else if ($weight >= 2.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	

				}else if ($height == 48){
							if ($weight >= 4.0){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.5){
									$whi = "ท้วม";
								}else if ($weight >= 2.6){
									$whi = "สมส่วน";
								}else if ($weight >= 2.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 49){
							if ($weight >= 4.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.7){
									$whi = "ท้วม";
								}else if ($weight >= 2.7){
									$whi = "สมส่วน";
								}else if ($weight >= 2.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}						

				}else if ($height == 50){
									if ($weight >= 4.5){
										$whi = "อ้วน" ;
										}else if ($weight >= 4.1){
											$whi = "เริ่มอ้วน";
										} else if ($weight >= 3.9){
											$whi = "ท้วม";
										}else if ($weight >= 2.9){
											$whi = "สมส่วน";
										}else if ($weight >= 2.8){
											$whi = "ค่อนข้างผอม";
										}else {
											$whi = "ผอม";}	

				}else if ($height == 51){
							if ($weight >= 4.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.2){
									$whi = "ท้วม";
								}else if ($weight >= 3.1){
									$whi = "สมส่วน";
								}else if ($weight >= 3.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 52){
							if ($weight >= 5.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.4){
									$whi = "ท้วม";
								}else if ($weight >= 3.3){
									$whi = "สมส่วน";
								}else if ($weight >= 3.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	

				}else if ($height == 53){
							if ($weight >= 5.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.7){
									$whi = "ท้วม";
								}else if ($weight >= 3.5){
									$whi = "สมส่วน";
								}else if ($weight >= 3.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 54){
							if ($weight >= 5.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.0){
									$whi = "ท้วม";
								}else if ($weight >= 3.8){
									$whi = "สมส่วน";
								}else if ($weight >= 3.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 55){
							if ($weight >= 6.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.3){
									$whi = "ท้วม";
								}else if ($weight >= 4.0){
									$whi = "สมส่วน";
								}else if ($weight >= 3.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 56){
							if ($weight >= 6.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.6){
									$whi = "ท้วม";
								}else if ($weight >= 4.3){
									$whi = "สมส่วน";
								}else if ($weight >= 4.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 57){
							if ($weight >= 6.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.9){
									$whi = "ท้วม";
								}else if ($weight >= 4.5){
									$whi = "สมส่วน";
								}else if ($weight >= 4.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 58){
							if ($weight >= 7.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.3){
									$whi = "ท้วม";
								}else if ($weight >= 4.8){
									$whi = "สมส่วน";
								}else if ($weight >= 4.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 59){
							if ($weight >= 7.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.6){
									$whi = "ท้วม";
								}else if ($weight >= 5.0){
									$whi = "สมส่วน";
								}else if ($weight >= 4.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 60){
							if ($weight >= 7.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.9){
									$whi = "ท้วม";
								}else if ($weight >= 5.3){
									$whi = "สมส่วน";
								}else if ($weight >= 5.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 61){
							if ($weight >= 8.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.2){
									$whi = "ท้วม";
								}else if ($weight >= 5.5){
									$whi = "สมส่วน";
								}else if ($weight >= 5.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 62){
							if ($weight >= 8.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.5){
									$whi = "ท้วม";
								}else if ($weight >= 5.8){
									$whi = "สมส่วน";
								}else if ($weight >= 5.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 63){
							if ($weight >= 8.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.8){
									$whi = "ท้วม";
								}else if ($weight >= 6.0){
									$whi = "สมส่วน";
								}else if ($weight >= 5.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 64){
							if ($weight >= 9.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.1){
									$whi = "ท้วม";
								}else if ($weight >= 6.2){
									$whi = "สมส่วน";
								}else if ($weight >=6.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 65){
							if ($weight >= 9.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.3){
									$whi = "ท้วม";
								}else if ($weight >= 6.4){
									$whi = "สมส่วน";
								}else if ($weight >=6.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 66){
							if ($weight >= 9.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.0){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.6){
									$whi = "ท้วม";
								}else if ($weight >= 6.7){
									$whi = "สมส่วน";
								}else if ($weight >= 6.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 67){
							if ($weight >= 10.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.9){
									$whi = "ท้วม";
								}else if ($weight >= 6.9){
									$whi = "สมส่วน";
								}else if ($weight >= 6.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 68){
							if ($weight >= 10.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.1){
									$whi = "ท้วม";
								}else if ($weight >= 7.1){
									$whi = "สมส่วน";
								}else if ($weight >= 6.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 69){
							if ($weight >= 10.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.4){
									$whi = "ท้วม";
								}else if ($weight >= 7.3){
									$whi = "สมส่วน";
								}else if ($weight >= 7.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 70){
							if ($weight >= 11){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.7){
									$whi = "ท้วม";
								}else if ($weight >= 7.5){
									$whi = "สมส่วน";
								}else if ($weight >=7.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 71){
							if ($weight >= 11.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.9){
									$whi = "ท้วม";
								}else if ($weight >= 7.7){
									$whi = "สมส่วน";
								}else if ($weight >= 7.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

											}else if ($height == 72){
							if ($weight >= 11.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.2){
									$whi = "ท้วม";
								}else if ($weight >= 7.9){
									$whi = "สมส่วน";
								}else if ($weight >= 7.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
				
				}else if ($height == 73){
							if ($weight >= 11.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.4){
									$whi = "ท้วม";
								}else if ($weight >= 8.0){
									$whi = "สมส่วน";
								}else if ($weight >= 7.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 74){
							if ($weight >= 12.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.7){
									$whi = "ท้วม";
								}else if ($weight >=8.2){
									$whi = "สมส่วน";
								}else if ($weight >= 7.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 75){
							if ($weight >= 12.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.9){
									$whi = "ท้วม";
								}else if ($weight >= 8.4){
									$whi = "สมส่วน";
								}else if ($weight >= 8.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 76){
							if ($weight >= 12.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.1){
									$whi = "ท้วม";
								}else if ($weight >= 8.6){
									$whi = "สมส่วน";
								}else if ($weight >= 8.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 77){
							if ($weight >= 12.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.3){
									$whi = "ท้วม";
								}else if ($weight >= 8.8){
									$whi = "สมส่วน";
								}else if ($weight >= 8.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 78){
							if ($weight >= 13.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.6){
									$whi = "ท้วม";
								}else if ($weight >= 8.9){
									$whi = "สมส่วน";
								}else if ($weight >= 8.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 79){
							if ($weight >= 13.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.8){
									$whi = "ท้วม";
								}else if ($weight >= 9.1){
									$whi = "สมส่วน";
								}else if ($weight >= 8.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 80){
							if ($weight >= 13.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12){
									$whi = "ท้วม";
								}else if ($weight >= 9.2){
									$whi = "สมส่วน";
								}else if ($weight >= 8.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 81){
							if ($weight >= 13.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.2){
									$whi = "ท้วม";
								}else if ($weight >= 9.4){
									$whi = "สมส่วน";
								}else if ($weight >= 9.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					
									
											}else if ($height == 82){
							if ($weight >= 14.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.4){
									$whi = "ท้วม";
								}else if ($weight >= 9.6){
									$whi = "สมส่วน";
								}else if ($weight >= 9.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 83){
							if ($weight >= 14.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.6){
									$whi = "ท้วม";
								}else if ($weight >= 9.8){
									$whi = "สมส่วน";
								}else if ($weight >= 9.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 84){
							if ($weight >= 14.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.9){
									$whi = "ท้วม";
								}else if ($weight >= 10){
									$whi = "สมส่วน";
								}else if ($weight >= 9.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 85){
							if ($weight >= 15){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.1){
									$whi = "ท้วม";
								}else if ($weight >= 10.2){
									$whi = "สมส่วน";
								}else if ($weight >= 9.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 86){
							if ($weight >= 15.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 14){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.4){
									$whi = "ท้วม";
								}else if ($weight >= 10.4){
									$whi = "สมส่วน";
								}else if ($weight >=10){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				
									
				}else if ($height == 87){
							if ($weight >= 15.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.7){
									$whi = "ท้วม";
								}else if ($weight >= 10.6){
									$whi = "สมส่วน";
								}else if ($weight >= 10.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 88){
							if ($weight >= 15.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14){
									$whi = "ท้วม";
								}else if ($weight >= 10.9){
									$whi = "สมส่วน";
								}else if ($weight >= 10.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 89){
							if ($weight >= 16.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.2){
									$whi = "ท้วม";
								}else if ($weight >= 11.1){
									$whi = "สมส่วน";
								}else if ($weight >= 10.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 90){
							if ($weight >= 16.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.5){
									$whi = "ท้วม";
								}else if ($weight >= 11.3){
									$whi = "สมส่วน";
								}else if ($weight >= 10.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 91){
							if ($weight >= 16.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.8){
									$whi = "ท้วม";
								}else if ($weight >= 11.5){
									$whi = "สมส่วน";
								}else if ($weight >= 11.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 92){
							if ($weight >= 17.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15){
									$whi = "ท้วม";
								}else if ($weight >= 11.7){
									$whi = "สมส่วน";
								}else if ($weight >= 11.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 93){
							if ($weight >= 17.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.3){
									$whi = "ท้วม";
								}else if ($weight >= 11.9){
									$whi = "สมส่วน";
								}else if ($weight >= 11.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 94){
							if ($weight >= 17.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.5){
									$whi = "ท้วม";
								}else if ($weight >= 12.1){
									$whi = "สมส่วน";
								}else if ($weight >= 11.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 95){
							if ($weight >= 18){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.8){
									$whi = "ท้วม";
								}else if ($weight >= 12.3){
									$whi = "สมส่วน";
								}else if ($weight >= 11.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 96){
							if ($weight >= 18.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.1){
									$whi = "ท้วม";
								}else if ($weight >= 12.6){
									$whi = "สมส่วน";
								}else if ($weight >= 12.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 97){
							if ($weight >= 18.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.4){
									$whi = "ท้วม";
								}else if ($weight >= 12.8){
									$whi = "สมส่วน";
								}else if ($weight >= 12.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 98){
							if ($weight >= 19){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.7){
									$whi = "ท้วม";
								}else if ($weight >= 13){
									$whi = "สมส่วน";
								}else if ($weight >= 12.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

											}else if ($height == 99){
							if ($weight >= 19.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17){
									$whi = "ท้วม";
								}else if ($weight >= 13.2){
									$whi = "สมส่วน";
								}else if ($weight >= 12.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}


				}else if ($height == 100){
							if ($weight >= 19.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17.3){
									$whi = "ท้วม";
								}else if ($weight >= 13.4){
									$whi = "สมส่วน";
								}else if ($weight >= 12.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 101){
							if ($weight >= 20.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17.6){
									$whi = "ท้วม";
								}else if ($weight >= 13.7){
									$whi = "สมส่วน";
								}else if ($weight >= 13.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 102){
							if ($weight >= 20.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18){
									$whi = "ท้วม";
								}else if ($weight >= 13.9){
									$whi = "สมส่วน";
								}else if ($weight >= 13.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 103){
							if ($weight >= 20.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18.3){
									$whi = "ท้วม";
								}else if ($weight >= 14.2){
									$whi = "สมส่วน";
								}else if ($weight >= 13.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 104){
							if ($weight >= 21.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18.7){
									$whi = "ท้วม";
								}else if ($weight >= 14.4){
									$whi = "สมส่วน";
								}else if ($weight >= 13.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 105){
							if ($weight >= 21.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19){
									$whi = "ท้วม";
								}else if ($weight >= 14.7){
									$whi = "สมส่วน";
								}else if ($weight >= 14.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 106){
							if ($weight >= 22.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 20.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19.4){
									$whi = "ท้วม";
								}else if ($weight >= 15){
									$whi = "สมส่วน";
								}else if ($weight >= 14.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 107){
							if ($weight >= 22.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 20.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19.8){
									$whi = "ท้วม";
								}else if ($weight >= 15.2){
									$whi = "สมส่วน";
								}else if ($weight >= 14.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 108){
							if ($weight >= 23.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 21.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 20.2){
									$whi = "ท้วม";
								}else if ($weight >= 15.5){
									$whi = "สมส่วน";
								}else if ($weight >= 14.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 109){
							if ($weight >= 23.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 21.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 20.6){
									$whi = "ท้วม";
								}else if ($weight >= 15.8){
									$whi = "สมส่วน";
								}else if ($weight >= 15.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					
									
				}else if ($height == 110){
							if ($weight >= 24.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 22){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 21){
									$whi = "ท้วม";
								}else if ($weight >= 16.1){
									$whi = "สมส่วน";
								}else if ($weight >= 15.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

				}else {
					$whi = "";}
							
					
				// น้ำหนักเทียบอายุ			
				if ($weight==0){
					$wei = "";
				}else if ($weight >= 12.1){
					$wei = "น้ำหนักมาก";		
				} else if ($weight >= 11.5){
					$wei = "น้ำหนักค่อนข้างมาก";
				}else if ($weight >= 8.2){
					$wei = "น้ำหนักตามเกณฑ์";
				}else if ($weight >= 7.7){
					$wei = "น้ำหนักค่อนข้างน้อย";
				}else {
					$wei = "น้ำหนักน้อย";}

					// ส่วนสูงเทียบอายุ
					if ($height == 0){
						$hi = "" ;
						}else if ($height >= 80.6){
							$hi = "สูง";
						} else if ($height >= 79.5){
							$hi = "ค่อนข้างสูง";
						}else if ($height >= 72.2){
							$hi = "สูงตามเกณฑ์";
						}else if ($height >= 71.0){
							$hi = "ค่อนข้างเตี้ย";
						}else {
							$hi = "เตี้ย";}

					// เส้นรอบศรีษะ
					if ($head == 0){
						$had = "" ;
						}else if ($head >= 48.6){
							$had = "ใหญ่";
						} else if ($head >= 48){
							$had = "ค่อนข้างใหญ่";
						}else if ($head>= 44.2){
							$had = "ปกติ";
						}else if ($head >= 43.5){
							$had = "ค่อนข้างเล็ก";
						}else {
							$had = "เล็ก";}		
						}}}
if ($sex == 1){
	if ($u_y == 1){	
		if ($u_m == 6){	
			if ($height == 0){
				$whi = "" ;
				}else if ($height == 45){
													if ($weight >= 3.4){
															$whi = "อ้วน" ;
															}else if ($weight >= 3.1){
																	$whi = "เริ่มอ้วน";
															} else if ($weight >= 2.9){
																	$whi = "ท้วม";
															}else if ($weight >= 2.2){
																	$whi = "สมส่วน";
															}else if ($weight >= 2.0){
																	$whi = "ค่อนข้างผอม";
															}else {
																	$whi = "ผอม";}

				}else if ($height == 46){
							if ($weight >= 3.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.1){
									$whi = "ท้วม";
								}else if ($weight >= 2.3){
									$wei = "สมส่วน";
								}else if ($weight >= 2.2){
									$wei = "ค่อนข้างผอม";
								}else {
									$wei = "ผอม";}

							}else if ($height == 47){
							if ($weight >= 3.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.3){
									$whi = "ท้วม";
								}else if ($weight >= 2.4){
									$whi = "สมส่วน";
								}else if ($weight >= 2.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	

				}else if ($height == 48){
							if ($weight >= 4.0){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.5){
									$whi = "ท้วม";
								}else if ($weight >= 2.6){
									$whi = "สมส่วน";
								}else if ($weight >= 2.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 49){
							if ($weight >= 4.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.7){
									$whi = "ท้วม";
								}else if ($weight >= 2.7){
									$whi = "สมส่วน";
								}else if ($weight >= 2.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}						

				}else if ($height == 50){
									if ($weight >= 4.5){
										$whi = "อ้วน" ;
										}else if ($weight >= 4.1){
											$whi = "เริ่มอ้วน";
										} else if ($weight >= 3.9){
											$whi = "ท้วม";
										}else if ($weight >= 2.9){
											$whi = "สมส่วน";
										}else if ($weight >= 2.8){
											$whi = "ค่อนข้างผอม";
										}else {
											$whi = "ผอม";}	

				}else if ($height == 51){
							if ($weight >= 4.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.2){
									$whi = "ท้วม";
								}else if ($weight >= 3.1){
									$whi = "สมส่วน";
								}else if ($weight >= 3.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 52){
							if ($weight >= 5.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.4){
									$whi = "ท้วม";
								}else if ($weight >= 3.3){
									$whi = "สมส่วน";
								}else if ($weight >= 3.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	

				}else if ($height == 53){
							if ($weight >= 5.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.7){
									$whi = "ท้วม";
								}else if ($weight >= 3.5){
									$whi = "สมส่วน";
								}else if ($weight >= 3.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 54){
							if ($weight >= 5.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.0){
									$whi = "ท้วม";
								}else if ($weight >= 3.8){
									$whi = "สมส่วน";
								}else if ($weight >= 3.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 55){
							if ($weight >= 6.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.3){
									$whi = "ท้วม";
								}else if ($weight >= 4.0){
									$whi = "สมส่วน";
								}else if ($weight >= 3.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 56){
							if ($weight >= 6.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.6){
									$whi = "ท้วม";
								}else if ($weight >= 4.3){
									$whi = "สมส่วน";
								}else if ($weight >= 4.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 57){
							if ($weight >= 6.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.9){
									$whi = "ท้วม";
								}else if ($weight >= 4.5){
									$whi = "สมส่วน";
								}else if ($weight >= 4.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 58){
							if ($weight >= 7.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.3){
									$whi = "ท้วม";
								}else if ($weight >= 4.8){
									$whi = "สมส่วน";
								}else if ($weight >= 4.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 59){
							if ($weight >= 7.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.6){
									$whi = "ท้วม";
								}else if ($weight >= 5.0){
									$whi = "สมส่วน";
								}else if ($weight >= 4.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 60){
							if ($weight >= 7.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.9){
									$whi = "ท้วม";
								}else if ($weight >= 5.3){
									$whi = "สมส่วน";
								}else if ($weight >= 5.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 61){
							if ($weight >= 8.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.2){
									$whi = "ท้วม";
								}else if ($weight >= 5.5){
									$whi = "สมส่วน";
								}else if ($weight >= 5.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 62){
							if ($weight >= 8.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.5){
									$whi = "ท้วม";
								}else if ($weight >= 5.8){
									$whi = "สมส่วน";
								}else if ($weight >= 5.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 63){
							if ($weight >= 8.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.8){
									$whi = "ท้วม";
								}else if ($weight >= 6.0){
									$whi = "สมส่วน";
								}else if ($weight >= 5.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 64){
							if ($weight >= 9.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.1){
									$whi = "ท้วม";
								}else if ($weight >= 6.2){
									$whi = "สมส่วน";
								}else if ($weight >=6.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 65){
							if ($weight >= 9.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.3){
									$whi = "ท้วม";
								}else if ($weight >= 6.4){
									$whi = "สมส่วน";
								}else if ($weight >=6.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 66){
							if ($weight >= 9.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.0){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.6){
									$whi = "ท้วม";
								}else if ($weight >= 6.7){
									$whi = "สมส่วน";
								}else if ($weight >= 6.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 67){
							if ($weight >= 10.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.9){
									$whi = "ท้วม";
								}else if ($weight >= 6.9){
									$whi = "สมส่วน";
								}else if ($weight >= 6.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 68){
							if ($weight >= 10.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.1){
									$whi = "ท้วม";
								}else if ($weight >= 7.1){
									$whi = "สมส่วน";
								}else if ($weight >= 6.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 69){
							if ($weight >= 10.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.4){
									$whi = "ท้วม";
								}else if ($weight >= 7.3){
									$whi = "สมส่วน";
								}else if ($weight >= 7.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 70){
							if ($weight >= 11){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.7){
									$whi = "ท้วม";
								}else if ($weight >= 7.5){
									$whi = "สมส่วน";
								}else if ($weight >=7.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 71){
							if ($weight >= 11.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.9){
									$whi = "ท้วม";
								}else if ($weight >= 7.7){
									$whi = "สมส่วน";
								}else if ($weight >= 7.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

											}else if ($height == 72){
							if ($weight >= 11.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.2){
									$whi = "ท้วม";
								}else if ($weight >= 7.9){
									$whi = "สมส่วน";
								}else if ($weight >= 7.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
				
				}else if ($height == 73){
							if ($weight >= 11.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.4){
									$whi = "ท้วม";
								}else if ($weight >= 8.0){
									$whi = "สมส่วน";
								}else if ($weight >= 7.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 74){
							if ($weight >= 12.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.7){
									$whi = "ท้วม";
								}else if ($weight >=8.2){
									$whi = "สมส่วน";
								}else if ($weight >= 7.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 75){
							if ($weight >= 12.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.9){
									$whi = "ท้วม";
								}else if ($weight >= 8.4){
									$whi = "สมส่วน";
								}else if ($weight >= 8.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 76){
							if ($weight >= 12.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.1){
									$whi = "ท้วม";
								}else if ($weight >= 8.6){
									$whi = "สมส่วน";
								}else if ($weight >= 8.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 77){
							if ($weight >= 12.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.3){
									$whi = "ท้วม";
								}else if ($weight >= 8.8){
									$whi = "สมส่วน";
								}else if ($weight >= 8.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 78){
							if ($weight >= 13.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.6){
									$whi = "ท้วม";
								}else if ($weight >= 8.9){
									$whi = "สมส่วน";
								}else if ($weight >= 8.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 79){
							if ($weight >= 13.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.8){
									$whi = "ท้วม";
								}else if ($weight >= 9.1){
									$whi = "สมส่วน";
								}else if ($weight >= 8.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 80){
							if ($weight >= 13.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12){
									$whi = "ท้วม";
								}else if ($weight >= 9.2){
									$whi = "สมส่วน";
								}else if ($weight >= 8.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 81){
							if ($weight >= 13.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.2){
									$whi = "ท้วม";
								}else if ($weight >= 9.4){
									$whi = "สมส่วน";
								}else if ($weight >= 9.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					
									
											}else if ($height == 82){
							if ($weight >= 14.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.4){
									$whi = "ท้วม";
								}else if ($weight >= 9.6){
									$whi = "สมส่วน";
								}else if ($weight >= 9.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 83){
							if ($weight >= 14.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.6){
									$whi = "ท้วม";
								}else if ($weight >= 9.8){
									$whi = "สมส่วน";
								}else if ($weight >= 9.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 84){
							if ($weight >= 14.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.9){
									$whi = "ท้วม";
								}else if ($weight >= 10){
									$whi = "สมส่วน";
								}else if ($weight >= 9.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 85){
							if ($weight >= 15){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.1){
									$whi = "ท้วม";
								}else if ($weight >= 10.2){
									$whi = "สมส่วน";
								}else if ($weight >= 9.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 86){
							if ($weight >= 15.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 14){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.4){
									$whi = "ท้วม";
								}else if ($weight >= 10.4){
									$whi = "สมส่วน";
								}else if ($weight >=10){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				
									
				}else if ($height == 87){
							if ($weight >= 15.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.7){
									$whi = "ท้วม";
								}else if ($weight >= 10.6){
									$whi = "สมส่วน";
								}else if ($weight >= 10.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 88){
							if ($weight >= 15.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14){
									$whi = "ท้วม";
								}else if ($weight >= 10.9){
									$whi = "สมส่วน";
								}else if ($weight >= 10.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 89){
							if ($weight >= 16.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.2){
									$whi = "ท้วม";
								}else if ($weight >= 11.1){
									$whi = "สมส่วน";
								}else if ($weight >= 10.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 90){
							if ($weight >= 16.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.5){
									$whi = "ท้วม";
								}else if ($weight >= 11.3){
									$whi = "สมส่วน";
								}else if ($weight >= 10.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 91){
							if ($weight >= 16.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.8){
									$whi = "ท้วม";
								}else if ($weight >= 11.5){
									$whi = "สมส่วน";
								}else if ($weight >= 11.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 92){
							if ($weight >= 17.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15){
									$whi = "ท้วม";
								}else if ($weight >= 11.7){
									$whi = "สมส่วน";
								}else if ($weight >= 11.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 93){
							if ($weight >= 17.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.3){
									$whi = "ท้วม";
								}else if ($weight >= 11.9){
									$whi = "สมส่วน";
								}else if ($weight >= 11.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 94){
							if ($weight >= 17.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.5){
									$whi = "ท้วม";
								}else if ($weight >= 12.1){
									$whi = "สมส่วน";
								}else if ($weight >= 11.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 95){
							if ($weight >= 18){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.8){
									$whi = "ท้วม";
								}else if ($weight >= 12.3){
									$whi = "สมส่วน";
								}else if ($weight >= 11.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 96){
							if ($weight >= 18.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.1){
									$whi = "ท้วม";
								}else if ($weight >= 12.6){
									$whi = "สมส่วน";
								}else if ($weight >= 12.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 97){
							if ($weight >= 18.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.4){
									$whi = "ท้วม";
								}else if ($weight >= 12.8){
									$whi = "สมส่วน";
								}else if ($weight >= 12.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 98){
							if ($weight >= 19){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.7){
									$whi = "ท้วม";
								}else if ($weight >= 13){
									$whi = "สมส่วน";
								}else if ($weight >= 12.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

											}else if ($height == 99){
							if ($weight >= 19.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17){
									$whi = "ท้วม";
								}else if ($weight >= 13.2){
									$whi = "สมส่วน";
								}else if ($weight >= 12.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}


				}else if ($height == 100){
							if ($weight >= 19.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17.3){
									$whi = "ท้วม";
								}else if ($weight >= 13.4){
									$whi = "สมส่วน";
								}else if ($weight >= 12.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 101){
							if ($weight >= 20.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17.6){
									$whi = "ท้วม";
								}else if ($weight >= 13.7){
									$whi = "สมส่วน";
								}else if ($weight >= 13.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 102){
							if ($weight >= 20.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18){
									$whi = "ท้วม";
								}else if ($weight >= 13.9){
									$whi = "สมส่วน";
								}else if ($weight >= 13.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 103){
							if ($weight >= 20.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18.3){
									$whi = "ท้วม";
								}else if ($weight >= 14.2){
									$whi = "สมส่วน";
								}else if ($weight >= 13.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 104){
							if ($weight >= 21.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18.7){
									$whi = "ท้วม";
								}else if ($weight >= 14.4){
									$whi = "สมส่วน";
								}else if ($weight >= 13.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 105){
							if ($weight >= 21.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19){
									$whi = "ท้วม";
								}else if ($weight >= 14.7){
									$whi = "สมส่วน";
								}else if ($weight >= 14.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 106){
							if ($weight >= 22.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 20.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19.4){
									$whi = "ท้วม";
								}else if ($weight >= 15){
									$whi = "สมส่วน";
								}else if ($weight >= 14.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 107){
							if ($weight >= 22.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 20.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19.8){
									$whi = "ท้วม";
								}else if ($weight >= 15.2){
									$whi = "สมส่วน";
								}else if ($weight >= 14.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 108){
							if ($weight >= 23.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 21.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 20.2){
									$whi = "ท้วม";
								}else if ($weight >= 15.5){
									$whi = "สมส่วน";
								}else if ($weight >= 14.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 109){
							if ($weight >= 23.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 21.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 20.6){
									$whi = "ท้วม";
								}else if ($weight >= 15.8){
									$whi = "สมส่วน";
								}else if ($weight >= 15.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					
									
				}else if ($height == 110){
							if ($weight >= 24.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 22){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 21){
									$whi = "ท้วม";
								}else if ($weight >= 16.1){
									$whi = "สมส่วน";
								}else if ($weight >= 15.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

				}else {
					$whi = "";}
							
					
				// น้ำหนักเทียบอายุ			
				if ($weight==0){
					$wei = "";
				}else if ($weight >= 13.8){
					$wei = "น้ำหนักมาก";		
				} else if ($weight >= 13){
					$wei = "น้ำหนักค่อนข้างมาก";
				}else if ($weight >= 9.3){
					$wei = "น้ำหนักตามเกณฑ์";
				}else if ($weight >= 8.8){
					$wei = "น้ำหนักค่อนข้างน้อย";
				}else {
					$wei = "น้ำหนักน้อย";}

					// ส่วนสูงเทียบอายุ
					if ($height == 0){
						$hi = "" ;
						}else if ($height >= 87.8){
							$hi = "สูง";
						} else if ($height >= 86.4){
							$hi = "ค่อนข้างสูง";
						}else if ($height >= 78.2){
							$hi = "สูงตามเกณฑ์";
						}else if ($height >= 76.9){
							$hi = "ค่อนข้างเตี้ย";
						}else {
							$hi = "เตี้ย";}

					// เส้นรอบศรีษะ
					if ($head == 0){
						$had = "" ;
						}else if ($head >= 50){
							$had = "ใหญ่";
						} else if ($head >= 49.4){
							$had = "ค่อนข้างใหญ่";
						}else if ($head>= 45.4){
							$had = "ปกติ";
						}else if ($head >= 44.7){
							$had = "ค่อนข้างเล็ก";
						}else {
							$had = "เล็ก";}		
						}}}
if ($sex == 1){
	if ($u_y == 2){	
		if ($u_m == 0){	
			if ($height == 0){
				$whi = "" ;
				}else if ($height == 45){
													if ($weight >= 3.4){
															$whi = "อ้วน" ;
															}else if ($weight >= 3.1){
																	$whi = "เริ่มอ้วน";
															} else if ($weight >= 2.9){
																	$whi = "ท้วม";
															}else if ($weight >= 2.2){
																	$whi = "สมส่วน";
															}else if ($weight >= 2.0){
																	$whi = "ค่อนข้างผอม";
															}else {
																	$whi = "ผอม";}

				}else if ($height == 46){
							if ($weight >= 3.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.1){
									$whi = "ท้วม";
								}else if ($weight >= 2.3){
									$wei = "สมส่วน";
								}else if ($weight >= 2.2){
									$wei = "ค่อนข้างผอม";
								}else {
									$wei = "ผอม";}

							}else if ($height == 47){
							if ($weight >= 3.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.3){
									$whi = "ท้วม";
								}else if ($weight >= 2.4){
									$whi = "สมส่วน";
								}else if ($weight >= 2.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	

				}else if ($height == 48){
							if ($weight >= 4.0){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.5){
									$whi = "ท้วม";
								}else if ($weight >= 2.6){
									$whi = "สมส่วน";
								}else if ($weight >= 2.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 49){
							if ($weight >= 4.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.7){
									$whi = "ท้วม";
								}else if ($weight >= 2.7){
									$whi = "สมส่วน";
								}else if ($weight >= 2.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}						

				}else if ($height == 50){
									if ($weight >= 4.5){
										$whi = "อ้วน" ;
										}else if ($weight >= 4.1){
											$whi = "เริ่มอ้วน";
										} else if ($weight >= 3.9){
											$whi = "ท้วม";
										}else if ($weight >= 2.9){
											$whi = "สมส่วน";
										}else if ($weight >= 2.8){
											$whi = "ค่อนข้างผอม";
										}else {
											$whi = "ผอม";}	

				}else if ($height == 51){
							if ($weight >= 4.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.2){
									$whi = "ท้วม";
								}else if ($weight >= 3.1){
									$whi = "สมส่วน";
								}else if ($weight >= 3.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 52){
							if ($weight >= 5.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.4){
									$whi = "ท้วม";
								}else if ($weight >= 3.3){
									$whi = "สมส่วน";
								}else if ($weight >= 3.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	

				}else if ($height == 53){
							if ($weight >= 5.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.7){
									$whi = "ท้วม";
								}else if ($weight >= 3.5){
									$whi = "สมส่วน";
								}else if ($weight >= 3.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 54){
							if ($weight >= 5.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.0){
									$whi = "ท้วม";
								}else if ($weight >= 3.8){
									$whi = "สมส่วน";
								}else if ($weight >= 3.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 55){
							if ($weight >= 6.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.3){
									$whi = "ท้วม";
								}else if ($weight >= 4.0){
									$whi = "สมส่วน";
								}else if ($weight >= 3.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 56){
							if ($weight >= 6.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.6){
									$whi = "ท้วม";
								}else if ($weight >= 4.3){
									$whi = "สมส่วน";
								}else if ($weight >= 4.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 57){
							if ($weight >= 6.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.9){
									$whi = "ท้วม";
								}else if ($weight >= 4.5){
									$whi = "สมส่วน";
								}else if ($weight >= 4.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 58){
							if ($weight >= 7.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.3){
									$whi = "ท้วม";
								}else if ($weight >= 4.8){
									$whi = "สมส่วน";
								}else if ($weight >= 4.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 59){
							if ($weight >= 7.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.6){
									$whi = "ท้วม";
								}else if ($weight >= 5.0){
									$whi = "สมส่วน";
								}else if ($weight >= 4.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 60){
							if ($weight >= 7.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.9){
									$whi = "ท้วม";
								}else if ($weight >= 5.3){
									$whi = "สมส่วน";
								}else if ($weight >= 5.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 61){
							if ($weight >= 8.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.2){
									$whi = "ท้วม";
								}else if ($weight >= 5.5){
									$whi = "สมส่วน";
								}else if ($weight >= 5.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 62){
							if ($weight >= 8.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.5){
									$whi = "ท้วม";
								}else if ($weight >= 5.8){
									$whi = "สมส่วน";
								}else if ($weight >= 5.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 63){
							if ($weight >= 8.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.8){
									$whi = "ท้วม";
								}else if ($weight >= 6.0){
									$whi = "สมส่วน";
								}else if ($weight >= 5.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 64){
							if ($weight >= 9.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.1){
									$whi = "ท้วม";
								}else if ($weight >= 6.2){
									$whi = "สมส่วน";
								}else if ($weight >=6.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 65){
							if ($weight >= 9.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.3){
									$whi = "ท้วม";
								}else if ($weight >= 6.4){
									$whi = "สมส่วน";
								}else if ($weight >=6.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 66){
							if ($weight >= 9.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.0){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.6){
									$whi = "ท้วม";
								}else if ($weight >= 6.7){
									$whi = "สมส่วน";
								}else if ($weight >= 6.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 67){
							if ($weight >= 10.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.9){
									$whi = "ท้วม";
								}else if ($weight >= 6.9){
									$whi = "สมส่วน";
								}else if ($weight >= 6.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 68){
							if ($weight >= 10.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.1){
									$whi = "ท้วม";
								}else if ($weight >= 7.1){
									$whi = "สมส่วน";
								}else if ($weight >= 6.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 69){
							if ($weight >= 10.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.4){
									$whi = "ท้วม";
								}else if ($weight >= 7.3){
									$whi = "สมส่วน";
								}else if ($weight >= 7.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 70){
							if ($weight >= 11){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.7){
									$whi = "ท้วม";
								}else if ($weight >= 7.5){
									$whi = "สมส่วน";
								}else if ($weight >=7.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 71){
							if ($weight >= 11.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.9){
									$whi = "ท้วม";
								}else if ($weight >= 7.7){
									$whi = "สมส่วน";
								}else if ($weight >= 7.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

											}else if ($height == 72){
							if ($weight >= 11.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.2){
									$whi = "ท้วม";
								}else if ($weight >= 7.9){
									$whi = "สมส่วน";
								}else if ($weight >= 7.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
				
				}else if ($height == 73){
							if ($weight >= 11.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.4){
									$whi = "ท้วม";
								}else if ($weight >= 8.0){
									$whi = "สมส่วน";
								}else if ($weight >= 7.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 74){
							if ($weight >= 12.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.7){
									$whi = "ท้วม";
								}else if ($weight >=8.2){
									$whi = "สมส่วน";
								}else if ($weight >= 7.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 75){
							if ($weight >= 12.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.9){
									$whi = "ท้วม";
								}else if ($weight >= 8.4){
									$whi = "สมส่วน";
								}else if ($weight >= 8.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 76){
							if ($weight >= 12.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.1){
									$whi = "ท้วม";
								}else if ($weight >= 8.6){
									$whi = "สมส่วน";
								}else if ($weight >= 8.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 77){
							if ($weight >= 12.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.3){
									$whi = "ท้วม";
								}else if ($weight >= 8.8){
									$whi = "สมส่วน";
								}else if ($weight >= 8.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 78){
							if ($weight >= 13.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.6){
									$whi = "ท้วม";
								}else if ($weight >= 8.9){
									$whi = "สมส่วน";
								}else if ($weight >= 8.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 79){
							if ($weight >= 13.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.8){
									$whi = "ท้วม";
								}else if ($weight >= 9.1){
									$whi = "สมส่วน";
								}else if ($weight >= 8.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 80){
							if ($weight >= 13.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12){
									$whi = "ท้วม";
								}else if ($weight >= 9.2){
									$whi = "สมส่วน";
								}else if ($weight >= 8.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 81){
							if ($weight >= 13.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.2){
									$whi = "ท้วม";
								}else if ($weight >= 9.4){
									$whi = "สมส่วน";
								}else if ($weight >= 9.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					
									
											}else if ($height == 82){
							if ($weight >= 14.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.4){
									$whi = "ท้วม";
								}else if ($weight >= 9.6){
									$whi = "สมส่วน";
								}else if ($weight >= 9.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 83){
							if ($weight >= 14.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.6){
									$whi = "ท้วม";
								}else if ($weight >= 9.8){
									$whi = "สมส่วน";
								}else if ($weight >= 9.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 84){
							if ($weight >= 14.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.9){
									$whi = "ท้วม";
								}else if ($weight >= 10){
									$whi = "สมส่วน";
								}else if ($weight >= 9.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 85){
							if ($weight >= 15){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.1){
									$whi = "ท้วม";
								}else if ($weight >= 10.2){
									$whi = "สมส่วน";
								}else if ($weight >= 9.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 86){
							if ($weight >= 15.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 14){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.4){
									$whi = "ท้วม";
								}else if ($weight >= 10.4){
									$whi = "สมส่วน";
								}else if ($weight >=10){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				
									
				}else if ($height == 87){
							if ($weight >= 15.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.7){
									$whi = "ท้วม";
								}else if ($weight >= 10.6){
									$whi = "สมส่วน";
								}else if ($weight >= 10.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 88){
							if ($weight >= 15.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14){
									$whi = "ท้วม";
								}else if ($weight >= 10.9){
									$whi = "สมส่วน";
								}else if ($weight >= 10.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 89){
							if ($weight >= 16.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.2){
									$whi = "ท้วม";
								}else if ($weight >= 11.1){
									$whi = "สมส่วน";
								}else if ($weight >= 10.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 90){
							if ($weight >= 16.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.5){
									$whi = "ท้วม";
								}else if ($weight >= 11.3){
									$whi = "สมส่วน";
								}else if ($weight >= 10.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 91){
							if ($weight >= 16.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.8){
									$whi = "ท้วม";
								}else if ($weight >= 11.5){
									$whi = "สมส่วน";
								}else if ($weight >= 11.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 92){
							if ($weight >= 17.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15){
									$whi = "ท้วม";
								}else if ($weight >= 11.7){
									$whi = "สมส่วน";
								}else if ($weight >= 11.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 93){
							if ($weight >= 17.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.3){
									$whi = "ท้วม";
								}else if ($weight >= 11.9){
									$whi = "สมส่วน";
								}else if ($weight >= 11.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 94){
							if ($weight >= 17.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.5){
									$whi = "ท้วม";
								}else if ($weight >= 12.1){
									$whi = "สมส่วน";
								}else if ($weight >= 11.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 95){
							if ($weight >= 18){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.8){
									$whi = "ท้วม";
								}else if ($weight >= 12.3){
									$whi = "สมส่วน";
								}else if ($weight >= 11.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 96){
							if ($weight >= 18.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.1){
									$whi = "ท้วม";
								}else if ($weight >= 12.6){
									$whi = "สมส่วน";
								}else if ($weight >= 12.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 97){
							if ($weight >= 18.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.4){
									$whi = "ท้วม";
								}else if ($weight >= 12.8){
									$whi = "สมส่วน";
								}else if ($weight >= 12.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 98){
							if ($weight >= 19){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.7){
									$whi = "ท้วม";
								}else if ($weight >= 13){
									$whi = "สมส่วน";
								}else if ($weight >= 12.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

											}else if ($height == 99){
							if ($weight >= 19.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17){
									$whi = "ท้วม";
								}else if ($weight >= 13.2){
									$whi = "สมส่วน";
								}else if ($weight >= 12.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}


				}else if ($height == 100){
							if ($weight >= 19.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17.3){
									$whi = "ท้วม";
								}else if ($weight >= 13.4){
									$whi = "สมส่วน";
								}else if ($weight >= 12.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 101){
							if ($weight >= 20.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17.6){
									$whi = "ท้วม";
								}else if ($weight >= 13.7){
									$whi = "สมส่วน";
								}else if ($weight >= 13.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 102){
							if ($weight >= 20.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18){
									$whi = "ท้วม";
								}else if ($weight >= 13.9){
									$whi = "สมส่วน";
								}else if ($weight >= 13.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 103){
							if ($weight >= 20.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18.3){
									$whi = "ท้วม";
								}else if ($weight >= 14.2){
									$whi = "สมส่วน";
								}else if ($weight >= 13.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 104){
							if ($weight >= 21.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18.7){
									$whi = "ท้วม";
								}else if ($weight >= 14.4){
									$whi = "สมส่วน";
								}else if ($weight >= 13.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 105){
							if ($weight >= 21.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19){
									$whi = "ท้วม";
								}else if ($weight >= 14.7){
									$whi = "สมส่วน";
								}else if ($weight >= 14.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 106){
							if ($weight >= 22.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 20.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19.4){
									$whi = "ท้วม";
								}else if ($weight >= 15){
									$whi = "สมส่วน";
								}else if ($weight >= 14.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 107){
							if ($weight >= 22.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 20.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19.8){
									$whi = "ท้วม";
								}else if ($weight >= 15.2){
									$whi = "สมส่วน";
								}else if ($weight >= 14.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 108){
							if ($weight >= 23.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 21.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 20.2){
									$whi = "ท้วม";
								}else if ($weight >= 15.5){
									$whi = "สมส่วน";
								}else if ($weight >= 14.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 109){
							if ($weight >= 23.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 21.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 20.6){
									$whi = "ท้วม";
								}else if ($weight >= 15.8){
									$whi = "สมส่วน";
								}else if ($weight >= 15.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					
									
				}else if ($height == 110){
							if ($weight >= 24.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 22){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 21){
									$whi = "ท้วม";
								}else if ($weight >= 16.1){
									$whi = "สมส่วน";
								}else if ($weight >= 15.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

				}else {
					$whi = "";}
							
					
				// น้ำหนักเทียบอายุ			
				if ($weight==0){
					$wei = "";
				}else if ($weight >= 15.4){
					$wei = "น้ำหนักมาก";		
				} else if ($weight >= 14.5){
					$wei = "น้ำหนักค่อนข้างมาก";
				}else if ($weight >= 10.2){
					$wei = "น้ำหนักตามเกณฑ์";
				}else if ($weight >= 9.7){
					$wei = "น้ำหนักค่อนข้างน้อย";
				}else {
					$wei = "น้ำหนักน้อย";}

					// ส่วนสูงเทียบอายุ
					if ($height == 0){
						$hi = "" ;
						}else if ($height >= 93.3){
							$hi = "สูง";
						} else if ($height >= 91.8){
							$hi = "ค่อนข้างสูง";
						}else if ($height >= 82.5){
							$hi = "สูงตามเกณฑ์";
						}else if ($height >= 81){
							$hi = "ค่อนข้างเตี้ย";
						}else {
							$hi = "เตี้ย";}

					// เส้นรอบศรีษะ
					if ($head == 0){
						$had = "" ;
						}else if ($head >= 51){
							$had = "ใหญ่";
						} else if ($head >= 50.3){
							$had = "ค่อนข้างใหญ่";
						}else if ($head>= 46.3){
							$had = "ปกติ";
						}else if ($head >= 45.5){
							$had = "ค่อนข้างเล็ก";
						}else {
							$had = "เล็ก";}		
						}}}
if ($sex == 1){
	if ($u_y == 2){	
		if ($u_m == 6){		
			if ($height == 0){
				$whi = "" ;
				}else if ($height == 45){
													if ($weight >= 3.4){
															$whi = "อ้วน" ;
															}else if ($weight >= 3.1){
																	$whi = "เริ่มอ้วน";
															} else if ($weight >= 2.9){
																	$whi = "ท้วม";
															}else if ($weight >= 2.2){
																	$whi = "สมส่วน";
															}else if ($weight >= 2.0){
																	$whi = "ค่อนข้างผอม";
															}else {
																	$whi = "ผอม";}

				}else if ($height == 46){
							if ($weight >= 3.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.1){
									$whi = "ท้วม";
								}else if ($weight >= 2.3){
									$wei = "สมส่วน";
								}else if ($weight >= 2.2){
									$wei = "ค่อนข้างผอม";
								}else {
									$wei = "ผอม";}

							}else if ($height == 47){
							if ($weight >= 3.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.3){
									$whi = "ท้วม";
								}else if ($weight >= 2.4){
									$whi = "สมส่วน";
								}else if ($weight >= 2.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	

				}else if ($height == 48){
							if ($weight >= 4.0){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.5){
									$whi = "ท้วม";
								}else if ($weight >= 2.6){
									$whi = "สมส่วน";
								}else if ($weight >= 2.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 49){
							if ($weight >= 4.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 3.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 3.7){
									$whi = "ท้วม";
								}else if ($weight >= 2.7){
									$whi = "สมส่วน";
								}else if ($weight >= 2.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}						

				}else if ($height == 50){
									if ($weight >= 4.5){
										$whi = "อ้วน" ;
										}else if ($weight >= 4.1){
											$whi = "เริ่มอ้วน";
										} else if ($weight >= 3.9){
											$whi = "ท้วม";
										}else if ($weight >= 2.9){
											$whi = "สมส่วน";
										}else if ($weight >= 2.8){
											$whi = "ค่อนข้างผอม";
										}else {
											$whi = "ผอม";}	

				}else if ($height == 51){
							if ($weight >= 4.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.2){
									$whi = "ท้วม";
								}else if ($weight >= 3.1){
									$whi = "สมส่วน";
								}else if ($weight >= 3.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 52){
							if ($weight >= 5.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.4){
									$whi = "ท้วม";
								}else if ($weight >= 3.3){
									$whi = "สมส่วน";
								}else if ($weight >= 3.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	

				}else if ($height == 53){
							if ($weight >= 5.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4.7){
									$whi = "ท้วม";
								}else if ($weight >= 3.5){
									$whi = "สมส่วน";
								}else if ($weight >= 3.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 54){
							if ($weight >= 5.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.0){
									$whi = "ท้วม";
								}else if ($weight >= 3.8){
									$whi = "สมส่วน";
								}else if ($weight >= 3.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 55){
							if ($weight >= 6.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.3){
									$whi = "ท้วม";
								}else if ($weight >= 4.0){
									$whi = "สมส่วน";
								}else if ($weight >= 3.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 56){
							if ($weight >= 6.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 5.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.6){
									$whi = "ท้วม";
								}else if ($weight >= 4.3){
									$whi = "สมส่วน";
								}else if ($weight >= 4.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 57){
							if ($weight >= 6.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 5.9){
									$whi = "ท้วม";
								}else if ($weight >= 4.5){
									$whi = "สมส่วน";
								}else if ($weight >= 4.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 58){
							if ($weight >= 7.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.3){
									$whi = "ท้วม";
								}else if ($weight >= 4.8){
									$whi = "สมส่วน";
								}else if ($weight >= 4.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 59){
							if ($weight >= 7.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 6.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.6){
									$whi = "ท้วม";
								}else if ($weight >= 5.0){
									$whi = "สมส่วน";
								}else if ($weight >= 4.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 60){
							if ($weight >= 7.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 6.9){
									$whi = "ท้วม";
								}else if ($weight >= 5.3){
									$whi = "สมส่วน";
								}else if ($weight >= 5.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 61){
							if ($weight >= 8.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.2){
									$whi = "ท้วม";
								}else if ($weight >= 5.5){
									$whi = "สมส่วน";
								}else if ($weight >= 5.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 62){
							if ($weight >= 8.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 7.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.5){
									$whi = "ท้วม";
								}else if ($weight >= 5.8){
									$whi = "สมส่วน";
								}else if ($weight >= 5.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 63){
							if ($weight >= 8.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 7.8){
									$whi = "ท้วม";
								}else if ($weight >= 6.0){
									$whi = "สมส่วน";
								}else if ($weight >= 5.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 64){
							if ($weight >= 9.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.1){
									$whi = "ท้วม";
								}else if ($weight >= 6.2){
									$whi = "สมส่วน";
								}else if ($weight >=6.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 65){
							if ($weight >= 9.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 8.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.3){
									$whi = "ท้วม";
								}else if ($weight >= 6.4){
									$whi = "สมส่วน";
								}else if ($weight >=6.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 66){
							if ($weight >= 9.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.0){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.6){
									$whi = "ท้วม";
								}else if ($weight >= 6.7){
									$whi = "สมส่วน";
								}else if ($weight >= 6.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 67){
							if ($weight >= 10.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 8.9){
									$whi = "ท้วม";
								}else if ($weight >= 6.9){
									$whi = "สมส่วน";
								}else if ($weight >= 6.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 68){
							if ($weight >= 10.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.1){
									$whi = "ท้วม";
								}else if ($weight >= 7.1){
									$whi = "สมส่วน";
								}else if ($weight >= 6.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 69){
							if ($weight >= 10.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 9.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.4){
									$whi = "ท้วม";
								}else if ($weight >= 7.3){
									$whi = "สมส่วน";
								}else if ($weight >= 7.0){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 70){
							if ($weight >= 11){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.7){
									$whi = "ท้วม";
								}else if ($weight >= 7.5){
									$whi = "สมส่วน";
								}else if ($weight >=7.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 71){
							if ($weight >= 11.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 9.9){
									$whi = "ท้วม";
								}else if ($weight >= 7.7){
									$whi = "สมส่วน";
								}else if ($weight >= 7.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

											}else if ($height == 72){
							if ($weight >= 11.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.2){
									$whi = "ท้วม";
								}else if ($weight >= 7.9){
									$whi = "สมส่วน";
								}else if ($weight >= 7.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
				
				}else if ($height == 73){
							if ($weight >= 11.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 10.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.4){
									$whi = "ท้วม";
								}else if ($weight >= 8.0){
									$whi = "สมส่วน";
								}else if ($weight >= 7.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 74){
							if ($weight >= 12.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.7){
									$whi = "ท้วม";
								}else if ($weight >=8.2){
									$whi = "สมส่วน";
								}else if ($weight >= 7.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 75){
							if ($weight >= 12.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 10.9){
									$whi = "ท้วม";
								}else if ($weight >= 8.4){
									$whi = "สมส่วน";
								}else if ($weight >= 8.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 76){
							if ($weight >= 12.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.1){
									$whi = "ท้วม";
								}else if ($weight >= 8.6){
									$whi = "สมส่วน";
								}else if ($weight >= 8.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 77){
							if ($weight >= 12.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 11.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.3){
									$whi = "ท้วม";
								}else if ($weight >= 8.8){
									$whi = "สมส่วน";
								}else if ($weight >= 8.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 78){
							if ($weight >= 13.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.6){
									$whi = "ท้วม";
								}else if ($weight >= 8.9){
									$whi = "สมส่วน";
								}else if ($weight >= 8.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 79){
							if ($weight >= 13.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 11.8){
									$whi = "ท้วม";
								}else if ($weight >= 9.1){
									$whi = "สมส่วน";
								}else if ($weight >= 8.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 80){
							if ($weight >= 13.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12){
									$whi = "ท้วม";
								}else if ($weight >= 9.2){
									$whi = "สมส่วน";
								}else if ($weight >= 8.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 81){
							if ($weight >= 13.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.2){
									$whi = "ท้วม";
								}else if ($weight >= 9.4){
									$whi = "สมส่วน";
								}else if ($weight >= 9.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					
									
											}else if ($height == 82){
							if ($weight >= 14.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 12.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.4){
									$whi = "ท้วม";
								}else if ($weight >= 9.6){
									$whi = "สมส่วน";
								}else if ($weight >= 9.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}

				}else if ($height == 83){
							if ($weight >= 14.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.6){
									$whi = "ท้วม";
								}else if ($weight >= 9.8){
									$whi = "สมส่วน";
								}else if ($weight >= 9.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 84){
							if ($weight >= 14.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 12.9){
									$whi = "ท้วม";
								}else if ($weight >= 10){
									$whi = "สมส่วน";
								}else if ($weight >= 9.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 85){
							if ($weight >= 15){
								$whi = "อ้วน" ;
								}else if ($weight >= 13.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.1){
									$whi = "ท้วม";
								}else if ($weight >= 10.2){
									$whi = "สมส่วน";
								}else if ($weight >= 9.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 86){
							if ($weight >= 15.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 14){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.4){
									$whi = "ท้วม";
								}else if ($weight >= 10.4){
									$whi = "สมส่วน";
								}else if ($weight >=10){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				
									
				}else if ($height == 87){
							if ($weight >= 15.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 13.7){
									$whi = "ท้วม";
								}else if ($weight >= 10.6){
									$whi = "สมส่วน";
								}else if ($weight >= 10.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 88){
							if ($weight >= 15.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.6){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14){
									$whi = "ท้วม";
								}else if ($weight >= 10.9){
									$whi = "สมส่วน";
								}else if ($weight >= 10.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 89){
							if ($weight >= 16.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 14.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.2){
									$whi = "ท้วม";
								}else if ($weight >= 11.1){
									$whi = "สมส่วน";
								}else if ($weight >= 10.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 90){
							if ($weight >= 16.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.5){
									$whi = "ท้วม";
								}else if ($weight >= 11.3){
									$whi = "สมส่วน";
								}else if ($weight >= 10.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 91){
							if ($weight >= 16.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 14.8){
									$whi = "ท้วม";
								}else if ($weight >= 11.5){
									$whi = "สมส่วน";
								}else if ($weight >= 11.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 92){
							if ($weight >= 17.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15){
									$whi = "ท้วม";
								}else if ($weight >= 11.7){
									$whi = "สมส่วน";
								}else if ($weight >= 11.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 93){
							if ($weight >= 17.4){
								$whi = "อ้วน" ;
								}else if ($weight >= 15.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.3){
									$whi = "ท้วม";
								}else if ($weight >= 11.9){
									$whi = "สมส่วน";
								}else if ($weight >= 11.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 94){
							if ($weight >= 17.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.2){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.5){
									$whi = "ท้วม";
								}else if ($weight >= 12.1){
									$whi = "สมส่วน";
								}else if ($weight >= 11.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 95){
							if ($weight >= 18){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 15.8){
									$whi = "ท้วม";
								}else if ($weight >= 12.3){
									$whi = "สมส่วน";
								}else if ($weight >= 11.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 96){
							if ($weight >= 18.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 16.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.1){
									$whi = "ท้วม";
								}else if ($weight >= 12.6){
									$whi = "สมส่วน";
								}else if ($weight >= 12.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 97){
							if ($weight >= 18.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.4){
									$whi = "ท้วม";
								}else if ($weight >= 12.8){
									$whi = "สมส่วน";
								}else if ($weight >= 12.3){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 98){
							if ($weight >= 19){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 16.7){
									$whi = "ท้วม";
								}else if ($weight >= 13){
									$whi = "สมส่วน";
								}else if ($weight >= 12.5){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

											}else if ($height == 99){
							if ($weight >= 19.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 17.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17){
									$whi = "ท้วม";
								}else if ($weight >= 13.2){
									$whi = "สมส่วน";
								}else if ($weight >= 12.7){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}


				}else if ($height == 100){
							if ($weight >= 19.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17.3){
									$whi = "ท้วม";
								}else if ($weight >= 13.4){
									$whi = "สมส่วน";
								}else if ($weight >= 12.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 101){
							if ($weight >= 20.1){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.4){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 17.6){
									$whi = "ท้วม";
								}else if ($weight >= 13.7){
									$whi = "สมส่วน";
								}else if ($weight >= 13.2){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 102){
							if ($weight >= 20.5){
								$whi = "อ้วน" ;
								}else if ($weight >= 18.8){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18){
									$whi = "ท้วม";
								}else if ($weight >= 13.9){
									$whi = "สมส่วน";
								}else if ($weight >= 13.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 103){
							if ($weight >= 20.9){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18.3){
									$whi = "ท้วม";
								}else if ($weight >= 14.2){
									$whi = "สมส่วน";
								}else if ($weight >= 13.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 104){
							if ($weight >= 21.3){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 18.7){
									$whi = "ท้วม";
								}else if ($weight >= 14.4){
									$whi = "สมส่วน";
								}else if ($weight >= 13.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 105){
							if ($weight >= 21.8){
								$whi = "อ้วน" ;
								}else if ($weight >= 19.9){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19){
									$whi = "ท้วม";
								}else if ($weight >= 14.7){
									$whi = "สมส่วน";
								}else if ($weight >= 14.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 106){
							if ($weight >= 22.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 20.3){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19.4){
									$whi = "ท้วม";
								}else if ($weight >= 15){
									$whi = "สมส่วน";
								}else if ($weight >= 14.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}		
									
				}else if ($height == 107){
							if ($weight >= 22.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 20.7){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 19.8){
									$whi = "ท้วม";
								}else if ($weight >= 15.2){
									$whi = "สมส่วน";
								}else if ($weight >= 14.6){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}
									
				}else if ($height == 108){
							if ($weight >= 23.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 21.1){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 20.2){
									$whi = "ท้วม";
								}else if ($weight >= 15.5){
									$whi = "สมส่วน";
								}else if ($weight >= 14.9){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	
									
				}else if ($height == 109){
							if ($weight >= 23.7){
								$whi = "อ้วน" ;
								}else if ($weight >= 21.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 20.6){
									$whi = "ท้วม";
								}else if ($weight >= 15.8){
									$whi = "สมส่วน";
								}else if ($weight >= 15.1){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					
									
				}else if ($height == 110){
							if ($weight >= 24.2){
								$whi = "อ้วน" ;
								}else if ($weight >= 22){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 21){
									$whi = "ท้วม";
								}else if ($weight >= 16.1){
									$whi = "สมส่วน";
								}else if ($weight >= 15.4){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}					

				}else {
					$whi = "";}
							
					
				// น้ำหนักเทียบอายุ			
				if ($weight==0){
					$wei = "";
				}else if ($weight >= 17){
					$wei = "น้ำหนักมาก";		
				} else if ($weight >= 16){
					$wei = "น้ำหนักค่อนข้างมาก";
				}else if ($weight >= 11.2){
					$wei = "น้ำหนักตามเกณฑ์";
				}else if ($weight >= 10.5){
					$wei = "น้ำหนักค่อนข้างน้อย";
				}else {
					$wei = "น้ำหนักน้อย";}

					// ส่วนสูงเทียบอายุ
					if ($height == 0){
						$hi = "" ;
						}else if ($height >= 98.8){
							$hi = "สูง";
						} else if ($height >= 97.1){
							$hi = "ค่อนข้างสูง";
						}else if ($height >= 86.8){
							$hi = "สูงตามเกณฑ์";
						}else if ($height >= 85.1){
							$hi = "ค่อนข้างเตี้ย";
						}else {
							$hi = "เตี้ย";}

					// เส้นรอบศรีษะ
					if ($head == 0){
						$had = "" ;
						}else if ($head >= 51.7){
							$had = "ใหญ่";
						} else if ($head >= 51){
							$had = "ค่อนข้างใหญ่";
						}else if ($head>= 46.8){
							$had = "ปกติ";
						}else if ($head >= 46.1){
							$had = "ค่อนข้างเล็ก";
						}else {
							$had = "เล็ก";}		
						}
					}}




if ($sex == 2){
	if ($u_y == 0){	
		if ($u_m == 2){			
			if ($height == 0){
							$whi = "" ;
							}else if ($height == 45){
                                if ($weight >= 3.4){
                                    $whi = "อ้วน" ;
                                    }else if ($weight >= 3.1){
                                        $whi = "เริ่มอ้วน";
                                    } else if ($weight >= 2.9){
                                        $whi = "ท้วม";
                                    }else if ($weight >= 2.2){
                                        $whi = "สมส่วน";
                                    }else if ($weight >= 2.1){
                                        $whi = "ค่อนข้างผอม";
                                    }else {
                                        $whi = "ผอม";}

							}else if ($height == 46){
										if ($weight >= 3.6){
											$whi = "อ้วน" ;
											}else if ($weight >= 3.3){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 3.1){
												$whi = "ท้วม";
											}else if ($weight >= 2.3){
												$wei = "สมส่วน";
											}else if ($weight >= 2.2){
												$wei = "ค่อนข้างผอม";
											}else {
												$wei = "ผอม";}

				            }else if ($height == 47){
										if ($weight >= 3.8){
											$whi = "อ้วน" ;
											}else if ($weight >= 3.5){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 3.3){
												$whi = "ท้วม";
											}else if ($weight >= 2.5){
												$whi = "สมส่วน";
											}else if ($weight >= 2.4){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	

							}else if ($height == 48){
										if ($weight >= 4.1){
											$whi = "อ้วน" ;
											}else if ($weight >= 3.7){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 3.5){
												$whi = "ท้วม";
											}else if ($weight >= 2.6){
												$whi = "สมส่วน";
											}else if ($weight >= 2.5){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 49){
										if ($weight >= 4.3){
											$whi = "อ้วน" ;
											}else if ($weight >= 3.9){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 3.7){
												$whi = "ท้วม";
											}else if ($weight >= 2.8){
												$whi = "สมส่วน";
											}else if ($weight >= 2.6){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}						

							}else if ($height == 50){
												if ($weight >= 4.6){
													$whi = "อ้วน" ;
													}else if ($weight >= 4.5){
														$whi = "เริ่มอ้วน";
													} else if ($weight >= 4){
														$whi = "ท้วม";
													}else if ($weight >= 2.9){
														$whi = "สมส่วน";
													}else if ($weight >= 2.8){
														$whi = "ค่อนข้างผอม";
													}else {
														$whi = "ผอม";}	

							}else if ($height == 51){
										if ($weight >= 4.9){
											$whi = "อ้วน" ;
											}else if ($weight >= 4.4){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 4.2){
												$whi = "ท้วม";
											}else if ($weight >= 3.1){
												$whi = "สมส่วน";
											}else if ($weight >= 3.0){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}

							}else if ($height == 52){
										if ($weight >= 5.2){
											$whi = "อ้วน" ;
											}else if ($weight >= 4.7){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 4.5){
												$whi = "ท้วม";
											}else if ($weight >= 3.3){
												$whi = "สมส่วน";
											}else if ($weight >= 3.2){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	

							}else if ($height == 53){
										if ($weight >= 5.5){
											$whi = "อ้วน" ;
											}else if ($weight >= 5){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 4.7){
												$whi = "ท้วม";
											}else if ($weight >= 3.5){
												$whi = "สมส่วน";
											}else if ($weight >= 3.4){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 54){
										if ($weight >= 5.8){
											$whi = "อ้วน" ;
											}else if ($weight >= 5.3){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 5.0){
												$whi = "ท้วม";
											}else if ($weight >= 3.8){
												$whi = "สมส่วน";
											}else if ($weight >= 3.6){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}		
												
							}else if ($height == 55){
										if ($weight >= 6.2){
											$whi = "อ้วน" ;
											}else if ($weight >= 5.6){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 5.3){
												$whi = "ท้วม";
											}else if ($weight >= 4){
												$whi = "สมส่วน";
											}else if ($weight >= 3.8){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}		
												
							}else if ($height == 56){
										if ($weight >= 6.5){
											$whi = "อ้วน" ;
											}else if ($weight >= 5.9){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 5.6){
												$whi = "ท้วม";
											}else if ($weight >= 4.2){
												$whi = "สมส่วน";
											}else if ($weight >= 4.0){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 57){
										if ($weight >= 6.9){
											$whi = "อ้วน" ;
											}else if ($weight >= 6.2){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 6){
												$whi = "ท้วม";
											}else if ($weight >= 4.4){
												$whi = "สมส่วน";
											}else if ($weight >= 4.3){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 58){
										if ($weight >= 7.2){
											$whi = "อ้วน" ;
											}else if ($weight >= 6.6){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 6.3){
												$whi = "ท้วม";
											}else if ($weight >= 4.7){
												$whi = "สมส่วน";
											}else if ($weight >= 4.5){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 59){
										if ($weight >= 7.6){
											$whi = "อ้วน" ;
											}else if ($weight >= 6.9){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 6.6){
												$whi = "ท้วม";
											}else if ($weight >= 4.9){
												$whi = "สมส่วน";
											}else if ($weight >= 4.7){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 60){
										if ($weight >= 7.9){
											$whi = "อ้วน" ;
											}else if ($weight >= 7.2){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 6.9){
												$whi = "ท้วม";
											}else if ($weight >= 5.1){
												$whi = "สมส่วน";
											}else if ($weight >= 4.9){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 61){
										if ($weight >= 8.3){
											$whi = "อ้วน" ;
											}else if ($weight >= 7.5){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 7.2){
												$whi = "ท้วม";
											}else if ($weight >= 5.4){
												$whi = "สมส่วน";
											}else if ($weight >= 5.1){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 62){
										if ($weight >= 8.6){
											$whi = "อ้วน" ;
											}else if ($weight >= 7.8){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 7.4){
												$whi = "ท้วม";
											}else if ($weight >= 5.6){
												$whi = "สมส่วน";
											}else if ($weight >= 5.3){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 63){
										if ($weight >= 8.9){
											$whi = "อ้วน" ;
											}else if ($weight >= 8.1){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 7.7){
												$whi = "ท้วม";
											}else if ($weight >= 5.8){
												$whi = "สมส่วน";
											}else if ($weight >= 5.5){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 64){
										if ($weight >= 9.2){
											$whi = "อ้วน" ;
											}else if ($weight >= 8.4){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 8.0){
												$whi = "ท้วม";
											}else if ($weight >= 6.0){
												$whi = "สมส่วน";
											}else if ($weight >= 5.7){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 65){
										if ($weight >= 9.6){
											$whi = "อ้วน" ;
											}else if ($weight >= 8.7){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 8.2){
												$whi = "ท้วม";
											}else if ($weight >= 6.2){
												$whi = "สมส่วน";
											}else if ($weight >= 5.9){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}

							}else if ($height == 66){
										if ($weight >= 9.9){
											$whi = "อ้วน" ;
											}else if ($weight >= 8.9){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 8.5){
												$whi = "ท้วม";
											}else if ($weight >= 6.4){
												$whi = "สมส่วน";
											}else if ($weight >= 6.1){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}

							}else if ($height == 67){
										if ($weight >= 10.1){
											$whi = "อ้วน" ;
											}else if ($weight >= 9.2){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 8.8){
												$whi = "ท้วม";
											}else if ($weight >= 6.6){
												$whi = "สมส่วน";
											}else if ($weight >= 6.3){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 68){
										if ($weight >= 10.4){
											$whi = "อ้วน" ;
											}else if ($weight >= 9.5){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 9){
												$whi = "ท้วม";
											}else if ($weight >= 6.8){
												$whi = "สมส่วน";
											}else if ($weight >= 6.5){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 69){
										if ($weight >= 10.7){
											$whi = "อ้วน" ;
											}else if ($weight >= 9.7){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 9.3){
												$whi = "ท้วม";
											}else if ($weight >= 7.0){
												$whi = "สมส่วน";
											}else if ($weight >= 6.7){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 70){
										if ($weight >= 11){
											$whi = "อ้วน" ;
											}else if ($weight >= 10){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 9.5){
												$whi = "ท้วม";
											}else if ($weight >= 7.1){
												$whi = "สมส่วน";
											}else if ($weight >= 6.9){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 71){
										if ($weight >= 11.2){
											$whi = "อ้วน" ;
											}else if ($weight >= 10.2){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 9.7){
												$whi = "ท้วม";
											}else if ($weight >= 7.3){
												$whi = "สมส่วน";
											}else if ($weight >= 7){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}					

                            }else if ($height == 72){
										if ($weight >= 11.5){
											$whi = "อ้วน" ;
											}else if ($weight >= 10.4){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 9.9){
												$whi = "ท้วม";
											}else if ($weight >= 7.5){
												$whi = "สมส่วน";
											}else if ($weight >= 7.2){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
							
							}else if ($height == 73){
										if ($weight >= 11.8){
											$whi = "อ้วน" ;
											}else if ($weight >= 10.7){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 10.2){
												$whi = "ท้วม";
											}else if ($weight >= 7.7){
												$whi = "สมส่วน";
											}else if ($weight >= 7.4){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 74){
										if ($weight >= 12){
											$whi = "อ้วน" ;
											}else if ($weight >= 10.9){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 10.4){
												$whi = "ท้วม";
											}else if ($weight >= 7.9){
												$whi = "สมส่วน";
											}else if ($weight >= 7.5){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 75){
										if ($weight >= 12.3){
											$whi = "อ้วน" ;
											}else if ($weight >= 11.1){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 10.6){
												$whi = "ท้วม";
											}else if ($weight >= 8){
												$whi = "สมส่วน";
											}else if ($weight >= 7.7){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 76){
										if ($weight >= 12.5){
											$whi = "อ้วน" ;
											}else if ($weight >= 11.3){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 10.8){
												$whi = "ท้วม";
											}else if ($weight >= 8.2){
												$whi = "สมส่วน";
											}else if ($weight >= 7.8){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 77){
										if ($weight >= 12.7){
											$whi = "อ้วน" ;
											}else if ($weight >= 11.6){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 11){
												$whi = "ท้วม";
											}else if ($weight >= 8.3){
												$whi = "สมส่วน";
											}else if ($weight >= 8.0){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 78){
										if ($weight >= 13){
											$whi = "อ้วน" ;
											}else if ($weight >= 11.8){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 11.2){
												$whi = "ท้วม";
											}else if ($weight >= 8.5){
												$whi = "สมส่วน";
											}else if ($weight >= 8.2){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 79){
										if ($weight >= 13.2){
											$whi = "อ้วน" ;
											}else if ($weight >= 12){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 11.5){
												$whi = "ท้วม";
											}else if ($weight >= 8.7){
												$whi = "สมส่วน";
											}else if ($weight >= 8.3){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 80){
										if ($weight >= 13.5){
											$whi = "อ้วน" ;
											}else if ($weight >= 12.2){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 11.7){
												$whi = "ท้วม";
											}else if ($weight >= 8.9){
												$whi = "สมส่วน";
											}else if ($weight >= 8.5){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 81){
										if ($weight >= 13.8){
											$whi = "อ้วน" ;
											}else if ($weight >= 12.5){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 11.9){
												$whi = "ท้วม";
											}else if ($weight >= 9){
												$whi = "สมส่วน";
											}else if ($weight >= 8.7){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}					
												
                            }else if ($height == 82){
										if ($weight >= 14){
											$whi = "อ้วน" ;
											}else if ($weight >= 12.7){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 12.2){
												$whi = "ท้วม";
											}else if ($weight >= 9.2){
												$whi = "สมส่วน";
											}else if ($weight >= 8.8){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}

							}else if ($height == 83){
										if ($weight >= 14.3){
											$whi = "อ้วน" ;
											}else if ($weight >= 13){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 12.4){
												$whi = "ท้วม";
											}else if ($weight >= 9.4){
												$whi = "สมส่วน";
											}else if ($weight >= 9){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 84){
										if ($weight >= 14.6){
											$whi = "อ้วน" ;
											}else if ($weight >= 13.3){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 12.7){
												$whi = "ท้วม";
											}else if ($weight >= 9.6){
												$whi = "สมส่วน";
											}else if ($weight >= 9.2){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 85){
										if ($weight >= 15){
											$whi = "อ้วน" ;
											}else if ($weight >= 13.6){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 13){
												$whi = "ท้วม";
											}else if ($weight >= 9.9){
												$whi = "สมส่วน";
											}else if ($weight >= 9.4){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 86){
										if ($weight >= 15.3){
											$whi = "อ้วน" ;
											}else if ($weight >= 13.9){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 13.3){
												$whi = "ท้วม";
											}else if ($weight >= 10.1){
												$whi = "สมส่วน";
											}else if ($weight >= 9.7){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 86){
										if ($weight >= 15.3){
											$whi = "อ้วน" ;
											}else if ($weight >= 13.9){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 13.3){
												$whi = "ท้วม";
											}else if ($weight >= 10.1){
												$whi = "สมส่วน";
											}else if ($weight >= 9.7){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 87){
										if ($weight >= 15.6){
											$whi = "อ้วน" ;
											}else if ($weight >= 14.2){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 13.5){
												$whi = "ท้วม";
											}else if ($weight >= 10.3){
												$whi = "สมส่วน";
											}else if ($weight >= 9.9){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 88){
										if ($weight >= 16){
											$whi = "อ้วน" ;
											}else if ($weight >= 14.5){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 13.8){
												$whi = "ท้วม";
											}else if ($weight >= 10.5){
												$whi = "สมส่วน";
											}else if ($weight >= 10.1){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 89){
										if ($weight >= 16.3){
											$whi = "อ้วน" ;
											}else if ($weight >= 14.8){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 14.1){
												$whi = "ท้วม";
											}else if ($weight >= 10.7){
												$whi = "สมส่วน";
											}else if ($weight >= 10.3){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 90){
										if ($weight >= 16.6){
											$whi = "อ้วน" ;
											}else if ($weight >= 15.1){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 14.4){
												$whi = "ท้วม";
											}else if ($weight >= 10.9){
												$whi = "สมส่วน";
											}else if ($weight >= 10.5){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 91){
										if ($weight >= 17){
											$whi = "อ้วน" ;
											}else if ($weight >= 15.4){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 14.7){
												$whi = "ท้วม";
											}else if ($weight >= 11.2){
												$whi = "สมส่วน";
											}else if ($weight >= 10.7){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 92){
										if ($weight >= 17.3){
											$whi = "อ้วน" ;
											}else if ($weight >= 15.7){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 15){
												$whi = "ท้วม";
											}else if ($weight >= 11.4){
												$whi = "สมส่วน";
											}else if ($weight >= 10.9){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 93){
										if ($weight >= 17.6){
											$whi = "อ้วน" ;
											}else if ($weight >= 16){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 15.3){
												$whi = "ท้วม";
											}else if ($weight >= 11.6){
												$whi = "สมส่วน";
											}else if ($weight >= 11.1){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 94){
										if ($weight >= 18){
											$whi = "อ้วน" ;
											}else if ($weight >= 16.3){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 15.6){
												$whi = "ท้วม";
											}else if ($weight >= 11.8){
												$whi = "สมส่วน";
											}else if ($weight >= 11.3){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 95){
										if ($weight >= 18.3){
											$whi = "อ้วน" ;
											}else if ($weight >= 16.6){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 15.8){
												$whi = "ท้วม";
											}else if ($weight >= 12){
												$whi = "สมส่วน";
											}else if ($weight >= 11.5){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 96){
										if ($weight >= 18.7){
											$whi = "อ้วน" ;
											}else if ($weight >= 16.9){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 16.1){
												$whi = "ท้วม";
											}else if ($weight >= 12.2){
												$whi = "สมส่วน";
											}else if ($weight >= 11.7){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 97){
										if ($weight >= 19){
											$whi = "อ้วน" ;
											}else if ($weight >= 17.2){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 16.4){
												$whi = "ท้วม";
											}else if ($weight >= 12.5){
												$whi = "สมส่วน";
											}else if ($weight >= 12){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 98){
										if ($weight >= 19.4){
											$whi = "อ้วน" ;
											}else if ($weight >= 17.6){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 16.7){
												$whi = "ท้วม";
											}else if ($weight >= 12.7){
												$whi = "สมส่วน";
											}else if ($weight >= 12.2){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}					

                            }else if ($height == 99){
										if ($weight >= 19.7){
											$whi = "อ้วน" ;
											}else if ($weight >= 17.9){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 17.1){
												$whi = "ท้วม";
											}else if ($weight >= 12.9){
												$whi = "สมส่วน";
											}else if ($weight >= 12.4){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}


							}else if ($height == 100){
										if ($weight >= 20.1){
											$whi = "อ้วน" ;
											}else if ($weight >= 18.2){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 17.4){
												$whi = "ท้วม";
											}else if ($weight >= 13.2){
												$whi = "สมส่วน";
											}else if ($weight >= 12.6){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 101){
										if ($weight >= 20.5){
											$whi = "อ้วน" ;
											}else if ($weight >= 18.6){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 17.7){
												$whi = "ท้วม";
											}else if ($weight >= 13.4){
												$whi = "สมส่วน";
											}else if ($weight >= 12.8){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 102){
										if ($weight >= 20.9){
											$whi = "อ้วน" ;
											}else if ($weight >= 19){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 18.1){
												$whi = "ท้วม";
											}else if ($weight >= 13.7){
												$whi = "สมส่วน";
											}else if ($weight >= 13.1){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 103){
										if ($weight >= 21.4){
											$whi = "อ้วน" ;
											}else if ($weight >= 19.3){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 18.4){
												$whi = "ท้วม";
											}else if ($weight >= 13.9){
												$whi = "สมส่วน";
											}else if ($weight >= 13.3){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 104){
										if ($weight >= 21.8){
											$whi = "อ้วน" ;
											}else if ($weight >= 19.7){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 18.8){
												$whi = "ท้วม";
											}else if ($weight >= 14.2){
												$whi = "สมส่วน";
											}else if ($weight >= 13.6){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 105){
										if ($weight >= 22.3){
											$whi = "อ้วน" ;
											}else if ($weight >= 20.1){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 19.2){
												$whi = "ท้วม";
											}else if ($weight >= 14.5){
												$whi = "สมส่วน";
											}else if ($weight >= 13.8){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 106){
										if ($weight >= 22.7){
											$whi = "อ้วน" ;
											}else if ($weight >= 20.6){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 19.6){
												$whi = "ท้วม";
											}else if ($weight >= 14.7){
												$whi = "สมส่วน";
											}else if ($weight >= 14.1){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}		
												
							}else if ($height == 107){
										if ($weight >= 23.2){
											$whi = "อ้วน" ;
											}else if ($weight >= 21){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 20){
												$whi = "ท้วม";
											}else if ($weight >= 15){
												$whi = "สมส่วน";
											}else if ($weight >= 14.4){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}
												
							}else if ($height == 108){
										if ($weight >= 23.7){
											$whi = "อ้วน" ;
											}else if ($weight >= 21.4){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 20.4){
												$whi = "ท้วม";
											}else if ($weight >= 15.3){
												$whi = "สมส่วน";
											}else if ($weight >= 14.7){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}	
												
							}else if ($height == 109){
										if ($weight >= 24.3){
											$whi = "อ้วน" ;
											}else if ($weight >= 21.9){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 20.8){
												$whi = "ท้วม";
											}else if ($weight >= 15.7){
												$whi = "สมส่วน";
											}else if ($weight >= 15){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}					
												
							}else if ($height == 110){
										if ($weight >= 24.8){
											$whi = "อ้วน" ;
											}else if ($weight >= 22.4){
												$whi = "เริ่มอ้วน";
											} else if ($weight >= 21.3){
												$whi = "ท้วม";
											}else if ($weight >= 16){
												$whi = "สมส่วน";
											}else if ($weight >= 15.3){
												$whi = "ค่อนข้างผอม";
											}else {
												$whi = "ผอม";}					

							}else {
							  $whi = "";}
										
								
							// น้ำหนักเทียบอายุ			
							if ($weight==0){
								$wei = "";
							}else if ($weight >= 6.7){
								$wei = "น้ำหนักมาก";		
							} else if ($weight >= 6.3){
								$wei = "น้ำหนักค่อนข้างมาก";
							}else if ($weight >= 4.2){
								$wei = "น้ำหนักตามเกณฑ์";
							}else if ($weight >= 3.9){
								$wei = "น้ำหนักค่อนข้างน้อย";
							}else {
								$wei = "น้ำหนักน้อย";}

								// ส่วนสูงเทียบอายุ
								if ($height == 0){
									$hi = "" ;
									}else if ($height >= 61.2){
										$hi = "สูง";
									} else if ($height >= 60.2){
										$hi = "ค่อนข้างสูง";
									}else if ($height >= 54){
										$hi = "สูงตามเกณฑ์";
									}else if ($height >= 53){
										$hi = "ค่อนข้างเตี้ย";
									}else {
										$hi = "เตี้ย";}

								// เส้นรอบศรีษะ
								if ($head == 0){
									$had = "" ;
									}else if ($head >= 40.7){
										$had = "ใหญ่";
									} else if ($head >= 40.2){
										$had = "ค่อนข้างใหญ่";
									}else if ($head>= 36.5){
										$had = "ปกติ";
									}else if ($head >= 35.8){
										$had = "ค่อนข้างเล็ก";
									}else {
										$had = "เล็ก";}		

									}
								}

if ($sex == 2){								
	if ($u_y == 0){	
		if ($u_m == 4){	
			if ($height == 0){
			$whi = "" ;
		}else if ($height == 45){
										if ($weight >= 3.4){
												$whi = "อ้วน" ;
												}else if ($weight >= 3.1){
														$whi = "เริ่มอ้วน";
												} else if ($weight >= 2.9){
														$whi = "ท้วม";
												}else if ($weight >= 2.2){
														$whi = "สมส่วน";
												}else if ($weight >= 2.1){
														$whi = "ค่อนข้างผอม";
												}else {
														$whi = "ผอม";}

	}else if ($height == 46){
				if ($weight >= 3.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.1){
						$whi = "ท้วม";
					}else if ($weight >= 2.3){
						$wei = "สมส่วน";
					}else if ($weight >= 2.2){
						$wei = "ค่อนข้างผอม";
					}else {
						$wei = "ผอม";}

				}else if ($height == 47){
				if ($weight >= 3.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.3){
						$whi = "ท้วม";
					}else if ($weight >= 2.5){
						$whi = "สมส่วน";
					}else if ($weight >= 2.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	

	}else if ($height == 48){
				if ($weight >= 4.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.5){
						$whi = "ท้วม";
					}else if ($weight >= 2.6){
						$whi = "สมส่วน";
					}else if ($weight >= 2.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 49){
				if ($weight >= 4.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.7){
						$whi = "ท้วม";
					}else if ($weight >= 2.8){
						$whi = "สมส่วน";
					}else if ($weight >= 2.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}						

	}else if ($height == 50){
						if ($weight >= 4.6){
							$whi = "อ้วน" ;
							}else if ($weight >= 4.5){
								$whi = "เริ่มอ้วน";
							} else if ($weight >= 4){
								$whi = "ท้วม";
							}else if ($weight >= 2.9){
								$whi = "สมส่วน";
							}else if ($weight >= 2.8){
								$whi = "ค่อนข้างผอม";
							}else {
								$whi = "ผอม";}	

	}else if ($height == 51){
				if ($weight >= 4.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 4.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 4.2){
						$whi = "ท้วม";
					}else if ($weight >= 3.1){
						$whi = "สมส่วน";
					}else if ($weight >= 3.0){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 52){
				if ($weight >= 5.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 4.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 4.5){
						$whi = "ท้วม";
					}else if ($weight >= 3.3){
						$whi = "สมส่วน";
					}else if ($weight >= 3.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	

	}else if ($height == 53){
				if ($weight >= 5.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 4.7){
						$whi = "ท้วม";
					}else if ($weight >= 3.5){
						$whi = "สมส่วน";
					}else if ($weight >= 3.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 54){
				if ($weight >= 5.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 5.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 5.0){
						$whi = "ท้วม";
					}else if ($weight >= 3.8){
						$whi = "สมส่วน";
					}else if ($weight >= 3.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}		
						
	}else if ($height == 55){
				if ($weight >= 6.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 5.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 5.3){
						$whi = "ท้วม";
					}else if ($weight >= 4){
						$whi = "สมส่วน";
					}else if ($weight >= 3.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}		
						
	}else if ($height == 56){
				if ($weight >= 6.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 5.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 5.6){
						$whi = "ท้วม";
					}else if ($weight >= 4.2){
						$whi = "สมส่วน";
					}else if ($weight >= 4.0){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 57){
				if ($weight >= 6.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 6.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6){
						$whi = "ท้วม";
					}else if ($weight >= 4.4){
						$whi = "สมส่วน";
					}else if ($weight >= 4.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 58){
				if ($weight >= 7.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 6.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6.3){
						$whi = "ท้วม";
					}else if ($weight >= 4.7){
						$whi = "สมส่วน";
					}else if ($weight >= 4.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 59){
				if ($weight >= 7.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 6.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6.6){
						$whi = "ท้วม";
					}else if ($weight >= 4.9){
						$whi = "สมส่วน";
					}else if ($weight >= 4.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 60){
				if ($weight >= 7.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 7.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6.9){
						$whi = "ท้วม";
					}else if ($weight >= 5.1){
						$whi = "สมส่วน";
					}else if ($weight >= 4.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 61){
				if ($weight >= 8.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 7.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 7.2){
						$whi = "ท้วม";
					}else if ($weight >= 5.4){
						$whi = "สมส่วน";
					}else if ($weight >= 5.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 62){
				if ($weight >= 8.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 7.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 7.4){
						$whi = "ท้วม";
					}else if ($weight >= 5.6){
						$whi = "สมส่วน";
					}else if ($weight >= 5.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 63){
				if ($weight >= 8.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 7.7){
						$whi = "ท้วม";
					}else if ($weight >= 5.8){
						$whi = "สมส่วน";
					}else if ($weight >= 5.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 64){
				if ($weight >= 9.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.0){
						$whi = "ท้วม";
					}else if ($weight >= 6.0){
						$whi = "สมส่วน";
					}else if ($weight >= 5.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 65){
				if ($weight >= 9.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.2){
						$whi = "ท้วม";
					}else if ($weight >= 6.2){
						$whi = "สมส่วน";
					}else if ($weight >= 5.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 66){
				if ($weight >= 9.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.5){
						$whi = "ท้วม";
					}else if ($weight >= 6.4){
						$whi = "สมส่วน";
					}else if ($weight >= 6.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 67){
				if ($weight >= 10.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 9.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.8){
						$whi = "ท้วม";
					}else if ($weight >= 6.6){
						$whi = "สมส่วน";
					}else if ($weight >= 6.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 68){
				if ($weight >= 10.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 9.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9){
						$whi = "ท้วม";
					}else if ($weight >= 6.8){
						$whi = "สมส่วน";
					}else if ($weight >= 6.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 69){
				if ($weight >= 10.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 9.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.3){
						$whi = "ท้วม";
					}else if ($weight >= 7.0){
						$whi = "สมส่วน";
					}else if ($weight >= 6.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 70){
				if ($weight >= 11){
					$whi = "อ้วน" ;
					}else if ($weight >= 10){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.5){
						$whi = "ท้วม";
					}else if ($weight >= 7.1){
						$whi = "สมส่วน";
					}else if ($weight >= 6.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 71){
				if ($weight >= 11.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.7){
						$whi = "ท้วม";
					}else if ($weight >= 7.3){
						$whi = "สมส่วน";
					}else if ($weight >= 7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					

								}else if ($height == 72){
				if ($weight >= 11.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.9){
						$whi = "ท้วม";
					}else if ($weight >= 7.5){
						$whi = "สมส่วน";
					}else if ($weight >= 7.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
	
	}else if ($height == 73){
				if ($weight >= 11.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.2){
						$whi = "ท้วม";
					}else if ($weight >= 7.7){
						$whi = "สมส่วน";
					}else if ($weight >= 7.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 74){
				if ($weight >= 12){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.4){
						$whi = "ท้วม";
					}else if ($weight >= 7.9){
						$whi = "สมส่วน";
					}else if ($weight >= 7.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 75){
				if ($weight >= 12.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.6){
						$whi = "ท้วม";
					}else if ($weight >= 8){
						$whi = "สมส่วน";
					}else if ($weight >= 7.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 76){
				if ($weight >= 12.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.8){
						$whi = "ท้วม";
					}else if ($weight >= 8.2){
						$whi = "สมส่วน";
					}else if ($weight >= 7.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 77){
				if ($weight >= 12.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11){
						$whi = "ท้วม";
					}else if ($weight >= 8.3){
						$whi = "สมส่วน";
					}else if ($weight >= 8.0){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 78){
				if ($weight >= 13){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.2){
						$whi = "ท้วม";
					}else if ($weight >= 8.5){
						$whi = "สมส่วน";
					}else if ($weight >= 8.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 79){
				if ($weight >= 13.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 12){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.5){
						$whi = "ท้วม";
					}else if ($weight >= 8.7){
						$whi = "สมส่วน";
					}else if ($weight >= 8.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 80){
				if ($weight >= 13.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 12.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.7){
						$whi = "ท้วม";
					}else if ($weight >= 8.9){
						$whi = "สมส่วน";
					}else if ($weight >= 8.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 81){
				if ($weight >= 13.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 12.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.9){
						$whi = "ท้วม";
					}else if ($weight >= 9){
						$whi = "สมส่วน";
					}else if ($weight >= 8.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					
						
								}else if ($height == 82){
				if ($weight >= 14){
					$whi = "อ้วน" ;
					}else if ($weight >= 12.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 12.2){
						$whi = "ท้วม";
					}else if ($weight >= 9.2){
						$whi = "สมส่วน";
					}else if ($weight >= 8.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 83){
				if ($weight >= 14.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 13){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 12.4){
						$whi = "ท้วม";
					}else if ($weight >= 9.4){
						$whi = "สมส่วน";
					}else if ($weight >= 9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 84){
				if ($weight >= 14.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 12.7){
						$whi = "ท้วม";
					}else if ($weight >= 9.6){
						$whi = "สมส่วน";
					}else if ($weight >= 9.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 85){
				if ($weight >= 15){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13){
						$whi = "ท้วม";
					}else if ($weight >= 9.9){
						$whi = "สมส่วน";
					}else if ($weight >= 9.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 86){
				if ($weight >= 15.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.3){
						$whi = "ท้วม";
					}else if ($weight >= 10.1){
						$whi = "สมส่วน";
					}else if ($weight >= 9.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 86){
				if ($weight >= 15.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.3){
						$whi = "ท้วม";
					}else if ($weight >= 10.1){
						$whi = "สมส่วน";
					}else if ($weight >= 9.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 87){
				if ($weight >= 15.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 14.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.5){
						$whi = "ท้วม";
					}else if ($weight >= 10.3){
						$whi = "สมส่วน";
					}else if ($weight >= 9.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 88){
				if ($weight >= 16){
					$whi = "อ้วน" ;
					}else if ($weight >= 14.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.8){
						$whi = "ท้วม";
					}else if ($weight >= 10.5){
						$whi = "สมส่วน";
					}else if ($weight >= 10.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 89){
				if ($weight >= 16.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 14.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 14.1){
						$whi = "ท้วม";
					}else if ($weight >= 10.7){
						$whi = "สมส่วน";
					}else if ($weight >= 10.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 90){
				if ($weight >= 16.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 15.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 14.4){
						$whi = "ท้วม";
					}else if ($weight >= 10.9){
						$whi = "สมส่วน";
					}else if ($weight >= 10.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 91){
				if ($weight >= 17){
					$whi = "อ้วน" ;
					}else if ($weight >= 15.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 14.7){
						$whi = "ท้วม";
					}else if ($weight >= 11.2){
						$whi = "สมส่วน";
					}else if ($weight >= 10.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 92){
				if ($weight >= 17.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 15.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15){
						$whi = "ท้วม";
					}else if ($weight >= 11.4){
						$whi = "สมส่วน";
					}else if ($weight >= 10.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 93){
				if ($weight >= 17.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 16){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15.3){
						$whi = "ท้วม";
					}else if ($weight >= 11.6){
						$whi = "สมส่วน";
					}else if ($weight >= 11.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 94){
				if ($weight >= 18){
					$whi = "อ้วน" ;
					}else if ($weight >= 16.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15.6){
						$whi = "ท้วม";
					}else if ($weight >= 11.8){
						$whi = "สมส่วน";
					}else if ($weight >= 11.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 95){
				if ($weight >= 18.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 16.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15.8){
						$whi = "ท้วม";
					}else if ($weight >= 12){
						$whi = "สมส่วน";
					}else if ($weight >= 11.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 96){
				if ($weight >= 18.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 16.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 16.1){
						$whi = "ท้วม";
					}else if ($weight >= 12.2){
						$whi = "สมส่วน";
					}else if ($weight >= 11.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 97){
				if ($weight >= 19){
					$whi = "อ้วน" ;
					}else if ($weight >= 17.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 16.4){
						$whi = "ท้วม";
					}else if ($weight >= 12.5){
						$whi = "สมส่วน";
					}else if ($weight >= 12){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 98){
				if ($weight >= 19.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 17.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 16.7){
						$whi = "ท้วม";
					}else if ($weight >= 12.7){
						$whi = "สมส่วน";
					}else if ($weight >= 12.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					

								}else if ($height == 99){
				if ($weight >= 19.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 17.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 17.1){
						$whi = "ท้วม";
					}else if ($weight >= 12.9){
						$whi = "สมส่วน";
					}else if ($weight >= 12.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}


	}else if ($height == 100){
				if ($weight >= 20.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 18.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 17.4){
						$whi = "ท้วม";
					}else if ($weight >= 13.2){
						$whi = "สมส่วน";
					}else if ($weight >= 12.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 101){
				if ($weight >= 20.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 18.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 17.7){
						$whi = "ท้วม";
					}else if ($weight >= 13.4){
						$whi = "สมส่วน";
					}else if ($weight >= 12.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 102){
				if ($weight >= 20.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 19){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 18.1){
						$whi = "ท้วม";
					}else if ($weight >= 13.7){
						$whi = "สมส่วน";
					}else if ($weight >= 13.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 103){
				if ($weight >= 21.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 19.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 18.4){
						$whi = "ท้วม";
					}else if ($weight >= 13.9){
						$whi = "สมส่วน";
					}else if ($weight >= 13.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 104){
				if ($weight >= 21.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 19.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 18.8){
						$whi = "ท้วม";
					}else if ($weight >= 14.2){
						$whi = "สมส่วน";
					}else if ($weight >= 13.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 105){
				if ($weight >= 22.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 20.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 19.2){
						$whi = "ท้วม";
					}else if ($weight >= 14.5){
						$whi = "สมส่วน";
					}else if ($weight >= 13.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 106){
				if ($weight >= 22.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 20.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 19.6){
						$whi = "ท้วม";
					}else if ($weight >= 14.7){
						$whi = "สมส่วน";
					}else if ($weight >= 14.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}		
						
	}else if ($height == 107){
				if ($weight >= 23.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 21){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 20){
						$whi = "ท้วม";
					}else if ($weight >= 15){
						$whi = "สมส่วน";
					}else if ($weight >= 14.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 108){
				if ($weight >= 23.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 21.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 20.4){
						$whi = "ท้วม";
					}else if ($weight >= 15.3){
						$whi = "สมส่วน";
					}else if ($weight >= 14.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 109){
				if ($weight >= 24.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 21.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 20.8){
						$whi = "ท้วม";
					}else if ($weight >= 15.7){
						$whi = "สมส่วน";
					}else if ($weight >= 15){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					
						
	}else if ($height == 110){
				if ($weight >= 24.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 22.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 21.3){
						$whi = "ท้วม";
					}else if ($weight >= 16){
						$whi = "สมส่วน";
					}else if ($weight >= 15.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					

	}else {
		$whi = "";}
				
		
	// น้ำหนักเทียบอายุ			
	if ($weight==0){
		$wei = "";
	}else if ($weight >= 8.3){
		$wei = "น้ำหนักมาก";		
	} else if ($weight >= 7.8){
		$wei = "น้ำหนักค่อนข้างมาก";
	}else if ($weight >= 5.3){
		$wei = "น้ำหนักตามเกณฑ์";
	}else if ($weight >= 5.0){
		$wei = "น้ำหนักค่อนข้างน้อย";
	}else {
		$wei = "น้ำหนักน้อย";}

		// ส่วนสูงเทียบอายุ
		if ($height == 0){
			$hi = "" ;
			}else if ($height >= 66.5){
				$hi = "สูง";
			} else if ($height >= 65.5){
				$hi = "ค่อนข้างสูง";
			}else if ($height >= 58.9){
				$hi = "สูงตามเกณฑ์";
			}else if ($height >= 57.8){
				$hi = "ค่อนข้างเตี้ย";
			}else {
				$hi = "เตี้ย";}

		// เส้นรอบศรีษะ
		if ($head == 0){
			$had = "" ;
			}else if ($head >= 43.1){
				$had = "ใหญ่";
			} else if ($head >= 42.5){
				$had = "ค่อนข้างใหญ่";
			}else if ($head>= 40.2){
				$had = "ปกติ";
			}else if ($head >= 39.6){
				$had = "ค่อนข้างเล็ก";
			}else {
				$had = "เล็ก";}		
}}}
if ($sex == 2){
   if ($u_y == 0){	
		 	if ($u_m == 6){	
				 if ($height == 0){
		$whi = "" ;
		}else if ($height == 45){
											if ($weight >= 3.4){
													$whi = "อ้วน" ;
													}else if ($weight >= 3.1){
															$whi = "เริ่มอ้วน";
													} else if ($weight >= 2.9){
															$whi = "ท้วม";
													}else if ($weight >= 2.2){
															$whi = "สมส่วน";
													}else if ($weight >= 2.1){
															$whi = "ค่อนข้างผอม";
													}else {
															$whi = "ผอม";}

		}else if ($height == 46){
					if ($weight >= 3.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.1){
							$whi = "ท้วม";
						}else if ($weight >= 2.3){
							$wei = "สมส่วน";
						}else if ($weight >= 2.2){
							$wei = "ค่อนข้างผอม";
						}else {
							$wei = "ผอม";}

					}else if ($height == 47){
					if ($weight >= 3.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.3){
							$whi = "ท้วม";
						}else if ($weight >= 2.5){
							$whi = "สมส่วน";
						}else if ($weight >= 2.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	

		}else if ($height == 48){
					if ($weight >= 4.1){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.5){
							$whi = "ท้วม";
						}else if ($weight >= 2.6){
							$whi = "สมส่วน";
						}else if ($weight >= 2.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 49){
					if ($weight >= 4.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.7){
							$whi = "ท้วม";
						}else if ($weight >= 2.8){
							$whi = "สมส่วน";
						}else if ($weight >= 2.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}						

		}else if ($height == 50){
							if ($weight >= 4.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4){
									$whi = "ท้วม";
								}else if ($weight >= 2.9){
									$whi = "สมส่วน";
								}else if ($weight >= 2.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	

		}else if ($height == 51){
					if ($weight >= 4.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 4.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 4.2){
							$whi = "ท้วม";
						}else if ($weight >= 3.1){
							$whi = "สมส่วน";
						}else if ($weight >= 3.0){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 52){
					if ($weight >= 5.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 4.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 4.5){
							$whi = "ท้วม";
						}else if ($weight >= 3.3){
							$whi = "สมส่วน";
						}else if ($weight >= 3.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	

		}else if ($height == 53){
					if ($weight >= 5.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 4.7){
							$whi = "ท้วม";
						}else if ($weight >= 3.5){
							$whi = "สมส่วน";
						}else if ($weight >= 3.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 54){
					if ($weight >= 5.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 5.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 5.0){
							$whi = "ท้วม";
						}else if ($weight >= 3.8){
							$whi = "สมส่วน";
						}else if ($weight >= 3.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}		
							
		}else if ($height == 55){
					if ($weight >= 6.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 5.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 5.3){
							$whi = "ท้วม";
						}else if ($weight >= 4){
							$whi = "สมส่วน";
						}else if ($weight >= 3.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}		
							
		}else if ($height == 56){
					if ($weight >= 6.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 5.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 5.6){
							$whi = "ท้วม";
						}else if ($weight >= 4.2){
							$whi = "สมส่วน";
						}else if ($weight >= 4.0){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 57){
					if ($weight >= 6.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 6.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6){
							$whi = "ท้วม";
						}else if ($weight >= 4.4){
							$whi = "สมส่วน";
						}else if ($weight >= 4.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 58){
					if ($weight >= 7.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 6.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6.3){
							$whi = "ท้วม";
						}else if ($weight >= 4.7){
							$whi = "สมส่วน";
						}else if ($weight >= 4.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 59){
					if ($weight >= 7.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 6.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6.6){
							$whi = "ท้วม";
						}else if ($weight >= 4.9){
							$whi = "สมส่วน";
						}else if ($weight >= 4.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 60){
					if ($weight >= 7.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 7.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6.9){
							$whi = "ท้วม";
						}else if ($weight >= 5.1){
							$whi = "สมส่วน";
						}else if ($weight >= 4.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 61){
					if ($weight >= 8.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 7.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 7.2){
							$whi = "ท้วม";
						}else if ($weight >= 5.4){
							$whi = "สมส่วน";
						}else if ($weight >= 5.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 62){
					if ($weight >= 8.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 7.8){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 7.4){
							$whi = "ท้วม";
						}else if ($weight >= 5.6){
							$whi = "สมส่วน";
						}else if ($weight >= 5.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 63){
					if ($weight >= 8.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 7.7){
							$whi = "ท้วม";
						}else if ($weight >= 5.8){
							$whi = "สมส่วน";
						}else if ($weight >= 5.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 64){
					if ($weight >= 9.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.0){
							$whi = "ท้วม";
						}else if ($weight >= 6.0){
							$whi = "สมส่วน";
						}else if ($weight >= 5.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 65){
					if ($weight >= 9.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.2){
							$whi = "ท้วม";
						}else if ($weight >= 6.2){
							$whi = "สมส่วน";
						}else if ($weight >= 5.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 66){
					if ($weight >= 9.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.5){
							$whi = "ท้วม";
						}else if ($weight >= 6.4){
							$whi = "สมส่วน";
						}else if ($weight >= 6.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 67){
					if ($weight >= 10.1){
						$whi = "อ้วน" ;
						}else if ($weight >= 9.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.8){
							$whi = "ท้วม";
						}else if ($weight >= 6.6){
							$whi = "สมส่วน";
						}else if ($weight >= 6.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 68){
					if ($weight >= 10.4){
						$whi = "อ้วน" ;
						}else if ($weight >= 9.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9){
							$whi = "ท้วม";
						}else if ($weight >= 6.8){
							$whi = "สมส่วน";
						}else if ($weight >= 6.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 69){
					if ($weight >= 10.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 9.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.3){
							$whi = "ท้วม";
						}else if ($weight >= 7.0){
							$whi = "สมส่วน";
						}else if ($weight >= 6.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 70){
					if ($weight >= 11){
						$whi = "อ้วน" ;
						}else if ($weight >= 10){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.5){
							$whi = "ท้วม";
						}else if ($weight >= 7.1){
							$whi = "สมส่วน";
						}else if ($weight >= 6.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 71){
					if ($weight >= 11.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.7){
							$whi = "ท้วม";
						}else if ($weight >= 7.3){
							$whi = "สมส่วน";
						}else if ($weight >= 7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					

									}else if ($height == 72){
					if ($weight >= 11.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.9){
							$whi = "ท้วม";
						}else if ($weight >= 7.5){
							$whi = "สมส่วน";
						}else if ($weight >= 7.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
		
		}else if ($height == 73){
					if ($weight >= 11.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.2){
							$whi = "ท้วม";
						}else if ($weight >= 7.7){
							$whi = "สมส่วน";
						}else if ($weight >= 7.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 74){
					if ($weight >= 12){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.4){
							$whi = "ท้วม";
						}else if ($weight >= 7.9){
							$whi = "สมส่วน";
						}else if ($weight >= 7.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 75){
					if ($weight >= 12.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.6){
							$whi = "ท้วม";
						}else if ($weight >= 8){
							$whi = "สมส่วน";
						}else if ($weight >= 7.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 76){
					if ($weight >= 12.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.8){
							$whi = "ท้วม";
						}else if ($weight >= 8.2){
							$whi = "สมส่วน";
						}else if ($weight >= 7.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 77){
					if ($weight >= 12.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11){
							$whi = "ท้วม";
						}else if ($weight >= 8.3){
							$whi = "สมส่วน";
						}else if ($weight >= 8.0){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 78){
					if ($weight >= 13){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.8){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.2){
							$whi = "ท้วม";
						}else if ($weight >= 8.5){
							$whi = "สมส่วน";
						}else if ($weight >= 8.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 79){
					if ($weight >= 13.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 12){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.5){
							$whi = "ท้วม";
						}else if ($weight >= 8.7){
							$whi = "สมส่วน";
						}else if ($weight >= 8.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 80){
					if ($weight >= 13.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 12.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.7){
							$whi = "ท้วม";
						}else if ($weight >= 8.9){
							$whi = "สมส่วน";
						}else if ($weight >= 8.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 81){
					if ($weight >= 13.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 12.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.9){
							$whi = "ท้วม";
						}else if ($weight >= 9){
							$whi = "สมส่วน";
						}else if ($weight >= 8.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					
							
									}else if ($height == 82){
					if ($weight >= 14){
						$whi = "อ้วน" ;
						}else if ($weight >= 12.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 12.2){
							$whi = "ท้วม";
						}else if ($weight >= 9.2){
							$whi = "สมส่วน";
						}else if ($weight >= 8.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 83){
					if ($weight >= 14.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 13){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 12.4){
							$whi = "ท้วม";
						}else if ($weight >= 9.4){
							$whi = "สมส่วน";
						}else if ($weight >= 9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 84){
					if ($weight >= 14.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 12.7){
							$whi = "ท้วม";
						}else if ($weight >= 9.6){
							$whi = "สมส่วน";
						}else if ($weight >= 9.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 85){
					if ($weight >= 15){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13){
							$whi = "ท้วม";
						}else if ($weight >= 9.9){
							$whi = "สมส่วน";
						}else if ($weight >= 9.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 86){
					if ($weight >= 15.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.3){
							$whi = "ท้วม";
						}else if ($weight >= 10.1){
							$whi = "สมส่วน";
						}else if ($weight >= 9.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 86){
					if ($weight >= 15.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.3){
							$whi = "ท้วม";
						}else if ($weight >= 10.1){
							$whi = "สมส่วน";
						}else if ($weight >= 9.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 87){
					if ($weight >= 15.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 14.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.5){
							$whi = "ท้วม";
						}else if ($weight >= 10.3){
							$whi = "สมส่วน";
						}else if ($weight >= 9.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 88){
					if ($weight >= 16){
						$whi = "อ้วน" ;
						}else if ($weight >= 14.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.8){
							$whi = "ท้วม";
						}else if ($weight >= 10.5){
							$whi = "สมส่วน";
						}else if ($weight >= 10.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 89){
					if ($weight >= 16.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 14.8){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 14.1){
							$whi = "ท้วม";
						}else if ($weight >= 10.7){
							$whi = "สมส่วน";
						}else if ($weight >= 10.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 90){
					if ($weight >= 16.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 15.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 14.4){
							$whi = "ท้วม";
						}else if ($weight >= 10.9){
							$whi = "สมส่วน";
						}else if ($weight >= 10.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 91){
					if ($weight >= 17){
						$whi = "อ้วน" ;
						}else if ($weight >= 15.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 14.7){
							$whi = "ท้วม";
						}else if ($weight >= 11.2){
							$whi = "สมส่วน";
						}else if ($weight >= 10.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 92){
					if ($weight >= 17.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 15.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15){
							$whi = "ท้วม";
						}else if ($weight >= 11.4){
							$whi = "สมส่วน";
						}else if ($weight >= 10.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 93){
					if ($weight >= 17.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 16){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15.3){
							$whi = "ท้วม";
						}else if ($weight >= 11.6){
							$whi = "สมส่วน";
						}else if ($weight >= 11.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 94){
					if ($weight >= 18){
						$whi = "อ้วน" ;
						}else if ($weight >= 16.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15.6){
							$whi = "ท้วม";
						}else if ($weight >= 11.8){
							$whi = "สมส่วน";
						}else if ($weight >= 11.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 95){
					if ($weight >= 18.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 16.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15.8){
							$whi = "ท้วม";
						}else if ($weight >= 12){
							$whi = "สมส่วน";
						}else if ($weight >= 11.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 96){
					if ($weight >= 18.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 16.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 16.1){
							$whi = "ท้วม";
						}else if ($weight >= 12.2){
							$whi = "สมส่วน";
						}else if ($weight >= 11.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 97){
					if ($weight >= 19){
						$whi = "อ้วน" ;
						}else if ($weight >= 17.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 16.4){
							$whi = "ท้วม";
						}else if ($weight >= 12.5){
							$whi = "สมส่วน";
						}else if ($weight >= 12){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 98){
					if ($weight >= 19.4){
						$whi = "อ้วน" ;
						}else if ($weight >= 17.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 16.7){
							$whi = "ท้วม";
						}else if ($weight >= 12.7){
							$whi = "สมส่วน";
						}else if ($weight >= 12.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					

									}else if ($height == 99){
					if ($weight >= 19.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 17.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 17.1){
							$whi = "ท้วม";
						}else if ($weight >= 12.9){
							$whi = "สมส่วน";
						}else if ($weight >= 12.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}


		}else if ($height == 100){
					if ($weight >= 20.1){
						$whi = "อ้วน" ;
						}else if ($weight >= 18.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 17.4){
							$whi = "ท้วม";
						}else if ($weight >= 13.2){
							$whi = "สมส่วน";
						}else if ($weight >= 12.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 101){
					if ($weight >= 20.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 18.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 17.7){
							$whi = "ท้วม";
						}else if ($weight >= 13.4){
							$whi = "สมส่วน";
						}else if ($weight >= 12.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 102){
					if ($weight >= 20.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 19){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 18.1){
							$whi = "ท้วม";
						}else if ($weight >= 13.7){
							$whi = "สมส่วน";
						}else if ($weight >= 13.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 103){
					if ($weight >= 21.4){
						$whi = "อ้วน" ;
						}else if ($weight >= 19.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 18.4){
							$whi = "ท้วม";
						}else if ($weight >= 13.9){
							$whi = "สมส่วน";
						}else if ($weight >= 13.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 104){
					if ($weight >= 21.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 19.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 18.8){
							$whi = "ท้วม";
						}else if ($weight >= 14.2){
							$whi = "สมส่วน";
						}else if ($weight >= 13.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 105){
					if ($weight >= 22.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 20.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 19.2){
							$whi = "ท้วม";
						}else if ($weight >= 14.5){
							$whi = "สมส่วน";
						}else if ($weight >= 13.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 106){
					if ($weight >= 22.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 20.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 19.6){
							$whi = "ท้วม";
						}else if ($weight >= 14.7){
							$whi = "สมส่วน";
						}else if ($weight >= 14.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}		
							
		}else if ($height == 107){
					if ($weight >= 23.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 21){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 20){
							$whi = "ท้วม";
						}else if ($weight >= 15){
							$whi = "สมส่วน";
						}else if ($weight >= 14.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 108){
					if ($weight >= 23.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 21.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 20.4){
							$whi = "ท้วม";
						}else if ($weight >= 15.3){
							$whi = "สมส่วน";
						}else if ($weight >= 14.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 109){
					if ($weight >= 24.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 21.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 20.8){
							$whi = "ท้วม";
						}else if ($weight >= 15.7){
							$whi = "สมส่วน";
						}else if ($weight >= 15){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					
							
		}else if ($height == 110){
					if ($weight >= 24.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 22.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 21.3){
							$whi = "ท้วม";
						}else if ($weight >= 16){
							$whi = "สมส่วน";
						}else if ($weight >= 15.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					

		}else {
			$whi = "";}
					
			
		// น้ำหนักเทียบอายุ			
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 9.4){
			$wei = "น้ำหนักมาก";		
		} else if ($weight >= 8.9){
			$wei = "น้ำหนักค่อนข้างมาก";
		}else if ($weight >= 6.1){
			$wei = "น้ำหนักตามเกณฑ์";
		}else if ($weight >= 5.7){
			$wei = "น้ำหนักค่อนข้างน้อย";
		}else {
			$wei = "น้ำหนักน้อย";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 70.4){
					$hi = "สูง";
				} else if ($height >= 69.2){
					$hi = "ค่อนข้างสูง";
				}else if ($height >= 62.3){
					$hi = "สูงตามเกณฑ์";
				}else if ($height >= 61.2){
					$hi = "ค่อนข้างเตี้ย";
				}else {
					$hi = "เตี้ย";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 44.8){
					$had = "ใหญ่";
				} else if ($head >= 44.2){
					$had = "ค่อนข้างใหญ่";
				}else if ($head>= 40.2){
					$had = "ปกติ";
				}else if ($head >= 39.6){
					$had = "ค่อนข้างเล็ก";
				}else {
					$had = "เล็ก";}	
}}}
if ($sex == 2){
   if ($u_y == 0){	
		 if ($u_m == 9)  {
			 if ($height == 0){
		$whi = "" ;
		}else if ($height == 45){
											if ($weight >= 3.4){
													$whi = "อ้วน" ;
													}else if ($weight >= 3.1){
															$whi = "เริ่มอ้วน";
													} else if ($weight >= 2.9){
															$whi = "ท้วม";
													}else if ($weight >= 2.2){
															$whi = "สมส่วน";
													}else if ($weight >= 2.1){
															$whi = "ค่อนข้างผอม";
													}else {
															$whi = "ผอม";}

		}else if ($height == 46){
					if ($weight >= 3.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.1){
							$whi = "ท้วม";
						}else if ($weight >= 2.3){
							$wei = "สมส่วน";
						}else if ($weight >= 2.2){
							$wei = "ค่อนข้างผอม";
						}else {
							$wei = "ผอม";}

					}else if ($height == 47){
					if ($weight >= 3.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.3){
							$whi = "ท้วม";
						}else if ($weight >= 2.5){
							$whi = "สมส่วน";
						}else if ($weight >= 2.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	

		}else if ($height == 48){
					if ($weight >= 4.1){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.5){
							$whi = "ท้วม";
						}else if ($weight >= 2.6){
							$whi = "สมส่วน";
						}else if ($weight >= 2.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 49){
					if ($weight >= 4.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.7){
							$whi = "ท้วม";
						}else if ($weight >= 2.8){
							$whi = "สมส่วน";
						}else if ($weight >= 2.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}						

		}else if ($height == 50){
							if ($weight >= 4.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4){
									$whi = "ท้วม";
								}else if ($weight >= 2.9){
									$whi = "สมส่วน";
								}else if ($weight >= 2.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	

		}else if ($height == 51){
					if ($weight >= 4.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 4.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 4.2){
							$whi = "ท้วม";
						}else if ($weight >= 3.1){
							$whi = "สมส่วน";
						}else if ($weight >= 3.0){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 52){
					if ($weight >= 5.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 4.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 4.5){
							$whi = "ท้วม";
						}else if ($weight >= 3.3){
							$whi = "สมส่วน";
						}else if ($weight >= 3.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	

		}else if ($height == 53){
					if ($weight >= 5.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 4.7){
							$whi = "ท้วม";
						}else if ($weight >= 3.5){
							$whi = "สมส่วน";
						}else if ($weight >= 3.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 54){
					if ($weight >= 5.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 5.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 5.0){
							$whi = "ท้วม";
						}else if ($weight >= 3.8){
							$whi = "สมส่วน";
						}else if ($weight >= 3.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}		
							
		}else if ($height == 55){
					if ($weight >= 6.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 5.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 5.3){
							$whi = "ท้วม";
						}else if ($weight >= 4){
							$whi = "สมส่วน";
						}else if ($weight >= 3.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}		
							
		}else if ($height == 56){
					if ($weight >= 6.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 5.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 5.6){
							$whi = "ท้วม";
						}else if ($weight >= 4.2){
							$whi = "สมส่วน";
						}else if ($weight >= 4.0){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 57){
					if ($weight >= 6.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 6.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6){
							$whi = "ท้วม";
						}else if ($weight >= 4.4){
							$whi = "สมส่วน";
						}else if ($weight >= 4.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 58){
					if ($weight >= 7.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 6.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6.3){
							$whi = "ท้วม";
						}else if ($weight >= 4.7){
							$whi = "สมส่วน";
						}else if ($weight >= 4.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 59){
					if ($weight >= 7.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 6.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6.6){
							$whi = "ท้วม";
						}else if ($weight >= 4.9){
							$whi = "สมส่วน";
						}else if ($weight >= 4.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 60){
					if ($weight >= 7.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 7.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6.9){
							$whi = "ท้วม";
						}else if ($weight >= 5.1){
							$whi = "สมส่วน";
						}else if ($weight >= 4.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 61){
					if ($weight >= 8.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 7.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 7.2){
							$whi = "ท้วม";
						}else if ($weight >= 5.4){
							$whi = "สมส่วน";
						}else if ($weight >= 5.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 62){
					if ($weight >= 8.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 7.8){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 7.4){
							$whi = "ท้วม";
						}else if ($weight >= 5.6){
							$whi = "สมส่วน";
						}else if ($weight >= 5.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 63){
					if ($weight >= 8.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 7.7){
							$whi = "ท้วม";
						}else if ($weight >= 5.8){
							$whi = "สมส่วน";
						}else if ($weight >= 5.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 64){
					if ($weight >= 9.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.0){
							$whi = "ท้วม";
						}else if ($weight >= 6.0){
							$whi = "สมส่วน";
						}else if ($weight >= 5.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 65){
					if ($weight >= 9.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.2){
							$whi = "ท้วม";
						}else if ($weight >= 6.2){
							$whi = "สมส่วน";
						}else if ($weight >= 5.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 66){
					if ($weight >= 9.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.5){
							$whi = "ท้วม";
						}else if ($weight >= 6.4){
							$whi = "สมส่วน";
						}else if ($weight >= 6.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 67){
					if ($weight >= 10.1){
						$whi = "อ้วน" ;
						}else if ($weight >= 9.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.8){
							$whi = "ท้วม";
						}else if ($weight >= 6.6){
							$whi = "สมส่วน";
						}else if ($weight >= 6.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 68){
					if ($weight >= 10.4){
						$whi = "อ้วน" ;
						}else if ($weight >= 9.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9){
							$whi = "ท้วม";
						}else if ($weight >= 6.8){
							$whi = "สมส่วน";
						}else if ($weight >= 6.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 69){
					if ($weight >= 10.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 9.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.3){
							$whi = "ท้วม";
						}else if ($weight >= 7.0){
							$whi = "สมส่วน";
						}else if ($weight >= 6.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 70){
					if ($weight >= 11){
						$whi = "อ้วน" ;
						}else if ($weight >= 10){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.5){
							$whi = "ท้วม";
						}else if ($weight >= 7.1){
							$whi = "สมส่วน";
						}else if ($weight >= 6.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 71){
					if ($weight >= 11.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.7){
							$whi = "ท้วม";
						}else if ($weight >= 7.3){
							$whi = "สมส่วน";
						}else if ($weight >= 7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					

									}else if ($height == 72){
					if ($weight >= 11.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.9){
							$whi = "ท้วม";
						}else if ($weight >= 7.5){
							$whi = "สมส่วน";
						}else if ($weight >= 7.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
		
		}else if ($height == 73){
					if ($weight >= 11.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.2){
							$whi = "ท้วม";
						}else if ($weight >= 7.7){
							$whi = "สมส่วน";
						}else if ($weight >= 7.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 74){
					if ($weight >= 12){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.4){
							$whi = "ท้วม";
						}else if ($weight >= 7.9){
							$whi = "สมส่วน";
						}else if ($weight >= 7.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 75){
					if ($weight >= 12.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.6){
							$whi = "ท้วม";
						}else if ($weight >= 8){
							$whi = "สมส่วน";
						}else if ($weight >= 7.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 76){
					if ($weight >= 12.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.8){
							$whi = "ท้วม";
						}else if ($weight >= 8.2){
							$whi = "สมส่วน";
						}else if ($weight >= 7.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 77){
					if ($weight >= 12.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11){
							$whi = "ท้วม";
						}else if ($weight >= 8.3){
							$whi = "สมส่วน";
						}else if ($weight >= 8.0){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 78){
					if ($weight >= 13){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.8){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.2){
							$whi = "ท้วม";
						}else if ($weight >= 8.5){
							$whi = "สมส่วน";
						}else if ($weight >= 8.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 79){
					if ($weight >= 13.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 12){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.5){
							$whi = "ท้วม";
						}else if ($weight >= 8.7){
							$whi = "สมส่วน";
						}else if ($weight >= 8.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 80){
					if ($weight >= 13.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 12.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.7){
							$whi = "ท้วม";
						}else if ($weight >= 8.9){
							$whi = "สมส่วน";
						}else if ($weight >= 8.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 81){
					if ($weight >= 13.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 12.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.9){
							$whi = "ท้วม";
						}else if ($weight >= 9){
							$whi = "สมส่วน";
						}else if ($weight >= 8.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					
							
									}else if ($height == 82){
					if ($weight >= 14){
						$whi = "อ้วน" ;
						}else if ($weight >= 12.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 12.2){
							$whi = "ท้วม";
						}else if ($weight >= 9.2){
							$whi = "สมส่วน";
						}else if ($weight >= 8.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 83){
					if ($weight >= 14.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 13){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 12.4){
							$whi = "ท้วม";
						}else if ($weight >= 9.4){
							$whi = "สมส่วน";
						}else if ($weight >= 9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 84){
					if ($weight >= 14.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 12.7){
							$whi = "ท้วม";
						}else if ($weight >= 9.6){
							$whi = "สมส่วน";
						}else if ($weight >= 9.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 85){
					if ($weight >= 15){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13){
							$whi = "ท้วม";
						}else if ($weight >= 9.9){
							$whi = "สมส่วน";
						}else if ($weight >= 9.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 86){
					if ($weight >= 15.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.3){
							$whi = "ท้วม";
						}else if ($weight >= 10.1){
							$whi = "สมส่วน";
						}else if ($weight >= 9.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 86){
					if ($weight >= 15.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.3){
							$whi = "ท้วม";
						}else if ($weight >= 10.1){
							$whi = "สมส่วน";
						}else if ($weight >= 9.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 87){
					if ($weight >= 15.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 14.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.5){
							$whi = "ท้วม";
						}else if ($weight >= 10.3){
							$whi = "สมส่วน";
						}else if ($weight >= 9.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 88){
					if ($weight >= 16){
						$whi = "อ้วน" ;
						}else if ($weight >= 14.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.8){
							$whi = "ท้วม";
						}else if ($weight >= 10.5){
							$whi = "สมส่วน";
						}else if ($weight >= 10.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 89){
					if ($weight >= 16.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 14.8){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 14.1){
							$whi = "ท้วม";
						}else if ($weight >= 10.7){
							$whi = "สมส่วน";
						}else if ($weight >= 10.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 90){
					if ($weight >= 16.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 15.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 14.4){
							$whi = "ท้วม";
						}else if ($weight >= 10.9){
							$whi = "สมส่วน";
						}else if ($weight >= 10.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 91){
					if ($weight >= 17){
						$whi = "อ้วน" ;
						}else if ($weight >= 15.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 14.7){
							$whi = "ท้วม";
						}else if ($weight >= 11.2){
							$whi = "สมส่วน";
						}else if ($weight >= 10.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 92){
					if ($weight >= 17.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 15.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15){
							$whi = "ท้วม";
						}else if ($weight >= 11.4){
							$whi = "สมส่วน";
						}else if ($weight >= 10.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 93){
					if ($weight >= 17.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 16){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15.3){
							$whi = "ท้วม";
						}else if ($weight >= 11.6){
							$whi = "สมส่วน";
						}else if ($weight >= 11.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 94){
					if ($weight >= 18){
						$whi = "อ้วน" ;
						}else if ($weight >= 16.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15.6){
							$whi = "ท้วม";
						}else if ($weight >= 11.8){
							$whi = "สมส่วน";
						}else if ($weight >= 11.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 95){
					if ($weight >= 18.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 16.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15.8){
							$whi = "ท้วม";
						}else if ($weight >= 12){
							$whi = "สมส่วน";
						}else if ($weight >= 11.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 96){
					if ($weight >= 18.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 16.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 16.1){
							$whi = "ท้วม";
						}else if ($weight >= 12.2){
							$whi = "สมส่วน";
						}else if ($weight >= 11.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 97){
					if ($weight >= 19){
						$whi = "อ้วน" ;
						}else if ($weight >= 17.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 16.4){
							$whi = "ท้วม";
						}else if ($weight >= 12.5){
							$whi = "สมส่วน";
						}else if ($weight >= 12){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 98){
					if ($weight >= 19.4){
						$whi = "อ้วน" ;
						}else if ($weight >= 17.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 16.7){
							$whi = "ท้วม";
						}else if ($weight >= 12.7){
							$whi = "สมส่วน";
						}else if ($weight >= 12.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					

									}else if ($height == 99){
					if ($weight >= 19.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 17.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 17.1){
							$whi = "ท้วม";
						}else if ($weight >= 12.9){
							$whi = "สมส่วน";
						}else if ($weight >= 12.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}


		}else if ($height == 100){
					if ($weight >= 20.1){
						$whi = "อ้วน" ;
						}else if ($weight >= 18.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 17.4){
							$whi = "ท้วม";
						}else if ($weight >= 13.2){
							$whi = "สมส่วน";
						}else if ($weight >= 12.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 101){
					if ($weight >= 20.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 18.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 17.7){
							$whi = "ท้วม";
						}else if ($weight >= 13.4){
							$whi = "สมส่วน";
						}else if ($weight >= 12.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 102){
					if ($weight >= 20.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 19){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 18.1){
							$whi = "ท้วม";
						}else if ($weight >= 13.7){
							$whi = "สมส่วน";
						}else if ($weight >= 13.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 103){
					if ($weight >= 21.4){
						$whi = "อ้วน" ;
						}else if ($weight >= 19.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 18.4){
							$whi = "ท้วม";
						}else if ($weight >= 13.9){
							$whi = "สมส่วน";
						}else if ($weight >= 13.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 104){
					if ($weight >= 21.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 19.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 18.8){
							$whi = "ท้วม";
						}else if ($weight >= 14.2){
							$whi = "สมส่วน";
						}else if ($weight >= 13.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 105){
					if ($weight >= 22.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 20.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 19.2){
							$whi = "ท้วม";
						}else if ($weight >= 14.5){
							$whi = "สมส่วน";
						}else if ($weight >= 13.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 106){
					if ($weight >= 22.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 20.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 19.6){
							$whi = "ท้วม";
						}else if ($weight >= 14.7){
							$whi = "สมส่วน";
						}else if ($weight >= 14.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}		
							
		}else if ($height == 107){
					if ($weight >= 23.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 21){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 20){
							$whi = "ท้วม";
						}else if ($weight >= 15){
							$whi = "สมส่วน";
						}else if ($weight >= 14.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 108){
					if ($weight >= 23.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 21.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 20.4){
							$whi = "ท้วม";
						}else if ($weight >= 15.3){
							$whi = "สมส่วน";
						}else if ($weight >= 14.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 109){
					if ($weight >= 24.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 21.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 20.8){
							$whi = "ท้วม";
						}else if ($weight >= 15.7){
							$whi = "สมส่วน";
						}else if ($weight >= 15){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					
							
		}else if ($height == 110){
					if ($weight >= 24.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 22.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 21.3){
							$whi = "ท้วม";
						}else if ($weight >= 16){
							$whi = "สมส่วน";
						}else if ($weight >= 15.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					

		}else {
			$whi = "";}
					
			
		// น้ำหนักเทียบอายุ			
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 10.6){
			$wei = "น้ำหนักมาก";		
		} else if ($weight >= 10){
			$wei = "น้ำหนักค่อนข้างมาก";
		}else if ($weight >= 6.9){
			$wei = "น้ำหนักตามเกณฑ์";
		}else if ($weight >= 6.5){
			$wei = "น้ำหนักค่อนข้างน้อย";
		}else {
			$wei = "น้ำหนักน้อย";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 75.1){
					$hi = "สูง";
				} else if ($height >= 73.9){
					$hi = "ค่อนข้างสูง";
				}else if ($height >= 66.5){
					$hi = "สูงตามเกณฑ์";
				}else if ($height >= 65.3){
					$hi = "ค่อนข้างเตี้ย";
				}else {
					$hi = "เตี้ย";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 46.5){
					$had = "ใหญ่";
				} else if ($head >= 45.8){
					$had = "ค่อนข้างใหญ่";
				}else if ($head>= 41.8){
					$had = "ปกติ";
				}else if ($head >= 41.2){
					$had = "ค่อนข้างเล็ก";
				}else {
					$had = "เล็ก";}		


}	}}
if ($sex == 2){   
	if ($u_y == 1){
		 if ($u_m == 0)  {
			 if ($height == 0){
		$whi = "" ;
		}else if ($height == 45){
											if ($weight >= 3.4){
													$whi = "อ้วน" ;
													}else if ($weight >= 3.1){
															$whi = "เริ่มอ้วน";
													} else if ($weight >= 2.9){
															$whi = "ท้วม";
													}else if ($weight >= 2.2){
															$whi = "สมส่วน";
													}else if ($weight >= 2.1){
															$whi = "ค่อนข้างผอม";
													}else {
															$whi = "ผอม";}

		}else if ($height == 46){
					if ($weight >= 3.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.1){
							$whi = "ท้วม";
						}else if ($weight >= 2.3){
							$wei = "สมส่วน";
						}else if ($weight >= 2.2){
							$wei = "ค่อนข้างผอม";
						}else {
							$wei = "ผอม";}

					}else if ($height == 47){
					if ($weight >= 3.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.3){
							$whi = "ท้วม";
						}else if ($weight >= 2.5){
							$whi = "สมส่วน";
						}else if ($weight >= 2.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	

		}else if ($height == 48){
					if ($weight >= 4.1){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.5){
							$whi = "ท้วม";
						}else if ($weight >= 2.6){
							$whi = "สมส่วน";
						}else if ($weight >= 2.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 49){
					if ($weight >= 4.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.7){
							$whi = "ท้วม";
						}else if ($weight >= 2.8){
							$whi = "สมส่วน";
						}else if ($weight >= 2.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}						

		}else if ($height == 50){
							if ($weight >= 4.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4){
									$whi = "ท้วม";
								}else if ($weight >= 2.9){
									$whi = "สมส่วน";
								}else if ($weight >= 2.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	

		}else if ($height == 51){
					if ($weight >= 4.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 4.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 4.2){
							$whi = "ท้วม";
						}else if ($weight >= 3.1){
							$whi = "สมส่วน";
						}else if ($weight >= 3.0){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 52){
					if ($weight >= 5.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 4.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 4.5){
							$whi = "ท้วม";
						}else if ($weight >= 3.3){
							$whi = "สมส่วน";
						}else if ($weight >= 3.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	

		}else if ($height == 53){
					if ($weight >= 5.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 4.7){
							$whi = "ท้วม";
						}else if ($weight >= 3.5){
							$whi = "สมส่วน";
						}else if ($weight >= 3.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 54){
					if ($weight >= 5.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 5.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 5.0){
							$whi = "ท้วม";
						}else if ($weight >= 3.8){
							$whi = "สมส่วน";
						}else if ($weight >= 3.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}		
							
		}else if ($height == 55){
					if ($weight >= 6.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 5.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 5.3){
							$whi = "ท้วม";
						}else if ($weight >= 4){
							$whi = "สมส่วน";
						}else if ($weight >= 3.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}		
							
		}else if ($height == 56){
					if ($weight >= 6.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 5.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 5.6){
							$whi = "ท้วม";
						}else if ($weight >= 4.2){
							$whi = "สมส่วน";
						}else if ($weight >= 4.0){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 57){
					if ($weight >= 6.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 6.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6){
							$whi = "ท้วม";
						}else if ($weight >= 4.4){
							$whi = "สมส่วน";
						}else if ($weight >= 4.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 58){
					if ($weight >= 7.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 6.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6.3){
							$whi = "ท้วม";
						}else if ($weight >= 4.7){
							$whi = "สมส่วน";
						}else if ($weight >= 4.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 59){
					if ($weight >= 7.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 6.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6.6){
							$whi = "ท้วม";
						}else if ($weight >= 4.9){
							$whi = "สมส่วน";
						}else if ($weight >= 4.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 60){
					if ($weight >= 7.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 7.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6.9){
							$whi = "ท้วม";
						}else if ($weight >= 5.1){
							$whi = "สมส่วน";
						}else if ($weight >= 4.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 61){
					if ($weight >= 8.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 7.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 7.2){
							$whi = "ท้วม";
						}else if ($weight >= 5.4){
							$whi = "สมส่วน";
						}else if ($weight >= 5.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 62){
					if ($weight >= 8.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 7.8){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 7.4){
							$whi = "ท้วม";
						}else if ($weight >= 5.6){
							$whi = "สมส่วน";
						}else if ($weight >= 5.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 63){
					if ($weight >= 8.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 7.7){
							$whi = "ท้วม";
						}else if ($weight >= 5.8){
							$whi = "สมส่วน";
						}else if ($weight >= 5.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 64){
					if ($weight >= 9.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.0){
							$whi = "ท้วม";
						}else if ($weight >= 6.0){
							$whi = "สมส่วน";
						}else if ($weight >= 5.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 65){
					if ($weight >= 9.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.2){
							$whi = "ท้วม";
						}else if ($weight >= 6.2){
							$whi = "สมส่วน";
						}else if ($weight >= 5.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 66){
					if ($weight >= 9.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.5){
							$whi = "ท้วม";
						}else if ($weight >= 6.4){
							$whi = "สมส่วน";
						}else if ($weight >= 6.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 67){
					if ($weight >= 10.1){
						$whi = "อ้วน" ;
						}else if ($weight >= 9.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.8){
							$whi = "ท้วม";
						}else if ($weight >= 6.6){
							$whi = "สมส่วน";
						}else if ($weight >= 6.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 68){
					if ($weight >= 10.4){
						$whi = "อ้วน" ;
						}else if ($weight >= 9.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9){
							$whi = "ท้วม";
						}else if ($weight >= 6.8){
							$whi = "สมส่วน";
						}else if ($weight >= 6.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 69){
					if ($weight >= 10.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 9.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.3){
							$whi = "ท้วม";
						}else if ($weight >= 7.0){
							$whi = "สมส่วน";
						}else if ($weight >= 6.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 70){
					if ($weight >= 11){
						$whi = "อ้วน" ;
						}else if ($weight >= 10){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.5){
							$whi = "ท้วม";
						}else if ($weight >= 7.1){
							$whi = "สมส่วน";
						}else if ($weight >= 6.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 71){
					if ($weight >= 11.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.7){
							$whi = "ท้วม";
						}else if ($weight >= 7.3){
							$whi = "สมส่วน";
						}else if ($weight >= 7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					

									}else if ($height == 72){
					if ($weight >= 11.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.9){
							$whi = "ท้วม";
						}else if ($weight >= 7.5){
							$whi = "สมส่วน";
						}else if ($weight >= 7.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
		
		}else if ($height == 73){
					if ($weight >= 11.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.2){
							$whi = "ท้วม";
						}else if ($weight >= 7.7){
							$whi = "สมส่วน";
						}else if ($weight >= 7.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 74){
					if ($weight >= 12){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.4){
							$whi = "ท้วม";
						}else if ($weight >= 7.9){
							$whi = "สมส่วน";
						}else if ($weight >= 7.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 75){
					if ($weight >= 12.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.6){
							$whi = "ท้วม";
						}else if ($weight >= 8){
							$whi = "สมส่วน";
						}else if ($weight >= 7.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 76){
					if ($weight >= 12.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.8){
							$whi = "ท้วม";
						}else if ($weight >= 8.2){
							$whi = "สมส่วน";
						}else if ($weight >= 7.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 77){
					if ($weight >= 12.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11){
							$whi = "ท้วม";
						}else if ($weight >= 8.3){
							$whi = "สมส่วน";
						}else if ($weight >= 8.0){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 78){
					if ($weight >= 13){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.8){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.2){
							$whi = "ท้วม";
						}else if ($weight >= 8.5){
							$whi = "สมส่วน";
						}else if ($weight >= 8.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 79){
					if ($weight >= 13.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 12){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.5){
							$whi = "ท้วม";
						}else if ($weight >= 8.7){
							$whi = "สมส่วน";
						}else if ($weight >= 8.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 80){
					if ($weight >= 13.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 12.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.7){
							$whi = "ท้วม";
						}else if ($weight >= 8.9){
							$whi = "สมส่วน";
						}else if ($weight >= 8.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 81){
					if ($weight >= 13.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 12.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.9){
							$whi = "ท้วม";
						}else if ($weight >= 9){
							$whi = "สมส่วน";
						}else if ($weight >= 8.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					
							
									}else if ($height == 82){
					if ($weight >= 14){
						$whi = "อ้วน" ;
						}else if ($weight >= 12.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 12.2){
							$whi = "ท้วม";
						}else if ($weight >= 9.2){
							$whi = "สมส่วน";
						}else if ($weight >= 8.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 83){
					if ($weight >= 14.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 13){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 12.4){
							$whi = "ท้วม";
						}else if ($weight >= 9.4){
							$whi = "สมส่วน";
						}else if ($weight >= 9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 84){
					if ($weight >= 14.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 12.7){
							$whi = "ท้วม";
						}else if ($weight >= 9.6){
							$whi = "สมส่วน";
						}else if ($weight >= 9.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 85){
					if ($weight >= 15){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13){
							$whi = "ท้วม";
						}else if ($weight >= 9.9){
							$whi = "สมส่วน";
						}else if ($weight >= 9.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 86){
					if ($weight >= 15.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.3){
							$whi = "ท้วม";
						}else if ($weight >= 10.1){
							$whi = "สมส่วน";
						}else if ($weight >= 9.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 86){
					if ($weight >= 15.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.3){
							$whi = "ท้วม";
						}else if ($weight >= 10.1){
							$whi = "สมส่วน";
						}else if ($weight >= 9.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 87){
					if ($weight >= 15.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 14.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.5){
							$whi = "ท้วม";
						}else if ($weight >= 10.3){
							$whi = "สมส่วน";
						}else if ($weight >= 9.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 88){
					if ($weight >= 16){
						$whi = "อ้วน" ;
						}else if ($weight >= 14.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.8){
							$whi = "ท้วม";
						}else if ($weight >= 10.5){
							$whi = "สมส่วน";
						}else if ($weight >= 10.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 89){
					if ($weight >= 16.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 14.8){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 14.1){
							$whi = "ท้วม";
						}else if ($weight >= 10.7){
							$whi = "สมส่วน";
						}else if ($weight >= 10.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 90){
					if ($weight >= 16.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 15.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 14.4){
							$whi = "ท้วม";
						}else if ($weight >= 10.9){
							$whi = "สมส่วน";
						}else if ($weight >= 10.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 91){
					if ($weight >= 17){
						$whi = "อ้วน" ;
						}else if ($weight >= 15.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 14.7){
							$whi = "ท้วม";
						}else if ($weight >= 11.2){
							$whi = "สมส่วน";
						}else if ($weight >= 10.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 92){
					if ($weight >= 17.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 15.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15){
							$whi = "ท้วม";
						}else if ($weight >= 11.4){
							$whi = "สมส่วน";
						}else if ($weight >= 10.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 93){
					if ($weight >= 17.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 16){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15.3){
							$whi = "ท้วม";
						}else if ($weight >= 11.6){
							$whi = "สมส่วน";
						}else if ($weight >= 11.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 94){
					if ($weight >= 18){
						$whi = "อ้วน" ;
						}else if ($weight >= 16.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15.6){
							$whi = "ท้วม";
						}else if ($weight >= 11.8){
							$whi = "สมส่วน";
						}else if ($weight >= 11.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 95){
					if ($weight >= 18.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 16.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15.8){
							$whi = "ท้วม";
						}else if ($weight >= 12){
							$whi = "สมส่วน";
						}else if ($weight >= 11.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 96){
					if ($weight >= 18.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 16.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 16.1){
							$whi = "ท้วม";
						}else if ($weight >= 12.2){
							$whi = "สมส่วน";
						}else if ($weight >= 11.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 97){
					if ($weight >= 19){
						$whi = "อ้วน" ;
						}else if ($weight >= 17.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 16.4){
							$whi = "ท้วม";
						}else if ($weight >= 12.5){
							$whi = "สมส่วน";
						}else if ($weight >= 12){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 98){
					if ($weight >= 19.4){
						$whi = "อ้วน" ;
						}else if ($weight >= 17.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 16.7){
							$whi = "ท้วม";
						}else if ($weight >= 12.7){
							$whi = "สมส่วน";
						}else if ($weight >= 12.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					

									}else if ($height == 99){
					if ($weight >= 19.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 17.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 17.1){
							$whi = "ท้วม";
						}else if ($weight >= 12.9){
							$whi = "สมส่วน";
						}else if ($weight >= 12.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}


		}else if ($height == 100){
					if ($weight >= 20.1){
						$whi = "อ้วน" ;
						}else if ($weight >= 18.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 17.4){
							$whi = "ท้วม";
						}else if ($weight >= 13.2){
							$whi = "สมส่วน";
						}else if ($weight >= 12.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 101){
					if ($weight >= 20.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 18.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 17.7){
							$whi = "ท้วม";
						}else if ($weight >= 13.4){
							$whi = "สมส่วน";
						}else if ($weight >= 12.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 102){
					if ($weight >= 20.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 19){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 18.1){
							$whi = "ท้วม";
						}else if ($weight >= 13.7){
							$whi = "สมส่วน";
						}else if ($weight >= 13.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 103){
					if ($weight >= 21.4){
						$whi = "อ้วน" ;
						}else if ($weight >= 19.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 18.4){
							$whi = "ท้วม";
						}else if ($weight >= 13.9){
							$whi = "สมส่วน";
						}else if ($weight >= 13.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 104){
					if ($weight >= 21.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 19.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 18.8){
							$whi = "ท้วม";
						}else if ($weight >= 14.2){
							$whi = "สมส่วน";
						}else if ($weight >= 13.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 105){
					if ($weight >= 22.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 20.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 19.2){
							$whi = "ท้วม";
						}else if ($weight >= 14.5){
							$whi = "สมส่วน";
						}else if ($weight >= 13.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 106){
					if ($weight >= 22.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 20.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 19.6){
							$whi = "ท้วม";
						}else if ($weight >= 14.7){
							$whi = "สมส่วน";
						}else if ($weight >= 14.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}		
							
		}else if ($height == 107){
					if ($weight >= 23.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 21){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 20){
							$whi = "ท้วม";
						}else if ($weight >= 15){
							$whi = "สมส่วน";
						}else if ($weight >= 14.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 108){
					if ($weight >= 23.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 21.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 20.4){
							$whi = "ท้วม";
						}else if ($weight >= 15.3){
							$whi = "สมส่วน";
						}else if ($weight >= 14.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 109){
					if ($weight >= 24.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 21.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 20.8){
							$whi = "ท้วม";
						}else if ($weight >= 15.7){
							$whi = "สมส่วน";
						}else if ($weight >= 15){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					
							
		}else if ($height == 110){
					if ($weight >= 24.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 22.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 21.3){
							$whi = "ท้วม";
						}else if ($weight >= 16){
							$whi = "สมส่วน";
						}else if ($weight >= 15.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					

		}else {
			$whi = "";}
					
			
		// น้ำหนักเทียบอายุ			
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 11.6){
			$wei = "น้ำหนักมาก";		
		} else if ($weight >= 10.8){
			$wei = "น้ำหนักค่อนข้างมาก";
		}else if ($weight >= 7.4){
			$wei = "น้ำหนักตามเกณฑ์";
		}else if ($weight >= 7){
			$wei = "น้ำหนักค่อนข้างน้อย";
		}else {
			$wei = "น้ำหนักน้อย";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 79.3){
					$hi = "สูง";
				} else if ($height >= 78){
					$hi = "ค่อนข้างสูง";
				}else if ($height >= 70.1){
					$hi = "สูงตามเกณฑ์";
				}else if ($height >= 68.9){
					$hi = "ค่อนข้างเตี้ย";
				}else {
					$hi = "เตี้ย";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 47.6){
					$had = "ใหญ่";
				} else if ($head >= 46.9){
					$had = "ค่อนข้างใหญ่";
				}else if ($head>= 42.7){
					$had = "ปกติ";
				}else if ($head >= 42.2){
					$had = "ค่อนข้างเล็ก";
				}else {
					$had = "เล็ก";}	
}}}
if ($sex == 2){
   if ($u_y == 1){
		 if ($u_m == 6)  {
			 if ($height == 0){
		$whi = "" ;
		}else if ($height == 45){
											if ($weight >= 3.4){
													$whi = "อ้วน" ;
													}else if ($weight >= 3.1){
															$whi = "เริ่มอ้วน";
													} else if ($weight >= 2.9){
															$whi = "ท้วม";
													}else if ($weight >= 2.2){
															$whi = "สมส่วน";
													}else if ($weight >= 2.1){
															$whi = "ค่อนข้างผอม";
													}else {
															$whi = "ผอม";}

		}else if ($height == 46){
					if ($weight >= 3.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.1){
							$whi = "ท้วม";
						}else if ($weight >= 2.3){
							$wei = "สมส่วน";
						}else if ($weight >= 2.2){
							$wei = "ค่อนข้างผอม";
						}else {
							$wei = "ผอม";}

					}else if ($height == 47){
					if ($weight >= 3.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.3){
							$whi = "ท้วม";
						}else if ($weight >= 2.5){
							$whi = "สมส่วน";
						}else if ($weight >= 2.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	

		}else if ($height == 48){
					if ($weight >= 4.1){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.5){
							$whi = "ท้วม";
						}else if ($weight >= 2.6){
							$whi = "สมส่วน";
						}else if ($weight >= 2.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 49){
					if ($weight >= 4.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 3.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 3.7){
							$whi = "ท้วม";
						}else if ($weight >= 2.8){
							$whi = "สมส่วน";
						}else if ($weight >= 2.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}						

		}else if ($height == 50){
							if ($weight >= 4.6){
								$whi = "อ้วน" ;
								}else if ($weight >= 4.5){
									$whi = "เริ่มอ้วน";
								} else if ($weight >= 4){
									$whi = "ท้วม";
								}else if ($weight >= 2.9){
									$whi = "สมส่วน";
								}else if ($weight >= 2.8){
									$whi = "ค่อนข้างผอม";
								}else {
									$whi = "ผอม";}	

		}else if ($height == 51){
					if ($weight >= 4.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 4.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 4.2){
							$whi = "ท้วม";
						}else if ($weight >= 3.1){
							$whi = "สมส่วน";
						}else if ($weight >= 3.0){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 52){
					if ($weight >= 5.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 4.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 4.5){
							$whi = "ท้วม";
						}else if ($weight >= 3.3){
							$whi = "สมส่วน";
						}else if ($weight >= 3.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	

		}else if ($height == 53){
					if ($weight >= 5.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 4.7){
							$whi = "ท้วม";
						}else if ($weight >= 3.5){
							$whi = "สมส่วน";
						}else if ($weight >= 3.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 54){
					if ($weight >= 5.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 5.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 5.0){
							$whi = "ท้วม";
						}else if ($weight >= 3.8){
							$whi = "สมส่วน";
						}else if ($weight >= 3.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}		
							
		}else if ($height == 55){
					if ($weight >= 6.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 5.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 5.3){
							$whi = "ท้วม";
						}else if ($weight >= 4){
							$whi = "สมส่วน";
						}else if ($weight >= 3.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}		
							
		}else if ($height == 56){
					if ($weight >= 6.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 5.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 5.6){
							$whi = "ท้วม";
						}else if ($weight >= 4.2){
							$whi = "สมส่วน";
						}else if ($weight >= 4.0){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 57){
					if ($weight >= 6.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 6.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6){
							$whi = "ท้วม";
						}else if ($weight >= 4.4){
							$whi = "สมส่วน";
						}else if ($weight >= 4.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 58){
					if ($weight >= 7.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 6.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6.3){
							$whi = "ท้วม";
						}else if ($weight >= 4.7){
							$whi = "สมส่วน";
						}else if ($weight >= 4.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 59){
					if ($weight >= 7.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 6.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6.6){
							$whi = "ท้วม";
						}else if ($weight >= 4.9){
							$whi = "สมส่วน";
						}else if ($weight >= 4.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 60){
					if ($weight >= 7.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 7.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 6.9){
							$whi = "ท้วม";
						}else if ($weight >= 5.1){
							$whi = "สมส่วน";
						}else if ($weight >= 4.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 61){
					if ($weight >= 8.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 7.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 7.2){
							$whi = "ท้วม";
						}else if ($weight >= 5.4){
							$whi = "สมส่วน";
						}else if ($weight >= 5.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 62){
					if ($weight >= 8.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 7.8){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 7.4){
							$whi = "ท้วม";
						}else if ($weight >= 5.6){
							$whi = "สมส่วน";
						}else if ($weight >= 5.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 63){
					if ($weight >= 8.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 7.7){
							$whi = "ท้วม";
						}else if ($weight >= 5.8){
							$whi = "สมส่วน";
						}else if ($weight >= 5.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 64){
					if ($weight >= 9.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.0){
							$whi = "ท้วม";
						}else if ($weight >= 6.0){
							$whi = "สมส่วน";
						}else if ($weight >= 5.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 65){
					if ($weight >= 9.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.2){
							$whi = "ท้วม";
						}else if ($weight >= 6.2){
							$whi = "สมส่วน";
						}else if ($weight >= 5.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 66){
					if ($weight >= 9.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 8.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.5){
							$whi = "ท้วม";
						}else if ($weight >= 6.4){
							$whi = "สมส่วน";
						}else if ($weight >= 6.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 67){
					if ($weight >= 10.1){
						$whi = "อ้วน" ;
						}else if ($weight >= 9.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 8.8){
							$whi = "ท้วม";
						}else if ($weight >= 6.6){
							$whi = "สมส่วน";
						}else if ($weight >= 6.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 68){
					if ($weight >= 10.4){
						$whi = "อ้วน" ;
						}else if ($weight >= 9.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9){
							$whi = "ท้วม";
						}else if ($weight >= 6.8){
							$whi = "สมส่วน";
						}else if ($weight >= 6.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 69){
					if ($weight >= 10.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 9.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.3){
							$whi = "ท้วม";
						}else if ($weight >= 7.0){
							$whi = "สมส่วน";
						}else if ($weight >= 6.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 70){
					if ($weight >= 11){
						$whi = "อ้วน" ;
						}else if ($weight >= 10){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.5){
							$whi = "ท้วม";
						}else if ($weight >= 7.1){
							$whi = "สมส่วน";
						}else if ($weight >= 6.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 71){
					if ($weight >= 11.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.7){
							$whi = "ท้วม";
						}else if ($weight >= 7.3){
							$whi = "สมส่วน";
						}else if ($weight >= 7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					

									}else if ($height == 72){
					if ($weight >= 11.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 9.9){
							$whi = "ท้วม";
						}else if ($weight >= 7.5){
							$whi = "สมส่วน";
						}else if ($weight >= 7.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
		
		}else if ($height == 73){
					if ($weight >= 11.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.2){
							$whi = "ท้วม";
						}else if ($weight >= 7.7){
							$whi = "สมส่วน";
						}else if ($weight >= 7.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 74){
					if ($weight >= 12){
						$whi = "อ้วน" ;
						}else if ($weight >= 10.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.4){
							$whi = "ท้วม";
						}else if ($weight >= 7.9){
							$whi = "สมส่วน";
						}else if ($weight >= 7.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 75){
					if ($weight >= 12.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.6){
							$whi = "ท้วม";
						}else if ($weight >= 8){
							$whi = "สมส่วน";
						}else if ($weight >= 7.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 76){
					if ($weight >= 12.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 10.8){
							$whi = "ท้วม";
						}else if ($weight >= 8.2){
							$whi = "สมส่วน";
						}else if ($weight >= 7.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 77){
					if ($weight >= 12.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11){
							$whi = "ท้วม";
						}else if ($weight >= 8.3){
							$whi = "สมส่วน";
						}else if ($weight >= 8.0){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 78){
					if ($weight >= 13){
						$whi = "อ้วน" ;
						}else if ($weight >= 11.8){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.2){
							$whi = "ท้วม";
						}else if ($weight >= 8.5){
							$whi = "สมส่วน";
						}else if ($weight >= 8.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 79){
					if ($weight >= 13.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 12){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.5){
							$whi = "ท้วม";
						}else if ($weight >= 8.7){
							$whi = "สมส่วน";
						}else if ($weight >= 8.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 80){
					if ($weight >= 13.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 12.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.7){
							$whi = "ท้วม";
						}else if ($weight >= 8.9){
							$whi = "สมส่วน";
						}else if ($weight >= 8.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 81){
					if ($weight >= 13.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 12.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 11.9){
							$whi = "ท้วม";
						}else if ($weight >= 9){
							$whi = "สมส่วน";
						}else if ($weight >= 8.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					
							
									}else if ($height == 82){
					if ($weight >= 14){
						$whi = "อ้วน" ;
						}else if ($weight >= 12.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 12.2){
							$whi = "ท้วม";
						}else if ($weight >= 9.2){
							$whi = "สมส่วน";
						}else if ($weight >= 8.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}

		}else if ($height == 83){
					if ($weight >= 14.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 13){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 12.4){
							$whi = "ท้วม";
						}else if ($weight >= 9.4){
							$whi = "สมส่วน";
						}else if ($weight >= 9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 84){
					if ($weight >= 14.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 12.7){
							$whi = "ท้วม";
						}else if ($weight >= 9.6){
							$whi = "สมส่วน";
						}else if ($weight >= 9.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 85){
					if ($weight >= 15){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13){
							$whi = "ท้วม";
						}else if ($weight >= 9.9){
							$whi = "สมส่วน";
						}else if ($weight >= 9.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 86){
					if ($weight >= 15.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.3){
							$whi = "ท้วม";
						}else if ($weight >= 10.1){
							$whi = "สมส่วน";
						}else if ($weight >= 9.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 86){
					if ($weight >= 15.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 13.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.3){
							$whi = "ท้วม";
						}else if ($weight >= 10.1){
							$whi = "สมส่วน";
						}else if ($weight >= 9.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 87){
					if ($weight >= 15.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 14.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.5){
							$whi = "ท้วม";
						}else if ($weight >= 10.3){
							$whi = "สมส่วน";
						}else if ($weight >= 9.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 88){
					if ($weight >= 16){
						$whi = "อ้วน" ;
						}else if ($weight >= 14.5){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 13.8){
							$whi = "ท้วม";
						}else if ($weight >= 10.5){
							$whi = "สมส่วน";
						}else if ($weight >= 10.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 89){
					if ($weight >= 16.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 14.8){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 14.1){
							$whi = "ท้วม";
						}else if ($weight >= 10.7){
							$whi = "สมส่วน";
						}else if ($weight >= 10.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 90){
					if ($weight >= 16.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 15.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 14.4){
							$whi = "ท้วม";
						}else if ($weight >= 10.9){
							$whi = "สมส่วน";
						}else if ($weight >= 10.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 91){
					if ($weight >= 17){
						$whi = "อ้วน" ;
						}else if ($weight >= 15.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 14.7){
							$whi = "ท้วม";
						}else if ($weight >= 11.2){
							$whi = "สมส่วน";
						}else if ($weight >= 10.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 92){
					if ($weight >= 17.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 15.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15){
							$whi = "ท้วม";
						}else if ($weight >= 11.4){
							$whi = "สมส่วน";
						}else if ($weight >= 10.9){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 93){
					if ($weight >= 17.6){
						$whi = "อ้วน" ;
						}else if ($weight >= 16){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15.3){
							$whi = "ท้วม";
						}else if ($weight >= 11.6){
							$whi = "สมส่วน";
						}else if ($weight >= 11.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 94){
					if ($weight >= 18){
						$whi = "อ้วน" ;
						}else if ($weight >= 16.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15.6){
							$whi = "ท้วม";
						}else if ($weight >= 11.8){
							$whi = "สมส่วน";
						}else if ($weight >= 11.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 95){
					if ($weight >= 18.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 16.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 15.8){
							$whi = "ท้วม";
						}else if ($weight >= 12){
							$whi = "สมส่วน";
						}else if ($weight >= 11.5){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 96){
					if ($weight >= 18.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 16.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 16.1){
							$whi = "ท้วม";
						}else if ($weight >= 12.2){
							$whi = "สมส่วน";
						}else if ($weight >= 11.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 97){
					if ($weight >= 19){
						$whi = "อ้วน" ;
						}else if ($weight >= 17.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 16.4){
							$whi = "ท้วม";
						}else if ($weight >= 12.5){
							$whi = "สมส่วน";
						}else if ($weight >= 12){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 98){
					if ($weight >= 19.4){
						$whi = "อ้วน" ;
						}else if ($weight >= 17.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 16.7){
							$whi = "ท้วม";
						}else if ($weight >= 12.7){
							$whi = "สมส่วน";
						}else if ($weight >= 12.2){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					

									}else if ($height == 99){
					if ($weight >= 19.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 17.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 17.1){
							$whi = "ท้วม";
						}else if ($weight >= 12.9){
							$whi = "สมส่วน";
						}else if ($weight >= 12.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}


		}else if ($height == 100){
					if ($weight >= 20.1){
						$whi = "อ้วน" ;
						}else if ($weight >= 18.2){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 17.4){
							$whi = "ท้วม";
						}else if ($weight >= 13.2){
							$whi = "สมส่วน";
						}else if ($weight >= 12.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 101){
					if ($weight >= 20.5){
						$whi = "อ้วน" ;
						}else if ($weight >= 18.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 17.7){
							$whi = "ท้วม";
						}else if ($weight >= 13.4){
							$whi = "สมส่วน";
						}else if ($weight >= 12.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 102){
					if ($weight >= 20.9){
						$whi = "อ้วน" ;
						}else if ($weight >= 19){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 18.1){
							$whi = "ท้วม";
						}else if ($weight >= 13.7){
							$whi = "สมส่วน";
						}else if ($weight >= 13.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 103){
					if ($weight >= 21.4){
						$whi = "อ้วน" ;
						}else if ($weight >= 19.3){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 18.4){
							$whi = "ท้วม";
						}else if ($weight >= 13.9){
							$whi = "สมส่วน";
						}else if ($weight >= 13.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 104){
					if ($weight >= 21.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 19.7){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 18.8){
							$whi = "ท้วม";
						}else if ($weight >= 14.2){
							$whi = "สมส่วน";
						}else if ($weight >= 13.6){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 105){
					if ($weight >= 22.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 20.1){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 19.2){
							$whi = "ท้วม";
						}else if ($weight >= 14.5){
							$whi = "สมส่วน";
						}else if ($weight >= 13.8){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 106){
					if ($weight >= 22.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 20.6){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 19.6){
							$whi = "ท้วม";
						}else if ($weight >= 14.7){
							$whi = "สมส่วน";
						}else if ($weight >= 14.1){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}		
							
		}else if ($height == 107){
					if ($weight >= 23.2){
						$whi = "อ้วน" ;
						}else if ($weight >= 21){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 20){
							$whi = "ท้วม";
						}else if ($weight >= 15){
							$whi = "สมส่วน";
						}else if ($weight >= 14.4){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}
							
		}else if ($height == 108){
					if ($weight >= 23.7){
						$whi = "อ้วน" ;
						}else if ($weight >= 21.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 20.4){
							$whi = "ท้วม";
						}else if ($weight >= 15.3){
							$whi = "สมส่วน";
						}else if ($weight >= 14.7){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}	
							
		}else if ($height == 109){
					if ($weight >= 24.3){
						$whi = "อ้วน" ;
						}else if ($weight >= 21.9){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 20.8){
							$whi = "ท้วม";
						}else if ($weight >= 15.7){
							$whi = "สมส่วน";
						}else if ($weight >= 15){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					
							
		}else if ($height == 110){
					if ($weight >= 24.8){
						$whi = "อ้วน" ;
						}else if ($weight >= 22.4){
							$whi = "เริ่มอ้วน";
						} else if ($weight >= 21.3){
							$whi = "ท้วม";
						}else if ($weight >= 16){
							$whi = "สมส่วน";
						}else if ($weight >= 15.3){
							$whi = "ค่อนข้างผอม";
						}else {
							$whi = "ผอม";}					

		}else {
			$whi = "";}
					
			
		// น้ำหนักเทียบอายุ			
		if ($weight==0){
			$wei = "";
		}else if ($weight >= 13.3){
			$wei = "น้ำหนักมาก";		
		} else if ($weight >= 12.5){
			$wei = "น้ำหนักค่อนข้างมาก";
		}else if ($weight >= 8.5){
			$wei = "น้ำหนักตามเกณฑ์";
		}else if ($weight >= 8.1){
			$wei = "น้ำหนักค่อนข้างน้อย";
		}else {
			$wei = "น้ำหนักน้อย";}

			// ส่วนสูงเทียบอายุ
			if ($height == 0){
				$hi = "" ;
				}else if ($height >= 86.6){
					$hi = "สูง";
				} else if ($height >= 85.2){
					$hi = "ค่อนข้างสูง";
				}else if ($height >= 76.4){
					$hi = "สูงตามเกณฑ์";
				}else if ($height >= 74.9){
					$hi = "ค่อนข้างเตี้ย";
				}else {
					$hi = "เตี้ย";}

			// เส้นรอบศรีษะ
			if ($head == 0){
				$had = "" ;
				}else if ($head >= 49){
					$had = "ใหญ่";
				} else if ($head >= 48.3){
					$had = "ค่อนข้างใหญ่";
				}else if ($head>= 44.1){
					$had = "ปกติ";
				}else if ($head >= 43.5){
					$had = "ค่อนข้างเล็ก";
				}else {
					$had = "เล็ก";}	
}}}
if ($sex == 2){
   if ($u_y == 2){
		 if ($u_m == 0)  {
			 if ($height == 0){
	$whi = "" ;
	}else if ($height == 45){
										if ($weight >= 3.4){
												$whi = "อ้วน" ;
												}else if ($weight >= 3.1){
														$whi = "เริ่มอ้วน";
												} else if ($weight >= 2.9){
														$whi = "ท้วม";
												}else if ($weight >= 2.2){
														$whi = "สมส่วน";
												}else if ($weight >= 2.1){
														$whi = "ค่อนข้างผอม";
												}else {
														$whi = "ผอม";}

	}else if ($height == 46){
				if ($weight >= 3.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.1){
						$whi = "ท้วม";
					}else if ($weight >= 2.3){
						$wei = "สมส่วน";
					}else if ($weight >= 2.2){
						$wei = "ค่อนข้างผอม";
					}else {
						$wei = "ผอม";}

				}else if ($height == 47){
				if ($weight >= 3.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.3){
						$whi = "ท้วม";
					}else if ($weight >= 2.5){
						$whi = "สมส่วน";
					}else if ($weight >= 2.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	

	}else if ($height == 48){
				if ($weight >= 4.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.5){
						$whi = "ท้วม";
					}else if ($weight >= 2.6){
						$whi = "สมส่วน";
					}else if ($weight >= 2.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 49){
				if ($weight >= 4.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.7){
						$whi = "ท้วม";
					}else if ($weight >= 2.8){
						$whi = "สมส่วน";
					}else if ($weight >= 2.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}						

	}else if ($height == 50){
						if ($weight >= 4.6){
							$whi = "อ้วน" ;
							}else if ($weight >= 4.5){
								$whi = "เริ่มอ้วน";
							} else if ($weight >= 4){
								$whi = "ท้วม";
							}else if ($weight >= 2.9){
								$whi = "สมส่วน";
							}else if ($weight >= 2.8){
								$whi = "ค่อนข้างผอม";
							}else {
								$whi = "ผอม";}	

	}else if ($height == 51){
				if ($weight >= 4.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 4.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 4.2){
						$whi = "ท้วม";
					}else if ($weight >= 3.1){
						$whi = "สมส่วน";
					}else if ($weight >= 3.0){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 52){
				if ($weight >= 5.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 4.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 4.5){
						$whi = "ท้วม";
					}else if ($weight >= 3.3){
						$whi = "สมส่วน";
					}else if ($weight >= 3.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	

	}else if ($height == 53){
				if ($weight >= 5.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 4.7){
						$whi = "ท้วม";
					}else if ($weight >= 3.5){
						$whi = "สมส่วน";
					}else if ($weight >= 3.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 54){
				if ($weight >= 5.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 5.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 5.0){
						$whi = "ท้วม";
					}else if ($weight >= 3.8){
						$whi = "สมส่วน";
					}else if ($weight >= 3.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}		
						
	}else if ($height == 55){
				if ($weight >= 6.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 5.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 5.3){
						$whi = "ท้วม";
					}else if ($weight >= 4){
						$whi = "สมส่วน";
					}else if ($weight >= 3.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}		
						
	}else if ($height == 56){
				if ($weight >= 6.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 5.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 5.6){
						$whi = "ท้วม";
					}else if ($weight >= 4.2){
						$whi = "สมส่วน";
					}else if ($weight >= 4.0){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 57){
				if ($weight >= 6.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 6.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6){
						$whi = "ท้วม";
					}else if ($weight >= 4.4){
						$whi = "สมส่วน";
					}else if ($weight >= 4.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 58){
				if ($weight >= 7.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 6.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6.3){
						$whi = "ท้วม";
					}else if ($weight >= 4.7){
						$whi = "สมส่วน";
					}else if ($weight >= 4.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 59){
				if ($weight >= 7.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 6.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6.6){
						$whi = "ท้วม";
					}else if ($weight >= 4.9){
						$whi = "สมส่วน";
					}else if ($weight >= 4.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 60){
				if ($weight >= 7.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 7.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6.9){
						$whi = "ท้วม";
					}else if ($weight >= 5.1){
						$whi = "สมส่วน";
					}else if ($weight >= 4.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 61){
				if ($weight >= 8.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 7.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 7.2){
						$whi = "ท้วม";
					}else if ($weight >= 5.4){
						$whi = "สมส่วน";
					}else if ($weight >= 5.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 62){
				if ($weight >= 8.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 7.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 7.4){
						$whi = "ท้วม";
					}else if ($weight >= 5.6){
						$whi = "สมส่วน";
					}else if ($weight >= 5.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 63){
				if ($weight >= 8.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 7.7){
						$whi = "ท้วม";
					}else if ($weight >= 5.8){
						$whi = "สมส่วน";
					}else if ($weight >= 5.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 64){
				if ($weight >= 9.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.0){
						$whi = "ท้วม";
					}else if ($weight >= 6.0){
						$whi = "สมส่วน";
					}else if ($weight >= 5.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 65){
				if ($weight >= 9.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.2){
						$whi = "ท้วม";
					}else if ($weight >= 6.2){
						$whi = "สมส่วน";
					}else if ($weight >= 5.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 66){
				if ($weight >= 9.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.5){
						$whi = "ท้วม";
					}else if ($weight >= 6.4){
						$whi = "สมส่วน";
					}else if ($weight >= 6.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 67){
				if ($weight >= 10.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 9.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.8){
						$whi = "ท้วม";
					}else if ($weight >= 6.6){
						$whi = "สมส่วน";
					}else if ($weight >= 6.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 68){
				if ($weight >= 10.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 9.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9){
						$whi = "ท้วม";
					}else if ($weight >= 6.8){
						$whi = "สมส่วน";
					}else if ($weight >= 6.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 69){
				if ($weight >= 10.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 9.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.3){
						$whi = "ท้วม";
					}else if ($weight >= 7.0){
						$whi = "สมส่วน";
					}else if ($weight >= 6.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 70){
				if ($weight >= 11){
					$whi = "อ้วน" ;
					}else if ($weight >= 10){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.5){
						$whi = "ท้วม";
					}else if ($weight >= 7.1){
						$whi = "สมส่วน";
					}else if ($weight >= 6.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 71){
				if ($weight >= 11.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.7){
						$whi = "ท้วม";
					}else if ($weight >= 7.3){
						$whi = "สมส่วน";
					}else if ($weight >= 7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					

								}else if ($height == 72){
				if ($weight >= 11.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.9){
						$whi = "ท้วม";
					}else if ($weight >= 7.5){
						$whi = "สมส่วน";
					}else if ($weight >= 7.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
	
	}else if ($height == 73){
				if ($weight >= 11.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.2){
						$whi = "ท้วม";
					}else if ($weight >= 7.7){
						$whi = "สมส่วน";
					}else if ($weight >= 7.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 74){
				if ($weight >= 12){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.4){
						$whi = "ท้วม";
					}else if ($weight >= 7.9){
						$whi = "สมส่วน";
					}else if ($weight >= 7.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 75){
				if ($weight >= 12.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.6){
						$whi = "ท้วม";
					}else if ($weight >= 8){
						$whi = "สมส่วน";
					}else if ($weight >= 7.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 76){
				if ($weight >= 12.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.8){
						$whi = "ท้วม";
					}else if ($weight >= 8.2){
						$whi = "สมส่วน";
					}else if ($weight >= 7.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 77){
				if ($weight >= 12.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11){
						$whi = "ท้วม";
					}else if ($weight >= 8.3){
						$whi = "สมส่วน";
					}else if ($weight >= 8.0){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 78){
				if ($weight >= 13){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.2){
						$whi = "ท้วม";
					}else if ($weight >= 8.5){
						$whi = "สมส่วน";
					}else if ($weight >= 8.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 79){
				if ($weight >= 13.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 12){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.5){
						$whi = "ท้วม";
					}else if ($weight >= 8.7){
						$whi = "สมส่วน";
					}else if ($weight >= 8.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 80){
				if ($weight >= 13.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 12.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.7){
						$whi = "ท้วม";
					}else if ($weight >= 8.9){
						$whi = "สมส่วน";
					}else if ($weight >= 8.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 81){
				if ($weight >= 13.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 12.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.9){
						$whi = "ท้วม";
					}else if ($weight >= 9){
						$whi = "สมส่วน";
					}else if ($weight >= 8.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					
						
								}else if ($height == 82){
				if ($weight >= 14){
					$whi = "อ้วน" ;
					}else if ($weight >= 12.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 12.2){
						$whi = "ท้วม";
					}else if ($weight >= 9.2){
						$whi = "สมส่วน";
					}else if ($weight >= 8.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 83){
				if ($weight >= 14.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 13){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 12.4){
						$whi = "ท้วม";
					}else if ($weight >= 9.4){
						$whi = "สมส่วน";
					}else if ($weight >= 9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 84){
				if ($weight >= 14.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 12.7){
						$whi = "ท้วม";
					}else if ($weight >= 9.6){
						$whi = "สมส่วน";
					}else if ($weight >= 9.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 85){
				if ($weight >= 15){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13){
						$whi = "ท้วม";
					}else if ($weight >= 9.9){
						$whi = "สมส่วน";
					}else if ($weight >= 9.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 86){
				if ($weight >= 15.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.3){
						$whi = "ท้วม";
					}else if ($weight >= 10.1){
						$whi = "สมส่วน";
					}else if ($weight >= 9.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 86){
				if ($weight >= 15.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.3){
						$whi = "ท้วม";
					}else if ($weight >= 10.1){
						$whi = "สมส่วน";
					}else if ($weight >= 9.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 87){
				if ($weight >= 15.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 14.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.5){
						$whi = "ท้วม";
					}else if ($weight >= 10.3){
						$whi = "สมส่วน";
					}else if ($weight >= 9.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 88){
				if ($weight >= 16){
					$whi = "อ้วน" ;
					}else if ($weight >= 14.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.8){
						$whi = "ท้วม";
					}else if ($weight >= 10.5){
						$whi = "สมส่วน";
					}else if ($weight >= 10.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 89){
				if ($weight >= 16.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 14.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 14.1){
						$whi = "ท้วม";
					}else if ($weight >= 10.7){
						$whi = "สมส่วน";
					}else if ($weight >= 10.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 90){
				if ($weight >= 16.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 15.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 14.4){
						$whi = "ท้วม";
					}else if ($weight >= 10.9){
						$whi = "สมส่วน";
					}else if ($weight >= 10.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 91){
				if ($weight >= 17){
					$whi = "อ้วน" ;
					}else if ($weight >= 15.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 14.7){
						$whi = "ท้วม";
					}else if ($weight >= 11.2){
						$whi = "สมส่วน";
					}else if ($weight >= 10.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 92){
				if ($weight >= 17.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 15.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15){
						$whi = "ท้วม";
					}else if ($weight >= 11.4){
						$whi = "สมส่วน";
					}else if ($weight >= 10.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 93){
				if ($weight >= 17.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 16){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15.3){
						$whi = "ท้วม";
					}else if ($weight >= 11.6){
						$whi = "สมส่วน";
					}else if ($weight >= 11.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 94){
				if ($weight >= 18){
					$whi = "อ้วน" ;
					}else if ($weight >= 16.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15.6){
						$whi = "ท้วม";
					}else if ($weight >= 11.8){
						$whi = "สมส่วน";
					}else if ($weight >= 11.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 95){
				if ($weight >= 18.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 16.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15.8){
						$whi = "ท้วม";
					}else if ($weight >= 12){
						$whi = "สมส่วน";
					}else if ($weight >= 11.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 96){
				if ($weight >= 18.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 16.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 16.1){
						$whi = "ท้วม";
					}else if ($weight >= 12.2){
						$whi = "สมส่วน";
					}else if ($weight >= 11.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 97){
				if ($weight >= 19){
					$whi = "อ้วน" ;
					}else if ($weight >= 17.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 16.4){
						$whi = "ท้วม";
					}else if ($weight >= 12.5){
						$whi = "สมส่วน";
					}else if ($weight >= 12){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 98){
				if ($weight >= 19.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 17.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 16.7){
						$whi = "ท้วม";
					}else if ($weight >= 12.7){
						$whi = "สมส่วน";
					}else if ($weight >= 12.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					

								}else if ($height == 99){
				if ($weight >= 19.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 17.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 17.1){
						$whi = "ท้วม";
					}else if ($weight >= 12.9){
						$whi = "สมส่วน";
					}else if ($weight >= 12.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}


	}else if ($height == 100){
				if ($weight >= 20.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 18.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 17.4){
						$whi = "ท้วม";
					}else if ($weight >= 13.2){
						$whi = "สมส่วน";
					}else if ($weight >= 12.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 101){
				if ($weight >= 20.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 18.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 17.7){
						$whi = "ท้วม";
					}else if ($weight >= 13.4){
						$whi = "สมส่วน";
					}else if ($weight >= 12.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 102){
				if ($weight >= 20.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 19){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 18.1){
						$whi = "ท้วม";
					}else if ($weight >= 13.7){
						$whi = "สมส่วน";
					}else if ($weight >= 13.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 103){
				if ($weight >= 21.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 19.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 18.4){
						$whi = "ท้วม";
					}else if ($weight >= 13.9){
						$whi = "สมส่วน";
					}else if ($weight >= 13.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 104){
				if ($weight >= 21.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 19.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 18.8){
						$whi = "ท้วม";
					}else if ($weight >= 14.2){
						$whi = "สมส่วน";
					}else if ($weight >= 13.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 105){
				if ($weight >= 22.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 20.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 19.2){
						$whi = "ท้วม";
					}else if ($weight >= 14.5){
						$whi = "สมส่วน";
					}else if ($weight >= 13.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 106){
				if ($weight >= 22.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 20.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 19.6){
						$whi = "ท้วม";
					}else if ($weight >= 14.7){
						$whi = "สมส่วน";
					}else if ($weight >= 14.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}		
						
	}else if ($height == 107){
				if ($weight >= 23.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 21){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 20){
						$whi = "ท้วม";
					}else if ($weight >= 15){
						$whi = "สมส่วน";
					}else if ($weight >= 14.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 108){
				if ($weight >= 23.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 21.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 20.4){
						$whi = "ท้วม";
					}else if ($weight >= 15.3){
						$whi = "สมส่วน";
					}else if ($weight >= 14.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 109){
				if ($weight >= 24.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 21.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 20.8){
						$whi = "ท้วม";
					}else if ($weight >= 15.7){
						$whi = "สมส่วน";
					}else if ($weight >= 15){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					
						
	}else if ($height == 110){
				if ($weight >= 24.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 22.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 21.3){
						$whi = "ท้วม";
					}else if ($weight >= 16){
						$whi = "สมส่วน";
					}else if ($weight >= 15.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					

	}else {
		$whi = "";}
				
		
	// น้ำหนักเทียบอายุ			
	if ($weight==0){
		$wei = "";
	}else if ($weight >= 14.9){
		$wei = "น้ำหนักมาก";		
	} else if ($weight >= 14){
		$wei = "น้ำหนักค่อนข้างมาก";
	}else if ($weight >= 9.6){
		$wei = "น้ำหนักตามเกณฑ์";
	}else if ($weight >= 9){
		$wei = "น้ำหนักค่อนข้างน้อย";
	}else {
		$wei = "น้ำหนักน้อย";}

		// ส่วนสูงเทียบอายุ
		if ($height == 0){
			$hi = "" ;
			}else if ($height >= 92.3){
				$hi = "สูง";
			} else if ($height >= 90.6){
				$hi = "ค่อนข้างสูง";
			}else if ($height >= 80.9){
				$hi = "สูงตามเกณฑ์";
			}else if ($height >= 79.3){
				$hi = "ค่อนข้างเตี้ย";
			}else {
				$hi = "เตี้ย";}

		// เส้นรอบศรีษะ
		if ($head == 0){
			$had = "" ;
			}else if ($head >= 50){
				$had = "ใหญ่";
			} else if ($head >= 49.3){
				$had = "ค่อนข้างใหญ่";
			}else if ($head>= 45.1){
				$had = "ปกติ";
			}else if ($head >= 44.4){
				$had = "ค่อนข้างเล็ก";
			}else {
				$had = "เล็ก";}	

 }
}}
if ($sex == 2){
	if ($u_y == 2){
		if ($u_m == 6)  {
			if ($height == 0){
	$whi = "" ;
	}else if ($height == 45){
										if ($weight >= 3.4){
												$whi = "อ้วน" ;
												}else if ($weight >= 3.1){
														$whi = "เริ่มอ้วน";
												} else if ($weight >= 2.9){
														$whi = "ท้วม";
												}else if ($weight >= 2.2){
														$whi = "สมส่วน";
												}else if ($weight >= 2.1){
														$whi = "ค่อนข้างผอม";
												}else {
														$whi = "ผอม";}

	}else if ($height == 46){
				if ($weight >= 3.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.1){
						$whi = "ท้วม";
					}else if ($weight >= 2.3){
						$wei = "สมส่วน";
					}else if ($weight >= 2.2){
						$wei = "ค่อนข้างผอม";
					}else {
						$wei = "ผอม";}

				}else if ($height == 47){
				if ($weight >= 3.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.3){
						$whi = "ท้วม";
					}else if ($weight >= 2.5){
						$whi = "สมส่วน";
					}else if ($weight >= 2.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	

	}else if ($height == 48){
				if ($weight >= 4.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.5){
						$whi = "ท้วม";
					}else if ($weight >= 2.6){
						$whi = "สมส่วน";
					}else if ($weight >= 2.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 49){
				if ($weight >= 4.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 3.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 3.7){
						$whi = "ท้วม";
					}else if ($weight >= 2.8){
						$whi = "สมส่วน";
					}else if ($weight >= 2.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}						

	}else if ($height == 50){
						if ($weight >= 4.6){
							$whi = "อ้วน" ;
							}else if ($weight >= 4.5){
								$whi = "เริ่มอ้วน";
							} else if ($weight >= 4){
								$whi = "ท้วม";
							}else if ($weight >= 2.9){
								$whi = "สมส่วน";
							}else if ($weight >= 2.8){
								$whi = "ค่อนข้างผอม";
							}else {
								$whi = "ผอม";}	

	}else if ($height == 51){
				if ($weight >= 4.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 4.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 4.2){
						$whi = "ท้วม";
					}else if ($weight >= 3.1){
						$whi = "สมส่วน";
					}else if ($weight >= 3.0){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 52){
				if ($weight >= 5.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 4.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 4.5){
						$whi = "ท้วม";
					}else if ($weight >= 3.3){
						$whi = "สมส่วน";
					}else if ($weight >= 3.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	

	}else if ($height == 53){
				if ($weight >= 5.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 4.7){
						$whi = "ท้วม";
					}else if ($weight >= 3.5){
						$whi = "สมส่วน";
					}else if ($weight >= 3.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 54){
				if ($weight >= 5.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 5.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 5.0){
						$whi = "ท้วม";
					}else if ($weight >= 3.8){
						$whi = "สมส่วน";
					}else if ($weight >= 3.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}		
						
	}else if ($height == 55){
				if ($weight >= 6.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 5.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 5.3){
						$whi = "ท้วม";
					}else if ($weight >= 4){
						$whi = "สมส่วน";
					}else if ($weight >= 3.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}		
						
	}else if ($height == 56){
				if ($weight >= 6.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 5.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 5.6){
						$whi = "ท้วม";
					}else if ($weight >= 4.2){
						$whi = "สมส่วน";
					}else if ($weight >= 4.0){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 57){
				if ($weight >= 6.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 6.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6){
						$whi = "ท้วม";
					}else if ($weight >= 4.4){
						$whi = "สมส่วน";
					}else if ($weight >= 4.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 58){
				if ($weight >= 7.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 6.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6.3){
						$whi = "ท้วม";
					}else if ($weight >= 4.7){
						$whi = "สมส่วน";
					}else if ($weight >= 4.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 59){
				if ($weight >= 7.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 6.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6.6){
						$whi = "ท้วม";
					}else if ($weight >= 4.9){
						$whi = "สมส่วน";
					}else if ($weight >= 4.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 60){
				if ($weight >= 7.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 7.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 6.9){
						$whi = "ท้วม";
					}else if ($weight >= 5.1){
						$whi = "สมส่วน";
					}else if ($weight >= 4.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 61){
				if ($weight >= 8.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 7.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 7.2){
						$whi = "ท้วม";
					}else if ($weight >= 5.4){
						$whi = "สมส่วน";
					}else if ($weight >= 5.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 62){
				if ($weight >= 8.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 7.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 7.4){
						$whi = "ท้วม";
					}else if ($weight >= 5.6){
						$whi = "สมส่วน";
					}else if ($weight >= 5.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 63){
				if ($weight >= 8.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 7.7){
						$whi = "ท้วม";
					}else if ($weight >= 5.8){
						$whi = "สมส่วน";
					}else if ($weight >= 5.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 64){
				if ($weight >= 9.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.0){
						$whi = "ท้วม";
					}else if ($weight >= 6.0){
						$whi = "สมส่วน";
					}else if ($weight >= 5.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 65){
				if ($weight >= 9.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.2){
						$whi = "ท้วม";
					}else if ($weight >= 6.2){
						$whi = "สมส่วน";
					}else if ($weight >= 5.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 66){
				if ($weight >= 9.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 8.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.5){
						$whi = "ท้วม";
					}else if ($weight >= 6.4){
						$whi = "สมส่วน";
					}else if ($weight >= 6.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 67){
				if ($weight >= 10.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 9.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 8.8){
						$whi = "ท้วม";
					}else if ($weight >= 6.6){
						$whi = "สมส่วน";
					}else if ($weight >= 6.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 68){
				if ($weight >= 10.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 9.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9){
						$whi = "ท้วม";
					}else if ($weight >= 6.8){
						$whi = "สมส่วน";
					}else if ($weight >= 6.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 69){
				if ($weight >= 10.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 9.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.3){
						$whi = "ท้วม";
					}else if ($weight >= 7.0){
						$whi = "สมส่วน";
					}else if ($weight >= 6.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 70){
				if ($weight >= 11){
					$whi = "อ้วน" ;
					}else if ($weight >= 10){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.5){
						$whi = "ท้วม";
					}else if ($weight >= 7.1){
						$whi = "สมส่วน";
					}else if ($weight >= 6.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 71){
				if ($weight >= 11.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.7){
						$whi = "ท้วม";
					}else if ($weight >= 7.3){
						$whi = "สมส่วน";
					}else if ($weight >= 7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					

								}else if ($height == 72){
				if ($weight >= 11.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 9.9){
						$whi = "ท้วม";
					}else if ($weight >= 7.5){
						$whi = "สมส่วน";
					}else if ($weight >= 7.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
	
	}else if ($height == 73){
				if ($weight >= 11.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.2){
						$whi = "ท้วม";
					}else if ($weight >= 7.7){
						$whi = "สมส่วน";
					}else if ($weight >= 7.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 74){
				if ($weight >= 12){
					$whi = "อ้วน" ;
					}else if ($weight >= 10.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.4){
						$whi = "ท้วม";
					}else if ($weight >= 7.9){
						$whi = "สมส่วน";
					}else if ($weight >= 7.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 75){
				if ($weight >= 12.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.6){
						$whi = "ท้วม";
					}else if ($weight >= 8){
						$whi = "สมส่วน";
					}else if ($weight >= 7.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 76){
				if ($weight >= 12.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 10.8){
						$whi = "ท้วม";
					}else if ($weight >= 8.2){
						$whi = "สมส่วน";
					}else if ($weight >= 7.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 77){
				if ($weight >= 12.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11){
						$whi = "ท้วม";
					}else if ($weight >= 8.3){
						$whi = "สมส่วน";
					}else if ($weight >= 8.0){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 78){
				if ($weight >= 13){
					$whi = "อ้วน" ;
					}else if ($weight >= 11.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.2){
						$whi = "ท้วม";
					}else if ($weight >= 8.5){
						$whi = "สมส่วน";
					}else if ($weight >= 8.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 79){
				if ($weight >= 13.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 12){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.5){
						$whi = "ท้วม";
					}else if ($weight >= 8.7){
						$whi = "สมส่วน";
					}else if ($weight >= 8.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 80){
				if ($weight >= 13.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 12.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.7){
						$whi = "ท้วม";
					}else if ($weight >= 8.9){
						$whi = "สมส่วน";
					}else if ($weight >= 8.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 81){
				if ($weight >= 13.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 12.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 11.9){
						$whi = "ท้วม";
					}else if ($weight >= 9){
						$whi = "สมส่วน";
					}else if ($weight >= 8.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					
						
								}else if ($height == 82){
				if ($weight >= 14){
					$whi = "อ้วน" ;
					}else if ($weight >= 12.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 12.2){
						$whi = "ท้วม";
					}else if ($weight >= 9.2){
						$whi = "สมส่วน";
					}else if ($weight >= 8.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}

	}else if ($height == 83){
				if ($weight >= 14.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 13){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 12.4){
						$whi = "ท้วม";
					}else if ($weight >= 9.4){
						$whi = "สมส่วน";
					}else if ($weight >= 9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 84){
				if ($weight >= 14.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 12.7){
						$whi = "ท้วม";
					}else if ($weight >= 9.6){
						$whi = "สมส่วน";
					}else if ($weight >= 9.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 85){
				if ($weight >= 15){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13){
						$whi = "ท้วม";
					}else if ($weight >= 9.9){
						$whi = "สมส่วน";
					}else if ($weight >= 9.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 86){
				if ($weight >= 15.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.3){
						$whi = "ท้วม";
					}else if ($weight >= 10.1){
						$whi = "สมส่วน";
					}else if ($weight >= 9.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 86){
				if ($weight >= 15.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 13.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.3){
						$whi = "ท้วม";
					}else if ($weight >= 10.1){
						$whi = "สมส่วน";
					}else if ($weight >= 9.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 87){
				if ($weight >= 15.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 14.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.5){
						$whi = "ท้วม";
					}else if ($weight >= 10.3){
						$whi = "สมส่วน";
					}else if ($weight >= 9.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 88){
				if ($weight >= 16){
					$whi = "อ้วน" ;
					}else if ($weight >= 14.5){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 13.8){
						$whi = "ท้วม";
					}else if ($weight >= 10.5){
						$whi = "สมส่วน";
					}else if ($weight >= 10.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 89){
				if ($weight >= 16.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 14.8){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 14.1){
						$whi = "ท้วม";
					}else if ($weight >= 10.7){
						$whi = "สมส่วน";
					}else if ($weight >= 10.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 90){
				if ($weight >= 16.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 15.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 14.4){
						$whi = "ท้วม";
					}else if ($weight >= 10.9){
						$whi = "สมส่วน";
					}else if ($weight >= 10.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 91){
				if ($weight >= 17){
					$whi = "อ้วน" ;
					}else if ($weight >= 15.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 14.7){
						$whi = "ท้วม";
					}else if ($weight >= 11.2){
						$whi = "สมส่วน";
					}else if ($weight >= 10.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 92){
				if ($weight >= 17.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 15.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15){
						$whi = "ท้วม";
					}else if ($weight >= 11.4){
						$whi = "สมส่วน";
					}else if ($weight >= 10.9){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 93){
				if ($weight >= 17.6){
					$whi = "อ้วน" ;
					}else if ($weight >= 16){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15.3){
						$whi = "ท้วม";
					}else if ($weight >= 11.6){
						$whi = "สมส่วน";
					}else if ($weight >= 11.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 94){
				if ($weight >= 18){
					$whi = "อ้วน" ;
					}else if ($weight >= 16.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15.6){
						$whi = "ท้วม";
					}else if ($weight >= 11.8){
						$whi = "สมส่วน";
					}else if ($weight >= 11.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 95){
				if ($weight >= 18.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 16.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 15.8){
						$whi = "ท้วม";
					}else if ($weight >= 12){
						$whi = "สมส่วน";
					}else if ($weight >= 11.5){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 96){
				if ($weight >= 18.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 16.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 16.1){
						$whi = "ท้วม";
					}else if ($weight >= 12.2){
						$whi = "สมส่วน";
					}else if ($weight >= 11.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 97){
				if ($weight >= 19){
					$whi = "อ้วน" ;
					}else if ($weight >= 17.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 16.4){
						$whi = "ท้วม";
					}else if ($weight >= 12.5){
						$whi = "สมส่วน";
					}else if ($weight >= 12){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 98){
				if ($weight >= 19.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 17.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 16.7){
						$whi = "ท้วม";
					}else if ($weight >= 12.7){
						$whi = "สมส่วน";
					}else if ($weight >= 12.2){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					

								}else if ($height == 99){
				if ($weight >= 19.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 17.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 17.1){
						$whi = "ท้วม";
					}else if ($weight >= 12.9){
						$whi = "สมส่วน";
					}else if ($weight >= 12.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}


	}else if ($height == 100){
				if ($weight >= 20.1){
					$whi = "อ้วน" ;
					}else if ($weight >= 18.2){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 17.4){
						$whi = "ท้วม";
					}else if ($weight >= 13.2){
						$whi = "สมส่วน";
					}else if ($weight >= 12.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 101){
				if ($weight >= 20.5){
					$whi = "อ้วน" ;
					}else if ($weight >= 18.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 17.7){
						$whi = "ท้วม";
					}else if ($weight >= 13.4){
						$whi = "สมส่วน";
					}else if ($weight >= 12.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 102){
				if ($weight >= 20.9){
					$whi = "อ้วน" ;
					}else if ($weight >= 19){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 18.1){
						$whi = "ท้วม";
					}else if ($weight >= 13.7){
						$whi = "สมส่วน";
					}else if ($weight >= 13.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 103){
				if ($weight >= 21.4){
					$whi = "อ้วน" ;
					}else if ($weight >= 19.3){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 18.4){
						$whi = "ท้วม";
					}else if ($weight >= 13.9){
						$whi = "สมส่วน";
					}else if ($weight >= 13.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 104){
				if ($weight >= 21.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 19.7){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 18.8){
						$whi = "ท้วม";
					}else if ($weight >= 14.2){
						$whi = "สมส่วน";
					}else if ($weight >= 13.6){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 105){
				if ($weight >= 22.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 20.1){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 19.2){
						$whi = "ท้วม";
					}else if ($weight >= 14.5){
						$whi = "สมส่วน";
					}else if ($weight >= 13.8){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 106){
				if ($weight >= 22.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 20.6){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 19.6){
						$whi = "ท้วม";
					}else if ($weight >= 14.7){
						$whi = "สมส่วน";
					}else if ($weight >= 14.1){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}		
						
	}else if ($height == 107){
				if ($weight >= 23.2){
					$whi = "อ้วน" ;
					}else if ($weight >= 21){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 20){
						$whi = "ท้วม";
					}else if ($weight >= 15){
						$whi = "สมส่วน";
					}else if ($weight >= 14.4){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}
						
	}else if ($height == 108){
				if ($weight >= 23.7){
					$whi = "อ้วน" ;
					}else if ($weight >= 21.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 20.4){
						$whi = "ท้วม";
					}else if ($weight >= 15.3){
						$whi = "สมส่วน";
					}else if ($weight >= 14.7){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}	
						
	}else if ($height == 109){
				if ($weight >= 24.3){
					$whi = "อ้วน" ;
					}else if ($weight >= 21.9){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 20.8){
						$whi = "ท้วม";
					}else if ($weight >= 15.7){
						$whi = "สมส่วน";
					}else if ($weight >= 15){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					
						
	}else if ($height == 110){
				if ($weight >= 24.8){
					$whi = "อ้วน" ;
					}else if ($weight >= 22.4){
						$whi = "เริ่มอ้วน";
					} else if ($weight >= 21.3){
						$whi = "ท้วม";
					}else if ($weight >= 16){
						$whi = "สมส่วน";
					}else if ($weight >= 15.3){
						$whi = "ค่อนข้างผอม";
					}else {
						$whi = "ผอม";}					

	}else {
		$whi = "";}
				
		
	// น้ำหนักเทียบอายุ			
	if ($weight==0){
		$wei = "";
	}else if ($weight >= 16.6){
		$wei = "น้ำหนักมาก";		
	} else if ($weight >= 15.5){
		$wei = "น้ำหนักค่อนข้างมาก";
	}else if ($weight >= 10.6){
		$wei = "น้ำหนักตามเกณฑ์";
	}else if ($weight >= 10){
		$wei = "น้ำหนักค่อนข้างน้อย";
	}else {
		$wei = "น้ำหนักน้อย";}

		// ส่วนสูงเทียบอายุ
		if ($height == 0){
			$hi = "" ;
			}else if ($height >= 97.8){
				$hi = "สูง";
			} else if ($height >= 96.1){
				$hi = "ค่อนข้างสูง";
			}else if ($height >= 85.4){
				$hi = "สูงตามเกณฑ์";
			}else if ($height >= 83.6){
				$hi = "ค่อนข้างเตี้ย";
			}else {
				$hi = "เตี้ย";}

		// เส้นรอบศรีษะ
		if ($head == 0){
			$had = "" ;
			}else if ($head >= 50.7){
				$had = "ใหญ่";
			} else if ($head >= 50){
				$had = "ค่อนข้างใหญ่";
			}else if ($head>= 45.8){
				$had = "ปกติ";
			}else if ($head >= 45.1){
				$had = "ค่อนข้างเล็ก";
			}else {
				$had = "เล็ก";}	
			}}}}
	

										


		


							





?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      rel="stylesheet"
      href="/mom/lib/bootstrap-5.1.3-dist/css/bootstrap.css"
    />

  <title>Document</title>

</head>
<body>

<h1><?php echo"<br><br>$u_y   ปี    $u_m เดือน      $u_d  วัน<br><br>";?></h1>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">แปลผล</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">น้ำหนัก (กิโลกรัม)</th>
      <td><?php echo " $weight  <br> ";?> </td>
      <td><?php echo"{$wei}"?></td>
      </tr>
    <tr>
      <th scope="row">ส่วนสูง (เซนติเมตร)</th>
      <td><?php echo " $height <br> ";?> </td>
      <td><?php echo"{$hi}"?></td>
</tr>
      <tr>
      <th scope="row">รอบศรีษะ (เซนติเมตร)</th>
      <td><?php echo " $head <br> ";?> </td>
      <td><?php echo"{$had}"?></td>
</table>
<p>สรุป<?php echo " น้ำหนัก {$weight} กก. สูง {$height} ซม.  เส้นรอบศีรษะ {$head} ซม.";?></p>
<p><?php echo "น้อง {$N} ";?><?php echo "น้ำหนักเทียบกับอายุ{$wei} . ความสูงเทียบกับอายุ{$hi} .      น้ำหนักเทียบกับความสูง {$whi} เส้นรอบศีรษะ{$had} ";?></p>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
crossorigin="anonymous"
/>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"
></script>
</body>
</html>