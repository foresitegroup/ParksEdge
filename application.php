<?php
$PageTitle = "Application";
include "header.php";
?>

<link rel="stylesheet" href="inc/jquery.fancybox.min.css">
<script src="inc/jquery.fancybox.min.js"></script>

<div class="banner" style="background-image: url(images/banner-about.jpg);">
  <div class="site-width big">
    Join Our Team at Park's Edge
  </div>

  <div class="torn-header-white"></div>
</div>

<div class="site-width application">
  <div class="center">
    Please fill in the online application. Please fill all required boxes.<br>
    Please allow 2 business days for a response.<br>
    <br>

    Please note, information entered by you on the application page is not kept. If you leave the page you will have to reenter the information. before submitting.
  </div>

  <form action="form-application.php" method="POST" enctype="multipart/form-data" id="application" novalidate>
    <h2>Park's Edge Preschool Application</h2>

    <div id="page1">
      <div class="upload">
        <input type="file" name="resume">
        <button>Upload Resume <span>(PDF or DOCX files)</span></button>
      </div>

      <br><br><br>

      <span class="required">*</span> = Required Item
      <br><br>

      <div class="flex pi name">
        <label>
          First Name <span class="required">*</span>
          <input type="text" name="firstname" required>
        </label>

        <label>
          Last Name <span class="required">*</span>
          <input type="text" name="lastname" required>
        </label>

        <label class="mi">
          M.I. <span class="required">*</span>
          <input type="text" name="mi" required>
        </label>
      </div>

      <div class="flex pi address">
        <label>
          Address <span class="required">*</span>
          <input type="text" name="address" required>
        </label>

        <label class="city">
          City <span class="required">*</span>
          <input type="text" name="city" required>
        </label>

        <label class="state">
          State <span class="required">*</span>
          <input type="text" name="state" required>
        </label>

        <label class="zip">
          Zip Code <span class="required">*</span>
          <input type="text" name="zip" required>
        </label>
      </div>

      <div class="flex pi contact">
        <label class="phone">
          Phone <span class="required">*</span>
          <input type="tel" name="phone" required>
        </label>

        <label class="email">
          Email <span class="required">*</span>
          <input type="email" name="email" required>
        </label>

        <div class="radio age" id="age">
          Are you at least 18 years old? <span class="required">*</span>
          <div class="note"></div>

          <input type="radio" name="age" value="Yes" id="agey"><label for="agey">Yes</label>
          &nbsp; &nbsp; &nbsp;
          <input type="radio" name="age" value="No" id="agen"><label for="agen">No</label>
        </div>
      </div>

      <br>

      <div class="flex">
        <div id="citizen" class="radio">
          Are you a citizen of the United States? <span class="required">*</span>
          <div class="note"></div>

          <input type="radio" name="citizen" value="Yes" id="citizeny"><label for="citizeny">Yes</label>
          &nbsp; &nbsp; &nbsp;
          <input type="radio" name="citizen" value="No" id="citizenn"><label for="citizenn">No</label>
        </div>

        <div id="authorized" class="radio">
          Are you legally authorized to work in the US? <span class="required">*</span>
          <div class="note">If hired, you will be required to provide proof of work authorization.</div>

          <input type="radio" name="authorized" value="Yes" id="authorizedy"><label for="authorizedy">Yes</label>
          &nbsp; &nbsp; &nbsp;
          <input type="radio" name="authorized" value="No" id="authorizedn"><label for="authorizedn">No</label>
        </div>
      </div>

      <br><br>

      <div class="flex">
        <label>
          How were you referred to Park's Edge?
          <input type="text" name="referred">
        </label>

        <label id="education">
          What is your highest form of education? <span class="required">*</span>
          <select name="education">
            <option value="">Select...</option>
            <option value="Grade School">Grade School</option>
            <option value="Some High School">Some High School</option>
            <option value="High School or Equivalent">High School or Equivalent</option>
            <option value="Certification or Vocational">Certification or Vocational</option>
            <option value="Some College">Some College</option>
            <option value="Associate Degree">Associate Degree</option>
            <option value="Bachelor's Degree">Bachelor's Degree</option>
            <option value="Master's Degree">Master's Degree</option>
            <option value="Doctorate">Doctorate</option>
          </select>
        </label>
      </div>

      <br>

      <div class="flex">
        <label>
          Hourly wage desired
          <input type="text" name="wage">
        </label>

        <label>
          Employment desired
          <input type="text" name="employmentdesired">
        </label>

        <label>
          Availability
          <input type="text" name="availability">
        </label>

        <label>
          Date available to start
          <input type="text" name="datestart">
        </label>
      </div>

      <br>

      <div id="abletoperform" class="radio fullwidth">
        <strong>Are you able to perform the essential functions of the position you are applying for?</strong>
        <div class="note"> We comply with the Americans with Disabilities Act and consider reasonable accommodation measures that may be necessary for eligible applicants to perform essential functions.</div>

        <input type="radio" name="abletoperform" value="Yes" id="abletoperformy"><label for="abletoperformy">Yes</label>
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="abletoperform" value="No" id="abletoperformn"><label for="abletoperformn">No</label>
      </div>

      <br><br>

      <h2>Education</h2>
      <div class="flex">
        <label class="school">
          College<br>
          <input type="text" name="college">
        </label>

        <label class="address">
          Address<br>
          <input type="text" name="collegeaddress">
        </label>

        <label class="from">
          From<br>
          <input type="text" name="collegefrom">
        </label>

        <label class="to">
          To<br>
          <input type="text" name="collegeto">
        </label>
      </div>

      <div class="flex">
        <label class="degree">
          Degree<br>
          <input type="text" name="collegedegree">
        </label>

        <div class="radio graduate">
          Did You Graduate?
          <div class="note"></div>

          <input type="radio" name="collegegraduate" value="Yes" id="collegegraduatey"><label for="collegegraduatey">Yes</label>
          &nbsp; &nbsp; &nbsp;
          <input type="radio" name="collegegraduate" value="No" id="collegegraduaten"><label for="collegegraduaten">No</label>
        </div>
      </div>

      <br>

      <div id="wiregistry" class="radio fullwidth">
        Are you currently on The Wisconsin Registry?
        <div class="note"></div>

        <input type="radio" name="wiregistry" value="Yes" id="wiregistryy"><label for="wiregistryy">Yes, I am at level</label>
        <input type="text" name="wiregistryylevel" id="wiregistryylevel">
        &nbsp; &nbsp; &nbsp;
        <input type="radio" name="wiregistry" value="No" id="wiregistryn"><label for="wiregistryn">No</label>
      </div>

      <label>
        Please list and explain any other training/education you have related to Early Childhood Education
        <textarea name="othertraining"></textarea>
      </label>

      <br><br>

      <div class="nav">
        <div class="pager">
          <span class="active"></span>
          <span></span>
          <span></span>
        </div>

        <a href="#" class="submit topage2">Next Page</a><br>

        Page 1/3
      </div> <!-- /.nav -->
    </div> <!-- /#page1 -->

    <div id="page2" class="hidden">
      <br><br>

      <h2>Employer #1</h2>
      <div class="flex">
        <label class="empcompany">
          Company<br>
          <input type="text" name="employmentcompany1">
        </label>

        <label class="empphone">
          Phone<br>
          <input type="tel" name="employmentphone1">
        </label>

        <label class="empsupervisor">
          Supervisor<br>
          <input type="text" name="employmentsupervisor1">
        </label>
      </div>

      <div class="flex">
        <label class="empaddress">
          Address<br>
          <input type="text" name="employmentaddress1">
        </label>

        <label class="emptitle">
          Job Title<br>
          <input type="text" name="employmenttitle1">
        </label>

        <label class="empfrom">
          From<br>
          <input type="text" name="employmentfrom1">
        </label>

        <label class="empto">
          To<br>
          <input type="text" name="employmentto1">
        </label>
      </div>

      <div class="flex">
        <div class="radio empcontact">
          Can We Contact Your Supervisor?
          <div class="note"></div>

          <input type="radio" name="empcontact1" value="Yes" id="empcontact1y"><label for="empcontact1y">Yes</label>
          &nbsp; &nbsp; &nbsp;
          <input type="radio" name="empcontact1" value="No" id="empcontact1n"><label for="empcontact1n">No</label>
        </div>

        <label class="empsalary">
          Starting Salary<br>
          <input type="text" name="employmentstartingsalary1">
        </label>

        <label class="empsalary">
          Ending Salary<br>
          <input type="text" name="employmentendingsalary1">
        </label>
      </div>

      <label class="empleaving">
        Reason for Leaving?
        <input type="text" name="employmentleaving1">
      </label>

      <label>
        Responsibilities
        <textarea name="employmentreponsibilities1"></textarea>
      </label>

      <br><br>

      <h2>Employer #2</h2>
      <div class="flex">
        <label class="empcompany">
          Company<br>
          <input type="text" name="employmentcompany2">
        </label>

        <label class="empphone">
          Phone<br>
          <input type="tel" name="employmentphone2">
        </label>

        <label class="empsupervisor">
          Supervisor<br>
          <input type="text" name="employmentsupervisor2">
        </label>
      </div>

      <div class="flex">
        <label class="empaddress">
          Address<br>
          <input type="text" name="employmentaddress2">
        </label>

        <label class="emptitle">
          Job Title<br>
          <input type="text" name="employmenttitle2">
        </label>

        <label class="empfrom">
          From<br>
          <input type="text" name="employmentfrom2">
        </label>

        <label class="empto">
          To<br>
          <input type="text" name="employmentto2">
        </label>
      </div>

      <div class="flex">
        <div class="radio empcontact">
          Can We Contact Your Supervisor?
          <div class="note"></div>

          <input type="radio" name="empcontact2" value="Yes" id="empcontact2y"><label for="empcontact2y">Yes</label>
          &nbsp; &nbsp; &nbsp;
          <input type="radio" name="empcontact2" value="No" id="empcontact2n"><label for="empcontact2n">No</label>
        </div>

        <label class="empsalary">
          Starting Salary<br>
          <input type="text" name="employmentstartingsalary2">
        </label>

        <label class="empsalary">
          Ending Salary<br>
          <input type="text" name="employmentendingsalary2">
        </label>
      </div>

      <label class="empleaving">
        Reason for Leaving?
        <input type="text" name="employmentleaving2">
      </label>

      <label>
        Responsibilities
        <textarea name="employmentreponsibilities2"></textarea>
      </label>

      <br><br>

      <h2>Employer #3</h2>
      <div class="flex">
        <label class="empcompany">
          Company<br>
          <input type="text" name="employmentcompany3">
        </label>

        <label class="empphone">
          Phone<br>
          <input type="tel" name="employmentphone3">
        </label>

        <label class="empsupervisor">
          Supervisor<br>
          <input type="text" name="employmentsupervisor3">
        </label>
      </div>

      <div class="flex">
        <label class="empaddress">
          Address<br>
          <input type="text" name="employmentaddress3">
        </label>

        <label class="emptitle">
          Job Title<br>
          <input type="text" name="employmenttitle3">
        </label>

        <label class="empfrom">
          From<br>
          <input type="text" name="employmentfrom3">
        </label>

        <label class="empto">
          To<br>
          <input type="text" name="employmentto3">
        </label>
      </div>

      <div class="flex">
        <div class="radio empcontact">
          Can We Contact Your Supervisor?
          <div class="note"></div>

          <input type="radio" name="empcontact3" value="Yes" id="empcontact3y"><label for="empcontact3y">Yes</label>
          &nbsp; &nbsp; &nbsp;
          <input type="radio" name="empcontact3" value="No" id="empcontact3n"><label for="empcontact3n">No</label>
        </div>

        <label class="empsalary">
          Starting Salary<br>
          <input type="text" name="employmentstartingsalary3">
        </label>

        <label class="empsalary">
          Ending Salary<br>
          <input type="text" name="employmentendingsalary3">
        </label>
      </div>

      <label class="empleaving">
        Reason for Leaving?
        <input type="text" name="employmentleaving3">
      </label>

      <label>
        Responsibilities
        <textarea name="employmentreponsibilities3"></textarea>
      </label>

      <br><br>

      <label>
        Other relevant experiences. Please provide as many details as possible including names, location, dates, etc.
        <textarea name="relevantexperiences"></textarea>
      </label>

      <br><br>

      <div class="nav">
        <div class="pager">
          <a href="#" class="topage1"></a>
          <span class="active"></span>
          <span></span>
        </div>

        <a href="#" class="submit topage3">Next Page</a><br>

        Page 2/3
      </div> <!-- /.nav -->
    </div> <!-- /#page2 -->

    <div id="page3" class="hidden">
      <br><br>

      <h2>References</h2>
      <div class="flex">
        <label class="refname">
          Name
          <input type="text" name="refname1">
        </label>

        <label class="refposition">
          Position
          <input type="text" name="refposition1">
        </label>

        <label class="refcompany">
          Company
          <input type="text" name="refcompany1">
        </label>
      </div>

      <div class="flex">
        <label class="refaddress">
          Address
          <input type="text" name="refaddress1">
        </label>

        <label class="refphone">
          Phone
          <input type="tel" name="refphone1">
        </label>

        <h2>Reference #1</h2>
      </div>

      <br>

      <div class="flex">
        <label class="refname">
          Name
          <input type="text" name="refname2">
        </label>

        <label class="refposition">
          Position
          <input type="text" name="refposition2">
        </label>

        <label class="refcompany">
          Company
          <input type="text" name="refcompany2">
        </label>
      </div>

      <div class="flex">
        <label class="refaddress">
          Address
          <input type="text" name="refaddress2">
        </label>

        <label class="refphone">
          Phone
          <input type="tel" name="refphone2">
        </label>

        <h2>Reference #2</h2>
      </div>

      <br>

      <div class="flex">
        <label class="refname">
          Name
          <input type="text" name="refname3">
        </label>

        <label class="refposition">
          Position
          <input type="text" name="refposition3">
        </label>

        <label class="refcompany">
          Company
          <input type="text" name="refcompany3">
        </label>
      </div>

      <div class="flex">
        <label class="refaddress">
          Address
          <input type="text" name="refaddress3">
        </label>

        <label class="refphone">
          Phone
          <input type="tel" name="refphone3">
        </label>

        <h2>Reference #3</h2>
      </div>

      <br><br>

      <label>
        Please share with us any additional information about yourself that you would like us to take into consideration when reviewing your application.
        <textarea name="additionalinformation"></textarea>
      </label>

      <br><br>

      <h2>Applicant's Statement</h2>

      <div id="appcheckboxesnote">
        <span class="required">*</span> By checking each box you are agreeing to the statements below.
      </div>

      <br>

      <div id="appcheckboxes">
        <div>
          <input type="checkbox" name="infoaccurate" value="The information that I have provided on this application is accurate to the best of my knowledge and may be verified by Park's Edge Preschool representatives." id="infoaccurate"><label for="infoaccurate">
            The information that I have provided on this application is accurate to the best of my knowledge and may be verified by Park's Edge Preschool representatives.
          </label>

          <br><br>

          <input type="checkbox" name="authorize" value="I authorize all the schools, persons and organizations named in this application to provide any relevant information in their possession or knowledge to the agents of Park's Edge Preschool, for use in deciding whether or not to offer me employment and specifically waive any required written notifications. I hereby release my former employers, Park's Edge Preschool and all other persons from any and all claims, demands or liabilities arising out of or in any way related to such inquiry." id="authorize"><label for="authorize">
            I authorize all the schools, persons and organizations named in this application to provide any relevant information in their possession or knowledge to the agents of Park's Edge Preschool, for use in deciding whether or not to offer me employment and specifically waive any required written notifications. I hereby release my former employers, Park's Edge Preschool and all other persons from any and all claims, demands or liabilities arising out of or in any way related to such inquiry.
          </label>
        </div>

        <div>
          <input type="checkbox" name="drugfree" value="I understand that Park's Edge Preschool is committed to maintaining a drug and alcohol free work place. I understand that if employed, I may be subject to a drug and alcohol screening if the Director of Park's Edge Preschool has reasonable suspicion to believe that I am under the influence of drugs or alcohol. My consent to submit to such a test is required as a condition of employment and my refusal to consent shall result in a refusal to hire, or if already employed, termination." id="drugfree"><label for="drugfree">
            I understand that Park's Edge Preschool is committed to maintaining a drug and alcohol free work place. I understand that if employed, I may be subject to a drug and alcohol screening if the Director of Park's Edge Preschool has reasonable suspicion to believe that I am under the influence of drugs or alcohol. My consent to submit to such a test is required as a condition of employment and my refusal to consent shall result in a refusal to hire, or if already employed, termination.
          </label>
        </div>

        <div>
          <input type="checkbox" name="misrepresentation" value="I understand and agree that any misrepresentation or omission of facts in this application will be justification for refusal or termination of employment, regardless of the time elapsed before discovery." id="misrepresentation"><label for="misrepresentation">
            I understand and agree that any misrepresentation or omission of facts in this application will be justification for refusal or termination of employment, regardless of the time elapsed before discovery.
          </label>

          <br><br>

          <input type="checkbox" name="atwill" value="I understand and agree that the employment for which I am applying for is at-will, and such employment may be terminated at any time with or without cause, without prior notice, by the management of Park's Edge Preschool." id="atwill"><label for="atwill">
            I understand and agree that the employment for which I am applying for is at-will, and such employment may be terminated at any time with or without cause, without prior notice, by the management of Park's Edge Preschool.
          </label>

          <br><br>

          <input type="checkbox" name="placedsig" value="I have placed my electronic signature below only after I have completed the entire application to the best of my ability and have careful read the foregoing statements." id="placedsig"><label for="placedsig">
            I have placed my electronic signature below only after I have completed the entire application to the best of my ability and have careful read the foregoing statements.
          </label>
        </div>
      </div>

      <br>

      <h2>Electronic Signature</h2>

      <div class="flex">
        <label>
          Please type your name for an electronic signature <span class="required">*</span>
          <input type="text" name="signature" required>
        </label>

        <label>
          Today's date <span class="required">*</span>
          <input type="text" name="todaysdate" required>
        </label>
      </div>

      <br>

      <div class="center">
        Park's Edge Preschool is an equal opportunity employer. We adhere to a policy of making employment decisions without regard to race, color, religion, sex, sexual orientation, age or disability. We assure you that your opportunity for employment with our company depends solely on your qualifications. Thank you for your interest in our organization!
      </div>

      <br><br>

      <div class="nav">
        <div class="pager">
          <a href="#" class="topage1"></a>
          <a href="#" class="topage2"></a>
          <span class="active"></span>
        </div>

        <input type="submit" name="submit" value="Finish"><br>

        Page 3/3
      </div> <!-- /.nav -->
    </div> <!-- /#page4 -->
  </form>
