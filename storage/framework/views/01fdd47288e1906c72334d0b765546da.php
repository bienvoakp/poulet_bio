<?php if(session()->get('error')): ?>
<script>
    iziToast.error(
        {
            title:"Erreur"
            position:"topRight"
            message :'<?php echo e(session()->get('error')); ?>'
        }
    )
</script>
<?php endif; ?>

<?php if(@session()->get('success')): ?>
    <script>
        iziToast.success({
            title : "Succès",
            position : "topRight",
            message :'<?php echo e(session()->get('success')); ?>'
        })
    </script>

<?php endif; ?>
<?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/admin/_partials/iziToast.blade.php ENDPATH**/ ?>