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

<article class="content">
  <section class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <h1>Contact Us</h1>
      </div>
    </div>
    <div class="row section">
      <div class="col-xs-12 col-sm-8 section-sm">
        <form class="Form" id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
          <fieldset>
            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
            <input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
            <small>* required fields</small>
            <div class='Form-errorsummary error'><?php echo $formproc->GetErrorMessage(); ?></div>
            <label for='name'>Your Full Name:* </label>
            <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" required />
            <span id='contactus_name_errorloc' class='error'></span>
            <label for='email' >Email Address:*</label>
            <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" required />
            <span id='contactus_email_errorloc' class='error'></span>
            <label for='phone' >Phone:</label>
            <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="50" />
            <span id='contactus_email_errorloc' class='error'></span>
            <label for='message' >Message:*</label>
            <span id='contactus_message_errorloc' class='error'></span>
            <textarea rows="10"  name='message' id='message' required><?php echo $formproc->SafeDisplay('message') ?></textarea>
            <label for='photo' >Upload your floor plan:</label>
            <input type="file" name='plan' id='plan' />
            <span id='contactus_photo_errorloc' class='error'></span>
            <div class="section-sm">
              <div class="g-recaptcha" data-sitekey="6LcyNpUUAAAAAJW7Don6y3UkIpvtOINnOH4IZNad"></div>
            </div>
            <input class="btn" type='submit' name='Submit' value='Send message' />
          </fieldset>
        </form>
      </div>
      <aside class="col-xs-12 col-sm-4">
        <div class="Callout">
          <h3>Heatwell Ltd.</h3>
          <?php include("contactcard-partial.php"); ?>
          <h3>Company Information</h3>
          <p><a href="/about-heatwell.php">Find out more about Heatwell</a></p>
        </div>
      </aside>
  </section>
</article>

<?php include("footer.php"); ?>

</body>
</html>
