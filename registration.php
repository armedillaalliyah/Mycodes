<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registartion Form</title>
</head>
<body>
<style>
body{
    background: lightgreen;
    color white;
}
</style>
<body>
    <form action="Database.php" method="post">
        <h2>Registration Form</h2>

<div>
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" placeholder="First Name" required>
</div>

        <br>

<div>
        <label for="middleName">Middle Name:</label>
        <input type="text" name="middleName" placeholder="Middle Name" required>
</div>

        <br>

<div>
        <label for="surname">Last Name:</label>
        <input type="text" name="surname" placeholder="Last Name" required>
</div>

        <br>

<div>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
</div>

        <br>

<div>
        <label for="sex">Sex:</label>
        <select name="sex" required><br>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
</div>

        <br>

<div>
        <label>Subjects Taken:</label><br>
        <input type="checkbox" name="subjects[]" value="math"> Math<br>
        <input type="checkbox" name="subjects[]" value="english"> English<br>
        <input type="checkbox" name="subjects[]" value="filipino"> Filipino<br>
        <input type="checkbox" name="subjects[]" value="science"> Science<br>
</div>

<br>

<div>
            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
</div>
    </form>
</body>
</html>