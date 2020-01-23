<div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
    
<form id="pageForm" name="pageForm" action="index.php" method="post">
        <input type="hidden" name="page">
    <a class="nav-link h5 <?php if ($page == "index") {
                                echo 'active';
                            } ?>" href="#" onclick="changePage('index')" role="tab">Introduction</a>
    <a class="nav-link h5 <?php if ($page == "exp") {
                                echo 'active';
                            } ?>" href="#" onclick="changePage('exp')" role="tab">Experiments</a>
    <a class="nav-link h5 <?php if ($page == "req") {
                                echo 'active';
                            } ?>" href="#" onclick="changePage('req')" role="tab">Prerequisites</a>
    <a class="nav-link h5 <?php if ($page == "course") {
                                echo 'active';
                            } ?>" href="#" onclick="changePage('course')" role="tab">Related Courses</a>
    <a class="nav-link h5 <?php if ($page == "swneeded") {
                                echo 'active';
                            } ?>" href="#" onclick="changePage('swneeded')" role="tab">Software Needed</a>
    <a class="nav-link h5 <?php if ($page == "feedback") {
                                echo 'active';
                            } ?>" href="#" onclick="changePage('feedback')" role="tab">Feedback</a></div>
</form>
</div>