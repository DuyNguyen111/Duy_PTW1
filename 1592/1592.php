<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1592">
      <!-- Swiper -->
  <div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
          <div class="left-para">
                <div class="content-para">
                    <div class="title-slide">
                        <p>Investment & Stock Exchange </p>
                    </div>
                    <div class="line-di"></div>
                    <p class="cn-para">Dolor lorem from ipsum - nulla glavrida amet unicom amet for ipsum dolor - amet glavrida non males fames ac ante ipsum primis in dolor fames ac turpis egestas ulla maximus elementum, odio augue lorem nulla. </p>
                    <a class="view-more" href="#">VIEW DETAILS </a>
                </div>
          </div>
          <div class="right-para">
            <div class="slide-r" style="background: url('./images/slide1.jpg') center center / cover no-repeat;"></div>
          </div>
      </div>
      <div class="swiper-slide">
          <div class="left-para">
                <div class="content-para">
                    <div class="title-slide">
                        <p>Business Consulting  </p>
                    </div>
                    <div class="line-di"></div>
                    <p class="cn-para">Glavrida amet unicom amet for ipsum dolor - amet glavrida non males fames ac ante dolor fames ac turpis egestas ulla maximus elementum, odio augue lorem nulla. </p>
                    <a class="view-more" href="#">VIEW DETAILS </a>
                </div>
          </div>
          <div class="right-para">
            <div class="slide-r" style="background: url('./images/slide2.jpg') center center / cover no-repeat;"></div>
          </div>
      </div>
      <div class="swiper-slide">
          <div class="left-para">
                <div class="content-para">
                    <div class="title-slide">
                        <p>International banking </p>
                    </div>
                    <div class="line-di"></div>
                    <p class="cn-para">From ipsum bankking - glavrida amet unicom amet for ipsum dolor - amet glavrida non males fames ac ante dolor fames ac turpis egestas ulla maximus elementum! </p>
                    <a class="view-more" href="#">VIEW DETAILS </a>
                </div>
          </div>
          <div class="right-para">
            <div class="slide-r" style="background: url('./images/slide3.jpg') center center / cover no-repeat;"></div>
          </div>
      </div>
      <div class="swiper-slide">
          <div class="left-para">
                <div class="content-para">
                    <div class="title-slide">
                        <p>Finance & Banking </p>
                    </div>
                    <div class="line-di"></div>
                    <p class="cn-para">Amet unicom amet for ipsum dolor - amet glavrida non males fames ac ante dolor fames ac turpis egestas ulla maximus elementum, odio augue lorem nulla. </p>
                    <a class="view-more" href="#">VIEW DETAILS </a>
                </div>
          </div>
          <div class="right-para">
            <div class="slide-r" style="background: url('./images/slide4.jpg') center center / cover no-repeat;"></div>
          </div>
      </div>
      <div class="swiper-slide">
          <div class="left-para">
                <div class="content-para">
                    <div class="title-slide">
                        <p>Accounting & Tax Services </p>
                    </div>
                    <div class="line-di"></div>
                    <p class="cn-para">Amet glavrida - males fames ac ante dolor fames ac turpis egestas ulla maximus elementum, odio augue lorem nulla. </p>
                    <a class="view-more" href="#">VIEW DETAILS </a>
                </div>
          </div>
          <div class="right-para">
            <div class="slide-r" style="background: url('./images/slide5.jpg') center center / cover no-repeat;"></div>
          </div>
      </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-next swiper-button-white"><i class="fas fa-chevron-right"></i></div>
    <div class="swiper-prev swiper-button-white"><i class="fas fa-chevron-left"></i></div>
  </div>
  <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
            <div class="swiper-slide thumbs-custom" style="background-image:url('./images/slide1.jpg')">
                <div class="content-thumb">Investment & Stock Exchange</div>
            </div>
            <div class="swiper-slide thumbs-custom" style="background-image:url('./images/slide2.jpg')">
                <div class="content-thumb">Business Consulting</div>
            </div>
            <div class="swiper-slide thumbs-custom" style="background-image:url('./images/slide3.jpg')">
                <div class="content-thumb">International Banking</div>
            </div>
            <div class="swiper-slide thumbs-custom" style="background-image:url('./images/slide4.jpg')">
                <div class="content-thumb">Finance & Bankingn</div>
            </div>
            <div class="swiper-slide thumbs-custom" style="background-image:url('./images/slide5.jpg')">
                <div class="content-thumb">Accounting & Tax Services</div>
            </div>
        </div>
    </div>

</div>
