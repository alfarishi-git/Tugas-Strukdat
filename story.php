<?php 
require 'functions.php';

if (isset($_POST['submit'])){

	// cek data jika berhasil atau tidak
	if (story($_POST) > 0){
		echo "
			<script>

				alert('Data berhasil ditambah!');
				document.location.href = 'index.php';

			</script>
		";
	} else {
		echo "
				<script>

					alert('Gagal menambah data!');
					document.location.href = 'index.php';

				</script>
		";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Story post</title>

  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- Website Icon -->
  <link rel="icon" href="assets\images\web-icon.png" type="image/x-icon">


</head>

<body>

  <!-- story posting -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <br><br>
          <h2>Post Story</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <form class="font-weight-bold" method="post" enctype="multipart/form-data">
            <div class="form-group image-upload">
              <label for="image">Upload Image</label><br>
              <input type="file" name="image" id="image">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>

</html>