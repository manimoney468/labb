<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
pageEncoding="ISO-8859-1"%>
<%@ page include="C:\Program Files (x86)\Apache Software Foundation\Tomcat 10.0\webapps\exp8\login.jsp">%>
<%@page import="java.sql.*,java.util.*"%>

<%
String fname=request.getParameter("first_name");
String last_name=request.getParameter("last_name");
String city_name=request.getParameter("city_name");
String email=request.getParameter("email");
String mobile=request.getParameter("phone");

try
{
Class.forName("oracle.jdbc.driver.OracleDriver");
	out.println("<br>Class will loaded");
Connection con=DriverManager.getConnection("jdbc:Oracle:thin:@localhost:1521:xe","SYSTEM","srgec");
out.println("<br> Oracle DataBase Connected");
Statement st=con.createStatement();

int i=st.executeUpdate("insert into users(first_name,last_name,city_name,email,mobile)values('"+fname+"','"+last_name+"','"+city_name+"','"+email+"','"+mobile+"')");
out.println("Data is successfully inserted!");
}
catch(Exception e)
{
System.out.print(e);
e.printStackTrace();
}



<br>
<br>

