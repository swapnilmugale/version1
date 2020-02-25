<?php include 'php-code/backend.php'; ?>
<!DOCTYPE html>

<html lang="en-US">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://www.puravankara.com/campaigns/purvaaspire/assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="https://www.puravankara.com/campaigns/purvaaspire/assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/contact.css" rel="stylesheet" type="text/css">
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		function validate()
		{
			//alert("error");
			var name = document.forms.enquiry.name;
			var number = document.forms.enquiry.mobile;
			alphaExp = /^[a-zA-Z]+$/;
			//alert("thanx");
			if(!name.value.match(alphaExp))
			{
				//alert("please enter character");
				name.focus();
				return false;
			}
			
		}
		
	</script>
   <!-- <link rel="stylesheet" href="https://www.puravankara.com/campaigns/purvaaspire/assets/bootstrap/css/bootstrap.css" type="text/css"> -->
    <link rel="stylesheet" href="https://www.puravankara.com/campaigns/purvaaspire/assets/css/owl.carousel.css" type="text/css"> 
    <!--<link rel="stylesheet" href="https://www.puravankara.com/campaigns/purvaaspire/assets/css/magnific-popup.css" type="text/css"> -->
    <link rel="stylesheet" href="https://www.puravankara.com/campaigns/purvaaspire/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://www.puravankara.com/campaigns/purvaaspire/assets/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="https://www.puravankara.com/campaigns/purvaaspire/assets/css/fontawesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://www.puravankara.com/campaigns/purvaaspire/assets/css/fontawesome.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel=icon href=../../assets/images/favicon.png sizes=32x32>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Park Distrit - #Abetterlife</title></head>

    <style>
        .hero-slide .img-responsive-mobile {
            display: none;
        }

        @media only screen and (max-device-width: 480px) {
            .hero-slide .img-responsive-oth {
                display: none;
            }

            .hero-slide .img-responsive-mobile {
                display: block;
            }

            .item {

                margin-bottom: 50px;
            }

            .itemb {
                margin-bottom: 0px;
            }

            .fancyTab .fa {
                padding: 0;
            }

            #mh {
                padding: 20px 14px;
            }

            #lib {
                padding: 20px 52px;
            }

            #gym {
                padding: 20px 56px;
            }

            #game {
                padding: 20px 30px;
            }

            .maphead {
                font-size: 1.825rem;
            }

            .heading1 {
                font-size: 18px;
            }
        }
    </style>
    
<!-- Remarketing Code -->
<script type="text/javascript"> var adohm_tracking_ids = ['5e41387b9df5fa5662c5b8bc', null, ['AW-680322370', 'Nxz5CMHtgcMBEMLKs8QC'], null]; function initializeAdohm() { initializeTrack('PageView'); } </script>
<script type="text/javascript" src="../../../app.adohm.com/api/v2/assets/adohm_remarketing.js"></script>
</head>

<!--<body class="has-loading-screen links-hover-effect" data-spy="scroll" data-target=".navigation">-->

