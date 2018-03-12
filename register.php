<div class="container">
    <div class="row">
        <div class="col s6">
            <h4>Client registration</h4>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                        <label for="first_name">Contact Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="phone" type="tel" class="validate">
                        <label for="phone">Phone</label>
                        <span class="helper-text" data-error="wrong" data-success="correct">Phone only needed for registration.</span>
                    </div>
                </div>
                <p>
                    By clicking the sign up button you agree to the
                    <a>User Agreement</a>
                    and give
                    <a>Consent to the processing of pernal data.</a>
                </p>
                <button class="waves-effect waves-light btn-small" type="submit" value="Sign up"></button>
            </form>
        </div>
        <div class="col s6">
            <h4>Car service registration</h4>
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                        <label for="first_name">Car Service Name</label>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <input id="website" type="text" class="validate">
                        <label for="website">Website</label>
                    </div>
                </div>
                <div class="row">

                    <div class="input-field col s12">
                        <input id="address" type="text" class="validate">
                        <label for="address">Address</label>
                    </div>
                </div>
                <script>
                    $("#addphone").click(function () {
                        $("#container").append('<div class="input-field col s6"><input id="phone" type="tel" class="validate"><label for="phone">Phone</label></div>');
                    });
                </script>
                <div class="row" id="phone_container">
                    <div class="input-field col s6">
                        <input id="phone" type="tel" class="validate">
                        <label for="phone">Phone</label>
                    </div>
                </div>
                <div class="row">
                    <a class="waves-effect waves-light btn" id="addphone">Add phone</a>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Company information</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <p>
                            <label>
                                <input type="checkbox"/>
                                <span>Official dealer</span>
                            </label>
                        </p>
                    </div>
                    <div class="col s6">
                        <button class="waves-effect waves-light btn-small" type="submit" value="Sign up"></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>