<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Add moovie here</h1>
    <form method="POST" action="">
        <input type="text" name="movie_id" placeholder="ID" required>
        <input type="text" name="movie_title" placeholder="Title" required>
        <input type="text" name="movie_description" placeholder="Description" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    session_start();

    if (!isset($_SESSION['movies'])) {
        $_SESSION['movies'] = [];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $movie = [
            "id" => htmlspecialchars($_POST["movie_id"]),
            "title" => htmlspecialchars($_POST["movie_title"]),
            "description" => htmlspecialchars($_POST["movie_description"])
        ];

        $_SESSION['movies'][] = $movie;
    }

    if (!empty($_SESSION['movies'])) {
        echo "<h2>Movie List</h2>";
        foreach ($_SESSION['movies'] as $index => $movie) {
            echo "<p><strong>Movie #" . ($index + 1) . "</strong></p>";
            echo "<p><strong>ID:</strong> " . $movie['id'] . "</p>";
            echo "<p><strong>Title:</strong> " . $movie['title'] . "</p>";
            echo "<p><strong>Description:</strong> " . $movie['description'] . "</p>";
            echo "<hr>";
        }
    }
    ?>
</body>
</html>
