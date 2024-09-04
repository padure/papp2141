<?php
    echo "Salut, eu invat PHP";
?>
<style>
    p{
        color: red;
    }
</style>
<p>Text extern</p>
<script>
    const p = document.querySelector("p");
    p.addEventListener("click", ()=>alert("Click"));
</script>