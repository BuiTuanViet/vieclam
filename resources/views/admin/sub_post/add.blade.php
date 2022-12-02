@extends('admin.layout.admin')

@section('title', 'Thêm mới '.$typePost)

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Thêm mới {{ $typePost }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">{{ $typePost }}</a></li>
            <li class="active">Thêm mới</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- form start -->
            <form role="form" action="{{ route('sub-posts.store', ['typePost' => $typePost]) }}" method="POST"  enctype="multipart/form-data">
                {!! csrf_field() !!}
                {{ method_field('POST') }}
                <div class="col-xs-12 col-md-8">

                    <!-- Nội dung thêm mới -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nội dung</h3>
                        </div>
                        <!-- /.box-header -->

                        <div class="box-body">
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">title</label>
                                <input type="text" class="form-control" name="title" placeholder="Tiêu đề" required>
                            </div>
                            @if (in_array('content', explode(',', $typeSubPost->input_default_used)))
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nội dung</label>
                                <textarea class="editor" id="content" name="content" rows="10" cols="80"/></textarea>
                            </div>
                            @endif

                            <div class="form-group">
                                <label for="exampleInputEmail1">slug</label>
                                <input type="text" class="form-control" name="slug" placeholder="đường dẫn tĩnh" >
                            </div>

                                @if (in_array('description', explode(',', $typeSubPost->input_default_used)))
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mô tả</label>
                                <textarea rows="4" class="form-control" name="description"
                                          placeholder=""></textarea>
                            </div>
                                @endif
                            
                            @if (in_array('image', explode(',', $typeSubPost->input_default_used)) > 0)
                            <div class="form-group">
                                <input type="file" name="image" accept="image/*"  value="Chọn ảnh"
                                       size="20"/>
                                <img src="" width="80" height="70"/>
                                {{--                                <input name="image" type="hidden" value=""/>--}}
                            </div>
                            @endif

                            <div class="form-group" style="color: red;">
                                @if ($errors->has('title'))
                                    <label for="exampleInputEmail1">{{ $errors->first('title') }}</label>
                                @endif
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>

                <div class="col-xs-12 col-md-4">

                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Chọn template</label>
                                <select class="form-control" name="template">
                                    <option value="default">Mặc định</option>
                                    @foreach($templates as $template)
                                        <option value="{{ $template->slug }}">{{ $template->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>

                    <!-- Bổ sung -->
                    <div class="box box-primary">
                        <div class="box-body">
                            @foreach ($typeInputs as $typeInput)
                            <div class="form-group">
                                <label>{{ $typeInput->title }}</label>
                                @if($typeInput->type_input == 'one_line')
                                <input type="text" class="form-control" name="{{$typeInput->slug}}" placeholder="{{ $typeInput->placeholder }}" />
                                @endif

                                @if($typeInput->type_input == 'multi_line')
                                <textarea rows="4" class="form-control" name="{{$typeInput->slug}}" placeholder="{{ $typeInput->placeholder }}"></textarea>
                                @endif

                                @if($typeInput->type_input == 'image')
                                <input type="file" name="image" accept="image/*"  value="Chọn ảnh"
                                       size="20"/>
                                <img src="" width="80" height="70"/>
                                <input name="{{$typeInput->slug}}" type="hidden" value=""/>
                                @endif
                                
                                @if($typeInput->type_input == 'editor')
                                <textarea class="editor" id="{{$typeInput->slug}}" name="{{$typeInput->slug}}" rows="10" cols="80"/></textarea>
                                @endif
                                
                                @if(!in_array($typeInput->type_input, array('one_line', 'multi_line', 'image', 'editor'), true))
                                    <select name="{{$typeInput->slug}}" class="form-control">
                                        @foreach(\App\Entity\SubPost::showSubPost($typeInput->type_input, 100) as $subPost)
                                            <option value="{{ $subPost->slug }}">{{ $subPost->title }}</option>
                                        @endforeach
                                    </select>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                    <!-- /.box -->

                </div>
            </form>
        </div>
    </section>
@endsection

