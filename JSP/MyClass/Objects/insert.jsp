<%@page import="java.sql.*"%>

<%
try{
	Class.forName("oracle.jdbc.driver.OracleDriver");
	out.println("Oracle loaded");
Connection con=DriverManager.getConnection("jdbc:Oracle:thin:@localhost:1521:xe","SYSTEM","srgec");
out.println("<br>database connected established");
Statement st=con.createStatement();
ResultSet rs=st.executeQuery("insert into logincseb values('nagamani','Anandsai')");
out.println("<br>table values Inserted Successfully");
}
catch(Exception e)
{
	out.println(e);
}
%>
