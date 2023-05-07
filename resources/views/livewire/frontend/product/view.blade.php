<div class="container my-5 p-5">
    <div class="row">
        <div class="col-md-4">
            @if($product->productImages)
            <img width="100%" src="{{ asset($product->productImages[0]->image)}}" alt="Img" srcset="">
            @else
            No Image Added
            @endif

        </div>
        <div class="col-md-8">
            <div class="container">
                <div class="row">
                    <div class="container">


                            @if($product->quantity)
                        <h6 class="text-black float-right mt-3"><b>In Stock </b></h6>
                            @else
                        <h6 class="text-black float-right mt-3 " style="text:red !important;"><b>Out Of Stock </b></h6>
                            @endif

                    </div>
                    <div class="col-md-12">
                        <h2 class="text-black float-left mt-3"> <b>{{ $product->name}}</b></h2>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <h3 class="text-black float-left mt-3"><b>Price</b> <br> ${{ $product->original_price}}</h3>
                    </div>

                    <!-- <div class="col-md-12">
                        @if($product->productColors)
                        @foreach($product->productColors as $colorItem)
                        <input type="radio" name="colorSelection" value="{{$colorItem->id}}" /><b>
                            {{ $colorItem->color->name}}</b>


                        @endforeach
                        @endif

                    </div> -->
                    <br><br><br>
                    <div class="col-md-12">
                        <p class="text-black float-left mt-3"> <b>Description</b>
                            <br> {{ $product->description}}</p>
                    </div>


                    <div class="col-md-12 mt-120">

                        <button type="button" wire:click="addToCart({{ $product->id }})" class="btn btn-success bg-green w-30 float-center"
                            style="height:10px !important;text-align:center !important;">

                            Add To Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
