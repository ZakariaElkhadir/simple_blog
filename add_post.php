<?php
$author = $_COOKIE['author'] ?? '';
session_start();
$_SESSION['post_count'] = $_SESSION['post_count'] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post | Web3 PHP Blog</title>
</head>
<body style="font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, sans-serif; max-width: 900px; margin: 0 auto; padding: 30px 20px; line-height: 1.6; color: #e5e7eb; background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); background-attachment: fixed;">

<header style="background: linear-gradient(130deg, rgba(79, 70, 229, 0.8) 0%, rgba(92, 124, 250, 0.9) 100%); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); padding: 28px; border-radius: 16px; margin-bottom: 30px; box-shadow: 0 10px 25px rgba(79, 70, 229, 0.2), inset 0 1px 1px rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.1);">
    <h1 style="margin: 0; font-size: 2.5em; font-weight: 700; background: linear-gradient(to right, #fff, #cbd5e1); -webkit-background-clip: text; background-clip: text; color: transparent; text-shadow: 0 0 20px rgba(255, 255, 255, 0.2);">Create New Post</h1>
    <p style="margin: 5px 0 0; opacity: 0.9; font-weight: 300; text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);">Share your thoughts on the blockchain</p>
</header>

<div style="background: rgba(30, 41, 59, 0.7); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); padding: 30px; border: 1px solid rgba(255, 255, 255, 0.05); margin-bottom: 25px;">
    <?php if ($author): ?>
        <div style="background: linear-gradient(to right, rgba(79, 70, 229, 0.1), rgba(99, 102, 241, 0.05)); border-left: 4px solid #818cf8; padding: 15px; margin-bottom: 25px; border-radius: 8px; display: flex; align-items: center;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: linear-gradient(45deg, #4f46e5, #6366f1); display: flex; align-items: center; justify-content: center; margin-right: 12px; box-shadow: 0 0 10px rgba(99, 102, 241, 0.3);">
                <span style="color: white; font-weight: bold; font-size: 14px;"><?= strtoupper(substr($author, 0, 1)) ?></span>
            </div>
            <p style="margin: 0; color: #cbd5e1;">Welcome back, <strong style="color: #f8fafc;"><?= htmlspecialchars($author) ?></strong>!</p>
        </div>
    <?php endif; ?>

    <form action="save_post.php" method="post" style="display: flex; flex-direction: column;">
        <div style="margin-bottom: 25px; position: relative;">
            <label for="title" style="display: block; margin-bottom: 10px; font-weight: 500; color: #f1f5f9; letter-spacing: 0.02em;">Title</label>
            <input type="text" id="title" name="title" required
                   style="width: 100%; padding: 14px; background: rgba(15, 23, 42, 0.5); color: #f8fafc; border: 1px solid rgba(99, 102, 241, 0.3); border-radius: 12px; font-size: 1em; box-sizing: border-box; transition: all 0.3s; outline: none; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.05);">
            <div class="focus-border" style="position: absolute; bottom: 0; left: 50%; width: 0; height: 2px; background: linear-gradient(90deg, #8b5cf6, #6366f1); transition: all 0.3s;"></div>
        </div>

        <div style="margin-bottom: 25px; position: relative;">
            <label for="content" style="display: block; margin-bottom: 10px; font-weight: 500; color: #f1f5f9; letter-spacing: 0.02em;">Content</label>
            <textarea id="content" name="content" rows="14" required
                      style="width: 100%; padding: 14px; background: rgba(15, 23, 42, 0.5); color: #f8fafc; border: 1px solid rgba(99, 102, 241, 0.3); border-radius: 12px; font-size: 1em; font-family: inherit; resize: vertical; box-sizing: border-box; transition: all 0.3s; outline: none; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.05); line-height: 1.7;"></textarea>
            <div class="focus-border" style="position: absolute; bottom: 0; left: 50%; width: 0; height: 2px; background: linear-gradient(90deg, #8b5cf6, #6366f1); transition: all 0.3s;"></div>
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 10px;">
            <button type="submit"
                    style="background: linear-gradient(90deg, #10b981 0%, #059669 100%); color: white; border: none; padding: 14px 28px; font-size: 1em; font-weight: 600; border-radius: 12px; cursor: pointer; transition: all 0.3s; box-shadow: 0 4px 12px rgba(16, 185, 129, 0.2); text-shadow: 0 0 10px rgba(255, 255, 255, 0.3); border: 1px solid rgba(255, 255, 255, 0.1);">
                Publish Post
            </button>
            <a href="index.php"
               style="color: #a5b4fc; text-decoration: none; font-weight: 500; padding: 12px 20px; border: 1px solid rgba(99, 102, 241, 0.3); border-radius: 12px; transition: all 0.3s; background: rgba(79, 70, 229, 0.1);">
                Cancel
            </a>
        </div>
    </form>
</div>

<div style="background: rgba(30, 41, 59, 0.3); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); border-radius: 12px; padding: 20px; margin-bottom: 30px; border: 1px solid rgba(255, 255, 255, 0.05);">
    <div style="display: flex; align-items: center; margin-bottom: 15px;">
        <div style="width: 24px; height: 24px; border-radius: 50%; background: linear-gradient(45deg, #8b5cf6, #7c3aed); margin-right: 10px; box-shadow: 0 0 10px rgba(124, 58, 237, 0.3);"></div>
        <h3 style="margin: 0; color: #f1f5f9; font-size: 1.2em; font-weight: 500;">Pro Tips</h3>
    </div>
    <ul style="margin: 0; padding-left: 20px; color: #cbd5e1;">
        <li style="margin-bottom: 8px;">Use markdown syntax for rich formatting</li>
        <li style="margin-bottom: 8px;">Add links with [text](url) format</li>
        <li>Include code blocks with ```language syntax</li>
    </ul>
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
    // Add focus effects to form fields
    document.querySelectorAll('input, textarea').forEach(element => {
        element.addEventListener('focus', () => {
            element.style.borderColor = '#8b5cf6';
            element.style.boxShadow = '0 0 15px rgba(139, 92, 246, 0.3)';
            element.parentNode.querySelector('.focus-border').style.width = '100%';
            element.parentNode.querySelector('.focus-border').style.left = '0';
        });
        element.addEventListener('blur', () => {
            element.style.borderColor = 'rgba(99, 102, 241, 0.3)';
            element.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.1), inset 0 1px 0 rgba(255, 255, 255, 0.05)';
            element.parentNode.querySelector('.focus-border').style.width = '0';
            element.parentNode.querySelector('.focus-border').style.left = '50%';
        });
    });

    // Add hover effects to buttons
    document.querySelector('button').addEventListener('mouseover', () => {
        document.querySelector('button').style.transform = 'translateY(-3px)';
        document.querySelector('button').style.boxShadow = '0 10px 20px rgba(16, 185, 129, 0.3)';
    });
    document.querySelector('button').addEventListener('mouseout', () => {
        document.querySelector('button').style.transform = 'translateY(0)';
        document.querySelector('button').style.boxShadow = '0 4px 12px rgba(16, 185, 129, 0.2)';
    });

    // Add hover effects to links
    document.querySelectorAll('a').forEach(link => {
        link.addEventListener('mouseover', () => {
            link.style.backgroundColor = 'rgba(79, 70, 229, 0.2)';
            link.style.transform = 'translateY(-2px)';
        });
        link.addEventListener('mouseout', () => {
            link.style.backgroundColor = 'rgba(79, 70, 229, 0.1)';
            link.style.transform = 'translateY(0)';
        });
    });
</script>
</body>
</html>