<?php
// ==========
// = ZESHAN =
// ==========
//REMARK 4:
//NO CONSISTENCY
   <?php  
   if(isset($error['country_id']) && $error['country_id'] != '') {
        echo Form::select('country_id', 'none', $countries,
        array( 
          'id' => 'country_id',
          'class' => 'large input-validation-error',            
          )
        );
    } else {
      echo Form::select('country_id', Input::post('country_id'), $countries,
      array( 
        'id' => 'country_id',
        'class' => 'large',            
        )
    );
    }
  ?>
  <span class="required">*</span>
</p>
<p>
  <span class="placeholder-field">
     <?php echo Form::label('City', 'city'); ?>
     <?php if(isset($error['city']) && $error['city'] != '') : ?>
        <?php echo Form::input('city', Input::post('city'), array('class' => 'input large input-validation-error', 'id' => 'city')); ?>
      <?php else: ?>
        <?php echo Form::input('city', Input::post('city'), array('class' => 'input large ', 'id' => 'city')); ?>
      <?php endif; ?>
?>