<!DOCTYPE html>

<head>

  <link href="css/main.css" rel="stylesheet">
  <meta charset="utf-8">
  <title> HTML TEMPLATE </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div class="container">
    <div class="row">
      <!--Always start with xs sizing, then change for larger sizes if needed-->
      <div class="col-xs-12">
          <h1>J's Home Improvement company</h1>
      </div>
    </div>
    <!--never have a col class within a col class-->
    <div class="row">
          <div class="col-xs-12">
          	<a class="btn btn-default" href="index.php">Home</a>
            <a class="btn btn-default" href="photoGallery.php">photo gallery</a>
            <a class="btn btn-default" href="contact.php">contact</a>
            <a class="btn btn-default" href="skillSet.php">Skillset</a>
          </div>
    </div>

    <div class="row">
      <div class="col-lg-12 second">
        <div class="scroll">
          <marquee behavior="scroll" direction="left">Kokomo,IN.......Free Estimates.......Call for your free quote today!!!!......</marquee>