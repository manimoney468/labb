<html>
<title>welcome message
</title>
<body bgcolor="white">
<%
String uname=(String)session.getAttribute("uname");
%>
<center>
<hr><b>
<h2>congrats...
<font color="red"><%=uname%> </font>
Login Successful<br>
you are in home page of this site
</h2></b>
</center>
<hr>
</body>
</html>
