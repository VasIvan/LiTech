<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <!--ICONS FONT AWSOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--ICONS GOOGLE-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--CSS-->
    <link href="style.css" rel="stylesheet" type="text/css">


    <title>Vasil Ivanov</title>
  </head>
  <body>
      <!-- Language Bar-->
    <div class="container-fluid py-2 bg-liana">
        <div class="container">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link text-light" href="#rss-fluid">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#">Intranet</a>
                </li>
                <li class="nav-item dropdown">
                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                        In English &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Suomeksi</a>
                      </div>
                  </li>
              </ul>
        </div>
    </div>

    <!--NAVBAR-->
    <div class="container-fluid bg-light py-3">
        <div class="container px-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand mr-4" href="#">
                    <img src="img/liana.png" width="120" height="40" alt="Liana Technologies">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="#rss-fluid">Company</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#btn-cnt">Contact Us</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button id="btn-search" class="btn btn-success btn-liana my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>
        </div>
    </div>

    <!--Parallax-->

        <div id="parallax-image" class="container-fluid">

            <div class="row h-100">
                <div class="col-md-12 align-self-center">
                    <h1 id="parallax-text" class="text-center">Software fueling digital marketing</h1><br>
                    <div class="text-center"><button class="btn btn-success btn-liana">Learn more</button></div>
                </div>
            </div>
    
        </div>

    <!--Company / Products / Constact us-->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 mb-4">
                    <img src="img/company.jpg" class="card-img-top img-filter" alt="company">
                    <div class="carousel-caption">
                        <h3>Company</h3>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <img src="img/products.jpg" class="card-img-top img-filter" alt="products">
                    <div class="carousel-caption">
                        <h3>Products</h3>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 mb-4">
                    <img src="img/contact.jpg" class="card-img-top img-filter" alt="contact us">
                    <div class="carousel-caption">
                        <h3>Contact us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!--JS Animation-->
<div class="container-fluid">
    <div id="anime-width" class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-6 col-md-1 mr-3">
                <br>
                <i class="material-icons">business_center</i>
            </div>
            <div class="col-sm-6 col-md-2 mb-4 mr-2">
                <div id="value" class="anime-num">0</div>
                <p class="anime-text">Clients</p>
            </div>
            <div class="col-sm-6 col-md-1 mr-3">
                <br>
                <i class="material-icons">face</i>
            </div>
            <div class="col-sm-6 col-md-2 mb-4 mr-2">
                <div id="value2" class="anime-num">0</div>
                <p class="anime-text">Employees</p>
            </div>
            <div class="col-sm-6 col-md-1 mr-3">
                <br>
                <i class="material-icons">public</i>
            </div>
            <div class="col-sm-6 col-md-2 mb-4 mr-2">
                <div id="value3" class="anime-num">0</div>
                <p class="anime-text text-nowrap">Daily users</p>
            </div>
            
        </div>
    </div>
