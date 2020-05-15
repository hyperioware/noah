PHP API STRUCTURE
~~~
	api/index.php
GET		     ?{nodetype}&id={id}
GET		     ?{nodetype}&id={id}&{pagename}
PUT		     ?{nodetype}&id={id}&{columns/values}
DELETE		     ?{nodetype}&id={id}
POST		     ?{nodetype}&{columns/values}
GET		     ?{nodetype}&search&{fields}&where={criteria}&{OR/AND}&order={columns}&{asc/desc}
PUT		     ?{nodetype}&update&{columns/values}&where={criteria}&{OR/AND}
~~~
