<div class="container">
    <div class="row mt-2">
        <h3> Hostel Name : {{$hostel->name}}</h3>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Provost</h4>
                </div>
                <div class="card-body">
                    <div class="provost-avatar">
                        <span class="account-user-avatar"> 
                            <img src="{{asset("assets/images/profile.png")}}" alt="user-image" class="rounded-circle">
                        </span>
                    </div>
                </div>
        </div>
    </div>
</div>

<style>
    td {
        padding: 5px !important;
    }

    .provost-avatar{
        display: flex;
        justify-content: center;
    }

    .provost-avatar img{
        width: 70px;
        height: 70px;
    }
</style>