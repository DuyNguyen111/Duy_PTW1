<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1746">
  <div class="container">
      <div class="aio-icon-component  vc_custom_1498720684410  accent-icon-bg style_1">
        <div id="Info-box-wrap-1460" class="aio-icon-box left-icon" style="">
            <div class="aio-icon-left">
              <div class="ult-just-icon-wrapper  ">
                <div class="align-icon" style="text-align:center;">
                  <div class="aio-icon ">
                  <i class='fas fa-leaf'></i>
              </div>
            </div>
            </div>
          </div>
          <div class="aio-ibd-block">
            <div class="aio-icon-header">
              <h3 class="aio-icon-title ult-responsive">Diversity</h3>
            </div>
          <div class="aio-icon-description ult-responsive container" >Because diversity&nbsp;lorem ipsum dolor odio augue placerat est, nec semper nisl porta ullam rutrum glavrida unicus amet.
          </div>
        </div>

      </div>
      </div>
      <div class="aio-icon-component  vc_custom_1498720684410  accent-icon-bg style_1">
        <div id="Info-box-wrap-1460" class="aio-icon-box left-icon" style="">
            <div class="aio-icon-left">
              <div class="ult-just-icon-wrapper  ">
                <div class="align-icon" style="text-align:center;">
                  <div class="aio-icon">
                  <i class='fas fa-stamp'></i>
              </div>
            </div>
            </div>
          </div>
          <div class="aio-ibd-block">
            <div class="aio-icon-header">
              <h3 class="aio-icon-title ult-responsive">RESPECT</h3>
            </div>
          <div class="aio-icon-description ult-responsive container" >Respect is morbi tristique senectus et netus et malesuada fames ac turpis egestas ulla maximus elementum, odio augue.
          </div>
        </div>

      </div>
      </div>

      <div class="aio-icon-component  vc_custom_1498720684410  accent-icon-bg style_1">
        <div id="Info-box-wrap-1460" class="aio-icon-box left-icon" style="">
            <div class="aio-icon-left">
              <div class="ult-just-icon-wrapper  ">
                <div class="align-icon" style="text-align:center;">
                  <div class="aio-icon ">
                  <i class='fas fa-clipboard-list'></i>
              </div>
            </div>
            </div>
          </div>
          <div class="aio-ibd-block">
            <div class="aio-icon-header">
              <h3 class="aio-icon-title ult-responsive">TRANSPARENCY</h3>
            </div>
          <div class="aio-icon-description ult-responsive container" >Transparency is maecenas sit amet tincidunt elit lorem ipsum urabitur quis rhoncus.
          </div>
        </div>

      </div>
      </div>

      <div class="aio-icon-component  vc_custom_1498720684410  accent-icon-bg style_1">
        <div id="Info-box-wrap-1460" class="aio-icon-box left-icon" style="">
            <div class="aio-icon-left">
              <div class="ult-just-icon-wrapper  ">
                <div class="align-icon" style="text-align:center;">
                  <div class="aio-icon ">
                  <i class='fas fa-balance-scale'></i>
              </div>
            </div>
            </div>
          </div>
          <div class="aio-ibd-block">
            <div class="aio-icon-header">
              <h3 class="aio-icon-title ult-responsive">INTEGRITY</h3>
            </div>
          <div class="aio-icon-description ult-responsive container" >Because acting with integrity ipsum porta maximus, odio augue ullam rutrum velit sit tincidunt elit.
          </div>
        </div>

      </div>
      </div>


</div>
