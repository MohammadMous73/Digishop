@extends('app.index')

@section('content')

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{url($post->image)}}" class="img-fluid rounded" alt="{{$post->title}}">
                </div>
                <div class="col-md-8 my-2">
                    <h2>{{$post->title}}</h2>
                    <span class="my-1 p-2">مدل پردازنده: {{$post->processormodel}}</span><br>
                    <span class="my-1 p-2">حافظه رم : {{$post->rammemory}}</span><br>
                    <span class="my-1 p-2">ظرفیت حافظه داخلی : {{$post->internalmemorycapacity}}</span><br>
                    <span class="my-1 p-2"> مدل پردازنده گرافیکی : {{$post->gpumodel}}</span><br>
                    <span class="my-1 p-2">حافظه گرافیکی : {{$post->graphicmemory}}</span><br>
                    <span class="my-1 p-2">اندازه صفحه نمایش : {{$post->screensize}}</span><br>
                    <span class="my-1 p-2">دقت صفحه نمایش : {{$post->screenaccuracy}}</span><br>
                    <span class="my-1 p-2">درایو نوری : {{$post->opticaldrive}}</span><br>
                    <span class="my-1 p-2">سیستم عامل : {{$post->operatingsystem}}</span><br>
                    <b><span class="my-1 p-2">قیمت (تومان) : {{$post->price}}</span></b><br>

                </div>
            </div>
        </div>
    </section>

@endsection
