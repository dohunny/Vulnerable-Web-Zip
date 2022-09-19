<?php
    if (($result['pw']) && ($result['pw'] == $pw_u) && ($result['pw'] == $pw)){
        echo "EWHA{do_u_know_super_son?_do_u_know_kimchi?}";
    }else{
        echo "<script>alert('Nope');location.href='./index.php'</script>";
    }
?>