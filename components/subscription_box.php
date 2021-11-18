<div class="subscription-box">
    <div class="subscription-form">
        <div class="media-wrapper">
            <div class="succes-image sub-wrapper"><img id="succesImage" src="/img/Union.svg" alt="cup image"></div>
            <div class="subscription__title sub-wrapper" id="title"><span>Subscribe to newsletter</span></div>
            <div class="subscription__subtitle sub-wrapper" id="subtitle"><span>Subscribe to our newsletter and get 10% discount on pineapple glasses.</span></div>
            <div class="subscription__input">
                <form id="form" action="/" method="GET" class="form">
                    <input type="email" placeholder="Type your email address here…" name="subscription" id="email" onkeyup="checkEmail()">
                    <button type="submit" name="subscription" id="subButton" onclick="subButtonTest()">
                        <span class="icon-arrow-right2"></span>
                    </button>
                </form>
                <span id="error"></span>
            </div>
            <div class="subscription__terms sub-wrapper">
                <div class="subscription__checkbox">
                    <label class="subscription__checkbox-label"></label>
                    <input type="checkbox" class="checkbox" id="checkBox" onclick="termsChanged()">
                    <span class="subscription__checkbox-fake" id="checkboxFake"></span>
                </div>
                <div class="subscription__service" id="checkboxLabel"><span>I agree to <a href="#">terms of service</a></span></div>
            </div>
            <span id="status"></span>
        </div>