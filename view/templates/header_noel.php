<style type="text/css">
    header {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.4;
  z-index: 1;
}

/* Media Query for devices withi coarse pointers and no hover functionality */

/* This will use a fallback image instead of a video for devices that commonly do not support the HTML5 video element */

@media (pointer: coarse) and (hover: none) {
  header {
    background: url("https://cdn.pixabay.com/photo/2017/12/20/16/49/christmas-3030279_960_720.jpg")
      black no-repeat center center scroll;
      background-size: cover;
      background-color: rgba(0, 0, 0, 0.4);
  }

  header video {
    display: none;
  }
  header h1 {
    display: none;
  }
  header p {
    display: none;
  }
}

    </style>
 <div class="overlay"></div>


<video class="" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <!-- <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4"> -->
    <source src="video/Happy New Year - 3565.mp4" type="video/mp4">
</video>


<div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
            <h1 class="display-3">Notre Banque</h1>
            <p class="lead mb-0">Vous souhaite de passer de joyeuses fêtes de fin d'année</p>
        </div>
    </div>
</div>
</header>