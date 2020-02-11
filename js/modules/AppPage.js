export default {
    template: `
    <section>
    <section id="Featured" >
    <h2 class="">FEATURED</h2>  <!-- ---------NEEDS TO BE SLIDING IMAGES--------- -->
    <div class="featureCon">
        <video src="video/ad.mp4" controls autoplay width="100%"></video>
    </div>
        </section>

        <section id="Categories">
            <h2>CATEGORIES</h2>

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
            <h2>AROUND YOU</h2>

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
            
        </section>
    </section>
    `,

    created: function() {
        console.log("Index Page Rendered");
    }
}