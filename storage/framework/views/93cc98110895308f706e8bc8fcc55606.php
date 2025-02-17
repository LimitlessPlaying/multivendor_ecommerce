
<?php $__env->startSection('content'); ?>
    <div>
        <div class="flex mx-12">
            <a class="ms-auto" href="/seller/add-product"><button class="my-2 mx-auto bg-green-600 px-5 py-2 rounded text-white font-semibold">Add Product</button></a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-12 my-2 border-4 border-indigo-800">
            <table class="text-center w-full text-sm rtl:text-right text-blue-100 dark:text-blue-100 border-separate border-spacing-1">
                <thead class="text-xs text-white uppercase bg-blue-600 border-b border-blue-400 dark:text-white">
                    <tr class="bg-blue-600 border-b border-blue-400 hover:bg-blue-800">
                        <th scope="row" class="p-2 text-base font-bold">Image</td>
                        <th scope="row" class="px-6 py-2 text-base font-bold">Name</td>
                        <th scope="row" class="px-6 py-2 text-base font-bold">Category</td>
                        <th scope="row" class="px-6 py-2 text-base font-bold">Variations</td>
                        <th scope="row" class="px-6 py-2 text-base font-bold">Status</td>
                        <th scope="row" class="px-6 py-2 text-base font-bold">Actions</td>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="bg-gray-100 border-b border-gray-200 text-gray-900 hover:bg-blue-100">
                        <td scope="row" class=" bg-gray-100 text-base font-medium whitespace-nowrap dark:text-blue-100">
                            <div class="overflow-scroll w-full h-15 flex items-center justify-start"> 
                            <?php $__currentLoopData = $product->productVariation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productVariation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="flex items-center justify-start"> 
                                <?php $__currentLoopData = json_decode($productVariation->image); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
                                    <img class="border hover:border-red-500 rounded-full w-14 h-15" src="<?php echo e(asset($image), false); ?>" alt="<?php echo e($product->name, false); ?>">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        </td>
                        <td scope="row" class="px-6 text-base font-medium whitespace-nowrap dark:text-blue-100"><?php echo e($product->name, false); ?></td>
                        <td scope="row" class="px-6 text-base font-medium whitespace-nowrap dark:text-blue-100"><?php echo e($product->category['name'], false); ?></td>
                        <td scope="row" class="px-6 text-base font-medium whitespace-nowrap dark:text-blue-100"><?php echo e($product->productVariation->count(), false); ?></td>
                        <td scope="row" class="px-6 text-base font-medium whitespace-nowrap dark:text-blue-100"> <span class="border rounded py-1 px-4 text-white <?php echo e($product->status == "Active"? "bg-green-600" : "bg-red-600", false); ?>"><?php echo e($product->status, false); ?></span></td>
                        <td scope="row" class="px-6 text-base font-medium whitespace-nowrap dark:text-blue-100">
                            <a href="/product/delete-product/<?php echo e($product->id, false); ?>">
                                <button class="my-2 mx-auto bg-red-600 px-5 py-2 rounded text-white font-semibold">Remove</button>
                            </a>
                            <a href="/product/get-product-details/<?php echo e($product->id, false); ?>">
                                <button class="my-2 mx-auto bg-blue-600 px-5 py-2 rounded text-white font-semibold">View</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Visual Studio\VS Code Projects\Personal\Laravel\multi_vendor_ecommerce\resources\views/Seller/products.blade.php ENDPATH**/ ?>