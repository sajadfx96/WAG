<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>World Arab Gaming</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style_whmcs-blue.css">
        <link rel="stylesheet" type="text/css" href="css/slicebox.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <link rel="stylesheet" type="text/css" href="css/skins/blue.css">
        <link rel="stylesheet" type="text/css" href="sign/style.css">
        <script type="text/javascript" src="js/jquery.js"></script>
    </head>
    <body>
        <div id="Wrapper">
            <div id="Wrapper_Content">
                <div id="Container">
                    <header>
                        <div id="Header">
                                                              
                            <div class="Logo"></div>
                            <div class="Social_Icon">
                                <ul>
                                    <li class="facebook"><a href="https://www.facebook.com/groups/TsWAG" target="_blank" title="facebook"></a></li>
                                    <li class="twitter"><a href="https://steamcommunity.com/groups/World_Arab_Gaming" target="_blank" title="Steam"></a></li>
                                    <li class="youtube"><a href="https://www.youtube.com/channel/UCjwVGvQfjEVCEzUCHiZ6kTQ?view_as=subscriber" target="_blank" title="youtube"></a></li>
                                    <li class="rss"><a href="ts3server://120?port=9987" target="_blank" title="Teamspeak"></a></li>
                                    
                                </ul>
         
                      
                            </div>
                            <!--/Social_Icon-->
                                        
                            <nav>
                                <div class="Menu">
                                    <div class="Menu_right"><a href="index.php"></a></div>
                                    <ul>
                                        <li><a href="form.php">تقديم على فاكشن</a></li>
                                        <li><a href="rankform.php">تقديم على رتبة</a></li>
                                      
                                       
                                    </ul>
                                    <div class="Menu_left"><a href="ts3server://120?port=9987">طلب مساعدة من ادمن</a></div>
                                </div>
                            </nav>
                                    
                            <!--/Menu--> 
                        </div>
                    </header>
                    <!--/Header-->
                    <div id="Body">
                        <div id="Content">
                            
                            <div class="Login_Form">
                                <div class="top">
                                <h2>تقديم معلومات الرتبة</h2>
                                    <p>!ملاحظة
                                        قم بملئ الحقول وسيتم الرد في اقرب وقت
                                    </p>
                                </div>
                                <form action="support.process.php" method="POST">
                                    <label>البريد الاكتروني
                                        <input type="email" name="email" class="login_email" required>
                                    </label>
                                    <label>اسم حسابك(داخل السيرفر)
                                        <input type="text" name="fulname" class="login_email" required>
                                    </label>
                                    <label>حسابك على الفيسبوك
                                        <input type="text" name="facebook" class="login_email" required>
                                    </label>
                                    <input type="submit" name="submit" class="login_button" value="ارسال التقديم">
                                </form>
                         
                            </div>
                            <!--/Login_Form-->
                            
                  </div>

                            <!--/Services-->
                            <div id="Sidebar">
                               
                                <div class="Widget">
                                    <h2 class="links">الادوات<span>-</span></h2>
                                    <div class="Widget_Links">
                                        <ul>
                                            <li><a href="#">كيف تقدم على وظيفة</a></li>
                                            <li><a href="images/WAGMAP.png">خريطة السيرفر</a></li>
                                            <li><a id="timeform" onclick="timeform()" >اوقات التعيين</a></li>
                                            <li><a id="helpmail" onclick="helpmail()" >استفسارت اخرى تواصل معنا</a></li>
                                        </ul>
                                    </div>
                            
                              

                            
                            </div>
  
                    </div>
                    <!--/Body-->
                    
                    <div id="Footer">
                        <footer>
                            <!--/Footer_About-->
                            <div class="Footer_Links">
                                <h2>معلومات المستخدم</h2>
                                                                               <!-- logged in user information -->
                                                                               <?php  if (isset($_SESSION['username'])) : ?>
                                    <p style="font-size: 20px;"> username : <strong><?php echo $_SESSION['username']; ?></strong></p>
                                    <p> <a href="index.php?logout='1'" style="color: #c20c0c;  border-radius: 15%;border: 5px;float: right;font-size:15px;font-family: Verdana;"><img src="images/icons/login_out.png" ></a> </p>
                                <?php endif ?>
               
                            </div>

                            <!--/Footer_Links-->
                           <div class="Footer_Contact">
                                <h2>تواصل معنا</h2>
                                <p class="email">WorldArabGaming.help@gmail.com</p>

                            </div>
                            <!--/Footer_Contact-->
                            <div class="Footer_Bottom">
                                <p>© CopyRights #W.A.G 2015-2020</p>
                            
                            </div>
                            <!--/Footer_Bottom--> 
                        </footer>
                    </div>
                    <!--/Footer--> 
                </div>
                <!--/Container--> 
            </div>
            <!--/Wrapper_Conten--> 
        </div>
        <!--/Wrapper-->
        <script>
        function helpmail() {
        document.getElementById("helpmail").innerHTML = "worldarabgaming.help@gmail.com";
        }
        function timeform() {
        document.getElementById("timeform").innerHTML = "من 9م الى 12ص بتوقيت العراق";
        }
        </script>
        <script type="text/javascript" src="js/jquery_easing.js"></script>
        <script type="text/javascript" src="js/jcarousel.js"></script>
        <script type="text/javascript" src="js/slide-show.js"></script>
        <script type="text/javascript" src="js/toll_tip.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
        <script type="text/javascript" src="js/jquery.slicebox.js"></script>
        <script type="text/javascript" src="js/jquery.icheck.js"></script>
        <script type="text/javascript" src="js/tatwerat.js"></script>
    </body>
</html>
