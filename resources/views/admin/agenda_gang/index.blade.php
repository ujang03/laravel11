@extends('admin.layouts.app')

@section('content')


<section class="feature-section pdt-50 pdb-130 bg-silver-light bg-no-repeat" data-background="">
    <div class="container">
        <div class=""><button class="btn btn-primary" data-mdb-ripple-init data-mdb-modal-init
          data-mdb-target="#staticBackdrop">New Upload News</button>
        </div>
      <div class="table-responsive">
        <div class="row">
            </div>
                <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="news-wrapper mrb-20 mrb-sm-30">
                    <div class="news-details">
                        <div class="news-description mb-10">
                            <div class="row">
                                <div class="col-md-4 col-xs-4">
                                    <img src="" class="w-full" alt="">
                                </div>
                                <div class="col-md-8 col-xs-8">
                                    <h4 class="the-title mrb-10"><a href="">Kegiatan Tahunan Acara Peringatan Hari Ulang Tahun Kemerdekaan Republik Indonesia Yang Ke 79</a></h4>
                                    <div class="news-bottom-meta">
                                        <span class="entry-date mrr-20"><i class="far fa-calendar-alt mrr-10 text-primary-color"></i>Selasa, 29 Oktober 2024</span>
                                    </div>
                                    <p class="text-justify">
                                        </p><p> blablablabla
                                    </p>
                                    <a href="" class="btn btn-warning">edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Modal:Posting NEW-->
<div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Posting NEWS</h5>
        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal"
          aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @include('admin.agenda_gang.create')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-mdb-ripple-init>Save</button>
      </div>
    </div>
  </div>
</div>

@endsection