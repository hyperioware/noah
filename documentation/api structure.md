PHP API STRUCTURE
~~~
	api/index.php
GET		     /{nodetype}/{id}
GET		     /{nodetype}/{id}/{fields}
GET		     /{nodetype}/{id}/{pagename}
PUT		     /{nodetype}/{id}/{columns/values}
DELETE		     /{nodetype}/{id}
POST		     /{nodetype}/{columns/values}
GET		     /{nodetype}/{fields}/{criteria}/{OR/AND}/{pagelimit}
PUT		     /{nodetype}/{columns/values}/{criteria}/{OR/AND}
~~~

Examples based on "Users" type:

~~~
GET		     /users/e5Tg0H3fBmn //Requests user profile data
GET		     /users/e5Tg0H3fBmn/city //Requests specific user data; this example, the user's city
GET		     /users/e5Tg0H3fBmn/photos //Requests all photos owned by the user
GET		     /users/e5Tg0H3fBmn/photoalbums/{albumid}/photos //Requests all photos owned by the user in a specific album
PUT		     /users/e5Tg0H3fBmn/phones/work=555-555-1111 //Updates user work phone
DELETE		     /users/e5Tg0H3fBmn //Deletes user account
POST		     /users/password=12345&email=something@this.com //Creates new user account
POST		     /users/e5Tg0H3fBmn/photo //Adds a new photo to the user's account
POST		     /users/e5Tg0H3fBmn/device //Adds a new device to the user's account
GET		     /users/first_name,city/city=detroit,city=fenton/OR/10 //Gets all user first names and city if either from Detroit or Fenton, and limit to 10 per page
GET		     /users/photos/city=detroit/50 //Gets photos for all users from detroit, and limit to 50 per page
PUT		     /users/city=detroit/city=detriot //Updates all users from "detriot" with city name of "detroit"
~~~