<body class="has-loading-screen links-hover-effect" data-spy="scroll">
    <div class="page-wrapper" id="page-top">
        <header id="page-header">
            <nav class="navigation background-is-dark">
                <div class="container containerb">
                    <div class="wrapper ">
                        <div class="left">
                            <a href="#home" class="brand" style="margin-top:10px; margin-bottom:10px;"><img src="images\logo.png" height="50" width="300" alt=""></a>
                        </div>
                        <!--end left-->
                        <div class="right">
                            <ul class="nav navigation-links animate">
                                <li><a href="#page-top" class="scroll">Home</a></li>
                                <li><a href="#unitplan" class="scroll">Unit Plans</a></li>
                                <li><a href="#amenities" class="scroll">Amenities</a></li>
                                <li><a href="#location" class="scroll">Location</a></li>
                                <li><a href="#contact" class="scroll">Contact</a></li>
                                <li><a href="#brochure">Download Brochure</a></li>
                            </ul>
                            <div class="nav-btn">
                                <figure></figure>
                                <figure></figure>
                                <figure></figure>
                            </div>
                        </div>
                        <!--end right-->
                    </div>
                </div>
                <!--end container-->
            </nav>
			
			<!-- form 2-->
			
			
			<!--end form 2 -->
			

            <div class="sliding-contact action active">
                <div class="con-toggle action active">
                    <p>Enquire Now</p>
                </div>
                <!--<form method="post" id="input" action="thankyou.php" onsubmit="return subExistingForm(this.id)">-->
                <form name="enquiry" method="post" id="input" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <h2>Please enter your details</h2>
                    <input type="text" name="name" id="name" placeholder="First Name*"  pattern="[A-Za-z]" title="Characters Only" required="">
					<div class="error"><?php echo "$namerr"?></div>
                    <select onchange="changeExistingCountry(this.value)" name="CountryCode" id="country" required="">
                <option value="Country" selected="" disabled="">Country*</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="British Virgin Islands">British Virgin Islands</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Caribbean Netherlands">Caribbean Netherlands</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Curacao">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czechia">Czechia</option>
                <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
                <option value="Gabon">Gabon</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India" selected>India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Kosovo">Kosovo</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia (FYROM)">Macedonia (FYROM)</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn Islands">Pitcairn Islands</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Republic of the Congo">Republic of the Congo</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Sint Maarten">Sint Maarten</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                <option value="South Korea">South Korea</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="The Bahamas">The Bahamas</option>
                <option value="The Gambia">The Gambia</option>
                <option value="Timor-Leste">Timor-Leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                	<option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City">Vatican City</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
                   <input type="number" name="mobile"  placeholder="Phone Number*"  pattern="[0-9]{10}" required="" min=10>
                    <input type="email" name="email" id="email" placeholder="Email*" required="">
                    <!-- salesforce required hidden input -->
                       
                    <input type="submit" name="submit" onclick="validate()">
					
                </form>
            </div>
            <!--end navigation-->
            <div class="hero-section background-is-dark">

                <!--end wrapper-->
                <div class="owl-carousel" data-owl-dots="0" data-owl-nav="0" data-owl-autoplay="1" data-owl-loop="1" data-owl-fadeout="1">

                    <div class="hero-slide">
                        <div class="bg-transfer img-responsive-oth"><img src="images/slide1.png" alt=""></div>
                        <div class="bg-transfer img-responsive-mobile"><img src="images/slide1.png" alt=""></div>
                    </div>

                    <div class="hero-slide">
                        <div class="bg-transfer img-responsive-oth"><img src="images/slide1.png" alt=""></div>
                        <div class="bg-transfer img-responsive-mobile"><img src="images/slide1.png" alt=""></div>
                    </div>

                </div>
                <!--end owl-carousel-->
            </div>
		
            <!--end hero-section-->
        </header>
        <!--end page-header-->

        <div class="block">
            <div class="container">
                <div class="detail left-align">
                    <div class="title">
                        <h3 class="framed">Replace Smart Upgrade  <span style="color:#cbad90">- Ultra Spacious Homes</span></h3>
                    </div>
                    <!--end title-->
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="gallery" data-scroll-reveal="enter left and move 20px after">
                                <div class=" one-item-carousel">
                                    <img src="images/5.png" alt="">

                                </div>
                            </div>
                            <!--end gallery-->
                        </div>
                        <!--end col-md-7-->
                        <div class="col-md-5 col-sm-5">
                            <div class="description" data-scroll-reveal="enter right and move 20px">
                                <!--                                <h4>High quality materials</h4>-->
                                <p>What would you call a Better Life? A life in which you are well-connected to your family and your community. When you are well-connected to all the places you care about. And when you are well-connected to all the experiences / Destination you like.
