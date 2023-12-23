<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>BookMy Event </title>
      <!-- <l  ink href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
        <?php require 'utils/styles.php';?>
      
        
    
            </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1 style="color:white ; font-size:42px ; font-style:bold  ; background:black"><strong>          Daftar event favorit kamu:</strong></h1><!--body content title-->

            </div>
            
            
            <div class="container">
            <div class="col-md-110">
            <hr>
            </div>
            </div>
            
            <div class="row"><!--technical content-->
                <section>
                    <div class="container">
                        <div class="col-md-5"><!--image holder with 6 grid columns-->
                            <img src="images/technical.jpg" class="img-responsive">
                        </div>

                        <div class="subcontent col-md-5"><!--Text holder with 6 column grid-->
                        
                            <h1 style="color:#003300 ; font-size:38px ;" ><u><strong>Event Teknologi</strong></u></h1><!--title-->
                            <p><!--content-->
                        Klik detail untuk melihat semua event    
                        </p>
                            
                            <br><br>
                        <?php $id=1;
                        echo
                             '<a class="btn btn-default"  href="viewEvent.php?id='.$id.'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>Detail Event</a>'
                        ?>
                             </div><!--subcontent div-->
                    </div><!--container div-->
                </section>


            </div><!--row div-->
            
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-5"><!--image holder with 6 grid columns-->
                            <img src="images/gaming.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-5"><!--Text holder with 6 column grid-->
                            <h1 style="color:#003300 ; font-size:38px ;"><strong><u>Event Game</u></strong></h1><!--title-->
                            <p><!--content-->
                        Klik detail untuk melihat semua event    
                        </p>
                            
                            <br><br>
                            <?php 
                            $id=2;
                            echo
                             '<a class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>Detail Event</a>'
                        ?>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
        
       <?php require 'utils/footer.php'; ?>
    </body>
</html>