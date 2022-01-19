<!-- App Bottom Menu -->
<div class="appBottomMenu" id="appBottomMenu">
    @if ($_SERVER['PHP_SELF'] == '/index.php')
    <a href="/" class="item active">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
            <strong>หน้าแรก</strong>
        </div>
    </a>
    @else
    <a href="/" class="item">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
            <strong>หน้าแรก</strong>
        </div>
    </a>
    @endif

    @if ($_SERVER['PHP_SELF'] == '/index.php/wallet')
    <a href="wallet" class="item active">
        <div class="col">
            <ion-icon name="wallet-outline"></ion-icon>
            <strong>วอลเล็ท</strong>
        </div>
    </a>
    @else
        <a href="wallet" class="item">
        <div class="col">
            <ion-icon name="wallet-outline"></ion-icon>
            <strong>วอลเล็ท</strong>
        </div>
    </a>
    @endif

    @if ($_SERVER['PHP_SELF'] == '/index.php/list')
    <a href="list" class="item active">
        <div class="col">
            <ion-icon name="list-outline"></ion-icon>
            <strong>รายการ</strong>
        </div>
    </a>
    @else
    <a href="list" class="item">
        <div class="col">
            <ion-icon name="list-outline"></ion-icon>
            <strong>รายการ</strong>
        </div>
    </a>
    @endif

    @if ($_SERVER['PHP_SELF'] == '/index.php/notifications')
    <a href="notifications" class="item active">
        <div class="col">
            <ion-icon name="notifications-outline"></ion-icon>
            <strong>แจ้งเตือน</strong>
        </div>
    </a>
    @else
    <a href="notifications" class="item">
        <div class="col">
            <ion-icon name="notifications-outline"></ion-icon>
            <strong>แจ้งเตือน</strong>
        </div>
    </a>
    @endif

    @if ($_SERVER['PHP_SELF'] == '/index.php/profile')
    <a href="profile" class="item active">
        <div class="col">
            <ion-icon name="person-outline"></ion-icon>
            <strong>ฉัน</strong>
        </div>
    </a>
    @else
    <a href="profile" class="item">
        <div class="col">
            <ion-icon name="person-outline"></ion-icon>
            <strong>ฉัน</strong>
        </div>
    </a>
    @endif
</div>
<!-- * App Bottom Menu -->