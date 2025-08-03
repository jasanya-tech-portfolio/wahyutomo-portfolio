<div class="bg-gray-100">

    {{-- Ping Bottom --}}
    <div class="flex justify-center pt-10">
        <div class="inline-flex items-center gap-2 bg-white px-4 py-2 rounded-full text-sm text-blue-600 font-semibold shadow-sm hover:shadow-md max-w-[220px] border-2 border-blue-100">
            <!--Ikon ping -->
            <div class="relative flex items-center justify-center w-4 h-4">
                <span class="absolute inline-flex w-full h-full animate-ping rounded-full bg-blue-400 opacity-75"></span>
                <span class="relative inline-flex w-3 h-3 rounded-full bg-blue-600"></span>
            </div>
            
            <!-- Teks -->
            Featured Work
        </div>
    </div>

    <h1 class="text-4xl md:text-5xl text-gray-800 font-[Caveat] font-semibold text-center py-6">
        Recent Project
    </h1>

    <h3 class="text-sm md:text-lg text-gray-700 font-[poppins] font-medium text-center">
        {{App\Helpers\SettingHelper::getSetting('text project')}}
    </h3>

    {{-- Card Project --}}
<!-- /.row -->
<div class="!relative py-6">
    <div class="shape bg-dot primary rellax !w-[7rem] !h-[10rem] !absolute z-[1] opacity-50 !bg-[radial-gradient(#3f78e0_2px,transparent_2.5px)]" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
    <div class="swiper-container dots-closer blog grid-view !mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
    <div class="swiper">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="item-inner">
            <article>
                <div class="card">
                <figure class="card-img-top overlay overlay-1 hover-scale group"><a href="#"> <img class="!transition-all !duration-[0.35s] !ease-in-out group-hover:scale-105" src="../../assets/img/photos/b4.jpg" alt="image"></a>
                    <figcaption class="group-hover:opacity-100 absolute w-full h-full opacity-0 text-center px-4 py-3 inset-0 z-[5] pointer-events-none p-2">
                    <h5 class="from-top  !mb-0 absolute w-full translate-y-[-80%] p-[.75rem_1rem] left-0 top-2/4">Read More</h5>
                    </figcaption>
                </figure>
                <div class="card-body flex-[1_1_auto] p-[40px] xl:!p-[1.75rem_1.75rem_1rem_1.75rem] lg:!p-[1.75rem_1.75rem_1rem_1.75rem] md:!p-[1.75rem_1.75rem_1rem_1.75rem] max-md:pb-4  ">
                    <div class="post-header">
                    <div class="inline-flex !mb-[.4rem] uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !text-[#aab0bc] relative align-top !pl-[1.4rem] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#3f78e0]">
                        <a href="#" class="hover" rel="category">Coding</a>
                    </div>
                    <!-- /.post-category -->
                    <h2 class="post-title h3 !mt-1 !mb-3"><a class="!text-[#343f52] hover:!text-[#3f78e0]" href="../blog-post.html">Ligula tristique quis risus</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="!relative">
                    <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
                    </div>
                    <!-- /.post-content -->
                </div>
                <!--/.card-body -->
                <div class="card-footer xl:!p-[1.25rem_1.75rem_1.25rem] lg:!p-[1.25rem_1.75rem_1.25rem] md:!p-[1.25rem_1.75rem_1.25rem] p-[18px_40px]">
                    <ul class="!text-[0.7rem] !text-[#aab0bc] m-0 p-0 list-none flex  !mb-0">
                    <li class="post-date inline-block"><i class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i><span>14 Apr 2022</span></li>
                    <li class="post-comments inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]"><a class="!text-[#aab0bc] hover:!text-[#3f78e0] hover:!border-[#3f78e0]" href="#"><i class="uil uil-comment pr-[0.2rem] align-[-.05rem] before:content-['\ea54']"></i>4</a></li>
                    <li class="post-likes !ml-auto inline-block"><a class="!text-[#aab0bc] hover:!text-[#3f78e0] hover:!border-[#3f78e0]" href="#"><i class="uil uil-heart-alt pr-[0.2rem] align-[-.05rem] before:content-['\eb60']"></i>5</a></li>
                    </ul>
                    <!-- /.post-meta -->
                </div>
                <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </article>
            <!-- /article -->
            </div>
            <!-- /.item-inner -->
        </div>
        <!--/.swiper-slide -->
        <div class="swiper-slide">
            <div class="item-inner">
            <article>
                <div class="card">
                <figure class="card-img-top overlay overlay-1 hover-scale group"><a href="#"> <img class="!transition-all !duration-[0.35s] !ease-in-out group-hover:scale-105" src="../../assets/img/photos/b5.jpg" alt="image"></a>
                    <figcaption class="group-hover:opacity-100 absolute w-full h-full opacity-0 text-center px-4 py-3 inset-0 z-[5] pointer-events-none p-2">
                    <h5 class="from-top  !mb-0 absolute w-full translate-y-[-80%] p-[.75rem_1rem] left-0 top-2/4">Read More</h5>
                    </figcaption>
                </figure>
                <div class="card-body flex-[1_1_auto] p-[40px] xl:!p-[1.75rem_1.75rem_1rem_1.75rem] lg:!p-[1.75rem_1.75rem_1rem_1.75rem] md:!p-[1.75rem_1.75rem_1rem_1.75rem] max-md:pb-4  ">
                    <div class="post-header">
                    <div class="inline-flex !mb-[.4rem] uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !text-[#aab0bc] relative align-top !pl-[1.4rem] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#3f78e0]">
                        <a href="#" class="hover" rel="category">Workspace</a>
                    </div>
                    <!-- /.post-category -->
                    <h2 class="post-title h3 !mt-1 !mb-3"><a class="!text-[#343f52] hover:!text-[#3f78e0]" href="../blog-post.html">Nullam id dolor elit id nibh</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="!relative">
                    <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
                    </div>
                    <!-- /.post-content -->
                </div>
                <!--/.card-body -->
                <div class="card-footer xl:!p-[1.25rem_1.75rem_1.25rem] lg:!p-[1.25rem_1.75rem_1.25rem] md:!p-[1.25rem_1.75rem_1.25rem] p-[18px_40px]">
                    <ul class="!text-[0.7rem] !text-[#aab0bc] m-0 p-0 list-none flex  !mb-0">
                    <li class="post-date inline-block"><i class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i><span>29 Mar 2022</span></li>
                    <li class="post-comments inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]"><a class="!text-[#aab0bc] hover:!text-[#3f78e0] hover:!border-[#3f78e0]" href="#"><i class="uil uil-comment pr-[0.2rem] align-[-.05rem] before:content-['\ea54']"></i>3</a></li>
                    <li class="post-likes !ml-auto inline-block"><a class="!text-[#aab0bc] hover:!text-[#3f78e0] hover:!border-[#3f78e0]" href="#"><i class="uil uil-heart-alt pr-[0.2rem] align-[-.05rem] before:content-['\eb60']"></i>3</a></li>
                    </ul>
                    <!-- /.post-meta -->
                </div>
                <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </article>
            <!-- /article -->
            </div>
            <!-- /.item-inner -->
        </div>
        <!--/.swiper-slide -->
        <div class="swiper-slide">
            <div class="item-inner">
            <article>
                <div class="card">
                <figure class="card-img-top overlay overlay-1 hover-scale group"><a href="#"> <img class="!transition-all !duration-[0.35s] !ease-in-out group-hover:scale-105" src="../../assets/img/photos/b6.jpg" alt="image"></a>
                    <figcaption class="group-hover:opacity-100 absolute w-full h-full opacity-0 text-center px-4 py-3 inset-0 z-[5] pointer-events-none p-2">
                    <h5 class="from-top  !mb-0 absolute w-full translate-y-[-80%] p-[.75rem_1rem] left-0 top-2/4">Read More</h5>
                    </figcaption>
                </figure>
                <div class="card-body flex-[1_1_auto] p-[40px] xl:!p-[1.75rem_1.75rem_1rem_1.75rem] lg:!p-[1.75rem_1.75rem_1rem_1.75rem] md:!p-[1.75rem_1.75rem_1rem_1.75rem] max-md:pb-4  ">
                    <div class="post-header">
                    <div class="inline-flex !mb-[.4rem] uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !text-[#aab0bc] relative align-top !pl-[1.4rem] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#3f78e0]">
                        <a href="#" class="hover" rel="category">Meeting</a>
                    </div>
                    <!-- /.post-category -->
                    <h2 class="post-title h3 !mt-1 !mb-3"><a class="!text-[#343f52] hover:!text-[#3f78e0]" href="../blog-post.html">Ultricies fusce porta elit</a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="!relative">
                    <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
                    </div>
                    <!-- /.post-content -->
                </div>
                <!--/.card-body -->
                <div class="card-footer xl:!p-[1.25rem_1.75rem_1.25rem] lg:!p-[1.25rem_1.75rem_1.25rem] md:!p-[1.25rem_1.75rem_1.25rem] p-[18px_40px]">
                    <ul class="!text-[0.7rem] !text-[#aab0bc] m-0 p-0 list-none flex  !mb-0">
                    <li class="post-date inline-block"><i class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i><span>26 Feb 2022</span></li>
                    <li class="post-comments inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]"><a class="!text-[#aab0bc] hover:!text-[#3f78e0] hover:!border-[#3f78e0]" href="#"><i class="uil uil-comment pr-[0.2rem] align-[-.05rem] before:content-['\ea54']"></i>6</a></li>
                    <li class="post-likes !ml-auto inline-block"><a class="!text-[#aab0bc] hover:!text-[#3f78e0] hover:!border-[#3f78e0]" href="#"><i class="uil uil-heart-alt pr-[0.2rem] align-[-.05rem] before:content-['\eb60']"></i>3</a></li>
                    </ul>
                    <!-- /.post-meta -->
                </div>
                <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </article>
            <!-- /article -->
            </div>
            <!-- /.item-inner -->
        </div>
        <!--/.swiper-slide -->
        <div class="swiper-slide">
            <div class="item-inner">
            <article>
                <div class="card">
                <figure class="card-img-top overlay overlay-1 hover-scale group"><a href="#"> <img class="!transition-all !duration-[0.35s] !ease-in-out group-hover:scale-105" src="../../assets/img/photos/b7.jpg" alt="image"></a>
                    <figcaption class="group-hover:opacity-100 absolute w-full h-full opacity-0 text-center px-4 py-3 inset-0 z-[5] pointer-events-none p-2">
                    <h5 class="from-top  !mb-0 absolute w-full translate-y-[-80%] p-[.75rem_1rem] left-0 top-2/4">Read More</h5>
                    </figcaption>
                </figure>
                <div class="card-body flex-[1_1_auto] p-[40px] xl:!p-[1.75rem_1.75rem_1rem_1.75rem] lg:!p-[1.75rem_1.75rem_1rem_1.75rem] md:!p-[1.75rem_1.75rem_1rem_1.75rem] max-md:pb-4  ">
                    <div class="post-header">
                    <div class="inline-flex !mb-[.4rem] uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !text-[#aab0bc] relative align-top !pl-[1.4rem] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#3f78e0]">
                        <a href="#" class="hover" rel="category">Business Tips</a>
                    </div>
                    <!-- /.post-category -->
                    <h2 class="post-title h3 !mt-1 !mb-3"><a class="!text-[#343f52] hover:!text-[#3f78e0]" href="../blog-post.html">Morbi leo risus porta eget</a></h2>
                    </div>
                    <div class="!relative">
                    <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor. Aenean lacinia bibendum nulla sed.</p>
                    </div>
                    <!-- /.post-content -->
                </div>
                <!--/.card-body -->
                <div class="card-footer xl:!p-[1.25rem_1.75rem_1.25rem] lg:!p-[1.25rem_1.75rem_1.25rem] md:!p-[1.25rem_1.75rem_1.25rem] p-[18px_40px]">
                    <ul class="!text-[0.7rem] !text-[#aab0bc] m-0 p-0 list-none flex  !mb-0">
                    <li class="post-date inline-block"><i class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i><span>7 Jan 2022</span></li>
                    <li class="post-comments inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]"><a class="!text-[#aab0bc] hover:!text-[#3f78e0] hover:!border-[#3f78e0]" href="#"><i class="uil uil-comment pr-[0.2rem] align-[-.05rem] before:content-['\ea54']"></i>2</a></li>
                    <li class="post-likes !ml-auto inline-block"><a class="!text-[#aab0bc] hover:!text-[#3f78e0] hover:!border-[#3f78e0]" href="#"><i class="uil uil-heart-alt pr-[0.2rem] align-[-.05rem] before:content-['\eb60']"></i>5</a></li>
                    </ul>
                    <!-- /.post-meta -->
                </div>
                <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </article>
            <!-- /article -->
            </div>
            <!-- /.item-inner -->
        </div>
        <!--/.swiper-slide -->
        </div>
        <!--/.swiper-wrapper -->
    </div>
    <!-- /.swiper -->
    </div>
        <!-- /.swiper-container -->
    </div>
<!-- /.relative -->
</div>

</div>