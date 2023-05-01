<!DOCTYPE html>
<html>
<head>
	<title>Redlock User Database</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

		tr:nth-child(even){background-color: #f2f2f2}
	</style>
</head>
<body>
	<h1>REDLOCKs User Database</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jabatan</th>
		</tr>
		<?php
			// membuat koneksi ke database
			$servername = "mysql_db";
			$username = "root";
			$password = "9kotak";
			$dbname = "Redlock";

			// Membuat koneksi ke database
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Mengecek apakah koneksi berhasil
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM users";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Nama"]. "</td><td>" . $row["Alamat"]. "</td><td>" . $row["Jabatan"]. "</td></tr>";
			    }
			} else {
			    echo "<tr><td colspan='4'>0 results</td></tr>";
			}
			$conn->close();
		?>
	</table>
</body>
</html>
