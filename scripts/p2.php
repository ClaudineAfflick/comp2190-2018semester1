<?php




////$dbServername="localhost";
////$dbUsername="comp2190SA";
////dbPassword="";
////dbName="CourseMgmtDB";
//
////$conn=new PDO($dbServername,$dbUsername,dbPassword,dbName);
////
////
////$CourseDiscipline=$_POST["coursediscipline"];
////$CourseCode=$_POST["coursecode"];
////$CourseTitle=$_POST["coursetitle"];
////$Level=$_POST["leve"];
////$Credits=$_POST["credits"];
////$Semester=$_POST["semester"];
//$Submit=$_POST['submit'];
////$conn->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
////sql=" INSERT INTO "
//
if (isset($Submit)){
  
    
    $dbServername="localhost";
    $dbUsername="comp2190SA";
    dbPassword="2018Sem1";
    dbName="CourseMgmtDB";
    $conn=new mysqli($dbServername,$dbUsername,dbPassword,dbName);
    
    
	if($conn-> connect_error){
		die("Connection failed" . $conn->connect_error);
	}

	echo "Connection succesfull";


    $CourseDiscipline=$_POST["coursediscipline"];
    $CourseCode=$_POST["coursecode"];
    $CourseTitle=$_POST["coursetitle"];
    $Level=$_POST["leve"];
    $Credits=$_POST["credits"];
    $Semester=$_POST["semester"];
    $authorID = $POST['authorid'];
    
    $Query=" INSERT INTO Users(discipline, code, title,level,credits,AuthorID, semester)VALUES('$CourseDiscipline','$CourseCode', '$courseTitle', '$Level','$Credits' , '$authorID' , '$Semester')"; 
    
    $Query= "SELECT * FROM Courses";
	$result= $conn->query($Query);

	if($result->num_rows > 0){

	echo "<table>";
		while ($row = $result->fetch_assoc()){
			echo 
			"</td><td> Discipline:"     ." " .$row["Discipline"] . 
			"</td><td> Code:"      ." " .$row["code"].
			"</td><td> Title:"      ." " .$row["title"].
			"</td><td> Level:"      ." " .$row["level"].
			"</td><td> Credits:"      ." " .$row["credits"].
			"</td><td> AuthorID:"      ." " .$row["AuthorID"].
			"</td><td> Semester:" . "" . $row["semester"] . "</td></tr>";
		}
	echo "</table>";

	}else{
		echo "No Changes";
	}
	$conn->close();


}

?>