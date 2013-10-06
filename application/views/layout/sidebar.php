<div class="sidebar-nav">
    <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Dashboard</a>
    <ul id="dashboard-menu" class="nav nav-list collapse <?php echo ($module == 'home') ? 'in' : ''; ?>">
        <li><a href="<?php echo base_url(); ?>">Stats</a></li>
        <!--<li><a href="<?php echo base_url().'home/calendar/'; ?>">Calendar</a></li>-->
        
    </ul>
<?php //if($sidebar->has_student_list == 'Y'): ?>
        <a href="#student-menu" class="nav-header" data-toggle="collapse"><i class="icon-user"></i>Students</a>
        <ul id="student-menu" class="nav nav-list collapse <?php echo ($module == 'students') ? 'in' : ''; ?>">
            <li ><a href="<?php echo base_url().'students/my_students';?>">Students List</a></li>
        </ul>
<?php //endif; ?>
<?php //if($sidebar->has_writepost == 'Y'): ?>
        <a href="#posts-menu" class="nav-header" data-toggle="collapse"><i class="icon-pencil"></i>Posts</a>
        <ul id="posts-menu" class="nav nav-list collapse <?php echo ($module == 'posts') ? 'in' : ''; ?>">
            <li ><a href="<?php echo base_url().'posts/my_posts';?>">My Posts</a></li>
            <li ><a href="<?php echo base_url().'posts/write_post';?>">Write a Post</a></li>
        </ul>
<?php //endif; ?>
<?php //if($sidebar->has_mail == 'Y'): ?>
        <a href="#mail-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-envelope"></i>Mail</a>
        <ul id="mail-menu" class="nav nav-list collapse <?php echo ($module == 'mail') ? 'in' : ''; ?>">
            <li ><a href="<?php echo base_url().'mail/compose';?>">Compose</a></li>
            <li ><a href="<?php echo base_url().'mail/draft';?>">Drafts</li>
        </ul>
<?php //endif; ?>
<?php //if($sidebar->has_submit_ticket == 'Y'): ?>
        <a href="#ticket-menu" class="nav-header" data-toggle="collapse"><i class="icon-wrench"></i>Tools</a>
        <ul id="ticket-menu" class="nav nav-list collapse <?php echo ($module == 'ticket') ? 'in' : ''; ?>">
            <li ><a href="<?php echo base_url().'ticket/my_tickets';?>">My Tickets</a></li>
            <li ><a href="<?php echo base_url().'ticket/submit_ticket';?>">Submit Ticket</a></li>
        </ul>
<?php //endif; ?>
</div>
