<?php include 'db.php'; ?>

<h2>Simple PHP App</h2>

<form method="POST">
  <input type="text" name="name" placeholder="Enter name" required>
  <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    $stmt = $conn->prepare("INSERT INTO users (name) VALUES (?)");
    $stmt->bind_param("s", $name);
    $stmt->execute();
}

$result = $conn->query("SELECT * FROM users");

while($row = $result->fetch_assoc()) {
    echo "<p>" . $row['name'] . "</p>";
}
?>
