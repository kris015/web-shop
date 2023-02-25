<div class="row mb-3">
    <div class="col-12" style="background-color: salmon">
        <?php
        echo "<div class='link'><a href='index.php'>Početna</a></div>";
        echo "<div class='link'><a href='kontakt.php'>Kontakt</a></div>";    
        $upit="SELECT * FROM kategorije";
        $rez=$db->query($upit);
        while($red=$db->fetch_assoc($rez))
            echo "<div class='link'><a href='index.php?kategorija={$red['id']}'>{$red['naziv']}</a></div>";
        
        if(login()){
            echo "<div class='link'><a href='odjava.php'>{$_SESSION['podaci']}</a></div>";
        }else
            echo "<div class='link'><a href='prijava.php'>Prijavite se</a></div>";
        ?>
    </div>
</div>