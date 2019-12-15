<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
<style>
body {background-color: #7f8c8d;
	color: black;
	text-align: center;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  color:white;
  background-color: background;
}

</style>


</style>

</head>
<body>
	<h1>Orders </h1>
<!--	<a href="marks.php"><h4 style="color: white"> Add students marks </h4></a><br><br><br>-->

</body>
</html>

<?php

//$connection = mysqli_connect("localhost","root","","4b");
//$result= mysqli_query($connection,"SELECT *  FROM orders");
echo "<table><tr><th>Order No.</th><th>Amount</th><th>Date</th><tr>";
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
          //echo "Ord no:  " . $row["ord_no"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
          echo "<tr><td> " . $row["ord_no"]. "</td><td>" . $row["purch_amt"] . "</td><td>" . $row["ord_date"] ."<td><tr>";

	}
}
echo "</table>";

//$result= mysqli_query($connection,"SELECT SUM(purch_amt) as sum FROM orders");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
            	echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
//$result= mysqli_query($connection,"SELECT AVG(purch_amt) as avg FROM orders");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
            	echo "Average  Amount : " . $row["avg"]. "<br><br>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
$result= mysqli_query($connection,"SELECT COUNT(DISTINCT salesman_id) as count FROM orders");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
            	echo "number of Salesman : " . $row["count"]. "<br><br>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
$result= mysqli_query($connection,"SELECT COUNT(ALL grade) as grade FROM customer");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
            	echo "number of customers who gets at least a gradation for his/her performance. : " . $row["grade"]. "<br><br>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
//$result= mysqli_query($connection,"SELECT MAX(purch_amt) as max FROM orders");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
            	echo "maximum purchase amount of all the orders.: " . $row["max"]. "<br><br>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
