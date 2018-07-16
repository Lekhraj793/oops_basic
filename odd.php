<form method="POST" action="view.php">
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Enable/Disable Delivery Date</label>
        On:<input type="radio" name="ed_on" value="On">
        Off:<input type="radio" name="ed_on" value="Off">
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Require Delivery Date for Checkout:</label>
        <div class="col-sm-10">
            On:<input type="radio" name="rd_on" value="On">
            Off:<input type="radio" name="rd_on" value="Off">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Delivery Date Options</label>
        <div class="col-sm-10">
            lable:<input type="text" name="lab">
            min:<input type="text" name="min">
        </div>
    </div>

	<input type="submit" value="add" name="submit">
</form>

