<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1731">
        <div class="swiper-container">
              <div class="swiper-slide">
                <div class="container">
                    <div class="avatar">
                      <img src="images/1731.png" alt="1731.png">
                    </div>
                    <div class="text">
                        <h1>Richard Swift - Executive director at Seven Media LTD.</h1>
                        <h2>Because acting with lorm ipsum – integrity ipsum porta maximus, odio augue ullam rutrum velit sit tincidunt elit.Maecenas feugiat – nec semper nisl erat ac ex el convallis ligula commodo ac. Aenean congue!</h2>
                        <h2>Thank you very much!</h2>
                    </div>
                  </div>
              </div>

            <div class ="swiper-button-next ">
              
            </div>
            <div class="swiper-button-prev "></div>
        </div>

</div>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 5,
        centeredSlides: true,
        spaceBetween: 20,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
