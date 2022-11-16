<div class="navbar-area fixed-top">
    <div class="eoda-responsive-nav">
        <div class="container">
            <div class="eoda-responsive-menu">
                <div class="logo">
                    <a>
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="eoda-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">

                            <a href="{{url('/')}}" class="nav-link active">
                                الرئيسية
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('about')}}" class="nav-link">
                                النافذة
                            </a>
                        </li>

                        <li class="nav-item">

                            <a href="{{url('services')}}" class="nav-link">
                                خدماتنا
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{url('all_stories')}}" class="nav-link">
                                اعمالنا
                            </a>

                        </li>
                       
                        <li class="nav-item">
                            <a href="{{url('contact')}}" class="nav-link">اتصل بنا</a>
                        </li>
                        <!--<li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link search-box">
                                <i class="las la-search"></i>
                            </a>
                        </li>-->

                        <li class="nav-btn">
                            <a href="https://api.whatsapp.com/send?phone=+{{config('app.phn','no') }}" class="default-btn-two">احصل على عرض مالي</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>


