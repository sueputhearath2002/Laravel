@extends("layout.master")
@section("content")
<form action="{{ route("save.product") }}" method="POST">
    @csrf
    <div class="row mb-3 mt-3">
        <label for="product" class="form-label col-sm-3">Product Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="product_name">
        </div>
    </div>
    <div class="row mb-3">
        <label for="product" class="form-label col-sm-3">Quantity</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="qty">
        </div>
    </div>
    <div class="row mb-3">
        <label for="product" class="form-label col-sm-3">Unit Price</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="unit_price">
        </div>
    </div>
    <div class="row mb-3">
        <label for="product" class="form-label col-sm-3">Discount ($)</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="discount" value="0">
        </div>
    </div>
    <div class="row mb-3" >
        <label for="product" class="form-label col-sm-3">Total</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" name="discount"  disabled value={{ $total }}>
        </div>
    </div>
   
   
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection