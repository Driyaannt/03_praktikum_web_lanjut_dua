
<link
            href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700'
            rel='stylesheet'
            type='text/css'>
        <link
            href='http://fonts.googleapis.com/css?family=Damion'
            rel='stylesheet'
            type='text/css'>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/templatemo-style.css" rel="stylesheet">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>

<div class="tm-top-header">
    <div class="container">
        <div class="row">
            <div class="tm-top-header-inner">
                <div class="tm-logo-container">
                    <img src="img/logo.png" alt="Logo" class="tm-site-logo">
                        <h1 class="tm-site-name
        tm-handwriting-font">Cafe House</h1>
                    </div>
                    <div class="mobile-menu-icon">
                        <i class="fa fa-bars"></i>
                    </div>
                    <nav class="tm-nav">
                        <ul>
                            <li>
                                <a href="/home" class="active">Home</a>
                            </li>
                            <li>
                                <a href="/today-special" class=" ">Today Special</a>
                            </li>
                            <li>
                                <a href="/menu" class=" ">Menu</a>
                            </li>
                            <li>
                                <a href="/contact" class=" ">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>


<script>
    var links = document.querySelectorAll('.tm-nav a');

    links.forEach(function(link) {
        link.addEventListener('click', function() {
            links.forEach(function(link) {
                link.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
</script>

<!-- <script>
    $(document).ready(function() {
        // Get current URL path
        var currentPath = window.location.pathname;

        // Select all navigation links
        var links = $('.tm-nav a');

        // Add active class to the link that matches the current path
        links.each(function() {
            var linkPath = $(this).attr('href');
            if (linkPath === currentPath) {
                $(this).addClass('active');
            }
        });

        // Add click event to each navigation link
        links.on('click', function() {
            // Remove active class from all links
            links.removeClass('active');

            // Add active class to the clicked link
            $(this).addClass('active');
        });
    });
</script> -->