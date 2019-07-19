<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use validate;

class mycontroller extends Controller
{
    // get danh sách quản lý user
    public function getindex()
    {
    	return view('index');
    }
     // show danh sach user
    public function getdanhsach()
    {
    	$user = User::where('id','>',0)->paginate(6);
    	return view('danhsachtaikhoan',compact('user'));
    }
    public function getxoa($id)
    {
    	$xoa = User::find($id);
    	$xoa->delete();

    	return redirect()->back()->with('thongbao', 'Xóa thành công');
    }
    // them user
    public function getthem()
    {
    	return view('them');
    }
    public function postthem(Request $req)
    {
    	$this->validate($req,
    		[
    			'email'=>'required|email|unique:users,email',
    			'password'=>'required|min:8|max:20',
    			'tennguoidung'=>'required|max:50',
    			'sodienthoai'=>'required|integer|min:10|max:10',
    			'sodienthoai'=>'required|min:10|max:10',
    			'diachi'=>'required|min:10|max:100'

    		],
    		[
    			'email.required'=>'vui lòng nhập email', 
    			'email.email'=>'vui lòng đúng định dạng email',
    			'email.unique'=>'email đã tồn tại',
    			'password.required'=>'vui lòng nhập password',
    			'password.min'=>'vui lòng nhập password từ 8-20 ký tự',
    			'password.max'=>'vui lòng nhập password từ 8-20 ký tự',
    			'tennguoidung.required'=>'vui lòng nhập tên người dùng',
    			'tennguoidung.max'=>'Tên người dùng ít hơn 50 ký tự',
    			'sodienthoai.integer'=>'vui lòng nhập số điện thoại bằng số',
    			'sodienthoai.max'=>'Điện thoại phải 10 số',
    			'sodienthoai.min'=>'Điện thoại phải 10 số',
    			'diachi.required'=>'Vui lòng nhập địa chỉ từ 10 đến 100 ký tự',
    			'diachi.min'=>'Vui lòng nhập địa chỉ từ 10 đến 100 ký tự',
    			'diachi.max'=>'Vui lòng nhập địa chỉ từ 10 đến 100 ký tự'
    		]);
    	$user = new User();
    	$user->email = $req->email;
    	$user->password = $req->password;
    	$user->role ="User";
    	$user->tennguoidung = $req->tennguoidung;
    	$user->gioitinh = $req->gioitinh;
    	$user->sodienthoai = $req->sodienthoai;
    	$user->diachi = $req->diachi;

    	$user->save();
    	return redirect()->back()->with('thongbao','thêm thành công');
    }
// sua user
    public function getsua($id)
    {
    	$sua = User::find($id);
    	return view('sua',compact('sua'));
    }
    public function postsua(Request $req , $id)
    {
    	// $sua = User::find($id);
    	// $sua->email = $req->email;
    	// $sua->password = $req->password;
    	// $sua->role = $req->quyen;
    	// $sua->tennguoidung = $req->tennguoidung;
    	// $sua->gioitinh = $req->gioitinh;
    	// $sua->sodienthoai = $req->sodienthoai;
    	// $sua->diachi = $req->diachi;

    	// $sua->save();
    	// return redirect()->back()->with('thongbao', 'Sửa thành công');
    	$sua = User::find($id);
    	$this->validate($req,
    		[
    			'email'=>'required|email',
    			'password'=>'required|min:6|max:20',
    			'tennguoidung'=>'required|max:50',
    			'sodienthoai'=>'required|integer|min:10|max:10',
    			'sodienthoai'=>'required|min:10|max:10',
    			'diachi'=>'required|min:10|max:100'

    		],
    		[
    			'email.required'=>'vui lòng nhập email', 
    			'email.email'=>'vui lòng đúng định dạng email',
    			'password.required'=>'vui lòng nhập password',
    			'password.min'=>'vui lòng nhập password từ 6-20 ký tự',
    			'password.max'=>'vui lòng nhập password từ 6-20 ký tự',
    			'tennguoidung.required'=>'vui lòng nhập tên người dùng',
    			'tennguoidung.max'=>'Tên người dùng ít hơn 50 ký tự',
    			'sodienthoai.integer'=>'vui lòng nhập số điện thoại bằng số',
    			'sodienthoai.max'=>'Điện thoại phải 10 số',
    			'sodienthoai.min'=>'Điện thoại phải 10 số',
    			'diachi.required'=>'Vui lòng nhập địa chỉ từ 10 đến 100 ký tự',
    			'diachi.min'=>'Vui lòng nhập địa chỉ từ 10 đến 100 ký tự',
    			'diachi.max'=>'Vui lòng nhập địa chỉ từ 10 đến 100 ký tự'
    		]);
    	
    	$sua->email = $req->email;
    	$sua->password = $req->password;
    	$sua->role =$req->quyen;
    	$sua->tennguoidung = $req->tennguoidung;
    	$sua->gioitinh = $req->gioitinh;
    	$sua->sodienthoai = $req->sodienthoai;
    	$sua->diachi = $req->diachi;

    	$sua->save();
    	return redirect()->back()->with('thongbao','Sửa thành công');
    }
    // chi tiet user
    public function getchitiet($id)
    {
    	$chitiet = User::find($id);
    	return view('chitiet',compact('chitiet'));
    }
}