</div> <!-- /.site-width.application -->

<script type="text/javascript">
  $(document).ready(function() {
    $('input[name="resume"]').change(function() {
      var output = $(this).val().split('\\').pop();
      $(this).parent().after('<span>'+output+'</span>');
    });

    $(".topage1").click(function(event){
      event.preventDefault();

      $("#page1, #page2, #page3").removeClass('hidden');
      $("#page2, #page3").addClass('hidden');
      $(window).scrollTop(0);
    });

    $(".topage2").click(function(event){
      event.preventDefault();

      function Page1Val() {
        var page1missing = 'no';
        $('#page1 [required]').each(function(){
          if ($(this).val() === "") {
            $(this).addClass('alert').attr("placeholder", "REQUIRED");
            page1missing = 'yes';
          }

          if (!$("input:radio[name='age']").is(":checked")) {
            $("#age").addClass('alert');
            page1missing = 'yes';
          }

          if (!$("input:radio[name='citizen']").is(":checked")) {
            $("#citizen").addClass('alert');
            page1missing = 'yes';
          }

          if (!$("input:radio[name='authorized']").is(":checked")) {
            $("#authorized").addClass('alert');
            page1missing = 'yes';
          }

          if ($("#education SELECT").val() === "") {
            $("#education").addClass('alert');
            page1missing = 'yes';
          }
        });
        return (page1missing == 'no') ? true : false;
      }

      if (Page1Val()) {
        $("#page1, #page2, #page3").removeClass('hidden');
        $("#page1, #page3").addClass('hidden');
        $('#page1 .alert').each(function(){ $(this).removeClass('alert').attr("placeholder", ""); });
        $(window).scrollTop(0);
      }
    });

    $(".topage3").click(function(event){
      event.preventDefault();

      function Page2Val() {
        var page2missing = 'no';
        $('#page2 [required]').each(function(){
          if ($(this).val() === "") {
            $(this).addClass('alert').attr("placeholder", "REQUIRED");
            page2missing = 'yes';
          }
        });
        return (page2missing == 'no') ? true : false;
      }

      if (Page2Val()) {
        $("#page1, #page2, #page3").removeClass('hidden');
        $("#page1, #page2").addClass('hidden');
        $('#page2 .alert').each(function(){ $(this).removeClass('alert').attr("placeholder", ""); });
        $(window).scrollTop(0);
      }
    });

    var form = $('#application');
    $(form).submit(function(event) {
      event.preventDefault();

      function Page3Val() {
        var page3missing = 'no';
        $('#page3 [required]').each(function(){
          if ($(this).val() === "") {
            $(this).addClass('alert').attr("placeholder", "REQUIRED");
            page3missing = 'yes';
          }

          if (!$("input:checkbox[name='infoaccurate']").is(":checked")) {
            $("#infoaccurate").addClass('alert');
            page3missing = 'yes';
          }

          if (!$("input:checkbox[name='authorize']").is(":checked")) {
            $("#authorize").addClass('alert');
            page3missing = 'yes';
          }

          if (!$("input:checkbox[name='drugfree']").is(":checked")) {
            $("#drugfree").addClass('alert');
            page3missing = 'yes';
          }

          if (!$("input:checkbox[name='misrepresentation']").is(":checked")) {
            $("#misrepresentation").addClass('alert');
            page3missing = 'yes';
          }

          if (!$("input:checkbox[name='atwill']").is(":checked")) {
            $("#atwill").addClass('alert');
            page3missing = 'yes';
          }

          if (!$("input:checkbox[name='placedsig']").is(":checked")) {
            $("#placedsig").addClass('alert');
            page3missing = 'yes';
          }
        });
        return (page3missing == 'no') ? true : false;
      }

      var form = '#'+$(this).attr('id');
      var formData = new FormData(this);

    //   function formValidation() {
    //     var missing = 'no';

    //     $(form+' [required]').each(function(){
    //       if ($(this).val() === "") {
    //         $(this).addClass('alert').attr("placeholder", "REQUIRED");
    //         missing = 'yes';
    //       }

    //       if (!$("input:radio[name='age']").is(":checked")) {
    //         $("#age").addClass('alert');
    //         missing = 'yes';
    //       }

    //       if (!$("input:radio[name='citizen']").is(":checked")) {
    //         $("#citizen").addClass('alert');
    //         missing = 'yes';
    //       }

    //       if (!$("input:radio[name='authorized']").is(":checked")) {
    //         $("#authorized").addClass('alert');
    //         missing = 'yes';
    //       }
    //     });

    //     if (missing == 'yes') $('html,body').animate({scrollTop: $('.alert').offset().top - 104}, 300);

    //     return (missing == 'no') ? true : false;
    //   }

      if (Page3Val()) {
        $.ajax({
          type: 'POST',
          url: $(form).attr('action'),
          data: formData,
          processData: false,
          contentType: false,
          success: function(data){
            if (data) $.fancybox.open('<div id="alert-modal">'+data+'</div>');
            $(form).find('input[type="text"], input[type="email"], input[type="tel"], textarea, select, input[type="file"]').val('');
            $(form).find('input[type="checkbox"], input[type="radio"]').prop('checked', false);
            $('.upload').after('');
          }
        });
      }
    });
  });
</script>

<div class="contact-section blank">
  <div class="torn-footer"></div>
</div>

<?php include "footer.php"; ?>