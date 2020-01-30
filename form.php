<?php
    include 'top.php';
    <body class="main">
    print  PHP_EOL . '<!-- SECTION: 1 Initialize variables -->' . PHP_EOL;

    print  PHP_EOL . '<!-- SECTION: 1a. debugging setup -->' . PHP_EOL;
    
    
    if (DEBUG){
        print '<p>Hiker:</p><pre>';
        print_r($_POST);
        print '</pre>';
    }
    
    print PHP_EOL . '<!-- SECTION: 1b form variables -->' . PHP_EOL;

    $Name = "";
    $email = "";

    print PHP_EOL . '<!-- SECTION: 1c form error flags -->' . PHP_EOL;

    $NameERROR = false;
    $emailERROR = false;

    print PHP_EOL . '<!-- SECTION: 1d misc variables -->' . PHP_EOL;

    $errorMsg = array();
    $mailed = false;

    print PHP_EOL . '<!-- SECTION: 2 Process for when the form is submitted -->' . PHP_EOL;

    if (isset($_POST["btnSubmit"]))
    {
        
    //@@@@@@@@@@@@@@@@@
    //
    print PHP_EOL . '<!-- SECTION: 2a Security -->' . PHP_EOL;
    
    // the url for this form
    $thisURL = $domain . $phpSelf; 
    
    if (!securityCheck($thisURL)) {
        $msg = '<p>Sorry you cannot access this page.</p>';
        $msg.= '<p>Security breach detected and reported.</p>';
        die($msg);
    }  

    print PHP_EOL . '<!-- SECTION: 2b Sanitize (clean) data  -->' . PHP_EOL;
     
    $Name = htmlentities($_POST["txtName"], ENT_QUOTES, "UTF-8");        
    $email = filter_var($_POST["txtEmail"], FILTER_SANITIZE_EMAIL);              
    
    
    
    print PHP_EOL . '<!-- SECTION: 2c Validation -->' . PHP_EOL;
    
    if ($Name == "") {
        $errorMsg[] = "Please enter your name";
        $NameERROR = true;
    } elseif (!verifyAlphaNum($Name)) {
        $errorMsg[] = "Your name appears to have extra character.";
        $NameERROR = true;
    }  
 
        
//! email !//    
    if ($email == "") {
        $errorMsg[] = 'Please enter your email address';
        $emailERROR = true;
    } elseif (!verifyEmail($email)) {       
        $errorMsg[] = 'Your email address appears to be incorrect.';
        $emailERROR = true;    
    }     


    
// ####################    Adding radio buttons      ###########################
// SECTION: 1b form variables
$gender = "";
 // SECTION: 1c form error flags
$genderERROR = false;
 // SECTION: 2b Sanitize (clean) data
$gender = htmlentities($_POST["radGender"], ENT_QUOTES, "UTF-8");
 // SECTION: 2c Validation
// check radio buttons
if ($gender != "Female" AND $gender != "Male" AND $gender != "Other") {
    $errorMsg[] = "Please choose a gender";
    $genderERROR = true;
}
 // SECTION: 2e Save Data
$dataRecord[] = $gender;

// ####################    Adding a list box       #############################
// SECTION: 1b form variables
$role = "Student";    // pick the option
//
// SECTION: 1c form error flags
$roleError = false;
 // SECIOTN: 2b Sanitize (clean) data
$role = htmlentities($_POST["lstRoles"], ENT_QUOTES, "UTF-8");
 // SECTION: 2c Validation
if ($role == "") {
    $errorMsg[] = "What is your current role?";
    $roleError = true;
}
 // SECTION: 2e Save Data
$dataRecord[] = $role;


    
// ####################    Adding a text area      #############################
// SECTION: 1b form variables
$comments = "";
 // SECTION: 1c form error flags
$commentsERROR = false;
 // SECTION: 2b Sanitize (clean) data
$comments = htmlentities($_POST["txtComments"], ENT_QUOTES, "UTF-8");
 // SECTION: 2c Validation
// Note that this if statments mean the comments are not required 
if ($comments != "") {
    if (!verifyAlphaNum($comments)) {
        $errorMsg[] = "Your comments appear to have extra characters that are not allowed.";
        $commentsERROR = true;
    }
}
 // SECTION: 2e Save Data
$dataRecord[] = $comments;

// ####################    Adding a list box       #############################
// SECTION: 1b form variables
$like = "Content";    // pick the option
//
// SECTION: 1c form error flags
$likeError = false;
 // SECIOTN: 2b Sanitize (clean) data
$like = htmlentities($_POST["lstLikes"], ENT_QUOTES, "UTF-8");
 // SECTION: 2c Validation
if ($like == "") {
    $errorMsg[] = "What did you like the most about our website?";
    $likeError = true;
}
 // SECTION: 2e Save Data
$dataRecord[] = $like;
    

// ####################    Adding check boxes      #############################
// SECTION: 1b form variables
$content = true;    // checked
$webdesign = false; // not checked
$backgroundcolor = false; // not checked
$interestingness = false; // not checked
//
// SECTION: 1c form error flags
$weaknessERROR = false;
$totalChecked = 0;
 // SECTION: 2b Sanitize (clean) data
// NOTE If a check box is not checked it is not sent in the POST array.
if (isset($_POST["chkContent"])) {
    $content = true;
    $totalChecked++;
} else {
    $content = false;
}
 if (isset($_POST["chkWebdesign"])) {
    $webdesign = true;
    $totalChecked++;
} else {
    $webdesign = false;
}
 if (isset($_POST["chkUserExperience"])) {
    $backgroundcolor = true;
    $totalChecked++;
} else {
    $backgroundcolor = false;
} if (isset($_POST["chkNothing"])) {
    $interestingness = true;
    $totalChecked++;
} else {
    $interestingness = false;
}
 // SECTION: 2c Validation
// may not need to check for any
if ($totalChecked < 1) {
    $errorMsg[] = "Please choose at least one opinion";
    $activityERROR = true;
}
 // SECTION: 2e Save Data
$dataRecord[] = $content;
$dataRecord[] = $webdesign;
$dataRecord[] = $backgroundcolor;
$dataRecord[] = $interestingness;

    print PHP_EOL . '<!-- SECTION: 2d Process Form - Passed Validation -->' . PHP_EOL;
        
        if (!$errorMsg)
        {
        print PHP_EOL . '<!-- SECTION: 2e Save Data -->' . PHP_EOL;
        
        $dataEntered= false;
        $dataRecord = array();
        
        
        $dataRecord[] = $Name;       
        $dataRecord[] = $email;
    
         // setup csv file
        $myFolder = 'data/';
        $myFileName = 'registration';
        $fileExt = '.csv';
        $filename = $myFolder . $myFileName . $fileExt;   
    
        if ($debug) print PHP_EOL . '<p>filename is ' . $filename;
    
        // now we just open the file for append
        $file = fopen($filename, 'a');        
    
        // write the forms informations
        fputcsv($file, $dataRecord);        
    
        // close the file
        fclose($file);          
    
     
        //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
        //
        print PHP_EOL . '<!-- SECTION: 2f Create message -->' . PHP_EOL;
        //
        // build a message to display on the screen in section 3a and to mail
        // to the person filling out the form (section 2g).
         
        $message = '<h2>Your  information.</h2>';
        
         foreach ($_POST as $htmlName => $value) {
            
            $message .= '<p>';
            // breaks up the form names into words. for example
            // txtFirstName becomes First Name       
            $camelCase = preg_split('/(?=[A-Z])/', substr($htmlName, 3));
            
             foreach ($camelCase as $oneWord) {
                $message .= $oneWord . ' ';
            }    
      
            $message .= ' = ' . htmlentities($value, ENT_QUOTES, "UTF-8") . '</p>';
            
         }
       
        //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
        //
        print PHP_EOL . '<!-- SECTION: 2g Mail to user -->' . PHP_EOL;
        //
        // Process for mailing a message which contains the forms data
        // the message was built in section 2f.
        $to = $email; // the person who filled out the form     
        $cc = '';       
        $bcc = '';      
        
        $from = 'quickdesign.com <customer.service@yqucikdesign.com>';      
        
        // subject of mail should make sense to your form
        $subject = 'Thank you for your feedback! ';

        $mailed = sendMail($to, $cc, $bcc, $from, $subject, $message);
        
      } // end form is valid         
        
}   // ends if form was submitted.
        
    print PHP_EOL . '<!-- SECTION 3 Display Form -->' . PHP_EOL;

