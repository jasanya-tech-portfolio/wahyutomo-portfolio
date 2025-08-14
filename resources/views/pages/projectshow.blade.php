@extends('layouts.base')

@section('title', 'Project')

@section('content')
<!-- /header -->
<section class="flex justify-center wrapper !bg-[rgba(254,254,254)] pt-20">
    <div class="container py-6 !text-center">
        <div class="flex flex-wrap mx-[-15px]">
        <div class="md:w-10/12 lg:w-8/12 xl:w-7/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto">
            <div class="post-header font-[poppins]">
                <div class="inline-flex !mb-[.4rem] uppercase !tracking-[0.02rem] text-[0.7rem] font-bold !text-[#aab0bc] relative align-top !pl-[1.4rem] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#3f78e0]">
                    @foreach($project->categories as $category)
                        <span class="text-lg text-blue-500 font-medium">{{ $category->name }}</span>
                    @endforeach
                </div>  
                <h1 class="!text-[calc(1.365rem_+_1.38vw)] font-bold !leading-[1.2] xl:!text-[2.4rem] !mb-3">{{ $project->name }}</h1>
            </div>
        </div>
        </div>
    </div>
</section>

<div class="flex justify-center wrapper !bg-[#ffffff]  border-b-[rgba(164,174,198,0.2)] border-b border-solid">
    <div class="container !pb-[4.5rem] xl:!pb-24 lg:!pb-24 md:!pb-24">
        <article>
            <img class="py-8 rounded rounded-lg" src="{{ asset('storage/' . $project->thumbnail) }}" alt="image">

            <div class="flex flex-wrap mx-[-15px] p-4">
                <div class="xl:w-10/12 xl:!ml-[8.33333333%] lg:w-10/12 lg:!ml-[8.33333333%] w-full flex-[0_0_auto] !px-[15px] max-w-full">
                    <h2 class="!text-[calc(1.265rem_+_0.18vw)] font-bold xl:!text-[1.4rem] !leading-[1.35] !mb-4">About the Project</h2>
                    <div class="flex flex-wrap mx-0">
                        <div class="xl:w-9/12 lg:w-9/12 md:w-9/12 w-full flex-[0_0_auto] max-w-full font-[poppins]">
                            <p>{!! $project->body !!}</p>
                        </div>
                        <!--/column -->
                        <div class="text-[20px] xl:w-2/12 lg:w-2/12 md:w-2/12 w-full flex-[0_0_auto] max-w-full ml-auto font-[poppins]">
                            <ul class="pl-0 list-none">
                                <li class="py-4">
                                    <h5 class="mb-1">Date</h5>
                                    <p>{{  date('F d, Y', strtotime($project->created_at)) }}</p>
                                </li>
                                <li class="py-4">
                                    <h5 class="mb-1">Client</h5>
                                    <p>{{ $project->client->name }}</p>
                                </li>
                            </ul>
                            <a href="{{ $project->url }}" class="hover:underline text-blue-600">
                                See Project
                            </a>
                        </div>
                        <!--/column -->
                    </div>
                <!--/.row -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </article>
        <!-- /.project -->
    </div>
    <!-- /.container -->
</div>
@endsection