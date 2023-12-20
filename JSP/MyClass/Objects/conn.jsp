<%@page import="java.sql.*" %>
<%
try
{
Class.forName("oracle.jdbc.driver.OracleDriver");
out.println("<h1>");
out.println("Loaded the Driver<br>");
Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:xe","SYSTEM","mani");
out.println("<br>JDBC Connection Established");
}
catch(Exception e)
{
out.println(e.toString());

}
%>
