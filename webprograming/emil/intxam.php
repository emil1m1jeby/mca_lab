<html>
 <head>
   <script type="text/javascript">
   function per()
   {
    if(document.forms.f1.n1.value=="")
    {
     window.alert("enter your name:");
     document.forms.f1.n1.focus();
     }
     if(document.forms.f1.m1.value=="")
    {
     window.alert("enter your valid mail id:");
     document.forms.f1.m1.focus();
     }
     if(document.forms.f1.s1.value=="")
    {
     window.alert("enter no. of seats required:");
     document.forms.f1.s1.focus();
     }
     if(document.forms.f1.mo1.value=="")
    {
     window.alert("enter the movie you want:");
     document.forms.f1.mo1.focus();
     }
     if(document.forms.f1.d1.value=="")
    {
     window.alert("enter the date you want to book:");
     document.forms.f1.d1.focus();
     }
  
  else
  {
    document.write("booking is completed:");
   }
  }             
  function refresh()
  {
   document.getElementById("f1").reset();
   }
   </script>
   <style>
     form.form1
     {
        border:solid black 2px;
      }
   </style>
 </head>    
   <center> 
    <body>
      <h1>movie mania</h1><br>
      <h2>booking details</h2>
    <form id="f1" method="POST" onsubmit=return per() align="center" class="form1">
               <table>
                    <tr>
                      <td>
                         <label>name:</label>
                         <input type="text" placeholder="enter your name" name="n1">
                      </td>
                    </tr>     
                    <tr>
                      <td>
                         <label>mail id:</label>
                         <input type="text" placeholder="enter your mail id" name="m1">
                      </td>
                    </tr>           
                    <tr>
                      <td>
                         <label>no of seats:</label>
                         <input type="number" placeholder="no of name" name="s1">
                      </td>
                    </tr>  
                    <tr>
                      <td>
                         <label>select your movie:</label>
                         <input type="select" placeholder="enter your name" name="mo1">
                          <select>
                              <option>movie1</option>
                              <option>movie2</option>
                              <option>movie3</option>
                          </select>    
                      </td>
                    </tr>  
                    <tr>
                      <td>
                         <label>date:</label>
                         <input type="date"  name="d1">
                      </td>
                    </tr>   
              </table>
                  <input type="submit" name="mov" value="submit" onclick="per()">
                  <input type="submit" name="rese" value=refresh" onclick="refresh()">
     </form>
     </body>
     </html>             


<?php
   if(isset($_POST["mov"]))
   {?>
     $a=$_POST[]
    <table border:"2px">
     <tr>
       <th>booking id</th>
       <th>moviename</th>
       <th>seatno</th>
       <th>date</th>
    </tr>
   <tr>
      <td><?php echo"id1234";?></td>
      <td><?php echo $_POST["$mo1"];?></td>
      <td><?php echo"a2,a3,a4";?></td>
      <td><?php echo $_POST["$d1"];?></td>
   </tr>
   </table>
   <?php
   }?>      
