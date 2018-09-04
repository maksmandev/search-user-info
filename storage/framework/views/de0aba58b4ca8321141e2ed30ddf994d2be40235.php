<?php $__env->startSection('content'); ?>
    <meta name="_token" content="<?php echo e(csrf_token()); ?>"/>
    <div class='row'>
        <?php echo Form::open(['url'=>'register','id'=>'sign-up','class'=>'col-md-6 col-md-push-4 form-horizontal cmxform']); ?>

        <div class='form-group'>
            <?php echo Form::label('name', 'Name:',['class'=>'col-xs-12 col-md-12']); ?>

            <div class='col-xs-12 col-md-6'>
                <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

            </div>
        </div>
        <div class='form-group'>
            <?php echo Form::label('email', 'email:',['class'=>'col-xs-12 col-md-3']); ?>

            <div class='col-xs-12 col-md-6'>
                <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

            </div>
        </div>
        <div class='form-group'>
            <?php echo Form::label('region', 'Region:',['class'=>'col-xs-12 col-md-3']); ?>

            <div class='col-xs-12 col-md-6'>
                <select id="region" name="region"  data-placeholder="Choose a country..." class="chosen-select"
                        onChange="getArea(this.value,'#sity');">
                    <option value="" selected disabled hidden>Choose region</option>
                    <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value=<?php echo e($region->ter_id); ?>><?php echo e($region->ter_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class='form-group'>
            <?php echo Form::label('sity', 'Sity:',['class'=>'col-xs-12 col-md-3']); ?>

            <div class='col-xs-12 col-md-6'>
                <select id="sity" name="t_koatuu_tree_id" data-placeholder="Choose a region" class="chosen-select"
                        onChange="getArea(this.value,'#area');">
                    <option value="" selected disabled hidden>Choose region or sity</option>
                </select>
            </div>
        </div>
        <div class='form-group'>
            <?php echo Form::label('area', 'Area:',['class'=>'col-xs-12 col-md-3']); ?>

            <div class='col-xs-12 col-md-6'>
                <select id="area" name="t_koatuu_tree_id" data-placeholder="Choose a area" class="chosen-select">
                    <option value="" selected disabled hidden>Choose area</option>
                </select>
            </div>
        </div>
        <div class='btn btn-small'>
            <?php echo Form::submit('Сonfirm',['class'=>'btn btn-success btn-sm form-control']); ?>

        </div>

        <?php echo Form::close(); ?>

    </div>
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>