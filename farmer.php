<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}



?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    

   <style>
    html {
    scroll-behavior: smooth;
   }
   .body{
    min-height:
   }
    
  .navbar-nav > li{
  padding-left:30px;
  padding-right:30px;
}
.navbar-nav{
  

  font-size: 20px;
  font-weight: bold;
}
.container-flud-1{
  background-color:rgba(255, 255, 255, 1);
}

#tutorial-1{
  padding:2% 5%;
  background: #BEFCAA;
}
.card{
  transition: .3s;
  border:1px solid #ff02c0;
}
.card:hover{
  transform:scale(1.1);
  box-shadow:2px 6px 5px black;
}
#tutorial-2{
  
  padding:3% 10%;
  background: #fff;
}
.card{
  transition: .3s;
  border:1px solid #ff02c0;
}
.card:hover{
  transform:scale(1.1);
  box-shadow:2px 6px 5px black;
}
#tutorial-3{
  
  padding:3% 10%;
  background: #fff;
}
.card{
  transition: .3s;
  border:1px solid #ff02c0;
}
.card:hover{
  transform:scale(1.1);
  box-shadow:2px 6px 5px black;
}
#tutorial-4{
  
  padding:3% 10%;
  background: #fff;
}
footer{
  padding:3% 10%;
  background: #fff;;
}
#tutorial-5{
  
 
}
.card{
  transition: .3s;
  border:1px solid #ff02c0;
}
.card:hover{
  transform:scale(1.1);
  box-shadow:2px 6px 5px black;
}

 
  

    </style>
