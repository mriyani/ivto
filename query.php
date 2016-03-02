<?php
require 'db.php';

		if(isset($_POST["daftarpb"])); {
		$kodpb = strtoupper($_POST["kodpb"]);
		$jenispb = $_POST["jenispb"];
		$namapb = strtoupper($_POST["namapb"]);
		$notel = $_POST["notel"];
		$email = $_POST["email"];
		$negeri	= $_POST["negeri"];
		$alamatpb = strtoupper($_POST["alamatpb"]);

			$add = "INSERT INTO pb (kodpb, namapb, alamatpb, notel, email, negeri)
			VALUES ('$kodpb','$namapb', '$alamatpb', '$notel', '$email', '$negeri')";

			if (!mysqli_query($dbc,$add)) {
				$last_id = mysqli_insert_id($dbc);
				session_start();
				echo "Error: " . mysql_errno() . mysqli_error($dbc);
			} /*else {
				echo "Pusat Bertauliah Berjaya Didaftarkan.";

			}*/
			mysqli_close($dbc);
			// header('Location: view.php');
		}
?>