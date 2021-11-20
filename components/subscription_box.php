<div class="subscription-box">
    <div class="subscription-form">
        <div class="media-wrapper">
            <div class="subscription__title sub-wrapper" id="title"><span>Subscribe to newsletter</span></div>
            <div class="subscription__subtitle sub-wrapper" id="subtitle"><span>Subscribe to our newsletter and get 10% discount on pineapple glasses.</span></div>

            <div class="subscription__input">
                <span id="error">Please provide a valid e-mail address</span>
                <form id="form" action="/phpbase/GetData.php" method="POST" class="form">

                    <input type="email" placeholder="Type your email address here…" name="email" id="email" onkeyup="checkEmail()">
                    <button type="submit" name="subscribe" id="subButton" onclick="subButtonTest()">
                        <span class="icon-arrow-right2"></span>
                    </button>

                    <div class="subscription__terms terms-wrapper">
                        <div class="subscription__checkbox">
                            <label class="subscription__checkbox-label"></label>
                            <input type="checkbox" class="checkbox" name="terms" id="checkBox" required onclick="termsChanged()">
                            <span class="subscription__checkbox-fake" id="checkboxFake"></span>
                        </div>
                        <div class="subscription__service" id="checkboxLabel"><span>I agree to <a href="#">terms of service</a></span></div>
                    </div>
                    <!-- <span id="error" class="sub-wrapper"></span> -->
                    <span id="status"></span>
                </form>
            </div>
        </div>