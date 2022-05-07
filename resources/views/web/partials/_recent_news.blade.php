<section id="recent_news">
    <div class="header">
        <h2>Recent News</h2>
    </div>
    <div class="wraper">
        <div class="card">
            <div class="card-image">
                <img src="{{asset("assets/images/achivements/1.jpg")}}" alt="">
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit In nesciunt officiis voluptatum repellat non animi dignissimos voluptate tempora ex enim.
                </p>
            </div>
            <div class="card-footer">
                <a href="">
                    <div class="read-more-btn">
                        Read more
                    </div>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{asset("assets/images/achivements/2.jpg")}}" alt="">
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit In nesciunt officiis voluptatum repellat non animi dignissimos voluptate tempora ex enim.
                </p>
            </div>
            <div class="card-footer">
                <a href="">
                    <div class="read-more-btn">
                        Read more
                    </div>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card-image">
                <img src="{{asset("assets/images/achivements/3.jpg")}}" alt="">
            </div>
            <div class="card-body">
                <p>Lorem ipsum dolor sit In nesciunt officiis voluptatum repellat non animi dignissimos voluptate tempora ex enim.
                </p>
            </div>
            <div class="card-footer">
                <a href="">
                    <div class="read-more-btn">
                        Read more
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="achivement-footer">
        <a href="">See All</a>
    </div>
</section>

<style>
    #recent_news .wraper{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    #recent_news .header{
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #recent_news .wraper .card{
        display: flex;
        flex-direction: column;
        width: 300px;
        height: 400px;
        margin: 20px;
    }
    #recent_news .wraper .card img{
        width: 100%;
        height: 200px;
    }

    #recent_news .card .read-more-btn{
        height: 40px;
        width: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid grey;
    }

    #recent_news .achivement-footer {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100px;
    }
</style>