After offering better lives to thousands of people across Pune, Pride Purple Group now brings it to you Hinjawadi!
                                </p>

                            </div>
                            <!--end description-->
                        </div>
                        <!--end col-md-5-->
                    </div>
                    <!--end row-->
                </div>
                <!--end detail-->
                <div class="detail right-align">
                    <div class="title">
                        <h3 class="framed">Replace Smart Technology<span style="color:#cbad90"><br>- Excellent Connectivity</span></h3>
                    </div>
                    <!--end title-->
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <div class="description" data-scroll-reveal="enter left and move 20px after">
                                <!--                                <h4>Feel your new home</h4>-->
                                <p>Your hectic life shouldn’t keep you away from experiencing all the things you like. At Park Connect, you will have more than 20 top-notch amenities at your service, so that you always experience the best of life has to offer.
                                </p>
                            </div>
                            <!--end description-->
                        </div>
                        <!--end col-md-5-->
                        <div class="col-md-7 col-sm-7">
                            <div class="gallery" data-scroll-reveal="enter right and move 20px">

                                <div class=" one-item-carousel">
                                    <img src="images/6.png" alt="">

                                </div>
                            </div>
                            <!--end gallery-->
                        </div>
                        <!--end col-md-7-->
                    </div>
                    <!--end row-->
                </div>
                <!--end detail-->
				<div class="detail left-align">
                    <div class="title">
                        <h3 class="framed">#THE BETTER LIFE<span style="color:#cbad90">-COMES TO HINJEWADI</span></h3>
                    </div>
                    <!--end title-->
                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <div class="gallery" data-scroll-reveal="enter left and move 20px after">
                                <div class=" one-item-carousel">
                                    <img src="images/5.png" alt="">

                                </div>
                            </div>
                            <!--end gallery-->
                        </div>
                        <!--end col-md-7-->
                        <div class="col-md-5 col-sm-5">
                            <div class="description" data-scroll-reveal="enter right and move 20px">
                                <!--                                <h4>High quality materials</h4>-->
                                <p>At Park Connect, every aspect, from interiors to exteriors to layouts, is designed to help you experience #TheBetterLife in totality.
                                </p>

                            </div>
                            <!--end description-->
                        </div>
                        <!--end col-md-5-->
                    </div>
                    <!--end row-->
                </div>
                <!--end detail-->
				
				
            </div>
            <!--end container-->
        </div>
        <!--end block-->

        <section class="blog" data-scroll-index="4">
            <div class="container">



                <!-- blog items -->
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="item">
                            <div class="img">
                                <img src="images/7.png" alt="">
                            </div>
                            <div class="info" style="margin-bottom: 40px;">

                                <a href="#">
                                    <h4><b>Gear Up For A Fitter Life</b></h4>
                                </a>
                                <p>A ‘better life’ would be incomplete if it doesn’t connect you quickly to all the destinations important to you. At Park Connect, you will always be a comfortable distance away from the places you care about.</p>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="item">
                            <div class="img">
                                <img src="images/8.png" alt="">
                            </div>
                            <div class="info">

                                <a href="#">
                                    <h4><b>Give Your Child A Safer Childhood</b></h4>
                                </a>
                                <p>The homes at Park Connect are planned to offer you a <br>‘better’ living experience. Not only will the spaces offer you<br> maximum possible usable space, but also<br>ample natural light and ventilation.<br>

 </p>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="item itemb">
                            <div class="img">
                                <img src="images/9.png" alt="">
                            </div>
                            <div class="info" style="margin-bottom: 20px;">

                                <a href="#">
                                    <h4><b>Experience The Joy Of Togetherness</b></h4>
                                </a>
                                <p>Work, walk, chat, celebrate, or unwind, enjoy all that your heart wishes in a close-knit community at park connect. Each member is seamlessly connected to the entire community, thus providing a sense of security and warmth.</p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <div class="block" id="unitplan">
            <div class="container">
                <h2>Unit <span style="color:#cbad90">plans</span></h2>
                <div class="table-responsive">
                    <table class="pricing-table">
                        <thead>
                            <tr>
                                <th>Apartment</th>
                                <th colspan="2">Carpet in m<sup>2</sup> or ft<sup>2</sup></th>

                                <th colspan="2">Usable in m<sup>2</sup> or ft<sup>2</sup></th>
                                <th colspan="2">SBA in m<sup>2</sup> or ft<sup>2</sup></th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2BHK(S)</td>
                                <td>~66.84 m<sup>2</sup></td>
                                <td>~719 ft<sup>2</sup></td>
                                <td>~76.88 m<sup>2</sup></td>
                                <td>~828 ft<sup>2</sup></td>
                                <td>~109.64 m<sup>2</sup> </td>
                                <td>~1,180 ft<sup>2</sup></td>






                                <td>
                                    <a href="images/fp1.png" class="image-popup layoutbtn ">Floor plan</a>

                                    <!--                                <a href="" class="link arrow underline" data-toggle="modal" data-target="#floor-modal">Image</a></td>-->
                            </tr>
                            <!--                        <tr class="not-available">-->
                            <tr>
                                <td>2BHK(L)</td>
                                <td>~71.45 m<sup>2</sup></td>
                                <td>~769 ft<sup>2</sup></td>
                                <td>~90.69 m<sup>2</sup></td>
                                <td>~976 ft<sup>2</sup></td>
                                <td>~124.60 m<sup>2</sup> </td>
                                <td>~1,341 ft<sup>2</sup></td>
                                <td><a href="images/fp2.png" class="image-popup layoutbtn ">Floor Plan</a></td>
                            </tr>
                            <tr>
                                <td>3BHK(S)</td>
                                <td>~91.40 m<sup>2</sup></td>
                                <td>~984 ft<sup>2</sup></td>
                                <td>~107.08 m<sup>2</sup></td>
                                <td>~1,153 ft<sup>2</sup></td>
                                <td>~151.39 m<sup>2</sup> </td>
                                <td>~1,630 ft<sup>2</sup></td>
                                <td><a href="images/fp3.png" class="image-popup layoutbtn ">Floor plan</a></td>
                            </tr>
                            <tr>
                                <td>3BHK(L)</td>
                                <td>~91.38 m<sup>2</sup></td>
                                <td>~984 ft<sup>2</sup></td>
                                <td>~134.95 m<sup>2</sup></td>
                                <td>~1,453 ft<sup>2</sup></td>
                                <td>~167.69 m<sup>2</sup> </td>
                                <td>~1,805 ft<sup>2</sup></td>
                                <td><a href="images/fp4.png" class="image-popup layoutbtn ">Floor plan</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <!--end pricing-table-->
                </div>
                <!--end table-responsive-->
            </div>
            <!--end container-->
            <div class="background-wrapper">
                <div class="background-color background-color-black opacity-5"></div>
            </div>
            <!--end background-wrapper-->
        </div>
        <!--end block-->


        <section id="amenities">
            <h2>Amenities</h2>
			<script src="https://kit.fontawesome.com/a076d05399.js"></script>
            <!--  <p class="section-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
            <div class="services-grid">
                <div class="service service1">
                    <i class="fas fa-swimmer"></i>
                    <h4>Swimming Pool</h4>


                </div>

                <div class="service service2" id="game" style="">
                    <i class="fas fa-chess"></i>
                    <h4>Indoor Games</h4>


                </div>

                <div class="service service3" id="gym" style="">
                    <i class="fas fa-dumbbell"></i>
                    <h4>Gym</h4>


                </div>

                <div class="service service4" id="lib" style="">
                    <i class="fas fa-book-reader"></i>
                    <h4>Library</h4>


                </div>

                
				
            </div>
        </section>
			<section id="amenities">
		    <div class="services-grid">
                 <div class="service service3" id="mh" style="">
                    <i class="fas fa-hotel"></i>
                    <h4>Multipurpose Hall</h4>
				


                </div>

                <div class="service service5" id="game" style="">
                    <i class="fas fa-user-shield"></i>
                    <h4>Security</h4>


                </div>

                <div class="service service1" id="gym" style="">
                    <i class="fas fa-car"></i>
                    <h4>Parking</h4>


                </div>

                <div class="service service2" id="lib" style="">
                    <i class="fas fa-table-tennis"></i>
                    <h4>Sports</h4>


                </div>
            </div>
        </section>



        <div id="page-content">


            <div class="container" id="location">
                <section id="fancyTabWidget" class="tabs t-tabs">
                    <h2>Location</h2>
                    <ul class="nav nav-tabs fancyTabs" role="tablist">

                        <li class="tab fancyTab active">
                            <div class="arrow-down">
                                <div class="arrow-down-inner"></div>
                            </div>
                            <a id="tab0" href="#tabBody0" role="tab" aria-controls="tabBody0" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-map-marker" aria-hidden="true"></span><span class="hidden-xs">Location Map</span></a>

                        </li>

                        <li class="tab fancyTab">
                            <div class="arrow-down">
                                <div class="arrow-down-inner"></div>
                            </div>
                            <a id="tab1" href="#tabBody1" role="tab" aria-controls="tabBody1" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-star"></span><span class="hidden-xs">Tech Parks/SEZs</span></a>
                            <div class="whiteBlock"></div>
                        </li>

                        <li class="tab fancyTab">
                            <div class="arrow-down">
                                <div class="arrow-down-inner"></div>
                            </div>
                            <a id="tab2" href="#tabBody2" role="tab" aria-controls="tabBody2" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-mortar-board"></span><span class="hidden-xs">Colleges</span></a>
                            <div class="whiteBlock"></div>
                        </li>

                        <li class="tab fancyTab">
                            <div class="arrow-down">
                                <div class="arrow-down-inner"></div>
                            </div>
                            <a id="tab3" href="#tabBody3" role="tab" aria-controls="tabBody3" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-shopping-cart"></span><span class="hidden-xs">Malls</span></a>
                            <div class="whiteBlock"></div>
                        </li>

                        <li class="tab fancyTab">
                            <div class="arrow-down">
                                <div class="arrow-down-inner"></div>
                            </div>
                            <a id="tab4" href="#tabBody4" role="tab" aria-controls="tabBody4" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-bed"></span><span class="hidden-xs">Hotels</span></a>
                            <div class="whiteBlock"></div>
                        </li>

                        <li class="tab fancyTab">
                            <div class="arrow-down">
                                <div class="arrow-down-inner"></div>
                            </div>
                            <a id="tab5" href="#tabBody5" role="tab" aria-controls="tabBody5" aria-selected="true" data-toggle="tab" tabindex="0"><span class="fa fa-medkit"></span><span class="hidden-xs">Hospitals</span></a>
                            <div class="whiteBlock"></div>
                        </li>




                    </ul>
                    <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
                        <div class="tab-pane  fade active in" id="tabBody0" role="tabpanel" aria-labelledby="tab0" aria-hidden="false" tabindex="0">
                            <div>
                                <div class="row">

                                    <div class="col-md-12 heading1">
                                        <h2>Location Map</h2>

                                        <div role="tabpanel" class="tab-pane fade in active" id="">
                                            <a href="images/10.png" class="image-popup"><img src="images/10.png" alt=""></a>
                                            <div class="note">Click to zoom</div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane  fade" id="tabBody1" role="tabpanel" aria-labelledby="tab1" aria-hidden="true" tabindex="0">
                            <div class="row">

                                <div class="col-md-12">
                                    <h2>Tech Parks/SEZs</h2>

                                </div>

                                <div class="tab-content">
                                    <div class="col-md-8" role="tabpanel" class="tab-pane fade in active" id="modal-floor-plan-1">
                                        <a href="https://www.puravankara.com/campaigns/purvaaspire/assets/img/it-parks.jpg" class="image-popup"><img src="https://www.puravankara.com/campaigns/purvaaspire/assets/img/it-parks.jpg" alt=""></a>
                                        <div class="note">Click to zoom</div>
                                    </div>
                                </div>
                                <!--end tab-content-->

                                <div class="right col-md-4">
                                    <ul>
                                        <li>Hinjewadi IT Park</li>
                                        <li>Prabhavee Tech Park</li>
                                        <li>Nano Space IT Park</li>
                                        <li>Pune IT Park</li>
                                        <li>Oracle</li>

                                    </ul>


                                </div>
                                <!--end right-->

                            </div>
                            <!--end modal-->
                        </div>

                        <div class="tab-pane  fade" id="tabBody2" role="tabpanel" aria-labelledby="tab2" aria-hidden="true" tabindex="0">
                            <div class="row">
                                <div class="col-md-12 heading1">
                                    <h2>Schools/Collages</h2>
                                </div>
                                <div class="tab-content">
                                    <div class="col-md-8" role="tabpanel" class="tab-pane fade in active" id="modal-floor-plan-1">
                                        <a href="https://www.puravankara.com/campaigns/purvaaspire/assets/img/school.jpg" class="image-popup"><img src="https://www.puravankara.com/campaigns/purvaaspire/assets/img/school.jpg" alt=""></a>
                                        <div class="note">Click to zoom</div>
                                    </div>
                                </div>
                                <!--end tab-content-->

                                <div class="right col-md-4">
                                    <ul>
                                        <li>Ryan International School</li>
                                        <li>Periwinkle English Medium</li>
                                        <li>Sri Sri Ravishankar</li>
                                        <li>Oxford International</li>
                                        <li> Suryadatta College Of Management Information</li>
                                        <li> Indian Institute of Cost and Management Studies</li>
                                        <li>Vasantdada Patil Institute Of Engineering</li>
                                        <li>Indsearch</li>
                                        <li> Indira Group </li>
                                    </ul>


                                </div>
                            </div>
                        </div>



                        <div class="tab-pane  fade" id="tabBody3" role="tabpanel" aria-labelledby="tab3" aria-hidden="true" tabindex="0">
                            <div class="row">
                                <div class="col-md-12 heading1">
                                    <h2>Malls</h2>
                                </div>
                                <div class="tab-content">
                                    <div class="col-md-8" role="tabpanel" class="tab-pane fade in active" id="modal-floor-plan-1">
                                        <a href="https://www.puravankara.com/campaigns/purvaaspire/assets/img/hospitals.jpg" class="image-popup"><img src="https://www.puravankara.com/campaigns/purvaaspire/assets/img/hospitals.jpg" alt=""></a>
                                        <div class="note">Click to zoom</div>
                                    </div>
                                </div>
                                <!--end tab-content-->

                                <div class="right col-md-4">


                                    <ul>
                                        <li> Aditya Shagun Mall </li>
                                        <li> Bagfull </li>
                                        <li> Reliance Mall </li>
                                        <li> Pavilion </li>
                                    </ul>


                                </div>
                            </div>
                        </div>



                        <div class="tab-pane  fade" id="tabBody4" role="tabpanel" aria-labelledby="tab4" aria-hidden="true" tabindex="0">
                            <div class="row">
                                <div class="col-md-12 heading1">
                                    <h2>Hotels</h2>
                                </div>
                                <div class="tab-content">
                                    <div class="col-md-8" role="tabpanel" class="tab-pane fade in active" id="modal-floor-plan-1">
                                        <a href="https://www.puravankara.com/campaigns/purvaaspire/assets/img/hotel.jpg" class="image-popup"><img src="https://www.puravankara.com/campaigns/purvaaspire/assets/img/hotel.jpg" alt=""></a>
                                        <div class="note">Click to zoom</div>
                                    </div>
                                </div>
                                <!--end tab-content-->

                                <div class="right col-md-4">


                                    <ul>
                                        <li>Sayaji Hotels</li>
                                        <li>The Gateway</li>
                                        <li>Radisson Blu</li>
                                        <li>United 21</li>
                                        <li> J.W. Marriott</li>
                                        <li>Ambrosia Spa &amp; Resort</li>
                                    </ul>

                                </div>
                            </div>
                        </div>




                        <div class="tab-pane  fade" id="tabBody5" role="tabpanel" aria-labelledby="tab5" aria-hidden="true" tabindex="0">
                            <div class="row">
                                <div class="col-md-12 heading1">
                                    <h2>Hospitals</h2>
                                </div>
                                <div class="tab-content">
                                    <div class="col-md-8" role="tabpanel" class="tab-pane fade in active" id="modal-floor-plan-1">
                                        <a href="https://www.puravankara.com/campaigns/purvaaspire/assets/img/hospitals1.jpg" class="image-popup"><img src="https://www.puravankara.com/campaigns/purvaaspire/assets/img/hospitals1.jpg" alt=""></a>
                                        <div class="note">Click to zoom</div>
                                    </div>
                                </div>
                                <!--end tab-content-->

                                <div class="right col-md-4">


                                    <ul>
                                        <li>Chellaram Hospital - Diabetes Care &amp; Multi Speciality</li>
                                        <li> Bavdhan Medicare Centre</li>
                                        <li>Tirupati Hosp.</li>
                                        <li> Asian Speciality Hosp.</li>
                                        <li>Lopmudra Polyclinic &amp; Diagnostics Center </li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <div class="modal fade apartment-selector" id="floor-modal1" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon_close"></i></button>
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="title">

                                <h1 class="modal-title heading1">Tech Parks/SEZs & Star Hotels & Resorts</h1>

                            </div>
                        </div>
                        <!--end modal-header-->
                        <div class="modal-body">
                            <div class="left">
                                <ul class="nav nav-tabs" role="tablist">

                                </ul>
                                <!--end nav-tabs-->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="modal-floor-plan-1">
                                        <a href="https://www.puravankara.com/campaigns/purvaaspire/assets/img/it-parks.jpg" class="image-popup"><img src="https://www.puravankara.com/campaigns/purvaaspire/assets/img/it-parks.jpg" alt=""></a>
                                        <div class="note">Click to zoom</div>
                                    </div>
                                </div>
                                <!--end tab-content-->
                            </div>
                            <!--end left-->
                            <div class="right">
                                <ul>
                                    <li>Hinjewadi IT Park</li>
                                    <li>Prabhavee Tech Park</li>
                                    <li>Nano Space IT Park</li>
                                    <li>Pune IT Park</li>
                                    <li>Oracle</li>
                                    <li>Sayaji Hotels</li>
                                    <li>The Gateway</li>
                                    <li>Radisson Blu</li>
                                    <li>United 21</li>
                                    <li> J.W. Marriott</li>
                                    <li>Ambrosia Spa &amp; Resort</li>
                                </ul>


                            </div>
                            <!--end right-->
                        </div>
                        <!--end modal-body-->
                    </div>
                    <!--end modal-content-->
                </div>
                <!--end modal-dialog-->
            </div>
            <!--end modal-->
            <div class="modal fade apartment-selector" id="floor-modal2" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon_close"></i></button>
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="title">

                                <h1 class="modal-title heading1">Schools/Collages</h1>

                            </div>
                        </div>
                        <!--end modal-header-->
                        <div class="modal-body">
                            <div class="left">
                                <ul class="nav nav-tabs" role="tablist">

                                </ul>
                                <!--end nav-tabs-->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="modal-floor-plan-1">
                                        <a href="https://www.puravankara.com/campaigns/purvaaspire/assets/img/school.jpg" class="image-popup"><img src="https://www.puravankara.com/campaigns/purvaaspire/assets/img/school.jpg" alt=""></a>
                                        <div class="note">Click to zoom</div>
                                    </div>
                                </div>
                                <!--end tab-content-->
                            </div>
                            <!--end left-->
                            <div class="right">
                                <ul>
                                    <li>Ryan International School</li>
                                    <li>Periwinkle English Medium</li>
                                    <li>Sri Sri Ravishankar</li>
                                    <li>Oxford International</li>
                                    <li> Suryadatta College Of Management Information</li>
                                    <li> Indian Institute of Cost and Management Studies</li>
                                    <li>Vasantdada Patil Institute Of Engineering</li>
                                    <li>Indsearch</li>
                                    <li> Indira Group </li>
                                </ul>


                            </div>
                            <!--end right-->
                        </div>
                        <!--end modal-body-->
                    </div>
                    <!--end modal-content-->
                </div>
                <!--end modal-dialog-->
            </div>
            <!--end modal-->
            <div class="modal fade apartment-selector" id="floor-modal3" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon_close"></i></button>
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="title">

                                <h1 class="modal-title heading1">Hospitals/Malls</h1>

                            </div>
                        </div>
                        <!--end modal-header-->
                        <div class="modal-body">
                            <div class="left">
                                <ul class="nav nav-tabs" role="tablist">

                                </ul>
                                <!--end nav-tabs-->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="modal-floor-plan-1">
                                        <a href="https://www.puravankara.com/campaigns/purvaaspire/assets/img/hospitals.jpg" class="image-popup"><img src="https://www.puravankara.com/campaigns/purvaaspire/assets/img/hospitals.jpg" alt=""></a>
                                        <div class="note">Click to zoom</div>
                                    </div>
                                </div>
                                <!--end tab-content-->
                            </div>
                            <!--end left-->
                            <div class="right">
                                <h3>Parameters</h3>
                                <ul>
                                    <li>Chellaram Hospital - Diabetes Care &amp; Multi Speciality</li>
                                    <li> Bavdhan Medicare Centre</li>
                                    <li>Tirupati Hosp.</li>
                                    <li> Asian Speciality Hosp.</li>
                                    <li>Lopmudra Polyclinic &amp; Diagnostics Center </li>
                                </ul>
                                <h3>Shopping</h3>
                                <ul>
                                    <li> Aditya Shagun Mall </li>
                                    <li> Bagfull </li>
                                    <li> Reliance Mall </li>
                                    <li> Pavilion </li>
                                </ul>


                            </div>
                            <!--end right-->
                        </div>
                        <!--end modal-body-->
                    </div>
                    <!--end modal-content-->
                </div>
                <!--end modal-dialog-->
            </div>
            <!--end modal-->


            <div class="block mappad" id="contact">
                <div class="container">
                    <h2>Contact us</h2>
                    <div class="contact map">
                        <div class="row">
                            <div class="col-md-6 col-sm-6" data-scroll-reveal="enter bottom and move 20px">
                                <h3 style="font-size: 1.825rem;">Map</h3>

                                <iframe src="https://maps.google.com/maps?q=Hinjewadi&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="520" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
								

                            </div>
                            <div class="col-md-6 col-sm-6" data-scroll-reveal="enter top and move 20px">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <h3 style="font-size: 1.825rem;">Address</h3>
                                        <address>
                                            <b>Park District</b><br>
                                            Hinjewadi,<br>
                                            Pune Maharashtra<br>
                                            <br>
                                            <b></b><br>
                                            <br>
                                            <br>
                                        </address>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <h3 style="font-size: 1.825rem;">Social</h3>
                                        <div class="social">
										<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
                                            <a href="#facebook" target="_blank" >Facebook</a>
                                            <a href="#twitter" target="_blank">Twitter</a>
                                            <a href="#linkedin" target="_blank">Linkedin</a>
											
                                        </div>
										</div>
                                        <!--end social-->
												
							
								
										<div class="container2">  
  						<form id="contact2" action="" method="post">
  						  <h3>Contact us</h3>
  						  
  				  <fieldset>
  				    <input placeholder="Your name" type="text" tabindex="1" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
   
  </form>

