<!DOCTYPE html>
<html>
    <head>
        <title>SMTI:Super Admin Section.....</title>
        <link rel="stylesheet" href="./Views/all.css">

     </head>

     <body>
      <!--Header-->
        <div class="container">
          <div style="flex-basis:20%;background-color:white;padding:25px;">
           </div>

            <div style="flex-basis:60%;background-color:white;padding:25px;">
                 <section> 
                   <h1 class="font">ADMIN SECTION</h1>
                  </section>

              </div>
                 <div style="flex-basis:20%;background-color:white;padding:25px;">
                 <p class="font font_size2" style="text-align:centre;">
                 Today is:<?php echo date("Y-m-d");?>

                  </p>
                 </div>
                
          </div>
         <!--Body-->
         <div class="container">
              <div style="flex-basis:50%;background-color:white;padding:25px;">
                 <section>
                 <h2 class="font">Attention Users!</h2>
                 </section>
                 <section>
                 <p class="font font_size4" style="text-align:left;">
                 The Admin Dasboard section is accessible to users with admin rights.So, only users  
                 with valid login credentials, allowing admin rights, can access the section.                
                 </p>
                 <p class="font font_size4" style="text-align:left;">
                 The SMTI management reserves the right to grant access to the Admin Dasboard.
                 Therefore, you should consult the management regarding the validity of your access
                 if you cannot login with your existing login credentials.   

                 </p>
        
                 </section>
              </div>

              <div style="flex-basis:50%;background-color:white;padding:25px;">

                  

                  <section style="padding:10px;">
                      <form method="post">
                        <label for="ad_usr" class="label font">Username</label><br>
                        <input type="text" name="admin_user" id="ad_usr" style="border:1px solid silver;height:30px;width:300px;border-radius:10px 10px 10px 10px;">
                        <br><br>
                        <label for="ad_pwd" class="label font">Password</label><br>
                        <input type="password" name="admin_password" id="ad_pwd" style="border:1px solid silver;height:30px;width:300px;border-radius:10px 10px 10px 10px;">
                         <br><br>
                         <input type="checkbox" id="pwdshow" onclick="showpwd()">
                         <label for="pwdshow" class="label font">Show Password</label>
                         <br><br>
                         <button type="submit" id="ad_sb" name="admin_submit" style="height:35px;width:300px;background-color:silver;border-radius:10px 10px 10px 10px;border:1px solid silver;color:black;" class="font font_size3">LOGIN</button> 

                     </form>
                     <p>&nbsp;</p>
                     <p style="text-align:left;" class="font font_size3">Forgot Password</p>
                           
                     <script>
                          function showpwd(){
                            var ap=document.getElementById("ad_pwd");
                            if(ap.type==="password"){
                                ap.type="text";
                            }
                            else{
                                ap.type="password";
                            }
                            

                          }

                     </script>

                  </section>
             </div>

          </div>

          



         
         



         







         








     </body>

  </html>

