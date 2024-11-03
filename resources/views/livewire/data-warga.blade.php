<div>
    <section class="mb-4">
        <div class="card">
            <div class="card-header text-center py-3">
                <h5 class="mb-0 text-center">
                    <strong>Data Warga</strong>
                </h5>
            </div>
            <div class="card-body">
                <div class=""><button class="btn btn-primary" data-mdb-ripple-init data-mdb-modal-init
                        data-mdb-target="#staticBackdrop">Tambah</button></div>
                <div class="table-responsive">
                    <table class="table table-hover text-nowrap table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">jenis Kelamin</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Jenis Pekerjaan</th>
                                <th scope="col">Golongan Darah</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($dataWarga as $i => $item)
                            <tr>

                                <th scope="row">{{ $item->name }}</th>
                                <td>{{ $item->profile->address ??'' }}</td>
                                <td>{{ $item->profile->gender ??'' }}</td>
                                <td>{{ $item->profile->religion ??'' }}</td>
                                <td>{{ $item->profile->job ??''}}</td>
                                <td>{{ $item->profile->blood_type ??''}}</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm btn-rounded" data-mdb-modal-init
                                        data-mdb-ripple-init data-mdb-target="#staticBackdrop">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm btn-rounded" data-mdb-modal-init
                                        data-mdb-ripple-init data-mdb-target="#staticBackdrop">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th scope="row">Ujang Nurzaman</th>
                                <td>F 11/3</td>
                                <td>Laki-Laki</td>
                                <td>Islam</td>
                                <td>Karyawan</td>
                                <td>AB</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm btn-rounded" data-mdb-modal-init
                                        data-mdb-ripple-init data-mdb-target="#staticBackdrop">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm btn-rounded" data-mdb-modal-init
                                        data-mdb-ripple-init data-mdb-target="#staticBackdrop">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!--Modal:Tambah Warga-->
    <div wire:ignore.self class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false"
        tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">{{ $updateData?'Edit':'Tambah' }} Warga</h5>
                    <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input wire:model="name" type="text" class="form-control" />
                            <label class="form-label">Nama Lengkap</label>
                        </div>

                        <!-- Text input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input wire:model='address' type="text" class="form-control" />
                            <label class="form-label">Alamat</label>
                        </div>

                        <div data-mdb-select-init class="form-outline mb-4">
                            <label class="form-label mb-0">Jenis kelamin</label>
                            <select wire:model='gender' class="form-select">
                                <option></option>
                                <option value="Laki-laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div data-mdb-select-init class="form-outline mb-4">
                            <label class="form-label mb-0">Agama</label>
                            <select wire:model='religion' class="form-select">
                                <option></option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input wire:model='job' type="text" class="form-control" />
                            <label class="form-label">Jenis Pekerjaan</label>
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label mb-0">Golongan Darah</label>
                            <select wire:model='blood_type' class="form-select">
                                <option></option>
                                <option value="AB">AB</option>
                                <option value="B">B</option>
                                <option value="A">A</option>
                                <option value="O">O</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                            data-mdb-dismiss="modal">Close</button>
                        @if ($updateData)
                        <button type="button" class="btn btn-primary" data-mdb-ripple-init>Update</button>
                        @else
                        <button wire:click='save' type="button" class="btn btn-primary"
                            data-mdb-ripple-init>Save</button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>