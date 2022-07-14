@section('page-title')
Registrasi Skema
@stop


@section('style')

<link rel="stylesheet" href="{{asset('/assets/plugins/signature/css/jquery.signature.css')}}">
<link rel="stylesheet" href="{{asset('/assets/plugins/jquery-ui/jquery-ui.min.js')}}">

@stop
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">
                        Informasi Skema
                    </h6>
                </div>
                <div class="card-body">
                    <div class="form-group row my-0">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nomor Skema</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$event->skema->nomor}}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Judul Skema</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$event->skema->name}}">
                        </div>
                    </div>
                    @if($event->asesi)
                    <div class="form-group row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Status Registrasi</label>
                        <div class="col-sm-10">
                            @switch($event->asesi->status)
                                    @case('Menunggu Keputusan')
                                        <span class="badge badge-secondary">{{$event->asesi->status}}</span>
                                    @break
                                    @case('Diterima')
                                        <span class="badge badge-success">{{$event->asesi->status}}</span>
                                    @break
                                    @default
                                        <span class="badge badge-danger">{{$event->asesi->status}}</span>
                                @endswitch
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">FR.APL.01. PERMOHONAN SERTIFIKASI KOMPETENSI</h6>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <h6>Bagian 1 : Rincian Data Pemohon Sertifikasi</h6>
                            <label for="" class="mt-3">a. Data Pribadi</label>
                            <div class="form-group row my-0">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->name}}">
                                </div>
                            </div>
                            <div class="form-group row my-0">
                                <label for="staticEmail" class="col-sm-2 col-form-label">No. KTP/NIK/Paspor</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->nik}}">
                                </div>
                            </div>
                            <div class="form-group row my-0">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Tempat / tgl. Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->tmpt_lahir}} / {{$asesi->birth_date}}">
                                </div>
                            </div>
                            <div class="form-group row my-0">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->gender == 'l' ? 'Laki - Laki' : 'Perempuan'}}">
                                </div>
                            </div>
                            <div class="form-group row my-0">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Kebangsaan</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->kebangsaan}}">
                                </div>
                            </div>
                            <div class="form-group row my-0">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Rumah</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->address}}">
                                    <div class="form-group row my-0">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Kode Pos</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->kode_pos}}">
                                        </div>
                                    </div>
                                    <div class="form-group row my-0">
                                        <div class="col-5">
                                            <div class="form-group row my-0">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">HP</label>
                                                <div class="col">
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->phone}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group row my-0">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                                                <div class="col">
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->user->email}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row my-0">
                                        <div class="col-5">
                                            <div class="form-group row my-0">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">Tlp. Rumah</label>
                                                <div class="col">
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->house_phone}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group row my-0">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">Tlp. Kantor</label>
                                                <div class="col">
                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->office_phone}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row my-0">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Kualifikasi Pendidikan</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->kualifikasi_pendidikan}}">
                                </div>
                            </div>
                            <label for="" class="mt-3">b. Data Pekerjaan Sekarang</label>
                            <div class="form-group row my-0">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Institusi / Perusahaan</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->office}}">
                                </div>
                            </div>
                            <div class="form-group row my-0">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->position}}">
                                </div>
                            </div>
                            <div class="form-group row my-0">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Kantor</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->office_address}}">
                                    <div class="form-group row my-0">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Kode Pos</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$asesi->kode_pos_office}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h6>Bagian 2 : Data Sertifikasi</h6>
                            <p>Tuliskan Judul dan nomor Skema Sertifikasi yang anda ajukan berikut Daftar Unit Kompetensi <br> sesuai kemasan pada skema sertifikasi untuk mendapatkan pengakuan sesuai dengan latar belakang pendidikanm pelatihan serta pengalaman kerja yang anda miliki</p>

                            <h6>Daftar Unit Kompetensi sesuai kemasan</h6>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Unit</th>
                                        <th>Judul Unit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0 ?>
                                    @forelse($event->skema->unitKompetensi as $unit)
                                    <?php $no++ ?>

                                    <tr>
                                        <td> {{$no}} </td>
                                        <td> {{$unit->kode}} </td>
                                        <td> {{$unit->judul}} </td>
                                    </tr>

                                    @empty

                                    <tr>
                                        <td colspan="3" class="text-secondary text-center"> Tidak Ada Unit Kompetensi </td>
                                    </tr>

                                    @endforelse


                                </tbody>
                            </table>

                            <table class="table table-bordered mt-5">
                                <tbody>
                                    <tr>
                                        <td rowspan="2">
                                            Skema Sertifikasi
                                        </td>
                                        <td>
                                            Judul
                                        </td>
                                        <td style="width:5px;">
                                            :
                                        </td>
                                        <td>
                                            {{$event->skema->name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Nomor
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            {{$event->skema->nomor}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" rowspan="5">
                                            Tujuan Asesment
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            {{$tujuan}}
                                            <div class="custom-control custom-radio" @if(!$event->asesi) wire:click="$set('tujuan', 'Sertifikasi')" @endif >
                                                <input type="radio" name="tujuan_asesment" class="custom-control-input" id="customCheck1" @if($tujuan == 'Sertifikasi') checked @endif  @if($event->asesi) disabled @endif>
                                                <label class="custom-control-label" for="customCheck1">Sertifikasi</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-radio" @if(!$event->asesi) wire:click="$set('tujuan', 'Sertifikasi Ulang')" @endif >
                                                <input type="radio" name="tujuan_asesment" class="custom-control-input" id="customCheck2" @if($tujuan == 'Sertifikasi Ulang') checked @endif @if($event->asesi) disabled @endif>
                                                <label class="custom-control-label" for="customCheck2">Sertifikasi Ulang</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-radio" @if(!$event->asesi) wire:click="$set('tujuan', 'Pengakuan Kompetensi Terkini (PKT)')" @endif   >
                                                <input type="radio" name="tujuan_asesment" class="custom-control-input" id="customCheck3" @if($tujuan == 'Pengakuan Kompetensi Terkini (PKT)') checked @endif @if($event->asesi) disabled @endif>
                                                <label class="custom-control-label" for="customCheck3">Pengakuan Kompetensi Terkini (PKT)</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-radio" @if(!$event->asesi) wire:click="$set('tujuan', 'Rekognisi Pembelaran Lampau')" @endif  >
                                                <input type="radio" name="tujuan_asesment" class="custom-control-input" id="customCheck4" @if($tujuan == 'Rekognisi Pembelaran Lampau') checked @endif @if($event->asesi) disabled @endif>
                                                <label class="custom-control-label" for="customCheck4">Rekognisi Pembelaran Lampau</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-radio" @if(!$event->asesi) wire:click="$set('tujuan', 'Lain nya')" @endif >
                                                <input type="radio" name="tujuan_asesment" class="custom-control-input" id="customCheck5" @if($tujuan == 'Lain nya') checked @endif @if($event->asesi) disabled @endif>
                                                <label class="custom-control-label" for="customCheck5">Lain nya</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- bagian 3 -->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-3">Bagian 3 : Bukti Kelengkapan Pemohon</h6>

                            <h6>Bukti Persyaratan Pemohon</h6>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Bukti Persyaratan Dasar</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0 ?>
                                    @forelse($event->skema->persyaratan as $syarat)
                                    <?php $no++ ?>

                                    <tr>
                                        <td> {{$no}} </td>
                                        <td> {{$syarat->name}} </td>
                                        <td>
                                            @if($syarat->asesi)
                                            @switch($syarat->asesi->status)
                                            @case('Sedang diperiksa')
                                            <span class="badge badge-warning">{{$syarat->asesi->status}}</span>
                                            @break
                                            @case('Memenuhi Syarat')
                                            <span class="badge badge-success">{{$syarat->asesi->status}}</span>
                                            @break
                                            @default
                                            <span class="badge badge-warning">{{$syarat->asesi->status}}</span>
                                            @endswitch

                                            <span class="badge badge-secondary">Belum Upload Persyaratan</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($syarat->asesi->status == 'Sedang diperiksa')
                                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#upload-modal">Upload</button>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#upload-modal">Memenuhi Syarat</button>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#upload-modal">Tidak Memenuhi Syarat</button>
                                            @endif
                                            @if($syarat->asesi)
                                            <button class="btn btn-primary btn-sm btn-info" wire:click="$set('view_file', '{{$syarat->asesi->file}}')" data-toggle="modal" data-target="#view-file-modal">Lihat File</button>
                                            @endif
                                        </td>
                                    </tr>

                                    @empty

                                    <tr>
                                        <td colspan="4" class="text-secondary text-center"> Tidak Ada Persyaratan </td>
                                    </tr>

                                    @endforelse


                                </tbody>
                            </table>

                            <table class="table table-bordered mt-3">
                                <tbody>
                                    <tr>
                                        <td rowspan="4">
                                            <div class="font-weight-bold">
                                                Rekomendasi (diisi oleh LSP)
                                            </div>
                                            <div>
                                                Berdasarkan Ketentuan persyaratan dasar makan pemohon:
                                                <br>
                                                <span class="font-weight-bold">Diterima / Tidak Diterima </span>
                                                sebagai perserta sertifikasi
                                            </div>
                                        </td>
                                        <td colspan="2">Pemohon / Kandidat</td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>{{$asesi->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanda Tangan</td>
                                        <td>
                                            <div class="d-flex">
                                                <div style="width: 200px; height: 150px;">
                                                    @if($signature)
                                                        <img src="{{Storage::url($signature)}}" alt="" class="rounded w-100 mb-2">
                                                    @endif
                                                </div>
                                                @if(!$signature)
                                                <div class="mx-3">
                                                    <button class="btn btn-sm btn-primary btn-block mb-3" id="save-signature">Save Signature</button>
                                                    <button class="btn btn-sm btn-danger btn-block mb-3" id="clear-signature">Clear Signature</button>
                                                </div>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>{{\Carbon\Carbon::now()->format('d M y')}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @if(!$event->asesi)
                    <div class="text-danger">{{$errorMessage}}</div>
                        @if($validRegister)
                            <button class="btn btn-primary btn-block" id="btn-register" wire:click="registerSkema()">Register Skema</button>
                            <button class="btn btn-primary btn-block" disabled>Register Skema</button>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="create-unit" aria-hidden="true" id="view-file-modal">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        @if($view_file)
                        <img src="{{Storage::url($view_file)}}" alt="" class="rounded w-100 mb-2">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
<script src="{{asset('/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('/assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset('/assets/plugins/signature/js/jquery.signature.min.js')}}"></script>
<script>
    window.addEventListener('swal', function(e) {
        Swal.fire(e.detail);
    });

    $(document).ready(function() {
        $('#signature-pad').signature()
    })


    $('#save-signature').click(async function() {
        let invalidSignate = $('#signature-pad').signature('isEmpty')

        if (invalidSignate) {
            Swal.fire({
                title: 'Gagal!',
                text: 'Tanda tangan tidak boleh kosong',
                icon: 'warning',
                timer: 2000,
                showConfirmButton: false,
            })

            return
        }

        let base64 = $('#signature-pad').signature('toDataURL', 'image/png');
        let resImg = await fetch(base64)
        let blobImg = await resImg.blob()
        @this.upload('signature', blobImg)
    })
</script>
@endsection