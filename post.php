<?php
require 'functions.php';
$id = $_GET['id'] ?? 0;
$post = getPost($id);
if (!$post) {
    // Not found page with Web3 styling
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Post Not Found | Web3 PHP Blog</title>
    </head>
    <body style="font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, sans-serif; max-width: 900px; margin: 0 auto; padding: 30px 20px; line-height: 1.6; color: #e5e7eb; background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); background-attachment: fixed;">
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 70vh;">
        <div style="font-size: 72px; margin-bottom: 20px;">🔍</div>
        <h1 style="font-size: 2.5em; margin-bottom: 10px; background: linear-gradient(to right, #f8fafc, #cbd5e1); -webkit-background-clip: text; background-clip: text; color: transparent; text-align: center;">Post Not Found</h1>
        <p style="font-size: 1.2em; margin-bottom: 30px; color: #94a3b8; text-align: center;">Sorry, the post you're looking for doesn't exist.</p>
        <a href="index.php" style="display: inline-block; background: linear-gradient(90deg, #4f46e5 0%, #6366f1 100%); color: white; padding: 12px 25px; text-decoration: none; border-radius: 12px; font-weight: 600; transition: all 0.3s; border: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);">
                <span style="display: flex; align-items: center;">
                    <span style="margin-right: 8px;">←</span>
                    Return to Home
                </span>
        </a>
    </div>
    </body>
    </html>
    <?php
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($post['title']) ?> | Web3 PHP Blog</title>
</head>
<body style="font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, sans-serif; max-width: 900px; margin: 0 auto; padding: 30px 20px; line-height: 1.6; color: #e5e7eb; background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); background-attachment: fixed;">

<header style="background: linear-gradient(130deg, rgba(79, 70, 229, 0.8) 0%, rgba(92, 124, 250, 0.9) 100%); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); padding: 28px; border-radius: 16px; margin-bottom: 30px; box-shadow: 0 10px 25px rgba(79, 70, 229, 0.2), inset 0 1px 1px rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.1); position: relative; overflow: hidden;">
    <div style="position: absolute; top: -50px; right: -50px; width: 150px; height: 150px; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%); border-radius: 50%;"></div>
    <h1 style="margin: 0; font-size: 2.5em; font-weight: 700; background: linear-gradient(to right, #fff, #cbd5e1); -webkit-background-clip: text; background-clip: text; color: transparent; text-shadow: 0 0 20px rgba(255, 255, 255, 0.2); line-height: 1.3;"><?= htmlspecialchars($post['title']) ?></h1>
    <div style="display: flex; align-items: center; margin-top: 15px;">
        <div style="width: 36px; height: 36px; border-radius: 50%; background: linear-gradient(45deg, #4f46e5, #6366f1); display: flex; align-items: center; justify-content: center; margin-right: 10px; box-shadow: 0 0 10px rgba(99, 102, 241, 0.3);">
            <span style="color: white; font-weight: bold; font-size: 14px;"><?= strtoupper(substr($post['title'], 0, 1)) ?></span>
        </div>
        <span style="color: #cbd5e1; font-size: 0.95em;"><?= $post['date'] ?></span>
    </div>
</header>

<div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
    <a href="index.php" style="display: inline-flex; align-items: center; color: #a5b4fc; text-decoration: none; font-weight: 500; padding: 10px 16px; border: 1px solid rgba(99, 102, 241, 0.3); border-radius: 12px; transition: all 0.3s; background: rgba(79, 70, 229, 0.1);">
        <span style="margin-right: 8px;">←</span> Back to Posts
    </a>

    <div style="display: flex; gap: 10px;">
        <button onclick="sharePost()" style="display: inline-flex; align-items: center; background: rgba(30, 41, 59, 0.7); color: #a5b4fc; border: 1px solid rgba(99, 102, 241, 0.3); padding: 10px; border-radius: 12px; cursor: pointer; transition: all 0.3s;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
        </button>
        <button onclick="bookmarkPost()" style="display: inline-flex; align-items: center; background: rgba(30, 41, 59, 0.7); color: #a5b4fc; border: 1px solid rgba(99, 102, 241, 0.3); padding: 10px; border-radius: 12px; cursor: pointer; transition: all 0.3s;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>
        </button>
    </div>
</div>

<main style="background: rgba(30, 41, 59, 0.7); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); padding: 40px; border: 1px solid rgba(255, 255, 255, 0.05); margin-bottom: 30px; position: relative;">
    <div style="position: absolute; top: 20px; right: 20px; width: 70px; height: 70px; background: linear-gradient(45deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.05)); border-radius: 50%; filter: blur(15px); z-index: 0;"></div>
    <div style="position: absolute; bottom: 30px; left: 40px; width: 100px; height: 100px; background: linear-gradient(45deg, rgba(16, 185, 129, 0.1), rgba(5, 150, 105, 0.05)); border-radius: 50%; filter: blur(25px); z-index: 0;"></div>

    <article style="position: relative; z-index: 1; font-size: 1.1em; line-height: 1.8; color: #f1f5f9;">
        <?php
        // Process content for markdown-like formatting
        $content = htmlspecialchars($post['content']);
        // Convert ** text ** to bold
        $content = preg_replace('/\*\*(.*?)\*\*/', '<strong style="color: #f8fafc;">$1</strong>', $content);
        // Convert * text * to italic
        $content = preg_replace('/\*(.*?)\*/', '<em>$1</em>', $content);
        // Convert URLs to links
        $content = preg_replace('/(https?:\/\/[^\s]+)/', '<a href="$1" style="color: #818cf8; text-decoration: none; border-bottom: 1px dashed #818cf8;">$1</a>', $content);
        // Add paragraph breaks
        $content = nl2br($content);
        echo $content;
        ?>
    </article>

    <div style="margin-top: 40px; padding-top: 20px; border-top: 1px solid rgba(255, 255, 255, 0.05);">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; gap: 15px;">
                <button class="reaction-btn" style="background: rgba(30, 41, 59, 0.5); border: 1px solid rgba(255, 255, 255, 0.05); color: #cbd5e1; border-radius: 20px; padding: 8px 16px; display: flex; align-items: center; gap: 8px; cursor: pointer; transition: all 0.3s;">
                    <span>👍</span> <span class="count">0</span>
                </button>
                <button class="reaction-btn" style="background: rgba(30, 41, 59, 0.5); border: 1px solid rgba(255, 255, 255, 0.05); color: #cbd5e1; border-radius: 20px; padding: 8px 16px; display: flex; align-items: center; gap: 8px; cursor: pointer; transition: all 0.3s;">
                    <span>🔥</span> <span class="count">0</span>
                </button>
                <button class="reaction-btn" style="background: rgba(30, 41, 59, 0.5); border: 1px solid rgba(255, 255, 255, 0.05); color: #cbd5e1; border-radius: 20px; padding: 8px 16px; display: flex; align-items: center; gap: 8px; cursor: pointer; transition: all 0.3s;">
                    <span>💯</span> <span class="count">0</span>
                </button>
            </div>

            <div style="position: relative; display: inline-block;">
                <div style="position: absolute; top: -8px; right: -8px; background: linear-gradient(45deg, #10b981, #059669); color: white; width: 20px; height: 20px; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 12px; font-weight: bold;">3</div>
                <div style="background: rgba(16, 185, 129, 0.1); border: 1px solid rgba(16, 185, 129, 0.3); color: #10b981; border-radius: 20px; padding: 8px 16px; display: flex; align-items: center; gap: 8px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    <span>Energy</span>
                </div>
            </div>
        </div>
    </div>
</main>

<div style="background: rgba(30, 41, 59, 0.3); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); border-radius: 16px; padding: 25px; margin-bottom: 30px; border: 1px solid rgba(255, 255, 255, 0.05);">
    <h3 style="margin-top: 0; color: #f1f5f9; font-size: 1.3em; font-weight: 600; margin-bottom: 15px;">Related Topics</h3>
    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
        <?php
        // Extract some keywords from the title for tags
        $words = explode(' ', $post['title']);
        $tags = array_slice($words, 0, min(3, count($words)));

        // Add some predefined tags
        $predefinedTags = ['Blockchain', 'Web3', 'Crypto', 'DeFi', 'NFT'];
        $allTags = array_merge($tags, array_slice($predefinedTags, 0, 3));

        foreach($allTags as $tag):
            if(strlen($tag) > 3): // Only show tags with more than 3 characters
                ?>
                <a href="#" style="background: rgba(79, 70, 229, 0.1); color: #a5b4fc; border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 20px; padding: 6px 14px; text-decoration: none; font-size: 0.9em; transition: all 0.3s;">
                    #<?= htmlspecialchars($tag) ?>
                </a>
            <?php
            endif;
        endforeach;
        ?>
    </div>
</div>

<footer style="text-align: center; margin-top: 40px; color: #94a3b8; padding: 20px; font-size: 0.9em; background: rgba(15, 23, 42, 0.3); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); border-radius: 16px; border-top: 1px solid rgba(255, 255, 255, 0.05);">
    <div style="margin-bottom: 10px;">
        <div style="display: inline-block; height: 30px; width: 30px; background: linear-gradient(45deg, #4f46e5, #6366f1); border-radius: 50%; margin: 0 5px;"></div>
        <div style="display: inline-block; height: 30px; width: 30px; background: linear-gradient(45deg, #10b981, #059669); border-radius: 50%; margin: 0 5px;"></div>
        <div style="display: inline-block; height: 30px; width: 30px; background: linear-gradient(45deg, #8b5cf6, #7c3aed); border-radius: 50%; margin: 0 5px;"></div>
    </div>
    &copy; <?= date('Y') ?> Web3 PHP Blog. All rights reserved.
</footer>

<script>
    // Reaction button effects
    document.querySelectorAll('.reaction-btn').forEach(btn => {
        btn.addEventListener('mouseover', () => {
            btn.style.background = 'rgba(79, 70, 229, 0.2)';
            btn.style.transform = 'translateY(-2px)';
            btn.style.boxShadow = '0 4px 12px rgba(79, 70, 229, 0.2)';
        });
        btn.addEventListener('mouseout', () => {
            btn.style.background = 'rgba(30, 41, 59, 0.5)';
            btn.style.transform = 'translateY(0)';
            btn.style.boxShadow = 'none';
        });
        btn.addEventListener('click', () => {
            const countEl = btn.querySelector('.count');
            countEl.textContent = parseInt(countEl.textContent) + 1;

            // Create flying emoji effect
            const emoji = document.createElement('span');
            emoji.textContent = btn.querySelector('span').textContent;
            emoji.style.position = 'absolute';
            emoji.style.left = `${btn.offsetLeft + btn.offsetWidth/2}px`;
            emoji.style.top = `${btn.offsetTop}px`;
            emoji.style.fontSize = '20px';
            emoji.style.pointerEvents = 'none';
            emoji.style.transition = 'all 0.7s ease-out';
            emoji.style.opacity = '1';
            document.body.appendChild(emoji);

            setTimeout(() => {
                emoji.style.transform = 'translateY(-50px)';
                emoji.style.opacity = '0';
            }, 50);

            setTimeout(() => {
                document.body.removeChild(emoji);
            }, 700);
        });
    });

    // Button hover effects
    document.querySelectorAll('a, button').forEach(el => {
        if (!el.classList.contains('reaction-btn')) {
            el.addEventListener('mouseover', () => {
                el.style.transform = 'translateY(-2px)';
                el.style.boxShadow = '0 5px 15px rgba(79, 70, 229, 0.2)';
            });
            el.addEventListener('mouseout', () => {
                el.style.transform = 'translateY(0)';
                el.style.boxShadow = 'none';
            });
        }
    });

    // Simulated share functionality
    function sharePost() {
        alert('Sharing functionality would be implemented here');
    }

    // Simulated bookmark functionality
    function bookmarkPost() {
        alert('Bookmark functionality would be implemented here');
    }
</script>
</body>
</html>