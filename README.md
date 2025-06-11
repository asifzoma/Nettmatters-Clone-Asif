# Netmatters Clone - Asif
A clone of the Netmatters website created as part of an assessment project.

## Description
This project is a responsive clone of the Netmatters website, built using PHP, MySQL, HTML, SCSS, and JavaScript. It demonstrates modern web development practices and includes features such as:
- Responsive design
- Dynamic content management
- Contact form functionality
- Database integration
- SCSS compilation
- Modern JavaScript implementations

## Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Node.js and npm (for SCSS compilation)
- Web server (Apache/Nginx)

## Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/yourusername/Nettmatters-Clone-Asif.git
   cd Nettmatters-Clone-Asif
   ```

2. **Environment Setup**
   - Copy the example environment file:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file with your local configuration:
     - Database credentials
     - SMTP settings for email functionality
     - Other environment-specific variables

3. **Database Setup**
   - Create a new MySQL database
   - Import the database schema (if provided)
   - Update the database connection details in your `.env` file

4. **Install Dependencies**
   - If using npm for SCSS:
     ```bash
     npm install
     ```

5. **Configure Web Server**
   - Point your web server to the project's root directory
   - Ensure the `.htaccess` file is properly configured
   - Set appropriate permissions for file uploads and cache directories

## Project Structure
├── assets/ # Static assets
├── components/ # Reusable PHP components
├── config/ # Configuration files
├── css/ # Compiled CSS files
├── includes/ # PHP includes
├── js/ # JavaScript files
├── scss/ # SCSS source files
├── sections/ # Page sections
└── public/ # Publicly accessible files

## Development
- SCSS files are located in the `scss/` directory
- Compile SCSS to CSS using your preferred method
- PHP components are modular and located in the `components/` directory
- JavaScript files are in the `js/` directory

## Environment Variables
The following environment variables need to be set in your `.env` file:

```env
DB_HOST=localhost
DB_NAME=database_name
DB_USER=database_user
DB_PASS=database_password
ENVIRONMENT=development
SMTP_HOST=smtp.example.com
SMTP_PORT=587
SMTP_USERNAME=example@email.com
SMTP_PASSWORD=smtp_password
```

## Features
- Responsive navigation
- Dynamic content loading
- Contact form with email functionality
- Database-driven content
- Mobile-first design approach

## Best Practices
- Keep the `.env` file private and never commit it to version control
- Regularly update dependencies
- Follow PHP PSR standards
- Maintain clean and documented code
- Use prepared statements for database queries
- Implement proper error handling

## Contributing
This is an assessment project, but suggestions for improvements are welcome.

## License
This project is created for educational purposes as part of an assessment.