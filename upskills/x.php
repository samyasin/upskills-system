
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Freebie: 4 Bootstrap Gallery Templates</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/fluid-gallery.css">


</head>
<body>

<div class="container gallery-container">

    <h1>Bootstrap 3 Gallery</h1>

    <p class="page-description text-center">Fluid Layout With Overlay Effect</p>
    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="uploads/blog01.jpg">
                    <img src="uploads/blog01.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="uploads/blog02.jpg">
                    <img src="uploads/blog02.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="uploads/blog04.jpg">
                    <img src="uploads/blog04.jpg" alt="Tunnel">
                </a>
            </div>
            <div class="col-sm-12 col-md-8">
                <a class="lightbox" href="uploads/blog01.jpg">
                    <img src="uploads/blog01.jpg" alt="Traffic">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="uploads/blog01.jpg">
                    <img src="uploads/blog01.jpg" alt="Coast">
                </a>
            </div> 
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="uploads/blog01.jpg">
                    <img src="uploads/blog01.jpg" alt="Rails">
                </a>
            </div>

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>