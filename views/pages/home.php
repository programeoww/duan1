<?php
require('./controllers/product.php');
$list_product = view_products();
?>

<section class="bg-[url('../images/hero4.png')] bg-no-repeat bg-cover bg-center h-[70vh] md:h-96 lg:h-screen flex flex-col justify-center items-start">
    <div class="max-w-screen-xl mx-auto px-5 w-full">
        <h4 class="pb-4 text-base lg:text-xl font-bold">Trade-in-offer</h4>
        <h1 class="text-3xl lg:text-5xl font-bold">Super value deals <br> <span class="text-primary leading-snug">On all
                products</span> </h1>
        <p class="my-5">Save more with coupons & up to 70%off!</p>
    </div>
</section>
<section class="py-11">
    <div class="text-center mb-8">
        <p class="text-4xl font-bold">Featured Products</p>
        <p class="">Summer Collection New Morden Design</p>
    </div>
    <div class="grid grid-cols-4 gap-10 max-w-screen-xl mx-auto  w-full lg: gap-5 md: grid grid-cols-2 gap-10 gap-y-10 ">
        <!-- product -->
        <!-- for list hàng -->
        <?php foreach ($list_product as $value) : ?>
        <!-- kiểm tra loại hàng -->
        <?php if ($value['featured'] === true) : ?>
        <a href="<?php echo "/product?id=".$value['id'] ?>">
            <div class="bg-white rounded-lg shadow-xl border-primary border p-3 ease-in-out duration-500">
                <div class="rounded pt-[100%] overflow-hidden relative">
                    <img class="absolute top-0" src="<?php echo $value['featured_image'] ?>" alt=""/>
                </div>
                <div class="pt-4">
                    <p class="text-xs mb-1">adidas</p>
                    <h3 class="font-bold">Cartoon Astronaut T-Shirts</h3>
                    <div>
                        <span class="material-symbols-rounded icon-fill">star</span>
                    </div>
                </div>
            </div>
            <div class="trademark ">
                
            </div>
            <div class="name">
                <a href="">
                    <h4 class="text-base font-bold hover:text-red-700 lg:pb-4 h-12 text-sm md:text-base"><?php echo $value['name'] ?></h4>
                </a>
            </div>
            <a href="">
                <div class="review flex text-yellow text-xs">
                <i class="fi fi-sr-shopping-cart-add"></i>
                </div>
            </a>
            <a href="">
                <div class="price">
                    <p class="text-green-600 font-bold text-base pt-2"><?php echo $value['price'] ?> đ</p>
                </div>
            </a>
            <a href="">
                <div class="but my-2">
                    <button class="bg-[#041E42] rounded-xl h-9 w-64 hover:bg-red-700 ease-in-out duration-300 lg:w-48 md:w-72 ml-2 sm:w-56 text-base">
                         <p class="justify-center flex text-xs text-white py-2"><i class="fi fi-rr-shopping-cart-add"></i> ADD TO CART</p>
                    </button>
                </div>
            </a>
        </a>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="explore my-10 flex justify-center">
        <a href="">
            <button
                class="bg-transparent w-36 rounded-lg h-12 border-2 border-green-600 hover:-translate-y-3 ease-in-out duration-500 ">
                <p class="text-base font-medium text-green-600 hover:text-red">Explore More</p>
            </button>
        </a>

    </div>
</section>

<!-- section2 -->
<section class="md: lg:h-screen">
    <div class="text-center my-10">
        <p class="text-4xl font-bold">New Arrivals</p>
        <p class="text-sm">Summer Collection New Morden Design</p>
    </div>
    

    <div class="grid grid-cols-4 gap-10 max-w-screen-xl mx-auto  w-full lg: gap-5 md: grid grid-cols-2 gap-10 gap-y-10  ">
        <!-- product -->
        <!-- for list hàng -->
        <?php foreach ($list_product as $value) : ?>
        <!-- kiểm tra loại hàng -->
        <?php if ($value['featured']) : ?>
        <div class="bg-white rounded-lg shadow-xl border-[#088178] border p-3 hover:-translate-y-6 ease-in-out duration-500 lg:mx-2 md:mx-5 sm:mx-5">
            <a href="">
                <div class="">
                    <a href=""><img class="" src="<?php echo $value['featured_image'] ?>" alt=""></a>
                </div>
            </a>
            <div class="trademark ">
                <p class="text-xs pt-4">Adidas</p>
            </div>
            <div class="name">
                <a href="">
                    <h4 class="text-base font-bold hover:text-red-700 lg:pb-4 h-12 text-sm md:text-base"><?php echo $value['name'] ?></h4>
                </a>
            </div>
            <a href="">
                <div class="review flex text-yellow text-xs">
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                    <i class="fi fi-rr-star hover:text-yellow-700 hover:-translate-y-1 ease-in-out duration-300"></i>
                </div>
            </a>
            <a href="">
                <div class="price">
                    <p class="text-green-600 font-bold text-base pt-2"><?php echo $value['price'] ?> đ</p>
                </div>
            </a>
            <a href="">
                <div class="but my-2">
                    <button class="bg-[#041E42] rounded-xl h-9 w-64 hover:bg-red-700 ease-in-out duration-300 lg:w-48 md:w-72 ml-2 sm:w-56">
                        <p class="justify-center flex text-xs text-white py-2"><i class="fi fi-rr-shopping-cart-add"></i> ADD TO CART</p>
                    </button>
                </div>
            </a>
        </div>
        <!-- zzz -->
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="explore my-10 flex justify-center">
        <a href="">
            <button
                class="bg-transparent w-36 rounded-lg h-12 border-2 border-green-600 hover:-translate-y-3 ease-in-out duration-500 ">
                <p class="text-base font-medium text-green-600 hover:text-red">Explore More</p>
            </button>
        </a>

    </div>
</section>
</section>