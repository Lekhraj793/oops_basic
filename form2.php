<form action="view2.php" method="post" enctype="multipart/form-data">

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
                <input type="checkbox" name="sunday" value="sunday" class="form-check-input" style="margin-left: 40px">
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    Monday:
                </label>
                <input type="checkbox" name="monday" value="monday" class="form-check-input" style="margin-left: 40px">
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    Tuesday
                </label>
                <input type="checkbox" name="tuesday" value="tuesday" class="form-check-input" style="margin-left: 40px">
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    Wednesday
                </label>
                <input type="checkbox" name="wednesday" value="wednesday" class="form-check-input" style="margin-left: 40px">
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    Thursday
                </label>
                <input type="checkbox" name="thursday" value="thursday" class="form-check-input" style="margin-left: 40px">
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    Friday
                </label>
                <input type="checkbox" name="friday" value="friday" class="form-check-input" style="margin-left: 40px">
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    Saturday
                </label>
                <input type="checkbox" name="saturday" value="saturday" class="form-check-input" style="margin-left: 40px">
            </div>


    </div><br>

        <input type="submit" name="submit" value="submit">
</form>
