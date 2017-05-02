$("#btnNext1").click(function() {getData1();});
$("#btnNext2").click(function() {getData2();});
$("#btnNext3").click(function() {getData3();});

function getData1()
{
	var date = $('#date').val();
	var name = $('#name').val();
	var currentGrade = $('#currentGrade').val();
	var dateOfBirth = $('#dateOfBirth').val();
	var age = $('#age').val();
	var homeNumber = $('#homeNumber').val();
	var cellNumber = $('#cellNumber').val();
	var addressStreet = $('#addressStreet').val();
	var addressCity = $('#addressCity').val();
	var addressState = $('#addressState').val();
	var motherName = $('#motherName').val();
	var fatherName = $('#fatherName').val();
	var parentAddressStreet = $('#parentAddressStreet').val();
	var parentAddressCity = $('#parentAddressCity').val();
	var parentAddressState = $('#parentAddressState').val();
	var height = $('#height').val();
	var weight = $('#weight').val();
	var wearGlasses = $('#wearGlasses').val();
	var physicalHandicaps = $('#physicalHandicaps').val();
	
	
	$.post("sendData.php", {date: date, name: name, currentGrade: currentGrade, dateOfBirth: dateOfBirth, age: age, homeNumber: homeNumber, cellNumber: cellNumber, addressStreet: addressStreet, addressCity: addressCity, addressState: addressState, motherName: motherName, fatherName: fatherName, parentAddressStreet: parentAddressStreet, parentAddressCity: parentAddressCity, parentAddressState: parentAddressState, height: height, weight: weight, wearGlasses: wearGlasses, physicalHandicaps: physicalHandicaps}, function(data)																						 																																																																																																																																																																																																																																																																																																										    {																																																																																																																																					
		location.replace('index2.php');	
	});
}

function getData2()
{
	var technicalSchool = $('#technicalSchool').val();
	var college = $('#college').val();
	var businessSchool = $('#businessSchool').val();
	var work = $('#work').val();
	var other = $('#other').val();
	var careerInterest1 = $('#careerInterest1').val();
	var careerReason1 = $('#careerReason1').val();
	var careerInterest2 = $('#careerInterest2').val();
	var careerReason2 = $('#careerReason2').val();
	var transportation = $('#transportation').val();
	
	
	$.post("updateData.php", {technicalSchool: technicalSchool, college: college, businessSchool: businessSchool, work: work, other: other, careerInterest1: careerInterest1, careerReason1: careerReason1, careerInterest2: careerInterest2, careerReason2: careerReason2, transportation: transportation}, function(data)
			
	{						
		location.replace('index3.php');		
	});
}

function getData3()
{
	var person1 = $('#person1').val();
	var relationship1 = $('#relationship1').val();
	var workPhone1 = $('#workPhone1').val();
	var homePhone1 = $('#homePhone1').val();
	var person2 = $('#person2').val();
	var relationship2 = $('#relationship2').val();
	var workPhone2 = $('#workPhone2').val();
	var homePhone2 = $('#homePhone2').val();
	var company1 = $('#company1').val();
	var jobDuties1 = $('#jobDuties1').val(); 
	var datesWorked1 = $('#datesWorked1').val();
	var company2 = $('#company2').val();
	var jobDuties2 = $('#jobDuties2').val(); 
	var datesWorked2 = $('#datesWorked2').val();
	var company3 = $('#company3').val();
	var jobDuties3 = $('#jobDuties3').val(); 
	var datesWorked3 = $('#datesWorked3').val();
	var paragraph = $('#paragraph').val();
	
	$.post("updateData2.php", {person1: person1, relationship1: relationship1, workPhone1: workPhone1, homePhone1: homePhone1, person2: person2, relationship2: relationship2, workPhone2: workPhone2, homePhone2: homePhone2, company1: company1, jobDuties1: jobDuties1, datesWorked1: datesWorked1, company2: company2, jobDuties2: jobDuties2, datesWorked2: datesWorked2, company3: company3, jobDuties3: jobDuties3, datesWorked3: datesWorked3, paragraph: paragraph}, function(data)
	
	{							
		location.replace('confirm.php');																	   																											   	});								
}