@extends('master')
@section('content')
    <!-- select drop box -->

    <div id="main-div-top-bg">
        <div id="main-div-top-second-bg">
            <div id="main-div-top-second-bg-new-in">
                <div id="body-content">
                    <div class="body-inner-part">
                        <div class="bradcram"> <span><a href="index.html"><img src="public_html/images/bradcram-home-icon.jpg" alt="" /></a><b>Sign Up</b></span></div>
                        <div class="main-inner-page">
                            <h2 class="page-heading-in">Sign Up</h2>

                        <!-- -->
                        <div class="registration-page">
                            <h3 style="color:red; text-align:center; width:100%;"><B>Note</B>: All the member registrations past 1 week will be deleted from this demo version</h3><BR>
                            <div class="registration-page-inner">


                                <div class="registration-page-right">
                                    <form name="registration_box" id="registration_box" action="http://demo.ridesharingscript.com/index.php?file=c-registration_a" method="post">
                                        <input type="hidden" name="lgfor" id="lgfor" value="">
                                        <input type="hidden" name="from" id="from" value="">
                                        <input type="hidden" name="action" id="action" value="registrationchk">
                                        <input type="Hidden" name="mode" value="register">
                                        <label><b>First name :</b>
                                            <input type="text" name="vFirstName" id="vFirstName" class="validate[required] registration-input" value=""></label>
                                        <label><b>Last name :</b>
                                            <input type="text"  name="vLastName" id="vLastName" class="validate[required] registration-input" value=""></label>
                                        <!-- <label><b>Nick Name :</b>
                                        <input type="text"  name="vNickName" id="vNickName" class="validate[required] registration-input" value=""></label>-->
                                        <label><b>E-mail :</b>
                                            <input type="vEmail"  name="vEmail" id="vEmail" class="validate[required,,custom[email]] registration-input" value=""></label>
                                        <label><b>Password :</b>
                                            <input type="password"  name="vPassword" id="vPassword" class="validate[required,minSize[6]] registration-input" value=""></label>
                                        <label><!--b>Re-Enter Password  :</b--><b>Re-Enter Password  :</b>
                                            <input type="password"  name="vRePassword" id="vRePassword" class="validate[required,equals[vPassword]] registration-input" title="Re-Enter Password"></label>
                                        <label><b>Preferred Language</b>
                                            <select name="vLanguageCode" id="vLanguageCode" class="custom-select-new">
                                                <option value="AF" >
                                                    Afrikaans
                                                </option>
                                                <option value="AZ" >
                                                    Ajarbaijani
                                                </option>
                                                <option value="AR" >
                                                    Arabic
                                                </option>
                                                <option value="BG" >
                                                    Bulgarian
                                                </option>
                                                <option value="ZH" >
                                                    Chinese
                                                </option>
                                                <option value="HR" >
                                                    Croatian
                                                </option>
                                                <option value="CS" >
                                                    Czech
                                                </option>
                                                <option value="DN" >
                                                    Danish
                                                </option>
                                                <option value="NL" >
                                                    Dutch
                                                </option>
                                                <option value="EN"  selected >
                                                    English
                                                </option>
                                                <option value="EE" >
                                                    Estonian
                                                </option>
                                                <option value="FI" >
                                                    Finnish
                                                </option>
                                                <option value="FN" >
                                                    French
                                                </option>
                                                <option value="DE" >
                                                    German
                                                </option>
                                                <option value="EL" >
                                                    Greek
                                                </option>
                                                <option value="HU" >
                                                    Hungrain
                                                </option>
                                                <option value="GA" >
                                                    Irish
                                                </option>
                                                <option value="IT" >
                                                    Italian
                                                </option>
                                                <option value="JA" >
                                                    Japanese
                                                </option>
                                                <option value="LV" >
                                                    Latvian
                                                </option>
                                                <option value="LT" >
                                                    Lithuanian
                                                </option>
                                                <option value="MT" >
                                                    Maltese
                                                </option>
                                                <option value="NO" >
                                                    Norwegian
                                                </option>
                                                <option value="PS" >
                                                    Persian
                                                </option>
                                                <option value="PO" >
                                                    Polish
                                                </option>
                                                <option value="PT" >
                                                    Portuguese
                                                </option>
                                                <option value="RO" >
                                                    Romaian
                                                </option>
                                                <option value="RS" >
                                                    Russian
                                                </option>
                                                <option value="SK" >
                                                    Slovak
                                                </option>
                                                <option value="SL" >
                                                    Slovenian
                                                </option>
                                                <option value="ES" >
                                                    Spanish
                                                </option>
                                                <option value="SW" >
                                                    Swedish
                                                </option>
                                                <option value="TS" >
                                                    Turkish
                                                </option>
                                            </select>
                                        </label>
                                        <label><b>Enter given Code</b>
                                            <input type="text"  name="capthca" id="capthca" class="validate[required] registration-input1" title="Captcha Code">
                                            <img src="plugins/captcha/CaptchaSecurityImages.jpg" align="top" height="31"/></label>
                                        <label><a onClick="check_registration();" href="javascript:void(0);" >Sign Up</a></label>
                                        <p>Already Registered <a href="sign-in.html">click here</a></p>
                                    </form>
                                </div>
                                <div class="registration-mid-part"><span><em>OR</em></span></div>
                                <div class="registration-page-left">
                                    <h3>Register with one click:</h3><BR><BR>
                                    <ul>
                                        <li>Social login makes your profile more trustworthy</li>
                                        <li>We will never post on your wall without asking</li>
                                        <li>We respect your existing privacy setting</li>
                                    </ul>
                                    <p><a class="fb" href="javascript:void(0);" onclick="fbconnect('facebook');"><img src="public_html/images/reg-fb.jpg" alt="" />Sign up with Facebook</a></p>
                                    <p><a class="twitter" href="javascript:void(0);" onclick="fbconnect('twitter');"><img src="public_html/images/twitter.png" alt="" />Sign Up With Twitter</a></p>
                                    <p><a class="google_plus" href="javascript:void(0);" onclick="fbconnect('google');"><img src="public_html/images/google_plus.png" alt="" />Sign Up With Google</a></p>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                        </div>

                        <!-- -->
                    </div>
                    <div style="clear:both;"></div>
                </div>


                <script>
                    function check_registration(){
                        jQuery("#registration_box").validationEngine('init',{scroll: false});
                        jQuery("#registration_box").validationEngine('attach',{scroll: false});
                        resp = jQuery("#registration_box").validationEngine('validate');
                        if(resp == true){
                            document.registration_box.submit();
                        }else{
                            return false;
                        }
                    }

                    function fbconnect(type)
                    {
                        if(type == 'twitter'){
                            javscript:window.location='https://api.twitter.com/oauth/authenticate?oauth_token=1moyngAAAAAA48aNAAABYw1Rxe8';
                        }else if(type == 'google'){
                            javscript:window.location='https://accounts.google.com/o/oauth2/auth?response_type=code&amp;redirect_uri=http%3A%2F%2Fdemo.ridesharingscript.com%2Fgpconnect.php&amp;client_id=954154777977-3ptrtkd3gdklbqru6tjk6hckgectcjc1.apps.googleusercontent.com&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.login+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fplus.me&amp;access_type=offline&amp;approval_prompt=auto';
                        }else{
                            javscript:window.location='https://www.facebook.com/v2.2/dialog/oauth?client_id=440138386197182&amp;redirect_uri=http%3A%2F%2Fdemo.ridesharingscript.com%2Ffbconnect.php&amp;state=5d8deab543dc47475de3cd53fabe08c7&amp;sdk=php-sdk-4.0.15&amp;scope=email%2Cuser_location%2Cuser_friends';
                        }
                    }
                </script>

            </div>
