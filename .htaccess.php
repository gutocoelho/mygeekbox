DirectoryIndex index.php
RewriteEngine On
RewriteCond %{HTTPS} !=on
RewriteRule ^/?(.*) https://mygeekbox.com.br/$1 [R,L]