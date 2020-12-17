<?php
require 'functions.php';

$post = query("SELECT * FROM tb_feed ORDER BY id DESC");
$story = query("SELECT * FROM tb_story");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/d3d6f2df1f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="index.css">

  <!-- Website Icon -->
  <link rel="icon" href="assets\images\web-icon.png" type="image/x-icon">

  <title>Instagram</title>
</head>

<body>

  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container justify-content-center">
        <div class="d-flex flex-row justify-content-between align-items-center col-9">
          <a class="navbar-brand" href="#">
            <img src="assets/images/ig-logo.png" alt="" loading="lazy">
          </a>
          <div>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
          </div>
          <div class="d-flex flex-row">
            <ul class="list-inline m-0">
              <li class="list-inline-item">
                <a href="#" class="link-menu">
                  <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house-door-fill"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z" />
                    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                  </svg>
                </a>
              </li>
              <li class="list-inline-item ml-2">
                <a href="#" class="link-menu">
                  <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-inboxes" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393zm.941.83l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438l.32-2.562H10.45a2.5 2.5 0 0 1-4.9 0H1.066zM3.81.563A1.5 1.5 0 0 1 4.98 0h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1-.78.624l-3.7-4.624A.5.5 0 0 0 11.02 1H4.98a.5.5 0 0 0-.39.188L.89 5.812a.5.5 0 1 1-.78-.624L3.81.563z" />
                    <path fill-rule="evenodd"
                      d="M.125 5.17A.5.5 0 0 1 .5 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .121-.393zm.941.83l.32 2.562A.5.5 0 0 0 1.884 9h12.234a.5.5 0 0 0 .496-.438L14.933 6H10.45a2.5 2.5 0 0 1-4.9 0H1.066z" />
                  </svg>
                </a>
              </li>
              <li class="list-inline-item ml-2">
                <a href="#" class="link-menu">
                  <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-compass" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M8 15.016a6.5 6.5 0 1 0 0-13 6.5 6.5 0 0 0 0 13zm0 1a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z" />
                    <path
                      d="M6 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H7a1 1 0 0 1-1-1zm.94 6.44l4.95-2.83-2.83 4.95-4.95 2.83 2.83-4.95z" />
                  </svg>
                </a>
              </li>
              <li class="list-inline-item ml-2">
                <a href="#" class="link-menu">
                  <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                  </svg>
                </a>
              </li>
              <li class="list-inline-item ml-2 align-middle">
                <a href="#" class="link-menu">
                  <div
                    class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border topbar-profile-photo">
                    <img src="assets/images/profiles/default-image.png" alt="..."
                      style="transform: scale(1.2); width: 100%; position: absolute; left: 0; top: 0.5px">
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div class="mt-4">
    <div class="container d-flex justify-content-center">
      <div class="col-9">
        <div class="row">
          <div class="col-8">

            <!-- START OF STORIES -->
            <div class="card">
              <div class="card-body d-flex justify-content-start">
                <ul class="list-unstyled mb-0">
                  <li class="list-inline-item">
                    <button class="btn p-0 m-0" data-toggle="modal" data-target="#exampleModal">
                      <div class="d-flex flex-column align-items-center">
                        <div
                          class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border border-danger story-profile-photo">
                          <img src="assets/images/profiles/default-image.png"
                            style="transform: scale(1.1); width: 100%; position: absolute; left: 0; top: 0.5px;">
                        </div>
                        <small>ramiza27_</small>
                      </div>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- END OF STORIES -->

            <!-- Modal Box -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">My Story</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Carousel -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <?php $i = 0; ?>
                        <?php foreach ($story as $row) :
                          $actives = '';
                          if ($i == 0) {
                            $actives = 'active';
                          }
                        ?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i; ?>"
                          class="<?= $actives; ?>"></li>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                      </ol>
                      <div class="carousel-inner">
                        <?php $i = 0; ?>
                        <?php foreach ($story as $row) :
                          $actives = '';
                          if ($i == 0) {
                            $actives = 'active';
                          }
                        ?>
                        <div class="carousel-item <?= $actives; ?>">
                          <img class="d-block w-100" src="assets/images/posts/<?= $row["story_image"]; ?>"
                            width="100% auto" height="400 auto">
                        </div>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    <!-- End of Carousel -->
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Modal Box -->

            <!-- START OF POSTS -->
            <div class="d-flex flex-column mt-4 mb-4">

              <?php foreach ($post as $row) : ?>
              <div class="card mb-3">
                <div class="card-header p-3">
                  <div class="d-flex flex-row align-items-center">
                    <div
                      class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border border-danger post-profile-photo mr-3">
                      <img src="assets/images/profiles/default-image.png" alt="..."
                        style="transform: scale(1.1); width: 100%; position: absolute; left: 0; top: 0.5px;">
                    </div>
                    <span class="font-weight-bold">ramiza27_</span>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="embed-responsive embed-responsive-1by1">
                    <img class="embed-responsive-item" src="assets/images/posts/<?= $row["post_image"]; ?>" />
                  </div>

                  <div class="d-flex flex-row justify-content-between pl-3 pr-3 pt-3 pb-1">
                    <ul class="list-inline d-flex flex-row align-items-center m-0">
                      <li class="list-inline-item">
                        <button class="btn p-0">
                          <svg width="1.6em" height="1.6em" viewBox="0 0 16 16" class="bi bi-heart" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                          </svg>
                        </button>
                      </li>
                      <li class="list-inline-item ml-2">
                        <button class="btn p-0">
                          <svg width="1.6em" height="1.6em" viewBox="0 0 16 16" class="bi bi-chat" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z" />
                          </svg>
                        </button>
                      </li>
                      <li class="list-inline-item ml-2">
                        <button class="btn p-0">
                          <svg width="1.6em" height="1.6em" viewBox="0 0 16 16" class="bi bi-share" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                              d="M11.724 3.947l-7 3.5-.448-.894 7-3.5.448.894zm-.448 9l-7-3.5.448-.894 7 3.5-.448.894z" />
                            <path fill-rule="evenodd"
                              d="M13.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 10a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm-11-6.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                          </svg>
                        </button>
                      </li>
                    </ul>
                    <div>
                      <button class="btn p-0">
                        <svg width="1.6em" height="1.6em" viewBox="0 0 16 16" class="bi bi-hdd" fill="currentColor"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                            d="M14 9H2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 8a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z" />
                          <path d="M5 10.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                          <path fill-rule="evenodd"
                            d="M4.094 4a.5.5 0 0 0-.44.26l-2.47 4.532A1.5 1.5 0 0 0 1 9.51v.99H0v-.99c0-.418.105-.83.305-1.197l2.472-4.531A1.5 1.5 0 0 1 4.094 3h7.812a1.5 1.5 0 0 1 1.317.782l2.472 4.53c.2.368.305.78.305 1.198v.99h-1v-.99a1.5 1.5 0 0 0-.183-.718L12.345 4.26a.5.5 0 0 0-.439-.26H4.094z" />
                        </svg>
                      </button>
                    </div>
                  </div>

                  <div class="pl-3 pr-3 pb-2">
                    <strong class="d-block">365.354 likes</strong>
                    <strong class="d-block">ramiza27</strong>
                    <p class="d-block mb-1"><?= $row["caption"];  ?></p>
                    <button class="btn p-0">
                      <span class="text-muted">View all 2,247 comments</span>
                    </button>

                    <div>
                      <div>
                        <strong class="d-block">a.7.m3ff</strong>
                        <span>❤️💓💓💓💓💓</span>
                      </div>
                      <div>
                        <strong class="d-block">adri_rez77</strong>
                        <span>Hi</span>
                      </div>
                    </div>

                    <small class="text-muted">4 HOURS AGO</small>
                  </div>

                  <div class="position-relative comment-box">
                    <form>
                      <input class="w-100 border-0 p-3 input-post" placeholder="Add a comment...">
                      <button class="btn btn-primary position-absolute btn-ig">Post</button>
                    </form>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <!-- END OF POSTS -->
          </div>
          <div class="col-4">
            <div class="d-flex flex-row align-items-center">
              <div
                class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sidenav-profile-photo">
                <img src="assets/images/profiles/default-image.png" alt="..."
                  style="transform: scale(1.1); width: 100%; position: absolute; left: 0; top: 0.5px">
              </div>
              <div class="profile-info ml-3">
                <span class="profile-info-username">ramiza27_</span>
                <span class="profile-info-name">Al Farishi</span> <br>
                <a href="insert.php" class="btn btn-outline-primary btn-sm"><strong>Post</strong></a> |
                <a href="story.php" class="btn btn-outline-primary btn-sm"><strong>Story</strong></a>
              </div>
            </div>

            <div class="mt-4">
              <div class="d-flex flex-row justify-content-between">
                <small class="text-muted font-weight-normal">Suggestions For You</small>
                <small>See All</small>
              </div>
              <div>
                <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                  <div class="d-flex flex-row align-items-center">
                    <div
                      class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sugest-profile-photo">
                      <img src="assets/images/profiles/profile-3.jpg" alt="..."
                        style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                    </div>
                    <strong class="ml-3 sugest-username">instagram</strong>
                  </div>
                  <button class="btn btn-primary btn-sm p-0 btn-ig ">Follow</button>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                  <div class="d-flex flex-row align-items-center">
                    <div
                      class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sugest-profile-photo">
                      <img src="assets/images/profiles/profile-4.png" alt="..."
                        style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                    </div>
                    <strong class="ml-3 sugest-username">dccomics</strong>
                  </div>
                  <button class="btn btn-primary btn-sm p-0 btn-ig ">Follow</button>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                  <div class="d-flex flex-row align-items-center">
                    <div
                      class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sugest-profile-photo">
                      <img src="assets/images/profiles/profile-5.jpg" alt="..."
                        style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                    </div>
                    <strong class="ml-3 sugest-username">thecw</strong>
                  </div>
                  <button class="btn btn-primary btn-sm p-0 btn-ig">Follow</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</body>

<footer>
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
</footer>

</html>