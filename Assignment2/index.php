<?php # Script 3.7 - index.php #2

// This function outputs theoretical HTML
// for adding ads to a Web page.
function create_ad() {
  echo '<div class="alert alert-info" role="alert"><p>This is an add for Assignment 2! This is an add for Assignment 2! This is an add for Assignment 2!</p></div>';
} // End of the function definition.

$page_title = 'Welcome to Assignment 2!';
include('includes/header.html');

// Call the function:
create_ad();
?>

<div class="page-header"><h1>Assignment 2 Homepage</h1></div>
<p>This is the first paragraph for Assignment 2. </p>
<p>
    Use your example files from the book. There is a sql.sql file in the root folder. Read through it and find
where the DB called banking is created.
</p>
<p>Run phpMyAdmin. Using the sql.sql SQL script from the book, import the banking database, its table(s),
and insert data into table(s).</p>

<p>In Cloud9 BASH: navigate to the folder that contains the local repo you created previously for all
assignments. Hint: check that you see a prompt similar to</p>

<p>Your username:~/workspace/yourAssignments (master) $</p>

<p>Recall that without the (master) you don’t have a repo.</p>

<p>Use git status and git remote –v to make sure everything is set up correctly.</p>


</p>

<?php
// Call the function again:
create_ad();

include('includes/footer.html');
?>