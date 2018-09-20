<?php # Script 3.7 - index.php #2

// This function outputs theoretical HTML
// for adding ads to a Web page.
function create_ad() {
  echo '<div class="alert alert-info" role="alert"><p>This is an add for Assignment 1! This is an add for Assignment 1! This is an add for Assignment 1!</p></div>';
} // End of the function definition.

$page_title = 'Welcome to Assignment 1!';
include('includes/header.html');

// Call the function:
create_ad();
?>

<div class="page-header"><h1>Assignment 1 Homepage</h1></div>
<p>This is the first paragraph for Assignment 1. </p>
<p>
    In your Cloud9 folder structure, create one folder to hold all of our assignments.
Use BASH shell: navigate to the folder for all assignments you just created (cd folder name).
Here are the steps to use the local and remote repos. Repeat as necessary.
</p>
<p>1. Initialize a git repo for assignments (do this only once)</p>

<p>2. Remember to check status, add pages to the stage, commit locally</p>

<p>3. Check to see if you are connected to a remote repo</p>

<p>4. If not connected, run “git remote add origin …” command</p>

<p>5. Push local commit to remote rep</p>


</p>

<?php
// Call the function again:
create_ad();

include('includes/footer.html');
?>