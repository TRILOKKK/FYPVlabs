<?php if ($page == "index") {
    echo '<h3 class="nav nav-link">Introduction</h3>
    <p>The virtual lab on data compression is designed for undergraduate engineering students and researchers and faculties. 
    The experiments are designed to improve the clarity in understanding of the basic concepts as well as to enable the student 
    to put them into practical use.It is important that the student goes through the objectives and the underlying theory before 
    carrying out the experiment to get maximum benefit.The experiments are designed to expose you to certain concepts.You are encouraged to carry out variants of the suggested experiments and learn from them.
    </p>';
} ?>

<?php if ($page == "exp") {
    echo '<h3 class="nav nav-link ">Experiments</h3>
    <form method="post" id="expForm" name="expForm" action="exp.php">
    <input type="hidden" name="epage">
    <input type="hidden" name="eid">
    <a class="nav-link h6 bg-light text-dark" href="#" onClick="changeExp(';echo "'simple'";echo')"><u>1. Simple Huffman Coding</a></u>
    <a class="nav-link h6 bg-light text-dark" href="#" onClick="changeExp(';echo "'minvar'";echo')"><u>2. Minimum Variance Huffman Coding</a></u>
    <a class="nav-link h6 bg-light text-dark" href="#" onClick="changeExp(';echo "'nonbin'";echo')"><u>3. Non-Binary Huffman Coding</a></u>
    <a class="nav-link h6 bg-light text-dark" href="#" onClick="changeExp(';echo "'extend'";echo')"><u>4. Extended Huffman Coding</a></u>
    <a class="nav-link h6 bg-light text-dark" href="#" onClick="changeExp(';echo "'lz77'";echo')"><u>5. LZ77</a></u>
    <a class="nav-link h6 bg-light text-dark" href="#" onClick="changeExp(';echo "'lz78'";echo')"><u>6. LZ78</a></u>
    <a class="nav-link h6 bg-light text-dark" href="#" onClick="changeExp(';echo "'lzw'";echo')"><u>7. LZW</a></u>
    </form>';
} ?>

<?php if ($page == "req") {
    echo '<h3 class="nav nav-link">Prerequisites</h3>
            <p>The basic knowledge of data compressing subject and simple mathamatics is required</p>';
} ?>

<?php if ($page == "course") {
    echo '<h3 class="nav nav-link">Related</h3>
    <p>Related Text</p>';
} ?>

<?php if ($page == "swneeded") {
    echo '<h3 class="nav nav-link">Software Needed</h3>
    <p>Software Text</p>';
} ?>

<?php if ($page == "feedback") {
    echo '<h3 class="nav nav-link">Feedback</h3>
    <p><form action="feedback.php" method="get">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    College: <input type="text" name="college"><br>
    Body: <textarea name="body" id="body" cols="30" rows="2"></textarea><br>
    <input type="submit">
    </form></p>';
} ?>