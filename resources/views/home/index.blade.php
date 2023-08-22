@extends('layout.main')

@section('content')

<section id="section6" class="contact">
    <div class="contact100-form-title container">
        <h2>Data Diri</h4>
        <form method="POST" class="contact100-form validate-form" action="{{ route('insert') }}">
                                    @csrf
                                    
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">Nama Lengkap*</span>
                                                <input type="text" class="input100" name="fName" placeholder="Masukkan Nama" required>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">Email*</span>
                                                <input type="text" class="input100" name="email" placeholder="example@email.com" required>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                        
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">No. Telp*</span>
                                                <input type="text" class="input100" name="phone" id="no" placeholder="08xxxxxxxxxx" maxlength="20" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" required >
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                    
                                    
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">Tempat Lahir*</span>
                                                <input type="text" class="input100" name="pob" placeholder="Tempat Lahir" required>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">Tanggal Lahir*</span>
                                                <input type="date" class="input100" name="dob" value="dd-mm-yyyy" required>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">Jenis Kelamin*</span>
                                                <select name="gender" class="input100" required>
                                                    <option value="" selected hidden>--</option>
                                                    <option value="laki-laki">Laki-laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                   
                                    
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">Status Perkawinan*</span>
                                                <select name="martial" class="input100" required>
                                                    <option value="" selected hidden>--</option>
                                                    <option value="Lajang">Lajang</option>
                                                    <option value="Menikah">Menikah</option>
                                                    <option value="Cerai">Cerai</option>
                                                    <option value="Duda/Janda">Duda/Janda</option>
                                                </select>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">Agama*</span>
                                                <select name="religion" class="input100" required>
                                                    <option value="" selected hidden>--</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Katholik">Katholik</option>
                                                    <option value="Protestan">Protestan</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                </select>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                    

                                    
                                            <div class="wrap-input100 validate-input lebar">
                                                <span class="label-input100">Alamat*</span>
                                                <input type="text" class="input100" name="alamat" placeholder="Masukkan Alamat" required>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">RT*</span>
                                                <input type="text" class="input100" name="rt" placeholder="00" maxlength="3" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" required>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">RW*</span>
                                                <input type="text" class="input100" name="rw" placeholder="00" maxlength="3" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" required>
                                                <span class="focus-input100"></span>
                                            </div>
                                        

                                       
                                    

                                    
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">Kelurahan*</span>
                                                <input type="text" class="input100" name="lurah" placeholder="Kelurahan" required>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">Kecamatan*</span>
                                                <input type="text" class="input100" name="camat" placeholder="Kecamatan" required>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">Kabupaten*</span>
                                                <input type="text" class="input100" name="kabupaten" placeholder="Kabupaten" required>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">No. Telp Anggota Keluarga*</span>
                                                <input type="text" class="input100" name="noKeluarga" id="noKel" placeholder="08xxxxxxxxxx" maxlength="20" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" required>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">Hubungan Keluarga*</span>
                                                <select name="hubungan" class="input100" required>
                                                    <option value="" selected hidden>--</option>
                                                    <option value="Ibu">Ibu</option>
                                                    <option value="Ayah">Ayah</option>
                                                    <option value="Suami">Suami</option>
                                                    <option value="Istri">Istri</option>
                                                    <option value="Kakak">Kakak</option>
                                                    <option value="Adik">Adik</option>
                                                    <option value="Anak">Anak</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">No. KTP*</span>
                                                <input type="text" class="input100" name="noKtp" placeholder="Masukkan 16 Digits" maxlength="16" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" required>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">No. KK*</span>
                                                <input type="text" class="input100" name="noKk" placeholder="Masukkan 16 Digits" maxlength="16" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" required>
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">NPWP*</span>
                                                <input type="text" class="input100" name="npwp" id="npwp"  placeholder="00.000.000.0-000.000" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" >
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">No. BPJS*</span>
                                                <input type="text" class="input100" name="bpjs"  placeholder="Masukkan 13 Digits" maxlength="13" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" >
                                                <span class="focus-input100"></span>
                                            </div>
                                        
                                            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                                                <span class="label-input100">No. BPJS TK*</span>
                                                <input type="text" class="input100" name="bpjsTk"  placeholder="Masukkan 11 Digits" maxlength="11" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) || event.charCode ==0)" ondrop="return false;" onpaste="return false;" >
                                                <span class="focus-input100"></span>
                                            </div>
                                            

                                    
                                    

                                    <div class="lempang">
                                    <button type="submit" id="add" class="contact100-form-btn">
                                        <span>
                                            Submit
                                            
                                        </span>
                                    </button>
                                    </div>
                                    {{-- {{ csrf_field() }} --}}
        </form>
    </div>
</section>

@endsection




@section('script')
<script src="{{ asset ('js/jquery-2.1.1.min.js') }}"></script>
<script src="{{ asset ('js/jquery.js')}}"></script>	

<script>
$(document).ready(function($){
   
   $("#npwp").mask("99.999.999.9-999.999");

});
</script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
<script src="{{ asset ('js/jquery.mask.min.js')}}"></script>

@endsection