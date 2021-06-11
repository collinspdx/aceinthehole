<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Ace In The Hole: Home Page</title>
	<meta name="author" content="Carolyn Collins">
	<meta name="description" content="Ace In The Hole Multisport Weekend Event Annual Triathlon in Oregon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Footer Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Fonts - REDO THIS MESS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,900&family=Cantarell:wght@700&family=Catamaran:wght@900&family=Lato:ital,wght@1,900&family=Maven+Pro:wght@900&family=Open+Sans+Condensed:wght@300&family=Poppins:wght@300&family=Titillium+Web:wght@900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    
    <!-- Layout Style, Nav Menu stylesheets, hamburger icon -->
    <link rel="stylesheet" href="layoutcss.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="styles/navigationstyle.css">
    
    <!-- Form items -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="contactform.css" >
    
        <!--<script src="form.js"></script>-->
</head>

<body>
   
    <header>
            <div class="header-left">
                <h1>Ace In The Hole</h1>
            </div>
            <div class="header-right">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="coursedetails.html">Course Details</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="racedayinfo.html">Race Day Info</a></li>
                    <li><a href="contact.html">FAQ / Contact Us</a></li>
                </ul>
                <a href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <div class="hamburger-menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="coursedetails.html">Course Details</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="raceinfo.html">Race Day Info</a></li>
                    <li><a href="contact.html">FAQ / Contact Us</a></li>
                </ul>
                <a href="#" class="close">
                    <i class="fas fa-times"></i>
                </a>
            </div>
    </header>
    
        
    <section class="contactbanner">
        <div class="banner-text">
            <h1 class="contactbannertext">Contact Us / FAQ</h1>
        </div>
    </section>
           
	<main id="faq"> 
            <h2>Frequently Asked Questions</h2>
            <dl>
                <dt>What are the Rules?</dt>
                    <dd>We currently adhere to the USAT Rules for Triathlon & Duathlon. Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</dd>
                <dt>Can I use a personal music device while cycling?</dt>
                    <dd>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</dd>
                <dt>Can I use a personal music device while running?</dt>
                    <dd>During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.</dd>
                        <dd>If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.</dd>
                        <dd>If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.</dd>
                        <dd>We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</dd>
                <dt>Do I need to wear a wetsuit?</dt>
                    <dd>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</dd>
                <dt>Do I have to use a road or racing bike?</dt>
                    <dd>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</dd>
            </dl>
        </main>
        
    <section class="bottom">
        <div id="stylized" class="myform">

            <form id="form1" id="form1" action="/mail.php" method="POST">

                <label>First Name</label><input type="text" name="firstname">

                <label>Last Name</label><input type="text" name="lastname">

                <label>Email<span class="small">example@email.com</span></label>
                    <input type="text" name="email">

                <br />
                <br />
                <br />

                    <label>Which Are You?</label>
                <select name="type" size="1">
                <option class="placeholder" value="" disabled selected>Select one</option>
                <option value="update">Athlete</option>
                <option value="change">Volunteer</option>
                <option value="addition">Just Interested</option>
                </select>

                    <label>Message<span class="small">Type Your Message</span></label>
                        <textarea name="message" rows="8" cols="25"></textarea><br />

                    <button type="submit" value="Send" style="margin-top:15px;">Submit</button>
                <div class="spacer"></div>

            </form>
        </div>
        </section>
    
    
    
	<footer>
        <div class="row">
            <a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/pcccas222/with_replies?lang=en"><i class="fab fa-twitter"></i></a>
            </div>

            <div class="row">
            <ul>
                <li><a href="index.html">Home</a></li>
                    <li><a href="coursedetails.html">Course Details</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="racedayinfo.html">Race Day Info</a></li>
                    <li><a href="contact.html">FAQ / Contact Us</a></li>
            </ul>
            </div>

            <div class="row">
            <p>Ace In The Hole Multisport Events Copyright © 2021 - All rights reserved</p>
            </div>
           
        <?php include 'countdown.php';?>
    </footer>
	<script type="text/javascript" src="#"></script>
</body>

</html>

