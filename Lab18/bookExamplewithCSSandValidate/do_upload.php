<?php
$file_dir = "./";
echo $_FILES;

foreach($_FILES as $file_name => $file_array) {
	echo "path: ".$file_array["tmp_name"]."<br/>\n";
	echo "name: ".$file_array["name"]."<br/>\n";
	echo "type: ".$file_array["type"]."<br/>\n";
	echo "size: ".$file_array["size"]."<br/>\n";
        echo "error: ".$file_array["error"]."<br/>\n";

	if (is_uploaded_file($file_array["tmp_name"])) {
		move_uploaded_file($file_array["tmp_name"], "$file_dir/".$file_array["name"]) or die ("Couldn't copy");
		echo "file was moved!<br/>";
	}
}
?>
