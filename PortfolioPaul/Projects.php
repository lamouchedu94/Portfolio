<?php
require "header.php"

?>

<div class="tout">
        
        <main>
            <section>
                <!-- <div class="ligne1">
                    <div class="carre">
                        mydiv
                        <p>Du texte</p>
                    </div>
                    <div class="carre">
                        test
                        <p>Du texte</p>
                    </div>
                    <div class="carre">
                        test1
                        <p>Du texte</p>
                    </div>
                </div> -->
                <div class="ligne2">
                    <div class="carre">
                        <?php echo $info_projects['title'] ?>
                        <p><?php echo $info_projects['description'] ?></p>
                    </div>
                    <div class="carre">
                        Nom Projet
                        <p>Du texte</p>
                    </div>
                    <div class="carre">
                        Nom Projet
                        <p>Du texte</p>
                    </div>
                </div>
            </section>
        </main>

        <?php require "footer.php"?>  
    </div>
</body>

</html>
