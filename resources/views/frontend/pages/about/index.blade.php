@extends('frontend.layouts.app')

@section('content')
<!-- About-->
<section class="resume-section" id="about">
    <div class="resume-section-content">
        <h1 class="mb-0">
            {{$data['nama']}}
        </h1>
        <div class="subheading mb-5">
            3542 Berry Street · Cheyenne Wells, CO 80810 · {{$data['phone_number']}}·
            <a href="mailto:name@email.com">name@email.com</a>
        </div>
        <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level
            overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall
            value proposition.</p>
        <div class="social-icons">
            @foreach ($data['items'] as $key => $val)
                <a class="social-icon" href="{{$val['link']}}"><i class="{{$val['icon']}}"></i></a>
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('style')

@endpush

@push('script')

@endpush
