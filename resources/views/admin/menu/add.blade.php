@extends('admin.users.main')

@section('header')
<script src="{{url('public/ckeditor4/ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
<form action="" method="POST">
    <div class="card-body">

      <div class="form-group">
        <label for="menu">Tên Danh Mục</label>
        <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục">
      </div>

      <div class="form-group">
        <label for="menu">Danh Mục</label>
        <select class="form-control" name="parent_id">
            <option value="0">Danh Mục Cha</option>

            @foreach ($menus as $menu )
            <option value="{{$menu->id}}">{{$menu->name}}</option>

            @endforeach
        </select>
      </div>
      

        <div class="form-group">
                <label>Mô tả </label>
                <textarea name="description" class="form-control" ></textarea>
            </div>

        <div class="form-group">
            <label>Mô tả Chi Tiết</label>
            <textarea name="content" id="content" class="ckeditor form-control" ></textarea>
        </div>
        

            <div class="form-group">
                <label>Activate</label>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                  <label for="active" class="custom-control-label">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                  <label for="no_active" class="custom-control-label">No</label>
                </div>
              </div>
              {{ csrf_field() }}
        
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

@endsection

@section('footer')
<script>
  CKEDITOR.replace('content');
</script>
@endsection