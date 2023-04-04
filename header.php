<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px;
}

h1 {
    margin: 0;
}

nav {
    display: flex;
    justify-content: flex-end;
}

nav ul {
    display: flex;
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav li {
    margin: 0 10px;
}

nav a {
    color: #fff;
    text-decoration: none;
}

main {
    padding: 20px;
}

.post {
    margin-bottom: 40px;
}

.post h2 {
    font-size: 24px;
}

.post p {
    font-size: 16px;
    line-height: 1.5;
}

.post p:last-child {
    margin-bottom: 0;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
}

</style>
<body>
    <header>
        <h1>My Blog</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
