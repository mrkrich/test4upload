<?php

if(isset($_FILES) && count($_FILES)>0){
	foreach($_FILES as $k=>$f){
		move_uploaded_file($f['tmp_name'],"./files/${f['name']}");
		print "Saved file [${f['name']}]";
	}
}

$files = scandir("./files");
foreach($files as $f){
	if(substr($f,0,1)==".")continue;
	print "<li><a href='./files/$f' target='_tab'>$f</a></li>";
}
?>
<form method="post" enctype="multipart/form-data">
<div style="padding: 5px; border-radius: 5px; background-color: #CCC; width: 400px; border: 1px solid #888; margin: 5px;font-weight: bold;">
<label for="files">Upload file</label>
<input type="file" id="files" name="file" />
<input type="submit" value="Upload" />
</div>
</form>
<a href=".">Refresh</a>
