<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ontario Tourism</title>
</head>

<body>

<div id="container">
    <header>
    <div class="container">
        <input type="text" name="box" i class="fa fa-search" placeholder="Search...">
        
        <div class="btn">
            <a href="#"><i class="fa fa-search"></i></a>
        </div>
    </div>
</div>

    </header>

    <main>

        <section id="Featured" >
           <h2 class="">Featured</h2>  <!-- ---------NEEDS TO BE SLIDING IMAGES--------- -->
           <div class="featureCon">
                <img src="./public/images/nature.jpg" class="responsive" alt="landing image">
           </div>
        </section>

        <section id="Categories">
            <h2>Categories</h2>

            <div id="category_boxs">
                        <div class="cat1 cat">
                            <img class="catImgs" src="./public/images/hotels.jpeg" alt="">
                            <h3 class="cat1Text">Hotels</h3>
                        </div>
    
                        <div class="cat2 cat">
                            <img class="catImgs" src="./public/images/entertainment.jpg" alt="">
                            <h3 class="cat1Text">Entertainment</h3>
                        </div>
    
                        <div class="cat3 cat">
                            <img class="catImgs" src="./public/images/sightseeing.jpg" alt="">
                            <h3 class="cat1Text">Sightseeing</h3>
                        </div>
    
                        <div class="cat4 cat">
                            <img class="catImgs" src="./public/images/adventure.jpg" alt="">
                            <h3 class="cat1Text">Adventures</h3>
                        </div>

                        <div class="cat5 cat">
                            <img class="catImgs" src="./public/images/food.jpg" alt="">
                            <h3 class="cat1Text">Food</h3>
                        </div>
    
                        <div class="cat6 cat">
                            <img class="catImgs" src="./public/images/nature.jpg" alt="">
                            <h3 class="cat1Text">Nature</h3>
                        </div>
            </div>

            <div id="catButton">
                <a href="#" class="catButton">View All</a>
            </div>
            
        </section>

        <section id="AroundYou">
            <h2>Around You</h2>

            <div id="aroundYou_boxs">
                        <div class="b1 box">
                            <img class="boxImgs" src="./public/images/victoriapark.jpg" alt="">
                            <h3>Victoria Park</h3>
                            <p>Nature</p>
                            <h3>London, ON</h3>
                        </div>
    
                        <div class="b2 box">
                            <img class="boxImgs" src="./public/images/mall.jpg" alt="">
                            <h3>Masonville Mall</h3>
                            <p>Entertainment</p>
                            <h3>London, ON</h3>
                        </div>
    
                        <div class="b3 box">
                            <img class="boxImgs" src="./public/images/western.jpg" alt="">
                            <h3>Western University</h3>
                            <p>Sightseeing</p>
                            <h3>London, ON</h3>
                        </div>
    
                        <div class="b4 box">
                            <img class="boxImgs" src="./public/images/cineplex.jpg" alt="">
                            <h3>Cineplex</h3>
                            <p>Entertainment</p>
                            <h3>London, ON</h3>
                        </div>
            </div>

            <div id="catButton 123">
                <a href="#" class="catButton">View All</a>
            </div>
            
        </section>
        

    </main>

    <footer>
        <div id="footer">

        </div>
    </footer>
    
    
    
</div>
    <script src="js/main.js" type="module"></script>
</body>
</html>