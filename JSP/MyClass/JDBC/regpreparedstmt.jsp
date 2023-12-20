<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
pageEncoding="ISO-8859-1"%>
<%@page import="java.sql.*,java.util.*"%>


<%
String fname=request.getParameter("first_name");
String lname=request.getParameter("last_name");
String cname=request.getParameter("city_name");
String email=request.getParameter("email");
String mobile=request.getParameter("phone");

try
{
Class.forName("oracle.jdbc.driver.OracleDriver");
	out.println("<br>Class will loaded");
Connection con=DriverManager.getConnection("jdbc:Oracle:thin:@localhost:1521:xe","SYSTEM","srgec");
out.println("<br> Oracle DataBase Connected");
Statement st=con.createStatement();

PreparedStatement ps=con.prepareStatement("insert into users(first_name,last_name,city_name,email,mobile)values(?,?,?,?,?)");
ps.setString(1,fname);
ps.setString(2,lname);
ps.setString(3,cname);
ps.setString(4,email);
ps.setString(5,mobile);
   int x=ps.executeUpdate();
%>  <a href="welcome.jsp">success</a>

<%
}
catch(Exception e) {
out.print(e.getMessage());
}
%>
</body>
</html>

