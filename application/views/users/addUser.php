<?=isset($message) ? $message : "";?>
<form method="POST">
    Username <input type="text" name="username"><br />
    Password <input type="text" name="password"><br />
    First Name <input type="text" name="firstname"><br />
    Last Name <input type="text" name="lastname"><br />
    <input type="submit" name="submit" value="Create User">
</form>

<a href="/users">Back to list of users</a>