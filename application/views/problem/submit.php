<h3 class="page-title">Submit Code</h3>
<?php echo Form::open('/problem/submit', array('class'=>'form-horizontal submit'));?>
<fieldset>
<?php if (isset($cid)):?>
<?php echo Form::input('cid', $cid, array('type'=>'hidden')); ?>
<?php echo Form::input('cpid', $cpid, array('type'=>'hidden'));?>
    <div style="margin: 20px auto 10px; font-size: 14px">
<?php echo 'Problem ', OJ::contest_pid($cpid), ' Of Contest ', $cid; ?>
    </div>
<?php else: ?>
<div class="control-group">
<?php echo Form::label('pid', "Problem ID : ", array('class', 'control-label'));?>
<div class="controls">
<?php echo Form::input('pid', $pid); ?>
</div>
</div>
<?php endif;?>
<div class="control-group">
<?php echo Form::label('pid', "Language : ");?>
<div class="controls">
<?php echo Form::select('language', array('0'=>'C', '1'=>'C++', '2'=>'Pascal', '3'=>'Java'));?>
<?php if (Auth::instance()->get_user() == null):?>
    <?php echo Form::label('user_id', "Username : ");?>
    <?php echo Form::input('user_id', Cookie::get('use_id', '')); ?>
    <?php echo Form::label('password', "Password : ");?>
    <?php echo Form::input('password'); ?>
<?php endif;?>
</div>
</div>
</fieldset>
<?php echo Form::textarea('source');?>
<div class="form-actions">
<button type="submit" class="btn btn-primary">Submit</button>
<button type="reset" class="btn">Cancel</button>
</div>
<?php echo Form::close();?>