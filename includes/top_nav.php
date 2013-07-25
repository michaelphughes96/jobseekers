<nav class="very_top_bar">
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="index.php" target="_parent" style="height:18px;line-height:18px;">Home</a></li>
	<li class="topmenu"><a href="jobs.php" title="Find a Job" style="height:18px;line-height:18px;">Jobs</a></li>
	<li class="topmenu"><a href="learn.php" title="Learn Programming" target="_parent" style="height:18px;line-height:18px;">Learn</a></li>
	<li class="topmenu"><a href="companies.php" title="Company Search" style="height:18px;line-height:18px;">Companies</a></li>
	<li class="topmenu"><a href="facebook.com" title="Recruiters Search" style="height:18px;line-height:18px;">Recruiters</a></li>
	<li class="topmenu"><a href="jobseekers.php" title="Job Seekers Search" style="height:18px;line-height:18px;">Jobseekers</a></li>
	<li class="topmenu"><a href="advertisers.php" title="Advertisers Information" style="height:18px;line-height:18px;">Advertisers</a></li>
	<li class="toplast"><a href="forum.php" title="PHP Job Seekers Forum" style="height:18px;line-height:18px;">Forum</a></li>
</ul>
</nav>
<?php
if(logged_in() === true){
?>
<div style=" position:absolute; top:10px; left:880px;">
<div class="dropdown">
  <a href="#" class="button"><span class="label">I am Logged in</span><span class="toggle"></span></a>
  <div class="dropdown-slider">
    <a href="logout.php" class="ddm"><span class="label">Logout</span></a>
  </div>
</div>
</div>
<?php
}else{
?>
<div style="position:absolute; top:10px; left:880px;">
<button class="action blue"><span class="label"><a title="Login" style="text-decoration:none; color:white;" href="http://www.google.co.uk">Login</a></span></button>
<button style="margin-left:-2px;" class="action red"><span class="label"><a style="text-decoration:none; color:white;" title="Sign in" href="http://www.google.co.uk">Sign Up</a></span></button>
</div>
<?php
} 
?>