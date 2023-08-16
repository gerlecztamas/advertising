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

## Index/home

The homepage simply contains a brief introduction and two links to the other two pages.

![Képernyőfelvétel (167)](https://github.com/gerlecztamas/advertising/assets/93374277/8af06d11-a77b-45ca-af05-dc5576601397)

## Users

The users page also contains a brief introduction and the UsersView is included using php. The users are listed here.

![Képernyőfelvétel (169)](https://github.com/gerlecztamas/advertising/assets/93374277/6cbb26c8-bdd8-4dbe-a25b-8bca1f4160e7)

## Advertisements

The advertisements page also contains a brief introduction and the AdvertisementsView is included using php. The advertisements are listed here.

![Képernyőfelvétel (170)](https://github.com/gerlecztamas/advertising/assets/93374277/3a260c91-fb35-41bd-b3fd-3ee71ed9d714)