</div>
</div>
				
								
                           </div>
                                <!--end form-contact -->
									
                            </div>
                            <!--end col-md-6-->
							
						
                        </div>
                        <!--end row-->
						
                    </div>
                    <!--end contact map-->
                </div>
                <!--end container-->
            </div>
            <!--end block-->
        </div>
        <!--end page-content-->

        <footer id="page-footer" class="block background-is-dark">
            <div class="container">
                <a href="#" class="brand"><img src="images/rera.png"  alt=""></a>
                <!--end brand-->
            
                <div class="note">Park Astra : RERA No – P52100024449 & Park Connect : RERA No- P52100020766 are a part of Park District. Park District is a 60-acre development and not the name of a scheme.Code name Park District will be made with multiple projects in multiple phases.</div>
                <hr>
                <div class="note">Copyrights © 2020 All Rights Reserved by Park District Limited.</div>
                <!--end note-->


            </div>
            <!--end container-->
            <div class="background-wrapper">
                <div class="bg-transfer opacity-30">
                    <img src="https://www.puravankara.com/campaigns/purvaaspire/assets/img/footer-bg.jpg" alt="">
                </div>
                <div class="background-color background-color-black"></div>
            </div>
            <!--end background-wrapper-->
        </footer>
        <!--end page-footer-->

    </div>
    <!--end page-wrapper-->

    <div class="modal fade apartment-selector" id="floor-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon_close"></i></button>
            <div class="modal-content">
                <div class="modal-header">
                    <div class="title">
                        <!--                    <h4></h4>-->
                        <h3>Purva Aspire</h3>
                        <h1 class="modal-title">2BHK Grand</h1>
                        <!--                    <h2>Unit plan</h2>-->
                    </div>
                </div>
                <!--end modal-header-->
                <div class="modal-body">
                    <div class="left">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#modal-floor-plan-1" aria-controls="modal-floor-plan-1" role="tab" data-toggle="tab">Unit Plan</a></li>

                        </ul>
                        <!--end nav-tabs-->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="modal-floor-plan-1">
                                <a href="https://www.puravankara.com/campaigns/purvaaspire/assets/img/floor-plan.jpg" class="image-popup"><img src="https://www.puravankara.com/campaigns/purvaaspire/assets/img/floor-plan.jpg" alt=""></a>
                                <div class="note">Click to zoom</div>
                            </div>

                        </div>
                        <!--end tab-content-->
                    </div>
                    <!--end left-->

                    <!--end right-->
                </div>
                <!--end modal-body-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>

    <script type="text/javascript" src="https://www.puravankara.com/campaigns/purvaaspire/assets/js/jquery-2.2.1.min.js"></script>
    <script type="text/javascript" src="https://www.puravankara.com/campaigns/purvaaspire/assets/js/jquery-migrate-1.2.1.min.js"></script>
