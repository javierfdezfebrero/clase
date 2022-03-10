<?php $__env->startSection('titulo'); ?>
<?php echo e($titulo); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('encabezado'); ?>
<?php echo e($encabezado); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<table class="table table-striped">
<thead>
<tr class="text-center">
<th scope="col">Código</th>
<th scope="col">Nombre</th>
</tr>
</thead>
<tbody>
<?php $__currentLoopData = $arrayFamilia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr class="text-center">
<td><?php echo e($item->cod); ?></td>
<td><?php echo e($item->nombre); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.plantilla1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/POO/folla5.5/views/vistaFamilias.blade.php ENDPATH**/ ?>