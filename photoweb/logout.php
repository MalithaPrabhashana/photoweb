<?php
    session_start();
    session_destroy();

    header("Location: index.php?success=logged out");
?>

<script>
    $('.user-icon').addClass('d-none');
</script>