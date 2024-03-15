<?php $__env->startSection('title', 'Folha de ponto'); ?>
<?php $__env->startSection('content'); ?>

<h1>Bem-vindo Escráviario, <br></h1>
<button><a href="/login"><br>Acessar sua folha de ponto.</a></button>
<button><a href="/produtos"><br><br>Produtos</a></button>
<img src="/public/img/sapinho.png alt=sapo">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tools\php\iarlla\resources\views/welcome.blade.php ENDPATH**/ ?>