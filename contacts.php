<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
require_once("contact/include/fgcontactform.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('heating@ihug.co.nz'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('LG6GVHA3ADSbLay');

$formproc->AddFileUploadField('plan','jpg,jpeg,gif,png,bmp,doc,docx,pdf,txt',2024);

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Heatwell - Contact Us</title>
<?php $thisPage="contact-us"; ?>
<meta name="description" content="Under floor electric heating specialists, premium heating without cutting corners to Auckland for 35 years. DIY kits, all fault location & repairs, thermostat repairs, element repairs, Siemens." />
<meta name="keywords" content="Heatwell Ltd. Floor heating specialists, under floor, under tile, under concrete, heated tiles, heated carpet, heated concrete, auckland, experts, tiles, carpet, flooring, wood, under floor heating systems, do it yourself, DIY" />

<?php include("header.php"); ?>

<article>
  <section>

    <div class="content-column">
      <h1>Contact Us</h1>

      <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

<fieldset >

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name:* </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address:*</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='phone' >Phone:</label><br/>
    <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='message' >Message:</label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10"  name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
</div>
<div class='container'>
    <label for='photo' >Upload your floor plan:</label><br/>
    <input type="file" name='plan' id='plan' /><br/>
    <span id='contactus_photo_errorloc' class='error'></span>
</div>


<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>

    </div>

    <aside>
      <h3>Heatwell Ltd.</h3>
      <p>PO Box 41 072,</br>
      St Lukes,</br>
      Auckland 1346
      </br>New Zealand</p>
      <h4>Ph: <span class="dark"><a href="tel:098493919">(09) 849 3919</a></span><br>Fx: <span class="dark">64 9 849 3621</span></br>Mo: <span class="dark">021 926 533</span></h4>
      <img style="margin-top:10px;" src="images/QR.gif" width="120" height="120" alt="Heatwell Contacst QR Code"><br>
      <p>Scan this QR code with your phone to save our contact details as an meCard.</p>
      <h4>Company Information</h4>
       <p>Find out more about Heatwell:</p>
       <div class="button-margin"><a class="button" href="about-heatwell.php">About Heatwell</a></div>
    </aside>
    <div class="clear-both"></div>
  </section>
</article>

<?php include("footer.php"); ?>

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    frmvalidator.addValidation("plan","file_extn=jpg;jpeg;gif;png;bmp;doc;docx;pdf;txt","Upload supported formats only. Supported file types are: jpg,gif,png,bmp,doc,docx,pdf,txt");
// ]]>
</script>
</body>
</html>
