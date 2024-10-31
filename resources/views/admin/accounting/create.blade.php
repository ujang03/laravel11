@extends('admin.layouts.app')
@section('layouts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h4>Tambah Bank Account</h4>
                <form method="post" action="">
                

                    <div class="row mb-3">
                        <label for="bank_name" class="col-sm-2 col-form-label">Nama Bank</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="bank_name" id="bank_name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="account_no" class="col-sm-2 col-form-label">Nomor Akun</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="account_no" id="account_no">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="currency" class="col-sm-2 col-form-label">Mata Uang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="currency" id="currency">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="currency" class="col-sm-2 col-form-label">Chart Of Account</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="coa_id" id="coa_id">
                                <option>Pilih COA:</option>                            
                            </select>
                        </div>
                    </div>  
                    <input type="submit" class="btn btn-outline-info" value="Tambah Bank Account">
                    <a href="" class="btn btn-outline-danger">Cancel</a>
                </form>
            </div>
        </div>

    </div>
</div>


@endsection
