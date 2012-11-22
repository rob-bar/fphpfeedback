#Feedback
---
##Shabir

**Write proper code: correct indenting, removing unnecessary whitelines, …**

1. Remove or rename default controller classes (e.g. welcome.php)
2. Mobile detection:
	- Use <code>Agent::is_mobiledevice()</code>; for detection
	- Redirect using <code>Response::redirect($this->param('lang') . '/mobile');</code>
	
3. Javascript and HTML should be seperated. You cannot write inline scripts - containing lots of code - directly into the views. 
4. In footer.php: There is an empty <code>$(document).ready()</code> function. 
5. There is a duplicate of the **Google Analytics** script (in header.php and footer.php). You should place it in the footer, at the bottom of your HTML document. 
6. You are using to many controllers. There is only 1 page, and 1 action. Why are you using a specific facebook - mobile controller? It's the same logic structure, only rendered with a different view. Controllers and database are the same. 
7. You are using to many views. "**Templates**" is not the correct name. Use "**partials**" for small pieces of HTML. 
8. Use **yml** instead of php for multilang. 
9. Use routing in routes.php for clean urls (SEO)
10. Reduce code as much as possible. 


