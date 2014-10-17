<!DOCTYPE html>
<html>
<head>
<title>How to Upload multiple images jQuery Ajax using PHP</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<style type="text/css">
img {
	border-width: 0
}

* {
	font-family: 'Lucida Grande', sans-serif;
}
</style>
<link href="css/uploadfilemulti.css" rel="stylesheet">
<script src="js/jquery-1.8.0.min.js"></script>
<script src="js/jquery.fileuploadmulti.min.js"></script>

</head>
<body>
	<h1>Upload Multiple Images</h1>
	<div id="mulitplefileuploader">Upload</div>
	<div id="status"></div>
</body>
<script>

$(document).ready(function()
{
	var settings = {
		url: "upload.php",
		method: "POST",
		allowedTypes:"jpg,png,gif,doc,pdf,zip",
		fileName: "myfile",
		multiple: true,
		onSuccess:function(files,data,xhr)
		{console.log(files);
			$("#status").html("<font color='green'>Upload is success</font>");
		},
	    afterUploadAll:function()
	    {
	        alert("all images uploaded!!");
	    },
		onError: function(files,status,errMsg)
		{
			$("#status").html("<font color='red'>Upload is Failed</font>");
		}
	};
	$("#mulitplefileuploader").uploadFile(settings);
});
</script>
</html>