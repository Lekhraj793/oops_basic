<form action="view.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-4 pt-0">Enable/Disable Setting</legend>
            <div class="col-sm-7">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="setting" id="gridRadios1" value="On" checked>
                    <label class="form-check-label" for="gridRadios1">
                        On
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="setting" id="gridRadios2" value="Off">
                    <label class="form-check-label" for="gridRadios2">
                        Off
                    </label>
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-4 pt-0">Require Date Setting</legend>
            <div class="col-sm-7">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="date_require" value="On" checked>
                    <label class="form-check-label" for="gridRadios1">
                        On
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="date_require" value="Off">
                    <label class="form-check-label" for="gridRadios2">
                        Off
                    </label>
                </div>
            </div>
        </div>
    </fieldset>

    <div class="form-group row">
        <div class="col-sm-4">
        <h3>Delivery date option</h3>
        </div>
        <div class="col-sm-7">
            <div class="card">
                <label>Required Massage:</label>
                    <input type="checkbox" class="checkbox" name="msg" id="msg_show">
                    <input type="text" name="require-msg" class="form-control" id="text_msg" placeholder="write massage here">

                <label>Minimum Delivery Days:</label>
                    <input type="number" class="form-control" name="minimum">

                <label>TimeZone:</label><br>
                    <select name="timezome">
                        <option value="-10:00">(GMT -10:00) Hawaii</option>
                    </select><br>

                <label>Maximum Delivery Days</label>
                    <input type="number" class="form-control" name="maximum">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-4">
            <h3>Delivery Availability</h3>
        </div>
        <div class="col-sm-7">
            <label>Delivery Days:</label>
            <div class="form-check">
                <label class="form-check-label">
                    Sunday:
                </label>
                <input type="checkbox" name="sunday" class="form-check-input" style="margin-left: 40px">
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    Monday:
                </label>
                <input type="checkbox" name="monday" class="form-check-input" style="margin-left: 40px">
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    Tuesday
                </label>
                <input type="checkbox" name="tuesday" class="form-check-input" style="margin-left: 40px">
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    Wednesday
                </label>
                <input type="checkbox" name="wednesday" class="form-check-input" style="margin-left: 40px">
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    Thursday
                </label>
                <input type="checkbox" name="thursday" class="form-check-input" style="margin-left: 40px">
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    Friday
                </label>
                <input type="checkbox" name="friday" class="form-check-input" style="margin-left: 40px">
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    Saturday
                </label>
                <input type="checkbox" name="saturday" class="form-check-input" style="margin-left: 40px">
            </div>


        <div class="col-sm-7">
            <label class="form-check-label">
                Blackout Days:
            </label>
            <div class="form-check">
                <input name="b_date[]" class="form-control" id="iDate">

            </div>
        </div>
    </div><br>

        <input type="submit" name="submit" value="submit">
</form>
<script src="js/setting.js" type="text/javascript"></script>