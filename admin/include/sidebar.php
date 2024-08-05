<div class="span3">
    <div class="sidebar">


        <ul class="widget widget-menu unstyled">
            <li>
                <a class="collapsed" data-toggle="collapse" href="#togglePages">
                    <i class="menu-icon icon-cog"></i>
                    <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                    Manage Complaint
                </a>
                <ul id="togglePages" class="collapse unstyled">
                    <li>
                        <a href="notprocess-complaint.php">
                            <i class="icon-tasks"></i>
                            Not Process Yet Complaint
                            <?php
                            $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where status is null");
                            $num1 = mysqli_num_rows($rt); { ?>

                            <b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
                            <?php } ?>
                        </a>
                    </li>
                    <li>
                        <a href="inprocess-complaint.php">
                            <i class="icon-tasks"></i>
                            Pending Complaint
                            <?php
                            $status = "in Process";
                            $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where status='$status'");
                            $num1 = mysqli_num_rows($rt); { ?><b
                                class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
                            <?php } ?>
                        </a>
                    </li>
                    <li>
                        <a href="closed-complaint.php">
                            <i class="icon-inbox"></i>
                            Closed Complaints
                            <?php
                            $status = "closed";
                            $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where status='$status'");
                            $num1 = mysqli_num_rows($rt); { ?><b
                                class="label green pull-right"><?php echo htmlentities($num1); ?></b>
                            <?php } ?>

                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="manage-users.php">
                    <i class="menu-icon icon-group"></i>
                    Manage users
                </a>
            </li>
        </ul>


        <ul class="widget widget-menu unstyled">
            <li><a href="category.php"><i class="menu-icon icon-tasks"></i> Add Category </a></li>
            <!-- <li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>Add Sub-Category </a></li>
                                <li><a href="state.php"><i class="menu-icon icon-paste"></i>Add State</a></li> -->


        </ul>
        <!--/.widget-nav-->

        <ul class="widget widget-menu unstyled">
            <li><a href="user-logs.php"><i class="menu-icon icon-tasks"></i>User Login Log </a></li>

            <li>
                <a href="logout.php">
                    <i class="menu-icon icon-signout"></i>
                    Logout
                </a>
            </li>
        </ul>

    </div>
    <!--/.sidebar-->
</div>
<!--/.span3-->
<style>
/* Change the background color of the sidebar links */
.widget-menu a {
    background-color: #f8f9fa;
    /* Change to desired background color */
    color: #333;
    /* Change to desired text color */

    /* Optional: Adds padding around the links */
    display: block;
    /* Ensures the entire link area is clickable */
    border-radius: 4px;
    /* Optional: Rounds the corners of the link background */
    text-decoration: none;
    /* Removes underline from links */
}

/* Change the background color of links on hover */

/* Change the color of the icons */
.widget-menu i.menu-icon {
    color: #007bff;
    /* Change to desired icon color */
}

/* Optional: Style the active state of the links */
.widget-menu a.active {
    background-color: #007bff;
    /* Change to desired active background color */
    color: #fff;
    /* Change to desired active text color */
}
</style>