?>       
<main>     
<article>
    <?php

        
    print PHP_EOL . '<!-- SECTION 3a  -->' . PHP_EOL;

    if (isset($_POST["btnSubmit"]) AND empty($errorMsg))
        {
        print '<h2>Thank you for providing your feedback.</h2>'; 
    
        print '<p>For your records a copy of this data has ';  
        if (!$mailed) {    
            print "not ";         
        }  
    
        print 'been sent:</p>';
        print '<p>To: ' . $email . '</p>'; 
    
        print $message;    
    }
    else
    {
     
        print '<p class="form-heading">Your information will help us develop our website!</p>';
     
       
        print PHP_EOL . '<!-- SECTION 3b Error Messages -->' . PHP_EOL;

         if ($errorMsg)
         {
            print '<div id="errors">' . PHP_EOL;
            print '<h2>Your form has the following mistakes that need to be fixed.</h2>' . PHP_EOL;
            print '<ol>' . PHP_EOL;
            foreach ($errorMsg as $err)
            {
                print '<li>' . $err . '</li>' . PHP_EOL;
            }
            print '</ol>' . PHP_EOL;
            print '</div>' . PHP_EOL;
        }
    }
      
print PHP_EOL . '<!-- SECTION 3c html Form -->' . PHP_EOL;

