# Web Vulnerability Learning

#### Why not use Damn Vulnerable Web App or some other site?
This was originally setup to help team members with specific XSS issues that were common in systems we test. I then headed down a rabbit hole and this was created. No good reason to use this or not.

## Let's begin

Read the example php files to determine what parameters are to be used and discover what needs to be done to get vulnerability to fire.

The source of the php file is to be used.

> NOTE: The number assigned to the example does not indicate if the payload is easier or harder than the previous.

> DO NOT just fire Burp at the URLs. Burp will find some XSS, but each page may indicated it is looking to alert something specific. If it says alert, you need to find a way for alert to fire. Unless the page specifically says you may need to click something, all payloads should execute as the page loads.

> DO NOT just base64 decode the solutions. Give them a try.

As I find time to add other examples, I will upload them here.

# Installation/Usage
Make sure you have php installed on wsl or linux (have not tested with php on windows)

```
sudo apt install php
sudo apt-get install php-xml
```

Create a local directory where you  will store the example files and run a PHP webserver from.

Example:
```
/home/yourusername/ws
```

cd to that location and run a php webserver on a port of your choosing.

Example:
```
php -S 0.0.0.0:8889
```

Access the web server from a browser.

Example:
```
http://127.0.0.1:8889/
http://127.0.0.1:8889/xss/example01.php
```


