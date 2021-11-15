  <div class="subscription-box">
      <div class="subscription-form">
          <div class="media-wrapper">
              <div class="subscription__title sub-wrapper" id="title">Subscribe to newsletter</div>
              <div class="subscription__subtitle sub-wrapper" id="subtitle">Subscribe to our newsletter and get 10% discount on pineapple glasses.</div>
              <div class="subscription__input">
                  <form id="form" action="/" method="GET">
                      <input type="email" placeholder="Type your email address here…" name="subscription" id="email" onkeyup="checkEmail()">
                      <button type="submit" name="subscription" id="subButton" onclick="subButtonTest()"><svg width="20" height="12" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path opacity="0.3" d="M17.7071 0.2929C17.3166 -0.0976334 16.6834 -0.0976334 16.2929 0.2929C15.9023 0.683403 15.9023 1.31658 16.2929 1.70708L20.5858 5.99999H1C0.447693 5.99999 0 6.44772 0 6.99999C0 7.55227 0.447693 7.99999 1 7.99999H20.5858L16.2929 12.2929C15.9023 12.6834 15.9023 13.3166 16.2929 13.7071C16.6834 14.0976 17.3166 14.0976 17.7071 13.7071L23.7071 7.70708C24.0977 7.31658 24.0977 6.6834 23.7071 6.2929L17.7071 0.2929Z" fill="#131821" />
                          </svg>
                      </button>
                  </form>
                  <span id="error"></span>
              </div>
              <div class="subscription__terms sub-wrapper">
                  <div class="subscription__checkbox">
                      <label class="subscription__checkbox-label"></label>
                      <input type="checkbox" class="checkbox" id="checkBox" onclick="termsChanged()">
                      <span class="subscription__checkbox-fake"></span>
                  </div>
                  <div class="subscription__service">I agree to <a href="#">terms of service</a></div>
              </div>
          </div>