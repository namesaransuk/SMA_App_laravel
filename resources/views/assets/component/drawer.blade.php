<div class="modal-content">
    <div class="modal-body p-0">
        <!-- profile box -->
        <div class="profileBox pt-2 pb-2">
            <div class="image-wrapper">
                <img src="{{ asset('img/sample/avatar/avatar1.jpg'); }}" alt="image" class="imaged  w36">
            </div>
            <div class="in">
                @guest
                @if (Session::get('email'))
                <strong>{{ Auth::user()->name }}</strong>
                @else
                <strong></strong>
                @endif
                @endguest
                <div class="text-muted">4029209</div>
            </div>
            <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                <ion-icon name="close-outline"></ion-icon>
            </a>
        </div>
        <!-- * profile box -->
        <!-- balance -->
        <div class="sidebar-balance pb-2">
            <div class="listview-title">ยอดเงินปัจจุบัน</div>
            <div class="in">
                <h1 class="amount">$ 2,000.50</h1>
            </div>
        </div>
        <!-- * balance -->

        <!-- action group -->
        <!-- <div class="action-group">
                    <a href="index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="add-outline"></ion-icon>
                            </div>
                            ฝาก
                        </div>
                    </a>
                    <a href="index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            ถอน
                        </div>
                    </a>
                    <a href="index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            โอน
                        </div>
                    </a>
                    <a href="app-cards.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="card-outline"></ion-icon>
                            </div>
                            แลกเปลี่ยน
                        </div>
                    </a>
                </div> -->
        <!-- * action group -->

        <!-- menu -->
        <div class="listview-title mt-1">Menu</div>
        <ul class="listview flush transparent no-line image-listview">
            <li>
                <a href="/" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="home-outline"></ion-icon>
                    </div>
                    <div class="in">
                        หน้าแรก
                        <!-- <span class="badge badge-primary">10</span> -->
                    </div>
                </a>
            </li>
            <li>
                <a href="wallet" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="wallet-outline"></ion-icon>
                    </div>
                    <div class="in">
                        วอลเล็ท
                    </div>
                </a>
            </li>
            <li>
                <a href="list" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                    <div class="in">
                        รายการ
                    </div>
                </a>
            </li>
            <li>
                <a href="notifications" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="notifications-outline"></ion-icon>
                    </div>
                    <div class="in">
                        การแจ้งเตือน
                    </div>
                </a>
            </li>
        </ul>
        <!-- * menu -->

        <!-- others -->
        <div class="listview-title mt-1">Others</div>
        <ul class="listview flush transparent no-line image-listview">
            <li>
                <a href="settings" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="settings-outline"></ion-icon>
                    </div>
                    <div class="in">
                        การตั้งค่า
                    </div>
                </a>
            </li>
            <li>
                <a href="faq" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </div>
                    <div class="in">
                        ช่วยเหลือ
                    </div>
                </a>
            </li>
            <li>
                <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <div class="icon-box bg-primary">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </div>
                    <div class="in">
                        ออกจากระบบ
                    </div>
                </a>
            </li>


        </ul>
        <!-- * others -->

        <!-- send money -->
        <!-- <div class="listview-title mt-1">Send Money</div>
                <ul class="listview image-listview flush transparent no-line">
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar2.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Artem Sazonov</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar4.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Sophie Asveld</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar3.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Kobus van de Vegte</div>
                            </div>
                        </a>
                    </li>
                </ul> -->
        <!-- * send money -->

    </div>
</div>