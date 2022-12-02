<?php require_once 'header.php'; ?>


<!-- Main Content -->
<main class="w-full flex bg-gray-100">
    <!-- Side Navbar Links -->
    <nav id="side_nav" class="side_nav">
        <a href="index.php">
            <button class="btn nav_btn">
                <span class="nav_icon dashboard_icon"> </span>
                <span class="nav_text">Dashboard</span>
            </button>
        </a>


        

        <div class="relative">
            <button class="btn nav_btn nav_btn_toggler">
                <span class="nav_icon customer_icon"> </span>
                <span class="nav_text">Donator</span>
                <span class="nav_toggle_icon">+</span>
            </button>
            <div class="hidden hide_nav_items nav_items">               
                <a href="alluser.php">
                    <button class="sub_link">All Donator's</button>
                </a>
            </div>
        </div>
  
        <div class="relative">
            <button class="btn nav_btn nav_btn_toggler">
                <span class="nav_icon order_icon"> </span>
                <span class="nav_text">Donation</span>
                <span class="nav_toggle_icon">+</span>
            </button>
            <div class="hidden hide_nav_items nav_items">
                <a href="pending.php">
                    <button class="sub_link">Pending Donations</button>
                </a>
                <a href="success.php">
                    <button class="sub_link">Success Donations</button>
                </a>
            </div>
        </div>

        <div class="relative">
            <button class="btn nav_btn nav_btn_toggler">
                <span class="nav_icon order_icon"> </span>
                <span class="nav_text">Spend</span>
                <span class="nav_toggle_icon">+</span>
            </button>
            <div class="hidden hide_nav_items nav_items">
                <a href="newproject.php">
                    <button class="sub_link">New Spend</button>
                </a>
                <a href="success-spend.php">
                    <button class="sub_link">All Spend</button>
                </a>
            </div>
        </div>


        <div class="relative">
            <button class="btn nav_btn nav_btn_toggler">
                <span class="nav_icon order_icon"> </span>
                <span class="nav_text">Gallery</span>
                <span class="nav_toggle_icon">+</span>
            </button>
            <div class="hidden hide_nav_items nav_items">
                <a href="newgallery.php">
                    <button class="sub_link">Add Gallery</button>
                </a>
                <a href="success-gallery.php">
                    <button class="sub_link">All Gallery</button>
                </a>
            </div>
        </div>
        <div class="relative">
            <button class="btn nav_btn nav_btn_toggler">
                <span class="nav_icon order_icon"> </span>
                <span class="nav_text">Donation Causes</span>
                <span class="nav_toggle_icon">+</span>
            </button>
            <div class="hidden hide_nav_items nav_items">
                <a href="newcause.php">
                    <button class="sub_link">Add Causes</button>
                </a>
                <a href="all-area.php">
                    <button class="sub_link">All Causes</button>
                </a>
            </div>
        </div>

        <div class="relative">
            <button class="btn nav_btn nav_btn_toggler">
                <span class="nav_icon order_icon"> </span>
                <span class="nav_text">Payment System</span>
                <span class="nav_toggle_icon">+</span>
            </button>
            <div class="hidden hide_nav_items nav_items">
                <a href="newpayment.php">
                    <button class="sub_link">Add Payment</button>
                </a>
                <a href="allpayment.php">
                    <button class="sub_link">All Payment</button>
                </a>
            </div>
        </div>

        <div class="relative">
            <button class="btn nav_btn nav_btn_toggler">
                <span class="nav_icon order_icon"> </span>
                <span class="nav_text">Page</span>
                <span class="nav_toggle_icon">+</span>
            </button>
            <div class="hidden hide_nav_items nav_items">
                <a href="newpage.php">
                    <button class="sub_link">Add Page</button>
                </a>
                <a href="allpage.php">
                    <button class="sub_link">All Page</button>
                </a>
            </div>
        </div>









        <div class="relative">
            <button class="btn nav_btn nav_btn_toggler">
                <span class="nav_icon setting_icon2"> </span>
                <span class="nav_text">Setting</span>
                <span class="nav_toggle_icon">+</span>
            </button>
            <div class="hidden hide_nav_items nav_items">
                <a href="websetting.php">
                    <button class="sub_link">Website Setting</button>
                </a>
                <a href="mailsetting.php">
                    <button class="sub_link">Mail Setting</button>
                </a>
                
                <a href="support.php">
                    <button class="sub_link">Support Setting</button>
                </a>

                <a href="footer.php">
                    <button class="sub_link">Footer Setting</button>
                </a>

               
                <a href="contacts.php">
                    <button class="sub_link">Contact</button>
                </a>

                <a href="adminsetting.php">
                    <button class="sub_link">Admin Setting</button>
                </a>
            </div>
        </div>



        <!-- Toggle Nav Text -->
        <div id="toggle_nav_text">
            <button class="btn">
                <span class="chevronleft_icon"></span>
            </button>
        </div>
    </nav>
    <!-- Side Navbar Links -->