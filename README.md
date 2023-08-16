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


## Include folder

The include folder contains the navbar and footer templates, which are used/included in all three main pages php file.

## Fonts and images folders

These folders contain the used fonts and images during the project.

## Database

The database has two tables, users and advertisements.

### Users(id, name)

![Képernyőfelvétel (171)](https://github.com/gerlecztamas/advertising/assets/93374277/856eda27-6b76-4641-81ad-fc5e1efebbf0)

### Advertisements(id, userid, title)

![Képernyőfelvétel (172)](https://github.com/gerlecztamas/advertising/assets/93374277/bebddb1f-d435-47ed-bdd9-175d64cae548)


## Model Layer

Model layer is only used for representation of the two main classes with their representative attributes and methods.

### User class

#### Attributes

* id
* name

### Advertisement class

#### Attributes

* id
* user - representing the user connected to the advertisement as a whole User entity
* title

## Service layer

Service layer connects to the database and stores the queried data in entities defined by the Model layer's classes. The queried data can be manipulated here as well.

### UserService

#### Functions

* constructor
  * Stores the connection to the database in a variable making it reusable.
* getAllUsers
  * Stores the queried users in an array and returns them to the controller.
 
### AdvertisementService

#### Functions

* constructor
  * Stores the connection to the database in a variable making it reusable.
* getAllUsers
  * Stores the queried advertisements in an array and returns them to the controller.


 ## Controller layer

 Controller layer communicates between the View and Service/Model layers.

 ### UserController

 #### Attributes

 * The controller has a UserService field to retrieve data from the database through that.

 #### Functions

* getAllUsers
  * The controller handles the request from the View layer and uses the UserService to return all users stored in an array to the View layer.

### AdvertisementController

 #### Attributes

 * The controller has a AdvertisementService field to retrieve data from the database through that.

 #### Functions

* getAllAdvertisements
  * The controller handles the request from the View layer and uses the AdvertisementService to return all advertisements stored in an array to the View layer.

## View layer

The elements of the View layer are called from the main pages to display the right view for the client user.

### UserView

The UserView alerts the Controller layer to retrieve the users and displays the users by querying the data. If no users are retrieved an "error message" is displayed instead.

### AdvertisementView

The AdvertisementView alerts the Controller layer to retrieve the advertisements and displays the advertisements by querying the data. If no advertisements are retrieved an "error message" is displayed instead.


## .htacces file

Here I tried to implement the required URL mapping altough I'm not sure if I did it the right way.




