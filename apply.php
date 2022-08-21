<?php session_start(); ?>
<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img\favicon.png" />
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link href="./fs/css/all.css" rel="stylesheet"> -->
    <title>Government Grants Application Registration Form | GovernmentGrants.us</title>
    <style media="screen">
      @media (max-width: 768px) {
        .logo{
        display: none;
        }

      }
    </style>
  </head>
  
  <body>
  <?php 
  if(!isset($_SESSION['id'])){
    ?>
  <header class="head_content">
    <section>
      <div class="container">
        <div class="grid">
            <figure class="logo">
                <a><img src="img\gov-grants-logo.jpg"/></a>
            </figure>


    <nav class="navy">
      <div class="header_menu">
        <ul>
          <li><a href="apply">Login</a></li>
          <li>
            <a href="business-grant-overview">Business Grants</a>
            <ul class="droppy">
              <li><a href="small-business-grants">Small Business Grants</a></li>
              <li><a href="start-up-home-business">Start up & Home business</a></li>
              <li><a href="business-grants-for-veterans">Business Grants for Veterans</a></li>
              <li><a href="grants-for-women">Women Owned Business Grants</a></li>
              <li><a href="minority-grants">Minority Grants</a></li>
              <li><a href="">Business Grants Articles</a></li>
            </ul>
          </li>

          <li>
            <a href="personal-grants" class="drop">Personal Grants</a>
            <ul class="droppy">
              <li><a href="home-improvement-grants">Home Improvement Grants</a></li>
              <li><a href="rent-assistance">Rental Assistance</a></li>
              <li><a href="child-care-grants">Child Care Grants</a></li>
              <li><a href="bills-assistance">Bill Assistance</a></li>
              <li><a href="#">Personal Grants Articles</a></li>
            </ul>
          </li>
          <li><a href="housing-grants">Housing Grants</a>
          <ul class="droppy">
            <li><a href="first-time-homebuyer-grants">First Time Homebuyer Grants</a></li>
            <li><a href="rental-apartment-grants">Rental & Apartment Grants</a></li>
            <li><a href="commercial-property-grants">Commercial Property Grants</a></li>
            <li><a href="new-construction-development">Land Development Grants</a></li>
            <li><a href="">Housing Grants Articles</a></li>
          </ul>
          </li>
          <li><a href="education-grants">Education Grants</a>
          <ul class="droppy">
            <li><a href="pell-grants">Pell Grants</a></li>
            <li><a href="college-scholarships">College Scholarships</a></li>
            <li><a href="research-training-grants">Training & Research Grants</a></li>
            <li><a href="stafford-loans">Universities & Stafford Loans </a></li>
            <li><a href="grants-for-women-returning-to-college">Grants for Women Returning to College</a></li>
            <li><a href="">Education Grants Articles</a></li>
          </ul>
          </li>
        </ul>
      </div>
    </nav>

</div>
</div>
</section>
  </header>
  <!-- <div class="modaly" id="myModal">
    </div> -->
  <main>
    <section class="main_con1" style="background-image: url('img/application.jpg');">
      <div class="headings">
        <h1>Registration Form</h1>
      </div>
    </section>
    <section class="main_con2">
<div class="container">
  <header class="reg_head">
    <p>
      <i>The information you enter below is confidential and is only made available to a Government Grants.us Specialist. Your information is confidential and will only be used in researching new grant opportunities for you to apply.</i>
    <i>You already applied?, <a href="login">Login</a></i>
    </p>
  </header>
  <div class="grid">
  </div>
</div>
</section>
<section class="reg_details">
  <div class="container">
    <p style="margin-bottom: 0px;">Step 1 of 3: Tell us about <u>You</u> and <u>Your Funding Needs</u></p>

    <?php include "validation.php"; ?>
    <?php include "confirm.php"; ?>
    

<form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <!-- action="#" method="post" -->
  <div class="grid">
    <div class="reg_con">
      <div>
<input  type="text" name="template-application-first-name" placeholder="First Name" class="f-name" pattern="[a-zA-Z']+" title="Please use only letters">
<span class="errors"><?php echo $fnameErr; ?></span>
</div>
      
      <div>
        <input type="text" name="template-application-last-name" placeholder="Last Name" class="l-name"  pattern="[a-zA-Z']+" title="Please use only letters">
        <span class="errors"><?php echo $lnameErr; ?></span>
      </div>
      <div>
        <input type="text" name="template-application-street-address" placeholder="Street Address" class="street-address">
        <span class="errors"><?php echo $addressErr; ?></span>
      </div>
<div>
  <input type="number" name="template-application-zip" placeholder="Zip" class="zip">
  <span class="errors"><?php echo $zipErr; ?></span>
</div>
<div>
  <input type="text" name="template-application-city" placeholder="City" class="city">
  <span class="errors"><?php echo $cityErr; ?></span>
</div>
<div>
  <select  name="template-application-state">
    <option label="State" value="empty">State</option>
     <option value="AL">Alabama</option>
      <option value="AK">Alaska</option>
      <option value="AS">American Samoa</option>
      <option value="AZ">Arizona</option>
      <option value="AR">Arkansas</option>
       <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District of Columbia</option>
         <option value="FM">Federated States of Micronesia</option>
          <option value="FL">Florida</option>
           <option value="GA">Georgia</option>
            <option value="GU">Guam</option>
             <option value="HI">Hawaii</option>
             <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
               <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                 <option value="KS">Kansas</option>
                 <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                   <option value="ME">Maine</option>
                   <option value="MD">Maryland</option>
                    <option value="MH">Marshall Islands</option>
                     <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                       <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                         <option value="MO">Missouri</option>
                          <option value="MT">Montana</option>
                           <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                             <option value="NH">New Hampshire</option>
                              <option value="NJ">New Jersey</option>
                               <option value="NM">New Mexico</option>
                               <option value="NY">New York</option>
                               <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="MP">Northern Mariana Islands</option>
                                 <option value="OH">Ohio</option>
                                 <option value="OK">Oklahoma</option>
                                 <option value="OR">Oregon</option>
                                 <option value="PW">Palau</option>
                                 <option value="PA">Pennsylvania</option>
                                 <option value="PR">Puerto Rico</option>
                                  <option value="RI">Rhode Island</option>
                                  <option value="SC">South Carolina</option>
                                   <option value="SD">South Dakota</option>
                                   <option value="TN">Tennessee</option>
                                   <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                     <option value="VI">Virgin Islands</option>
                                     <option value="VA">Virginia</option>
                                      <option value="WA">Washington</option>
                                      <option value="WV">West Virginia</option>
                                       <option value="WI">Wisconsin</option>
                                       <option value="WY">Wyoming</option>
                                     </select>
                                     <span class="errors"><?php echo $stateErr; ?></span>
</div>
<div>
  <select  name="template-application-gender">
     <option value="empty" label="Gender">Gender</option>
     <option value="M">Male</option>
      <option value="F">Female</option>
    </select>
    <span class="errors"><?php echo $genderErr; ?></span>
</div>
<div>
<input type="text" name="template-application-occupation" placeholder="Occupation" class="city">
<span class="errors"><?php echo $occupationErr; ?></span>
</div>
<!-- <div>
  <input type="date" id="start" name="trip-start" placeholder="DOB">

</div> -->
<div>
  <select class="template-application-age" name="template-application-age">
    <option value="empty" label="What is your age?">What is your age?</option>
    <option value="18-25">18-25</option> <option value="26-34">26-34</option>
     <option value="35-49">35-49</option> <option value="50-65">50-65</option>
     <option value="66-80">66-80</option> <option value="80+">80 +</option>
   </select>
   <span class="errors"><?php echo $ageErr; ?></span>
</div>
<div>
<input type="tel" name="template-application-phone" mask="(000)_000-0000" placeholder="Day Phone" class="phone"  im-insert="true">
<span class="errors"><?php echo $phoneErr; ?></span>
</div>
<div>
  <select  name="template-application-citizenship-status">
    <option value="empty">Citizenship Status</option>
    <option value="U.S. Citizen">U.S. Citizen</option>
     <option value="Resident Alien">Resident Alien</option>
     <option value="Green Card Holder">Green Card Holder</option>
      <option value="Permanent Resident">Permanent Resident</option>
      <option value="Not Sure">Not Sure</option>
    </select>
    <span class="errors"><?php echo $statusErr; ?></span>
</div>
<div>
  <select  name="template-application-relationship-status">
    <option value="empty">Relationship Status</option>
    <option value="Single">Single</option>
     <option value="Married">Married</option>
     <option value="Divorced">Divorced</option>
    </select>
    <span class="errors"><?php echo $relationshipErr; ?></span>
</div>
<div>
  <input type="number" name="template-application-monthly-income" placeholder="Monthly income"/>
  <span class="errors"><?php echo $incomeErr; ?></span>
</div>
<div>
  <input type="text" name="template-application-mothers-name" placeholder="Mother's Full-Name"/>
  <span class="errors"><?php echo $motherErr; ?></span>
</div>
    </div>
  </div>

  <div class="reg_con2">
    <h4><strong>Reason For Applying</strong></h4><span class="errors"><?php echo $reasonErr; ?></span>
    <label for="">
      <input type="radio" name="template-application-business" class="ff" value="1st Time Home Buyer">1st Time Home Buyer &nbsp;
    </label>
    <label for="">
      <input type="radio" name="template-application-business" class="ff" id="bus" value="Business">Business
    </label>
    <label for="">
      <input type="radio" name="template-application-business" class="ff" id="com"  value="Community Assistance">Community Assistance
    </label>
    <label for="">
      <input type="radio" name="template-application-business" class="ff" id="demo"  value="Demographic">Demographic
    </label>
    <label for="">
      <input type="radio" name="template-application-business" class="ff" value="Home Improvement">Home Improvement
    </label>
    <label for="">
      <input type="radio" name="template-application-business" class="ff" id="house" value="Housing">Housing
    </label>
    <label for="">
      <input type="radio" name="template-application-business" class="ff" value="Inventions">Inventions
    </label>
    <label for="">
      <input type="radio" name="template-application-business" class="ff" value="Misc">Misc
    </label>
    <label for="">
      <input type="radio" name="template-application-business" class="ff" value="Non-Profit">Non-Profit
    </label>
    <label for="">
      <input type="radio" name="template-application-business" class="ff" value="Personal Assistance">Personal Assistance
    </label>
    <label for="">
      <input type="radio" name="template-application-business" class="ff" value="Real Estate">Real Estate
    </label>
    <label for="">
      <input type="radio" name="template-application-business" class="ff" value="Scholarships">Scholarships
    </label>
  </div>
  <div class="reg_con2_sub">
    <section id="business" class="hide">
      <div class="business_content">
        <h3>
          Suggested Sub-Categories
            <span>(Check all that apply)</span>
        </h3>
        <div>
          <input type="checkbox" name="subcat" value="Agriculture">
          <label>Agriculture</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="capital funding">
          <label>capital funding</label>
        </div>
        <div>
          <input type="checkbox" name="subcat"value="Energy">
          <label>Energy</label>
        </div>

        <div>
          <input type="checkbox" name="subcat" value="environmental">
          <label>environmental</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="Equipment">
          <label>Equipment</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="Expand">
          <label>Expand</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="Farming">
          <label>Farming</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="geothermal">
          <label>geothermal</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="Machinery">
          <label>Machinery</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="marketing">
          <label>marketing</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="startup">
          <label>Start-up</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="technology">
          <label>technology</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="Training">
          <label>training</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="transportation">
          <label>transportation</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="travel&tourism">
          <label>travel and tourism</label>
        </div>
      </div>
    </section>


    <section id="community_assistance" class="hide">
      <div class="business_content">
        <h3>
          Suggested Sub-Categories
            <span>(Check all that apply)</span>
        </h3>
        <div>
          <input type="checkbox" name="subcat" value="economic development">
          <label>economic development</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="health and Human Services">
          <label>Health and human Services</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="historical">
          <label>historical</label>
        </div>

        <div>
          <input type="checkbox" name="subcat" value="municipalities">
          <label>municipalities</label>
        </div>
        <div>
          <input type="checkbox" name="subcat" value="Rural">
          <label>Rural</label>
        </div>
      </div>
      </section>

      <section id="demographic" class="hide">
        <div class="business_content">
          <h3>
            Suggested Sub-Categories
              <span>(Check all that apply)</span>
          </h3>
          <div>
            <input type="checkbox" name="subcat" value="african american">
            <label>African American</label>
          </div>
          <div>
            <input type="checkbox" name="subcat" value="Asian">
            <label>Asian</label>
          </div>
          <div>
            <input type="checkbox" name="subcat" value="BIPOC">
            <label>BIPOC</label>
          </div>

          <div>
            <input type="checkbox" name="subcat" value="disabled">
            <label>disabled</label>
          </div>
          <div>
            <input type="checkbox" name="subcat" value="hispanic">
            <label>hispanic</label>
          </div>
          <div>
            <input type="checkbox" name="subcat" value="LGBT">
            <label>LGBT</label>
          </div>
          <div>
            <input type="checkbox" name="subcat" value="men">
            <label>Men</label>
          </div>
          <div>
            <input type="checkbox" name="subcat" value="native america">
            <label>Native america</label>
          </div>
          <div>
            <input type="checkbox" name="subcat" value="naive american">
            <label>Native American</label>
          </div>
          <div>
            <input type="checkbox" name="subcat" value="Pacific Islander">
            <label>Pacific Islander</label>
          </div>
          <div>
            <input type="checkbox" name="subcat" value="senior Citizens">
            <label>Senior Citizens</label>
          </div>
          <div>
            <input type="checkbox" name="subcat" value="Veterans">
            <label>Veterans</label>
          </div>
          <div>
            <input type="checkbox" name="subcat" value="Woman">
            <label>Woman</label>
          </div>
        </div>
        </section>

        <section id="housing" class="hide">
          <div class="business_content">
            <h3>
              Suggested Sub-Categories
                <span>(Check all that apply)</span>
            </h3>
            <div>
              <input type="checkbox" name="subcat" value="Foreclosure">
              <label>Foreclosure</label>
            </div>
            <div>
              <input type="checkbox" name="subcat" value="Mortgage Assistance">
              <label>Mortgage Assistance</label>
            </div>
            <div>
              <input type="checkbox" name="subcat" value="Section 8">
              <label>Section 8</label>
            </div>



          </section>
  </div>
<!-- </div> -->


<!-- <div class="reg_con3">
  <label>How would you describe your credit?</label>&nbsp; <span id="ee">****</span>
</br>
  <label> <input type="radio" name="template-application-describe-credit" class="credit" value="Excellent"> Excellent </label>
  <label> <input type="radio" name="template-application-describe-credit" class="credit" value="Good"> Good </label>
  <label> <input type="radio" name="template-application-describe-credit" class="credit" value="Fair"> Fair </label>
  <label> <input type="radio" name="template-application-describe-credit" class="credit" value="Poor"> Poor </label>
</div>

<div class="reg_con4">
  <label>Do you want to improve your credit?</label>&nbsp; <span id="ff">****</span>
</br>
  <label> <input type="radio" name="template-application-improve-credit" value="Yes"> Yes </label>
  <label> <input type="radio" name="template-application-improve-credit" value="No"> No </label>
</div>
<div id="reg_con4_sub" class="hide">
  <div>
    <label>Have you been turned down for a loan in the last 60 days?</label>&nbsp; <span id="gg">****</span>
    <label> <input type="radio" name="template-application-loan" value="Yes"> Yes </label>
    <label> <input type="radio" name="template-application-loan" value="No"> No </label>
  </div>
  <div>
    <label>What is your main goal or reason to have good credit?</label>&nbsp; <span id="hh">****</span>
    <label> <input type="radio" name="template-application-reason" value="Buy a home"> Buy a home  </label>
    <label> <input type="radio" name="template-application-reason" value="Buy a car"> Buy a car  </label>
    <label> <input type="radio" name="template-application-reason" value="Other"> Other  </label>
  </div>
  <div>
    <label>What is your time frame for accomplishing your goal?</label>&nbsp; <span id="ii">****</span>
    <label> <input type="radio" name="template-application-time" value="1-3 Months"> 1-3 Months  </label>
    <label> <input type="radio" name="template-application-time" value="4-6 Months"> 4-6 Months  </label>
    <label> <input type="radio" name="template-application-time" value="6-12 Months"> 6-12 Months  </label>
  </div>
  <div>
    <label>How serious are you about fixing your credit?</label>&nbsp; <span id="jj">****</span>
    <label style="display: block;"> <input type="radio" name="template-application-fix" value="interested"> <strong>Very interested!</strong> I need to make a large purchase soon and need to improve it. </label>
    <label style="display: block;"> <input type="radio" name="template-application-fix" value="No Rush"> No Rush. I'm just looking for options.  </label>
  </div>
  <div>
    <label>Would you like to talk to a specialist to improve your credit?</label>&nbsp; <span id="kk">****</span>
    <label> <input type="radio" name="template-application-specialist" value="yes"> Yes  </label>
    <label> <input type="radio" name="template-application-specialist" value="no"> No  </label>
  </div>
</div> -->

<div class="reg_con3" style="display:block; margin-top:30px;margin-bottom:15px;">
  <label   for="template-application-money_">How much money are you going to need? ($)</label>
  <input type="number" class="template-application-money" name="money" value="" placeholder="0.00"/>
  <p style="font-size:11px">
    amount must range between $10,000 - $1,000,000
  </p>
  <span class="errors"><?php echo $moneyErr; ?></span>
</div>
<div class="reg_con5">
  <label  for="template-application-fee">Application Fee ($)</label>
<input style="background:#e9e9ed" type="text" class="template-application-fee" name="fee" value="25.00" readonly placeholder="0.00"/>
<!-- <p style="font-size:11px"> -->
<!-- processing fee to be paid to facilitate grants retrieval -->
<!-- </p> -->
</div>

<!-- <div class="reg_con5">
<select class="delivery" name="delivery">
  <option value="">Delivery Method</option>
  <option value="cash">Cash</option>
  <option value="cheque">Cheque</option>
</select>
</div> -->

<div class="reg_con5">
  <label  for="template-application-money">Describe what you will use the money for:</label>
  <textarea name="template-application-usedescription" cols="64" rows="6"  ></textarea>
  </br>
  <span class="errors"><?php echo $describeErr; ?></span>
</div>

<div class="reg_con5">
  <label  for="template-application-money">What unique things would separate you from other applicants applying for this money?</label>
  <textarea name="template-application-uniquedescription" cols="64" rows="6"  style="border: 1px solid #4CAF50;
color: #000;"></textarea>
</br>
<span class="errors"><?php echo $uniqueErr; ?></span>
</div>

<div class="reg_con6">
<label>What Email address would you like to use for your Username for your Online Grant Application Account?</label>
<input type="text" name="template-application-email" >
  </br>
<span class="errors"><?php echo $emailErr; ?></span>
<i>(ie. yourmail@hotmail.com)</i>
<i style="display: block;font-size: 12px;margin-bottom: 5px;">** Your email is safe. We hate spam as much as you do!!</i>
<i style="display: block;font-size: 12px;margin-bottom: 5px;">** Your <u>Email</u> will be <u>your username</u> for the Government Grants.us website. Please double check it to be sure it is accurate!</i>
</div>

<div class="reg_con6">
<label>Password:</label>
<input type="password" name="template-application-password">
  </br>
<span class="errors"><?php echo $passwordErr; ?></span>
</div>

<div class="reg_con6">
<label>Confirm Password:</label>
<input type="password" name="template-application-password2">
  </br>
<span class="errors"><?php echo $password2Err; ?></span>
</div>

<div class="reg_con7">
  <label for="template-application-inform">
    <input type="checkbox" name="template-application-inform" value="yes" checked="checked">Yes, I want to receive emails on New Funding Opportunities as well as New Tips!</label>
</div>

<div class="reg_con8">
  <input type="submit" name="button" id="sub_button" value="Submit" class="submit-btn btn">
</div>
</form>


</div>
</section>
    <section class="main_con2">
<div class="container">
  <div class="grid">
<div class="con_inner">
  <p style="margin:0 0 25px;">To help provide you with the research help you need to apply,
    we have a small fee to cover the marketing
    and research costs associated with locating our database of thousands of applications.
    The fee is $29.95 for the first month of access. We also provide you with our GUARANTEE.
    If you apply to one of the sources on our site and get turned down, we will issue you a refund.
    All we ask is that you provide us with a copy of your denial letter.
    You will have 90 days from the date you register to submit your refund along with a copy of your denial letter.
    You have absolutely nothing to lose! We have the tools and resources to help you in your quest for funding!</p>

  </div>
</div>
  </div>
</div>
    </section>

  </main>


  <footer class="footy">
        <section class="foot_menu3">
          <div class="container">
            <p id="foor">
              Government
 Grants is not a government agency and is not affiliated with the United
 States Government or any other funding agency. Government Grants
supplies training materials on how to apply for funding as well as
resources on where to apply.
            </p>
            <p id="foor">© Government Grants.us Copyright 2020</p>
          </div>
        </section>

  </footer>
  <script src="https://kit.fontawesome.com/0a6e3c7212.js" crossorigin="anonymous"></script>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/628f682f7b967b1179915cd5/1g402u0rl';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script type="text/javascript" src="js/script2.js"></script>
<?php }
else{
  header("location: index.php");
} 
?>
  </body>
  
  </html>
