<%String username=request.getParameter("name");
if(username.equals("Anand"))
     out.println("Welcome "+username+",Nice to meet you");
            response.sendRedirect("http://www.google.com"); 
else
      out.println("Oops!!! Sorry "+username+" You are not anand");
%>