<%@ include file="login.jsp" %>

<%@page import="java.sql.*"%>
<%
try
{
String uname=request.getParameter("t");
String pwd=request.getParameter("p");

Class.forName("oracle.jdbc.driver.OracleDriver");
Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:xe","system","srgec");
out.println("Connection established");


Statement stmt=con.createStatement();

ResultSet rs=stmt.executeQuery("select * from login");

while(rs.next())
{
String uname1=rs.getString("username");
String pwd1=rs.getString("pwd");
if((uname1).equals(uname))
{
if(pwd1.equals(pwd))
session.setAttribute("uname",uname);
response.sendRedirect("welcome.jsp");
}
}
response.sendRedirect("failure.jsp");
}
catch(Exception e)
{
out.println("exception"+e);
}
%>