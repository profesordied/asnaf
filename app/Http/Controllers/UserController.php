<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
// use Usernotnull\Toast\Concerns\WireToast;

class UserController extends Controller
{
    // use WireToast;
    /**
     * Display a listing of the resource.
     */
    public function login_page()
    {
        return view('auth.login');
    }
    public function regiser_page()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'remember' => 'nullable|string'
        ]);
        $remember = isset($data['remember']);
        if (auth()->attempt(['email' => $data['email'], 'password' => $data['password']], $remember)) {
            $request->session()->regenerate();

            $saved_items = json_decode(Cookie::get('cart_items'));

            if ($saved_items != null) {
                foreach ($saved_items as $item) {
                    $new_cart_item = new CartItem();
                    $new_cart_item->cart_id = auth()->user()->cart->id;
                    $new_cart_item->product_id = $item->product_id;
                    $new_cart_item->quantity = $item->quantity;
                    $new_cart_item->save();
                }
                cookie()->queue(cookie()->forget('cart_items'));
            }

            // toast()->success('شما با موفقیت وارد حساب خود شدید!', 'موفق!')->pushOnNextPage();
            return redirect()->route('dashboard');
        } else {
            // toast()->danger('ایمیل یا رمز عبور وارد شده صحیح نمی باشند!', 'خطا!')->pushOnNextPage();
            return redirect()->route('login');
        }
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:users,email',
            'f_name' => 'required',
            'l_name' => 'required',
            'fa_name' => 'required',
            'ettehadieh' => 'required',
            'id_code' => 'required|max:10|confirmed',
            'birth_date' => 'required',
            'id_shenaseh' => 'required',
            'sadereh' => 'required',
            'senph_province' => 'required',
            'address' => 'required',
            'plaque' => 'required',
            'phone' => 'required',
            'gender' => 'required',
        ]);

        $user = new User;
        $user->f_name = $data['f_name'];
        $user->l_name = $data['l_name'];
        $user->email = $data['email'];
        $user->password = $data['password'];


        $user->save();
        auth()->login($user);

        $cart = new Cart();
        $cart->user_id = $user->id;
        $cart->save();

        // toast()->success('حساب کاربری شما با موفقیت ساخته شد!', 'خوش آمدید!')->pushOnNextPage();
        return redirect()->route('dashboard');
    }

    public function logout()
    {
        auth()->logout();

        // toast()->success('شما با موفقیت از حساب خود خارج شدید!', 'موفق!')->pushOnNextPage();
        return redirect('/');
    }

    public function dashboard()
    {
        // $user = auth()->user();
        // return view('dashboard.dashboard', ['user' => $user]);
        return view('dashboard.dashboard');
    }

    public function account_page()
    {
        return view('dashboard.account');
    }

    public function wishlist_page()
    {
        $user = auth()->user();
        return view('dashboard.wishlist', ['user' => $user]);
    }

    public function cart_page()
    {
        $cart_items = auth()->user()->cart->cart_items;

        $user = auth()->user();
        return view('dashboard.cart', ['user' => $user, 'cart_items' => $cart_items]);
    }

    public function orders_page()
    {
        $user = auth()->user();
        return view('dashboard.orders', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = auth()->user();
        return view('dashboard.edit-account', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $request->validate([
            'f_name' => 'required|min:3',
            'l_name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:11|max:11',
            'province' => 'required|min:2',
            'city' => 'required|min:2',
            'street' => 'required|min:2',
            'alley' => 'required|min:2',
            'plaque' => 'required|min:2',
            'post_code' => 'required|min:2',
        ]);

        $user = auth()->user();
        if (isset($request->base64_image)) {
            $base64_image = $request->base64_image;
            list($type, $data) = explode(';', $base64_image);
            list(, $data) = explode(',', $data);
            $data = base64_decode($data);

            $fileName = $user->id . '-' . uniqid() . '.jpeg';

            Storage::put('public/avatars/' . $fileName, $data);

            $oldAvatar = $user->avatar;

            $user->avatar = $fileName;
        }
        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->province = $request->province;
        $user->city = $request->city;
        $user->street = $request->street;
        $user->alley = $request->alley;
        $user->plaque = $request->plaque;
        $user->post_code = $request->post_code;
        $user->save();

        if (isset($request->base64_image)) {
            if ($oldAvatar != '/img/fallback-avatar.jpg') {
                Storage::delete(str_replace('/storage/', 'public/', $oldAvatar));
            }
        }

        // toast()->success('تغییرات حساب شما با موفقیت ذخیره شد!', 'موفق!')->pushOnNextPage();
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
