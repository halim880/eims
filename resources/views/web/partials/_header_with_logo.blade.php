<section>
    <div class="row container">
        <div class="logo-contianer">
            <div class="versity-logo">
                <img src="{{asset("assets/bd_logo.png")}}" alt="" srcset="">
            </div>
            <div class="logo-right">
                <div class="btn-applynow">
                    apply now
                </div>
                <div class="btn-find-program">
                    Find a program
                </div>
            </div>
        </div>
    </div>
</section>

<style scoped>
    .logo-contianer{
        height: 80px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .versity-logo{
        height: 70px;
        max-width: 300px;
        min-width: 70px;
    }

    .versity-logo img{
        max-height: 100%;
        max-width: 100%;
    }

    .logo-right {
        display: flex;
    }

    .btn-applynow{
        padding-top: 8px;
        height: 45px;
        width: 45px;
        color: white;
        background: rgb(68, 27, 152);
        border: 4px solid rgb(244, 187, 17);
        border-radius: 50%;
        text-align: center;
        text-transform: uppercase;
        font-size: 10px;
        cursor: pointer;
    }

    .btn-find-program{
        height: 40px;
        width: 110px;
        border: 2px solid rgb(255, 167, 52);
        cursor: pointer;
        text-align: center;
        line-height: 40px;
        margin-left: 20px;
    }

</style>