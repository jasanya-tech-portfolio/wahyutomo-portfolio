{{-- Ping Bottom --}}
<div class="flex justify-center pt-2">
    <div class="inline-flex items-center gap-2 bg-white px-4 py-2 rounded-full text-sm text-blue-600 font-semibold shadow-sm hover:shadow-md max-w-[220px] border-2 border-blue-100">
        <!--Ikon ping -->
        <div class="relative flex items-center justify-center w-4 h-4">
            <span class="absolute inline-flex w-full h-full animate-ping rounded-full bg-blue-400 opacity-75"></span>
            <span class="relative inline-flex w-3 h-3 rounded-full bg-blue-600"></span>
        </div>
        
        <!-- Teks -->
        Core Technologies
    </div>
</div>

{{-- Tools Logo --}}
<section class="flex justify-center wrapper !bg-[#ffffff] wrapper-border mx-auto">
  <div class="container py-6">
    <div class="swiper-container clients !mb-0 relative z-10" data-margin="30" data-dots="false" data-loop="true" data-autoplay="true" data-autoplaytime="1" data-drag="false" data-speed="2000" data-items-xxl="7" data-items-xl="7" data-items-lg="7" data-items-md="4" data-items-xs="2">
      <div class="swiper">
        <div class="swiper-wrapper ticker">
          @foreach ($tools as $tool)
            <div class="swiper-slide px-6 w-auto font-[poppins]">
              <div class="flex items-center justify-center space-x-2 bg-white border border-blue-400 hover:border-amber-400 rounded-xl px-3 py-3 shadow-md hover:shadow-lg min-w-[160px]">
                  <img src="{{ asset('storage/' . $tool->logo) }}" alt="{{ $tool->name }}" class="w-10 h-10 object-contain">
                  <span class="text-sm font-semibold text-gray-800">{{ $tool->name }}</span>
              </div>
            </div>
          @endforeach
        </div>
        <!--/.swiper-wrapper -->
      </div>
      <!-- /.swiper -->
    </div>
    <!-- /.swiper-container -->
  </div>
</section>
<!-- /section -->