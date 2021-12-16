<h1> GoalTracker </h1>

<?php 
if($this->session->userdata('UserLoginSession'))
{
    $udata = $this->session->userdata('UserLoginSession');
        echo 'Welcome'.' '.$udata['username'];
}
else
{
    redirect(base_url('welcome/login'));
}

echo "<body style='background-color:steelblue'>";



 ?>
 <a href="<?=base_url('welcome/logout')?>">Logout</a>
