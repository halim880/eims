
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset("assets/images/favicon.ico")}}">

    <!-- third party css -->
    <link href="{{asset("assets/css/vendor/jquery-jvectormap-1.2.2.css")}}" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{asset("assets/css/icons.min.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("assets/css/app.min.css")}}" rel="stylesheet" type="text/css" id="light-style">
    <link href="{{asset("assets/css/app-dark.min.css")}}" rel="stylesheet" type="text/css" id="dark-style">
    <link href="{{asset("assets/css/vendor/dataTables.bootstrap5.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/vendor/responsive.bootstrap5.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/css/vendor/buttons.bootstrap5.css")}}" rel="stylesheet" type="text/css" />

    @livewireStyles

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false}'>
    {{-- @include('sweetalert::alert') --}}
    <!-- Begin page -->
    <div class="wrapper">
        @yield('root')
    </div>

    @livewireScripts
    
    <script src="{{asset("assets/js/vendor.min.js")}}"></script>
    <script src="{{asset("assets/js/app.min.js")}}"></script>
    <script src="{{asset("assets/js/sweet-alert.min.js")}}"></script>
    <script src="{{asset("assets/js/jquery.min.js")}}"></script>

    <!-- third party js -->
    <script src="{{asset("assets/js/vendor/apexcharts.min.js")}}"></script>
    <script src="{{asset("assets/js/vendor/jquery-jvectormap-1.2.2.min.js")}}"></script>
    <script src="{{asset("assets/js/vendor/jquery-jvectormap-world-mill-en.js")}}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{asset("assets/js/pages/demo.dashboard.js")}}"></script>

    <script src="{{asset("assets/js/vendor/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("assets/js/vendor/dataTables.bootstrap5.js")}}"></script>
    <script src="{{asset("assets/js/vendor/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("assets/js/vendor/responsive.bootstrap5.min.js")}}"></script>
    <script src="{{asset("assets/js/pages/demo.datatable-init.js")}}"></script>

    <script src="{{asset("assets/js/vendor/dataTables.buttons.min.js")}}"></script>
    <script src="{{asset("assets/js/vendor/buttons.bootstrap5.min.js")}}"></script>
    <script src="{{asset("assets/js/vendor/buttons.html5.min.js")}}"></script>
    <script src="{{asset("assets/js/vendor/buttons.flash.min.js")}}"></script>
    <script src="{{asset("assets/js/vendor/buttons.print.min.js")}}"></script>
    <script src="{{asset("assets/js/jspdf.js")}}"></script>
    <script src="{{asset("assets/js/MyJS/api.js")}}"></script>


    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>


<!-- If you want to use the popup integration, -->
<script>
var obj = {};
obj.cus_name = $('#customer_name').val();
obj.cus_phone = $('#mobile').val();
obj.cus_email = $('#email').val();
obj.cus_addr1 = $('#address').val();
obj.amount = $('#total_amount').val();

$('#sslczPayBtn').prop('postdata', obj);

(function (window, document) {
var loader = function () {
    var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
    // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
    script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
    tag.parentNode.insertBefore(script, tag);
};

window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
</script>

<script>
(function (window, document) {
var loader = function () {
    var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
    script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
    tag.parentNode.insertBefore(script, tag);
};

window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
</script>
    <!-- end demo js-->
</body>
</html>