<?php

require "begin.html";
require "Model.php";

$m = Model::getModel();

$last = $m->get_last();
echo "<table> <thead><tr><td>Name</td><td>Category</td><td>Year</td></tr></thead>";
foreach ($last as $c=>$v){
    echo "<tr>";
    $id=$v['id'];
    echo "<td><a href='informations.php?id=$id'>".$v['name']."</a></td>";
    echo "<td>".$v['category']."</td>";
    echo "<td>".$v['year']."</td>";
    echo "</tr>";
}
echo "</table>";

require "end.html";

?>