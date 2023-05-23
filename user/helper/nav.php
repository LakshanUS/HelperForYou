<div class="sidebar">
    <div class="intro">
        <div class="welcome"><img src="../../images/navlogo.png" alt="logo" class="logo"></div>
        <i class="fa-solid fa-bars" style="color:white;" id="btn"></i>
    </div>
    <ul class="nav">
        <li>
            <a href="#">
                <i class="fa fa-th-large"></i>
                <span class="link">Dashboard</span>
            </a>
            <span class="desc">Dashboard</span>
        </li>
        <li>
            <a href="profile.php">
                <i class="fa-solid fa-address-card"></i>
                <span class="link">Profile</span>
            </a>
            <span class="desc">Profile</span>
        </li>
        <li>
            <a href="#">
                <i class="fa-sharp fa-solid fa-calendar-days"></i>
                <span class="link">Bookings</span>
            </a>
            <span class="desc">Bookings</span>
        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-comments-dollar"></i>
                <span class="link">Payments</span>
            </a>
            <span class="desc">Payments</span>
        </li>
        <li>
            <a href="#">
                <i class="fa-solid fa-star-half-stroke"></i>
                <span class="link">Reviews</span>
            </a>
            <span class="desc">Reviews</span>
        </li>

        <hr style="margin-top:240px;">
        <div>
            <a href="#">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="link">Sign Out</span>
            </a>
            <span class="desc">Sign Out</span>
        </div>
    </ul>
</div>

<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange();
    });

    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
        }
    }
</script>