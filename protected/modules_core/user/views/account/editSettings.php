<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  

<div class="panel-heading">
    <?php echo Yii::t('UserModule.views_account_editSettings', '<strong>User</strong> settings'); ?>
</div>
<div class="panel-body">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <?php //echo $form->errorSummary($model); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'tags'); ?>
        <br>
        <?php echo Yii::t('UserModule.models_User', 'tags_description'); ?>
        <?php echo $form->textArea($model, 'tags', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'tags'); ?>
    </div>
    
	<h5><strong>Listas de etiquetas</strong></h5>
	
	<div id="tabs">
  		<ul>
    		<li><a href="#musica-baile">música / baile</a></li>
    		<li><a href="#deportes">Proin dolor</a></li>
    		<li><a href="#tabs-3">Aenean lacinia</a></li>
  		</ul>
  		
  		<div id="musica-baile">
		    <div class="form-group">
				<?php echo CHtml::label('danza', 'tag_danza'); ?>
				<?php echo CHtml::checkBox('tag_danza', false, array('value' => 'danza')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('hip hop', 'tag_hip_hop'); ?>
				<?php echo CHtml::checkBox('hip_hop', false, array('value' => 'hip hop')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('baile de salón', 'tag_baile_salon'); ?>
				<?php echo CHtml::checkBox('tag_baile_salon', false, array('value' => 'baile de salón')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('tango', 'tag_tango'); ?>
				<?php echo CHtml::checkBox('tag_tango', false, array('value' => 'tango')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('salsa', 'tag_salsa'); ?>
				<?php echo CHtml::checkBox('tag_salsa', false, array('value' => 'salsa')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('banda', 'tag_banda'); ?>
				<?php echo CHtml::checkBox('tag_banda', false, array('value' => 'banda')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('rock', 'tag_rock'); ?>
				<?php echo CHtml::checkBox('tag_rock', false, array('value' => 'rock')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('metal', 'tag_metal'); ?>
				<?php echo CHtml::checkBox('tag_metal', false, array('value' => 'metal')); ?>
			</div>
  		</div>
  		
  		<div id="deportes">
  			<div class="form-group">
				<?php echo CHtml::label('fútbol', 'tag_futbol'); ?>
				<?php echo CHtml::checkBox('tag_futbol', false, array('value' => 'fútbol')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('basquetbol', 'tag_basquetbol'); ?>
				<?php echo CHtml::checkBox('tag_basquetbol', false, array('value' => 'basquetbol')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('tenis', 'tag_tenis'); ?>
				<?php echo CHtml::checkBox('tag_tenis', false, array('value' => 'tenis')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('boxeo', 'tag_boxeo'); ?>
				<?php echo CHtml::checkBox('tag_boxeo', false, array('value' => 'boxeo')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('beisbol', 'tag_beisbol'); ?>
				<?php echo CHtml::checkBox('tag_beisbol', false, array('value' => 'beisbol')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('voleibol', 'tag_voleibol'); ?>
				<?php echo CHtml::checkBox('tag_voleibol', false, array('value' => 'voleibol')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('fútbol americano', 'tag_futbol_americano'); ?>
				<?php echo CHtml::checkBox('tag_futbol_americano', false, array('value' => 'fútbol americano')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('clavados', 'tag_clavados'); ?>
				<?php echo CHtml::checkBox('tag_clavados', false, array('value' => 'clavados')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('taekwondo', 'tag_taekwondo'); ?>
				<?php echo CHtml::checkBox('tag_taekwondo', false, array('value' => 'taekwondo')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('natación', 'tag_natacion'); ?>
				<?php echo CHtml::checkBox('tag_natacion', false, array('value' => 'natación')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('atletismo', 'tag_atletismo'); ?>
				<?php echo CHtml::checkBox('tag_atletismo', false, array('value' => 'atletismo')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('ciclismo', 'tag_ciclismo'); ?>
				<?php echo CHtml::checkBox('tag_ciclismo', false, array('value' => 'ciclismo')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('escalada', 'tag_escalada'); ?>
				<?php echo CHtml::checkBox('tag_escalada', false, array('value' => 'escalada')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('espeleo', 'tag_espeleo'); ?>
				<?php echo CHtml::checkBox('tag_espeleo', false, array('value' => 'espeleo')); ?>
			</div>
			
			<div class="form-group">
				<?php echo CHtml::label('canotaje', 'tag_canotaje'); ?>
				<?php echo CHtml::checkBox('tag_canotaje', false, array('value' => 'canotaje')); ?>
			</div>
  		</div>
	</div>


    <div class="form-group">
        <?php echo $form->labelEx($model, 'language'); ?>
        <?php echo $form->dropDownList($model, 'language', Yii::app()->params['availableLanguages'], array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'language'); ?>
    </div>

    <strong><?php echo Yii::t('UserModule.views_account_editSettings', 'Getting Started'); ?></strong>
    <div class="form-group">
        <div class="checkbox">
            <label>
                <?php echo $form->checkBox($model, 'show_introduction_tour'); ?> <?php echo $model->getAttributeLabel('show_introduction_tour'); ?>
            </label>
        </div>
    </div>

    <hr>

    <?php echo CHtml::submitButton(Yii::t('UserModule.views_account_editSettings', 'Save'), array('class' => 'btn btn-primary')); ?>

    <!-- show flash message after saving -->
    <?php $this->widget('application.widgets.DataSavedWidget'); ?>

    <?php $this->endWidget(); ?>
</div>



