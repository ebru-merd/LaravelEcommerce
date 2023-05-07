<div class="container my-5">
    <h2 class="text-left text-black-bold mb-5"><b style="color:black !important;">My Cart</b></h2>
    <hr>
    <div class="shadow-sm bg-white p-3">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Products</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantity
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total
                    </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    </th>

                </tr>
            </thead>
            <tbody>

                @forelse ($cart as $cartItem)
                @if($cartItem->product)
                <tr>
                    <td class="text-xs font-weight mb-0"><img src="{{ asset($cartItem->product->productImages[0]->image) }}" style="width:50px; height:50px;" alt=""><a href="{{ url('collections/'.$cartItem->product->category->slug.'/'.$cartItem->product->slug) }}" style="color:black ;">  {{ $cartItem->product->name }}</a>  </td>

                    <td class="text-xs font-weight mb-0">${{ $cartItem->product->original_price}}</td>


                    <td class="text-xs font-weight mb-0 ">{{ $cartItem->quantity}}</td>

                    <td class="text-xs font-weight mb-0">${{ $cartItem->product->original_price * $cartItem->quantity}}</td>
                    @php $totalPrice +=( $cartItem->product->original_price * $cartItem->quantity)  @endphp

                    <td class="text-xs font-weight mb-0">
                        <button type="button"  wire:click="removeCartItem({{ $cartItem->id }})" wire:loading.attr="disabled" style="border:1px !important; background-color:red !important; color:white !important; ">
                        <span style="font-size:13px !important;" wire:loading.remove wire:target="removeCartItem({{ $cartItem->id }})">
                        <i class="far fa-trash-alt me-2" style="font-size:13px !important;"></i>Remove
                        </span>

                        <span wire:loading wire:target="removeCartItem({{ $cartItem->id }})">
                        <i class="far fa-trash-alt me-2"></i>Removing
                        </span>
                        </button>
                    </td>


                </tr>
                @endif
                @empty
                <div style="color:red;">No Cart Items Available</div>
                @endforelse

            </tbody>

        </table>
    </div>

    <div class="row mt-5">
        <div class="col-md-8">

        </div>
        <div class="col-md-4">
            <div class="shadow-sm bg-white p-3">
                <h4><b style="color:black !important;">Total:</b>
                <b style="color:black !important;"><span class="float-end">${{ $totalPrice}}</span></b>
                </h4>
                <hr>

                <a href="{{ url('/checkout')}}" class="btn btn-warning w-100" style="height:3px !important;">Checkout</a>
            </div>
        </div>
    </div>
</div>
