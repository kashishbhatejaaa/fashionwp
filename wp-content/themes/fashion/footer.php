<footer id="footer">
        <div class="container">
            <!-- Add your footer content here -->
            <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <style>
        /* Custom CSS for Footer */
        #footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</body>
</html>