?>

    <form action = "<?php print $phpSelf; ?>" class="block2"
          method = "post"
          id = "frmRegister">
     <h2>Feedback Form</h2>
                 <fieldset class = "contact">
                    <p>
                        <label class="required" for="txtName">Name</label>  
                        <input autofocus
                                <?php if ($NameERROR) print 'class="mistake"'; ?>
                                id="txtName"
                                maxlength="45"
                                name="txtName"
                                onfocus="this.select()"
                                placeholder="Enter your first name"
                                tabindex="100"
                                type="text"
                                value="<?php print $Name; ?>"                    
                        >                    
                    </p>
                 </fieldset>    

                    <fieldset class = "contact">
                    <p>
                        <label class = "required" for = "txtEmail">Email</label>
                            <input 
                                   <?php if ($emailERROR) print 'class="mistake"'; ?>
                                   id = "txtEmail"     
                                   maxlength = "45"
                                   name = "txtEmail"
                                   onfocus = "this.select()"
                                   placeholder = "Enter your email address"
                                   tabindex = "120"
                                   type = "text"
                                   value = "<?php print $email; ?>" 
                            >
                    </p>      
                </fieldset> <!-- ends contact -->

                    

<!-- Gender -->
<fieldset class="radio <?php if ($genderERROR) print ' mistake'; ?>">
    <legend>What is your gender?</legend>
    <p>    
        <label class="radio-field"><input type="radio" id="radGenderFemale" name="radGender" value="Female" tabindex="572" 
<?php if ($gender == "Female") echo ' checked="checked" '; ?>>
            Female</label>
    </p>
    <p>
        <label class="radio-field"><input type="radio" id="radGenderMale" name="radGender" value="Male" tabindex="574" 
<?php if ($gender == "Male") echo ' checked="checked" '; ?>>
            Male</label>
    </p>
     <p>
        <label class="radio-field"><input type="radio" id="radGenderOther" name="radGender" value="Other" tabindex="574" 
<?php if ($gender == "Other") echo ' checked="checked" '; ?>>
            Other</label>
    </p>
</fieldset>                
                
<fieldset  class="listbox <?php if ($roleERROR) print ' mistake'; ?>">
    <legend>Which option best describes your current role?</legend>
    <p>
        <select id="lstRoles" 
                name="lstRoles" 
                tabindex="520" >
            <option <?php if ($role == "Students") print " selected "; ?>
                value="Students">Students</option>
             <option <?php if ($role == "Full time job") print " selected "; ?>
                value="Full time job">Full time job</option>
             <option <?php if ($role == "Prefer not to say") print " selected "; ?>
                value="Prefer not to say">Prefer not to say</option>
            <option <?php if ($role == "Other") print " selected "; ?>
                value="Other">Other</option>
        </select>
    </p>
</fieldset>

<!-- GODDNESS -->
<fieldset  class="listbox <?php if ($likeERROR) print ' mistake'; ?>">
    <legend>What did you like the most on our website?</legend>
    <p>
        <select id="lstLike" 
                name="lstLikes" 
                tabindex="520" >
            <option <?php if ($like == "Content") print " selected "; ?>
                value="Content">Content</option>
             <option <?php if ($like == "Web Design") print " selected "; ?>
                value="Web Design">Web Design</option>
             <option <?php if ($like == "User Friendly") print " selected "; ?>
                value="User friendly">User Friendly</option>
            <option <?php if ($like == "Nothing") print " selected "; ?>
                value="Nothing">Nothing</option>
        </select>
    </p>
</fieldset>

<!-- WEAKNESS -->
<fieldset class="checkbox <?php if ($weaknessERROR) print ' mistake'; ?>">
    <legend>Things that should be improved in the future.</legend>
     <p>
        <label class="check-field">
            <input <?php if ($content) print " checked "; ?>
                id="chkContent"
                name="chkContent"
                tabindex="420"
                type="checkbox"
                value="Content">Content</label>
    </p>
     <p>
        <label class="check-field">
            <input <?php if ($webdesign) print " checked "; ?>
                id="chkWebdesign" 
                name="chkWebdesign" 
                tabindex="430"
                type="checkbox"
                value="Webdesign">Web design</label>
    </p>
    <p>
        <label class="check-field">
            <input <?php if ($UserExperience) print " checked "; ?>
                id="chkUserExperience" 
                name="chkUserExperience" 
                tabindex="430"
                type="checkbox"
                value="UserExperience">User Experience</label>
    </p>
    <p>
        <label class="check-field">
            <input <?php if ($Nothing) print " checked "; ?>
                id="chkNothing" 
                name="chkNothing" 
                tabindex="430"
                type="checkbox"
                value="Nothing">Nothing</label>
    </p>
</fieldset>

<!-- Comment -->                
 <fieldset class="textarea">
    <p>
        <label  class="required"for="txtComments">Other recommendation for us.</label>
        <textarea <?php if ($commentsERROR) print 'class="mistake"'; ?>
            id="txtComments" 
            name="txtComments" 
            onfocus="this.select()" 
            tabindex="200"><?php print $comments; ?></textarea>
        <!-- NOTE: no blank spaces inside the text area, be sure to close 
                   the text area directly -->
    </p>
</fieldset> 
                
             <fieldset class="buttons">
                <legend></legend>
                <input class = "button" id = "btnSubmit" name = "btnSubmit" tabindex = "900" type = "submit" value = "Submit" >
            </fieldset>
</form>
</article>
</main>
<?php
include 'footer.php';
?>
</body>
</html>
