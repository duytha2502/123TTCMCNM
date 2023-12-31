@extends('admin.theme.layout')
@section('content')
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
     <label for="idcat">Category:</label>
        <select name="idcat" class="form-control">
            <option value=''>---Vui lòng chọn danh mục sản phẩm---</option>>
            @foreach ($category as $key =>$cat)
            <option value="{{$cat->id}}">{{($key+1).'. '.$cat->name}}</option>
            @endforeach
        </select>
   </div>
    <div class="form-group">
     <label for="name">Name:</label>
     <input type="text" class="form-control" name="name">
   </div>
   <div class="form-group">
     <label for="image">Image:</label>
     <input type="file" class="form-control"name="image" value="" />
   </div>
   <div class="form-group">
    <label for="price">Price:</label>
    <input type="text" class="form-control"name="price">
  </div>
  <div class="form-group">
    <label for="discount">Discount:</label>
    <input type="text" class="form-control"name="discount">
  </div>
  <div class="form-group">
    <label for="content">Desciption:</label>
    <textarea class="form-control" id="des" name="description"></textarea>
    <script>CKEDITOR.replace('des');</script>
  </div>
  <div class="form-group" >
    <label>Bảo Hành</label>
    <select name="baohanh" class="form-control">
      <option name="baohanh">0 Tháng</option>
         <option name="baohanh">12 Tháng</option>
         <option name="baohanh">24 Tháng</option>
   </select>
</div>
  <div class="form-group" >
    <label>Sản Phẩm Mới</label>
    <select name="size" class="form-control">
         <option name="size" value="S">S</option>
         <option name="size" value="M">M</option>
         <option name="size" value="X">X</option>
         <option name="size" value="XL">XL</option>
         <option name="size" value="XXL">XXL</option>
         <option name="size" value="XXXL">XXXL</option>

   </select>
</div>
  <div class="">
    <label for="trangthai">Trạng Thái:</label>
    <select name="trangthai" class="form-control">
        <option value=1 >Còn Hàng</option>
        <option value="0" >Hết Hàng</option>
  </select>
  </div>


   <button type="submit" name="btn_addproduct"class="btn btn-primary">Thực Hiện</button>
 </form>
 </div>
 @stop
