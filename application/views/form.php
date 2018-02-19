<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.main.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/javascript/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/javascript/buyer/jsform.js"></script>
</head>
<body>
        <!-- LOGIN MODULE -->
         
        <div class="login">
            <div class="wrap">
                <!-- TERMS -->
                <div class="terms">
                    <h2>dp Terms of Service</h2>
                    <p class="small">Last modified: September 23, 2017</p>
                    <h3>Welcome to dp</h3>
                    <p>By using our Services, you are agreeing to these terms. Please read them carefully.</p>
                    <p>Our Services are very diverse, so sometimes additional terms or product requirements (including age requirements) may apply. Additional terms will be available with the relevant Services, and those additional terms become part of your agreement with us if you use those Services.</p>
                    <h3>Using our Services</h3>
                    <p>You must follow any policies made available to you within the Services.</p>
                    <p>Using our Services does not give you ownership of any intellectual property rights in our Services or the content you access. You may not use content from our Services unless you obtain permission from its owner or are otherwise permitted by law. These terms do not grant you the right to use any branding or logos used in our Services. Don’t remove, obscure, or alter any legal notices displayed in or along with our Services.</p>
                    <p>In connection with your use of the Services, we may send you service announcements, administrative messages, and other information. You may opt out of some of those communications.</p>
                    <h3>Your dp Account</h3>
                    <p>You may need a dp Account in order to use some of our Services. You may create your own dp Account, or your dp Account may be assigned to you by an administrator, such as your employer or educational institution. If you are using a dp Account assigned to you by an administrator, different or additional terms may apply and your administrator may be able to access or disable your account.</p>
                    <p>To protect your dp Account, keep your password confidential. You are responsible for the activity that happens on or through your dp Account. Try not to reuse your dp Account password on third-party applications.</p>
                    <h3>Privacy and Copyright Protection</h3>
                    <p>dp’s privacy policies explain how we treat your personal data and protect your privacy when you use our Services. By using our Services, you agree that dp can use such data in accordance with our privacy policies.</p>
                    <p>We respond to notices of alleged copyright infringement and terminate accounts of repeat infringers according to the process set out in the U.S. Digital Millennium Copyright Act.</p>
                    <p>We provide information to help copyright holders manage their intellectual property online. If you think somebody is violating your copyrights and want to notify us, you can find information about submitting notices and dp’s policy about responding to notices in our Help Center.</p>
                    <h3>Modifying and Terminating our Services</h3>
                    <p>We are constantly changing and improving our Services. We may add or remove functionalities or features, and we may suspend or stop a Service altogether.</p>
                    <p>You can stop using our Services at any time, although we’ll be sorry to see you go. dp may also stop providing Services to you, or add or create new limits to our Services at any time.</p>
                    <p>We believe that you own your data and preserving your access to such data is important. If we discontinue a Service, where reasonably possible, we will give you reasonable advance notice and a chance to get information out of that Service.</p>
                </div>

                <!-- RECOVERY -->
                <div class="recovery">
                    <h2>Password Recovery</h2>
                    <p>Enter either the <strong>email address</strong> or <strong>username</strong> on the account and <strong>click Submit</strong></p>
                    <p>We'll email instructions on how to reset your password.</p>
                    <form class="recovery-form" action="" method="post">
                        <input type="text" class="input" id="user_recover" placeholder="Enter Email or Username Here">
                        <input type="submit" class="tombol" value="Submit">
                    </form>
                </div>

                <!-- SLIDER -->
                <div class="content">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="<?php echo base_url();?>welcome"><img src="<?php echo base_url()?>assets/image/logoM.png" alt=""></a> 
                    </div>
                    <!-- SLIDESHOW -->
                    <div id="slideshow">
                        <div class="one">
                            <h2><span>MOCANTO</span></h2>
                            <p>Mocanto is a website-based information system. Mocanto provides online ordering and purchasing. Due to the less widespread area of ​​the Moklet canteen and the large number of students, that make students who want to buy food have to queue for long. Given that problem, we are making this innovation. With this website, the food vendors will also be helpful because they can serve all buyers well.</p>
                        </div>
                        <div class="two">
                            <h2><span>No Initials</span></h2>
                            <p>Food is Essential to Life , there fore MAKE IT GOOD</p>
                        </div>
                        <div class="three">
                            <h2><span>Irina Shayk</span></h2>
                            <p>Nothing is better than going home to family and eating good food and relaxing.</p>
                        </div>
                        <div class="four">
                            <h2><span>Dodie Smith</span></h2>
                            <p>I shouldn't think even millionaires could eat anything nicer than new bread and real butter and honey for tea.</p>
                        </div>
                    </div>
                </div>
                <!-- LOGIN FORM -->
                <div class="user">
                    <div class="form-wrap">
                        <!-- TABS -->
                    	<div class="tabs">
                            <h3 class="login-tab"><a class="log-in active" href="#login-tab-content"><span>Login<span></a></h3>
                    		<h3 class="signup-tab"><a class="sign-up" href="#signup-tab-content"><span>Sign Up</span></a></h3>
                    	</div>
                        <!-- TAB KONTEN -->
                    	<div class="tabs-content">
                            <!-- TABS KONTEN LOGIN -->
                    		<div id="login-tab-content" class="active">
                    			<form class="login-form" action="<?php echo base_url('welcome/login')?>" method="POST">
                    				<input type="text" class="input" id="user_login" name="user_login" autocomplete="off" placeholder="Username">
                    				<input type="password" class="input" id="user_pass" name="user_pass" autocomplete="off" placeholder="Password">
                    				<input type="submit" class="tombol" value="Login" name="submit" href="<?php echo base_url('buyer/home')?>">
                                    <br>
                                    <br>
                                    <?php
                                        if (!empty($notif)) {
                                        # code...
                                        echo '<div class="alert alert-danger">';
                                        echo $notif;
                                        echo "</div>";
                                        }
                                    ?><?php
                                        if (!empty($notip)) {
                                        # code...
                                        echo '<div class="alert alert-danger">';
                                        echo $notip;
                                        echo "</div>";
                                        }
                                    ?>
                    			</form>
                    		</div>
                            <!-- TAB KONTEN SIGNUP -->
                    		<div id="signup-tab-content">
                    			<form class="signup-form" action="<?php echo base_url('welcome/sign_up')?>" method="post">
                    				<input type="text" class="input" id="full_name" name="fullname" autocomplete="off" placeholder="Nama Lengkap">
                                    <input type="text" class="input" id="user_pass" name="room" autocomplete="off" placeholder="Kelas/Kantin">
                    				<input type="text" class="input" id="number" name="hp" autocomplete="off" placeholder="No Telefon">
                    				<input type="text" class="input" id="user_name" name="username" autocomplete="off" placeholder="Username">
                    				<input type="password" class="input" id="user_pass" name="password" autocomplete="off" placeholder="Password">
                    				<input type="submit" name="submit" class="tombol" value="SIGN UP">
                    			</form>
                    			<div class="help-action">
                    				<p>By signing up, you agree to our</p>
                    				<p><i class="fa fa-arrow-left" aria-hidden="true"></i><a class="agree" href="#">Terms of service</a></p>
                    			</div>
                    		</div>
                    	</div>
                	</div>
                </div>
            </div>
        </div>

</body>
</html>
