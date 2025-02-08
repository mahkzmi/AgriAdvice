# Agriculture Advice Web Application

This is a simple online consultation platform for agriculture advice. Users can submit their questions, and the system provides automated responses while storing the data in a database for future reference.

---

## Features

- ✅ Users can submit agriculture-related questions
- ✅ Automated responses based on predefined data
- ✅ Stores user queries and responses in a database
- ✅ Displays previously asked questions and answers
- ✅ Sends email notifications to the admin for new questions
- ✅ Built with PHP, MySQL, Bootstrap 5

---

## Installation Guide

### Prerequisites

Before setting up the project, ensure you have the following installed:

- PHP 7.4 or later
- MySQL Database
- Apache Server (or XAMPP/LAMP/WAMP)
- Composer (Optional for dependency management)

### Step 1: Clone the Repository

```bash
 git clone https://github.com/YOUR_GITHUB_USERNAME/agriculture-advice.git
 cd agriculture-advice
```

### Step 2: Set Up Database

1. Create a new database in MySQL:
```sql
CREATE DATABASE agriculture_advice;
```
2. Import the provided SQL file:
```bash
mysql -u root -p agriculture_advice < database.sql
```
3. Update the database connection settings in `consultant.php`:
```php
$conn = new mysqli("localhost", "root", "", "agriculture_advice");
```
Modify `root` and password accordingly.

### Step 3: Start the Server

If using XAMPP/WAMP, place the project in `htdocs` or `www` folder, then start Apache & MySQL. Otherwise, use PHP’s built-in server:

```bash
php -S localhost:8000
```

Now visit [http://localhost:8000](http://localhost:8000) in your browser.

---

## Folder Structure

```
📂 agriculture-advice
├── 📄 index.php         # Main homepage
├── 📄 consultant.php    # Handles form submission & database operations
├── 📂 assets            # Stylesheets & scripts
├── 📄 database.sql      # Database schema
├── 📄 README.md         # Documentation
├── 📄 INSTALLATION.md   # Installation guide
└── 📄 LICENSE           # License information
```

---

## Usage

1. Navigate to the homepage and enter your agriculture-related question.
2. Submit the form to receive an automated response.
3. View previously asked questions and responses.
4. The admin receives an email notification when a new question is submitted.

---

## Contributing

Pull requests are welcome. Please open an issue for major changes.

```bash
git checkout -b feature-branch
git commit -m "Add new feature"
git push origin feature-branch
```

---

## License

This project is licensed under the MIT License. See the `LICENSE` file for more details.

---

## Contact

For inquiries, reach out at: `mah.kzmi21@gmail.com`

