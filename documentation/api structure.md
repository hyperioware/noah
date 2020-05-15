PHP API STRUCTURE
~~~
api/index.php
	     ?{nodetype}&{id}
	     ?{nodetype}&{id}&{pagename}
	     ?{nodetype}&{id}&update&{columns/values}
	     ?{nodetype}&{id}&delete
	     ?{nodetype}&create&{columns/values}
	     ?{nodetype}&search&{fields}&where={criteria}&{OR/AND}&order={columns}&{asc/desc}
	     ?{nodetype}&update&{columns/values}&where={criteria}&{OR/AND}
~~~
