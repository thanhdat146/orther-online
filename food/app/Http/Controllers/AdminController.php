<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
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
use Carbon\Carbon;
use Cart;
use App\Http\Requests\ThemDanhMuc;
use App\Http\Requests\SuaDanhMuc;
use App\Http\Requests\ThemLoaiDanhMuc;
use App\Http\Requests\SuaLoaiDanhMuc;
use App\Http\Requests\AddSanPham;

class AdminController extends Controller
{
    public function getLogin()
    {
    	return view('admin.login');
    }
    public function postLogin(Request $req)
    {
    	$credentials = ['email' => $req->get('email'), 'password' => $req->get('password')];
    	if ($req->remember =='Remember Me') {
    		$remember =true;
    	}else {
    		$remember =false;
    	}
        if($req->get('email')=='admin@gamil.com'){
                if (Auth::attempt($credentials,$remember)) {
                return redirect()->intended('admin/index');
            }else {
                return back()->withInput()->with('alert','Tài Khoản hoặc Mật Khẩu không chính xác!!!');
            }
        }
    	else {
            if (Auth::attempt($credentials,$remember)) {
                Auth::logout();
                return redirect()->intended('/index');
            }
            else {
                return back()->withInput()->with('alert','Tài Khoản hoặc Mật Khẩu không chính xác!!!');
            }
    		
    	}
    }
    public function getRegis()
    {
        return view('admin.dangky');
    }
    public function postRegis(Request $req)
    {
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password = bcrypt($req->password);
        $user->save();
        return redirect()->intended('/login')->with('alert','Tài Khoản Đăng Ký Thành Công!!!');
    }
        //danhmuc
    public function getDanhMuc()
    {
        $data['danhmuc']=danhmuc::all();
    	return view('admin.category',$data);
    }
    public function postDanhMuc(ThemDanhMuc $req)
    {
        $danhmuc= new danhmuc;
        $danhmuc->ten= $req->name;;
        $danhmuc->slug= str_slug($req->name);
        $danhmuc->status= 1;
        $danhmuc->save();
        return back()->with('alert','Thành Công!!!');
    }
    
    public function getEditDanhMuc($id)
    {
        $data['danhmuc']=danhmuc::find($id);
    	return view('admin.editcategory',$data);
    }
    public function postEditDanhMuc(SuaDanhMuc $req,$id)
    {
        $danhmuc= danhmuc::find($id);
        $danhmuc->ten= $req->name;;
        $danhmuc->slug= str_slug($req->name);
        $danhmuc->save();
        return redirect()->intended('admin/danhmuc')->with('alert','Thành Công!!!');
    }


    public function getDeleteDanhMuc($id)
    {
        $loaisp=DB::table('loaisanpham')->select('id')->where('id_danhmuc','=',$id)->get();
        $loai= collect($loaisp)->map(function($x){ return (array) $x; })->toArray(); 
        $sanpham=DB::table('sanpham')->whereIn('id_loai',$loai)->delete();
        $loai=loaisanpham::where('id_danhmuc',$id)->delete();
        danhmuc::destroy($id);
        return back();
    }

    //loaimonan
    public function getLoaiMonAn()
    {
        $data1['danhmuc']=danhmuc::all();
        $data['loaisanpham']=loaisanpham::all();
        return view('admin.loaimonan',$data,$data1);
    }

    public function getAddLoaiMonAn()
    {   
        $data['danhmuc']=danhmuc::all();
        return view('admin.addloaimonan',$data);
    }

    public function postAddLoaiMonAn(ThemLoaiDanhMuc $req)
    {
        $loaimonan= new loaisanpham;
        $loaimonan->id_danhmuc = $req->cate;
        $loaimonan->tenloai = $req->name;
        $loaimonan->slug = str_slug($req->name);
        $loaimonan->status = 1;
        $loaimonan->save();
        return redirect()->intended('admin/loaimonan')->with('alert','Thành Công!!!');
    }

    public function getEditLoaiMonAn($id)
    {
        $data['loaimonan']=loaisanpham::find($id);
        $data1['danhmuc']=danhmuc::all();
        return view('admin.editloaimonan',$data,$data1);
    }
    public function postEditLoaiMonAn(SuaLoaiDanhMuc $req,$id)
    {
        $loaimonan= loaisanpham::find($id);
        $loaimonan->id_danhmuc = $req->cate;
        $loaimonan->tenloai = $req->name;
        $loaimonan->slug = str_slug($req->name);
        $loaimonan->save();
        return redirect()->intended('admin/loaimonan')->with('alert','Thành Công!!!');
    }

