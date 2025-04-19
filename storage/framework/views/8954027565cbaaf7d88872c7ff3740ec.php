<script src="<?php echo e(asset('admin/assets/js/bundle.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/js/scripts.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
    integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php if(isset($useRepeater) && $useRepeater === true): ?>
    <script src="<?php echo e(asset('admin/assets/js/jquery.repeater.min.js')); ?>"></script>
    <script>
        var $repeater = $('.repeater').repeater({
            initEmpty: true,
            show: function() {
                $(this).slideDown();
            },
            hide: function(deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            }
        });
    </script>
<?php endif; ?>
<?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/admin/_partials/script.blade.php ENDPATH**/ ?>