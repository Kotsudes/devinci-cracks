<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profile Update</title>
</head>

<body>

    <form method="POST" action=<?php echo ($secure == "true") ? "/devinci-cracks/csrf/secure" : "/devinci-cracks/csrf/unsecure" ?>>
        <label for="email">New Email:</label>
        <input type="email" id="email" name="email">
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
        <input type="submit" value="Update Email">
    </form>

</body>

</html>