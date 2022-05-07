<section id="achivements">
    <div class="header">
        <h2>Achivements</h2>
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
    #achivements .wraper{
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    #achivements .header{
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #achivements .wraper .card{
        display: flex;
        flex-direction: column;
        width: 300px;
        height: 400px;
        margin: 20px;
    }
    #achivements .wraper .card img{
        width: 100%;
        height: 200px;
    }

    #achivements .card .read-more-btn{
        height: 40px;
        width: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid grey;
    }

    #achivements .achivement-footer {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100px;
    }
</style>