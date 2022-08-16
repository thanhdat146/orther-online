<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Mail;
use Auth;
use App\slide;
use App\danhmuc;
use App\loaisanpham;
use App\sanpham;
use App\anhsanpham;
use App\donhang;
use App\khachhang;
use App\dondathang;
use App\chitietdonhang;
use Cart;

class HomeController extends Controller
{
    public function getIndexAdmin()
    {
        return view('admin.index');
    }

    public function getlogout()
    {
        Auth::logout();
        return redirect()->intended('login');
    }

    public function timKiem(Request $req)
    {
        $sanpham=sanpham::where('tensp','like','%'.$req->searchinput.'%')->paginate(4);
        $danhmuc=danhmuc::all();
        $loaisanpham=loaisanpham::all();
        return view('pages.shop',compact('sanpham','danhmuc','loaisanpham'));
    }

    public function getSanPhamIndex(){
    	$sanpham=sanpham::all();
        $sanphamhot= sanpham::orderBy('view','desc')->paginate(10);
        $sanphamsale= sanpham::orderBy('sale','desc')->paginate(10);
        $sanphamnew= sanpham::orderBy('id','desc')->paginate(10);
        $maxview= sanpham::max('view');
        $spnoibat= sanpham::where('view',$maxview)->first();
        $loaimonan=loaisanpham::all();
        $danhmuc=danhmuc::all();
        $slide = slide::all();
    	return view('home.home',compact('sanpham','loaimonan','sanphamhot','sanphamsale','sanphamnew','danhmuc','spnoibat','slide'));
    }

    public function getSanPhamShop(){
    	$sanpham=sanpham::all();
        $danhmuc=danhmuc::all();
    	return view('pages.shop',compact('sanpham','danhmuc'));
    }

    public function getSanPhamTheoLoai($type)
    {
    	$sanpham=sanpham::where('id_loai',$type)->paginate(4);
    	$tenloai=loaisanpham::where('id',$type)->first();
    	$danhmuc=danhmuc::all();
    	$loaisanpham=loaisanpham::all();
    	return view('pages.shop',compact('sanpham','danhmuc','loaisanpham','tenloai'));
    }
    public function getSanPhamTheoDM($dm){
        //$tenloai=loaisanpham::where('id_danhmuc',$dm)->get();
        $loaisp=DB::table('loaisanpham')->select('id')->where('id_danhmuc','=',$dm)->get();
        $loai= collect($loaisp)->map(function($x){ return (array) $x; })->toArray(); 
        $sanpham=DB::table('sanpham')->whereIn('id_loai',$loai)->paginate(4);

        $danhmuc=danhmuc::all();
        $loaisanpham=loaisanpham::all();
    	//$sanpham=sanpham::whereIn('id_loai',$tenloai)->get();
    	return view('pages.shop',compact('sanpham','danhmuc','loaisanpham'));
    }

    public function getChiTiet(Request $req){
        $update =sanpham::where('id',$req->id)->first();
        $update->view+=1;
        $update->save();
    	$sanpham=sanpham::where('id',$req->id)->first();
    	$sp_tuongtu=sanpham::where('id_loai',$sanpham->id_loai)->paginate(6);

        $data=[];
        Mail::send('pages.mail', $data, function ($message) {
            $message->from('thanhdat44662@gmail.com', 'ThanhDat');
            $message->to('scsg.dat146@gmail.com', 'Thanh Dat')->subject('Đơn Hàng');
        });
        
    	return view('shop_pages.single_product',compact('sanpham','sp_tuongtu'));
    }
    public function getCart($id){
    	$sanpham=sanpham::where('id',$id)->first(); 
    	Cart::add(array('id'=>$id,'name'=>$sanpham->tensp,'qty'=>1,'price'=>$sanpham->gia,'options'=>array('img'=>$sanpham->hinhanh)));
    	$content=Cart::content();
    	//print_r($content);
    	return redirect()->route('cart');
    }
    public function getCartForm(Request $req,$id){
        $sanpham=sanpham::where('id',$id)->first(); 
        Cart::add(array('id'=>$id,'name'=>$sanpham->tensp,'qty'=>$req->quantity,'price'=>$sanpham->gia,'options'=>array('img'=>$sanpham->hinhanh)));
        $content=Cart::content();
        //print_r($content);
        return redirect()->route('cart');
    }

    public function Cart(){
		$content=Cart::content();
		$total=Cart::subtotal();
		//print_r($content);
    	return view('pages.cart',compact('content','total'));
    }
    public function removeCart($id){
    	Cart::remove($id);
    	return redirect()->route('cart');
    }
    public function updateQty(Request $rq){
    	$id = $rq->id;
		$qty= $rq->qty;
		Cart::update($id, $qty);
		return redirect()->route('cart');
    }
    //checkout
    public function getCheckout()
    {   $content=Cart::content();
        return view('pages.checkout',compact('content'));
    }
    public function postCheckout(Request $req)
    {  
        if(Cart::subtotal()!=0){



        $content=Cart::content();
        $donhang= new donhang;
        $donhang->khachhang = $req->name;
        $donhang->diachi = $req->address;
        $donhang->phone = $req->phone;
        $donhang->email = $req->email;
        $donhang->note = $req->note;
        foreach ($content as $item) {
            $donhang->thongtinhang .= $item->name.' x '.$item->qty.' ';
        }
        $donhang->tongtien = Cart::subtotal();
        $donhang->save();

        $khachhang= new khachhang;
        $khachhang->name = $req->name;
        $khachhang->email = $req->email;
        $khachhang->diachi = $req->address;
        $khachhang->sdt = $req->phone;
        $khachhang->note = $req->note;
        $khachhang->save();

        $dondathang = new dondathang;
        $dondathang->id_khachhang = $khachhang->id;
        $dondathang->date = date('Y-m-d H:i:s');
        $dondathang->tongtien = str_replace(',', '', Cart::total());
        $dondathang->note =  $req->note;
        $dondathang->save();

        if(count($content) > 0){
            foreach ($content as $item) {
                $chitietdonhang = new chitietdonhang;
                $chitietdonhang->id_donhang = $dondathang->id;
                $chitietdonhang->id_sp = $item->id;
                $chitietdonhang->tensp = $item->name;
                $chitietdonhang->soluong = $item->qty;
                $chitietdonhang->dongia = $item->price;
                $chitietdonhang->save();
            }
        }
        $to_name=$req->name;
        $to_mail=$req->email;
        $data=[];
        Mail::send('pages.mail', $data, function ($message) use($to_name,$to_mail) {
            $message->from('thanhdat44662@gmail.com', 'ThanhDat');
            $message->to($to_mail,$to_name)->subject('Đơn Hàng');
        });
        Cart::destroy();
        return redirect()->route('index')->with('alert', 'Đặt Hàng Thành Công!');;
      }
      else {
             return redirect()->back() ->with('alert', 'Không có đơn hàng để đặt!');
         }   
    }
}
