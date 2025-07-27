# Leçon Particulière - Private Tutoring Platform

A complete web application for connecting students with private tutors. Built with PHP, MySQL, and Bootstrap.

## Features

### For Students
- **Registration & Login**: Create an account as a student
- **Browse Courses**: View all available courses with teacher information
- **Reserve Courses**: Book time slots for courses
- **Track Reservations**: View reservation status (on hold, confirmed, canceled)
- **Rate & Review**: Add star ratings and comments for completed courses
- **Profile Management**: Edit personal information and change password

### For Teachers
- **Registration & Login**: Create an account as a teacher
- **Course Management**: Create, edit, and manage courses
- **Reservation Management**: Approve or reject student reservations
- **View Reviews**: See student ratings and feedback for courses
- **Profile Management**: Edit personal information and change password

## Database Setup

1. Create a MySQL database named `lecon_particuliere`
2. Import the schema from `config/schema.sql`
3. Update database credentials in `config/database.php` if needed

```sql
-- Default database configuration
$host = 'localhost';
$dbname = 'lecon_particuliere';
$username = 'root';
$password = '';
```

## File Structure

```
lecon-particuliere/
├── config/
│   ├── database.php      # Database connection and helper functions
│   └── schema.sql        # Database schema
├── css/
│   └── style.css         # Custom Bootstrap styling
├── includes/
│   ├── header.php        # Navigation and common header
│   └── footer.php        # Footer and scripts
├── js/
│   └── script.js         # JavaScript interactions
├── pages/
│   ├── login.php         # User authentication
│   ├── register.php      # User registration
│   ├── logout.php        # Session destruction
│   ├── courses.php       # Course browsing/management
│   ├── add-course.php    # Create new courses (teachers)
│   ├── edit-course.php   # Edit existing courses (teachers)
│   ├── reserve-course.php # Book courses (students)
│   ├── my-reservations.php # View student reservations
│   ├── manage-reservations.php # Manage reservations (teachers)
│   ├── add-opinion.php   # Add reviews (students)
│   ├── edit-opinion.php  # Edit reviews (students)
│   ├── course-opinions.php # View course reviews (teachers)
│   └── profile.php       # Profile management
├── uploads/              # File uploads (future feature)
├── index.php             # Homepage
└── README.md            # This file
```

## Installation

1. **Clone or download** the project to your web server directory
2. **Set up the database**:
   - Create MySQL database: `lecon_particuliere`
   - Import schema: `config/schema.sql`
   - Update credentials in `config/database.php`
3. **Configure web server** to serve PHP files
4. **Access the application** through your web browser

## Usage

### Getting Started
1. Visit the homepage
2. Register as either a student or teacher
3. Log in with your credentials

### For Students
1. Browse available courses
2. Reserve courses by selecting date/time
3. Wait for teacher confirmation
4. After completed courses, add ratings and reviews
5. Manage your profile and view reservation history

### For Teachers
1. Create courses with title, description, category, and price
2. Manage student reservations (approve/reject)
3. View student reviews and ratings
4. Edit course details and profile information

## Security Features

- **Password Hashing**: All passwords are hashed using PHP's `password_hash()`
- **SQL Injection Prevention**: Prepared statements for all database queries
- **XSS Protection**: HTML escaping for all user input
- **Session Management**: Secure session handling
- **Role-based Access**: Different functionality for students vs teachers

## Technologies Used

- **Backend**: PHP 7.4+
- **Database**: MySQL 5.7+
- **Frontend**: Bootstrap 5.1.3, Font Awesome 6.0.0
- **JavaScript**: Vanilla JS for interactions
- **CSS**: Custom styling with CSS variables

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Future Enhancements

- File upload for course materials
- Real-time notifications
- Payment integration
- Advanced search and filtering
- Mobile app development
- Email notifications
- Calendar integration

## Support

For issues or questions, please check the code comments or create an issue in the repository.

## License

This project is open source and available under the MIT License. # TutorLink
