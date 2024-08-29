<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'inc/PHPMailer/Exception.php';
require 'inc/PHPMailer/PHPMailer.php';
require 'inc/PHPMailer/SMTP.php';

include_once "inc/dbconfig.php";

if ($_POST['username'] == "") {
  $mail = new PHPMailer(true);

  $mail->SMTPAuth = true;
  $mail->Username = SMTP_USER;
  $mail->Password = SMTP_PASS;
  $mail->Host = SMTP_HOST;
  $mail->Port = SMTP_PORT;

  $mail->setFrom(SMTP_USER, 'Application Form');
  $mail->addAddress('hello@parksedgepreschool.com');
  $mail->addBCC('foresitegroupllc@gmail.com');
  $mail->addReplyTo($_POST['email']);
  $mail->Subject = 'Application';

  $Message = "";
  
  $allowed = array("pdf","docx","txt");
  if ($_FILES['resume']['tmp_name'] != "") {
    if (in_array(strtolower(pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION)), $allowed)) {
      $mail->addAttachment($_FILES['resume']['tmp_name'], $_FILES['resume']['name']);
    }
  }

  if ($_POST['firstname'] != "") $Message .= "FIRST NAME: " . $_POST['firstname'] . "\n";
  if ($_POST['lastname'] != "") $Message .= "LAST NAME: " . $_POST['lastname'] . "\n";
  if ($_POST['mi'] != "") $Message .= "MIDDLE INITIAL: " . $_POST['mi'] . "\n";

  if ($_POST['firstname'] != "" || $_POST['lastname'] != "" || $_POST['mi'] != "") $Message .= "\n";

  if ($_POST['address'] != "") $Message .= "ADDRESS: " . $_POST['address'] . "\n";
  if ($_POST['city'] != "") $Message .= "CITY: " . $_POST['city'] . "\n";
  if ($_POST['state'] != "") $Message .= "STATE: " . $_POST['state'] . "\n";
  if ($_POST['zip'] != "") $Message .= "ZIP CODE: " . $_POST['zip'] . "\n";

  if ($_POST['address'] != "" || $_POST['city'] != "" || $_POST['state'] != "" || $_POST['zip'] != "") $Message .= "\n";

  if ($_POST['phone'] != "") $Message .= "PHONE: " . $_POST['phone'] . "\n";
  if ($_POST['email'] != "") $Message .= "EMAIL: " . $_POST['email'] . "\n";

  if ($_POST['phone'] != "" || $_POST['email'] != "") $Message .= "\n";

  if (!empty($_POST['age'])) $Message .= "ARE YOU AT LEAST 18 YEARS OLD?: " . $_POST['age'] . "\n\n";

  if (!empty($_POST['citizen'])) $Message .= "ARE YOU A CITIZEN OF THE UNITED STATES?: " . $_POST['citizen'] . "\n";
  if (!empty($_POST['authorized'])) $Message .= "ARE YOU LEGALLY AUTHORIZED TO WORK IN THE US?: " . $_POST['authorized'] . "\n";

  if (!empty($_POST['citizen']) || !empty($_POST['authorized'])) $Message .= "\n";

  if ($_POST['referred'] != "") $Message .= "HOW WERE YOU REFERRED TO PARK'S EDGE?: " . $_POST['referred'] . "\n\n";

  if ($_POST['education'] != "") $Message .= "WHAT IS YOUR HIGHEST FORM OF EDUCATION?: " . $_POST['education'] . "\n\n";

  if (!empty($_POST['wage'])) $Message .= "HOURLY WAGE DESIRED: " . $_POST['wage'] . "\n";
  if (!empty($_POST['employmentdesired'])) $Message .= "EMPLOYMENT DESIRED: " . $_POST['employmentdesired'] . "\n";
  if (!empty($_POST['availability'])) $Message .= "AVAILABILITY: " . $_POST['availability'] . "\n";
  if (!empty($_POST['datestart'])) $Message .= "DATE AVAILABLE TO START: " . $_POST['datestart'] . "\n";

  if (!empty($_POST['wage']) || !empty($_POST['employmentdesired']) || !empty($_POST['availability']) || !empty($_POST['datestart'])) $Message .= "\n";

  if (isset($_POST['abletoperform'])) $Message .= "ARE YOU ABLE TO PERFORM THE ESSENTIAL FUNCTIONS OF THE POSITION YOU ARE APPLYING FOR?: " . $_POST['education'] . "\n\n";
  
  $college = "no";
  foreach($_POST as $key => $value) if (strpos($key, "college") === 0) if ($_POST[$key] != "") $college = "yes";

  if ($college == "yes") $Message .= "EDUCATION\n";

  if ($_POST['college'] != "") $Message .= "COLLEGE: " . $_POST['college'] . "\n";
  if ($_POST['collegeaddress'] != "") $Message .= "COLLEGE ADDRESS: " . $_POST['collegeaddress'] . "\n";
  if ($_POST['collegefrom'] != "") $Message .= "COLLEGE FROM: " . $_POST['collegefrom'] . "\n";
  if ($_POST['collegeto'] != "") $Message .= "COLLEGE TO: " . $_POST['collegeto'] . "\n";
  if ($_POST['collegedegree'] != "") $Message .= "COLLEGE DEGREE: " . $_POST['collegedegree'] . "\n";
  if (!empty($_POST['collegegraduate'])) $Message .= "DID YOU GRADUATE?: " . $_POST['collegegraduate'] . "\n";
  
  if ($college == "yes") $Message .= "\n";

  if (isset($_POST['wiregistry'])) $Message .= "ARE YOU CURRENTLY ON THE WISCONSIN REGISTRY?: " . $_POST['wiregistry'] . "\n";
  if ($_POST['wiregistryylevel'] != "") $Message .= "I am at level " . $_POST['wiregistryylevel'] . "\n";
  if (!empty($_POST['wiregistry']) || !empty($_POST['wiregistryylevel'])) $Message .= "\n";

  if (!empty($_POST['othertraining'])) $Message .= "PLEASE LIST AND EXPLAIN ANY OTHER TRAINING/EDUCATION YOU HAVE RELATED TO EARLY CHILDHOOD EDUCATION\n" . $_POST['othertraining'] . "\n\n";

  $employment = "no";
  foreach($_POST as $key => $value) if (strpos($key, "employment") === 0) if ($_POST[$key] != "") $employment = "yes";
  if ($employment == "yes") $Message .= "PAST WORK\n";

  if ($_POST['employmentcompany1'] != "") $Message .= "COMPANY [1]: " . $_POST['employmentcompany1'] . "\n";
  if ($_POST['employmentphone1'] != "") $Message .= "PHONE [1]: " . $_POST['employmentphone1'] . "\n";
  if ($_POST['employmentsupervisor1'] != "") $Message .= "SUPERVISOR [1]: " . $_POST['employmentsupervisor1'] . "\n";
  if ($_POST['employmentaddress1'] != "") $Message .= "ADDRESS [1]: " . $_POST['employmentaddress1'] . "\n";
  if ($_POST['employmenttitle1'] != "") $Message .= "JOB TITLE [1]: " . $_POST['employmenttitle1'] . "\n";
  if ($_POST['employmentfrom1'] != "") $Message .= "FROM [1]: " . $_POST['employmentfrom1'] . "\n";
  if ($_POST['employmentto1'] != "") $Message .= "TO [1]: " . $_POST['employmentto1'] . "\n";
  if (!empty($_POST['empcontact1'])) $Message .= "CAN WE CONTACT YOUR SUPERVISOR? [1]: " . $_POST['empcontact1'] . "\n";
  if ($_POST['employmentstartingsalary1'] != "") $Message .= "STARTING SALARY [1]: " . $_POST['employmentstartingsalary1'] . "\n";
  if ($_POST['employmentendingsalary1'] != "") $Message .= "ENDING SALARY [1]: " . $_POST['employmentendingsalary1'] . "\n";
  if ($_POST['employmentleaving1'] != "") $Message .= "REASON FOR LEAVING [1]: " . $_POST['employmentleaving1'] . "\n";
  if ($_POST['employmentreponsibilities1'] != "") $Message .= "RESPONSIBILITIES [1]:\n" . $_POST['employmentreponsibilities1'] . "\n";

  if ($employment == "yes") $Message .= "\n";

  if ($_POST['employmentcompany2'] != "") $Message .= "COMPANY [2]: " . $_POST['employmentcompany2'] . "\n";
  if ($_POST['employmentphone2'] != "") $Message .= "PHONE [2]: " . $_POST['employmentphone2'] . "\n";
  if ($_POST['employmentsupervisor2'] != "") $Message .= "SUPERVISOR [2]: " . $_POST['employmentsupervisor2'] . "\n";
  if ($_POST['employmentaddress2'] != "") $Message .= "ADDRESS [2]: " . $_POST['employmentaddress2'] . "\n";
  if ($_POST['employmenttitle2'] != "") $Message .= "JOB TITLE [2]: " . $_POST['employmenttitle2'] . "\n";
  if ($_POST['employmentfrom2'] != "") $Message .= "FROM [2]: " . $_POST['employmentfrom2'] . "\n";
  if ($_POST['employmentto2'] != "") $Message .= "TO [2]: " . $_POST['employmentto2'] . "\n";
  if (!empty($_POST['empcontact2'])) $Message .= "CAN WE CONTACT YOUR SUPERVISOR? [2]: " . $_POST['empcontact2'] . "\n";
  if ($_POST['employmentstartingsalary2'] != "") $Message .= "STARTING SALARY [2]: " . $_POST['employmentstartingsalary2'] . "\n";
  if ($_POST['employmentendingsalary2'] != "") $Message .= "ENDING SALARY [2]: " . $_POST['employmentendingsalary2'] . "\n";
  if ($_POST['employmentleaving2'] != "") $Message .= "REASON FOR LEAVING [2]: " . $_POST['employmentleaving2'] . "\n";
  if ($_POST['employmentreponsibilities2'] != "") $Message .= "RESPONSIBILITIES [2]:\n" . $_POST['employmentreponsibilities2'] . "\n";

  if ($employment == "yes") $Message .= "\n";

  if ($_POST['employmentcompany3'] != "") $Message .= "COMPANY [3]: " . $_POST['employmentcompany3'] . "\n";
  if ($_POST['employmentphone3'] != "") $Message .= "PHONE [3]: " . $_POST['employmentphone3'] . "\n";
  if ($_POST['employmentsupervisor3'] != "") $Message .= "SUPERVISOR [3]: " . $_POST['employmentsupervisor3'] . "\n";
  if ($_POST['employmentaddress3'] != "") $Message .= "ADDRESS [3]: " . $_POST['employmentaddress3'] . "\n";
  if ($_POST['employmenttitle3'] != "") $Message .= "JOB TITLE [3]: " . $_POST['employmenttitle3'] . "\n";
  if ($_POST['employmentfrom3'] != "") $Message .= "FROM [3]: " . $_POST['employmentfrom3'] . "\n";
  if ($_POST['employmentto3'] != "") $Message .= "TO [3]: " . $_POST['employmentto3'] . "\n";
  if (!empty($_POST['empcontact3'])) $Message .= "CAN WE CONTACT YOUR SUPERVISOR? [3]: " . $_POST['empcontact3'] . "\n";
  if ($_POST['employmentstartingsalary3'] != "") $Message .= "STARTING SALARY [3]: " . $_POST['employmentstartingsalary3'] . "\n";
  if ($_POST['employmentendingsalary3'] != "") $Message .= "ENDING SALARY [3]: " . $_POST['employmentendingsalary3'] . "\n";
  if ($_POST['employmentleaving3'] != "") $Message .= "REASON FOR LEAVING [3]: " . $_POST['employmentleaving3'] . "\n";
  if ($_POST['employmentreponsibilities3'] != "") $Message .= "RESPONSIBILITIES [3]:\n" . $_POST['employmentreponsibilities3'] . "\n";

  if ($employment == "yes") $Message .= "\n";

  if (!empty($_POST['relevantexperiences'])) $Message .= "OTHER RELEVANT EXPERIENCES. PLEASE PROVIDE AS MANY DETAILS AS POSSIBLE INCLUDING NAMES, LOCATION, DATES, ETC.\n" . $_POST['relevantexperiences'] . "\n\n";

  $references = "no";
  foreach($_POST as $key => $value) if (strpos($key, "ref") === 0) if ($_POST[$key] != "") $references = "yes";
  if ($references == "yes") $Message .= "REFERENCES\n";

  if ($_POST['refname1'] != "") $Message .= "NAME [1]: " . $_POST['refname1'] . "\n";
  if ($_POST['refposition1'] != "") $Message .= "POSITION [1]: " . $_POST['refposition1'] . "\n";
  if ($_POST['refcompany1'] != "") $Message .= "COMPANY [1]: " . $_POST['refcompany1'] . "\n";
  if ($_POST['refaddress1'] != "") $Message .= "ADDRESS [1]: " . $_POST['refaddress1'] . "\n";
  if ($_POST['refphone1'] != "") $Message .= "PHONE [1]: " . $_POST['refphone1'] . "\n";

  if ($references == "yes") $Message .= "\n";

  if ($_POST['refname2'] != "") $Message .= "NAME [2]: " . $_POST['refname2'] . "\n";
  if ($_POST['refposition2'] != "") $Message .= "POSITION [2]: " . $_POST['refposition2'] . "\n";
  if ($_POST['refcompany2'] != "") $Message .= "COMPANY [2]: " . $_POST['refcompany2'] . "\n";
  if ($_POST['refaddress2'] != "") $Message .= "ADDRESS [2]: " . $_POST['refaddress2'] . "\n";
  if ($_POST['refphone2'] != "") $Message .= "PHONE [2]: " . $_POST['refphone2'] . "\n";

  if ($references == "yes") $Message .= "\n";

  if ($_POST['refname3'] != "") $Message .= "NAME [3]: " . $_POST['refname3'] . "\n";
  if ($_POST['refposition3'] != "") $Message .= "POSITION [3]: " . $_POST['refposition3'] . "\n";
  if ($_POST['refcompany3'] != "") $Message .= "COMPANY [3]: " . $_POST['refcompany3'] . "\n";
  if ($_POST['refaddress3'] != "") $Message .= "ADDRESS [3]: " . $_POST['refaddress3'] . "\n";
  if ($_POST['refphone3'] != "") $Message .= "PHONE [3]: " . $_POST['refphone3'] . "\n";

  if ($references == "yes") $Message .= "\n";

  if (!empty($_POST['additionalinformation'])) $Message .= "PLEASE SHARE WITH US ANY ADDITIONAL INFORMATION ABOUT YOURSELF THAT YOU WOULD LIKE US TO TAKE INTO CONSIDERATION WHEN REVIEWING YOUR APPLICATION.\n" . $_POST['additionalinformation'] . "\n\n";

  if (isset($_POST['infoaccurate'])) $Message .= $_POST['infoaccurate']."\n\n";
  if (isset($_POST['authorize'])) $Message .= $_POST['authorize']."\n\n";
  if (isset($_POST['drugfree'])) $Message .= $_POST['drugfree']."\n\n";
  if (isset($_POST['misrepresentation'])) $Message .= $_POST['misrepresentation']."\n\n";
  if (isset($_POST['atwill'])) $Message .= $_POST['atwill']."\n\n";
  if (isset($_POST['placedsig'])) $Message .= $_POST['placedsig']."\n\n";

  if ($_POST['signature'] != "") $Message .= "ELECTRONIC SIGNATURE: " . $_POST['signature'] . "\n";
  if ($_POST['todaysdate'] != "") $Message .= "TODAY'S DATE: " . $_POST['todaysdate'] . "\n";

  $Message .= "\n\n";

  $Message = stripslashes($Message);

  $mail->Body = $Message;

  $mail->send();

  $feedback = "Thank you for your application.";
}

echo $feedback;
?>