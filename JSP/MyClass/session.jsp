<%@page language="java" import="java.util.*" contentType="text/html"%>
<html>
<head></head>
<body>
Current Time:<%=new Date()><br>
Your Hostname:<%=request.getRemoteHost()%><br>
Session Id:<%=session.getId()%><br>
</body>
</html>
