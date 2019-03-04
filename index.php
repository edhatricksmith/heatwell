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
<title>Heatwell - Under floor heating specialists, Thermostat Repair & Ensuite Floor Heating</title>
<meta name="description" content="Under floor electric heating specialists, premium heating without cutting corners to Auckland for 35 years. DIY kits, all fault location & repairs, thermostat repairs, element repairs, Siemens." />
<meta name="keywords" content="Heatwell Ltd. Floor heating specialists, under floor, under tile, under concrete, heated tiles, heated carpet, heated concrete, auckland, experts, tiles, carpet, flooring, wood, under floor heating systems, do it yourself, DIY" />

<link rel="canonical" href="http://www.heatwell.co.nz/index.php" />

<?php include("header.php"); ?>

<article class="content">
  <div class="container-fluid">
    <div class="row section">
      <div class="col-xs-12 col-sm-5 section">
        <h1>Heatwell Ltd</h1>
        <ul>
          <li><strong>Auckland Based Company</strong></li>
          <li><strong>Underfloor Heating Specialist</strong></li>
          <li><strong>We Install all our heating Products</strong></li>
          <li><strong>Suppliers of Elements and Thermostats</strong></li>
        </ul>
        <p>We have over 40 years experience in design, supply and installation of under floor heating systems. We service most thermostats and floor heating systems.</p>
        <a class="btn" href="services/services.php">Arrange for a Service now</a>
      </div>
      <div class="col-xs-12 col-sm-7">
        <img class="responsive-img img-border" src="images/index_photo.jpg" alt="Woman enjoying her heated floor">
      </div>
    </div>
    <section class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 section">
        <h2>Floors no longer need to be cold</h2>
        <p>Think of those times when you get home on a cold wet night, have to turn on the electric heater and wait for it to heat up. Even then it is only heating one small area of your home.</p>
        <p>With Radiant Electric Heating you will come home to a warm floor and home when using an automatic programmable thermostat. Keep your family warm and healthy with Radiant Electric Heating.</p>
        <a class="btn btn--secondary" href="heating-options/floor-heating-options.php">Floor heating options</a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 section">
        <h2>Save money on household heating</h2>
        <p>Under floor heating is an efficient way of heating your whole home from the floor up. This will help reduce your overall heating bill and save you money.</p>
        <p>We're experts in this field and are happy to help you with you floor heating project. We're here to help you learn how to do it yourself. We can even supply the equipment for D.I.Y. installations.</p>
        <a class="btn btn--secondary" href="diy/do-it-yourself.php">Do it yourself</a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 section">
        <h2>Contact us today for a free site measure and quotation or send us your plans</h2>
        <p>If you are starting a renovation project, building a new home or simply want to know more about under floor heating, contact us and we will help you out.</p>
        <a class="btn btn--secondary" href="contacts.php">Contact us</a>
      </div>


      <div class="col-xs-12 col-sm-8 section-sm">
        <form class="Form" id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
          <fieldset>
            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
            <input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
            <h2>Contact Us</h2>
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

    </section>
  </div>
</article>

<?php include("footer.php"); ?>

</body>
</html>
