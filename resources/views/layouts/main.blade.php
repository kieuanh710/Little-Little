<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,500;1,600;1,700;1,800&family=Open+Sans:wght@400;500&family=Pacifico&display=swap" rel="stylesheet">
    <link href="./assets/font/fontawesome-free-6.0.0/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
</head>

<body>
    <div class="background" style="background: url('./assets/img/background.jpg') no-repeat ;">
        @include('layouts.navbar')
        @yield('home')
        @yield('event')
        @yield('contact')
        @yield('payment')
        @yield('paymentSuccess')
        @yield('detailEvent')
    </div>


    <script src="/assets/js/active.js"></script>
    <script type="text/javascript">
            //getUsers();
            // $('#idTypeTicket').on('keyup', function() {
            //     getUsers();
            // });
           
        
        function getUsers(){
            var search = $('#idTypeTicket').val();
          
            // alert(active);
            // alert(connect);
            alert(search);
    
            
                
        };
    
    </script>
</body>
</html>