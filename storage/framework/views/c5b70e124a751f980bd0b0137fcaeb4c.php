

<?php $__env->startSection('title', 'Daftar Produk'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Produk</h5>
        <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary">Tambah Produk</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($product->name); ?></td>
                        <td>Rp <?php echo e(number_format($product->price, 0, ',', '.')); ?></td>
                        <td><?php echo e($product->stock); ?></td>
                        <td>
                            <a href="<?php echo e(route('products.show', $product->id)); ?>" class="btn btn-sm btn-info text-white">Lihat</a>
                            <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-sm btn-warning text-white">Edit</a>
                            <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" style="display: inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            <?php echo e($products->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\hello_app\crud-laravel\resources\views/products/index.blade.php ENDPATH**/ ?>