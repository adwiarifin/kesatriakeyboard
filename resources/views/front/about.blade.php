      <div class="section section-white text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h2 class="title">Who we are?</h2>
              <h5 class="description">{{ App\Section::getValue('who_we_are') }}</h5>
              <!--br>
                    <a href="#paper-kit" class="btn btn-danger btn-round">See Details</a-->
            </div>
          </div>
          <br/><br/>
          <div class="row">
            <div class="col-md-3">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="nc-icon nc-album-2"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">Beautiful Gallery</h4>
                  <p>{{ App\Section::getValue('who_we_are_1') }}</p>
                  <!--a href="#pkp" class="btn btn-link btn-danger">See more</a-->
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="nc-icon nc-bulb-63"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">New Ideas</h4>
                  <p>{{ App\Section::getValue('who_we_are_2') }}</p>
                  <!--a href="#pkp" class="btn btn-link btn-danger">See more</a-->
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="nc-icon nc-chart-bar-32"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">Statistics</h4>
                  <p>{{ App\Section::getValue('who_we_are_3') }}</p>
                  <!--a href="#pkp" class="btn btn-link btn-danger">See more</a-->
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="nc-icon nc-sun-fog-29"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">Delightful design</h4>
                  <p>{{ App\Section::getValue('who_we_are_4') }}</p>
                  <!--a href="#pkp" class="btn btn-link btn-danger">See more</a-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>