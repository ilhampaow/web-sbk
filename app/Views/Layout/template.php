<?php

use App\Models\digitalProdukModel;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url('Assets/css/animate.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('Assets/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('Assets/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('Assets/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('Assets/css/flaticon.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('Assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?= base_url('Assets/css/css/bootstrap.min.css'); ?>">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- batas table -->
    <link rel="stylesheet" href="<?= base_url('Assets/css/data-table.css'); ?>">

    <!-- solusi komunitas -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <!-- solusi digital -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body>
    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('layout/footer'); ?>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <!-- <script src="<?= base_url('Assets/js/custom.js'); ?>"></script> -->
    <!-- <script src="<?= base_url('Assets/js/accordions.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/jquery.singlePageNav.min.js'); ?>"></script> -->
    <!-- <script src="<?= base_url('Assets/js/owl.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/slick.js'); ?>"></script> -->
    <script src="<?= base_url('Assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/jquery-migrate-3.0.1.min.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/jquery.easing.1.3.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/jquery.stellar.min.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/jquery.animateNumber.min.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/scrollax.min.js'); ?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="<?= base_url('Assets/js/google-map.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/main.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= base_url('Assets/js/custom.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/jquery.singlePageNav.min.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/accordions.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/owl.js'); ?>"></script>
    <script src="<?= base_url('Assets/js/slick.js'); ?>"></script>

    <!-- template -->
    <script src="<?= base_url('Assets/edit/js/main.js'); ?>"></script>
    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>

    <!-- fatawa dan regulasi -->
    <script>
        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.firstElementChild.className += " w3-border-red";
        }
    </script>

    <!-- batas table -->
    <script src="<?= base_url('Assets/js/data-table.js'); ?>"></script>

    <!-- index solusi-komunitas -->
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";

        }
    </script>
    <!-- solusi digital -->


</body>

</html>