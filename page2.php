<?php
$db = new SQLite3('/var/www/html/app.db');
$message = '';
$username = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $sql = "SELECT id, username FROM users WHERE username = '$username' LIMIT 1";
    $result = $db->query($sql);
    $row = $result ? $result->fetchArray(SQLITE3_ASSOC) : false;
    $message = $row ? "Login success as: " . htmlspecialchars($row['username']) : "Login failed";
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page 2</title>
</head>
<body>
  <h2>Page 2 - Protected by ModSecurity</h2>
  <form method="post" action="/page2.php">
    <input type="text" name="username" placeholder="Enter username" required>
    <button type="submit">Submit</button>
  </form>
  <p><?php echo $message; ?></p>
</body>
</html>