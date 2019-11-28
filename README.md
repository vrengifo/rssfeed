# rssfeed
RSS feed

Laravel project to load RSS and browse the results

Implementation of:
Laravel command to parse a RSS Feed resource and load to a table
Implement filters to show unread_only items
Browse the results with a simple UI 


## Setup the database
For this example, I'm using MySQL

create database rssfeeds;

create user 'pepper'@'localhost' identified by '<your_password>';

grant all on rssfeeds.* to 'pepper'@'localhost';

If an error is presented when runs the "php artisan migrate:fresh --seed", execute the line below in mysql

alter user 'pepper'@'localhost' identified with mysql_native_password by '<your_password>';


## Run the command
From console, execute and look for the command rss:load 

php artisan list

Use your favorite RSS url to execute: 
php artisan rss:load https://www.hotukdeals.com/rss/all

Some examples of RSS:
    https://threatpost.com/feed/
    https://www.hotukdeals.com/rss/all
    https://www.cbc.ca/cmlink/rss-world
    http://www.informationweek.com/rss_simple.asp
    https://www.infoworld.com/index.rss
    http://www.computerweekly.com/rss/All-Computer-Weekly-content.xml
    https://www.techrepublic.com/rssfeeds/articles/
    https://galido.net/blog/feed/
    
    
