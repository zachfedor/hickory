<?php

/**
 * Footer Layout
 */

function hickory_do_footer()
{
    wp_footer();
    ?>
        <footer>
            <div class="row">
                <div class="col-md-6">
                    &copy; Copyright Hickory Town Workshop <?php echo date('Y'); ?>
                </div>
                <div class="col-md-6">
                    Located in Lancaster, Pennsylvania
                </div>
            </div>
        </footer>
    </body>
    </html>
    <?php
}
