<?php require "view_begin.php"; ?>

<table> <thead><tr><td>Name</td><td>Category</td><td>Year</td></tr></thead>

<?php foreach ($last as $c=>$v): $id=$v['id'];?>

    <tr>
    <td><a href='?controller=list&action=informations&id=<?=$id?>'><?=$v['name']?></a></td>
    <td><?=$v['category']?></td>
    <td><?=$v['year']?></td>
    </tr>

<?php endforeach ?>

</table>

<?php require "view_end.php";  ?>
