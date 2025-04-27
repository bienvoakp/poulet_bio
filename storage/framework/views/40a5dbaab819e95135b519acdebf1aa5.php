<div>
    <div>
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $composition_nutritives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $id = $data['id'] ?? null;
                $nutriment_id = $data['nutriment_id'] ?? null;
                $proportion = $data['proportion'] ?? null;
            ?>
            <div class="container-fluid p-0">
                <div class="row gy-2 my-2">
                    <?php if (isset($component)) { $__componentOriginal2fc4ee10de36c616941cdd84c8511d79 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2fc4ee10de36c616941cdd84c8511d79 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-select-row','data' => ['class' => 'col-md-6','label' => 'Nutriment','placeholder' => 'Selectionner un nutriment','required' => true,'wire:model' => 'composition_nutritives.'.e($key).'.nutriment_id','inputName' => 'composition_nutritives['.e($key).'][nutriment_id]','options' => \App\Models\Nutriment::all()->mapWithKeys(fn($a) => [$a->id => $a->titre])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-select-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-md-6','label' => 'Nutriment','placeholder' => 'Selectionner un nutriment','required' => true,'wire:model' => 'composition_nutritives.'.e($key).'.nutriment_id','inputName' => 'composition_nutritives['.e($key).'][nutriment_id]','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\App\Models\Nutriment::all()->mapWithKeys(fn($a) => [$a->id => $a->titre]))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2fc4ee10de36c616941cdd84c8511d79)): ?>
<?php $attributes = $__attributesOriginal2fc4ee10de36c616941cdd84c8511d79; ?>
<?php unset($__attributesOriginal2fc4ee10de36c616941cdd84c8511d79); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2fc4ee10de36c616941cdd84c8511d79)): ?>
<?php $component = $__componentOriginal2fc4ee10de36c616941cdd84c8511d79; ?>
<?php unset($__componentOriginal2fc4ee10de36c616941cdd84c8511d79); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal05654859b3e6faac406a8a768194bb6d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05654859b3e6faac406a8a768194bb6d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.form-input-row','data' => ['class' => 'col-md-6','label' => 'Proportion','required' => true,'wire:model' => 'composition_nutritives.'.e($key).'.proportion','placeholder' => 'Entrez la proportion du nutriment','inputName' => 'composition_nutritives['.e($key).'][proportion]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.form-input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-md-6','label' => 'Proportion','required' => true,'wire:model' => 'composition_nutritives.'.e($key).'.proportion','placeholder' => 'Entrez la proportion du nutriment','inputName' => 'composition_nutritives['.e($key).'][proportion]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal05654859b3e6faac406a8a768194bb6d)): ?>
<?php $attributes = $__attributesOriginal05654859b3e6faac406a8a768194bb6d; ?>
<?php unset($__attributesOriginal05654859b3e6faac406a8a768194bb6d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal05654859b3e6faac406a8a768194bb6d)): ?>
<?php $component = $__componentOriginal05654859b3e6faac406a8a768194bb6d; ?>
<?php unset($__componentOriginal05654859b3e6faac406a8a768194bb6d); ?>
<?php endif; ?>
                </div>
                <input type="hidden" name="composition_nutritives[<?php echo e($key); ?>][id]"
                    wire:model="composition_nutritives.<?php echo e($key); ?>.id">
                <button type="button" class="btn btn-danger"
                    wire:click="remove(<?php echo e($key); ?>)">Supprimer</button>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        <button type="button" wire:click="add" class="btn btn-primary mt-3">Associer un nutriment</button>
    </div>
</div>
<?php /**PATH D:\COURS IFRI\MON MEMOIRE\poulet_bio\resources\views/livewire/composition-aliment-repeater.blade.php ENDPATH**/ ?>