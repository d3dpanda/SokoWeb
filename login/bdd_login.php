<?php 
    include 'bdd.php';
    include 'login.php';

    $pseudo = $_POST['pseudo'];
    $pass = $_POST['password'];

    $userInfo = $bdd->query("SELECT (pseudo) FROM User WHERE pseudo = 'test2';");

    
?>
<script type="text/javascript">
    var test = <?php json_encode($userInfo); ?>;
    console.log(test);
</script>
<script type="text/javascript" src="verifLogin.js"></script>