<?php

namespace App\Http\Controllers\Fronted;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;

class FrontedController extends Controller
{
    public function index()
    {
        $sliders=Slider::where('status','0')->get();
        $newArrivalProducts=Product::latest()->take(3)->get();
        return view('frontend.index',compact('sliders','newArrivalProducts'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function newArrival()
    {
        $newArrivalProducts=Product::latest()->take(10)->get();
        return view('frontend.pages.new-arrival',compact('newArrivalProducts'));
    }

    public function categories()
    {
        $categories=Category::where('status','0')->get();
        return view('frontend.collections.category.index',compact('categories'));
    }

    public function products($category_slug)
    {
        $category=Category::where('slug',$category_slug)->first();
        if ($category) {

            $products=$category->products()->get();
            return view('frontend.collections.products.index',compact('products','category'));
        }else{
            return redirect()->back();
        }
    }

    public function productView(string $category_slug, string $product_slug)
    {
        $category=Category::where('slug',$category_slug)->first();
        if ($category) {

            $product=$category->products()->where('slug',$product_slug)->where('status','0')->first();
            if ($product) {
                return view('frontend.collections.products.view',compact('product','category'));
            }else{
                return redirect()->back();
            }

        }else{
            return redirect()->back();
        }
    }

    public function thankyou()
    {
        return view('frontend.thank-you');
    }




}
