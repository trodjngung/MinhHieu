    <!-- /login logout  -->

        <div style="text-align: right;color: red">
        <?php if($logged_in): ?>
        <a style="color: red">Hello</a> <?php echo $this->Html->link( $current_user['name'], array('action' =>'../users/view',h($current_user['id'])));?>
        <a href="/users/logout" style="color: red">Logout</a>
        <?php else: ?>  <a href="/users/login" style="color: red"> Login</a>
        <?php endif; ?>
        </div>
    <!-- /login logout-->