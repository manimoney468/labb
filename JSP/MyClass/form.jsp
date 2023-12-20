<html>
<script language="javascript">
function remember()
{
usr=f1.uname.value;
pswd=f1.psw.value;
alert("remember your: "+usr+"    "+pswd);
}
</scipt>
<form action="req.jsp" onsubmit="remember()">
<h1> exmple form get request </h1>
<u>Login Form</u>
UserName:<input type="text" name="uname"><br>
Password:<input type="password" name="psw"><br>
<input type="submit">
<input type="reset" value="reset">
</form>