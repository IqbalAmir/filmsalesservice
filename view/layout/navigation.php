

         <?php

         session_start();


         if(($_SESSION['LoggedIn'])== true){

             echo "
            
             <nav>
                 <ul class=\"browse\">
         <ul class=\"browse\">
             <li class=\"browse\"><a href=\"../controller/browse.php\">Browse</a></li>
         <li class=\"browse\"><a href=\"../controller/account.php\">Account</a></li>
         <li style=\"float:right\" class=\"browse\"><a href=\"../controller/login.php\">Log Out</a></li>
         
         
         
        
         

   </ul>
</nav>"; } else{



             echo "
         <nav>
             <ul class=\"browse\">
                 <ul class=\"browse\">
                     <li class=\"browse\"><a href=\"../controller/login.php\">Login</a></li>
                     <li class=\"browse\"><a href=\"../controller/register.php\">Register</a></li>
                     <li class=\"browse\"><a href=\"../controller/browse.php\">Browse</a></li>
                 </ul>
         </nav>
 ";}




