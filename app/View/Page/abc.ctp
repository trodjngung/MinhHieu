<h3>Other products</h3>

<?php
$other_sql = mysql_query("SELECT * FROM lesson_product WHERE id < ".intval($_GET['id'])." LIMIT 3");
while($rs = mysql_fetch_assoc($other_sql)){ ?>
<a href="detail.php?id=<?php echo $rs['id'];?>"><?php echo $rs['name'];?></a><br />
<?php } ?>
<h4>New comment</h4>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="17%">Your name</td>
<td width="83%"><input type="text" name="data[comment][name]" id="name" /></td>
</tr>
<tr>
<td>Your comment</td>
<td><textarea name="data[comment][comment]" rows="0" id="comment"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="post_comment" id="post_comment" value="Send" /></td>
</tr>
</table>
</form>
