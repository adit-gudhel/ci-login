Tutorial CodeIgniter Login Example using Twitter Bootstrap
==========================================================
*View full tutorial on my [blog](http://dityalovers.blogspot.com/) post.*

**CI Login** is a sample CodeIgniter application built with PHP, jQuery, MySQL database and Twitter Bootstrap for responsive Graphical User Interface.

The application allow you to : 

* Create or Register new account and save it into database.
* Login with your existing account and navigate to user logged in area.

How to setup the application 
----------------------------

If you're running application on `localhost` or local *web server*, try the following method below :

1.  Download the source code.

2.  Extract .zip file on your document root.

3.  Create `.htaccess` file on your root directory :

        RewriteEngine on

        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d

        RewriteRule .* index.php/$0 [PT,L]

    *don't forget to enable `mod_rewrite` module on your Apache configuration.*

4.  Setup MySQL Database, create new database. Match your database `user`, `name` and `password` with `database.php` in directory application/config/ and  Export `ci-login.sql` using phpMyAdmin or another tools you like.

Contact / Support 
-----------------

Feel free to contact me by email support@aditya-nursyahbani.com, my [blog] [1] or visit my [website] [2].

  [1]: http://dityalovers.blogspot.com/  "My Blogger blog"
  [2]: http://aditya-nursyahbani.com/    "My Personal Website"
