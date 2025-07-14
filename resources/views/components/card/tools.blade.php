<section class="wrapper !bg-[#ffffff]  wrapper-border">
    <div class="container pt-20 xl:pt-28 lg:pt-28 md:pt-28 pb-16 xl:pb-20 lg:pb-20 md:pb-20">
        <p class="text-center !mb-8">Trusted by over 2K+ clients across the world</p>
        @foreach ($tools as $tool)
            <div class="swiper-container clients !mb-0 relative z-10" data-margin="30" data-dots="false" data-loop="true" data-autoplay="true" data-autoplaytime="1" data-drag="false" data-speed="5000" data-items-xxl="7" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-xs="2">
                <div class="swiper">
                    <div class="swiper-wrapper ticker">
                        <div class="swiper-slide px-5"><img class="!w-full !h-auto" src="{{ asset('storage/' . $tool->logo) }}" alt="{{ $tool->name }}"></div>
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
        @endforeach
        <!-- /.swiper-container -->
    </div>
</section>
<!-- /section -->

<section class="wrapper !bg-[#ffffff] ">
                  <div class="container pt-20 xl:pt-28 lg:pt-28 md:pt-28 pb-16 xl:pb-20 lg:pb-20 md:pb-20">
                    <div class="flex flex-wrap mx-[-15px]">
                      <div class="xl:w-10/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto">
                        <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400 !text-white !mt-[-1.25rem] xl:!mt-0 lg:!mt-0  xl:-translate-y-2/4 lg:-translate-y-2/4 bg-cover [background-size:100%] bg-[center_center] bg-no-repeat !bg-scroll !relative z-0 before:rounded-[0.4rem] before:bg-[rgba(30,34,40,.4)] before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0" data-image-src="../../assets/img/photos/bg3.jpg">
                          <div class="card-body p-6 flex-row text-center xl:!justify-between lg:!justify-between md:!justify-between xl:!flex xl:!items-center lg:!flex lg:!items-center xl:!p-12 lg:!p-12 md:!p-12 xl:!text-left lg:!text-left">
                            <h3 class="!text-[calc(1.265rem_+_0.18vw)] font-bold xl:!text-[1.4rem] !leading-[1.35] !mb-6 xl:!mb-0 lg:!mb-0 lg:!pr-10 xl:!pr-5 xxl:!pr-32 !text-white">We are trusted by over 5000+ clients. Join them by using our services and grow your business.</h3>
                            <a href="#" class="btn btn-white !rounded-[50rem]  !mb-0 whitespace-nowrap">Join Us</a>
                          </div>
                          <!--/.card-body -->
                        </div>
                        <!--/.card -->
                      </div>
                      <!-- /column -->
                    </div>
                    <!-- /.row -->
                  </div>
</section>
<!-- /section -->