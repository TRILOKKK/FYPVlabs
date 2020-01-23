<div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">

    <form id="expPage" name="expPage" action="exp.php" method="post">
        <input type="hidden" name="epage">
        <a class="nav-link h5 <?php if ($epage == "intro") {
                                    echo 'active';
                                } ?>" href="#" onclick="changeExpPage('intro')" role="tab">Introduction</a>

        <a class="nav-link h5 <?php if ($epage == "theory") {
                                    echo 'active';
                                } ?>" href="#" onclick="changeExpPage('theory')" role="tab">Theory</a>

        <a class="nav-link h5 <?php if ($epage == "procedure") {
                                    echo 'active';
                                } ?>" href="#" onclick="changeExpPage('procedure')" role="tab">Procedure</a>

        <a class="nav-link h5 <?php if ($epage == "quiz") {
                                    echo 'active';
                                } ?>" href="#" onclick="changeExpPage('quiz')" role="tab">Quizzes</a>

        <a class="nav-link h5 <?php if ($epage == "experiment") {
                                    echo 'active';
                                } ?>" href="#" onclick="changeExpPage('experiment')" role="tab">Experiments</a>
    </form>
</div>
</div>