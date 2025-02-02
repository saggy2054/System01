<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('');
            background-size: 800px; /* Adjust the background size as needed */
            background-position: center; /* Adjust the background position as needed */
            background-repeat: no-repeat; /* Adjust the background repeat as needed */
            background-color: #f4f4f4; /* Fallback color if the image is not available */
        }

        #top-message {
            background-color: #009688;
            color: #fff;
            padding: 2px;
            text-align: center;
            font-size: 28px; /* Adjust the font size as needed */
            font-weight: bold; /* Adjust the font weight as needed */
            font-style: italic; /* Adjust the font style as needed */
        }

        .book-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 100px;
            padding: 50px;
            width: 150%;
            height: 50%
        }

        .book {
            background-color: #fff;
            padding: 5px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out, box-shadow 0.5s ease-in-out;
          
            flex-direction: column;
            justify-content: space-between;
        }

        .book:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 150, 136, 1); /* Adjust the color as needed */
        }

        .book img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .details {
            text-align: left;
        }

        .details h3 {
            margin-top: 9px;
            margin-bottom: 5px;
            font-size: 1.1em;
        }

        .details p {
            margin: 0;
            font-size: 0.9em;
            color: #555;
        }

        .details .price {
            font-weight: bold;
            color: #009688;
            font-size: 1.1em;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        button1{
  position: relative;
  padding: 10px 20px;
  border-radius: 7px;
  border: 1px solid rgb(61, 106, 255);
  font-size: 14px;
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 2px;
  background: transparent;
  color: black;
  overflow: hidden;
  box-shadow: 0 0 0 0 transparent;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

button1:hover {
  background: rgb(61, 106, 255);
  box-shadow: 0 0 30px 5px rgba(0, 142, 236, 0.815);
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
}

button1:hover::before {
  -webkit-animation: sh02 0.5s 0s linear;
  -moz-animation: sh02 0.5s 0s linear;
  animation: sh02 0.5s 0s linear;
}

button1::before {
  content: '';
  display: block;
  width: 0px;
  height: 86%;
  position: absolute;
  top: 7%;
  left: 0%;
  opacity: 0;
  background: #fff;
  box-shadow: 0 0 50px 30px #fff;
  -webkit-transform: skewX(-20deg);
  -moz-transform: skewX(-20deg);
  -ms-transform: skewX(-20deg);
  -o-transform: skewX(-20deg);
  transform: skewX(-20deg);
}

@keyframes sh02 {
  from {
    opacity: 0;
    left: 0%;
  }

  50% {
    opacity: 1;
  }

  to {
    opacity: 0;
    left: 100%;
  }
}

button1:active {
  box-shadow: 0 0 0 0 transparent;
  -webkit-transition: box-shadow 0.2s ease-in;
  -moz-transition: box-shadow 0.2s ease-in;
  transition: box-shadow 0.2s ease-in;
}




    </style>
</head>
<body>
<?php include_once('navbar.php'); ?>

<div id="top-message">
    <p> Authors </p>
</div>

<div class="book-container">
    <div class="book">
        <img src="shiv.png" alt="Book 1">
        <div class="details">
            <h3>Chhatrapati Shivaji Maharaj</h3>
            <p>Author: Krishnarao Arjun Keluskar</p>
            <p class="price">₹140.00</p>
        </div>
        <div class="action-buttons">
            <button1 class="buy-button">Buy</button1>
            <button1 class="read-button">Read</button1>
        </div>
    </div>

    <!-- Add more book entries as needed -->

</div>

</body>
</html>
