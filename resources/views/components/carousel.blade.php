<div class="relative overflow-hidden px-4 border">
    <div class="flex overflow-x-scroll scrollbar-hide space-x-4" id="carousel">
        <div class="flex-none w-64 h-40 bg-gray-200 rounded-md">
            <img src="https://images.unsplash.com/photo-1593436878396-e943a3cac98f?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image 1" class="object-cover w-full h-full rounded-md">
        </div>
        <div class="flex-none w-64 h-40 bg-gray-200 rounded-md">
            <img src="https://images.unsplash.com/photo-1693154507600-3b928a47007c?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image 2" class="object-cover w-full h-full rounded-md">
        </div>
        <div class="flex-none w-64 h-40 bg-gray-200 rounded-md">
            <img src="https://images.unsplash.com/photo-1622082679766-c5912d9416eb?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image 3" class="object-cover w-full h-full rounded-md">
        </div>
        <div class="flex-none w-64 h-40 bg-gray-200 rounded-md">
            <img src="https://images.unsplash.com/photo-1642706674385-a63ee6e063c0?q=80&w=1372&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image 4" class="object-cover w-full h-full rounded-md">
        </div>
        <div class="flex-none w-64 h-40 bg-gray-200 rounded-md">
            <img src="https://images.unsplash.com/photo-1640459665989-20669a3b6446?q=80&w=1563&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image 5" class="object-cover w-full h-full rounded-md">
        </div>
        <div class="flex-none w-64 h-40 bg-gray-200 rounded-md">
            <img src="https://plus.unsplash.com/premium_photo-1678655852223-51854b59b6fb?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image 6" class="object-cover w-full h-full rounded-md">
        </div>
    </div>
    <button class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full z-10" onclick="scrollCarousel(-1)">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    <button class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full z-10" onclick="scrollCarousel(1)">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>
</div>

<script>
    function scrollCarousel(direction) {
        const carousel = document.getElementById('carousel');
        const scrollAmount = 300;
        carousel.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
    }
</script>
