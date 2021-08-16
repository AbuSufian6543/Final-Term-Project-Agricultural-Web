<?php
$conn = mysqli_connect("localhost", "root", "", "agriculture");
$result = mysqli_query($conn, "SELECT * FROM courses");
?>

<?php
// Include config file

 
// Define variables and initialize with empty values
$ID = $Name = $Date = "";
$ID_err = $Name_err = $Date_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["Name"]);
    if(empty($input_name)){
        $Name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $Name_err = "Please enter a valid name.";
    } else{
        $Name = $input_name;
    }
    
    // Validate address address
    $input_address = trim($_POST["Date"]);
    if(empty($input_address)){
        $Date_err = "Please enter Date.";     
    } else{
        $Date = $input_address;
    }
    
    // Validate salary
    $input_salary = trim($_POST["ID"]);
    if(empty($input_salary)){
        $ID_err = "Please enter the ID";     
    } elseif(!ctype_digit($input_salary)){
        $ID_err = "Please enter a positive integer value.";
    } else{
        $ID = $input_salary;
    }
    
    // Check input errors before inserting in database
    if(empty($Name_err) && empty($Date_err) && empty($ID_err)){
        // Prepare an update statement
        $sql = "UPDATE courses SET Name=?, Date=?, ID=? WHERE ID=?";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_Name, $param_Date, $param_id, $param_id);
            
            // Set parameters
            $param_Name = $Name;
            $param_Date = $Date;
            $param_id = $ID;
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: coursedata.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM courses WHERE ID = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $Name = $row["Name"];
                    $Date = $row["Date"];
                    $ID = $row["ID"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: ferror.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($conn);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location:f error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($Name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Name; ?>">
                            <span class="invalid-feedback"><?php echo $Name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <textarea name="address" class="form-control <?php echo (!empty($Date_err)) ? 'is-invalid' : ''; ?>"><?php echo $Date; ?></textarea>
                            <span class="invalid-feedback"><?php echo $Date_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" name="ID" class="form-control <?php echo (!empty($ID_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ID; ?>">
                            <span class="invalid-feedback"><?php echo $ID_err;?></span>
                        </div>
                        <input type="hidden" name="ID" value="<?php echo $ID; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="coursedata.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>