<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('Berhasil logout');
document.location.href = 'php11D.php';
</script>
"
?>