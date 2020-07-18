@include('/userInterface/layout/header')
@include('/userInterface/layout/navbar')
<style>
  td{
    border:none;
  }
  table, button {
    width: 100%;
    border:none;
  }
 
  #totalprice {
    width: 30%;
    margin-right: 5px;
  }
}
</style>

  <div class="container">
    <div class="row">
      <div class="col-md-6 pt-5">
        <div class=" d-flex justify-content-center">
          <img id="new_img" class="w-20 img-responsive" src="{{$results->data->image}}" width="250" height="300">
        </div>
        
        <div class="row m-3">
        @if($results->data->image_1 =='' || $results->data->color_1 =='')                  
        @else        
        <div class="col-md-3 p-2">
          <button class="btn btn-sm btn-outline-info"  onClick="document.getElementById('new_img').src='{{$results->data->image_1}}'">{{$results->data->color_1}}</button> 
        </div>
        @endif

        @if($results->data->image_2 =='' || $results->data->color_2 =='')                  
        @else
        <div class="col-md-3 p-2">
          <button class="btn btn-sm btn-outline-info"  onClick="document.getElementById('new_img').src='{{$results->data->image_2}}'">{{$results->data->color_2}}</button> 
        </div>
        @endif

        @if($results->data->image_3 =='' || $results->data->color_3 =='')                  
        @else
        <div class="col-md-3 p-2">
          <button class="btn btn-sm btn-outline-info"  onClick="document.getElementById('new_img').src='{{$results->data->image_3}}'">{{$results->data->color_3}}</button>
        </div>
        @endif

        @if($results->data->image_4 =='' || $results->data->color_4 =='')                  
        @else
        <div class="col-md-3 p-2">
          <button class="btn btn-sm btn-outline-info"  onClick="document.getElementById('new_img').src='{{$results->data->image_4}}'">{{$results->data->color_4}}</button>
        </div>
        @endif
        
        @if($results->data->image_5 =='' || $results->data->color_5 =='')                  
        @else
        <div class="col-md-3 p-2">
          <button class="btn btn-sm btn-outline-info"  onClick="document.getElementById('new_img').src='{{$results->data->image_5}}'">{{$results->data->color_5}}</button> 
        </div>
        @endif

        @if($results->data->image_6 =='' || $results->data->color_6 =='')                  
        @else
        <div class="col-md-3 p-2">
          <button class="btn btn-sm btn-outline-info"  onClick="document.getElementById('new_img').src='{{$results->data->image_6}}'">{{$results->data->color_6}}</button> 
        </div>
        @endif
        
        @if($results->data->image_7 =='' || $results->data->color_7 =='')                  
        @else
        <div class="col-md-3 p-2">
          <button class="btn btn-sm btn-outline-info"  onClick="document.getElementById('new_img').src='{{$results->data->image_7}}'">{{$results->data->color_7}}</button>
        </div>
        @endif
        
        @if($results->data->image_8 =='' || $results->data->color_8 =='')                  
        @else
        <div class="col-md-3 p-2">
          <button class="btn btn-sm btn-outline-info"  onClick="document.getElementById('new_img').src='{{$results->data->image_8}}'">{{$results->data->color_8}}</button>
        </div>
        @endif
        
        @if($results->data->image_9 =='' || $results->data->color_9 =='')                  
        @else
        <div class="col-md-3 p-2">
          <button class="btn btn-sm btn-outline-info"  onClick="document.getElementById('new_img').src='{{$results->data->image_9}}'">{{$results->data->color_9}}</button>
        </div>
        @endif

        @if($results->data->image_10 =='' || $results->data->color_10 =='')                  
        @else
        <div class="col-md-3 p-2">
          <button class="btn btn-sm btn-outline-info"  onClick="document.getElementById('new_img').src='{{$results->data->image_10}}'">{{$results->data->color_10}}</button>
        </div>
        @endif
      </div> 
      </div>

      <div class="col-md-6 pt-5 pb-5">
        <div class="card border-0">
          <div class="card-body text-secondary">
            <div class="row">
              <h4>{{$results->data->name}}</h4>
            </div>
            <div class="row">
              <h4>৳ {{$results->data->price}}</h4>
            </div>

            
            <form  action="{{route('cart.add')}}" method="post">
              {{csrf_field()}}
              <div class="quantity mb-2 mt-2">
                
                <input type="hidden" name="pdtId" value="{{ $results->data->id }}">
                <input  type="hidden" name="pdtName" value="{{$results->data->name}}">
                <input type="hidden" name="pdtPrice" value="{{$results->data->price}}">
                <input id="spinner" type="number" class="form-control input-sm" step="0.25" placeholder=".25" name="qty" style="width: 75px">
              </div>
              <!-- <input  type="number" name="qty" placeholder=".25"> -->
              
              <button class="btn text-primary pl-4 pr-4 m-0" style="width: 75px">
                  <i class="fa fa-cart-plus" aria-hidden="true"></i>
              </button>
            </form> 
          </div>
        </div>
      </div>
    </div>
  </div>
@include('/userInterface/layout/footer')

<script type="text/javascript">
  var initialValue = 0.25;
  var $spinner = $("#spinner");

  function setDefaultValue() {
    $(this).val(initialValue);
    $(this).off("input", setDefaultValue);
  }

  $spinner.on("input", setDefaultValue);
</script>