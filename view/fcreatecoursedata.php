<?php
$conn = mysqli_connect("localhost", "root", "", "agriculture");
$result = mysqli_query($conn, "SELECT * FROM courses");

?>

<?php
// Include config file
//require_once "config.php";
 
// Define variables and initialize with empty values
$Name = $ID = $Date = "";
$ID_err = $Names_err = $Date_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	 // Validate ID
    $input_salary = trim($_POST["ID"]);
    if(empty($input_salary)){
        $ID_err = "Please enter the ID.";     
    } elseif(!ctype_digit($input_salary)){
        $ID_err = "Please enter a positive integer ID.";
    } else{
        $ID = $input_salary;
    }
	
    // Validate name
    $input_name = trim($_POST["Name"]);
    if(empty($input_name)){
        $Name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $Name_err = "Please enter a valid name.";
    } else{
        $Name = $input_name;
    }
    
    // Validate address
    $input_address = trim($_POST["Date"]);
    if(empty($input_address)){
        $address_err = "Please enter an Date.";     
    } else{
        $Date = $input_address;
    }
    
   
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
     // prepare an insert statement
     $sql = "insert into courses (ID, Name, Date) values (?, ?, ?)";
        
     if($stmt = mysqli_prepare($conn, $sql)){
    // bind variables to the prepared statement as parameters
     mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);
            
            //  set parameters
             $param_name = $ID;
             $param_address = $Name;
             $param_salary = $Date;
            
            // // // attempt to execute the prepared statement
             if(mysqli_stmt_execute($stmt)){
            // records created successfully. redirect to landing page
              header("location: fcoursedata.php");
             exit();
             } else{
            echo "oops! something went wrong. please try again later.";
            }
         }
         
        // // // close statement
         mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Enroll Course</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="ID" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ID; ?>">
                            <span class="invalid-feedback"><?php echo $ID_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <textarea name="Name" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php echo $Name; ?></textarea>
                            <span class="invalid-feedback"><?php echo $Name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" name="Date" class="form-control <?php echo (!empty($salary_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Date; ?>">
                            <span class="invalid-feedback"><?php echo $Date_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="fdashboard.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>