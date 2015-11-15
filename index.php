<html>
	<head>
		<title>Home | Upload File</title>
	</head>
	
	<body>
		<center>
			<h3>Upload Your File Here</h3>
			
			<fieldset>
				Ukuran Maksimal File : 10 MB <br />
				Tipe File yang diizinkan : pdf, zip <br /><br />
			
				<form name="form" enctype="multipart/form-data" action="upload.php" method="POST">
        
					Pilih File : <input name="file" type="file" style="cursor:pointer;" />
					
					<br/>
					<br/>
					<input type="submit" name="submit" value="Upload" />

				</form>
			</fieldset>
		</center>
	</body>
</html>