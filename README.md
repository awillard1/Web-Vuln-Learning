Read the example php files to determine what parameters are to be used and discover what needs to be done to get XSS to fire.

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


