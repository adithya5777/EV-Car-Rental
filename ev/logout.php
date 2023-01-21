<?php
session_start();
session_unset();
session_destroy();
?>
<script>
    window.onbeforeunload = function() {
        // Make an AJAX call to a server-side script that runs the SQL trigger
        $.ajax({
            type: "POST",
            url: "runtrigger.php",
            data: {
                // any data you need to pass to the server-side script
            }
        });
    };
</script>
<?php
header("location: index.php");
?>