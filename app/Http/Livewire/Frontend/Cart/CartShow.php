<?php

namespace App\Http\Livewire\Frontend\Cart;

use Livewire\Component;
use App\Models\Cart;

class CartShow extends Component
{
    public $cart,$totalPrice=0;
    public function render()
    {
        $this->cart=Cart::where('user_id' ,auth()->user()->id)->get();
        return view('livewire.frontend.cart.cart-show',[
            'cart'=>$this->cart
        ]);
    }
    public function removeCartItem(int $cartId)
    {
      $cartRemoveData= Cart::where('user_id',auth()->user()->id)->where('id',$cartId)->first();
      if ($cartRemoveData) {
        $cartRemoveData->delete();

        $this->emit('CartAddedUpdated');
        $this->dispatchBrowserEvent('message',[
            'text' => 'Remove Succesfully',
            'type' => 'success',
            'status' =>200
        ]);

      }else {
        $this->dispatchBrowserEvent('message',[
            'text' => 'Something Went Wrong!',
            'type' => 'error',
            'status' =>500
        ]);
      }
    }
}
