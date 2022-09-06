<section id="hero" class="container">
    <img data-src="./public/asset/images/John-Wick-3.jpg" src="./public/asset/images/testProduct.jpg" class="banner-img" alt="">
    <div class="heroContent">
        <div class="heroData">
            <div class="data">
                <ion-icon name="film-outline"></ion-icon>
                <span>Action/Thriiler</span>
            </div>
            <div class="data">
                <ion-icon name="calendar-outline"></ion-icon>
                <span>2019</span>
            </div>
            <div class="data duration">
                <ion-icon name="time-outline"></ion-icon>
                <span>2h 11min</span>
            </div>
            <div class="display">4K</div>
        </div>
        <h2 class="heroName">John Wick: Chapter 3 - Parabellum</h2>
    </div>
</section>

<div class="container filter-bar">
    <div class="filter-dropdowns">
        <select name="genre" class="genreFilter filter">
            <option value="all genres">All genres</option>
            <option value="action">Action</option>
            <option value="adventure">Adventure</option>
            <option value="animation">Animation</option>
        </select>
        <select name="year" class="yearFilter filter">
            <option value="all genres">All years</option>
            <option value="all genres">2022</option>
            <option value="action">2020-2022</option>
            <option value="adventure">2010s</option>
        </select>
    </div>
    <div class="filter-radios">
        <input type="radio" name="grade" id="featured" checked>
        <label for="featured">Featured</label>

        <input type="radio" name="grade" id="popular">
        <label for="popular">Popular</label>

        <input type="radio" name="grade" id="newest">
        <label for="newest">Newest</label>

        <div class="checked-radio-bg"></div>
    </div>
</div>