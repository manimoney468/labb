<%@page import="java.sql.*" %>
<%
try
{
Class.forName("oracle.jdbc.driver.OracleDriver");
out.println("<h1>");
out.println("Loaded the Driver");
Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:xe","SYSTEM","srgec");
out.println("<br>JDBC Connection Established");
}
catch(Exception E)
{
out.println(E.toString());

}
%>
