<html>  
<body>  
<%   
  
String name=request.getParameter("username");  
out.print("Welcome "+name);  
  
session.setAttribute("user",name);  
 %>
<a href="wish.jsp">second jsp page</a>  
   
</body>  
</html>    