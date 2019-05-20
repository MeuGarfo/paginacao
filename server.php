<?php
sleep(0.75);
$id=$_GET['id'];
?>
<tr>
    <td>
        <a href="#">Link<?php print $id; ?></a>
    </td>
</tr>
<tr>
    <td>
        <a href="#">Link<?php print $id+1; ?></a>
    </td>
</tr>
<tr class="paging">
    <td>
        <a class="next" href="server.php?id=<?php print $id+2; ?>"></a>
    </td>
</tr>
