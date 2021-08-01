<?PHP
	$usn= $fullname= $mobile= $email= $website= $linkedin= $github= $hno= $street= $city= $state= $country= $pin= $careerobjective= $sem1= $sem1total= $sem2= $sem2total= $sem3= $sem3total= $sem4= $sem4total= $sem5= $sem5total= $sem6= $sem6total= $sem7= $sem7total= $sem8= $sem8total= $betotal= $n= $becollege= $beuniversity= $beyear= $sslc = $sslctotal = $pumarks = $putotal =  $preuniversitymarks= $pucollege= $puuniversity= $puyear= $sslcmarks= $school= $schoolboard= $sslcyear= $project1= $project1abstract= $project2= $project2abstract= $project3= $project3abstract= $project4= $project4abstract= $publication1= $publication2= $publication3= $publication4= $programming= $web= $tools= $os= $extra1= $extra2= $extra3= $extra4= $extra5= $hobby1= $hobby2= $hobby3= $hobby4= $hobby5= $fathersname= $mothersname= $gender= $dd= $mm= $yyyy= $nationality= $maritalstatus= $languagesknown= $declaration= "";
	
	$link=mysqli_connect("localhost","id4025005_ganeshpd1998","anmol123","id4025005_sample") or die("Error " . mysqli_error($link)); 

	$usn= $_POST["usn"];
	$fullname= $_POST["fullname"];
	$mobile= $_POST["mobile"];
	$email= $_POST["email"];
	$website= $_POST["website"];
	$linkedin= $_POST["linkedin"];
	$github= $_POST["github"];
	$hno= $_POST["hno"];
	$street= $_POST["street"];
	$city= $_POST["city"];
	$state= $_POST["state"];
	$country= $_POST["country"];
	$pin= $_POST["pin"];
	$careerobjective= $_POST["careerobjective"];
	$sem1= $_POST["sem1"];
	$sem1total= $_POST["sem1total"];
	$sem2= $_POST["sem2"];
	$sem2total= $_POST["sem2total"];
	$sem3= $_POST["sem3"];
	$sem3total= $_POST["sem3total"];
	$sem4= $_POST["sem4"];
	$sem4total= $_POST["sem4total"];
	$sem5= $_POST["sem5"];
	$sem5total= $_POST["sem5total"];
	$sem6= $_POST["sem6"];
	$sem6total= $_POST["sem6total"];
	$sem7= $_POST["sem7"];
	$sem7total= $_POST["sem7total"];
	$sem8= $_POST["sem8"];
	$sem8total= $_POST["sem8total"];
	$becollege= $_POST["becollege"];
	$beuniversity= $_POST["beuniversity"];
	$beyear=$_POST["beyear"];
	$sslc = $_POST["sslc"];
	$sslctotal = $_POST["sslctotal"];
	$pumarks = $_POST["pumarks"];
	$putotal = $_POST["putotal"];
	$pucollege= $_POST["pucollege"];
	$puuniversity= $_POST["puuniversity"];
	$puyear=$_POST["puyear"];
	$school= $_POST["school"];
	$schoolboard= $_POST["schoolboard"];
	$sslcyear=$_POST["sslcyear"];
	$project1= $_POST["project1"];
	$project1abstract= $_POST["project1abstract"];
	$project2= $_POST["project2"];
	$project2abstract= $_POST["project2abstract"];
	$project3= $_POST["project3"];
	$project3abstract= $_POST["project3abstract"];
	$project4= $_POST["project4"];
	$project4abstract= $_POST["project4abstract"];
	$publication1= $_POST["publication1"];
	$publication2= $_POST["publication2"];
	$publication3= $_POST["publication3"];
	$publication4= $_POST["publication4"];
	$programming= $_POST["programming"];
	$web= $_POST["web"];
	$tools= $_POST["tools"];
	$os= $_POST["os"];
	$extra1= $_POST["extra1"];
	$extra2= $_POST["extra2"];
	$extra3= $_POST["extra3"];
	$extra4= $_POST["extra4"];
	$extra5= $_POST["extra5"];
	$hobby1= $_POST["hobby1"];
	$hobby2= $_POST["hobby2"];
	$hobby3= $_POST["hobby3"];
	$hobby4= $_POST["hobby4"];
	$hobby5= $_POST["hobby5"];
	$fathersname= $_POST["fathersname"];
	$mothersname= $_POST["mothersname"];
	$gender= $_POST["gender"];
	$dd= $_POST["dd"];
	$mm= $_POST["mm"];
	$yyyy= $_POST["yyyy"];
	$nationality= $_POST["nationality"];
	$maritalstatus= $_POST["maritalstatus"];
	$languagesknown= $_POST["languagesknown"];
	$declaration=$_POST["declaration"];
	
	if ($sem1!=0 & $sem2!=0 & $sem3!=0 & $sem4!=0 & $sem5!=0 & $sem6!=0 & $sem7!=0 & $sem8!=0 & $sem1total!=0 & $sem2total!=0 & $sem3total!=0 & $sem4total!=0 & $sem5total!=0 & $sem6total!=0 & $sem7total!=0 & $sem8total!=0)
	{
		$n=$sem1total+$sem2total+$sem3total+$sem4total+$sem5total+$sem6total+$sem7total+$sem8total;
		$betotal=(($sem1*$sem1total)+($sem2*$sem2total)+($sem3*$sem3total)+($sem4*$sem4total)+($sem5*$sem5total)+($sem6*$sem6total)+($sem7*$sem7total)+($sem8*$sem8total))/$n;
	}
	elseif ($sem1!=0 & $sem2!=0 & $sem3!=0 & $sem4!=0 & $sem5!=0 & $sem6!=0 & $sem7!=0 & $sem8==0 & $sem1total!=0 & $sem2total!=0 & $sem3total!=0 & $sem4total!=0 & $sem5total!=0 & $sem6total!=0 & $sem7total!=0 & $sem8total==0)
	{
		$n=$sem1total+$sem2total+$sem3total+$sem4total+$sem5total+$sem6total+$sem7total;
		$betotal=(($sem1*$sem1total)+($sem2*$sem2total)+($sem3*$sem3total)+($sem4*$sem4total)+($sem5*$sem5total)+($sem6*$sem6total)+($sem7*$sem7total))/$n;
		
	}
	elseif ($sem1!=0 & $sem2!=0 & $sem3!=0 & $sem4!=0 & $sem5!=0 & $sem6!=0 & $sem7==0 & $sem8==0 & $sem1total!=0 & $sem2total!=0 & $sem3total!=0 & $sem4total!=0 & $sem5total!=0 & $sem6total!=0 & $sem7total==0 & $sem8total==0)
	{
		$n=$sem1total+$sem2total+$sem3total+$sem4total+$sem5total+$sem6total;
		$betotal=(($sem1*$sem1total)+($sem2*$sem2total)+($sem3*$sem3total)+($sem4*$sem4total)+($sem5*$sem5total)+($sem6*$sem6total))/$n;
	}
	elseif ($sem1!=0 & $sem2!=0 & $sem3!=0 & $sem4!=0 & $sem5!=0 & $sem6==0 & $sem7==0 & $sem8==0 & $sem1total!=0 & $sem2total!=0 & $sem3total!=0 & $sem4total!=0 & $sem5total!=0 & $sem6total==0 & $sem7total==0 & $sem8total==0)
	{
		$n=$sem1total+$sem2total+$sem3total+$sem4total+$sem5total;
		$betotal=(($sem1*$sem1total)+($sem2*$sem2total)+($sem3*$sem3total)+($sem4*$sem4total)+($sem5*$sem5total))/$n;
	}
	
	elseif ($sem1!=0 & $sem2!=0 & $sem3!=0 & $sem4!=0 & $sem5==0 & $sem6==0 & $sem7==0 & $sem8==0 & $sem1total!=0 & $sem2total!=0 & $sem3total!=0 & $sem4total!=0 & $sem5total==0 & $sem6total==0 & $sem7total==0 & $sem8total==0)
	{
		$n=$sem1total+$sem2total+$sem3total+$sem4total;
		$betotal=(($sem1*$sem1total)+($sem2*$sem2total)+($sem3*$sem3total)+($sem4*$sem4total))/$n;
	}
	elseif ($sem1!=0 & $sem2!=0 & $sem3!=0 & $sem4==0 & $sem5==0 & $sem6==0 & $sem7==0 & $sem8==0 & $sem1total!=0 & $sem2total!=0 & $sem3total!=0 & $sem4total==0 & $sem5total==0 & $sem6total==0 & $sem7total==0 & $sem8total==0)
	{
		$n=$sem1total+$sem2total+$sem3total;
		$betotal=(($sem1*$sem1total)+($sem2*$sem2total)+($sem3*$sem3total))/$n;
	}
	
	elseif ($sem1!=0 & $sem2!=0 & $sem3==0 & $sem4==0 & $sem5==0 & $sem6==0 & $sem7==0 & $sem8==0 & $sem1total!=0 & $sem2total!=0 & $sem3total==0 & $sem4total==0 & $sem5total==0 & $sem6total==0 & $sem7total==0 & $sem8total==0)
	{
		$n=$sem1total+$sem2total;
		$betotal=(($sem1*$sem1total)+($sem2*$sem2total))/$n;
	}
	
	elseif ($sem1!=0 & $sem2==0 & $sem3==0 & $sem4==0 & $sem5==0 & $sem6==0 & $sem7==0 & $sem8==0 & $sem1total!=0 & $sem2total==0 & $sem3total==0 & $sem4total==0 & $sem5total==0 & $sem6total==0 & $sem7total==0 & $sem8total==0)
	{
		$n=$sem1total;
		$betotal=($sem1*$sem1total)/$n;
	}
	
	$preuniversitymarks=($pumarks/$putotal)*100;
	$sslcmarks=($sslc/$sslctotal)*100;
	

	
	$query="INSERT INTO `resume`(`usn`, `fullname`, `mobile`, `email`, `website`, `linkedin`, `github`, `hno`, `street`, `city`, `state`, `country`, `pin`, `careerobjective`, `sem1`, `sem1total`, `sem2`, `sem2total`, 
	`sem3`, `sem3total`, `sem4`, `sem4total`, `sem5`, `sem5total`, `sem6`, `sem6total`, `sem7`, `sem7total`, `sem8`, `sem8total`, `betotal`, `beyear`, `becollege`, `beuniversity`, 
	`preuniversitymarks`, `pucollege`, `puuniversity`, `puyear`, `sslcmarks`, `school`, `schoolboard`, `sslcyear`, `project1`, `project1abstract`, `project2`, `project2abstract`, 
	`project3`, `project3abstract`, `project4`, `project4abstract`, `publication1`, `publication2`, `publication3`, `publication4`, `programming`, `web`, `tools`, `os`, `extra1`, 
	`extra2`, `extra3`, `extra4`, `extra5`, `hobby1`, `hobby2`, `hobby3`, `hobby4`, `hobby5`, `fathersname`, `mothersname`, `gender`, `dd`, `mm`, `yyyy`, `nationality`, 
	`maritalstatus`, `languagesknown`, `declaration`)
	VALUES ('$usn','$fullname', '$mobile', '$email', '$website', '$linkedin', '$github', '$hno', '$street', '$city', '$state', '$country', '$pin', '$careerobjective', '$sem1', '$sem1total', '$sem2', '$sem2total', '$sem3', 
	'$sem3total', '$sem4', '$sem4total', '$sem5', '$sem5total', '$sem6', '$sem6total', '$sem7', '$sem7total', '$sem8', '$sem8total', '$betotal', '$beyear', '$becollege', 
	'$beuniversity', '$preuniversitymarks', '$pucollege', '$puuniversity', '$puyear','$sslcmarks', '$school', '$schoolboard', '$sslcyear', '$project1', '$project1abstract', '$project2', 
	'$project2abstract', '$project3', '$project3abstract', '$project4', '$project4abstract', '$publication1', '$publication2', '$publication3', '$publication4', '$programming', '$web', 
	'$tools', '$os', '$extra1', '$extra2', '$extra3', '$extra4', '$extra5', '$hobby1', '$hobby2', '$hobby3', '$hobby4', '$hobby5', '$fathersname', '$mothersname', '$gender', 
	'$dd', '$mm', '$yyyy', '$nationality', '$maritalstatus', '$languagesknown', '$declaration')";
	
	
  if (!mysqli_query($link,$query)) {
		die('Error: ' . mysqli_error($link));
	}

	header('Location: viewresume1.html');
	exit;
?>