else {
	echo "No mark ";
}
//$result= mysqli_query($connection,"SELECT MIN(purch_amt) as min FROM orders");
if (mysqli_num_rows($result)> 0) {
	//while($row = mysqli_fetch_assoc($result)) {
            	echo "minimum purchase amount of all the orders. " . $row["min"]. "<br><br>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	//}
} 
else {
	echo "No mark ";
}
//$result= mysqli_query($connection,"SELECT city,MAX(grade) as max FROM customer GROUP BY city");
if (mysqli_num_rows($result)> 0) {
    echo "highest grade for each of the cities of the customers";
    echo "<table><tr><th>City</th><th>max grade</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
            	echo "<tr><td>" . $row["city"]. "</td><td>".$row["max"]."</td></tr>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
else {
	echo "No mark ";
}

//$result= mysqli_query($connection,"SELECT customer_id,MAX(purch_amt) as max FROM orders GROUP BY customer_id");
if (mysqli_num_rows($result)> 0) {
    echo "highest purchase amount ordered by each customer with their ID and highest purchase amount.";
    echo "<table><tr><th>Customer ID</th><th>Highest amount ordered</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
            	echo "<tr><td>" . $row["customer_id"]. "</td><td>".$row["max"]."</td></tr>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
else {
	echo "No mark ";
}

$result= mysqli_query($connection,"SELECT salesman_id,MAhighest purchase amount with their ID and order date, for those customers who have a higher purchase amount in a day is within the range 2000 and 6000.X(purch_amt) as max FROM orders WHERE ord_date = '2012-08-17' GROUP BY salesman_id");
if (mysqli_num_rows($result)> 0) {
    echo "highest purchase amount on a date ‘2012-08-17’ for each salesman with their ID.";
    echo "<table><tr><th>Customer ID</th><th>Highest amount ordered</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
            	echo "<tr><td>" . $row["salesman_id"]. "</td><td>".$row["max"]."</td></tr>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
else {
	echo "No mark ";
}
//$result= mysqli_query($connection,"SELECT customer_id,ord_date,MAX(purch_amt) as max FROM orders GROUP BY customer_id,ord_date HAVING MAX(purch_amt)>2000.00");
if (mysqli_num_rows($result)> 0) {
    echo "highest purchase amount on a date ‘2012-08-17’ for each salesman with their ID.";
    echo "<table><tr><th>Customer ID</th><th>Highest amount ordered</th><th>Order Date</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
            	echo "<tr><td>" . $row["customer_id"]. "</td><td>".$row["max"]."</td><td>".$row["ord_date"]."</td></tr>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
else {
	echo "No mark ";
}
//$result= mysqli_query($connection,"SELECT customer_id,ord_date,MAX(purch_amt) as max FROM orders GROUP BY customer_id,ord_date HAVING MAX(purch_amt) BETWEEN 2000 AND 6000");
if (mysqli_num_rows($result)> 0) {
    echo " highest purchase amount with their ID and order date, for those customers who have a higher purchase amount in a day is within the range 2000 and 6000.
    ";
    echo "<table><tr><th>Customer ID</th><th>Highest amount ordered</th><th>Order Date</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
            	echo "<tr><td>" . $row["customer_id"]. "</td><td>".$row["max"]."</td><td>".$row["ord_date"]."</td></tr>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
else {
	echo "No mark ";
}
//$result= mysqli_query($connection,"SELECT customer_id,ord_date,MAX(purch_amt) as max FROM orders GROUP BY customer_id,ord_date HAVING MAX(purch_amt) IN(2000 ,3000,5760, 6000)");
if (mysqli_num_rows($result)> 0) {
    echo " highest purchase amount with their ID and order date, for only those customers who have a higher purchase amount in a day is within the list 2000, 3000, 5760 and 6000.";
    echo "<table><tr><th>Customer ID</th><th>Highest amount ordered</th><th>Order Date</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
            	echo "<tr><td>" . $row["customer_id"]. "</td><td>".$row["max"]."</td><td>".$row["ord_date"]."</td></tr>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
else {
	echo "No mark ";
}

//$result= mysqli_query($connection,"SELECT customer_id,MAX(purch_amt) as max FROM orders WHERE customer_id BETWEEN 3002 and 3007 GROUP BY customer_id");
if (mysqli_num_rows($result)> 0) {
    echo " highest purchase amount with their ID, for only those customers whose ID is within the range 3002 and 3007.";
    echo "<table><tr><th>Customer ID</th><th>Highest amount ordered</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
            	echo "<tr><td>" . $row["customer_id"]. "</td><td>".$row["max"]."</td></tr>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
else {
	echo "No mark ";
}



//$result= mysqli_query($connection," SELECT customer_id,MAX(purch_amt) as max FROM orders WHERE customer_id BETWEEN 3002 and 3007 GROUP BY customer_id HAVING MAX(purch_amt)>1000");
if (mysqli_num_rows($result)> 0) {
    echo " display customer details (ID and purchase amount) whose IDs are within the range 3002 and 3007 and highest purchase amount is more than 1000.";
    echo "<table><tr><th>Customer ID</th>customer name<th>Highest amount ordered</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
            	echo "<tr><td>" . $row["customer_id"]."</td><td>".$row["max"]."</td></tr>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
else {
	echo "No mark ";
}

//$result= mysqli_query($connection,"SELECT salesman_id,MAX(purch_amt) as max FROM orders GROUP BY salesman_id HAVING salesman_id BETWEEN 5003 AND 5008");
if (mysqli_num_rows($result)> 0) {
    echo " highest purchase amount with their ID, for only those salesmen whose ID is within the range 5003 and 5008";
    echo "<table><tr><th>salesman id</th><th>Highest amount</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
            	echo "<tr><td>" . $row["salesman_id"]."</td><td>".$row["max"]."</td></tr>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
else {
	echo "No mark ";
}

//$result= mysqli_query($connection,"SELECT COUNT(*) as ord_date FROM orders WHERE ord_date='2012-08-17'");
if (mysqli_num_rows($result)> 0) {
    echo "orders for a date August 17th, 2012.";
    echo "<table><tr><th>orders</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
            	echo "<tr><td>" .$row["ord_date"]."</td></tr>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
else {
	echo "No mark ";
}




?>