<?php //$staff = $this->session->userdata('staff')['staff_role']; 
?>
<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <!-- <img src="<?php echo base_url('public/admin/assets/images/logo-icon.png') ?>" class="logo-icon" alt="logo icon"> -->
        </div>
        <div>
            <h4 class="logo-text">UMS</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="<?php echo base_url('Puf/index') ?>">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="<?php echo base_url('Role/index') ?>">
                <div class="parent-icon"><i class='bx bx-user'></i>
                </div>
                <div class="menu-title">Role</div>
            </a>
        </li>

        <li>
            <a href="<?php echo base_url('Role/staff_list') ?>">
                <div class="parent-icon"><i class='lni lni-users'></i>
                </div>
                <div class="menu-title">Staff</div>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('Customer/customer_create') ?>">
                <div class="parent-icon"><i class='lni lni-users'></i>
                </div>
                <div class="menu-title">Customer</div>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('Puf/Create') ?>">
                <div class="parent-icon"><i class='bx bx-message-add'></i>
                </div>
                <div class="menu-title">Add Order(BAQ)</div>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('Quotation') ?>">
                <div class="parent-icon"><i class='fadeIn animated bx bx-task'></i>
                </div>
                <div class="menu-title">Quotation</div>
            </a>
        </li>
        <li>
            <!-- <li>
             <a href="<?php echo base_url('Order/invoice') ?>">
                 <div class="parent-icon"><i class="lni lni-certificate"></i>
                 </div>
                 <div class="menu-title">Invoice</div>
             </a>
         </li> -->
        <li>
            <a href="<?php echo base_url('Product') ?>">
                <div class="parent-icon"><i class='lni lni-dropbox'></i>
                </div>
                <div class="menu-title">Products</div>
            </a>
        </li>

        <!--         
         <li>
             <a href="<?php echo base_url('Puf/leads') ?>">
                 <div class="parent-icon"><i class='lni lni-users'></i>
                 </div>
                 <div class="menu-title">Leads</div>
             </a>
         </li>
         <li>
             <a href="<?php echo base_url('Puf/Packaging') ?>">
                 <div class="parent-icon"><i class='fadeIn animated bx bx-package'></i>
                 </div>
                 <div class="menu-title">Packaging</div>
             </a>
         </li>
         <li>
             <a href="<?php echo base_url('Puf/Production') ?>">
                 <div class="parent-icon"><i class='lni lni-bar-chart'></i>
                 </div>
                 <div class="menu-title">Production</div>
             </a>
         </li>
         <li>
             <a href="<?php echo base_url('Puf/Purchase') ?>">
                 <div class="parent-icon"><i class='fadeIn animated bx bx-purchase-tag'></i>
                 </div>
                 <div class="menu-title">Purchase</div>
             </a>
         </li> -->
        <li>
            <a href="<?php echo base_url('Inventory') ?>">
                <div class="parent-icon"><i class='fadeIn animated bx bx-home'></i>
                </div>
                <div class="menu-title">Inventory</div>
            </a>
        </li>


        <li>
            <a href="<?php echo base_url('Puf/Deleivery') ?>">
                <div class="parent-icon"><i class='lni lni-money-location'></i>
                </div>
                <div class="menu-title">Delivery</div>
            </a>
        </li>

    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->