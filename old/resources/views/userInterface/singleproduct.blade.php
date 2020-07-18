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
 
  #total {
    width: 30%;
    margin-right: 5px;
  }
}
</style>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="zoom">
          <img id="new_img" class="w-20 img-responsive" src="{{$results->data->image}}" >
        </div>
        
        <div class="row m-3">
        @if($results->data->image =='' || $results->data->color =='')                  
        @else        
        <div class="col-md-3 p-2">
          <button class="btn btn-sm btn-outline-info"  onClick="document.getElementById('new_img').src='{{$results->data->image}}'">{{$results->data->color}}</button> 
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

            <div class="row mt-3 mb-3">
              
              <table>
                <tr class="mb-5">
                  <th>Type</th>
                  <th></th>
                  <th>Price</th>
                </tr>
                <tr>
                  @if($results->data->type =='' || $results->data->price =='')                  
                  @else
                     <td colspan="1" class="pr-5 pt-2 pb-2">
                      <button class="btn btn-sm btn-outline-info" id="100" value="{{$results->data->price}}" onclick={selectType()} style="width: 250px;">{{$results->data->type}}</button>
                    </td>
                    <td colspan="1"></td>
                    <td colspan="1" class="pt-2 pb-2">৳ {{$results->data->price}}</td>                  
                  @endif
                </tr>
                <tr>
                  @if($results->data->type_2 =='' || $results->data->price_2 =='')                  
                  @else
                     <td class="pr-5 pt-2 pb-2">
                      <button class="btn btn-sm btn-outline-info" id="95" value="{{$results->data->price_2}}" onclick={selectType()} style="width: 250px;">{{$results->data->type_2}}</button>
                    </td>
                     <td></td>
                    <td class="pt-2 pb-2">৳ {{$results->data->price_2}}</td>
                  @endif
                </tr>

                <tr>
                  @if($results->data->type_3 =='' || $results->data->price_3 =='')                  
                  @else
                     <td class="pr-5 pt-2 pb-2">
                      <button class="btn btn-sm btn-outline-info" id="65" value="{{$results->data->price_3}}" onclick={selectType()} style="width: 250px;">{{$results->data->type_3}}</button>
                    </td>
                    <td ></td>
                    <td class="pt-2 pb-2">৳ {{$results->data->price_3}}</td>                  
                  @endif
                </tr>

                <tr>
                  @if($results->data->type_4 =='' || $results->data->price_4 =='')                  
                  @else
                     <td class="pr-5 pt-2 pb-2">
                      <button class="btn btn-sm btn-outline-info" id="65" value="{{$results->data->price_4}}" onclick={selectType()} style="width: 250px;">{{$results->data->type_4}}</button>
                    </td>
                    <td ></td>
                    <td class="pt-2 pb-2">৳ {{$results->data->price_4}}</td>                  
                  @endif
                </tr>

                <tr>
                  @if($results->data->type_5 =='' || $results->data->price_5 =='')                  
                  @else
                     <td class="pr-5 pt-2 pb-2">
                      <button class="btn btn-sm btn-outline-info" id="65" value="{{$results->data->price_5}}" onclick={selectType()} style="width: 250px;">{{$results->data->type_5}}</button>
                    </td>
                    <td ></td>
                    <td class="pt-2 pb-2">৳ {{$results->data->price_5}}</td>                  
                  @endif
                </tr>

                <tr>
                  @if($results->data->type_6 =='' || $results->data->price_6 =='')
                  @else
                     <td class="pr-5 pt-2 pb-2">
                      <button class="btn btn-sm btn-outline-info" id="65" value="{{$results->data->price_6}}" onclick={selectType()} style="width: 250px;">{{$results->data->type_6}}</button>
                    </td>
                    <td ></td>
                    <td class="pt-2 pb-2">৳ {{$results->data->price_6}}</td>
                  @endif
                </tr>

              </table>
                
            </div>

            <form action="{{route('cart.add')}}" method="post">
              {{csrf_field()}}
              <div class="row">
                <div class="price-sec">
                  <h5>Calculate: </h5>
                  <div class="row">
                    <div class="col-md-4">
                      <input id="yards" type="text" class="form-control input-sm" placeholder="1 Yards" name="qty" style="width: 75px">
                    </div>
                    <div class="col-md-4">
                      <input class="btn btn-warning" value="Update" onclick={calculate()} style="width: 85px;">
                    </div>
                    <div class="col-md-4">
                      <!-- <label for="total" style="margin-left:30px ;">৳ :</label> -->
                      <input id="total" type="text" class="form-control input-sm" placeholder="100 Tk" name="pdtPrice" readonly style="width: 75px">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="d-flex">
                    <div class="quantity">
                      <!-- <input  type="hidden" name="qty" value="1"> -->
                      <input type="hidden" name="pdtId" value="{{$results->data->id}}">
                      <input type="hidden" name="pdtName" value="{{$results->data->name}}">
                      <!-- <input type="hidden" name="pdtPrice" value="100"> -->
                    </div>
                    <button class="btn text-primary pl-4 pr-4 m-0">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@include('/userInterface/layout/footer')

<script type="text/javascript">
  let userSel;

  $("button").click(function() {
    userSel = $(this).val();
    document.getElementById("total").value= userSel; 
  });

  const selectType = () =>{
      document.getElementById("yards").value= "";   
  }

  const calculate = () => {
    const yards = document.getElementById("yards").value;
    const newChange = yards*userSel;
    document.getElementById("total").value=newChange;
  }
</script>