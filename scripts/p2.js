function validation(){
  var discipline= document.getElementById('coursediscipline').value;
  var course_code= document.getElementById('coursecode').value;
  var coursetitle= document.getElementById('coursetitle').value;
  var level= document.getElementById('level').value;
  var credits= document.getElementById('credits').value;
  var semester= document.getElementById('semester').value;
//    var AuthorID= document.getElementbyId('authorid').value;
  var errormsg="";
  
  if (discipline=='')
  {
      errormsg+= "Please enter a course discipline.\n";      
  }
  if (course_code=='')
  {
      errormsg+= "Please enter a course code.\n";
  }
  if (coursetitle=='')
  {
      errormsg+= "Please enter a course title.\n";
  }
  if (level=='')
  {
      errormsg+= "Please enter a level.\n";
  }
  if (credits=='')
  {
      errormsg+= "Please enter a credit value.\n";
  }
  if (semester=='')
  {
      errormsg+= "Please enter a semester.\n";
  }
//  if (AuthorID=='0')
//  {
//      errormsg+="Please choose an author.\n";
//  }
    
  if (errormsg!='')
  {
//      discipline.setAttribute("class", "error");
      alert(errormsg);
      return false;
  }
  
    
   
  else{
      return true;
  }

}
