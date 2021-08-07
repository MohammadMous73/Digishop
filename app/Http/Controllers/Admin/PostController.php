<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Post;
//use Faker\Provider\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    //list show all post
    public  function index(Request $request)
    {
        //$posts = Post::paginate(3);

        $posts = Post::orderBy('id','desc');

        if (isset($request->title) && $request -> title != '')
        {
            $posts = $posts -> where('title','like','%'.$request -> title . '%');
        }
        if (isset($request->processormodel) && $request -> processormodel != '')
        {
            $posts = $posts -> orwhere('processormodel','like','%'.$request -> processormodel . '%');
        }
        if (isset($request->rammemory) && $request -> rammemory != '')
        {
            $posts = $posts -> orwhere('rammemory','like','%'.$request -> rammemory . '%');
        }
        if (isset($request->internalmemorycapacity) && $request -> internalmemorycapacity != '')
        {
            $posts = $posts -> orwhere('internalmemorycapacity','like','%'.$request -> internalmemorycapacity . '%');
        }
        if (isset($request->gpumodel) && $request -> gpumodel != '')
        {
            $posts = $posts -> orwhere('gpumodel','like','%'.$request -> gpumodel . '%');
        }
        if (isset($request->graphicmemory) && $request -> graphicmemory != '')
        {
            $posts = $posts -> orwhere('graphicmemory','like','%'.$request -> graphicmemory . '%');
        }
        if (isset($request->screensize) && $request -> screensize != '')
        {
            $posts = $posts -> orwhere('screensize','like','%'.$request -> screensize . '%');
        }
        if (isset($request->screenaccuracy) && $request -> screenaccuracy != '')
        {
            $posts = $posts -> orwhere('screenaccuracy','like','%'.$request -> screenaccuracy . '%');
        }
        if (isset($request->opticaldrive) && $request -> opticaldrive != '')
        {
            $posts = $posts -> orwhere('opticaldrive','like','%'.$request -> opticaldrive . '%');
        }
        if (isset($request->operatingsystem) && $request -> operatingsystem != '')
        {
            $posts = $posts -> orwhere('operatingsystem','like','%'.$request -> operatingsystem . '%');
        }
        if (isset($request->paginate_count) && $request -> paginate_count != '')
        {
            $posts = $posts -> paginate($request -> paginate_count);
        }
        else
        {
            $posts = $posts->paginate(2);
        }


        return view('admin.pages.post.list',compact('posts'));
    }


    //show form for add
    public function create()
    {
        return view('admin.pages.post.add');
    }


    //save data to db
    public  function store(Request $request)
    {
        $request->validate([
           'title'                      =>    'required|unique:posts' ,
           'processormodel'             =>    'required' ,
           'rammemory'                  =>    'required' ,
           'internalmemorycapacity'     =>    'required' ,
           'gpumodel'                   =>    'required' ,
           'graphicmemory'              =>    'required' ,
           'screensize'                 =>    'required',
           'screenaccuracy'             =>    'required',
           'opticaldrive'               =>    'required',
           'operatingsystem'            =>    'required',
           'price'                      =>    'required|min:7'
        ]);
        $file_name = time().'.'.$request->file->extension();

        $file_address = 'upload/'.$file_name;

       Image::make($request->file)->resize(300,300)->save($file_address);

//        if ($request->file->move(public_path('upload'),$file_name))
//        {}
            $post = new Post();

            $post   ->  title                       =   $request -> title;
            $post   ->  processormodel              =   $request -> processormodel;
            $post   ->  rammemory                   =   $request -> rammemory;
            $post   ->  internalmemorycapacity      =   $request -> internalmemorycapacity;
            $post   ->  gpumodel                    =   $request -> gpumodel;
            $post   ->  graphicmemory               =   $request -> graphicmemory;
            $post   ->  screensize                  =   $request -> screensize;
            $post   ->  screenaccuracy              =   $request -> screenaccuracy;
            $post   ->  opticaldrive                =   $request -> opticaldrive;
            $post   ->  operatingsystem             =   $request -> operatingsystem;
            $post   ->  image                       =   $file_address;
            $post   ->  price                       =   $request -> price;

            try {
                $post   ->  save();
            }
            catch (\Exception $exception)
            {
                return redirect()->back()->with('warning',$exception->getMessage());
            }

            return redirect()->route('admin.post.list')->with('success','کالا در سبد محصولات ثبت گردید');



    }


    //show form edit data in db
    public function edit(Post $post)
    {
        //$post = Post::firstWhere('id',$id);
        return view('admin.pages.post.edit',compact('post'));
    }


    //update form in db
    public function update(Request $request,Post $post)
    {
        //$post = Post::firstWhere('id',$id);
        $request->validate([
            'title'                      =>    'required|unique:posts,title,'.$post->id ,
            'processormodel'             =>    'required' ,
            'rammemory'                  =>    'required' ,
            'internalmemorycapacity'     =>    'required' ,
            'gpumodel'                   =>    'required' ,
            'graphicmemory'              =>    'required' ,
            'screensize'                 =>    'required',
            'screenaccuracy'             =>    'required',
            'opticaldrive'               =>    'required',
            'operatingsystem'            =>    'required',
            'file'                       =>    'required|mimes:png,jpg|max:50000',
            'price'                      =>    'required|min:7'
        ]);

        $file_name = time().'.'.$request->file->extension();

        $file_address = 'upload/'.$file_name;

        Image::make($request->file)->resize(300,300)->save($file_address);





        $post   ->  title                       =   $request -> title;
        $post   ->  processormodel              =   $request -> processormodel;
        $post   ->  rammemory                   =   $request -> rammemory;
        $post   ->  internalmemorycapacity      =   $request -> internalmemorycapacity;
        $post   ->  gpumodel                    =   $request -> gpumodel;
        $post   ->  graphicmemory               =   $request -> graphicmemory;
        $post   ->  screensize                  =   $request -> screensize;
        $post   ->  screenaccuracy              =   $request -> screenaccuracy;
        $post   ->  opticaldrive                =   $request -> opticaldrive;
        $post   ->  operatingsystem             =   $request -> operatingsystem;
        $post   ->  image                       =   $file_address;
        $post   ->  price                       =   $request -> price;

        try {
            $post   ->  save();
        }
        catch (\Exception $exception)
        {
            return redirect()->back()->with('warning',$exception->getMessage());
        }

        return redirect()->route('admin.post.list')->with('success','کالای انتخاب شده  ویرایش گردید');
    }
}
