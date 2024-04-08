<?php $pages = ['vacatures' => 'VACATURES', 'reviews' => 'REVIEWS'] ?>        
        <footer>
            <section id="footer-lead">
                <img src="images/logo/logo.png" alt="pizzaden logo">
                <section id="footer-contact">
                    <p>012-3456789</p>
                    <p>info@pizzaden.nl</p>
                </section>
                <nav>
                    <?php
                        foreach ($pages as $file => $name) {
                            echo "<a href=\"./$file.php\">$name</a>";
                        }
                    ?>
                </nav>
            </section>
            <p>Copyright &copy; 2024 PizzaDen</p>
        </footer>
    </body>
</html>