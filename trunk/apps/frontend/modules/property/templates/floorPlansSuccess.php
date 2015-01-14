<?php
use_helper('I18N');
?>

<div class="recentworks bottom-pad">
   <div class="container" style="font-size: 11px">
      <span style="font-size: 35px; font-family: times;"><?php echo __("FLOOR PLAN") ?></span>
  </div>
</div>

<div class="bottom-pad">
   <div class="container">
        <div class="row" align="center">
            <div style="float:left; width:50%; border-style: solid; border-width:8px; border-color: #E6E6E6">
                <img src="/images/floor-plans_1200psf.jpg" width="450px" height="300px" alt="">
                </br><?php echo __("Suite - %1% sqft", array("%1%", "1,200")) ?>
            </div>
            <span style="float:right; width:40%">
                <div style="border-style: solid; padding-top:20px; border-width:8px; border-color: #E6E6E6">
                    <img src="/images/floor-plans_800psf.jpg" width="300px" height="200px" alt="">
                    </br><?php echo __("Suite - %1% sqft", array("%1%", "800")) ?>
                </div>

                    </br>

                <div style="border-style: solid; border-width:8px; border-color: #E6E6E6">
                    <img src="/images/floor-plans_600psf.jpg" width="300px" height="200px" alt="">
                    </br><?php echo __("Suite - %1% sqft", array("%1%", "600")) ?>
                </div>
            </span>
        </div>
    </div>
</div>