# ICNF 2024 - International Conference on Nitrogen Fixation

A modern, responsive website for the International Conference on Nitrogen Fixation 2024, hosted at Mohammed V University of Rabat, Morocco.

## 📅 Conference Details

- **Date**: September 9-13, 2024
- **Location**: Faculty of Science and Education, Mohammed V University of Rabat
- **Theme**: Nitrogen Fixation - Unveiling Diverse Frontiers

## 🚀 Features

### Main Website
- **Responsive Design**: Mobile-friendly interface
- **Interactive Registration**: Real-time pricing calculator
- **Conference Information**: About, guidelines, location details
- **Contact System**: Contact form with location information
- **Admin Panel**: Secure admin dashboard for management

### Registration System
- **Two Pricing Tiers**:
  - Early Bird (Before May 10, 2024)
  - Regular (From June 15, 2024)
- **Multiple Ticket Types**:
  - Regular Participants: €450/€550
  - Students: €300/€400
  - Accompanying Persons: €200
  - Social Event: €70
- **Interactive Checkout**: Real-time total calculation

### Guidelines Pages
- **Oral Presentations**: PowerPoint requirements and presentation guidelines
- **Poster Guidelines**: Size specifications and presentation schedules

## 🛠️ Technology Stack

### Frontend
- HTML5
- CSS3 (Custom responsive design)
- JavaScript (ES6+)
- Google Fonts (Roboto)

### Backend
- PHP 8.2+
- MySQL Database
- Session Management

### Design
- Primary Color: #13A4C7 (Blue)
- Responsive Grid System
- Modern UI/UX Principles

## 📁 Project Structure

```
icnf/
├── index.php              # Main landing page
├── checkout.php           # Registration checkout
├── admin.php              # Admin dashboard
├── login.php              # Admin login
├── orale.php              # Oral presentation guidelines
├── poster.php             # Poster guidelines
├── script.js              # Main JavaScript functionality
├── checkout.js            # Checkout system
├── payment.js             # Payment processing
├── send_email.php         # Email functionality
├── db/
│   ├── connect.php        # Database connection
│   ├── icnf.sql           # Database schema
│   └── checkout.html      # Checkout template
├── style/
│   ├── style.css          # Main stylesheet
│   ├── admin.css          # Admin panel styles
│   └── checkout.css       # Checkout page styles
├── assets/
│   ├── icons/             # SVG icons
│   ├── images/            # Conference images
│   └── logo_INCF.PNG      # Conference logo
├── scripts/
│   ├── login_script.php   # Login processing
│   └── logout.php         # Logout functionality
└── shadows/               # Design assets
```

## 🗄️ Database Schema

### Admin Table
```sql
CREATE TABLE admin (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(120) UNIQUE NOT NULL,
  password VARCHAR(120) NOT NULL
);
```

### Order Table
```sql
CREATE TABLE `order` (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title TEXT NOT NULL,
  ordred_by VARCHAR(120) NOT NULL,
  screen_one TEXT NOT NULL,
  screen_two INT NOT NULL,
  at DATE NOT NULL
);
```

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone [repository-url]
   cd icnf
   ```

2. **Set up the database**
   - Create a MySQL database named `icnf`
   - Import `db/icnf.sql` to create tables
   - Update database credentials in `db/connect.php`

3. **Configure web server**
   - Point your web server to the project directory
   - Ensure PHP 8.2+ is installed
   - Enable MySQL extension

4. **Set up admin access**
   - Default admin credentials are in the database
   - Access admin panel at `/login.php`

## 📱 Responsive Design

The website is fully responsive with breakpoints at:
- **Desktop**: 900px+
- **Mobile**: < 900px

## 🎨 Design Features

- **Sticky Navigation**: Header stays at top during scroll
- **Smooth Scrolling**: Enhanced user experience
- **Interactive Elements**: Toggle switches, dropdowns
- **Modern Typography**: Clean, readable fonts
- **Professional Color Scheme**: Blue-based design

## 🔧 Configuration

### Database Connection
Edit `db/connect.php`:
```php
$db_host = "localhost";
$db_name = "icnf";
$db_username = "your_username";
$db_password = "your_password";
```

### Email Configuration
Update `send_email.php` with your email settings.

## 📋 TODO Items

- [ ] Card container font and line adjustment
- [ ] Ticket counter functionality
- [ ] Carts positioning, background and colors

## 🔒 Security Features

- Session-based authentication
- Form validation
- SQL injection protection
- XSS prevention

## 📞 Contact Information

- **Location**: Faculty of Sciences Rabat, 4 Avenue Ibn Batouta BP 1014 RP, RABAT
- **Email**: exemple@gmail.com

## 📄 License

© All rights reserved 2024 - ICNF Conference

## 🤝 Contributing

This is a conference-specific project. For modifications, please contact the development team.

---

**Built with ❤️ for the International Conference on Nitrogen Fixation 2024** 
