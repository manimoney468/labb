<%@page import="java.sql.*"%>

<%
try{
Class.forName("oracle.jdbc.driver.OracleDriver");
out.println("Oracle loaded");
Connection con=DriverManager.getConnection("jdbc:Oracle:thin:@localhost:1521:xe","SYSTEM","srgec");
out.println("<br>database connected established");
	Statement st=con.createStatement();
ResultSet rs=st.executeQuery("create table logincseb(username varchar(50),pwd varchar(20))");
out.println("<br>Created table successfully");
}
catch(Exception e)
{
	out.println(e);
}
%>
