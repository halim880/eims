<section id="imageCarosel">
    <div class="image-wraper">
        <img id="sliderImage"  alt="" srcset="">
        <div class="button-wraper">
            <div class="slider-buttons">
                <ul>
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="btn-next">Next</div>
        <div class="btn-prev">Prev</div>
    </div>
</section>

<script>
    document.getElementById("sliderImage").src = "http://127.0.0.1:8000/assets/slider-image.jpg";
</script>

<style scoped>
    #imageCarosel .image-wraper{
        position: relative;
        width: 100%;
        height: 350px;
    }

    #imageCarosel .image-wraper img{
        width: 100%;
        height: 100%;
    }

    .button-wraper{
        display: flex;
        justify-content: center;
    }

    #imageCarosel .image-wraper .slider-buttons{
        position: absolute;
        bottom: 0;
        padding: 10px;
        display: flex;
        justify-content: center;
        border-radius: 10px;
    }

    #imageCarosel .btn-next{
        position: absolute;
        top:50%;
        right: 10px;
        cursor: pointer;
    }

    #imageCarosel .btn-prev{
        position: absolute;
        top:50%;
        left: 10px;
        cursor: pointer;
    }

    .slider-buttons ul{
        display: flex;
        padding: 5px;
    }
    .slider-buttons ul li{
        height: 15px;
        width: 15px;
        cursor: pointer;
        border: 2px solid rgb(16, 3, 29);
        border-radius: 50%;
    }

    .slider-buttons ul li.active{
        background: rgb(12, 5, 49);
    }
</style>