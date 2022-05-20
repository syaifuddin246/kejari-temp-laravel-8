<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="{{url('/')}}"><span>Kejaksaan Demak</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          @foreach ($menuitem as $item)
          {{-- kondisi jika --}}
              @if (count($item->submenuitem)>0)
                <li class="dropdown"><a href="#"><span>{{$item->nama}}</span> <i class="bi bi-chevron-down"></i></a>
                    @foreach ($item->submenuitem as $row)
                      @if (count($item->submenuitem1)>0)
                        <ul>
                          <li class="dropdown"><a href="#"><span>{{$item->nama}}</span> <i class="bi bi-chevron-down"></i></a>
                            @foreach ($item->submenuitem1 as $row)
                                <ul>                            
                                  <li><a href="{{$row->link}}">{{$row->nama}}</a></li>
                                </ul>
                            @endforeach
                        </ul>
                      @else
                      <ul>                            
                        <li><a href="{{$item->link}}">{{$item->nama}}</a></li>
                      </ul>
                      @endif                
                    @endforeach
                </li>
              @else
                <li class="dropdown"><a href="{{$item->link}}">{{$item->nama}}</a></li>
               @endif
          @endforeach
          {{-- @foreach ($katmenu as $item)
          <li class="dropdown"><a href="#"><span>{{$item->slug}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach ($submenu as $item)
              <li><a href="/{{$item->slug}}"></a>{{$item->judul}}</li>
              @endforeach
           </ul>
          </li>              
          @endforeach --}}

          {{-- <li class="dropdown"><a href="#"><span>Bidang</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 2</a></li>
            </ul>
          </li> --}}
          {{-- <li><a class="nav-link scrollto" href="#about">About</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#features">Features</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> --}}
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          {{-- <li><a class="nav-link scrollto" href="{{url('/kontak')}}">Kontak</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->