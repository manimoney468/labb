<%@page import="java.util.*"%>
<h1> simple jsp page</h1>
<%=new Date()%>
<script language="javascript">
document.write("<br>Browser name:  "+navigator.appName);
document.write("<br>Browser version:   "+navigator.appVersion);
document.write("<br>Browser app code name:  "+navigator.appCodeName);
document.write("<br>Browser platform:  "+navigator.platform);
</script>