@endsection
            <div style="clear:both;"></div>
        </div>
        <script src="../cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
        <script>
            $(document).ready(function(){
                <!-- $("#themebox").hide(); -->
                $("#show").click(function(){
                    $("#themebox").toggleClass("toggled");
                });
            });

        </script>
        <!--
       <div class="color-box-theme">

           <div class="color-box-theme-inner" id="themebox">
               <h3 class="theme-btm">Theme Color</h3>
               <div class="theme-btm-a">
                   <div class="theme-btm-b1">
                   <a href="#" class="styleswitch" id="color2">2</a>
                   <a href="#" class="styleswitch" id="color3">3</a>
                   <a href="#" class="styleswitch" id="color4">4</a>
                   </div>
                   <div class="theme-btm-c1">
                   <a href="#" class="styleswitch" id="color5">5</a>
                   <a href="#" class="styleswitch" id="color6">6</a>
                   <a href="#" class="styleswitch" id="color7">7</a>
                   </div>
               </div>
               <h3><a href="#" style="text-decoration: none; color:black;">Defoult theme</a></h3>
               <span id="show" class="styleswitch-img"><a href="#" id="changetheme"  ><img src="http://demo.ridesharingscript.com/public_html/images/home/Theme36/arrow-color-box.png"  alt="" /></a></span>
           </div>
       </div>
       <!-- -->
