<!DOCTYPE html>
<html lang=”en”> 
<head>
 <meta charset="UTF-8">
	<title>Resume Builder</title>
	<link rel="stylesheet" type="text/css" href="resumeform.css" media="all">
</head>
<body>
	<div id="form_container">
		<form id="resumeform" class="resume" action="studentdatabase1.php" method="post">
			<div id="formdescription">
				<h1><br>Make an awesome CV<br><br></h1>
				<h2><br>For Training & Placement</h2>
				<h4>Resume Builder</h4><hr>
			</div>
			<ol>
			<div class="center">
			
				<li id="fullname">
				<h3>Name</h3>
						
							<label>Enter Password</label>
							<input type="text" name="usn" required="true" placeholder="Password" size="50" maxlength="12" value=""/><br>
							<p>Make sure you remember this for further access</p><br>
							<label>Full Name*</label>
							<input type="text" name="fullname" required="true" placeholder="First+Last" size="50" maxlength="60" value=""/><br>
							<p>As Per your College</p>
						
				</li><br>
				<li class="contactdetails">
				<h3>Contact Details</h3>
					<label>Mobile No *:</label>
					
						<input type="number" name="mobile" required="true" placeholder="10 digit Number" size="50" maxlength="10" value=""/><br>
						<p>Enter your 10 digit mobile number(excluding +91)</p>
					<br>
					<label>Email ID*:</label>
					<span>
						<input type="email" required="true" name="email" placeholder="e.g. ganeshpd@dtu.ac.in" size="50" maxlength="150" value=""/><br>
						<p>Enter your email id</p>
					</span><br>
					<label>Blog / Personal Website:</label>
					<span>
						<input type="url" name="website" placeholder="www.mysite.com" size="50" maxlength="150" value=""/><br>
						<p>Enter the URL of your Blog / Personal website</p>
					</span><br>
					<label>Linkedin:</label>
					<span>
						<input type="url" name="linkedin" placeholder="in.linkedin.com/in/username" size="50" maxlength="150" value=""/><br>
						<p>Enter your linkedin profile URL</p>
					</span><br>
					<label>Github:</label>
					<span>
						<input type="url" name="github" placeholder="www.github.com/username" size="50" maxlength="150" value=""/><br>
						<p>Enter the URL for your Github code repository </p>
					</span><br>
					<label>Permanent Address*:</label>
					<span>
						<input type="text" required="true" name="hno" placeholder="hno" size="50" maxlength="1000" value=""/><br><br>
						<input type="text" required="true" name="street" placeholder="street" size="50" maxlength="1000" value=""/><br><br>
						<input type="text" required="true" name="city" placeholder="city" size="50" maxlength="1000" value=""/><br><br>
						<input type="text" required="true" name="state" placeholder="state" size="50" maxlength="1000" value=""/><br><br>
						<input type="text" required="true" name="country" placeholder="country" size="50" maxlength="1000" value=""/><br><br>
						<input type="number" required="true" name="pin" placeholder="pin" size="50" maxlength="6" value=""/><br>
						<p>Enter your address for future communication</p>
					</span>					
				</li><br>
			</div>
				<li class="careerobjective">
					<h3>Career Objective</h3><br>
						<textarea name="careerobjective" required="true" maxlength="5000" value=""></textarea>
						<p>Give your career objective in few words</p>
				</li><br>
				<li id="markscorner">
					<h3>Marks Corner</h3>
					
					<div class="be">
						<h5>Bachelors Degree *:</h5>
						<div class="becenter">
							<Label><b>Sem 1</b></label>
							<input type="number" step="any" name="sem1" size="5" placeholder="0 if not known" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;<b>No. of Credits</b>
							<input type="number" name="sem1total" size="5" placeholder="0 if not known" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
							<Label><b>Sem 2</b></label>
							<input type="number" step="any" name="sem2" size="5" placeholder="0 if not known" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;<b>No. of Credits</b>
							<input type="number" name="sem2total" size="5" placeholder="0 if not known" maxlength="10" value=""/><br><br>
		
							<Label><b>Sem 3</b></label>
							<input type="number" step="any" name="sem3" size="5" placeholder="0 if not known" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;<b>No. of Credits</b>
							<input type="number" name="sem3total" size="5" placeholder="0 if not known" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
							<Label><b>Sem 4</b></label>
							<input type="number" step="any" name="sem4" size="5" placeholder="0 if not known" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;<b>No. of Credits</b>
							<input type="number" name="sem4total" size="5" placeholder="0 if not known" maxlength="10" value=""/><br><br>
						
							<Label><b>Sem 5</b></label>
							<input type="number" step="any" name="sem5" size="5" placeholder="0 if not known" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;<b>No. of Credits</b>
							<input type="number" name="sem5total" size="5" placeholder="0 if not known" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
							<Label><b>Sem 6</b></label>
							<input type="number" step="any" name="sem6" size="5" placeholder="0 if not known" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;<b>No. of Credits</b>
							<input type="number" name="sem6total" size="5" placeholder="0 if not known" maxlength="10" value=""/><br><br>
				
							<Label><b>Sem 7</b></label>
							<input type="number" step="any" name="sem7" size="5" placeholder="0 if not known" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;<b>No. of Credits</b>
							<input type="number" name="sem7total" size="5" placeholder="0 if not known" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																	
							<Label><b>Sem 8</b></label>
							<input type="number" step="any" name="sem8" size="5" placeholder="0 if not known" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;<b>No.of Credits</b>
							<input type="number" name="sem8total" size="5" placeholder="0 if not known" maxlength="10" value=""/><br><br>
						</div>
					</div>	
					<div class="data">
							<label>Institution Name*</label>
							<input type="text" required="true" name="becollege" size="30" maxlength="250" value=""/><br>
							<p>Enter the college name in which you are studying</p><br>
						
							<label>University Name*</label>
							<input type="text" required="true" name="beuniversity" size="30" maxlength="250" value=""/><br>
							<p>Enter the university to which your college is affiliated</p>	<br>
							
							<label>Year of Completion</label>
							<input type="number" required="true" name="beyear" size="30" maxlength="4" value=""/><br>
							<p>Expected Year of Completion</p><hr>
					</div>
					
						<h5>Class 12 *:</h5>
					<div class="becenter">
						<span>
							<Label><b>Marks Obtained</b></label>
							<input type="number" required="true" name="pumarks" size="5" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;<b>Total Marks</b>
							<input type="number" required="true" name="putotal" size="5" maxlength="10" value=""/><br><br>
					</div>	
					<div class="data">		
							<label>School Name*</label>
							<input type="text" required="true" name="pucollege" size="30" maxlength="250" value=""/><br>
							<p>Enter the school name in which you studied Class 12</p><br>
						
							<label>Board Name*</label>
							<input type="text" required="true" name="puuniversity" size="30" maxlength="250" value=""/><br>
							<p>Enter the board to which your Pre-University college is affiliated</p>
							
							
							<label>Year of Completion</label>
							<input type="number" required="true" name="puyear" size="30" maxlength="4" value=""/><br>
							<p>Year of Completion</p>
						</span><br><hr>
					</div>	
						<h5>10th *:</h5>
						<span>						
					<div class="becenter">	
							<Label><b>Marks Obtained</b></label>
						
							<input type="number" required="true" name="sslc" size="5" maxlength="10" value=""/>&nbsp;&nbsp;&nbsp;<b>Total Marks</b>
							<input type="number" required="true" name="sslctotal" size="5" maxlength="10" value=""/><br><br>
					</div>	
					<div class="data">
							<label>School Name*</label>
							<input type="text" required="true" name="school" size="30" maxlength="250" value=""/>
							<p>Enter the school name in which you studied Class 10</p><br>
							
							<label>Board Name*</label>
							<input type="text" required="true" name="schoolboard" size="30" maxlength="250" value=""/>
							<p>Enter the board to which your Class 10 is affiliated</p>
							
							
							<label>Year of Completion</label>
							<input type="number" name="sslcyear" size="30" maxlength="4" value=""/><br>
							<p>Year of Completion</p>
						</span>	
					</div>
				</li><br>
				<li id="technicalexperience">
				<h3>Technical Experience</h3>
					<h5>Projects:</h5>
					<div class="projects">
						<label>Project Title</label><br>
						<input type="text" name="project1" maxlength="250" value=""/><br>
						<label>Project Description</label>
						<textarea name="project1abstract" maxlength="10000" value=""></textarea><br>
						
						<label>Project Title</label><br>
						<input type="text" name="project2" maxlength="250" value=""/><br>
						<label>Project Description</label>
						<textarea name="project2abstract" maxlength="10000" value=""></textarea><br>
						
						<label>Project Title</label><br>
						<input type="text" name="project3" maxlength="250" value=""/><br>
						<label>Project Description</label><br>
						<textarea name="project3abstract" maxlength="10000" value=""></textarea><br>
						
						<label>Project Title</label><br>
						<input type="text" name="project4" maxlength="250" value=""/><br>
						<label>Project Description</label>
						<textarea name="project4abstract" maxlength="10000" value=""></textarea><br>
					<h5>Publications :</h5>
						1.<input type="text" name="publication1" maxlength="1500" value=""/><br>
						2.<input type="text" name="publication2" maxlength="1500" value=""/><br>
						3.<input type="text" name="publication3" maxlength="1500" value=""/><br>
						4.<input type="text" name="publication4" maxlength="1500" value=""/><br>
					</div>
				</li>
				<li id="technicalskills">
				<h3>Technical Skills</h3>
				<h5>Technical Skills</h5>
				<div class="technicalskills">
					<label>Programming Languages</label>
					<input type="text" name="programming" maxlength="1500" value=""/><br>
					<p>Programming Languages in which you are proficient</p>
					<label>Web Technologies</label>
					<input type="text" name="web" maxlength="1500" value=""/><br>
					<p>Web Technologies in which you are proficient</p>
					<label>Operating Systems</label>
					<input type="text" name="os" maxlength="1500" value=""/><br>
					<p>Operating Systems in which you are proficient</p>
					<label>Skills</label>
					<input type="text" name="tools" maxlength="1500" value=""/><br>
					<p>Please mention other skills(if you don't have a programming profile)</p>
				</div>
				</li>
				<li id="extracurricular">
				<h3>Achievements and Responsibilties</h3>
					<h5>Achievements and Responsibilities</h5>
					
					<div class="projects">
						1.<input type="text" name="extra1" maxlength="1500" value=""/><br>
						2.<input type="text" name="extra2" maxlength="1500" value=""/><br>
						3.<input type="text" name="extra3" maxlength="1500" value=""/><br>
						4.<input type="text" name="extra4" maxlength="1500" value=""/><br>
						5.<input type="text" name="extra5" maxlength="1500" value=""/><br>
					</div>
					
				</li><br>
				<li id="leisurepursuits">
				<h3>Leisure Pursuits</h3>
					<h5>Leisure Pursuits</h5>
					<div class="projects">
						1.<input type="text" name="hobby1" maxlength="1500" value=""/><br>
						2.<input type="text" name="hobby2" maxlength="1500" value=""/><br>
						3.<input type="text" name="hobby3" maxlength="1500" value=""/><br>
						4.<input type="text" name="hobby4" maxlength="1500" value=""/><br>
						5.<input type="text" name="hobby5" maxlength="1500" value=""/><br>
					</div>
				</li><br>
				<li id="personaldetails">
				<h3>Personal Details</h3>
					<h5>Personal Details</h5>
					<div class="data">
					<label>Father's Name</label>
						<input type="text" required="true" name="fathersname" size="30" maxlength="50" value=""/><br>
						<p>Enter Your Father's Name</p><br>
					<label>Mother's Name</label>
						<input type="text" required="true" name="mothersname" size="30" maxlength="50" value=""/><br>
						<p>Enter Your Mother's Name</p><br>
					</div>
					<label>Gender</label>
					<div class="gender">
						<input type="radio" name="gender" value="Male"/>
						<label>Male</label><br>
						<input type="radio" name="gender" value="Female"/>
						<label>Female</label><br><br>
					</div>
					<div class="dob">
						<label>Date Of Birth&nbsp;&nbsp;&nbsp;</label>
						<input type="number" required="true" name="dd" placeholder="dd" style='width:4em' maxlength="2" value=""/>/
						<input type="number" required="true" name="mm" placeholder="mm" style='width:4em' maxlength="2" value=""/>/
						<input type="number" required="true" name="yyyy" placeholder="yyyy" style='width:4em' maxlength="4" value=""/>
					</div>
					<div class="data">
						<label>Nationality</label>
						<input type="text" required="true" name="nationality" size="30" maxlength="50" value=""/><br>
						<p>citizen of?</p>
						
						<label>Marital Status</label>
						<input type="text" required="true" name="maritalstatus" size="30" maxlength="50" value=""/><br>
						<p>Single/Married/...</p>
						
						<label>Languages Known</label>
						<input type="text" name="languagesknown" size="30" maxlength="1000" value=""/><br>
						<p>languages in which you are proficient</p>
					</div>
				</li><br>
				<li id="declaration">
				<h3>Declaration</h3>
					<span>
					<input type="checkbox" required="true" name="declaration" value="I hereby declare that the information furnished above is true to the best of my knowledge and belief"/>
					<label>I hereby declare that the information furnished above is true to the best of my knowledge and belief.</label>
  <br/>
					<label>Please Click on Date or Print Button to get PDF after submiiting this form and entering Password in next page.</label>
						
			</span>
				</li>
				
					  
					<input id="saveForm" class="buttons" type="submit" name="submit" value="Submit" />
				<hr>
			</ol>		
			
			
			<div class="footer">
			Designed & Developed by Ganesh Prasad
			</div>
		</form>
	</div>

</body>
</html>
