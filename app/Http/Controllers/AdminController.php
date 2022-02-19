<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\kecamatan;
use \App\kelurahan;
use \App\rt;
use \App\rw;
use \App\program;
use \App\iuran;

class AdminController extends Controller
{

    // MIDDLEWARE //

    public function __construct()
    {
        $this->middleware('admin');
    }





    // USER //

    public function dashboard()
    {
        $program = program::paginate(5);
        return view('users.home',compact('program'));
    }

    public function UserIndex()
    {

        $user = User::where('role', 'user')->get();

        return view('admin.user.index',compact('user'));
    }

    public function UserDetail($id)
    {
        $user = User::find($id);

        return view('admin.user.detail', compact('user'));
    }

    public function UserCreate()
    {
        return view('admin.user.create');
    }

    public function UserStore(Request $request)
    {
        $this->validate($request,[
            'NIK' => 'required|numeric',
            'name' => 'required|max:100',
            'email' => 'required|email|min:5|max:100',
            'password' => 'required|min:5|string',
            'alamat' => 'required',
            'qrcode' => 'required|numeric|'
        ]);

        User::create([
            'NIK' => $request->NIK,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'alamat' => $request->alamat,
            'qrcode' => $request->qrcode,
            'role' => 'user'
        ]);

        return redirect('/admin/user/index');
    }

