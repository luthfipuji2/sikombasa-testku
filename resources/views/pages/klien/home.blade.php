@extends('layouts.klien.sidebar')
@section('content')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/11.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Fourth slide label</h5>
            <p>Some representative placeholder content for the fourth slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>


    </div>
    <h3 class="text-center text-primary">Easy Order With Three Steps</h3>
    <div>
    </div>
    <div class="card card-success">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card mb-2 bg-gradient-dark">
              <img class="card-img-top" src="./img/1.jpg" alt="Dist Photo 1">
              <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h5 class="card-title text-primary">Order</h5>
                <p class="card-text text-white pb-2 pt-1">Silahkan pilih menu </br>
                lalu isi form & upload dokumen Anda</p>
                <a href="#" class="text-white">Happy Shopping</a>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card mb-2">
              <img class="card-img-top" src="./img/12.jpg" alt="Dist Photo 2">
              <div class="card-img-overlay d-flex flex-column justify-content-center">
                <h5 class="card-title text-primary mt-5 pt-2">Estimasi</h5>
                <p class="card-text pb-2 pt-1 text-white">
                Tim kami akan memberikan invoice  <br>
                estimasi biaya translate </br>
                </p>
                <a href="#" class="text-white">Cheap and Reliable Price</a>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card mb-2">
              <img class="card-img-top" src="./img/6.jpg" alt="Dist Photo 3">
              <div class="card-img-overlay">
                <h5 class="card-title text-primary">Transfer</h5>
                <p class="card-text pb-1 pt-1 text-white">
                Setelah Anda setuju <br>
                dengan penawaran kami,</br>
                Anda bisa transfer & kami mulai proses  <br>
                terjemah dokumen Anda. <br></p>
                <a href="#" class="text-white">Easy Transaction</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-maroon elevation-1"><i class="fas fa-language"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Get a Quote</span>
            <span class="info-box-number">
            <a href="{{ url ('/menu-order') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-green elevation-1"><i class="fas fa-tags"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Pricing</span>
            <span class="info-box-number">
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-cyan elevation-1"><i class="fas fa-user-tie"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Get a Job</span>
            <span class="info-box-number">
            <a href="/career" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

      <section class="col-lg-5 connectedSortable ui-sortable">
        <!-- Calendar -->
        <div class="card bg-gradient-info">
              <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool btn-sm" data-toggle="dropdown">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu float-right" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                  </button>
                  <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">May 2021</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="04/25/2021" class="day old weekend">25</td><td data-action="selectDay" data-day="04/26/2021" class="day old">26</td><td data-action="selectDay" data-day="04/27/2021" class="day old">27</td><td data-action="selectDay" data-day="04/28/2021" class="day old">28</td><td data-action="selectDay" data-day="04/29/2021" class="day old">29</td><td data-action="selectDay" data-day="04/30/2021" class="day old">30</td><td data-action="selectDay" data-day="05/01/2021" class="day weekend">1</td></tr><tr><td data-action="selectDay" data-day="05/02/2021" class="day weekend">2</td><td data-action="selectDay" data-day="05/03/2021" class="day">3</td><td data-action="selectDay" data-day="05/04/2021" class="day">4</td><td data-action="selectDay" data-day="05/05/2021" class="day">5</td><td data-action="selectDay" data-day="05/06/2021" class="day">6</td><td data-action="selectDay" data-day="05/07/2021" class="day">7</td><td data-action="selectDay" data-day="05/08/2021" class="day weekend">8</td></tr><tr><td data-action="selectDay" data-day="05/09/2021" class="day weekend">9</td><td data-action="selectDay" data-day="05/10/2021" class="day">10</td><td data-action="selectDay" data-day="05/11/2021" class="day">11</td><td data-action="selectDay" data-day="05/12/2021" class="day">12</td><td data-action="selectDay" data-day="05/13/2021" class="day">13</td><td data-action="selectDay" data-day="05/14/2021" class="day">14</td><td data-action="selectDay" data-day="05/15/2021" class="day weekend">15</td></tr><tr><td data-action="selectDay" data-day="05/16/2021" class="day weekend">16</td><td data-action="selectDay" data-day="05/17/2021" class="day">17</td><td data-action="selectDay" data-day="05/18/2021" class="day">18</td><td data-action="selectDay" data-day="05/19/2021" class="day">19</td><td data-action="selectDay" data-day="05/20/2021" class="day">20</td><td data-action="selectDay" data-day="05/21/2021" class="day">21</td><td data-action="selectDay" data-day="05/22/2021" class="day weekend">22</td></tr><tr><td data-action="selectDay" data-day="05/23/2021" class="day weekend">23</td><td data-action="selectDay" data-day="05/24/2021" class="day">24</td><td data-action="selectDay" data-day="05/25/2021" class="day">25</td><td data-action="selectDay" data-day="05/26/2021" class="day">26</td><td data-action="selectDay" data-day="05/27/2021" class="day">27</td><td data-action="selectDay" data-day="05/28/2021" class="day active today">28</td><td data-action="selectDay" data-day="05/29/2021" class="day weekend">29</td></tr><tr><td data-action="selectDay" data-day="05/30/2021" class="day weekend">30</td><td data-action="selectDay" data-day="05/31/2021" class="day">31</td><td data-action="selectDay" data-day="06/01/2021" class="day new">1</td><td data-action="selectDay" data-day="06/02/2021" class="day new">2</td><td data-action="selectDay" data-day="06/03/2021" class="day new">3</td><td data-action="selectDay" data-day="06/04/2021" class="day new">4</td><td data-action="selectDay" data-day="06/05/2021" class="day new weekend">5</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2021</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month active">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year active">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
              </div>
              <!-- /.card-body -->
            </div>

        <div class="card card-info direct-chat direct-chat-info">
          <div class="card-header">
            <h3 class="card-title">Live Chat</h3>
            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="maximize">
                <i class="fas fa-expand"></i>
              </button>
              <span data-toggle="tooltip" title="3 New Messages" class="badge badge-light">3</span>
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                <i class="fas fa-comments"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- Conversations are loaded here -->
            <div class="direct-chat-messages">
              <!-- Message. Default to the left -->
              <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-left">Admin</span>
                  <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="./img/profile.png" alt="message user image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                  Is this template really for free? That's unbelievable!
                </div>
                <!-- /.direct-chat-text -->
              </div>
              <!-- /.direct-chat-msg -->
              <!-- Message to the right -->
              <div class="direct-chat-msg right">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-right">Klien</span>
                  <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="./img/boy (6).png" alt="message user image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                  You better believe it!
                </div>
                <!-- /.direct-chat-text -->
              </div>
              <!-- /.direct-chat-msg -->
              <!-- Message. Default to the left -->
              <div class="direct-chat-msg">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-left">Admin</span>
                  <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="./img/profile.png" alt="message user image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                  Working with AdminLTE on a great new app! Wanna join?
                </div>
                <!-- /.direct-chat-text -->
              </div>
              <!-- /.direct-chat-msg -->
              <!-- Message to the right -->
              <div class="direct-chat-msg right">
                <div class="direct-chat-infos clearfix">
                  <span class="direct-chat-name float-right">Klien</span>
                  <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                </div>
                <!-- /.direct-chat-infos -->
                <img class="direct-chat-img" src="./img/boy (6).png" alt="message user image">
                <!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                  I would love to.
                </div>
                <!-- /.direct-chat-text -->
              </div>
              <!-- /.direct-chat-msg -->
            </div>
            <!--/.direct-chat-messages-->
            <!-- Contacts are loaded here -->
            <div class="direct-chat-contacts">
              <ul class="contacts-list">
                <li>
                  <a href="#">
                    <img class="contacts-list-img" src="./img/girl (5).png">
                    <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        Klien 1
                        <small class="contacts-list-date float-right">2/28/2021</small>
                      </span>
                      <span class="contacts-list-msg">How have you been? I was...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
                <li>
                  <a href="#">
                    <img class="contacts-list-img" src="./img/jhope.jpg">
                    <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        Klien 2
                        <small class="contacts-list-date float-right">2/23/2021</small>
                      </span>
                      <span class="contacts-list-msg">I will be waiting for...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
                <li>
                  <a href="#">
                    <img class="contacts-list-img" src="./img/boy (1).png">
                    <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        Klien 3
                        <small class="contacts-list-date float-right">2/20/2021</small>
                      </span>
                      <span class="contacts-list-msg">I'll call you back at...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
                <li>
                  <a href="#">
                    <img class="contacts-list-img" src="./img/girl (1).png">
                    <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        Klien 4
                        <small class="contacts-list-date float-right">2/10/2021</small>
                      </span>
                      <span class="contacts-list-msg">Where is your new...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
                <li>
                  <a href="#">
                    <img class="contacts-list-img" src="./img/boy (4).png">
                    <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        Klien 5
                        <small class="contacts-list-date float-right">1/27/2021</small>
                      </span>
                      <span class="contacts-list-msg">Can I take a look at...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
                <li>
                  <a href="#">
                    <img class="contacts-list-img" src="./img/girl (6).png">
                    <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        Klien 6
                        <small class="contacts-list-date float-right">1/4/2021</small>
                      </span>
                      <span class="contacts-list-msg">Never mind I found...</span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
              </ul>
              <!-- /.contacts-list -->
            </div>
            <!-- /.direct-chat-pane -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <form action="#" method="post">
              <div class="input-group">
                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                <span class="input-group-append">
                  <button type="button" class="btn btn-primary">Send</button>
                </span>
              </div>
            </form>
          </div>
          <!-- /.card-footer-->
        </div>
        <!--/.direct-chat -->
      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
@endsection

