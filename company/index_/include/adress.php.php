          <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
              <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  Array(
                      "AREA_FILE_SHOW" => "page",
                      "AREA_FILE_SUFFIX" => "/include/adress.php",
                      "EDIT_TEMPLATE" => ""
                  )
              );?>
          </div>