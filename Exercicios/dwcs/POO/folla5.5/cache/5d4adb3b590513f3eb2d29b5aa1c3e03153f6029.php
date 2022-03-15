<?php $__env->startSection('titulo'); ?>
<?php echo e($titulo); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('encabezado'); ?>
<?php echo e($encabezado); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form method="POST" action="../public/portadas.php">
<?php if($item[0]=="Productos"): ?>
    <label for="">
        <?php echo e($label); ?>

    </label>
    <input type="text" name="nomeProducto">

<?php endif; ?>

<?php if($item[0]=="Familias"): ?>
    <label for="">
        Indica unha familia para buscar
    </label>
    
    <select name="familia" id="">
        
        <?php $__currentLoopData = $familiasArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $familia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($familia->cod); ?>"><?php echo e($familia->nombre); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

<?php endif; ?>

<button type="submit" name="<?php echo e($item[0]); ?>"><?php echo e($item[0]); ?></button>
   



</form>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.plantilla1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/POO/folla5.5/views/vistaPortada.blade.php ENDPATH**/ ?>