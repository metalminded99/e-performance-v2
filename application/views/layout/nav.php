<div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <?php 
                    if( $this->session->userdata('logged_in') ) { 
                ?>
                <ul class="nav pull-right">
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> <?php echo $this->session->userdata('uname')?>
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?php echo base_url(); ?>profile">My Account</a></li>
                            <li class="divider"></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="<?php echo base_url().'logout'; ?>">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <?php } ?>

                <a class="brand" href="<?=base_url()?>"><span class="first">IntelliCare</span> <span class="second">E-Performance</span></a>
            </div>
        </div>
    </div>