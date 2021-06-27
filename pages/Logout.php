<?php
if (isset($_SESSION['ID'])) {
    session_destroy();
    unset($_SESSION['fname']);
    unset($_SESSION['ID']);
    unset($_SESSION['DrId']);
    unset($_SESSION['Name']);
    unset($_SESSION['email']);
    unset($_SESSION['department']);
    ?>
<script>
location.replace("./index.php?page=home");
</script>
<?php
} else { ?>
<script>
location.replace("./index.php?page=home");
</script>
<?php
}
?>