</head>
<body>
  
  <div class="container-flud" >  
      <header >
      
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgba(6, 246, 45, 0.79); height:100px">
            <div class="container-fluid">
              <a class="navbar-brand" style="font-weight: bold;font-size: 30px;" href="#">UNI_INVEST</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav" style="position: absolute;  right: 600px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Learn</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">contect</a>
                  </li>
                
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Log in</a>
                  </li>
                  
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">sign-up</a>
                  </li>

                <div class="navber-nev-1" style="position:relative; top: 5px; left:400px">
                <form class="d-flex ">
                  <input class="form-control  me-2" style="height: 40px; width: 300px;" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-link" type="submit"><i class="fa fa-search" style="color:black"></i></button>
                </form>
                
              </div>
                
              </div>
            </div>
        </nav>
        <div class="container-flud-2" style=" border: 1px solid white; margin-top: 0px; margin-bottom:0px;margin-right: 0px; margin-left: 0px;  padding: 200px; background-color: rgba(73, 225, 20, 0.46); height:90vh">
        
          <form class="d-flex" style="position: absolute; top: 210px; right:951px;">
          <div class="sa"  >
            <input class="form-control me-2" style="height: 50px; width: 600px;" type="text" placeholder="Search">
          </div>
            <div class="ss" >
          

            <button class="btn btn-success" type="submit" style="height: 50px; width: 150px;">Search Results</button>

            </div>
          </form>
          <section id="tutorial-5">
      <div class="section-title">
        <h3 class="text-left">Raising Now</h3>
        </div> 
        <div class="row d-flex ">
        <?php
        include 'connection.php';
        $pic = mysqli_query($link,"SELECT * FROM product");
        while($row = mysqli_fetch_array($pic)){
        ?>
         
     
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src='$row[Image]' alt="card image">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $row["product_name"];?></h4>
                                <p class="card-text"><?php echo $row["product_description"];?></p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit this here</a>
                            </div>  
                        </div>
                    </div>
                    
                    
                    
               
          
     <?php  
      
        }
        
     ?>
     </div>
     </section> 
       </div>
     
      </header>  
   
       
    
    <main>
    <section id="tutorial-3">
      <div class="section-title">
        <h3 class="text-left">Cloth</h3>
       
      </div>  
      <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="http://www.studywithanis.com/wp-content/uploads/2018/01/ICT-Cover.jpg" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">HSC ICT</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, praesentium?</p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit this playlist</a>
                            </div>  
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="http://www.studywithanis.com/wp-content/uploads/2018/01/ICT-Cover.jpg" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">HSC ICT</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, praesentium?</p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit this playlist</a>
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="http://www.studywithanis.com/wp-content/uploads/2018/01/ICT-Cover.jpg" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">HSC ICT</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, praesentium?</p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit this playlist</a>
                            </div>

                        </div>
                    </div>
                    
                </div>

    </section>   
    <section id="tutorial-2">
      <div class="section-title">
        <h3 class="text-left">Car factory</h3>
       
      </div>  
      <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="http://www.studywithanis.com/wp-content/uploads/2018/01/ICT-Cover.jpg" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">HSC ICT</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, praesentium?</p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit this playlist</a>
                            </div>  
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="http://www.studywithanis.com/wp-content/uploads/2018/01/ICT-Cover.jpg" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">HSC ICT</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, praesentium?</p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit this playlist</a>
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="http://www.studywithanis.com/wp-content/uploads/2018/01/ICT-Cover.jpg" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">HSC ICT</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, praesentium?</p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit this playlist</a>
                            </div>

                        </div>
                    </div>
                    
                </div>

    </section>   
      
        
    <section id="tutorial-1">
      <div class="section-title">
        <h3 class="text-center">Service</h3>
        <hr class="hr-style" style="border-color:black">
      </div>  
      <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="http://www.studywithanis.com/wp-content/uploads/2018/01/ICT-Cover.jpg" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">HSC ICT</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, praesentium?</p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit this playlist</a>
                            </div>  
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="http://www.studywithanis.com/wp-content/uploads/2018/01/ICT-Cover.jpg" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">HSC ICT</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, praesentium?</p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit this playlist</a>
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="http://www.studywithanis.com/wp-content/uploads/2018/01/ICT-Cover.jpg" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">HSC ICT</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, praesentium?</p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit this playlist</a>
                            </div>

                        </div>
                    </div>
                    
                </div>

    </section>
    <section id="tutorial-4">
    <div class="service-section pt-4">
                
                <div class="row text-left text-md-center">
                    <div class="col-lg-4 com-md-6">
                       
                        
                        <p class="small text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi sint quibusdam laborum magnam incidunt dolores earum optio molestias quis sapiente.
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                    <div class="col-lg-4 com-md-6">
                        
                        
                        <p class="small text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi sint quibusdam laborum magnam incidunt dolores earum optio molestias quis sapiente.
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        
                        
                        <p class="small text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi sint quibusdam laborum magnam incidunt dolores earum optio molestias quis sapiente.
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                    
                </div>
            </div>
        </section> 

          
    
    </main>
    <footer>
    <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <p><i class="bi bi-facebook fa-lg"></i> Facebook</p> 
    </div>
    <div class="col">
    </div>
    <div class="col">
     </div>
    <div class="col">
    <p><i class="bi bi-youtube fa-lg"></i> Youtube</p> 
    </div>
    <div class="col">
     </div>
     </div> 
    <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <p><i class="bi bi-instagram"></i> instagram</p> 
    </div>
    <div class="col">
    </div>
    <div class="col">
     </div>
    <div class="col">
    <p><i class="bi bi-envelope"></i> Gmail</p> 
    </div>
    <div class="col">  
      
    </div>
   
  </div> 
      
    </footer> 
  </div>   
    
                
              
    


    <script type="text/javascript" src ="js/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src ="js/slick.min.js"></script>
    <script type="text/javascript" src ="js/my.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>







































                               page





















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    

   <style>
    html {
    scroll-behavior: smooth;
   }
   .body{
    min-height:
   }
    
  .navbar-nav > li{
  padding-left:30px;
  padding-right:30px;
}
.navbar-nav{
  

  font-size: 20px;
  font-weight: bold;
}
.container-flud-1{
  background-color:rgba(255, 255, 255, 1);
}

#tutorial-1{
  padding:2% 5%;
  background: #BEFCAA;
}
.card{
  transition: .3s;
  border:1px solid #ff02c0;
}
.card:hover{
  transform:scale(1.1);
  box-shadow:2px 6px 5px black;
}
#tutorial-2{
  
  padding:3% 10%;
  background: #fff;
}
.card{
  transition: .3s;
  border:1px solid #ff02c0;
}
.card:hover{
  transform:scale(1.1);
  box-shadow:2px 6px 5px black;
}
#tutorial-3{
  
  padding:3% 10%;
  background: #fff;
}
.card{
  transition: .3s;
  border:1px solid #ff02c0;
}
.card:hover{
  transform:scale(1.1);
  box-shadow:2px 6px 5px black;
}
#tutorial-4{
  
  padding:3% 10%;
  background: #fff;
}
footer{
  padding:3% 10%;
  background: #fff;;
}
#tutorial-5{
  
 
}
.card{
  transition: .3s;
  border:1px solid #ff02c0;
}
.card:hover{
  transform:scale(1.1);
  box-shadow:2px 6px 5px black;
}

 
  

    </style>
