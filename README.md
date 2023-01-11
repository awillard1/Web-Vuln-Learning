# XSS Learning
Read the example php files to determine what parameters are to be used and discover what needs to be done to get XSS to fire.

The source of the php file is to be used.

xss is going to be the URL parameter ```$_GET["xss"]```. 

> NOTE: The number assigned to the example does not indicate if the XSS payload is easier or harder than the previous.

> DO NOT just fire Burp at the URLs. Burp will find some XSS, but each page may indicated it is looking to alert something specific. If it says alert, you need to find a way for alert to fire. Unless the page specifically says you may need to click something, all payloads should execute as the page loads.

> DO NOT just base64 decode the solutions. Give them a try.

As I find time to add other examples, I will upload them here.

# Installation/Usage
Make sure you have php installed on wsl/linux

```
sudo apt install php
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
http://127.0.0.1:8889
http://127.0.0.1:8889/example1.php
```


