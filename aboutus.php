<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

<?php
			include 'header.php';
		?>

</head>
<body>

<div class="about-section">
  <h1>About Us </h1>
  <p>We are a Software Engineer Web developers.</p>
  <p>This website is Created by software Engineer teams for Fasilo car rental Organization.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">

    <img >
      <img src="img/jo.jpg" alt="" style="width:100%">
      <div class="container">
        <h2>Yosef Azanaw</h2>
        <p class="title">Member</p>
        <p>Student at Debre Markos University</p>
        <p>Yosfazaneaw23@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/sele.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Solomon Yeshiwas</h2>
        <p class="title">Member</p>
        <p>Student at Debre Markos University</p>
        <p>Solomonyeshiwas532@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="img/bew.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Bewket Mekonnen</h2>
        <p class="title">Member</p>
        <p>Student at Debre Markos University</p>
        <p>bewke19@gmail.com.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
