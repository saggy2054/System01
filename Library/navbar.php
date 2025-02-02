<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap JS and dependencies -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>


#searchInput {
      width: 240px;
      padding: 10px;
      font-size: 16px;
    }

    #suggestionsList {
      position: absolute;
      width: 300px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-top: none;
      list-style-type: none;
      padding: 0;
      margin: 0;
      display: none;
      margin-top: 5px; /* Add margin-top to create space between input and suggestions */
      z-index: 1000; /* Ensure the suggestions list appears above other elements */
    }

    #suggestionsList li {
      padding: 10px;
      cursor: pointer;
    }

    #suggestionsList li:hover {
      background-color: #f2f2f2;
    }

    #suggestionsList li a {
      text-decoration: none; /* Remove underline */
      color: #333; /* Set link color */
      display: block; /* Make the link take up the entire space of its parent */
    }

    #suggestionsList li a:hover {
      text-decoration: none; 
      color: #555; /* Set hover color */
    }
  


    /* CSS for navbar logo */
    .navbar-brand img {
      width: 120px;
      height: 60px;
    }

    /* Custom CSS for navbar Buttons */
    .btn {
 position: relative;
 font-size: 16px;
 text-decoration: none;
 padding: 0.5em 1.2em;
 display: inline-block;
 border-radius: 6em;
 transition: all .4s;
 border: none;
 font-family: ;
 font-weight: 500;
 color: black;
 background-color: white;
}

