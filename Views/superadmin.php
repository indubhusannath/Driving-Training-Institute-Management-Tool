<!DOCTYPE html>
<html>
    <head>
        <title>Super Admin Section.....</title>
        <link rel="stylesheet" href="all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <style>
.material-symbols-sharp {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>
        
        
        
        <script>
           $(document).ready(function(){
            $("#db_viewbar").load("dashboard_superadmin.php");
            
            $("#dashboard_sadm").click(function(){
                $("#db_viewbar").load("dashboard_superadmin.php");

            });
            $("#branches").click(function(){
                $("#db_viewbar").load("add_branch.php");


                add_employees.php
            });

            $("#employees").click(function(){
                $("#db_viewbar").load("add_employees.php");


                
            });

            

            });

         </script>
              



    </head>

<body>
    
    <div id="login_bar" class="container">
    
                    <div style="flex-basis:20%;background-color:midnightblue;padding:20px;">
                      
                      </div>
                <div style="flex-basis:60%;background-color:midnightblue;padding:20px;">
               <span style="color:gold"> 
                
                <?php
          if(isset($_GET['user'])&&isset($_GET['admin'])){
            $a=$_GET['admin'];
            $u=$_GET['user'];
            session_start();
            if($_SESSION['adminname']===$a&&$_SESSION['username']===$u){
              echo "ADMIN:".$_SESSION['adminname'].".....is logged in";
            }


          }?>
          </span>
         
             </div>
                      <div style="flex-basis:20%;background-color:midnightblue;padding:2px;">
                            <form id="br_srch">
                       <div style="box-sizing:content-box;">
                        
                        <input type="search" id="br_search" name="branch_search" style="width:180px;height:90%;display:inline-block;border:none;" placeholder="Search..."><input type="submit" style="border:none;display:inline-block;height:100%;width:55px;background-color:gold;" value="Search">
                      </div>
                              </form>
                     </div>
                     
     </div> 
<div id="search_bar" class="container">
    
         <div style="flex-basis:20%;background-color:navy;padding:20px;">
         
         </div>
                <div style="flex-basis:60%;background-color:navy;padding:2px;">
                
             </div>
                      <div style="flex-basis:20%;background-color:navy;">
        </div>
</div> 
   

     

     <div id="super_admin_dashboard" class="container">
         <div id="sa_sidebar" class="sidebar_superadmin">
            <h3 class="font">Admin Panel</h3>           
       

          <button id="dashboard_sadm" class="sidebar_button font font_size3"><i class="material-symbols-sharp">Home</i>DASHBOARD</button><br>
           <hr>
         
          <button class="sidebar_button font font_size3" id="branches"><i class="material-symbols-sharp">Store</i>Branches</button><br>
          <button class="sidebar_button font font_size3" id="employees"><i class="material-symbols-sharp">Person_Pin</i>Employees</button><br>

          <button class="sidebar_button font font_size3" id="students"><i class="material-symbols-sharp">Wc</i><a href="students.php" style="text-decoration:none;">Students</a></button><br>
          <button class="sidebar_button font font_size3" id="sa_lic_sts"><i class="material-symbols-sharp">Ballot</i><a href="sa_licence_status.php" style="text-decoration:none;">Licence Application Status</a></button><br>
          <button class="sidebar_button font font_size3" id="train_det"><i class="material-symbols-sharp">Local_Taxi</i><a href="training_details_sa.php" style="text-decoration:none;">Training Operations</a></button><br>
          <button class="sidebar_button font font_size3" id="sa_doc_wk_history"><i class="material-symbols-sharp">Menu_Book</i><a href="document_work_history_admin.php" style="text-decoration:none;">Documentation</a></button>

          


?>

          </div>

       

             <div id="db_viewbar" class="dashboard_superadmin">
               
               

                  

           </div>

           


         </div>

         





     </div>













 </body>
 </html>






