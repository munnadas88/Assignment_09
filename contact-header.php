<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
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
  display: flex;
  justify-content: space-between;
}

section {
  flex-basis: 48%;
}

h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  font-size: 16px;
  margin-bottom: 5px;
}

input,
textarea {
  padding: 5px;
  font-size: 16px;
  margin-bottom: 10px;
}

button[type="submit"] {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #444;
}

footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px;
}

  </style>
  <body>
    <header>
      <h1>Contact Us</h1>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="blog.php">Blog</a></li>
        </ul>
      </nav>
    </header>