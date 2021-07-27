<?php include('head.php') ?>

<main class="space_body content-right">
    <div class="container-md my-3">
        <div id="carouselExampleCaptions" class="carousel slide mb-3" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img src="../img/1.jpg" class="d-block w-100" height="300px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/2.jpg" class="d-block w-100" height="300px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/4.jpg" class="d-block w-100" height="300px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="mb-3 p-3 bg-white rounded shadow-sm mode-dark1">
            <h6 class="border-bottom pb-2 mb-0 font-weight-bold">Primer tema</h6>
            <div class="text-muted pt-2">
                <p class="pb-3 mb-0 border-bottom la-sm">
                    Playing ping pong all night long, everything's all neon and hazy. Yeah, she's so in demand.
                    She's sweet as pie but if you break her heart. But down to earth. It's time to face the music
                    I'm no longer your muse. I guess that I forgot I had a choice.
                </p>
            </div>
            <div class=" text-muted pt-3">
                <p class=" mb-0 la-sm">
                    <strong class="d-block ">@username</strong>
                    Standing on the frontline when the bombs start to fall. Heaven is jealous of our love, angels
                    are crying from up above. Can't replace you with a million rings. Boy, when you're with me I'll
                    give you a taste. There’s no going back. Before you met me I was alright but things were kinda
                    heavy. Heavy is the head that wears the crown.
                </p>
            </div>
            <a href="#" class="d-block text-right mt-3 small">All updates</a>
        </div>

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.1527257020302!2d-80.4551499!3d-1.046579!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902bf2aaa191509f%3A0xea77daf8eff9574!2sUNIVERSIDAD%20T%C3%89CNICA%20DE%20MANAB%C3%8D!5e0!3m2!1ses!2sec!4v1625647736152!5m2!1ses!2sec" width="100%" height="400" style="border: 0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="my-3 p-3 bg-white rounded shadow-sm mode-dark1">
            <h6 class="border-bottom pb-2 mb-0 font-weight-bold">Otro tema</h6>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg>

                <div class="media-body pb-3 mb-0 small lh-125 border-bottom ">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Full Name</strong>
                        <a href="#">Follow</a>
                    </div>
                    <span class="d-block">@username</span>
                </div>
            </div>


            <small class="d-block text-right mt-3">
                <a href="#">All suggestions</a>
            </small>
        </div>

    </div>
</main>

<?php include('footer.php') ?>