    public function UserEdit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.update', compact('user'));
    }

    public function UserUpdate(Request $request, $id) {

        $this->validate($request,[
            'NIK' => 'required|numeric',
            'name' => 'required|max:100',
            'email' => 'required|email|min:5|max:100',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'NIK' => $request->NIK,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'user',
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'pekerjaan' => $request->pekerjaan,
            'penghasilan' => $request->penghasilan, 
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'alamat' => $request->alamat,
            'no_rumah' => $request->no_rumah,
            'qrcode' => $request->qrcode
        ]);

        return redirect('/admin/user/index');
    }

    public function UserDelete($id)
    {
        User::find($id)->delete();
        return redirect('/admin/user/index');
    }





    // KECAMATAN //

    public function KecamatanIndex()
    {

        $kecamatan = kecamatan::all();

        return view('admin.kecamatan.index',compact('kecamatan'));
    }

    public function KecamatanCreate()
    {
        return view('admin.kecamatan.create');
    }

    public function KecamatanStore(Request $request)
    {
        $this->validate($request,[
            'nama_kecamatan' => 'required',
            'nama_camat' => 'required|max:100',
            'masa_jabatan' => 'required|min:5|max:100',
            'no_telp' => 'required|numeric',
            'email' => 'required|email'
        ]);

        kecamatan::create([
            'nama_kecamatan' => $request->nama_kecamatan,
            'nama_camat' => $request->nama_camat,
            'masa_jabatan' => $request->masa_jabatan,
            'no_telp' => $request->no_telp,
            'email' => $request->email
        ]);

        return redirect('/admin/kecamatan/index');
    }

    public function KecamatanEdit($id)
    {
        $kecamatan = kecamatan::findOrFail($id);

        return view('admin.kecamatan.update',compact('kecamatan'));
    }

    public function KecamatanUpdate(Request $request, $id)
    {
        $this->validate($request,[
            'nama_kecamatan' => 'required',
            'nama_camat' => 'required|max:100',
            'masa_jabatan' => 'required|min:5|max:100',
            'no_telp' => 'required|numeric',
            'email' => 'required|email'
        ]);

        $kecamatan = kecamatan::findOrFail($id);
        $kecamatan->update([
            'nama_kecamatan' => $request->nama_kecamatan,
            'nama_camat' => $request->nama_camat,
            'masa_jabatan' => $request->masa_jabatan,
            'no_telp' => $request->no_telp,
            'email' => $request->email
        ]);

        return redirect('/admin/kecamatan/index');
    }

    public function KecamatanDelete($id)
    {
        kecamatan::findOrFail($id)->delete();

        return redirect('/admin/kecamatan/index');
    }





    // KELURAHAN //

    public function KelurahanIndex()
    {

        $kelurahan = kelurahan::all();

        return view('admin.kelurahan.index',compact('kelurahan'));
    }

    public function KelurahanCreate()
    {
        return view('admin.kelurahan.create');
    }

    public function KelurahanStore(Request $request)
    {
        $this->validate($request,[
            'nama_kelurahan' => 'required',
            'nama_lurah' => 'required|max:100',
            'masa_jabatan' => 'required|min:5|max:100',
            'no_telp' => 'required|numeric',
            'email' => 'required|email'
        ]);

        kelurahan::create([
            'nama_kelurahan' => $request->nama_kelurahan,
            'nama_lurah' => $request->nama_lurah,
            'masa_jabatan' => $request->masa_jabatan,
            'no_telp' => $request->no_telp,
            'email' => $request->email
        ]);

        return redirect('/admin/kelurahan/index');
    }

    public function KelurahanEdit($id)
    {
        $kelurahan = kelurahan::findOrFail($id);

        return view('admin.kelurahan.update',compact('kelurahan'));
    }

    public function KelurahanUpdate(Request $request, $id)
    {
        $this->validate($request,[
            'nama_kelurahan' => 'required',
            'nama_lurah' => 'required|max:100',
            'masa_jabatan' => 'required|min:5|max:100',
            'no_telp' => 'required|numeric',
            'email' => 'required|email'
        ]);

        $kelurahan = kelurahan::findOrFail($id);
        $kelurahan->update([
            'nama_kelurahan' => $request->nama_kelurahan,
            'nama_lurah' => $request->nama_lurah,
            'masa_jabatan' => $request->masa_jabatan,
            'no_telp' => $request->no_telp,
            'email' => $request->email
        ]);

        return redirect('/admin/kelurahan/index');
    }

    public function KelurahanDelete($id)
    {
        kelurahan::findOrFail($id)->delete();

        return redirect('/admin/kelurahan/index');
    }





    // rt //

    public function RtIndex()
    {

        $rt = rt::all();

        return view('admin.rt.index',compact('rt'));
    }

    public function RtCreate()
    {
        return view('admin.rt.create');
    }

    public function RtStore(Request $request)
    {
        $this->validate($request,[
            'no_rt' => 'required',
            'nama_rt' => 'required|max:100',
            'masa_jabatan' => 'required|min:5|max:100',
            'no_telp' => 'required|numeric',
            'email' => 'required|email'
        ]);

        rt::create([
            'no_rt' => $request->no_rt,
            'nama_rt' => $request->nama_rt,
            'masa_jabatan' => $request->masa_jabatan,
            'no_telp' => $request->no_telp,
            'email' => $request->email
        ]);

        return redirect('/admin/rt/index');
    }

    public function RtEdit($id)
    {
        $rt = rt::findOrFail($id);

        return view('admin.rt.update',compact('rt'));
    }

    public function RtUpdate(Request $request, $id)
    {
        $this->validate($request,[
            'no_rt' => 'required',
            'nama_rt' => 'required|max:100',
            'masa_jabatan' => 'required|min:5|max:100',
            'no_telp' => 'required|numeric',
            'email' => 'required|email'
        ]);

        $rt = rt::findOrFail($id);
        $rt->update([
            'no_rt' => $request->no_rt,
            'nama_rt' => $request->nama_rt,
            'masa_jabatan' => $request->masa_jabatan,
            'no_telp' => $request->no_telp,
            'email' => $request->email
        ]);

        return redirect('/admin/rt/index');
    }

    public function RtDelete($id)
    {
        rt::findOrFail($id)->delete();

        return redirect('/admin/rt/index');
    }






    // rw //

    public function RwIndex()
    {

        $rw = rw::all();

        return view('admin.rw.index',compact('rw'));
    }

    public function RwCreate()
    {
        return view('admin.rw.create');
    }

    public function RwStore(Request $request)
    {
        $this->validate($request,[
            'no_rw' => 'required',
            'nama_rw' => 'required|max:100',
            'masa_jabatan' => 'required|min:5|max:100',
            'no_telp' => 'required|numeric',
            'email' => 'required|email'
        ]);

        rw::create([
            'no_rw' => $request->no_rw,
            'nama_rw' => $request->nama_rw,
            'masa_jabatan' => $request->masa_jabatan,
            'no_telp' => $request->no_telp,
            'email' => $request->email
        ]);

        return redirect('/admin/rw/index');
    }

    public function RwEdit($id)
    {
        $rw = rw::findOrFail($id);

        return view('admin.rw.update',compact('rw'));
    }

    public function RwUpdate(Request $request, $id)
    {
        $this->validate($request,[
            'no_rw' => 'required',
            'nama_rw' => 'required|max:100',
            'masa_jabatan' => 'required|min:5|max:100',
            'no_telp' => 'required|numeric',
            'email' => 'required|email'
        ]);

        $rw = rw::findOrFail($id);
        $rw->update([
            'no_rw' => $request->no_rw,
            'nama_rw' => $request->nama_rw,
            'masa_jabatan' => $request->masa_jabatan,
            'no_telp' => $request->no_telp,
            'email' => $request->email
        ]);

        return redirect('/admin/rw/index');
    }

    public function RwDelete($id)
    {
        rw::findOrFail($id)->delete();

        return redirect('/admin/rw/index');
    }




    // Program //

    public function ProgramIndex()
    {
        $program = program::all();

        return view('admin.program.index',compact('program'));
    }

    public function ProgramCreate()
    {
        return view('admin.program.create');
    }

    public function ProgramStore(Request $request)
    {
        program::create([
            'kas' => $request->kas,
            'kebersihan' => $request->kebersihan,
            'keamanan' => $request->keamanan,
            'kematian' => $request->kematian,
            'kegiatan' => $request->kegiatan,
            'bencana' => $request->bencana,
        ]);

        return redirect('/admin/program/index');
    }

    public function ProgramEdit($id)
    {
        $program = program::findOrFail($id);

        return view('admin.program.update',compact('program'));
    }

    public function ProgramUpdate(Request $request, $id)
    {
        $program = program::findOrFail($id);
        $program->update([
            'kas' => $request->kas,
            'kebersihan' => $request->kebersihan,
            'keamanan' => $request->keamanan,
            'kematian' => $request->kematian,
            'kegiatan' => $request->kegiatan,
            'bencana' => $request->bencana,
        ]);

        return redirect('/admin/program/index');
    }

    public function ProgramDelete($id)
    {
        program::findOrFail($id)->delete();

        return redirect('/admin/program/index');
    }

    public function IndexIuran()
    {
        $user = User::where('role', 'user')->get();

        return view('admin.iuran.index',compact('user'));
    }

    public function StoreIuran(Request $request)
    {
        $this->validate($request,[
            'tanggal_bayar'=>'required',
            'bulan'=>'required',
            'nominal'=>'required',
            'user_id'=>'required'
        ]);

        $values = [
            'tanggal_update'=>$request->tanggal_bayar,
            'bulan'=>$request->bulan,
            'nominal'=>$request->nominal,
            'user_id'=>$request->user_id
        ];

        iuran::create($values);

        return redirect("/Iuran/$request->user_id");

    }

    public function IuranShow($id)
    {
        $item = User::where('id',$id)->first();
        $iuran = iuran::where('user_id',$id)->orderBy('tanggal_update','DESC')->get();
        return view('admin.iuran.show',compact('item','iuran'));
    }

}
