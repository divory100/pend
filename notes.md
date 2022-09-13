## OPTION 1: LAMP STACK
LAMP: Linux, Apache, MySQL, PHP

## 1. Components
- Apache (apache)
- PHP (php, php-apache)
- MySQL (MariaDB (mariadb, mariadb-clients, libmariadbclient))

systemd services `mysqld` and `httpd` are used

## 2. Apache setup
1. install apache
2. open /etc/httpd/conf/httpd.conf and uncomment `LoadModule unique_id_module modules/mod_unique_id.so`
3. Find `DirectoryIndex index.html` in /etc/httpd/conf/httpd.conf and change it to `DirectoryIndex index.html index.php`

IMPORTANT: the webserver content should be put in /srv/http/

## 3. PHP setup
1. install php and php-apache
2. add 
```sh
Include conf/extra/php_module.conf
LoadModule php_module modules/libphp.so
AddType application/x-httpd-php .php
PHPIniDir /etc/php/
```
    to /etc/httpd/conf/httpd.conf OR [debian] /etc/apache2/apache2.conf

3. Edit these lines in httpd.conf to look like this:
```sh
#LoadModule mpm_event_module modules/mod_mpm_event.so
LoadModule mpm_prefork_module modules/mod_mpm_prefork.so
#LoadModule mpm_worker_module modules/mod_mpm_worker.so
```

IMPORTANT: this fixes apache complaining about threadsafe php not being available to it, which is fine for testing, but in production we may want to compile php with support for it
in that case, make sure mpm_worker_module and mpm_event_module are uncommented

4. (maybe) make sure `short_open_tag = On` in /etc/php/php.ini

5. uncomment `;extension=mysqli` in /etc/php/php.ini
   NOTE: it may be `extension=php_mysql.dll` AND `extension=php_mysqli.dll` instead

## 4. SQL/database setup
1. install mariadb 
2. run `sudo mysql_install_db --user=mysql --basedir=/usr --datadir=/var/lib/mysql`
3. run `sudo systemctl start mysqld`
4. run `sudo mysql_secure_installation` (optional, for adding root password and whatever)
5. [ONLY IF YOU MESS UP 1,2,3 and 4] run `mysql -u root`, then `FLUSH PRIVILEGES;` then `SET PASSWORD FOR 'root'@'localhost' = PASSWORD('<whatever>');`
6. set to either start at boot (by `systemctl enable`-ing mysqld) or add it to a webserver start script
7. run `CREATE USER mysql IDENTIFIED BY '<password>';` to make mysql user
hmm. run `sudo mysql -u root` then:
    `ALTER USER 'user-name'@'localhost' IDENTIFIED BY '<password>';`
    `FLUSH PRIVILEGES;`
    to change mysql user password.
    then you can use `mysql -u mysql -p`


`sudo mysql -u root -p` is a useful command.
`mysql -i` is also useful

## 7. CouchCMS setup
1. download from https://couchcms.com
2. extract, then find the folder named 'couch' thats inside the extracted folder.
3. copy said folder into the root dir of the webserver.
4. rename couch/config.example.php to couch/config.php
5. edit these lines to look like this:
```php
define( 'K_DB_NAME', 'content' );
// 5.
// Database username
define( 'K_DB_USER', 'mysql' );
// 6.
// Database password
define( 'K_DB_PASSWORD', 'mysql' );
// 7.
// MySQL hostname (it will usually be 'localhost')
define( 'K_DB_HOST', 'localhost' );
```
6. IMPORTANT: run `mysql -u mysql -p` and run `CREATE DATABASE content;`
7. restart the webserver, go to <address>/couch and complete setup
8. ^ use a valid email for the real webserver just in case u forget the password

## 6. useful urls
- https://www.linode.com/docs/guides/how-to-install-a-lamp-stack-on-arch-linux/ (arch-based) (ignore, im just using this for testing)
- https://www.linux.com/training-tutorials/easy-lamp-server-installation/ (debian-based)
- https://dbschema.com/2020/04/21/mysql-default-username-password/
- https://stackoverflow.com/questions/39281594/error-1698-28000-access-denied-for-user-rootlocalhost
- https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-arch-linux
- https://stackoverflow.com/questions/60370020/apache-is-running-a-threaded-mpm-but-your-php-module-is-not-compiled-to-be-thre
- https://linuxize.com/post/how-to-change-mysql-user-password/
- https://docs.couchcms.com/tutorials/portfolio-site/building-a-real-world-site.html

# OPTION 2: NGINX

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
See http://docs.couchcms.com/tutorials/portfolio-site.html

## 4. Other options than CouchCMS
- wordpress: https://www.nginx.com/resources/wiki/start/topics/recipes/wordpress/
- joomla


## 5. Dependencies
- php-fpm (currently version 8.1.7, must be 7.4 or greater)
- nginx (currently version 1.22.0)
- mysql with mariadb (currently mysql 15.1, mariadb 10.8.3)
- CouchCMS
