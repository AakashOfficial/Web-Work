<html>
<head>
<title>Register Page</title>
</head>
<body>

<table align="center">
<h1><u>Student Enquiry Form</u></h1>
<form>
 <tr>
  <td>Enquiry Code</td> 
  <td> <input type="text" name="enquiryCode"> </td>
 </tr>
 
 <tr>
   <td>Name</td>
   <td> <input type="text" name="name"> </td>
 </tr>
 
 <tr>
  <td>Age</td>
  <td> <input type="text" name="age" > </td> 
 </tr>
 
 <tr>
  <td>Qualification</td>
  <td> <select>
          <option>Select</option> 
          <option>10</option> 
          <option>12</option> 
          <option>Graduation</option>   
       </select>
   </td>
 </tr>
 
 <tr>
   <td>Purpose Of Taking Admission</td>
   <td> <input type="radio" name="purpose" value="Career">Career
   <br><input type="radio" name="purpose" value="Knowledge">Knowledge
    </td>
 </tr>
 
 <tr>
   <td>Other</td>
   <textarea readonly="readonly">
    R u Crazy <br>boy Why u <br>take <br>Admissions <br> For <br>Knowledge  
   </textarea>
 </tr>
 
 <tr>
   <td>Course in Which you take Admission:-</td>
   <td>
     <input type="checkbox" name="s1" value="Java">Java 
     <br> <input type="checkbox" name="s2" value=".NET">.NET
     <br> <input type="checkbox" name="s3" value="PHP">PHP
   </td>
 </tr>
 
 <tr>
   <td><input type="submit" value="Submit" ></td>
   <td><input type="reset" value="reset"></td>
 </tr>
 
</form>
</table>

</body>
</html>