<?php
namespace App\Services;

use App\Http\Requests\StoreCartItemRequest;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CartService{
  protected $request;
  public function setRequest(StoreCartItemRequest $request){
    $this->request = $request;
  }
  public function firstVisit(){
    $info = $this->request->validated();
    $token = Str::uuid();
    $guest_cookie = cookie('guest_token', $token, '120');
    $cart = Cart::create(['user_id' => null, 'guest_token' => $token]);
    $info['cart_id'] = $cart->id;
    $item = CartItem::create($info);
    return response()->json(['New cart created' => $item])->cookie($guest_cookie);
  }
  public function insertItem($info){
    $item = 
    CartItem::where('cart_id', $info['cart_id'])
    ->where('product_id',$info['product_id'])->first();
    if($item){
      $item['quantity'] += 1;
      $item->save();
    }
    else{
      $item = CartItem::create($info);
    }
    return response()->json(['item' => $item]);
  }
  public function tempToNormalCart(string $guest_token){
    $cart = Cart::where('guest_token', $guest_token)->firstOrFail();
    if($cart){
      $cart['guest_token'] = null;
      if(!isset($cart['user_id'])){
        $cart['user_id'] = Auth::guard('sanctum')->id();
      }
      $cart->save();
      return $cart;
    }
  }
  public function subsequent(string $guest_token){
    $info = $this->request->validated();
    $cart = Cart::where('guest_token', $guest_token)->firstOrFail();
    if($cart){
      $info['cart_id'] = $cart->id;
      return $this->insertItem($info);
    }
    return response()->json(['error' => 'cart not found']);
  }
  public function loggedGuest(int $id ,string $token){
    $temp_cart = Cart::where('guest_token', $token)->first();
    $cart = Cart::where('user_id', $id)->first();
    if($cart && $temp_cart){
      $this->mergeCarts($temp_cart, $cart);
    }
    else if(!$cart && $temp_cart){
      $this->loggedGuestRequest($token);
    }
  }
  public function loggedUser(int $id){
    $cart = Cart::where('user_id', $id)->firstOrCreate(['user_id' => $id], ['user_id' => $id]);
    $info = $this->request->validated();
    $info['cart_id'] = $cart->id;
    return $this->insertItem($info);
  }
  public function loggedGuestRequest(string $guest_token){
    $info = $this->request->validated();
    $cart = $this->tempToNormalCart($guest_token);
    if($cart){
      $info['cart_id'] = $cart->id;
      return $this->insertItem($info);
    }
    return response()->json(['error' => 'cart not found']);
  }
  public function mergeCarts(Cart $temp_cart, Cart $cart){
    $items_1 = collect($cart->items);
    $keyed = collect($temp_cart->items)->keyBy('product_id');
    foreach ($items_1 as $item_1) {
      if($keyed->get($item_1['product_id'])){
        $item_1['quantity'] = $keyed->get($item_1['product_id'])['quantity'] + $item_1['quantity'];
        // logic is good, needs refactor & to hit the DB
      }
    }
      // $temp_cart->delete();
    }
    // dump('Items');
    // dump($items_1);
    // dump('temp_items');
    // dump($items_2);
    // dd('merge logic');
}