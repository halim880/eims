<section id="admission_advirtisement">
    <div class="container">
        <div class="row p-4">
            <div class="col admission_advirtisement">
                <div class="row d-flex">
                    <div class="col-md-4 image">
                        <img src="{{asset("assets/images/achivements/1.jpg")}}" alt="">
                    </div>
                    <div class="col-md-8 detials p-3">
                        <h3>ON-CAMPUS / ONLINE ADMISSION OPEN</h3>
                        <p>Admission Going on for the Spring 2022</p>
                        <br>
                        <p>Seize the opportunity to create a bright future...</p>
                        <p> <b>"You may delay, but time will not" </b> — Benjamin Franklin.</p>
                        <a href="">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .admission_advirtisement{
        border-radius: 20px;
        background-color: rgb(130, 196, 205);
    }
    .admission_advirtisement .image {
        height: 200px; 
        width: 350px;
        border-radius: 20px;
        overflow: hidden;
        margin: 20px;
    }
    .admission_advirtisement .image img{
        height: 100%;
        width: 100%;
    }

    .admission_advirtisement .detials{
        color: rgb(6, 67, 91);
    }

    .admission_advirtisement .detials p {
        font-size: 20px;
    }

    #admission_advirtisement .detials a {
        padding: 8px 13px;
        border: 3px solid rgb(251, 142, 34);
        color: rgb(141, 54, 5);
        transition: 0.5s all ease-in-out;
    }
    #admission_advirtisement .detials a:hover {
        background: rgb(251, 142, 34);
        border-radius: 4px;
    }
</style>