</div>




    <!--RSS FEED-->
    <div id="rss-fluid" class="container-fluid bg-light">
            <div id="rss-container" class="container-fluid">
                <h1 class="h-ttl">Latest news</h1>
                <div id="rss-feeds">
                </div>
            </div>
    </div>

    <!--References-->
    <div id="ref-fluid" class="container-fluid">
        <div class="container">
            <h1 class="h-ttl">References</h1>
            <div class="row">
                <div class="col-12 col-md-3 my-4">
                    <div class="card">
                        <img src="img/bosch.png" class="card-img-top" alt="Bosch">
                        <div class="card-body ref-card-body">
                        <h4 class="card-text text-center">Robert Bosch</h4>
                        <p class="card-text text-center">Bosch is a multinational engineering and electronics company.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 my-4">
                    <div class="card">
                        <img src="img/bodyshop.png" class="card-img-top" alt="The BodyShop">
                        <div class="card-body  ref-card-body">
                        <h4 class="card-text text-center">The Body Shop</h4>
                        <p class="card-text text-center">The Body Shop is a global beauty brand and it has more than 3,000 stores in more than 60 countries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 my-4">
                    <div class="card">
                        <img src="img/lapland.jpg" class="card-img-top" alt="Lapland Hotels">
                        <div class="card-body ref-card-body">
                        <h4 class="card-text text-center">Lapland Hotels</h4>
                        <p class="card-text text-center">Lapland Hotels is the largest and most diverse hotel chain in Lapland.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 my-4">
                    <div class="card">
                        <img src="img/ikea.png" class="card-img-top" alt="IKEA">
                        <div class="card-body ref-card-body">
                        <h4 class="card-text text-center">IKEA</h4>
                        <p class="card-text text-center">IKEA is a multinational furniture store.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Subscribe-->
    <div class="container-fluid">
            <div class="container mb-5">
                <div id="sub-form">
                    <h1 class="h-ttl">Subscribe to our newsletter</h1>
                    <p class="text-center">Follow our story and get latest promotional<br>
                    news about our products and events.</p>
                    <form class="form-inline justify-content-center" action="sub-exc.php" method="post">
                        <input id="sub-input" name="email" type="text" class="form-control mx-1 my-2" placeholder="Your email address">
                        <button type="submit" name="sub-btn" class="btn btn-success btn-liana mx-1 my-2">Subscribe</button>
                    </form>
                </div>
                
                <?php 
                    if (isset($_GET["emailsub"])){ // After checking that there is an actual email on the input, this will display a success message that email is sent to the user and the user must check his email
                        if ($_GET["emailsub"] == "success") {
                            echo '<div class="alert alert-warning text-center mt-2" role="alert">
                                    Please check your email(spam section)!
                                    </div>';
                        }
                    }

                    if (isset($_GET["error"])){ // This will display an error message if the input is empty
                        if ($_GET["error"] == "empty") {
                            echo '<div class="alert alert-danger text-center mt-2" role="alert">
                                    The field was empty, please write correct email!
                                    </div>';
                        }
                        if ($_GET["error"] == "notemail") { // This will display an error message if the syntax of the email is not correct
                            echo '<div class="alert alert-danger text-center mt-2" role="alert">
                                    Invalid email! Correct email format: example@example.com
                                    </div>';
                        }
                    }

                    if (isset($_GET["validator"])){ // this will check if we have the validator inside the url

                    require "conn.php";
                    $validator = $_GET["validator"]; // we take the validator from the URL

                    if (empty($validator)){ // if we have the validator in the URL but it is empty this will give an error message
                        echo '<div class="alert alert-danger text-center mt-2" role="alert">
                                Validation link does not work! please try again!
                                </div>';
                    }
                    else if (ctype_xdigit($validator) === true){ //check if the validator is in hexadecimal digits
                            $sql = "SELECT * FROM liana_valid WHERE valid_valid=?;"; // Here we take the validator from the URL and we will compare it to the validator from the validator database. I use a prepare statement here because the validator from the URL is easy to be modified.
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt,$sql)){
                                echo "Prepared statement (Select validator) error!";
                                exit();
                            }
                            mysqli_stmt_bind_param($stmt, "s", $validator);
                            mysqli_stmt_execute($stmt);

                            $result = mysqli_stmt_get_result($stmt);
                            if(!$row = mysqli_fetch_assoc($result)){ // This will show an error message if the URL validator does not match with the validator from the validator database
                                echo '<div class="alert alert-danger text-center mt-2" role="alert">
                                        Email not found for that validator, please try again!
                                        </div>';
                            } else { // If the validators are matching we contunue here with checking if the email provided from the user is existing in our database where we collect the clients email
                                $email = $row["email_valid"];
                                $sql = "SELECT * FROM liana_sub WHERE email_sub='$email';"; // here I do not use prepared statement because I take this email from the validator database and it is save to use it
                                $result = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($result) > 0){ // If we have this email on the databse with our clients email, we inform them that this email have been already registered and we ask them to suscribe with another email address
                                        echo '<div class="alert alert-danger text-center mt-2" role="alert">
                                        This email is already in our database, please try another!
                                        </div>';
                                    } else{ 

                                $sql = "INSERT INTO liana_sub (email_sub) VALUES ('$email');"; // Finally if we do not have the email in our clients database we add the email to the database and display Thanks for suscribing message to the user

                                if (mysqli_query($conn, $sql)) {
                                    echo'<div class="container my-5 text-center">
                                        <h4 style="color: rgb(111, 177, 77);">Thank you for suscribing to our newsletter!</h4>
                                        </div>';
                                   } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                   }
                                }
                            }
                        }
                    }
?>
                

            </div>
    </div>

    <!--Footer-->
    <footer class="container-fluid bg-black text-white py-5">
        <nav class="container navbar navbar-expand-sm navbar-dark pr-2 mb-3">
            <a class="navbar-brand" href="#">Liana Technologies</a>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link text-white-custom" href="#ref-fluid">Company</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white-custom" href="#ref-fluid">Products</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-nowrap text-white-custom" href="#btn-cnt">Contact us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white-custom" href="#rss-fluid">News</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white-custom" href="#">Intranet</a>
            </li>
            
            </ul>
            </nav>
            <nav class="container navbar navbar-expand-sm navbar-dark pr-2">
                <a class="nav-item"><b class="s-bold">Sales and injuiries</b><br>Email:sales@lianatech.com<br>Phone:+358 10 387 7053</a>
                <button id="btn-cnt" type="button" class="btn btn-success btn-liana text-nowrap">Contact us</button>
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link fa fa-facebook" href="https://www.facebook.com/pg/LianaTechFI/photos/?ref=page_internal"></a>
                </li>
                <li class="nav-item">
                <a class="nav-link fa fa-twitter" href="https://twitter.com/lianatech?lang=fi"></a>
                </li>
                <li class="nav-item">
                <a class="nav-link fa fa-linkedin" href="https://www.linkedin.com/company/liana-technologies/"></a>
                </li>
                </ul>
            </nav>
    </footer>

    <!-- RSS jQuery-->
    <script src="https://code.jquery.com/jquery-1.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script src="jquery.rss.min.js"></script>
    <!--JS script-->
    <script src="script.js"></script>
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>