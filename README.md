# Web3 PHP Blog 🚀

A modern, Web3-themed blog application built with PHP featuring glassmorphism UI design and smooth animations. This lightweight blog system uses JSON file storage and provides a beautiful, responsive interface for creating and reading blog posts.

## ✨ Features

- **Modern Web3 Design**: Glassmorphism effects with gradient backgrounds and smooth animations
- **Responsive Layout**: Works perfectly on desktop and mobile devices
- **Easy Post Management**: Create, view, and manage blog posts with a clean interface
- **JSON Storage**: Lightweight file-based storage system using JSON
- **Session Management**: Track authors and post statistics
- **Rich Text Support**: Basic markdown-like formatting support
- **Interactive Elements**: Hover effects, reaction buttons, and smooth transitions
- **No Database Required**: Simple JSON file storage system

## 🛠️ Technology Stack

- **Backend**: PHP 7.4+
- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Storage**: JSON file system
- **Styling**: Inline CSS with glassmorphism effects
- **Icons**: SVG icons and emoji

## 📋 Requirements

- PHP 7.4 or higher
- Web server (Apache, Nginx, or PHP built-in server)
- Write permissions for the `data` directory

## 🚀 Installation & Setup

1. **Clone or download the project**
   ```bash
   git clone <repository-url>
   cd simple_blog
   ```

2. **Set up permissions**
   ```bash
   chmod 755 data/
   chmod 644 data/posts.json
   ```

3. **Start the application**
   
   **Option A: Using PHP built-in server**
   ```bash
   php -S localhost:8000
   ```
   
   **Option B: Using Apache/Nginx**
   - Place the project in your web server's document root
   - Access via `http://localhost/simple_blog`

4. **Access the application**
   - Open your browser and navigate to `http://localhost:8000`
   - Start creating your first blog post!

## 📁 Project Structure

```
simple_blog/
├── data/
│   └── posts.json          # JSON file storing all blog posts
├── .idea/                  # IDE configuration (optional)
├── index.php               # Homepage - displays all blog posts
├── add_post.php            # Form for creating new posts
├── post.php                # Individual post view
├── save_post.php           # Handles post saving logic
├── functions.php           # Core PHP functions
├── index.css               # Additional styling (if any)
└── README.md              # This file
```

## 🎯 Usage

### Creating a New Post

1. Click the "**+ Create New Post**" button on the homepage
2. Fill in the post title and content
3. Click "**Publish Post**" to save
4. You'll be redirected to the homepage where your new post appears

### Viewing Posts

- All posts are displayed on the homepage with a preview
- Click "**Read more →**" to view the full post
- Each post shows the title, date, and content with rich formatting

### Post Features

- **Author tracking**: The system remembers authors using cookies
- **Session management**: Track post counts and user activity
- **Reaction buttons**: Like, fire, and 100 emoji reactions
- **Social features**: Share and bookmark buttons (UI ready)
- **Related tags**: Automatically generated based on post content

## 🔧 Configuration

### Adding Sample Posts

The system comes with sample posts in `data/posts.json`. You can:

1. **Edit existing posts**: Modify the JSON file directly
2. **Clear all posts**: Replace the JSON content with `[]`
3. **Backup posts**: Copy the `posts.json` file

### Customizing the Theme

The application uses inline CSS for easy customization:

- **Colors**: Modify the gradient values in the style attributes
- **Fonts**: Change the font-family in the body styles
- **Animations**: Adjust transition durations and effects
- **Layout**: Modify the max-width and padding values

## 📊 Data Structure

Posts are stored in JSON format with the following structure:

```json
{
  "title": "Post Title",
  "content": "Post content with support for basic formatting",
  "date": "YYYY-MM-DD"
}
```

## 🌟 Key Features Explained

### Glassmorphism Design
- Semi-transparent backgrounds with backdrop blur effects
- Gradient borders and subtle shadows
- Smooth hover animations and transitions

### Responsive Layout
- Mobile-first design approach
- Flexible grid system for post listings
- Adaptive typography and spacing

### User Experience
- Smooth page transitions
- Interactive button effects
- Visual feedback for user actions
- Clean, modern interface

## 🔒 Security Notes

- Input sanitization using `htmlspecialchars()`
- Basic XSS protection
- File permission management
- Session security with proper cookie handling

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📝 Future Enhancements

- [ ] Database integration (MySQL/PostgreSQL)
- [ ] User authentication and registration
- [ ] Comment system
- [ ] Post categories and tags
- [ ] Search functionality
- [ ] Admin panel
- [ ] Image upload support
- [ ] RSS feed generation
- [ ] SEO optimization

## 🐛 Troubleshooting

### Common Issues

1. **Permission Errors**
   - Ensure the `data` directory is writable
   - Check file permissions: `chmod 755 data/`

2. **Posts Not Saving**
   - Verify `posts.json` exists and is writable
   - Check PHP error logs for detailed messages

3. **Styling Issues**
   - Clear browser cache
   - Check for JavaScript errors in console

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 🙏 Acknowledgments

- Inspired by modern Web3 design principles
- Built with PHP best practices
- Designed for simplicity and ease of use

---

**Made with ❤️ for the Web3 community**

For questions or support, please open an issue on the repository.