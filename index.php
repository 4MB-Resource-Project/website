<?php
    include_once 'functions.php';
    include_once 'templates/section.php';

    $mainSectionData = [
        'items' => [
            [
                'id' => 'rules',
                'content' => get_include_contents('partials/home/rules.php')
            ],
            [
                'id' => 'resources',
                'content' => get_include_contents('partials/home/resources.php')
            ],
            [
                'id' => 'community',
                'content' => get_include_contents('partials/home/community.php')
            ]
        ]
    ];
?>

<?php include 'partials/head.php'; ?>

    <body>
        <header class="fill-viewport home-top-header">
            <?php include 'partials/nav.php'; ?>

            <div class="whitespace-container">
                <img id="logo" src="assets/img/2025-logo.png" width="255" height="215" alt="4MB Jam 2025 Logo">
                <div class="description">
                    <h1>4MB Game Jam<br>2025</h1>
                    <p><time datetime="2025-05-01">May 1</time> - <time datetime="2025-06-01">June 1</time></p>
                    <p>Create a game that fits within 4MB!</p>
                </div>

                <div class="stack">
                    <a class="cta-primary" href="#">
                        <span>Register</span>
                        <?php render_sprite_icon('right-arrow'); ?>
                    </a>
                    <a class="cta-secondary" href="#main-content">
                        <span>Learn More</span>
                        <?php render_sprite_icon('down-arrow') ?>
                    </a>
                </div>
            </div>
        </header>

        <div id="main-content" class="home-content-grid">
            <div class="sticky-action-bar">
                 <a class="cta-primary" href="#">
                    <span>Register</span> <?php render_sprite_icon('right-arrow'); ?>
                </a>
            </div>

            <main>
                <?php
                    generateSections($mainSectionData);
                ?>
            </main>

            <aside class="table-of-contents">
                <nav>
                    <header>

                        <h2>Contents</h2>
                    </header>

                    <ul>
                        <li>
                            <a href="#rules">Rules</a>
                        </li>

                        <li>
                            <a href="#resources">Resources</a>
                        </li>

                        <li>
                            <a href="#community">Community</a>
                        </li>
                    </ul>
                </nav>
            </aside>
        </div>
    </body>
</html>