</head>
<body>
  
  <div class="container-flud" >  
      <header >
      
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgba(6, 246, 45, 0.79); height:100px">
            <div class="container-fluid">
              <a class="navbar-brand" style="font-weight: bold;font-size: 30px;" href="#">UNI_INVEST</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav" style="position: absolute;  right: 600px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Learn</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">contact</a>
                  </li>
                
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Log in</a>
                  </li>
                  
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">sign-up</a>
                  </li>

                <div class="navber-nev-1" style="position:relative; top: 5px; left:400px">
                <form class="d-flex ">
                  <input class="form-control  me-2" style="height: 40px; width: 300px;" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-link" type="submit"><i class="fa fa-search" style="color:black"></i></button>
                </form>
                
              </div>
                
              </div>
            </div>
        </nav>
       
     
      </header>  
   
       
    
       
    
    <main>
    <section id="tutorial-3">
      <div class="section-title">
        <h3 class="text-left">Founder market</h3>
       
      </div>  
      <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="data:image/png;base64,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">
                            <div class="card-body">
                                <h4 class="card-title">Herfy</h4>
                                <p class="card-text">most famous international brand </p>
                                <a class="card-link stretched-link" target="_blank" href="https://herfybd.com/">Visit here</a>
                            </div>  
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">HSBC</h4>
                                <p class="card-text">International banking institution</p>
                                <a class="card-link stretched-link" target="_blank" href="https://www.hsbc.com.bd/1/2/">Visit  here</a>
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="data:image/png;base64,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" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">BRAC</h4>
                                <p class="card-text">Most renowable group in Bangladesh</p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.brac.net">Visit here</a>
                            </div>

                        </div>
                    </div>
                    
                </div>

    </section>   
    <section id="tutorial-2">
      <div class="section-title">
        <h3 class="text-left">Investor invest area</h3>
       
      </div>  
      <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">LONG TERM INVEST</h4>
                                <p class="card-text">A good term invest in here</p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit here</a>
                            </div>  
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">Short term Invest</h4>
                                <p class="card-text">A small amount of profit but still helpful for investor</p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit  here </a>
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="https://www.theforage.com/blog/wp-content/uploads/2022/11/life-insurance-good-career-path.jpg" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">Insurance</h4>
                                <p class="card-text">A brighten future ensure</p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit here</a>
                            </div>

                        </div>
                    </div>
                    
                </div>

    </section>   
      
        
    <section id="tutorial-1">
      <div class="section-title">
        <h3 class="text-center"> Regular update area</h3>
        <hr class="hr-style" style="border-color:black">
      </div>  
      <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoR6-hahkx1fjedfOaoSPwgEdfUu4ZyyxV8w&usqp=CAU" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">total invest</h4>
                                <p class="card-text">Including all catagory</p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit here</a>
                            </div>  
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center">
                            <img class="card-img-top" src="data:image/jpeg;base64,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" alt="card image">
                            <div class="card-body">
                                <h4 class="card-title">Total profit</h4>
                                <p class="card-text"></p>
                                <a class="card-link stretched-link" target="_blank" href="http://www.studywithanis.com/#tutorial">Visit here</a>
                            </div>   
                        </div>
                    </div>
                   

                        </div>
                    </div>
                    
                </div>

    </section>
    <section id="tutorial-4">
    <div class="service-section pt-4">
                
                <div class="row text-left text-md-center">
                    <div class="col-lg-4 com-md-6">
                       
                        
                        <p class="small text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi sint quibusdam laborum magnam incidunt dolores earum optio molestias quis sapiente.
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                    <div class="col-lg-4 com-md-6">
                        
                        
                        <p class="small text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi sint quibusdam laborum magnam incidunt dolores earum optio molestias quis sapiente.
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        
                        
                        <p class="small text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi sint quibusdam laborum magnam incidunt dolores earum optio molestias quis sapiente.
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                    
                </div>
            </div>
        </section> 

          
    
    </main>
    <footer>
    <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <p><i class="bi bi-facebook fa-lg"></i> Facebook</p> 
    </div>
    <div class="col">
    </div>
    <div class="col">
     </div>
    <div class="col">
    <p><i class="bi bi-youtube fa-lg"></i> Youtube</p> 
    </div>
    <div class="col">
     </div>
     </div> 
    <div class="row">
    <div class="col">
    </div>
    <div class="col">
    <p><i class="bi bi-instagram"></i> instagram</p> 
    </div>
    <div class="col">
    </div>
    <div class="col">
     </div>
    <div class="col">
    <p><i class="bi bi-envelope"></i> Gmail</p> 
    </div>
    <div class="col">  
      
    </div>
   
  </div> 
      
    </footer> 
  </div>   
    
                
              
    


    <script type="text/javascript" src ="js/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src ="js/slick.min.js"></script>
    <script type="text/javascript" src ="js/my.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>