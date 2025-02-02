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
            background-image: linear-gradient(to bottom right, gray,pink);
            color: #fff;
            padding: 10px 5px;
            text-align: center;
            font-size: 28px; /* Adjust the font size as needed */
            font-weight: bold; /* Adjust the font weight as needed */
            font-style: italic; /* Adjust the font style as needed */
        }

        .author-container {
            display: grid;
            grid-template-columns: repeat(6, minmax(100px, 1fr)); /* Adjust the column width */
            gap: 20px;
            padding: 20px 0 20px 0; /* Adjust left padding as needed */
            text-align: center; /* Center align the content */
            max-width: 1275px; /* Set a maximum width for the container */
            margin: 0 auto; /* Center the container horizontally */
        }

        .author {
            background-color: #fff;
            padding: 10px 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out, box-shadow 0.5s ease-in-out;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .author:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 150, 136, 1); /* Adjust the color as needed */
        }

        .author img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .details {
            text-align: left;
        }

        .details h3 {
            margin-top: 10px;
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
            padding: 10px 10px 10px 15px;
            justify-content: space-between;
            margin-top: 10px;
        }

        .button1 {
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

        .button1:hover {
            background: rgb(61, 106, 255);
            box-shadow: 0 0 30px 5px rgba(0, 142, 236, 0.815);
            -webkit-transition: all 0.2s ease-out;
            -moz-transition: all 0.2s ease-out;
            transition: all 0.2s ease-out;
        }

        .button1:hover::before {
            -webkit-animation: sh02 0.5s 0s linear;
            -moz-animation: sh02 0.5s 0s linear;
            animation: sh02 0.5s 0s linear;
        }

        .button1::before {
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

        .button1:active {
            box-shadow: 0 0 0 0 transparent;
            -webkit-transition: box-shadow 0.2s ease-in;
            -moz-transition: box-shadow 0.2s ease-in;
            transition: box-shadow 0.2s ease-in;
        }
    </style>
</head>
<body>
    
    <div id="top-message">
        <p>Top Authors</p>
    </div>

    <div class="author-container">
        <div class="author">
            <img src="Pu la Deshpande.png" alt="author 1">
            <div class="details">
                <h3><i>Pu la Deshpande</i></h3>
                <h3><b>पु.ल. देशपांडे</b></h3>
            </div>
            <div class="action-buttons">      
                <a href="pu la collection.php"><button class="button1">Collection</button></a>
            </div>
        </div>

        <!-- Add more authors as needed -->

        <div class="author">
            <img src="sane guruji.png" alt="author 2">
            <div class="details">
                <h3><i>Sane Guruji</i></h3>
                <h3><b>साने गुरूजी</b></h3>
            </div>
            <div class="action-buttons">      
                <a href="sguruji collection.php"><button class="button1">Collection</button></a>
            </div>
        </div>

        <!-- Add more authors as needed -->

        <div class="author">
            <img src="vishwasn.png" alt="author 2">
            <div class="details">
                <h3><i>Vishwas Patil</i></h3>
                <h3><b>विश्वास पाटील</b></h3>
            </div>
            <div class="action-buttons">      
                <a href="vishwas collection.php"><button class="button1">Collection</button></a>
            </div>
        </div>

        <div class="author">
            <img src="veer.png" alt="author 2">
            <div class="details">
                <h3><i>Veer Savarkar</i></h3>
                <h3><b>वीर सावरकर</b></h3>
            </div>
            <div class="action-buttons">      
                <a href="veer collection.php"><button class="button1">Collection</button></a>
            </div>
        </div>

        <div class="author">
            <img src="shivaji.png" alt="author 2">
            <div class="details">
                <h3><i>Shivaji Sawant</i></h3>
                <h3><b>शिवाजी सावंत</b></h3>
            </div>
            <div class="action-buttons">      
                <a href="shivaji collection.php"><button class="button1">Collection</button></a>
            </div>
        </div>

        <div class="author">
            <img src="Atre.png" alt="author 2">
            <div class="details">
                <h3><i>Prahlad Keshav Atre</i></h3>
                <h3><b>प्रल्हाद केशव अत्रे</b></h3>
            </div>
            <div class="action-buttons">      
                <a href="Atre collection.php"><button class="button1">Collection</button></a>
            </div>
        </div>

        <div class="author">
            <img src="Pu la Deshpande.png" alt="author 2">
            <div class="details">
                <h3><i>Pu la Deshpande</i></h3>
                <h3><b>पु.ल. देशपांडे</b></h3>
            </div>
            <div class="action-buttons">      
                <a href="pu la collection.php"><button class="button1">Collection</button></a>
            </div>
        </div>

        <div class="author">
            <img src="Pu la Deshpande.png" alt="author 2">
            <div class="details">
                <h3><i>Pu la Deshpande</i></h3>
                <h3><b>पु.ल. देशपांडे</b></h3>
            </div>
            <div class="action-buttons">      
                <a href="pu la collection.php"><button class="button1">Collection</button></a>
            </div>
        </div>

        <div class="author">
            <img src="Pu la Deshpande.png" alt="author 2">
            <div class="details">
                <h3><i>Pu la Deshpande</i></h3>
                <h3><b>पु.ल. देशपांडे</b></h3>
            </div>
            <div class="action-buttons">      
                <a href="pu la collection.php"><button class="button1">Collection</button></a>
            </div>
        </div>

        <div class="author">
            <img src="Pu la Deshpande.png" alt="author 2">
            <div class="details">
                <h3><i>Pu la Deshpande</i></h3>
                <h3><b>पु.ल. देशपांडे</b></h3>
            </div>
            <div class="action-buttons">      
                <a href="pu la collection.php"><button class="button1">Collection</button></a>
            </div>
        </div>

        <div class="author">
            <img src="Pu la Deshpande.png" alt="author 2">
            <div class="details">
                <h3><i>P.l. Deshpande</i></h3>
                <h3><b>पु.ल. देशपांडे</b></h3>
            </div>
            <div class="action-buttons">      
                <a href="pu la collection.php"><button class="button1">Collection</button></a>
            </div>
        </div>


        <div class="author">
            <img src="Pu la Deshpande.png" alt="author 2">
            <div class="details">
                <h3><i>Pu la Deshpande</i></h3>
                <h3><b>पु.ल. देशपांडे</b></h3>
            </div>
            <div class="action-buttons">      
                <a href="pu la collection.php"><button class="button1">Collection</button></a>
            </div>
        </div>

        

    



    </div>


</body>
</html>
