<body bgcolor="yellow" text="red">
<%out.println("<h1>Welcome to Jsp pogramming</h1>");%>
	<%! int a=12,b=12; %>
	sum is:  <%=a+b%> 
<br><br>
Sum of 10 and 20 = <%= 10 + 20 %>
<%! int square(int n)
    {
   	return n*n;
	}
%>
<%="<br><br>Squqre of 5 is: "+square(5)%>
<%
 out.print("<br>square of 10 is:"+square(10));
%>
