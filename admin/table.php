<?php 
include('includes/header.php');
include('includes/navbar.php');
?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>UserName</th>
                                            <th>Fullname</th>
                                            <th>Service</th>
                                            <th>Reservation Date</th>
                                            <th>Date & Time Created</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>UserName</th>
                                            <th>Fullname</th>
                                            <th>Service</th>
                                            <th>Reservation Date</th>
                                            <th>Date & Time Created</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
$conn= mysqli_connect("localhost", "root","", "obs");
if ($conn-> connect_error){
	die("Connection failed:".$conn-> connect_error);
}

$sql= "SELECT id, usern,f_name,l_name ,Service, Reservation_Date, Date_And_Time_Created from reservation_log";
$result = $conn-> query($sql);

if ($result-> num_rows >0) {
	while($row = $result-> fetch_assoc()) {
		echo "<tr>
		<td>".$row["id"]." </td>
		<td>".$row["usern"] . " </td>
        <td>".$row["f_name"] . " ".$row["l_name"] ." </td>
		<td>" .$row["Service"] ."</td>
		<td>" .$row["Reservation_Date"] ."</td>
		<td>" .$row["Date_And_Time_Created"] ."</td>

		


		</tr>";
}
echo"</table>";
}
else{
   echo "0 result";
}
$conn-> close();   
?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

<?php
include('includes/footer.php');
?>
        </div>

<?php 
include('includes/scripts.php');
?>