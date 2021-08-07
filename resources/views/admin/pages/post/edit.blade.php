@extends('admin.index')

@section('content')

    <div class="row my-5">
        <div class="col-md-6 mx-auto">
            @include('message-error.message')
            <form method="post" enctype="multipart/form-data" action="{{route('admin.post.update',$post->id)}}" class="border rounded p-5">

                @csrf
                @method('put')


                <div class="row mb-3">
                    <h4>ویرایش کالا</h4>
                </div>


                <div class="row mb-3">
                    <label for="title" class="form-label">
                        نام محصول
                    </label>
                    <input type="text" name="title" id="title"
                           class="form-control @error('title') border-danger @enderror"
                           placeholder="نام محصول" autocomplete="off" value="{{$post->title}}">
                </div>

                <div class="row mb-3">
                    <label for="processormodel" class="form-label">
                        مدل پردازنده
                    </label>
                    <input type="text" name="processormodel" id="processormodel"
                           class="form-control @error('processormodel') border-danger @enderror"
                           placeholder="مدل پردازنده" autocomplete="off" value="{{$post->processormodel}}">
                </div>

                <div class="row mb-3">
                    <label for="rammemory" class="form-label">
                        حافظه رم
                    </label>
                    <input type="text" name="rammemory" id="rammemory"
                           class="form-control @error('rammemory') border-danger @enderror"
                           placeholder="حافظه رم" autocomplete="off" value="{{$post->rammemory}}">
                </div>

                <div class="row mb-3">
                    <label for="internalmemorycapacity" class="form-label">
                        ظرفیت حافظه داخلی
                    </label>
                    <input type="text" name="internalmemorycapacity" id="internalmemorycapacity"
                           class="form-control @error('internalmemorycapacity') border-danger @enderror"
                           placeholder="ظرفیت حافظه داخلی" autocomplete="off" value="{{$post->internalmemorycapacity}}">
                </div>

                <div class="row mb-3">
                    <label for="gpumodel" class="form-label">
                        مدل پردازنده گرافیکی
                    </label>
                    <input type="text" name="gpumodel" id="gpumodel"
                           class="form-control @error('gpumodel') border-danger @enderror"
                           placeholder="مدل پردازنده گرافیکی" autocomplete="off" value="{{$post->gpumodel}}">
                </div>

                <div class="row mb-3">
                    <label for="graphicmemory" class="form-label">
                        حافظه گرافیکی
                    </label>
                    <input type="text" name="graphicmemory" id="graphicmemory"
                           class="form-control @error('graphicmemory') border-danger @enderror"
                           placeholder="حافظه گرافیکی" autocomplete="off" value="{{$post->graphicmemory}}">
                </div>

                <div class="row mb-3">
                    <label for="screensize" class="form-label">
                        اندازه صفحه نمایشگر
                    </label>
                    <input type="text" name="screensize" id="screensize"
                           class="form-control @error('screensize') border-danger @enderror"
                           placeholder="اندازه صفحه نمایشگر" autocomplete="off" value="{{$post->screensize}}">
                </div>

                <div class="row mb-3">
                    <label for="screenaccuracy" class="form-label">
                        دقت صفحه نمایش
                    </label>
                    <input type="text" name="screenaccuracy" id="screenaccuracy"
                           class="form-control @error('screenaccuracy') border-danger @enderror"
                           placeholder="دقت صفحه نمایش" autocomplete="off" value="{{$post->screenaccuracy}}">
                </div>

                <div class="row mb-3">
                    <label for="opticaldrive" class="form-label">
                        درایو نوری
                    </label>
                    <input type="text" name="opticaldrive" id="opticaldrive"
                           class="form-control @error('opticaldrive') border-danger @enderror"
                           placeholder="درایو نوری" autocomplete="off" value="{{$post->opticaldrive}}">
                </div>

                <div class="row mb-3">
                    <label for="operatingsystem" class="form-label">
                        سیستم عامل
                    </label>
                    <input type="text" name="operatingsystem" id="operatingsystem"
                           class="form-control @error('operatingsystem') border-danger @enderror"
                           placeholder="سیستم عامل" autocomplete="off" value="{{$post->operatingsystem}}">
                </div>

                <div class="row mb-3">
                    <label for="file" class="form-label">
                        عکس محصول
                    </label>
                    <input type="file" name="file" id="file"
                           class="form-control @error('file') border-danger @enderror"
                </div>

                <div class="row mb-3">
                    <label for="price" class="form-label">
                        قیمت(تومان)
                    </label>
                    <input type="text" name="price" id="price"
                           class="form-control @error('price') border-danger @enderror"
                           placeholder="قیمت" autocomplete="off" value="{{$post->price}}">
                </div>

                <div class="row mb-3">
                    <input type="submit" name="add-product" id="add-product"
                           class="btn btn-sm btn-success mt-5" value="ویرایش کالا">
                </div>
            </form>
        </div>
    </div>

@endsection
