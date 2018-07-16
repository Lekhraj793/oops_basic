<?php

foreach($_POST as $value) {
	echo "<pre>";
	print_r($value);
}
?>
            <div class="col-sm-7">
					
			<?php 
				print_r(explode(",", $value['week']));
				
			?>
                <label>Delivery Days:</label>
                <input type="text" name="week[]" value="<?php echo $data['week'];?>">
                <div class="form-check">
                    <label class="form-check-label">
                        Sunday:
                    </label>
                    <input type="checkbox" name="week[]" value="sunday"<?php if($data['week']=="sunday") {echo "checked";}?>  class="form-check-input" style="margin-left: 40px">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        Monday:
                    </label>
                    <input type="checkbox" name="week[]" value="monday"<?php if($week=='monday'){echo 'checked';}?> class="form-check-input" style="margin-left: 40px">-->
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        Tuesday
                    </label>
                    <input type="checkbox" name="week[]" value="tuesday"<?php if($data['week']=="monday") {echo "checked" ;} ?> class="form-check-input" style="margin-left: 40px">-->
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        Wednesday
                    </label>
                    <input type="checkbox" name="week[]" value="wednesday"<?php if($data['week']=="wednesday") {echo "checked";}?> class="form-check-input" style="margin-left: 40px">
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        Thursday
                    </label>
                    <input type="checkbox" name="week[]" value="thursday"<?php if($data['week']=="thursday") {echo "checked";}?>class="form-check-input" style="margin-left: 40px">
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        Friday
                    </label>
                    <input type="checkbox" name="week[]" value="friday"<?php if($data['week']=="friday") {echo "checked";}?> class="form-check-input" style="margin-left: 40px">
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        Saturday
                  </label> 
                    <input type="checkbox" name="week[]" value="saturday"<?php if($data['week']=="saturday") {echo "checked";}?> class="form-check-input" style="margin-left: 40px">
                </div>


                
            </div><br>

            <input type="submit" name="submit" value="submit">

    </form>

    <script src="js/setting.js" type="text/javascript"></script>
<!--  -->