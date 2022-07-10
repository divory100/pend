# Notes for setting up the webserver

## 1. nginx configuration
currently (as of 8/7/2022) just using nginx.conf for testing.
will move to using sites-available/ or sites-enabled/

<code>
server {
            listen 80;
            root /data/www;
            index _index.php index.html index.htm;

            location / {
                try_files $uri $uri/ =404;
            }

            location ~ \.php$ {
                include fastcgi_params;                
                fastcgi_intercept_errors on;
                fastcgi_pass unix:/run/php/php7.0-fpm.sock;
                fastcgi_param SCRIPT_FILENAME $document_root/$fastcgi_script_name;
            }
}
</code> ^^ last updated 8/7/2022


## 2. fastcgi php configuration
 - www.conf is in /etc/php/php-fpm.d/ -> but may be somewhere under /etc/php/INSERT PHP VERSION/
 - php-fpm.conf is in /etc/php/ -> but may be at /etc/php/INSERT PHP VERSION/fpm/php-fpm.conf
 - php.ini is in /etc/php/php.ini

**general config**
/var/run/php-fpm should exist and be writable

**php.ini**
add `cgi.fix_pathinfo=0`

**www.conf**
add `listen = /var/run/php-fpm/php-fpm.sock` (likely will already be there)

**nginx config file**
add `fastcgi_pass unix:/var/run/php-fpm/php-fpm.sock;` under location ~ \.php$ {} block inside server {} block

***sources***
- https://stackoverflow.com/questions/35367676/php-fpm-doesnt-create-sock-file
- https://linuxiac.com/how-to-configure-nginx-to-work-with-php-via-php-fpm/
- possible amazon issue we may encounter if using AWS: https://stackoverflow.com/questions/21616920/amazon-linux-ami-cant-find-php-fpm-www-conf-file-for-php-5-5-7-with-nginx
- backup nginx php conf: https://stackoverflow.com/questions/37305230/nginx-not-executing-php
- https://stackoverflow.com/questions/43262435/nginxs-fastcgi-php-conf-snippet-is-missing
- address already in use error: https://easyengine.io/tutorials/nginx/troubleshooting/emerg-bind-failed-98-address-already-in-use/


## 3. CouchCMS setup

## 4. Other options than CouchCMS
- wordpress: https://www.nginx.com/resources/wiki/start/topics/recipes/wordpress/
- joomla


## 5. Dependencies
- php-fpm (currently version 8.1.7, must be 7.4 or greater)
- nginx (currently version 1.22.0)
- mysql with mariadb (currently mysql 15.1, mariadb 10.8.3)
- CouchCMS