.btn:hover {
 transform: translateY(-3px);
 box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn:active {
 transform: translateY(-1px);
 box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn::after {
 content: "";
 display: inline-block;
 height: 100%;
 width: 100%;
 border-radius: 100px;
 position: absolute;
 top: 0;
 left: 0;
 z-index: -1;
 transition: all .6s;
}

.btn::after {
 background-color: #fff;
}

.btn:hover::after {
 transform: scaleX(1.4) scaleY(1.6);
 opacity: 0;
}

    .text-background {
      position: relative;
      display: inline-block;
      font-size: 36px;
      text-transform: uppercase;
      overflow: hidden;
      color: transparent;
      background-image: linear-gradient(45deg, #f3ec78, #af4261, #6b79c4, #f3ec78);
      background-size: 400% 400%;
      animation: shine 2s linear infinite;
      -webkit-background-clip: text;
      background-clip: text;
      text-shadow: 0px 2px 3px rgba(255, 255, 255, 0.4);
    }

    @keyframes shine {
      0% {
        background-position: 0% 50%;
      }

      100% {
        background-position: 100% 50%;
      }
    }




/* grid buttons */
.cta {
  border: none;
  background: none;
  cursor: pointer;
}

.cta span {
  padding-bottom: 7px;
  letter-spacing: 4px;
  font-size: 14px;
  padding-right: 15px;
  text-transform: uppercase;
}

.cta svg {
  transform: translateX(-8px);
  transition: all 0.3s ease;
}

.cta:hover svg {
  transform: translateX(0);
}

.cta:active svg {
  transform: scale(0.9);
}

.hover-underline-animation {
  position: relative;
  color: black;
  padding-bottom: 20px;
}

.hover-underline-animation:after {
  content: "";
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: black;
  transform-origin: bottom right;
  transition: transform 0.25s ease-out;
}

.cta:hover .hover-underline-animation:after {
  transform: scaleX(1);
  transform-origin: bottom left;
}


.fixed-header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  box-sizing: border-box;
  z-index: 4000;
}

main {
  margin-top: 70px; /* Adjust this value according to your header's height */
  padding: 20px;
}


#loader {
  border: 4px solid rgba(0, 0, 0, 0.1);
  border-top: 4px solid #333;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: spin 1s linear infinite;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 9999; /* Ensure the loader is on top of other content */
  display: none; /* Initially hidden */
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}






  </style>

</head>
<div id="loader"></div>

<body>
  <section>
    <nav class="fixed-header navbar navbar-expand-md navbar-light bg-light" style="height: 60px;">
      <a class="navbar-brand" >
        <img src="logo.png" height="50" width="100" alt="Online library system">
      </a>

      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <h3 style="font-family: Times New Roman">
        <h3 class="text-background">Classy&nbsp; Books</h3>
      </h3>

      <div class="collapse navbar-collapse" id="navbarNav" style="font-family: Nirmala UI;">
        <ul class="navbar-nav ml-auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <li class="nav-item">
            <a class="nav-link">
              <input type="text" class="form-control" placeholder="Search for Book.." style="border-radius: 100px;" name="search" id="searchInput" spellcheck="true">
              <ul id="suggestionsList"></ul>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link">
              <button type="submit" class=" btn">Search</button>
            </a>
          </li> -->&nbsp;&nbsp;&nbsp;&nbsp;



            <li class="nav-item">
            <a class="nav-link" href="index.php">
              <button class="btn" style="border-radius:100px"> Home</button>&nbsp;
            </a>
          </li>




          <!--<li class="nav-item">
            <a class="nav-link" href="logout.php">
              <button class="btn" style="border-radius:100px">Logout</button>
            </a>
          </li> -->
         
         

          <li class="nav-item">
            <a class="nav-link" href="contact.php">
              <button class="btn" style="border-radius:100px"> Contact us</button>&nbsp;
            </a>
          </li>
             
          <li class="nav-item">
            <a class="nav-link" href="profile.php">
              <button class="btn" style="border-radius:100px"> Profile</button>&nbsp;
            </a>
          </li>



        </ul>
      </div>









    </nav>
  </section>
 <!-- <br><br><br>
   <center>
<div class="row" style="margin-top:16px; margin-bottom: 20px; margin-left: 1120px; margin-right: 0; ">
<div class="col-sm-10" >
    <a href="cart.php" style="color: black; text-decoration: none;">
                      <button class="cta">
  <span class="hover-underline-animation"> Cart<img src="cart.png" height="32px" width="auto"> </span></span>
  <svg
    id="arrow-horizontal"
    xmlns="http://www.w3.org/2000/svg"
    width="30"
    height="10"
    viewBox="0 0 46 16"
  >
    <path
      id="Path_10"
      data-name="Path 10"
      d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
      transform="translate(30)"
    ></path>
  </svg>
</button>
 
          </a>
          
        </div>
    



</div>
</center>

-->

</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
      const searchInput = document.getElementById('searchInput');
      const suggestionsList = document.getElementById('suggestionsList');

      const elements = [
        { id: 'sane', name: 'Sane Guruji', page: 'sguruji collection.php#sane' },
        { id: 'pu', name: 'Pu la Deshpande', page: 'pu la collection.php#pu' },
        { id: 'vsh', name: 'Vishwas Patil', page: 'vishwas collection.php#vsh' },
        { id: 'Atr', name: 'Prahlad Keshav Atre', page: 'Atre collection.php#Atr' },
        // Add more elements here
        { id: 'veer', name: 'Veer Savarkar', page: 'veer collection.php#veer' },
        { id: 'shiv', name: 'Shivaji Sawant', page: 'shivaji collection.php#shiv' }
      ];

      searchInput.addEventListener('input', function() {
        const searchTerm = searchInput.value.trim().toLowerCase();
        const matchedElements = searchElements(searchTerm);
        renderSuggestions(matchedElements);
      });

      function searchElements(query) {
        return elements.filter(element => element.id.toLowerCase().includes(query) || element.name.toLowerCase().includes(query));
      }

      function renderSuggestions(matchedElements) {
        suggestionsList.innerHTML = '';
        if (matchedElements.length === 0 || searchInput.value.trim() === '') {
          suggestionsList.style.display = 'none';
        } else {
          suggestionsList.style.display = 'block';
          matchedElements.forEach(function(element) {
            const li = document.createElement('li');
            const link = document.createElement('a');
            link.textContent = element.name;
            link.href = element.page;
            li.appendChild(link);
            suggestionsList.appendChild(li);
          });
        }
      }

      // Close suggestions when clicking outside the input or suggestions list
      document.addEventListener('click', function(event) {
        if (event.target !== searchInput && event.target.parentNode !== suggestionsList) {
          suggestionsList.style.display = 'none';
        }
      });
    });

    // Function to show the loader
function showLoader() {
  document.getElementById('loader').style.display = 'block';
}

// Function to hide the loader
function hideLoader() {
  document.getElementById('loader').style.display = 'none';
}

// Example usage: Show loader while content is loading
showLoader();

// Simulate content loading with setTimeout
setTimeout(function() {
  // Your content loading logic here
  hideLoader(); // Hide loader when content is loaded
}, 3000); // Example: Hide loader after 3 seconds (3000 milliseconds)

</script>

</html>