<!--    <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>-->
    <script type="text/javascript" src="https://www.puravankara.com/campaigns/purvaaspire/assets/bootstrap/js/bootstrap.min.js"></script>
  <!--  <script type="text/javascript" src="https://www.puravankara.com/campaigns/purvaaspire/assets/js/jquery.validate.min.js"></script>-->
    <script type="text/javascript" src="https://www.puravankara.com/campaigns/purvaaspire/assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://www.puravankara.com/campaigns/purvaaspire/assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="https://www.puravankara.com/campaigns/purvaaspire/assets/js/scrollReveal.min.js"></script>
    <!--<script type="text/javascript" src="assets/js/jquery.appear.js"></script>-->
    <!--<script type="text/javascript" src="assets/js/waypoints.min.js"></script>-->
    <script type="text/javascript" src="https://www.puravankara.com/campaigns/purvaaspire/assets/js/readmore.min.js"></script>
    <script type="text/javascript" src="https://www.puravankara.com/campaigns/purvaaspire/assets/js/pace.min.js"></script>

    <script type="text/javascript" src="https://www.puravankara.com/campaigns/purvaaspire/assets/js/custom.js"></script>

    
    <script>
        $(document).ready(function() {
            $('.con-toggle-mob').click(function() {
                $('.sliding-contact-mob').toggleClass('active-mob')
                $('.con-toggle-mob').toggleClass('active-mob')
            })
        });
      $(document).ready(function() {
            $('.con-toggle').click(function() {
                $('.sliding-contact').toggleClass('active')
                $('.con-toggle').toggleClass('active')
            })
        });
		$(document).on('scroll' ,function() {
				 var top = $(document).scrollTop();
				 var t = true;
           	   
              // 	$('.con-toggle').;
			  
			  if(top == 0)
			  {
			  		
					$('.sliding-contact').toggleClass('active')
					$('.sliding-contact').addClass('action')
			  }
			  else
			  {
				
			  		$('.sliding-contact').removeClass('action')
					$('.sliding-contact').toggleClass('active')
					$('.sliding-contact').removeClass('active')
				
				}

			  });
	
			  
			
       
		
		
    </script>
	<script>
		function validation()
		{
			document.getElementById('thankyou').innerHTML = 'Thank you!';
		}
	</script

    <!--end modal-->
    <script>
        $(document).ready(function() {



            var numItems = $('li.fancyTab').length;


            if (numItems == 12) {
                $("li.fancyTab").width('8.3%');
            }
            if (numItems == 11) {
                $("li.fancyTab").width('9%');
            }
            if (numItems == 10) {
                $("li.fancyTab").width('10%');
            }
            if (numItems == 9) {
                $("li.fancyTab").width('11.1%');
            }
            if (numItems == 8) {
                $("li.fancyTab").width('12.5%');
            }
            if (numItems == 7) {
                $("li.fancyTab").width('14.2%');
            }
            if (numItems == 6) {
                $("li.fancyTab").width('16.666666666666667%');
            }
            if (numItems == 5) {
                $("li.fancyTab").width('20%');
            }
            if (numItems == 4) {
                $("li.fancyTab").width('25%');
            }
            if (numItems == 3) {
                $("li.fancyTab").width('33.3%');
            }
            if (numItems == 2) {
                $("li.fancyTab").width('50%');
            }




        });

        $(window).load(function() {

            $('.fancyTabs').each(function() {

                var highestBox = 0;
                $('.fancyTab a', this).each(function() {

                    if ($(this).height() > highestBox)
                        highestBox = $(this).height();
                });

                $('.fancyTab a', this).height(highestBox);

            });
        });
    </script>
    <!--end outer-wrapper-->
    
    <script type="text/javascript" src="../../../dmp.adohm.com/v1/api/tracker0bff.js?user=5e41387b9df5fa5662c5b8bc"></script><script type="text/javascript"> var interests = []; </script><script type="text/javascript"> var ex_form_ids = ['5e424e2faa9fa82ffac42c79', '5e424e92aa9fa82ffac42c7f'];</script><script type="text/javascript" src="../../../app.adohm.com/api/v2/assets/crm_existingform.js"></script>

</body>