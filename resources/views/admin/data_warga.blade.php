@extends('admin.layouts.app')

@section('content')
<!--Section: Sales Performance KPIs-->
<section class="mb-4">
    <div class="card">
        <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
                <strong>Informasi Warga</strong>
            </h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Jenis Pekerjaan</th>
                            <th scope="col">Golongan Darah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Ujang Nurzaman</th>
                            <td>F 11/3</td>
                            <td>Laki-Laki</td>
                            <td>Islam</td>
                            <td>Karyawan</td>
                            <td>AB</td>
                        </tr>
                        <!-- <tr>
                    <th scope="row">Percentage change</th>
                    <td>
                      <span class="text-danger">
                        <i class="fas fa-caret-down me-1"></i><span>-48.8%%</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>14.0%</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>46.4%</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>29.6%</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-danger">
                        <i class="fas fa-caret-down me-1"></i><span>-11.5%</span>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Absolute change</th>
                    <td>
                      <span class="text-danger">
                        <i class="fas fa-caret-down me-1"></i><span>-17,654</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>28</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>111</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-success">
                        <i class="fas fa-caret-up me-1"></i><span>$1,092.72</span>
                      </span>
                    </td>
                    <td>
                      <span class="text-danger">
                        <i class="fas fa-caret-down me-1"></i><span>$-1.78</span>
                      </span>
                    </td>
                  </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--Section: Sales Performance KPIs-->

@endsection