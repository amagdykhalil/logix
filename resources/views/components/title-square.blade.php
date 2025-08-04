<!-- resources/views/components/box-with-corners.blade.php -->
<div class="relative border-[5px] border-[#434093] px-2  py-1 mt-3 inline-block w-fit ">
    <!-- Corner Squares -->
    <div class="absolute -top-1.5 -left-1.5 w-3 h-3 bg-[#434093]"></div>
    <div class="absolute -top-1.5 -right-1.5 w-3 h-3 bg-[#434093]"></div>
    <div class="absolute -bottom-1.5 -left-1.5 w-3 h-3 bg-[#434093]"></div>
    <div class="absolute -bottom-1.5 -right-1.5 w-3 h-3 bg-[#434093]"></div>

    <!-- Title -->
    <h2 class="text-center text-[#434093] ">
        {{ $title }}
    </h2>

</div>
