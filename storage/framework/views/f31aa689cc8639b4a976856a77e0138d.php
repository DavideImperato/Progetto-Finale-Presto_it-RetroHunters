
<form wire:submit.prevent="store">
    <div class="mb-3">
        <label class="form-label">Titolo: </label>
        <input type="text" class="form-control" wire:model="title">
        <div>
            <!-- __BLOCK__ --><?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger error"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!-- __ENDBLOCK__ -->
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Descrizione: </label>
        <textarea type="text-denger text" class="form-control" wire:model="body">Inserisci la tua descrizione...</textarea>
        <div>
            <!-- __BLOCK__ --><?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger error"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!-- __ENDBLOCK__ -->
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Prezzo: </label>
        <input type="numeric" class="form-control" wire:model="price">
        <div>
            <!-- __BLOCK__ --><?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger error"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!-- __ENDBLOCK__ -->
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Sviluppatore: </label>
        <input type="text" class="form-control" wire:model="developer">
        <div>
            <!-- __BLOCK__ --><?php $__errorArgs = ['developer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger error"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!-- __ENDBLOCK__ -->
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Produttore: </label>
        <input type="text" class="form-control" wire:model="publisher">
        <div>
            <!-- __BLOCK__ --><?php $__errorArgs = ['publisher'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger error"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!-- __ENDBLOCK__ -->
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Genere: </label>
        <select class="form-control" wire:model.live="category">
            <option value="">Scegli la categoria</option>
            <!-- __BLOCK__ --><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- __ENDBLOCK__ -->
        </select>
        <div>
            <!-- __BLOCK__ --><?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger error"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!-- __ENDBLOCK__ -->
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php /**PATH C:\Users\amste\wa\Retro-Hunters_gruppo_01\resources\views/livewire/create-announcement.blade.php ENDPATH**/ ?>