<?php
require 'functions.php';
$posts = getAllPosts();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web3 PHP Blog</title>
</head>
<body style="font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, sans-serif; max-width: 900px; margin: 0 auto; padding: 30px 20px; line-height: 1.6; color: #e5e7eb; background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); background-attachment: fixed;">

<header style="background: linear-gradient(130deg, rgba(79, 70, 229, 0.8) 0%, rgba(92, 124, 250, 0.9) 100%); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); padding: 28px; border-radius: 16px; margin-bottom: 30px; box-shadow: 0 10px 25px rgba(79, 70, 229, 0.2), inset 0 1px 1px rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.1);">
    <h1 style="margin: 0; font-size: 2.5em; font-weight: 700; background: linear-gradient(to right, #fff, #cbd5e1); -webkit-background-clip: text; background-clip: text; color: transparent; text-shadow: 0 0 20px rgba(255, 255, 255, 0.2);">Web3 PHP Blog</h1>
    <p style="margin: 5px 0 0; opacity: 0.9; font-weight: 300; text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);">Decentralized thoughts for a connected world</p>
</header>

<a href="add_post.php" style="display: inline-block; background: linear-gradient(90deg, #10b981 0%, #059669 100%); color: white; padding: 12px 20px; text-decoration: none; border-radius: 12px; font-weight: bold; margin-bottom: 25px; transition: all 0.3s; border: 1px solid rgba(255, 255, 255, 0.1); box-shadow: 0 4px 12px rgba(16, 185, 129, 0.2); text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);">+ Create New Post</a>

<div class="posts" style="background: rgba(30, 41, 59, 0.7); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); padding: 5px; border: 1px solid rgba(255, 255, 255, 0.05);">
    <?php foreach ($posts as $index => $post): ?>
        <article style="margin: 15px; padding: 20px; background: linear-gradient(145deg, rgba(51, 65, 85, 0.4) 0%, rgba(30, 41, 59, 0.2) 100%); border-radius: 12px; backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); border: 1px solid rgba(255, 255, 255, 0.05); transition: transform 0.3s, box-shadow 0.3s; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);" onmouseover="this.style.transform='translateY(-5px)';this.style.boxShadow='0 10px 25px rgba(79, 70, 229, 0.15)';" onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 4px 15px rgba(0, 0, 0, 0.1)';">
            <h2 style="color: #f8fafc; margin-top: 0; font-size: 1.8em; letter-spacing: -0.02em; text-shadow: 0 0 10px rgba(255, 255, 255, 0.1);"><?= htmlspecialchars($post['title']) ?></h2>
            <p style="margin: 15px 0; font-size: 1.05em; color: #cbd5e1; line-height: 1.7;"><?= htmlspecialchars(substr($post['content'], 0, 100)) ?>...</p>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
                <div style="display: flex; align-items: center;">
                    <div style="width: 36px; height: 36px; border-radius: 50%; background: linear-gradient(45deg, #4f46e5, #6366f1); display: flex; align-items: center; justify-content: center; margin-right: 10px; box-shadow: 0 0 10px rgba(99, 102, 241, 0.3);">
                        <span style="color: white; font-weight: bold; font-size: 14px;"><?= strtoupper(substr($post['title'], 0, 1)) ?></span>
                    </div>
                    <small style="color: #94a3b8; font-style: italic;"><?= $post['date'] ?></small>
                </div>
                <a href="post.php?id=<?= $index ?>" style="color: #818cf8; text-decoration: none; font-weight: 600; padding: 8px 16px; border-radius: 8px; background: rgba(79, 70, 229, 0.1); border: 1px solid rgba(99, 102, 241, 0.2); transition: all 0.3s;">Read more &rarr;</a>
            </div>
        </article>
    <?php endforeach; ?>

    <?php if (empty($posts)): ?>
        <div style="text-align: center; color: #94a3b8; padding: 40px 20px;">
            <div style="font-size: 48px; margin-bottom: 20px; opacity: 0.6;">📝</div>
            <p style="font-size: 1.2em; margin-bottom: 5px;">No posts found</p>
            <p style="opacity: 0.7;">Be the first to create content</p>
        </div>
    <?php endif; ?>
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
    // Add hover effects to links
    document.querySelectorAll('a').forEach(link => {
        if (!link.hasAttribute('onmouseover')) {
            link.addEventListener('mouseover', () => {
                link.style.opacity = '0.85';
                link.style.transform = 'translateY(-2px)';
            });
            link.addEventListener('mouseout', () => {
                link.style.opacity = '1';
                link.style.transform = 'translateY(0)';
            });
        }
    });
</script>
</body>
</html>