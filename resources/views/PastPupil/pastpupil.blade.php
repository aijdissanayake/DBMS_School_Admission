<!DOCTYPE html>
<html>
<head>
  <title>test</title>
</head>
<body>
<h1> Test</h1>
<FORM action="/test" method="post">
{{csrf_field()}}
<label>NIC&nbsp; :</label>
<input type="text" name="nic"> 
<br><br>
<label>Name:</label>
<input type="text" name="name">
<br><br>
<button type="submit">Add</button>
</FORM>
</body>
</html>