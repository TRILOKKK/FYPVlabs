<?php if ($epage == "intro") {
    echo '<h3 class="nav nav-link">Simple Huffman</h3>
    <p>Simple Huffman Introduction</p>
    
    
    
    
    rest of the exp';
} ?>

<?php if ($epage == "theory") {
    echo '<h3 class="nav nav-link">Theory</h3>
    <p>Theory</p>
    
    
    
    
    rest of the theory';
} ?>

<?php if ($epage == "quiz") {
    echo '<h3 class="nav nav-link">Quiz</h3>
    <p>Quiz</p>
    
    
    
    
    rest of the Quiz';
} ?>

<?php if ($epage == "procedure") {
    echo '<h3 class="nav nav-link">Procedure</h3>
    <p>Procedure</p>
    
    
    
    
    rest of the procedure';
} ?>

<?php if ($epage == "experiment") {
    echo '
    <!--<h3 class="nav nav-link">Experiment</h3>
    <p>Experiment</p>  -->
    <div id = "container">

			<div  id = "mainContent">

				<div id = "algoControlSection">
					<!-- Table for buttons to control specific animation (insert/find/etc) -->
					<!-- (filled in by javascript code specific to the animtion) -->
					<table id="AlgorithmSpecificControls"> </table>
				</div>

					<!-- Drawing canvas where all animation is done.  Note:  can be resized in code -->

				<canvas id="canvas" width="1000" height="400"></canvas>

				<div id = "generalAnimationControlSection">
					<!-- Table for buttons to control general animation (play/pause/undo/etc)
					(filled in by javascript code, specifically AnimationMain.js) -->

                <table id="GeneralAnimationControls">  </table>
				</div>

			</div> <!-- mainContent -->

		</div><!-- container -->
    
    <!-- rest of the exp-->';
} ?>