    public function getDeleteLoaiMonAn($id)
    {
        $sp=sanpham::where('id_loai',$id)->delete();
        loaisanpham::destroy($id);
        return back();
    }

    //sản phẩm
    
    public function getMonAn()
    {
        $data['sanpham']=sanpham::all();
        $data1['loaisanpham']=loaisanpham::all();
        return view('admin.product',$data,$data1);
    }

    public function getAddMonAn()
    {   
        $data['loaimonan']=loaisanpham::all();
        return view('admin.addproduct',$data);
    }

    public function postAddMonAn(AddSanPham $req)
    {
        $filename =$req->img->getClientOriginalName();
        $monan = new sanpham;
        $monan->id_loai = $req->cate;
        $monan->tensp = $req->name;
        $monan->slug = str_slug($req->name);
        $monan->mota = $req->description;
        $monan->motachitiet = $req->description1;
        $monan->gia = $req->price;
        $monan->hinhanh = $filename;
        $monan->sale = $req->promotion;
        $monan->new = 1;
        $monan->view = 1;
        $monan->status = 1;
        $monan->save();
        $req->img->move(public_path('assets/images/food'),$filename);
        return redirect()->intended('admin/monan')->with('alert','Thành Công!!!');
    }

    public function getEditMonAn($id)
    {
        $data['sanpham']=sanpham::find($id);
        $data1['loaimonan']=loaisanpham::all();
        return view('admin.editproduct',$data,$data1);
    }
    public function postEditMonAn(Request $req,$id)
    {
        
        $monan= sanpham::find($id);
        $monan->id_loai = $req->cate;
        $monan->tensp = $req->name;
        $monan->slug = str_slug($req->name);
        $monan->mota = $req->description;
        $monan->motachitiet = $req->description1;
        $monan->gia = $req->price;
        if($req->hasFile('img')){
            $filename =$req->img->getClientOriginalName();
            $monan->hinhanh = $filename;
            $req->img->move(public_path('assets/images/food'),$filename);
        }
        $monan->sale = $req->promotion;
        $monan->save();
        return redirect()->intended('admin/monan')->with('alert','Thành Công!!!');
    }

    public function getDeleteMonAn($id)
    {
        sanpham::destroy($id);
        return back();
    }

    public function getDonHang()
    {
        $data['donhang']=donhang::orderBy('id','desc')->get();
        return view('admin.donhang',$data);
    }
    
    public function getDeleteDonHang($id)
    {
        donhang::destroy($id);
        return back();
    }
    public function getThongKe()
    {   $donhang=donhang::all();
        $thang = Carbon::now()->month;
        $day = Carbon::now()->toDateString();
        $tongdoanhthu=dondathang::whereMonth('date',$thang)->whereYear('date',Carbon::now()->year)->sum('tongtien');
        $doanhthungay=dondathang::whereDate('date',$day)->whereYear('date',Carbon::now()->year)->sum('tongtien');
        $tongdonhang=dondathang::whereMonth('date',$thang)->whereYear('date',Carbon::now()->year)->count('id');
        $donhangngay=dondathang::whereDate('date',$day)->whereYear('date',Carbon::now()->year)->count('id');

        $tongket = DB::table('chitietdonhang')
                     ->select(DB::raw('count(*) as tong, id_sp'))
                     ->whereMonth('created_at',$thang)
                     ->whereYear('created_at',Carbon::now()->year)
                     ->groupBy('id_sp')
                     ->get();
        $tktheongay = DB::table('chitietdonhang')
                     ->select(DB::raw('count(*) as tong, id_sp'))
                     ->whereDate('created_at',$day)
                     ->groupBy('id_sp')
                     ->get();
        $sanpham=sanpham::all();
        $maxview= sanpham::max('view');
        $spnoibat= sanpham::where('view',$maxview)->whereMonth('updated_at',$thang)->first();
        $noibattheongay= sanpham::where('view',$maxview)->whereDate('updated_at',$day)->first();
        return view('admin.thongke',compact('donhang','thang','tongdoanhthu','tongket','sanpham','tongdonhang','spnoibat','doanhthungay','donhangngay','tktheongay','noibattheongay'));
    }

}
