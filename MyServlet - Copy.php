<!DOCTYPE html> 
<html> 
<head> 
<meta charset="ISO-8859-1"> 
<title>Example of Filter</title> 
</head> 
<body> 
 	<form action="MyServlet"> 
 	 	<h3>Example of Filter</h3> 
 	 	Enter a number : <input type="text" name="num"><br> 
 	 	Enter name : <input type="text" name="name"><br> 
 	 	<input type="submit" name="submit" value="Go"> 
 	</form> 
</body> 
</html>  
MyServlet.java 
package leavemgmtsys; 
 import java.io.IOException; import java.io.PrintWriter; 
 import javax.servlet.ServletException; import javax.servlet.annotation.WebServlet; import javax.servlet.http.HttpServlet; import javax.servlet.http.HttpServletRequest; import javax.servlet.http.HttpServletResponse; 
 
@WebServlet("/MyServlet") 
public class MyServlet extends HttpServlet {  	private static final long serialVersionUID = 1L; 
 
    public MyServlet()  
    { 
        super(); 
    }   	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException  
 	{ 
 	 	int num = Integer.parseInt(request.getParameter("num")); 
 	 	String name = request.getParameter("name");  	 	PrintWriter out = response.getWriter();  	 	out.println("Welcome "+name+"!"); 
 	 	out.println("Number entered - "+num+"!"); 
 	} 
  protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException  
 	{ 
 	 	doGet(request, response); 
 	} 
 
} 
 
MyFirstFilter.java 
package leavemgmtsys; 
 import java.io.IOException; import java.io.PrintWriter; 
 import javax.servlet.Filter; import javax.servlet.FilterChain; import javax.servlet.FilterConfig; import javax.servlet.ServletException; import javax.servlet.ServletRequest; import javax.servlet.ServletResponse; import javax.servlet.annotation.WebFilter; import javax.servlet.http.HttpServletRequest; 
 
@WebFilter("/MyFirstFilter") 
public class MyFirstFilter implements Filter 
{ 
 
 	public void destroy()  
 	{ 
 	 	 
 	} 
 
 	public void doFilter(ServletRequest request, ServletResponse response, 
FilterChain chain) throws IOException, ServletException  
 	{ 
 	 	PrintWriter out = response.getWriter(); 
 	 	 
  //type-casting object since request here is ServletResquest and not HttpServletRequest 
 	 	HttpServletRequest req = (HttpServletRequest) request; 
 	 	 
 	 	int num = Integer.parseInt(req.getParameter("num")); 
 	 	System.out.println("First Filter");  	 	if(num>0) 
 	 	{ 
 	 	 	chain.doFilter(request, response); 
 	 	} 
 	 	else 
 	 	 	out.println("Invalid Input. The number should be greater than 
0."); 
 	} 
 
 	public void init(FilterConfig fConfig) throws ServletException 
 	{ 
 
 	} 
 
} 
 
MySecondFilter.java 
package leavemgmtsys; 
 import java.io.IOException; import java.io.PrintWriter; 
 import javax.servlet.Filter; import javax.servlet.FilterChain; import javax.servlet.FilterConfig; import javax.servlet.ServletException; import javax.servlet.ServletRequest; import javax.servlet.ServletResponse; import javax.servlet.annotation.WebFilter; import javax.servlet.http.HttpServletRequest; 
 
@WebFilter("/MySecondFilter") 
public class MySecondFilter implements Filter  
{ 
 	public void destroy()  
 	{ 
 
 	} 
 
 	public void doFilter(ServletRequest request, ServletResponse response, 
FilterChain chain) throws IOException, ServletException  
 	{ 
 	 	PrintWriter out = response.getWriter(); 
 	 	 
 	 	//type-casting object since request here is ServletResquest and not 
HttpServletRequest 
 	 	HttpServletRequest req = (HttpServletRequest) request; 
 	 	 
 	 	String name = req.getParameter("name");  	 	System.out.println("Second Filter"); 
 	 	if(name.length()<0) 
 	 	 	out.println("Invalid Input. Name should not be empty.");  	 	else if(name.length()<3) 
   out.println("Invalid Input. Name should atleast be greater than 2 characters."); 
 	 	else 
 	 	 	chain.doFilter(request, response); 
 	} 
 
 	public void init(FilterConfig fConfig) throws ServletException  
 	{ 
 
 	} 
 
} 
 
Filter mapping in web.xml 
<filter> 
 	 	<filter-name>MyFirstFilter</filter-name> 
 	 	<filter-class>leavemgmtsys.MyFirstFilter</filter-class> 
 	 	<init-param> 
 	 	 	<param-name>test-param</param-name> 
 	 	 	<param-value>This parameter is for testing.</param-value> 
 	 	</init-param> 
 	</filter> 
 	 
 	<filter> 
 	 	<filter-name>MySecondFilter</filter-name> 
 	 	<fil3ter-class>leavemgmtsys.MySecondFilter</filter-class> 
 	 	<init-param> 
 	 	 	<param-name>test-param</param-name> 
 	 	 	<param-value>This parameter is for testing.</param-value> 
 	 	</init-param> 
 	</filter> 
 	 
 	<filter-mapping> 
 	 	<filter-name>MyFirstFilter</filter-name> 
 	 	<url-pattern>/MyServlet</url-pattern> 
 	</filter-mapping> 
 	 
 	<filter-mapping> 
 	 	<filter-name>MySecondFilter</filter-name> 
 	 	<url-pattern>/MyServlet</url-pattern> 
 	</filter-mapping> 
 
