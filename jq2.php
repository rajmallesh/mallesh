<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MYSECOND JQUERY</title>
<script type="text/javascript" src="js/jquery-1.5.1.js"></script>
<script type="text/jscript" src="js/textSaver-0.1.1.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$(document).ready(function() {
	$("#the_form").textSaver();
	});
});
</script>
</head>

<body>
<form id="the_form" action="" method="post">
  <input type="text" id="name" name="name" />
  <textarea id="big_textarea" name="big_textarea" rows="23" cols="42"></textarea>
  <input type="submit" value="Submit" />
  <input class="mam" value="MOM" />
  <input class="mam" value="MOM" />
<textarea id="big_textarea" name="big_textarea" rows="23" cols="42"></textarea>
</form>

</body>
</html>
