<!DOCTYPE html>
<html>
    <head>
        <title>Branch Section.....</title>
        <link rel="stylesheet" href="./Views/all.css">

     </head>

     <body>
        <!--Header-->
         <div class="container">
             <div style="flex-basis:20%;background-color:none;padding:25px;">
             

             </div>
                 
             <div style="flex-basis:60%;background-color:none;padding:25px;">
             <section> 
                   <h1 class="font">BRANCH SECTION</h1>
                  </section>

             </div>
             
             <div style="flex-basis:20%;background-color:none;padding:25px;">
             <p class="font font_size2" style="text-align:centre;">
                 Today is:<?php echo date("Y-m-d");?>

                  </p>

             </div>
        </div>

         <!--Body-->
         <div class="container">

                  <div style="flex-basis:35%;background-color:none;padding:25px;">
                  
                  
                 </div>

                 <div style="flex-basis:30%;background-color:none;padding:25px;">
                 
                    <div style="padding:25px;border:1px solid lavender;border-radius:15px 15px 15px 15px;box-shadow:rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                       <section>
                      <p>&nbsp;</p>
                       <?php
                      if(isset($_GET['response'])){
                                         
                        $res=$_GET['response'];
                         if($res==0){
                          echo "<p style='color:red;'>Username Not Found.....Ensure Correct Login Credentials</p>";
                
                         }
                         }
                       ?>
                         <p>&nbsp;</p>
                
                      <form method="post" action="./Controller/post_branch-login.php" onsubmit="return val_blogin()">
                 
                      <label for="br_u" class="label font">Username</label><br>
                      <span id="err_br_u" style="color:red;display:none;">Enter Username</span>
                       <input type="text" id="br_u" name="br_user" style="border:1px solid silver;height:30px;width:300px;border-radius:10px 10px 10px 10px;" >
                        <br><br>
                        <label for="br_pd" class="label font">Password</label><br>
                       <span id="err_br_pd" style="color:red;display:none;">Enter Password</span>
                       <input type="password" id="br_pd" name="br_pwd" style="border:1px solid silver;height:30px;width:300px;border-radius:10px 10px 10px 10px;">
                       <br><br>
                 
                         <input type="checkbox" id="pwdshow" onclick="showpwd()">
                         
                         <label for="pwdshow" class="label font">Show Password</label> 

                         <br><br>
                
                         <input type="submit" name="login_br" value="LOGIN" onsubmit="val_blogin()" style="height:35px;width:300px;background-color:silver;border-radius:10px 10px 10px 10px;border:1px solid silver;color:black;cursor:pointer;" class="font font_size3">
                         </form>
                    <p>&nbsp;</p>
                     <p style="text-align:left;" class="font font_size3">Forgot Password</p>
                
                 <script>
                   var bu=document.getElementById("br_u");
                    var ebu=document.getElementById("err_br_u");
                  var bp=document.getElementById("br_pd");
                  var ebp=document.getElementById("err_br_pd");
            

                  function val_blogin(){
                              
                   if(bu.value==""){
                    ebu.style.display="block";
                    return false;
                  }
                

                    if(bp.value==""){
                    ebp.style.display="block";
                    return false;
                }
                
                
                }

                   function showpwd(){
                   if(bp.type==="password"){
                                bp.type="text";
                            }
                            else{
                                bp.type="password";
                            }

                }

                 </script>         
                 </section>
           </div>
            </div>

            <div style="flex-basis:35%;background-color:none;padding:25px;">
                  
                  
                 </div>
</div>








     </body>

  </html>

