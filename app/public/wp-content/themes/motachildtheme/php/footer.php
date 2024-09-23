<footer class="site-footer">
    <div class="container">
        <nav class="footer-navigation">
            <ul>
                <li><a href="<?php echo get_permalink(get_page_by_path('mentions-legales')); ?>">Mentions légales</a></li>
                <li><a href="<?php echo get_privacy_policy_url(); ?>">Vie privée</a></li>
            </ul>
        </nav>
        <p class="copyright">Tous droits réservés &copy; <?php echo date('Y'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
