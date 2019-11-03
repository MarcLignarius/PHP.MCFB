<?php $page_title = "Documents"; ?>

<?php include("header.php"); ?>
<?php include("navigation.php"); ?>

<div class="container-fluid" >
    <h1 class="my-4 text-center"><?php echo $page_title; ?></h1>
    <ul>
        <li><a href="articles-of-incorporation.php">Articles of Incorporation</a></li>
        <li><a href="by-laws.php">By-laws</a></li>
        <li><a href="conflict-of-interest.php">Conflict of Interest</a></li>
        <li><a href="plans.php">Plans</a></li>
        <li><a href="budgets.php">Budgets</a></li>
        <li><a href="reports.php">Reports</a></li>
        <li><a href="board-materials.php">Board Materials</a></li>
    </ul>
    <p class="text-center">
        <a href="about.php" class="btn btn-primary">&larr; Back</a>
        <a href="index.php" class="btn btn-primary">Home</a>
    </p>
    <?php include("statement.php"); ?>
</div>

<?php include("footer.php"); ?>