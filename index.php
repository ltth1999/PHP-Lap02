<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "/Lab2/site.css" rel = "stylesheet" />
    <title>OOP PHP</title>
</head>
<body>
    <div id = "wrapper">
        <?php // IDEA:
            require_once("userclass.php");
          
            $it = new User ('IT', 'itvnn@gmail.com');
            echo "<h2> User info </h2>";
            echo "UserID: ".$it->GetUserID(). "<br/>";
            echo "UserName: ".$it->GetUserName(). "<br/>";

            $itmore = new User ('Nguyen Van A', 'it@gmail.com');
            echo "<h2> More user </h2>";
            echo "UserID: ".$itmore->GetUserID(). "<br/>";
            echo "UserName: ".$itmore->GetUserName(). "<br/>";

            include("employeeclass.php");
            $per_a = new Person ("Nguyen Van B", 1234);
            echo "<h2> Person</h2>";
            echo "Person Name: ".$per_a ->GetName(). "<br/>";
            echo "UserName: ".$per_a ->GetNationalID(). "<br/>";

            echo "<h2>Employee</h2>";
            $e_a = new Employee ("Nguyen Van C", 1234, "Doc");
            echo "Employee ID: ".$e_a ->GetID(). "<br/>";
            echo "Employee Name: ".$e_a ->GetName(). "<br/>";
            echo "Employee Department: ".$e_a ->GetDeparment(). "<br/>";

            echo "<h2>More Employee</h2>";
            $e_b = new Employee ("Nguyen Van C", 1234, "Offical");
            echo "Employee ID: ".$e_b ->GetID(). "<br/>";
            echo "Employee Name: ".$e_b ->GetName(). "<br/>";
            echo "Employee Department: ".$e_b ->GetDeparment(). "<br/>";

        ?>
    </div>
    <footer id ="footer">
        &#169; 2021 - HUTECH - IT
    </footer>
</body>
</html>
