<%@ page import="java.sql.*"%>
<!DOCTYPE html>
<html>
<body>
<h1>Retrieve data from Users database in jsp</h1>
<table border="1" bgcolor="#22ff89">
<tr BGCOLOR="yellow">
<th>First name</th>
<th>Last name</th>
<th>City name</th>
<th>Email</th>
<th>Mobile</th>
</tr>

<%
try
{
Class.forName("oracle.jdbc.driver.OracleDriver");
	out.println("Oracle loaded");
Connection con=DriverManager.getConnection("jdbc:Oracle:thin:@localhost:1521:xe","SYSTEM","srgec");
out.println("<br>database connected established");

Statement st=con.createStatement();
String sql ="select * from users";
ResultSet rs= st.executeQuery(sql);
while(rs.next()){
%>
<tr>
<td><%=rs.getString("first_name") %></td>
<td><%=rs.getString("last_name") %></td>
<td><%=rs.getString("city_name") %></td>
<td><%=rs.getString("email") %></td>
<td><%=rs.getString("mobile") %></td>
</tr>
<%
}
st.close();
con.close();
} catch (Exception e) {
e.printStackTrace();
}
%>
</table>
</body>
</html
