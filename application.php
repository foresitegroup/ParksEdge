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
      <label id="referred">
        How were you referred to Park's Edge?<br>
        <select name="referred">
          <option value="">Select...</option>
          <option value="First">What goes here?</option>
          <option value="Second">What goes here?</option>
          <option value="Third">What goes here?</option>
          <option value="Any">What goes here?</option>
        </select>
      </label>

      <label id="education">
        What is your highest form of education?<br>
        <select name="education">
          <option value="">Select...</option>
          <option value="First">What goes here?</option>
          <option value="Second">What goes here?</option>
          <option value="Third">What goes here?</option>
          <option value="Any">What goes here?</option>
        </select>
      </label>
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

    <br><br>

    <h2>Past Work</h2>
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

    <div class="center">
      <input type="submit" name="submit" value="Apply Now">
    </div>
  </form>
</div> <!-- /.site-width.application -->

<script type="text/javascript">
  $(document).ready(function() {
    $('input[name="resume"]').change(function() {
      var output = $(this).val().split('\\').pop();
      $(this).parent().after('<span>'+output+'</span>');
    });

    var form = $('#application');
    $(form).submit(function(event) {
      event.preventDefault();

      var form = '#'+$(this).attr('id');
      var formData = new FormData(this);

      function formValidation() {
        var missing = 'no';

        $(form+' [required]').each(function(){
          if ($(this).val() === "") {
            $(this).addClass('alert').attr("placeholder", "REQUIRED");
            missing = 'yes';
          }

          if (!$("input:radio[name='age']").is(":checked")) {
            $("#age").addClass('alert');
            missing = 'yes';
          }

          if (!$("input:radio[name='citizen']").is(":checked")) {
            $("#citizen").addClass('alert');
            missing = 'yes';
          }

          if (!$("input:radio[name='authorized']").is(":checked")) {
            $("#authorized").addClass('alert');
            missing = 'yes';
          }
        });

        if (missing == 'yes') $('html,body').animate({scrollTop: $('.alert').offset().top - 104}, 300);

        return (missing == 'no') ? true : false;
      }
      
      if (formValidation()) {
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