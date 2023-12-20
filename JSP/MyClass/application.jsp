<%@page language="java" contentType="text/html"%>
<%
//Getting the count data from application
Integer count=(Integer)application.getAttribute("count");
%>	
<%if(count==null)
{
count=1;
}
else
{
count++;
}	
application.setAttribute("count",count);
%>
<center><h1>No of Visiotrs<%=count%></h1></center
