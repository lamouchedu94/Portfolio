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
                    <?php
                        foreach ($tabProjects as $elem) { ?>
                            <div class="carre">
                                <?php echo $elem['title'] ?>
                                <p><?php echo $elem['description'] ?></p>
                            </div>

                        <?php } ?>
    
                    
                    <!-- <div class="carre">
                        Nom Projet
                        <p>Du texte</p>
                    </div>
                    <div class="carre">
                        Nom Projet
                        <p>Du texte</p>
                    </div> -->
                </div>
            </section>
        </main>

        <?php require "footer.php"?>  
    </div>
</body>

</html>
