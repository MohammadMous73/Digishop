@extends('admin.index')

@section('content')

    <div class="container">
        <div class="row">
            @include('message-error.message')
            <div class="col-12">
                    <a class="btn mt-4 btn-sm btn-success text-decoration-none fw-bold text-white" href="{{route('admin.post.add')}}">
                        ثبت اطلاعات
                    </a>
            </div>



            <div class="col-12 p-3 m-3 align-items-center border rounded">
                <form method="post" action="{{route('admin.post.list')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-3 m-1 text-right">
                            <input type="text" autocomplete="off" name="title" id="title"
                                   value="{{request()->title}}"
                                   placeholder="نام محصول"  class="form-control">
                        </div>

                        <div class="col-md-3 m-1 text-right">
                            <input type="text" autocomplete="off" name="processormodel" id="processormodel"
                                   value="{{request()->processormodel}}"
                                   placeholder="مدل پردازنده"  class="form-control">
                        </div>

                        <div class="col-md-3 m-1 text-right">
                            <input type="text" autocomplete="off" name="rammemory" id="rammemory"
                                   value="{{request()->rammemory}}"
                                   placeholder="حافظه رم"  class="form-control">
                        </div>

                        <div class="col-md-3 m-1 text-right">
                            <input type="text" autocomplete="off" name="internalmemorycapacity" id="internalmemorycapacity"
                                   value="{{request()->internalmemorycapacity}}"
                                   placeholder="ظرفیت حافظه داخلی"  class="form-control">
                        </div>

                        <div class="col-md-3 m-1 text-right">
                            <input type="text" autocomplete="off" name="gpumodel" id="gpumodel"
                                   value="{{request()->gpumodel}}"
                                   placeholder="مدل پردازنده گرافیکی"  class="form-control">
                        </div>

                        <div class="col-md-3 m-1 text-right">
                            <input type="text" autocomplete="off" name="graphicmemory" id="graphicmemory"
                                   value="{{request()->graphicmemory}}"
                                   placeholder="حافظه گرافیکی"  class="form-control">
                        </div>

                        <div class="col-md-3 m-1 text-right">
                            <input type="text" autocomplete="off" name="screensize" id="screensize"
                                   value="{{request()->screensize}}"
                                   placeholder="اندازه صفحه نمایش"  class="form-control">
                        </div>

                        <div class="col-md-3 m-1 text-right">
                            <input type="text" autocomplete="off" name="screenaccuracy" id="screenaccuracy"
                                   value="{{request()->screenaccuracy}}"
                                   placeholder="دقت صفحه نمایش"  class="form-control">
                        </div>

                        <div class="col-md-3 m-1 text-right">
                            <input type="text" autocomplete="off" name="opticaldrive" id="opticaldrive"
                                   value="{{request()->opticaldrive}}"
                                   placeholder="درایو نوری"  class="form-control">
                        </div>

                        <div class="col-md-3 m-1 text-right">
                            <input type="text" autocomplete="off" name="operatingsystem" id="operatingsystem"
                                   value="{{request()->operatingsystem}}"
                                   placeholder="سیستم عامل"  class="form-control">
                        </div>


                        <div class="text-right m-1 col-md-3">
                            <select name="paginate_count" class="form-control" style="text-align-last: center">
                                <option hidden="" value="">تعداد نمایش در هر صفحه</option>
                                <option value="1" {{request()->paginate_count == 1 ? 'selected' : ''}}>1</option>
                                <option value="2" {{request()->paginate_count == 2 ? 'selected' : ''}}>2</option>
                                <option value="3" {{request()->paginate_count == 3 ? 'selected' : ''}}>3</option>
                                <option value="4" {{request()->paginate_count == 4 ? 'selected' : ''}}>4</option>
                                <option value="5" {{request()->paginate_count == 5 ? 'selected' : ''}}>5</option>
                                <option value="6" {{request()->paginate_count == 6 ? 'selected' : ''}}>6</option>
                                <option value="7" {{request()->paginate_count == 7 ? 'selected' : ''}}>7</option>
                                <option value="8" {{request()->paginate_count == 8 ? 'selected' : ''}}>8</option>
                                <option value="9" {{request()->paginate_count == 9 ? 'selected' : ''}}>9</option>
                                <option value="10" {{request()->paginate_count == 10 ? 'selected' : ''}}>10</option>
                            </select>
                        </div>

                        <div class="col-md-3 m-1 text-right">
                            <input type="submit" value="جستوجو" class="btn form-control btn-info rounded btn-sm" name="search_btn" id="search_btn">
                        </div>
                    </div>
                </form>
            </div>



            <div class="col-md-12 mx-auto text-center my-3">
                <table class="table table-hover table-bordered p-3 table-sm ">
                    <caption class="text-center fw-bold text-dark table-sm"> لیست محصولات قابل فروش و موجود در انبار فروشگاه دیجیتال </caption>
                    <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام محصول</th>
                            <th>مدل پردازنده</th>
                            <th>حافظه رم</th>
                            <th>ظرفیت حافظه داخلی</th>
                            <th>مدل پردازنده گرافیکی</th>
                            <th>حافظه گرافیکی</th>
                            <th>اندازه صفحه نمایش</th>
                            <th>دقت صفحه نمایش</th>
                            <th>درایو نوری</th>
                            <th>سیستم عامل</th>
                            <th>قیمت (تومان)</th>
                            <th>مقایسه محصولات</th>
                            <th>تنظیمات</th>
                        </tr>
                    </thead>

                    @foreach($posts as $row => $post)

                        <tbody>
                            <tr>
                                <td>{{++$row}}</td>
                                <td><a href="{{route('app.post.show',$post->slug)}}">{{$post -> title}}</a></td>
                                <td>{{$post -> processormodel}}</td>
                                <td>{{$post -> rammemory}}</td>
                                <td>{{$post -> internalmemorycapacity}}</td>
                                <td>{{$post -> gpumodel}}</td>
                                <td>{{$post -> graphicmemory}}</td>
                                <td>{{$post -> screensize}}</td>
                                <td>{{$post -> screenaccuracy}}</td>
                                <td>{{$post -> opticaldrive}}</td>
                                <td>{{$post -> operatingsystem}}</td>
                                <td>{{$post -> price}}</td>
                                <td>
                                    <input type="checkbox" name="kala" id="kala">
                                </td>
                                <td>
                                    <a href="{{route('admin.post.edit',$post->id)}}" class="btn btn-sm rounded btn-info m-1">ویرایش محصول</a>
                                    <a href="" class="btn btn-sm rounded btn-danger m-1">حذف محصول</a>
                                </td>
                            </tr>
                        </tbody>

                    @endforeach
                </table>
                {{$posts->appends(\Illuminate\Support\Facades\Request::all())->render()}}
            </div>
        </div>
    </div>

@endsection
