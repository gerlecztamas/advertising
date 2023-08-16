# Advertising project for job interview

Simple PHP application where users and their representative advertisements can be seen. It doesn't use any framework or CMS.

## The application meets the following requirements as asked in the task:
* URL Mapped - I used .htaccess on a very basic level to rewrite the endpoints of the application
* Based on an MVC pattern - The application has all three layers of the MVC pattern and I also added a Service layer so I can manipulate the queried data there and not in the Controller layer if needed
* Object oriented
* Uses database (MySQL)
* The application has 2 database tables: users (id, name) and advertisements (id, userid, title)
* The application both has a page to display the users and their advertisements as well
* Overall the system has 3 pages: home (index), users and advertisements
* The system has a minimalist css design with images, google fonts and other icons
