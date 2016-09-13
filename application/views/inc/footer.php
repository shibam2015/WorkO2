<footer>
<div class="footer">
<div class="container">
<div class="row">
<div class="col-sm-3">
<div class="foot-logo"> <img src="assets/images/logo-w.png"> </div>
</div>
<div class="col-sm-3">
<h3>Buyers</h3>
<ul>
<li><a href="#">Post a Job</a></li>
<li><a href="#">How it works</a></li>
<li><a href="#">Find a Service</a></li>
<li><a href="#">Help centre</a></li>
</ul>
<div class="clearfix"></div>
</div>
<div class="col-sm-3">
<h3>Sellers</h3>
<ul>
<li><a href="#">Start Selling Services</a></li>
<li><a href="#">Sponsored Services</a></li>
<li><a href="#">Featured Services</a></li>
<li><a href="#">Send Custom Offers</a></li>
</ul>
<div class="clearfix"></div>
</div>
<div class="col-sm-3">
<h3>Company</h3>
<ul>
<li><a href="#">About WorkO2</a></li>
<li><a href="#">Careers</a></li>
<li><a href="#">Academy</a></li>
<li><a href="#">Business Opportunity</a></li>
</ul>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="footer-btm">
<div class="container">
<div class="col-sm-6 col-xs-12 pull-right">
<ul>
<li><a href="#"><img src="assets/icon/facebook.png"></a></li>
<li><a href="#"><img src="assets/icon/instagram.png"></a></li>
<li><a href="#"><img src="assets/icon/linkdin.png"></a></li>
<li><a href="#"><img src="assets/icon/message.png"></a></li>
</ul>
</div>
<div class="col-sm-6 col-xs-12 pull-left">
<p>2016 WorkO2 Private Limited Terms and condition Privacy policy</p>
</div>
<div class="clearfix"></div>
</div>
</div>
<!--Signup Popup-->
<div id="login" class="modal fade" role="dialog">
<div class="container">
<div class="col-lg-7 col-md-9 col-centered">
<div class="row">
<div class="login-pop">
<div class="col-sm-5">
<div class="row">
<div class="log-cntnt">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3>Login</h3>
<p>Get access to your Orders, Tailored Offers, Recommendations and more.</p>
<div class="login-img"> <img src="assets/images/login-img.png"> </div>
</div>
</div>
</div>
<div class="col-sm-7">
<div class="row">
<div class="log-frm">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<form>
<div class="log-inp">
<label class="labels" for="login-email">Enter Email</label>
<input type="text" name="email" id="login-email" placeholder="">
</div>
<div class="log-inp">
<div class="log-inp-pass">
<label class="labels" for="login-password">Enter password</label>
<input type="password" name="password" id="login-password" placeholder="">
</div>
<a href="#">Forgot?</a>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<div class="log-btns">
<div class="row">
<div class="col-sm-6">
<input type="button" name="log" id="log" onclick="login()" value="Login">
</div>
<div class="col-sm-6"> <a href="#signup" data-dismiss="modal" data-toggle="modal">New Here? Signup</a> </div>
</div>
<div class="clearfix"></div>
</div>
</form>
<div id="logmsg" style="display:none;color:#C33""></div>
<span id="email-lerror" class="signup-error"></span> <span id="password-lerror" class="signup-error"></span>
<div class="or-divider">
<h3>or</h3>
<div class="brdr"></div>
</div>
<div class="log-social"> <a class="blue-bg" href="#"><i class="fa fa-facebook"></i></a> <a class="red-bg" href="#"><i class="fa fa-google-plus"></i></a> <a class="sky-bg" href="#"><i class="fa fa-linkedin"></i></a>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</div>
<!--Signup Popup-->
<div id="signup" class="modal fade" role="dialog">
<div class="container">
<div class="col-lg-7 col-md-9 col-centered">
<div class="row">
<div class="login-pop">
<div class="col-sm-5">
<div class="row">
<div class="log-cntnt">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3>Signup</h3>
<p>We do not share your personal details with anyone.</p>
<div class="login-img"> <img src="assets/images/login-img.png"> </div>
</div>
</div>
</div>
<div class="col-sm-7">
<div class="row">
<div class="log-frm">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<form>
<div class="log-inp">
<label class="labels" for="email">Enter Email</label>
<input type="text" name="email" id="email">
</div>
<div class="log-inp">
<label class="labels" for="conf-email">Confirm Email</label>
<input type="text" name="conf-email" id="conf-email" placeholder="">
</div>
<div class="clearfix"></div>
<div class="log-btns">
<div class="row">
<div class="col-sm-6">
<input type="button" value="Continue" data-toggle="modal" data-target="signup2" name="next" onClick="nextpg()" id="next">
</div>
<div class="col-sm-6"> <a href="#login" data-dismiss="modal" data-toggle="modal">Existing User? Log In</a> </div>
</div>
<div class="clearfix"></div>
</div>
</form>
<span id="email-error" class="signup-error"></span> <span id="confirm-email-error" class="signup-error"></span>
<div id="signmsg" style="display:none; color:#C33"></div>
<div class="or-divider">
<h3>or</h3>
<div class="brdr"></div>
</div>
<div class="log-social"> <a class="blue-bg" href="#"><i class="fa fa-facebook"></i></a> <a class="red-bg" href="#"><i class="fa fa-google-plus"></i></a> <a class="sky-bg" href="#"><i class="fa fa-linkedin"></i></a>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</div>
<!--Signup Popup 2-->
<div id="signup2" class="modal fade" role="dialog">
<div class="container">
<div class="col-lg-7 col-md-9 col-centered">
<div class="row">
<div class="login-pop">
<div class="col-sm-5">
<div class="row">
<div class="log-cntnt">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3>Signup</h3>
<p>We do not share your personal details with anyone.</p>
<div class="login-img"> <img src="assets/images/login-img.png"> </div>
</div>
</div>
</div>
<div class="col-sm-7">
<div class="row">
<div class="log-frm">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<form>
<div class="log-inp">
<label class="labels" for="user-password">Enter Password</label>
<input type="password" name="password" id="user-password" placeholder="">
</div>
<div class="log-inp">
<label class="labels" for="confirm-password">Confirm Password</label>
<input type="password" name="confirm-password" id="confirm-password" placeholder="">
</div>
<div class="log-inp">
<label class="labels" for="mobile-number">Enter Mobile Number (Optional)</label>
<input type="text" name="mobile-number" id="mobile-number" placeholder="" onKeyDown="phoneNoContinue(this.value)" onKeyPress="phoneNoContinue(this.value)" onKeyUp="phoneNoContinue(this.value)">
</div>
<div class="clearfix"></div>
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="g-recaptcha capcha" data-sitekey="6LdZfygTAAAAAO9OtvU3nxUFlKbwA4C6mNAXKj02" data-callback="correctCaptcha"></div>
<div class="log-btns">
<div class="row">
<div class="col-md-12">
<input type="button" id="finish" onClick="finish()" value="Continue">
<input type="button" id="tfinishp" onClick="tfinish()"  value="Signup">
</div>
</div>
<div class="clearfix"></div>
</div>
</form>
<div id="sssmsg" style="display:none; color:#090"></div>
<span id="password-error" class="signup-error"></span> <span id="confirm-password-error" class="signup-error"></span> <span id="captcha-password-error" class="signup-error"></span> </div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Signup popup3 -->
<div id="signup3" class="modal fade" role="dialog">
<div class="container">
<div class="col-lg-7 col-md-9 col-centered">
<div class="row">
<div class="login-pop">
<div class="col-sm-5">
<div class="row">
<div class="log-cntnt">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3>Signup</h3>
<p>We do not share your personal details with anyone.</p>
<div class="login-img"> <img src="assets/images/login-img.png"> </div>
</div>
</div>
</div>
<div class="col-sm-7">
<div class="row">
<div class="log-frm">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<form>
<div class="log-inp">
<label class="labels active" for="tel">Enter Mobile Number </label>
<input type="text" name="tel" id="tel" placeholder="">
</div>
<div class="log-inp">
<div class="log-inp-pass">
<label class="labels" for="otp">Enter OTP</label>
<input type="text" name="otp" id="otp" placeholder="">
</div>
<a href="#">Resend?</a>
<div class="clearfix"></div>
</div>
<div class="log-btns">
<div class="row">
<div class="col-md-12">
<input type="button" id="tfinish" onClick="tfinishp()" value="Signup">
</div>
</div>
<div class="clearfix"></div>
</div>
</form>
<div id="ssmsg" style="display:none; color:#090"></div>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</div>
</footer>