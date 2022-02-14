<?php
// include_once "inc/dbconfig.php";

// $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".RECAPTCHA_SECRET_KEY."&response=".$_POST['g-recaptcha-response']);
// $responsekeys = json_decode($response);

// if ($responsekeys->success) {
  $Message = "";

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

  if ($_POST['college'] != "") $Message .= "COLLEGE: " . $_POST['college'] . "\n";
  if ($_POST['collegeaddress'] != "") $Message .= "COLLEGE ADDRESS: " . $_POST['collegeaddress'] . "\n";
  if ($_POST['collegefrom'] != "") $Message .= "COLLEGE FROM: " . $_POST['collegefrom'] . "\n";
  if ($_POST['collegeto'] != "") $Message .= "COLLEGE TO: " . $_POST['collegeto'] . "\n";
  if ($_POST['collegedegree'] != "") $Message .= "COLLEGE DEGREE: " . $_POST['collegedegree'] . "\n";
  if (!empty($_POST['collegegraduate'])) $Message .= "DID YOU GRADUATE?: " . $_POST['collegegraduate'] . "\n";

  $college = "no";
  foreach($_POST as $key => $value) if (strpos($key, "college") === 0) if ($_POST[$key] != "") $college = "yes";
  if ($college == "yes") $Message .= "\n";

  $employment = "no";
  foreach($_POST as $key => $value) if (strpos($key, "employment") === 0) if ($_POST[$key] != "") $employment = "yes";
  if ($employment == "yes") $Message .= "PAST WORK\n";

  if ($_POST['employmentcompany1'] != "") $Message .= "COMPANY: " . $_POST['employmentcompany1'] . "\n";
  if ($_POST['employmentphone1'] != "") $Message .= "PHONE: " . $_POST['employmentphone1'] . "\n";
  if ($_POST['employmentsupervisor1'] != "") $Message .= "SUPERVISOR: " . $_POST['employmentsupervisor1'] . "\n";
  if ($_POST['employmentaddress1'] != "") $Message .= "ADDRESS: " . $_POST['employmentaddress1'] . "\n";
  if ($_POST['employmenttitle1'] != "") $Message .= "JOB TITLE: " . $_POST['employmenttitle1'] . "\n";
  if ($_POST['employmentfrom1'] != "") $Message .= "FROM: " . $_POST['employmentfrom1'] . "\n";
  if ($_POST['employmentto1'] != "") $Message .= "TO: " . $_POST['employmentto1'] . "\n";
  if (!empty($_POST['empcontact1'])) $Message .= "CAN WE CONTACT YOUR SUPERVISOR?: " . $_POST['empcontact1'] . "\n";
  if ($_POST['employmentstartingsalary1'] != "") $Message .= "STARTING SALARY: " . $_POST['employmentstartingsalary1'] . "\n";
  if ($_POST['employmentendingsalary1'] != "") $Message .= "ENDING SALARY: " . $_POST['employmentendingsalary1'] . "\n";
  if ($_POST['employmentleaving1'] != "") $Message .= "REASON FOR LEAVING: " . $_POST['employmentleaving1'] . "\n";
  if ($_POST['employmentreponsibilities1'] != "") $Message .= "RESPONSIBILITIES:\n" . $_POST['employmentreponsibilities1'] . "\n";

  if ($employment == "yes") $Message .= "\n";

  $references = "no";
  foreach($_POST as $key => $value) if (strpos($key, "ref") === 0) if ($_POST[$key] != "") $references = "yes";
  if ($references == "yes") $Message .= "REFERENCES\n";

  if ($_POST['refname1'] != "") $Message .= "NAME: " . $_POST['refname1'] . "\n";
  if ($_POST['refposition1'] != "") $Message .= "POSITION: " . $_POST['refposition1'] . "\n";
  if ($_POST['refcompany1'] != "") $Message .= "COMPANY: " . $_POST['refcompany1'] . "\n";
  if ($_POST['refaddress1'] != "") $Message .= "ADDRESS: " . $_POST['refaddress1'] . "\n";
  if ($_POST['refphone1'] != "") $Message .= "PHONE: " . $_POST['refphone1'] . "\n";

  if ($references == "yes") $Message .= "\n";

  if ($_POST['refname2'] != "") $Message .= "NAME: " . $_POST['refname2'] . "\n";
  if ($_POST['refposition2'] != "") $Message .= "POSITION: " . $_POST['refposition2'] . "\n";
  if ($_POST['refcompany2'] != "") $Message .= "COMPANY: " . $_POST['refcompany2'] . "\n";
  if ($_POST['refaddress2'] != "") $Message .= "ADDRESS: " . $_POST['refaddress2'] . "\n";
  if ($_POST['refphone2'] != "") $Message .= "PHONE: " . $_POST['refphone2'] . "\n";

  if ($references == "yes") $Message .= "\n";

  $Message .= "\n\n";

  $Message = stripslashes($Message);

  require_once "inc/swiftmailer/swift_required.php";

  $sm = Swift_Message::newInstance();
  $sm->setTo(array("lippert@gmail.com"));
  $sm->setBcc(array("foresitegroupllc@gmail.com"));
  $sm->setFrom(array("donotreply@parksedgepreschool.com" => "Application Form"));
  $sm->setReplyTo($_POST['email']);
  $sm->setSubject("Application");

  if ($_FILES['resume']['tmp_name'] != "") $sm->attach(Swift_Attachment::fromPath($_FILES['resume']['tmp_name'])->setFilename($_FILES['resume']['name']));

  $sm->setBody($Message);

  // Create the Transport and Mailer
  $transport = Swift_MailTransport::newInstance();
  $mailer = Swift_Mailer::newInstance($transport);
  
  // Send it!
  $result = $mailer->send($sm);

  echo "Thank you for your application.";
// }
?>